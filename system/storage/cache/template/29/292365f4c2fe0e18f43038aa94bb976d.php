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

/* journal3/template/journal3/module/icons_menu.twig */
class __TwigTemplate_b74134c36ad09a7f26af8b3e6281a39d extends Template
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
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 2);
            yield "\">
    <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
            // line 3
            yield ($context["edit"] ?? null);
            yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
            yield ($context["name"] ?? null);
            yield "\"></em></button>
    ";
            // line 4
            if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 5
                yield "      <h3 class=\"title module-title\">";
                yield ($context["title"] ?? null);
                yield "</h3>
    ";
            }
            // line 7
            yield "    <ul>
      ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                yield "        <li class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "classes", [], "any", false, false, false, 9)], "method", false, false, false, 9);
                yield "\">
          ";
                // line 10
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 10), "href", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 11
                    yield "            <a ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_desktop", [], "any", false, false, false, 11) && ($context["tooltipStatus"] ?? null))) {
                        yield "data-toggle=\"tooltip-hover\" data-tooltip-class=\"icons-menu-tooltip-";
                        yield ($context["module_id"] ?? null);
                        yield "\" data-placement=\"";
                        yield ($context["tooltipPosition"] ?? null);
                        yield "\" data-selector=\"true\" data-title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11);
                        yield "\"";
                    }
                    yield " title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 11);
                    yield "\" href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 11), "href", [], "any", false, false, false, 11);
                    yield "\" ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 11)], "method", false, false, false, 11);
                    yield ">
              ";
                    // line 12
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 12) == "image")) {
                        // line 13
                        yield "                <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 13);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 13);
                            yield " 2x\" ";
                        }
                        yield " width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "width", [], "any", false, false, false, 13);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "height", [], "any", false, false, false, 13);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 13);
                        yield "\" class=\"info-block-img\"/>
              ";
                    }
                    // line 15
                    yield "              ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 15), "total", [], "any", false, false, false, 15), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 15), "classes", [], "any", false, false, false, 15)], "method", false, false, false, 15);
                    yield "
            </a>
          ";
                } else {
                    // line 18
                    yield "            <a href=\"javascript:;\">
              ";
                    // line 19
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 19) == "image")) {
                        // line 20
                        yield "                <img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20);
                        yield "\" ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " srcset=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 20);
                            yield " 1x, ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image2x", [], "any", false, false, false, 20);
                            yield " 2x\" ";
                        }
                        yield " width=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "width", [], "any", false, false, false, 20);
                        yield "\" height=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["imageDimensions"] ?? null), "height", [], "any", false, false, false, 20);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20);
                        yield "\" class=\"info-block-img\"/>
              ";
                    }
                    // line 22
                    yield "              ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 22), "total", [], "any", false, false, false, 22), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 22), "classes", [], "any", false, false, false, 22)], "method", false, false, false, 22);
                    yield "
            </a>
          ";
                }
                // line 25
                yield "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    </ul>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/icons_menu.twig";
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
        return array (  164 => 27,  157 => 25,  150 => 22,  130 => 20,  128 => 19,  125 => 18,  118 => 15,  98 => 13,  96 => 12,  77 => 11,  75 => 10,  70 => 9,  66 => 8,  63 => 7,  57 => 5,  55 => 4,  49 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/icons_menu.twig", "");
    }
}
