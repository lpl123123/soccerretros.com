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

/* journal3/template/common/home.twig */
class __TwigTemplate_1f289b51eb6e7b92dc5e1b2b5a574570 extends Template
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
        yield ($context["journal3_top"] ?? null);
        yield "
";
        // line 3
        if ((((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null)) || ($context["column_left"] ?? null)) || ($context["column_right"] ?? null))) {
            // line 4
            yield "<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
            // line 5
            yield ($context["column_left"] ?? null);
            yield "
    ";
            // line 6
            if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                // line 7
                yield "    ";
                $context["class"] = "col-sm-6";
                // line 8
                yield "    ";
            } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                // line 9
                yield "    ";
                $context["class"] = "col-sm-9";
                // line 10
                yield "    ";
            } else {
                // line 11
                yield "    ";
                $context["class"] = "col-sm-12";
                // line 12
                yield "    ";
            }
            // line 13
            yield "    ";
            if ((($context["content_top"] ?? null) || ($context["content_bottom"] ?? null))) {
                // line 14
                yield "    <div id=\"content\" class=\"";
                yield ($context["class"] ?? null);
                yield "\">";
                yield ($context["content_top"] ?? null);
                yield ($context["content_bottom"] ?? null);
                yield "</div>
    ";
            }
            // line 16
            yield "    ";
            yield ($context["column_right"] ?? null);
            yield "</div>
</div>
";
        }
        // line 19
        yield ($context["journal3_rich_snippets"] ?? null);
        yield "
";
        // line 20
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
        return "journal3/template/common/home.twig";
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
        return array (  102 => 20,  98 => 19,  91 => 16,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  59 => 6,  55 => 5,  52 => 4,  50 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/home.twig", "");
    }
}
