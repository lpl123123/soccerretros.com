<?php
require_once(DIR_SYSTEM . 'storage/vendor/SimpleXLSX.php');
use Shuchkin\SimpleXLSX;

class ControllerToolMyImport extends Controller {
    public function index() {
        $this->document->setTitle("高级产品导入系统 v2.0");
        $data['user_token'] = $this->session->data['user_token'];
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('tool/my_import', $data));
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
                $json['success'] = "Excel文件解析成功！";
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

        if ($xlsx = SimpleXLSX::parse($file_path)) {
            $rows = $xlsx->rows();
            $row = isset($rows[$row_index + 1]) ? $rows[$row_index + 1] : null;
            if ($row) {
                // 确保索引覆盖 0-15
                for($i=0; $i<=15; $i++) if(!isset($row[$i])) $row[$i] = '';
                $this->processProduct($row);
                $json['success'] = true;
                $json['msg'] = "导入成功: " . ($row[1] ? substr($row[1], 0, 40) : "无标题");
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function processProduct($row) {
        $this->load->model('catalog/product');
        $lang_id = (int)$this->config->get('config_language_id');
        $product_name = trim($row[1]);

        $data = [
            'model'           => (string)$row[5],
            'sku'             => (string)$row[0],
            'upc'             => '',
            'ean'             => '',
            'jan'             => '',
            'isbn'            => '',
            'mpn'             => '',
            'location'        => (string)$row[3],
            'variant'         => '', // OC 3.0.3.9+ 常用
            'price'           => (float)$row[8],
            'points'          => 0,  // 【修复点】补全积分字段
            'tax_class_id'    => 0,
            'quantity'        => 999,
            'minimum'         => 1,
            'subtract'        => 1,
            'stock_status_id' => (int)$this->config->get('config_stock_status_id'),
            'shipping'        => 1,
            'date_available'  => date('Y-m-d'),
            'manufacturer_id' => 0,
            'length'          => 0,
            'width'           => 0,
            'height'          => 0,
            'length_class_id' => (int)$this->config->get('config_length_class_id'),
            'weight'          => (float)$row[9],
            'weight_class_id' => (int)$this->config->get('config_weight_class_id'),
            'status'          => 1,
            'sort_order'      => 0,
            'product_store'   => [0],
            'product_description' => [
                $lang_id => [
                    'name'             => $product_name ?: 'Product '.time(),
                    'description'      => html_entity_decode((string)$row[4]),
                    'meta_title'       => (string)$row[11] ?: $product_name,
                    'meta_description' => (string)$row[12],
                    'meta_keyword'     => (string)$row[13],
                    'tag'              => (string)$row[14]
                ]
            ],
            'product_category' => $this->getOrCreateCategories($row[6]),
            'product_option'   => !empty($row[2]) ? $this->getOrCreateOptions("Size", explode('|', $row[2])) : [],
            // 补全所有关联数组，防止插件遍历报错
            'product_image'    => [], 
            'product_special'  => [], 
            'product_download' => [], 
            'product_filter'   => [], 
            'product_related'  => [], 
            'product_reward'   => [], 
            'product_layout'   => []
        ];

        // 处理 SEO URL
        if (!empty($row[15])) {
            $data['product_seo_url'][0][$lang_id] = (string)$row[15];
        }

        // 处理特价
        if ((float)$row[7] > 0) {
            $data['product_special'][] = [
                'customer_group_id' => 1, 
                'priority'          => 1, 
                'price'             => (float)$row[7], 
                'date_start'        => '2020-01-01', 
                'date_end'          => '2050-01-01'
            ];
        }

        // 图片处理 (WebP)
        if (!empty($row[10])) {
            $image_urls = explode(',', $row[10]);
            $processed_images = $this->downloadAndWebpImages($image_urls, $product_name);
            if (!empty($processed_images)) {
                $data['image'] = array_shift($processed_images);
                foreach ($processed_images as $extra_img) {
                    $data['product_image'][] = ['image' => $extra_img, 'sort_order' => 0];
                }
            }
        }

        return $this->model_catalog_product->addProduct($data);
    }

    private function getOrCreateCategories($cat_string) {
        $cat_ids = [];
        $names = explode(',', $cat_string);
        $lang_id = (int)$this->config->get('config_language_id');

        foreach ($names as $name) {
            $name = trim($name);
            if (!$name) continue;

            $query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "category_description WHERE name = '" . $this->db->escape($name) . "' LIMIT 1");
            
            if ($query->num_rows) {
                $category_id = $query->row['category_id'];
            } else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "category SET parent_id = 0, `top` = 1, `column` = 1, sort_order = 0, status = 1, date_added = NOW(), date_modified = NOW()");
                $category_id = $this->db->getLastId();
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_description SET category_id = '" . (int)$category_id . "', language_id = '" . $lang_id . "', name = '" . $this->db->escape($name) . "', meta_title = '" . $this->db->escape($name) . "'");
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_to_store SET category_id = '" . (int)$category_id . "', store_id = 0");
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_to_layout SET category_id = '" . (int)$category_id . "', store_id = 0, layout_id = 0");
                $this->db->query("INSERT INTO " . DB_PREFIX . "category_path SET category_id = '" . (int)$category_id . "', path_id = '" . (int)$category_id . "', level = 0");
            }
            $cat_ids[] = $category_id;
        }
        return $cat_ids;
    }

    private function getOrCreateOptions($option_name, $values) {
        $lang_id = (int)$this->config->get('config_language_id');
        $query = $this->db->query("SELECT option_id FROM " . DB_PREFIX . "option_description WHERE name = '" . $this->db->escape($option_name) . "' LIMIT 1");
        if ($query->num_rows) {
            $option_id = $query->row['option_id'];
        } else {
            $this->db->query("INSERT INTO " . DB_PREFIX . "option SET type = 'select', sort_order = 0");
            $option_id = $this->db->getLastId();
            $this->db->query("INSERT INTO " . DB_PREFIX . "option_description SET option_id = '" . (int)$option_id . "', language_id = '" . $lang_id . "', name = '" . $this->db->escape($option_name) . "'");
        }

        $ov_data = [];
        foreach ($values as $val) {
            $val = trim($val);
            if (!$val) continue;
            $v_query = $this->db->query("SELECT option_value_id FROM " . DB_PREFIX . "option_value_description WHERE name = '" . $this->db->escape($val) . "' AND option_id = '" . (int)$option_id . "' LIMIT 1");
            if ($v_query->num_rows) {
                $ov_id = $v_query->row['option_value_id'];
            } else {
                $this->db->query("INSERT INTO " . DB_PREFIX . "option_value SET option_id = '" . (int)$option_id . "', sort_order = 0");
                $ov_id = $this->db->getLastId();
                $this->db->query("INSERT INTO " . DB_PREFIX . "option_value_description SET option_value_id = '" . (int)$ov_id . "', language_id = '" . $lang_id . "', option_id = '" . (int)$option_id . "', name = '" . $this->db->escape($val) . "'");
            }
            $ov_data[] = ['option_value_id' => $ov_id, 'quantity' => 999, 'subtract' => 1, 'price' => 0, 'price_prefix' => '+', 'points' => 0, 'points_prefix' => '+', 'weight' => 0, 'weight_prefix' => '+'];
        }
        return [['type' => 'select', 'option_id' => $option_id, 'required' => 1, 'product_option_value' => $ov_data]];
    }

    private function downloadAndWebpImages($urls, $product_name) {
        $paths = [];
        $ts = time();
        $safe_name = strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $product_name));
        $folder = 'catalog/products/' . date('Y-m-d') . '/';
        $full_dir = DIR_IMAGE . $folder;
        if (!is_dir($full_dir)) mkdir($full_dir, 0777, true);

        foreach ($urls as $index => $url) {
            $url = trim($url);
            if (!$url) continue;
            $temp_file = DIR_UPLOAD . 'temp_img_' . $ts . $index;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 20);
            $content = curl_exec($ch);
            curl_close($ch);

            if ($content) {
                file_put_contents($temp_file, $content);
                $new_filename = $safe_name . '-' . $ts . '-' . $index . '.webp';
                if ($this->convertToWebp($temp_file, $full_dir . $new_filename)) {
                    $paths[] = $folder . $new_filename;
                }
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
            case 'image/png':  $image = imagecreatefrompng($source); break;
            case 'image/gif':  $image = imagecreatefromgif($source); break;
            default: return false;
        }
        if ($image) {
            imagepalettetotruecolor($image);
            imagealphablending($image, true);
            imagesavealpha($image, true);
            $result = imagewebp($image, $destination, 80);
            imagedestroy($image);
            return $result;
        }
        return false;
    }
}