<?php
require_once(DIR_SYSTEM . 'storage/vendor/SimpleXLSX.php');
use Shuchkin\SimpleXLSX;

class ControllerToolProductUpdate extends Controller {
    public function index() {
        $this->document->setTitle("产品批量更新 (XLSX)");
        $data['user_token'] = $this->session->data['user_token'];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('tool/product_update', $data));
    }

    public function upload() {
        $json = array();
        if (!empty($this->request->files['file']['name'])) {
            $file = DIR_UPLOAD . basename($this->request->files['file']['name']) . '.' . token(32);
            move_uploaded_file($this->request->files['file']['tmp_name'], $file);
            if ($xlsx = SimpleXLSX::parse($file)) {
                $dim = $xlsx->dimension();
                $json['total'] = $dim[1] - 1;
                $json['file_path'] = $file;
                $json['success'] = "产品表格解析成功！";
            } else {
                $json['error'] = SimpleXLSX::parseError();
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function updateRow() {
        $json = array();
        $file_path = $this->request->post['file_path'];
        $row_index = (int)$this->request->post['row_index'];
        $lang_id = 1; // 强制使用语言 ID 1

        if ($xlsx = SimpleXLSX::parse($file_path)) {
            $rows = $xlsx->rows();
            $row = isset($rows[$row_index + 1]) ? $rows[$row_index + 1] : null;

            if ($row && !empty($row[0])) { // row[0] 是 SKU (Id)
                $sku = trim((string)$row[0]);
                
                // 1. 根据 SKU 查找产品 ID
                $query = $this->db->query("SELECT product_id FROM " . DB_PREFIX . "product WHERE sku = '" . $this->db->escape($sku) . "' LIMIT 1");
                
                if ($query->num_rows) {
                    $product_id = (int)$query->row['product_id'];
                    $this->processUpdate($product_id, $row, $lang_id);
                    $json['success'] = true;
                    $json['msg'] = "SKU: " . $sku . " 更新成功";
                } else {
                    $json['error'] = "跳过：SKU [" . $sku . "] 在数据库中不存在";
                }
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function processUpdate($product_id, $row, $lang_id) {
        $this->load->model('catalog/product');
        
        // 索引映射 (基于你的导出格式): 
        // 0:SKU, 1:Title, 2:Size, 3:Type, 4:Description, 5:Model, 6:Category, 7:SellingPrice, 8:OriginalPrice, 9:Weight, 10:Images, 11:MetaTitle, 12:MetaDesc, 13:MetaKey, 14:Tag, 15:SEO
        $product_name = trim($row[1]);

        // 1. 更新主表 (Price, Weight, Model, Location)
        $this->db->query("UPDATE " . DB_PREFIX . "product SET 
            model = '" . $this->db->escape($row[5]) . "', 
            location = '" . $this->db->escape($row[3]) . "', 
            price = '" . (float)$row[8] . "', 
            weight = '" . (float)$row[9] . "', 
            date_modified = NOW() 
            WHERE product_id = '" . $product_id . "'");

        // 2. 更新描述表 (Name, Description, Meta Tags)
        $this->db->query("UPDATE " . DB_PREFIX . "product_description SET 
            name = '" . $this->db->escape($product_name) . "', 
            description = '" . $this->db->escape($row[4]) . "', 
            meta_title = '" . $this->db->escape($row[11]) . "', 
            meta_description = '" . $this->db->escape($row[12]) . "', 
            meta_keyword = '" . $this->db->escape($row[13]) . "', 
            tag = '" . $this->db->escape($row[14]) . "' 
            WHERE product_id = '" . $product_id . "' AND language_id = '" . $lang_id . "'");

        // 3. 更新特价 (Selling Price)
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_special WHERE product_id = '" . $product_id . "'");
        if ((float)$row[7] > 0) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_special SET product_id = '" . $product_id . "', customer_group_id = 1, priority = 1, price = '" . (float)$row[7] . "', date_start = '2020-01-01', date_end = '2050-01-01'");
        }

        // 4. 更新分类 (先删再插)
        $this->db->query("DELETE FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . $product_id . "'");
        $category_ids = $this->getOrCreateCategories($row[6]);
        foreach ($category_ids as $cat_id) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "product_to_category SET product_id = '" . $product_id . "', category_id = '" . (int)$cat_id . "'");
        }

        // 5. 更新 SEO URL
        $this->db->query("DELETE FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . $product_id . "'");
        if (!empty($row[15])) {
            $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = 0, language_id = '" . $lang_id . "', query = 'product_id=" . $product_id . "', keyword = '" . $this->db->escape(trim($row[15])) . "'");
        }

        // 6. 更新选项 (Size)
        if (!empty($row[2])) {
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_option WHERE product_id = '" . $product_id . "'");
            $this->db->query("DELETE FROM " . DB_PREFIX . "product_option_value WHERE product_id = '" . $product_id . "'");
            $options = $this->getOrCreateOptions("Size", explode('|', $row[2]));
            foreach ($options as $option) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "product_option SET product_id = '" . $product_id . "', option_id = '" . (int)$option['option_id'] . "', value = '', required = 1");
                $product_option_id = $this->db->getLastId();
                foreach ($option['product_option_value'] as $ov) {
                    $this->db->query("INSERT INTO " . DB_PREFIX . "product_option_value SET product_option_id = '" . (int)$product_option_id . "', product_id = '" . $product_id . "', option_id = '" . (int)$option['option_id'] . "', option_value_id = '" . (int)$ov['option_value_id'] . "', quantity = 999, subtract = 1, price = 0, price_prefix = '+', points = 0, points_prefix = '+', weight = 0, weight_prefix = '+'");
                }
            }
        }

        // 7. 更新图片 (如果包含 http 则下载，否则保持原样)
        if (!empty($row[10])) {
            $image_urls = explode(',', $row[10]);
            // 只在包含 http 的情况下重新处理下载和 WebP
            if (strpos($row[10], 'http') !== false) {
                $processed_images = $this->downloadAndWebpImages($image_urls, $product_name);
                if (!empty($processed_images)) {
                    $main_image = array_shift($processed_images);
                    $this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape($main_image) . "' WHERE product_id = '" . $product_id . "'");
                    
                    $this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . $product_id . "'");
                    foreach ($processed_images as $extra_img) {
                        $this->db->query("INSERT INTO " . DB_PREFIX . "product_image SET product_id = '" . $product_id . "', image = '" . $this->db->escape($extra_img) . "', sort_order = 0");
                    }
                }
            }
        }
    }

    // 复用之前的私有方法
    private function getOrCreateCategories($cat_string) {
        $cat_ids = [];
        $names = explode(',', $cat_string);
        foreach ($names as $name) {
            $name = trim($name); if (!$name) continue;
            $query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "category_description WHERE name = '" . $this->db->escape($name) . "' LIMIT 1");
            if ($query->num_rows) {
                $category_id = $query->row['category_id'];
            } else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "category SET parent_id = 0, `top` = 1, `column` = 1, status = 1, date_added = NOW(), date_modified = NOW()");
                $category_id = $this->db->getLastId();
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = 1, name = '" . $this->db->escape($name) . "', meta_title = '" . $this->db->escape($name) . "'");
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = 0");
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$category_id . "', level = 0");
            }
            $cat_ids[] = $category_id;
        }
        return $cat_ids;
    }

    private function getOrCreateOptions($option_name, $values) {
        $query = $this->db->query("SELECT option_id FROM " . DB_PREFIX . "option_description WHERE name = '" . $this->db->escape($option_name) . "' LIMIT 1");
        if ($query->num_rows) { $option_id = $query->row['option_id']; } 
        else {
            $this->db->query("INSERT INTO " . DB_PREFIX . "option SET type = 'select', sort_order = 0");
            $option_id = $this->db->getLastId();
            $this->db->query("INSERT INTO " . DB_PREFIX . "option_description SET option_id = '" . (int)$option_id . "', language_id = 1, name = '" . $this->db->escape($option_name) . "'");
        }
        $ov_data = [];
        foreach ($values as $val) {
            $val = trim($val); if (!$val) continue;
            $v_query = $this->db->query("SELECT option_value_id FROM " . DB_PREFIX . "option_value_description WHERE name = '" . $this->db->escape($val) . "' AND option_id = '" . (int)$option_id . "' LIMIT 1");
            if ($v_query->num_rows) { $ov_id = $v_query->row['option_value_id']; } 
            else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "option_value SET option_id = '" . (int)$option_id . "', sort_order = 0");
                $ov_id = $this->db->getLastId();
                $this->db->query("INSERT INTO " . DB_PREFIX . "option_value_description SET option_value_id = '" . (int)$ov_id . "', language_id = 1, option_id = '" . (int)$option_id . "', name = '" . $this->db->escape($val) . "'");
            }
            $ov_data[] = ['option_value_id' => $ov_id];
        }
        return [['option_id' => $option_id, 'product_option_value' => $ov_data]];
    }

    private function downloadAndWebpImages($urls, $product_name) {
        $paths = []; $ts = time();
        $safe_name = strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $product_name));
        $folder = 'catalog/products/' . date('Y-m-d') . '/';
        if (!is_dir(DIR_IMAGE . $folder)) mkdir(DIR_IMAGE . $folder, 0777, true);
        foreach ($urls as $index => $url) {
            $url = trim($url); if (!$url || strpos($url, 'http') === false) continue;
            $temp_file = DIR_UPLOAD . 'temp_upd_' . $ts . $index;
            $ch = curl_init($url); curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $content = curl_exec($ch); curl_close($ch);
            if ($content) {
                file_put_contents($temp_file, $content);
                $new_filename = $safe_name . '-' . $ts . '-' . $index . '.webp';
                if ($this->convertToWebp($temp_file, DIR_IMAGE . $folder . $new_filename)) { $paths[] = $folder . $new_filename; }
                if (file_exists($temp_file)) unlink($temp_file);
            }
        }
        return $paths;
    }

    private function convertToWebp($source, $destination) {
        $info = @getimagesize($source);
        if (!$info) return false;
        $mime = $info['mime'];
        switch ($mime) {
            case 'image/jpeg': $image = imagecreatefromjpeg($source); break;
            case 'image/png': $image = imagecreatefrompng($source); break;
            case 'image/gif': $image = imagecreatefromgif($source); break;
            default: return false;
        }
        if ($image) {
            imagepalettetotruecolor($image); imagealphablending($image, true); imagesavealpha($image, true);
            $result = imagewebp($image, $destination, 80); imagedestroy($image);
            return $result;
        }
        return false;
    }
}