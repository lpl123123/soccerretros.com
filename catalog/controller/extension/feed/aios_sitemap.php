<?php
class ControllerExtensionFeedAiosSitemap extends Controller {
	public function index() {

			$output  = '<?xml version="1.0" encoding="UTF-8"?>';
			$output .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';

			$output .= $this->getMGeneral($server));
			$output .= $this->getMCategories($length,$on,$server));
			$output .= $this->getMProducts($length,$server));
			$output .= $this->getMInformationPages($length,$server));
			$output .= $this->getMManufacturers($server));

			$this->load->model('catalog/product');
			$this->load->model('tool/image');

			$products = $this->model_catalog_product->getProducts();

			foreach ($products as $product) {
				if ($product['image']) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('product/product', 'product_id=' . $product['product_id']) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <lastmod>' . date('Y-m-d\TH:i:sP', strtotime($product['date_modified'])) . '</lastmod>';
					$output .= '  <priority>1.0</priority>';
					$output .= '  <image:image>';
					$output .= '  <image:loc>' . $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')) . '</image:loc>';
					$output .= '  <image:caption>' . $product['name'] . '</image:caption>';
					$output .= '  <image:title>' . $product['name'] . '</image:title>';
					$output .= '  </image:image>';
					$output .= '</url>';
				}
			}

			$this->load->model('catalog/category');

			$output .= $this->getCategories(0);

			$this->load->model('catalog/manufacturer');

			$manufacturers = $this->model_catalog_manufacturer->getManufacturers();

			foreach ($manufacturers as $manufacturer) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $manufacturer['manufacturer_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.7</priority>';
				$output .= '</url>';

				$products = $this->model_catalog_product->getProducts(array('filter_manufacturer_id' => $manufacturer['manufacturer_id']));

				foreach ($products as $product) {
					$output .= '<url>';
					$output .= '  <loc>' . $this->url->link('product/product', 'manufacturer_id=' . $manufacturer['manufacturer_id'] . '&product_id=' . $product['product_id']) . '</loc>';
					$output .= '  <changefreq>weekly</changefreq>';
					$output .= '  <priority>1.0</priority>';
					$output .= '</url>';
				}
			}

			$this->load->model('catalog/information');

			$informations = $this->model_catalog_information->getInformations();

			foreach ($informations as $information) {
				$output .= '<url>';
				$output .= '  <loc>' . $this->url->link('information/information', 'information_id=' . $information['information_id']) . '</loc>';
				$output .= '  <changefreq>weekly</changefreq>';
				$output .= '  <priority>0.5</priority>';
				$output .= '</url>';
			}

			$output .= '</urlset>';

			$this->response->addHeader('Content-Type: application/xml');
			$this->response->setOutput($output);
		}
	}

	protected function getMGeneral($server) {
		$output = '';
		$generalurls =  $this->db->query("SELECT DISTINCT query FROM " . DB_PREFIX . "seo_url WHERE query LIKE 'route=%'");

		foreach ($generalurls->rows as $key => $value) {
			$links = array();
			$lang = $this->getLanguages();
			foreach ($lang as $tp => $langdetails) {
				$url =  $this->db->query("SELECT keyword,query FROM " . DB_PREFIX . "seo_url WHERE query LIKE '".$value['query']."' AND language_id = '".$langdetails['language_id']."' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");
				if($url->num_rows) {
					$keywordvalue = $url->row['keyword'];
					$link = $server . $keywordvalue;
					$links[$value['query']][] = array('link' => $link,'code' => $langdetails['code']);
				} else {
					$link = $server.'/index.php?'.$value['query'];
					$links[$value['query']][] = array('link' => $link,'code' => $langdetails['code']);
				}
			}
			$output .= $this->generateLink($links,"weekly", "1.0");
		}
		return $output;
	}

	protected function generateLink($links,$changefreq = 'weekly',$priority = '0.6') {
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

}
