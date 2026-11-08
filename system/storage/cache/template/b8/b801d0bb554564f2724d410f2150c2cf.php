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

/* journal3/template/account/login.twig */
class __TwigTemplate_947dd89567c2917a4ec71e2575cb87f4 extends Template
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
<div id=\"account-login\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 17
        yield "  ";
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "</div>
  ";
        }
        // line 20
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 21
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 22
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 23
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 24
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 25
            yield "    ";
        } else {
            // line 26
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 27
            yield "    ";
        }
        // line 28
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 29) == "default")) {
            // line 30
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 30);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 32
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"row login-box\">
        ";
        // line 34
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2 class=\"title\">";
            // line 37
            yield ($context["text_new_customer"] ?? null);
            yield "</h2>
            <p><strong>";
            // line 38
            yield ($context["text_register"] ?? null);
            yield "</strong></p>
            <p>";
            // line 39
            yield ($context["text_register_account"] ?? null);
            yield "</p>
            <div class=\"buttons\">
              <div class=\"pull-right\">
                <a href=\"";
            // line 42
            yield ($context["register"] ?? null);
            yield "\" class=\"btn btn-primary\">";
            yield ($context["button_continue"] ?? null);
            yield "</a>
              </div>
            </div>
          </div>
        </div>
        ";
        }
        // line 48
        yield "        <div class=\"col-sm-6\">
          <div class=\"well\">
            <h2 class=\"title\">";
        // line 50
        yield ($context["text_returning_customer"] ?? null);
        yield "</h2>
            <p><strong>";
        // line 51
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</strong></p>
            <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
            <form action=\"";
        // line 53
        yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["login"] ?? null)) : (($context["action"] ?? null)));
        yield "\" method=\"post\" ";
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "enctype=\"multipart/form-data\"";
        }
        yield " class=\"login-form form-horizontal\" ";
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-oc-toggle=\"ajax\"";
        }
        yield ">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">";
        // line 55
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <input type=\"text\" name=\"email\" value=\"";
        // line 56
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-password\">";
        // line 59
        yield ($context["entry_password"] ?? null);
        yield "</label>
                <input type=\"password\" name=\"password\" value=\"";
        // line 60
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
                </div><a class=\"forgot-password\" href=\"";
        // line 61
        yield ($context["forgotten"] ?? null);
        yield "\" target=\"_top\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a>
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
        // line 64
        yield ($context["button_login"] ?? null);
        yield "</span>\"><span>";
        yield ($context["button_login"] ?? null);
        yield "</span></button>
                </div>
              </div>
              ";
        // line 67
        if ((($tmp = ($context["redirect"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "              <input type=\"hidden\" name=\"redirect\" value=\"";
            yield ($context["redirect"] ?? null);
            yield "\" />
              ";
        }
        // line 70
        yield "            </form>
          </div>
        </div>
      </div>
      ";
        // line 74
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 75
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 77
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
        return "journal3/template/account/login.twig";
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
        return array (  267 => 77,  262 => 75,  258 => 74,  252 => 70,  246 => 68,  244 => 67,  236 => 64,  228 => 61,  222 => 60,  218 => 59,  210 => 56,  206 => 55,  193 => 53,  188 => 51,  184 => 50,  180 => 48,  169 => 42,  163 => 39,  159 => 38,  155 => 37,  151 => 35,  149 => 34,  143 => 32,  135 => 30,  133 => 29,  128 => 28,  125 => 27,  122 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  108 => 21,  103 => 20,  97 => 18,  94 => 17,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/login.twig", "");
    }
}
