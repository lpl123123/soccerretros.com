<?php
require_once(DIR_SYSTEM . 'storage/vendor/SimpleXLSX.php');
use Shuchkin\SimpleXLSX;

class ControllerToolImageUpdate extends Controller {
    public function index() {
        $this->document->setTitle("产品图片批量更新");
        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('tool/image_update', $data));
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
                $json['success'] = "图片更新清单解析成功！";
            } else {
                $json['error'] = SimpleXLSX::parseError();
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function process() {
        $json = array();
        $file_path = $this->request->post['file_path'];
        $row_index = (int)$this->request->post['row_index'];

        if ($xlsx = SimpleXLSX::parse($file_path)) {
            $rows = $xlsx->rows();
            $row = isset($rows[$row_index + 1]) ? $rows[$row_index + 1] : null;

            if ($row) {
                $model = trim((string)$row[0]);
                $image_links = trim((string)$row[1]);

                // 1. 根据 Model 查找产品
                $query = $this->db->query("SELECT p.product_id, pd.name FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_description pd ON (p.product_id = pd.product_id) WHERE p.model = '" . $this->db->escape($model) . "' AND pd.language_id = '" . (int)$this->config->get('config_language_id') . "' LIMIT 1");

                if ($query->num_rows) {
                    $product_id = $query->row['product_id'];
                    $product_name = $query->row['name'];

                    if (!empty($image_links)) {
                        $image_urls = explode(',', $image_links);
                        $processed_images = $this->downloadAndWebpImages($image_urls, $product_name);

                        if (!empty($processed_images)) {
                            // 更新主图
                            $main_image = array_shift($processed_images);
                            $this->db->query("UPDATE " . DB_PREFIX . "product SET image = '" . $this->db->escape($main_image) . "' WHERE product_id = '" . (int)$product_id . "'");

                            // 更新附加图 (先删后插)
                            $this->db->query("DELETE FROM " . DB_PREFIX . "product_image WHERE product_id = '" . (int)$product_id . "'");
                            foreach ($processed_images as $extra_img) {
                                $this->db->query("INSERT INTO " . DB_PREFIX . "product_image SET product_id = '" . (int)$product_id . "', image = '" . $this->db->escape($extra_img) . "', sort_order = 0");
                            }
                            $json['success'] = true;
                            $json['msg'] = "Model: " . $model . " 图片已更新 (" . (count($processed_images) + 1) . "张)";
                        } else {
                            $json['error'] = "Model: " . $model . " 图片下载失败";
                        }
                    } else {
                        $json['error'] = "Model: " . $model . " 表格中无图片地址";
                    }
                } else {
                    $json['error'] = "未匹配到产品: Model [" . $model . "]";
                }
            }
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    private function downloadAndWebpImages($urls, $product_name) {
        $paths = [];
        $ts = time();
        $safe_name = strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $product_name));
        $folder = 'catalog/products/2026-04-03/';
        // $folder = 'catalog/products/' . date('Y-m-d') . '/';
        $full_dir = DIR_IMAGE . $folder;

        if (!is_dir($full_dir)) mkdir($full_dir, 0777, true);

        foreach ($urls as $index => $url) {
            $url = trim($url);
            if (!$url || strpos($url, 'http') === false) continue;

            $temp_file = DIR_UPLOAD . 'img_upd_' . $ts . $index;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 30);
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
            case 'image/png': $image = imagecreatefrompng($source); break;
            case 'image/gif': $image = imagecreatefromgif($source); break;
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