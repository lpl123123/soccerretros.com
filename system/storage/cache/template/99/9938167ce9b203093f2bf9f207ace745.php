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

/* default/template/mail/order_edit.twig */
class __TwigTemplate_fab11afdbfc457f1b2a846d3a25b0414 extends Template
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
        yield ($context["text_order_id"] ?? null);
        yield " ";
        yield ($context["order_id"] ?? null);
        yield "
";
        // line 2
        yield ($context["text_date_added"] ?? null);
        yield " ";
        yield ($context["date_added"] ?? null);
        yield "

";
        // line 4
        yield ($context["text_order_status"] ?? null);
        yield "

";
        // line 6
        yield ($context["order_status"] ?? null);
        yield "

";
        // line 8
        if ((($tmp = ($context["link"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield ($context["text_link"] ?? null);
            yield "

";
            // line 11
            yield ($context["link"] ?? null);
            yield "
";
        }
        // line 13
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "
";
            // line 15
            yield ($context["text_comment"] ?? null);
            yield "

";
            // line 17
            yield ($context["comment"] ?? null);
            yield "
";
            // line 18
            yield ($context["text_footer"] ?? null);
            yield "
";
        } else {
            // line 19
            yield " 
";
            // line 20
            yield ($context["text_footer"] ?? null);
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
        return "default/template/mail/order_edit.twig";
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
        return array (  99 => 20,  96 => 19,  91 => 18,  87 => 17,  82 => 15,  79 => 14,  77 => 13,  72 => 11,  67 => 9,  65 => 8,  60 => 6,  55 => 4,  48 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/mail/order_edit.twig", "");
    }
}
