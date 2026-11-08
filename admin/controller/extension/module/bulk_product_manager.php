<?php
/**
 * OpenCart 3.0 Bulk Product Manager (Journal-compatible).
 * Port of WooCommerce Bulk Product Manager.
 */
class ControllerExtensionModuleBulkProductManager extends Controller {

	private $error = array();

	public function index() {
		$this->load->language('extension/module/bulk_product_manager');
		$this->document->setTitle($this->language->get('heading_title'));

		$this->document->addStyle('view/stylesheet/bulk_product_manager.css');
		// JS is loaded at the bottom of the twig AFTER window.bpmAdmin is defined.

		$this->load->model('extension/module/bulk_product_manager');

		$lang_keys = array(
			'heading_title', 'text_home', 'text_extension', 'text_description',
			'text_filter', 'text_categories', 'text_categories_help', 'text_date_range',
			'text_date_from', 'text_date_to', 'text_date_help', 'text_outofstock',
			'text_outofstock_help', 'text_instock_sku', 'text_instock_help', 'text_sort_sku',
			'text_sort_help', 'text_sku_file', 'text_sort_order', 'text_prices', 'text_prices_help',
			'text_size', 'text_regular', 'text_special', 'text_progress', 'text_stat_total',
			'text_stat_ok', 'text_stat_fail', 'text_stat_pct', 'text_placeholder',
			'button_preview', 'button_outofstock', 'button_instock', 'button_sort',
			'button_prices', 'button_fill_demo', 'button_clear_prices', 'button_cancel'
		);

		foreach ($lang_keys as $key) {
			$data[$key] = $this->language->get($key);
		}

		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);
		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/bulk_product_manager', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$data['categories'] = $this->model_extension_module_bulk_product_manager->getCategories();
		$data['size_labels'] = $this->model_extension_module_bulk_product_manager->sizeLabels();

		$data['user_token'] = $this->session->data['user_token'];

		$token = 'user_token=' . $this->session->data['user_token'];

		$bpm_admin = array(
			'ajaxPreview'      => html_entity_decode($this->url->link('extension/module/bulk_product_manager/preview', $token, true)),
			'ajaxRunBatch'     => html_entity_decode($this->url->link('extension/module/bulk_product_manager/runBatch', $token, true)),
			'ajaxUploadSkus'   => html_entity_decode($this->url->link('extension/module/bulk_product_manager/uploadSkus', $token, true)),
			'ajaxInstockBatch' => html_entity_decode($this->url->link('extension/module/bulk_product_manager/instockSkuBatch', $token, true)),
			'ajaxSortBatch'    => html_entity_decode($this->url->link('extension/module/bulk_product_manager/sortOrderSkuBatch', $token, true)),
			'i18n' => array(
				'confirmStock'     => $this->language->get('text_confirm_stock'),
				'confirmPrice'     => $this->language->get('text_confirm_price'),
				'confirmInstock'   => $this->language->get('text_confirm_instock'),
				'confirmSortOrder' => $this->language->get('text_confirm_sort'),
				'needFilter'       => $this->language->get('text_need_filter'),
				'needPrices'       => $this->language->get('text_need_prices'),
				'needPreview'      => $this->language->get('text_need_preview'),
				'needSkuFile'      => $this->language->get('text_need_sku_file'),
				'needSortOrder'    => $this->language->get('text_need_sort'),
				'noProducts'       => $this->language->get('text_no_products'),
				'done'             => $this->language->get('text_done'),
				'running'          => $this->language->get('text_running'),
				'previewing'       => $this->language->get('text_previewing'),
				'parsing'          => $this->language->get('text_parsing'),
				'previewBtn'       => $this->language->get('button_preview')
			)
		);

		$data['bpm_admin_json'] = json_encode($bpm_admin);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/bulk_product_manager', $data));
	}

	public function install() {
		$this->load->model('user/user_group');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'access', 'extension/module/bulk_product_manager');
		$this->model_user_user_group->addPermission($this->user->getGroupId(), 'modify', 'extension/module/bulk_product_manager');

		$this->load->model('setting/event');
		$this->model_setting_event->deleteEventByCode('bulk_product_manager');
		$this->model_setting_event->addEvent(
			'bulk_product_manager',
			'admin/view/common/column_left/before',
			'extension/module/bulk_product_manager/eventMenu'
		);
	}

	public function uninstall() {
		$this->load->model('setting/event');
		$this->model_setting_event->deleteEventByCode('bulk_product_manager');
	}

	/**
	 * Inject Catalog submenu item (Journal-safe: only admin menu data).
	 */
	public function eventMenu(&$route, &$data) {
		if (!$this->user->hasPermission('access', 'extension/module/bulk_product_manager')) {
			return;
		}

		$this->load->language('extension/module/bulk_product_manager');

		$item = array(
			'name'     => $this->language->get('heading_title'),
			'href'     => $this->url->link('extension/module/bulk_product_manager', 'user_token=' . $this->session->data['user_token'], true),
			'children' => array()
		);

		if (!empty($data['menus']) && is_array($data['menus'])) {
			foreach ($data['menus'] as &$menu) {
				if (isset($menu['id']) && $menu['id'] === 'menu-catalog') {
					$menu['children'][] = $item;
					return;
				}
			}
			unset($menu);
		}
	}

	public function preview() {
		$json = array();

		if (!$this->guard($json)) {
			$this->jsonOut($json);
			return;
		}

		$this->load->model('extension/module/bulk_product_manager');
		$filters = $this->model_extension_module_bulk_product_manager->sanitizeFilters($this->request->post);

		if (empty($filters['category_ids']) && $filters['date_from'] === '' && $filters['date_to'] === '') {
			$json['error'] = $this->language->get('text_need_filter');
			$this->jsonOut($json);
			return;
		}

		$total = $this->model_extension_module_bulk_product_manager->countProducts($filters);

		$json['success'] = true;
		$json['total'] = $total;
		$json['message'] = sprintf($this->language->get('text_matched'), $total);

		$this->jsonOut($json);
	}

	public function runBatch() {
		$json = array();

		if (!$this->guard($json)) {
			$this->jsonOut($json);
			return;
		}

		$this->load->model('extension/module/bulk_product_manager');
		$filters = $this->model_extension_module_bulk_product_manager->sanitizeFilters($this->request->post);

		if (empty($filters['category_ids']) && $filters['date_from'] === '' && $filters['date_to'] === '') {
			$json['error'] = $this->language->get('text_need_filter');
			$this->jsonOut($json);
			return;
		}

		$action   = isset($this->request->post['bulk_action']) ? $this->request->post['bulk_action'] : '';
		$page     = isset($this->request->post['page']) ? max(1, (int)$this->request->post['page']) : 1;
		$per_page = isset($this->request->post['per_page']) ? max(1, min(50, (int)$this->request->post['per_page'])) : 20;

		if (!in_array($action, array('outofstock', 'prices'), true)) {
			$json['error'] = $this->language->get('text_unknown_action');
			$this->jsonOut($json);
			return;
		}

		$price_maps = array();

		if ($action === 'prices') {
			$price_maps = $this->model_extension_module_bulk_product_manager->sanitizePriceMaps($this->request->post);
			$has_any = false;

			foreach ($this->model_extension_module_bulk_product_manager->sizeKeys() as $key) {
				if ($price_maps['regular'][$key] !== '' || $price_maps['sale'][$key] !== '') {
					$has_any = true;
					break;
				}
			}

			if (!$has_any) {
				$json['error'] = $this->language->get('text_need_prices');
				$this->jsonOut($json);
				return;
			}
		}

		$result = $this->model_extension_module_bulk_product_manager->getProductPage($filters, $page, $per_page);
		$logs = array();
		$ok = 0;
		$fail = 0;

		foreach ($result['ids'] as $product_id) {
			if ($action === 'outofstock') {
				$out = $this->model_extension_module_bulk_product_manager->setStockStatus($product_id, 'outofstock');
			} else {
				$out = $this->model_extension_module_bulk_product_manager->updateSizePrices($product_id, $price_maps);
			}

			$logs[] = array(
				'ok'      => (bool)$out['ok'],
				'message' => $out['message']
			);

			if ($out['ok']) {
				$ok++;
			} else {
				$fail++;
			}
		}

		$done = ($page >= $result['pages']) || ($result['total'] === 0);

		$json['success'] = true;
		$json['page'] = $page;
		$json['pages'] = $result['pages'];
		$json['total'] = $result['total'];
		$json['ok'] = $ok;
		$json['fail'] = $fail;
		$json['done'] = $done;
		$json['nextPage'] = $done ? null : ($page + 1);
		$json['logs'] = $logs;

		$this->jsonOut($json);
	}

	public function uploadSkus() {
		$json = array();

		if (!$this->guard($json)) {
			$this->jsonOut($json);
			return;
		}

		$file = null;

		foreach (array('bpm_sku_file', 'bpm_sort_file') as $field) {
			if (!empty($this->request->files[$field]['tmp_name'])) {
				$file = $this->request->files[$field];
				break;
			}
		}

		if (!$file) {
			$json['error'] = $this->language->get('text_no_upload');
			$this->jsonOut($json);
			return;
		}

		$name = isset($file['name']) ? (string)$file['name'] : '';
		$ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

		if ($ext !== 'xlsx') {
			$json['error'] = $this->language->get('text_xlsx_only');
			$this->jsonOut($json);
			return;
		}

		if (!empty($file['error'])) {
			$json['error'] = $this->language->get('text_upload_error') . ' ' . (int)$file['error'];
			$this->jsonOut($json);
			return;
		}

		$this->load->model('extension/module/bulk_product_manager');
		$parsed = $this->model_extension_module_bulk_product_manager->parseSkusFromExcel($file['tmp_name']);

		if (empty($parsed['ok'])) {
			$json['error'] = isset($parsed['message']) ? $parsed['message'] : $this->language->get('text_parse_fail');
			$this->jsonOut($json);
			return;
		}

		$skus = $parsed['skus'];
		$json['success'] = true;
		$json['skus'] = $skus;
		$json['total'] = count($skus);
		$json['message'] = sprintf($this->language->get('text_sku_parsed'), count($skus));

		$this->jsonOut($json);
	}

	public function instockSkuBatch() {
		$json = array();

		if (!$this->guard($json)) {
			$this->jsonOut($json);
			return;
		}

		$skus = $this->requestSkuBatch();

		if (empty($skus)) {
			$json['error'] = $this->language->get('text_empty_sku_batch');
			$this->jsonOut($json);
			return;
		}

		$this->load->model('extension/module/bulk_product_manager');

		$logs = array();
		$ok = 0;
		$fail = 0;

		foreach ($skus as $sku) {
			$out = $this->model_extension_module_bulk_product_manager->setInstockBySku($sku);
			$logs[] = array('ok' => (bool)$out['ok'], 'message' => $out['message']);
			if ($out['ok']) {
				$ok++;
			} else {
				$fail++;
			}
		}

		$json['success'] = true;
		$json['ok'] = $ok;
		$json['fail'] = $fail;
		$json['logs'] = $logs;

		$this->jsonOut($json);
	}

	public function sortOrderSkuBatch() {
		$json = array();

		if (!$this->guard($json)) {
			$this->jsonOut($json);
			return;
		}

		if (!isset($this->request->post['sort_order']) || $this->request->post['sort_order'] === '') {
			$json['error'] = $this->language->get('text_need_sort');
			$this->jsonOut($json);
			return;
		}

		$sort_order = (int)$this->request->post['sort_order'];
		$skus = $this->requestSkuBatch();

		if (empty($skus)) {
			$json['error'] = $this->language->get('text_empty_sku_batch');
			$this->jsonOut($json);
			return;
		}

		$this->load->model('extension/module/bulk_product_manager');

		$logs = array();
		$ok = 0;
		$fail = 0;

		foreach ($skus as $sku) {
			$out = $this->model_extension_module_bulk_product_manager->setSortOrderBySku($sku, $sort_order);
			$logs[] = array('ok' => (bool)$out['ok'], 'message' => $out['message']);
			if ($out['ok']) {
				$ok++;
			} else {
				$fail++;
			}
		}

		$json['success'] = true;
		$json['ok'] = $ok;
		$json['fail'] = $fail;
		$json['logs'] = $logs;

		$this->jsonOut($json);
	}

	/**
	 * @return string[]
	 */
	private function requestSkuBatch() {
		$raw = isset($this->request->post['skus']) ? $this->request->post['skus'] : array();

		if (is_string($raw)) {
			$decoded = json_decode(html_entity_decode($raw), true);
			$raw = is_array($decoded) ? $decoded : array();
		}

		if (!is_array($raw) || empty($raw)) {
			return array();
		}

		$skus = array();

		foreach ($raw as $sku) {
			$sku = trim(strip_tags((string)$sku));
			if ($sku !== '') {
				$skus[] = $sku;
			}
		}

		return array_slice($skus, 0, 50);
	}

	/**
	 * @param array $json
	 * @return bool
	 */
	private function guard(&$json) {
		$this->load->language('extension/module/bulk_product_manager');

		if (!$this->user->hasPermission('modify', 'extension/module/bulk_product_manager')) {
			$json['error'] = $this->language->get('error_permission');
			return false;
		}

		return true;
	}

	/**
	 * @param array $json
	 */
	private function jsonOut($json) {
		$this->response->addHeader('Content-Type: application/json; charset=utf-8');
		$this->response->setOutput(json_encode($json));
	}
}
