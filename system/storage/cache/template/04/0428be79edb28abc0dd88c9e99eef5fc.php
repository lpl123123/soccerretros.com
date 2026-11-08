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

/* journal3/template/journal3/module/testimonials.twig */
class __TwigTemplate_0fe4c83ab609053a148857937dde967b extends Template
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
        // line 18
        yield "<div class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 18);
        yield " ";
        yield ($context["color_scheme_module"] ?? null);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 19
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  ";
        // line 20
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 23
        yield "  <div class=\"module-body\">
  ";
        // line 25
        yield "  ";
        if ((($context["display"] ?? null) == "grid")) {
            // line 26
            yield "    ";
            if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
                // line 27
                yield "      <div class=\"swiper\" data-items-per-row='";
                yield json_encode(($context["itemsPerRow"] ?? null), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
                yield "' data-options='";
                yield json_encode(($context["carouselOptions"] ?? null), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
                yield "'>
        <div class=\"swiper-container\" ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "dir=\"rtl\"";
                }
                yield ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 31
                    yield "              <div class=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 31)], "method", false, false, false, 31);
                    yield "\">
                ";
                    // line 32
                    yield $this->getTemplateForMacro("macro_renderTestimonials", $context, 32, $this->getSourceContext())->macro_renderTestimonials(...[$context, $context["item"]]);
                    yield "
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "          </div>
        </div>
        <div class=\"swiper-buttons\">
          <div class=\"swiper-button-prev\"></div>
          <div class=\"swiper-button-next\"></div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>
    ";
            } else {
                // line 44
                yield "      <div class=\"no-scroll ";
                yield ($context["gridType"] ?? null);
                yield "-grid\">
        ";
                // line 45
                if ((($context["gridType"] ?? null) == "auto")) {
                    // line 46
                    yield "          <div class=\"auto-grid-items\">
            ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 48
                        yield "              <div class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                        yield "\">
                ";
                        // line 49
                        yield $this->getTemplateForMacro("macro_renderTestimonials", $context, 49, $this->getSourceContext())->macro_renderTestimonials(...[$context, $context["item"]]);
                        yield "
              </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    yield "          </div>
          <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
          <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
        ";
                } else {
                    // line 56
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 57
                        yield "            <div class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 57)], "method", false, false, false, 57);
                        yield "\">
              ";
                        // line 58
                        yield $this->getTemplateForMacro("macro_renderTestimonials", $context, 58, $this->getSourceContext())->macro_renderTestimonials(...[$context, $context["item"]]);
                        yield "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    yield "        ";
                }
                // line 62
                yield "      </div>
    ";
            }
            // line 64
            yield "  ";
        }
        // line 65
        yield "  ";
        // line 66
        yield "  ";
        if ((($context["display"] ?? null) == "tabs")) {
            // line 67
            yield "    <div class=\"tab-container\">
      <div class=\"full-tabs-bg\"></div>
      <ul class=\"nav nav-tabs\">
        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                yield "          <li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                yield "\">
            ";
                // line 72
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 72) == "link")) {
                    // line 73
                    yield "              <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 73), "href", [], "any", false, false, false, 73);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 73);
                    yield "</a>
            ";
                } else {
                    // line 75
                    yield "              <a href=\"#";
                    yield ($context["id"] ?? null);
                    yield "-tab-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 75);
                    yield "\" data-toggle=\"tab\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 75);
                    yield "</a>
            ";
                }
                // line 77
                yield "          </li>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            yield "      </ul>
      <div class=\"tab-content\">
        ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 82
                yield "          <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 82)], "method", false, false, false, 82);
                yield "\" id=\"";
                yield ($context["id"] ?? null);
                yield "-tab-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 82);
                yield "\">
            ";
                // line 83
                yield $this->getTemplateForMacro("macro_renderTestimonials", $context, 83, $this->getSourceContext())->macro_renderTestimonials(...[$context, $context["item"]]);
                yield "
          </div>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            yield "      </div>
    </div>
  ";
        }
        // line 89
        yield "  ";
        // line 90
        yield "  ";
        if ((($context["display"] ?? null) == "accordion")) {
            // line 91
            yield "    <div class=\"panel-group\" id=\"";
            yield ($context["id"] ?? null);
            yield "-collapse\">
      ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 93
                yield "        <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 93)], "method", false, false, false, 93);
                yield "\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">
              <a href=\"#";
                // line 96
                yield ($context["id"] ?? null);
                yield "-collapse-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96);
                yield "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#";
                yield ($context["id"] ?? null);
                yield "-collapse\" aria-expanded=\"false\">
                ";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 97);
                yield "
                <i class=\"fa fa-caret-down\"></i>
              </a>
            </h4>
          </div>
          <div class=\"";
                // line 102
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 102)], "method", false, false, false, 102);
                yield "\" id=\"";
                yield ($context["id"] ?? null);
                yield "-collapse-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102);
                yield "\">
            <div class=\"panel-body\">
              ";
                // line 104
                yield $this->getTemplateForMacro("macro_renderTestimonials", $context, 104, $this->getSourceContext())->macro_renderTestimonials(...[$context, $context["item"]]);
                yield "
            </div>
          </div>
        </div>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            yield "    </div>
  ";
        }
        // line 111
        yield "  </div>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_renderTestimonials($͜context = null, $item = null, ...$varargs): string|Markup
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
            yield "  <div class=\"block-body\">
    ";
            // line 4
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "header", [], "any", false, false, false, 4) == "image")) {
                // line 5
                yield "      <div class=\"block-header\"><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 5);
                yield "\" alt=\"\" class=\"block-image\" width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 5), "width", [], "any", false, false, false, 5);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 5), "height", [], "any", false, false, false, 5);
                yield "\"/></div>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 6
($context["item"] ?? null), "header", [], "any", false, false, false, 6) == "icon")) {
                // line 7
                yield "      <div class=\"block-header\"><em class=\"icon icon-block\"></em></div>
    ";
            }
            // line 9
            yield "    <div class=\"block-content block-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "contentType", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 9);
            yield "</div>
    ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "expandButton", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "      <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 11);
                yield "\"></a></div>
    ";
            }
            // line 13
            yield "  </div>
  ";
            // line 14
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "footerText", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "    <div class=\"block-footer\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "footerText", [], "any", false, false, false, 15);
                yield "</div>
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
        return "journal3/template/journal3/module/testimonials.twig";
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
        return array (  442 => 15,  440 => 14,  437 => 13,  431 => 11,  429 => 10,  422 => 9,  418 => 7,  416 => 6,  407 => 5,  405 => 4,  402 => 3,  399 => 2,  386 => 1,  379 => 111,  375 => 109,  356 => 104,  347 => 102,  339 => 97,  331 => 96,  324 => 93,  307 => 92,  302 => 91,  299 => 90,  297 => 89,  292 => 86,  275 => 83,  266 => 82,  249 => 81,  245 => 79,  230 => 77,  220 => 75,  212 => 73,  210 => 72,  205 => 71,  188 => 70,  183 => 67,  180 => 66,  178 => 65,  175 => 64,  171 => 62,  168 => 61,  159 => 58,  154 => 57,  149 => 56,  143 => 52,  134 => 49,  129 => 48,  125 => 47,  122 => 46,  120 => 45,  115 => 44,  104 => 35,  95 => 32,  90 => 31,  86 => 30,  79 => 28,  72 => 27,  69 => 26,  66 => 25,  63 => 23,  57 => 21,  55 => 20,  49 => 19,  42 => 18,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/testimonials.twig", "");
    }
}
