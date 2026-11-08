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

/* journal3/template/journal3/module/image.twig */
class __TwigTemplate_a6b32b344e41f931a8ec02f01f89e8c1 extends Template
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
        yield "<div id=\"";
        yield ($context["id"] ?? null);
        yield "\" class=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 1);
        yield "\">
  <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
        // line 2
        yield ($context["edit"] ?? null);
        yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
        yield ($context["name"] ?? null);
        yield "\"></em></button>
  ";
        // line 3
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    <h3 class=\"title module-title\">";
            yield ($context["title"] ?? null);
            yield "</h3>
  ";
        }
        // line 6
        yield "  <div class=\"module-body\">
    <a href=\"";
        // line 7
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["link"] ?? null), "href", [], "any", false, false, false, 7), "javascript:;")) : ("javascript:;"));
        yield "\" ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [($context["link"] ?? null)], "method", false, false, false, 7);
        yield ">
      ";
        // line 8
        if ((($context["type"] ?? null) != "icon")) {
            // line 9
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["performanceLazyLoadImagesStatus"], "method", false, false, false, 9) && ($context["lazyLoad"] ?? null))) {
                // line 10
                yield "          <img src=\"";
                yield ($context["dummy_image"] ?? null);
                yield "\" data-src=\"";
                yield ($context["image"] ?? null);
                yield "\" ";
                if ((($tmp = ($context["image2x"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-srcset=\"";
                    yield ($context["image"] ?? null);
                    yield " 1x, ";
                    yield ($context["image2x"] ?? null);
                    yield " 2x\" ";
                }
                yield " alt=\"";
                yield ($context["alt"] ?? null);
                yield "\" width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\" class=\"lazyload\"/>
        ";
            } else {
                // line 12
                yield "          <img src=\"";
                yield ($context["image"] ?? null);
                yield "\" ";
                if ((($tmp = ($context["image2x"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "srcset=\"";
                    yield ($context["image"] ?? null);
                    yield " 1x, ";
                    yield ($context["image2x"] ?? null);
                    yield " 2x\" ";
                }
                yield " alt=\"";
                yield ($context["alt"] ?? null);
                yield "\" width=\"";
                yield ($context["image_width"] ?? null);
                yield "\" height=\"";
                yield ($context["image_height"] ?? null);
                yield "\"/>
        ";
            }
            // line 14
            yield "      ";
        } else {
            // line 15
            yield "        <em class=\"image-icon\"></em>
      ";
        }
        // line 17
        yield "    </a>
    ";
        // line 18
        if ((($tmp = ($context["caption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "      <span class=\"image-caption\">";
            yield ($context["caption"] ?? null);
            yield "</span>
    ";
        }
        // line 21
        yield "  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/module/image.twig";
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
        return array (  137 => 21,  131 => 19,  129 => 18,  126 => 17,  122 => 15,  119 => 14,  99 => 12,  77 => 10,  74 => 9,  72 => 8,  66 => 7,  63 => 6,  57 => 4,  55 => 3,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/module/image.twig", "");
    }
}
