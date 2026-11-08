<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();


	if(isset($this->session->data['plink'])) {
		$data['plink'] = $this->session->data['plink'];
	} 
	unset($this->session->data['plink']);

	if(isset($this->session->data['pid'])) {
		$data['pid'] = $this->session->data['pid'];
	} 
	unset($this->session->data['pid']);

	if(isset($this->session->data['twitimage'])) {
		$data['twitimage'] = str_replace(" ","%20",$this->session->data['twitimage']);
	}
	unset($this->session->data['twitimage']);

	if(isset($this->session->data['pinimage'])) {
		$data['pinimage'] = str_replace(" ","%20",$this->session->data['pinimage']);
	}
	unset($this->session->data['pinimage']);

	if(isset($this->session->data['pstock'])) {
		$data['pstock'] = ($this->session->data['pstock'])? "instock":"oos";
		$data['fbstock'] = ($this->session->data['pstock'])? "in stock":"out of stock";
	} 
	unset($this->session->data['pstock']);


	if(isset($this->session->data['pprice'])) {
		$data['pprice'] = $this->session->data['pprice'];
	} 
	unset($this->session->data['pprice']);

	if(isset($this->session->data['pbrand'])) {
	$data['pbrand'] = $this->session->data['pbrand'];
	} 
	unset($this->session->data['pbrand']);

	$data['config_name'] = $this->config->get('config_name');
	$data['config_currency'] = $this->config->get('config_currency');

	$data['config_google_pageid'] = $this->config->get('config_google_pageid');

	$data['config_twitter_status'] = $this->config->get('twittersnippet_status');
	$data['config_twitter_uername'] = $this->config->get('config_twitter_uername');
	$tcardsize = $this->config->get('config_twitter_cardsize');
	$data['tcardsize'] = $tcardsize ? "summary_large_image" : "summary";
	$data['config_facebook_status'] = $this->config->get('grsnippetfacebook_status');
	$data['config_facebook_adminid'] = $this->config->get('config_facebook_adminid');

	$data['config_pinterest_status'] = $this->config->get('grsnippetpinterest_status');

	$this->load->model('localisation/language');
		$results = $this->model_localisation_language->getLanguages();
		$data['alternatelinks'] = array();
		foreach ($results as $result) {
			if (isset($this->session->data['hreflang'][$result['language_id']])) {
				$code  = strstr($result['code'], '-', true) ?: $result['code'];
				$data['alternatelinks'][$code] = $this->session->data['hreflang'][$result['language_id']];
			}
		}
	
		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
