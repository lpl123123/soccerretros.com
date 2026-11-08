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

/* journal3/template/journal3/css.twig */
class __TwigTemplate_6c14763fbc79dd65190664f15d01313d extends Template
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
        yield "<style>
  ";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDisplay"], "method", false, false, false, 2) == "page")) {
            // line 3
            yield "  .search-page .mini-search {
    --search-container-padding: ";
            // line 4
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDropdownPadding"], "method", false, false, false, 4);
            yield "px;
    --search-container-padding-outer: ";
            // line 5
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDropdownPaddingOuter"], "method", false, false, false, 5);
            yield "px;
  }
  ";
        }
        // line 8
        yield "

  ";
        // line 11
        yield "  ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sectionShippingVisibility"], "method", false, false, false, 11) != "true") && (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["sectionPaymentVisibility"], "method", false, false, false, 11) != "true"))) {
            // line 12
            yield "  .quick-checkout-wrapper .shipping-payment {
    display: none;
  }
  ";
        }
        // line 16
        yield "
</style>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/css.twig";
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
        return array (  73 => 16,  67 => 12,  64 => 11,  60 => 8,  54 => 5,  50 => 4,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/css.twig", "");
    }
}
