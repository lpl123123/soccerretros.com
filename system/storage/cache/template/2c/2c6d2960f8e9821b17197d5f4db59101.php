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

/* journal3/template/journal3/headers/mobile/header_mobile_1.twig */
class __TwigTemplate_2ba60c8c1ad1b5917b47bf35c21bcad3 extends Template
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
        yield "<div class=\"mobile-header mobile-default mobile-1 ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileHeaderClasses"], "method", false, false, false, 1)], "method", false, false, false, 1);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_color_scheme"], "method", false, false, false, 1);
        yield "\">
  <div class=\"mobile-top-bar ";
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_top_color_scheme"], "method", false, false, false, 2);
        yield "\">
    <div class=\"mobile-top-menu-wrapper\">
      ";
        // line 4
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_top_menu"], "method", false, false, false, 4);
        yield "
    </div>
    ";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileLangPosition"], "method", false, false, false, 6) == "top")) {
            // line 7
            yield "    <div class=\"language-currency top-menu\">
      <div class=\"mobile-language-wrapper\">
        ";
            // line 9
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["language"] ?? null)) : (""));
            yield "
      </div>
      <div class=\"mobile-currency-wrapper\">
        ";
            // line 12
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["currency"] ?? null)) : (""));
            yield "
      </div>
    </div>
    ";
        }
        // line 16
        yield "  </div>
  <div class=\"mobile-bar sticky-bar\">
    <div class=\"mobile-logo-wrapper ";
        // line 18
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_logo_color_scheme"], "method", false, false, false, 18);
        yield "\">
      ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "        <div id=\"logo\">
          ";
            // line 21
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 21) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 21))) {
                // line 22
                yield "            <a href=\"";
                yield ($context["home"] ?? null);
                yield "\">
              <img class=\"header-logo\" src=\"";
                // line 23
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 23);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src2x"], "method", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src"], "method", false, false, false, 23);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_src2x"], "method", false, false, false, 23);
                    yield " 2x\"";
                }
                yield " width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_width"], "method", false, false, false, 23);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_height"], "method", false, false, false, 23);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\" title=\"";
                yield ($context["name"] ?? null);
                yield "\"/>
              <img class=\"header-logo-alternate\" src=\"";
                // line 24
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 24);
                yield "\" ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src2x"], "method", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "srcset=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src"], "method", false, false, false, 24);
                    yield " 1x, ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_src2x"], "method", false, false, false, 24);
                    yield " 2x\"";
                }
                yield " width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_width"], "method", false, false, false, 24);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_logo_alternate_height"], "method", false, false, false, 24);
                yield "\" alt=\"";
                yield ($context["name"] ?? null);
                yield "\" title=\"";
                yield ($context["name"] ?? null);
                yield "\"/>
            </a>
          ";
            } else {
                // line 27
                yield "            <h1><a href=\"";
                yield ($context["home"] ?? null);
                yield "\">";
                yield ($context["name"] ?? null);
                yield "</a></h1>
          ";
            }
            // line 29
            yield "        </div>
      ";
        }
        // line 31
        yield "    </div>
    <div class=\"mobile-bar-group\">
      <a href=\"javascript:;\" class=\"menu-trigger\" data-off-canvas=\"mobile-main-menu-container\" title=\"";
        // line 33
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 33);
        yield "\"><span class=\"menu-icon\"></span></a>
      ";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuStatus1"], "method", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "      <a class=\"mobile-custom-menu mobile-custom-menu-1\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.href"], "method", false, false, false, 35);
            yield "\" ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.attrs"], "method", false, false, false, 35)], "method", false, false, false, 35);
            yield ">
        ";
            // line 36
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.name"], "method", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.total"], "method", false, false, false, 36), CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink1.classes"], "method", false, false, false, 36)], "method", false, false, false, 36);
            yield "
      </a>
      ";
        }
        // line 39
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuStatus2"], "method", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "      <a class=\"mobile-custom-menu mobile-custom-menu-2\" href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.href"], "method", false, false, false, 40);
            yield "\" ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "linkAttrs", [CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.attrs"], "method", false, false, false, 40)], "method", false, false, false, 40);
            yield ">
        ";
            // line 41
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "countBadge", [CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.name"], "method", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.total"], "method", false, false, false, 41), CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileCustomMenuLink2.classes"], "method", false, false, false, 41)], "method", false, false, false, 41);
            yield "
      </a>
      ";
        }
        // line 44
        yield "      <div class=\"mobile-search-wrapper mini-search\">
        ";
        // line 45
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (Twig\Extension\CoreExtension::replace(($context["search"] ?? null), ["color-scheme-__SEARCH_COLOR_SCHEME__" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 46
($context["journal3"] ?? null), "get", ["header_mobile_search_color_scheme"], "method", false, false, false, 46)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_search_color_scheme"], "method", false, false, false, 46)) : ("color-scheme-")), "color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__" => CoreExtension::getAttribute($this->env, $this->source,         // line 47
($context["journal3"] ?? null), "get", ["header_mobile_search_categories_color_scheme"], "method", false, false, false, 47)])) : (""));
        // line 48
        yield "
      </div>
      <div class=\"mobile-cart-wrapper mini-cart\">
        ";
        // line 51
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["cart"] ?? null)) : (""));
        yield "
      </div>
    </div>
  </div>
  ";
        // line 55
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_secondary_menu"], "method", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "    <div class=\"mobile-secondary-menu ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_mobile_secondary_menu_color_scheme"], "method", false, false, false, 56);
            yield "\">
      ";
            // line 57
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_secondary_menu"], "method", false, false, false, 57);
            yield "
    </div>
  ";
        }
        // line 60
        yield "</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/headers/mobile/header_mobile_1.twig";
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
        return array (  223 => 60,  217 => 57,  212 => 56,  210 => 55,  203 => 51,  198 => 48,  196 => 47,  195 => 46,  194 => 45,  191 => 44,  185 => 41,  178 => 40,  175 => 39,  169 => 36,  162 => 35,  160 => 34,  156 => 33,  152 => 31,  148 => 29,  140 => 27,  118 => 24,  98 => 23,  93 => 22,  91 => 21,  88 => 20,  86 => 19,  82 => 18,  78 => 16,  71 => 12,  65 => 9,  61 => 7,  59 => 6,  54 => 4,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/headers/mobile/header_mobile_1.twig", "");
    }
}
