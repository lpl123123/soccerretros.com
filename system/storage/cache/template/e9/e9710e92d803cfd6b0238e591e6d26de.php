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

/* user/user_group_list.twig */
class __TwigTemplate_d70b82e640e2cdced4ebccab593b2b6e extends Template
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
        yield "') ? \$('#form-user-group').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user-group\">
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
        yield ($context["column_action"] ?? null);
        yield "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 47
        if ((($tmp = ($context["user_groups"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["user_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user_group"]) {
                // line 49
                yield "                <tr>
                  <td class=\"text-center\">";
                // line 50
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 50), ($context["selected"] ?? null))) {
                    // line 51
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 51);
                    yield "\" checked=\"checked\" />
                    ";
                } else {
                    // line 53
                    yield "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "user_group_id", [], "any", false, false, false, 53);
                    yield "\" />
                    ";
                }
                // line 54
                yield "</td>
                  <td class=\"text-left\">";
                // line 55
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "name", [], "any", false, false, false, 55);
                yield "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 56
                yield CoreExtension::getAttribute($this->env, $this->source, $context["user_group"], "edit", [], "any", false, false, false, 56);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                ";
        } else {
            // line 60
            yield "                <tr>
                  <td class=\"text-center\" colspan=\"3\">";
            // line 61
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                </tr>
                ";
        }
        // line 64
        yield "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 69
        yield ($context["pagination"] ?? null);
        yield "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 70
        yield ($context["results"] ?? null);
        yield "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 76
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/user_group_list.twig";
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
        return array (  233 => 76,  224 => 70,  220 => 69,  213 => 64,  207 => 61,  204 => 60,  201 => 59,  190 => 56,  186 => 55,  183 => 54,  177 => 53,  171 => 51,  169 => 50,  166 => 49,  161 => 48,  159 => 47,  152 => 43,  149 => 42,  141 => 41,  131 => 39,  129 => 38,  120 => 32,  114 => 29,  110 => 27,  102 => 23,  99 => 22,  91 => 18,  89 => 17,  83 => 13,  72 => 11,  68 => 10,  63 => 8,  56 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/user_group_list.twig", "");
    }
}
