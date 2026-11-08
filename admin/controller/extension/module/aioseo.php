<?php
class ControllerExtensionModuleAioseo extends Controller {

    protected $error = array();

     public function customizeproduct() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        require_once(DIR_SYSTEM . 'library/seo_validator.php');

        $data = $this->loadControllers();

        $this->validate = new SeoValidator($this->registry);

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addLink("view/stylesheet/allseo.css","stylesheet");

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate($this->request->post))) {

            $post_data = $this->request->post;
               
            foreach($post_data['product']['keyword'] as $product_id => $keyword) {
               
                $object = new SeoProduct($this->registry);
                $object->setSeoKeyword($keyword);
                $object->setQuery('product_id='.$product_id);

                $title = $meta_description = $meta_keywords = array();

                foreach($post_data['product']['product_description'][$product_id] as $language_id => $r) {
                    $title[$language_id] = $r['title'];
                    $meta_keywords[$language_id] = $r['meta_keywords'];
                    $meta_description[$language_id] = $r['meta_description'];
                    $tags[$language_id] = $r['tags'];
                }

                $object->setTitle($title);
                $object->setId($product_id);
                $object->setMetaKeywords($meta_keywords);
                $object->setMetaDescription($meta_description);
                $object->setTags($tags);
                $object->save();
            }


            $data['tab'] = $post_data['tab'];
            $this->session->data['success'] = $this->language->get('text_success_'.$post_data['tab']);

            $url = '';
                        
            if (isset($this->request->get['filter_keyword'])) {
                $url .= '&filter_keyword=' . urlencode(html_entity_decode($this->request->get['filter_keyword'], ENT_QUOTES, 'UTF-8'));
            }  

            if (isset($this->request->get['filter_category'])) {
                $url .= '&filter_category=' . urlencode(html_entity_decode($this->request->get['filter_category'], ENT_QUOTES, 'UTF-8'));
            } 
            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }    

            $this->response->redirect($this->url->link("extension/module/aioseo/customizeproduct","user_token=" . $this->session->data['user_token'] . $url,TRUE));

        }

        $data['success'] = '';
        if(isset($this->session->data['success'])){
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }    

        if (isset($this->request->get['filter_keyword'])) {
            $filter_keyword = $this->request->get['filter_keyword'];
        } else {
            $filter_keyword = '';
        }

         if (isset($this->request->get['filter_category'])) {
            $filter_category = $this->request->get['filter_category'];
        } else {
            $filter_category = '';
        }
        
        $url = '';
                        
        if (isset($this->request->get['filter_keyword'])) {
            $url .= '&filter_keyword=' . urlencode(html_entity_decode($this->request->get['filter_keyword'], ENT_QUOTES, 'UTF-8'));
        }  

        if (isset($this->request->get['filter_category'])) {
            $url .= '&filter_category=' . urlencode(html_entity_decode($this->request->get['filter_category'], ENT_QUOTES, 'UTF-8'));
        } 
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }      
       
        $this->languages = $this->model_extension_module_aioseo->getLanguages();

        foreach($this->languages as $language){
            $data['currency'] = $language['language_id'];
            break;
        }

        if (isset($this->error['title'])) {
            foreach($this->error['title'] as $key => $value){
                $data['error_'.$key] = $this->error['title'][$key];
            }
        }

        if(isset($this->error['already_exists'])){
            $data['error_already_exists'] = $this->error['already_exists'];
        }else{
            $data['error_already_exists'] = '';
        }

        $data['languages'] = $this->languages;

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['code'])) {
            $data['error_code'] = $this->error['code'];
        } else {
            $data['error_code'] = '';
        }       

        $data['autofill'] = $this->url->link("extension/module/aioseo/loadgeneralauto","user_token=" . $this->session->data['user_token'],TRUE);
        $data['action'] = $this->url->link("extension/module/aioseo/customizeproduct","user_token=" . $this->session->data['user_token'].$url,TRUE);
        $data['cancel'] = $this->url->link("extension/module/aioseo/customizeproduct","user_token=" . $this->session->data['user_token'],TRUE);
        $data['filter'] =  html_entity_decode($this->url->link("extension/module/aioseo/customizeproduct","user_token=" . $this->session->data['user_token'],TRUE));
        
        $data['user_token'] = $this->session->data['user_token'];
        $this->load->model('tool/image');

        $this->config_limit_admin = $this->config->get('config_limit_admin');

        $data['products'] = $this->loadProducts($filter_keyword);

        if (isset($this->request->post['custom_url_store_status'])) {
            $data['custom_url_store_status'] = $this->request->post['custom_url_store_status'];
        } else {
            $data['custom_url_store_status'] = $this->config->get('custom_url_store_status');
        }
        
        $data['filter_keyword'] = $filter_keyword;
        $data['filter_category'] = $filter_category;

        $url = '';
                        
        if (isset($this->request->get['filter_keyword'])) {
            $url .= '&filter_keyword=' . urlencode(html_entity_decode($this->request->get['filter_keyword'], ENT_QUOTES, 'UTF-8'));
        }  

        if (isset($this->request->get['filter_category'])) {
            $url .= '&filter_category=' . urlencode(html_entity_decode($this->request->get['filter_category'], ENT_QUOTES, 'UTF-8'));
        }

        $data['pagination_product'] = $this->multiPagination('pagination_product',$this->config_limit_admin, $this->product_total, $this->page_product, $url);
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/aioseocustomize_product', $data));
    }

    public function customizecategory() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        require_once(DIR_SYSTEM . 'library/seo_validator.php');

        $data = $this->loadControllers();

        $this->validate = new SeoValidator($this->registry);

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addLink("view/stylesheet/allseo.css","stylesheet");

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate($this->request->post))) {

            $post_data = $this->request->post;
               
            foreach($post_data['category']['keyword'] as $category_id => $keyword) {
                $object = new SeoCategory($this->registry);
                $object->setSeoKeyword($keyword);
                $object->setQuery('category_id='.$category_id);

                $title = $meta_description = $meta_keywords = array();

                foreach($post_data['category']['category_description'][$category_id] as $language_id => $r) {
                    $title[$language_id] = $r['title'];
                    $meta_keywords[$language_id] = $r['meta_keywords'];
                    $meta_description[$language_id] = $r['meta_description'];
                }

                $object->setTitle($title);
                $object->setId($category_id);
                $object->setMetaKeywords($meta_keywords);
                $object->setMetaDescription($meta_description);
                $object->save();
            }


            $this->session->data['success'] = $this->language->get('text_success_tab_categories');

            $url = '';
                        
            if (isset($this->request->get['filter_keyword'])) {
                $url .= '&filter_keyword=' . urlencode(html_entity_decode($this->request->get['filter_keyword'], ENT_QUOTES, 'UTF-8'));
            }  

            if (isset($this->request->get['filter_category'])) {
                $url .= '&filter_category=' . urlencode(html_entity_decode($this->request->get['filter_category'], ENT_QUOTES, 'UTF-8'));
            } 
            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }    

            $this->response->redirect($this->url->link("extension/module/aioseo/customizecategory","user_token=" . $this->session->data['user_token'] . $url,TRUE));

        }

        $data['success'] = '';
        if(isset($this->session->data['success'])){
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }    

        if (isset($this->request->get['filter_keyword'])) {
            $filter_keyword = $this->request->get['filter_keyword'];
        } else {
            $filter_keyword = '';
        }

         if (isset($this->request->get['filter_category'])) {
            $filter_category = $this->request->get['filter_category'];
        } else {
            $filter_category = '';
        }
        
        $url = '';
                        
        if (isset($this->request->get['filter_keyword'])) {
            $url .= '&filter_keyword=' . urlencode(html_entity_decode($this->request->get['filter_keyword'], ENT_QUOTES, 'UTF-8'));
        }  

        if (isset($this->request->get['filter_category'])) {
            $url .= '&filter_category=' . urlencode(html_entity_decode($this->request->get['filter_category'], ENT_QUOTES, 'UTF-8'));
        } 
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }      
       
        $data['domain'] = $this->config->get('config_url');
        $this->languages = $this->model_extension_module_aioseo->getLanguages();

        foreach($this->languages as $language){
            $data['currency'] = $language['language_id'];
            break;
        }

        if (isset($this->error['title'])) {
            foreach($this->error['title'] as $key => $value){
                $data['error_'.$key] = $this->error['title'][$key];
            }
        }

        if(isset($this->error['already_exists'])){
            $data['error_already_exists'] = $this->error['already_exists'];
        }else{
            $data['error_already_exists'] = '';
        }

        $data['languages'] = $this->languages;

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['code'])) {
            $data['error_code'] = $this->error['code'];
        } else {
            $data['error_code'] = '';
        }       

        $data['autofill'] = $this->url->link("extension/module/aioseo/loadgeneralauto","user_token=" . $this->session->data['user_token'],TRUE);
        $data['action'] = $this->url->link("extension/module/aioseo/customizecategory","user_token=" . $this->session->data['user_token'].$url,TRUE);
        $data['cancel'] = $this->url->link("extension/module/aioseo/customizecategory","user_token=" . $this->session->data['user_token'],TRUE);
        $data['filter'] =  html_entity_decode($this->url->link("extension/module/aioseo/customizecategory","user_token=" . $this->session->data['user_token'],TRUE));
        
        $data['user_token'] = $this->session->data['user_token'];
        $this->load->model('tool/image');

        $this->config_limit_admin = $this->config->get('config_limit_admin');

        $data['categorys'] = $this->loadCategories($filter_category);

        if (isset($this->request->post['custom_url_store_status'])) {
            $data['custom_url_store_status'] = $this->request->post['custom_url_store_status'];
        } else {
            $data['custom_url_store_status'] = $this->config->get('custom_url_store_status');
        }
        
        $data['filter_keyword'] = $filter_keyword;
        $data['filter_category'] = $filter_category;
        
        $url = '';
                        
        if (isset($this->request->get['filter_keyword'])) {
            $url .= '&filter_keyword=' . urlencode(html_entity_decode($this->request->get['filter_keyword'], ENT_QUOTES, 'UTF-8'));
        }  

        if (isset($this->request->get['filter_category'])) {
            $url .= '&filter_category=' . urlencode(html_entity_decode($this->request->get['filter_category'], ENT_QUOTES, 'UTF-8'));
        } 

        $data['pagination_category'] =  $this->multiPaginationCategory('pagination_category',$this->config_limit_admin, $this->category_total, $this->page_category, $url);
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/aioseocustomize_category', $data));
    }

    public function customizeinformation() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        require_once(DIR_SYSTEM . 'library/seo_validator.php');

        $data = $this->loadControllers();

        $this->validate = new SeoValidator($this->registry);

        $this->document->setTitle($this->language->get('heading_title'));

        $this->document->addLink("view/stylesheet/allseo.css","stylesheet");
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate($this->request->post))) {
            
            $post_data = $this->request->post;

           foreach($post_data['information']['keyword'] as $information_id => $keyword) {
                
                $object = new SeoInformation($this->registry);
                $object->setSeoKeyword($keyword);
                $object->setQuery('information_id='.$information_id);

                $title = $meta_description = $meta_keywords = array();

                foreach($post_data['information']['information_description'][$information_id] as $language_id => $r) {
                    $title[$language_id] = $r['title'];
                    $meta_keywords[$language_id] = $r['meta_keywords'];
                    $meta_description[$language_id] = $r['meta_description'];
                }

                $object->setTitle($title);
                $object->setId($information_id);
                $object->setMetaKeywords($meta_keywords);
                $object->setMetaDescription($meta_description);
                $object->save();

            }

            $this->session->data['success'] = $this->language->get('text_success_tab_information_pages');
  
            $this->response->redirect($this->url->link("extension/module/aioseo/customizeinformation","user_token=" . $this->session->data['user_token'],TRUE));
        }

        $data['success'] = '';
        if(isset($this->session->data['success'])){
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        $data['domain'] = $this->config->get('config_url');
        $this->languages = $this->model_extension_module_aioseo->getLanguages();

        foreach($this->languages as $language){
            $data['currency'] = $language['language_id'];
            break;
        }

        if (isset($this->error['title'])) {
            foreach($this->error['title'] as $key => $value){
                $data['error_'.$key] = $this->error['title'][$key];
            }
        }

        if(isset($this->error['already_exists'])){
            $data['error_already_exists'] = $this->error['already_exists'];
        }else{
            $data['error_already_exists'] = '';
        }

        $data['languages'] = $this->languages;

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['code'])) {
            $data['error_code'] = $this->error['code'];
        } else {
            $data['error_code'] = '';
        }       

        $data['autofill'] = $this->url->link("extension/module/aioseo/loadgeneralauto","user_token=" . $this->session->data['user_token'],TRUE);
        $data['action'] = $this->url->link("extension/module/aioseo/customizeinformation","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("extension/module/aioseo/customizeinformation","user_token=" . $this->session->data['user_token'],TRUE);
        $data['filter'] =  $this->url->link("extension/module/aioseo/customizeinformation","user_token=" . $this->session->data['user_token'],TRUE);
        
        $data['user_token'] = $this->session->data['user_token'];
        $this->load->model('tool/image');

        $this->config_limit_admin = $this->config->get('config_limit_admin');

        $data['informations'] = $this->loadInformationPages();
       
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/aioseocustomize_information', $data));
    }

    public function customizemanufacturer() {

       $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        require_once(DIR_SYSTEM . 'library/seo_validator.php');

        $data = $this->loadControllers();

        $this->validate = new SeoValidator($this->registry);

        $this->document->setTitle($this->language->get('heading_title'));
        $this->document->addLink("view/stylesheet/allseo.css","stylesheet");
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate($this->request->post))) {
            
            $post_data = $this->request->post;

            foreach($post_data['manufacturer']['keyword'] as $manufacturer_id => $keyword) {

                $object = new SeoManufacturer($this->registry);
                $object->setSeoKeyword($keyword);
                $object->setQuery('manufacturer_id='.$manufacturer_id);

                $title = $meta_description = $meta_keywords = array();

                foreach($post_data['manufacturer']['manufacturer_description'][$manufacturer_id] as $language_id => $r) {
                    $title[$language_id] = $r['title'];
                    $meta_keywords[$language_id] = $r['meta_keywords'];
                    $meta_description[$language_id] = $r['meta_description'];
                }

                $object->setTitle($title);
                $object->setId($manufacturer_id);
                $object->setMetaKeywords($meta_keywords);
                $object->setMetaDescription($meta_description);
                $object->save();
            }

            $this->session->data['success'] = $this->language->get('text_success_tab_manufacturers');
 
            $this->response->redirect($this->url->link("extension/module/aioseo/customizemanufacturer","user_token=" . $this->session->data['user_token'],TRUE));
        }

        $data['success'] = '';
        if(isset($this->session->data['success'])){
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        $data['domain'] = $this->config->get('config_url');
       
        $this->languages = $this->model_extension_module_aioseo->getLanguages();

        foreach($this->languages as $language){
            $data['currency'] = $language['language_id'];
            break;
        }

        if (isset($this->error['title'])) {
            foreach($this->error['title'] as $key => $value){
                $data['error_'.$key] = $this->error['title'][$key];
            }
        }

        if(isset($this->error['already_exists'])){
            $data['error_already_exists'] = $this->error['already_exists'];
        }else{
            $data['error_already_exists'] = '';
        }

        $data['languages'] = $this->languages;

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['code'])) {
            $data['error_code'] = $this->error['code'];
        } else {
            $data['error_code'] = '';
        }       

        $data['autofill'] = $this->url->link("extension/module/aioseo/loadgeneralauto","user_token=" . $this->session->data['user_token'],TRUE);
        $data['action'] = $this->url->link("extension/module/aioseo/customizemanufacturer","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("extension/module/aioseo/customizemanufacturer","user_token=" . $this->session->data['user_token'],TRUE);
        $data['filter'] =  $this->url->link("extension/module/aioseo/customizemanufacturer","user_token=" . $this->session->data['user_token'],TRUE);
        
        $data['user_token'] = $this->session->data['user_token'];
        $this->load->model('tool/image');

        $this->config_limit_admin = $this->config->get('config_limit_admin');

        $data['manufacturers'] = $this->loadManufactures();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/aioseocustomize_manufacturer', $data));
    }

    public function customizegeneral() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        require_once(DIR_SYSTEM . 'library/seo_validator.php');

        $data = $this->loadControllers();

        $this->validate = new SeoValidator($this->registry);

        $this->document->setTitle($this->language->get('heading_title'));
        $this->document->addLink("view/stylesheet/allseo.css","stylesheet");
        
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate($this->request->post))) {
            
            $post_data = $this->request->post;

            $this->model_extension_module_aioseo->clearGeneral();

            if(isset($post_data['custom_url_store'])) {
                foreach($post_data['custom_url_store'] as $row) {

                    $object = new SeoGeneral($this->registry);
                    $object->setSeoKeyword($row['keyword']);
                    $object->setQuery('route='.$row['query']);

                    $title = $meta_description = $meta_keywords = array();

                    foreach($row['custom_url_store_description'] as $language_id => $r) {
                        $title[$language_id] = $r['name'];
                        $meta_keywords[$language_id] = $r['meta_keywords'];
                        $meta_description[$language_id] = $r['meta_description'];
                    }

                    $object->setTitle($title);
                    $object->setId($row['query']);
                    $object->setMetaKeywords($meta_keywords);
                    $object->setMetaDescription($meta_description);
                    $object->save();
                }
            }

            $this->session->data['success'] = $this->language->get('text_success_tab_general');
 
            $this->response->redirect($this->url->link("extension/module/aioseo/customizegeneral","user_token=" . $this->session->data['user_token'],TRUE));
        }

        $data['success'] = '';

        if(isset($this->session->data['success'])){
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        $data['domain'] = $this->config->get('config_url');
       
        $this->languages = $this->model_extension_module_aioseo->getLanguages();

        foreach($this->languages as $language){
            $data['currency'] = $language['language_id'];
            break;
        }

        if (isset($this->error['title'])) {
            foreach($this->error['title'] as $key => $value){
                $data['error_'.$key] = $this->error['title'][$key];
            }
        }

        if(isset($this->error['already_exists'])){
            $data['error_already_exists'] = $this->error['already_exists'];
        }else{
            $data['error_already_exists'] = '';
        }

        $data['languages'] = $this->languages;

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['code'])) {
            $data['error_code'] = $this->error['code'];
        } else {
            $data['error_code'] = '';
        }       

        $data['autofill'] = $this->url->link("extension/module/aioseo/loadgeneralauto","user_token=" . $this->session->data['user_token'],TRUE);
        $data['action'] = $this->url->link("extension/module/aioseo/customizegeneral","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("extension/module/aioseo/customizegeneral","user_token=" . $this->session->data['user_token'],TRUE);
        $data['filter'] =  $this->url->link("extension/module/aioseo/customizegeneral","user_token=" . $this->session->data['user_token'],TRUE);
        
        $data['user_token'] = $this->session->data['user_token'];
        $this->load->model('tool/image');

        $this->config_limit_admin = $this->config->get('config_limit_admin');

        $data['custom_url_store_data'] = $this->loadGeneral();
        
        if (isset($this->request->post['custom_url_store_status'])) {
            $data['custom_url_store_status'] = $this->request->post['custom_url_store_status'];
        } else {
            $data['custom_url_store_status'] = $this->config->get('custom_url_store_status');
        }
       
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/aioseocustomize_general', $data));
    }
    
    public function loadGeneralAuto(){
    
        $this->load->model('extension/module/aioseo');
        
        function seo_map($file){
                                $ignore_list = array(
                                    'common/column_left', 'common/column_right', 'common/content_bottom', 'common/content_top', 
                                    'common/footer', 'common/header', 'common/landing', 'common/maintenance', 'common/cart','common/search',
                                    'common/seo_content', 'common/seo_url','common/currency','common/language', 'checkout/confirm','checkout/voucher','checkout/guest','checkout/reward', 
                                    'checkout/guest_shipping', 'checkout/login', 'checkout/manual', 'checkout/payment_address', 
                                    'checkout/payment_method', 'checkout/register', 'checkout/shipping_address', 'checkout/shipping_method','extension/module',
                                    'product/product', 'product/category','information/information','checkout/simplecheckout','checkout/simplecheckout_cart','checkout/simplecheckout_comment','checkout/simplecheckout_customer','checkout/simplecheckout_login',
                                    'checkout/simplecheckout_payment','checkout/simplecheckout_payment_address','checkout/simplecheckout_shipping','checkout/simplecheckout_shipping_address',
                                    'checkout/simplecheckout_summary','checkout/simplecheckout_text','common/column_left-magictoolbox','common/column_right-magic-toolbox','common/content_bottom-magictoolbox',
                                    'common/content_top-magictoolbox','common/header-magictoolbox','common/dashboard-magictoolbox','common/simple_connector','common/switch_mobile',
                                    'product/category-magictoolbox','shipping/teaser',
                                );

                                if( !preg_match('/^(module|feed|payment|mail)\/.+$/', $file) && !in_array($file, $ignore_list) ) {
                                    return $file;
                                } else {
                                    return '';
                                }
                        }
                        
          function file_map($file){
                        $ignore_list = array("api","amazonus","amazon","event","ebay","openbay","tool","journal","journal2","kuler","quickcheckout","startup","d_quickcheckout","total","extension");
                            if (!in_array(basename(dirname($file)), $ignore_list)) {
                               return basename(dirname($file)). '/' . basename($file, '.php');
                            }        
                        }
                        
        $languages = $this->model_extension_module_aioseo->getLanguages();
        $general_urls = array_filter(array_map('file_map', glob(DIR_CATALOG . 'controller/*/*.php')), 'seo_map');
        $SeoKeyword = array();
        $this->model_extension_module_aioseo->clearGeneral();
        foreach($general_urls as $general_url){
            $object = new SeoGeneral($this->registry);
            $object->setQuery('route='.$general_url);
            $title = $meta_description = $meta_keywords = array();
            
            foreach($languages as $language) {
                if($language['status']){
                    $lcode = "";
                    if ($this->config->get('config_language') != $language['code']) {
                        $lcode = "-".$language['code'];
                    }    
                    if(dirname($general_url)== "affiliate"){
                        $SeoKeyword[$language['language_id']] = "affliate-".basename($general_url).$lcode;
                    } elseif ($general_url=="checkout/success") {
                        $SeoKeyword[$language['language_id']] = "checkout-".basename($general_url).$lcode;
                    } elseif ($general_url=="information/tracking") {
                        $SeoKeyword[$language['language_id']] = "shipping-".basename($general_url).$lcode;
                    } elseif (dirname($general_url)== "amazon") {
                        $SeoKeyword[$language['language_id']] = "amazon-".basename($general_url).$lcode;
                    } elseif (dirname($general_url)== "amazonus") {
                        $SeoKeyword[$language['language_id']] = "amazonus-".basename($general_url).$lcode;
                    }  elseif (dirname($general_url)== "play") {
                        $SeoKeyword[$language['language_id']] = "play-".basename($general_url).$lcode;
                    } else {
                        $SeoKeyword[$language['language_id']] = basename($general_url).$lcode;
                    }
            
                    $heading_title = '';
                    $language_file_path = DIR_CATALOG.'language/'.$language['code'].'/'.$general_url.'.php';
                    if(file_exists($language_file_path)){
                        $_ = array();
                        $language_data = require_once($language_file_path);
                        $heading_title = isset($_['heading_title'])?$_['heading_title']:'';
                        $this->log->write($heading_title);
                    }
                    $title[$language['language_id']]            = $heading_title;
                    $meta_keywords[$language['language_id']]    = $heading_title;
                    $meta_description[$language['language_id']] = $heading_title;
                }
            }
            $object->setSeoKeyword($SeoKeyword);
            $object->setTitle($title);
            
            $object->setId($general_url);
            $object->setMetaKeywords($meta_keywords);
            $object->setMetaDescription($meta_description);
            $object->save();
        }
    }

    public function loadGeneral() {
    
        $data['custom_url_store_data'] = array();

        $custom_url_data = Seo::findGeneral($this->registry);
        $custom_url_total = Seo::findGeneralTotal($this->registry);
       
        foreach($custom_url_data as $object) {

            $custom_url_store_description = array();

            $titles = $object->getTitle();
            $meta_keywords = $object->getMetaKeywords();
            $meta_description = $object->getMetaDescription();

            //if(isset($this->request->post['manufacturer']['manufacturer_id']) && $current_tab){
              //  $keyword = $this->request->post['manufacturer']['manufacturer_id'][$manufacturer->getId()];
            //}else{
            $keyword = $object->getSeoKeyword();
            //}

            foreach($this->languages as $language) {
                $custom_url_store_description[$language['language_id']] = array(
                    'name' => array_key_exists($language['language_id'], $titles) ? $titles[$language['language_id']]:'',
                    'meta_keywords' => array_key_exists($language['language_id'], $meta_keywords) ? $meta_keywords[$language['language_id']]:'',
                    'meta_description' => array_key_exists($language['language_id'], $meta_description) ? $meta_description[$language['language_id']]:''
                );
            }

             $data['custom_url_store_data'][] = array(
                'id' => $object->getId(),
                'keyword'    => $keyword,
                'custom_url_store_description'   => $custom_url_store_description
            );
        }

        
        return $data['custom_url_store_data'];
        
    }


    public function loadProducts($keyword = '') {

        $this->load->model('catalog/product');

        $this->page_product = 1;

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $this->page_product = $page;

        $data = array(
            'start'           => ($this->page_product - 1) * $this->config_limit_admin,
            'limit'           => $this->config_limit_admin,
            'filter_keyword'  => $keyword
        );
       
        $products = Seo::findProducts($this->registry, $data);
        
        $this->product_total = Seo::findProductsTotal($this->registry, $data);
       
        foreach ($products as $product) {

            $product_image = $product->getImage();

            if ($product_image && file_exists(DIR_IMAGE . $product_image)) {
                $image = $this->model_tool_image->resize($product_image, 40, 40);
            } else {
                $image = $this->model_tool_image->resize('no_image.jpg', 40, 40);
            }

            $current_tab = (isset($this->request->post['tab']) && $this->request->post['tab']=='tab_products') ? 1 : 0;

            if(isset($this->request->post['product']['product_description']) && $current_tab){
                $product_description = $this->request->post['product']['product_description'][$product->getId()];
            }else{
                $titles = $product->getTitle();
                $meta_keywords = $product->getMetaKeywords();
                $meta_description = $product->getMetaDescription();
                $tags = $product->getTags();

                $product_description = array();

                foreach($this->languages as $language) {
                    if(array_key_exists($language['language_id'], $titles)) {
                        $product_description[$language['language_id']] = array(
                            'title' => $titles[$language['language_id']],
                            'meta_keywords' => $meta_keywords[$language['language_id']],
                            'meta_description' => $meta_description[$language['language_id']],
                            'tags' => $tags[$language['language_id']]
                        );
                    } else {
                        $product_description[$language['language_id']] = array(
                            'title' => '',
                            'meta_keywords' => '',
                            'meta_description' => '',
                            'tags' => ''
                        );
                    }
                }
            }
            
            if(isset($this->request->post['product']['keyword']) && $current_tab){
                $keyword = array();
                $keyword['language_id'] = $this->request->post['product']['keyword'][$product->getId()];
            }else{
                $keyword = $product->getSeoKeyword();
            }
           
            $data['products'][] = array(
                'product_id' => $product->getId(),
                'name'       => $product->getName(),
                'model'      => $product->getModel(),
                'keyword'    => $keyword,
                'product_description'   => $product_description,
                'image'      => $image
            );
        }
       
       return $data['products'];
    }


    public function loadCategories($category = "") {

        $this->load->model('catalog/category');

        $this->page_category = 1;

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $this->page_category = $page;

        $data = array(
            'start'           => ($this->page_category - 1) * $this->config_limit_admin,
            'limit'           => $this->config_limit_admin,
            'filter_keyword'  => $category
        );

        $categories = Seo::findCategories($this->registry, $data);
        $this->category_total = Seo::findCategoriesTotal($this->registry, $data);
        $data['categories'] = array();
        foreach ($categories as $category) {

            $current_tab = (isset($this->request->post['tab']) && $this->request->post['tab']=='tab_categories') ? 1 : 0;

            if(isset($this->request->post['category']['category_description']) && $current_tab){
                $category_description = $this->request->post['category']['category_description'][$category->getId()];
            } else {

                $titles = $category->getTitle();
                $meta_keywords = $category->getMetaKeywords();
                $meta_description = $category->getMetaDescription();

                $category_description = array();

                foreach($this->languages as $language) {
                    if(array_key_exists($language['language_id'], $titles)) {
                        $category_description[$language['language_id']] = array(
                            'title' => $titles[$language['language_id']],
                            'meta_keywords' => $meta_keywords[$language['language_id']],
                            'meta_description' => $meta_description[$language['language_id']]
                        );
                    } else {
                        $category_description[$language['language_id']] = array(
                            'title' => '',
                            'meta_keywords' => '',
                            'meta_description' => ''
                        );
                    }
                }
            }

            if(isset($this->request->post['category']['keyword']) && $current_tab){
                $keyword = array();
                $keyword['language_id'] = $this->request->post['category']['keyword'][$category->getId()];
            }else{
                $keyword = $category->getSeoKeyword();
            }

            $data['categories'][] = array(
                'category_id' => $category->getId(),
                'name'       => $category->getName(),
                'keyword'    => $keyword,
                'category_description'  => $category_description
            );
        }
        return $data['categories'];
    }


    public function loadManufactures() {

        $this->load->model('catalog/manufacturer');

        $manufacturers = Seo::findManufacturers($this->registry);
        $manufacturer_total = Seo::findManufacturersTotal($this->registry);

        foreach($manufacturers as $manufacturer){

            $current_tab = (isset($this->request->post['tab']) && $this->request->post['tab']=='tab_manufacturers') ? 1 : 0;

            if(isset($this->request->post['manufacturer']['manufacturer_description']) && $current_tab){
                $manufacturer_description = $this->request->post['manufacturer']['manufacturer_description'][$manufacturer->getId()];
            }else{

                $titles = $manufacturer->getTitle();
                $meta_keywords = $manufacturer->getMetaKeywords();
                $meta_description = $manufacturer->getMetaDescription();

                $manufacturer_description = array();

                foreach($this->languages as $language) {
                    $manufacturer_description[$language['language_id']] = array(
                        'title' => array_key_exists($language['language_id'], $titles) ? ($titles[$language['language_id']]):'',
                        'meta_keywords' => array_key_exists($language['language_id'], $meta_keywords) ? $meta_keywords[$language['language_id']] : '' ,
                        'meta_description' => array_key_exists($language['language_id'], $meta_description) ? $meta_description[$language['language_id']] : ''
                    );
                }

            }

            if(isset($this->request->post['manufacturer']['manufacturer_id']) && $current_tab){
                $keyword = array();
                $keyword['language_id'] = $this->request->post['manufacturer']['manufacturer_id'][$manufacturer->getId()];
            }else{
                $keyword = $manufacturer->getSeoKeyword();
            }

            $data['manufacturers'][] = array(
                'manufacturer_id' => $manufacturer->getId(),
                'name'       => $manufacturer->getName(),
                'keyword'    => $keyword,
                'manufacturer_description'  => $manufacturer_description
            );
        }
        return $data['manufacturers'];
    }


    public function loadInformationPages() {

        $this->load->model('catalog/information');

        $data = array();

        $informations = Seo::findInformations($this->registry);
        $information_total = Seo::findInformationsTotal($this->registry);

        foreach($informations as $information){

            $current_tab = (isset($this->request->post['tab']) && $this->request->post['tab']=='tab_information_pages') ? 1 : 0;

            if(isset($this->request->post['information']['information_description']) && $current_tab){
                $information_description = $this->request->post['information']['information_description'][$information->getId()];
            }else{
                $titles = $information->getTitle();
                $meta_keywords = $information->getMetaKeywords();
                $meta_description = $information->getMetaDescription();

                $information_description = array();

                foreach($this->languages as $language) {
                    if(array_key_exists($language['language_id'], $titles)) {
                        $information_description[$language['language_id']] = array(
                            'title' => $titles[$language['language_id']],
                            'meta_keywords' => $meta_keywords[$language['language_id']],
                            'meta_description' => $meta_description[$language['language_id']]
                        );
                    } else {
                        $information_description[$language['language_id']] = array(
                            'title' => '',
                            'meta_keywords' => '',
                            'meta_description' => ''
                        );
                    }
                }
            }

            if(isset($this->request->post['information']['keyword']) && $current_tab){
                $keyword = array();
                $keyword['language_id'] = $this->request->post['information']['keyword'][$information->getId()];
            }else{
                $keyword = $information->getSeoKeyword();
            }

            $data['informations'][] = array(
                'name'  =>  $information->getName(),
                'information_id' => $information->getId(),
                'keyword'    => $keyword,
                'information_description'   => $information_description
            );
        }
        return $data['informations'];
    }

    public function index() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');
        $this->model_extension_module_aioseo->createTablesInDatabse();

        $data = $this->loadControllers();

        //$this->document->addLink("view/javascript/aios/css/style-responsive.css","stylesheet");

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validateAutogenerate())) {
            // Remember that KEY of $pattern array has to be the actual column name of xstore_seo_pattern table

            $dynamic_success = '';
            $success = $this->language->get('text_success');
            /*  PRODUCTS  */
            if (isset($this->request->post['products_url'])) {
                $pattern = array(
                    'product_url_keyword'       =>  $this->request->post['products_url_template']
                );
                $this->model_extension_module_aioseo->generateProductUrlKeyword($this->request->post['products_url_template'], $pattern);
                $dynamic_success = $this->language->get('product_url_keyword');
            }
            if(isset($this->request->post['products_title'])){
                $pattern = array(
                    'product_title'       =>  $this->request->post['products_title_template']
                );
                $this->model_extension_module_aioseo->generateProductTitle($this->request->post['products_title_template'], $pattern);
                $dynamic_success = $this->language->get('product_title');
            }
            if (isset($this->request->post['product_keywords'])) {
                $pattern = array(
                    'product_meta_keywords' =>  $this->request->post['product_keywords_template']
                );
                $this->model_extension_module_aioseo->generateProductMetaKeywords($this->request->post['product_keywords_template'], null, $pattern);
                
                $dynamic_success = $this->language->get('product_meta_keywords');
            }
            if (isset($this->request->post['product_description'])) {
                $pattern = array(
                    'product_meta_description'  =>  $this->request->post['product_description_template']
                );
                $this->model_extension_module_aioseo->generateProductMetaDescription($this->request->post['product_description_template'], $pattern);
                $dynamic_success = $this->language->get('product_meta_description');
            }
            if (isset($this->request->post['product_tags'])) {
                $pattern = array(
                    'product_tags'  =>  $this->request->post['product_tags_template']
                );
                $this->model_extension_module_aioseo->generateProductTags($this->request->post['product_tags_template'], $pattern);
                $dynamic_success = $this->language->get('product_tags');
            }
            if (isset($this->request->post['product_image'])) {
                $pattern = array(
                    'product_image_name'    =>  $this->request->post['product_image_template']
                );
                $this->model_extension_module_aioseo->generateProductImage($this->request->post['product_image_template'], $pattern);
                $dynamic_success = $this->language->get('product_image_name');
            }
            
            if (isset($this->error['warning'])) {
                $data['error_warning'] = $this->error['warning'];
            } else {
              $data['success'] = $dynamic_success . ' ' . $success;
               $dynamic_success = '';
            }

        }
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['user_token'] = $this->session->data['user_token'];
        
        if($this->request->server['REQUEST_METHOD'] != 'POST'){
            $this->load->model('extension/module/aioseo');
            $pattern = $this->model_extension_module_aioseo->getSeoPattern();
        }

        $user_defined_text = $this->language->get('user_defined_text');
        $user_defined_text_meta = $this->language->get('user_defined_text_meta');

        // Products

        if (isset($this->request->post['products_url_template'])) {
            $data['products_url_template'] = $this->request->post['products_url_template'];
        } elseif(isset($pattern['product_url_keyword']) && $pattern['product_url_keyword']) {
            $data['products_url_template'] = $pattern['product_url_keyword'];
        } else{
            $data['products_url_template'] = '[product_name], [model_name], [manufacturer_name], [meta_title]';
        }
        $pattern_available = '[product_name], [model_name], [manufacturer_name], [product_price], [meta_title]';
        $data['help_product_seo_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available);
        $data['text_product_url_keyword'] = sprintf($this->language->get('dynamic_main_description'), 'Product', $this->language->get('text_url_keyword'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['products_title_template'])) {
            $data['products_title_template'] = $this->request->post['products_title_template'];
        } elseif(isset($pattern['product_title']) && $pattern['product_title']) {
            $data['products_title_template'] = $pattern['product_title'];
        } else{
            $data['products_title_template'] = '[product_name], [product_description]';
        }
        $pattern_available = '[product_name], [product_description], [product_price], [model_name], [manufacturer_name]';
        $data['help_product_title'] = sprintf($this->language->get('dymanic_text'), $pattern_available);
        $data['text_product_title'] = sprintf($this->language->get('dynamic_main_description'), 'Product', $this->language->get('text_title'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['product_keywords_template'])) {
            $data['product_keywords_template'] = $this->request->post['product_keywords_template'];
        } elseif(isset($pattern['product_meta_keywords']) && $pattern['product_meta_keywords']) {
            $data['product_keywords_template'] = $pattern['product_meta_keywords'];
        } else{
            $data['product_keywords_template'] = '[product_name], [model_name], [manufacturer_name], [categories_names]';
        }
        $pattern_available = '[product_name], [model_name], [manufacturer_name], [categories_names], [product_price]';
        $data['help_meta_keywords'] = sprintf($this->language->get('dymanic_text'), $pattern_available);
        $data['text_product_meta_keywords'] = sprintf($this->language->get('dynamic_main_description'), 'Product', $this->language->get('text_meta_keywords'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['product_description_template'])) {
            $data['product_description_template'] = $this->request->post['product_description_template'];
        } elseif(isset($pattern['product_meta_description']) && $pattern['product_meta_description']) {
            $data['product_description_template'] = $pattern['product_meta_description'];
        } else{
            $data['product_description_template'] = '[product_name], [product_description]';
        }
        $pattern_available = '[product_name], [product_description], [product_price]';
        $data['help_product_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available);
        $data['text_product_meta_description'] =  sprintf($this->language->get('dynamic_main_description'), 'Product', $this->language->get('text_meta_description'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['product_tags_template'])) {
            $data['product_tags_template'] = $this->request->post['product_tags_template'];
        } elseif(isset($pattern['product_tags']) && $pattern['product_tags']) {
            $data['product_tags_template'] = $pattern['product_tags'];
        } else{
            $data['product_tags_template'] = '[product_name], [model_name], [manufacturer_name], [categories_names]';
        }
        $pattern_available = '[product_name], [model_name], [manufacturer_name], [categories_names]';
        $data['help_product_tags'] = sprintf($this->language->get('dymanic_text'), $pattern_available);
        $data['text_tags'] = sprintf($this->language->get('dynamic_main_description'), 'Product', $this->language->get('text_tags'),$this->language->get('text_set_pattern'));
        

        if (isset($this->request->post['product_image_template'])) {
            $data['product_image_template'] = $this->request->post['product_image_template'];
        } elseif(isset($pattern['product_image_name']) && $pattern['product_image_name']) {
            $data['product_image_template'] = $pattern['product_image_name'];
        } else{
            $data['product_image_template'] = '[product_name]-[model_name]-[categories_names]';
        }
        $pattern_available = '[product_name]-[model_name]-[categories_names]';
        $data['help_product_image_description'] = sprintf($this->language->get('dymanic_text_image'), $pattern_available);
        $data['text_image_name'] = sprintf($this->language->get('dynamic_main_description'), 'Product', $this->language->get('text_image_name'),$this->language->get('text_set_pattern'));

        $data['action'] = $this->url->link("extension/module/aioseo","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("common/dashboard","user_token=" . $this->session->data['user_token'],TRUE);
        $data['heading_title'] = $this->language->get('heading_title');
      
        if ($this->request->server['HTTPS']) {
            $data['catalog'] = HTTPS_CATALOG;
        } else {
            $data['catalog'] = HTTPS_CATALOG;
        }

        $data['productreport'] = $this->model_extension_module_aioseo->getreport1();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        $this->response->setOutput($this->load->view('extension/module/autogenerate_product', $data));
    }

    public function autogenerate_category() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        //$this->document->addLink("view/javascript/aios/css/style-responsive.css","stylesheet");

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validateAutogenerate())) {
            // Remember that KEY of $pattern array has to be the actual column name of xstore_seo_pattern table

            $dynamic_success = '';
            $success = $this->language->get('text_success');
            /*  CATEGORIES  */
            if (isset($this->request->post['categories_url'])) {
                $pattern = array(
                    'category_url_keyword'  =>  $this->request->post['categories_url_template']
                );
                $this->model_extension_module_aioseo->generateCategoryUrlKeyword($this->request->post['categories_url_template'], $pattern);
                $dynamic_success = $this->language->get('category_url_keyword');
            }

            if (isset($this->request->post['categories_title'])) {
                $pattern = array(
                    'category_title' =>  $this->request->post['categories_title_template']
                );
                $this->model_extension_module_aioseo->generateCategoryTitle($this->request->post['categories_title_template'], $pattern);
                $dynamic_success = $this->language->get('category_title');
            }

            if (isset($this->request->post['categories_keyword'])) {
                $pattern = array(
                    'category_keyword' =>  $this->request->post['categories_keyword_template']
                );
                $this->model_extension_module_aioseo->generateCategoryMetaKeywords($this->request->post['categories_keyword_template'], $pattern);
                $dynamic_success = $this->language->get('category_meta_keywords');
            }

            if (isset($this->request->post['category_description'])) {
                $pattern = array(
                    'category_meta_description' =>  $this->request->post['category_description_template']
                );
                $this->model_extension_module_aioseo->generateCategoryMetaDescription($this->request->post['category_description_template'], $pattern);
                $dynamic_success = $this->language->get('category_meta_description');
            }
            
            if (isset($this->error['warning'])) {
                $data['error_warning'] = $this->error['warning'];
            } else {
              $data['success'] = $dynamic_success . ' ' . $success;
               $dynamic_success = '';
            }

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['user_token'] = $this->session->data['user_token'];
        
        if($this->request->server['REQUEST_METHOD'] != 'POST'){
            $this->load->model('extension/module/aioseo');
            $pattern = $this->model_extension_module_aioseo->getSeoPattern();
        }

        $user_defined_text = $this->language->get('user_defined_text');
        $user_defined_text_meta = $this->language->get('user_defined_text_meta');

        // Category
        if (isset($this->request->post['categories_url_template'])) {
            $data['categories_url_template'] = $this->request->post['categories_url_template'];
        } elseif(isset($pattern['category_url_keyword']) && $pattern['category_url_keyword']) {
            $data['categories_url_template'] = $pattern['category_url_keyword'];
        } else{
            $data['categories_url_template'] = '[category_name], [meta_title]';
        }
        $pattern_available = '[category_name], [meta_title]';
        $data['help_category_seo_description'] =  sprintf($this->language->get('dymanic_text_image'), $pattern_available,'[category_name], .html');
        $data['text_category_url_keyword'] = sprintf($this->language->get('dynamic_main_description'), 'Category', $this->language->get('text_url_keyword'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['categories_title_template'])) {
            $data['categories_title_template'] = $this->request->post['categories_title_template'];
        } elseif(isset($pattern['category_title']) && $pattern['category_title']) {
            $data['categories_title_template'] = $pattern['category_title'];
        } else{
            $data['categories_title_template'] = '[category_name], [category_description]';
        }
        $pattern_available = '[category_name], [category_description]';
        $data['help_category_title'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[category_name], Nerdherd Store');
        $data['text_category_title'] = sprintf($this->language->get('dynamic_main_description'), 'Category', $this->language->get('text_title'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['categories_keyword_template'])) {
            $data['categories_keyword_template'] = $this->request->post['categories_keyword_template'];
        } elseif(isset($pattern['category_keyword']) && $pattern['category_keyword']) {
            $data['categories_keyword_template'] = $pattern['category_keyword'];
        } else{
            $data['categories_keyword_template'] = '[category_name], [category_description]';
        }
        $pattern_available = '[category_name], [category_description]';
        $data['help_category_meta_keyword'] = sprintf($this->language->get('dymanic_text_image'), $pattern_available,'[category_name], Nerdherd Store');
        $data['text_category_meta_keywords'] = sprintf($this->language->get('dynamic_main_description'), 'Category', $this->language->get('text_meta_keywords'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['category_description_template'])) {
            $data['category_description_template'] = $this->request->post['category_description_template'];
        } elseif(isset($pattern['category_meta_description']) && $pattern['category_meta_description']) {
            $data['category_description_template'] = $pattern['category_meta_description'];
        } else{
            $data['category_description_template'] = '[category_name], [category_description]';
        }
        $pattern_available = '[category_name], [category_description]';
        $data['help_category_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[category_description]');
        $data['text_category_meta_description'] = sprintf($this->language->get('dynamic_main_description'), 'Category', $this->language->get('text_meta_description'),$this->language->get('text_set_pattern'));
            

        $data['action'] = $this->url->link("extension/module/aioseo/autogenerate_category","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("common/dashboard","user_token=" . $this->session->data['user_token'],TRUE);
        $data['heading_title'] = $this->language->get('heading_title');
        
      
        if ($this->request->server['HTTPS']) {
            $data['catalog'] = HTTP_CATALOG;
        } else {
            $data['catalog'] = HTTPS_CATALOG;
        }

        $data['catreport'] = $this->model_extension_module_aioseo->getreport2();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/autogenerate_category', $data));

    }

    public function autogenerate_manufacturer() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validateAutogenerate())) {
            // Remember that KEY of $pattern array has to be the actual column name of xstore_seo_pattern table

            $dynamic_success = '';
            $success = $this->language->get('text_success');
            /*  MANUFACTURERS  */
            if (isset($this->request->post['manufacturers_url'])) {
                $pattern = array(
                    'manufacturer_url_keyword'  =>  $this->request->post['manufacturer_url_template']
                );
                $this->model_extension_module_aioseo->generateManufacturerUrlKeyword($this->request->post['manufacturer_url_template'], $pattern);
                $dynamic_success = $this->language->get('manufacturer_url_keyword');
            }

            if (isset($this->request->post['manufacturer_title'])) {
                $pattern = array(
                  'manufacturer_title' =>  $this->request->post['manufacturer_title_template']
                );
                $this->model_extension_module_aioseo->generateManufacturerPageTitle($this->request->post['manufacturer_title_template'], $pattern);
                $dynamic_success = $this->language->get('manufacturer_title');
            }

            if (isset($this->request->post['manufacturer_keyword'])) {
                $pattern = array(
                    'manufacturer_keyword' =>  $this->request->post['manufacturer_keyword_template']
                );
                $this->model_extension_module_aioseo->generateManufacturerMetaKeywords($this->request->post['manufacturer_keyword_template'], $pattern);
                $dynamic_success = $this->language->get('manufacturer_meta_keywords');
            }

            if (isset($this->request->post['manufacturer_description'])) {
                $pattern = array(
                    'manufacturer_meta_description' =>  $this->request->post['manufacturer_description_template']
                );
                $this->model_extension_module_aioseo->generateManufacturerMetaDescription($this->request->post['manufacturer_description_template'], $pattern);
                $dynamic_success = $this->language->get('manufacturer_meta_description');
            }
            
            
            if (isset($this->error['warning'])) {
                $data['error_warning'] = $this->error['warning'];
            } else {
              $data['success'] = $dynamic_success . ' ' . $success;
               $dynamic_success = '';
            }

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }


        $data['user_token'] = $this->session->data['user_token'];

        if($this->request->server['REQUEST_METHOD'] != 'POST'){
            $this->load->model('extension/module/aioseo');
            $pattern = $this->model_extension_module_aioseo->getSeoPattern();
        }

        $user_defined_text = $this->language->get('user_defined_text');
        $user_defined_text_meta = $this->language->get('user_defined_text_meta');

        //Manufacturers
        if (isset($this->request->post['manufacturer_url_template'])) {
            $data['manufacturer_url_template'] = $this->request->post['manufacturer_url_template'];
        } elseif(isset($pattern['manufacturer_url_keyword']) && $pattern['manufacturer_url_keyword']) {
            $data['manufacturer_url_template'] = $pattern['manufacturer_url_keyword'];
        } else{
            $data['manufacturer_url_template'] = '[manufacturer_name]';
        }
        $pattern_available = '[manufacturer_name]';
        $data['help_manufacturer_seo_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[manufacturer_name], .html');
        $data['text_manufacturer_url_keyword'] = sprintf($this->language->get('dynamic_main_description'), 'Manufacturer', $this->language->get('text_url_keyword'),$this->language->get('text_set_pattern'));
        
         if (isset($this->request->post['manufacturer_title_template'])) {
            $data['manufacturer_title_template'] = $this->request->post['manufacturer_title_template'];
        } elseif(isset($pattern['manufacturer_title']) && $pattern['manufacturer_title']) {
            $data['manufacturer_title_template'] = $pattern['manufacturer_title'];
        } else{
            $data['manufacturer_title_template'] = '[manufacturer_name]';
        }
        $pattern_available = '[manufacturer_name]';
        $data['help_manufacturer_title'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[manufacturer_name], Best Brand');
        $data['text_manufacturer_title'] = sprintf($this->language->get('dynamic_main_description'), 'Manufacturer', $this->language->get('text_title'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['manufacturer_keyword_template'])) {
            $data['manufacturer_keyword_template'] = $this->request->post['manufacturer_keyword_template'];
        } elseif(isset($pattern['manufacturer_keyword']) && $pattern['manufacturer_keyword']) {
            $data['manufacturer_keyword_template'] = $pattern['manufacturer_keyword'];
        } else{
            $data['manufacturer_keyword_template'] = '[manufacturer_name]';
        }
        $pattern_available = '[manufacturer_name]';
        $data['help_manufacturer_meta_keyword'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[manufacturer_name]');
        $data['text_manufacturer_meta_keywords'] = sprintf($this->language->get('dynamic_main_description'), 'Manufacturer', $this->language->get('text_meta_keywords'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['manufacturer_description_template'])) {
            $data['manufacturer_description_template'] = $this->request->post['manufacturer_description_template'];
        } elseif(isset($pattern['manufacturer_meta_description']) && $pattern['manufacturer_meta_description']) {
            $data['manufacturer_description_template'] = $pattern['manufacturer_meta_description'];
        } else{
            $data['manufacturer_description_template'] = '[manufacturer_name]';
        }
        $pattern_available = '[manufacturer_name]';
        $data['help_manufacturer_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[manufacturer_name]');
        $data['text_manufacturer_meta_description'] = sprintf($this->language->get('dynamic_main_description'), 'Manufacturer', $this->language->get('text_meta_description'),$this->language->get('text_set_pattern'));

        $data['action'] = $this->url->link("extension/module/aioseo/autogenerate_manufacturer","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("common/dashboard","user_token=" . $this->session->data['user_token'],TRUE);
        $data['heading_title'] = $this->language->get('heading_title');
        
      
        if ($this->request->server['HTTPS']) {
            $data['catalog'] = HTTP_CATALOG;
        } else {
            $data['catalog'] = HTTPS_CATALOG;
        }

        $data['manreport'] = $this->model_extension_module_aioseo->getreport4();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/autogenerate_manufacturer', $data));

    }

    public function autogenerate_information() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validateAutogenerate())) {
            // Remember that KEY of $pattern array has to be the actual column name of xstore_seo_pattern table

            $dynamic_success = '';
            $success = $this->language->get('text_success');
            /*  INFORMATION PAGES  */
            if (isset($this->request->post['information_pages'])) {
                $pattern = array(
                    'information_page_url_keyword'  =>  $this->request->post['information_pages_template']
                );
                $this->model_extension_module_aioseo->generateInformationPageUrlKeyword($this->request->post['information_pages_template'], $pattern);
                $dynamic_success = $this->language->get('information_page_url_keyword');
            }

            if (isset($this->request->post['information_pages_title'])) {
                $pattern = array(
                    'information_pages_title'  =>  $this->request->post['information_pages_title_template']
                );
                $this->model_extension_module_aioseo->generateInformationPageTitle($this->request->post['information_pages_title_template'], $pattern);
                $dynamic_success = $this->language->get('information_page_title');
            }

            if (isset($this->request->post['information_keyword'])) {
                $pattern = array(
                    'information_keyword' =>  $this->request->post['information_keyword_template']
                );
                $this->model_extension_module_aioseo->generateInformationMetaKeywords($this->request->post['information_keyword_template'], $pattern);
                $dynamic_success = $this->language->get('information_meta_keywords');
            }

            if (isset($this->request->post['information_description'])) {
                $pattern = array(
                    'information_meta_description' =>  $this->request->post['information_description_template']
                );
                $this->model_extension_module_aioseo->generateInformationMetaDescription($this->request->post['information_description_template'], $pattern);
                $dynamic_success = $this->language->get('information_meta_description');
            }
            
            
            if (isset($this->error['warning'])) {
                $data['error_warning'] = $this->error['warning'];
            } else {
              $data['success'] = $dynamic_success . ' ' . $success;
               $dynamic_success = '';
            }

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['user_token'] = $this->session->data['user_token'];
        
        if($this->request->server['REQUEST_METHOD'] != 'POST'){
            $this->load->model('extension/module/aioseo');
            $pattern = $this->model_extension_module_aioseo->getSeoPattern();
        }

        $user_defined_text = $this->language->get('user_defined_text');
        $user_defined_text_meta = $this->language->get('user_defined_text_meta');
       
        // Information Pages

        if (isset($this->request->post['information_pages_template'])) {
            $data['information_pages_template'] = $this->request->post['information_pages_template'];
        } elseif(isset($pattern['information_page_url_keyword']) && $pattern['information_page_url_keyword']) {
            $data['information_pages_template'] = $pattern['information_page_url_keyword'];
        }  else{
            $data['information_pages_template'] = '[information_page_title]';
        }
        $pattern_available = '[information_page_title]';
        $data['help_information_seo_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[information_page_title]');
        $data['text_information_url_keyword'] = sprintf($this->language->get('dynamic_main_description'), 'Information', $this->language->get('text_url_keyword'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['information_pages_title_template'])) {
            $data['information_pages_title_template'] = $this->request->post['information_pages_title_template'];
        } elseif(isset($pattern['information_pages_title']) && $pattern['information_pages_title']) {
            $data['information_pages_title_template'] = $pattern['information_pages_title'];
        }  else{
            $data['information_pages_title_template'] = '[information_page_title], [information_page_description]';
        }
        $pattern_available = '[information_page_title], [information_page_description]';
        $data['help_information_title'] =  sprintf($this->language->get('dymanic_text'), $pattern_available,'[information_page_title], Nerdherd Store');
        $data['text_information_title'] = sprintf($this->language->get('dynamic_main_description'), 'Information', $this->language->get('text_title'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['information_keyword_template'])) {
            $data['information_keyword_template'] = $this->request->post['information_keyword_template'];
        } elseif(isset($pattern['information_keyword']) && $pattern['information_keyword']) {
            $data['information_keyword_template'] = $pattern['information_keyword'];
        } else{
            $data['information_keyword_template'] = '[information_page_title]';
        }
        $pattern_available = '[information_page_title]';
        $data['help_information_meta_keyword'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[information_page_title]');
        $data['text_information_meta_keywords'] = sprintf($this->language->get('dynamic_main_description'), 'Information', $this->language->get('text_meta_keywords'),$this->language->get('text_set_pattern'));

        if (isset($this->request->post['information_description_template'])) {
            $data['information_description_template'] = $this->request->post['information_description_template'];
        } elseif(isset($pattern['information_meta_description']) && $pattern['information_meta_description']) {
            $data['information_description_template'] = $pattern['information_meta_description'];
        } else{
            $data['information_description_template'] = '[information_page_description]';
        }
        $pattern_available = '[information_page_title], [information_page_description]';
        $data['help_information_description'] = sprintf($this->language->get('dymanic_text'), $pattern_available,'[information_page_description]');
        $data['text_information_meta_description'] = sprintf($this->language->get('dynamic_main_description'), 'Information', $this->language->get('text_meta_description'),$this->language->get('text_set_pattern'));

        $data['action'] = $this->url->link("extension/module/aioseo/autogenerate_information","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("common/dashboard","user_token=" . $this->session->data['user_token'],TRUE);
        $data['heading_title'] = $this->language->get('heading_title');
        
      
        if ($this->request->server['HTTPS']) {
            $data['catalog'] = HTTP_CATALOG;
        } else {
            $data['catalog'] = HTTPS_CATALOG;
        }

        $data['inforeport'] = $this->model_extension_module_aioseo->getreport3();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/autogenerate_information', $data));

    }

    public function autogenerate_general() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $data['customizegeneral'] = $this->url->link("extension/module/aioseo/customizegeneral","user_token=" . $this->session->data['user_token'],TRUE);
        
        $this->document->setTitle($this->language->get('heading_title'));

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validateAutogenerate())) {
            // Remember that KEY of $pattern array has to be the actual column name of xstore_seo_pattern table

            $dynamic_success = '';
            $success = $this->language->get('text_success');

            if (isset($this->request->post['general_pages'])) {
                $this->loadGeneralAuto();
                 $dynamic_success = $this->language->get('general_pages');
            }

            if (isset($this->error['warning'])) {
                $data['error_warning'] = $this->error['warning'];
            } else {
              $data['success'] = $dynamic_success . ' ' . $success;
               $dynamic_success = '';
            }

        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        $data['user_token'] = $this->session->data['user_token'];

        $data['help_general_generate_howtouse'] = $this->language->get('help_general_generate_howtouse');
        $data['howtouse'] = $this->language->get('howtouse');
        
        if($this->request->server['REQUEST_METHOD'] != 'POST'){
            $this->load->model('extension/module/aioseo');
            $pattern = $this->model_extension_module_aioseo->getSeoPattern();
        }

        $user_defined_text = $this->language->get('user_defined_text');
        $user_defined_text_meta = $this->language->get('user_defined_text_meta');
       
        $data['action'] = $this->url->link("extension/module/aioseo/autogenerate_general","user_token=" . $this->session->data['user_token'],TRUE);
        $data['cancel'] = $this->url->link("common/dashboard","user_token=" . $this->session->data['user_token'],TRUE);
        $data['heading_title'] = $this->language->get('heading_title');
        
      
        if ($this->request->server['HTTPS']) {
            $data['catalog'] = HTTP_CATALOG;
        } else {
            $data['catalog'] = HTTPS_CATALOG;
        }

        $data['genreport'] = $this->model_extension_module_aioseo->getreport5();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/autogenerate_general', $data));

    }

    protected function multiPagination($pagination, $config_limit_admin, $total, $page, $url){
        $temp = $pagination;
        $pagination = $pagination;
        $pagination = new Pagination();
        $pagination->total = $total;
        $pagination->page = $page;
        $pagination->limit = $config_limit_admin;
        $pagination->text = $this->language->get('text_pagination');
        $pagination->url = $this->url->link("extension/module/aioseo/customizeproduct","user_token=" . $this->session->data['user_token'] . $url . '&page={page}',TRUE);

        return $pagination->render();
        
    }

     protected function multiPaginationCategory($pagination, $config_limit_admin, $total, $page, $url){
        $temp = $pagination;
        $pagination = $pagination;
        $pagination = new Pagination();
        $pagination->total = $total;
        $pagination->page = $page;
        $pagination->limit = $config_limit_admin;
        $pagination->text = $this->language->get('text_pagination');
        $pagination->url = $this->url->link("extension/module/aioseo/customizecategory","user_token=" . $this->session->data['user_token'] . $url . '&page={page}',TRUE);

        return $pagination->render();
        
    }

    protected function validate($data = array()) {

        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        $members = array('custom_url_store','product','category','manufacturer','information');
        $mapping_tab = array(
            'custom_url_store' => 'General',
            'product' => 'Products',
            'category' => 'Categories',
            'manufacturer' => 'Manufacturers',
            'information' => 'Information Pages');
        
        foreach($members as $member){
            if(isset($data[$member]) && $member != 'custom_url_store'){
                if(isset($data[$member][$member.'_description'])){
                    foreach($data[$member][$member.'_description'] as $id => $language){
                        foreach ($language as $language_id => $value) {
                            $name = 'name';
                            if($member=='information'){
                                $name = 'title';
                            }
                            if(isset($value[$name])){
                                if ((strlen(utf8_decode($value[$name])) < 3)) {
                                    // $this->error['title']['name_'.$member.'_'.$id.'_'.$language_id] = $this->language->get('error_name');
                                }
                            }
                        }
                    }
                }
                if(isset($data[$member]['keyword'])){
                   foreach ($data[$member]['keyword'] as $key => $value) {
                       foreach ($value as $key1 => $value1) {
                            $keyword_validate = $this->validate->keyword_validate(array($key.'_'.$key1=>$value1),$member.'_id');
                            if($keyword_validate){
                                if($keyword_validate['existing_keyword']){
                                    $data['existing_keyword'] = $keyword_validate['existing_keyword'];
                                    $this->error['already_exists'] = sprintf($this->language->get($keyword_validate['error']),$data['existing_keyword'],$mapping_tab[$member]);
                                }
                            } 
                        }
                   }
                }
            }elseif(isset($data[$member]) && $member == 'custom_url_store'){
                $new_member_id = array();
                if($data[$member]){
                    foreach ($data[$member] as $key => $value) {
                        if($value['query']  && $value['query'] != 'common/home') {
                            if(trim($value['query']) == 'product/category'){
                                $this->error['warning'] = $this->language->get('error_restrict');
                            } elseif(is_array($value['keyword'])) {
                                foreach ($value['keyword'] as $langid => $keyword) {
                                    if(trim($keyword) == '') {
                                        $this->error['warning'] = $this->language->get('error_empty');
                                    }
                                    $new_member_id[] = array(
                                        'query' => $value['query'],
                                        'keyword' => $keyword
                                    );
                                }
                            }
                            
                        }
                    }
                    if($new_member_id) {
                        $keyword_validate = $this->validate->keyword_validate($new_member_id,$member);
                        if($keyword_validate){
                            if($keyword_validate['existing_keyword']){
                                $data['existing_keyword'] = $keyword_validate['existing_keyword'];
                                $this->error['already_exists'] = sprintf($this->language->get($keyword_validate['error']),$data['existing_keyword'],$mapping_tab[$member]);
                            }
                        }
                    }
                }
            }
        }
        if (!$this->error) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    private function validateAutogenerate() {
        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }

    public function multisetting() {
        $this->load->model('setting/setting');;
        $array = array('config_multilang_on'=>$this->request->get['config_multilang_on']);
        $this->model_setting_setting->editSetting('multilang', $array);
        $results['success'] = 'Settings Saved';
        $this->response->setOutput(json_encode($results));
    }

    public function catautocomplete() {
        $json = array();
        $this->load->model('extension/module/aioseo');

        if (isset($this->request->get['filter_name'])) {
            

            $filter_data = array(
                'filter_name' => $this->request->get['filter_name'],
                'sort'        => 'name',
                'order'       => 'ASC',
                'start'       => 0,
                'limit'       => 5
            );
           
            $results = $this->model_extension_module_aioseo->getCategoriesAutocomplete($filter_data);
            
            foreach ($results as $result) {
                $json[] = array(
                    'category_id' => $result['category_id'],
                    'name'        => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8'))
                );
            }
        }

        $sort_order = array();

        foreach ($json as $key => $value) {
            $sort_order[$key] = $value['name'];
        }

        array_multisort($sort_order, SORT_ASC, $json);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function loadControllers() {
        $temp = array();
        $temp['seomenu'] = $this->load->controller("extension/module/aioseo/seomenu");
        $temp['seomegamenu'] = $this->load->controller("extension/module/aioseo/seomenu",1);
        $temp['seoloadscripts'] = $this->load->controller("extension/module/aioseo/seoloadscripts");
        $temp['seoloadstyles'] = $this->load->controller("extension/module/aioseo/seoloadstyles");
        $temp['seotask'] = $this->load->controller("extension/module/aioseo/seotask");
        $temp['seonotification'] = $this->load->controller("extension/module/aioseo/seonotification");
        return $temp;
    }

    public function seomenu($megamenu = 0) {
        $this->load->language('extension/module/aioseo');

        $data['autogenerate_category'] = $this->url->link('extension/module/aioseo/autogenerate_category', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['autogenerate_product'] = $this->url->link('extension/module/aioseo', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['autogenerate_manufacturer'] = $this->url->link('extension/module/aioseo/autogenerate_manufacturer', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['autogenerate_information'] = $this->url->link('extension/module/aioseo/autogenerate_information', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['autogenerate_general'] = $this->url->link('extension/module/aioseo/autogenerate_general', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['customize_category'] = $this->url->link('extension/module/aioseo/customizecategory', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['customize_product'] = $this->url->link('extension/module/aioseo/customizeproduct', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['customize_manufacturer'] = $this->url->link('extension/module/aioseo/customizemanufacturer', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['customize_information'] = $this->url->link('extension/module/aioseo/customizeinformation', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['customize_general'] = $this->url->link('extension/module/aioseo/customizegeneral', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['report_completeseo'] = $this->url->link('extension/module/aioseo/seoReport', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['snippet_google'] = $this->url->link('extension/module/aioseo/google', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['snippet_facebook'] = $this->url->link('extension/module/aioseo/facebook', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['snippet_twitter'] = $this->url->link('extension/module/aioseo/twitter', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['snippet_pinterest'] = $this->url->link('extension/module/aioseo/pinterest', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['sitemap'] = $this->url->link('extension/module/aioseo/sitemap', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['redirectmanager'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['failedlinks'] = $this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['clearseo'] = $this->url->link('extension/module/aioseo/clearseo', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['seo_settings'] = $this->url->link('extension/module/aioseo/seosetting', 'user_token=' . $this->session->data['user_token'], TRUE);
        if($megamenu) {
            return $this->load->view('extension/module/seomegamenu', $data);
        } else {
            return $this->load->view('extension/module/seomenu', $data);
        }
    }

    public function seoloadscripts() {
        $data = array();
        return $this->load->view('extension/module/loadscripts', $data);
    }

    public function seoloadstyles() {
        $data = array();
        return $this->load->view('extension/module/loadstylesheets', $data);
    }

    public function seotask() {
        $data = array();
        return $this->load->view('extension/module/seotask', $data);
    }

    public function seonotification() {
        $data = array();
        return $this->load->view('extension/module/seonotification', $data);
    }

    public function clearseo() {

        $this->language->load('extension/module/aioseo');

        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        $data['user_token'] = $this->session->data['user_token'];
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE);
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/aioseo_clear', $data));
    }

    public function deletedata() {
        $this->load->model('extension/module/aioseo');
        $this->language->load('extension/module/aioseo');
        $name = $this->request->get['name'];
        $general = $this->model_extension_module_aioseo->$name();
        $this->response->setOutput(json_encode($general));
    }

    public function insertgoogle() {    
        $this->load->language('extension/module/aioseo');
        $this->load->model('setting/setting');
        $this->document->setTitle($this->language->get('heading_title'));
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_setting_setting->editSetting('grsnippetgoogle', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo/google', 'user_token=' . $this->session->data['user_token'], TRUE));
        }
        $this->getForm();
    }

    public function inserttwitter() {    
        $this->load->language('extension/module/aioseo');
        $this->load->model('setting/setting');
        $this->document->setTitle($this->language->get('heading_title'));
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_setting_setting->editSetting('twittersnippet', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo/twitter', 'user_token=' . $this->session->data['user_token'], TRUE));
        }
        $this->getForm();
    }

    public function insertfacebook() {    
        $this->load->language('extension/module/aioseo');
        $this->load->model('setting/setting');
        $this->document->setTitle($this->language->get('heading_title'));
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_setting_setting->editSetting('grsnippetfacebook', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo/facebook', 'user_token=' . $this->session->data['user_token'], TRUE));
        }
        $this->getForm();
    }

    public function insertpinterest() {    
        $this->load->language('extension/module/aioseo');
        $this->load->model('setting/setting');
        $this->document->setTitle($this->language->get('heading_title'));
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_setting_setting->editSetting('grsnippetpinterest', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo/pinterest', 'user_token=' . $this->session->data['user_token'], TRUE));
        }
        $this->getForm();
    }
    

    public function insert() {    
        $this->load->language('extension/module/aioseo');
        $this->load->model('setting/setting');
        $this->document->setTitle($this->language->get('heading_title'));
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->model_setting_setting->editSetting('grsnippet', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo', 'user_token=' . $this->session->data['user_token'], TRUE));
        }
        $this->getForm();
    }
    
    public function google() {

       $this->language->load('extension/module/aioseo');

        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }
        
        $data['text_multistoresupport'] = sprintf($this->language->get('text_multistoresupport'),$this->url->link('setting/setting', 'user_token=' . $this->session->data['user_token'] . '&store_id=0', TRUE)); 

        $data['action'] = $this->url->link('extension/module/aioseo/insertgoogle', 'user_token=' . $this->session->data['user_token'], TRUE);
        
        if (isset($this->request->post['grsnippetgoogle_status'])) {
            $data['grsnippetgoogle_status'] = $this->request->post['grsnippetgoogle_status'];
        } elseif ($this->config->get('grsnippetgoogle_status')) {
            $data['grsnippetgoogle_status'] = $this->config->get('grsnippetgoogle_status');
        } else {
            $data['grsnippetgoogle_status'] = 0;
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/aioseo_google', $data));
    }

    public function twitter() {
        $this->language->load('extension/module/aioseo');

        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        $data['action'] = $this->url->link('extension/module/aioseo/inserttwitter', 'user_token=' . $this->session->data['user_token'], TRUE);
        
        if (isset($this->request->post['twittersnippet_status'])) {
            $data['twittersnippet_status'] = $this->request->post['twittersnippet_status'];
        } elseif ($this->config->get('twittersnippet_status')) {
            $data['twittersnippet_status'] = $this->config->get('twittersnippet_status');
        } else {
            $data['twittersnippet_status'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/aioseo_twitter', $data));
    }

    public function facebook() {
        
        $this->language->load('extension/module/aioseo');

        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        if (isset($this->request->post['grsnippetfacebook_status'])) {
            $data['grsnippetfacebook_status'] = $this->request->post['grsnippetfacebook_status'];
        } elseif ($this->config->get('grsnippetfacebook_status')) {
            $data['grsnippetfacebook_status'] = $this->config->get('grsnippetfacebook_status');
        } else {
            $data['grsnippetfacebook_status'] = '';
        }

        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE); 
        $data['action'] = $this->url->link('extension/module/aioseo/insertfacebook', 'user_token=' . $this->session->data['user_token'], TRUE);

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/aioseo_facebook', $data));
    }

    public function pinterest() {
        
        $this->language->load('extension/module/aioseo');

        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }

        $data['action'] = $this->url->link('extension/module/aioseo/insertpinterest', 'user_token=' . $this->session->data['user_token'], TRUE);

        if (isset($this->request->post['grsnippetpinterest_status'])) {
            $data['grsnippetpinterest_status'] = $this->request->post['grsnippetpinterest_status'];
        } elseif ($this->config->get('grsnippetpinterest_status')) {
            $data['grsnippetpinterest_status'] = $this->config->get('grsnippetpinterest_status');
        } else {
            $data['grsnippetpinterest_status'] = 0;
        }
         
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE); 
        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/aioseo_pinterest', $data));
    }

    public function seomanager() {  

        $this->language->load('extension/module/aioseo');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'index';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'DESC';
        }
        $url = '';
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        if (isset($this->request->post['fromTable'])) {
            $data['fromTable'] = $this->request->post['fromTable'];
        } else {
            $data['fromTable'] = '';
        }

        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['action'] = $this->url->link('extension/module/aioseo/insertlink', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['redirect_table'] = $this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'] . $url, TRUE);

        $data['user_token'] = $this->session->data['user_token'];
        $data['redirectstatus'] = $this->config->get('module_aioseoredirect_status');
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
        
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data1 = array(
            'sort'            => $sort,
            'order'           => $order,
            'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit'           => $this->config->get('config_limit_admin')
        );

        $data['redirectlist'] = $this->model_extension_module_aioseo->getList($data1);
        $data['redirecttotal'] = $this->model_extension_module_aioseo->getTotalList($data1);

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_status'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'] . '&sort=status' . $url, TRUE);
        $data['sort_fromUrl'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'] . '&sort=fromUrl' . $url, TRUE);
        $data['sort_toUrl'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'] . '&sort=toUrl' . $url, TRUE);
        $data['sort_times_used'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'] . '&sort=times_used' . $url, TRUE);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }
                                                
        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $data['sort'] = $sort;
        $data['order'] = $order;

        $pagination = new Pagination();
        $pagination->total = $data['redirecttotal'];
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($data['redirecttotal']) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($data['redirecttotal'] - $this->config->get('config_limit_admin'))) ? $data['redirecttotal'] : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $data['redirecttotal'], ceil($data['redirecttotal'] / $this->config->get('config_limit_admin')));

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');
        
        $this->response->setOutput($this->load->view('extension/module/seomanager', $data));
    }

    public function insertlink() {
        $json = array();
        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $json['warning'] = "We are sorry !! But you don't have permission to modify this redirections";
        } else {
            $status = array();
            $status['module_aioseoredirect_status'] = $this->request->get['value'];
            $this->load->model('setting/setting');
            $this->model_setting_setting->editSetting('module_aioseoredirect', $status);
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function updatelink() {
        $json = array();
        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $json['warning'] = "We are sorry !! But you don't have permission to modify this redirections";
        }  else {
            $this->load->model('extension/module/aioseo');
            $this->model_extension_module_aioseo->updateUrl($this->request->post);
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function deletelink() {
        $json = array();
        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $json['warning'] = "We are sorry !! But you don't have permission to modify this redirections";
        } else {
            $this->load->model('extension/module/aioseo');
            $this->model_extension_module_aioseo->deleteUrl($this->request->get);
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    public function resetlink() {
        $json = array();
        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $json['warning'] = "We are sorry !! But you don't have permission to modify this redirections";
        } else {
            $this->load->model('extension/module/aioseo');
            $this->model_extension_module_aioseo->reset($this->request->get);
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
    public function inserting() {
        $json = array();
        if (!$this->user->hasPermission('modify', 'extension/module/aioseo')) {
            $json['warning'] = "We are sorry !! But you don't have permission to modify this redirections";
        } else {
            $this->load->model('extension/module/aioseo');
            $this->model_extension_module_aioseo->addUrl1($this->request->post);
        }
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function failedlinks() {       

        $this->language->load('extension/module/aioseo');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));
        
        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'index';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'ASC';
        }
        $url = '';
        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['cancel'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'], TRUE);
        $data['clear_all'] = $this->url->link('extension/module/aioseo/clear', 'user_token=' . $this->session->data['user_token'], TRUE); 

        $data['user_token'] = $this->session->data['user_token'];
        $data['redirectstatus'] = $this->config->get('module_aioseoredirect_status');
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
        
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        $data1 = array(
            'sort'            => $sort,
            'order'           => $order,
            'start'           => ($page - 1) * $this->config->get('config_admin_limit'),
            'limit'           => $this->config->get('config_admin_limit')
        );

        $data['redirectlist'] = $this->model_extension_module_aioseo->getListt($data1);
        
        foreach ($data['redirectlist'] as $key => $value) {
            $data['redirectlist'][$key]['action'] = $this->url->link('extension/module/aioseo/seomanager', 'user_token=' . $this->session->data['user_token'], TRUE);
        }

        $data['redirecttotal'] = $this->model_extension_module_aioseo->getTotalListt($data1);

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_date'] = $this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'] . '&sort=date' . $url, TRUE);
        $data['sort_failed_url'] = $this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'] . '&sort=failed_Url' . $url, TRUE);
        $data['sort_count'] = $this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'] . '&sort=count' . $url, TRUE);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }
                                                
        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total =$data['redirecttotal'];
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_admin_limit');
        $pagination->text = $this->language->get('text_pagination');
        $pagination->url = $this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'] . $url .'&page={page}', TRUE);
        $data['sort'] = $sort;
        $data['order'] = $order;
        $data['pagination'] = $pagination->render();
        

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/seofailedtable', $data));
    }

    public function clear(){
       $this->language->load('extension/module/aioseo');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));
        $this->model_extension_module_aioseo->clear();
        $this->session->data['success'] = $this->language->get('text_success');
        $this->response->redirect($this->url->link('extension/module/aioseo/failedlinks', 'user_token=' . $this->session->data['user_token'], TRUE));
    }

    public function seoreport() {

        $this->language->load('extension/module/aioseo');

        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }
        
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
        
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }
        
        $data['cancel'] =  $this->url->link('extension/module/aioseo/seoReport', 'user_token=' . $this->session->data['user_token'], TRUE);

        $data['sitemapfound']  =  file_exists('../sitemap.xml');
        $data['sitemapso'] = sprintf($this->language->get('sitemapso'),$this->url->link('extension/module/aioseo/sitemap', 'user_token=' . $this->session->data['user_token'], TRUE));

        if ($this->request->server['HTTPS']) {
            $data['catalog'] = HTTPS_CATALOG;
        } else {
            $data['catalog'] = HTTPS_CATALOG;
        }
        $data['user_token'] = $this->session->data['user_token'];
        $data['productreport'] = $this->model_extension_module_aioseo->getreport1();
        $data['productmetatitle'] = $this->model_extension_module_aioseo->getreport7('product_description');
        $data['productmetakey'] = $this->model_extension_module_aioseo->getreport9('product_description');
        $data['productmetadesc'] = $this->model_extension_module_aioseo->getreport8('product_description');

        $data['catreport'] = $this->model_extension_module_aioseo->getreport2(0);
        $data['inforeport'] = $this->model_extension_module_aioseo->getreport3(0);

        $data['manreport'] = $this->model_extension_module_aioseo->getreport4(0);

        $data['genreport'] = $this->model_extension_module_aioseo->getreport5();
        
        $data['seokeyword'] = $this->model_extension_module_aioseo->getreport6();
        
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/seoreport', $data));
    }

    public function catreport() {

        $this->load->model('extension/module/aioseo');
        $data['seoreport'] = $this->model_extension_module_aioseo->getreport2(1);
        $data['categorymetatitle'] = $this->model_extension_module_aioseo->getreport7('category_description');
        $data['categorymetadesc'] = $this->model_extension_module_aioseo->getreport8('category_description');
        $data['categorymetakey'] = $this->model_extension_module_aioseo->getreport9('category_description');
        $this->response->setOutput(json_encode($data));

    }

    public function inforeport() {

        $this->load->model('extension/module/aioseo');
        $data['inforeport'] = $this->model_extension_module_aioseo->getreport3(1);
        $data['informationmetatitle'] = $this->model_extension_module_aioseo->getreport7('information_description');
        $data['informationmetadesc'] = $this->model_extension_module_aioseo->getreport8('information_description');
        $data['informationmetakey'] = $this->model_extension_module_aioseo->getreport9('information_description');
        $this->response->setOutput(json_encode($data));
        
    }

    public function manreport() {

        $this->load->model('extension/module/aioseo');
        $data['manreport'] = $this->model_extension_module_aioseo->getreport4(1);
        $data['manreport_duplicatereport'] = $this->model_extension_module_aioseo->getreport10();
        $this->response->setOutput(json_encode($data));
        
    }

    public function duplicatereport() {
        $number = $this->request->post['number'];
        $name = $this->request->post['name'];
        $report = array();
        $this->load->model('extension/module/aioseo');
        if($number == 7) {
          $report =  $this->model_extension_module_aioseo->getreport7($name);
        }
        if($number == 8) {
          $report =  $this->model_extension_module_aioseo->getreport8($name);
        }
        if($number == 9) {
          $report =  $this->model_extension_module_aioseo->getreport9($name);
        }
        if($number == 11) {
          $report =  $this->model_extension_module_aioseo->getreport11($name);
        }
        
        $this->response->setOutput(json_encode($report));
    }

    public function getreport() {
        $this->load->model('extension/module/aioseo');
        
        $results1 = $this->model_extension_module_aioseo->getreport1();
        $results2 = $this->model_extension_module_aioseo->getreport2(1);
        $results3 = $this->model_extension_module_aioseo->getreport3();
        $results4 = $this->model_extension_module_aioseo->getreport4();
        $sitemap  =  file_exists('../sitemap.xml');
        $results = array('products' => $results1, 'categories' => $results2 ,'information' => $results3,'manufacturer' => $results4,'sitemap' => $sitemap);
        $this->response->setOutput(json_encode($results));
    }

     public function getreport1() {
        $this->load->model('extension/module/aioseo');
        
        $results1 = $this->model_extension_module_aioseo->getreport1();
        $results2 = $this->model_extension_module_aioseo->getreport2(1);
        $results3 = $this->model_extension_module_aioseo->getreport3();
        $results4 = $this->model_extension_module_aioseo->getreport4();
        $sitemap  =  file_exists('../sitemap.xml');
        $results = array('products' => $results1, 'categories' => $results2 ,'information' => $results3,'manufacturer' => $results4,'sitemap' => $sitemap);
        $this->response->setOutput(json_encode($results));
    }

    public function seosetting_insert() {    
        $this->load->language('extension/module/aioseo');
        $this->load->model('setting/setting');
        $this->document->setTitle($this->language->get('heading_title'));
        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            
            if(!isset($this->request->post['module_aioseo_direct_links'])){
                $this->request->post['module_aioseo_direct_links'] = 0;
            } else {
                 $this->request->post['module_aioseo_direct_links'] = 1;
            }
            if(!isset($this->request->post['module_aioseo_breadcrumblink'])){
                $this->request->post['module_aioseo_breadcrumblink'] = 0;
            } else {
                 $this->request->post['module_aioseo_breadcrumblink'] = 1;
            }

            if(!isset($this->request->post['module_aioseo_self_generate'])){
                $this->request->post['module_aioseo_self_generate'] = 0;
            } else {
                 $this->request->post['module_aioseo_self_generate'] = 1;
            }

           
            $this->request->post['config_multilang_lang'] = $this->config->get("config_language");
            $this->model_setting_setting->editSetting('module_aioseo', $this->request->post);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo/seosetting', 'user_token=' . $this->session->data['user_token'], TRUE));
        }
        $this->seosetting();
    }
    
    public function seosetting() {
        $this->language->load('extension/module/aioseo');
        $this->document->setTitle($this->language->get('heading_title'));
        require_once(DIR_SYSTEM . 'library/seo/seo.php');
        $this->load->model('extension/module/aioseo');

        $data = $this->loadControllers();

         if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        }
        
        $data['user_token'] = $this->session->data['user_token'];

        $data['action'] = $this->url->link('extension/module/aioseo/seosetting_insert', 'user_token=' . $this->session->data['user_token'], TRUE);
        
        if (isset($this->request->post['module_aioseo_breadcrumblink'])) {
            $data['module_aioseo_breadcrumblink'] = $this->request->post['module_aioseo_breadcrumblink'];
        } elseif ($this->config->get('module_aioseo_breadcrumblink')) {
            $data['module_aioseo_breadcrumblink'] = $this->config->get('module_aioseo_breadcrumblink');
        } else {
            $data['module_aioseo_breadcrumblink'] = '';
        }
       
        if (isset($this->request->post['module_aioseo_direct_links'])) {
            $data['module_aioseo_direct_links'] = $this->request->post['module_aioseo_direct_links'];
        } elseif ($this->config->get('module_aioseo_direct_links')) {
            $data['module_aioseo_direct_links'] = $this->config->get('module_aioseo_direct_links');
        } else {
            $data['module_aioseo_direct_links'] = '';
        }

        if (isset($this->request->post['module_aioseo_self_generate'])) {
            $data['module_aioseo_self_generate'] = $this->request->post['module_aioseo_self_generate'];
        } elseif ($this->config->get('module_aioseo_self_generate')) {
            $data['module_aioseo_self_generate'] = $this->config->get('module_aioseo_self_generate');
        } else {
            $data['module_aioseo_self_generate'] = '';
        }

        if (isset($this->request->post['module_aioseo_manu_breadcrumblink'])) {
            $data['module_aioseo_manu_breadcrumblink'] = $this->request->post['module_aioseo_manu_breadcrumblink'];
        } elseif ($this->config->get('module_aioseo_manu_breadcrumblink')) {
            $data['module_aioseo_manu_breadcrumblink'] = $this->config->get('module_aioseo_manu_breadcrumblink');
        } else {
            $data['module_aioseo_manu_breadcrumblink'] = '';
        }

         
        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE); 
        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/seosetting', $data));
    }

    public function sitemap() {

        $this->language->load('extension/module/aioseo');

        $this->load->model('setting/extension');
        $this->load->model('setting/setting');
        $data = $this->loadControllers();

        $this->document->setTitle($this->language->get('heading_title'));

        if ($this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate()) {
            $this->model_setting_extension->install('feed', 'google_sitemap');
            $data['feed_google_sitemap_status'] = 1;
            $this->model_setting_setting->editSetting('feed_google_sitemap', $data);
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('extension/module/aioseo/sitemap', 'user_token=' . $this->session->data['user_token'], TRUE));
        }

        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], TRUE);
        
        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }
        
        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
        
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if($this->config->get("feed_google_sitemap_status")) {
            $data['sitemapenabled'] = 1;
        } else {
            $data['sitemapenabled'] = 0;
        }
        
        $extensions = $this->model_setting_extension->getInstalled('feed');

        if(!in_array('google_sitemap', $extensions)) {
             $data['sitemapenabled'] = 0;
        }

        if (!is_file(DIR_APPLICATION . 'controller/extension/feed/google_sitemap.php')) {
            $data['error_warning'] = $this->language->get('error_sitemap_file');
        } else {
             $data['sitemapexists'] = HTTP_CATALOG."sitemap.xml";
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/aioseo_sitemap', $data));
    }
}
?>