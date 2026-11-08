<?php
class ModelToolGeminiBlog extends Model {
    // --- Prompt 相关 ---
    public function addPrompt($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "gemini_prompt SET title = '" . $this->db->escape($data['title']) . "', content = '" . $this->db->escape($data['content']) . "', date_added = NOW()");
    }

    public function editPrompt($prompt_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "gemini_prompt SET title = '" . $this->db->escape($data['title']) . "', content = '" . $this->db->escape($data['content']) . "' WHERE prompt_id = '" . (int)$prompt_id . "'");
    }

    public function deletePrompt($prompt_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "gemini_prompt WHERE prompt_id = '" . (int)$prompt_id . "'");
    }

    public function getPrompt($prompt_id) {
        return $this->db->query("SELECT * FROM " . DB_PREFIX . "gemini_prompt WHERE prompt_id = '" . (int)$prompt_id . "'")->row;
    }

    public function getPrompts() {
        return $this->db->query("SELECT * FROM " . DB_PREFIX . "gemini_prompt ORDER BY date_added DESC")->rows;
    }

    // --- Task 相关 ---
    public function addTask($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "gemini_blog_task SET 
            prompt_id = '" . (int)$data['prompt_id'] . "', 
            keywords = '" . $this->db->escape($data['keywords']) . "', 
            image_urls = '" . $this->db->escape($data['image_urls']) . "', 
            target_links = '" . $this->db->escape($data['target_links']) . "', 
            schedule_time = '" . $this->db->escape($data['schedule_time']) . "', 
            status = 0, 
            date_added = NOW()");
    }

    public function getTasks() {
        $sql = "SELECT t.*, p.title as prompt_name FROM " . DB_PREFIX . "gemini_blog_task t 
                LEFT JOIN " . DB_PREFIX . "gemini_prompt p ON (t.prompt_id = p.prompt_id) 
                ORDER BY t.schedule_time DESC";
        return $this->db->query($sql)->rows;
    }

    public function deleteTask($task_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "gemini_blog_task WHERE task_id = '" . (int)$task_id . "'");
    }
    // 获取单条任务详情
    public function getTask($task_id) {
        return $this->db->query("SELECT * FROM " . DB_PREFIX . "gemini_blog_task WHERE task_id = '" . (int)$task_id . "'")->row;
    }

    // 更新任务
    public function editTask($task_id, $data) {
        $this->db->query("UPDATE " . DB_PREFIX . "gemini_blog_task SET 
            prompt_id = '" . (int)$data['prompt_id'] . "', 
            keywords = '" . $this->db->escape($data['keywords']) . "', 
            image_urls = '" . $this->db->escape($data['image_urls']) . "', 
            target_links = '" . $this->db->escape($data['target_links']) . "', 
            schedule_time = '" . $this->db->escape($data['schedule_time']) . "', 
            status = '0' 
            WHERE task_id = '" . (int)$task_id . "'");
    }

    // 更新任务状态（用于手动执行时反馈）
    public function updateTaskStatus($task_id, $status, $error = '') {
        $this->db->query("UPDATE " . DB_PREFIX . "gemini_blog_task SET status = '" . (int)$status . "', error_log = '" . $this->db->escape($error) . "' WHERE task_id = '" . (int)$task_id . "'");
    }
}