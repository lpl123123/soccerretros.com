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

/* journal3/template/account/return_form.twig */
class __TwigTemplate_3320204b33af548996d9833627ea08a5 extends Template
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
        yield "
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            yield "  <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            yield "\"><span class=\"page-title-text\">";
            yield ($context["heading_title"] ?? null);
            yield "</span></h1>
";
        }
        // line 5
        yield "<div class=\"breadcrumbs ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "  </ul>
</div>
";
        // line 12
        yield ($context["journal3_top"] ?? null);
        yield "
<div id=\"account-return\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
  ";
        }
        // line 17
        yield "  <div class=\"row\"> ";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 20
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 22
            yield "    ";
        } else {
            // line 23
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 24
            yield "    ";
        }
        // line 25
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 26) == "default")) {
            // line 27
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 27);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 29
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <p>";
        // line 30
        yield ($context["text_description"] ?? null);
        yield "</p>
      <form action=\"";
        // line 31
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 33
        yield ($context["text_order"] ?? null);
        yield "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 35
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 37
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 38
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "              <div class=\"text-danger\">";
            yield ($context["error_firstname"] ?? null);
            yield "</div>
              ";
        }
        // line 40
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 43
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 45
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 46
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "              <div class=\"text-danger\">";
            yield ($context["error_lastname"] ?? null);
            yield "</div>
              ";
        }
        // line 48
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 51
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 53
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 54
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "              <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
              ";
        }
        // line 56
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 59
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"telephone\" value=\"";
        // line 61
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 62
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "              <div class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
              ";
        }
        // line 64
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-order-id\">";
        // line 67
        yield ($context["entry_order_id"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"order_id\" value=\"";
        // line 69
        yield ($context["order_id"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_order_id"] ?? null);
        yield "\" id=\"input-order-id\" class=\"form-control\" />
              ";
        // line 70
        if ((($tmp = ($context["error_order_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "              <div class=\"text-danger\">";
            yield ($context["error_order_id"] ?? null);
            yield "</div>
              ";
        }
        // line 72
        yield " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-ordered\">";
        // line 75
        yield ($context["entry_date_ordered"] ?? null);
        yield "</label>
            <div class=\"col-sm-3\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"date_ordered\" value=\"";
        // line 78
        yield ($context["date_ordered"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_ordered"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-ordered\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 86
        yield ($context["text_product"] ?? null);
        yield "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-product\">";
        // line 88
        yield ($context["entry_product"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"product\" value=\"";
        // line 90
        yield ($context["product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 91
        yield ($context["product_id"] ?? null);
        yield "\" />
              ";
        // line 92
        if ((($tmp = ($context["error_product"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "              <div class=\"text-danger\">";
            yield ($context["error_product"] ?? null);
            yield "</div>
              ";
        }
        // line 94
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 97
        yield ($context["entry_model"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"model\" value=\"";
        // line 99
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\" />
              ";
        // line 100
        if ((($tmp = ($context["error_model"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 101
            yield "              <div class=\"text-danger\">";
            yield ($context["error_model"] ?? null);
            yield "</div>
              ";
        }
        // line 102
        yield " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 105
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 107
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 111
        yield ($context["entry_reason"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\"> ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_reasons"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_reason"]) {
            // line 113
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 113) == ($context["return_reason_id"] ?? null))) {
                // line 114
                yield "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 116
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 116);
                yield "\" checked=\"checked\" />
                  ";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 117);
                yield "</label>
              </div>
              ";
            } else {
                // line 120
                yield "              <div class=\"radio\">
                <label>
                  <input type=\"radio\" name=\"return_reason_id\" value=\"";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "return_reason_id", [], "any", false, false, false, 122);
                yield "\" />
                  ";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_reason"], "name", [], "any", false, false, false, 123);
                yield "</label>
              </div>
              ";
            }
            // line 126
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_reason'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "              ";
        if ((($tmp = ($context["error_reason"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 128
            yield "              <div class=\"text-danger\">";
            yield ($context["error_reason"] ?? null);
            yield "</div>
              ";
        }
        // line 129
        yield " </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 132
        yield ($context["entry_opened"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 134
        if ((($tmp = ($context["opened"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 135
            yield "                <input type=\"radio\" name=\"opened\" value=\"1\" checked=\"checked\" />
                ";
        } else {
            // line 137
            yield "                <input type=\"radio\" name=\"opened\" value=\"1\" />
                ";
        }
        // line 139
        yield "                ";
        yield ($context["text_yes"] ?? null);
        yield "</label>
              <label class=\"radio-inline\"> ";
        // line 140
        if ((($tmp =  !($context["opened"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 141
            yield "                <input type=\"radio\" name=\"opened\" value=\"0\" checked=\"checked\" />
                ";
        } else {
            // line 143
            yield "                <input type=\"radio\" name=\"opened\" value=\"0\" />
                ";
        }
        // line 145
        yield "                ";
        yield ($context["text_no"] ?? null);
        yield "</label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 149
        yield ($context["entry_fault_detail"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"comment\" rows=\"10\" placeholder=\"";
        // line 151
        yield ($context["entry_fault_detail"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["comment"] ?? null);
        yield "</textarea>
            </div>
          </div>
          ";
        // line 154
        yield ($context["captcha"] ?? null);
        yield "
        </fieldset>
        ";
        // line 156
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 158
            yield ($context["back"] ?? null);
            yield "\" class=\"btn btn-danger\">";
            yield ($context["button_back"] ?? null);
            yield "</a></div>
          <div class=\"pull-right\">";
            // line 159
            yield ($context["text_agree"] ?? null);
            yield "
            ";
            // line 160
            if ((($tmp = ($context["agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 161
                yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 163
                yield "            <input type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 165
            yield "            <button type=\"submit\" class=\"btn btn-primary\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
          </div>
        </div>
        ";
        } else {
            // line 169
            yield "        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
            // line 170
            yield ($context["back"] ?? null);
            yield "\" class=\"btn btn-default\">";
            yield ($context["button_back"] ?? null);
            yield "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>";
            // line 172
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
          </div>
        </div>
        ";
        }
        // line 176
        yield "      </form>
      ";
        // line 177
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 178
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 182
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});
//--></script> 
";
        // line 186
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
        return "journal3/template/account/return_form.twig";
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
        return array (  549 => 186,  542 => 182,  535 => 178,  531 => 177,  528 => 176,  521 => 172,  514 => 170,  511 => 169,  503 => 165,  499 => 163,  495 => 161,  493 => 160,  489 => 159,  483 => 158,  480 => 157,  478 => 156,  473 => 154,  465 => 151,  460 => 149,  452 => 145,  448 => 143,  444 => 141,  442 => 140,  437 => 139,  433 => 137,  429 => 135,  427 => 134,  422 => 132,  417 => 129,  411 => 128,  408 => 127,  402 => 126,  396 => 123,  392 => 122,  388 => 120,  382 => 117,  378 => 116,  374 => 114,  371 => 113,  367 => 112,  363 => 111,  354 => 107,  349 => 105,  344 => 102,  338 => 101,  336 => 100,  330 => 99,  325 => 97,  320 => 94,  314 => 93,  312 => 92,  308 => 91,  302 => 90,  297 => 88,  292 => 86,  279 => 78,  273 => 75,  268 => 72,  262 => 71,  260 => 70,  254 => 69,  249 => 67,  244 => 64,  238 => 63,  236 => 62,  230 => 61,  225 => 59,  220 => 56,  214 => 55,  212 => 54,  206 => 53,  201 => 51,  196 => 48,  190 => 47,  188 => 46,  182 => 45,  177 => 43,  172 => 40,  166 => 39,  164 => 38,  158 => 37,  153 => 35,  148 => 33,  143 => 31,  139 => 30,  134 => 29,  126 => 27,  124 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  99 => 18,  94 => 17,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/return_form.twig", "");
    }
}
