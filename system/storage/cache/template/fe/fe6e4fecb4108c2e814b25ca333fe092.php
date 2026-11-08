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

/* default/template/mail/register.twig */
class __TwigTemplate_e784147ff85f1f7ae344ed361acd3969 extends Template
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
        yield ($context["text_welcome"] ?? null);
        yield "

";
        // line 3
        if ((($tmp =  !($context["approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield ($context["text_login"] ?? null);
            yield "

";
            // line 6
            yield ($context["login"] ?? null);
            yield "

";
            // line 8
            yield ($context["text_service"] ?? null);
            yield "

";
            // line 10
            yield ($context["text_thanks"] ?? null);
            yield "
";
            // line 11
            yield ($context["store"] ?? null);
            yield "
";
        } else {
            // line 13
            yield ($context["text_approval"] ?? null);
            yield "

";
            // line 15
            yield ($context["login"] ?? null);
            yield "

";
            // line 17
            yield ($context["text_thanks"] ?? null);
            yield "
";
            // line 18
            yield ($context["store"] ?? null);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/mail/register.twig";
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
        return array (  87 => 18,  83 => 17,  78 => 15,  73 => 13,  68 => 11,  64 => 10,  59 => 8,  54 => 6,  49 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/mail/register.twig", "");
    }
}
