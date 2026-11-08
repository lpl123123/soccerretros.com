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

/* journal3/template/common/footer.twig */
class __TwigTemplate_1971085c4e36a221eab9e903bd8f3626 extends Template
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
        if ((($tmp =  !array_key_exists("journal3", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<style>body { display: none !important; }</style>
<script>window.location = 'index.php?route=journal3/startup/error_not_installed';</script>
";
        }
        // line 5
        yield "
";
        // line 6
        yield ($context["journal3_bottom"] ?? null);
        yield "

";
        // line 8
        yield "</div>";
        // line 9
        yield "
";
        // line 10
        if ((($tmp = ($context["journal3_footer_menu"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "  <footer class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["footer_color_scheme"], "method", false, false, false, 11);
            yield "\">";
            yield ($context["journal3_footer_menu"] ?? null);
            yield "</footer>
";
        }
        // line 13
        yield "
";
        // line 14
        yield "</div>";
        yield " ";
        // line 15
        yield "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 17
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "js_defer", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 18
                yield "<script src=\"";
                yield $context["script"];
                yield "\" defer></script>
";
            } else {
                // line 20
                yield "<script src=\"";
                yield $context["script"];
                yield "\"></script>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customJS"], "method", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "<script type=\"text/javascript\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customJS"], "method", false, false, false, 25);
            yield "</script>
";
        }
        // line 27
        yield "
";
        // line 28
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 28) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeFooter"], "method", false, false, false, 28))) {
            // line 29
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeFooter"], "method", false, false, false, 29);
            yield "
";
        }
        // line 31
        yield "
";
        // line 32
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 32) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["scrollTop"], "method", false, false, false, 32))) {
            // line 33
            yield "<div class=\"scroll-top\"><em class=\"fa fa-angle-up\"></em></div>
";
        }
        // line 35
        yield "
";
        // line 36
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 36) && CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["filterActive"], "method", false, false, false, 36))) {
            // line 37
            yield "<a class=\"mobile-filter-trigger btn\" data-off-canvas=\"mobile-filter-container\" role=\"button\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterButtonText"], "method", false, false, false, 37);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterButtonText"], "method", false, false, false, 37);
            yield "</a>
";
        }
        // line 39
        yield "
</body></html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/common/footer.twig";
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
        return array (  146 => 39,  138 => 37,  136 => 36,  133 => 35,  129 => 33,  127 => 32,  124 => 31,  119 => 29,  117 => 28,  114 => 27,  108 => 25,  106 => 24,  103 => 23,  93 => 20,  87 => 18,  85 => 17,  81 => 16,  78 => 15,  75 => 14,  72 => 13,  64 => 11,  62 => 10,  59 => 9,  57 => 8,  52 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/footer.twig", "");
    }
}
