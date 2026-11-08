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

/* journal3/template/journal3/products.twig */
class __TwigTemplate_049631d31d56d6517f0a0ccb885bc4b6 extends Template
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
        $context["prefix"] = (((($context["display"] ?? null) == "grid")) ? ("ProductGrid") : ("ProductList"));
        // line 2
        yield "  <div class=\"product-layout ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
        yield " ";
        yield ($context["color_scheme_content"] ?? null);
        yield "\" data-product-id=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 2);
        yield "\">
    <div class=\"product-thumb\">
      ";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "NamePosition"), $context], "method", false, false, false, 4) == "image")) {
            // line 5
            yield "        <div class=\"name\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 5);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5);
            yield "</a></div>
      ";
        }
        // line 7
        yield "      <div class=\"image-group\">
        <div class=\"image\">
          ";
        // line 9
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewStatus"], "method", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "            <div class=\"quickview-button\">
              <a class=\"btn btn-quickview\" role=\"button\" aria-label=\"";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 11);
            yield "\" ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 11) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "QuickviewDisplay"), $context], "method", false, false, false, 11) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "QuickviewTooltipStatus"), $context], "method", false, false, false, 11))) {
                yield "data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                yield " quickview-tooltip\" data-placement=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "QuickviewTooltipPosition"), $context], "method", false, false, false, 11);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 11);
                yield "\"";
            }
            yield " onclick=\"quickview('";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 11);
            yield "')\"><span class=\"btn-text\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewText"], "method", false, false, false, 11);
            yield "</span></a>
            </div>
          ";
        }
        // line 14
        yield "
          <a href=\"";
        // line 15
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 15);
        yield "\" class=\"product-img ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-second-image";
        }
        yield "\" title=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 15);
        yield "\">
            <div>
              ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                <img src=\"";
            yield ($context["dummy_image"] ?? null);
            yield "\" data-src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 18);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-srcset=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 18);
                yield " 1x, ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 18);
                yield " 2x\" ";
            }
            yield " width=\"";
            yield ($context["image_width"] ?? null);
            yield "\" height=\"";
            yield ($context["image_height"] ?? null);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 18);
            yield "\" class=\"img-responsive img-first lazyload\"/>
              ";
        } else {
            // line 20
            yield "                <img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 20);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "srcset=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb", [], "any", false, false, false, 20);
                yield " 1x, ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "thumb2x", [], "any", false, false, false, 20);
                yield " 2x\" ";
            }
            yield " width=\"";
            yield ($context["image_width"] ?? null);
            yield "\" height=\"";
            yield ($context["image_height"] ?? null);
            yield "\" alt=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 20);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 20);
            yield "\" class=\"img-responsive img-first\"/>
              ";
        }
        // line 22
        yield "
              ";
        // line 23
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 25
                yield "                  <img src=\"";
                yield ($context["dummy_image"] ?? null);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 25);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 25);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 25);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 25);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 25);
                yield "\" class=\"img-responsive img-second lazyload\"/>
                ";
            } else {
                // line 27
                yield "                  <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 27);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb", [], "any", false, false, false, 27);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "second_thumb2x", [], "any", false, false, false, 27);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 27);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 27);
                yield "\" class=\"img-responsive img-second\"/>
                ";
            }
            // line 29
            yield "              ";
        }
        // line 30
        yield "            </div>
          </a>

          ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 33), "default", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "            <div class=\"product-labels\">
              ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 35), "default", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 36
                yield "                <span class=\"product-label product-label-";
                yield $context["id"];
                yield " product-label-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 36);
                yield " product-label-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 36);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 36)], "method", false, false, false, 36);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 36);
                yield "</strong></span>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "            </div>
          ";
        }
        // line 40
        yield "
          ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownStatus"], "method", false, false, false, 41) && CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 41))) {
            // line 42
            yield "            <div class=\"countdown\" data-date=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "date_end", [], "any", false, false, false, 42);
            yield "\"></div>
          ";
        }
        // line 44
        yield "        </div>
        ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 45), "group_outside", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "          <div class=\"product-labels-outside\">
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 47), "group_outside", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 48
                yield "              <span class=\"product-label product-label-";
                yield $context["id"];
                yield " product-label-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 48);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                yield "\"><strong><a class=\"label-link\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48);
                    yield "\"";
                }
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                yield " aria-hidden=\"true\" tabindex=\"-1\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 48);
                yield "</a></strong></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "          </div>
        ";
        }
        // line 52
        yield "      </div>

      <div class=\"caption\">
        ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 55) || CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 55))) {
            // line 56
            yield "          <div class=\"stats\">
            <div class=\"stats-group\">
              ";
            // line 58
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "                <span class=\"stat-1\"><span class=\"stats-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59);
                yield ":</span> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat1", [], "any", false, false, false, 59), "text", [], "any", false, false, false, 59);
                yield "</span></span>
              ";
            }
            // line 61
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                <span class=\"stat-2\"><span class=\"stats-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 62), "label", [], "any", false, false, false, 62);
                yield ":</span> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stat2", [], "any", false, false, false, 62), "text", [], "any", false, false, false, 62);
                yield "</span></span>
              ";
            }
            // line 64
            yield "            </div>
          </div>
        ";
        }
        // line 67
        yield "
        ";
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "NamePosition"), $context], "method", false, false, false, 68) == "default")) {
            // line 69
            yield "          <div class=\"name\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 69);
            yield "\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 69);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 69);
            yield "</a></div>
        ";
        }
        // line 71
        yield "
        ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 72) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 72) != ".."))) {
            // line 73
            yield "        <div class=\"description\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 73);
            yield "</div>
        ";
        }
        // line 75
        yield "
        ";
        // line 76
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "          <div class=\"price\">
            ";
            // line 78
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 78), "price", [], "any", false, false, false, 78)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 79
                yield "              <span class=\"product-labels-price\">
                ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "labels", [], "any", false, false, false, 80), "price", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 81
                    yield "                  <span class=\"product-label product-label-";
                    yield $context["id"];
                    yield " product-label-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 81);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 81)], "method", false, false, false, 81);
                    yield "\"><strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 81);
                    yield "</strong></span>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['id'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                yield "              </span>
            ";
            }
            // line 85
            yield "            <div>
              ";
            // line 86
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 87
                yield "                <span class=\"price-new\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "special", [], "any", false, false, false, 87);
                yield "</span> <span class=\"price-old\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 87);
                yield "</span>
              ";
            } else {
                // line 89
                yield "                <span class=\"price-normal\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 89);
                yield "</span>
              ";
            }
            // line 91
            yield "            </div>
            ";
            // line 92
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 93
                yield "              <span class=\"price-tax\">";
                yield ($context["text_tax"] ?? null);
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "tax", [], "any", false, false, false, 93);
                yield "</span>
            ";
            }
            // line 95
            yield "          </div>
        ";
        }
        // line 97
        yield "
        ";
        // line 98
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "          <div class=\"rating ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "RatingPosition"), $context], "method", false, false, false, 99) == "hover")) {
                yield "rating-hover";
            }
            yield "\">
            <div class=\"rating-stars\">
              ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 102
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 102) < $context["i"])) {
                    // line 103
                    yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                } else {
                    // line 105
                    yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                }
                // line 107
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            yield "            </div>
          </div>
        ";
        } else {
            // line 111
            yield "          <div class=\"rating no-rating ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "RatingPosition"), $context], "method", false, false, false, 111) == "hover")) {
                yield "rating-hover";
            }
            yield "\">
            <div class=\"rating-stars\">
              ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 114
                yield "                ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 114) < $context["i"])) {
                    // line 115
                    yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                } else {
                    // line 117
                    yield "                  <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                ";
                }
                // line 119
                yield "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            yield "            </div>
          </div>
        ";
        }
        // line 123
        yield "
        ";
        // line 124
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 124) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 124)) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 124))) {
            // line 125
            yield "        <div class=\"buttons-wrapper\">
          <div class=\"button-group\">
            ";
            // line 127
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 128
                yield "            <div class=\"cart-group\">
              <div class=\"stepper\">
                <label class=\"sr-only\" for=\"";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "qid", [], "any", false, false, false, 130);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 130);
                yield "</label>
                <button aria-label=\"-\" class=\"fa fa-angle-down\"></button>
                <input id=\"";
                // line 132
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "qid", [], "any", false, false, false, 132);
                yield "\" type=\"text\" name=\"quantity\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 132);
                yield "\" data-minimum=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minimum", [], "any", false, false, false, 132);
                yield "\" class=\"form-control\"/>
                <input type=\"hidden\" name=\"product_id\" value=\"";
                // line 133
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 133);
                yield "\"/>
                <button aria-label=\"+\" class=\"fa fa-angle-up\"></button>
              </div>
              <a class=\"btn btn-cart\" role=\"button\" aria-label=\"";
                // line 136
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                yield "\" ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 136) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CartDisplay"), $context], "method", false, false, false, 136) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CartTooltipStatus"), $context], "method", false, false, false, 136))) {
                    yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    yield " cart-tooltip\" data-placement=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CartTooltipPosition"), $context], "method", false, false, false, 136);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                    yield "\" ";
                }
                yield " onclick=\"cart.add('";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 136);
                yield "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val());\" data-loading-text=\"<span class='btn-text'>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                yield "</span>\"><span class=\"btn-text\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "button_cart", [], "any", false, false, false, 136);
                yield "</span></a>
            </div>
            ";
            }
            // line 139
            yield "
            ";
            // line 140
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 140) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 140))) {
                // line 141
                yield "            <div class=\"wish-group\">
              ";
                // line 142
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 143
                    yield "              <a class=\"btn btn-wishlist\" role=\"button\" aria-label=\"";
                    yield ($context["button_wishlist"] ?? null);
                    yield "\" ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 143) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "WishlistDisplay"), $context], "method", false, false, false, 143) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "WishlistTooltipStatus"), $context], "method", false, false, false, 143))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        yield " wishlist-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "WishlistTooltipPosition"), $context], "method", false, false, false, 143);
                        yield "\" title=\"";
                        yield ($context["button_wishlist"] ?? null);
                        yield "\" ";
                    }
                    yield " onclick=\"wishlist.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 143);
                    yield "')\"><span class=\"btn-text\">";
                    yield ($context["button_wishlist"] ?? null);
                    yield "</span></a>
              ";
                }
                // line 145
                yield "
              ";
                // line 146
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 147
                    yield "              <a class=\"btn btn-compare\" role=\"button\" aria-label=\"";
                    yield ($context["button_compare"] ?? null);
                    yield "\" ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 147) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CompareDisplay"), $context], "method", false, false, false, 147) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CompareTooltipStatus"), $context], "method", false, false, false, 147))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                        yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                        yield " compare-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "CompareTooltipPosition"), $context], "method", false, false, false, 147);
                        yield "\" title=\"";
                        yield ($context["button_compare"] ?? null);
                        yield "\" ";
                    }
                    yield " onclick=\"compare.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 147);
                    yield "')\"><span class=\"btn-text\">";
                    yield ($context["button_compare"] ?? null);
                    yield "</span></a>
              ";
                }
                // line 149
                yield "            </div>
            ";
            }
            // line 151
            yield "          </div>
        </div>
        ";
        }
        // line 154
        yield "
        ";
        // line 155
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "extra_buttons", [], "any", false, false, false, 155)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 156
            yield "          <div class=\"extra-group\">
            <div>
              ";
            // line 158
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "extra_buttons", [], "any", false, false, false, 158));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                // line 159
                yield "                <a class=\"btn btn-extra btn-extra-";
                yield $context["id"];
                yield "\"
                  ";
                // line 160
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 160) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [((($context["prefix"] ?? null) . "ExtraButtonDisplay") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 160)), $context], "method", false, false, false, 160) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "ExtraButtonTooltipStatus"), $context], "method", false, false, false, 160))) {
                    yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-products-" . ($context["module_id"] ?? null)) . " module-products-grid")) : ("product-grid"));
                    yield " extra-tooltip\" data-placement=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", [(($context["prefix"] ?? null) . "ExtraButtonTooltipPosition"), $context], "method", false, false, false, 160);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 160);
                    yield "\" ";
                }
                // line 161
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 161) == "quickbuy")) {
                    yield "onclick=\"cart.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 161);
                    yield "', \$(this).closest('.product-thumb').find('.button-group input[name=\\'quantity\\']').val(), true);\"";
                }
                // line 162
                yield "                  ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 162) == "link") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 162), "href", [], "any", false, false, false, 162))) {
                    yield "href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 162), "href", [], "any", false, false, false, 162);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 162)], "method", false, false, false, 162);
                    yield " data-product_id=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "product_id", [], "any", false, false, false, 162);
                    yield "\" data-product_url=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "href", [], "any", false, false, false, 162);
                    yield "\" ";
                } else {
                    yield "href=\"javascript:;\"";
                }
                // line 163
                yield "                   data-loading-text=\"<span class='btn-text'>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 163);
                yield "</span>\">
                  <span class=\"btn-text\">";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 164);
                yield "</span>
                </a>
              ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            yield "            </div>
          </div>
        ";
        }
        // line 170
        yield "      </div>
    </div>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/products.twig";
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
        return array (  718 => 170,  713 => 167,  696 => 164,  691 => 163,  676 => 162,  669 => 161,  659 => 160,  654 => 159,  637 => 158,  633 => 156,  631 => 155,  628 => 154,  623 => 151,  619 => 149,  599 => 147,  597 => 146,  594 => 145,  574 => 143,  572 => 142,  569 => 141,  567 => 140,  564 => 139,  542 => 136,  536 => 133,  528 => 132,  521 => 130,  517 => 128,  515 => 127,  511 => 125,  509 => 124,  506 => 123,  501 => 120,  495 => 119,  491 => 117,  487 => 115,  484 => 114,  480 => 113,  472 => 111,  467 => 108,  461 => 107,  457 => 105,  453 => 103,  450 => 102,  446 => 101,  438 => 99,  436 => 98,  433 => 97,  429 => 95,  422 => 93,  420 => 92,  417 => 91,  411 => 89,  403 => 87,  401 => 86,  398 => 85,  394 => 83,  379 => 81,  375 => 80,  372 => 79,  370 => 78,  367 => 77,  365 => 76,  362 => 75,  356 => 73,  354 => 72,  351 => 71,  341 => 69,  339 => 68,  336 => 67,  331 => 64,  323 => 62,  320 => 61,  312 => 59,  310 => 58,  306 => 56,  304 => 55,  299 => 52,  295 => 50,  272 => 48,  268 => 47,  265 => 46,  263 => 45,  260 => 44,  254 => 42,  252 => 41,  249 => 40,  245 => 38,  228 => 36,  224 => 35,  221 => 34,  219 => 33,  214 => 30,  211 => 29,  189 => 27,  165 => 25,  162 => 24,  160 => 23,  157 => 22,  135 => 20,  111 => 18,  109 => 17,  98 => 15,  95 => 14,  75 => 11,  72 => 10,  70 => 9,  66 => 7,  56 => 5,  54 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/products.twig", "");
    }
}
