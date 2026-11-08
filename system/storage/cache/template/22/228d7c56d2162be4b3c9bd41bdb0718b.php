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

/* journal3/template/account/account.twig */
class __TwigTemplate_4a9e169165b31d50ea67aa0971ab896f extends Template
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
<div id=\"account-account\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>
  ";
        }
        // line 17
        yield "  <div class=\"row\">";
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 18
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 19
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 20
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 21
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 22
            yield "    ";
        } else {
            // line 23
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 24
            yield "    ";
        }
        // line 25
        yield "    <div id=\"content\" class=\"account-page ";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 26) == "default")) {
            // line 27
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 27);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 29
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"my-account\">
      <h2 class=\"title\">";
        // line 31
        yield ($context["text_my_account"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled account-list\">
        <li class=\"edit-info\"><a href=\"";
        // line 33
        yield ($context["edit"] ?? null);
        yield "\">";
        yield ($context["text_edit"] ?? null);
        yield "</a></li>
        <li class=\"edit-pass\"><a href=\"";
        // line 34
        yield ($context["password"] ?? null);
        yield "\">";
        yield ($context["text_password"] ?? null);
        yield "</a></li>
        <li class=\"edit-address\"><a href=\"";
        // line 35
        yield ($context["address"] ?? null);
        yield "\">";
        yield ($context["text_address"] ?? null);
        yield "</a></li>
        <li class=\"edit-wishlist\"><a href=\"";
        // line 36
        yield ($context["wishlist"] ?? null);
        yield "\">";
        yield ($context["text_wishlist"] ?? null);
        yield "</a></li>
      </ul>
      </div>
      ";
        // line 39
        if ((($tmp = ($context["credit_cards"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "      <div class=\"my-cards\">
      <h2 class=\"title\">";
            // line 41
            yield ($context["text_credit_card"] ?? null);
            yield "</h2>
      <ul class=\"list-unstyled account-list\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["credit_cards"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit_card"]) {
                // line 44
                yield "        <li><a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["credit_card"], "href", [], "any", false, false, false, 44);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["credit_card"], "name", [], "any", false, false, false, 44);
                yield "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['credit_card'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "      </ul>
      </div>
      ";
        }
        // line 49
        yield "      <div class=\"my-orders\">
      <h2 class=\"title\">";
        // line 50
        yield ($context["text_my_orders"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled account-list\">
        <li class=\"edit-order\"><a href=\"";
        // line 52
        yield ($context["order"] ?? null);
        yield "\">";
        yield ($context["text_order"] ?? null);
        yield "</a></li>
        ";
        // line 53
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "        <li class=\"edit-subscription\"><a href=\"";
            yield ($context["subscription"] ?? null);
            yield "\">";
            yield ($context["text_subscription"] ?? null);
            yield "</a></li>
        ";
        }
        // line 56
        yield "        <li class=\"edit-downloads\"><a href=\"";
        yield ($context["download"] ?? null);
        yield "\">";
        yield ($context["text_download"] ?? null);
        yield "</a></li>
        ";
        // line 57
        if ((($tmp = ($context["reward"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "        <li class=\"edit-rewards\"><a href=\"";
            yield ($context["reward"] ?? null);
            yield "\">";
            yield ($context["text_reward"] ?? null);
            yield "</a></li>
        ";
        }
        // line 60
        yield "        <li class=\"edit-returns\"><a href=\"";
        yield ($context["return"] ?? null);
        yield "\">";
        yield ($context["text_return"] ?? null);
        yield "</a></li>
        <li class=\"edit-transactions\"><a href=\"";
        // line 61
        yield ($context["transaction"] ?? null);
        yield "\">";
        yield ($context["text_transaction"] ?? null);
        yield "</a></li>
        ";
        // line 62
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 63
            yield "        <li class=\"edit-recurring\"><a href=\"";
            yield ($context["recurring"] ?? null);
            yield "\">";
            yield ($context["text_recurring"] ?? null);
            yield "</a></li>
        ";
        }
        // line 65
        yield "      </ul>
      </div>
      ";
        // line 67
        if ((($tmp = ($context["affiliate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "      <div class=\"my-affiliates\">
      <h2 class=\"title\">";
            // line 69
            yield ($context["text_my_affiliate"] ?? null);
            yield "</h2>
      <ul class=\"list-unstyled account-list\">
        ";
            // line 71
            if ((($tmp =  !($context["tracking"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 72
                yield "        <li class=\"affiliate-add\"><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_add"] ?? null);
                yield "</a></li>
        ";
            } else {
                // line 74
                yield "        <li class=\"affiliate-edit\"><a href=\"";
                yield ($context["affiliate"] ?? null);
                yield "\">";
                yield ($context["text_affiliate_edit"] ?? null);
                yield "</a></li>
        <li class=\"affiliate-track\"><a href=\"";
                // line 75
                yield ($context["tracking"] ?? null);
                yield "\">";
                yield ($context["text_tracking"] ?? null);
                yield "</a></li>
        ";
            }
            // line 77
            yield "      </ul>
      </div>
      ";
        }
        // line 80
        yield "      <div class=\"my-newsletter\">
      <h2 class=\"title\">";
        // line 81
        yield ($context["text_my_newsletter"] ?? null);
        yield "</h2>
      <ul class=\"list-unstyled account-list\">
        <li><a href=\"";
        // line 83
        yield ($context["newsletter"] ?? null);
        yield "\">";
        yield ($context["text_newsletter"] ?? null);
        yield "</a></li>
      </ul>
      </div>
      ";
        // line 86
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 87
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 89
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
        return "journal3/template/account/account.twig";
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
        return array (  333 => 89,  328 => 87,  324 => 86,  316 => 83,  311 => 81,  308 => 80,  303 => 77,  296 => 75,  289 => 74,  281 => 72,  279 => 71,  274 => 69,  271 => 68,  269 => 67,  265 => 65,  257 => 63,  255 => 62,  249 => 61,  242 => 60,  234 => 58,  232 => 57,  225 => 56,  217 => 54,  215 => 53,  209 => 52,  204 => 50,  201 => 49,  196 => 46,  185 => 44,  181 => 43,  176 => 41,  173 => 40,  171 => 39,  163 => 36,  157 => 35,  151 => 34,  145 => 33,  140 => 31,  134 => 29,  126 => 27,  124 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  99 => 18,  94 => 17,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/account.twig", "");
    }
}
