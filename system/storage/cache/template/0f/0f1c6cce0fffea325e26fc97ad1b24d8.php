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

/* catalog/review_form.twig */
class __TwigTemplate_7e7aeb8a957094c8d8f34fd1e8c1c6af extends Template
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
        <button type=\"submit\" form=\"form-review\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-author\">";
        // line 28
        yield ($context["entry_author"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"author\" value=\"";
        // line 30
        yield ($context["author"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_author"] ?? null);
        yield "\" id=\"input-author\" class=\"form-control\" />
              ";
        // line 31
        if ((($tmp = ($context["error_author"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "              <div class=\"text-danger\">";
            yield ($context["error_author"] ?? null);
            yield "</div>
              ";
        }
        // line 33
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 36
        yield ($context["help_product"] ?? null);
        yield "\">";
        yield ($context["entry_product"] ?? null);
        yield "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 38
        yield ($context["product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 39
        yield ($context["product_id"] ?? null);
        yield "\" />
              ";
        // line 40
        if ((($tmp = ($context["error_product"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "              <div class=\"text-danger\">";
            yield ($context["error_product"] ?? null);
            yield "</div>
              ";
        }
        // line 42
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 45
        yield ($context["entry_text"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"text\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 47
        yield ($context["entry_text"] ?? null);
        yield "\" id=\"input-text\" class=\"form-control\">";
        yield ($context["text"] ?? null);
        yield "</textarea>
              ";
        // line 48
        if ((($tmp = ($context["error_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "              <div class=\"text-danger\">";
            yield ($context["error_text"] ?? null);
            yield "</div>
              ";
        }
        // line 50
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 53
        yield ($context["entry_rating"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 55
        if ((($context["rating"] ?? null) == 1)) {
            // line 56
            yield "                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                1
                ";
        } else {
            // line 59
            yield "                <input type=\"radio\" name=\"rating\" value=\"1\" />
                1
                ";
        }
        // line 61
        yield " </label>
              <label class=\"radio-inline\"> ";
        // line 62
        if ((($context["rating"] ?? null) == 2)) {
            // line 63
            yield "                <input type=\"radio\" name=\"rating\" value=\"2\" checked=\"checked\" />
                2
                ";
        } else {
            // line 66
            yield "                <input type=\"radio\" name=\"rating\" value=\"2\" />
                2
                ";
        }
        // line 68
        yield " </label>
              <label class=\"radio-inline\"> ";
        // line 69
        if ((($context["rating"] ?? null) == 3)) {
            // line 70
            yield "                <input type=\"radio\" name=\"rating\" value=\"3\" checked=\"checked\" />
                3
                ";
        } else {
            // line 73
            yield "                <input type=\"radio\" name=\"rating\" value=\"3\" />
                3
                ";
        }
        // line 75
        yield " </label>
              <label class=\"radio-inline\"> ";
        // line 76
        if ((($context["rating"] ?? null) == 4)) {
            // line 77
            yield "                <input type=\"radio\" name=\"rating\" value=\"4\" checked=\"checked\" />
                4
                ";
        } else {
            // line 80
            yield "                <input type=\"radio\" name=\"rating\" value=\"4\" />
                4
                ";
        }
        // line 82
        yield " </label>
              <label class=\"radio-inline\"> ";
        // line 83
        if ((($context["rating"] ?? null) == 5)) {
            // line 84
            yield "                <input type=\"radio\" name=\"rating\" value=\"5\" checked=\"checked\" />
                5
                ";
        } else {
            // line 87
            yield "                <input type=\"radio\" name=\"rating\" value=\"5\" />
                5
                ";
        }
        // line 89
        yield " </label>
              ";
        // line 90
        if ((($tmp = ($context["error_rating"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 91
            yield "              <div class=\"text-danger\">";
            yield ($context["error_rating"] ?? null);
            yield "</div>
              ";
        }
        // line 92
        yield " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 95
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"date_added\" value=\"";
        // line 98
        yield ($context["date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_added"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD HH:mm:ss\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span> </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 105
        yield ($context["entry_status"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">                
                ";
        // line 108
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "                
                <option value=\"1\" selected=\"selected\">";
            // line 109
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\">";
            // line 110
            yield ($context["text_disabled"] ?? null);
            yield "</option>                
                ";
        } else {
            // line 111
            yield "                
                <option value=\"1\">";
            // line 112
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 113
            yield ($context["text_disabled"] ?? null);
            yield "</option>                
                ";
        }
        // line 115
        yield "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 124
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('input[name=\\'product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 133
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',\t\t\t
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'product\\']').val(item['label']);
\t\t\$('input[name=\\'product_id\\']').val(item['value']);\t\t
\t}\t
});
//--></script></div>
";
        // line 151
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
        return "catalog/review_form.twig";
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
        return array (  375 => 151,  354 => 133,  342 => 124,  331 => 115,  326 => 113,  322 => 112,  319 => 111,  314 => 110,  310 => 109,  306 => 108,  300 => 105,  288 => 98,  282 => 95,  277 => 92,  271 => 91,  269 => 90,  266 => 89,  261 => 87,  256 => 84,  254 => 83,  251 => 82,  246 => 80,  241 => 77,  239 => 76,  236 => 75,  231 => 73,  226 => 70,  224 => 69,  221 => 68,  216 => 66,  211 => 63,  209 => 62,  206 => 61,  201 => 59,  196 => 56,  194 => 55,  189 => 53,  184 => 50,  178 => 49,  176 => 48,  170 => 47,  165 => 45,  160 => 42,  154 => 41,  152 => 40,  148 => 39,  142 => 38,  135 => 36,  130 => 33,  124 => 32,  122 => 31,  116 => 30,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/review_form.twig", "");
    }
}
