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
                $json['import_mode'] = $this->getImportMode();
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
        $import_mode = $this->getImportMode();

        if ($xlsx = SimpleXLSX::parse($file_path)) {
            $rows = $xlsx->rows();
            $row = isset($rows[$row_index + 1]) ? $rows[$row_index + 1] : null;
            if ($row) {
                // 确保索引覆盖 0-15
                for ($i = 0; $i <= 15; $i++) if (!isset($row[$i])) $row[$i] = '';

                // 使用完整产品名做去重（不做 substr 截断）
                $product_name = $this->normalizeProductName($row[1]);
                $display_name = $product_name !== '' ? $product_name : "无标题";
                $existing_id = ($product_name !== '') ? $this->getProductIdByName($product_name) : 0;

                if ($existing_id) {
                    if ($import_mode === 'restore_images') {
                        $result = $this->restoreProductImages($existing_id, $row[10]);
                        $json['success'] = true;
                        $json['skipped'] = false;
                        $json['restored'] = true;
                        $json['msg'] = "已补全图片(" . $result['restored'] . "/" . $result['total'] . "): " . $display_name;
                    } else {
                        // skip_duplicates：产品名相同则跳过
                        $json['success'] = true;
                        $json['skipped'] = true;
                        $json['msg'] = "已跳过(产品名重复): " . $display_name;
                    }
                } else {
                    $this->processProduct($row, $product_name);
                    $json['success'] = true;
                    $json['skipped'] = false;
                    $json['msg'] = "导入成功: " . $display_name;
                }
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    /**
     * skip_duplicates | restore_images
     */
    private function getImportMode() {
        $mode = isset($this->request->post['import_mode']) ? (string)$this->request->post['import_mode'] : 'skip_duplicates';
        return in_array($mode, array('skip_duplicates', 'restore_images'), true) ? $mode : 'skip_duplicates';
    }

    /**
     * 规范化完整产品名：去实体、统一空白、不截断
     */
    private function normalizeProductName($name) {
        $name = html_entity_decode((string)$name, ENT_QUOTES, 'UTF-8');
        // 统一各类空白（含 NBSP、全角空格等）为普通空格
        $name = preg_replace('/[\x{00A0}\x{2000}-\x{200B}\x{202F}\x{205F}\x{3000}\x{FEFF}\s]+/u', ' ', $name);
        $name = trim($name);

        // 与 DB varchar(255) 存库长度对齐，避免超长名比对失败；按字符而非字节截取
        if ($name !== '' && function_exists('mb_substr')) {
            $name = mb_substr($name, 0, 255, 'UTF-8');
        } elseif (strlen($name) > 255) {
            $name = substr($name, 0, 255);
        }

        return $name;
    }

    /**
     * 按完整产品名称查找 product_id（任意语言，TRIM 后比对）
     */
    private function getProductIdByName($product_name) {
        $escaped = $this->db->escape($product_name);

        $query = $this->db->query(
            "SELECT product_id FROM " . DB_PREFIX . "product_description
             WHERE name = '" . $escaped . "'
                OR TRIM(name) = '" . $escaped . "'
             LIMIT 1"
        );

        return $query->num_rows ? (int)$query->row['product_id'] : 0;
    }

    /**
     * 兼容旧调用
     */
    private function productNameExists($product_name) {
        return (bool)$this->getProductIdByName($product_name);
    }

    /**
     * 仅补全已存在产品的图片文件，数据库中的图片路径保持不变
     */
    private function restoreProductImages($product_id, $image_cell) {
        $urls = array();
        foreach (explode(',', (string)$image_cell) as $url) {
            $url = trim($url);
            if ($url !== '') {
                $urls[] = $url;
            }
        }

        $paths = $this->getProductImagePaths($product_id);
        $total = count($paths);
        $restored = 0;

        if (!$total) {
            return array('total' => 0, 'restored' => 0);
        }

        foreach ($paths as $index => $relative_path) {
            if (!isset($urls[$index])) {
                break;
            }

            if ($this->downloadAndSaveToPath($urls[$index], $relative_path)) {
                $restored++;
            }
        }

        return array('total' => $total, 'restored' => $restored);
    }

    /**
     * 读取数据库中已有的主图 + 附加图路径（顺序与导入时一致）
     */
    private function getProductImagePaths($product_id) {
        $paths = array();

        $query = $this->db->query(
            "SELECT image FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product_id . "' LIMIT 1"
        );

        if ($query->num_rows && !empty($query->row['image'])) {
            $paths[] = $query->row['image'];
        }

        $extra = $this->db->query(
            "SELECT image FROM " . DB_PREFIX . "product_image
             WHERE product_id = '" . (int)$product_id . "'
             ORDER BY sort_order ASC, product_image_id ASC"
        );

        foreach ($extra->rows as $row) {
            if (!empty($row['image'])) {
                $paths[] = $row['image'];
            }
        }

        return $paths;
    }

    /**
     * 下载远程图片并写入数据库中记录的原路径（不改 DB 地址）
     */
    private function downloadAndSaveToPath($url, $relative_path) {
        $relative_path = ltrim(str_replace('\\', '/', (string)$relative_path), '/');
        if ($relative_path === '' || strpos($relative_path, '..') !== false) {
            return false;
        }

        $destination = DIR_IMAGE . $relative_path;
        $dir = dirname($destination);
        if (!is_dir($dir) && !mkdir($dir, 0777, true) && !is_dir($dir)) {
            return false;
        }

        $temp_file = DIR_UPLOAD . 'temp_img_restore_' . token(16);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $content = curl_exec($ch);
        $http_code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if (!$content || ($http_code && $http_code >= 400)) {
            if (file_exists($temp_file)) unlink($temp_file);
            return false;
        }

        file_put_contents($temp_file, $content);

        $ext = strtolower(pathinfo($destination, PATHINFO_EXTENSION));
        $ok = false;

        if ($ext === 'webp') {
            $ok = $this->convertToWebp($temp_file, $destination);
            // 源已是 webp 且 GD 转换失败时，直接原样写回原路径
            if (!$ok) {
                $info = @getimagesize($temp_file);
                if ($info && isset($info['mime']) && $info['mime'] === 'image/webp') {
                    $ok = (bool)copy($temp_file, $destination);
                }
            }
        } else {
            // 原路径不是 webp：尽量保留原扩展可读的图片内容
            $info = @getimagesize($temp_file);
            if ($info) {
                $ok = (bool)copy($temp_file, $destination);
            }
        }

        if (file_exists($temp_file)) unlink($temp_file);

        return $ok;
    }

    private function processProduct($row, $product_name = null) {
        $this->load->model('catalog/product');
        $lang_id = (int)$this->config->get('config_language_id');
        if ($product_name === null) {
            $product_name = $this->normalizeProductName($row[1]);
        }

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
                    'name'             => $product_name !== '' ? $product_name : ('Product '.time()),
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
            case 'image/webp':
                if (!function_exists('imagecreatefromwebp')) return false;
                $image = imagecreatefromwebp($source);
                break;
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
