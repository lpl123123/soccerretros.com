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

/* journal3/template/journal3/module/title.twig */
class __TwigTemplate_22afb34fd03cabecd21bc890c3d083cc extends Template
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
  <div class=\"title-wrapper\">
    ";
        // line 4
        if ((($tmp = ($context["label"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "      <div class=\"title-label\">";
            yield ($context["label"] ?? null);
            yield "</div>
    ";
        }
        // line 7
        yield "    ";
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "      <div class=\"title-main\">
        <h3>";
            // line 9
            yield ($context["title"] ?? null);
            yield "</h3>
        ";
            // line 10
            if ((($tmp = ($context["inline_button_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 11
                yield "          <a class=\"btn title-inline-btn\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["inline_button_link"] ?? null), "href", [], "any", false, false, false, 11);
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["inline_button_link"] ?? null)], "method", false, false, false, 11);
                yield "><span>";
                yield ($context["inline_button_text"] ?? null);
                yield "</span></a>
        ";
            }
            // line 13
            yield "      </div>
    ";
        }
        // line 15
        yield "    <div class=\"title-divider\"></div>
    <div class=\"subtitle\">";
        // line 16
        yield ($context["subtitle"] ?? null);
        yield "</div>
    ";
        // line 17
        if ((($context["button_1_text"] ?? null) || ($context["button_2_text"] ?? null))) {
            // line 18
            yield "    <div class=\"title-buttons\">
      ";
            // line 19
            if ((($tmp = ($context["button_1_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 20
                yield "      <a class=\"btn title-btn-1\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["button_1_link"] ?? null), "href", [], "any", false, false, false, 20);
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["button_1_link"] ?? null)], "method", false, false, false, 20);
                yield "><span>";
                yield ($context["button_1_text"] ?? null);
                yield "</span></a>
      ";
            }
            // line 22
            yield "      ";
            if ((($tmp = ($context["button_2_text"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "      <a class=\"btn title-btn-2\" href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["button_2_link"] ?? null), "href", [], "any", false, false, false, 23);
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["button_2_link"] ?? null)], "method", false, false, false, 23);
                yield "><span>";
                yield ($context["button_2_text"] ?? null);
                yield "</span></a>
      ";
            }
            // line 25
            yield "    </div>
    ";
        }
        // line 27
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/title.twig";
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
        return array (  129 => 27,  125 => 25,  115 => 23,  112 => 22,  102 => 20,  100 => 19,  97 => 18,  95 => 17,  91 => 16,  88 => 15,  84 => 13,  74 => 11,  72 => 10,  68 => 9,  65 => 8,  62 => 7,  56 => 5,  54 => 4,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/title.twig", "");
    }
}
