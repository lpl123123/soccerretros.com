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

/* journal3/template/journal3/module/product_blocks_reviews.twig */
class __TwigTemplate_119b1be6238afcf0c82f8643ad0a84f2 extends Template
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
        yield "<form class=\"form-horizontal\" id=\"form-review\">
  <div id=\"review\"></div>
  <h4>";
        // line 3
        yield ($context["text_write"] ?? null);
        yield "</h4>
  ";
        // line 4
        if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 5
            yield "  ";
            if ((($tmp = ($context["review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 6
                yield "    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-name\">";
                // line 7
                yield ($context["entry_name"] ?? null);
                yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"name\" value=\"";
                // line 9
                yield ($context["customer_name"] ?? null);
                yield "\" id=\"input-name\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-review\">";
                // line 13
                yield ($context["entry_review"] ?? null);
                yield "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
        <div class=\"help-block\">";
                // line 16
                yield ($context["text_note"] ?? null);
                yield "</div>
      </div>
    </div>
    <fieldset>
      <legend class=\"sr-only\">";
                // line 20
                yield ($context["entry_rating"] ?? null);
                yield "</legend>
      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\">";
                // line 22
                yield ($context["entry_rating"] ?? null);
                yield "</label>

        <div class=\"col-sm-10 rate\">
          <span>";
                // line 25
                yield ($context["entry_bad"] ?? null);
                yield "</span>
          <input type=\"radio\" name=\"rating\" value=\"1\" aria-label=\"1\" title=\"1\"/>

          <input type=\"radio\" name=\"rating\" value=\"2\" aria-label=\"2\" title=\"2\"/>

          <input type=\"radio\" name=\"rating\" value=\"3\" aria-label=\"3\" title=\"3\"/>

          <input type=\"radio\" name=\"rating\" value=\"4\" aria-label=\"4\" title=\"4\"/>

          <input type=\"radio\" name=\"rating\" value=\"5\" aria-label=\"5\" title=\"5\"/>
          <span>";
                // line 35
                yield ($context["entry_good"] ?? null);
                yield "</span>
        </div>
      </div>
    </fieldset>
    ";
                // line 39
                yield ($context["captcha"] ?? null);
                yield "
    <div class=\"buttons clearfix\">
      <div class=\"pull-right\">
        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 42
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-primary\">";
                yield ($context["button_continue"] ?? null);
                yield "</button>
      </div>
    </div>
  ";
            } else {
                // line 46
                yield "    ";
                yield ($context["text_login"] ?? null);
                yield "
  ";
            }
            // line 48
            yield "  ";
        }
        // line 49
        yield "</form>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/product_blocks_reviews.twig";
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
        return array (  138 => 49,  135 => 48,  129 => 46,  120 => 42,  114 => 39,  107 => 35,  94 => 25,  88 => 22,  83 => 20,  76 => 16,  70 => 13,  63 => 9,  58 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/product_blocks_reviews.twig", "");
    }
}
