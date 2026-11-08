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

/* journal3/template/journal3/categories.twig */
class __TwigTemplate_5ad4e27aafe686a533f9d8c1177874a5 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            yield "  <div class=\"category-layout ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["category"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            yield " ";
            yield ($context["color_scheme_content"] ?? null);
            yield "\">
    <div class=\"category-thumb\">
      ";
            // line 4
            if ((($tmp = ($context["images"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "      <div class=\"image\">
        ";
                // line 6
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 6) && (($context["productsCountTextPosition"] ?? null) == "image"))) {
                    // line 7
                    yield "          <div class=\"product-count product-count-image ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total", [], "any", false, false, false, 7) <= 0)) {
                        yield "product-count-zero";
                    }
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 7);
                    yield "</div>
        ";
                }
                // line 9
                yield "
        <a href=\"";
                // line 10
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 10);
                yield "\">
          ";
                // line 11
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 12
                    yield "            <img src=\"";
                    yield ($context["dummy_image"] ?? null);
                    yield "\" data-src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 12);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "data-srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 12);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 12);
                        yield " 2x\" ";
                    }
                    yield " width=\"";
                    yield ($context["image_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["image_height"] ?? null);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 12);
                    yield "\" class=\"img-responsive lazyload\"/>
          ";
                } else {
                    // line 14
                    yield "            <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb", [], "any", false, false, false, 14);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "thumb2x", [], "any", false, false, false, 14);
                        yield " 2x\" ";
                    }
                    yield " width=\"";
                    yield ($context["image_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["image_height"] ?? null);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14);
                    yield "\" class=\"img-responsive\"/>
          ";
                }
                // line 16
                yield "        </a>
      </div>
      ";
            }
            // line 19
            yield "
      <div class=\"caption\">
        <div class=\"name\"><a href=\"";
            // line 21
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
            yield "</a> ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 21) && (($context["productsCountTextPosition"] ?? null) == "name"))) {
                yield "<div class=\"product-count product-count-name ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total", [], "any", false, false, false, 21) <= 0)) {
                    yield "product-count-zero";
                }
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 21);
                yield "</div>";
            }
            yield "</div>

        ";
            // line 23
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 23) && (($context["productsCountTextPosition"] ?? null) == "below"))) {
                // line 24
                yield "          <div class=\"product-count product-count-below ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total", [], "any", false, false, false, 24) <= 0)) {
                    yield "product-count-zero";
                }
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "total_text", [], "any", false, false, false, 24);
                yield "</div>
        ";
            }
            // line 26
            yield "
        <div class=\"description\">";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 27);
            yield "</div>

        ";
            // line 29
            if ((($tmp = ($context["viewMoreText"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "        <div class=\"button-group\">
          <a class=\"btn btn-view-more\" href=\"";
                // line 31
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 31);
                yield "\" ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 31) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["CategoryButtonDisplay", $context], "method", false, false, false, 31) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["CategoryButtonTooltipStatus", $context], "method", false, false, false, 31))) {
                    yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                    yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-categories-" . ($context["module_id"] ?? null)) . " module-categories-grid")) : ("category-grid"));
                    yield " view-more-tooltip\" data-placement=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["CategoryButtonTooltipPosition", $context], "method", false, false, false, 31);
                    yield "\"";
                }
                yield " title=\"";
                yield ($context["viewMoreText"] ?? null);
                yield "\">
            <span class=\"btn-text\">";
                // line 32
                yield ($context["viewMoreText"] ?? null);
                yield "</span>
          </a>
        </div>
        ";
            }
            // line 36
            yield "      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/categories.twig";
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
        return array (  198 => 36,  191 => 32,  177 => 31,  174 => 30,  172 => 29,  167 => 27,  164 => 26,  154 => 24,  152 => 23,  135 => 21,  131 => 19,  126 => 16,  104 => 14,  80 => 12,  78 => 11,  74 => 10,  71 => 9,  61 => 7,  59 => 6,  56 => 5,  54 => 4,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/categories.twig", "");
    }
}
