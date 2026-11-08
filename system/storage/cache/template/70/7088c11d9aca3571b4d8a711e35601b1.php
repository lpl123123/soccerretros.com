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

/* journal3/template/checkout/confirm.twig */
class __TwigTemplate_d700efaf732d662f2347e97f409cb291 extends Template
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
        if ((($tmp =  !($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<div class=\"table-responsive\">
  <table class=\"table table-bordered table-hover\">
    <thead>
      <tr>
        <td class=\"text-left\">";
            // line 6
            yield ($context["column_name"] ?? null);
            yield "</td>
        <td class=\"text-left\">";
            // line 7
            yield ($context["column_model"] ?? null);
            yield "</td>
        <td class=\"text-right\">";
            // line 8
            yield ($context["column_quantity"] ?? null);
            yield "</td>
        <td class=\"text-right\">";
            // line 9
            yield ($context["column_price"] ?? null);
            yield "</td>
        <td class=\"text-right\">";
            // line 10
            yield ($context["column_total"] ?? null);
            yield "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 16
                yield "    <tr>
      <td class=\"text-left\"><a href=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 17);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 17);
                yield "</a> ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 17));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    yield " <br />
        &nbsp;<small> - ";
                    // line 18
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 18);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 18);
                    yield "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <br />
        <span class=\"label label-info\">";
                    // line 20
                    yield ($context["text_recurring_item"] ?? null);
                    yield "</span> <small>";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "recurring", [], "any", false, false, false, 20);
                    yield "</small> ";
                }
                yield "</td>
      <td class=\"text-left\">";
                // line 21
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 21);
                yield "</td>
      <td class=\"text-right\">";
                // line 22
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 22);
                yield "</td>
      <td class=\"text-right\">";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 23);
                yield "</td>
      <td class=\"text-right\">";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 24);
                yield "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 28
                yield "    <tr>
      <td class=\"text-left\">";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 29);
                yield "</td>
      <td class=\"text-left\"></td>
      <td class=\"text-right\">1</td>
      <td class=\"text-right\">";
                // line 32
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 32);
                yield "</td>
      <td class=\"text-right\">";
                // line 33
                yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 33);
                yield "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "      </tbody>
    
    <tfoot>
    
    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 41
                yield "    <tr>
      <td colspan=\"4\" class=\"text-right\"><strong>";
                // line 42
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 42);
                yield ":</strong></td>
      <td class=\"text-right\">";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 43);
                yield "</td>
    </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "      </tfoot>
    
  </table>
</div>
";
            // line 50
            yield ($context["payment"] ?? null);
            yield "
";
        } else {
            // line 51
            yield " 
<script type=\"text/javascript\"><!--
location = '";
            // line 53
            yield ($context["redirect"] ?? null);
            yield "';
//--></script> 
";
        }
        // line 55
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/checkout/confirm.twig";
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
        return array (  208 => 55,  202 => 53,  198 => 51,  193 => 50,  187 => 46,  178 => 43,  174 => 42,  171 => 41,  167 => 40,  161 => 36,  152 => 33,  148 => 32,  142 => 29,  139 => 28,  134 => 27,  125 => 24,  121 => 23,  117 => 22,  113 => 21,  105 => 20,  100 => 19,  91 => 18,  81 => 17,  78 => 16,  74 => 15,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/confirm.twig", "");
    }
}
