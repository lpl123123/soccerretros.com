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

/* journal3/template/product/special.twig */
class __TwigTemplate_fdee1a7217aea326239855d82bbc35f7 extends Template
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
<div id=\"product-special\" class=\"container\">
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
      <div class=\"main-products-wrapper\">
      ";
        // line 28
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sortBarStatus"], "method", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "      <div class=\"products-filter\">
        <div class=\"grid-list\">
          <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 32
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 32) == "grid")) {
                    yield "active";
                }
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-toggle=\"tooltip-hover\"";
                }
                yield " title=\"";
                yield ($context["button_grid"] ?? null);
                yield "\" data-view=\"grid\" aria-label=\"";
                yield ($context["button_grid"] ?? null);
                yield "\"></button>
          <button id=\"btn-list-view\" class=\"view-btn ";
                // line 33
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 33) == "list")) {
                    yield "active";
                }
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-toggle=\"tooltip-hover\"";
                }
                yield " title=\"";
                yield ($context["button_list"] ?? null);
                yield "\" data-view=\"list\" aria-label=\"";
                yield ($context["button_list"] ?? null);
                yield "\"></button>
          <a href=\"";
                // line 34
                yield ($context["compare"] ?? null);
                yield "\" id=\"compare-total\" class=\"compare-btn\" title=\"";
                yield ($context["text_compare"] ?? null);
                yield "\">";
                yield ($context["journal3_text_compare"] ?? null);
                yield "</a>
        </div>
        <div class=\"select-group\">
          <div class=\"input-group input-group-sm sort-by\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
                // line 38
                yield ($context["text_sort"] ?? null);
                yield "</label>
            <select id=\"input-sort\" class=\"form-control\" data-filter-sort=\"";
                // line 39
                yield ($context["journal3_filter_sort"] ?? null);
                yield "\" data-filter-order=\"";
                yield ($context["journal3_filter_order"] ?? null);
                yield "\">
              ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 41
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 41) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 42
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 42);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 42);
                        yield "</option>
              ";
                    } else {
                        // line 44
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 44);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 44);
                        yield "</option>
              ";
                    }
                    // line 46
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "            </select>
          </div>
          <div class=\"input-group input-group-sm per-page\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 50
                yield ($context["text_limit"] ?? null);
                yield "</label>
            <select id=\"input-limit\" class=\"form-control\" data-filter-limit=\"";
                // line 51
                yield ($context["journal3_filter_limit"] ?? null);
                yield "\">
              ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 53
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 53) == ($context["limit"] ?? null))) {
                        // line 54
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 54);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 54);
                        yield "</option>
              ";
                    } else {
                        // line 56
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 56);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 56);
                        yield "</option>
              ";
                    }
                    // line 58
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "            </select>
          </div>
        </div>
      </div>
      ";
            }
            // line 64
            yield "      <div class=\"main-products main-products-style product-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 64);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductGridType"], "method", false, false, false, 64);
            yield "-grid\">
        ";
            // line 65
            yield ($context["products"] ?? null);
            yield "
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 68
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 69
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 72
            yield "        <p>";
            yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 74
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      </div>
      ";
        }
        // line 77
        yield "      </div>
      ";
        // line 78
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 79
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 81
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
        return "journal3/template/product/special.twig";
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
        return array (  316 => 81,  311 => 79,  307 => 78,  304 => 77,  296 => 74,  290 => 72,  284 => 69,  280 => 68,  274 => 65,  267 => 64,  260 => 59,  254 => 58,  246 => 56,  238 => 54,  235 => 53,  231 => 52,  227 => 51,  223 => 50,  218 => 47,  212 => 46,  204 => 44,  196 => 42,  193 => 41,  189 => 40,  183 => 39,  179 => 38,  168 => 34,  154 => 33,  140 => 32,  136 => 30,  133 => 29,  131 => 28,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/product/special.twig", "");
    }
}
