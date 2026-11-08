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

/* default/template/mail/order_alert.twig */
class __TwigTemplate_63817327a46f274aba6de06b2a95da6f extends Template
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
        yield ($context["text_received"] ?? null);
        yield "

";
        // line 3
        yield ($context["text_order_id"] ?? null);
        yield " ";
        yield ($context["order_id"] ?? null);
        yield "
";
        // line 4
        yield ($context["text_date_added"] ?? null);
        yield " ";
        yield ($context["date_added"] ?? null);
        yield "
";
        // line 5
        yield ($context["text_order_status"] ?? null);
        yield " ";
        yield ($context["order_status"] ?? null);
        yield "

";
        // line 7
        yield ($context["text_product"] ?? null);
        yield "

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 10);
            yield "x ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 10);
            yield ") ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 10);
            yield "
";
            // line 11
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 11)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 12));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 13
                    yield "\t- ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 13);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 13);
                    yield "
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        if ((($tmp = ($context["vouchers"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "
";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 20
                yield "1x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 20);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 20);
                yield "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 23
        yield ($context["text_total"] ?? null);
        yield "

";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 26
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 26);
            yield ": ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "value", [], "any", false, false, false, 26);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "  
";
        // line 29
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield ($context["text_comment"] ?? null);
            yield "

";
            // line 32
            yield ($context["comment"] ?? null);
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
        return "default/template/mail/order_alert.twig";
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
        return array (  157 => 32,  152 => 30,  150 => 29,  147 => 28,  137 => 26,  133 => 25,  128 => 23,  116 => 20,  112 => 19,  109 => 18,  107 => 17,  91 => 13,  87 => 12,  85 => 11,  75 => 10,  71 => 9,  66 => 7,  59 => 5,  53 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/mail/order_alert.twig", "");
    }
}
