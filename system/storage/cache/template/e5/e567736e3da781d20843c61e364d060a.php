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

/* journal3/template/account/reset.twig */
class __TwigTemplate_0230a6fa83133871994ad101a64bd5a6 extends Template
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
            yield "  <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            yield "\"><span class=\"page-title-text\">";
            yield ($context["heading_title"] ?? null);
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
<div id=\"account-reset\" class=\"container\">
  <div class=\"row\">";
        // line 14
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 17
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 19
            yield "    ";
        } else {
            // line 20
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 21
            yield "    ";
        }
        // line 22
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 26
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <form action=\"";
        // line 27
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 29
        yield ($context["text_password"] ?? null);
        yield "</legend>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 31
        yield ($context["entry_password"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 33
        yield ($context["password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 34
        if ((($tmp = ($context["error_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "              <div class=\"text-danger\">";
            yield ($context["error_password"] ?? null);
            yield "</div>
              ";
        }
        // line 36
        yield " </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 39
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 41
        yield ($context["confirm"] ?? null);
        yield "\" id=\"input-confirm\" class=\"form-control\" />
              ";
        // line 42
        if ((($tmp = ($context["error_confirm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "              <div class=\"text-danger\">";
            yield ($context["error_confirm"] ?? null);
            yield "</div>
              ";
        }
        // line 44
        yield "</div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 48
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>";
        // line 50
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
          </div>
        </div>
      </form>
      ";
        // line 54
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 55
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 57
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
        return "journal3/template/account/reset.twig";
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
        return array (  208 => 57,  203 => 55,  199 => 54,  192 => 50,  185 => 48,  179 => 44,  173 => 43,  171 => 42,  167 => 41,  162 => 39,  157 => 36,  151 => 35,  149 => 34,  145 => 33,  140 => 31,  135 => 29,  130 => 27,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/reset.twig", "");
    }
}
