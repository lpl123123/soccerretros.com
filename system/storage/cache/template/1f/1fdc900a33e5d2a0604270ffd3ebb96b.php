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

/* catalog/category_list.twig */
class __TwigTemplate_9348e24f568dab422dc328567b765d24 extends Template
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
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a> <a href=\"";
        yield ($context["repair"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_rebuild"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
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
                  <td class=\"text-right\">";
        // line 43
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 44
            yield "                    <a href=\"";
            yield ($context["sort_sort_order"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_sort_order"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 46
            yield "                    <a href=\"";
            yield ($context["sort_sort_order"] ?? null);
            yield "\">";
            yield ($context["column_sort_order"] ?? null);
            yield "</a>
                    ";
        }
        // line 47
        yield "</td>
                  <td class=\"text-right\">";
        // line 48
        yield ($context["column_action"] ?? null);
        yield "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 52
        if ((($tmp = ($context["categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 54
                yield "                <tr>
                  <td class=\"text-center\">";
                // line 55
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 55), ($context["selected"] ?? null))) {
                    // line 56
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 56);
                    yield "\" checked=\"checked\" />
                    ";
                } else {
                    // line 58
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 58);
                    yield "\" />
                    ";
                }
                // line 59
                yield "</td>
                  <td class=\"text-left\">";
                // line 60
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 60);
                yield "</td>
                  <td class=\"text-right\">";
                // line 61
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 61);
                yield "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 62
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 62);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "                ";
        } else {
            // line 66
            yield "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 67
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
                ";
        }
        // line 70
        yield "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 75
        yield ($context["pagination"] ?? null);
        yield "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 76
        yield ($context["results"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 82
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/category_list.twig";
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
        return array (  264 => 82,  255 => 76,  251 => 75,  244 => 70,  238 => 67,  235 => 66,  232 => 65,  221 => 62,  217 => 61,  213 => 60,  210 => 59,  204 => 58,  198 => 56,  196 => 55,  193 => 54,  188 => 53,  186 => 52,  179 => 48,  176 => 47,  168 => 46,  158 => 44,  156 => 43,  153 => 42,  145 => 41,  135 => 39,  133 => 38,  124 => 32,  118 => 29,  114 => 27,  106 => 23,  103 => 22,  95 => 18,  93 => 17,  87 => 13,  76 => 11,  72 => 10,  67 => 8,  60 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}
