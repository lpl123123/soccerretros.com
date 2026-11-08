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

/* journal3/template/journal3/module/top_menu.twig */
class __TwigTemplate_85951b30c90c7421b912c34cbe113bfc extends Template
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
        // line 48
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "  <div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 49);
            yield "\">
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 50
            yield ($context["edit"] ?? null);
            yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            yield ($context["name"] ?? null);
            yield "\"></em></button>
    <ul class=\"j-menu\">
      ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 53
                yield "        ";
                yield $this->getTemplateForMacro("macro_renderTopMenu", $context, 53, $this->getSourceContext())->macro_renderTopMenu(...[$context, $context["item"]]);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "    </ul>
  </div>
";
        }
        yield from [];
    }

    // line 1
    public function macro_renderTopMenu($͜context = null, $item = null, ...$varargs): string|Markup
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
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "classes", [], "any", false, false, false, 5)], "method", false, false, false, 5);
            yield "\">
    ";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 7), "href", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 8
                    yield "        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8), "href", [], "any", false, false, false, 8);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 8)], "method", false, false, false, 8);
                    yield " class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 8);
                    yield "\">
          ";
                    // line 9
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 10
                        yield "            <span class=\"menu-image\"><img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 10);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 10);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 10);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 10);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\"/></span>
          ";
                    }
                    // line 12
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 12), "total", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 12), "classes", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                    yield "
        </a>
      ";
                } else {
                    // line 15
                    yield "        <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 15);
                    yield "\">
          ";
                    // line 16
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 17
                        yield "            <span class=\"menu-image\"><img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 17);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 17);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 17);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 17);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\"/></span>
          ";
                    }
                    // line 19
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 19), "total", [], "any", false, false, false, 19), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 19), "classes", [], "any", false, false, false, 19)], "method", false, false, false, 19);
                    yield "
        </a>
      ";
                }
                // line 22
                yield "      <div class=\"dropdown-menu j-dropdown ";
                yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_color_scheme", [], "any", false, false, false, 22)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "dropdown_color_scheme", [], "any", false, false, false, 22)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "dropdown_color_scheme", [], "any", false, false, false, 22)));
                yield "\">
        <ul class=\"j-menu\">
          ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "items", [], "any", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 25
                    yield "            ";
                    yield $this->getTemplateForMacro("macro_renderTopMenu", $context, 25, $this->getSourceContext())->macro_renderTopMenu(...[($context["context"] ?? null), $context["subitem"]]);
                    yield "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                yield "        </ul>
      </div>
    ";
            } else {
                // line 30
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 30), "href", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 31
                    yield "        <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 31), "href", [], "any", false, false, false, 31);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 31)], "method", false, false, false, 31);
                    yield " title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 31);
                    yield "\">
          ";
                    // line 32
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 33
                        yield "            <span class=\"menu-image\"><img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 33);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 33);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 33);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 33);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\"/></span>
          ";
                    }
                    // line 35
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 35), "total", [], "any", false, false, false, 35), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 35), "classes", [], "any", false, false, false, 35)], "method", false, false, false, 35);
                    yield "
        </a>
      ";
                } else {
                    // line 38
                    yield "        <a href=\"javascript:;\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 38);
                    yield "\">
          ";
                    // line 39
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 40
                        yield "            <span class=\"menu-image\"><img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 40);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb", [], "any", false, false, false, 40);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "thumb2x", [], "any", false, false, false, 40);
                            yield " 2x\" ";
                        }
                        yield " alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 40);
                        yield "\" width=\"";
                        yield ($context["image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["image_height"] ?? null);
                        yield "\"/></span>
          ";
                    }
                    // line 42
                    yield "          ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 42), "total", [], "any", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "link", [], "any", false, false, false, 42), "classes", [], "any", false, false, false, 42)], "method", false, false, false, 42);
                    yield "
        </a>
      ";
                }
                // line 45
                yield "    ";
            }
            // line 46
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
        return "journal3/template/journal3/module/top_menu.twig";
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
        return array (  283 => 46,  280 => 45,  273 => 42,  253 => 40,  251 => 39,  246 => 38,  239 => 35,  219 => 33,  217 => 32,  208 => 31,  205 => 30,  200 => 27,  191 => 25,  187 => 24,  181 => 22,  174 => 19,  154 => 17,  152 => 16,  147 => 15,  140 => 12,  120 => 10,  118 => 9,  109 => 8,  106 => 7,  104 => 6,  99 => 5,  96 => 4,  93 => 3,  90 => 2,  77 => 1,  69 => 55,  60 => 53,  56 => 52,  49 => 50,  44 => 49,  42 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/top_menu.twig", "");
    }
}
