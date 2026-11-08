<?php
class ModelExtensionModuleGeminiBlog extends Model {
    public function install() {
        // 1. 创建 Prompt 模板表
        $this->db->query("
            CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "gemini_prompt` (
              `prompt_id` INT(11) NOT NULL AUTO_INCREMENT,
              `title` VARCHAR(255) NOT NULL,
              `content` TEXT NOT NULL,
              `date_added` DATETIME NOT NULL,
              PRIMARY KEY (`prompt_id`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
        ");

        // 2. 创建博客任务计划表
        $this->db->query("
            CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "gemini_blog_task` (
              `task_id` INT(11) NOT NULL AUTO_INCREMENT,
              `prompt_id` INT(11) NOT NULL,
              `keywords` VARCHAR(255) NOT NULL,
              `image_urls` TEXT,
              `target_links` TEXT,
              `schedule_time` DATETIME NOT NULL,
              `status` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0:Pending, 1:Processing, 2:Completed, 3:Failed',
              `post_id` INT(11) DEFAULT NULL,
              `error_log` TEXT,
              `date_added` DATETIME NOT NULL,
              PRIMARY KEY (`task_id`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
        ");

        // 3. 预设一个默认的球衣行业 Prompt 模板
        $default_prompt = "你是一个资深MLB体育博主。请围绕关键词 {keywords} 写一篇深度博客。
文中请自然地插入以下链接：{links}。
请分析我提供的图片链接 {images} 并在文中描述其视觉细节。
输出格式要求为 JSON，包含：
- title: 吸引人的标题
- meta_desc: 160字以内的SEO描述
- content: 带有 <h4> <p> <ul> 标签的 HTML 正文。";

        $this->db->query("INSERT INTO `" . DB_PREFIX . "gemini_prompt` SET 
            title = '默认球衣评测模板', 
            content = '" . $this->db->escape($default_prompt) . "', 
            date_added = NOW()");
    }

    public function uninstall() {
        // 卸载时可选：是否删除表（通常建议保留数据，除非明确需要清理）
        // $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "gemini_prompt`;");
        // $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "gemini_blog_task`;");
    }
}