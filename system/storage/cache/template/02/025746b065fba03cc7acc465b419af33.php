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

/* journal3/journal3.twig */
class __TwigTemplate_4a8c92ab79f38f3325d4063dba526939 extends Template
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
<style>";
        // line 2
        yield ($context["journal3_custom_fonts_css"] ?? null);
        yield "</style>
";
        // line 3
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page\">
    <div class=\"j-header\">
      <div class=\"j-logo\"><span>";
        // line 7
        yield ($context["j3v"] ?? null);
        yield "</span></div>
      <div class=\"j-title\"></div>
      <div class=\"j-buttons\"><a class=\"button fs-button\"><i class=\"icon icon-fullscreen\"></i></a></div>
    </div>
    <div class=\"j-content\">
      <div class=\"loading\">
        <i class=\"fa fa-spin icon-uniE92F\"></i>
        <span>Loading...</span>
      </div>
    </div>
  </div>
</div>
";
        // line 19
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
        return "journal3/journal3.twig";
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
        return array (  72 => 19,  57 => 7,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/journal3.twig", "");
    }
}
