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

/* journal3/template/product/search.twig */
class __TwigTemplate_6d53ae90c564f3af381d027fe6774c6d extends Template
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
<div id=\"product-search\" class=\"container\">
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
      <h2 class=\"title search-criteria-title\">";
        // line 27
        yield ($context["entry_search"] ?? null);
        yield "</h2>
      <div class=\"search-form\">
        <div class=\"inputs\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 30
        yield ($context["search"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["text_keyword"] ?? null);
        yield "\" id=\"input-search\" class=\"form-control\" aria-label=\"";
        yield ($context["text_keyword"] ?? null);
        yield "\" />
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 32
        yield ($context["text_category"] ?? null);
        yield "</option>
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 34
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 34) == ($context["category_id"] ?? null))) {
                // line 35
                yield "            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 35);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 35);
                yield "</option>
            ";
            } else {
                // line 37
                yield "            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "category_id", [], "any", false, false, false, 37);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "name", [], "any", false, false, false, 37);
                yield "</option>
            ";
            }
            // line 39
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_1"], "children", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 40
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 40) == ($context["category_id"] ?? null))) {
                    // line 41
                    yield "            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 41);
                    yield "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 41);
                    yield "</option>
            ";
                } else {
                    // line 43
                    yield "            <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "category_id", [], "any", false, false, false, 43);
                    yield "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "name", [], "any", false, false, false, 43);
                    yield "</option>
            ";
                }
                // line 45
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["category_2"], "children", [], "any", false, false, false, 45));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 46
                    yield "            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 46) == ($context["category_id"] ?? null))) {
                        // line 47
                        yield "            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 47);
                        yield "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 47);
                        yield "</option>
            ";
                    } else {
                        // line 49
                        yield "            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "category_id", [], "any", false, false, false, 49);
                        yield "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category_3"], "name", [], "any", false, false, false, 49);
                        yield "</option>
            ";
                    }
                    // line 51
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['category_3'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category_2'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category_1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "          </select>
        </div>
        <div class=\"checkbox search-category-checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 58
        if ((($tmp = ($context["sub_category"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" checked=\"checked\" />
            ";
        } else {
            // line 61
            yield "            <input type=\"checkbox\" name=\"sub_category\" value=\"1\" />
            ";
        }
        // line 63
        yield "            ";
        yield ($context["text_sub_category"] ?? null);
        yield "</label>
        </div>
        <div class=\"checkbox search-description-checkbox\">
          <label class=\"checkbox-inline\">
            ";
        // line 67
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" checked=\"checked\" />
            ";
        } else {
            // line 70
            yield "              <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"description\" />
            ";
        }
        // line 72
        yield "            ";
        yield ($context["entry_description"] ?? null);
        yield "</label>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><button id=\"button-search\" class=\"btn btn-primary\"><span>";
        // line 76
        yield ($context["button_search"] ?? null);
        yield "</span></button></div>
      </div>
      <h2 class=\"title search-products-title\">";
        // line 78
        yield ($context["text_search"] ?? null);
        yield "</h2>
      <div class=\"main-products-wrapper\">
      ";
        // line 80
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 81
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sortBarStatus"], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "      <div class=\"products-filter\">
        <div class=\"grid-list\">
          <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 84
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 84) == "grid")) {
                    yield "active";
                }
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-toggle=\"tooltip-hover\"";
                }
                yield " title=\"";
                yield ($context["button_grid"] ?? null);
                yield "\" data-view=\"grid\" aria-label=\"";
                yield ($context["button_grid"] ?? null);
                yield "\"></button>
          <button id=\"btn-list-view\" class=\"view-btn ";
                // line 85
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 85) == "list")) {
                    yield "active";
                }
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-toggle=\"tooltip-hover\"";
                }
                yield " title=\"";
                yield ($context["button_list"] ?? null);
                yield "\" data-view=\"list\" aria-label=\"";
                yield ($context["button_list"] ?? null);
                yield "\"></button>
          <a href=\"";
                // line 86
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
                // line 90
                yield ($context["text_sort"] ?? null);
                yield "</label>
            <select id=\"input-sort\" class=\"form-control\" data-filter-sort=\"";
                // line 91
                yield ($context["journal3_filter_sort"] ?? null);
                yield "\" data-filter-order=\"";
                yield ($context["journal3_filter_order"] ?? null);
                yield "\">
              ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 93
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 93) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 94
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 94);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 94);
                        yield "</option>
              ";
                    } else {
                        // line 96
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 96);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 96);
                        yield "</option>
              ";
                    }
                    // line 98
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "            </select>
          </div>
          <div class=\"input-group input-group-sm per-page\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 102
                yield ($context["text_limit"] ?? null);
                yield "</label>
            <select id=\"input-limit\" class=\"form-control\" data-filter-limit=\"";
                // line 103
                yield ($context["journal3_filter_limit"] ?? null);
                yield "\">
              ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 105
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 105) == ($context["limit"] ?? null))) {
                        // line 106
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 106);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 106);
                        yield "</option>
              ";
                    } else {
                        // line 108
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 108);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 108);
                        yield "</option>
              ";
                    }
                    // line 110
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                yield "            </select>
          </div>
        </div>
      </div>
      ";
            }
            // line 116
            yield "      <div class=\"main-products main-products-style product-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 116);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductGridType"], "method", false, false, false, 116);
            yield "-grid\">
        ";
            // line 117
            yield ($context["products"] ?? null);
            yield "
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 120
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 121
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 124
            yield "      <p>";
            yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 126
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      </div>
      ";
        }
        // line 129
        yield "      </div>
      ";
        // line 130
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 131
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
  ";
        // line 135
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "  url = 'index.php?route=product/search&language=";
            yield ($context["language"] ?? null);
            yield "';
  ";
        } else {
            // line 138
            yield "  url = 'index.php?route=product/search';
  ";
        }
        // line 140
        yield "
\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 184
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
        return "journal3/template/product/search.twig";
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
        return array (  535 => 184,  489 => 140,  485 => 138,  479 => 136,  477 => 135,  470 => 131,  466 => 130,  463 => 129,  455 => 126,  449 => 124,  443 => 121,  439 => 120,  433 => 117,  426 => 116,  419 => 111,  413 => 110,  405 => 108,  397 => 106,  394 => 105,  390 => 104,  386 => 103,  382 => 102,  377 => 99,  371 => 98,  363 => 96,  355 => 94,  352 => 93,  348 => 92,  342 => 91,  338 => 90,  327 => 86,  313 => 85,  299 => 84,  295 => 82,  292 => 81,  290 => 80,  285 => 78,  280 => 76,  272 => 72,  268 => 70,  264 => 68,  262 => 67,  254 => 63,  250 => 61,  246 => 59,  244 => 58,  238 => 54,  232 => 53,  226 => 52,  220 => 51,  212 => 49,  204 => 47,  201 => 46,  196 => 45,  188 => 43,  180 => 41,  177 => 40,  172 => 39,  164 => 37,  156 => 35,  153 => 34,  149 => 33,  145 => 32,  136 => 30,  130 => 27,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/product/search.twig", "");
    }
}
