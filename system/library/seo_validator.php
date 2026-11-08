<?php
class SeoValidator {

	protected $registry;

	public function __construct($registry) {
		$this->registry = $registry;
		$this->load->model('extension/module/aioseo');
	}

	public function __get($key) {
		return $this->registry->get($key);
	}

	public function __set($key, $value) {
		$this->registry->set($key, $value);
	}

	public function keyword_validate($member,$member_name){
		
		$all_route_keywords = $this->model_extension_module_aioseo->getSeoRouteKeywords();
		
		if($all_route_keywords){
			foreach ($all_route_keywords as $value) {
				$new_array[$value['query']] = $value['keyword'];
				$new_array2[$value['query'].'_'.$value['language_id']] = $value['keyword'];
			}

			foreach($member as $key => $value){
				if($member_name=='customrewrite' || $member_name=='custom_url_store'){
					$new_array_post['route='.$value['query']] = trim($value['keyword']);
				}else{
					$new_array_post[$member_name.'='.$key] = trim($value);
				}
			}
			
			if($member_name=='customrewrite' || $member_name=='custom_url_store'){
				foreach($new_array2 as $route => $keyword) {
					if(strstr($route, 'route=') && !array_key_exists($route, $new_array_post)) {
						unset($new_array2[$route]);
					}
				}
			}

			foreach($new_array_post as $key => $value){
				$new_array2[$key] = $value;
			}
			
			$unique_existing_keywords = array_unique(array_diff_key($new_array2, array_unique($new_array2)));
			
			foreach ($unique_existing_keywords as $key => $value) {
				if(!in_array($value,$new_array_post)){
					unset($unique_existing_keywords[$key]);
				}
			}
			if($unique_existing_keywords){
				$existing_keyword = array_shift($unique_existing_keywords);
				$data = array(
					'existing_keyword'	=>	$existing_keyword,
					'error'				=>  'error_exists_doc_db'
					);
					return $data;
			}

		}else{
			foreach($member as $value){
				if($member_name=='customrewrite' || $member_name=='custom_url_store'){
					$all_post_keywords[] = trim($value['keyword']);
				}else{
					$all_post_keywords[] = trim($value);
				}
			}
				
			$unique_duplicate_keywords_post = array_unique(array_diff_key($all_post_keywords, array_unique($all_post_keywords)));
				
			if($unique_duplicate_keywords_post){
				$existing_keyword = array_shift($unique_duplicate_keywords_post);
				$data = array(
					'existing_keyword'	=>	$existing_keyword,
					'error'				=>  'error_exists_doc'
					);
					return $data;
			}
		}
	}

}
