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

/* journal3/template/checkout/payment_method.twig */
class __TwigTemplate_fbddbac769eac0b8b6ed1d53c3532f1d extends Template
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
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<div class=\"alert alert-warning alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
";
        }
        // line 4
        if ((($tmp = ($context["payment_methods"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "<p>";
            yield ($context["text_payment_method"] ?? null);
            yield "</p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 7
                yield "<div class=\"radio\">
  <label>";
                // line 8
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 8) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                    // line 9
                    yield "    ";
                    $context["code"] = CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 9);
                    // line 10
                    yield "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 10);
                    yield "\" checked=\"checked\" />
    ";
                } else {
                    // line 12
                    yield "    <input type=\"radio\" name=\"payment_method\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "code", [], "any", false, false, false, 12);
                    yield "\" />
    ";
                }
                // line 14
                yield "    ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "title", [], "any", false, false, false, 14);
                yield "
    ";
                // line 15
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 16
                    yield "    (";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["payment_method"], "terms", [], "any", false, false, false, 16);
                    yield ")
    ";
                }
                // line 17
                yield " </label>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['payment_method'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 21
        yield "<p><strong>";
        yield ($context["text_comments"] ?? null);
        yield "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 23
        yield ($context["comment"] ?? null);
        yield "</textarea>
</p>
";
        // line 25
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "<div class=\"buttons\">
  <div class=\"pull-right\">";
            // line 27
            yield ($context["text_agree"] ?? null);
            yield "
    ";
            // line 28
            if ((($tmp = ($context["agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "    <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 31
                yield "    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    ";
            }
            // line 33
            yield "    &nbsp;
    <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
            // line 34
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\" ><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
  </div>
</div>
";
        } else {
            // line 38
            yield "<div class=\"buttons\">
  <div class=\"pull-right\">
    <button type=\"button\" id=\"button-payment-method\" data-loading-text=\"";
            // line 40
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
  </div>
</div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/checkout/payment_method.twig";
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
        return array (  149 => 40,  145 => 38,  136 => 34,  133 => 33,  129 => 31,  125 => 29,  123 => 28,  119 => 27,  116 => 26,  114 => 25,  109 => 23,  103 => 21,  94 => 17,  88 => 16,  86 => 15,  81 => 14,  75 => 12,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  57 => 6,  52 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/payment_method.twig", "");
    }
}
