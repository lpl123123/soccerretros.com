<?php
class ControllerToolGeminiBlog extends Controller {
    private $api_key = 'AIzaSyAHscFU5gM67tlDfZmebdkRPvpJqI6S_T0';
    private $model_text = 'gemini-2.5-flash-lite'; 
    private $model_image = 'gemini-2.5-flash-image'; 

    public function index() {
        $this->document->setTitle("Gemini AI 博客助手");
        $this->load->model('tool/gemini_blog');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['action'])) {
            if ($this->request->post['action'] == 'save_prompt') {
                $this->model_tool_gemini_blog->addPrompt($this->request->post);
                $this->session->data['success'] = "模板已创建";
            }
            if ($this->request->post['action'] == 'edit_prompt') {
                $this->model_tool_gemini_blog->editPrompt($this->request->post['prompt_id'], $this->request->post);
                $this->session->data['success'] = "模板已更新";
            }
            if ($this->request->post['action'] == 'add_task') {
                $this->model_tool_gemini_blog->addTask($this->request->post);
                $this->session->data['success'] = "任务已创建";
            }
            if ($this->request->post['action'] == 'edit_task') {
                $this->model_tool_gemini_blog->editTask($this->request->post['task_id'], $this->request->post);
                $this->session->data['success'] = "任务已更新";
            }
            $this->response->redirect($this->url->link('tool/gemini_blog', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (isset($this->request->get['delete_prompt'])) {
            $this->model_tool_gemini_blog->deletePrompt($this->request->get['delete_prompt']);
            $this->response->redirect($this->url->link('tool/gemini_blog', 'user_token=' . $this->session->data['user_token'], true));
        }
        if (isset($this->request->get['delete_task'])) {
            $this->model_tool_gemini_blog->deleteTask($this->request->get['delete_task']);
            $this->response->redirect($this->url->link('tool/gemini_blog', 'user_token=' . $this->session->data['user_token'], true));
        }

        $data['prompts'] = $this->model_tool_gemini_blog->getPrompts();
        $data['tasks'] = $this->model_tool_gemini_blog->getTasks();
        $data['user_token'] = $this->session->data['user_token'];
        $data['success'] = isset($this->session->data['success']) ? $this->session->data['success'] : '';
        unset($this->session->data['success']);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('tool/gemini_blog', $data));
    }

    public function getPromptInfo() {
        $this->load->model('tool/gemini_blog');
        $prompt = $this->model_tool_gemini_blog->getPrompt($this->request->get['prompt_id']);
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($prompt));
    }

    public function getTaskInfo() {
        $this->load->model('tool/gemini_blog');
        $task = $this->model_tool_gemini_blog->getTask($this->request->get['task_id']);
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($task));
    }

    public function runTask() {
        set_time_limit(0); 
        $this->load->model('tool/gemini_blog');
        $task_id = (int)$this->request->get['task_id'];
        $task = $this->model_tool_gemini_blog->getTask($task_id);
        if (!$task) return;

        $this->writeDebugLog("--- 启动任务 ID: $task_id ---", true);
        $this->model_tool_gemini_blog->updateTaskStatus($task_id, 1);

        $prompt_info = $this->model_tool_gemini_blog->getPrompt($task['prompt_id']);
        $final_prompt = str_replace(['{keywords}', '{links}'], [$task['keywords'], $task['target_links']], $prompt_info['content']);
        
        $final_prompt .= "\n\n### MANDATORY INSTRUCTIONS:
        1. CONTENT: At least 1500 words.
        2. DYNAMIC IMAGES: Use exactly [IMG_PROMPT: description] placeholders in HTML (Limit 1-3).
        3. URL_HANDLE: Generate a 3-6 word SEO slug.
        4. JSON FORMAT: Return a raw JSON object with keys: title, content, url_handle, meta_title, meta_desc, meta_key, cover_prompt.";

        // 1. 调用文案接口
        $ai_result = $this->callGeminiText($final_prompt);

        if (!$ai_result || isset($ai_result['error'])) {
            $err_msg = isset($ai_result['error']) ? $ai_result['error'] : 'AI 解析失败';
            $this->model_tool_gemini_blog->updateTaskStatus($task_id, 3, $err_msg);
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode(['error' => $err_msg]));
            return;
        }

        $html_content = (string)$ai_result['content'];
        $success_images = [];

        // 2. 正则提取并生成图片
        preg_match_all('/\[IMG_PROMPT:\s*(.*?)\]/si', $html_content, $matches);
        if (!empty($matches[0])) {
            $full_tags = array_slice($matches[0], 0, 3);
            $descriptions = array_slice($matches[1], 0, 3);

            foreach ($descriptions as $idx => $img_desc) {
                $img_path = $this->generateAiImage(trim($img_desc), $task['keywords'], 'body-' . $idx);
                if ($img_path) {
                    $server_url = (isset($this->request->server['HTTPS']) && ($this->request->server['HTTPS'] == 'on')) ? HTTPS_CATALOG : HTTP_CATALOG;
                    $img_url = $server_url . 'image/' . $img_path;
                    
                    $img_tag = '<div style="text-align:center;margin:30px 0;"><img src="'.$img_url.'" style="max-width:100%;border-radius:12px;box-shadow:0 4px 10px rgba(0,0,0,0.1);"></div>';
                    $html_content = str_replace($full_tags[$idx], $img_tag, $html_content);
                    $success_images[] = $img_path;
                } else {
                    $html_content = str_replace($full_tags[$idx], '', $html_content); 
                }
            }
        }
        $ai_result['content'] = $html_content;

        // 3. 处理封面
        $feature_image = '';
        if (!empty($ai_result['cover_prompt'])) {
            $feature_image = $this->generateAiImage($ai_result['cover_prompt'], $task['keywords'], 'cover');
        }
        if (!$feature_image && !empty($success_images)) $feature_image = $success_images[0];

        // 4. 数据入库
        $post_id = $this->insertJournalBlog($ai_result, $feature_image);
        $this->model_tool_gemini_blog->updateTaskStatus($task_id, 2, '', $post_id);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode(['success' => '发布成功 ID: ' . $post_id]));
    }

    private function callGeminiText($prompt) {
        $max_retries = 3;
        $url = "https://generativelanguage.googleapis.com/v1beta/models/{$this->model_text}:generateContent?key={$this->api_key}";

        for ($i = 0; $i < $max_retries; $i++) {
            $this->writeDebugLog("文案请求尝试 #" . ($i + 1));
            
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
                "contents" => [["parts" => [["text" => $prompt]]]],
                "generationConfig" => ["response_mime_type" => "application/json", "temperature" => 0.85, "maxOutputTokens" => 8192]
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 260); 
            $response = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            $this->writeDebugLog("--- 1、生成文章返回: $response ---", true);

            if ($http_code == 200) {
                $res = json_decode($response, true);
                if (isset($res['candidates'][0]['content']['parts'][0]['text'])) {
                    $raw_text = $res['candidates'][0]['content']['parts'][0]['text'];
                    if (preg_match('/({.*})/s', $raw_text, $matches)) {
                        $decoded = json_decode($matches[1], true);
                        if (json_last_error() === JSON_ERROR_NONE) {
                            $defaults = ['title'=>'','content'=>'','url_handle'=>'','meta_title'=>'','meta_desc'=>'','meta_key'=>'','cover_prompt'=>''];
                            return array_merge($defaults, $decoded);
                        }
                    }
                }
                return ['error' => 'JSON 解析失败，AI 返回格式异常'];
            }

            if ($http_code == 503 || $http_code == 429 || $http_code == 0) {
                $wait = 5 + ($i * 7); 
                $this->writeDebugLog("HTTP $http_code: 服务器繁忙，等待 {$wait}s 后重试...");
                sleep($wait);
                continue;
            }

            return ['error' => "API致命错误: $http_code"];
        }
        return ['error' => 'Google 服务器持续繁忙，请稍后再试'];
    }

    private function generateAiImage($prompt, $keyword, $suffix) {
        $max_retries = 2;
        $url = "https://generativelanguage.googleapis.com/v1beta/models/{$this->model_image}:generateContent?key={$this->api_key}";

        for ($i = 0; $i < $max_retries; $i++) {
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([
                "contents" => [["parts" => [["text" => $prompt . " Cinematic photography, highly detailed, 8k, no text."]]]],
                "generationConfig" => ["maxOutputTokens" => 2048]
            ]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, 100);
            $response = curl_exec($ch);
            $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            $this->writeDebugLog("--- 2、生成图片返回: $response ---", true);

            if ($http_code == 200) {
                $res = json_decode($response, true);
                $base64 = '';
                if (isset($res['candidates'][0]['content']['parts'])) {
                    foreach ($res['candidates'][0]['content']['parts'] as $part) {
                        if (isset($part['inlineData']['data'])) { $base64 = $part['inlineData']['data']; break; }
                        if (isset($part['inline_data']['data'])) { $base64 = $part['inline_data']['data']; break; }
                    }
                }

                if ($base64) {
                    $folder = 'catalog/blog/' . date('Y-m-d') . '/';
                    $dir = DIR_IMAGE . $folder;
                    if (!is_dir($dir)) mkdir($dir, 0777, true);
                    
                    $safe_kw = strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $keyword));
                    $filename = $safe_kw . '-' . $suffix . '-' . time() . '.webp';
                    
                    // --- 优化 2：真实 WebP 转换逻辑 ---
                    $raw_data = base64_decode($base64);
                    $im = @imagecreatefromstring($raw_data);
                    if ($im !== false) {
                        imagepalettetotruecolor($im);
                        imagealphablending($im, true);
                        imagesavealpha($im, true);
                        imagewebp($im, $dir . $filename, 80); // 以 80 质量保存为真正 webp
                        imagedestroy($im);
                        return $folder . $filename;
                    }
                }
            }

            if ($http_code == 503 || $http_code == 429) {
                sleep(6); continue;
            }
            break;
        }
        $this->writeDebugLog("生图失败 [$suffix] HTTP: $http_code");
        return false;
    }

    private function insertJournalBlog($data, $image) {
        $lang_id = (int)$this->config->get('config_language_id');
        
        // --- 优化 1：处理 url_handle 逻辑 ---
        $handle = !empty($data['url_handle']) ? trim($data['url_handle']) : strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', $data['title']));
        $handle = trim($handle, '-');
        
        // 插入主表
        $this->db->query("INSERT INTO " . DB_PREFIX . "journal3_blog_post SET image = '" . $this->db->escape($image) . "', status = 1, author_id = 1, comments = 1, sort_order = 0, views = 0, date_created = NOW(), date_updated = NOW(), post_data = '{}'");
        $post_id = $this->db->getLastId();
        
        // 查重 SEO URL
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($handle) . "'");
        if ($query->num_rows) $handle .= '-' . $post_id;
        
        $title = !empty($data['title']) ? $data['title'] : 'AI Blog ' . $post_id;

        // 写入描述表，并包含 Journal 3 的 keyword 字段
        $this->db->query("INSERT INTO " . DB_PREFIX . "journal3_blog_post_description SET 
            post_id = '$post_id', 
            language_id = '$lang_id', 
            name = '" . $this->db->escape($title) . "', 
            description = '" . $this->db->escape($data['content']) . "', 
            meta_title = '" . $this->db->escape($data['meta_title'] ?: $title) . "', 
            meta_description = '" . $this->db->escape($data['meta_desc']) . "', 
            meta_keywords = '" . $this->db->escape($data['meta_key']) . "',
            keyword = '" . $this->db->escape($handle) . "'"); // 重点：将 url_handle 存入 keyword

        // 关联 Store
        $this->db->query("INSERT INTO " . DB_PREFIX . "journal3_blog_post_to_store SET post_id = '$post_id', store_id = 0");
        
        // 同时写入系统通用 SEO 表
        $this->db->query("INSERT INTO " . DB_PREFIX . "seo_url SET store_id = 0, language_id = '$lang_id', query = 'journal3_blog_post_id=$post_id', keyword = '" . $this->db->escape($handle) . "'");
        
        return $post_id;
    }

    private function writeDebugLog($message, $overwrite = false) {
        $file = DIR_LOGS . 'gemini_debug.log';
        $handle = fopen($file, $overwrite ? 'w' : 'a');
        fwrite($handle, date('Y-m-d H:i:s') . " - " . $message . "\n" . str_repeat('=', 35) . "\n");
        fclose($handle);
    }
}