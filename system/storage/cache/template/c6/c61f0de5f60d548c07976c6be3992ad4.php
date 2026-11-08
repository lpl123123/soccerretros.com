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

/* journal3/template/account/order_list.twig */
class __TwigTemplate_dc000cb59d012751c51d346e0a17dc52 extends Template
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
<div id=\"account-order\" class=\"container\">
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
        if ((($tmp = ($context["orders"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center\">";
            // line 32
            yield ($context["column_order_id"] ?? null);
            yield "</td>
              <td class=\"text-center\">";
            // line 33
            yield ($context["column_customer"] ?? null);
            yield "</td>
              <td class=\"text-center\">";
            // line 34
            yield ($context["column_product"] ?? null);
            yield "</td>
              <td class=\"text-center\">";
            // line 35
            yield ($context["column_status"] ?? null);
            yield "</td>
              <td class=\"text-center\">";
            // line 36
            yield ($context["column_total"] ?? null);
            yield "</td>
              <td class=\"text-center\">";
            // line 37
            yield ($context["column_date_added"] ?? null);
            yield "</td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["orders"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 43
                yield "            <tr>
              <td class=\"text-center\">#";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "order_id", [], "any", false, false, false, 44);
                yield "</td>
              <td class=\"text-center\">";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 45);
                yield "</td>
              <td class=\"text-center\">";
                // line 46
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "products", [], "any", false, false, false, 46);
                yield "</td>
              <td class=\"text-center\">";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 47);
                yield "</td>
              <td class=\"text-center\">";
                // line 48
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 48);
                yield "</td>
              <td class=\"text-center\">";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "date_added", [], "any", false, false, false, 49);
                yield "</td>
              <td class=\"text-center\"><a href=\"";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order"], "view", [], "any", false, false, false, 50);
                yield "\" data-toggle=\"tooltip-hover\" title=\"";
                yield ($context["button_view"] ?? null);
                yield "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "          </tbody>
        </table>
      </div>
      <div class=\"row pagination-results\">
        <div class=\"col-sm-6 text-left\">";
            // line 57
            yield ($context["pagination"] ?? null);
            yield "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 58
            yield ($context["results"] ?? null);
            yield "</div>
      </div>
      ";
        } else {
            // line 61
            yield "      <p>";
            yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
            yield "</p>
      ";
        }
        // line 63
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 64
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 66
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 67
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 69
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
        return "journal3/template/account/order_list.twig";
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
        return array (  249 => 69,  244 => 67,  240 => 66,  233 => 64,  230 => 63,  224 => 61,  218 => 58,  214 => 57,  208 => 53,  197 => 50,  193 => 49,  189 => 48,  185 => 47,  181 => 46,  177 => 45,  173 => 44,  170 => 43,  166 => 42,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  132 => 28,  130 => 27,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/order_list.twig", "");
    }
}
