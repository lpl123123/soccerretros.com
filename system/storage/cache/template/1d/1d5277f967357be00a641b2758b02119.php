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

/* marketing/coupon_list.twig */
class __TwigTemplate_072022c9d83b3342b0bb4b2f7e11cf62 extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        yield ($context["add"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-coupon').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        yield ($context["text_list"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-coupon\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "name")) {
            // line 39
            yield "                    <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 41
            yield "                    <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a>
                    ";
        }
        // line 42
        yield "</td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "code")) {
            // line 44
            yield "                    <a href=\"";
            yield ($context["sort_code"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_code"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 46
            yield "                    <a href=\"";
            yield ($context["sort_code"] ?? null);
            yield "\">";
            yield ($context["column_code"] ?? null);
            yield "</a>
                    ";
        }
        // line 47
        yield "</td>
                  <td class=\"text-right\">";
        // line 48
        if ((($context["sort"] ?? null) == "discount")) {
            // line 49
            yield "                    <a href=\"";
            yield ($context["sort_discount"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_discount"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 51
            yield "                    <a href=\"";
            yield ($context["sort_discount"] ?? null);
            yield "\">";
            yield ($context["column_discount"] ?? null);
            yield "</a>
                    ";
        }
        // line 52
        yield "</td>
                  <td class=\"text-left\">";
        // line 53
        if ((($context["sort"] ?? null) == "date_start")) {
            // line 54
            yield "                    <a href=\"";
            yield ($context["sort_date_start"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_start"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 56
            yield "                    <a href=\"";
            yield ($context["sort_date_start"] ?? null);
            yield "\">";
            yield ($context["column_date_start"] ?? null);
            yield "</a>
                    ";
        }
        // line 57
        yield "</td>
                  <td class=\"text-left\">";
        // line 58
        if ((($context["sort"] ?? null) == "date_end")) {
            // line 59
            yield "                    <a href=\"";
            yield ($context["sort_date_end"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_end"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 61
            yield "                    <a href=\"";
            yield ($context["sort_date_end"] ?? null);
            yield "\">";
            yield ($context["column_date_end"] ?? null);
            yield "</a>
                    ";
        }
        // line 62
        yield "</td>
                  <td class=\"text-left\">";
        // line 63
        if ((($context["sort"] ?? null) == "status")) {
            // line 64
            yield "                    <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 66
            yield "                    <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
                    ";
        }
        // line 67
        yield "</td>
                  <td class=\"text-right\">";
        // line 68
        yield ($context["column_action"] ?? null);
        yield "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 72
        if ((($tmp = ($context["coupons"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 73
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["coupons"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["coupon"]) {
                // line 74
                yield "                <tr>
                  <td class=\"text-center\">";
                // line 75
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 75), ($context["selected"] ?? null))) {
                    // line 76
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 76);
                    yield "\" checked=\"checked\" />
                    ";
                } else {
                    // line 78
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "coupon_id", [], "any", false, false, false, 78);
                    yield "\" />
                    ";
                }
                // line 79
                yield "</td>
                  <td class=\"text-left\">";
                // line 80
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "name", [], "any", false, false, false, 80);
                yield "</td>
                  <td class=\"text-left\">";
                // line 81
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "code", [], "any", false, false, false, 81);
                yield "</td>
                  <td class=\"text-right\">";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "discount", [], "any", false, false, false, 82);
                yield "</td>
                  <td class=\"text-left\">";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "date_start", [], "any", false, false, false, 83);
                yield "</td>
                  <td class=\"text-left\">";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "date_end", [], "any", false, false, false, 84);
                yield "</td>
                  <td class=\"text-left\">";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "status", [], "any", false, false, false, 85);
                yield "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["coupon"], "edit", [], "any", false, false, false, 86);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['coupon'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            yield "                ";
        } else {
            // line 90
            yield "                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 91
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
                ";
        }
        // line 94
        yield "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 99
        yield ($context["pagination"] ?? null);
        yield "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 100
        yield ($context["results"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 106
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketing/coupon_list.twig";
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
        return array (  368 => 106,  359 => 100,  355 => 99,  348 => 94,  342 => 91,  339 => 90,  336 => 89,  325 => 86,  321 => 85,  317 => 84,  313 => 83,  309 => 82,  305 => 81,  301 => 80,  298 => 79,  292 => 78,  286 => 76,  284 => 75,  281 => 74,  276 => 73,  274 => 72,  267 => 68,  264 => 67,  256 => 66,  246 => 64,  244 => 63,  241 => 62,  233 => 61,  223 => 59,  221 => 58,  218 => 57,  210 => 56,  200 => 54,  198 => 53,  195 => 52,  187 => 51,  177 => 49,  175 => 48,  172 => 47,  164 => 46,  154 => 44,  152 => 43,  149 => 42,  141 => 41,  131 => 39,  129 => 38,  120 => 32,  114 => 29,  110 => 27,  102 => 23,  99 => 22,  91 => 18,  89 => 17,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  56 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketing/coupon_list.twig", "");
    }
}
