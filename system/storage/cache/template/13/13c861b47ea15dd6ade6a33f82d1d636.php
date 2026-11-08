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

/* journal3/template/account/wishlist.twig */
class __TwigTemplate_3d49d30ea5d7000d97f7c4649cb9d6c3 extends Template
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
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            yield "  <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            yield "\"><span class=\"page-title-text\">";
            yield ($context["heading_title"] ?? null);
            yield "</span></h1>
";
        }
        // line 5
        yield "<div class=\"breadcrumbs ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "  </ul>
</div>
";
        // line 12
        yield ($context["journal3_top"] ?? null);
        yield "
<div id=\"account-wishlist\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 19
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 20
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 21
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 22
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 23
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 24
            yield "    ";
        } else {
            // line 25
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 26
            yield "    ";
        }
        // line 27
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 28) == "default")) {
            // line 29
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 29);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 31
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      ";
        // line 32
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "      <div id=\"wishlist\">";
            yield ($context["list"] ?? null);
            yield "</div>
      ";
        } else {
            // line 35
            yield "      ";
            if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "      <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover\">
          <thead>
            <tr>
              <td class=\"text-center td-image\">";
                // line 40
                yield ($context["column_image"] ?? null);
                yield "</td>
              <td class=\"text-left td-name\">";
                // line 41
                yield ($context["column_name"] ?? null);
                yield "</td>
              <td class=\"text-center td-model\">";
                // line 42
                yield ($context["column_model"] ?? null);
                yield "</td>
              <td class=\"text-center td-stock\">";
                // line 43
                yield ($context["column_stock"] ?? null);
                yield "</td>
              <td class=\"text-center td-price\">";
                // line 44
                yield ($context["column_price"] ?? null);
                yield "</td>
              <td class=\"text-center td-action\">";
                // line 45
                yield ($context["column_action"] ?? null);
                yield "</td>
            </tr>
          </thead>
          <tbody>
          
          ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 51
                    yield "          <tr class=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 51)], "method", false, false, false, 51);
                    yield "\">
            <td class=\"text-center td-image\">";
                    // line 52
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 52);
                        yield "\"><img src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 52);
                        yield "\" alt=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                        yield "\" title=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 52);
                        yield "\" /></a>";
                    }
                    yield "</td>
            <td class=\"text-left td-name\"><a href=\"";
                    // line 53
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 53);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 53);
                    yield "</a></td>
            <td class=\"text-center td-model\">";
                    // line 54
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 54);
                    yield "</td>
            <td class=\"text-center td-stock\">";
                    // line 55
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 55);
                    yield "</td>
            <td class=\"text-center td-price\">";
                    // line 56
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 57
                        yield "              <div class=\"price\"> ";
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 58
                            yield "                ";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 58);
                            yield "
                ";
                        } else {
                            // line 59
                            yield " <b>";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 59);
                            yield "</b> <s>";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 59);
                            yield "</s> ";
                        }
                        yield " </div>
              ";
                    }
                    // line 60
                    yield "</td>
            <td class=\"text-center td-action\">
              ";
                    // line 62
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 62)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 63
                        yield "              <button type=\"button\" onclick=\"cart.add('";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 63);
                        yield "');\" data-toggle=\"tooltip-hover\" title=\"";
                        yield ($context["button_cart"] ?? null);
                        yield "\" class=\"btn btn-primary\" data-loading-text=\"<span class='btn-text'>";
                        yield ($context["button_cart"] ?? null);
                        yield "</span>\"><i class=\"fa fa-shopping-cart\"></i></button>
              ";
                    }
                    // line 65
                    yield "              <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 65);
                    yield "\" data-toggle=\"tooltip-hover\" title=\"";
                    yield ($context["button_remove"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
          </tr>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                yield "            </tbody>
          
        </table>
      </div>
      ";
            } else {
                // line 73
                yield "      <p>";
                yield ($context["text_empty"] ?? null);
                yield "</p>
      ";
            }
            // line 75
            yield "      ";
        }
        // line 76
        yield "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 77
        yield ($context["continue"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_continue"] ?? null);
        yield "</a></div>
      </div>
      ";
        // line 79
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 80
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 82
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
        return "journal3/template/account/wishlist.twig";
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
        return array (  307 => 82,  302 => 80,  298 => 79,  291 => 77,  288 => 76,  285 => 75,  279 => 73,  272 => 68,  260 => 65,  250 => 63,  248 => 62,  244 => 60,  234 => 59,  228 => 58,  225 => 57,  223 => 56,  219 => 55,  215 => 54,  209 => 53,  195 => 52,  190 => 51,  186 => 50,  178 => 45,  174 => 44,  170 => 43,  166 => 42,  162 => 41,  158 => 40,  152 => 36,  149 => 35,  143 => 33,  141 => 32,  136 => 31,  128 => 29,  126 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  101 => 20,  96 => 19,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/wishlist.twig", "");
    }
}
