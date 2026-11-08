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

/* default/template/mail/register_alert.twig */
class __TwigTemplate_ef06b3d992ab69426c85b5510b1f8b55 extends Template
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
        yield ($context["text_signup"] ?? null);
        yield "

";
        // line 3
        yield ($context["text_firstname"] ?? null);
        yield " ";
        yield ($context["firstname"] ?? null);
        yield "
";
        // line 4
        yield ($context["text_lastname"] ?? null);
        yield " ";
        yield ($context["lastname"] ?? null);
        yield "
";
        // line 5
        if ((($tmp = ($context["customer_group"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 6
            yield ($context["text_customer_group"] ?? null);
            yield " ";
            yield ($context["customer_group"] ?? null);
            yield "
";
        }
        // line 8
        yield ($context["text_email"] ?? null);
        yield " ";
        yield ($context["email"] ?? null);
        yield "
";
        // line 9
        yield ($context["text_telephone"] ?? null);
        yield " ";
        yield ($context["telephone"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/mail/register_alert.twig";
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
        return array (  74 => 9,  68 => 8,  61 => 6,  59 => 5,  53 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/mail/register_alert.twig", "");
    }
}
