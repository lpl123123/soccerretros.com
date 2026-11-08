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

/* journal3/template/journal3/module/accordion_menu.twig */
class __TwigTemplate_19df0de6f4b95131993ccaebaa091bd6 extends Template
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
        // line 51
        yield "<div class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 51);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 52
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  ";
        // line 53
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 56
        yield "  <ul class=\"j-menu\">
    ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            yield "      ";
            yield $this->getTemplateForMacro("macro_renderAccordionMenu", $context, 58, $this->getSourceContext())->macro_renderAccordionMenu(...[$context, $context["item"]]);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "  </ul>
</div>
";
        yield from [];
    }

    // line 1
    public function macro_renderAccordionMenu($͜context = null, $item = null, ...$varargs): string|Markup
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
            $context["image_width"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "image_width", [], "any", false, false, false, 3);
            // line 4
            yield "  ";
            $context["image_height"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "image_height", [], "any", false, false, false, 4);
            // line 5
            yield "  <li class=\"";
            yield Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 5)], "method", false, false, false, 5), ["dropdown" => ""]);
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 5) && CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 5))) {
                yield "panel-active";
            }
            yield " ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isDivider", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "is-divider";
            }
            yield "\">
    ";
            // line 6
            $context["id"] = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "uniqueId", ["collapse-"], "method", false, false, false, 6);
            // line 7
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 7), "href", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 8
                yield "      <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8);
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                yield ">
        ";
                // line 9
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 10
                    yield "          <span class=\"menu-image\">
            <img src=\"";
                    // line 11
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 11);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 11);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 11);
                        yield " 2x\" ";
                    }
                    yield " alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 11);
                    yield "\" width=\"";
                    yield ($context["image_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["image_height"] ?? null);
                    yield "\"/>
          </span>
        ";
                }
                // line 14
                yield "        ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 14), "total", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 14), "classes", [], "any", false, false, false, 14)], "method", false, false, false, 14);
                yield "
        ";
                // line 15
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 16
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 17
                        yield "            <span class=\"open-menu\" data-toggle=\"collapse\" data-target=\"#";
                        yield ($context["id"] ?? null);
                        yield "\" aria-expanded=\"true\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    } else {
                        // line 19
                        yield "            <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        yield ($context["id"] ?? null);
                        yield "\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    }
                    // line 21
                    yield "        ";
                }
                // line 22
                yield "      </a>
    ";
            } else {
                // line 24
                yield "      <a>
        ";
                // line 25
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 26
                    yield "          <span class=\"menu-image\">
              <img src=\"";
                    // line 27
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 27);
                    yield "\" ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "srcset=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 27);
                        yield " 1x, ";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 27);
                        yield " 2x\" ";
                    }
                    yield " alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 27);
                    yield "\" width=\"";
                    yield ($context["image_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["image_height"] ?? null);
                    yield "\"/>
          </span>
        ";
                }
                // line 30
                yield "        ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 30), "total", [], "any", false, false, false, 30), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 30), "classes", [], "any", false, false, false, 30)], "method", false, false, false, 30);
                yield "
        ";
                // line 31
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 32
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 33
                        yield "            <span class=\"open-menu\" data-toggle=\"collapse\" data-target=\"#";
                        yield ($context["id"] ?? null);
                        yield "\" aria-expanded=\"true\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    } else {
                        // line 35
                        yield "            <span class=\"open-menu collapsed\" data-toggle=\"collapse\" data-target=\"#";
                        yield ($context["id"] ?? null);
                        yield "\" role=\"heading\"><em class=\"fa fa-plus\"></em></span>
          ";
                    }
                    // line 37
                    yield "        ";
                }
                // line 38
                yield "      </a>
    ";
            }
            // line 40
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 41
                yield "      <div class=\"collapse ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "isOpen", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "in";
                }
                yield "\" id=\"";
                yield ($context["id"] ?? null);
                yield "\">
        <ul class=\"j-menu\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 44
                    yield "            ";
                    yield $this->getTemplateForMacro("macro_renderAccordionMenu", $context, 44, $this->getSourceContext())->macro_renderAccordionMenu(...[($context["context"] ?? null), $context["subitem"]]);
                    yield "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "        </ul>
      </div>
    ";
            }
            // line 49
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
        return "journal3/template/journal3/module/accordion_menu.twig";
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
        return array (  273 => 49,  268 => 46,  259 => 44,  255 => 43,  245 => 41,  242 => 40,  238 => 38,  235 => 37,  229 => 35,  223 => 33,  220 => 32,  218 => 31,  213 => 30,  193 => 27,  190 => 26,  188 => 25,  185 => 24,  181 => 22,  178 => 21,  172 => 19,  166 => 17,  163 => 16,  161 => 15,  156 => 14,  136 => 11,  133 => 10,  131 => 9,  124 => 8,  121 => 7,  119 => 6,  106 => 5,  103 => 4,  100 => 3,  97 => 2,  84 => 1,  77 => 60,  68 => 58,  64 => 57,  61 => 56,  55 => 54,  53 => 53,  47 => 52,  42 => 51,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/accordion_menu.twig", "");
    }
}
