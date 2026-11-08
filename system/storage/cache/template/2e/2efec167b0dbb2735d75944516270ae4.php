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

/* journal3/template/checkout/login.twig */
class __TwigTemplate_bb6cb4d53f24a735e6dc617cea4c1ffb extends Template
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
        yield "<div class=\"row login-box\">
  <div class=\"col-sm-6\">
    <div class=\"well\">
    <h2 class=\"title\">";
        // line 4
        yield ($context["text_new_customer"] ?? null);
        yield "</h2>
    <p>";
        // line 5
        yield ($context["text_checkout"] ?? null);
        yield "</p>
    <div class=\"radio\">
      <label> ";
        // line 7
        if ((($context["account"] ?? null) == "register")) {
            // line 8
            yield "        <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\" />
        ";
        } else {
            // line 10
            yield "        <input type=\"radio\" name=\"account\" value=\"register\" />
        ";
        }
        // line 12
        yield "        ";
        yield ($context["text_register"] ?? null);
        yield "</label>
    </div>
    ";
        // line 14
        if ((($tmp = ($context["checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "    <div class=\"radio\">
      <label> ";
            // line 16
            if ((($context["account"] ?? null) == "guest")) {
                // line 17
                yield "        <input type=\"radio\" name=\"account\" value=\"guest\" checked=\"checked\" />
        ";
            } else {
                // line 19
                yield "        <input type=\"radio\" name=\"account\" value=\"guest\" />
        ";
            }
            // line 21
            yield "        ";
            yield ($context["text_guest"] ?? null);
            yield "</label>
    </div>
    ";
        }
        // line 24
        yield "    <p>";
        yield ($context["text_register_account"] ?? null);
        yield "</p>
    <div class=\"buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-account\" data-loading-text=\"";
        // line 27
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
      </div>
    </div>
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"well\">
    <h2 class=\"title\">";
        // line 34
        yield ($context["text_returning_customer"] ?? null);
        yield "</h2>
    <p>";
        // line 35
        yield ($context["text_i_am_returning_customer"] ?? null);
        yield "</p>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-email\">";
        // line 37
        yield ($context["entry_email"] ?? null);
        yield "</label>
      <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 38
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
    </div>
    <div class=\"form-group\">
      <label class=\"control-label\" for=\"input-password\">";
        // line 41
        yield ($context["entry_password"] ?? null);
        yield "</label>
      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 42
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
    </div><a class=\"forgot-password\" href=\"";
        // line 43
        yield ($context["forgotten"] ?? null);
        yield "\">";
        yield ($context["text_forgotten"] ?? null);
        yield "</a>
    <div class=\"buttons\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-login\" data-loading-text=\"";
        // line 46
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_login"] ?? null);
        yield "</span></button>
      </div>
    </div>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/checkout/login.twig";
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
        return array (  148 => 46,  140 => 43,  136 => 42,  132 => 41,  126 => 38,  122 => 37,  117 => 35,  113 => 34,  101 => 27,  94 => 24,  87 => 21,  83 => 19,  79 => 17,  77 => 16,  74 => 15,  72 => 14,  66 => 12,  62 => 10,  58 => 8,  56 => 7,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/login.twig", "");
    }
}
