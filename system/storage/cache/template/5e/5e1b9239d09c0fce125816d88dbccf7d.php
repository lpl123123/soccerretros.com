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

/* journal3/template/journal3/module/banners_grid.twig */
class __TwigTemplate_186fc6656207e1831370dbb744f9fc21 extends Template
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
  ";
        // line 3
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 6
        yield "  <div class=\"module-body\">
    <div class=\"banners-grid no-scroll ";
        // line 7
        if ((($context["gridType"] ?? null) == "auto")) {
            yield "auto-grid";
        }
        yield "\">
      ";
        // line 8
        if ((($context["gridType"] ?? null) == "auto")) {
            // line 9
            yield "        <div class=\"banners-wrapper auto-grid-items\">
          ";
            // line 10
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
                // line 11
                yield "            <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 11)], "method", false, false, false, 11);
                yield "\">
              <div class=\"slide-content slide-content-";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 12);
                yield "\">
                ";
                // line 13
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "image") || (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "category")) || (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 13) == "product"))) {
                    // line 14
                    yield "                  ";
                    if ((($context["lazyLoad"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14))) {
                        // line 15
                        yield "                    <img class=\"lazyload\" src=\"";
                        yield ($context["lazyload_placeholder"] ?? null);
                        yield "\" data-srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 15);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 15);
                        yield " 2x\" width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 15);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 15);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 15);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 15);
                        yield "\"/>
                  ";
                    } else {
                        // line 17
                        yield "                    <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 17);
                        yield "\" srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 17);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 17);
                        yield " 2x\" width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 17);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 17);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 17);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 17);
                        yield "\"/>
                  ";
                    }
                    // line 19
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 19) == "video")) {
                    // line 20
                    yield "                  <video class=\"lazyload\" autoplay playsinline muted loop data-src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 20);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "poster=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoPoster", [], "any", false, false, false, 20);
                        yield "\"";
                    }
                    yield "></video>
                ";
                }
                // line 22
                yield "
                ";
                // line 23
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 23), "href", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 24
                    yield "                  <a class=\"slide-link\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 24), "href", [], "any", false, false, false, 24);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 24)], "method", false, false, false, 24);
                    yield " aria-hidden=\"true\" tabindex=\"-1\"></a>
                ";
                }
                // line 26
                yield "
                ";
                // line 27
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 28
                    yield "                  <div class=\"slide-cols\">
                    ";
                    // line 29
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(["left", "right"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                        // line 30
                        yield "                      ";
                        if ((($tmp = (($_v0 = $context["item"]) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[("items_" . $context["col"])] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 31
                            yield "                        <div class=\"slide-col slide-col-";
                            yield $context["col"];
                            yield "\">
                          <div class=\"slide-layers\">
                            ";
                            // line 33
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((($_v1 = $context["item"]) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[("items_" . $context["col"])] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                                // line 34
                                yield "                              ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 34) == "text")) {
                                    // line 35
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                                    yield "\">
                                  <div class=\"slide-text-layer\">
                                    <div class=\"slide-text-item\"><span>";
                                    // line 37
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 37);
                                    yield "</span></div>
                                  </div>
                                </div>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 40
$context["subitem"], "type", [], "any", false, false, false, 40) == "svg")) {
                                    // line 41
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 41)], "method", false, false, false, 41);
                                    yield "\">
                                  <div class=\"svg-layer\">";
                                    // line 42
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "svgCode", [], "any", false, false, false, 42);
                                    yield "</div>
                                </div>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 44
$context["subitem"], "type", [], "any", false, false, false, 44) == "button")) {
                                    // line 45
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 45)], "method", false, false, false, 45);
                                    yield "\">
                                  <div class=\"slide-button-group\">
                                    ";
                                    // line 47
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 48
                                        yield "                                      <a class=\"btn slide-button-1\" ";
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield "href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 48), "href", [], "any", false, false, false, 48);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 48)], "method", false, false, false, 48);
                                            yield " ";
                                        } else {
                                            yield "href=\"javascript:;\"";
                                        }
                                        yield "><span>";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 48);
                                        yield "</span></a>
                                    ";
                                    }
                                    // line 50
                                    yield "                                    ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 51
                                        yield "                                      <a class=\"btn slide-button-2\" ";
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield "href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 51), "href", [], "any", false, false, false, 51);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                                            yield " ";
                                        } else {
                                            yield "href=\"javascript:;\"";
                                        }
                                        yield "><span>";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 51);
                                        yield "</span></a>
                                    ";
                                    }
                                    // line 53
                                    yield "                                  </div>
                                </div>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 55
$context["subitem"], "type", [], "any", false, false, false, 55) == "image")) {
                                    // line 56
                                    yield "                                <figure class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 56)], "method", false, false, false, 56);
                                    yield "\">
                                  <img class=\"\" src=\"";
                                    // line 57
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 57);
                                    yield "\" srcset=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 57);
                                    yield " 1x, ";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 57);
                                    yield " 2x\" alt=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 57);
                                    yield "\" width=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 57);
                                    yield "\" height=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 57);
                                    yield "\"/>
                                  ";
                                    // line 58
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 59
                                        yield "                                    <figcaption><span>";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 59);
                                        yield "</span></figcaption>
                                  ";
                                    }
                                    // line 61
                                    yield "                                  ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 61), "href", [], "any", false, false, false, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 62
                                        yield "                                    <a class=\"slide-layer-image-link\" href=\"";
                                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 62), "href", [], "any", false, false, false, 62);
                                        yield "\" ";
                                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                                        yield " aria-hidden=\"true\" tabindex=\"-1\"></a>
                                  ";
                                    }
                                    // line 64
                                    yield "                                </figure>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 65
$context["subitem"], "type", [], "any", false, false, false, 65) == "products")) {
                                    // line 66
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 66)], "method", false, false, false, 66);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "products", [], "any", false, false, false, 66);
                                    yield "</div>
                              ";
                                }
                                // line 68
                                yield "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 69
                            yield "                          </div>
                        </div>
                      ";
                        }
                        // line 72
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    yield "                  </div>
                  ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v2 = $context["item"]) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2["items_absolute"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 75
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 75) == "icon")) {
                            // line 76
                            yield "                      <div class=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 76)], "method", false, false, false, 76);
                            yield "\">
                        <div class=\"can-rotate\">
                          <span class=\"has-icon\"></span>
                          ";
                            // line 79
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 80
                                yield "                            <span class=\"has-text\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 80);
                                yield "</span>
                          ";
                            }
                            // line 82
                            yield "                        </div>
                      </div>
                    ";
                        }
                        // line 85
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    yield "                ";
                }
                // line 87
                yield "              </div>
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
            // line 90
            yield "        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\">
          <div class=\"auto-carousel-thumb\"></div>
          <div class=\"auto-carousel-fill\"></div>
        </div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\">
          <div class=\"auto-carousel-prev\"><span></span></div>
          <div class=\"auto-carousel-next\"><span></span></div>
        </div>
      ";
        } else {
            // line 100
            yield "        <div class=\"banners-wrapper flex-grid\">
          ";
            // line 101
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
                // line 102
                yield "            <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 102)], "method", false, false, false, 102);
                yield "\">
              <div class=\"slide-content slide-content-";
                // line 103
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 103);
                yield "\">
                ";
                // line 104
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 104) == "image") || (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 104) == "category")) || (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 104) == "product"))) {
                    // line 105
                    yield "                  ";
                    if ((($context["lazyLoad"] ?? null) ||  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 105))) {
                        // line 106
                        yield "                    <img class=\"lazyload\" src=\"";
                        yield ($context["lazyload_placeholder"] ?? null);
                        yield "\" data-srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 106);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 106);
                        yield " 2x\" width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 106);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 106);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 106);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 106);
                        yield "\"/>
                  ";
                    } else {
                        // line 108
                        yield "                    <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 108);
                        yield "\" srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 108);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 108);
                        yield " 2x\" width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_width", [], "any", false, false, false, 108);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_height", [], "any", false, false, false, 108);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 108);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "alt", [], "any", false, false, false, 108);
                        yield "\"/>
                  ";
                    }
                    // line 110
                    yield "                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 110) == "video")) {
                    // line 111
                    yield "                  <video autoplay playsinline muted data-src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "videoSrc", [], "any", false, false, false, 111);
                    yield "\"></video>
                ";
                }
                // line 113
                yield "
                ";
                // line 114
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 114), "href", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 115
                    yield "                  <a class=\"slide-link\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 115), "href", [], "any", false, false, false, 115);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 115)], "method", false, false, false, 115);
                    yield " aria-hidden=\"true\" tabindex=\"-1\"></a>
                ";
                }
                // line 117
                yield "
                ";
                // line 118
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 119
                    yield "                  <div class=\"slide-cols\">
                    ";
                    // line 120
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(["left", "right"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["col"]) {
                        // line 121
                        yield "                      ";
                        if ((($tmp = (($_v3 = $context["item"]) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[("items_" . $context["col"])] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 122
                            yield "                        <div class=\"slide-col slide-col-";
                            yield $context["col"];
                            yield "\">
                          <div class=\"slide-layers\">
                            ";
                            // line 124
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable((($_v4 = $context["item"]) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[("items_" . $context["col"])] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                                // line 125
                                yield "                              ";
                                if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 125) == "text")) {
                                    // line 126
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 126)], "method", false, false, false, 126);
                                    yield "\">
                                  <div class=\"slide-text-layer\">
                                    <div class=\"slide-text-item\"><span>";
                                    // line 128
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "text", [], "any", false, false, false, 128);
                                    yield "</span></div>
                                  </div>
                                </div>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 131
$context["subitem"], "type", [], "any", false, false, false, 131) == "svg")) {
                                    // line 132
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 132)], "method", false, false, false, 132);
                                    yield "\">
                                  <div class=\"svg-layer\">";
                                    // line 133
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "svgCode", [], "any", false, false, false, 133);
                                    yield "</div>
                                </div>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 135
$context["subitem"], "type", [], "any", false, false, false, 135) == "button")) {
                                    // line 136
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 136)], "method", false, false, false, 136);
                                    yield "\">
                                  <div class=\"slide-button-group\">
                                    ";
                                    // line 138
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 139
                                        yield "                                      <a class=\"btn slide-button-1\" ";
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 139), "href", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield "href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 139), "href", [], "any", false, false, false, 139);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_link", [], "any", false, false, false, 139)], "method", false, false, false, 139);
                                            yield " ";
                                        } else {
                                            yield "href=\"javascript:;\"";
                                        }
                                        yield "><span>";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_1_text", [], "any", false, false, false, 139);
                                        yield "</span></a>
                                    ";
                                    }
                                    // line 141
                                    yield "                                    ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 142
                                        yield "                                      <a class=\"btn slide-button-2\" ";
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 142), "href", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield "href=\"";
                                            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 142), "href", [], "any", false, false, false, 142);
                                            yield "\" ";
                                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_link", [], "any", false, false, false, 142)], "method", false, false, false, 142);
                                            yield " ";
                                        } else {
                                            yield "href=\"javascript:;\"";
                                        }
                                        yield "><span>";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "button_2_text", [], "any", false, false, false, 142);
                                        yield "</span></a>
                                    ";
                                    }
                                    // line 144
                                    yield "                                  </div>
                                </div>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 146
$context["subitem"], "type", [], "any", false, false, false, 146) == "image")) {
                                    // line 147
                                    yield "                                <figure class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 147)], "method", false, false, false, 147);
                                    yield "\">
                                  <img class=\"\" src=\"";
                                    // line 148
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 148);
                                    yield "\" srcset=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 148);
                                    yield " 1x, ";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 148);
                                    yield " 2x\" alt=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "alt", [], "any", false, false, false, 148);
                                    yield "\" width=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "width", [], "any", false, false, false, 148);
                                    yield "\" height=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "height", [], "any", false, false, false, 148);
                                    yield "\"/>
                                  ";
                                    // line 149
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 149)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 150
                                        yield "                                    <figcaption><span>";
                                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "caption", [], "any", false, false, false, 150);
                                        yield "</span></figcaption>
                                  ";
                                    }
                                    // line 152
                                    yield "                                  ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 152), "href", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 153
                                        yield "                                    <a class=\"slide-layer-image-link\" href=\"";
                                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 153), "href", [], "any", false, false, false, 153);
                                        yield "\" ";
                                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "imageLink", [], "any", false, false, false, 153)], "method", false, false, false, 153);
                                        yield " aria-hidden=\"true\" tabindex=\"-1\"></a>
                                  ";
                                    }
                                    // line 155
                                    yield "                                </figure>
                              ";
                                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                                 // line 156
$context["subitem"], "type", [], "any", false, false, false, 156) == "products")) {
                                    // line 157
                                    yield "                                <div class=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 157)], "method", false, false, false, 157);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "products", [], "any", false, false, false, 157);
                                    yield "</div>
                              ";
                                }
                                // line 159
                                yield "                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 160
                            yield "                          </div>
                        </div>
                      ";
                        }
                        // line 163
                        yield "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['col'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 164
                    yield "                  </div>
                  ";
                    // line 165
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v5 = $context["item"]) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5["items_absolute"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 166
                        yield "                    ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "type", [], "any", false, false, false, 166) == "icon")) {
                            // line 167
                            yield "                      <div class=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "classes", [], "any", false, false, false, 167)], "method", false, false, false, 167);
                            yield "\">
                        <div class=\"can-rotate\">
                          <span class=\"has-icon\"></span>
                          ";
                            // line 170
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 171
                                yield "                            <span class=\"has-text\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "iconText", [], "any", false, false, false, 171);
                                yield "</span>
                          ";
                            }
                            // line 173
                            yield "                        </div>
                      </div>
                    ";
                        }
                        // line 176
                        yield "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 177
                    yield "                ";
                }
                // line 178
                yield "              </div>
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
            // line 181
            yield "        </div>
      ";
        }
        // line 183
        yield "    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/banners_grid.twig";
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
        return array (  730 => 183,  726 => 181,  710 => 178,  707 => 177,  701 => 176,  696 => 173,  690 => 171,  688 => 170,  681 => 167,  678 => 166,  674 => 165,  671 => 164,  665 => 163,  660 => 160,  654 => 159,  646 => 157,  644 => 156,  641 => 155,  633 => 153,  630 => 152,  624 => 150,  622 => 149,  608 => 148,  603 => 147,  601 => 146,  597 => 144,  581 => 142,  578 => 141,  562 => 139,  560 => 138,  554 => 136,  552 => 135,  547 => 133,  542 => 132,  540 => 131,  534 => 128,  528 => 126,  525 => 125,  521 => 124,  515 => 122,  512 => 121,  508 => 120,  505 => 119,  503 => 118,  500 => 117,  492 => 115,  490 => 114,  487 => 113,  481 => 111,  478 => 110,  460 => 108,  442 => 106,  439 => 105,  437 => 104,  433 => 103,  428 => 102,  411 => 101,  408 => 100,  396 => 90,  380 => 87,  377 => 86,  371 => 85,  366 => 82,  360 => 80,  358 => 79,  351 => 76,  348 => 75,  344 => 74,  341 => 73,  335 => 72,  330 => 69,  324 => 68,  316 => 66,  314 => 65,  311 => 64,  303 => 62,  300 => 61,  294 => 59,  292 => 58,  278 => 57,  273 => 56,  271 => 55,  267 => 53,  251 => 51,  248 => 50,  232 => 48,  230 => 47,  224 => 45,  222 => 44,  217 => 42,  212 => 41,  210 => 40,  204 => 37,  198 => 35,  195 => 34,  191 => 33,  185 => 31,  182 => 30,  178 => 29,  175 => 28,  173 => 27,  170 => 26,  162 => 24,  160 => 23,  157 => 22,  145 => 20,  142 => 19,  124 => 17,  106 => 15,  103 => 14,  101 => 13,  97 => 12,  92 => 11,  75 => 10,  72 => 9,  70 => 8,  64 => 7,  61 => 6,  55 => 4,  53 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/banners_grid.twig", "");
    }
}
