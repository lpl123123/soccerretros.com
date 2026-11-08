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

/* journal3/template/journal3/module/header_notice.twig */
class __TwigTemplate_fb2a38129747a40fcbab3728a7b12f32 extends Template
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
        yield "<div class=\"notice-module ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 1);
        yield "\" data-options='";
        yield json_encode(($context["options"] ?? null));
        yield "'>
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  <div class=\"module-body\">
    <div class=\"hn-body\">
      <div class=\"hn-content\">
        ";
        // line 6
        yield ($context["content"] ?? null);
        yield "
        ";
        // line 7
        if (((($context["contentType"] ?? null) == "text") && ($context["ctaButton"] ?? null))) {
            // line 8
            yield "          <a class=\"btn header-notice-cta\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["ctaButtonLink"] ?? null), "href", [], "any", false, false, false, 8);
            yield "\" ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["ctaButtonLink"] ?? null)], "method", false, false, false, 8);
            yield "><span class=\"btn-text\">";
            yield ($context["ctaButtonText"] ?? null);
            yield "</span></a>
        ";
        }
        // line 10
        yield "      </div>
    </div>
    ";
        // line 12
        if ((($tmp = ($context["closeButton"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      <div class=\"header-notice-close-button\">
        ";
            // line 14
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["closeLink"] ?? null), "href", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 15
                yield "          <a class=\"btn hn-close\" href=\"";
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["closeLink"] ?? null), "href", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["closeLink"] ?? null), "href", [], "any", false, false, false, 15)) : ("javascript:;"));
                yield "\" ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["closeLink"] ?? null)], "method", false, false, false, 15);
                yield " title=\"";
                yield (((($tmp = ($context["closeText"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["closeText"] ?? null)) : ("Close"));
                yield "\">
            ";
                // line 16
                if ((($tmp = ($context["closeText"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 17
                    yield "              <span class=\"btn-text\">";
                    yield ($context["closeText"] ?? null);
                    yield "</span>
            ";
                }
                // line 19
                yield "          </a>
        ";
            } else {
                // line 21
                yield "          <button class=\"btn hn-close\" aria-label=\"";
                yield (((($tmp = ($context["closeText"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["closeText"] ?? null)) : ("Close"));
                yield "\">
            ";
                // line 22
                if ((($tmp = ($context["closeText"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 23
                    yield "              <span class=\"btn-text\">";
                    yield ($context["closeText"] ?? null);
                    yield "</span>
            ";
                }
                // line 25
                yield "          </button>
        ";
            }
            // line 27
            yield "      </div>
    ";
        }
        // line 29
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
        return "journal3/template/journal3/module/header_notice.twig";
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
        return array (  127 => 29,  123 => 27,  119 => 25,  113 => 23,  111 => 22,  106 => 21,  102 => 19,  96 => 17,  94 => 16,  85 => 15,  83 => 14,  80 => 13,  78 => 12,  74 => 10,  64 => 8,  62 => 7,  58 => 6,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/header_notice.twig", "");
    }
}
