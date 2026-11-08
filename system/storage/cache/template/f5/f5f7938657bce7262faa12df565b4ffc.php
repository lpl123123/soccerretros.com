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

/* journal3/template/journal3/blog_posts.twig */
class __TwigTemplate_9cdb8f298567845fb05305f7347d8347 extends Template
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
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            yield "  <div class=\"post-layout ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["post"], "classes", [], "any", false, false, false, 2)], "method", false, false, false, 2);
            yield "\">
    <div class=\"post-thumb\">
      <div class=\"image\">
        <a href=\"";
            // line 5
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 5);
            yield "\">
          ";
            // line 6
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["datePosition"], "method", false, false, false, 6) == "image")) {
                // line 7
                yield "            <span class=\"p-date p-date-image\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 7);
                yield "</span>
          ";
            }
            // line 9
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "            <img src=\"";
                yield ($context["dummy_image"] ?? null);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 10);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 10);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 10);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 10));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 10));
                yield "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 12
                yield "            <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 12);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 12);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 12);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 12));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 12));
                yield "\" class=\"img-responsive\"/>
          ";
            }
            // line 14
            yield "        </a>
      </div>

      <div class=\"caption\">

        <div class=\"post-stats\">
          <span class=\"p-author\">";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 20);
            yield "</span>
          ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["datePosition"], "method", false, false, false, 21) == "default")) {
                // line 22
                yield "          <span class=\"p-date p-date-default\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 22);
                yield "</span>
          ";
            }
            // line 24
            yield "          <span class=\"p-comment\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 24);
            yield "</span>
          <span class=\"p-view\">";
            // line 25
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, false, 25);
            yield "</span>
        </div>

        <div class=\"name\"><a href=\"";
            // line 28
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 28);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 28);
            yield "</a></div>

        <div class=\"description\">";
            // line 30
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 30);
            yield "</div>

        <div class=\"button-group\">
          <a class=\"btn btn-read-more\" href=\"";
            // line 33
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 33);
            yield "\" ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 33) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["PostGridButtonDisplay", $context], "method", false, false, false, 33) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["PostGridButtonTooltipStatus", $context], "method", false, false, false, 33))) {
                yield "  data-toggle=\"tooltip-hover\" data-tooltip-class=\"";
                yield (((($tmp = ($context["module_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((("module-blog_posts-" . ($context["module_id"] ?? null)) . " module-blog_posts-grid")) : ("post-grid"));
                yield " read-more-tooltip\" data-placement=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "getIn", ["PostGridButtonTooltipPosition", $context], "method", false, false, false, 33);
                yield "\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogReadMoreButtonText"], "method", false, false, false, 33);
                yield "\" ";
            }
            yield ">
            <span class=\"btn-text\">";
            // line 34
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogReadMoreButtonText"], "method", false, false, false, 34);
            yield "</span>
          </a>
        </div>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/blog_posts.twig";
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
        return array (  172 => 34,  158 => 33,  152 => 30,  145 => 28,  139 => 25,  134 => 24,  128 => 22,  126 => 21,  122 => 20,  114 => 14,  92 => 12,  68 => 10,  65 => 9,  59 => 7,  57 => 6,  53 => 5,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/blog_posts.twig", "");
    }
}
