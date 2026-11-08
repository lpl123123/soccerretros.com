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

/* marketing/coupon_history.twig */
class __TwigTemplate_8475e1b672758fe61b630ff11e1f5c58 extends Template
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
        yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-right\">";
        // line 5
        yield ($context["column_order_id"] ?? null);
        yield "</td>
        <td class=\"text-left\">";
        // line 6
        yield ($context["column_customer"] ?? null);
        yield "</td>
        <td class=\"text-right\">";
        // line 7
        yield ($context["column_amount"] ?? null);
        yield "</td>
        <td class=\"text-left\">";
        // line 8
        yield ($context["column_date_added"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      ";
        // line 12
        if ((($tmp = ($context["histories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 13
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["histories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                // line 14
                yield "      <tr>
        <td class=\"text-right\">";
                // line 15
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "order_id", [], "any", false, false, false, 15);
                yield "</td>
        <td class=\"text-left\">";
                // line 16
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "customer", [], "any", false, false, false, 16);
                yield "</td>
        <td class=\"text-right\">";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "amount", [], "any", false, false, false, 17);
                yield "</td>
        <td class=\"text-left\">";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["history"], "date_added", [], "any", false, false, false, 18);
                yield "</td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['history'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "      ";
        } else {
            // line 22
            yield "      <tr>
        <td class=\"text-center\" colspan=\"4\">";
            // line 23
            yield ($context["text_no_results"] ?? null);
            yield "</td>
      </tr>
      ";
        }
        // line 26
        yield "    </tbody>
  </table>
</div>
<div class=\"row\">
  <div class=\"col-sm-6 text-left\">";
        // line 30
        yield ($context["pagination"] ?? null);
        yield "</div>
  <div class=\"col-sm-6 text-right\">";
        // line 31
        yield ($context["results"] ?? null);
        yield "</div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketing/coupon_history.twig";
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
        return array (  120 => 31,  116 => 30,  110 => 26,  104 => 23,  101 => 22,  98 => 21,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  74 => 14,  69 => 13,  67 => 12,  60 => 8,  56 => 7,  52 => 6,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketing/coupon_history.twig", "");
    }
}
