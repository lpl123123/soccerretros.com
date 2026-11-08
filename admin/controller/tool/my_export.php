<?php
class ControllerToolMyExport extends Controller {
    public function index() {
        $this->document->setTitle("产品批量导出 (按分类)");
        $data['user_token'] = $this->session->data['user_token'];
        $lang_id = (int)$this->config->get('config_language_id');

        // 1. 获取所有分类列表用于下拉框
        $data['categories'] = [];
        $query = $this->db->query("SELECT category_id, name FROM " . DB_PREFIX . "category_description WHERE language_id = '" . $lang_id . "' ORDER BY name ASC");
        foreach ($query->rows as $result) {
            $data['categories'][] = [
                'category_id' => $result['category_id'],
                'name'        => $result['name']
            ];
        }

        $data['export_action'] = $this->url->link('tool/my_export/download', 'user_token=' . $this->session->data['user_token'], true);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('tool/my_export', $data));
    }

    public function download() {
        $lang_id = 1; // 强制使用你的数据库语言 ID
        
        // 获取前端传来的分类 ID
        $filter_category_id = isset($this->request->get['category_id']) ? (int)$this->request->get['category_id'] : 0;

        if (ob_get_level()) ob_end_clean();

        $filename = 'Products_Export_';
        if ($filter_category_id) {
            $filename .= 'Cat' . $filter_category_id . '_';
        }
        $filename .= date('Ymd_His') . '.csv';

        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="' . $filename . '";');

        $output = fopen('php://output', 'w');
        fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF)); // UTF-8 BOM

        $header = ['Id', 'Title', 'Size', 'Type', 'Description', 'SPU', 'Category', 'Selling Price', 'Original Price', 'Weight', 'Product images', 'Meta Tag Title', 'Meta Tag Description', 'Meta Tag Keywords', 'Product Tags', 'seo_url'];
        fputcsv($output, $header);

        // 2. 构建 SQL 语句
        $sql = "SELECT DISTINCT p.product_id, p.sku, p.model, p.location, p.price, p.weight, p.image, pd.name as p_name, pd.description as p_desc, pd.meta_title, pd.meta_description, pd.meta_keyword, pd.tag 
                FROM " . DB_PREFIX . "product p 
                INNER JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) ";
        
        // 如果选择了分类，加入分类关联表
        if ($filter_category_id > 0) {
            $sql .= " INNER JOIN " . DB_PREFIX . "product_to_category p2c ON (p.product_id = p2c.product_id) ";
        }

        $sql .= " WHERE pd.language_id = '" . (int)$lang_id . "'";

        // 增加分类过滤条件
        if ($filter_category_id > 0) {
            $sql .= " AND p2c.category_id = '" . (int)$filter_category_id . "'";
        }

        $sql .= " ORDER BY p.product_id DESC";
        
        $query = $this->db->query($sql);

        foreach ($query->rows as $result) {
            $product_id = (int)$result['product_id'];

            // 获取全部分类名
            $categories = [];
            $cat_query = $this->db->query("SELECT cd.name FROM " . DB_PREFIX . "product_to_category p2c LEFT JOIN " . DB_PREFIX . "category_description cd ON (p2c.category_id = cd.category_id) WHERE p2c.product_id = '" . $product_id . "' AND cd.language_id = '" . (int)$lang_id . "'");
            foreach ($cat_query->rows as $cat) { $categories[] = $cat['name']; }

            // 获取 Size
            $sizes = [];
            $opt_query = $this->db->query("SELECT DISTINCT ovd.name FROM " . DB_PREFIX . "product_option_value pov LEFT JOIN " . DB_PREFIX . "option_value_description ovd ON (pov.option_value_id = ovd.option_value_id) LEFT JOIN " . DB_PREFIX . "option_description od ON (pov.option_id = od.option_id) WHERE pov.product_id = '" . $product_id . "' AND od.name = 'Size' AND ovd.language_id = '" . (int)$lang_id . "'");
            foreach ($opt_query->rows as $opt) { $sizes[] = $opt['name']; }

            // 获取图片
            $images = [];
            if ($result['image']) { $images[] = HTTP_CATALOG . 'image/' . $result['image']; }
            $img_query = $this->db->query("SELECT image FROM " . DB_PREFIX . "product_image WHERE product_id = '" . $product_id . "' ORDER BY sort_order ASC");
            foreach ($img_query->rows as $img) { if ($img['image']) { $images[] = HTTP_CATALOG . 'image/' . $img['image']; } }

            // 获取特价
            $selling_price = '';
            $spec_query = $this->db->query("SELECT price FROM " . DB_PREFIX . "product_special WHERE product_id = '" . $product_id . "' AND customer_group_id = '1' AND ((date_start = '0000-00-00' OR date_start < NOW()) AND (date_end = '0000-00-00' OR date_end > NOW())) ORDER BY priority ASC, price ASC LIMIT 1");
            if ($spec_query->num_rows) { $selling_price = $spec_query->row['price']; }

            // 获取 SEO URL
            $seo_url = '';
            $seo_query = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=" . $product_id . "' AND language_id = '" . (int)$lang_id . "' LIMIT 1");
            if ($seo_query->num_rows) { $seo_url = $seo_query->row['keyword']; }

            $description = ($result['p_desc'] !== null) ? html_entity_decode($result['p_desc'], ENT_QUOTES, 'UTF-8') : '';

            $row_data = [
                $result['sku'],
                $result['p_name'],
                implode('|', $sizes),
                $result['location'],
                $description,
                $result['model'],
                implode(',', $categories),
                $selling_price,
                $result['price'],
                $result['weight'],
                implode(',', $images),
                $result['meta_title'],
                $result['meta_description'],
                $result['meta_keyword'],
                $result['tag'],
                $seo_url
            ];
            fputcsv($output, $row_data);
        }

        fclose($output);
        exit;
    }
}