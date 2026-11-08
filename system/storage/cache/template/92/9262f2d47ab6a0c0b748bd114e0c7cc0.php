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

/* journal3/template/journal3/module/button.twig */
class __TwigTemplate_2d649375093094aa7f63fcea6ba913ef extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <a class=\"btn\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 4);
            yield "\" ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["link"] ?? null)], "method", false, false, false, 4);
            yield ">";
            yield ($context["title"] ?? null);
            yield "</a>
  ";
        } else {
            // line 6
            yield "    <a class=\"btn\">";
            yield ($context["title"] ?? null);
            yield "</a>
  ";
        }
        // line 8
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/button.twig";
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
        return array (  71 => 8,  65 => 6,  55 => 4,  53 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/button.twig", "");
    }
}
