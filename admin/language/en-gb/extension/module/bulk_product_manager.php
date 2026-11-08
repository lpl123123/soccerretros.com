<?php
// Heading
$_['heading_title'] = 'Bulk Product Manager';

// Text
$_['text_home']        = 'Home';
$_['text_extension']   = 'Extensions';
$_['text_description'] = 'Filter by category or date added, bulk set Out of Stock; upload SKU Excel to set In Stock / Sort Order; update S–6XL regular & special prices. Journal 2/3 compatible.';
$_['text_success']     = 'Success';
$_['text_edit']        = 'Bulk Product Manager';

$_['text_confirm_stock']   = 'Set all matched products to Out of Stock? This is hard to undo.';
$_['text_confirm_price']   = 'Update S–6XL regular/special prices as configured? This is hard to undo.';
$_['text_confirm_instock'] = 'Set products from the uploaded SKUs to In Stock? This is hard to undo.';
$_['text_confirm_sort']    = 'Update Sort Order for products from the uploaded SKUs? This is hard to undo.';
$_['text_need_filter']     = 'Please select at least one category or a date range.';
$_['text_need_prices']     = 'Please fill at least one size regular or special price.';
$_['text_need_preview']    = 'Please click Preview matched count first.';
$_['text_need_sku_file']   = 'Please choose an .xlsx file with a SKU column.';
$_['text_need_sort']       = 'Please enter Sort Order (integer).';
$_['text_no_products']     = 'No products match the current filters.';
$_['text_done']            = 'All tasks completed.';
$_['text_running']         = 'Processing…';
$_['text_previewing']      = 'Counting…';
$_['text_parsing']         = 'Parsing Excel…';
$_['text_matched']         = 'Matched %d products.';
$_['text_unknown_action']  = 'Unknown action.';
$_['text_no_upload']       = 'No upload received.';
$_['text_xlsx_only']       = 'Only .xlsx files are supported.';
$_['text_upload_error']    = 'Upload failed, error code:';
$_['text_parse_fail']      = 'Parse failed.';
$_['text_sku_parsed']      = 'Parsed successfully, %d unique SKUs.';
$_['text_empty_sku_batch'] = 'SKU batch is empty.';

$_['text_filter']          = '1. Filters';
$_['text_categories']      = 'Categories';
$_['text_categories_help'] = 'Ctrl/Cmd multi-select. Includes products in child categories.';
$_['text_date_range']      = 'Date added range';
$_['text_date_from']       = 'From';
$_['text_date_to']         = 'To';
$_['text_date_help']       = 'By product date_added (inclusive). Can combine with categories.';
$_['text_outofstock']      = '2. Bulk Out of Stock';
$_['text_outofstock_help'] = 'Set matched products and all Size option stock quantities to Out of Stock.';
$_['text_instock_sku']     = '3. In Stock by SKU file';
$_['text_instock_help']    = 'Upload .xlsx with a SKU column. Matches product sku or model. Independent of filters above.';
$_['text_sort_sku']        = '4. Sort Order by SKU file';
$_['text_sort_help']       = 'Upload .xlsx with SKU column; set sort_order for matched products. Lower values usually appear first.';
$_['text_sku_file']        = 'SKU file';
$_['text_sort_order']      = 'Sort Order';
$_['text_prices']          = '5. Bulk size prices (Regular + Special)';
$_['text_prices_help']     = 'Fill S–6XL regular/special. Empty sizes are skipped. Recognizes Size/尺码 options and labels like 4XL+$5.00. Uses base price + option modifiers + product special (Journal-compatible).';
$_['text_size']            = 'Size';
$_['text_regular']         = 'Regular';
$_['text_special']         = 'Special';
$_['text_progress']        = 'Progress';
$_['text_stat_total']      = 'Total';
$_['text_stat_ok']         = 'OK';
$_['text_stat_fail']       = 'Skip/Fail';
$_['text_stat_pct']        = 'Progress';
$_['text_placeholder']     = 'Leave blank to skip';

// Buttons
$_['button_preview']     = 'Preview matched count';
$_['button_outofstock']  = 'Run: Out of Stock';
$_['button_instock']     = 'Upload & set In Stock';
$_['button_sort']        = 'Upload & set Sort Order';
$_['button_prices']      = 'Run: Update prices';
$_['button_fill_demo']   = 'Fill demo prices';
$_['button_clear_prices']= 'Clear price table';
$_['button_cancel']      = 'Cancel';

// Error
$_['error_permission'] = 'Warning: You do not have permission to modify Bulk Product Manager!';
