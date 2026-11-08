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

/* user/api_list.twig */
class __TwigTemplate_9ec0f2be4bfced538cd645a5a38e2dc2 extends Template
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
        yield "') ? \$('#form-api').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-api\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "username")) {
            // line 39
            yield "                    <a href=\"";
            yield ($context["sort_username"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_username"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 41
            yield "                    <a href=\"";
            yield ($context["sort_username"] ?? null);
            yield "\">";
            yield ($context["column_username"] ?? null);
            yield "</a>
                    ";
        }
        // line 42
        yield "</td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "status")) {
            // line 44
            yield "                    <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 46
            yield "                    <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a>
                    ";
        }
        // line 47
        yield "</td>
                  <td class=\"text-left\">";
        // line 48
        if ((($context["sort"] ?? null) == "date_added")) {
            // line 49
            yield "                    <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 51
            yield "                    <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a>
                    ";
        }
        // line 52
        yield "</td>
                  <td class=\"text-left\">";
        // line 53
        if ((($context["sort"] ?? null) == "date_modified")) {
            // line 54
            yield "                    <a href=\"";
            yield ($context["sort_date_modified"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_modified"] ?? null);
            yield "</a>
                    ";
        } else {
            // line 56
            yield "                    <a href=\"";
            yield ($context["sort_date_modified"] ?? null);
            yield "\">";
            yield ($context["column_date_modified"] ?? null);
            yield "</a>
                    ";
        }
        // line 57
        yield "</td>                    
                  <td class=\"text-right\">";
        // line 58
        yield ($context["column_action"] ?? null);
        yield "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        if ((($tmp = ($context["apis"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
                // line 64
                yield "                <tr>
                  <td class=\"text-center\">";
                // line 65
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 65), ($context["selected"] ?? null))) {
                    // line 66
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 66);
                    yield "\" checked=\"checked\" />
                    ";
                } else {
                    // line 68
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 68);
                    yield "\" />
                    ";
                }
                // line 69
                yield "</td>
                  <td class=\"text-left\">";
                // line 70
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 70);
                yield "</td>
                  <td class=\"text-left\">";
                // line 71
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "status", [], "any", false, false, false, 71);
                yield "</td>
                  <td class=\"text-left\">";
                // line 72
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "date_added", [], "any", false, false, false, 72);
                yield "</td>
                  <td class=\"text-left\">";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "date_modified", [], "any", false, false, false, 73);
                yield "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "edit", [], "any", false, false, false, 74);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                ";
        } else {
            // line 78
            yield "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 79
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
                ";
        }
        // line 82
        yield "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 87
        yield ($context["pagination"] ?? null);
        yield "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 88
        yield ($context["results"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 94
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
        return "user/api_list.twig";
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
        return array (  314 => 94,  305 => 88,  301 => 87,  294 => 82,  288 => 79,  285 => 78,  282 => 77,  271 => 74,  267 => 73,  263 => 72,  259 => 71,  255 => 70,  252 => 69,  246 => 68,  240 => 66,  238 => 65,  235 => 64,  230 => 63,  228 => 62,  221 => 58,  218 => 57,  210 => 56,  200 => 54,  198 => 53,  195 => 52,  187 => 51,  177 => 49,  175 => 48,  172 => 47,  164 => 46,  154 => 44,  152 => 43,  149 => 42,  141 => 41,  131 => 39,  129 => 38,  120 => 32,  114 => 29,  110 => 27,  102 => 23,  99 => 22,  91 => 18,  89 => 17,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  56 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/api_list.twig", "");
    }
}
