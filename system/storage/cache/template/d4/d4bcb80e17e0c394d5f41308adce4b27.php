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

/* journal3/template/account/order_info.twig */
class __TwigTemplate_36cee1584710978fef64ca2a12e987f6 extends Template
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
<div id=\"account-order\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 19
        yield "  ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 25
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 26
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 27
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 28
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 29
            yield "    ";
        } else {
            // line 30
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 31
            yield "    ";
        }
        // line 32
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 33) == "default")) {
            // line 34
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 34);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 36
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" colspan=\"2\">";
        // line 40
        yield ($context["text_order_detail"] ?? null);
        yield "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 45
        if ((($tmp = ($context["invoice_no"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <b>";
            yield ($context["text_invoice_no"] ?? null);
            yield "</b> ";
            yield ($context["invoice_no"] ?? null);
            yield "<br />
              ";
        }
        // line 46
        yield " <b>";
        yield ($context["text_order_id"] ?? null);
        yield "</b> #";
        yield ($context["order_id"] ?? null);
        yield "<br />
              <b>";
        // line 47
        yield ($context["text_date_added"] ?? null);
        yield "</b> ";
        yield ($context["date_added"] ?? null);
        yield "</td>
            <td class=\"text-left\" style=\"width: 50%;\">";
        // line 48
        if ((($tmp = ($context["payment_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <b>";
            yield ($context["text_payment_method"] ?? null);
            yield "</b> ";
            yield ($context["payment_method"] ?? null);
            yield "<br />
              ";
        }
        // line 50
        yield "              ";
        if ((($tmp = ($context["shipping_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <b>";
            yield ($context["text_shipping_method"] ?? null);
            yield "</b> ";
            yield ($context["shipping_method"] ?? null);
            yield " ";
        }
        yield "</td>
          </tr>
        </tbody>
      </table>
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
        // line 57
        yield ($context["text_payment_address"] ?? null);
        yield "</td>
            ";
        // line 58
        if ((($tmp = ($context["shipping_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "            <td class=\"text-left\" style=\"width: 50%; vertical-align: top;\">";
            yield ($context["text_shipping_address"] ?? null);
            yield "</td>
            ";
        }
        // line 60
        yield " </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
        // line 64
        yield ($context["payment_address"] ?? null);
        yield "</td>
            ";
        // line 65
        if ((($tmp = ($context["shipping_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 66
            yield "            <td class=\"text-left\">";
            yield ($context["shipping_address"] ?? null);
            yield "</td>
            ";
        }
        // line 67
        yield " </tr>
        </tbody>
      </table>
      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover table-order\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 74
        yield ($context["column_name"] ?? null);
        yield "</td>
              <td class=\"text-left\">";
        // line 75
        yield ($context["column_model"] ?? null);
        yield "</td>
              <td class=\"text-right\">";
        // line 76
        yield ($context["column_quantity"] ?? null);
        yield "</td>
              <td class=\"text-right\">";
        // line 77
        yield ($context["column_price"] ?? null);
        yield "</td>
              <td class=\"text-right\">";
        // line 78
        yield ($context["column_total"] ?? null);
        yield "</td>
              ";
        // line 79
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "              <td style=\"width: 20px;\"></td>
              ";
        }
        // line 81
        yield " </tr>
          </thead>
          <tbody>
          
          ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 86
            yield "          <tr class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 86)], "method", false, false, false, 86);
            yield "\">
            <td class=\"text-left\">";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 87);
            yield "
              ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 88));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                yield " <br />
              &nbsp;<small> - ";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 89);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 89);
                yield "</small> ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
            <td class=\"text-left\">";
            // line 90
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 90);
            yield "</td>
            <td class=\"text-right\">";
            // line 91
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 91);
            yield "</td>
            <td class=\"text-right\">";
            // line 92
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 92);
            yield "</td>
            <td class=\"text-right\">";
            // line 93
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 93);
            yield "</td>
            <td class=\"text-right\" style=\"white-space: nowrap;\">";
            // line 94
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reorder", [], "any", false, false, false, 94);
                yield "\" data-toggle=\"tooltip-hover\" title=\"";
                yield ($context["button_reorder"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></a> ";
            }
            yield " <a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "return", [], "any", false, false, false, 94);
            yield "\" data-toggle=\"tooltip-hover\" title=\"";
            yield ($context["button_return"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a></td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 98
            yield "          <tr>
            <td class=\"text-left\">";
            // line 99
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 99);
            yield "</td>
            <td class=\"text-left\"></td>
            <td class=\"text-right\">1</td>
            <td class=\"text-right\">";
            // line 102
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 102);
            yield "</td>
            <td class=\"text-right\">";
            // line 103
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 103);
            yield "</td>
            ";
            // line 104
            if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "            <td></td>
            ";
            }
            // line 106
            yield " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "            </tbody>
          
          <tfoot>
          
          ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 113
            yield "          <tr>
            <td colspan=\"3\"></td>
            <td class=\"text-right\"><b>";
            // line 115
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 115);
            yield "</b></td>
            <td class=\"text-right\">";
            // line 116
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 116);
            yield "</td>
            ";
            // line 117
            if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 118
                yield "            <td></td>
            ";
            }
            // line 119
            yield " </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "            </tfoot>
          
        </table>
      </div>
      ";
        // line 125
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 129
            yield ($context["text_comment"] ?? null);
            yield "</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class=\"text-left\">";
            // line 134
            yield ($context["comment"] ?? null);
            yield "</td>
          </tr>
        </tbody>
      </table>
      ";
        }
        // line 139
        yield "      ";
        if ((($tmp = ($context["histories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "      <h2 class=\"title\">";
            yield ($context["text_history"] ?? null);
            yield "</h2>
      <div class=\"table-responsive\">
      <table class=\"table table-bordered table-hover\">
        <thead>
          <tr>
            <td class=\"text-left\">";
            // line 145
            yield ($context["column_date_added"] ?? null);
            yield "</td>
            <td class=\"text-left\">";
            // line 146
            yield ($context["column_status"] ?? null);
            yield "</td>
            <td class=\"text-left\">";
            // line 147
            yield ($context["column_comment"] ?? null);
            yield "</td>
          </tr>
        </thead>
        <tbody>
        
        ";
            // line 152
            if ((($tmp = ($context["histories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 154
                    yield "        <tr>
          <td class=\"text-left\">";
                    // line 155
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 155);
                    yield "</td>
          <td class=\"text-left\">";
                    // line 156
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "status", [], "any", false, false, false, 156);
                    yield "</td>
          <td class=\"text-left\">";
                    // line 157
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "comment", [], "any", false, false, false, 157);
                    yield "</td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 160
                yield "        ";
            } else {
                // line 161
                yield "        <tr>
          <td colspan=\"3\" class=\"text-center\">";
                // line 162
                yield ($context["text_no_results"] ?? null);
                yield "</td>
        </tr>
        ";
            }
            // line 165
            yield "          </tbody>
        
      </table>
      </div>
      ";
        }
        // line 170
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 171
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 173
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 174
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 176
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
        return "journal3/template/account/order_info.twig";
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
        return array (  539 => 176,  534 => 174,  530 => 173,  523 => 171,  520 => 170,  513 => 165,  507 => 162,  504 => 161,  501 => 160,  492 => 157,  488 => 156,  484 => 155,  481 => 154,  476 => 153,  474 => 152,  466 => 147,  462 => 146,  458 => 145,  449 => 140,  446 => 139,  438 => 134,  430 => 129,  425 => 126,  423 => 125,  417 => 121,  410 => 119,  406 => 118,  404 => 117,  400 => 116,  396 => 115,  392 => 113,  388 => 112,  382 => 108,  375 => 106,  371 => 105,  369 => 104,  365 => 103,  361 => 102,  355 => 99,  352 => 98,  347 => 97,  328 => 94,  324 => 93,  320 => 92,  316 => 91,  312 => 90,  301 => 89,  295 => 88,  291 => 87,  286 => 86,  282 => 85,  276 => 81,  272 => 80,  270 => 79,  266 => 78,  262 => 77,  258 => 76,  254 => 75,  250 => 74,  241 => 67,  235 => 66,  233 => 65,  229 => 64,  223 => 60,  217 => 59,  215 => 58,  211 => 57,  194 => 50,  185 => 48,  179 => 47,  172 => 46,  163 => 45,  155 => 40,  147 => 36,  139 => 34,  137 => 33,  132 => 32,  129 => 31,  126 => 30,  123 => 29,  120 => 28,  117 => 27,  114 => 26,  112 => 25,  107 => 24,  99 => 20,  96 => 19,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/order_info.twig", "");
    }
}
