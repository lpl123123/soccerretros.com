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

/* user/user_group_form.twig */
class __TwigTemplate_eb360f625ba261deb605ab1c9dc3714f extends Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-user-group\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user-group\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 29
        yield ($context["entry_name"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 31
        yield ($context["name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 32
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "              <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
              ";
        }
        // line 35
        yield "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 38
        yield ($context["entry_access"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 42
            yield "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 44
            if (CoreExtension::inFilter($context["permission"], ($context["access"] ?? null))) {
                // line 45
                yield "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                yield $context["permission"];
                yield "\" checked=\"checked\" />
                    ";
                // line 46
                yield $context["permission"];
                yield "
                    ";
            } else {
                // line 48
                yield "                    <input type=\"checkbox\" name=\"permission[access][]\" value=\"";
                yield $context["permission"];
                yield "\" />
                    ";
                // line 49
                yield $context["permission"];
                yield "
                    ";
            }
            // line 51
            yield "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['permission'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 55
        yield ($context["text_select_all"] ?? null);
        yield "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        yield ($context["text_unselect_all"] ?? null);
        yield "</button></div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 58
        yield ($context["entry_modify"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["permissions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 62
            yield "                <div class=\"checkbox\">
                  <label>
                    ";
            // line 64
            if (CoreExtension::inFilter($context["permission"], ($context["modify"] ?? null))) {
                // line 65
                yield "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                yield $context["permission"];
                yield "\" checked=\"checked\" />
                    ";
                // line 66
                yield $context["permission"];
                yield "
                    ";
            } else {
                // line 68
                yield "                    <input type=\"checkbox\" name=\"permission[modify][]\" value=\"";
                yield $context["permission"];
                yield "\" />
                    ";
                // line 69
                yield $context["permission"];
                yield "
                    ";
            }
            // line 71
            yield "                  </label>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['permission'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "              </div>
              <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', true);\" class=\"btn btn-link\">";
        // line 75
        yield ($context["text_select_all"] ?? null);
        yield "</button> / <button type=\"button\" onclick=\"\$(this).parent().find(':checkbox').prop('checked', false);\" class=\"btn btn-link\">";
        yield ($context["text_unselect_all"] ?? null);
        yield "</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 82
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/user_group_form.twig";
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
        return array (  250 => 82,  238 => 75,  235 => 74,  227 => 71,  222 => 69,  217 => 68,  212 => 66,  207 => 65,  205 => 64,  201 => 62,  197 => 61,  191 => 58,  183 => 55,  180 => 54,  172 => 51,  167 => 49,  162 => 48,  157 => 46,  152 => 45,  150 => 44,  146 => 42,  142 => 41,  136 => 38,  131 => 35,  125 => 33,  123 => 32,  117 => 31,  112 => 29,  107 => 27,  101 => 24,  97 => 22,  89 => 18,  87 => 17,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/user_group_form.twig", "");
    }
}
