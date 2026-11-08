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

/* extension/extension/advertise.twig */
class __TwigTemplate_b95ea8a658bd2a21fea21436f6759e95 extends Template
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
        yield "<fieldset>
  <legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div id=\"blockerError\" style=\"display: none;\" class=\"alert alert-danger\">
    <i class=\"fa fa-exclamation-circle\"></i> ";
        // line 4
        yield ($context["error_adblock"] ?? null);
        yield "
  </div>
  ";
        // line 6
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 11
        yield "  ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 12
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 16
        yield "  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-left\">";
        // line 20
        yield ($context["column_name"] ?? null);
        yield "</td>
          <td class=\"text-left\">";
        // line 21
        yield ($context["column_status"] ?? null);
        yield "</td>
          <td class=\"text-right\">";
        // line 22
        yield ($context["column_action"] ?? null);
        yield "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        if ((($tmp = ($context["extensions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 28
                yield "        <tr>
          <td class=\"text-left\" colspan=\"2\"><b>";
                // line 29
                yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "name", [], "any", false, false, false, 29);
                yield "</b></td>
          <td class=\"text-right\">";
                // line 30
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 31
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "install", [], "any", false, false, false, 31);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_install"] ?? null);
                    yield "\" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
            ";
                } else {
                    // line 33
                    yield "            <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "uninstall", [], "any", false, false, false, 33);
                    yield "\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_uninstall"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
            ";
                }
                // line 34
                yield "</td>
        </tr>
        ";
                // line 36
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "installed", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 37
                    yield "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["extension"], "store", [], "any", false, false, false, 37));
                    foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                        // line 38
                        yield "        <tr>
          <td class=\"text-left\">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;";
                        // line 39
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 39);
                        yield "</td>
          <td class=\"text-left\">";
                        // line 40
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "status", [], "any", false, false, false, 40);
                        yield "</td>
          <td class=\"text-right\"><a href=\"";
                        // line 41
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "edit", [], "any", false, false, false, 41);
                        yield "\" data-toggle=\"tooltip\" title=\"";
                        yield ($context["button_edit"] ?? null);
                        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
        </tr>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    yield "        ";
                }
                // line 45
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['extension'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "        ";
        } else {
            // line 47
            yield "        <tr>
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
<style type=\"text/css\">
  .adBanner {
      background-color: transparent;
      height: 1px;
      width: 1px;
  }
</style>
<div id=\"wrapTest\">
    <div class=\"adBanner\">
    </div>
</div>
<script type=\"text/javascript\">
  (function(\$) {
    \$(document).ready(function() {
      \$('#blockerError').toggle(\$(\"#wrapTest\").height() == 0);
    });
  })(jQuery);
</script>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "extension/extension/advertise.twig";
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
        return array (  183 => 51,  177 => 48,  174 => 47,  171 => 46,  165 => 45,  162 => 44,  151 => 41,  147 => 40,  143 => 39,  140 => 38,  135 => 37,  133 => 36,  129 => 34,  121 => 33,  113 => 31,  111 => 30,  107 => 29,  104 => 28,  99 => 27,  97 => 26,  90 => 22,  86 => 21,  82 => 20,  76 => 16,  68 => 12,  65 => 11,  57 => 7,  55 => 6,  50 => 4,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/extension/advertise.twig", "");
    }
}
