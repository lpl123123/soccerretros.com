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

/* journal3/template/information/sitemap.twig */
class __TwigTemplate_1c779790b6de2c0e0617c12b97f002b4 extends Template
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
            yield "\"><span class=\"page-title-text\">";
            yield ($context["heading_title"] ?? null);
            yield "</span></h1>
";
        }
        // line 5
        yield "<div class=\"breadcrumbs ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "  </ul>
</div>
";
        // line 12
        yield ($context["journal3_top"] ?? null);
        yield "
<div id=\"information-sitemap\" class=\"container\">
  <div class=\"row\">";
        // line 14
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 17
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 19
            yield "    ";
        } else {
            // line 20
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 21
            yield "    ";
        }
        // line 22
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 26
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <ul>
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 31
            yield "            <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "href", [], "any", false, false, false, 31);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 31);
            yield "</a>
              ";
            // line 32
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "              <ul>
                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                    // line 35
                    yield "                <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "href", [], "any", false, false, false, 35);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 35);
                    yield "</a>
                  ";
                    // line 36
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 37
                        yield "                  <ul>
                    ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                            // line 39
                            yield "                    <li><a href=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "href", [], "any", false, false, false, 39);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 39);
                            yield "</a></li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        yield "                  </ul>
                  ";
                    }
                    // line 43
                    yield "                </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "              </ul>
              ";
            }
            // line 47
            yield "            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "          </ul>
        </div>
        <div class=\"col-sm-6\">
          <ul>
            <li><a href=\"";
        // line 53
        yield ($context["special"] ?? null);
        yield "\">";
        yield ($context["text_special"] ?? null);
        yield "</a></li>
            <li class=\"site-account\"><a href=\"";
        // line 54
        yield ($context["account"] ?? null);
        yield "\">";
        yield ($context["text_account"] ?? null);
        yield "</a>
              <ul>
                <li class=\"site-edit\"><a href=\"";
        // line 56
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
                <li class=\"site-pass\"><a href=\"";
        // line 57
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
                <li class=\"site-address\"><a href=\"";
        // line 58
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
                <li class=\"site-history\"><a href=\"";
        // line 59
        yield ($context["history"] ?? null);
        yield "\">";
        yield ($context["text_history"] ?? null);
        yield "</a></li>
                <li class=\"site-download\"><a href=\"";
        // line 60
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 63
        yield ($context["history"] ?? null);
        yield "\">";
        yield ($context["text_cart"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 64
        yield ($context["checkout"] ?? null);
        yield "\">";
        yield ($context["text_checkout"] ?? null);
        yield "</a></li>
            <li><a href=\"";
        // line 65
        yield ($context["search"] ?? null);
        yield "\">";
        yield ($context["text_search"] ?? null);
        yield "</a></li>
            <li>";
        // line 66
        yield ($context["text_information"] ?? null);
        yield "
              <ul>
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 69
            yield "                <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 69);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 69);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                <li><a href=\"";
        yield ($context["contact"] ?? null);
        yield "\">";
        yield ($context["text_contact"] ?? null);
        yield "</a></li>
              </ul>
            </li>
            ";
        // line 74
        if ((($tmp = ($context["blog_sitemap"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "              <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["blog_sitemap"] ?? null), "href", [], "any", false, false, false, 75);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["blog_sitemap"] ?? null), "name", [], "any", false, false, false, 75);
            yield "</a>
                ";
            // line 76
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["blog_sitemap"] ?? null), "categories", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "                  <ul>
                    ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["blog_sitemap"] ?? null), "categories", [], "any", false, false, false, 78));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 79
                    yield "                      <li><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 79);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79);
                    yield "</a></li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                yield "                  </ul>
                ";
            }
            // line 83
            yield "              </li>
            ";
        }
        // line 85
        yield "          </ul>
        </div>
      </div>
      ";
        // line 88
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 89
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 91
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
        return "journal3/template/information/sitemap.twig";
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
        return array (  351 => 91,  346 => 89,  342 => 88,  337 => 85,  333 => 83,  329 => 81,  318 => 79,  314 => 78,  311 => 77,  309 => 76,  302 => 75,  300 => 74,  291 => 71,  280 => 69,  276 => 68,  271 => 66,  265 => 65,  259 => 64,  253 => 63,  245 => 60,  239 => 59,  233 => 58,  227 => 57,  221 => 56,  214 => 54,  208 => 53,  202 => 49,  195 => 47,  191 => 45,  184 => 43,  180 => 41,  169 => 39,  165 => 38,  162 => 37,  160 => 36,  153 => 35,  149 => 34,  146 => 33,  144 => 32,  137 => 31,  133 => 30,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/information/sitemap.twig", "");
    }
}
