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

/* journal3/template/product/product.twig */
class __TwigTemplate_c04fbc76be403e98644f57650d433fb6 extends Template
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
        // line 66
        yield ($context["header"] ?? null);
        yield "
";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 67) == "top")) {
            // line 68
            yield "  <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 68);
            yield "\"><span class=\"page-title-text\">";
            yield ($context["heading_title"] ?? null);
            yield "</span></h1>
";
        }
        // line 70
        yield "<div class=\"breadcrumbs ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 70);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 73
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 73);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 73);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "  </ul>
</div>
";
        // line 77
        yield ($context["journal3_top"] ?? null);
        yield "
<div id=\"product-product\" class=\"container\">
  <div class=\"row\">";
        // line 79
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 80
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 81
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 82
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 83
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 84
            yield "    ";
        } else {
            // line 85
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 86
            yield "    ";
        }
        // line 87
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 88
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 88) == "default") || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 88))) {
            // line 89
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 89);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 91
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      ";
        // line 92
        yield ($context["journal3_product_tabs_blocks_content_top"] ?? null);
        yield "
      <div class=\"product-info ";
        // line 93
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["journal3_product_classes"] ?? null)], "method", false, false, false, 93);
        yield "\">
        ";
        // line 94
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 95
            yield "        <div class=\"product-left\">
          <div class=\"product-left-wrapper\">
            <div class=\"product-image direction-";
            // line 97
            yield ($context["journal3_images_additional_direction"] ?? null);
            yield " position-";
            yield ($context["journal3_images_additional_position"] ?? null);
            yield "\">
              <div class=\"swiper main-image\" data-options='";
            // line 98
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_carousel"] ?? null)], "method", false, false, false, 98);
            yield "' ";
            yield ($context["journal3_images_style"] ?? null);
            yield ">
                <div class=\"swiper-container\" ";
            // line 99
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 99)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "dir=\"rtl\"";
            }
            yield ">
                  <div class=\"swiper-wrapper\">
                    ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["index"] => $context["image"]) {
                // line 102
                yield "                      <div class=\"swiper-slide\" ";
                if ((($tmp = ($context["journal3_images_gallery"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-gallery=\".lightgallery-product-images\" data-index=\"";
                    yield $context["index"];
                    yield "\"";
                }
                yield ">
                        ";
                // line 103
                if (($context["index"] && ($context["journal3_image_placeholder"] ?? null))) {
                    // line 104
                    yield "                          <img class=\"lazyload\" src=\"";
                    yield ($context["journal3_image_placeholder"] ?? null);
                    yield "\" data-src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 104);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "data-srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 104);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 104);
                        yield " 2x\"";
                    }
                    yield " width=\"";
                    yield ($context["journal3_image_thumb_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["journal3_image_thumb_height"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" data-largeimg=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 104);
                    yield "\"/>
                        ";
                } else {
                    // line 106
                    yield "                          <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 106);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 106);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb2x", [], "any", false, false, false, 106);
                        yield " 2x\"";
                    }
                    yield " width=\"";
                    yield ($context["journal3_image_thumb_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["journal3_image_thumb_height"] ?? null);
                    yield "\" alt=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" title=\"";
                    yield ($context["heading_title"] ?? null);
                    yield "\" data-largeimg=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 106);
                    yield "\"/>
                        ";
                }
                // line 108
                yield "                      </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['index'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            yield "                  </div>
                </div>
                <div class=\"swiper-controls\">
                  <div class=\"swiper-buttons\">
                    <div class=\"swiper-button-prev\"></div>
                    <div class=\"swiper-button-next\"></div>
                  </div>
                  <div class=\"swiper-pagination\"></div>
                </div>
                ";
            // line 119
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "default", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "                  <div class=\"product-labels\">
                    ";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "default", [], "any", false, false, false, 121));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 122
                    yield "                      <span class=\"product-label product-label-";
                    yield $context["id"];
                    yield " product-label-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 122);
                    yield " product-label-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 122);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 122)], "method", false, false, false, 122);
                    yield "\"><strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 122);
                    yield "</strong></span>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['id'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "                  </div>
                ";
            }
            // line 126
            yield "              </div>
              ";
            // line 127
            if ((($tmp = ($context["journal3_images_additional"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 128
                yield "                ";
                if ((($tmp = ($context["journal3_images_additional_carousel"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 129
                    yield "                  <div class=\"swiper additional-images\" data-options='";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_additional_carousel_options"] ?? null)], "method", false, false, false, 129);
                    yield "' ";
                    yield ($context["journal3_images_additional_style"] ?? null);
                    yield ">
                    <div class=\"swiper-container\" ";
                    // line 130
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_rtl", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "dir=\"rtl\"";
                    }
                    yield ">
                      <div class=\"swiper-wrapper\">
                        ";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_images_additional"] ?? null));
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
                    foreach ($context['_seq'] as $context["index"] => $context["image"]) {
                        // line 133
                        yield "                          <div class=\"swiper-slide additional-image ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 133)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "swiper-slide-active";
                        }
                        yield "\" data-index=\"";
                        yield $context["index"];
                        yield "\">
                            <img src=\"";
                        // line 134
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 134);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 134);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 134);
                            yield " 2x\"";
                        }
                        yield " width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.width"], "method", false, false, false, 134);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.height"], "method", false, false, false, 134);
                        yield "\" alt=\"";
                        yield ($context["heading_title"] ?? null);
                        yield "\" title=\"";
                        yield ($context["heading_title"] ?? null);
                        yield "\"/>
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
                    unset($context['_seq'], $context['index'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 137
                    yield "                      </div>
                    </div>
                    <div class=\"swiper-buttons\">
                      <div class=\"swiper-button-prev\"></div>
                      <div class=\"swiper-button-next\"></div>
                    </div>
                    <div class=\"swiper-pagination\"></div>
                  </div>
                ";
                } else {
                    // line 146
                    yield "                  <div class=\"additional-images\">
                    ";
                    // line 147
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_images_additional"] ?? null));
                    foreach ($context['_seq'] as $context["index"] => $context["image"]) {
                        // line 148
                        yield "                      <div class=\"additional-image\" data-index=\"";
                        yield $context["index"];
                        yield "\">
                        <img src=\"";
                        // line 149
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 149);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional", [], "any", false, false, false, 149);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "additional2x", [], "any", false, false, false, 149);
                            yield " 2x\"";
                        }
                        yield " width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.width"], "method", false, false, false, 149);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["image_dimensions_additional.height"], "method", false, false, false, 149);
                        yield "\" alt=\"";
                        yield ($context["heading_title"] ?? null);
                        yield "\" title=\"";
                        yield ($context["heading_title"] ?? null);
                        yield "\"/>
                      </div>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['index'], $context['image'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    yield "                  </div>
                ";
                }
                // line 154
                yield "              ";
            }
            // line 155
            yield "            </div>

            ";
            // line 157
            if ((($tmp = ($context["journal3_images_gallery"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "              <div class=\"lightgallery lightgallery-product-images\" data-images='";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(($context["journal3_images_gallery"] ?? null)));
                yield "' data-options='";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "jsonAttrs", [($context["journal3_images_gallery_options"] ?? null)], "method", false, false, false, 158);
                yield "'></div>
            ";
            }
            // line 160
            yield "
            ";
            // line 161
            yield ($context["journal3_product_tabs_blocks_image"] ?? null);
            yield "

            ";
            // line 163
            if ((((($context["description"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 163)) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescription"], "method", false, false, false, 163)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescriptionPosition"], "method", false, false, false, 163) == "image"))) {
                // line 164
                yield "              <div class=\"description ";
                yield ($context["quickviewExpand"] ?? null);
                yield "\">
                <div class=\"expand-block\">
                  <div class=\"expand-content\">";
                // line 166
                yield ($context["description"] ?? null);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExpandButton"], "method", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 166);
                    yield "\"></a></div>";
                }
                yield "</div>
                </div>
              </div>
            ";
            }
            // line 170
            yield "
            ";
            // line 171
            if (((($context["tags"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 171)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 171) == "image"))) {
                // line 172
                yield "              <div class=\"tags\">
                <span class=\"tags-title\">";
                // line 173
                yield ($context["text_tags"] ?? null);
                yield "</span>
                ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 175
                    yield "                  <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 175);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 175);
                    yield "</a>
                  ";
                    // line 176
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<b>,</b>";
                    }
                    // line 177
                    yield "                ";
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
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                yield "              </div>
            ";
            }
            // line 180
            yield "
          </div>
        </div>
        ";
        }
        // line 184
        yield "        <div class=\"product-right\">
          <div class=\"product-right-wrapper\">
              <div id=\"product\" class=\"product-details\">
                ";
        // line 187
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 188
            yield "                  <div class=\"title page-title\">";
            yield ($context["heading_title"] ?? null);
            yield "</div>
                ";
        }
        // line 190
        yield "
                ";
        // line 191
        yield ($context["journal3_product_tabs_blocks_top"] ?? null);
        yield "

                ";
        // line 193
        if ((((($context["description"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 193)) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescription"], "method", false, false, false, 193)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescriptionPosition"], "method", false, false, false, 193) == "top"))) {
            // line 194
            yield "                  <div class=\"description ";
            yield ($context["quickviewExpand"] ?? null);
            yield "\">
                    <div class=\"expand-block\">
                      <div class=\"expand-content\">";
            // line 196
            yield ($context["description"] ?? null);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExpandButton"], "method", false, false, false, 196)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 196);
                yield "\"></a></div>";
            }
            yield "</div>
                    </div>
                  </div>
                ";
        }
        // line 200
        yield "
                ";
        // line 201
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "group_outside", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 202
            yield "                  <div class=\"product-labels-outside\">
                    ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "group_outside", [], "any", false, false, false, 203));
            foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                // line 204
                yield "                      <span class=\"product-label product-label-";
                yield $context["id"];
                yield " product-label-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 204);
                yield " product-label-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 204);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 204)], "method", false, false, false, 204);
                yield "\"><strong><a class=\"label-link\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 204), "href", [], "any", false, false, false, 204)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 204), "href", [], "any", false, false, false, 204);
                    yield "\"";
                }
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "link", [], "any", false, false, false, 204)], "method", false, false, false, 204);
                yield " aria-hidden=\"true\" tabindex=\"-1\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 204);
                yield "</a></strong></span>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['id'], $context['label'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            yield "                  </div>
                ";
        }
        // line 208
        yield "
                ";
        // line 209
        if ((($context["journal3_product_stats_position"] ?? null) == "default")) {
            // line 210
            yield "                  ";
            yield $this->getTemplateForMacro("macro_productStats", $context, 210, $this->getSourceContext())->macro_productStats(...[$context]);
            yield "
                ";
        }
        // line 212
        yield "
                ";
        // line 213
        if ((($context["review_status"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 213))) {
            // line 214
            yield "                  <div class=\"rating rating-page\">
                    <div class=\"rating-stars\">
                      ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 217
                yield "                        ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 218
                    yield "                          <span class=\"fa fa-stack\">
                    <em class=\"fa fa-star-o fa-stack-1x\"></em>
                  </span>";
                } else {
                    // line 221
                    yield "                          <span class=\"fa fa-stack\">
                    <em class=\"fa fa-star fa-stack-1x\"></em>
                    <em class=\"fa fa-star-o fa-stack-1x\"></em>
                  </span>
                        ";
                }
                // line 226
                yield "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            yield "                    </div>
                    <div class=\"review-links\">
                      <a role=\"button\">";
            // line 229
            yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_reviews"] ?? null)) : (($context["reviews"] ?? null)));
            yield "</a>
                      <b>";
            // line 230
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "RatingSeparator")], "method", false, false, false, 230);
            yield "</b>
                      <a role=\"button\">";
            // line 231
            yield ($context["text_write"] ?? null);
            yield "</a>
                    </div>
                  </div>
                ";
        }
        // line 235
        yield "
                ";
        // line 236
        if ((($tmp = ($context["journal3_product_countdown"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 237
            yield "                  <div class=\"countdown-wrapper\">
                    ";
            // line 238
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 239
                yield "                      <h5 class=\"countdown-title title\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CountdownText")], "method", false, false, false, 239);
                yield "</h5>
                    ";
            }
            // line 241
            yield "                    <div class=\"countdown\" data-date=\"";
            yield ($context["journal3_product_countdown"] ?? null);
            yield "\">
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 242
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownDay"], "method", false, false, false, 242);
            yield "</span></div>
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 243
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownHour"], "method", false, false, false, 243);
            yield "</span></div>
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 244
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownMin"], "method", false, false, false, 244);
            yield "</span></div>
                      <div><em class=\"fa fa-spinner fa-spin\"></em><span>";
            // line 245
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["countdownSec"], "method", false, false, false, 245);
            yield "</span></div>
                    </div>
                  </div>
                ";
        }
        // line 249
        yield "
                ";
        // line 250
        if ((($context["price"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 250))) {
            // line 251
            yield "                  <div class=\"product-price-group\">
                    <div class=\"price-wrapper\">
                      ";
            // line 253
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "price", [], "any", false, false, false, 253)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 254
                yield "                        <div class=\"product-labels-price\">
                          ";
                // line 255
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["journal3_product_labels"] ?? null), "price", [], "any", false, false, false, 255));
                foreach ($context['_seq'] as $context["id"] => $context["label"]) {
                    // line 256
                    yield "                            <span class=\"product-label product-label-";
                    yield $context["id"];
                    yield " product-label-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "display", [], "any", false, false, false, 256);
                    yield " product-label-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "positionDefault", [], "any", false, false, false, 256);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["label"], "classes", [], "any", false, false, false, 256)], "method", false, false, false, 256);
                    yield "\"><strong>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["label"], "label", [], "any", false, false, false, 256);
                    yield "</strong></span>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['id'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 258
                yield "                        </div>
                      ";
            }
            // line 260
            yield "                      <div class=\"price-group\">
                        ";
            // line 261
            if ((($tmp =  !($context["special"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 262
                yield "                          <div class=\"product-price\">";
                yield ($context["price"] ?? null);
                yield "</div>
                        ";
            } else {
                // line 264
                yield "                          <div class=\"product-price-new\">";
                yield ($context["special"] ?? null);
                yield "</div>
                          <div class=\"product-price-old\">";
                // line 265
                yield ($context["price"] ?? null);
                yield "</div>
                        ";
            }
            // line 267
            yield "                      </div>
                      ";
            // line 268
            if ((($tmp = ($context["tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 269
                yield "                        <div class=\"product-tax\">";
                yield ($context["text_tax"] ?? null);
                yield " ";
                yield ($context["tax"] ?? null);
                yield "</div>
                      ";
            }
            // line 271
            yield "                      ";
            if ((($tmp = ($context["points"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                yield "                        <div class=\"product-points\">";
                yield ($context["text_points"] ?? null);
                yield " ";
                yield ($context["points"] ?? null);
                yield "</div>
                      ";
            }
            // line 274
            yield "
                      ";
            // line 275
            if ((($tmp = ($context["discounts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 276
                yield "                        <div class=\"discounts\">
                          ";
                // line 277
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["discounts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 278
                    yield "                            <div class=\"product-discount\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "quantity", [], "any", false, false, false, 278);
                    yield ($context["text_discount"] ?? null);
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["discount"], "price", [], "any", false, false, false, 278);
                    yield "</div>
                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['discount'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 280
                yield "                        </div>
                      ";
            }
            // line 282
            yield "                    </div>
                    ";
            // line 283
            if ((($context["journal3_product_stats_position"] ?? null) == "price")) {
                // line 284
                yield "                      ";
                yield $this->getTemplateForMacro("macro_productStats", $context, 284, $this->getSourceContext())->macro_productStats(...[$context]);
                yield "
                    ";
            }
            // line 286
            yield "                  </div>
                ";
        }
        // line 288
        yield "
                ";
        // line 289
        if ((($tmp = ($context["options"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 290
            yield "                  <div class=\"product-options\">
                    <h3 class=\"options-title title\">";
            // line 291
            yield ($context["text_option"] ?? null);
            yield "</h3>
                    ";
            // line 292
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 293
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 293) == "select")) {
                    // line 294
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 294);
                    yield " ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "OptionsPushSelect")], "method", false, false, false, 294)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "push-option";
                    }
                    yield "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 295
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 295);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 295);
                    yield "</label>
                          <select name=\"option[";
                    // line 296
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    yield "]\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 296);
                    yield "\" class=\"form-control\">
                            <option value=\"\">";
                    // line 297
                    yield ($context["text_select"] ?? null);
                    yield "</option>
                            ";
                    // line 298
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 298));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 299
                        yield "                              <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 299);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 299);
                        yield "
                                ";
                        // line 300
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 300) && ($context["optionPrice"] ?? null))) {
                            // line 301
                            yield "                                  (";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 301);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 301);
                            yield ")
                                ";
                        }
                        // line 302
                        yield " </option>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 304
                    yield "                          </select>
                          ";
                    // line 305
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 306
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 306);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 308
                    yield "                        </div>
                      ";
                }
                // line 310
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 310) == "radio")) {
                    // line 311
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 311);
                    yield " ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "OptionsPushRadio")], "method", false, false, false, 311)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "push-option";
                    }
                    yield "\">
                          <label class=\"control-label\">";
                    // line 312
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 312);
                    yield "</label>
                          <div id=\"input-option";
                    // line 313
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 313);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 313));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 314
                        yield "                              <div class=\"radio\">
                                <label>
                                  <input type=\"radio\" name=\"option[";
                        // line 316
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 316);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 316);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 316);
                        yield "\" aria-label=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 316);
                        yield "\" />
                                  <span class=\"option-wrapper ";
                        // line 317
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 317)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "push-option-image";
                        }
                        yield "\">
                    ";
                        // line 318
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 318);
                            yield "\" srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 318);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 318);
                            yield " 2x\" width=\"";
                            yield ($context["journal3_image_options_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["journal3_image_options_height"] ?? null);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 318);
                            yield " ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318) && ($context["optionPrice"] ?? null))) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 318);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318);
                                yield " ";
                            }
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 318)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "data-toggle=\"tooltip-hover\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 318);
                                yield "\"";
                            }
                            yield " title=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 318);
                            yield " ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318) && ($context["optionPrice"] ?? null))) {
                                yield " (";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 318);
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 318);
                                yield ") ";
                            }
                            yield "\"> ";
                        }
                        // line 319
                        yield "                    <span class=\"option-value\">
                    ";
                        // line 320
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 320);
                        yield "
                      ";
                        // line 321
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 321) && ($context["optionPrice"] ?? null))) {
                            // line 322
                            yield "                        <span class=\"option-price\">
                        (";
                            // line 323
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 323);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 323);
                            yield ")
                      </span>
                      ";
                        }
                        // line 326
                        yield "                  </span>
                  </span>
                                </label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    yield " </div>
                          ";
                    // line 331
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 332
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 332);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 334
                    yield "                        </div>
                      ";
                }
                // line 336
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 336) == "checkbox")) {
                    // line 337
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 337);
                    yield " ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "OptionsPushCheckbox")], "method", false, false, false, 337)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "push-option";
                    }
                    yield "\">
                          <label class=\"control-label\">";
                    // line 338
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 338);
                    yield "</label>
                          <div id=\"input-option";
                    // line 339
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 339);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_value", [], "any", false, false, false, 339));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 340
                        yield "                              <div class=\"checkbox\">
                                <label>
                                  <input type=\"checkbox\" name=\"option[";
                        // line 342
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 342);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "product_option_value_id", [], "any", false, false, false, 342);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 342);
                        yield "\" aria-label=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 342);
                        yield "\" />
                                  <span class=\"option-wrapper ";
                        // line 343
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 343)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "push-option-image";
                        }
                        yield "\">
                    ";
                        // line 344
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344);
                            yield "\" srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image", [], "any", false, false, false, 344);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "image2x", [], "any", false, false, false, 344);
                            yield " 2x\" width=\"";
                            yield ($context["journal3_image_options_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["journal3_image_options_height"] ?? null);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 344);
                            yield " ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344) && ($context["optionPrice"] ?? null))) {
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 344);
                                yield " ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344);
                                yield " ";
                            }
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 344)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "data-toggle=\"tooltip-hover\" data-tooltip-class=\"push-tooltip\" data-placement=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "PushTooltipPosition")], "method", false, false, false, 344);
                                yield "\"";
                            }
                            yield " title=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 344);
                            yield " ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344) && ($context["optionPrice"] ?? null))) {
                                yield " (";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 344);
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 344);
                                yield ") ";
                            }
                            yield "\"> ";
                        }
                        // line 345
                        yield "                    <span class=\"option-value\">
                    ";
                        // line 346
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 346);
                        yield "
                      ";
                        // line 347
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 347) && ($context["optionPrice"] ?? null))) {
                            // line 348
                            yield "                        <span class=\"option-price\">(";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price_prefix", [], "any", false, false, false, 348);
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "price", [], "any", false, false, false, 348);
                            yield ")</span>
                      ";
                        }
                        // line 350
                        yield "                  </span>
                  </span>
                                </label>
                              </div>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 354
                    yield " </div>
                          ";
                    // line 355
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 356
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 356);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 358
                    yield "                        </div>
                      ";
                }
                // line 360
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 360) == "text")) {
                    // line 361
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 361)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 361);
                    yield "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 362
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 362);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 362);
                    yield "</label>
                          <input type=\"text\" name=\"option[";
                    // line 363
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 363);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 363);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 363);
                    yield "\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 363);
                    yield "\" class=\"form-control\" >
                          ";
                    // line 364
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 365
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 365);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 367
                    yield "                        </div>
                      ";
                }
                // line 369
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 369) == "textarea")) {
                    // line 370
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 370);
                    yield "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 371
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 371);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 371);
                    yield "</label>
                          <textarea name=\"option[";
                    // line 372
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 372);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 372);
                    yield "\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 372);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 372);
                    yield "</textarea>
                          ";
                    // line 373
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 374
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 374);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 376
                    yield "                        </div>
                      ";
                }
                // line 378
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 378) == "file")) {
                    // line 379
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 379)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 379);
                    yield "\">
                          <label class=\"control-label\">";
                    // line 380
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 380);
                    yield "</label>
                          ";
                    // line 381
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 382
                        yield "                            <button type=\"button\" id=\"button-upload";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 382);
                        yield "\" data-oc-toggle=\"upload\" data-oc-url=\"";
                        yield ($context["upload"] ?? null);
                        yield "\" data-oc-target=\"#input-option";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 382);
                        yield "\" data-oc-size-max=\"";
                        yield ($context["config_file_max_size"] ?? null);
                        yield "\" data-oc-size-error=\"";
                        yield ($context["error_upload_size"] ?? null);
                        yield "\" class=\"btn btn-default btn-block  upload-btn\"><i class=\"fa-solid fa-upload\"></i> ";
                        yield ($context["button_upload"] ?? null);
                        yield "</button>
                            <input type=\"hidden\" name=\"option[";
                        // line 383
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 383);
                        yield "]\" value=\"\" id=\"input-option";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 383);
                        yield "\"/>
                          ";
                    } else {
                        // line 385
                        yield "                            <button type=\"button\" id=\"button-upload";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 385);
                        yield "\" data-loading-text=\"";
                        yield ($context["text_loading"] ?? null);
                        yield "\" class=\"btn btn-default btn-block  upload-btn\"><i class=\"fa fa-upload\"></i> ";
                        yield ($context["button_upload"] ?? null);
                        yield "</button>
                            <input type=\"hidden\" name=\"option[";
                        // line 386
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                        yield "]\" value=\"\" id=\"input-option";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 386);
                        yield "\" >
                          ";
                    }
                    // line 388
                    yield "                          ";
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 389
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 389);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 391
                    yield "                        </div>
                      ";
                }
                // line 393
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 393) == "date")) {
                    // line 394
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 394)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 394);
                    yield "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 395
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 395);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 395);
                    yield "</label>
                          <div class=\"input-group ";
                    // line 396
                    if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "date";
                    }
                    yield "\" data-picker-class=\"product-options pp-date-time-picker\">
                            <input type=\"";
                    // line 397
                    if ((($tmp =  !($context["journal3_is_oc41"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "text";
                    } else {
                        yield "date";
                    }
                    yield "\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 397);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 397);
                    yield "\" class=\"form-control ";
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "date";
                    }
                    yield "\" />
                            ";
                    // line 398
                    if ((($tmp =  !($context["journal3_is_oc41"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 399
                        yield "                            <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                            ";
                    }
                    // line 403
                    yield "                          </div>
                          ";
                    // line 404
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 405
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 405);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 407
                    yield "                        </div>
                      ";
                }
                // line 409
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 409) == "datetime")) {
                    // line 410
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 410)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 410);
                    yield "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 411
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 411);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 411);
                    yield "</label>
                          <div class=\"input-group ";
                    // line 412
                    if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "datetime";
                    }
                    yield "\" data-picker-class=\"product-options pp-date-time-picker\">
                            <input type=\"";
                    // line 413
                    if ((($tmp =  !($context["journal3_is_oc41"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "text";
                    } else {
                        yield "datetime-local";
                    }
                    yield "\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 413);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 413);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 413);
                    yield "\" class=\"form-control ";
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "datetime";
                    }
                    yield "\" />
                            ";
                    // line 414
                    if ((($tmp =  !($context["journal3_is_oc41"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 415
                        yield "                              <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                            ";
                    }
                    // line 419
                    yield "                          </div>
                          ";
                    // line 420
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 421
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 421);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 423
                    yield "                        </div>
                      ";
                }
                // line 425
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 425) == "time")) {
                    // line 426
                    yield "                        <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["option"], "required", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " product-option-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 426);
                    yield "\">
                          <label class=\"control-label\" for=\"input-option";
                    // line 427
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 427);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 427);
                    yield "</label>
                          <div class=\"input-group ";
                    // line 428
                    if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "time";
                    }
                    yield "\" data-picker-class=\"product-options pp-date-time-picker\">
                            <input type=\"";
                    // line 429
                    if ((($tmp =  !($context["journal3_is_oc41"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "text";
                    } else {
                        yield "time";
                    }
                    yield "\" name=\"option[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 429);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 429);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-option";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 429);
                    yield "\" class=\"form-control ";
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "time";
                    }
                    yield "\" />
                            ";
                    // line 430
                    if ((($tmp =  !($context["journal3_is_oc41"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 431
                        yield "                              <span class=\"input-group-btn\">
                              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span>
                            ";
                    }
                    // line 435
                    yield "                          </div>
                          ";
                    // line 436
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 437
                        yield "                          <div id=\"error-option-";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "product_option_id", [], "any", false, false, false, 437);
                        yield "\" class=\"invalid-feedback\"></div>
                          ";
                    }
                    // line 439
                    yield "                        </div>
                      ";
                }
                // line 441
                yield "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 442
            yield "                  </div>
                ";
        }
        // line 444
        yield "
                ";
        // line 445
        if ((($tmp = ($context["recurrings"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 446
            yield "                  <h3 class=\"title recurring-title\">";
            yield ($context["text_payment_recurring"] ?? null);
            yield "</h3>
                  <div class=\"form-group required\">
                    <select name=\"recurring_id\" class=\"form-control\">
                      <option value=\"\">";
            // line 449
            yield ($context["text_select"] ?? null);
            yield "</option>
                      ";
            // line 450
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 451
                yield "                        <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 451);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 451);
                yield "</option>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recurring'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 453
            yield "                    </select>
                    <div class=\"help-block\" id=\"recurring-description\"></div>
                  </div>
                ";
        }
        // line 457
        yield "
                ";
        // line 458
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 458) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 458)) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 458)) || (($context["journal3_product_extra_buttons"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 458)))) {
            // line 459
            yield "                  <div class=\"button-group-page\">
                    <div class=\"buttons-wrapper\">
                      <div class=\"stepper-group cart-group\">
                        ";
            // line 462
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 462)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 463
                yield "                          <label class=\"control-label\" for=\"product-quantity\">";
                yield ($context["entry_qty"] ?? null);
                yield "</label>
                          <div class=\"stepper\">
                            <button aria-label=\"-\" class=\"fa fa-angle-down\"></button>
                            <input id=\"product-quantity\" type=\"text\" name=\"quantity\" value=\"";
                // line 466
                yield (((($context["journal3_product_quantity"] ?? null) > 0)) ? (($context["journal3_product_quantity"] ?? null)) : (($context["minimum"] ?? null)));
                yield "\" data-minimum=\"";
                yield ($context["minimum"] ?? null);
                yield "\" class=\"form-control\"/>
                            <input id=\"product-id\" type=\"hidden\" name=\"product_id\" value=\"";
                // line 467
                yield ($context["product_id"] ?? null);
                yield "\" />
                            <button aria-label=\"+\" class=\"fa fa-angle-up\"></button>
                          </div>
                          <a id=\"button-cart\" role=\"button\" aria-label=\"";
                // line 470
                yield ($context["journal3_button_cart"] ?? null);
                yield "\" data-loading-text=\"<span class='btn-text'>";
                yield ($context["journal3_button_cart"] ?? null);
                yield "</span>\" class=\"btn btn-cart\" ";
                if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 470) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CartDisplay")], "method", false, false, false, 470) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CartTooltipStatus")], "method", false, false, false, 470))) {
                    yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"pp-cart-tooltip\" data-placement=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CartTooltipPosition")], "method", false, false, false, 470);
                    yield "\" title=\"";
                    yield ($context["journal3_button_cart"] ?? null);
                    yield "\" ";
                }
                yield "><span class=\"btn-text\">";
                yield ($context["journal3_button_cart"] ?? null);
                yield "</span></a>
                        ";
            }
            // line 472
            yield "                      </div>
                      ";
            // line 473
            if ((($context["journal3_product_extra_buttons"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 473))) {
                // line 474
                yield "                        <div class=\"extra-group\">
                          ";
                // line 475
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_product_extra_buttons"] ?? null));
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
                foreach ($context['_seq'] as $context["id"] => $context["extra_button"]) {
                    // line 476
                    yield "                            <a class=\"btn btn-extra btn-extra-";
                    yield $context["id"];
                    yield " btn-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 476);
                    yield "-extra\" ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 476) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(((($context["stylePrefix"] ?? null) . "Extra") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 476)) . "ButtonDisplay")], "method", false, false, false, 476) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "ExtraTooltipStatus")], "method", false, false, false, 476))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"extra-tooltip pp-extra-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "ExtraTooltipPosition")], "method", false, false, false, 476);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 476);
                        yield "\" ";
                    }
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 476) == "quickbuy")) {
                        yield "data-quick-buy";
                    }
                    yield " ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "action", [], "any", false, false, false, 476) == "link") && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 476), "href", [], "any", false, false, false, 476))) {
                        yield "href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 476), "href", [], "any", false, false, false, 476);
                        yield "\" ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "link", [], "any", false, false, false, 476)], "method", false, false, false, 476);
                        yield " data-product_id=\"";
                        yield ($context["product_id"] ?? null);
                        yield "\" ";
                    } else {
                        yield "role=\"button\" ";
                    }
                    yield " data-loading-text=\"<span class='btn-text'>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 476);
                    yield "</span>\"><span class=\"btn-text\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extra_button"], "label", [], "any", false, false, false, 476);
                    yield "</span></a>
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
                unset($context['_seq'], $context['id'], $context['extra_button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 478
                yield "                        </div>
                      ";
            }
            // line 480
            yield "                      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 480) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 480)) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 480))) {
                // line 481
                yield "                        <div class=\"wishlist-compare\">
                          ";
                // line 482
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_options_popup", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 483
                    yield "                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogWishlistStatus"], "method", false, false, false, 483)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 484
                        yield "                              <a class=\"btn btn-wishlist\" role=\"button\" aria-label=\"";
                        yield ($context["button_wishlist"] ?? null);
                        yield "\" ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 484) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "WishlistDisplay")], "method", false, false, false, 484) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "WishlistTooltipStatus")], "method", false, false, false, 484))) {
                            yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"pp-wishlist-tooltip\" data-placement=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "WishlistTooltipPosition")], "method", false, false, false, 484);
                            yield "\" title=\"";
                            yield ($context["button_wishlist"] ?? null);
                            yield "\" ";
                        }
                        yield " onclick=\"parent.wishlist.add(";
                        yield ($context["product_id"] ?? null);
                        yield ");\"><span class=\"btn-text\">";
                        yield ($context["button_wishlist"] ?? null);
                        yield "</span></a>
                            ";
                    }
                    // line 486
                    yield "                            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCompareStatus"], "method", false, false, false, 486)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 487
                        yield "                              <a class=\"btn btn-compare\" role=\"button\" aria-label=\"";
                        yield ($context["button_compare"] ?? null);
                        yield "\" ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 487) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CompareDisplay")], "method", false, false, false, 487) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CompareTooltipStatus")], "method", false, false, false, 487))) {
                            yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"pp-compare-tooltip\" data-placement=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "CompareTooltipPosition")], "method", false, false, false, 487);
                            yield "\" title=\"";
                            yield ($context["button_compare"] ?? null);
                            yield "\" ";
                        }
                        yield " onclick=\"parent.compare.add(";
                        yield ($context["product_id"] ?? null);
                        yield ");\"><span class=\"btn-text\">";
                        yield ($context["button_compare"] ?? null);
                        yield "</span></a>
                            ";
                    }
                    // line 489
                    yield "                          ";
                }
                // line 490
                yield "                        </div>
                        ";
                // line 491
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 491)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 492
                    yield "                          <a class=\"btn btn-more-details\" href=\"";
                    yield ($context["journal3_view_more_url"] ?? null);
                    yield "\" target=\"_top\" ";
                    if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 492) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "MoreDetailsDisplay")], "method", false, false, false, 492) == "icon")) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "MoreDetailsTooltipStatus")], "method", false, false, false, 492))) {
                        yield " data-toggle=\"tooltip-hover\" data-tooltip-class=\"more-details-tooltip\" data-placement=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "MoreDetailsTooltipPosition")], "method", false, false, false, 492);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExtraText"], "method", false, false, false, 492);
                        yield "\" ";
                    }
                    yield "><span class=\"btn-text\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExtraText"], "method", false, false, false, 492);
                    yield "</span></a>
                        ";
                }
                // line 494
                yield "                      ";
            }
            // line 495
            yield "                    </div>
                  </div>
                ";
        }
        // line 498
        yield "
                ";
        // line 499
        if ((($context["minimum"] ?? null) > 1)) {
            // line 500
            yield "                  <div class=\"minimum alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            yield ($context["text_minimum"] ?? null);
            yield "</div>
                ";
        }
        // line 502
        yield "
                ";
        // line 503
        yield ($context["journal3_product_tabs_blocks_details"] ?? null);
        yield "
              </div>
            ";
        // line 505
        yield ($context["journal3_product_tabs_blocks_bottom"] ?? null);
        yield "

            ";
        // line 507
        if (((($context["tags"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 507)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 507) == "details"))) {
            // line 508
            yield "              <div class=\"tags\">
                <span class=\"tags-title\">";
            // line 509
            yield ($context["text_tags"] ?? null);
            yield "</span>
                ";
            // line 510
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 511
                yield "                  <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 511);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 511);
                yield "</a>
                  ";
                // line 512
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 512)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<b>,</b>";
                }
                // line 513
                yield "                ";
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
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 514
            yield "              </div>
            ";
        }
        // line 516
        yield "
";
        // line 531
        yield "          </div>
        </div>
      </div>

      ";
        // line 535
        if ((((($context["description"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_quickview_popup", [], "any", false, false, false, 535)) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescription"], "method", false, false, false, 535)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewDescriptionPosition"], "method", false, false, false, 535) == "default"))) {
            // line 536
            yield "        <div class=\"description ";
            yield ($context["quickviewExpand"] ?? null);
            yield "\">
          <div class=\"expand-block\">
            <div class=\"expand-content\">";
            // line 538
            yield ($context["description"] ?? null);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["quickviewExpandButton"], "method", false, false, false, 538)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 538);
                yield "\"></a></div>";
            }
            yield "</div>
          </div>
        </div>
      ";
        }
        // line 542
        yield "
      ";
        // line 543
        yield ($context["journal3_product_tabs_blocks_default"] ?? null);
        yield "

      ";
        // line 545
        if (((($context["tags"] ?? null) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 545)) && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", [(($context["stylePrefix"] ?? null) . "TagsPosition")], "method", false, false, false, 545) == "default"))) {
            // line 546
            yield "      <div class=\"tags\">
        <span class=\"tags-title\">";
            // line 547
            yield ($context["text_tags"] ?? null);
            yield "</span>
        ";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["tags"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 549
                yield "          <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 549);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 549);
                yield "</a>
          ";
                // line 550
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 550)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<b>,</b>";
                }
                // line 551
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 552
            yield "      </div>
      ";
        }
        // line 554
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 555
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script>
  // calculate vertical images height
  (function () {
    const \$img = document.querySelector('.direction-vertical .main-image .swiper-slide img');
    const \$ad = document.querySelector('.direction-vertical .additional-images');

    if (\$img && \$ad) {
      \$ad.style.height = \$img.offsetHeight + 'px';
    }
  })();
</script>
";
        // line 568
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 569
            yield "<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
";
        }
        // line 590
        yield "<script type=\"text/javascript\"><!--
\$('#button-cart, [data-quick-buy]').on('click', function () {
  var \$btn = \$(this);
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart";
        // line 594
        yield Twig\Extension\CoreExtension::constant("JOURNAL3_ROUTE_SEPARATOR");
        yield "add";
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "&language=";
            yield ($context["language"] ?? null);
        }
        yield "',
\t\ttype: 'post',
\t\tdata: \$(
      '#product .button-group-page input[type=\\'text\\'], #product .button-group-page input[type=\\'hidden\\'], #product .button-group-page input[type=\\'radio\\']:checked, #product .button-group-page input[type=\\'checkbox\\']:checked, #product .button-group-page select, #product .button-group-page textarea, ' +
      '#product .product-options input[type=\\'text\\'], #product .product-options input[type=\\'hidden\\'], #product .product-options input[type=\\'radio\\']:checked, #product .product-options input[type=\\'checkbox\\']:checked, #product .product-options select, #product .product-options textarea, ' +
      '#product .product-options input[type=\\'date\\'], #product .product-options input[type=\\'time\\'], #product .product-options input[type=\\'date-time\\'], ' +
      '#product select[name=\"recurring_id\"]'
    ),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').jbutton('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').jbutton('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');
      \$('#product').find('.is-invalid').removeClass('is-invalid');
      \$('#product').find('.invalid-feedback').removeClass('d-block');

\t\t\tif (json['error']) {
        ";
        // line 616
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 617
            yield "        for (key in json['error']) {
          \$('#input-' + key.replaceAll('_', '')).closest('.form-group').addClass('has-error');
          \$('#error-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
        }
        ";
        } else {
            // line 622
            yield "        if (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');

        ";
        }
        // line 642
        yield "
        try {
          \$('html, body').animate({ scrollTop: \$('.form-group.has-error').offset().top - \$('header').height() - 20 }, 'slow');
        } catch (e) {
        }
\t\t\t}

\t\t\tif (json['success']) {
        if (\$('html').hasClass('popup-options')) {
          parent.\$(\".popup-options .popup-close\").trigger('click');
        }

        if (json['notification']) {
          parent.show_notification(json['notification']);
        } else {
          parent.\$('#content').parent().before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        parent.\$('#cart-total').html(json['total']);
        parent.\$('#cart-items,.cart-badge').html(json['items_count']);

        if (json['items_count']) {
          parent.\$('#cart-items,.cart-badge').removeClass('count-zero');
          parent.\$('#cart').addClass('cart-has-items');
        } else {
          parent.\$('#cart-items,.cart-badge').addClass('count-zero');
          parent.\$('#cart').removeClass('cart-has-items');
        }

        if (Journal['scrollToTop']) {
          parent.\$('html, body').animate({ scrollTop: 0 }, 'slow');
        }

        parent.\$('.cart-content ul').load('index.php?route=common/cart";
        // line 675
        yield Twig\Extension\CoreExtension::constant("JOURNAL3_ROUTE_SEPARATOR");
        yield "info";
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "&language=";
            yield ($context["language"] ?? null);
        }
        yield " ul li');

        if (window.location.href.indexOf('quick_buy=true') !== -1) {
          parent.location.href = Journal['checkoutUrl'];
        }

        if (\$btn.data('quick-buy') !== undefined) {
          location = Journal['checkoutUrl'];
        }

        if (parent.window['_QuickCheckout']) {
          parent.window['_QuickCheckout'].save();
        }

        if (json['redirect']) {
          parent.location.href = json['redirect'];
        }
      }
\t\t},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
\t});
});
//--></script>
";
        // line 700
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 701
            yield "<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
            // line 703
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
            // line 708
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
            // line 714
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
";
        }
        // line 771
        yield "<script type=\"text/javascript\"><!--
";
        // line 772
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 773
            yield "\$(function () {
  \$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
            // line 784
            yield ($context["product_id"] ?? null);
            yield "');

  \$('#button-review').on('click', function() {
    \$.ajax({
      url: 'index.php?route=product/product";
            // line 788
            yield Twig\Extension\CoreExtension::constant("JOURNAL3_ROUTE_SEPARATOR");
            yield "write&product_id=";
            yield ($context["product_id"] ?? null);
            yield "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function() {
        \$('#button-review').button('loading');
      },
      complete: function() {
        \$('#button-review').button('reset');
      },
      success: function(json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });
});
";
        }
        // line 817
        yield "
\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});

\$(document).ready(function () {
  \$('.review-links a').on('click', function () {
    var \$review = \$('#review');
    if (\$review.length) {
      \$('a[href=\"#' + \$review.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$review.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$review.closest('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$review.offset().top - \$('header').height() - 20
      }, 200);
    }
  });

  \$('#read-more-desc').on('click', function () {
    var \$desc = \$('.product-extra-description');
    if (\$desc.length) {
      \$('a[href=\"#' + \$desc.closest('.module-item').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$desc.closest('.tab-pane').attr('id') + '\"]').trigger('click');
      \$('a[href=\"#' + \$desc.closest('.panel-collapse').attr('id') + '\"]').trigger('click');
      \$desc.find('.expand-block').find('.block-expand.btn').trigger('click');

      \$([document.documentElement, document.body]).animate({
        scrollTop: \$desc.offset().top - \$('header').height() - 20
      }, 200);
    }
  });
});
//--></script>
";
        // line 858
        yield ($context["journal3_rich_snippets"] ?? null);
        yield "

";
        // line 860
        if ((($tmp = ($context["config_gr_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 861
            yield "<script type=\"application/ld+json\">
{
  \"@context\": \"http://schema.org/\",
  \"@type\": \"Product\",
  \"name\": \"";
            // line 865
            yield ($context["heading_title"] ?? null);
            yield "\",
  \"image\": [
     ";
            // line 867
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 868
                yield "      \"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 868);
                yield "\",
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 870
            yield "   ],
  \"description\": \"";
            // line 871
            yield ($context["meta_description"] ?? null);
            yield "\",
  ";
            // line 872
            if ((($context["manufacturer"] ?? null) != "")) {
                // line 873
                yield "  \"brand\": {
    \"@type\": \"Thing\",
    \"name\": \"";
                // line 875
                yield ($context["manufacturer"] ?? null);
                yield "\"
  },
  ";
            }
            // line 878
            yield "  ";
            if ((($tmp = ($context["ptotalreviews"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 879
                yield "  \"aggregateRating\": {
    \"@type\": \"AggregateRating\",
    \"ratingValue\": \"";
                // line 881
                yield ($context["prating"] ?? null);
                yield "\",
    \"reviewCount\": \"";
                // line 882
                yield ($context["ptotalreviews"] ?? null);
                yield "\"
  },
  ";
            }
            // line 885
            yield "  \"offers\": {
    \"@type\": \"Offer\",
    \"priceCurrency\": \"";
            // line 887
            yield ($context["config_currency"] ?? null);
            yield "\",
    \"price\": \"";
            // line 888
            yield ($context["pprice"] ?? null);
            yield "\",
    \"availability\": \"http://schema.org/";
            // line 889
            yield ($context["pstock"] ?? null);
            yield "\"
  ";
            // line 890
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["reviewresults"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 891
                yield "  },
  \"review\": [
  \t";
                // line 893
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["reviewresults"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                    // line 894
                    yield "  \t\t{
\t  \t  \"@type\": \"Review\",
\t      \"author\": \"";
                    // line 896
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "author", [], "any", false, false, false, 896);
                    yield "\",
\t      \"datePublished\": \"";
                    // line 897
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "date", [], "any", false, false, false, 897);
                    yield "\",
\t      \"description\": \"";
                    // line 898
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "text", [], "any", false, false, false, 898);
                    yield "\",
\t      \"name\": \"";
                    // line 899
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "name", [], "any", false, false, false, 899);
                    yield "\",
\t      \"reviewRating\": {
\t        \"@type\": \"Rating\",
\t        \"bestRating\": \"5\",
\t        \"ratingValue\": \"";
                    // line 903
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "rating", [], "any", false, false, false, 903);
                    yield "\",
\t        \"worstRating\": \"1\"
\t      }
\t\t";
                    // line 906
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 906) == true)) {
                        // line 907
                        yield "\t\t},
\t\t";
                    } else {
                        // line 909
                        yield "\t\t}
\t\t";
                    }
                    // line 911
                    yield "\t";
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
                unset($context['_seq'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 912
                yield "  ]
  ";
            } else {
                // line 914
                yield "  }
  ";
            }
            // line 916
            yield "}
</script>
";
            // line 918
            if ((array_key_exists("breadcrumbs", $context) &&  !Twig\Extension\CoreExtension::testEmpty(($context["breadcrumbs"] ?? null)))) {
                // line 919
                yield "<script type=\"application/ld+json\">
{
\"@context\": \"http://schema.org\",
\"@type\": \"BreadcrumbList\",
\"itemListElement\": [
";
                // line 924
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
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
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 925
                    yield "{
\"@type\": \"ListItem\",
\"position\": ";
                    // line 927
                    yield ($context["key"] + 1);
                    yield ",
\"item\": {
\"@id\": \"";
                    // line 929
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["value"], "href", [], "any", false, false, false, 929);
                    yield "\",
\"name\": \"";
                    // line 930
                    yield Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["value"], "text", [], "any", false, false, false, 930));
                    yield "\"
}
}
";
                    // line 933
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 933) == false)) {
                        // line 934
                        yield ",
";
                    }
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
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 937
                yield "]
}
</script>
";
            }
        }
        // line 942
        yield "<script type=\"text/javascript\"> 
var addthis_config = {
   data_track_clickback: false 
}
</script>

";
        // line 948
        yield ($context["footer"] ?? null);
        yield " 
";
        yield from [];
    }

    // line 1
    public function macro_productStats($͜context = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "context" => $͜context,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  <div class=\"product-stats\">
    <ul class=\"list-unstyled\">
      ";
            // line 4
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "        <li class=\"product-stock ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock_class", [], "any", false, false, false, 5);
                yield "\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock_text", [], "any", false, false, false, 5);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_stock_value", [], "any", false, false, false, 5);
                yield "</span></li>
      ";
            }
            // line 7
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield "        <li class=\"product-manufacturer\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_text", [], "any", false, false, false, 8);
                yield ":</b> <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_href", [], "any", false, false, false, 8);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_value", [], "any", false, false, false, 8);
                yield "</a></li>
      ";
            }
            // line 10
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_reward", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "        <li class=\"product-reward\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_reward_text", [], "any", false, false, false, 11);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_reward_value", [], "any", false, false, false, 11);
                yield "</span></li>
      ";
            }
            // line 13
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_model", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 14
                yield "        <li class=\"product-model\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_model_text", [], "any", false, false, false, 14);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_model_value", [], "any", false, false, false, 14);
                yield "</span></li>
      ";
            }
            // line 16
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_weight", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "        <li class=\"product-weight\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_weight_text", [], "any", false, false, false, 17);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_weight_value", [], "any", false, false, false, 17);
                yield "</span></li>
      ";
            }
            // line 19
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_dimensions", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "        <li class=\"product-dimension\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_dimensions_text", [], "any", false, false, false, 20);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_dimensions_value", [], "any", false, false, false, 20);
                yield "</span></li>
      ";
            }
            // line 22
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sku", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "        <li class=\"product-sku\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sku_text", [], "any", false, false, false, 23);
                yield ":</b> <span> ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sku_value", [], "any", false, false, false, 23);
                yield "</span></li>
      ";
            }
            // line 25
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_upc", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "        <li class=\"product-upc\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_upc_text", [], "any", false, false, false, 26);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_upc_value", [], "any", false, false, false, 26);
                yield "</span></li>
      ";
            }
            // line 28
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_ean", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "        <li class=\"product-ean\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_ean_text", [], "any", false, false, false, 29);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_ean_value", [], "any", false, false, false, 29);
                yield "</span></li>
      ";
            }
            // line 31
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_jan", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "        <li class=\"product-jan\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_jan_text", [], "any", false, false, false, 32);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_jan_value", [], "any", false, false, false, 32);
                yield "</span></li>
      ";
            }
            // line 34
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_isbn", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "        <li class=\"product-isbn\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_isbn_text", [], "any", false, false, false, 35);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_isbn_value", [], "any", false, false, false, 35);
                yield "</span></li>
      ";
            }
            // line 37
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_mpn", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "        <li class=\"product-mpn\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_mpn_text", [], "any", false, false, false, 38);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_mpn_value", [], "any", false, false, false, 38);
                yield "</span></li>
      ";
            }
            // line 40
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_location", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "        <li class=\"product-location\"><b>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_location_text", [], "any", false, false, false, 41);
                yield ":</b> <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_location_value", [], "any", false, false, false, 41);
                yield "</span></li>
      ";
            }
            // line 43
            yield "    </ul>
    ";
            // line 44
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer", [], "any", false, false, false, 44) && (CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_display", [], "any", false, false, false, 44) == "image"))) {
                // line 45
                yield "      <div class=\"brand-image product-manufacturer\">
        <a href=\"";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_href", [], "any", false, false, false, 46);
                yield "\">
          ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 48
                    yield "          <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image", [], "any", false, false, false, 48);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image2x", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image", [], "any", false, false, false, 48);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_manufacturer_image2x", [], "any", false, false, false, 48);
                        yield " 2x\"";
                    }
                    yield " alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "manufacturer", [], "any", false, false, false, 48);
                    yield "\" width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 48), "get", ["image_dimensions_manufacturer_logo.width"], "method", false, false, false, 48);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 48), "get", ["image_dimensions_manufacturer_logo.height"], "method", false, false, false, 48);
                    yield "\"/>
        ";
                }
                // line 50
                yield "          <span>";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "manufacturer", [], "any", false, false, false, 50);
                yield "</span>
        </a>
      </div>
    ";
            }
            // line 54
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sold", [], "any", false, false, false, 54) || CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_views", [], "any", false, false, false, 54))) {
                // line 55
                yield "      <div class=\"custom-stats\">
        ";
                // line 56
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sold", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 57
                    yield "          <div class=\"product-sold\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_sold", [], "any", false, false, false, 57);
                    yield "</div>
        ";
                }
                // line 59
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_views", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 60
                    yield "          <div class=\"product-views\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3_product_views", [], "any", false, false, false, 60);
                    yield "</div>
        ";
                }
                // line 62
                yield "      </div>
    ";
            }
            // line 64
            yield "  </div>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/product/product.twig";
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
        return array (  2796 => 64,  2792 => 62,  2786 => 60,  2783 => 59,  2777 => 57,  2775 => 56,  2772 => 55,  2769 => 54,  2761 => 50,  2741 => 48,  2739 => 47,  2735 => 46,  2732 => 45,  2730 => 44,  2727 => 43,  2719 => 41,  2716 => 40,  2708 => 38,  2705 => 37,  2697 => 35,  2694 => 34,  2686 => 32,  2683 => 31,  2675 => 29,  2672 => 28,  2664 => 26,  2661 => 25,  2653 => 23,  2650 => 22,  2642 => 20,  2639 => 19,  2631 => 17,  2628 => 16,  2620 => 14,  2617 => 13,  2609 => 11,  2606 => 10,  2596 => 8,  2593 => 7,  2583 => 5,  2581 => 4,  2577 => 2,  2565 => 1,  2558 => 948,  2550 => 942,  2543 => 937,  2527 => 934,  2525 => 933,  2519 => 930,  2515 => 929,  2510 => 927,  2506 => 925,  2489 => 924,  2482 => 919,  2480 => 918,  2476 => 916,  2472 => 914,  2468 => 912,  2454 => 911,  2450 => 909,  2446 => 907,  2444 => 906,  2438 => 903,  2431 => 899,  2427 => 898,  2423 => 897,  2419 => 896,  2415 => 894,  2398 => 893,  2394 => 891,  2392 => 890,  2388 => 889,  2384 => 888,  2380 => 887,  2376 => 885,  2370 => 882,  2366 => 881,  2362 => 879,  2359 => 878,  2353 => 875,  2349 => 873,  2347 => 872,  2343 => 871,  2340 => 870,  2331 => 868,  2327 => 867,  2322 => 865,  2316 => 861,  2314 => 860,  2309 => 858,  2266 => 817,  2232 => 788,  2225 => 784,  2212 => 773,  2210 => 772,  2207 => 771,  2147 => 714,  2138 => 708,  2130 => 703,  2126 => 701,  2124 => 700,  2091 => 675,  2056 => 642,  2034 => 622,  2027 => 617,  2025 => 616,  1995 => 594,  1989 => 590,  1966 => 569,  1964 => 568,  1948 => 555,  1943 => 554,  1939 => 552,  1925 => 551,  1921 => 550,  1914 => 549,  1897 => 548,  1893 => 547,  1890 => 546,  1888 => 545,  1883 => 543,  1880 => 542,  1868 => 538,  1862 => 536,  1860 => 535,  1854 => 531,  1851 => 516,  1847 => 514,  1833 => 513,  1829 => 512,  1822 => 511,  1805 => 510,  1801 => 509,  1798 => 508,  1796 => 507,  1791 => 505,  1786 => 503,  1783 => 502,  1777 => 500,  1775 => 499,  1772 => 498,  1767 => 495,  1764 => 494,  1748 => 492,  1746 => 491,  1743 => 490,  1740 => 489,  1722 => 487,  1719 => 486,  1701 => 484,  1698 => 483,  1696 => 482,  1693 => 481,  1690 => 480,  1686 => 478,  1639 => 476,  1622 => 475,  1619 => 474,  1617 => 473,  1614 => 472,  1597 => 470,  1591 => 467,  1585 => 466,  1578 => 463,  1576 => 462,  1571 => 459,  1569 => 458,  1566 => 457,  1560 => 453,  1549 => 451,  1545 => 450,  1541 => 449,  1534 => 446,  1532 => 445,  1529 => 444,  1525 => 442,  1519 => 441,  1515 => 439,  1509 => 437,  1507 => 436,  1504 => 435,  1498 => 431,  1496 => 430,  1478 => 429,  1472 => 428,  1466 => 427,  1457 => 426,  1454 => 425,  1450 => 423,  1444 => 421,  1442 => 420,  1439 => 419,  1433 => 415,  1431 => 414,  1413 => 413,  1407 => 412,  1401 => 411,  1392 => 410,  1389 => 409,  1385 => 407,  1379 => 405,  1377 => 404,  1374 => 403,  1368 => 399,  1366 => 398,  1348 => 397,  1342 => 396,  1336 => 395,  1327 => 394,  1324 => 393,  1320 => 391,  1314 => 389,  1311 => 388,  1304 => 386,  1295 => 385,  1288 => 383,  1273 => 382,  1271 => 381,  1267 => 380,  1258 => 379,  1255 => 378,  1251 => 376,  1245 => 374,  1243 => 373,  1233 => 372,  1227 => 371,  1218 => 370,  1215 => 369,  1211 => 367,  1205 => 365,  1203 => 364,  1193 => 363,  1187 => 362,  1178 => 361,  1175 => 360,  1171 => 358,  1165 => 356,  1163 => 355,  1160 => 354,  1150 => 350,  1143 => 348,  1141 => 347,  1137 => 346,  1134 => 345,  1095 => 344,  1089 => 343,  1079 => 342,  1075 => 340,  1069 => 339,  1065 => 338,  1052 => 337,  1049 => 336,  1045 => 334,  1039 => 332,  1037 => 331,  1034 => 330,  1024 => 326,  1017 => 323,  1014 => 322,  1012 => 321,  1008 => 320,  1005 => 319,  966 => 318,  960 => 317,  950 => 316,  946 => 314,  940 => 313,  936 => 312,  923 => 311,  920 => 310,  916 => 308,  910 => 306,  908 => 305,  905 => 304,  898 => 302,  891 => 301,  889 => 300,  882 => 299,  878 => 298,  874 => 297,  868 => 296,  862 => 295,  849 => 294,  846 => 293,  842 => 292,  838 => 291,  835 => 290,  833 => 289,  830 => 288,  826 => 286,  820 => 284,  818 => 283,  815 => 282,  811 => 280,  800 => 278,  796 => 277,  793 => 276,  791 => 275,  788 => 274,  780 => 272,  777 => 271,  769 => 269,  767 => 268,  764 => 267,  759 => 265,  754 => 264,  748 => 262,  746 => 261,  743 => 260,  739 => 258,  722 => 256,  718 => 255,  715 => 254,  713 => 253,  709 => 251,  707 => 250,  704 => 249,  697 => 245,  693 => 244,  689 => 243,  685 => 242,  680 => 241,  674 => 239,  672 => 238,  669 => 237,  667 => 236,  664 => 235,  657 => 231,  653 => 230,  649 => 229,  645 => 227,  639 => 226,  632 => 221,  627 => 218,  624 => 217,  620 => 216,  616 => 214,  614 => 213,  611 => 212,  605 => 210,  603 => 209,  600 => 208,  596 => 206,  571 => 204,  567 => 203,  564 => 202,  562 => 201,  559 => 200,  547 => 196,  541 => 194,  539 => 193,  534 => 191,  531 => 190,  525 => 188,  523 => 187,  518 => 184,  512 => 180,  508 => 178,  494 => 177,  490 => 176,  483 => 175,  466 => 174,  462 => 173,  459 => 172,  457 => 171,  454 => 170,  442 => 166,  436 => 164,  434 => 163,  429 => 161,  426 => 160,  418 => 158,  416 => 157,  412 => 155,  409 => 154,  405 => 152,  380 => 149,  375 => 148,  371 => 147,  368 => 146,  357 => 137,  324 => 134,  315 => 133,  298 => 132,  291 => 130,  284 => 129,  281 => 128,  279 => 127,  276 => 126,  272 => 124,  255 => 122,  251 => 121,  248 => 120,  246 => 119,  235 => 110,  228 => 108,  204 => 106,  178 => 104,  176 => 103,  167 => 102,  163 => 101,  156 => 99,  150 => 98,  144 => 97,  140 => 95,  138 => 94,  134 => 93,  130 => 92,  125 => 91,  117 => 89,  115 => 88,  110 => 87,  107 => 86,  104 => 85,  101 => 84,  98 => 83,  95 => 82,  92 => 81,  90 => 80,  86 => 79,  81 => 77,  77 => 75,  66 => 73,  62 => 72,  56 => 70,  48 => 68,  46 => 67,  42 => 66,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/product/product.twig", "");
    }
}
