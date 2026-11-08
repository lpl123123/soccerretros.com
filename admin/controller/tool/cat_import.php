<?php
require_once(DIR_SYSTEM . 'storage/vendor/SimpleXLSX.php');
use Shuchkin\SimpleXLSX;

class ControllerToolCatImport extends Controller {
    public function index() {
        $this->document->setTitle("分类批量更新 (XLSX)");
        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('tool/cat_import', $data));
    }

    public function upload() {
        $json = array();
        if (!empty($this->request->files['file']['name'])) {
            $file = DIR_UPLOAD . basename($this->request->files['file']['name']) . '.' . token(32);
            move_uploaded_file($this->request->files['file']['tmp_name'], $file);

            if ($xlsx = SimpleXLSX::parse($file)) {
                $dim = $xlsx->dimension();
                $json['total'] = $dim[1] - 1; // 减去表头
                $json['file_path'] = $file;
                $json['success'] = "分类表格解析成功！";
            } else {
                $json['error'] = SimpleXLSX::parseError();
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function importRow() {
        $json = array();
        $file_path = $this->request->post['file_path'];
        $row_index = (int)$this->request->post['row_index'];
        $lang_id = 1; // 强制使用语言 ID 1

        if ($xlsx = SimpleXLSX::parse($file_path)) {
            $rows = $xlsx->rows();
            $row = isset($rows[$row_index + 1]) ? $rows[$row_index + 1] : null;

            if ($row && !empty($row[0])) { // row[0] 是 Category ID
                $category_id = (int)$row[0];
                
                // 检查分类是否存在
                $check = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "category WHERE category_id = '" . $category_id . "'");
                
                if ($check->num_rows) {
                    $this->updateCategory($category_id, $row, $lang_id);
                    $json['success'] = true;
                    $json['msg'] = "ID: " . $category_id . " [" . $row[3] . "] 更新成功";
                } else {
                    $json['error'] = "跳过：分类 ID " . $category_id . " 在数据库中不存在";
                }
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function updateCategory($category_id, $row, $lang_id) {
        /**
         * 新的列索引映射: 
         * 0:ID, 1:ParentID, 2:ParentName, 3:Name, 
         * 4:Description (新增), 
         * 5:Top, 6:Sort, 7:Status, 8:MetaTitle, 9:MetaDesc, 10:MetaKey, 11:SEO
         */
        
        $name = trim($row[3]);
        $description = isset($row[4]) ? $row[4] : ''; // 获取描述
        $parent_name = trim($row[2]);
        $top = (strtolower($row[5]) == 'yes' || $row[5] == '1') ? 1 : 0;
        $sort_order = (int)$row[6];
        $status = (strtolower($row[7]) == 'enabled' || $row[7] == '1') ? 1 : 0;
        $seo_url = trim($row[11]);

        // 1. 处理父分类 ID (逻辑不变)
        $parent_id = 0;
        if (!empty($parent_name) && $parent_name != 'None') {
            $p_query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "category_description WHERE name = '" . $this->db->escape($parent_name) . "' AND language_id = '" . $lang_id . "' LIMIT 1");
            if ($p_query->num_rows) { $parent_id = $p_query->row['category_id']; }
        }

        // 2. 更新基础表 (注意索引位移)
        $this->db->query("UPDATE " . DB_PREFIX . "category SET parent_id = '" . (int)$parent_id . "', `top` = '" . (int)$top . "', sort_order = '" . (int)$sort_order . "', status = '" . (int)$status . "', date_modified = NOW() WHERE category_id = '" . (int)$category_id . "'");

        // 3. 更新描述表 (增加 description 字段更新)
        $this->db->query("UPDATE " . DB_PREFIX . "category_description SET 
            name = '" . $this->db->escape($name) . "', 
            description = '" . $this->db->escape($description) . "', 
            meta_title = '" . $this->db->escape($row[8]) . "', 
            meta_description = '" . $this->db->escape($row[9]) . "', 
            meta_keyword = '" . $this->db->escape($row[10]) . "' 
            WHERE category_id = '" . (int)$category_id . "' AND language_id = '" . (int)$lang_id . "'");

        // 4. 更新 SEO URL (注意索引位移)
        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=" . (int)$category_id . "'");
        if (!empty($seo_url)) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = 0, language_id = '" . (int)$lang_id . "', query = 'category_id=" . (int)$category_id . "', keyword = '" . $this->db->escape($seo_url) . "'");
        }

        // 5. 更新分类路径 (保持不变)
        // ... (省略重复的 Path 更新代码) ...
    }
}