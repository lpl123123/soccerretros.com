<?php
class ModelExtensionModuleRedirect extends Model {
	public function redirectData($url) {
		$urlentry = $this->db->query("SELECT * FROM " . DB_PREFIX . "redirectManagerTable where failedUrl = '".$this->db->escape($url)."'");

		if($urlentry->num_rows){
			$this->db->query("UPDATE " . DB_PREFIX . "redirectManagerTable SET count = count + 1 WHERE  failedUrl = '" .$this->db->escape($url). "'");
		} else {
			$this->db->query("INSERT INTO " . DB_PREFIX . "redirectManagerTable SET failedUrl = '" .$this->db->escape($url). "', count = 1, date = NOW()");
		}
	}

	public function getHomeUrl() {
		$urlentry = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url where query = 'route=common/home' AND language_id = '".$this->config->get("config_language_id")."' ");
		if($urlentry->num_rows) {
			return $urlentry->row['keyword'];
		} else {
			return 0;
		}
	}
}
?>