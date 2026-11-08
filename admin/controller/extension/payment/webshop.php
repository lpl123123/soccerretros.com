<?php 
class ControllerExtensionPaymentWebshop extends Controller {
	private $error = array(); 

	public function index() {
		$this->load->language('extension/payment/webshop');
		
		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');
			
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate())) {
			$this->load->model('setting/setting');
			
			$this->model_setting_setting->editSetting('payment_webshop', $this->request->post);				
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_webshop_join'] = $this->language->get('text_webshop_join');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
	
		$data['entry_merchantid'] = $this->language->get('entry_merchantid');
		$data['entry_hash'] = $this->language->get('entry_hash');
		$data['entry_terno'] = $this->language->get('entry_terno');
		$data['entry_prefix'] = $this->language->get('entry_prefix');
		
		$data['entry_transaction_url'] = $this->language->get('entry_transaction_url');
		$data['entry_order_status'] = $this->language->get('entry_order_status');	

		$data['entry_success_order_status']=$this->language->get('entry_success_order_status');
		$data['entry_failed_order_status']=$this->language->get('entry_failed_order_status');
		$data['entry_proccess_order_status']=$this->language->get('entry_proccess_order_status');
		
		
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['tab_general'] = $this->language->get('tab_general');

 		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

 		if (isset($this->error['merchant'])) {
			$data['error_merchant'] = $this->error['merchant'];
		} else {
			$data['error_merchant'] = '';
		}

 		if (isset($this->error['hash'])) {
			$data['error_hash'] = $this->error['hash'];
		} else {
			$data['error_hash'] = '';
		}
		if (isset($this->error['terno'])) {
			$data['error_terno'] = $this->error['terno'];
		} else {
			$data['error_terno'] = '';
		}

  		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
   		    'href'      => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true),
       		'text'      => $this->language->get('text_home'),
   		);

   		$data['breadcrumbs'][] = array(
   		    'href'      => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'], true),
       		'text'      => $this->language->get('text_payment'),
   		);

   		$data['breadcrumbs'][] = array(
   		    'href'      => $this->url->link('extension/payment/webshop', 'user_token=' . $this->session->data['user_token'], true),
       		'text'      => $this->language->get('heading_title'),
   		);
				
		$data['action'] = $this->url->link('extension/payment/webshop', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);
		
		if (isset($this->request->post['payment_webshop_merchant'])) {
			$data['payment_webshop_merchant'] = $this->request->post['payment_webshop_merchant'];
		} else {
			$data['payment_webshop_merchant'] = $this->config->get('payment_webshop_merchant');
		}
		
		if (isset($this->request->post['payment_webshop_hash'])) {
			$data['payment_webshop_hash'] = $this->request->post['payment_webshop_hash'];
		} else {
			$data['payment_webshop_hash'] = $this->config->get('payment_webshop_hash');
		}
		
		if (isset($this->request->post['payment_webshop_terno'])) {
			$data['payment_webshop_terno'] = $this->request->post['payment_webshop_terno'];
		} else {
			$data['payment_webshop_terno'] = $this->config->get('payment_webshop_terno');
		}
		
		if (isset($this->request->post['payment_webshop_order_status_id'])) {
			$data['payment_webshop_order_status_id'] = $this->request->post['payment_webshop_order_status_id'];
		} else {
			$data['payment_webshop_order_status_id'] = $this->config->get('payment_webshop_order_status_id'); 
		} 
		/* add transaction URL */
		if(isset($this->request->post['payment_webshop_transaction_url'])){
			$data['payment_webshop_transaction_url'] = $this->request->post['payment_webshop_transaction_url'];
		}else{
			$data['payment_webshop_transaction_url'] = $this->config->get('payment_webshop_transaction_url');
			if(empty($data['payment_webshop_transaction_url'])){
                $data['payment_webshop_transaction_url']='';
			}
		}
		/* add status */
		if (isset($this->request->post['payment_webshop_success_order_status_id'])) {
			$data['payment_webshop_success_order_status_id'] = $this->request->post['payment_webshop_success_order_status_id'];
		} else {
			$data['payment_webshop_success_order_status_id'] = $this->config->get('payment_webshop_success_order_status_id'); 
		} 
		if (isset($this->request->post['payment_webshop_failed_order_status_id'])) {
			$data['payment_webshop_failed_order_status_id'] = $this->request->post['payment_webshop_failed_order_status_id'];
		} else {
			$data['payment_webshop_failed_order_status_id'] = $this->config->get('payment_webshop_failed_order_status_id'); 
		} 
		if (isset($this->request->post['payment_webshop_proccess_order_status_id'])) {
			$data['payment_webshop_proccess_order_status_id'] = $this->request->post['payment_webshop_proccess_order_status_id'];
		} else {
			$data['payment_webshop_proccess_order_status_id'] = $this->config->get('payment_webshop_proccess_order_status_id'); 
		} 
		$this->load->model('localisation/order_status');
		
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		if (isset($this->request->post['payment_webshop_geo_zone_id'])) {
			$data['payment_webshop_geo_zone_id'] = $this->request->post['payment_webshop_geo_zone_id'];
		} else {
			$data['payment_webshop_geo_zone_id'] = $this->config->get('payment_webshop_geo_zone_id'); 
		} 

		$this->load->model('localisation/geo_zone');
										
		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		if (isset($this->request->post['payment_webshop_status'])) {
			$data['payment_webshop_status'] = $this->request->post['payment_webshop_status'];
		} else {
			$data['payment_webshop_status'] = $this->config->get('payment_webshop_status');
		}
		
		if (isset($this->request->post['payment_webshop_sort_order'])) {
			$data['payment_webshop_sort_order'] = $this->request->post['payment_webshop_sort_order'];
		} else {
			$data['payment_webshop_sort_order'] = $this->config->get('payment_webshop_sort_order');
		}
		
		if (isset($this->request->post['payment_webshop_order_prefix'])) {
			$data['payment_webshop_order_prefix'] = $this->request->post['payment_webshop_order_prefix'];
		} else {
			$data['payment_webshop_order_prefix'] = $this->config->get('payment_webshop_order_prefix');
		}
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/payment/webshop', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/webshop')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->request->post['payment_webshop_merchant']) {
			$this->error['merchant'] = $this->language->get('error_merchant');
		}
		
		if (!$this->request->post['payment_webshop_hash']) {
			$this->error['hash'] = $this->language->get('error_hash');
		}
		
		if (!$this->request->post['payment_webshop_terno']) {
			$this->error['terno'] = $this->language->get('error_terno');
		}
		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}	
	}
}
?>