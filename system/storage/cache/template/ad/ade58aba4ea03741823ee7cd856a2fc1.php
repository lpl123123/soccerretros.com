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

/* journal3/template/checkout/cart.twig */
class __TwigTemplate_f2c2f0e4389031af09c874286de8dca0 extends Template
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
            if ((($tmp = ($context["weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "&nbsp;(";
                yield ($context["weight"] ?? null);
                yield ")";
            }
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
<div id=\"checkout-cart\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["attention"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            yield ($context["attention"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 19
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 24
        yield "  ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 29
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 30
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 31
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 32
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 33
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 34
            yield "    ";
        } else {
            // line 35
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 36
            yield "    ";
        }
        // line 37
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 38) == "default")) {
            // line 39
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 39);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            if ((($tmp = ($context["weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "&nbsp;(";
                yield ($context["weight"] ?? null);
                yield ")";
            }
            yield "</h1>
      ";
        }
        // line 41
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"cart-page\">
      <form action=\"";
        // line 43
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"shopping-cart\" class=\"cart-table\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center td-image\">";
        // line 48
        yield ($context["column_image"] ?? null);
        yield "</td>
                <td class=\"text-left td-name\">";
        // line 49
        yield ($context["column_name"] ?? null);
        yield "</td>
                <td class=\"text-center td-model\">";
        // line 50
        yield ($context["column_model"] ?? null);
        yield "</td>
                <td class=\"text-center td-qty\">";
        // line 51
        yield ($context["column_quantity"] ?? null);
        yield "</td>
                <td class=\"text-center td-price\">";
        // line 52
        yield ($context["column_price"] ?? null);
        yield "</td>
                <td class=\"text-center td-total\">";
        // line 53
        yield ($context["column_total"] ?? null);
        yield "</td>
              </tr>
            </thead>
            <tbody>

            ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 59
            yield "            <tr class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 59)], "method", false, false, false, 59);
            yield "\">
              <td class=\"text-center td-image\">";
            // line 60
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
                yield "\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60);
                yield "\" srcset=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60);
                yield " 1x, ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 60);
                yield " 2x\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                yield "\" class=\"img-thumbnail\" /></a> ";
            }
            yield "</td>
              <td class=\"text-left td-name\"><a href=\"";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 61);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 61);
            yield "</a> ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <span class=\"text-danger\">***</span> ";
            }
            // line 62
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 63
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    yield " <br />
                <small>";
                    // line 64
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 64);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 64);
                    yield "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                yield "                ";
            }
            // line 66
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <br />
                <small>";
                // line 67
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 67);
                yield "</small> ";
            }
            // line 68
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " <br />
                <span class=\"label label-info\">";
                // line 69
                yield ($context["text_recurring_item"] ?? null);
                yield "</span> <small>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 69);
                yield "</small> ";
            }
            yield "</td>
              <td class=\"text-center td-model\">";
            // line 70
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 70);
            yield "</td>
              <td class=\"text-center td-qty\"><div class=\"input-group btn-block\">
                  <div class=\"stepper\">
                    <button aria-label=\"-\" class=\"fa fa-angle-down\" type=\"button\"></button>
                    <input type=\"text\" name=\"quantity[";
            // line 74
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 74);
            yield "]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 74);
            yield "\" size=\"1\" class=\"form-control\" />
                    <button aria-label=\"+\" class=\"fa fa-angle-up\" type=\"button\"></button>
                  </div>
                  <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip-hover\" title=\"";
            // line 78
            yield ($context["button_update"] ?? null);
            yield "\" class=\"btn btn-update\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip-hover\" title=\"";
            // line 79
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-remove\" onclick=\"cart.remove('";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 79);
            yield "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-center td-price\">";
            // line 81
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
            yield "</td>
              <td class=\"text-center td-total\">";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 82);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 86
            yield "            <tr>
              <td></td>
              <td class=\"text-left td-voucher\">";
            // line 88
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 88);
            yield "</td>
              <td class=\"text-left td-voucher\"></td>
              <td class=\"text-left td-voucher\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip-hover\" title=\"";
            // line 93
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 93);
            yield "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right td-voucher\">";
            // line 95
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 95);
            yield "</td>
              <td class=\"text-right td-voucher\">";
            // line 96
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 96);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "              </tbody>
          </table>
        </div>
      </form>
      <div class=\"cart-bottom\">
      <div class=\"panels-total\">
      ";
        // line 105
        if ((($context["modules"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartPanelsStatus"], "method", false, false, false, 105))) {
            // line 106
            yield "      <div class=\"cart-panels\">
        <h2 class=\"title\">";
            // line 107
            yield ($context["text_next"] ?? null);
            yield "</h2>
      <p>";
            // line 108
            yield ($context["text_next_choice"] ?? null);
            yield "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 110
                yield "        ";
                yield $context["module"];
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield " </div>
      </div>
      ";
        }
        // line 114
        yield "      <div class=\"row\">
        <div class=\"cart-total\">
          <div class=\"table-responsive table-scroll\">
          <table class=\"table table-bordered\">
            ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 119
            yield "            <tr>
              <td class=\"text-right\"><strong>";
            // line 120
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 120);
            yield ":</strong></td>
              <td class=\"text-right\">";
            // line 121
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 121);
            yield "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "          </table>
          </div>
        </div>
      </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 130
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-default\"><span>";
        yield ($context["button_shopping"] ?? null);
        yield "</span></a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 131
        yield ($context["checkout"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_checkout"] ?? null);
        yield "</span></a></div>
      </div>
      </div>
      </div>
      ";
        // line 135
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 136
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 138
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
        return "journal3/template/checkout/cart.twig";
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
        return array (  463 => 138,  458 => 136,  454 => 135,  445 => 131,  439 => 130,  431 => 124,  422 => 121,  418 => 120,  415 => 119,  411 => 118,  405 => 114,  400 => 111,  391 => 110,  387 => 109,  383 => 108,  379 => 107,  376 => 106,  374 => 105,  366 => 99,  357 => 96,  353 => 95,  346 => 93,  338 => 88,  334 => 86,  329 => 85,  320 => 82,  316 => 81,  309 => 79,  305 => 78,  296 => 74,  289 => 70,  281 => 69,  276 => 68,  272 => 67,  267 => 66,  264 => 65,  255 => 64,  248 => 63,  245 => 62,  237 => 61,  219 => 60,  214 => 59,  210 => 58,  202 => 53,  198 => 52,  194 => 51,  190 => 50,  186 => 49,  182 => 48,  174 => 43,  168 => 41,  155 => 39,  153 => 38,  148 => 37,  145 => 36,  142 => 35,  139 => 34,  136 => 33,  133 => 32,  130 => 31,  128 => 30,  123 => 29,  115 => 25,  112 => 24,  104 => 20,  101 => 19,  93 => 15,  91 => 14,  86 => 12,  82 => 10,  71 => 8,  67 => 7,  61 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/cart.twig", "");
    }
}
