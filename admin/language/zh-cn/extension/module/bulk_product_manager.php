<?php
// Heading
$_['heading_title'] = '批量产品管理';

// Text
$_['text_home']        = '首页';
$_['text_extension']   = '扩展';
$_['text_description'] = '按分类或上架日期筛选产品，批量设为缺货；上传 SKU Excel 批量设为有现货 / 修改 Sort Order；按可配置的 S–6XL 同步修改原价与特价。兼容 Journal 2/3 主题。';
$_['text_success']     = '成功';
$_['text_edit']        = '批量产品管理';

$_['text_confirm_stock']   = '确认将筛选到的产品全部设为缺货？此操作不可轻松撤销。';
$_['text_confirm_price']   = '确认按下方配置的 S–6XL 原价/特价批量更新？此操作不可轻松撤销。';
$_['text_confirm_instock'] = '确认按上传文件中的 SKU 批量设为有现货？此操作不可轻松撤销。';
$_['text_confirm_sort']    = '确认按上传文件中的 SKU 批量修改 Sort Order？此操作不可轻松撤销。';
$_['text_need_filter']     = '请至少选择一个分类，或填写上架日期范围。';
$_['text_need_prices']     = '请至少填写一个尺码的原价或特价。';
$_['text_need_preview']    = '请先点击「预览匹配数量」。';
$_['text_need_sku_file']   = '请先选择包含 SKU 列的 .xlsx 文件。';
$_['text_need_sort']       = '请填写要设置的 Sort Order（整数）。';
$_['text_no_products']     = '当前筛选条件下没有匹配的产品。';
$_['text_done']            = '全部任务执行完成。';
$_['text_running']         = '处理中…';
$_['text_previewing']      = '正在统计…';
$_['text_parsing']         = '正在解析 Excel…';
$_['text_matched']         = '匹配到 %d 个产品。';
$_['text_unknown_action']  = '未知操作类型。';
$_['text_no_upload']       = '未接收到上传文件。';
$_['text_xlsx_only']       = '仅支持 .xlsx 文件。';
$_['text_upload_error']    = '文件上传失败，错误码：';
$_['text_parse_fail']      = '解析失败。';
$_['text_sku_parsed']      = '解析成功，共 %d 个唯一 SKU。';
$_['text_empty_sku_batch'] = '本批次 SKU 列表为空。';

$_['text_filter']          = '1. 筛选条件';
$_['text_categories']      = '产品分类';
$_['text_categories_help'] = '可按住 Ctrl / Cmd 多选。含子分类下的产品。';
$_['text_date_range']      = '上架日期范围';
$_['text_date_from']       = '从';
$_['text_date_to']         = '到';
$_['text_date_help']       = '按产品 date_added（含起止日）。可与分类组合使用。';
$_['text_outofstock']      = '2. 批量设为缺货';
$_['text_outofstock_help'] = '将上方筛选到的产品及其 Size 选项库存设为缺货（quantity=0）。';
$_['text_instock_sku']     = '3. 按 SKU 文件设为有现货';
$_['text_instock_help']    = '上传 Excel（.xlsx），读取 SKU 列，匹配站内产品 sku 或 model 后设为有现货。与上方分类/日期筛选相互独立。';
$_['text_sort_sku']        = '4. 按 SKU 文件修改 Sort Order';
$_['text_sort_help']       = '上传 Excel（.xlsx），读取 SKU 列，将匹配到的产品 sort_order 统一设为下方输入值。数值越小通常越靠前。';
$_['text_sku_file']        = 'SKU 文件';
$_['text_sort_order']      = 'Sort Order';
$_['text_prices']          = '5. 批量修改尺码价格（原价 + 特价）';
$_['text_prices_help']     = '为 S–6XL 分别填写原价与特价。留空的尺码不会被修改。识别 Size/尺码 选项，并兼容如 4XL+$5.00 的命名。采用产品基价 + 选项加价 + 特价（兼容 Journal）。';
$_['text_size']            = '尺码';
$_['text_regular']         = '原价 (Regular)';
$_['text_special']         = '特价 (Special)';
$_['text_progress']        = '执行进度';
$_['text_stat_total']      = '总数';
$_['text_stat_ok']         = '成功';
$_['text_stat_fail']       = '跳过/失败';
$_['text_stat_pct']        = '进度';
$_['text_placeholder']     = '留空则不改';

// Buttons
$_['button_preview']      = '预览匹配数量';
$_['button_outofstock']   = '执行：设为缺货';
$_['button_instock']      = '上传并设为有现货';
$_['button_sort']         = '上传并修改 Sort Order';
$_['button_prices']       = '执行：更新原价与特价';
$_['button_fill_demo']    = '填充示例（可再改）';
$_['button_clear_prices'] = '清空价格表';
$_['button_cancel']       = '取消';

// Error
$_['error_permission'] = '警告：您没有权限修改批量产品管理！';
