<?php
class ControllerExtensionModuleGeminiBlog extends Controller {
    private $error = array();

    // 当你在“扩展列表”点击蓝色的“安装”按钮时，会自动执行此方法
    public function install() {
        $this->load->model('extension/module/gemini_blog');
        $this->load->model('user/user_group');

        // 执行数据库创建
        $this->model_extension_module_gemini_blog->install();

        // 自动为管理员组添加权限，省去手动去用户组勾选的麻烦
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/gemini_blog');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/gemini_blog');
        
        // 同时给未来我们要写的工具页面也加好权限
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'tool/gemini_blog');
        $this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'tool/gemini_blog');
    }

    // 卸载时执行
    public function uninstall() {
        $this->load->model('extension/module/gemini_blog');
        $this->model_extension_module_gemini_blog->uninstall();
    }

    // 模块的主页面（入口）
    public function index() {
        $this->load->language('extension/module/gemini_blog');
        $this->document->setTitle("Gemini AI 博客任务系统");

        // 这里重定向到我们的实际工作工具页面
        $this->response->redirect($this->url->link('tool/gemini_blog', 'user_token=' . $this->session->data['user_token'], true));
    }
}