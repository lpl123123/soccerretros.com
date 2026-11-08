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

/* journal3/template/common/search.twig */
class __TwigTemplate_d11900aadec427eade6273ab341c7b54 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogSearchStatus"], "method", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 10
            yield "<div id=\"search\" class=\"dropdown search-dropdown-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMiniSearchDisplay"], "method", false, false, false, 10);
            yield "\">
  <button class=\"dropdown-toggle search-trigger\" data-toggle=\"dropdown\" title=\"";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 11);
            yield "\"><span class=\"menu-icon\"></span></button>
  <div class=\"dropdown-menu j-dropdown color-scheme-__SEARCH_COLOR_SCHEME__\">
    <div class=\"header-search\">
      ";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchCategoriesSelectorStatus"], "method", false, false, false, 14) && ($context["categories"] ?? null))) {
                // line 15
                yield "        <div class=\"search-categories dropdown drop-menu\">
          <div class=\"search-categories-button dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 16
                yield (((($tmp = ($context["category_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["category"] ?? null)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchCategories"], "method", false, false, false, 16)));
                yield "</div>
          <div class=\"dropdown-menu j-dropdown color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__\">
            <ul class=\"j-menu\">
              <li data-category_id=\"0\" class=\"category-level-1 menu-item\"><a href=\"javascript:;\">";
                // line 19
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchCategories"], "method", false, false, false, 19);
                yield "</a></li>
              ";
                // line 20
                yield $this->getTemplateForMacro("macro_renderSearchCategories", $context, 20, $this->getSourceContext())->macro_renderSearchCategories(...[$context, ($context["categories"] ?? null), ($context["category_id"] ?? null), 1]);
                yield "
            </ul>
          </div>
        </div>
      ";
            }
            // line 25
            yield "      <label class=\"sr-only\" for=\"search-input-el\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 25);
            yield "</label>
      <input id=\"search-input-el\" type=\"search\" name=\"search\" value=\"";
            // line 26
            yield ($context["search"] ?? null);
            yield "\" placeholder=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 26);
            yield "\" class=\"search-input\" data-category_id=\"";
            yield ($context["category_id"] ?? null);
            yield "\"/>
      <button type=\"button\" class=\"search-button\" title=\"";
            // line 27
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["searchStyleSearchPlaceholder"], "method", false, false, false, 27);
            yield "\"></button>
    </div>
  </div>
</div>
";
        }
        yield from [];
    }

    // line 2
    public function macro_renderSearchCategories($͜context = null, $categories = null, $category_id = null, $index = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "context" => $͜context,
            "categories" => $categories,
            "category_id" => $category_id,
            "index" => $index,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 3
            yield "  ";
            $context["journal3"] = CoreExtension::getAttribute($this->env, $this->source, ($context["context"] ?? null), "journal3", [], "any", false, false, false, 3);
            // line 4
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 5
                yield "    ";
                $context["classes"] = ["selected" => (CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 5) == ($context["category_id"] ?? null))];
                // line 6
                yield "    <li data-category_id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 6);
                yield "\" class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["classes"] ?? null)], "method", false, false, false, 6);
                yield " category-level-";
                yield ($context["index"] ?? null);
                yield " menu-item\"><a href=\"javascript:;\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "title", [], "any", false, false, false, 6);
                yield "</a></li>
    ";
                // line 7
                yield $this->getTemplateForMacro("macro_renderSearchCategories", $context, 7, $this->getSourceContext())->macro_renderSearchCategories(...[($context["context"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["category"], "items", [], "any", false, false, false, 7), ($context["category_id"] ?? null), (($context["index"] ?? null) + 1)]);
                yield "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/common/search.twig";
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
        return array (  139 => 7,  128 => 6,  125 => 5,  120 => 4,  117 => 3,  102 => 2,  91 => 27,  83 => 26,  78 => 25,  70 => 20,  66 => 19,  60 => 16,  57 => 15,  55 => 14,  49 => 11,  44 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/search.twig", "");
    }
}
