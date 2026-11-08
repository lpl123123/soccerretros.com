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

/* journal3/template/common/currency.twig */
class __TwigTemplate_5e0aa1ef4ee37687808150a07b8f101a extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCurrencyStatus"], "method", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["currencies"] ?? null)) > 1)) {
                // line 3
                yield "<div id=\"currency\" class=\"currency\">
  <form id=\"form-currency\" action=\"";
                // line 4
                yield ($context["action"] ?? null);
                yield "\" method=\"post\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "href", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "enctype=\"multipart/form-data\"";
                } else {
                    yield "data-oc-toggle=\"ajax\"";
                }
                yield ">
    <div class=\"dropdown drop-menu\">
      <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"currency-symbol-title\">
          ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 9
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 9) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null)))) {
                        // line 10
                        yield "          <span class=\"symbol\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 10);
                        yield "</span>
          <span class=\"currency-title\">";
                        // line 11
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 11);
                        yield "</span>
          <span class=\"currency-code\">";
                        // line 12
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 12);
                        yield "</span>
          ";
                    } elseif ((CoreExtension::getAttribute($this->env, $this->source,                     // line 13
$context["currency"], "symbol_right", [], "any", false, false, false, 13) && (CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 13) == ($context["code"] ?? null)))) {
                        // line 14
                        yield "          <span class=\"symbol\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 14);
                        yield "</span>
          <span class=\"currency-title\">";
                        // line 15
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 15);
                        yield "</span>
          <span class=\"currency-code\">";
                        // line 16
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 16);
                        yield "</span>
          ";
                    }
                    // line 18
                    yield "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "        </span>
      </button>
      <div class=\"dropdown-menu j-dropdown\">
      <ul class=\"j-menu\">
        ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
                    // line 24
                    yield "        ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 25
                        yield "        <li class=\"menu-item\">
          <a class=\"currency-select dropdown-item\" data-name=\"";
                        // line 26
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 26);
                        yield "\" role=\"button\">
            <span class=\"currency-symbol\">";
                        // line 27
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_left", [], "any", false, false, false, 27);
                        yield "</span>
            <span class=\"currency-title-dropdown\">";
                        // line 28
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 28);
                        yield "</span>
            <span class=\"currency-code-dropdown\">";
                        // line 29
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 29);
                        yield "</span>
          </a>
        </li>
        ";
                    } else {
                        // line 33
                        yield "        <li class=\"menu-item\">
          <a class=\"currency-select dropdown-item\" data-name=\"";
                        // line 34
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 34);
                        yield "\" role=\"button\">
            <span class=\"currency-symbol\">";
                        // line 35
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "symbol_right", [], "any", false, false, false, 35);
                        yield "</span>
            <span class=\"currency-title-dropdown\">";
                        // line 36
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 36);
                        yield "</span>
            <span class=\"currency-code-dropdown\">";
                        // line 37
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 37);
                        yield "</span>
          </a>
        </li>
        ";
                    }
                    // line 41
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "      </ul>
      </div>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 46
                yield ($context["redirect"] ?? null);
                yield "\" />
  </form>
</div>
";
            }
            // line 49
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
        return "journal3/template/common/currency.twig";
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
        return array (  180 => 49,  173 => 46,  167 => 42,  161 => 41,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  139 => 33,  132 => 29,  128 => 28,  124 => 27,  120 => 26,  117 => 25,  114 => 24,  110 => 23,  104 => 19,  98 => 18,  93 => 16,  89 => 15,  84 => 14,  82 => 13,  78 => 12,  74 => 11,  69 => 10,  66 => 9,  62 => 8,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/currency.twig", "");
    }
}
