<?php
class ControllerToolCatExport extends Controller {
    public function index() {
        $this->document->setTitle("分类导出 (CSV)");
        $data['user_token'] = $this->session->data['user_token'];
        
        $data['export_action'] = $this->url->link('tool/cat_export/download', 'user_token=' . $this->session->data['user_token'], true);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('tool/cat_export', $data));
    }

    public function download() {
        $lang_id = 1; 
        if (ob_get_level()) ob_end_clean();

        $filename = 'Categories_Export_' . date('Ymd_His') . '.csv';
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $filename . '";');
        $output = fopen('php://output', 'w');
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

        // 1. 更新表头，在 Name 后面增加 Description
        $header = [
            'Category ID', 'Parent ID', 'Parent Name', 'Name', 
            'Description', // 新增
            'Top (Menu)', 'Sort Order', 'Status', 'Meta Title', 'Meta Description', 'Meta Keywords', 'SEO URL'
        ];
        fputcsv($output, $header);

        // 2. SQL 增加 cd.description
        $sql = "SELECT c.*, cd.name, cd.description, cd.meta_title, cd.meta_description, cd.meta_keyword,
                (SELECT name FROM " . DB_PREFIX . "category_description cd2 WHERE cd2.category_id = c.parent_id AND cd2.language_id = '" . (int)$lang_id . "' LIMIT 1) AS parent_name
                FROM " . DB_PREFIX . "category c 
                INNER JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) 
                WHERE cd.language_id = '" . (int)$lang_id . "' 
                ORDER BY c.parent_id ASC, c.sort_order ASC";
        
        $query = $this->db->query($sql);

        foreach ($query->rows as $result) {
            $category_id = (int)$result['category_id'];

            $seo_url = '';
            $seo_query = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=" . $category_id . "' AND language_id = '" . (int)$lang_id . "' LIMIT 1");
            if ($seo_query->num_rows) { $seo_url = $seo_query->row['keyword']; }

            // 3. 组装数据，处理 HTML 描述
            $row_data = [
                $category_id,
                $result['parent_id'],
                $result['parent_name'] ? html_entity_decode($result['parent_name'], ENT_QUOTES, 'UTF-8') : 'None',
                html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'),
                html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'), // 新增
                $result['top'] ? 'Yes' : 'No',
                $result['sort_order'],
                $result['status'] ? 'Enabled' : 'Disabled',
                $result['meta_title'],
                $result['meta_description'],
                $result['meta_keyword'],
                $seo_url
            ];
            fputcsv($output, $row_data);
        }
        fclose($output);
        exit;
    }
}