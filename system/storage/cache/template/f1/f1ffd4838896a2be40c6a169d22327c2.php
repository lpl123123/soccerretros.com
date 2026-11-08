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

/* journal3/template/account/download.twig */
class __TwigTemplate_b94084bd7f7d3832f2ec28ae19bcac47 extends Template
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
<div id=\"account-download\" class=\"container\">
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
      ";
        // line 27
        if ((($tmp = ($context["downloads"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-right\">";
            // line 32
            yield ($context["column_order_id"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 33
            yield ($context["column_name"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 34
            yield ($context["column_size"] ?? null);
            yield "</td>
              <td class=\"text-left\">";
            // line 35
            yield ($context["column_date_added"] ?? null);
            yield "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
          
          ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["downloads"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["download"]) {
                // line 42
                yield "          <tr>
            <td class=\"text-right\">";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "order_id", [], "any", false, false, false, 43);
                yield "</td>
            <td class=\"text-left\">";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "name", [], "any", false, false, false, 44);
                yield "</td>
            <td class=\"text-left\">";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "size", [], "any", false, false, false, 45);
                yield "</td>
            <td class=\"text-left\">";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "date_added", [], "any", false, false, false, 46);
                yield "</td>
            <td><a href=\"";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["download"], "href", [], "any", false, false, false, 47);
                yield "\" data-toggle=\"tooltip-hover\" title=\"";
                yield ($context["button_download"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-cloud-download\"></i></a></td>
          </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['download'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "          </tbody>
          
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 55
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 56
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 59
            yield "      <p>";
            yield ($context["text_empty"] ?? null);
            yield "</p>
      ";
        }
        // line 61
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 62
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 64
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 65
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 67
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
        return "journal3/template/account/download.twig";
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
        return array (  235 => 67,  230 => 65,  226 => 64,  219 => 62,  216 => 61,  210 => 59,  204 => 56,  200 => 55,  193 => 50,  182 => 47,  178 => 46,  174 => 45,  170 => 44,  166 => 43,  163 => 42,  159 => 41,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  132 => 28,  130 => 27,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/download.twig", "");
    }
}
