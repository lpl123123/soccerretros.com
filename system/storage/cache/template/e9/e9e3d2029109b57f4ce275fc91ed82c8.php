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

/* journal3/template/journal3/module/slider.twig */
class __TwigTemplate_46e27b5266ce6e822bbaf60a9ceafd4c extends Template
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
        yield "<div class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 1);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  <div class=\"slider-wrapper ";
        // line 3
        if ((($context["slidesPerView"] ?? null) == "auto")) {
            yield "slider-carousel";
        }
        yield "\">
    <div class=\"swiper-container\" ";
        // line 4
        if ((($tmp = ($context["syncWith"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-sync-with=\"";
            yield ($context["syncWith"] ?? null);
            yield "\"";
        }
        yield ">
      <div class=\"journal-loading\"><em class=\"fa fa-spinner fa-spin\"></em></div>
      ";
        // line 6
        if ((($tmp = ($context["parallax_bg"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        ";
            if ((($tmp = ($context["lazyLoad"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield "          <div class=\"parallax-bg lazyload-bg lazyload\" data-swiper-parallax=\"";
                yield Twig\Extension\CoreExtension::trim(($context["parallaxValue"] ?? null), "px");
                yield "\"></div>
        ";
            } else {
                // line 10
                yield "          <div class=\"parallax-bg lazyload-bg\" data-swiper-parallax=\"";
                yield Twig\Extension\CoreExtension::trim(($context["parallaxValue"] ?? null), "px");
                yield "\"></div>
        ";
            }
            // line 12
            yield "      ";
        }
        // line 13
        yield "      <div class=\"swiper-wrapper\" data-options='";
        yield json_encode(($context["options"] ?? null), Twig\Extension\CoreExtension::constant("JSON_FORCE_OBJECT"));
        yield "'>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            yield "          <div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 15)], "method", false, false, false, 15);
            yield " ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "swiper-slide-active";
            }
            yield "\">
            <div class=\"slide-content slide-content-";
            // line 16
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 16) == "custom")) ? ("image") : (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 16)));
            yield "\" ";
            if ((($tmp = ($context["slideParallaxOffsetX"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-swiper-parallax-x=\"";
                yield ($context["slideParallaxOffsetX"] ?? null);
                yield "\"";
            }
            yield " ";
            if ((($tmp = ($context["slideParallaxOffsetY"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-swiper-parallax-y=\"";
                yield ($context["slideParallaxOffsetY"] ?? null);
                yield "\"";
            }
            yield " ";
            if ((($tmp = ($context["slideParallaxOpacity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-swiper-parallax-opacity=\"";
                yield ($context["slideParallaxOpacity"] ?? null);
                yield "\"";
            }
            yield " ";
            if ((($tmp = ($context["slideParallaxScale"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-swiper-parallax-scale=\"";
                yield ($context["slideParallaxScale"] ?? null);
                yield "\"";
            }
            yield " ";
            if ((($tmp = ($context["slideParallaxDuration"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-swiper-parallax-duration=\"";
                yield ($context["slideParallaxDuration"] ?? null);
                yield "\"";
            }
            yield ">
              ";
            // line 17
            if ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17) == "image") || (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17) == "category")) || (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 17) == "product"))) {
                // line 18
                yield "                ";
                if ((($context["lazyLoad"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 18))) {
                    // line 19
                    yield "                  <img class=\"lazyload\" src=\"";
                    yield ($context["lazyload_placeholder"] ?? null);
                    yield "\" data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 19);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 19);
                    yield " 2x\" width=\"";
                    yield ($context["width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["height"] ?? null);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 19);
                    yield "\"/>
                ";
                } else {
                    // line 21
                    yield "                  <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                    yield "\" srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 21);
                    yield " 2x\" width=\"";
                    yield ($context["width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["height"] ?? null);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 21);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 21);
                    yield "\"/>
                ";
                }
                // line 23
                yield "              ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 23) == "video")) {
                // line 24
                yield "                <video autoplay playsinline muted data-src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 24);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "poster=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 24);
                    yield "\"";
                }
                yield "></video>
              ";
            }
            // line 26
            yield "
              ";
            // line 27
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 27), "href", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 28
                yield "                <a class=\"slide-link\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28), "href", [], "any", false, false, false, 28);
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 28)], "method", false, false, false, 28);
                yield " aria-hidden=\"true\" tabindex=\"-1\"></a>
              ";
            }
            // line 30
            yield "
              ";
            // line 31
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 32
                yield "              <div class=\"slide-cols\">
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(["left", "right"]);
                foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                    // line 34
                    yield "                  ";
                    if ((($tmp = (($_v0 = $context["item"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[("items_" . $context["col"])] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 35
                        yield "                    <div class=\"slide-col slide-col-";
                        yield $context["col"];
                        yield "\" ";
                        if ((($tmp = ($context["colParallaxOffsetX"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-x=\"";
                            yield ($context["colParallaxOffsetX"] ?? null);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = ($context["colParallaxOffsetY"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-y=\"";
                            yield ($context["colParallaxOffsetY"] ?? null);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = ($context["colParallaxOpacity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-opacity=\"";
                            yield ($context["colParallaxOpacity"] ?? null);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = ($context["colParallaxScale"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-scale=\"";
                            yield ($context["colParallaxScale"] ?? null);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = ($context["colParallaxDuration"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-duration=\"";
                            yield ($context["colParallaxDuration"] ?? null);
                            yield "\"";
                        }
                        yield ">

                      <div class=\"slide-layers\">
                        ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = $context["item"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[("items_" . $context["col"])] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 39
                            yield "                          ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 39) == "text")) {
                                // line 40
                                yield "                            <div class=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 40)], "method", false, false, false, 40);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-x=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 40);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-y=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 40);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-opacity=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 40);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-scale=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 40);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-duration=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 40);
                                    yield "\"";
                                }
                                yield ">
                              <div class=\"slide-text-item\"><span>";
                                // line 41
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 41);
                                yield "</span></div>
                            </div>
                          ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 43
$context["subitem"], "type", [], "any", false, false, false, 43) == "svg")) {
                                // line 44
                                yield "                            <div class=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-x=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 44);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-y=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 44);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-opacity=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 44);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-scale=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 44);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-duration=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 44);
                                    yield "\"";
                                }
                                yield ">
                              <div class=\"svg-layer\">";
                                // line 45
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "svgCode", [], "any", false, false, false, 45);
                                yield "</div>
                            </div>
                          ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 47
$context["subitem"], "type", [], "any", false, false, false, 47) == "button")) {
                                // line 48
                                yield "                            <div class=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-x=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 48);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-y=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 48);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-opacity=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 48);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-scale=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 48);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-duration=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 48);
                                    yield "\"";
                                }
                                yield ">
                              <div class=\"slide-button-group\">
                                ";
                                // line 50
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 51
                                    yield "                                  <a class=\"btn slide-button-1\" ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        yield "href=\"";
                                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51);
                                        yield "\" ";
                                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                                        yield " ";
                                    } else {
                                        yield "href=\"javascript:;\"";
                                    }
                                    yield "><span>";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 51);
                                    yield "</span></a>
                                ";
                                }
                                // line 53
                                yield "                                ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 54
                                    yield "                                  <a class=\"btn slide-button-2\" ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 54), "href", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        yield "href=\"";
                                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 54), "href", [], "any", false, false, false, 54);
                                        yield "\" ";
                                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                                        yield " ";
                                    } else {
                                        yield "href=\"javascript:;\"";
                                    }
                                    yield "><span>";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 54);
                                    yield "</span></a>
                                ";
                                }
                                // line 56
                                yield "                              </div>
                            </div>
                          ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 58
$context["subitem"], "type", [], "any", false, false, false, 58) == "image")) {
                                // line 59
                                yield "                            <figure class=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 59)], "method", false, false, false, 59);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-x=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 59);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-y=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 59);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-opacity=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 59);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-scale=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 59);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-duration=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 59);
                                    yield "\"";
                                }
                                yield ">
                              <img class=\"\" src=\"";
                                // line 60
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 60);
                                yield "\" srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 60);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 60);
                                yield " 2x\" alt=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 60);
                                yield "\" width=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 60);
                                yield "\" height=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 60);
                                yield "\">
                              ";
                                // line 61
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 62
                                    yield "                                <figcaption><span>";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 62);
                                    yield "</span></figcaption>
                              ";
                                }
                                // line 64
                                yield "                              ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 64), "href", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 65
                                    yield "                                <a class=\"slide-layer-image-link\" href=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 65), "href", [], "any", false, false, false, 65);
                                    yield "\" ";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 65)], "method", false, false, false, 65);
                                    yield " aria-hidden=\"true\" tabindex=\"-1\"></a>
                              ";
                                }
                                // line 67
                                yield "                              ";
                                if (((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1", [], "any", false, false, false, 67) || CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2", [], "any", false, false, false, 67)) || CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3", [], "any", false, false, false, 67))) {
                                    // line 68
                                    yield "                                <div class=\"hotspot-container\">
                                  ";
                                    // line 69
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 70
                                        yield "                                    ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Type", [], "any", false, false, false, 70) == "link")) {
                                            // line 71
                                            yield "                                      <a href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Link", [], "any", false, false, false, 71), "href", [], "any", false, false, false, 71);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Link", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                                            yield " aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-1\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-1\" title=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Content", [], "any", false, false, false, 71);
                                            yield "\"><span></span></a>
                                    ";
                                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                         // line 72
$context["subitem"], "hotspot1Type", [], "any", false, false, false, 72) == "product")) {
                                            // line 73
                                            yield "                                      <a role=\"button\" aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-1\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-1\" title=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Content", [], "any", false, false, false, 73);
                                            yield "\" ";
                                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Product", [], "any", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                yield "onclick=\"quickview('";
                                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot1Product", [], "any", false, false, false, 73);
                                                yield "')\"";
                                            }
                                            yield "><span></span></a>
                                    ";
                                        }
                                        // line 75
                                        yield "                                  ";
                                    }
                                    // line 76
                                    yield "                                  ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 77
                                        yield "                                    ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Type", [], "any", false, false, false, 77) == "link")) {
                                            // line 78
                                            yield "                                      <a href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Link", [], "any", false, false, false, 78), "href", [], "any", false, false, false, 78);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Link", [], "any", false, false, false, 78)], "method", false, false, false, 78);
                                            yield " aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-2\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-2\" title=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Content", [], "any", false, false, false, 78);
                                            yield "\"><span></span></a>
                                    ";
                                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                         // line 79
$context["subitem"], "hotspot2Type", [], "any", false, false, false, 79) == "product")) {
                                            // line 80
                                            yield "                                      <a role=\"button\" aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-2\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-2\" title=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Content", [], "any", false, false, false, 80);
                                            yield "\" ";
                                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Product", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                yield "onclick=\"quickview('";
                                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot2Product", [], "any", false, false, false, 80);
                                                yield "')\"";
                                            }
                                            yield "><span></span></a>
                                    ";
                                        }
                                        // line 82
                                        yield "                                  ";
                                    }
                                    // line 83
                                    yield "                                  ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 84
                                        yield "                                    ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Type", [], "any", false, false, false, 84) == "link")) {
                                            // line 85
                                            yield "                                      <a href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Link", [], "any", false, false, false, 85), "href", [], "any", false, false, false, 85);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Link", [], "any", false, false, false, 85)], "method", false, false, false, 85);
                                            yield " aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-3\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-3\" title=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Content", [], "any", false, false, false, 85);
                                            yield "\"><span></span></a>
                                    ";
                                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                         // line 86
$context["subitem"], "hotspot3Type", [], "any", false, false, false, 86) == "product")) {
                                            // line 87
                                            yield "                                      <a role=\"button\" aria-hidden=\"true\" tabindex=\"-1\" class=\"hotspot hotspot-3\" data-toggle=\"tooltip-hover\" data-html=\"true\" data-tooltip-class=\"hotspot-tooltip hotspot-tooltip-3\" title=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Content", [], "any", false, false, false, 87);
                                            yield "\" ";
                                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Product", [], "any", false, false, false, 87)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                                yield "onclick=\"quickview('";
                                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "hotspot3Product", [], "any", false, false, false, 87);
                                                yield "')\"";
                                            }
                                            yield "><span></span></a>
                                    ";
                                        }
                                        // line 89
                                        yield "                                  ";
                                    }
                                    // line 90
                                    yield "                                </div>
                              ";
                                }
                                // line 92
                                yield "                            </figure>
                          ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 93
$context["subitem"], "type", [], "any", false, false, false, 93) == "video")) {
                                // line 94
                                yield "                            <div class=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 94)], "method", false, false, false, 94);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-x=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 94);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-y=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 94);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-opacity=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 94);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-scale=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 94);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-duration=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 94);
                                    yield "\"";
                                }
                                yield ">
                              ";
                                // line 95
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "videoType", [], "any", false, false, false, 95) == "html5")) {
                                    // line 96
                                    yield "                                <video class=\"lazyload\" autoplay playsinline muted controls data-src=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 96);
                                    yield "\"></video>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 97
$context["subitem"], "videoType", [], "any", false, false, false, 97) == "youtube")) {
                                    // line 98
                                    yield "                                <iframe class=\"lazyload\" src=\"https://www.youtube.com/embed/";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 98);
                                    yield "?hd=1&wmode=opaque&controls=1&showinfo=0&autoplay=1&mute=1\"></iframe>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 99
$context["subitem"], "videoType", [], "any", false, false, false, 99) == "vimeo")) {
                                    // line 100
                                    yield "                                <iframe class=\"lazyload\" data-src=\"https://player.vimeo.com/video/";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "videoSrc", [], "any", false, false, false, 100);
                                    yield "?autoplay=1&muted=1\"></iframe>
                              ";
                                }
                                // line 102
                                yield "                            </div>
                          ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source,                             // line 103
$context["subitem"], "type", [], "any", false, false, false, 103) == "icon")) {
                                // line 104
                                yield "                            <div class=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 104)], "method", false, false, false, 104);
                                yield "\" ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-x=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 104);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-y=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 104);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-opacity=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 104);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-scale=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 104);
                                    yield "\"";
                                }
                                yield " ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    yield "data-swiper-parallax-duration=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 104);
                                    yield "\"";
                                }
                                yield ">
                              <div class=\"can-rotate\">
                                <span class=\"has-icon\"></span>

                                ";
                                // line 108
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "shapeType", [], "any", false, false, false, 108) == "icon")) {
                                    // line 109
                                    yield "                                ";
                                }
                                // line 110
                                yield "                                ";
                                // line 111
                                yield "                                ";
                                // line 112
                                yield "                                ";
                                // line 113
                                yield "                                ";
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 114
                                    yield "                                  <span class=\"has-text\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 114);
                                    yield "</span>
                                ";
                                }
                                // line 116
                                yield "                              </div>
                            </div>
                          ";
                            }
                            // line 119
                            yield "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 120
                        yield "                      </div>
                    </div>
                  ";
                    }
                    // line 123
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((($_v2 = $context["item"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["items_absolute"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 125
                    yield "                  ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 125) == "icon")) {
                        // line 126
                        yield "                    <div class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 126)], "method", false, false, false, 126);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-x=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetX", [], "any", false, false, false, 126);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-y=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOffsetY", [], "any", false, false, false, 126);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-opacity=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxOpacity", [], "any", false, false, false, 126);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-scale=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxScale", [], "any", false, false, false, 126);
                            yield "\"";
                        }
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "data-swiper-parallax-duration=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "layerParallaxDuration", [], "any", false, false, false, 126);
                            yield "\"";
                        }
                        yield ">
                      <div class=\"can-rotate\">
                        <span class=\"has-icon\"></span>

                        ";
                        // line 130
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "shapeType", [], "any", false, false, false, 130) == "icon")) {
                            // line 131
                            yield "                        ";
                        }
                        // line 132
                        yield "                        ";
                        // line 133
                        yield "                        ";
                        // line 134
                        yield "                        ";
                        // line 135
                        yield "                        ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 136
                            yield "                          <span class=\"has-text\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 136);
                            yield "</span>
                        ";
                        }
                        // line 138
                        yield "                      </div>
                    </div>
                  ";
                    }
                    // line 141
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                yield "              </div>
              ";
            }
            // line 144
            yield "            </div>
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
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        yield "      </div>
      ";
        // line 148
        if ((($context["staticText"] ?? null) || ($context["staticText2"] ?? null))) {
            // line 149
            yield "        <div class=\"static-text-wrapper\">
          ";
            // line 150
            if ((($context["staticText"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 150))) {
                // line 151
                yield "            <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["staticTextLink"] ?? null), "href", [], "any", false, false, false, 151);
                yield "\" class=\"slider-static-text static-text-1\"><span>";
                yield ($context["staticText"] ?? null);
                yield "</span></a>
          ";
            } elseif ((($tmp =             // line 152
($context["staticText"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 153
                yield "            <div class=\"slider-static-text static-text-1\"><span>";
                yield ($context["staticText"] ?? null);
                yield "</span></div>
          ";
            }
            // line 155
            yield "          ";
            if ((($context["static2Text"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 155))) {
                // line 156
                yield "            <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["static2TextLink"] ?? null), "href", [], "any", false, false, false, 156);
                yield "\" class=\"slider-static-text static-text-2\"><span>";
                yield ($context["static2Text"] ?? null);
                yield "</span></a>
          ";
            } elseif ((($tmp =             // line 157
($context["static2Text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 158
                yield "            <div class=\"slider-static-text static-text-2\"><span>";
                yield ($context["static2Text"] ?? null);
                yield "</span></div>
          ";
            }
            // line 160
            yield "        </div>
      ";
        }
        // line 162
        yield "    </div>
    ";
        // line 163
        if ((($tmp = ($context["buttonsStatus"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "      <div class=\"swiper-buttons slider-navigation\">
        <div class=\"swiper-button-prev\"></div>
        <div class=\"swiper-button-next\"></div>
      </div>
    ";
        }
        // line 169
        yield "    ";
        if ((($context["pagination"] ?? null) != "none")) {
            // line 170
            yield "      <div class=\"swiper-pagination-wrapper\">
        <div class=\"swiper-pagination ";
            // line 171
            if (((($context["pagination"] ?? null) == "bullets") && (($context["bulletsType"] ?? null) == "dots"))) {
                yield "swiper-pagination-dots";
            }
            yield "\"></div>
      </div>
    ";
        }
        // line 174
        yield "    ";
        if ((($context["autoplay"] ?? null) && (($context["timerPlacement"] ?? null) == "slider"))) {
            // line 175
            yield "      <div class=\"slider-timer\">
        <div class=\"swiper-timeline\"></div>
      </div>
    ";
        }
        // line 179
        yield "    ";
        if ((($tmp = ($context["scrollbar"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 180
            yield "      <div class=\"swiper-scrollbar\"></div>
    ";
        }
        // line 182
        yield "  </div>
  ";
        // line 183
        if ((($tmp = ($context["thumbnails"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "    <div class=\"slider-thumbs\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
          ";
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 188
                yield "            <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb_classes", [], "any", false, false, false, 188)], "method", false, false, false, 188);
                yield " ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "swiper-slide-active";
                }
                yield "\" data-index=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 188);
                yield "\">
              ";
                // line 189
                if ((($tmp = ($context["lazyLoad"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 190
                    yield "                <img class=\"lazyload\" src=\"";
                    yield ($context["lazyload_thumb_placeholder"] ?? null);
                    yield "\" data-srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 190);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 190);
                    yield " 2x\" width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "width", [], "any", false, false, false, 190);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "height", [], "any", false, false, false, 190);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 190);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 190);
                    yield "\"/>
              ";
                } else {
                    // line 192
                    yield "                <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 192);
                    yield "\" srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 192);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 192);
                    yield " 2x\" width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "width", [], "any", false, false, false, 192);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["thumbnailsDimensions"] ?? null), "height", [], "any", false, false, false, 192);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 192);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 192);
                    yield "\"/>
              ";
                }
                // line 194
                yield "              <div class=\"thumb-text\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumbText", [], "any", false, false, false, 194);
                yield "</div>
              ";
                // line 195
                if ((($context["autoplay"] ?? null) && (($context["timerPlacement"] ?? null) == "thumbs"))) {
                    // line 196
                    yield "                <div class=\"slider-timer\">
                  <div class=\"swiper-timeline\"></div>
                </div>
              ";
                }
                // line 200
                yield "            </div>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 206
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/slider.twig";
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
        return array (  1060 => 206,  1054 => 202,  1039 => 200,  1033 => 196,  1031 => 195,  1026 => 194,  1008 => 192,  990 => 190,  988 => 189,  977 => 188,  960 => 187,  955 => 184,  953 => 183,  950 => 182,  946 => 180,  943 => 179,  937 => 175,  934 => 174,  926 => 171,  923 => 170,  920 => 169,  913 => 164,  911 => 163,  908 => 162,  904 => 160,  898 => 158,  896 => 157,  889 => 156,  886 => 155,  880 => 153,  878 => 152,  871 => 151,  869 => 150,  866 => 149,  864 => 148,  861 => 147,  845 => 144,  841 => 142,  835 => 141,  830 => 138,  824 => 136,  821 => 135,  819 => 134,  817 => 133,  815 => 132,  812 => 131,  810 => 130,  772 => 126,  769 => 125,  764 => 124,  758 => 123,  753 => 120,  747 => 119,  742 => 116,  736 => 114,  733 => 113,  731 => 112,  729 => 111,  727 => 110,  724 => 109,  722 => 108,  684 => 104,  682 => 103,  679 => 102,  673 => 100,  671 => 99,  666 => 98,  664 => 97,  659 => 96,  657 => 95,  622 => 94,  620 => 93,  617 => 92,  613 => 90,  610 => 89,  598 => 87,  596 => 86,  587 => 85,  584 => 84,  581 => 83,  578 => 82,  566 => 80,  564 => 79,  555 => 78,  552 => 77,  549 => 76,  546 => 75,  534 => 73,  532 => 72,  523 => 71,  520 => 70,  518 => 69,  515 => 68,  512 => 67,  504 => 65,  501 => 64,  495 => 62,  493 => 61,  479 => 60,  444 => 59,  442 => 58,  438 => 56,  422 => 54,  419 => 53,  403 => 51,  401 => 50,  365 => 48,  363 => 47,  358 => 45,  323 => 44,  321 => 43,  316 => 41,  281 => 40,  278 => 39,  274 => 38,  237 => 35,  234 => 34,  230 => 33,  227 => 32,  225 => 31,  222 => 30,  214 => 28,  212 => 27,  209 => 26,  197 => 24,  194 => 23,  176 => 21,  158 => 19,  155 => 18,  153 => 17,  119 => 16,  110 => 15,  93 => 14,  88 => 13,  85 => 12,  79 => 10,  73 => 8,  70 => 7,  68 => 6,  59 => 4,  53 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/slider.twig", "");
    }
}
