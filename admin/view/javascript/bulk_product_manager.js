(function ($) {
	'use strict';

	var state = {
		total: 0,
		ok: 0,
		fail: 0,
		running: false,
		previewed: false
	};

	/**
	 * Config is injected in the page body AFTER this file may already have loaded
	 * via document->addScript (header). Always read window.bpmAdmin lazily.
	 */
	function getCfg() {
		return window.bpmAdmin || {};
	}

	function i18n(key) {
		var cfg = getCfg();
		return (cfg.i18n && cfg.i18n[key]) || key;
	}

	function getFilters() {
		var cats = $('#bpm_categories').val() || [];
		return {
			category_ids: cats,
			date_from: $('#bpm_date_from').val() || '',
			date_to: $('#bpm_date_to').val() || ''
		};
	}

	function hasFilter(filters) {
		return (filters.category_ids && filters.category_ids.length > 0) ||
			filters.date_from ||
			filters.date_to;
	}

	function collectPrices() {
		var regular = {};
		var sale = {};
		$('.bpm-price-input').each(function () {
			var $el = $(this);
			var size = $el.data('size');
			var type = $el.data('type');
			var val = $.trim($el.val());
			if (type === 'regular') {
				regular[size] = val;
			} else {
				sale[size] = val;
			}
		});
		return { prices_regular: regular, prices_sale: sale };
	}

	function hasAnyPrice(maps) {
		var key;
		for (key in maps.prices_regular) {
			if (maps.prices_regular.hasOwnProperty(key) && maps.prices_regular[key] !== '') {
				return true;
			}
		}
		for (key in maps.prices_sale) {
			if (maps.prices_sale.hasOwnProperty(key) && maps.prices_sale[key] !== '') {
				return true;
			}
		}
		return false;
	}

	function setActionButtonsEnabled(enabled) {
		$('#bpm_stock_btn').prop('disabled', !enabled);
		$('#bpm_price_btn').prop('disabled', !enabled);
	}

	function writeLog(text, type) {
		var cls = 'bpm-log-info';
		if (type === 'ok') {
			cls = 'bpm-log-ok';
		} else if (type === 'fail') {
			cls = 'bpm-log-fail';
		}
		var now = new Date().toTimeString().split(' ')[0];
		var $line = $('<div class="bpm-log-line ' + cls + '"></div>').text('[' + now + '] ' + text);
		var $box = $('#bpm_console');
		$box.append($line);
		$box.scrollTop($box[0].scrollHeight);
	}

	function updateStats() {
		var processed = state.ok + state.fail;
		var pct = state.total > 0 ? Math.round((processed / state.total) * 100) : 0;
		if (pct > 100) {
			pct = 100;
		}
		$('#bpm_stat_total').text(state.total);
		$('#bpm_stat_ok').text(state.ok);
		$('#bpm_stat_fail').text(state.fail);
		$('#bpm_stat_pct').text(pct + '%');
		$('#bpm_progress_bar').css('width', pct + '%');
	}

	function resetProgress(total) {
		state.total = total || 0;
		state.ok = 0;
		state.fail = 0;
		$('#bpm_progress_card').show();
		$('#bpm_console').empty();
		updateStats();
	}

	function setRunning(running) {
		state.running = running;
		$('#bpm_preview_btn').prop('disabled', running);
		$('#bpm_categories, #bpm_date_from, #bpm_date_to').prop('disabled', running);
		$('.bpm-price-input, #bpm_fill_demo, #bpm_clear_prices').prop('disabled', running);
		$('#bpm_sku_file, #bpm_instock_btn').prop('disabled', running);
		$('#bpm_sort_file, #bpm_sort_order_value, #bpm_sort_btn').prop('disabled', running);
		if (running) {
			setActionButtonsEnabled(false);
		} else if (state.previewed && state.total > 0) {
			setActionButtonsEnabled(true);
		}
	}

	function ajaxFailMessage(xhr, fallback) {
		if (xhr && xhr.status) {
			return (fallback || 'Request failed') + ' (HTTP ' + xhr.status + ')';
		}
		return fallback || 'Request failed';
	}

	function processSkuBatches(skus, offset, opts) {
		var batchSize = 20;
		var slice = skus.slice(offset, offset + batchSize);
		if (!slice.length) {
			writeLog(i18n('done'), 'info');
			setRunning(false);
			return;
		}

		writeLog('SKU ' + (offset + 1) + '–' + (offset + slice.length) + ' / ' + skus.length + ' …', 'info');

		var data = $.extend(
			{
				skus: slice
			},
			opts.extra || {}
		);

		$.ajax({
			url: opts.url,
			type: 'POST',
			dataType: 'json',
			data: data
		}).done(function (res) {
			if (!res || res.error || !res.success) {
				writeLog((res && res.error) ? res.error : 'Batch failed', 'fail');
				setRunning(false);
				return;
			}

			state.ok += res.ok || 0;
			state.fail += res.fail || 0;
			updateStats();

			(res.logs || []).forEach(function (log) {
				writeLog(log.message, log.ok ? 'ok' : 'fail');
			});

			processSkuBatches(skus, offset + batchSize, opts);
		}).fail(function (xhr) {
			writeLog(ajaxFailMessage(xhr, opts.failLabel || 'Network error'), 'fail');
			setRunning(false);
		});
	}

	function startSkuFileAction(actionCfg) {
		var cfg = getCfg();
		var fileInput = actionCfg.fileInput;
		if (!fileInput || !fileInput.files || !fileInput.files.length) {
			window.alert(i18n('needSkuFile'));
			return;
		}
		if (!cfg.ajaxUploadSkus) {
			window.alert('Config missing: ajaxUploadSkus. Please refresh the page.');
			return;
		}
		if (!window.confirm(i18n(actionCfg.confirmKey))) {
			return;
		}

		var formData = new FormData();
		formData.append(actionCfg.fileField, fileInput.files[0]);

		setRunning(true);
		resetProgress(0);
		$(actionCfg.resultEl).text('');
		writeLog(i18n('parsing'), 'info');

		$.ajax({
			url: cfg.ajaxUploadSkus,
			type: 'POST',
			data: formData,
			contentType: false,
			processData: false,
			dataType: 'json'
		}).done(function (res) {
			if (!res || res.error || !res.success) {
				var msg = (res && res.error) ? res.error : 'Parse failed';
				writeLog(msg, 'fail');
				$(actionCfg.resultEl).text(msg);
				setRunning(false);
				return;
			}

			var skus = res.skus || [];
			state.total = skus.length;
			updateStats();
			$(actionCfg.resultEl).text(res.message || '');
			writeLog(res.message || ('SKU: ' + skus.length), 'info');

			if (!skus.length) {
				setRunning(false);
				return;
			}

			processSkuBatches(skus, 0, {
				url: actionCfg.batchUrl,
				extra: actionCfg.extra || {},
				failLabel: actionCfg.failLabel
			});
		}).fail(function (xhr) {
			var msg = ajaxFailMessage(xhr, 'Upload failed');
			writeLog(msg, 'fail');
			$(actionCfg.resultEl).text(msg);
			setRunning(false);
		});
	}

	function runBatch(action, page) {
		var cfg = getCfg();
		var filters = getFilters();
		var data = {
			bulk_action: action,
			page: page,
			per_page: 20,
			category_ids: filters.category_ids,
			date_from: filters.date_from,
			date_to: filters.date_to
		};

		if (action === 'prices') {
			$.extend(data, collectPrices());
		}

		$.ajax({
			url: cfg.ajaxRunBatch,
			type: 'POST',
			dataType: 'json',
			data: data
		}).done(function (res) {
			if (!res || res.error || !res.success) {
				writeLog((res && res.error) ? res.error : 'Request failed', 'fail');
				setRunning(false);
				return;
			}

			state.ok += res.ok || 0;
			state.fail += res.fail || 0;
			if (res.total) {
				state.total = res.total;
			}
			updateStats();

			(res.logs || []).forEach(function (log) {
				writeLog(log.message, log.ok ? 'ok' : 'fail');
			});

			if (res.done || !res.nextPage) {
				writeLog(i18n('done'), 'info');
				setRunning(false);
				return;
			}

			runBatch(action, res.nextPage);
		}).fail(function (xhr) {
			writeLog(ajaxFailMessage(xhr, 'Network error, batch stopped.'), 'fail');
			setRunning(false);
		});
	}

	function startAction(action) {
		var filters = getFilters();
		if (!hasFilter(filters)) {
			window.alert(i18n('needFilter'));
			return;
		}
		if (!state.previewed) {
			window.alert(i18n('needPreview'));
			return;
		}
		if (state.total < 1) {
			window.alert(i18n('noProducts'));
			return;
		}

		if (action === 'prices') {
			if (!hasAnyPrice(collectPrices())) {
				window.alert(i18n('needPrices'));
				return;
			}
			if (!window.confirm(i18n('confirmPrice'))) {
				return;
			}
		} else if (!window.confirm(i18n('confirmStock'))) {
			return;
		}

		setRunning(true);
		resetProgress(state.total);
		writeLog(i18n('running') + ' (' + action + ')', 'info');
		runBatch(action, 1);
	}

	$(function () {
		var $previewBtn = $('#bpm_preview_btn');
		var previewBtnLabel = $.trim($previewBtn.text()) || i18n('previewBtn');

		$('#bpm_categories, #bpm_date_from, #bpm_date_to').on('change', function () {
			state.previewed = false;
			state.total = 0;
			$('#bpm_preview_result').text('');
			setActionButtonsEnabled(false);
		});

		$previewBtn.on('click', function () {
			var cfg = getCfg();
			var filters = getFilters();

			if (!hasFilter(filters)) {
				window.alert(i18n('needFilter'));
				return;
			}

			if (!cfg.ajaxPreview) {
				$('#bpm_preview_result').text('Config missing: ajaxPreview. Please hard-refresh (Ctrl+F5).');
				return;
			}

			var $btn = $(this);
			$btn.prop('disabled', true).text(i18n('previewing'));
			$('#bpm_preview_result').text('');

			$.ajax({
				url: cfg.ajaxPreview,
				type: 'POST',
				dataType: 'json',
				data: {
					category_ids: filters.category_ids,
					date_from: filters.date_from,
					date_to: filters.date_to
				}
			}).done(function (res) {
				if (res && res.success) {
					state.previewed = true;
					state.total = res.total || 0;
					$('#bpm_preview_result').text(res.message);
					setActionButtonsEnabled(state.total > 0);
				} else {
					state.previewed = false;
					$('#bpm_preview_result').text((res && res.error) ? res.error : 'Preview failed');
					setActionButtonsEnabled(false);
				}
			}).fail(function (xhr) {
				state.previewed = false;
				$('#bpm_preview_result').text(ajaxFailMessage(xhr, 'Preview request failed'));
				setActionButtonsEnabled(false);
			}).always(function () {
				$btn.prop('disabled', false).text(previewBtnLabel);
			});
		});

		$('#bpm_stock_btn').on('click', function () {
			startAction('outofstock');
		});

		$('#bpm_instock_btn').on('click', function () {
			var cfg = getCfg();
			startSkuFileAction({
				fileInput: $('#bpm_sku_file')[0],
				fileField: 'bpm_sku_file',
				resultEl: '#bpm_sku_file_result',
				confirmKey: 'confirmInstock',
				batchUrl: cfg.ajaxInstockBatch,
				failLabel: 'Network error, In Stock task stopped.'
			});
		});

		$('#bpm_sort_btn').on('click', function () {
			var cfg = getCfg();
			var raw = $.trim($('#bpm_sort_order_value').val());
			if (raw === '' || !/^-?\d+$/.test(raw)) {
				window.alert(i18n('needSortOrder'));
				return;
			}

			startSkuFileAction({
				fileInput: $('#bpm_sort_file')[0],
				fileField: 'bpm_sort_file',
				resultEl: '#bpm_sort_result',
				confirmKey: 'confirmSortOrder',
				batchUrl: cfg.ajaxSortBatch,
				extra: { sort_order: parseInt(raw, 10) },
				failLabel: 'Network error, Sort Order task stopped.'
			});
		});

		$('#bpm_price_btn').on('click', function () {
			startAction('prices');
		});

		$('#bpm_clear_prices').on('click', function () {
			$('.bpm-price-input').val('');
		});

		$('#bpm_fill_demo').on('click', function () {
			var demoRegular = {
				s: '154.99', m: '154.99', l: '154.99', xl: '154.99',
				'2xl': '154.99', '3xl': '154.99',
				'4xl': '159.99', '5xl': '164.99', '6xl': '169.99'
			};
			var demoSale = {
				s: '51.99', m: '51.99', l: '51.99', xl: '51.99',
				'2xl': '51.99', '3xl': '51.99',
				'4xl': '56.99', '5xl': '61.99', '6xl': '66.99'
			};
			$('.bpm-price-input').each(function () {
				var $el = $(this);
				var size = $el.data('size');
				var type = $el.data('type');
				$el.val(type === 'regular' ? demoRegular[size] : demoSale[size]);
			});
		});
	});
})(jQuery);
