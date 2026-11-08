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

/* journal3/template/common/cart.twig */
class __TwigTemplate_6eb3c574a21e82030177776775bdec3a extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogMiniCartStatus"], "method", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<div id=\"cart\" class=\"dropdown ";
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                yield "cart-has-items";
            }
            yield "\">
  <a href=\"";
            // line 3
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartCheckoutLink"], "method", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cart"] ?? null)) : ("javascript:;"));
            yield "\" data-toggle=\"dropdown\" data-loading-text=\"";
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"dropdown-toggle cart-heading\" title=\"";
            yield ($context["text_cart"] ?? null);
            yield "\">
    ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartCustomText"], "method", false, false, false, 4) == "default")) {
                // line 5
                yield "    <span id=\"cart-total\"><span class=\"cart-title\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartTitle"], "method", false, false, false, 5);
                yield "</span><span class=\"cart-text\">";
                yield ($context["text_items"] ?? null);
                yield "</span></span>
    ";
            }
            // line 7
            yield "    <em class=\"fa fa-shopping-cart\">
      <span id=\"cart-items\" class=\"count-badge ";
            // line 8
            if ((($tmp =  !($context["items_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "count-zero";
            }
            yield "\">";
            yield ($context["items_count"] ?? null);
            yield "</span>
      ";
            // line 9
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartCustomText"], "method", false, false, false, 9) == "custom")) {
                // line 10
                yield "        <span class=\"cart-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartStyleCartLabel"], "method", false, false, false, 10);
                yield "</span>
      ";
            }
            // line 12
            yield "    </em>
  </a>
  <div id=\"cart-content\" class=\"dropdown-menu cart-content j-dropdown\">
  <ul>
    ";
            // line 16
            if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
                // line 17
                yield "    <li class=\"cart-products\">
      <table class=\"table\">
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 20
                    yield "        <tr>
          <td class=\"text-center td-image\">";
                    // line 21
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
                        yield "\"><img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                        yield "\" srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 21);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 21);
                        yield " 2x\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
                        yield "\" class=\"img-thumbnail\" /></a> ";
                    }
                    yield "</td>
          <td class=\"text-left td-name\"><a href=\"";
                    // line 22
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 22);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 22);
                    yield "</a><br > ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 23
                        yield "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 23));
                        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                            // line 24
                            yield "            <span>";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 24);
                            yield "</span><small> ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 24);
                            yield "</small><br /> ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 25
                        yield "            ";
                    }
                    // line 26
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 27
                        yield "            <span>";
                        yield ($context["text_recurring"] ?? null);
                        yield "</span><small> ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 27);
                        yield "</small> ";
                    }
                    yield "</td>
          <td class=\"text-right td-qty\">x ";
                    // line 28
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
                    yield "</td>
          <td class=\"text-right td-total\">";
                    // line 29
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 29);
                    yield "</td>
          <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"cart.remove('";
                    // line 30
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 30);
                    yield "');\" title=\"";
                    yield ($context["button_remove"] ?? null);
                    yield "\" class=\"cart-remove\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                    // line 34
                    yield "        <tr>
          <td class=\"text-center td-image\"></td>
          <td class=\"text-left\">";
                    // line 36
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 36);
                    yield "</td>
          <td class=\"text-right\">x&nbsp;1</td>
          <td class=\"text-right\">";
                    // line 38
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 38);
                    yield "</td>
          <td class=\"text-center td-remove\"><button type=\"button\" onclick=\"voucher.remove('";
                    // line 39
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 39);
                    yield "');\" title=\"";
                    yield ($context["button_remove"] ?? null);
                    yield "\" class=\"cart-remove\"><i class=\"fa fa-times\"></i></button></td>
        </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "      </table>
    </li>
    <li class=\"cart-totals\">
      <div>
        <table class=\"table table-bordered\">
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                    // line 48
                    yield "          <tr>
            <td class=\"text-right td-total-title\">";
                    // line 49
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 49);
                    yield "</td>
            <td class=\"text-right td-total-text\">";
                    // line 50
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 50);
                    yield "</td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                yield "        </table>
        <div class=\"cart-buttons\">
          <a class=\"btn-cart btn\" href=\"";
                // line 55
                yield ($context["cart"] ?? null);
                yield "\"><i class=\"fa\"></i><span>";
                yield ($context["text_cart"] ?? null);
                yield "</span></a>
          <a class=\"btn-checkout btn\" href=\"";
                // line 56
                yield ($context["checkout"] ?? null);
                yield "\"><i class=\"fa\"></i><span>";
                yield ($context["text_checkout"] ?? null);
                yield "</span></a>
        </div>
      </div>
    </li>
    ";
            } else {
                // line 61
                yield "    <li>
      <p class=\"text-center cart-empty\">";
                // line 62
                yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
                yield "</p>
    </li>
    ";
            }
            // line 65
            yield "  </ul>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/common/cart.twig";
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
        return array (  265 => 65,  259 => 62,  256 => 61,  246 => 56,  240 => 55,  236 => 53,  227 => 50,  223 => 49,  220 => 48,  216 => 47,  209 => 42,  198 => 39,  194 => 38,  189 => 36,  185 => 34,  180 => 33,  169 => 30,  165 => 29,  161 => 28,  152 => 27,  149 => 26,  146 => 25,  136 => 24,  131 => 23,  125 => 22,  107 => 21,  104 => 20,  100 => 19,  96 => 17,  94 => 16,  88 => 12,  82 => 10,  80 => 9,  72 => 8,  69 => 7,  61 => 5,  59 => 4,  51 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/cart.twig", "");
    }
}
