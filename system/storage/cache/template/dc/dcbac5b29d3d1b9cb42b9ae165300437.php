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

/* journal3/template/journal3/blog_side_posts.twig */
class __TwigTemplate_7161a113e2d0677e7afda521a38ec2da extends Template
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "            <img src=\"";
                yield ($context["dummy_image"] ?? null);
                yield "\" data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 7);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 7);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 7);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 7));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 7));
                yield "\" class=\"img-responsive lazyload\"/>
          ";
            } else {
                // line 9
                yield "            <img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 9);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 9);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb2x", [], "any", false, false, false, 9);
                    yield " 2x\" ";
                }
                yield " width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 9));
                yield "\" title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 9));
                yield "\" class=\"img-responsive\"/>
          ";
            }
            // line 11
            yield "        </a>
      </div>

      <div class=\"caption\">

        <div class=\"name\"><a href=\"";
            // line 16
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 16);
            yield "</a></div>

        <div class=\"post-stats\">
          <span class=\"p-date\">";
            // line 19
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 19);
            yield "</span>
          <span class=\"p-comment\">";
            // line 20
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 20);
            yield "</span>
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
        return "journal3/template/journal3/blog_side_posts.twig";
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
        return array (  124 => 20,  120 => 19,  112 => 16,  105 => 11,  83 => 9,  59 => 7,  57 => 6,  53 => 5,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/blog_side_posts.twig", "");
    }
}
