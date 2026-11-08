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

/* journal3/template/journal3/module/catalog.twig */
class __TwigTemplate_1ab3fd735a2c204c4309aa0ecd0607d2 extends Template
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
        // line 34
        yield "<div class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 34);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 35
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  ";
        // line 36
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 39
        yield "  <div class=\"module-body\">
    ";
        // line 40
        if (((($context["gridType"] ?? null) == "ipr") && ($context["carousel"] ?? null))) {
            // line 41
            yield "      <div class=\"swiper\" data-items-per-row='";
            yield json_encode(($context["itemsPerRow"] ?? null), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
            yield "' data-options='";
            yield json_encode(($context["carouselOptions"] ?? null), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
            yield "'>
        <div class=\"swiper-container\" ";
            // line 42
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "dir=\"rtl\"";
            }
            yield ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
            // line 44
            yield $this->getTemplateForMacro("macro_renderCatalog", $context, 44, $this->getSourceContext())->macro_renderCatalog(...[$context]);
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
            // line 54
            yield "      <div class=\"catalog-grid no-scroll ";
            yield ($context["gridType"] ?? null);
            yield "-grid\">
        ";
            // line 55
            if ((($context["gridType"] ?? null) == "auto")) {
                // line 56
                yield "          <div class=\"auto-grid-items\">
            ";
                // line 57
                yield $this->getTemplateForMacro("macro_renderCatalog", $context, 57, $this->getSourceContext())->macro_renderCatalog(...[$context]);
                yield "
          </div>
          <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
          <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
        ";
            } else {
                // line 62
                yield "          ";
                yield $this->getTemplateForMacro("macro_renderCatalog", $context, 62, $this->getSourceContext())->macro_renderCatalog(...[$context]);
                yield "
        ";
            }
            // line 64
            yield "      </div>
    ";
        }
        // line 66
        yield "  </div>
</div>

";
        yield from [];
    }

    // line 1
    public function macro_renderCatalog($͜context = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "context" => $͜context,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            $context["journal3"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 2);
            // line 3
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "items", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                yield "    <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                yield "\">
      <div class=\"item-content\">
        <a href=\"";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 6);
                yield "\" class=\"catalog-title\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 6);
                yield "</a>
        <div class=\"item-assets image-left\">
          <a href=\"";
                // line 8
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 8);
                yield "\" class=\"catalog-image\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                yield ">
            ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "              ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 11
                        yield "                <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "dummy_image", [], "any", false, false, false, 11);
                        yield "\" data-src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                        yield "\" data-image=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 11);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 11);
                            yield " 2x\"";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 11);
                        yield "\" width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 11), "width", [], "any", false, false, false, 11);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 11), "height", [], "any", false, false, false, 11);
                        yield "\" class=\"lazyload\">
              ";
                    } else {
                        // line 13
                        yield "                <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                        yield "\" data-image=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                            yield " 2x\" data-image2x=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                            yield "\"";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 13);
                        yield "\" width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 13), "width", [], "any", false, false, false, 13);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 13), "height", [], "any", false, false, false, 13);
                        yield "\">
              ";
                    }
                    // line 15
                    yield "            ";
                }
                // line 16
                yield "          </a>
          <div class=\"subitems\">
            ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 18));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_item"]) {
                    // line 19
                    yield "              <div class=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "classes", [], "any", false, false, false, 19)], "method", false, false, false, 19);
                    yield " subitem\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "data-image=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 19);
                        yield "\" data-image2x=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "image", [], "any", false, false, false, 19);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "image2x", [], "any", false, false, false, 19);
                        yield " 2x\"";
                    }
                    yield ">
                <a href=\"";
                    // line 20
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "href", [], "any", false, false, false, 20);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "link", [], "any", false, false, false, 20)], "method", false, false, false, 20);
                    yield "><span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["sub_item"], "name", [], "any", false, false, false, 20);
                    yield "</span></a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sub_item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 23) > Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 23)))) {
                    // line 24
                    yield "              <div class=\"subitem view-more\">
                <a href=\"";
                    // line 25
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, false, 25);
                    yield "\"><span>";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "viewMoreText", [], "any", false, false, false, 25);
                    yield "</span></a>
              </div>
            ";
                }
                // line 28
                yield "          </div>
        </div>
      </div>
    </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/catalog.twig";
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
        return array (  276 => 28,  268 => 25,  265 => 24,  262 => 23,  249 => 20,  234 => 19,  230 => 18,  226 => 16,  223 => 15,  199 => 13,  175 => 11,  172 => 10,  170 => 9,  164 => 8,  155 => 6,  149 => 4,  144 => 3,  141 => 2,  129 => 1,  121 => 66,  117 => 64,  111 => 62,  103 => 57,  100 => 56,  98 => 55,  93 => 54,  80 => 44,  73 => 42,  66 => 41,  64 => 40,  61 => 39,  55 => 37,  53 => 36,  47 => 35,  42 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/catalog.twig", "");
    }
}
