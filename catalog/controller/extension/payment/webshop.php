<?php

class ControllerExtensionPaymentWebshop extends Controller {

	public function index() {
		$this->language->load('extension/payment/webshop');

		$data['text_credit_card'] = $this->language->get('text_credit_card');
		$data['text_wait'] = $this->language->get('text_wait');
		
		$data['entry_cc_type'] = $this->language->get('entry_cc_type');
		$data['entry_cc_number'] = $this->language->get('entry_cc_number');
		$data['entry_cc_expire_date'] = $this->language->get('entry_cc_expire_date');
		$data['entry_cc_cvv2'] = $this->language->get('entry_cc_cvv2');
		
		$data['cardNoError'] = $this->language->get('cardNoError');
		$data['cardCvvError'] = $this->language->get('cardCvvError');
		$data['expireMonthError'] = $this->language->get('expireMonthError');
		$data['expireYearError'] = $this->language->get('expireYearError');
		
		$data['button_back'] = $this->language->get('button_back');
		$data['button_confirm'] = $this->language->get('button_confirm');
		$text_month = $this->language->get('text_month');
		$text_year = $this->language->get('text_year');
		
		$data['months'][0] = array(
		    'text'  => $text_month,
		    'value' => '00'
		);
		
		for ($i = 1; $i <= 12; $i++) {
			$data['months'][] = array(
				'text'  => date('m', mktime(0, 0, 0, $i, 1, 2000)),
				'value' => sprintf('%02d', $i)
			);
		}
		
		$today = getdate();

		$data['year_expire'][0] = array(
		    'text'  => $text_year,
		    'value' => '00'
		);

		for ($i = $today['year']; $i < $today['year'] + 10; $i++) {
			$data['year_expire'][] = array(
				'text'  => date('Y', mktime(0, 0, 0, 1, 1, $i)),
				'value' => date('Y', mktime(0, 0, 0, 1, 1, $i)) 
			);
		}
	    return $this->load->view('extension/payment/webshop', $data);
		
	}
	//发送支付请求
	public function send() {
		$this->language->load('extension/payment/webshop');
		$this->load->model('checkout/order');
		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);
		
		//订单基本信息
	 	$merNo 	       			 = trim($this->config->get('payment_webshop_merchant'));
		$terNo         			 = trim($this->config->get('payment_webshop_terno'));
		$signKey      			 = trim($this->config->get('payment_webshop_hash'));
		$orderNo       			 = trim($this->config->get('payment_webshop_order_prefix')) . $this->session->data['order_id'];
		$orderAmount   			 = sprintf ( '%.2f', $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value'], false)); 
		$orderCurrency 			 = $order_info['currency_code'];
		$billEmail    			 = $order_info['email'];
		$paymenturl				 = $this->config->get('payment_webshop_transaction_url');
		
		//账单信息
		$billFirstName			 = $this->formatString($order_info['payment_firstname']);
		$billLastName			 = $this->formatString($order_info['payment_lastname']);
		$billAddress1			 = $this->formatString($order_info['payment_address_1']);
		$billAddress2			 = $this->formatString($order_info['payment_address_2']);
		$billAddress			 = $this->formatString($billAddress1. ' ' .$billAddress2);
		$billCity				 = $this->formatString($order_info['payment_city']);
		$billState				 = $this->formatString($order_info['payment_zone']);
		$billCountry			 = $this->formatString($order_info['payment_iso_code_2']);
		$billZip				 = $this->formatString($order_info['payment_postcode']);
		$billPhone				 = $this->formatString($order_info['telephone']);
		
		//收货信息
		$shipFirstName			 = $this->formatString($order_info['shipping_firstname']);
		$shipLastName			 = $this->formatString($order_info['shipping_lastname']);
		$shipAddress1			 = $this->formatString($order_info['shipping_address_1']);
		$shipAddress2			 = $this->formatString($order_info['shipping_address_2']);
		$shipAddress			 = $this->formatString($shipAddress1. ' ' .$shipAddress2);
		$shipCity				 = $this->formatString($order_info['shipping_city']);
		$shipState				 = $this->formatString($order_info['shipping_zone']);
		$shipCountry			 = $this->formatString($order_info['shipping_iso_code_2']);
		$shipZip				 = $this->formatString($order_info['shipping_postcode']);
		
		//信用卡信息
		$cardNo  				 = str_replace(' ', '', $this->request->post['webshop_cc_number']);
		$cardExpireMonth  		 = trim($this->request->post['webshop_cc_expire_date_month']) ;
		$cardExpireYear  		 = trim($this->request->post['webshop_cc_expire_date_year']);
		$cardSecurityCode  		 = trim($this->request->post['webshop_cvv']);
		
		// 产品信息
		$goodsInfo = '';
		$productsinfo= $this->cart->getProducts();
		foreach ($productsinfo as $product ) {
			$arr_new[] = array('gdNo'=>$product ['product_id'],'gdName'=>$product ['name'],'gdQty'=>$product ['quantity'],
			                   'gdPrice'=>$this->currency->format ( $product ['price'], $order_info ['currency_code'], FALSE ));
		}
		$goodsInfo = empty($arr_new)?'':json_encode($arr_new);
		
		// 其他信息
		$lang                    = explode (";", $_SERVER ['HTTP_ACCEPT_LANGUAGE'] );//客户端语言
		$acceptLang              = $lang [0]; // 客户端语言
		$userAgent               = $_SERVER ['HTTP_USER_AGENT']; // 浏览器信息
		$webSite                 = empty ( $_SERVER ['HTTP_REFERER'] ) ? $_SERVER ['HTTP_HOST'] : $_SERVER ['HTTP_REFERER']; // 获取网站域名
		$notifyUrl               = HTTPS_SERVER . 'index.php?route=extension/payment/webshop/callback'; // 支付返回地址
		$returnUrl               = HTTPS_SERVER . 'index.php?route=extension/payment/webshop/callback'; // 支付通知地址
		$interfaceMode           = 'Opencart_' . VERSION . '_direct'; // 接口类型,格式：网店类型_版本_模式
		$client 		         = $this->isMobile () ? "Mobile" : "PC";//客户端类型
		$shipMethod              = $order_info ['shipping_method'];//发货方式
		$remark 		         = trim ( $order_info ['comment'] );//备注
		$ip                      = $this->getip(); // 客户端IP地址
		$version                 = '2.0'; //版本
		// 组合加密
		$signSrc       			 = $merNo.$terNo.$orderNo.$orderCurrency.$orderAmount.$cardNo.$cardExpireYear.$cardExpireMonth.$cardSecurityCode.$signKey;
		$signInfo      			 = hash('sha256',$signSrc);
		
		// 组装参数
		$data = array (
				'version'           => $version,
				'cardNo' 		    => $cardNo,
				'cardSecurityCode'  => $cardSecurityCode,
				'cardExpireMonth'   => $cardExpireMonth,
				'cardExpireYear'    =>$cardExpireYear,
				//'issuingBank' => $issuingBank,
				'merNo' 			=> $merNo,
				'terNo'			 	=> $terNo,
				'orderNo' 			=> $orderNo,
				'orderAmount'		=> $orderAmount,
				'orderCurrency' 	=> $orderCurrency,
				//'shipFee' 			=> $shipFee,
				'billFirstName' 	=> $billFirstName,
				'billLastName' 		=> $billLastName,
				'billEmail' 		=> $billEmail,
				'billPhone' 		=> $billPhone,
				'billZip' 			=> $billZip,
				'billAddress'		=> $billAddress,
				'billCity' 			=> $billCity,
				'billState' 		=> $billState,
				'billCountry' 		=> $billCountry,
				'shipFirstName' 	=> $shipFirstName,
				'shipLastName' 		=> $shipLastName,
				//'shipPhone' 		=> $shipPhone,
				//'shipEmail' 		=> $shipEmail,
				'shipCountry'		=> $shipCountry,
				'shipState' 		=> $shipState,
				'shipCity' 			=> $shipCity,
				'shipAddress' 		=> $shipAddress,
				'shipZip' 			=> $shipZip,
				'returnUrl' 		=> $returnUrl,
				'notifyUrl' 		=> $notifyUrl,
				'webSite' 			=> $webSite,
				'signInfo' 			=> $signInfo,
				'ip' 				=> $ip,
				'client' 			=> $client,
				'interfaceMode' 	=> $interfaceMode,
				'shipMethod'		=> $shipMethod,
				'acceptLang' 		=> $acceptLang,
				'userAgent' 		=> $userAgent,
				'goodsInfo' 		=> $goodsInfo,
				'remark' 			=> $remark
		);
		//支付请求
		$resultObject = $this->send_gateway($paymenturl, http_build_query($data));
		$result       = json_decode($resultObject,true);
		if(!isset($resultObject) || empty($resultObject) || empty($result)){//支付异常
			$result['merNo'] 	      = $data ['merNo'];
			$result['terNo'] 	      = $data ['terNo'];
			$result['tradeNo'] 	      = ''; 
			$result['orderNo']        = $data ['orderNo'];
			$result['orderAmount']    = $data ['orderAmount'];
			$result['orderCurrency']  = $data ['orderCurrency'];
			$result['remark']         = $data ['remark'];
			$result['transType']  	  = 'sales';
			$result['acquirer']    	  = '';
			$result['returnType']     = '1'; 
			$result['orderSucceed']   = '0'; 
			$result['orderResult']    = 'Payment Connection Exception'; 
			$sha256Src 				  = $result['merNo'].
							            $result['terNo'].
						 				$result['tradeNo'].
										$result['orderNo'].
										$result['orderCurrency'].
						 				$result['orderAmount'] . 
						 				$result['orderSucceed'] . 
						 				$signKey;
			$signInfo 				  = strtoupper (hash("sha256",$sha256Src));
			$result['signInfo']  	  = $signInfo;
		}
				
		//支付结果
		$json              = array();	
		$payResult         = '';
		$orderSucceed      = $result['orderSucceed'];	
		$message           = $this->getResultMessage($result, "<br>"); 
		if($orderSucceed == "1"){
			$payResult  = "<font color='red'>".$this->language->get('entry_order_payment_result_success') ."</font>";
			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_webshop_success_order_status_id'), $payResult.'<br>'.$message, true);
			$json['success'] = $this->language->get('entry_order_payment_result_success');
		}elseif ($orderSucceed == "-1" || $orderSucceed == "-2"){
			$payResult  = "<font color='red'>".$this->language->get('entry_order_payment_result_processing') ."</font>";
			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_webshop_order_status_id'), $payResult.'<br>'.$message, true);
			if(isset($result['redirectURL']) && !empty($result['redirectURL'])){
				$json['redirectURL'] = $result['redirectURL'];
			}else{
				$json['error'] = $this->language->get('entry_order_payment_result_processing') . $orderResult;
			}
		}elseif($orderSucceed == "0"){
			$payResult  = "<font color='red'>".$this->language->get('entry_order_payment_result_failure') ."</font>";	
			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_webshop_failed_order_status_id'), $payResult.'<br>'.$message, true);
			$json['error'] = $this->language->get('entry_order_payment_result_failure_reason') . $orderResult;
		}else{
			$payResult     = $this->language->get('entry_order_payment_result_unknown');
			$json['error'] = $this->language->get('entry_order_payment_result_unknown');
		}
		//通过Session传递结果显示数据
		$result['payResult']                   = $payResult;
		$this->session->data['webshop_result'] = $result;
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
	/**
	 * 返回处理页面
	 */
    public function callback(){
  		if(empty($this->request->request['tradeNo'])){
			header('Location:'.$this->url->link('checkout/checkout', '', 'SSL'));
		}
		$this->load->model('checkout/order');
		$this->load->language('extension/payment/webshop');
		$merNo         = $this->request->request['merNo'];
		$terNo         = $this->request->request['terNo'];
		$tradeNo       = $this->request->request['tradeNo'];
		$orderNo       = $this->request->request['orderNo'];
		$orderAmount   = $this->request->request['orderAmount'];
		$orderCurrency = $this->request->request['orderCurrency'];
		$orderSucceed  = $this->request->request['orderSucceed'];
		$orderResult   = $this->request->request['orderResult'];
		$signInfo      = $this->request->request['signInfo'];
		$returnType    = $this->request->request['returnType'];
		//$remark        = $this->request->request['remark'];
		$signKey       = trim($this->config->get('payment_webshop_hash'));
		$sha256Src     = $merNo.$terNo.$tradeNo.$orderNo.$orderCurrency.$orderAmount.$orderSucceed.$signKey;
		$mysign        = strtoupper (hash("sha256",$sha256Src));
		
	  	$prefixorder   = trim ($this->config->get('payment_webshop_order_prefix'));
		$orderId       = substr($orderNo,strlen($prefixorder));
		//支付结果
		$payResult     = '';
		$message       = $this->getResultMessage($_REQUEST, "<br>"); 
		$succeed       = false;
		if ($mysign == $signInfo) {	
			if($orderSucceed == "1"){
				$succeed = true;
				$payResult  = "<font color='red'>".$this->language->get('entry_order_payment_result_success') ."</font>";				
				$this->model_checkout_order->addOrderHistory($orderId, $this->config->get('payment_webshop_success_order_status_id'),$payResult.'<br>'.$message, true);
			}elseif($orderSucceed == "0"){		//支付失败
		 		$payResult  = "<font color='red'>".$this->language->get('entry_order_payment_result_failure') ."</font>";	
				$this->model_checkout_order->addOrderHistory($orderId, $this->config->get('payment_webshop_failed_order_status_id'), $payResult.'<br>'.$message, true);
			}elseif ($orderSucceed == "-1" || $orderSucceed == "-2"){
				$payResult  = "<font color='red'>".$this->language->get('entry_order_payment_result_processing') ."</font>";			
				$this->model_checkout_order->addOrderHistory($orderId, $this->config->get('payment_webshop_order_status_id'), $payResult.'<br>'.$message, true);
			}else{
				$payResult = $this->language->get('entry_order_payment_result_unknown');
				die($this->language->get('entry_order_payment_result_unknown'));
			}
		}else{
			$payResult = $this->language->get('entry_order_payment_result_checkout');
			die($this->language->get('entry_order_payment_result_checkout'));
		}

		//设置支付结果
		$_REQUEST['payResult']        = $payResult;
		$_SESSION['webshop_result']   = $_REQUEST;
		//判断返回类型,如果是浏览器返回,则显示支付结果,如果是服务端返回,响应"OK"字符串表示已经接收到结果
		if($returnType == '2'){
			echo "OK";
			exit();
		}else{
			if($succeed){
				header('Location:'.$this->url->link('checkout/success', '', 'SSL'));
			}else{
				$this->result();
			}
		}
    }

	/**
	 * 返回显示页面
	 */
	public function result() {
		if(empty($this->session->data['order_id']) ){
			header("location:index.php");
		}
		$this->language->load('extension/payment/webshop');
		$this->load->model('checkout/order');
		
		if (!$this->request->server['HTTPS'] || ($this->request->server['HTTPS'] != 'on')) {
			$data['base'] 	= $this->config->get('config_url');
		} else {
			$data['base'] 	= $this->config->get('config_ssl');
		}
		$data['title'] 		      = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));		
		$data['charset'] 	      = $this->language->get('charset');
		$data['language'] 	      = $this->language->get('code');
		$data['direction']        = $this->language->get('direction');
		$data['heading_title']    = sprintf($this->language->get('heading_title'), $this->config->get('config_name'));
		//显示结果
		if(isset($_SESSION['webshop_result']) && !empty($_SESSION['webshop_result'])){
			$result               = $_SESSION['webshop_result'];
		}else{
			$result               = $this->session->data['webshop_result'];
		}
		$data['text_result']      = $this->getResultMessage($result,"<br>");
		$data['text_payResult']   = $result['payResult'];
		
		//$data['text_success'] = $this->language->get('text_success');
		//$data['text_success_wait'] = sprintf($this->language->get('text_success_wait'), $this->url->link('checkout/success'));		
		$data['text_response']    = $this->language->get('text_response');
		$data['text_result_wait'] = sprintf($this->language->get('text_result_wait'), $this->url->link('checkout/cart', '', 'SSL'));
		$data['continue']         = $this->url->link('checkout/cart');
		
		$data['column_left']      = $this->load->controller('common/column_left');
		$data['column_right']     = $this->load->controller('common/column_right');
		$data['content_top']      = $this->load->controller('common/content_top');
		$data['content_bottom']   = $this->load->controller('common/content_bottom');
		$data['footer']           = $this->load->controller('common/footer');
		$data['header']           = $this->load->controller('common/header');
		
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/extension/payment/webshop_result')) {
			$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/extension/payment/webshop_result', $data));
		} else {
			$this->response->setOutput($this->load->view('extension/payment/webshop_result', $data));
		}
	}
	
	//获取返回信息
	function getResultMessage($resultArray,$splitFlag){
		$message = $this->language->get('entry_tradeNo') . $resultArray['tradeNo'] . $splitFlag 
				 . $this->language->get('entry_OrderNo') . $resultArray['orderNo'] . $splitFlag
				 . $this->language->get('entry_order_amount') . $resultArray['orderAmount'] . $resultArray['orderCurrency'] . $splitFlag
				 . $this->language->get('entry_order_result') . $resultArray['orderResult'];
		return $message;
	}
	
	//数据请求
	function send_gateway($payUrl, $data) {
		if (function_exists ( 'curl_init' ) && function_exists ( 'curl_exec' )) {
			return $this->curl_post ( $payUrl, $data ); 
		} else {
			return $this->http_post( $payUrl, $data ); 
		}
	}
	
	//普通请求
	function http_post($payUrl, $data) {
		$webSite = empty ( $_SERVER ['HTTP_REFERER'] ) ? $_SERVER ['HTTP_HOST'] : $_SERVER ['HTTP_REFERER']; 
		$options = array (
				'http' => array (
						'method'  => "POST",
						'header'  => "Accept-language:en\r\n"."Content-type:application/x-www-form-urlencoded\r\n".
	                		         "Content-Length:".strlen($data)."\r\n"."referer:".$webSite."\r\n",
						'content' => $data, 
						'timeout' => 90 
				) 
		); 
		$context = stream_context_create ( $options );
		return file_get_contents ( $payUrl, false, $context );
	}
	
	//CURL请求
	function curl_post($payUrl, $data) {
		$website = empty ( $_SERVER ['HTTP_REFERER'] ) ? $_SERVER ['HTTP_HOST'] : $_SERVER ['HTTP_REFERER'];
		$curl = curl_init ();
		curl_setopt ( $curl, CURLOPT_URL, $payUrl );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt ( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
		curl_setopt ( $curl, CURLOPT_USERAGENT, $_SERVER ['HTTP_USER_AGENT'] );
		curl_setopt ( $curl, CURLOPT_FOLLOWLOCATION, 1 );
		curl_setopt ( $curl, CURLOPT_REFERER, $website );
		curl_setopt ( $curl, CURLOPT_POST, 1 );
		curl_setopt ( $curl, CURLOPT_POSTFIELDS, $data );
		curl_setopt ( $curl, CURLOPT_TIMEOUT, 90 );
		curl_setopt ( $curl, CURLOPT_HEADER, 0 );
		curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, 1 );	
		$result = curl_exec ( $curl );
		curl_close ( $curl );
		return $result;
	}

  	//获取客户端IP
    function getip(){ 
   		if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){ 
			$online_ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
		}
		elseif(isset($_SERVER['HTTP_CLIENT_IP'])){ 
			$online_ip = $_SERVER['HTTP_CLIENT_IP']; 
		}
		elseif(isset($_SERVER['HTTP_X_REAL_IP'])){ 
			$online_ip = $_SERVER['HTTP_X_REAL_IP']; 
		}else{ 
			$online_ip = $_SERVER['REMOTE_ADDR']; 
		}
		$ips = explode(",",$online_ip);
		return $ips[0];  
    }
   	
	//判断客户端是否为移动端
	function isMobile() {
		// 如果有HTTP_X_WAP_PROFILE则一定是移动设备
		if (isset ( $_SERVER ['HTTP_X_WAP_PROFILE'] )) {
			return true;
		}
		// 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
		if (isset ( $_SERVER ['HTTP_VIA'] )) {
			// 找不到为flase,否则为true
			return stristr ( $_SERVER ['HTTP_VIA'], "wap" ) ? true : false;
		}
		// 脑残法，判断手机发送的客户端标志,兼容性有待提高。其中'MicroMessenger'是电脑微信
		if (isset ( $_SERVER ['HTTP_USER_AGENT'] )) {
			$clientkeywords = array (
					'nokia',
					'sony',
					'ericsson',
					'mot',
					'samsung',
					'htc',
					'sgh',
					'lg',
					'sharp',
					'sie-',
					'philips',
					'panasonic',
					'alcatel',
					'lenovo',
					'iphone',
					'ipod',
					'meizu',
					'android',
					'netfront',
					'symbian',
					'ucweb',
					'windowsce',
					'palm',
					'operamini',
					'operamobi',
					'openwave',
					'nexusone',
					'cldc',
					'midp',
					'wap',
					'mobile',
					'MicroMessenger' 
			);
			// 从HTTP_USER_AGENT中查找手机浏览器的关键字
			if (preg_match ( "/(" . implode ( '|', $clientkeywords ) . ")/i", strtolower ( $_SERVER ['HTTP_USER_AGENT'] ) )) {
				return true;
			}
		}
		// 协议法，因为有可能不准确，放到最后判断
		if (isset ( $_SERVER ['HTTP_ACCEPT'] )) {
			// 如果只支持wml并且不支持html那一定是移动设备
			// 如果支持wml和html但是wml在html之前则是移动设备
			if ((strpos ( $_SERVER ['HTTP_ACCEPT'], 'vnd.wap.wml' ) !== false) && (strpos ( $_SERVER ['HTTP_ACCEPT'], 'text/html' ) === false || (strpos ( $_SERVER ['HTTP_ACCEPT'], 'vnd.wap.wml' ) < strpos ( $_SERVER ['HTTP_ACCEPT'], 'text/html' )))) {
				return true;
			}
		}
		return false;
	}
	//打印日志
	function logger($flag, $log_content) {
		if (isset ( $_SERVER ['HTTP_APPNAME'] )) { 
			sae_set_display_errors ( false );
			sae_debug ( $log_content );
			sae_set_display_errors ( true );
		} else { // LOCAL
			$max_size = defined ( LOG_SIZE ) ? LOG_SIZE : 1000000; // 默认1M
			$log_filename = (defined ( "LOG_PATH" ) ? LOG_PATH : '') . date ( "Y-m-d" ) . '.log';
			if (file_exists ( $log_filename ) and (abs ( filesize ( $log_filename ) ) > $max_size)) {
				unlink ( $log_filename );
			}
			$msg = '';
			if (! empty ( $log_content ) && is_array ( $log_content )) {
				foreach ( $log_content as $key => $val ) {
					$msg .= $key . '=' . $val . "&";
				}
			} else {
				$msg = $log_content;
			}
			file_put_contents ( $log_filename, date ( 'Y-m-d H:i:s' ) . '	[' . $flag . "] >>>>>> " . $msg . "\r\n", FILE_APPEND );
		}
	}
	
	//特殊字符转换
	function formatString($string_before) {
		$string_after = str_replace ( "\n", " ", $string_before );
		$string_after = str_replace ( "\r", " ", $string_after );
		return trim ( $string_after );
	}
}
?>