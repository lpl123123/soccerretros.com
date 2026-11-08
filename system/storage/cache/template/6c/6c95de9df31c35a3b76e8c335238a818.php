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

/* journal3/template/journal3/headers/desktop/classic.twig */
class __TwigTemplate_89fe7ea94de4785f0761eabb9da5b33d extends Template
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
        yield "<div class=\"header header-classic header-lg ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerClasses"], "method", false, false, false, 1)], "method", false, false, false, 1);
        yield "\">
  <div class=\"top-bar navbar-nav ";
        // line 2
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_top_color_scheme"], "method", false, false, false, 2);
        yield "\">
    ";
        // line 3
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu"], "method", false, false, false, 3);
        yield "
    ";
        // line 4
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["langPosition"], "method", false, false, false, 4) == "top")) {
            // line 5
            yield "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 7
            yield ($context["language"] ?? null);
            yield "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 10
            yield ($context["currency"] ?? null);
            yield "
        </div>
      </div>
    ";
        }
        // line 14
        yield "    <div class=\"top-menu third-menu\">";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_3"], "method", false, false, false, 14);
        yield "</div>
    ";
        // line 15
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondaryMenuPosition"], "method", false, false, false, 15) == "top")) {
            // line 16
            yield "      <div class=\"top-menu secondary-menu\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_2"], "method", false, false, false, 16);
            yield "</div>
    ";
        }
        // line 18
        yield "  </div>
  <div class=\"mid-bar navbar-nav\">
    <div class=\"desktop-logo-wrapper ";
        // line 20
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_logo_color_scheme"], "method", false, false, false, 20);
        yield "\">
      <div id=\"logo\">
        ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 22) || CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 22))) {
            // line 23
            yield "          <a href=\"";
            yield ($context["home"] ?? null);
            yield "\">
            <img class=\"header-logo\" src=\"";
            // line 24
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 24);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src2x"], "method", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "srcset=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src"], "method", false, false, false, 24);
                yield " 1x, ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_src2x"], "method", false, false, false, 24);
                yield " 2x\"";
            }
            yield " width=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_width"], "method", false, false, false, 24);
            yield "\" height=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_height"], "method", false, false, false, 24);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\"/>
            <img class=\"header-logo-alternate\" src=\"";
            // line 25
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 25);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src2x"], "method", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "srcset=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src"], "method", false, false, false, 25);
                yield " 1x, ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_src2x"], "method", false, false, false, 25);
                yield " 2x\"";
            }
            yield " width=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_width"], "method", false, false, false, 25);
            yield "\" height=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_logo_alternate_height"], "method", false, false, false, 25);
            yield "\" alt=\"";
            yield ($context["name"] ?? null);
            yield "\" title=\"";
            yield ($context["name"] ?? null);
            yield "\"/>
          </a>
        ";
        } else {
            // line 28
            yield "          <h1><a href=\"";
            yield ($context["home"] ?? null);
            yield "\">";
            yield ($context["name"] ?? null);
            yield "</a></h1>
        ";
        }
        // line 30
        yield "      </div>
    </div>
    ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMainMenu2Position"], "method", false, false, false, 32) == "top")) {
            // line 33
            yield "      <div class=\"desktop-main-menu-wrapper menu-top main-menu-2 main-menu-2-top\">
        ";
            // line 34
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "          <div class=\"menu-trigger menu-item main-menu-item menu-trigger-2\">
            <ul class=\"j-menu\">
              <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
                // line 37
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 37);
                yield "</span></a></li>
            </ul>
          </div>
          ";
                // line 40
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 41);
                    yield "
          ";
                }
                // line 43
                yield "        ";
            }
            // line 44
            yield "      </div>
    ";
        }
        // line 46
        yield "    <div class=\"desktop-search-wrapper full-search default-search-wrapper\">
      ";
        // line 47
        yield Twig\Extension\CoreExtension::replace(($context["search"] ?? null), ["color-scheme-__SEARCH_COLOR_SCHEME__" => ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
($context["journal3"] ?? null), "get", ["header_search_color_scheme"], "method", false, false, false, 48)) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_search_color_scheme"], "method", false, false, false, 48)) : ("color-scheme-")), "color-scheme-__SEARCH_CATEGORIES_COLOR_SCHEME__" => CoreExtension::getAttribute($this->env, $this->source,         // line 49
($context["journal3"] ?? null), "get", ["header_search_categories_color_scheme"], "method", false, false, false, 49)]);
        // line 50
        yield "
    </div>
    ";
        // line 52
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["langPosition"], "method", false, false, false, 52) == "search")) {
            // line 53
            yield "      <div class=\"language-currency top-menu\">
        <div class=\"desktop-language-wrapper\">
          ";
            // line 55
            yield ($context["language"] ?? null);
            yield "
        </div>
        <div class=\"desktop-currency-wrapper\">
          ";
            // line 58
            yield ($context["currency"] ?? null);
            yield "
        </div>
      </div>
    ";
        }
        // line 62
        yield "    <div class=\"classic-cart-wrapper\">
        ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondaryMenuPosition"], "method", false, false, false, 63) == "cart")) {
            // line 64
            yield "          <div class=\"top-menu secondary-menu ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["secondary_color_scheme"], "method", false, false, false, 64);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_top_menu_2"], "method", false, false, false, 64);
            yield "</div>
        ";
        }
        // line 66
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartPosition"], "method", false, false, false, 66) == "top")) {
            // line 67
            yield "          <div class=\"desktop-cart-wrapper default-cart-wrapper\">
              ";
            // line 68
            yield ($context["cart"] ?? null);
            yield "
          </div>
        ";
        }
        // line 71
        yield "    </div>
  </div>
  <div class=\"desktop-main-menu-wrapper menu-bar has-menu-1 menu-";
        // line 73
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMenuLayout"], "method", false, false, false, 73);
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 73)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "has-menu-2";
        }
        yield " navbar-nav ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["header_menu_color_scheme"], "method", false, false, false, 73);
        yield "\">
    ";
        // line 74
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 75
            yield "      <div class=\"main-menu-1\">
        <div class=\"menu-trigger menu-item main-menu-item menu-trigger-1\">
          <ul class=\"j-menu\">
            <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
            // line 78
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 78);
            yield "</span></a></li>
          </ul>
        </div>
        ";
            // line 81
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu1"], "method", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 82
                yield "          ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu"], "method", false, false, false, 82);
                yield "
        ";
            }
            // line 84
            yield "      </div>
      ";
            // line 85
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMainMenu2Position"], "method", false, false, false, 85) == "menu")) {
                // line 86
                yield "        <div class=\"main-menu-2\">
          <div class=\"menu-trigger menu-item main-menu-item menu-trigger-2\">
            <ul class=\"j-menu\">
              <li class=\"menu-item\"><a href=\"javascript:;\" data-off-canvas=\"desktop-mobile-main-menu-container\"><span class=\"links-text\">";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["menuTriggerText"], "method", false, false, false, 89);
                yield "</span></a></li>
            </ul>
          </div>
          ";
                // line 92
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 93
                    yield "            ";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 93);
                    yield "
          ";
                }
                // line 95
                yield "        </div>
      ";
            }
            // line 97
            yield "    ";
        }
        // line 98
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["cartPosition"], "method", false, false, false, 98) == "menu")) {
            // line 99
            yield "      <div class=\"desktop-cart-wrapper default-cart-wrapper\">
        ";
            // line 100
            yield ($context["cart"] ?? null);
            yield "
      </div>
    ";
        }
        // line 103
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
        return "journal3/template/journal3/headers/desktop/classic.twig";
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
        return array (  322 => 103,  316 => 100,  313 => 99,  310 => 98,  307 => 97,  303 => 95,  297 => 93,  295 => 92,  289 => 89,  284 => 86,  282 => 85,  279 => 84,  273 => 82,  271 => 81,  265 => 78,  260 => 75,  258 => 74,  248 => 73,  244 => 71,  238 => 68,  235 => 67,  232 => 66,  224 => 64,  222 => 63,  219 => 62,  212 => 58,  206 => 55,  202 => 53,  200 => 52,  196 => 50,  194 => 49,  193 => 48,  192 => 47,  189 => 46,  185 => 44,  182 => 43,  176 => 41,  174 => 40,  168 => 37,  164 => 35,  162 => 34,  159 => 33,  157 => 32,  153 => 30,  145 => 28,  123 => 25,  103 => 24,  98 => 23,  96 => 22,  91 => 20,  87 => 18,  81 => 16,  79 => 15,  74 => 14,  67 => 10,  61 => 7,  57 => 5,  55 => 4,  51 => 3,  47 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/headers/desktop/classic.twig", "");
    }
}
