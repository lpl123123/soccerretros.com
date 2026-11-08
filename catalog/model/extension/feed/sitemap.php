<?php
class ModelExtensionFeedSitemap extends Model {	
	public function generate() {
		if($this->config->get("config_secure")) {
			$server = HTTPS_SERVER;
		} else {
			$server = HTTP_SERVER;
		}
		
		$this->load->language('catalog/sitemap');
		$output = '';
		$on = $this->config->get('nerdherd_direct_links');
		$length = $this->getLanguages();
		$fp = fopen(DIR_APPLICATION . '../sitemap.xml', 'w+');
		if(count($length) == 1) {
			fwrite($fp, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n");
			fwrite($fp, "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" \r\n xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" \r\n>");
			fwrite($fp, '    <url>
                <loc>' . $server . '</loc>
                <changefreq>daily</changefreq>
                <priority>1.0</priority>
            </url>' . "\r\n");
// 			fwrite($fp, $this->getGeneral($server));
            fwrite($fp, $this->getInformationPages($server));
			fwrite($fp, $this->getCategories($on,$server));
			fwrite($fp, $this->getProducts($server));
			fwrite($fp, $this->getBlogHome($server));
			fwrite($fp, $this->getJournalBlogCategories($server));
            fwrite($fp, $this->getJournalBlogPosts($server));
			fwrite($fp, $this->getManufacturers($server));
		} else {
			fwrite($fp, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\r\n");
			fwrite($fp, "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\" \r\n xmlns:image=\"http://www.google.com/schemas/sitemap-image/1.1\" \r\n  xmlns:xhtml=\"http://www.w3.org/1999/xhtml\">\r\n");
			fwrite($fp, '    <url>
                <loc>' . $server . '</loc>
                <changefreq>daily</changefreq>
                <priority>1.0</priority>
            </url>' . "\r\n");
// 			fwrite($fp, $this->getMGeneral($server));
            fwrite($fp, $this->getMInformationPages($length,$server));
			fwrite($fp, $this->getMCategories($length,$on,$server));
			fwrite($fp, $this->getMProducts($length,$server));
			fwrite($fp, $this->getBlogHome($server));
			fwrite($fp, $this->getJournalBlogCategories($server));
            fwrite($fp, $this->getJournalBlogPosts($server));
			fwrite($fp, $this->getMManufacturers($server));
		}
		fwrite($fp, "</urlset>");
		fclose($fp);
	}
	protected function getCategories($on,$server){
		$output = '';
		$categories = $this->getAllCategories();
		foreach ($categories as $key => $value) {
			$path = $key;
			$keyword = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=".$path."' AND language_id ='".(int)$this->config->get('config_language_id')."' ");
			$lm =  $this->db->query("SELECT date_modified FROM " . DB_PREFIX . "category WHERE category_id = '".$path."'")->row['date_modified'];
			$lm = date("Y-m-d", strtotime($lm));
			if($keyword->num_rows){
				$keywordvalue = $keyword->row['keyword'];
				while ($value != 0 && (!$on)) {
				  $path .= "_".$value;
				  $keyword = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=".$value."' AND language_id ='".(int)$this->config->get('config_language_id')."' ");
				  if($keyword->num_rows){
				  	//$keywordvalue = $keyword->row['keyword']."/".$keywordvalue;
				  	$keywordvalue = $keywordvalue;
				  } else {
					$output .= $this->generateLinkNode($server . 'index.php?route=product/category&path=' . $path,$server,$lm, "yearly", "0.9",$image="");
				  	break;
				  }
				  $value = isset($categories[$value])?$categories[$value]:0;
				}
				$output .= $this->generateLinkNode($server.$keywordvalue,$server,$lm, "yearly", "0.9",$image="");
			} else {
				while ($value != 0) {
					$path .= "_".$value;
					$value = isset($categories[$value])?$categories[$value]:0;
				}
				$output .= $this->generateLinkNode($server . 'index.php?route=product/category&path=' . $path,$server,$lm, "yearly", "0.9",$image="");
			}
		}
		return $output;
	}

	public function getAllCategories() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' ORDER BY c.sort_order, LCASE(cd.name)");
		foreach ($query->rows as $key => $value) {
			$results[$value['category_id']] = $value['parent_id']; 
		}
		return $results;
	}
	
	public function getProducts($server) {
		$output = '';
		$results =  $this->db->query("SELECT DISTINCT(product_id),date_modified,image FROM " . DB_PREFIX . "product  WHERE status = 1");
		foreach ($results->rows as $key => $value) {
			$url =  $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=".$value['product_id']."' AND language_id = '".(int)$this->config->get('config_language_id')."'");
			$lm = date("Y-m-d", strtotime($value['date_modified']));
			if($url->num_rows) {
				$output .= $this->generateLinkNode($server. $url->row['keyword'],$server,$lm, "Monthly", "1.0",$value['image']);
			} else {
				$output .= $this->generateLinkNode($server . 'index.php?route=product/product&product_id=' . $value['product_id'],$server,$lm,"Monthly", "1.0",$value['image']);
			}
		}
		return $output;
	}
	
	protected function getInformationPages($server) {
		$output = '';
		$this->load->model('catalog/information');
		foreach ($this->model_catalog_information->getInformations() as $result) {
			$url =  $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'information_id=".$result['information_id']."' AND language_id = '".(int)$this->config->get('config_language_id')."'");
			if($url->num_rows) {
				$output .= $this->generateLinkInNode($server. $url->row['keyword'], "yearly", "0.8");
			} else {
				$output .= $this->generateLinkInNode($server .  'index.php?route=information/information&information_id=' . $result['information_id'],"yearly","0.8");
			}
		}
		return $output;
	}


	protected function getMCategories($length,$on,$server) {
		$output = '';
		$categories = $this->getMAllCategories();
		foreach ($categories as $key => $value) {
			$links = array();
			$path = $key;
			$cid = $key;
			$daya  =  $value;
			$lm =  $this->db->query("SELECT date_modified FROM " . DB_PREFIX . "category WHERE category_id = '".$path."'")->row['date_modified'];
			$lm = date("Y-m-d", strtotime($lm));
			$lang = $this->getLanguages();
			foreach ($lang as $tp => $langdetails) {
				$path = $cid;
				$value = $daya;
				$keyword = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=".$path."' AND language_id ='".(int)$langdetails['language_id']."' ");
				if(!$keyword->num_rows){

					while ($value != 0) {
						$path .= "_".$value;
						$value = isset($categories[$value])?$categories[$value]:0;
					}
					$link = $server.'index.php?route=product/category&path=' . $path;
					$links[$cid][] = array('link' => $link,'code' => $langdetails['code']);
				} else {
					$keywordvalue = $keyword->row['keyword'];
					while ($value != 0 && (!$on)) {
					  $path .= "_".$value;
					  $keyword = $this->db->query("SELECT keyword FROM " . DB_PREFIX . "seo_url WHERE query = 'category_id=".$value."' AND language_id ='".(int)$langdetails['language_id']."' ");
					  if($keyword->num_rows){
					  	//$keywordvalue = $keyword->row['keyword']."/".$keywordvalue;
					  	$keywordvalue = $keywordvalue;
					  } else {
					  	$output .= $this->generateLinkNode($server . 'index.php?route=product/category&path=' . $path,$server, $lm, "yearly", "0.9",$image="");
					  	break 2;
					  }
					  $value = isset($categories[$value])?$categories[$value]:0;
					}
					$link = $server . $keywordvalue;
					$links[$cid][] = array('link' => $link,'code' => $langdetails['code']);
				}
			}
			$output .= $this->generateLinkMNode($links,$lm,$server,"yearly", "1.0","");
		
		}
		return $output;
	}

	public function getMAllCategories() {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_description cd ON (c.category_id = cd.category_id) LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE cd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND c2s.store_id = '" . (int)$this->config->get('config_store_id') . "'  AND c.status = '1' ORDER BY c.sort_order, LCASE(cd.name)");
		foreach ($query->rows as $key => $value) {
			$results[$value['category_id']] = $value['parent_id']; 
		}
		return $results;
	}
	
	public function getMProducts($length,$server) {
		$output = '';
		$results =  $this->db->query("SELECT DISTINCT(product_id),date_modified,image FROM " . DB_PREFIX . "product  WHERE status = 1");
		foreach ($results->rows as $key => $value) {
			$links = array();
			$value['date_modified'] = date("Y-m-d", strtotime($value['date_modified']));
			$lang = $this->getLanguages();
			foreach ($lang as $tp => $langdetails) {
				$url =  $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'product_id=".$value['product_id']."' AND language_id = '".(int)$langdetails['language_id']."'");
				if($url->num_rows) {
					$keywordvalue = $url->row['keyword'];
					$link = $server . $keywordvalue;
					$links[$value['product_id']][] = array('link' => $link,'code' => $langdetails['code']);
				} else {
					$link = $server . 'index.php?route=product/product&product_id=' . $value['product_id'];
					$links[$value['product_id']][] = array('link' => $link,'code' => $langdetails['code']);
				}
			}
			$output .= $this->generateLinkMNode($links, $value['date_modified'],$server,"yearly", "1.0",$value['image']);
		}
		return $output;
	}
	
	protected function getMInformationPages($length,$server) {
		$output = '';
		$this->load->model('catalog/information');
		foreach ($this->model_catalog_information->getInformations() as $result) {
			$links = array();
			$lang = $this->getLanguages();
			foreach ($lang as $tp => $langdetails) {
				$url =  $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'information_id=".$result['information_id']."' AND language_id = '".(int)$langdetails['language_id']."'");
				if($url->num_rows) {
					$keywordvalue = $url->row['keyword'];
					$link = $server . $keywordvalue;
					$links[$result['information_id']][] = array('link' => $link,'code' => $langdetails['code']);
				} else {
					$link = $server .  'index.php?route=information/information&information_id=' . $result['information_id'];
					$links[$result['information_id']][] = array('link' => $link,'code' => $langdetails['code']);
				}
			}
			$output .= $this->generateLinkINode($links,"yearly", "0.7");
		}
		return $output;
	}



	protected function getManufacturers($server) {
		$output = '';
		$this->load->model('catalog/manufacturer');
		foreach ($this->model_catalog_manufacturer->getManufacturers() as $result) {
			$url =  $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'manufacturer_id=".$result['manufacturer_id']."'");
			if($url->num_rows) {
				$output .= $this->generateLinkMANNode($server. $url->row['keyword'], "yearly", "0.9");
			} else {
				$output .= $this->generateLinkMANNode($server .  'index.php?route=product/manufacturer/info&manufacturer_id=' . $result['manufacturer_id'], "yearly", "0.9");
			}
		}
		return $output;
	}

	protected function getMManufacturers($server) {
		$output = '';
		$this->load->model('catalog/manufacturer');
		foreach ($this->model_catalog_manufacturer->getManufacturers() as $result) {
			$links = array();
			$lang = $this->getLanguages();
			foreach ($lang as $tp => $langdetails) {
				$url =  $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE query = 'manufacturer_id=".$result['manufacturer_id']."' AND language_id = '".(int)$langdetails['language_id']."'");
				if($url->num_rows) {
					$keywordvalue = $url->row['keyword'];
					$link = $server . $keywordvalue;
					$links[$result['manufacturer_id']][] = array('link' => $link,'code' => $langdetails['code']);
				} else {
					$link = $server.'index.php?route=product/manufacturer/info&manufacturer_id=' . $result['manufacturer_id'];
					$links[$result['manufacturer_id']][] = array('link' => $link,'code' => $langdetails['code']);
				}
			}
			$output .= $this->generateLinkINode($links,"yearly", "0.9");
		}
		return $output;
	}
	public function getJournalBlogPosts($server) {

    $output = '';

    $query = $this->db->query("
        SELECT post_id, date_created, image
        FROM " . DB_PREFIX . "journal3_blog_post
        WHERE status = 1
    ");

    foreach ($query->rows as $row) {

        $link = $this->journal3_url->link(
            'journal3/blog' . JOURNAL3_ROUTE_SEPARATOR . 'post',
            'journal_blog_post_id=' . (int)$row['post_id']
        );

        // 只在需要时补域名（防重复）
        if (strpos($link, 'http') !== 0) {
            $link = rtrim($server, '/') . $link;
        }

        $output .= $this->generateLinkNode(
            $link,
            $server,
            date('Y-m-d', strtotime($row['date_created'])),
            'weekly',
            '0.9',
            $row['image']
        );
    }

    return $output;
}
    
    public function getJournalBlogCategories($server) {

    $output = '';

    $query = $this->db->query("
        SELECT category_id, NOW()
        FROM " . DB_PREFIX . "journal3_blog_category
        WHERE status = 1
    ");

    foreach ($query->rows as $row) {

        // Journal3 生成分类 URL（关键修改）
        $link = $this->journal3_url->link(
            'journal3/blog',
            'journal_blog_category_id=' . (int)$row['category_id']
        );

        // 防止重复拼域名（你之前已经踩坑）
        if (strpos($link, 'http') !== 0) {
            $link = rtrim($server, '/') . '/' . ltrim($link, '/');
        }

        $output .= $this->generateLinkNode(
            $link,
            $server,
            date('Y-m-d', strtotime($row['date_modified'] ?? 'now')),
            'weekly',
            '0.8'
        );
    }

    return $output;
}
	protected function getBlogHome($server) {

        $output = '';
    
        $output .= "    <url>\r\n";
        $output .= "        <loc>" . $server . "blog</loc>\r\n";
        $output .= "        <changefreq>daily</changefreq>\r\n";
        $output .= "        <priority>0.9</priority>\r\n";
        $output .= "    </url>\r\n";
    
        return $output;
    }


	protected function getGeneral($server) {
		$output = '';
		$generalurls =  $this->db->query("SELECT DISTINCT query, keyword FROM " . DB_PREFIX . "seo_url WHERE query LIKE 'route=%' AND language_id = '".$this->config->get("config_language_id")."'");
		foreach ($generalurls->rows as $key => $value) {
			$output .= $this->generateLinkMANNode($server. $value['keyword'], "yearly", "1");
		}	
		return $output;
	}

	protected function getMGeneral($server) {
		$output = '';
		$generalurls =  $this->db->query("SELECT DISTINCT query FROM " . DB_PREFIX . "seo_url WHERE query LIKE 'route=%'");

		foreach ($generalurls->rows as $key => $value) {
			$links = array();
			$lang = $this->getLanguages();
			foreach ($lang as $tp => $langdetails) {
				$url =  $this->db->query("SELECT keyword,query FROM " . DB_PREFIX . "seo_url WHERE query LIKE '".$value['query']."' AND language_id = '".$langdetails['language_id']."'");
				if($url->num_rows) {
					$keywordvalue = $url->row['keyword'];
					$link = $server . $keywordvalue;
					$links[$value['query']][] = array('link' => $link,'code' => $langdetails['code']);
				} else {
					$link = $server.'/index.php?'.$value['query'];
					$links[$value['query']][] = array('link' => $link,'code' => $langdetails['code']);
				}
			}
			$output .= $this->generateLinkINode($links,"yearly", "1");
		}
		return $output;
	}

	protected function generateLinkNode($link, $server, $lastmod, $changefreq = 'yearly', $priority = '0.9', $image = "") {
		$link = str_replace("&","&amp;", $link);
		$output = "";	
		$output .= "    <url>\r\n";
		$output .= "        <loc>" .$link. "</loc>\r\n";
		$output .= "        <priority>" . $priority . "</priority>\r\n";
		if($image != ""  && file_exists(DIR_IMAGE.$image)){
			$output .= "        <image:image><image:loc>". $server ."image/" .str_replace(" ","%20", $image) . "</image:loc></image:image>\r\n";
		}
		$output .= "        <lastmod>" . $lastmod . "</lastmod>\r\n";
		$output .= "        <changefreq>" . $changefreq . "</changefreq>\r\n";
		$output .= "    </url>\r\n";
		return $output;
	}

	protected function generateLinkMANNode($link,$changefreq = 'yearly',$priority = '0.9') {
		$link = str_replace("&","&amp;", $link);
		$output = "";	
		$output .= "    <url>\r\n";
		$output .= "        <loc>" .$link. "</loc>\r\n";
		$output .= "        <changefreq>" . $changefreq . "</changefreq>\r\n";
		$output .= "        <priority>" . $priority . "</priority>\r\n";
		$output .= "    </url>\r\n";
		return $output;
	}

	protected function generateLinkInNode($link,$changefreq = 'yearly',$priority = '0.6') {
		$link = str_replace("&","&amp;", $link);
		$output = "";	
		$output .= "    <url>\r\n";
		$output .= "        <loc>" .$link. "</loc>\r\n";
		$output .= "        <changefreq>" . $changefreq . "</changefreq>\r\n";
		$output .= "        <priority>" . $priority . "</priority>\r\n";
		$output .= "    </url>\r\n";
		return $output;
	}

	protected function generateLinkMNode($links,$lastmod,$server,$changefreq = 'yearly',$priority = '0.9',$image="") {
		$return = "";
		foreach ($links as $key => $value) {
			foreach ($value as $key1 => $value1) {
				$value1['link'] = str_replace("&","&amp;", $value1['link']);
				$output = "";	
				$output .= "    <url>\r\n";
				$output .= "        <loc>" . $value1['link'] . "</loc>\r\n";
				foreach ($value as $key1 => $value1) {
					$temp = $this->multilang($value1['link'],$value1['code']);
					$output .= $temp; 
				}
				if($image != ""  && file_exists(DIR_IMAGE.$image)){
					$output .= "        <image:image><image:loc>". $server ."image/" .str_replace(" ","%20", $image). "</image:loc></image:image>\r\n";
				}
				$output .= "        <lastmod>" . $lastmod . "</lastmod>\r\n";
				$output .= "        <changefreq>" . $changefreq . "</changefreq>\r\n";
				$output .= "        <priority>" . $priority . "</priority>\r\n";
				$output .= "    </url>\r\n";
				$return .= $output;
			}
		}
		return $return;
	}

	protected function generateLinkINode($links,$changefreq = 'yearly',$priority = '0.6') {
		$return = "";
		foreach ($links as $key => $value) {
			foreach ($value as $key1 => $value1) {
				$value1['link'] = str_replace("&","&amp;", $value1['link']);
				$output = "";	
				$output .= "    <url>\r\n";
				$output .= "        <loc>" . $value1['link'] . "</loc>\r\n";
				foreach ($value as $key1 => $value1) {
					$temp = $this->multilang($value1['link'],$value1['code']);
					$output .= $temp; 
				}
				$output .= "        <changefreq>" . $changefreq . "</changefreq>\r\n";
				$output .= "        <priority>" . $priority . "</priority>\r\n";
				$output .= "    </url>\r\n";
				$return .= $output;
			}
		}
		return $return;
	}

	protected function multilang($link, $code) {
		$link = str_replace("&","&amp;", $link);
		$output = "	<xhtml:link \r\n";
		$output .= "		rel=\"alternate\" \r\n";
		$output .= "		hreflang=\"". $code ."\" \r\n";
		$output .= "		href=\"". $link ."\"\r\n ";
		$output .= "		/>\r\n";
		return $output;
	}

	public function getLanguages() {
			$sql = "SELECT * FROM " . DB_PREFIX . "language WHERE status = 1 ORDER BY sort_order ASC";
			$query = $this->db->query($sql);
			return $query->rows;
	}
}
?>