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

/* customer/customer_list.twig */
class __TwigTemplate_928eb49aee8efbe8e65a2bff0531a56f extends Template
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
        yield "\" onclick=\"\$('#filter-customer').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-customer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
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
            yield "        <li><a href=\"";
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
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        yield "    <div class=\"row\">
      <div id=\"filter-customer\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        yield ($context["text_filter"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 36
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-email\">";
        // line 40
        yield ($context["entry_email"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_email\" value=\"";
        // line 41
        yield ($context["filter_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-customer-group\">";
        // line 44
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
              <select name=\"filter_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 48
            yield "                ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 48) == ($context["filter_customer_group_id"] ?? null))) {
                // line 49
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 49);
                yield "</option>
                ";
            } else {
                // line 51
                yield "                <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 51);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 51);
                yield "</option>
                ";
            }
            // line 53
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 57
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                ";
        // line 60
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 61
            yield "                <option value=\"1\" selected=\"selected\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 63
            yield "                <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                ";
        }
        // line 65
        yield "                ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 66
            yield "                <option value=\"0\" selected=\"selected\">";
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        } else {
            // line 68
            yield "                <option value=\"0\">";
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                ";
        }
        // line 70
        yield "              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-ip\">";
        // line 73
        yield ($context["entry_ip"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_ip\" value=\"";
        // line 74
        yield ($context["filter_ip"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ip"] ?? null);
        yield "\" id=\"input-ip\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 77
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 79
        yield ($context["filter_date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_added"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span>
              </div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 86
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
        // line 94
        yield ($context["text_list"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"table-responsive\">
              <form action=\"";
        // line 98
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-customer\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 103
        if ((($context["sort"] ?? null) == "name")) {
            yield "<a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 104
        if ((($context["sort"] ?? null) == "c.email")) {
            yield "<a href=\"";
            yield ($context["sort_email"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_email"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_email"] ?? null);
            yield "\">";
            yield ($context["column_email"] ?? null);
            yield "</a>";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 105
        if ((($context["sort"] ?? null) == "customer_group")) {
            yield "<a href=\"";
            yield ($context["sort_customer_group"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_customer_group"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_customer_group"] ?? null);
            yield "\">";
            yield ($context["column_customer_group"] ?? null);
            yield "</a>";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 106
        if ((($context["sort"] ?? null) == "c.status")) {
            yield "<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 107
        if ((($context["sort"] ?? null) == "c.ip")) {
            yield "<a href=\"";
            yield ($context["sort_ip"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_ip"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_ip"] ?? null);
            yield "\">";
            yield ($context["column_ip"] ?? null);
            yield "</a>";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 108
        if ((($context["sort"] ?? null) == "c.date_added")) {
            yield "<a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>";
        } else {
            yield "<a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 109
        yield ($context["column_action"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 113
        if ((($tmp = ($context["customers"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 115
                yield "                  <tr>
                    <td class=\"text-center\">";
                // line 116
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 116), ($context["selected"] ?? null))) {
                    // line 117
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 117);
                    yield "\" checked=\"checked\" />
                      ";
                } else {
                    // line 119
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_id", [], "any", false, false, false, 119);
                    yield "\" />
                      ";
                }
                // line 121
                yield "                    </td>
                      <td class=\"text-left\">";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 122);
                yield "</td>
                    <td class=\"text-left\">";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "email", [], "any", false, false, false, 123);
                yield "</td>
                    <td class=\"text-left\">";
                // line 124
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "customer_group", [], "any", false, false, false, 124);
                yield "</td>
                    <td class=\"text-left\">";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "status", [], "any", false, false, false, 125);
                yield "</td>
                    <td class=\"text-left\">";
                // line 126
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "ip", [], "any", false, false, false, 126);
                yield "</td>
                    <td class=\"text-left\">";
                // line 127
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "date_added", [], "any", false, false, false, 127);
                yield "</td>
                    <td class=\"text-right\">
                      <div class=\"btn-group\" style=\"min-width: 65px;\">
                        <a href=\"";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "edit", [], "any", false, false, false, 130);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                        <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                        <ul class=\"dropdown-menu dropdown-menu-right\">
                          <li class=\"dropdown-header\">";
                // line 133
                yield ($context["text_option"] ?? null);
                yield "</li>
                          ";
                // line 134
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 135
                    yield "                          <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "unlock", [], "any", false, false, false, 135);
                    yield "\"><i class=\"fa fa-unlock\"></i> ";
                    yield ($context["text_unlock"] ?? null);
                    yield "</a></li>
                          ";
                } else {
                    // line 137
                    yield "                          <li class=\"disabled\"><a><i class=\"fa fa-unlock\"></i> ";
                    yield ($context["text_unlock"] ?? null);
                    yield "</a></li>
                          ";
                }
                // line 139
                yield "                          <li role=\"separator\" class=\"divider\"></li>
                          <li class=\"dropdown-header\">";
                // line 140
                yield ($context["text_login"] ?? null);
                yield "</li>
                          ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["customer"], "store", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 142
                    yield "                          <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 142);
                    yield "\" target=\"_blank\"><i class=\"fa fa-lock\"></i> ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 142);
                    yield "</a></li>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                yield "                        </ul>
                      </div>
                    </td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            yield "                  ";
        } else {
            // line 150
            yield "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 151
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                  </tr>
                  ";
        }
        // line 154
        yield "                    </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 159
        yield ($context["pagination"] ?? null);
        yield "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 160
        yield ($context["results"] ?? null);
        yield "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = \$(this),
      m = \$(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    \$(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#button-filter').on('click', function() {
    url = 'index.php?route=customer/customer&user_token=";
        // line 187
        yield ($context["user_token"] ?? null);
        yield "';
    var filter_name = \$('input[name=\\'filter_name\\']').val();
    if (filter_name) {
      url += '&filter_name=' + encodeURIComponent(filter_name);
    }
    var filter_email = \$('input[name=\\'filter_email\\']').val();
    if (filter_email) {
      url += '&filter_email=' + encodeURIComponent(filter_email);
    }
    var filter_customer_group_id = \$('select[name=\\'filter_customer_group_id\\']').val();
    if (filter_customer_group_id !== '') {
      url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
    }
    var filter_status = \$('select[name=\\'filter_status\\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = \$('input[name=\\'filter_ip\\']').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }
    var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('input[name=\\'filter_name\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 219
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['name'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_name\\']').val(item['label']);
    }
  });
  \$('input[name=\\'filter_email\\']').autocomplete({
    'source': function(request, response) {
      \$.ajax({
        url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 238
        yield ($context["user_token"] ?? null);
        yield "&filter_email=' +  encodeURIComponent(request),
        dataType: 'json',
        success: function(json) {
          response(\$.map(json, function(item) {
            return {
              label: item['email'],
              value: item['customer_id']
            }
          }));
        }
      });
    },
    'select': function(item) {
      \$('input[name=\\'filter_email\\']').val(item['label']);
    }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: '";
        // line 257
        yield ($context["datepicker"] ?? null);
        yield "',
    pickTime: false
  });
  //--></script>
</div>
";
        // line 262
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
        return "customer/customer_list.twig";
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
        return array (  654 => 262,  646 => 257,  624 => 238,  602 => 219,  567 => 187,  537 => 160,  533 => 159,  526 => 154,  520 => 151,  517 => 150,  514 => 149,  504 => 144,  493 => 142,  489 => 141,  485 => 140,  482 => 139,  476 => 137,  468 => 135,  466 => 134,  462 => 133,  454 => 130,  448 => 127,  444 => 126,  440 => 125,  436 => 124,  432 => 123,  428 => 122,  425 => 121,  419 => 119,  413 => 117,  411 => 116,  408 => 115,  403 => 114,  401 => 113,  394 => 109,  376 => 108,  358 => 107,  340 => 106,  322 => 105,  304 => 104,  286 => 103,  278 => 98,  271 => 94,  260 => 86,  248 => 79,  243 => 77,  235 => 74,  231 => 73,  226 => 70,  220 => 68,  214 => 66,  211 => 65,  205 => 63,  199 => 61,  197 => 60,  191 => 57,  186 => 54,  180 => 53,  172 => 51,  164 => 49,  161 => 48,  157 => 47,  151 => 44,  143 => 41,  139 => 40,  131 => 37,  127 => 36,  120 => 32,  114 => 28,  106 => 24,  103 => 23,  95 => 19,  93 => 18,  88 => 15,  77 => 13,  73 => 12,  68 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "customer/customer_list.twig", "");
    }
}
