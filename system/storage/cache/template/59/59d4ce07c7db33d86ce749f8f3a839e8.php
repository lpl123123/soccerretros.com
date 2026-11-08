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

/* default/template/extension/payment/webshop_result.twig */
class __TwigTemplate_95ce1a39a0d6f1da63fa76459cc85356 extends Template
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
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"";
        // line 2
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["language"] ?? null);
        yield "\" xml:lang=\"";
        yield ($context["language"] ?? null);
        yield "\">
";
        // line 3
        yield ($context["header"] ?? null);
        yield ($context["column_left"] ?? null);
        yield ($context["column_right"] ?? null);
        yield "
<div id=\"content\">";
        // line 4
        yield ($context["content_top"] ?? null);
        yield "
<head>
<title>";
        // line 6
        yield ($context["title"] ?? null);
        yield "</title>
<base href=\"";
        // line 7
        yield ($context["base"] ?? null);
        yield "\" />
</head>
<body>
<div style=\"text-align: center;\">
  <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
  <p>";
        // line 12
        yield ($context["text_payResult"] ?? null);
        yield "</p>
  <div style=\"border: 1px solid #DDDDDD; margin-bottom: 20px; width: 350px; margin-left: auto; margin-right: auto;\">
    <webshop ITEM=banner>
  </div>
  <p>";
        // line 16
        yield ($context["text_result"] ?? null);
        yield "</p>
  <p>";
        // line 17
        yield ($context["text_result_wait"] ?? null);
        yield "</p>
</div>
<script type=\"text/javascript\"><!--
\tsetTimeout('location = \\'";
        // line 20
        yield ($context["continue"] ?? null);
        yield "\\';', 10000);
//--></script>
</body>";
        // line 22
        yield ($context["footer"] ?? null);
        yield "
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/extension/payment/webshop_result.twig";
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
        return array (  101 => 22,  96 => 20,  90 => 17,  86 => 16,  79 => 12,  75 => 11,  68 => 7,  64 => 6,  59 => 4,  53 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/extension/payment/webshop_result.twig", "");
    }
}
