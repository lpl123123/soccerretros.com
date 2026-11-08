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

/* journal3/template/account/address_list.twig */
class __TwigTemplate_100c7c87e3b7d5109ef1a1d30524810b extends Template
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
        yield ($context["header"] ?? null);
        yield "
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            yield "<h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            yield "\"><span class=\"page-title-text\">";
            yield ($context["text_address_book"] ?? null);
            yield "</span></h1>
";
        }
        // line 5
        yield "<div class=\"breadcrumbs ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "  </ul>
</div>
";
        // line 12
        yield ($context["journal3_top"] ?? null);
        yield "
<div id=\"account-address\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 17
        yield "  ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "  <div class=\"alert alert-warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
  ";
        }
        // line 20
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 23
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 25
            yield "    ";
        } else {
            // line 26
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 27
            yield "    ";
        }
        // line 28
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 29) == "default")) {
            // line 30
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 30);
            yield "\">";
            yield ($context["text_address_book"] ?? null);
            yield "</h1>
      ";
        }
        // line 32
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      ";
        // line 33
        if ((($tmp = ($context["addresses"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 37
                yield "          <tr>
            <td class=\"text-left\">";
                // line 38
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "address", [], "any", false, false, false, 38);
                yield "</td>
            <td class=\"text-right\"><a href=\"";
                // line 39
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "update", [], "any", false, false, false, 39);
                yield "\" class=\"btn btn-info\">";
                yield ($context["button_edit"] ?? null);
                yield "</a> &nbsp; <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["result"], "delete", [], "any", false, false, false, 39);
                yield "\" class=\"btn btn-danger\">";
                yield ($context["button_delete"] ?? null);
                yield "</a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['result'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "        </table>
      </div>
      ";
        } else {
            // line 45
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      ";
        }
        // line 47
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 48
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
        <div class=\"pull-right\"><a href=\"";
        // line 49
        yield ($context["add"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_new_address"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 51
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 52
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 54
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/account/address_list.twig";
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
        return array (  216 => 54,  211 => 52,  207 => 51,  200 => 49,  194 => 48,  191 => 47,  185 => 45,  180 => 42,  165 => 39,  161 => 38,  158 => 37,  154 => 36,  150 => 34,  148 => 33,  143 => 32,  135 => 30,  133 => 29,  128 => 28,  125 => 27,  122 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  108 => 21,  103 => 20,  97 => 18,  94 => 17,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/address_list.twig", "");
    }
}
