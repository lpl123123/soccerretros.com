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

/* journal3/template/journal3/module/side_products.twig */
class __TwigTemplate_cf9f302881086d1f46d816aa0373b6bf extends Template
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
        // line 30
        yield "<div class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 30);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 31
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  ";
        // line 32
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 35
        yield "  <div class=\"module-body side-products-";
        yield ($context["sectionsDisplay"] ?? null);
        yield "\">
    ";
        // line 37
        yield "    ";
        if ((($context["sectionsDisplay"] ?? null) == "blocks")) {
            // line 38
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 39
                yield "        <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                yield "\">
          ";
                // line 40
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "            <h3 class=\"title module-title\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 41);
                    yield "</h3>
          ";
                }
                // line 43
                yield "          ";
                yield $this->getTemplateForMacro("macro_renderSideProductsItem", $context, 43, $this->getSourceContext())->macro_renderSideProductsItem(...[$context, $context["item"]]);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "    ";
        }
        // line 47
        yield "    ";
        // line 48
        yield "    ";
        if ((($context["sectionsDisplay"] ?? null) == "tabs")) {
            // line 49
            yield "      <div class=\"tab-container\">
        <div class=\"full-tabs-bg\"></div>
        <ul class=\"nav nav-tabs\">
          ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                yield "            <li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 53)], "method", false, false, false, 53);
                yield "\">
              ";
                // line 54
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 54) == "link")) {
                    // line 55
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 55), "href", [], "any", false, false, false, 55);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 55);
                    yield "</a>
              ";
                } else {
                    // line 57
                    yield "                <a href=\"#";
                    yield ($context["id"] ?? null);
                    yield "-tab-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 57);
                    yield "\" data-toggle=\"tab\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 57);
                    yield "</a>
              ";
                }
                // line 59
                yield "            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            yield "        </ul>
        <div class=\"tab-content\">
          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 64) != "link")) {
                    // line 65
                    yield "              ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 66
                        yield "                <div class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 66)], "method", false, false, false, 66);
                        yield "\" id=\"";
                        yield ($context["id"] ?? null);
                        yield "-tab-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 66);
                        yield "\">
                  ";
                        // line 67
                        yield $this->getTemplateForMacro("macro_renderSideProductsItem", $context, 67, $this->getSourceContext())->macro_renderSideProductsItem(...[$context, $context["item"]]);
                        yield "
                </div>
              ";
                    } else {
                        // line 70
                        yield "                <template class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 70)], "method", false, false, false, 70);
                        yield "\" id=\"";
                        yield ($context["id"] ?? null);
                        yield "-tab-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 70);
                        yield "\">
                  ";
                        // line 71
                        yield $this->getTemplateForMacro("macro_renderSideProductsItem", $context, 71, $this->getSourceContext())->macro_renderSideProductsItem(...[$context, $context["item"]]);
                        yield "
                </template>
              ";
                    }
                    // line 74
                    yield "            ";
                }
                // line 75
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            yield "        </div>
      </div>
    ";
        }
        // line 79
        yield "    ";
        // line 80
        yield "    ";
        if ((($context["sectionsDisplay"] ?? null) == "accordion")) {
            // line 81
            yield "      <div class=\"panel-group\" id=\"";
            yield ($context["id"] ?? null);
            yield "-collapse\">
        ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 83
                yield "          <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 83)], "method", false, false, false, 83);
                yield "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 86
                yield ($context["id"] ?? null);
                yield "-collapse-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 86);
                yield "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                yield ($context["id"] ?? null);
                yield "-collapse\" aria-expanded=\"false\">
                  ";
                // line 87
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 87);
                yield "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 92)], "method", false, false, false, 92);
                yield "\" id=\"";
                yield ($context["id"] ?? null);
                yield "-collapse-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 92);
                yield "\">
              ";
                // line 93
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 94
                    yield "                <div class=\"panel-body\">
                  ";
                    // line 95
                    yield $this->getTemplateForMacro("macro_renderSideProductsItem", $context, 95, $this->getSourceContext())->macro_renderSideProductsItem(...[$context, $context["item"]]);
                    yield "
                </div>
              ";
                } else {
                    // line 98
                    yield "                <template class=\"panel-body\">
                  ";
                    // line 99
                    yield $this->getTemplateForMacro("macro_renderSideProductsItem", $context, 99, $this->getSourceContext())->macro_renderSideProductsItem(...[$context, $context["item"]]);
                    yield "
                </template>
              ";
                }
                // line 102
                yield "            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "      </div>
    ";
        }
        // line 107
        yield "  </div>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_renderSideProductsItem($͜context = null, $item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "context" => $͜context,
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            $context["journal3"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 2);
            // line 3
            yield "  ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 3) == "ipr") && CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "swiper_carousel", [], "any", false, false, false, 3))) {
                // line 4
                yield "    <div class=\"swiper\" data-items-per-row='";
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "itemsPerRow", [], "any", false, false, false, 4), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
                yield "' data-options='";
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "carouselOptions", [], "any", false, false, false, 4), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
                yield "'>
      <div class=\"swiper-container\" ";
                // line 5
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "dir=\"rtl\"";
                }
                yield ">
        <div class=\"swiper-wrapper side-products ipr-grid\">
          ";
                // line 7
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 7);
                yield "
        </div>
      </div>
      <div class=\"swiper-buttons\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
      <div class=\"swiper-pagination\"></div>
    </div>
  ";
            } else {
                // line 17
                yield "    <div class=\"side-products no-scroll ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 17);
                yield "-grid\">
      ";
                // line 18
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "gridType", [], "any", false, false, false, 18) == "auto")) {
                    // line 19
                    yield "        <div class=\"auto-grid-items\">
          ";
                    // line 20
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 20);
                    yield "
        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
      ";
                } else {
                    // line 25
                    yield "        ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "products", [], "any", false, false, false, 25);
                    yield "
      ";
                }
                // line 27
                yield "    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/side_products.twig";
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
        return array (  358 => 27,  352 => 25,  344 => 20,  341 => 19,  339 => 18,  334 => 17,  321 => 7,  314 => 5,  307 => 4,  304 => 3,  301 => 2,  288 => 1,  281 => 107,  277 => 105,  269 => 102,  263 => 99,  260 => 98,  254 => 95,  251 => 94,  249 => 93,  241 => 92,  233 => 87,  225 => 86,  218 => 83,  214 => 82,  209 => 81,  206 => 80,  204 => 79,  199 => 76,  193 => 75,  190 => 74,  184 => 71,  175 => 70,  169 => 67,  160 => 66,  157 => 65,  154 => 64,  150 => 63,  146 => 61,  139 => 59,  129 => 57,  121 => 55,  119 => 54,  114 => 53,  110 => 52,  105 => 49,  102 => 48,  100 => 47,  97 => 46,  87 => 43,  81 => 41,  79 => 40,  74 => 39,  69 => 38,  66 => 37,  61 => 35,  55 => 33,  53 => 32,  47 => 31,  42 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/side_products.twig", "");
    }
}
