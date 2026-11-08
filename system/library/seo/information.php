<?php
class SeoInformation extends SeoAbstract { 

	private $_name;

	public function getName() {
		return $this->_name;
	}

	public function load() {

		$sql = "SELECT  id.language_id, id.meta_keyword,id.meta_title, id.meta_description FROM `" . DB_PREFIX . "information_description` id  WHERE id.information_id = '" .(int) $this->_id . "'";
		
		$query = $this->_db->query($sql);

		foreach($query->rows as $row) {
				
			$this->_title[$row['language_id']] = $row['meta_title'];
			$this->_meta_keywords[$row['language_id']] = $row['meta_keyword'];
			$this->_meta_description[$row['language_id']] = $row['meta_description'];
			$newQ = $this->_db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'information_id=" . (int)$this->_id . "' AND language_id = '".(int)$row['language_id']."'");		
			$this->_seo_keyword['language_id'][$row['language_id']] = isset($newQ->row['keyword']) ? $newQ->row['keyword'] : '';	
		}

		$config = $this->_registry->get('config');
		$query = $this->_db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "information_description id WHERE id.information_id = '" . (int)$this->_id ."'");
		$this->_name = isset($query->row['title']) ? $query->row['title'] : '';
	}

	public function save() {
				
		$db = $this->_registry->get('db');
		
		$query = $db->query("SELECT id FROM `" . DB_PREFIX . "seo_data` 
							WHERE id = '" . $db->escape($this->_id) . "' AND type= 'information' ");
		if($query->num_rows) {
			$db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE seo_url_id = '" . (int) $query->row['seo_url_id'] . "'");
			$db->query("DELETE FROM `" . DB_PREFIX . "seo_data` WHERE id = '" . $db->escape($this->_id) . "' AND type= 'information' ");
		}
				
		$seo_url_id = 0;
		
		if($this->_seo_keyword){

			$sql = "SELECT COUNT(*) as count FROM `" . DB_PREFIX . "seo_url` WHERE `query` = '" . $db->escape($this->_url_query) . "'";
			$already_existing = $db->query($sql)->row['count'];
			if($already_existing) {
				$db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `query` = '" . $db->escape($this->_url_query) . "' AND store_id = 0 ");
			}
			
			foreach ($this->_seo_keyword as $key => $value) {
				if ($value != "") {
					$db->query("INSERT INTO `" . DB_PREFIX . "seo_url` SET `query` = '" . $db->escape($this->_url_query) . "',
						`keyword` = '" . $db->escape($value) . "', language_id ='".(int)$key."'");
				}
			}
			
			$seo_url_id = $db->getLastId();
		}
				
		foreach($this->_title as $language_id => $row ){ 		

			$db->query("UPDATE `" . DB_PREFIX . "information_description` SET
						`meta_title` = '" . $db->escape($this->_title[$language_id]) . "',
						`meta_keyword` = '" . $db->escape($this->_meta_keywords[$language_id]) . "',
						`meta_description` = '" . $db->escape($this->_meta_description[$language_id]) . "'
						 WHERE information_id = '" . $db->escape($this->_id) . "' AND language_id = '". (int) $language_id ."' 
						");
		} 
		
		//delete information cache
		$cache = $this->_registry->get('cache');		
		$cache->delete('information');
		
	}

}

?>