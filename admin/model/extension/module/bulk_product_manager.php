<?php
/**
 * OpenCart 3 Bulk Product Manager — data & actions.
 * Compatible with Journal 2 / Journal 3 (standard product / option tables).
 */
class ModelExtensionModuleBulkProductManager extends Model {

	/** @return string[] */
	public function sizeKeys() {
		return array('s', 'm', 'l', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl');
	}

	/** @return array<string,string> */
	public function sizeLabels() {
		return array(
			's'   => 'S',
			'm'   => 'M',
			'l'   => 'L',
			'xl'  => 'XL',
			'2xl' => '2XL',
			'3xl' => '3XL',
			'4xl' => '4XL',
			'5xl' => '5XL',
			'6xl' => '6XL'
		);
	}

	/**
	 * Normalize size label (handles 4XL+$5.00, XXL, etc.).
	 *
	 * @param string $raw
	 * @return string
	 */
	public function normalizeSize($raw) {
		$s = strtolower(preg_replace('/\s+/', '', (string)$raw));
		$s = preg_replace('/\+\$?\d+(?:\.\d+)?/', '', $s);

		if ($s === 'xxl') {
			$s = '2xl';
		}

		return in_array($s, $this->sizeKeys(), true) ? $s : '';
	}

	/**
	 * @param array $input
	 * @return array{category_ids:int[],date_from:string,date_to:string}
	 */
	public function sanitizeFilters($input) {
		$category_ids = array();

		if (!empty($input['category_ids'])) {
			$raw = $input['category_ids'];

			if (is_string($raw)) {
				$raw = explode(',', $raw);
			}

			if (is_array($raw)) {
				foreach ($raw as $id) {
					$id = (int)$id;
					if ($id > 0) {
						$category_ids[] = $id;
					}
				}
				$category_ids = array_values(array_unique($category_ids));
			}
		}

		$date_from = isset($input['date_from']) ? trim((string)$input['date_from']) : '';
		$date_to   = isset($input['date_to']) ? trim((string)$input['date_to']) : '';

		if ($date_from && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date_from)) {
			$date_from = '';
		}
		if ($date_to && !preg_match('/^\d{4}-\d{2}-\d{2}$/', $date_to)) {
			$date_to = '';
		}

		return array(
			'category_ids' => $category_ids,
			'date_from'    => $date_from,
			'date_to'      => $date_to
		);
	}

	/**
	 * Expand selected categories to include all descendants.
	 *
	 * @param int[] $category_ids
	 * @return int[]
	 */
	public function expandCategoryIds($category_ids) {
		if (empty($category_ids)) {
			return array();
		}

		$all = array();

		foreach ($category_ids as $category_id) {
			$category_id = (int)$category_id;
			if ($category_id < 1) {
				continue;
			}
			$all[$category_id] = $category_id;
			$this->collectChildCategories($category_id, $all);
		}

		return array_values($all);
	}

	/**
	 * @param int   $parent_id
	 * @param array $bag keyed by category_id
	 */
	private function collectChildCategories($parent_id, &$bag) {
		$query = $this->db->query("SELECT category_id FROM `" . DB_PREFIX . "category` WHERE parent_id = '" . (int)$parent_id . "'");

		foreach ($query->rows as $row) {
			$cid = (int)$row['category_id'];
			if (!isset($bag[$cid])) {
				$bag[$cid] = $cid;
				$this->collectChildCategories($cid, $bag);
			}
		}
	}

	/**
	 * @param array $filters
	 * @return string SQL fragment starting with AND / empty
	 */
	private function buildFilterSql($filters) {
		$sql = '';

		$category_ids = $this->expandCategoryIds($filters['category_ids']);

		if ($category_ids) {
			$sql .= " AND p.product_id IN (SELECT product_id FROM `" . DB_PREFIX . "product_to_category` WHERE category_id IN (" . implode(',', array_map('intval', $category_ids)) . "))";
		}

		if (!empty($filters['date_from'])) {
			$sql .= " AND DATE(p.date_added) >= '" . $this->db->escape($filters['date_from']) . "'";
		}

		if (!empty($filters['date_to'])) {
			$sql .= " AND DATE(p.date_added) <= '" . $this->db->escape($filters['date_to']) . "'";
		}

		return $sql;
	}

	/**
	 * @param array $filters
	 * @return int
	 */
	public function countProducts($filters) {
		$sql = "SELECT COUNT(DISTINCT p.product_id) AS total FROM `" . DB_PREFIX . "product` p WHERE 1=1" . $this->buildFilterSql($filters);
		$query = $this->db->query($sql);

		return (int)$query->row['total'];
	}

	/**
	 * @param array $filters
	 * @param int   $page
	 * @param int   $per_page
	 * @return array{ids:int[],total:int,pages:int}
	 */
	public function getProductPage($filters, $page = 1, $per_page = 20) {
		$page     = max(1, (int)$page);
		$per_page = max(1, min(50, (int)$per_page));
		$start    = ($page - 1) * $per_page;

		$total = $this->countProducts($filters);
		$pages = $total > 0 ? (int)ceil($total / $per_page) : 0;

		$ids = array();

		if ($total > 0) {
			$sql = "SELECT DISTINCT p.product_id FROM `" . DB_PREFIX . "product` p WHERE 1=1"
				. $this->buildFilterSql($filters)
				. " ORDER BY p.product_id DESC LIMIT " . (int)$start . "," . (int)$per_page;

			$query = $this->db->query($sql);

			foreach ($query->rows as $row) {
				$ids[] = (int)$row['product_id'];
			}
		}

		return array(
			'ids'   => $ids,
			'total' => $total,
			'pages' => $pages
		);
	}

	/**
	 * Categories for multi-select.
	 *
	 * @return array
	 */
	public function getCategories() {
		$language_id = (int)$this->config->get('config_language_id');

		$query = $this->db->query(
			"SELECT c.category_id, cd.name,
				(SELECT COUNT(*) FROM `" . DB_PREFIX . "product_to_category` p2c WHERE p2c.category_id = c.category_id) AS product_count
			FROM `" . DB_PREFIX . "category` c
			LEFT JOIN `" . DB_PREFIX . "category_description` cd ON (c.category_id = cd.category_id)
			WHERE cd.language_id = '" . $language_id . "'
			ORDER BY cd.name ASC"
		);

		return $query->rows;
	}

	/**
	 * Resolve In Stock / Out Of Stock status IDs.
	 *
	 * @return array{instock:int,outofstock:int}
	 */
	public function getStockStatusIds() {
		$language_id = (int)$this->config->get('config_language_id');
		$out_id = (int)$this->config->get('config_stock_status_id');
		$in_id  = 0;

		$query = $this->db->query("SELECT stock_status_id, name FROM `" . DB_PREFIX . "stock_status` WHERE language_id = '" . $language_id . "'");

		foreach ($query->rows as $row) {
			$name = strtolower($row['name']);
			if (!$in_id && (strpos($name, 'in stock') !== false || strpos($name, '有货') !== false || strpos($name, '现货') !== false || $name === 'instock')) {
				$in_id = (int)$row['stock_status_id'];
			}
			if (!$out_id && (strpos($name, 'out of stock') !== false || strpos($name, '缺货') !== false || strpos($name, '无货') !== false)) {
				$out_id = (int)$row['stock_status_id'];
			}
		}

		if (!$out_id && $query->rows) {
			$out_id = (int)$query->rows[0]['stock_status_id'];
		}

		if (!$in_id) {
			foreach ($query->rows as $row) {
				if ((int)$row['stock_status_id'] !== $out_id) {
					$in_id = (int)$row['stock_status_id'];
					break;
				}
			}
		}

		if (!$in_id) {
			$in_id = $out_id;
		}

		return array(
			'instock'    => $in_id,
			'outofstock' => $out_id
		);
	}

	/**
	 * Find product by SKU or model (Journal stores often put SKU in model).
	 *
	 * @param string $sku
	 * @return array|null product row
	 */
	public function findProductBySku($sku) {
		$sku = trim((string)$sku);

		if ($sku === '') {
			return null;
		}

		$query = $this->db->query(
			"SELECT product_id, model, sku, quantity, stock_status_id, price, sort_order
			FROM `" . DB_PREFIX . "product`
			WHERE sku = '" . $this->db->escape($sku) . "'
			   OR model = '" . $this->db->escape($sku) . "'
			ORDER BY product_id ASC
			LIMIT 1"
		);

		return $query->num_rows ? $query->row : null;
	}

	/**
	 * @param int    $product_id
	 * @param string $status instock|outofstock
	 * @return array{ok:bool,message:string}
	 */
	public function setStockStatus($product_id, $status) {
		$product_id = (int)$product_id;
		$query = $this->db->query("SELECT product_id, model, sku FROM `" . DB_PREFIX . "product` WHERE product_id = '" . $product_id . "'");

		if (!$query->num_rows) {
			return array('ok' => false, 'message' => sprintf('ID %d：无法加载产品。', $product_id));
		}

		$ids = $this->getStockStatusIds();
		$label = $query->row['sku'] !== '' ? $query->row['sku'] : ($query->row['model'] !== '' ? $query->row['model'] : (string)$product_id);
		$updated = 0;

		if ($status === 'outofstock') {
			$this->db->query(
				"UPDATE `" . DB_PREFIX . "product` SET
					quantity = '0',
					stock_status_id = '" . (int)$ids['outofstock'] . "',
					date_modified = NOW()
				WHERE product_id = '" . $product_id . "'"
			);
			$updated++;

			$this->db->query(
				"UPDATE `" . DB_PREFIX . "product_option_value` SET quantity = '0'
				WHERE product_id = '" . $product_id . "'"
			);
			$updated += (int)$this->db->countAffected();
			$text = '缺货';
		} else {
			$this->db->query(
				"UPDATE `" . DB_PREFIX . "product` SET
					quantity = IF(quantity < 1, 999, quantity),
					stock_status_id = '" . (int)$ids['instock'] . "',
					date_modified = NOW()
				WHERE product_id = '" . $product_id . "'"
			);
			$updated++;

			$this->db->query(
				"UPDATE `" . DB_PREFIX . "product_option_value` SET quantity = IF(quantity < 1, 999, quantity)
				WHERE product_id = '" . $product_id . "' AND subtract = '1'"
			);
			$updated += (int)$this->db->countAffected();
			$text = '有现货';
		}

		$this->touchProduct($product_id);

		return array(
			'ok'      => true,
			'message' => sprintf('%s：已设为%s（更新 %d 处）。', $label, $text, max(1, $updated))
		);
	}

	/**
	 * @param string $sku
	 * @return array{ok:bool,message:string}
	 */
	public function setInstockBySku($sku) {
		$sku = trim((string)$sku);

		if ($sku === '') {
			return array('ok' => false, 'message' => 'SKU 为空。');
		}

		$product = $this->findProductBySku($sku);

		if (!$product) {
			return array('ok' => false, 'message' => sprintf('SKU: %s - 未找到对应产品。', $sku));
		}

		$result = $this->setStockStatus((int)$product['product_id'], 'instock');

		if ($result['ok']) {
			$result['message'] = sprintf('SKU: %s - %s', $sku, $result['message']);
		}

		return $result;
	}

	/**
	 * Map WooCommerce menu_order → OpenCart sort_order (lower = earlier).
	 *
	 * @param string $sku
	 * @param int    $sort_order
	 * @return array{ok:bool,message:string}
	 */
	public function setSortOrderBySku($sku, $sort_order) {
		$sku = trim((string)$sku);

		if ($sku === '') {
			return array('ok' => false, 'message' => 'SKU 为空。');
		}

		$product = $this->findProductBySku($sku);

		if (!$product) {
			return array('ok' => false, 'message' => sprintf('SKU: %s - 未找到对应产品。', $sku));
		}

		$sort_order = (int)$sort_order;
		$product_id = (int)$product['product_id'];

		$this->db->query(
			"UPDATE `" . DB_PREFIX . "product` SET
				sort_order = '" . $sort_order . "',
				date_modified = NOW()
			WHERE product_id = '" . $product_id . "'"
		);

		$this->touchProduct($product_id);

		return array(
			'ok'      => true,
			'message' => sprintf('SKU: %s - Sort Order 已设为 %d。', $sku, $sort_order)
		);
	}

	/**
	 * @param array $input
	 * @return array{regular:array<string,string>,sale:array<string,string>}
	 */
	public function sanitizePriceMaps($input) {
		$regular = array();
		$sale    = array();

		$raw_regular = isset($input['prices_regular']) ? $input['prices_regular'] : array();
		$raw_sale    = isset($input['prices_sale']) ? $input['prices_sale'] : array();

		if (is_string($raw_regular)) {
			$decoded = json_decode(html_entity_decode($raw_regular), true);
			$raw_regular = is_array($decoded) ? $decoded : array();
		}
		if (is_string($raw_sale)) {
			$decoded = json_decode(html_entity_decode($raw_sale), true);
			$raw_sale = is_array($decoded) ? $decoded : array();
		}

		foreach ($this->sizeKeys() as $key) {
			$regular[$key] = $this->sanitizePriceValue(isset($raw_regular[$key]) ? $raw_regular[$key] : '');
			$sale[$key]    = $this->sanitizePriceValue(isset($raw_sale[$key]) ? $raw_sale[$key] : '');
		}

		return array(
			'regular' => $regular,
			'sale'    => $sale
		);
	}

	/**
	 * @param mixed $value
	 * @return string
	 */
	private function sanitizePriceValue($value) {
		$value = is_string($value) || is_numeric($value) ? trim((string)$value) : '';

		if ($value === '' || !is_numeric($value)) {
			return '';
		}

		$num = (float)$value;

		if ($num < 0) {
			return '';
		}

		return number_format($num, 4, '.', '');
	}

	/**
	 * Update S–6XL prices via product base price + option value modifiers + special.
	 * Journal-compatible: special applies to base; size differentials stay on options.
	 *
	 * @param int   $product_id
	 * @param array $maps
	 * @return array{ok:bool,message:string}
	 */
	public function updateSizePrices($product_id, $maps) {
		$product_id = (int)$product_id;
		$query = $this->db->query("SELECT product_id, model, sku, price FROM `" . DB_PREFIX . "product` WHERE product_id = '" . $product_id . "'");

		if (!$query->num_rows) {
			return array('ok' => false, 'message' => sprintf('ID %d：无法加载产品。', $product_id));
		}

		$label = $query->row['sku'] !== '' ? $query->row['sku'] : ($query->row['model'] !== '' ? $query->row['model'] : (string)$product_id);

		$has_any = false;
		foreach ($this->sizeKeys() as $key) {
			if ($maps['regular'][$key] !== '' || $maps['sale'][$key] !== '') {
				$has_any = true;
				break;
			}
		}

		if (!$has_any) {
			return array('ok' => false, 'message' => sprintf('%s：未配置任何尺码价格。', $label));
		}

		$size_pov = $this->getSizeOptionValues($product_id);

		if (empty($size_pov)) {
			return array('ok' => false, 'message' => sprintf('%s：未找到 Size 选项变体，已跳过。', $label));
		}

		$base_regular = '';
		$base_sale    = '';

		foreach ($this->sizeKeys() as $key) {
			if ($base_regular === '' && $maps['regular'][$key] !== '') {
				$base_regular = $maps['regular'][$key];
			}
			if ($base_sale === '' && $maps['sale'][$key] !== '') {
				$base_sale = $maps['sale'][$key];
			}
		}

		$updated_sizes = array();

		if ($base_regular !== '') {
			$this->db->query(
				"UPDATE `" . DB_PREFIX . "product` SET
					price = '" . (float)$base_regular . "',
					date_modified = NOW()
				WHERE product_id = '" . $product_id . "'"
			);
		}

		foreach ($size_pov as $size_key => $pov_rows) {
			$regular = $maps['regular'][$size_key];
			$sale    = $maps['sale'][$size_key];

			if ($regular === '' && $sale === '') {
				continue;
			}

			if ($regular !== '' && $base_regular !== '') {
				$diff = (float)$regular - (float)$base_regular;
				$prefix = $diff >= 0 ? '+' : '-';
				$abs = abs($diff);

				foreach ($pov_rows as $pov) {
					$this->db->query(
						"UPDATE `" . DB_PREFIX . "product_option_value` SET
							price = '" . (float)$abs . "',
							price_prefix = '" . $this->db->escape($prefix) . "'
						WHERE product_option_value_id = '" . (int)$pov['product_option_value_id'] . "'"
					);
				}

				$updated_sizes[] = strtoupper($size_key);
			} elseif ($regular !== '') {
				// No global base from form: set absolute-like by writing price as +regular and zeroing product later only if all sizes filled.
				foreach ($pov_rows as $pov) {
					$this->db->query(
						"UPDATE `" . DB_PREFIX . "product_option_value` SET
							price = '" . (float)$regular . "',
							price_prefix = '+'
						WHERE product_option_value_id = '" . (int)$pov['product_option_value_id'] . "'"
					);
				}
				$updated_sizes[] = strtoupper($size_key);
			}
		}

		if ($base_sale !== '') {
			$this->upsertProductSpecial($product_id, (float)$base_sale);
		}

		$this->touchProduct($product_id);

		$updated_sizes = array_values(array_unique($updated_sizes));

		if (empty($updated_sizes) && $base_sale === '') {
			return array('ok' => false, 'message' => sprintf('%s：未匹配到可更新的尺码变体。', $label));
		}

		$parts = array();
		if ($updated_sizes) {
			$parts[] = '尺码 [' . implode(', ', $updated_sizes) . ']';
		}
		if ($base_regular !== '') {
			$parts[] = '原价基数 ' . $base_regular;
		}
		if ($base_sale !== '') {
			$parts[] = '特价基数 ' . $base_sale;
		}

		return array(
			'ok'      => true,
			'message' => sprintf('%s：已更新 %s。', $label, implode('，', $parts))
		);
	}

	/**
	 * Map size key => product_option_value rows for Size-like options.
	 *
	 * @param int $product_id
	 * @return array<string,array>
	 */
	private function getSizeOptionValues($product_id) {
		$language_id = (int)$this->config->get('config_language_id');

		$query = $this->db->query(
			"SELECT pov.product_option_value_id, pov.option_value_id, od.name AS option_name, ovd.name AS value_name
			FROM `" . DB_PREFIX . "product_option_value` pov
			LEFT JOIN `" . DB_PREFIX . "product_option` po ON (pov.product_option_id = po.product_option_id)
			LEFT JOIN `" . DB_PREFIX . "option_description` od ON (po.option_id = od.option_id AND od.language_id = '" . $language_id . "')
			LEFT JOIN `" . DB_PREFIX . "option_value_description` ovd ON (pov.option_value_id = ovd.option_value_id AND ovd.language_id = '" . $language_id . "')
			WHERE pov.product_id = '" . (int)$product_id . "'"
		);

		$map = array();

		foreach ($query->rows as $row) {
			$option_name = (string)$row['option_name'];
			$value_name  = (string)$row['value_name'];

			// Prefer Size / 尺码 options; still try value name if option name unknown.
			$is_size_option = ($option_name === '')
				|| (stripos($option_name, 'size') !== false)
				|| (strpos($option_name, '尺码') !== false)
				|| (strpos($option_name, '尺寸') !== false);

			if (!$is_size_option) {
				continue;
			}

			$key = $this->normalizeSize($value_name);

			if ($key === '') {
				continue;
			}

			if (!isset($map[$key])) {
				$map[$key] = array();
			}

			$map[$key][] = $row;
		}

		return $map;
	}

	/**
	 * Replace customer-group-0 special (or default store special).
	 *
	 * @param int   $product_id
	 * @param float $price
	 */
	private function upsertProductSpecial($product_id, $price) {
		$product_id = (int)$product_id;
		$customer_group_id = (int)$this->config->get('config_customer_group_id');

		if ($customer_group_id < 1) {
			$customer_group_id = 1;
		}

		$this->db->query(
			"DELETE FROM `" . DB_PREFIX . "product_special`
			WHERE product_id = '" . $product_id . "'
			  AND customer_group_id = '" . $customer_group_id . "'"
		);

		$this->db->query(
			"INSERT INTO `" . DB_PREFIX . "product_special` SET
				product_id = '" . $product_id . "',
				customer_group_id = '" . $customer_group_id . "',
				priority = '1',
				price = '" . (float)$price . "',
				date_start = '0000-00-00',
				date_end = '0000-00-00'"
		);
	}

	/**
	 * Parse uploaded .xlsx and return unique SKUs.
	 *
	 * @param string $file_path
	 * @return array{ok:bool,skus?:string[],message?:string}
	 */
	public function parseSkusFromExcel($file_path) {
		if (!is_readable($file_path)) {
			return array('ok' => false, 'message' => '无法读取上传的文件。');
		}

		$library = DIR_SYSTEM . 'library/bulk_product_manager/SimpleXLSX.php';

		if (!is_file($library)) {
			return array('ok' => false, 'message' => '缺少 Excel 解析库 SimpleXLSX.php。');
		}

		require_once $library;

		try {
			if (class_exists('\\Shuchkin\\SimpleXLSX')) {
				$xlsx = \Shuchkin\SimpleXLSX::parse($file_path);
			} elseif (class_exists('SimpleXLSX')) {
				$xlsx = SimpleXLSX::parse($file_path);
			} else {
				return array('ok' => false, 'message' => '未能加载 SimpleXLSX 解析类。');
			}
		} catch (Exception $e) {
			return array('ok' => false, 'message' => '解析 Excel 失败：' . $e->getMessage());
		}

		if (!$xlsx) {
			$err = method_exists('\\Shuchkin\\SimpleXLSX', 'parseError')
				? \Shuchkin\SimpleXLSX::parseError()
				: '未知文件错误';

			return array('ok' => false, 'message' => 'Excel 解析失败：' . $err);
		}

		$rows = $xlsx->rows();

		if (empty($rows)) {
			return array('ok' => false, 'message' => '表格中没有数据。');
		}

		$header    = array_shift($rows);
		$sku_index = 0;
		$found     = false;

		if (is_array($header)) {
			foreach ($header as $index => $col_name) {
				if (strtoupper(trim((string)$col_name)) === 'SKU') {
					$sku_index = (int)$index;
					$found = true;
					break;
				}
			}

			if (!$found) {
				$first = trim((string)(isset($header[0]) ? $header[0] : ''));
				if ($first !== '' && strtoupper($first) !== 'SKU') {
					array_unshift($rows, $header);
					$sku_index = 0;
				}
			}
		}

		$skus = array();

		foreach ($rows as $row) {
			if (!isset($row[$sku_index])) {
				continue;
			}
			$sku = trim((string)$row[$sku_index]);
			if ($sku === '') {
				continue;
			}
			$skus[$sku] = true;
		}

		$list = array_keys($skus);

		if (empty($list)) {
			return array('ok' => false, 'message' => '未解析到任何 SKU，请确认表头为 SKU 且有数据行。');
		}

		return array('ok' => true, 'skus' => $list);
	}

	/**
	 * @param int $product_id
	 */
	private function touchProduct($product_id) {
		$this->db->query("UPDATE `" . DB_PREFIX . "product` SET date_modified = NOW() WHERE product_id = '" . (int)$product_id . "'");
		$this->clearCaches();
	}

	/**
	 * Clear OC + Journal theme caches so front-end reflects stock/price changes.
	 */
	public function clearCaches() {
		try {
			$this->cache->delete('product');
		} catch (Exception $e) {
			// ignore
		}

		// Journal 2 flat cache files in DIR_CACHE
		if (defined('DIR_CACHE')) {
			$files = glob(DIR_CACHE . 'journal*');
			if (is_array($files)) {
				foreach ($files as $file) {
					if (is_file($file)) {
						@unlink($file);
					}
				}
			}
		}

		$dir_candidates = array();

		if (defined('DIR_CACHE')) {
			$dir_candidates[] = rtrim(DIR_CACHE, '/\\') . DIRECTORY_SEPARATOR . 'journal3' . DIRECTORY_SEPARATOR;
		}

		if (defined('DIR_STORAGE')) {
			$dir_candidates[] = rtrim(DIR_STORAGE, '/\\') . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR . 'journal3' . DIRECTORY_SEPARATOR;
		}

		foreach ($dir_candidates as $path) {
			if (is_dir($path)) {
				$this->deleteDirContents($path);
			}
		}

		if (isset($this->registry) && $this->registry->has('journal3')) {
			try {
				$j3 = $this->registry->get('journal3');
				if (is_object($j3) && isset($j3->cache) && is_object($j3->cache) && method_exists($j3->cache, 'delete')) {
					$j3->cache->delete();
				}
			} catch (Exception $e) {
				// ignore
			}
		}
	}

	/**
	 * @param string $dir
	 */
	private function deleteDirContents($dir) {
		if (!is_dir($dir)) {
			return;
		}

		$items = @scandir($dir);

		if ($items === false) {
			return;
		}

		foreach ($items as $item) {
			if ($item === '.' || $item === '..' || $item === 'index.html' || $item === '.htaccess') {
				continue;
			}

			$path = $dir . $item;

			if (is_dir($path)) {
				$this->deleteDirContents($path . DIRECTORY_SEPARATOR);
			} else {
				@unlink($path);
			}
		}
	}
}
