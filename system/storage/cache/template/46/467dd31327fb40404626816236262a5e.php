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

/* journal3/template/product/category.twig */
class __TwigTemplate_0a7777cddea4d1cc6af70c259c4b9665 extends Template
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
<div id=\"product-category\" class=\"container\">
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
      ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["categoryPageDescStatus"], "method", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      ";
            if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
                // line 29
                yield "      <div class=\"category-description\">
        ";
                // line 30
                if ((($context["thumb"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["categoryPageCategoryImageStatus"], "method", false, false, false, 30))) {
                    // line 31
                    yield "        <img src=\"";
                    yield ($context["thumb"] ?? null);
                    yield "\" ";
                    if ((($tmp = ($context["thumb2x"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "srcset=\"";
                        yield ($context["thumb"] ?? null);
                        yield " 1x, ";
                        yield ($context["thumb2x"] ?? null);
                        yield " 2x\"";
                    }
                    yield " alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" class=\"category-image\" width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_category.width"], "method", false, false, false, 31);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_category.height"], "method", false, false, false, 31);
                    yield "\"/>
        ";
                }
                // line 33
                yield "        ";
                if ((($context["description"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["categoryPageCategoryDescriptionStatus"], "method", false, false, false, 33))) {
                    // line 34
                    yield "        <div class=\"category-text\">";
                    yield ($context["description"] ?? null);
                    yield "</div>
        ";
                }
                // line 36
                yield "      </div>
      ";
            }
            // line 38
            yield "      ";
        }
        // line 39
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesStatus"], "method", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "      ";
            if ((($tmp = ($context["categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "      <div class=\"refine-categories refine-";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 41);
                yield "\">
      ";
                // line 42
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["refineTitle"], "method", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "      <h3 class=\"refine-title title\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["refineTitleText"], "method", false, false, false, 43);
                    yield "</h3>
      ";
                }
                // line 45
                yield "      ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesGridType"], "method", false, false, false, 45) == "ipr") && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 45) == "carousel"))) {
                    // line 46
                    yield "      <div class=\"swiper\" data-items-per-row='";
                    yield json_encode(CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesItemsPerRow"], "method", false, false, false, 46), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
                    yield "' data-options='";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_carousel"] ?? null)], "method", false, false, false, 46);
                    yield "'>
        <div class=\"swiper-container\" ";
                    // line 47
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "dir=\"rtl\"";
                    }
                    yield ">
          <div class=\"swiper-wrapper ipr-grid\">
            ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 50
                        yield "            <div class=\"refine-item swiper-slide\">
              <a href=\"";
                        // line 51
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 51);
                        yield "\">
                ";
                        // line 52
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 52) != "links")) {
                            // line 53
                            yield "                <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 53);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 53);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 53);
                                yield " 2x\"";
                            }
                            yield " alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 53);
                            yield "\" width=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.width"], "method", false, false, false, 53);
                            yield "\" height=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.height"], "method", false, false, false, 53);
                            yield "\"/>
                ";
                        }
                        // line 55
                        yield "                <span class=\"refine-name\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 55);
                        yield "</span>
              </a>
            </div>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
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
                    // line 68
                    yield "      <div class=\"refine-items no-scroll ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesGridType"], "method", false, false, false, 68);
                    yield "-grid\">
      ";
                    // line 69
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesGridType"], "method", false, false, false, 69) == "auto")) {
                        // line 70
                        yield "        <div class=\"auto-grid-items\">
          ";
                        // line 71
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 72
                            yield "            <div class=\"refine-item\">
              <a href=\"";
                            // line 73
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 73);
                            yield "\">
                ";
                            // line 74
                            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 74) != "links")) {
                                // line 75
                                yield "                  <img src=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 75);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "srcset=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 75);
                                    yield " 1x, ";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 75);
                                    yield " 2x\"";
                                }
                                yield " alt=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 75);
                                yield "\" width=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.width"], "method", false, false, false, 75);
                                yield "\" height=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.height"], "method", false, false, false, 75);
                                yield "\"/>
                ";
                            }
                            // line 77
                            yield "                <span class=\"refine-name\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 77);
                            yield "</span>
              </a>
            </div>
          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 81
                        yield "        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
      ";
                    } else {
                        // line 85
                        yield "        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 86
                            yield "          <div class=\"refine-item\">
            <a href=\"";
                            // line 87
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 87);
                            yield "\">
              ";
                            // line 88
                            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["subcategoriesDisplay"], "method", false, false, false, 88) != "links")) {
                                // line 89
                                yield "                <img src=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 89);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "srcset=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 89);
                                    yield " 1x, ";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "image2x", [], "any", false, false, false, 89);
                                    yield " 2x\"";
                                }
                                yield " alt=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "alt", [], "any", false, false, false, 89);
                                yield "\" width=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.width"], "method", false, false, false, 89);
                                yield "\" height=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_subcategory.height"], "method", false, false, false, 89);
                                yield "\"/>
              ";
                            }
                            // line 91
                            yield "              <span class=\"refine-name\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 91);
                            yield "</span>
            </a>
          </div>
        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 95
                        yield "      ";
                    }
                    // line 96
                    yield "      </div>
      ";
                }
                // line 98
                yield "      </div>
      ";
            }
            // line 100
            yield "      ";
        }
        // line 101
        yield "      <div class=\"main-products-wrapper\">
      ";
        // line 102
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sortBarStatus"], "method", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 104
                yield "      <div class=\"products-filter\">
        <div class=\"grid-list\">
          <button id=\"btn-grid-view\" class=\"view-btn ";
                // line 106
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 106) == "grid")) {
                    yield "active";
                }
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-toggle=\"tooltip-hover\"";
                }
                yield " title=\"";
                yield ($context["button_grid"] ?? null);
                yield "\" data-view=\"grid\" aria-label=\"";
                yield ($context["button_grid"] ?? null);
                yield "\"></button>
          <button id=\"btn-list-view\" class=\"view-btn ";
                // line 107
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 107) == "list")) {
                    yield "active";
                }
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-toggle=\"tooltip-hover\"";
                }
                yield " title=\"";
                yield ($context["button_list"] ?? null);
                yield "\" data-view=\"list\" aria-label=\"";
                yield ($context["button_list"] ?? null);
                yield "\"></button>
          <a href=\"";
                // line 108
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
                // line 112
                yield ($context["text_sort"] ?? null);
                yield "</label>
            <select id=\"input-sort\" class=\"form-control\" data-filter-sort=\"";
                // line 113
                yield ($context["journal3_filter_sort"] ?? null);
                yield "\" data-filter-order=\"";
                yield ($context["journal3_filter_order"] ?? null);
                yield "\">
              ";
                // line 114
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["sorts"]);
                foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                    // line 115
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 115) == Twig\Extension\CoreExtension::sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                        // line 116
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 116);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 116);
                        yield "</option>
              ";
                    } else {
                        // line 118
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 118);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 118);
                        yield "</option>
              ";
                    }
                    // line 120
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['sorts'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 121
                yield "            </select>
          </div>
          <div class=\"input-group input-group-sm per-page\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                // line 124
                yield ($context["text_limit"] ?? null);
                yield "</label>
            <select id=\"input-limit\" class=\"form-control\" data-filter-limit=\"";
                // line 125
                yield ($context["journal3_filter_limit"] ?? null);
                yield "\">
              ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["limits"]);
                foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                    // line 127
                    yield "              ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 127) == ($context["limit"] ?? null))) {
                        // line 128
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 128);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 128);
                        yield "</option>
              ";
                    } else {
                        // line 130
                        yield "              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 130);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 130);
                        yield "</option>
              ";
                    }
                    // line 132
                    yield "              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['limits'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                yield "            </select>
          </div>
        </div>
      </div>
      ";
            }
            // line 138
            yield "      <div class=\"main-products main-products-style product-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductView"], "method", false, false, false, 138);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalProductGridType"], "method", false, false, false, 138);
            yield "-grid\" data-product-count=\"";
            yield ($context["journal3_products_count"] ?? null);
            yield "\">
        ";
            // line 139
            yield ($context["products"] ?? null);
            yield "
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 142
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 143
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        }
        // line 146
        yield "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 147
            yield "      <p>";
            yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 149
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a></div>
      </div>
      ";
        }
        // line 152
        yield "      </div>
      ";
        // line 153
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 154
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 156
        yield ($context["journal3_rich_snippets"] ?? null);
        yield "
";
        // line 157
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
        return "journal3/template/product/category.twig";
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
        return array (  585 => 157,  581 => 156,  576 => 154,  572 => 153,  569 => 152,  561 => 149,  555 => 147,  552 => 146,  546 => 143,  542 => 142,  536 => 139,  527 => 138,  520 => 133,  514 => 132,  506 => 130,  498 => 128,  495 => 127,  491 => 126,  487 => 125,  483 => 124,  478 => 121,  472 => 120,  464 => 118,  456 => 116,  453 => 115,  449 => 114,  443 => 113,  439 => 112,  428 => 108,  414 => 107,  400 => 106,  396 => 104,  393 => 103,  391 => 102,  388 => 101,  385 => 100,  381 => 98,  377 => 96,  374 => 95,  363 => 91,  343 => 89,  341 => 88,  337 => 87,  334 => 86,  329 => 85,  323 => 81,  312 => 77,  292 => 75,  290 => 74,  286 => 73,  283 => 72,  279 => 71,  276 => 70,  274 => 69,  269 => 68,  258 => 59,  247 => 55,  227 => 53,  225 => 52,  221 => 51,  218 => 50,  214 => 49,  207 => 47,  200 => 46,  197 => 45,  191 => 43,  189 => 42,  184 => 41,  181 => 40,  178 => 39,  175 => 38,  171 => 36,  165 => 34,  162 => 33,  140 => 31,  138 => 30,  135 => 29,  132 => 28,  130 => 27,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/product/category.twig", "");
    }
}
