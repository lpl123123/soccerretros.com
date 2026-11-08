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

/* journal3/js.twig */
class __TwigTemplate_e669817ba87c883b54e1374684042a77 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 2
            if (is_iterable($context["value"])) {
                // line 3
                yield "window['_oc_";
                yield $context["key"];
                yield "'] = ";
                yield json_encode($context["value"]);
                yield ";
";
            } elseif (CoreExtension::matches("/^\\d+\$/",             // line 4
$context["value"])) {
                // line 5
                yield "window['_oc_";
                yield $context["key"];
                yield "'] = ";
                yield $context["value"];
                yield ";
";
            } else {
                // line 7
                yield "window['_oc_";
                yield $context["key"];
                yield "'] = '";
                yield $context["value"];
                yield "';
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "\$('html').addClass('oc3');
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/js.twig";
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
        return array (  77 => 10,  65 => 7,  57 => 5,  55 => 4,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/js.twig", "");
    }
}
