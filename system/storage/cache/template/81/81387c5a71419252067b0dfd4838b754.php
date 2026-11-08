<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* sale/order_list.twig */
class __TwigTemplate_85ef342554794154265de479d1089a84 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <div class=\"pull-right\">
      <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-order').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
      <button type=\"submit\" id=\"button-shipping\" form=\"form-order\" formaction=\"";
        // line 7
        yield ($context["shipping"] ?? null);
        yield "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_shipping_print"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></button>
      <button type=\"submit\" id=\"button-invoice\" form=\"form-order\" formaction=\"";
        // line 8
        yield ($context["invoice"] ?? null);
        yield "\" formtarget=\"_blank\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></button>
      <a href=\"";
        // line 9
        yield ($context["add"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> </div>
    <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    </ul>
  </div>
</div>
<div class=\"container-fluid\">";
        // line 18
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 28
        yield "  <div class=\"row\">
    <div id=\"filter-order\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        yield ($context["text_filter"] ?? null);
        yield "</h3>
        </div>
        <div class=\"panel-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-id\">";
        // line 36
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"filter_order_id\" value=\"";
        // line 37
        yield ($context["filter_order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer\">";
        // line 40
        yield ($context["entry_customer"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"filter_customer\" value=\"";
        // line 41
        yield ($context["filter_customer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_customer"] ?? null);
        yield "\" id=\"input-customer\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-order-status\">";
        // line 44
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
            <select name=\"filter_order_status_id\" id=\"input-order-status\" class=\"form-control\">
              <option value=\"\"></option>
              ";
        // line 47
        if ((($context["filter_order_status_id"] ?? null) == "0")) {
            // line 48
            yield "              <option value=\"0\" selected=\"selected\">";
            yield ($context["text_missing"] ?? null);
            yield "</option>
              ";
        } else {
            // line 50
            yield "              <option value=\"0\">";
            yield ($context["text_missing"] ?? null);
            yield "</option>
              ";
        }
        // line 52
        yield "              ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 53
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 53) == ($context["filter_order_status_id"] ?? null))) {
                // line 54
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 54);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 54);
                yield "</option>
              ";
            } else {
                // line 56
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 56);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 56);
                yield "</option>
              ";
            }
            // line 58
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "            
            </select>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-total\">";
        // line 62
        yield ($context["entry_total"] ?? null);
        yield "</label>
            <input type=\"text\" name=\"filter_total\" value=\"";
        // line 63
        yield ($context["filter_total"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_total"] ?? null);
        yield "\" id=\"input-total\" class=\"form-control\" />
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-added\">";
        // line 66
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 68
        yield ($context["filter_date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_added"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-date-modified\">";
        // line 74
        yield ($context["entry_date_modified"] ?? null);
        yield "</label>
            <div class=\"input-group date\">
              <input type=\"text\" name=\"filter_date_modified\" value=\"";
        // line 76
        yield ($context["filter_date_modified"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_modified"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-modified\" class=\"form-control\" />
              <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
              </span> </div>
          </div>
          <div class=\"form-group text-right\">
            <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 82
        yield ($context["button_filter"] ?? null);
        yield "</button>
          </div>
        </div>
      </div>
    </div>
    <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 90
        yield ($context["text_list"] ?? null);
        yield "</h3>
        </div>
        <div class=\"panel-body\">
          <form method=\"post\" action=\"\" enctype=\"multipart/form-data\" id=\"form-order\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                    <td class=\"text-right\">";
        // line 99
        if ((($context["sort"] ?? null) == "o.order_id")) {
            yield " <a href=\"";
            yield ($context["sort_order"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_order_id"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_order"] ?? null);
            yield "\">";
            yield ($context["column_order_id"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                    <td class=\"text-left\">";
        // line 100
        if ((($context["sort"] ?? null) == "customer")) {
            yield " <a href=\"";
            yield ($context["sort_customer"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_customer"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_customer"] ?? null);
            yield "\">";
            yield ($context["column_customer"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                    <td class=\"text-left\">";
        // line 101
        if ((($context["sort"] ?? null) == "order_status")) {
            yield " <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                    <td class=\"text-right\">";
        // line 102
        if ((($context["sort"] ?? null) == "o.total")) {
            yield " <a href=\"";
            yield ($context["sort_total"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_total"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_total"] ?? null);
            yield "\">";
            yield ($context["column_total"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                    <td class=\"text-left\">";
        // line 103
        if ((($context["sort"] ?? null) == "o.date_added")) {
            yield " <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                    <td class=\"text-left\">";
        // line 104
        if ((($context["sort"] ?? null) == "o.date_modified")) {
            yield " <a href=\"";
            yield ($context["sort_date_modified"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_modified"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_date_modified"] ?? null);
            yield "\">";
            yield ($context["column_date_modified"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                    <td class=\"text-right\">";
        // line 105
        yield ($context["column_action"] ?? null);
        yield "</td>
                  </tr>
                </thead>
                <tbody>
                
                ";
        // line 110
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 111
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 112
                yield "                <tr>
                  <td class=\"text-center\"> ";
                // line 113
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 113), ($context["selected"] ?? null))) {
                    // line 114
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 114);
                    yield "\" checked=\"checked\" />
                    ";
                } else {
                    // line 116
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 116);
                    yield "\" />
                    ";
                }
                // line 118
                yield "                    <input type=\"hidden\" name=\"shipping_code[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "shipping_code", [], "any", false, false, false, 118);
                yield "\" /></td>
                  <td class=\"text-right\">";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 119);
                yield "</td>
                  <td class=\"text-left\">";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "customer", [], "any", false, false, false, 120);
                yield "</td>
                  <td class=\"text-left\">";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_status", [], "any", false, false, false, 121);
                yield "</td>
                  <td class=\"text-right\">";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 122);
                yield "</td>
                  <td class=\"text-left\">";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 123);
                yield "</td>
                  <td class=\"text-left\">";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_modified", [], "any", false, false, false, 124);
                yield "</td>
                  <td class=\"text-right\"><div style=\"min-width: 120px;\">
                      <div class=\"btn-group\"> <a href=\"";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 126);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-eye\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li><a href=\"";
                // line 129
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "edit", [], "any", false, false, false, 129);
                yield "\"><i class=\"fa fa-pencil\"></i> ";
                yield ($context["button_edit"] ?? null);
                yield "</a></li>
                          <li><a href=\"";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 130);
                yield "\"><i class=\"fa fa-trash-o\"></i> ";
                yield ($context["button_delete"] ?? null);
                yield "</a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            yield "                ";
        } else {
            // line 137
            yield "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 138
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
                ";
        }
        // line 141
        yield "                  </tbody>
                
              </table>
            </div>
          </form>
          <div class=\"row\">
            <div class=\"col-sm-6 text-left\">";
        // line 147
        yield ($context["pagination"] ?? null);
        yield "</div>
            <div class=\"col-sm-6 text-right\">";
        // line 148
        yield ($context["results"] ?? null);
        yield "</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = '';

\tvar filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

\tif (filter_order_id) {
\t\turl += '&filter_order_id=' + encodeURIComponent(filter_order_id);
\t}

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_order_status_id = \$('select[name=\\'filter_order_status_id\\']').val();

\tif (filter_order_status_id !== '') {
\t\turl += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
\t}

\tvar filter_total = \$('input[name=\\'filter_total\\']').val();

\tif (filter_total) {
\t\turl += '&filter_total=' + encodeURIComponent(filter_total);
\t}

\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tvar filter_date_modified = \$('input[name=\\'filter_date_modified\\']').val();

\tif (filter_date_modified) {
\t\turl += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
\t}

\tlocation = 'index.php?route=sale/order&user_token=";
        // line 194
        yield ($context["user_token"] ?? null);
        yield "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 201
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name^=\\'selected\\']').on('change', function() {
\t\$('#button-shipping, #button-invoice').prop('disabled', true);

\tvar selected = \$('input[name^=\\'selected\\']:checked');

\tif (selected.length) {
\t\t\$('#button-invoice').prop('disabled', false);
\t}

\tfor (i = 0; i < selected.length; i++) {
\t\tif (\$(selected[i]).parent().find('input[name^=\\'shipping_code\\']').val()) {
\t\t\t\$('#button-shipping').prop('disabled', false);

\t\t\tbreak;
\t\t}
\t}
});

\$('#button-shipping, #button-invoice').prop('disabled', true);

\$('input[name^=\\'selected\\']:first').trigger('change');

// IE and Edge fix!
\$('#button-shipping, #button-invoice').on('click', function(e) {
\t\$('#form-order').attr('action', this.getAttribute('formAction'));
});

\$('#form-order li:last-child a').on('click', function(e) {
\te.preventDefault();
\t
\tvar element = this;
\t
\tif (confirm('";
        // line 251
        yield ($context["text_confirm"] ?? null);
        yield "')) {
\t\t\$.ajax({
\t\t\turl: '";
        // line 253
        yield ($context["catalog"] ?? null);
        yield "index.php?route=api/order/delete&api_token=";
        yield ($context["api_token"] ?? null);
        yield "&store_id=";
        yield ($context["store_id"] ?? null);
        yield "&order_id=' + \$(element).attr('href'),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$(element).parent().parent().parent().find('button').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert-dismissible').remove();
\t
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t
\t\t\t\tif (json['success']) {
\t\t\t\t\tlocation = '";
        // line 269
        yield ($context["delete"] ?? null);
        yield "';
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script> 
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 283
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});
//--></script></div>
";
        // line 287
        yield ($context["footer"] ?? null);
        yield " 
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "sale/order_list.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  664 => 287,  657 => 283,  640 => 269,  617 => 253,  612 => 251,  559 => 201,  549 => 194,  500 => 148,  496 => 147,  488 => 141,  482 => 138,  479 => 137,  476 => 136,  462 => 130,  456 => 129,  448 => 126,  443 => 124,  439 => 123,  435 => 122,  431 => 121,  427 => 120,  423 => 119,  418 => 118,  412 => 116,  406 => 114,  404 => 113,  401 => 112,  396 => 111,  394 => 110,  386 => 105,  368 => 104,  350 => 103,  332 => 102,  314 => 101,  296 => 100,  278 => 99,  266 => 90,  255 => 82,  244 => 76,  239 => 74,  228 => 68,  223 => 66,  215 => 63,  211 => 62,  200 => 58,  192 => 56,  184 => 54,  181 => 53,  176 => 52,  170 => 50,  164 => 48,  162 => 47,  156 => 44,  148 => 41,  144 => 40,  136 => 37,  132 => 36,  125 => 32,  119 => 28,  111 => 24,  108 => 23,  100 => 19,  98 => 18,  93 => 15,  82 => 13,  78 => 12,  73 => 10,  67 => 9,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/order_list.twig", "");
    }
}
