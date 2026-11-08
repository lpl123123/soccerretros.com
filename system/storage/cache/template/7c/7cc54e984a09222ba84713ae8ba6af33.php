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

/* extension/extension/module.twig */
class __TwigTemplate_9fc639a7915c5fa1d05decf96ae3f0a1 extends Template
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
        yield ($context["promotion"] ?? null);
        yield "
<fieldset>
  <legend>";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  ";
        // line 4
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 9
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 14
        yield "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        yield ($context["text_layout"] ?? null);
        yield "</div>
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 19
        yield ($context["column_name"] ?? null);
        yield "</td>
          <td class=\"text-left\">";
        // line 20
        yield ($context["column_status"] ?? null);
        yield "</td>
          <td class=\"text-right\">";
        // line 21
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
      
      ";
        // line 26
        if ((($tmp = ($context["extensions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 28
                yield "      <tr>
        <td><b>";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 29);
                yield "</b></td>
        <td>";
                // line 30
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "status", [], "any", false, false, false, 30);
                yield "</td>
        <td class=\"text-right\">";
                // line 31
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 31)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 32
                    yield "          ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 32);
                        yield "\" data-toggle=\"tooltip\" title=\"";
                        yield ($context["button_add"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></a> ";
                    } else {
                        yield " <a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "edit", [], "any", false, false, false, 32);
                        yield "\" data-toggle=\"tooltip\" title=\"";
                        yield ($context["button_edit"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> ";
                    }
                    // line 33
                    yield "          ";
                } else {
                    // line 34
                    yield "          <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
          ";
                }
                // line 36
                yield "          ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 36);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a> ";
                } else {
                    yield " <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 36);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>";
                }
                yield "</td>
      </tr>
      ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "module", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 39
                    yield "      <tr>
        <td class=\"text-left\">&nbsp;&nbsp;&nbsp;<i class=\"fa fa-folder-open\"></i>&nbsp;&nbsp;&nbsp;";
                    // line 40
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "name", [], "any", false, false, false, 40);
                    yield "</td>
        <td class=\"text-left\">";
                    // line 41
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "status", [], "any", false, false, false, 41);
                    yield "</td>
        <td class=\"text-right\"><a href=\"";
                    // line 42
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "edit", [], "any", false, false, false, 42);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_edit"] ?? null);
                    yield "\" class=\"btn btn-info\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "delete", [], "any", false, false, false, 42);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_delete"] ?? null);
                    yield "\" class=\"btn btn-warning\"><i class=\"fa fa-trash-o\"></i></a></td>
      </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "      ";
        } else {
            // line 47
            yield "      <tr>
        <td class=\"text-center\" colspan=\"3\">";
            // line 48
            yield ($context["text_no_results"] ?? null);
            yield "</td>
      </tr>
      ";
        }
        // line 51
        yield "      </tbody>
      
    </table>
  </div>
</fieldset>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/extension/module.twig";
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
        return array (  205 => 51,  199 => 48,  196 => 47,  193 => 46,  187 => 45,  172 => 42,  168 => 41,  164 => 40,  161 => 39,  157 => 38,  139 => 36,  135 => 34,  132 => 33,  117 => 32,  115 => 31,  111 => 30,  107 => 29,  104 => 28,  99 => 27,  97 => 26,  89 => 21,  85 => 20,  81 => 19,  72 => 14,  64 => 10,  61 => 9,  53 => 5,  51 => 4,  47 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/extension/module.twig", "");
    }
}
