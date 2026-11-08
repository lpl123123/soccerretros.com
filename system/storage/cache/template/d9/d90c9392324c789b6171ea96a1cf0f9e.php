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

/* journal3/template/journal3/module/product_tabs.twig */
class __TwigTemplate_20f0348a1a305248e61dc7c26480809f extends Template
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
        if ((($context["display"] ?? null) == "tabs")) {
            // line 2
            yield "  <div class=\"tab-container ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
            yield "\">
    <div class=\"full-tabs-bg\"></div>
    <ul class=\"nav nav-tabs\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                yield "        <li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tab_classes", [], "any", false, false, false, 6)], "method", false, false, false, 6);
                yield "\">
          ";
                // line 7
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "tabType", [], "any", false, false, false, 7) == "link")) {
                    // line 8
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                    yield ">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8);
                    yield "</a>
          ";
                } else {
                    // line 10
                    yield "            <a href=\"#";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 10);
                    yield "\" data-toggle=\"tab\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 10);
                    yield "</a>
          ";
                }
                // line 12
                yield "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            yield "    </ul>
    <div class=\"tab-content\">
      ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 17
                yield "        <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 17)], "method", false, false, false, 17);
                yield "\" id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 17);
                yield "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content ";
                // line 20
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "expand-content";
                }
                yield "\">
                ";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 21);
                yield "
                ";
                // line 22
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 23);
                    yield "\"></a></div>
                ";
                }
                // line 25
                yield "              </div>
            </div>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "    </div>
  </div>
";
        } elseif ((        // line 32
($context["display"] ?? null) == "accordion")) {
            // line 33
            yield "  <div class=\"panel-group ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 33);
            yield "\">
    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                yield "      <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                yield "\">
        <div class=\"panel-heading\">
          <h4 class=\"panel-title\">
            <a href=\"#";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 38);
                yield "\" class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" aria-expanded=\"false\">
              ";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 39);
                yield "
              <i class=\"fa fa-caret-down\"></i>
            </a>
          </h4>
        </div>
        <div class=\"";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "panel_classes", [], "any", false, false, false, 44)], "method", false, false, false, 44);
                yield "\" id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 44);
                yield "\">
          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"panel-body block-content ";
                // line 47
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "expand-content";
                }
                yield "\">
                ";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 48);
                yield "
                ";
                // line 49
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 50
                    yield "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 50);
                    yield "\"></a></div>
                ";
                }
                // line 52
                yield "              </div>
            </div>
          </div>
        </div>
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "  </div>
";
        } else {
            // line 60
            yield "  <div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 60);
            yield "\">
    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                yield "      <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                yield "\">
        ";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "popup", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "          <button data-open-popup=\"#";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 64);
                    yield "-popup\" class=\"btn product-blocks-popup-btn\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 64);
                    yield "</button>
          <template id=\"";
                    // line 65
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 65);
                    yield "-popup\">
            <div class=\"popup-wrapper popup-block ";
                    // line 66
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "popup_classes", [], "any", false, false, false, 66)], "method", false, false, false, 66);
                    yield "\">
              <div class=\"journal-loading\"><em class=\"fa fa-spinner fa-spin\"></em></div>
              <div class=\"popup-container\">
                <div class=\"popup-body\">
                  <div class=\"popup-inner-body\">
                    <button class=\"btn popup-close\"></button>
                    <div class=\"block-body popup-content\">
                      <div class=\"block-wrapper\">
                        <div class=\"block-content\">
                          ";
                    // line 75
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 75);
                    yield "
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"popup-bg popup-bg-closable\"></div>
            </div>
          </template>
        ";
                } else {
                    // line 86
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 87
                        yield "            <h3 class=\"title module-title\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 87);
                        yield "</h3>
          ";
                    }
                    // line 89
                    yield "          <div class=\"block-body expand-block\">
            <div class=\"block-wrapper\">
              <div class=\"block-content ";
                    // line 91
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "expand-content";
                    }
                    yield "\">
                ";
                    // line 92
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 92);
                    yield "
                ";
                    // line 93
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "expandButton", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 94
                        yield "                  <div class=\"block-expand-overlay\"><a class=\"block-expand btn\" role=\"button\" aria-label=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["globalExpandButtonText"], "method", false, false, false, 94);
                        yield "\"></a></div>
                ";
                    }
                    // line 96
                    yield "              </div>
            </div>
          </div>
        ";
                }
                // line 100
                yield "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/product_tabs.twig";
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
        return array (  304 => 102,  297 => 100,  291 => 96,  285 => 94,  283 => 93,  279 => 92,  273 => 91,  269 => 89,  263 => 87,  260 => 86,  246 => 75,  234 => 66,  230 => 65,  223 => 64,  221 => 63,  216 => 62,  212 => 61,  207 => 60,  203 => 58,  192 => 52,  186 => 50,  184 => 49,  180 => 48,  174 => 47,  166 => 44,  158 => 39,  154 => 38,  147 => 35,  143 => 34,  138 => 33,  136 => 32,  132 => 30,  122 => 25,  116 => 23,  114 => 22,  110 => 21,  104 => 20,  95 => 17,  91 => 16,  87 => 14,  80 => 12,  72 => 10,  62 => 8,  60 => 7,  55 => 6,  51 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/product_tabs.twig", "");
    }
}
