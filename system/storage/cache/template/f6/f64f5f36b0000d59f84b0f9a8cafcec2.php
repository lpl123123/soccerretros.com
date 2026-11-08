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

/* journal3/template/journal3/module/filter.twig */
class __TwigTemplate_b8a4210467843827ccc79189aa9cc895 extends Template
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
        yield "<div class=\"desktop-filter-wrapper\">
  <div id=\"filter\" class=\"";
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
        yield "\">
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 3
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
    <h3 class=\"title module-title\">
      <span class=\"filter-title-text\">";
        // line 5
        yield ($context["title"] ?? null);
        yield "</span>
      <button aria-label=\"Reset\" class=\"reset-filter btn\">";
        // line 6
        yield ($context["resetText"] ?? null);
        yield "</button>
      <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
    </h3>
    <div class=\"module-body\">
      <div class=\"panel-group\">
        ";
        // line 11
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
            // line 12
            yield "          ";
            $context["item_input"] = (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 12)) : (($context["input"] ?? null)));
            // line 13
            yield "          <div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 13)], "method", false, false, false, 13);
            yield "\">
            <div class=\"panel-heading\">
              <div class=\"panel-title\">
                <a href=\"#";
            // line 16
            yield ($context["id"] ?? null);
            yield "-collapse-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 16);
            yield "\" class=\"accordion-toggle ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collapsed", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "collapsed";
            }
            yield "\" data-toggle=\"collapse\" aria-expanded=\"";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "collapsed", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "false";
            } else {
                yield "true";
            }
            yield "\" data-filter=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 16);
            yield "\">
                  ";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17);
            yield "
                  <em class=\"fa fa-caret-down\"></em>
                </a>
              </div>
            </div>
            <div class=\"";
            // line 22
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 22)], "method", false, false, false, 22);
            yield "\" id=\"";
            yield ($context["id"] ?? null);
            yield "-collapse-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 22);
            yield "\">
              <div class=\"panel-body\">
                ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 24) == "p")) {
                // line 25
                yield "                  <div class=\"filter-price\" id=\"filter-";
                yield ($context["id"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25);
                yield "\">
                    <div class=\"range-slider\">
                      <input type=\"text\" class=\"js-range-slider\" value=\"\" aria-hidden=\"true\" aria-label=\"min-max\" title=\"min-max\"/>
                    </div>
                    <div class=\"extra-controls\">
                      ";
                // line 30
                if ((($tmp = ($context["currency_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 31
                    yield "                        <span class=\"currency-symbol currency-left\">";
                    yield ($context["currency_left"] ?? null);
                    yield "</span>
                      ";
                }
                // line 33
                yield "
                      <input type=\"text\" class=\"filter-price-min\" name=\"min\" data-min=\"";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price_range", [], "any", false, false, false, 34), "min", [], "any", false, false, false, 34);
                yield "\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "current_price_range", [], "any", false, false, false, 34), "min", [], "any", false, false, false, 34);
                yield "\" aria-label=\"min\" title=\"min\"/>

                      ";
                // line 36
                if ((($tmp = ($context["currency_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "                        <span class=\"currency-symbol currency-right\">";
                    yield ($context["currency_right"] ?? null);
                    yield "</span>
                      ";
                }
                // line 39
                yield "
                      ";
                // line 40
                if ((($tmp = ($context["currency_left"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "                        <span class=\"currency-symbol currency-left\">";
                    yield ($context["currency_left"] ?? null);
                    yield "</span>
                      ";
                }
                // line 43
                yield "
                      <input type=\"text\" class=\"filter-price-max\" name=\"max\" data-max=\"";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "price_range", [], "any", false, false, false, 44), "max", [], "any", false, false, false, 44);
                yield "\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "current_price_range", [], "any", false, false, false, 44), "max", [], "any", false, false, false, 44);
                yield "\" aria-label=\"max\" title=\"max\"/>

                      ";
                // line 46
                if ((($tmp = ($context["currency_right"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "                        <span class=\"currency-symbol currency-right\">";
                    yield ($context["currency_right"] ?? null);
                    yield "</span>
                      ";
                }
                // line 49
                yield "                    </div>
                  </div>
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 51
$context["item"], "type", [], "any", false, false, false, 51) == "r")) {
                // line 52
                yield "                  <div class=\"filter-rating\" id=\"filter-";
                yield ($context["id"] ?? null);
                yield "-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52);
                yield "\">
                    ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 54
                    yield "                      <label>
                        <input type=\"";
                    // line 55
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "input", [], "any", false, false, false, 55);
                    yield "\" data-filter-trigger name=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 55);
                    yield "\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 55);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "checked";
                    }
                    yield ">
                        <span class=\"links-text rating-stars\">
                        ";
                    // line 57
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 58
                        yield "                          ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 58) < $context["i"])) {
                            // line 59
                            yield "                            <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                          ";
                        } else {
                            // line 61
                            yield "                            <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span>
                          ";
                        }
                        // line 63
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 64
                    yield "                      </span>
                        <span class=\"count-badge\">";
                    // line 65
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 65);
                    yield "</span>
                      </label>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "                  </div>
                ";
            } else {
                // line 70
                yield "                  ";
                if (((($context["item_input"] ?? null) == "checkbox") || (($context["item_input"] ?? null) == "radio"))) {
                    // line 71
                    yield "                    <div class=\"filter-";
                    yield ($context["item_input"] ?? null);
                    yield "\">
                      ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 73
                        yield "                        <label>
                          <input type=\"";
                        // line 74
                        yield ($context["item_input"] ?? null);
                        yield "\" data-filter-trigger name=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 74);
                        yield "\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 74);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "checked";
                        }
                        yield " title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 74);
                        yield "\" aria-label=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 74);
                        yield "\">
                          ";
                        // line 75
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 76
                            yield "                            <img src=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 76);
                            yield "\" ";
                            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 76)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                yield " srcset=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image", [], "any", false, false, false, 76);
                                yield " 1x, ";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "image2x", [], "any", false, false, false, 76);
                                yield " 2x\" ";
                            }
                            yield " width=\"";
                            yield ($context["image_width"] ?? null);
                            yield "\" height=\"";
                            yield ($context["image_height"] ?? null);
                            yield "\" alt=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 76);
                            yield "\" title=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 76);
                            yield "\" class=\"img-responsive\" ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 76) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image_only", [], "any", false, false, false, 76))) {
                                yield "data-toggle=\"tooltip-hover\" data-tooltip-class=\"filter-tooltip-";
                                yield ($context["module_id"] ?? null);
                                yield "\" data-placement=\"top\"";
                            }
                            yield "/>
                          ";
                        }
                        // line 78
                        yield "                          <span class=\"links-text\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 78);
                        yield "</span>
                          <span class=\"count-badge\">";
                        // line 79
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 79);
                        yield "</span>
                          <span class=\"filter-item-bg\"></span>
                        </label>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    yield "                    </div>
                  ";
                } elseif ((                // line 84
($context["item_input"] ?? null) == "select")) {
                    // line 85
                    yield "                    <div class=\"";
                    yield ($context["item_input"] ?? null);
                    yield "\">
                      <label>
                        <select name=\"";
                    // line 87
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 87);
                    yield "\" data-filter-trigger>
                          <option value=\"\"></option>
                          ";
                    // line 89
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 89));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 90
                        yield "                            <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "id", [], "any", false, false, false, 90);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "checked", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "selected";
                        }
                        yield ">";
                        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((((CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 90) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "total", [], "any", false, false, false, 90)) . ")")) : (CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "value", [], "any", false, false, false, 90)));
                        yield "</option>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    yield "                        </select>
                      </label>
                    </div>
                  ";
                }
                // line 96
                yield "                ";
            }
            // line 97
            yield "              </div>
            </div>
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
        // line 101
        yield "      </div>
    </div>
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
        return "journal3/template/journal3/module/filter.twig";
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
        return array (  405 => 101,  388 => 97,  385 => 96,  379 => 92,  364 => 90,  360 => 89,  355 => 87,  349 => 85,  347 => 84,  344 => 83,  334 => 79,  329 => 78,  301 => 76,  299 => 75,  283 => 74,  280 => 73,  276 => 72,  271 => 71,  268 => 70,  264 => 68,  255 => 65,  252 => 64,  246 => 63,  242 => 61,  238 => 59,  235 => 58,  231 => 57,  218 => 55,  215 => 54,  211 => 53,  204 => 52,  202 => 51,  198 => 49,  192 => 47,  190 => 46,  183 => 44,  180 => 43,  174 => 41,  172 => 40,  169 => 39,  163 => 37,  161 => 36,  154 => 34,  151 => 33,  145 => 31,  143 => 30,  132 => 25,  130 => 24,  121 => 22,  113 => 17,  95 => 16,  88 => 13,  85 => 12,  68 => 11,  60 => 6,  56 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/filter.twig", "");
    }
}
