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

/* journal3/template/journal3/blog/posts.twig */
class __TwigTemplate_8e4eb5ae2d77c7e1323bbe5e4f9a851f extends Template
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
        yield ($context["header"] ?? null);
        yield "
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            yield "  <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            yield "\">
    <span class=\"page-title-text\">
      ";
            // line 5
            yield ($context["heading_title"] ?? null);
            yield "
      ";
            // line 6
            if ((($tmp = ($context["feed_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "        <a class=\"blog-feed\" href=\"";
                yield ($context["feed_url"] ?? null);
                yield "\" target=\"_blank\"><span class=\"feed-text\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogFeedText"], "method", false, false, false, 7);
                yield "</span></a>
      ";
            }
            // line 9
            yield "    </span>
  </h1>
";
        }
        // line 12
        yield ($context["journal3_top"] ?? null);
        yield "
<div class=\"breadcrumbs ";
        // line 13
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 13);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "  </ul>
</div>
<div class=\"container blog-home\">
  <div class=\"row\">";
        // line 21
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\">
      ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            yield "        <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            yield "\">
          ";
            // line 25
            yield ($context["heading_title"] ?? null);
            yield "
          ";
            // line 26
            if ((($tmp = ($context["feed_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 27
                yield "            <a class=\"blog-feed\" href=\"";
                yield ($context["feed_url"] ?? null);
                yield "\" target=\"_blank\"><span class=\"feed-text\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogFeedText"], "method", false, false, false, 27);
                yield "</span></a>
          ";
            }
            // line 29
            yield "        </h1>
      ";
        }
        // line 31
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      ";
        // line 32
        if ((($tmp = ($context["category_description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "      <div class=\"category-description\">";
            yield ($context["category_description"] ?? null);
            yield "</div>
      ";
        }
        // line 35
        yield "      ";
        if ((($tmp = ($context["posts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        <div class=\"main-posts post-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalPostView"], "method", false, false, false, 36);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalPostGridType"], "method", false, false, false, 36);
            yield "-grid\">
          ";
            // line 37
            yield ($context["posts"] ?? null);
            yield "
        </div>
        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
            // line 40
            yield ($context["pagination"] ?? null);
            yield "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 41
            yield ($context["results"] ?? null);
            yield "</div>
        </div>
      ";
        } else {
            // line 44
            yield "        <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 46
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
        </div>
      ";
        }
        // line 49
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 50
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 52
        yield ($context["journal3_rich_snippets"] ?? null);
        yield "
";
        // line 53
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/blog/posts.twig";
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
        return array (  199 => 53,  195 => 52,  190 => 50,  185 => 49,  177 => 46,  171 => 44,  165 => 41,  161 => 40,  155 => 37,  148 => 36,  145 => 35,  139 => 33,  137 => 32,  132 => 31,  128 => 29,  120 => 27,  118 => 26,  114 => 25,  109 => 24,  107 => 23,  102 => 21,  97 => 18,  86 => 16,  82 => 15,  77 => 13,  73 => 12,  68 => 9,  60 => 7,  58 => 6,  54 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/blog/posts.twig", "");
    }
}
