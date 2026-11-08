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

/* journal3/template/common/language.twig */
class __TwigTemplate_1fd610edae7ce0551ad302020557e532 extends Template
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
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogLanguageStatus"], "method", false, false, false, 1)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["languages"] ?? null)) > 1)) {
                // line 3
                yield "<div id=\"language\" class=\"language\">
  <form id=\"form-language\" action=\"";
                // line 4
                yield ($context["action"] ?? null);
                yield "\" method=\"post\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "href", [], "any", false, false, false, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "enctype=\"multipart/form-data\"";
                } else {
                    yield "data-oc-toggle=\"ajax\"";
                }
                yield ">
    <div class=\"dropdown drop-menu\">
      <button type=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"language-flag-title\">
          ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 9
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 9) == ($context["code"] ?? null))) {
                        // line 10
                        yield "          <span class=\"symbol\" style=\"background-image: url('";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "journal3_language_image", [], "any", false, false, false, 10);
                        yield "')\"><img src=\"";
                        yield ($context["journal3_language_image_placeholder"] ?? null);
                        yield "\" width=\"";
                        yield ($context["journal3_language_image_width"] ?? null);
                        yield "\" height=\"";
                        yield ($context["journal3_language_image_height"] ?? null);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 10);
                        yield "\"/></span>
          <span class=\"language-title\">";
                        // line 11
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 11);
                        yield "</span>
          ";
                    }
                    // line 13
                    yield "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                yield "        </span>
      </button>
      <div class=\"dropdown-menu j-dropdown\">
      <ul class=\"j-menu\">
        ";
                // line 18
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 19
                    yield "        <li class=\"menu-item\">
          <a class=\"language-select dropdown-item\" ";
                    // line 20
                    if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "href=\"";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 20)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["language"], "href", [], "any", false, false, false, 20)) : (CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 20)));
                        yield "\" ";
                    } else {
                        yield "role=\"button\"";
                    }
                    yield " data-name=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 20);
                    yield "\">
            <span class=\"language-flag\" style=\"background-image: url('";
                    // line 21
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "journal3_language_image", [], "any", false, false, false, 21);
                    yield "')\"><img src=\"";
                    yield ($context["journal3_language_image_placeholder"] ?? null);
                    yield "\" width=\"";
                    yield ($context["journal3_language_image_width"] ?? null);
                    yield "\" height=\"";
                    yield ($context["journal3_language_image_height"] ?? null);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 21);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 21);
                    yield "\"/></span>
            <span class=\"language-title-dropdown\">";
                    // line 22
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 22);
                    yield "</span>
          </a>
        </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                yield "      </ul>
      </div>
    </div>
    <input type=\"hidden\" name=\"code\" value=\"\" />
    <input type=\"hidden\" name=\"redirect\" value=\"";
                // line 30
                yield ($context["redirect"] ?? null);
                yield "\" />
  </form>
</div>
";
            }
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/common/language.twig";
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
        return array (  150 => 30,  144 => 26,  134 => 22,  120 => 21,  108 => 20,  105 => 19,  101 => 18,  95 => 14,  89 => 13,  84 => 11,  69 => 10,  66 => 9,  62 => 8,  49 => 4,  46 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/language.twig", "");
    }
}
