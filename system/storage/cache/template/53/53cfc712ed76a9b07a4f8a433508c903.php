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

/* journal3/template/journal3/module/products.twig */
class __TwigTemplate_bb7f28bc25a0616d7033a946acbdbf3d extends Template
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
            yield "    <div class=\"title-main\">
      <h3 class=\"title module-title\">";
            // line 34
            yield ($context["title"] ?? null);
            yield "</h3>
      ";
            // line 35
            if ((($tmp = ($context["inline_button_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "        <a class=\"btn title-inline-btn\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["inline_button_link"] ?? null), "href", [], "any", false, false, false, 36);
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["inline_button_link"] ?? null)], "method", false, false, false, 36);
                yield "><span>";
                yield ($context["inline_button_text"] ?? null);
                yield "</span></a>
      ";
            }
            // line 38
            yield "    </div>
  ";
        }
        // line 40
        yield "  <div class=\"module-body\">
    ";
        // line 42
        yield "    ";
        if ((($context["sectionsDisplay"] ?? null) == "blocks")) {
            // line 43
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                yield "        <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                yield "\">
          ";
                // line 45
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 46
                    yield "            <h3 class=\"title module-title\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 46);
                    yield "</h3>
          ";
                }
                // line 48
                yield "          ";
                yield $this->getTemplateForMacro("macro_renderProducts", $context, 48, $this->getSourceContext())->macro_renderProducts(...[$context, $context["item"]]);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "    ";
        }
        // line 52
        yield "    ";
        // line 53
        yield "    ";
        if ((($context["sectionsDisplay"] ?? null) == "tabs")) {
            // line 54
            yield "      <div class=\"tab-container\">
        <div class=\"full-tabs-bg\"></div>
        <ul class=\"nav nav-tabs\">
          ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 58
                yield "            <li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 58)], "method", false, false, false, 58);
                yield "\">
              ";
                // line 59
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 59) == "link")) {
                    // line 60
                    yield "                <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 60), "href", [], "any", false, false, false, 60);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 60);
                    yield "</a>
              ";
                } else {
                    // line 62
                    yield "                <a href=\"#";
                    yield ($context["id"] ?? null);
                    yield "-tab-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 62);
                    yield "\" data-toggle=\"tab\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 62);
                    yield "</a>
              ";
                }
                // line 64
                yield "            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "        </ul>
        <div class=\"tab-content\">
          ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 69
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 69) != "link")) {
                    // line 70
                    yield "              ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 71
                        yield "                <div class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                        yield "\" id=\"";
                        yield ($context["id"] ?? null);
                        yield "-tab-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 71);
                        yield "\">
                  ";
                        // line 72
                        yield $this->getTemplateForMacro("macro_renderProducts", $context, 72, $this->getSourceContext())->macro_renderProducts(...[$context, $context["item"]]);
                        yield "
                </div>
              ";
                    } else {
                        // line 75
                        yield "                <template class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 75)], "method", false, false, false, 75);
                        yield "\" id=\"";
                        yield ($context["id"] ?? null);
                        yield "-tab-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 75);
                        yield "\">
                  ";
                        // line 76
                        yield $this->getTemplateForMacro("macro_renderProducts", $context, 76, $this->getSourceContext())->macro_renderProducts(...[$context, $context["item"]]);
                        yield "
                </template>
              ";
                    }
                    // line 79
                    yield "            ";
                }
                // line 80
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            yield "        </div>
      </div>
    ";
        }
        // line 84
        yield "    ";
        // line 85
        yield "    ";
        if ((($context["sectionsDisplay"] ?? null) == "accordion")) {
            // line 86
            yield "      <div class=\"panel-group\" id=\"";
            yield ($context["id"] ?? null);
            yield "-collapse\">
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 88
                yield "          <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 88)], "method", false, false, false, 88);
                yield "\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">
                <a href=\"#";
                // line 91
                yield ($context["id"] ?? null);
                yield "-collapse-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 91);
                yield "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                yield ($context["id"] ?? null);
                yield "-collapse\" aria-expanded=\"false\">
                  ";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 92);
                yield "
                  <i class=\"fa fa-caret-down\"></i>
                </a>
              </h4>
            </div>
            <div class=\"";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 97)], "method", false, false, false, 97);
                yield "\" id=\"";
                yield ($context["id"] ?? null);
                yield "-collapse-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "index", [], "any", false, false, false, 97);
                yield "\">
              ";
                // line 98
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 99
                    yield "                <div class=\"panel-body\">
                  ";
                    // line 100
                    yield $this->getTemplateForMacro("macro_renderProducts", $context, 100, $this->getSourceContext())->macro_renderProducts(...[$context, $context["item"]]);
                    yield "
                </div>
              ";
                } else {
                    // line 103
                    yield "                <template class=\"panel-body\">
                  ";
                    // line 104
                    yield $this->getTemplateForMacro("macro_renderProducts", $context, 104, $this->getSourceContext())->macro_renderProducts(...[$context, $context["item"]]);
                    yield "
                </template>
              ";
                }
                // line 107
                yield "            </div>
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "      </div>
    ";
        }
        // line 112
        yield "  </div>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_renderProducts($͜context = null, $item = null, ...$varargs): string|Markup
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
        <div class=\"swiper-wrapper ";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "products_classes", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                yield " ipr-grid\">
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
                yield "    <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "products_classes", [], "any", false, false, false, 17)], "method", false, false, false, 17);
                yield " no-scroll ";
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
        return "journal3/template/journal3/module/products.twig";
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
        return array (  378 => 27,  372 => 25,  364 => 20,  361 => 19,  359 => 18,  352 => 17,  339 => 7,  335 => 6,  329 => 5,  322 => 4,  319 => 3,  316 => 2,  303 => 1,  296 => 112,  292 => 110,  284 => 107,  278 => 104,  275 => 103,  269 => 100,  266 => 99,  264 => 98,  256 => 97,  248 => 92,  240 => 91,  233 => 88,  229 => 87,  224 => 86,  221 => 85,  219 => 84,  214 => 81,  208 => 80,  205 => 79,  199 => 76,  190 => 75,  184 => 72,  175 => 71,  172 => 70,  169 => 69,  165 => 68,  161 => 66,  154 => 64,  144 => 62,  136 => 60,  134 => 59,  129 => 58,  125 => 57,  120 => 54,  117 => 53,  115 => 52,  112 => 51,  102 => 48,  96 => 46,  94 => 45,  89 => 44,  84 => 43,  81 => 42,  78 => 40,  74 => 38,  64 => 36,  62 => 35,  58 => 34,  55 => 33,  53 => 32,  47 => 31,  42 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/products.twig", "");
    }
}
