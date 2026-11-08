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

/* journal3/template/journal3/module/main_menu.twig */
class __TwigTemplate_c2e6bf08c48be9c81497a912a0228a31 extends Template
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
        // line 60
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "  <div id=\"";
            yield ($context["id"] ?? null);
            yield "\" class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 61);
            yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 62
            yield ($context["edit"] ?? null);
            yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            yield ($context["name"] ?? null);
            yield "\"></em></button>
    <ul class=\"j-menu\">";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                yield "      ";
                $context["cid"] = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["collapse-"], "method", false, false, false, 64);
                // line 65
                yield "      <li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 65)], "method", false, false, false, 65);
                yield "\" data-open-color-scheme=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 65)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 65)) : (($context["dropdown_color_scheme"] ?? null)));
                yield "\">
        ";
                // line 66
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 67), "href", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 68
                        yield "            <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 68), "href", [], "any", false, false, false, 68);
                        yield "\" ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 68)], "method", false, false, false, 68);
                        yield " ";
                        if ((($context["display"] ?? null) == "dropdown")) {
                            yield " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            yield " class=\"collapse-toggle\"";
                        }
                        yield ">
              ";
                        // line 69
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 70
                            yield "                <span class=\"menu-image\">
                  <img src=\"";
                            // line 71
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 71);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 71);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 71);
                                yield " 2x\" ";
                            }
                            yield " alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 71);
                            yield "\" width=\"";
                            yield ($context["image_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["image_height"] ?? null);
                            yield "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 74
                        yield "              ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 74), "total", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 74), "classes", [], "any", false, false, false, 74)], "method", false, false, false, 74);
                        yield "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 75
                        yield ($context["cid"] ?? null);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "aria-expanded=\"true\"";
                        }
                        yield "><em class=\"fa fa-plus\"></em></span>
              ";
                        // line 76
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 77
                            yield "                <span class=\"menu-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 77);
                            yield "</span>
              ";
                        }
                        // line 79
                        yield "            </a>
          ";
                    } else {
                        // line 81
                        yield "            <a href=\"javascript:;\" ";
                        if ((($context["display"] ?? null) == "dropdown")) {
                            yield " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                        } else {
                            yield " class=\"collapse-toggle\"";
                        }
                        yield ">
              ";
                        // line 82
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 83
                            yield "                <span class=\"menu-image\">
                  <img src=\"";
                            // line 84
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 84);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 84)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 84);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 84);
                                yield " 2x\" ";
                            }
                            yield " alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 84);
                            yield "\" width=\"";
                            yield ($context["image_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["image_height"] ?? null);
                            yield "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 87
                        yield "              ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 87), "total", [], "any", false, false, false, 87), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 87), "classes", [], "any", false, false, false, 87)], "method", false, false, false, 87);
                        yield "
              <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        // line 88
                        yield ($context["cid"] ?? null);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "aria-expanded=\"true\"";
                        }
                        yield "><em class=\"fa fa-plus\"></em></span>
              ";
                        // line 89
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 90
                            yield "                <span class=\"menu-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 90);
                            yield "</span>
              ";
                        }
                        // line 92
                        yield "            </a>
          ";
                    }
                    // line 94
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 94) == "multilevel")) {
                        // line 95
                        yield "            <div class=\"";
                        yield (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "in";
                        }
                        yield " ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 95)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 95)) : (($context["dropdown_color_scheme"] ?? null)));
                        yield "\" id=\"";
                        yield ($context["cid"] ?? null);
                        yield "\">
              ";
                        // line 96
                        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<template>") : (""));
                        yield "
              <ul class=\"j-menu\">
                ";
                        // line 98
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 98));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 99
                            yield "                  ";
                            yield $this->getTemplateForMacro("macro_renderMainMenu", $context, 99, $this->getSourceContext())->macro_renderMainMenu(...[$context, $context["subitem"]]);
                            yield "
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        yield "              </ul>
              ";
                        // line 102
                        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("</template>") : (""));
                        yield "
            </div>
          ";
                    }
                    // line 105
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 105) == "megamenu")) {
                        // line 106
                        yield "            <div class=\"";
                        yield (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "in";
                        }
                        yield " ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 106)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 106)) : (($context["dropdown_color_scheme"] ?? null)));
                        yield "\" id=\"";
                        yield ($context["cid"] ?? null);
                        yield "\">
              ";
                        // line 107
                        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("<template>") : (""));
                        yield "
              <div class=\"mega-menu-content\">";
                        // line 108
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 108);
                        yield "</div>
              ";
                        // line 109
                        yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("</template>") : (""));
                        yield "
            </div>
          ";
                    }
                    // line 112
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 112) == "flyout")) {
                        // line 113
                        yield "            <div class=\"";
                        yield (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                        yield " ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "isOpen", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "in";
                        }
                        yield " ";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 113)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "dropdown_color_scheme", [], "any", false, false, false, 113)) : (($context["dropdown_color_scheme"] ?? null)));
                        yield "\" id=\"";
                        yield ($context["cid"] ?? null);
                        yield "\">
              ";
                        // line 114
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 114);
                        yield "
            </div>
          ";
                    }
                    // line 117
                    yield "        ";
                } else {
                    // line 118
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 118), "href", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 119
                        yield "            <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 119), "href", [], "any", false, false, false, 119);
                        yield "\" ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 119)], "method", false, false, false, 119);
                        yield ">
              ";
                        // line 120
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 120)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 121
                            yield "                <span class=\"menu-image\">
                   <img src=\"";
                            // line 122
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 122);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 122);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 122);
                                yield " 2x\" ";
                            }
                            yield " alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 122);
                            yield "\" width=\"";
                            yield ($context["image_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["image_height"] ?? null);
                            yield "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 125
                        yield "              ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 125), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 125), "total", [], "any", false, false, false, 125), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 125), "classes", [], "any", false, false, false, 125)], "method", false, false, false, 125);
                        yield "
              ";
                        // line 126
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 127
                            yield "                <span class=\"menu-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 127);
                            yield "</span>
              ";
                        }
                        // line 129
                        yield "            </a>
          ";
                    } else {
                        // line 131
                        yield "            <a href=\"javascript:;\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 131);
                        yield "\">
              ";
                        // line 132
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 133
                            yield "                <span class=\"menu-image\">
                  <img src=\"";
                            // line 134
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 134);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield "srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, false, 134);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "thumb2x", [], "any", false, false, false, 134);
                                yield " 2x\" ";
                            }
                            yield " alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 134);
                            yield "\" width=\"";
                            yield ($context["image_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["image_height"] ?? null);
                            yield "\" loading=\"lazy\"/>
                </span>
              ";
                        }
                        // line 137
                        yield "              ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 137), "total", [], "any", false, false, false, 137), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 137), "classes", [], "any", false, false, false, 137)], "method", false, false, false, 137);
                        yield "
              ";
                        // line 138
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 139
                            yield "                <span class=\"menu-label\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 139);
                            yield "</span>
              ";
                        }
                        // line 141
                        yield "            </a>
          ";
                    }
                    // line 143
                    yield "        ";
                }
                // line 144
                yield "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "    </ul>
  </div>
";
        }
        yield from [];
    }

    // line 1
    public function macro_renderMainMenu($͜context = null, $item = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "context" => $͜context,
            "item" => $item,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 2
            yield "  ";
            $context["journal3"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 2);
            // line 3
            yield "  ";
            $context["display"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "display", [], "any", false, false, false, 3);
            // line 4
            yield "  ";
            $context["cid"] = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["collapse-"], "method", false, false, false, 4);
            // line 5
            yield "  ";
            $context["image_width"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "image_width", [], "any", false, false, false, 5);
            // line 6
            yield "  ";
            $context["image_height"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "image_height", [], "any", false, false, false, 6);
            // line 7
            yield "  <li class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 7)], "method", false, false, false, 7);
            yield "\">
    ";
            // line 8
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 9
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 9), "href", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 10), "href", [], "any", false, false, false, 10);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 10)], "method", false, false, false, 10);
                    yield " ";
                    if ((($context["display"] ?? null) == "dropdown")) {
                        yield " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        yield " class=\"collapse-toggle\"";
                    }
                    yield ">
          ";
                    // line 11
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 12
                        yield "            <span class=\"menu-image\">
                <img src=\"";
                        // line 13
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 13);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 13);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 13);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 13);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 16
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 16), "total", [], "any", false, false, false, 16), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 16), "classes", [], "any", false, false, false, 16)], "method", false, false, false, 16);
                    yield "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 17
                    yield ($context["cid"] ?? null);
                    yield "\"><em class=\"fa fa-plus\"></em></span>
        </a>
      ";
                } else {
                    // line 20
                    yield "        <a href=\"javascript:;\" ";
                    if ((($context["display"] ?? null) == "dropdown")) {
                        yield " class=\"dropdown-toggle\" data-toggle=\"dropdown\" ";
                    } else {
                        yield " class=\"collapse-toggle\"";
                    }
                    yield ">
          ";
                    // line 21
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 22
                        yield "            <span class=\"menu-image\">
               <img src=\"";
                        // line 23
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 23);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 23);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 23);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 23);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 26
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 26), "total", [], "any", false, false, false, 26), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 26), "classes", [], "any", false, false, false, 26)], "method", false, false, false, 26);
                    yield "
          <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                    // line 27
                    yield ($context["cid"] ?? null);
                    yield "\"><em class=\"fa fa-plus\"></em></span>
        </a>
      ";
                }
                // line 30
                yield "     <div class=\"";
                yield (((($context["display"] ?? null) == "dropdown")) ? ("dropdown-menu j-dropdown") : ("collapse"));
                yield "\" id=\"";
                yield ($context["cid"] ?? null);
                yield "\">
       <ul class=\"j-menu\">
         ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 32));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 33
                    yield "           ";
                    yield $this->getTemplateForMacro("macro_renderMainMenu", $context, 33, $this->getSourceContext())->macro_renderMainMenu(...[$context, $context["subitem"]]);
                    yield "
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                yield "       </ul>
     </div>
    ";
            } else {
                // line 38
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 38), "href", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 39
                    yield "        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 39), "href", [], "any", false, false, false, 39);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 39)], "method", false, false, false, 39);
                    yield ">
          ";
                    // line 40
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 41
                        yield "            <span class=\"menu-image\">
               <img src=\"";
                        // line 42
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 42);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 42);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 42);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 42);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 45
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 45), "total", [], "any", false, false, false, 45), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 45), "classes", [], "any", false, false, false, 45)], "method", false, false, false, 45);
                    yield "
        </a>
      ";
                } else {
                    // line 48
                    yield "        <a href=\"javascript:;\">
          ";
                    // line 49
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 50
                        yield "            <span class=\"menu-image\">
              <img src=\"";
                        // line 51
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 51);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 51);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 51);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 51);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\" loading=\"lazy\"/>
            </span>
          ";
                    }
                    // line 54
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 54), "total", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 54), "classes", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                    yield "
        </a>
      ";
                }
                // line 57
                yield "    ";
            }
            // line 58
            yield "  </li>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/main_menu.twig";
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
        return array (  651 => 58,  648 => 57,  641 => 54,  621 => 51,  618 => 50,  616 => 49,  613 => 48,  606 => 45,  586 => 42,  583 => 41,  581 => 40,  574 => 39,  571 => 38,  566 => 35,  557 => 33,  553 => 32,  545 => 30,  539 => 27,  534 => 26,  514 => 23,  511 => 22,  509 => 21,  500 => 20,  494 => 17,  489 => 16,  469 => 13,  466 => 12,  464 => 11,  451 => 10,  448 => 9,  446 => 8,  441 => 7,  438 => 6,  435 => 5,  432 => 4,  429 => 3,  426 => 2,  413 => 1,  405 => 146,  398 => 144,  395 => 143,  391 => 141,  385 => 139,  383 => 138,  378 => 137,  358 => 134,  355 => 133,  353 => 132,  348 => 131,  344 => 129,  338 => 127,  336 => 126,  331 => 125,  311 => 122,  308 => 121,  306 => 120,  299 => 119,  296 => 118,  293 => 117,  287 => 114,  274 => 113,  271 => 112,  265 => 109,  261 => 108,  257 => 107,  244 => 106,  241 => 105,  235 => 102,  232 => 101,  223 => 99,  219 => 98,  214 => 96,  201 => 95,  198 => 94,  194 => 92,  188 => 90,  186 => 89,  178 => 88,  173 => 87,  153 => 84,  150 => 83,  148 => 82,  139 => 81,  135 => 79,  129 => 77,  127 => 76,  119 => 75,  114 => 74,  94 => 71,  91 => 70,  89 => 69,  76 => 68,  73 => 67,  71 => 66,  64 => 65,  61 => 64,  57 => 63,  51 => 62,  44 => 61,  42 => 60,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/main_menu.twig", "");
    }
}
