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

/* journal3/template/journal3/module/info_blocks.twig */
class __TwigTemplate_d2b87102789d5ddec589e23d5d3ddd91 extends Template
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
        // line 40
        yield "<div class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 40);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 41
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  ";
        // line 42
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 45
        yield "  ";
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "    <p class=\"module-description\">";
            yield ($context["description"] ?? null);
            yield "</p>
  ";
        }
        // line 48
        yield "  <div class=\"module-body\">
    <div class=\"info_blocks-grid no-scroll ";
        // line 49
        yield ($context["gridType"] ?? null);
        yield "-grid\">
      ";
        // line 50
        if ((($context["gridType"] ?? null) == "auto")) {
            // line 51
            yield "        <div class=\"auto-grid-items\">
          ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                yield "            <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 53)], "method", false, false, false, 53);
                yield "\">
              ";
                // line 54
                yield $this->getTemplateForMacro("macro_renderInfoBlocks", $context, 54, $this->getSourceContext())->macro_renderInfoBlocks(...[$context, $context["item"]]);
                yield "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "        </div>
        <div class=\"auto-carousel-bar auto-carousel-controls\"><div class=\"auto-carousel-thumb\"></div><div class=\"auto-carousel-fill\"></div></div>
        <div class=\"auto-carousel-buttons auto-carousel-controls\"><div class=\"auto-carousel-prev\"><span></span></div><div class=\"auto-carousel-next\"><span></span></div></div>
      ";
        } else {
            // line 61
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                yield "          <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 62)], "method", false, false, false, 62);
                yield "\">
            ";
                // line 63
                yield $this->getTemplateForMacro("macro_renderInfoBlocks", $context, 63, $this->getSourceContext())->macro_renderInfoBlocks(...[$context, $context["item"]]);
                yield "
          </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "      ";
        }
        // line 67
        yield "    </div>
  </div>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_renderInfoBlocks($͜context = null, $item = null, ...$varargs): string|Markup
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
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 3), "href", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "    <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 4), "href", [], "any", false, false, false, 4);
                yield "\" class=\"info-block\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 4)], "method", false, false, false, 4);
                yield " title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 4);
                yield "\">
      ";
                // line 5
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 5) == "image")) {
                    // line 6
                    yield "        <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 6);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 6);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 6);
                        yield " 2x\" ";
                    }
                    yield " width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 6), "width", [], "any", false, false, false, 6);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 6), "height", [], "any", false, false, false, 6);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 6);
                    yield "\" class=\"info-block-img\"/>
      ";
                }
                // line 8
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 8) == "counter")) {
                    // line 9
                    yield "        <div class=\"info-block-counter\">
          ";
                    // line 10
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "counter", [], "any", false, false, false, 10);
                    yield "
        </div>
      ";
                }
                // line 13
                yield "      <div class=\"info-block-content\">
        <div class=\"info-block-title\">";
                // line 14
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 14);
                yield "</div>
        <div class=\"info-block-text\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 15);
                yield "</div>
        <div class=\"btn info-block-button\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "buttonTextNew", [], "any", false, false, false, 16);
                yield "</div>
      </div>
      ";
                // line 18
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 18), "total", [], "any", false, false, false, 18))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 19
                    yield "        <span class=\"count-badge\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 19), "total", [], "any", false, false, false, 19);
                    yield "</span>
      ";
                }
                // line 21
                yield "    </a>
  ";
            } else {
                // line 23
                yield "    <div class=\"info-block\">
      ";
                // line 24
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 24) == "image")) {
                    // line 25
                    yield "        <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 25);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 25);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "image2x", [], "any", false, false, false, 25);
                        yield " 2x\" ";
                    }
                    yield " width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 25), "width", [], "any", false, false, false, 25);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "imageDimensions", [], "any", false, false, false, 25), "height", [], "any", false, false, false, 25);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "alt", [], "any", false, false, false, 25);
                    yield "\" class=\"info-block-img\"/>
      ";
                }
                // line 27
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 27) == "counter")) {
                    // line 28
                    yield "        <div class=\"info-block-counter\">
          ";
                    // line 29
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "counter", [], "any", false, false, false, 29);
                    yield "
        </div>
      ";
                }
                // line 32
                yield "      <div class=\"info-block-content\">
        <div class=\"info-block-title\">";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33);
                yield "</div>
        <div class=\"info-block-text\">";
                // line 34
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "content", [], "any", false, false, false, 34);
                yield "</div>
        <a class=\"btn info-block-button\" href=\"";
                // line 35
                yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "buttonLink", [], "any", false, true, false, 35), "href", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "buttonLink", [], "any", false, false, false, 35), "href", [], "any", false, false, false, 35), "javascript:;")) : ("javascript:;"));
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "buttonLink", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "buttonTextNew", [], "any", false, false, false, 35);
                yield "</a>
      </div>
    </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/info_blocks.twig";
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
        return array (  274 => 35,  270 => 34,  266 => 33,  263 => 32,  257 => 29,  254 => 28,  251 => 27,  231 => 25,  229 => 24,  226 => 23,  222 => 21,  216 => 19,  214 => 18,  209 => 16,  205 => 15,  201 => 14,  198 => 13,  192 => 10,  189 => 9,  186 => 8,  166 => 6,  164 => 5,  155 => 4,  152 => 3,  149 => 2,  136 => 1,  128 => 67,  125 => 66,  116 => 63,  111 => 62,  106 => 61,  100 => 57,  91 => 54,  86 => 53,  82 => 52,  79 => 51,  77 => 50,  73 => 49,  70 => 48,  64 => 46,  61 => 45,  55 => 43,  53 => 42,  47 => 41,  42 => 40,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/info_blocks.twig", "");
    }
}
