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

/* default/template/mail/order_add.twig */
class __TwigTemplate_97b9e3b651a3f58af52fee632311b5fd extends Template
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
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01//EN\" \"http://www.w3.org/TR/1999/REC-html401-19991224/strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
<title>";
        // line 5
        yield ($context["title"] ?? null);
        yield "</title>
</head>
<body style=\"font-family: Arial, Helvetica, sans-serif; font-size: 12px; color: #000000;\">
<div style=\"width: 680px;\"><a href=\"";
        // line 8
        yield ($context["store_url"] ?? null);
        yield "\" title=\"";
        yield ($context["store_name"] ?? null);
        yield "\"><img src=\"";
        yield ($context["logo"] ?? null);
        yield "\" alt=\"";
        yield ($context["store_name"] ?? null);
        yield "\" style=\"margin-bottom: 20px; border: none;\" /></a>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 9
        yield ($context["text_greeting"] ?? null);
        yield "</p>
  ";
        // line 10
        if ((($tmp = ($context["customer_id"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 11
            yield "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            yield ($context["text_link"] ?? null);
            yield "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 12
            yield ($context["link"] ?? null);
            yield "\">";
            yield ($context["link"] ?? null);
            yield "</a></p>
  ";
        }
        // line 14
        yield "  ";
        if ((($tmp = ($context["download"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
            yield ($context["text_download"] ?? null);
            yield "</p>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\"><a href=\"";
            // line 16
            yield ($context["download"] ?? null);
            yield "\">";
            yield ($context["download"] ?? null);
            yield "</a></p>
  ";
        }
        // line 18
        yield "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\" colspan=\"2\">";
        // line 21
        yield ($context["text_order_detail"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 26
        yield ($context["text_order_id"] ?? null);
        yield "</b> ";
        yield ($context["order_id"] ?? null);
        yield "<br/>
          <b>";
        // line 27
        yield ($context["text_date_added"] ?? null);
        yield "</b> ";
        yield ($context["date_added"] ?? null);
        yield "<br/>
          <b>";
        // line 28
        yield ($context["text_payment_method"] ?? null);
        yield "</b> ";
        yield ($context["payment_method"] ?? null);
        yield "<br/>
          ";
        // line 29
        if ((($tmp = ($context["shipping_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <b>";
            yield ($context["text_shipping_method"] ?? null);
            yield "</b> ";
            yield ($context["shipping_method"] ?? null);
            yield "
          ";
        }
        // line 30
        yield "</td>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"><b>";
        // line 31
        yield ($context["text_email"] ?? null);
        yield "</b> ";
        yield ($context["email"] ?? null);
        yield "<br/>
          <b>";
        // line 32
        yield ($context["text_telephone"] ?? null);
        yield "</b> ";
        yield ($context["telephone"] ?? null);
        yield "<br/>
          <b>";
        // line 33
        yield ($context["text_ip"] ?? null);
        yield "</b> ";
        yield ($context["ip"] ?? null);
        yield "<br/>
          <b>";
        // line 34
        yield ($context["text_order_status"] ?? null);
        yield "</b> ";
        yield ($context["order_status"] ?? null);
        yield "<br/></td>
      </tr>
    </tbody>
  </table>
  ";
        // line 38
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            // line 42
            yield ($context["text_instruction"] ?? null);
            yield "</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 47
            yield ($context["comment"] ?? null);
            yield "</td>
      </tr>
    </tbody>
  </table>
  ";
        }
        // line 52
        yield "  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 55
        yield ($context["text_payment_address"] ?? null);
        yield "</td>
        ";
        // line 56
        if ((($tmp = ($context["shipping_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
            yield ($context["text_shipping_address"] ?? null);
            yield "</td>
        ";
        }
        // line 58
        yield " </tr>
    </thead>
    <tbody>
      <tr>
        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
        // line 62
        yield ($context["payment_address"] ?? null);
        yield "</td>
        ";
        // line 63
        if ((($tmp = ($context["shipping_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "        <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            yield ($context["shipping_address"] ?? null);
            yield "</td>
        ";
        }
        // line 65
        yield " </tr>
    </tbody>
  </table>
  <table style=\"border-collapse: collapse; width: 100%; border-top: 1px solid #DDDDDD; border-left: 1px solid #DDDDDD; margin-bottom: 20px;\">
    <thead>
      <tr>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 71
        yield ($context["text_product"] ?? null);
        yield "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: left; padding: 7px; color: #222222;\">";
        // line 72
        yield ($context["text_model"] ?? null);
        yield "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 73
        yield ($context["text_quantity"] ?? null);
        yield "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 74
        yield ($context["text_price"] ?? null);
        yield "</td>
        <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; background-color: #EFEFEF; font-weight: bold; text-align: right; padding: 7px; color: #222222;\">";
        // line 75
        yield ($context["text_total"] ?? null);
        yield "</td>
      </tr>
    </thead>
    <tbody>
    
    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 81
            yield "    <tr>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 82);
            yield "
        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 83));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                yield "<br/>
        &nbsp;<small> - ";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 84);
                yield ": ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 84);
                yield "</small>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
      <td style=\"font-size: 12px; border-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 85
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 85);
            yield "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 86
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 86);
            yield "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 87);
            yield "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 88
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 88);
            yield "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 92
            yield "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\">";
            // line 93
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 93);
            yield "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: left; padding: 7px;\"></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">1</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 96
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 96);
            yield "</td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 97
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 97);
            yield "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "      </tbody>
    
    <tfoot>
    
    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 105
            yield "    <tr>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\" colspan=\"4\"><b>";
            // line 106
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 106);
            yield ":</b></td>
      <td style=\"font-size: 12px;\tborder-right: 1px solid #DDDDDD; border-bottom: 1px solid #DDDDDD; text-align: right; padding: 7px;\">";
            // line 107
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 107);
            yield "</td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "      </tfoot>
    
  </table>
  <p style=\"margin-top: 0px; margin-bottom: 20px;\">";
        // line 113
        yield ($context["text_footer"] ?? null);
        yield "</p>
</div>
</body>
</html>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/template/mail/order_add.twig";
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
        return array (  364 => 113,  359 => 110,  350 => 107,  346 => 106,  343 => 105,  339 => 104,  333 => 100,  324 => 97,  320 => 96,  314 => 93,  311 => 92,  306 => 91,  297 => 88,  293 => 87,  289 => 86,  285 => 85,  274 => 84,  268 => 83,  264 => 82,  261 => 81,  257 => 80,  249 => 75,  245 => 74,  241 => 73,  237 => 72,  233 => 71,  225 => 65,  219 => 64,  217 => 63,  213 => 62,  207 => 58,  201 => 57,  199 => 56,  195 => 55,  190 => 52,  182 => 47,  174 => 42,  169 => 39,  167 => 38,  158 => 34,  152 => 33,  146 => 32,  140 => 31,  137 => 30,  128 => 29,  122 => 28,  116 => 27,  110 => 26,  102 => 21,  97 => 18,  90 => 16,  85 => 15,  82 => 14,  75 => 12,  70 => 11,  68 => 10,  64 => 9,  54 => 8,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "default/template/mail/order_add.twig", "");
    }
}
