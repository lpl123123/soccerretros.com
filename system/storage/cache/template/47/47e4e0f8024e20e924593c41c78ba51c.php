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

/* journal3/template/journal3/side_products.twig */
class __TwigTemplate_047ae5e38b7331ef0a9f584abd43293b extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 2
            yield "  <div class=\"product-layout ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            yield " ";
            yield ($context["color_scheme_content"] ?? null);
            yield "\">
    <div class=\"side-product\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
            yield "\" class=\"product-img\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
            yield "\">
          ";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "            <img src=\"";
                yield ($context["dummy_image"] ?? null);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 7);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 7);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 7);
                yield "\" class=\"img-first lazyload\"/>
          ";
            } else {
                // line 9
                yield "            <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb2x", [], "any", false, false, false, 9);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                yield "\" class=\"img-first\"/>
          ";
            }
            // line 11
            yield "        </a>

        ";
            // line 13
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewStatus"], "method", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "          <div class=\"quickview-button\">
            <a class=\"btn btn-quickview\" role=\"button\" aria-label=\"";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 15);
                yield "\" ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 15) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductQuickviewTooltipStatus", $context], "method", false, false, false, 15))) {
                    yield "data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    yield ("module-side_products-" . ($context["module_id"] ?? null));
                    yield " quickview-tooltip\" data-placement=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductQuickviewTooltipPosition", $context], "method", false, false, false, 15);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 15);
                    yield "\"";
                }
                yield " onclick=\"quickview('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 15);
                yield "')\"><span class=\"btn-text\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 15);
                yield "</span></a>
          </div>
        ";
            }
            // line 18
            yield "      </div>

      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 21
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 21);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 21);
            yield "</a></div>

        ";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "          <div class=\"price\">
            ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "              <span class=\"price-new\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 26);
                    yield "</span> <span class=\"price-old\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 26);
                    yield "</span>
            ";
                } else {
                    // line 28
                    yield "              <span class=\"price-normal\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 28);
                    yield "</span>
            ";
                }
                // line 30
                yield "          </div>
          ";
                // line 31
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 32
                    yield "            <div class=\"price-tax\">";
                    yield ($context["text_tax"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 32);
                    yield "</div>
          ";
                }
                // line 34
                yield "        ";
            }
            // line 35
            yield "
        ";
            // line 36
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 37
                yield "          <div class=\"rating\">
            <div class=\"rating-stars\">
              ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 40
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 40) < $context["i"])) {
                        // line 41
                        yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    } else {
                        // line 43
                        yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    }
                    // line 45
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "            </div>
          </div>
        ";
            } else {
                // line 49
                yield "          <div class=\"rating no-rating\">
            <div class=\"rating-stars\">
              ";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 52
                    yield "                ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 52) < $context["i"])) {
                        // line 53
                        yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    } else {
                        // line 55
                        yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                    }
                    // line 57
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 58
                yield "            </div>
          </div>
        ";
            }
            // line 61
            yield "
        ";
            // line 62
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 62) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 62)) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 62))) {
                // line 63
                yield "          <div class=\"button-group\">
            ";
                // line 64
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 65
                    yield "              <a class=\"btn btn-cart\" role=\"button\" aria-label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 65) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCartTooltipStatus", $context], "method", false, false, false, 65))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        yield ("module-side_products-" . ($context["module_id"] ?? null));
                        yield " cart-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCartTooltipPosition", $context], "method", false, false, false, 65);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                        yield "\" ";
                    }
                    yield " onclick=\"cart.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 65);
                    yield "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                    yield "</span>\"><span class=\"btn-text\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "button_cart", [], "any", false, false, false, 65);
                    yield "</span></a>
            ";
                }
                // line 67
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 68
                    yield "              <a class=\"btn btn-wishlist\" role=\"button\" aria-label=\"";
                    yield ($context["button_wishlist"] ?? null);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 68) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductWishlistTooltipStatus", $context], "method", false, false, false, 68))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        yield ("module-side_products-" . ($context["module_id"] ?? null));
                        yield " wishlist-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductWishlistTooltipPosition", $context], "method", false, false, false, 68);
                        yield "\" title=\"";
                        yield ($context["button_wishlist"] ?? null);
                        yield "\" ";
                    }
                    yield " onclick=\"wishlist.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 68);
                    yield "')\"><span class=\"btn-text\">";
                    yield ($context["button_wishlist"] ?? null);
                    yield "</span></a>
            ";
                }
                // line 70
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 71
                    yield "              <a class=\"btn btn-compare\" role=\"button\" aria-label=\"";
                    yield ($context["button_compare"] ?? null);
                    yield "\" ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 71) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCompareTooltipStatus", $context], "method", false, false, false, 71))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        yield ("module-side_products-" . ($context["module_id"] ?? null));
                        yield " compare-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["SideProductCompareTooltipPosition", $context], "method", false, false, false, 71);
                        yield "\" title=\"";
                        yield ($context["button_compare"] ?? null);
                        yield "\" ";
                    }
                    yield " onclick=\"compare.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 71);
                    yield "')\"><span class=\"btn-text\">";
                    yield ($context["button_compare"] ?? null);
                    yield "</span></a>
            ";
                }
                // line 73
                yield "          </div>
        ";
            }
            // line 75
            yield "
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/side_products.twig";
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
        return array (  333 => 75,  329 => 73,  309 => 71,  306 => 70,  286 => 68,  283 => 67,  261 => 65,  259 => 64,  256 => 63,  254 => 62,  251 => 61,  246 => 58,  240 => 57,  236 => 55,  232 => 53,  229 => 52,  225 => 51,  221 => 49,  216 => 46,  210 => 45,  206 => 43,  202 => 41,  199 => 40,  195 => 39,  191 => 37,  189 => 36,  186 => 35,  183 => 34,  176 => 32,  174 => 31,  171 => 30,  165 => 28,  157 => 26,  155 => 25,  152 => 24,  150 => 23,  143 => 21,  138 => 18,  118 => 15,  115 => 14,  113 => 13,  109 => 11,  87 => 9,  63 => 7,  61 => 6,  55 => 5,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/side_products.twig", "");
    }
}
