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

/* journal3/template/product/compare.twig */
class __TwigTemplate_7d5881a94058d1b31098ded013151a1c extends Template
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
<div id=\"product-compare\" class=\"container\">
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
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "      <div class=\"table-responsive\">
      <table class=\"table table-bordered\">
        <thead>
          <tr>
            <td colspan=\"";
            // line 37
            yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
            yield "\"><strong>";
            yield ($context["text_product"] ?? null);
            yield "</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr class=\"compare-name\">
            <td>";
            // line 42
            yield ($context["text_name"] ?? null);
            yield "</td>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                yield "            <td><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 44);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 44);
                yield "</strong></a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield " </tr>
          <tr class=\"compare-image\">
            <td>";
            // line 47
            yield ($context["text_image"] ?? null);
            yield "</td>
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 49
                yield "            <td class=\"text-left\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 49);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 49);
                    yield "\" class=\"img-thumbnail\" /> ";
                }
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield " </tr>
          <tr class=\"compare-price\">
            <td>";
            // line 52
            yield ($context["text_price"] ?? null);
            yield "</td>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                yield "            <td class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 54)], "method", false, false, false, 54);
                yield "\">";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 55
                    yield "              ";
                    if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 56
                        yield "              ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 56);
                        yield "
              ";
                    } else {
                        // line 57
                        yield " <strike>";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 57);
                        yield "</strike> ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 57);
                        yield "
              ";
                    }
                    // line 59
                    yield "              ";
                }
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield " </tr>
          <tr class=\"compare-model\">
            <td>";
            // line 62
            yield ($context["text_model"] ?? null);
            yield "</td>
            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                yield "            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 64);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield " </tr>
          <tr class=\"compare-manufacturer\">
            <td>";
            // line 67
            yield ($context["text_manufacturer"] ?? null);
            yield "</td>
            ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 69
                yield "            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "manufacturer", [], "any", false, false, false, 69);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield " </tr>
          <tr class=\"compare-availability\">
            <td>";
            // line 72
            yield ($context["text_availability"] ?? null);
            yield "</td>
            ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 74
                yield "            <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "availability", [], "any", false, false, false, 74);
                yield "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield " </tr>
        ";
            // line 76
            if ((($tmp = ($context["review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "        <tr class=\"compare-rating\">
          <td>";
                // line 78
                yield ($context["text_rating"] ?? null);
                yield "</td>
          ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 80
                    yield "          <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 81
                        yield "            ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 81) < $context["i"])) {
                            yield " <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span> ";
                        } else {
                            yield " <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span> ";
                        }
                        // line 82
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    yield " <br />
            ";
                    // line 83
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "reviews", [], "any", false, false, false, 83);
                    yield "</td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                yield " </tr>
        ";
            }
            // line 86
            yield "        <tr class=\"compare-summary\">
          <td>";
            // line 87
            yield ($context["text_summary"] ?? null);
            yield "</td>
          ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 89
                yield "          <td class=\"description\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 89);
                yield "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            yield " </tr>
        <tr class=\"compare-weight\">
          <td>";
            // line 92
            yield ($context["text_weight"] ?? null);
            yield "</td>
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 94
                yield "          <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "weight", [], "any", false, false, false, 94);
                yield "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            yield " </tr>
        <tr class=\"compare-dimensions\">
          <td>";
            // line 97
            yield ($context["text_dimension"] ?? null);
            yield "</td>
          ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 99
                yield "          <td>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "length", [], "any", false, false, false, 99);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "width", [], "any", false, false, false, 99);
                yield " x ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "height", [], "any", false, false, false, 99);
                yield "</td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            yield " </tr>
          </tbody>
        
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 104
                yield "        <thead>
          <tr>
            <td colspan=\"";
                // line 106
                yield (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["products"] ?? null)) + 1);
                yield "\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 106);
                yield "</strong></td>
          </tr>
        </thead>
        ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 109));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 110
                    yield "        <tbody>
          <tr>
            <td>";
                    // line 112
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 112);
                    yield "</td>
            ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 114
                        yield "            ";
                        if ((($tmp = (($_v0 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 114)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[$context["key"]] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 115
                            yield "            <td> ";
                            yield (($_v1 = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "attribute", [], "any", false, false, false, 115)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[$context["key"]] ?? null) : null);
                            yield "</td>
            ";
                        } else {
                            // line 117
                            yield "            <td></td>
            ";
                        }
                        // line 119
                        yield "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    yield "          </tr>
        </tbody>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['attribute'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attribute_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            yield "        <tfoot>
        <tr>
          <td></td>
          ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 128
                yield "          <td class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["product"], "classes", [], "any", false, false, false, 128)], "method", false, false, false, 128);
                yield "\">
            <div class=\"compare-buttons\">
            ";
                // line 130
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["catalogCartStatus"], "method", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 131
                    yield "              <button class=\"btn btn-primary btn-cart\" onclick=\"cart.add('";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 131);
                    yield "', '";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 131);
                    yield "');\" ><span>";
                    yield ($context["button_cart"] ?? null);
                    yield "</span></button>
            ";
                }
                // line 133
                yield "              <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "remove", [], "any", false, false, false, 133);
                yield "\" class=\"btn btn-danger btn-remove\"><span>";
                yield ($context["button_remove"] ?? null);
                yield "</span></a>
            </div>
          </td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            yield "        </tr>
        </tfoot>
      </table>
      </div>
      ";
        } else {
            // line 142
            yield "        <p>";
            yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["text_no_results"] ?? null)) : (($context["text_empty"] ?? null)));
            yield "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 144
            yield ($context["continue"] ?? null);
            yield "\" class=\"btn btn-default\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></a></div>
      </div>
      ";
        }
        // line 147
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 148
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 150
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
        return "journal3/template/product/compare.twig";
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
        return array (  568 => 150,  563 => 148,  558 => 147,  550 => 144,  544 => 142,  537 => 137,  524 => 133,  514 => 131,  512 => 130,  506 => 128,  502 => 127,  497 => 124,  491 => 123,  483 => 120,  477 => 119,  473 => 117,  467 => 115,  464 => 114,  460 => 113,  456 => 112,  452 => 110,  448 => 109,  440 => 106,  436 => 104,  432 => 103,  427 => 100,  414 => 99,  410 => 98,  406 => 97,  402 => 95,  393 => 94,  389 => 93,  385 => 92,  381 => 90,  372 => 89,  368 => 88,  364 => 87,  361 => 86,  357 => 84,  349 => 83,  341 => 82,  334 => 81,  329 => 80,  325 => 79,  321 => 78,  318 => 77,  316 => 76,  313 => 75,  304 => 74,  300 => 73,  296 => 72,  292 => 70,  283 => 69,  279 => 68,  275 => 67,  271 => 65,  262 => 64,  258 => 63,  254 => 62,  250 => 60,  241 => 59,  233 => 57,  227 => 56,  224 => 55,  219 => 54,  215 => 53,  211 => 52,  207 => 50,  190 => 49,  186 => 48,  182 => 47,  178 => 45,  167 => 44,  163 => 43,  159 => 42,  149 => 37,  143 => 33,  141 => 32,  136 => 31,  128 => 29,  126 => 28,  121 => 27,  118 => 26,  115 => 25,  112 => 24,  109 => 23,  106 => 22,  103 => 21,  101 => 20,  96 => 19,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/product/compare.twig", "");
    }
}
