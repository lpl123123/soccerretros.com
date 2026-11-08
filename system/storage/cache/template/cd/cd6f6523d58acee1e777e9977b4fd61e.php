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

/* journal3/template/checkout/shipping_method.twig */
class __TwigTemplate_2d1a3852428f4e0655009050f33222ee extends Template
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
        if ((($tmp = ($context["shipping_methods"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "<p>";
            yield ($context["text_shipping_method"] ?? null);
            yield "</p>
";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 7
                yield "<p><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 7);
                yield "</strong></p>
";
                // line 8
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["shipping_method"], "quote", [], "any", false, false, false, 9));
                    foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
                        // line 10
                        yield "<div class=\"radio\">
  <label> ";
                        // line 11
                        if (((CoreExtension::getAttribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 11) == ($context["code"] ?? null)) ||  !($context["code"] ?? null))) {
                            // line 12
                            yield "    ";
                            $context["code"] = CoreExtension::getAttribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 12);
                            // line 13
                            yield "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 13);
                            yield "\" checked=\"checked\" />
    ";
                        } else {
                            // line 15
                            yield "    <input type=\"radio\" name=\"shipping_method\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["quote"], "code", [], "any", false, false, false, 15);
                            yield "\" />
    ";
                        }
                        // line 17
                        yield "    ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["quote"], "title", [], "any", false, false, false, 17);
                        yield " - ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["quote"], "text", [], "any", false, false, false, 17);
                        yield "</label>
</div>
";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['quote'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                } else {
                    // line 21
                    yield "<div class=\"alert alert-danger alert-dismissible\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["shipping_method"], "error", [], "any", false, false, false, 21);
                    yield "</div>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['shipping_method'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        yield "<p><strong>";
        yield ($context["text_comments"] ?? null);
        yield "</strong></p>
<p>
  <textarea name=\"comment\" rows=\"8\" class=\"form-control\">";
        // line 27
        yield ($context["comment"] ?? null);
        yield "</textarea>
</p>
<div class=\"buttons\">
  <div class=\"pull-right\">
    <button type=\"button\" id=\"button-shipping-method\" data-loading-text=\"";
        // line 31
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/checkout/shipping_method.twig";
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
        return array (  129 => 31,  122 => 27,  116 => 25,  105 => 21,  92 => 17,  86 => 15,  80 => 13,  77 => 12,  75 => 11,  72 => 10,  68 => 9,  66 => 8,  61 => 7,  57 => 6,  52 => 5,  50 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/shipping_method.twig", "");
    }
}
