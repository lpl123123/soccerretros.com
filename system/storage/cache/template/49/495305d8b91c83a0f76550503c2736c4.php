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

/* sale/order_info.twig */
class __TwigTemplate_97be20fbb43abea1f779f33351c8ab7e extends Template
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
        yield ($context["column_left"] ?? null);
        yield "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        yield ($context["invoice"] ?? null);
        yield "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_invoice_print"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa fa-print\"></i></a> <a href=\"";
        yield ($context["shipping"] ?? null);
        yield "\" target=\"_blank\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_shipping_print"] ?? null);
        yield "\" class=\"btn btn-info\"><i class=\"fa fa-truck\"></i></a> <a href=\"";
        yield ($context["edit"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_edit"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a> <a href=\"";
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 6
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            yield "          <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 9);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 9);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 19
        yield ($context["text_order_detail"] ?? null);
        yield "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 24
        yield ($context["text_store"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-shopping-cart fa-fw\"></i></button></td>
                <td><a href=\"";
        // line 25
        yield ($context["store_url"] ?? null);
        yield "\" target=\"_blank\">";
        yield ($context["store_name"] ?? null);
        yield "</a></td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 28
        yield ($context["text_date_added"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-calendar fa-fw\"></i></button></td>
                <td>";
        // line 29
        yield ($context["date_added"] ?? null);
        yield "</td>
              </tr>
              <tr>
                <td><button data-toggle=\"tooltip\" title=\"";
        // line 32
        yield ($context["text_payment_method"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-credit-card fa-fw\"></i></button></td>
                <td>";
        // line 33
        yield ($context["payment_method"] ?? null);
        yield "</td>
              </tr>
              ";
        // line 35
        if ((($tmp = ($context["shipping_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "                <tr>
                  <td><button data-toggle=\"tooltip\" title=\"";
            // line 37
            yield ($context["text_shipping_method"] ?? null);
            yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-truck fa-fw\"></i></button></td>
                  <td>";
            // line 38
            yield ($context["shipping_method"] ?? null);
            yield "</td>
                </tr>
              ";
        }
        // line 41
        yield "            </tbody>

          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-user\"></i> ";
        // line 49
        yield ($context["text_customer_detail"] ?? null);
        yield "</h3>
          </div>
          <table class=\"table\">
            <tr>
              <td style=\"width: 1%;\"><button data-toggle=\"tooltip\" title=\"";
        // line 53
        yield ($context["text_customer"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-user fa-fw\"></i></button></td>
              <td>";
        // line 54
        if ((($tmp = ($context["customer"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " <a href=\"";
            yield ($context["customer"] ?? null);
            yield "\" target=\"_blank\">";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "</a> ";
        } else {
            // line 55
            yield "                  ";
            yield ($context["firstname"] ?? null);
            yield " ";
            yield ($context["lastname"] ?? null);
            yield "
                ";
        }
        // line 56
        yield "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 59
        yield ($context["text_customer_group"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-group fa-fw\"></i></button></td>
              <td>";
        // line 60
        yield ($context["customer_group"] ?? null);
        yield "</td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 63
        yield ($context["text_email"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-envelope-o fa-fw\"></i></button></td>
              <td><a href=\"mailto:";
        // line 64
        yield ($context["email"] ?? null);
        yield "\">";
        yield ($context["email"] ?? null);
        yield "</a></td>
            </tr>
            <tr>
              <td><button data-toggle=\"tooltip\" title=\"";
        // line 67
        yield ($context["text_telephone"] ?? null);
        yield "\" class=\"btn btn-info btn-xs\"><i class=\"fa fa-phone fa-fw\"></i></button></td>
              <td>";
        // line 68
        yield ($context["telephone"] ?? null);
        yield "</td>
            </tr>
          </table>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-cog\"></i> ";
        // line 76
        yield ($context["text_option"] ?? null);
        yield "</h3>
          </div>
          <table class=\"table\">
            <tbody>
              <tr>
                <td>";
        // line 81
        yield ($context["text_invoice"] ?? null);
        yield "</td>
                <td id=\"invoice\" class=\"text-right\">";
        // line 82
        yield ($context["invoice_no"] ?? null);
        yield "</td>
                <td style=\"width: 1%;\" class=\"text-center\">";
        // line 83
        if ((($tmp =  !($context["invoice_no"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                    <button id=\"button-invoice\" data-loading-text=\"";
            yield ($context["text_loading"] ?? null);
            yield "\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_generate"] ?? null);
            yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>
                  ";
        } else {
            // line 86
            yield "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-refresh\"></i></button>
                  ";
        }
        // line 87
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 90
        yield ($context["text_reward"] ?? null);
        yield "</td>
                <td class=\"text-right\">";
        // line 91
        yield ($context["reward"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 92
        if ((($context["customer"] ?? null) && ($context["reward"] ?? null))) {
            // line 93
            yield "                    ";
            if ((($tmp =  !($context["reward_total"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 94
                yield "                      <button id=\"button-reward-add\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_reward_add"] ?? null);
                yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 96
                yield "                      <button id=\"button-reward-remove\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_reward_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 98
            yield "                  ";
        } else {
            // line 99
            yield "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 100
        yield "</td>
              </tr>
              <tr>
                <td>";
        // line 103
        yield ($context["text_affiliate"] ?? null);
        yield "
                  ";
        // line 104
        if ((($tmp = ($context["affiliate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                    (<a href=\"";
            yield ($context["affiliate"] ?? null);
            yield "\">";
            yield ($context["affiliate_firstname"] ?? null);
            yield " ";
            yield ($context["affiliate_lastname"] ?? null);
            yield "</a>)
                  ";
        }
        // line 106
        yield "</td>
                <td class=\"text-right\">";
        // line 107
        yield ($context["commission"] ?? null);
        yield "</td>
                <td class=\"text-center\">";
        // line 108
        if ((($tmp = ($context["affiliate"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 109
            yield "                    ";
            if ((($tmp =  !($context["commission_total"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 110
                yield "                      <button id=\"button-commission-add\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_commission_add"] ?? null);
                yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                    ";
            } else {
                // line 112
                yield "                      <button id=\"button-commission-remove\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_commission_remove"] ?? null);
                yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>
                    ";
            }
            // line 114
            yield "                  ";
        } else {
            // line 115
            yield "                    <button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>
                  ";
        }
        // line 116
        yield "</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-info-circle\"></i> ";
        // line 125
        yield ($context["text_order"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td style=\"width: 50%;\" class=\"text-left\">";
        // line 131
        yield ($context["text_payment_address"] ?? null);
        yield "</td>
              ";
        // line 132
        if ((($tmp = ($context["shipping_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                <td style=\"width: 50%;\" class=\"text-left\">";
            yield ($context["text_shipping_address"] ?? null);
            yield "</td>
              ";
        }
        // line 134
        yield " </tr>
          </thead>
          <tbody>
            <tr>
              <td class=\"text-left\">";
        // line 138
        yield ($context["payment_address"] ?? null);
        yield "</td>
              ";
        // line 139
        if ((($tmp = ($context["shipping_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                <td class=\"text-left\">";
            yield ($context["shipping_address"] ?? null);
            yield "</td>
              ";
        }
        // line 141
        yield " </tr>
          </tbody>
        </table>
        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td class=\"text-left\">";
        // line 147
        yield ($context["column_product"] ?? null);
        yield "</td>
              <td class=\"text-left\">";
        // line 148
        yield ($context["column_model"] ?? null);
        yield "</td>
              <td class=\"text-right\">";
        // line 149
        yield ($context["column_quantity"] ?? null);
        yield "</td>
              <td class=\"text-right\">";
        // line 150
        yield ($context["column_price"] ?? null);
        yield "</td>
              <td class=\"text-right\">";
        // line 151
        yield ($context["column_total"] ?? null);
        yield "</td>
            </tr>
          </thead>
          <tbody>

            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 157
            yield "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 158
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 158);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 158);
            yield "</a> ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 158));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 159
                yield "                    <br/>
                    ";
                // line 160
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, false, 160) != "file")) {
                    // line 161
                    yield "                      &nbsp;
                      <small> - ";
                    // line 162
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 162);
                    yield ": ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 162);
                    yield "</small> ";
                } else {
                    // line 163
                    yield "                      &nbsp;
                      <small> - ";
                    // line 164
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 164);
                    yield ": <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "href", [], "any", false, false, false, 164);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 164);
                    yield "</a></small> ";
                }
                // line 165
                yield "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['option'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
                <td class=\"text-left\">";
            // line 166
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 166);
            yield "</td>
                <td class=\"text-right\">";
            // line 167
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 167);
            yield "</td>
                <td class=\"text-right\">";
            // line 168
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 168);
            yield "</td>
                <td class=\"text-right\">";
            // line 169
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 169);
            yield "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 173
            yield "              <tr>
                <td class=\"text-left\"><a href=\"";
            // line 174
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "href", [], "any", false, false, false, 174);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 174);
            yield "</a></td>
                <td class=\"text-left\"></td>
                <td class=\"text-right\">1</td>
                <td class=\"text-right\">";
            // line 177
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 177);
            yield "</td>
                <td class=\"text-right\">";
            // line 178
            yield CoreExtension::getAttribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 178);
            yield "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['voucher'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 182
            yield "              <tr>
                <td colspan=\"4\" class=\"text-right\">";
            // line 183
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 183);
            yield "</td>
                <td class=\"text-right\">";
            // line 184
            yield CoreExtension::getAttribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 184);
            yield "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['total'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        yield "          </tbody>

        </table>
        ";
        // line 190
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 191
            yield "          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td>";
            // line 194
            yield ($context["text_comment"] ?? null);
            yield "</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
            // line 199
            yield ($context["comment"] ?? null);
            yield "</td>
              </tr>
            </tbody>
          </table>
        ";
        }
        // line 203
        yield " </div>
    </div>
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-comment-o\"></i> ";
        // line 207
        yield ($context["text_history"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-history\" data-toggle=\"tab\">";
        // line 211
        yield ($context["tab_history"] ?? null);
        yield "</a></li>
          <li><a href=\"#tab-additional\" data-toggle=\"tab\">";
        // line 212
        yield ($context["tab_additional"] ?? null);
        yield "</a></li>
          ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 214
            yield "            <li><a href=\"#tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 214);
            yield "\" data-toggle=\"tab\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 214);
            yield "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-history\">
            <div id=\"history\"></div>
            <br/>
            <fieldset>
              <legend>";
        // line 222
        yield ($context["text_history_add"] ?? null);
        yield "</legend>
              <form class=\"form-horizontal\">
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\">";
        // line 225
        yield ($context["entry_order_status"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"order_status_id\" id=\"input-order-status\" class=\"form-control\">
                      ";
        // line 228
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($context["order_statuses"]);
        foreach ($context['_seq'] as $context["_key"] => $context["order_statuses"]) {
            // line 229
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 229) == ($context["order_status_id"] ?? null))) {
                // line 230
                yield "                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 230);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 230);
                yield "</option>
                        ";
            } else {
                // line 232
                yield "                          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_statuses"], "order_status_id", [], "any", false, false, false, 232);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_statuses"], "name", [], "any", false, false, false, 232);
                yield "</option>
                        ";
            }
            // line 234
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_statuses'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-override\"><span data-toggle=\"tooltip\" title=\"";
        // line 239
        yield ($context["help_override"] ?? null);
        yield "\">";
        yield ($context["entry_override"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"override\" value=\"1\" id=\"input-override\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-notify\">";
        // line 247
        yield ($context["entry_notify"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"checkbox\">
                      <input type=\"checkbox\" name=\"notify\" value=\"1\" id=\"input-notify\"/>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
        // line 255
        yield ($context["entry_comment"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"8\" id=\"input-comment\" class=\"form-control\"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class=\"text-right\">
              <button id=\"button-history\" data-loading-text=\"";
        // line 263
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i> ";
        yield ($context["button_history_add"] ?? null);
        yield "</button>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-additional\"> ";
        // line 266
        if ((($tmp = ($context["account_custom_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 271
            yield ($context["text_account_custom_field"] ?? null);
            yield "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 276
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["account_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 277
                yield "                      <tr>
                        <td>";
                // line 278
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 278);
                yield "</td>
                        <td>";
                // line 279
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 279);
                yield "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            yield "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 287
        yield "            ";
        if ((($tmp = ($context["payment_custom_fields"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 288
            yield "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 292
            yield ($context["text_payment_custom_field"] ?? null);
            yield "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["payment_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 298
                yield "                      <tr>
                        <td>";
                // line 299
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 299);
                yield "</td>
                        <td>";
                // line 300
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 300);
                yield "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 303
            yield "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 308
        yield "            ";
        if ((($context["shipping_method"] ?? null) && ($context["shipping_custom_fields"] ?? null))) {
            // line 309
            yield "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr>
                      <td colspan=\"2\">";
            // line 313
            yield ($context["text_shipping_custom_field"] ?? null);
            yield "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["shipping_custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 319
                yield "                      <tr>
                        <td>";
                // line 320
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 320);
                yield "</td>
                        <td>";
                // line 321
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 321);
                yield "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 324
            yield "                  </tbody>

                </table>
              </div>
            ";
        }
        // line 329
        yield "            <div class=\"table-responsive\">
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <td colspan=\"2\">";
        // line 333
        yield ($context["text_browser"] ?? null);
        yield "</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>";
        // line 338
        yield ($context["text_ip"] ?? null);
        yield "</td>
                    <td>";
        // line 339
        yield ($context["ip"] ?? null);
        yield "</td>
                  </tr>
                  ";
        // line 341
        if ((($tmp = ($context["forwarded_ip"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 342
            yield "                    <tr>
                      <td>";
            // line 343
            yield ($context["text_forwarded_ip"] ?? null);
            yield "</td>
                      <td>";
            // line 344
            yield ($context["forwarded_ip"] ?? null);
            yield "</td>
                    </tr>
                  ";
        }
        // line 347
        yield "                  <tr>
                    <td>";
        // line 348
        yield ($context["text_user_agent"] ?? null);
        yield "</td>
                    <td>";
        // line 349
        yield ($context["user_agent"] ?? null);
        yield "</td>
                  </tr>
                  <tr>
                    <td>";
        // line 352
        yield ($context["text_accept_language"] ?? null);
        yield "</td>
                    <td>";
        // line 353
        yield ($context["accept_language"] ?? null);
        yield "</td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
          ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 361
            yield "            <div class=\"tab-pane\" id=\"tab-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "code", [], "any", false, false, false, 361);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "content", [], "any", false, false, false, 361);
            yield "</div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 362
        yield " </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$(document).delegate('#button-invoice', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/createinvoiceno&user_token=";
        // line 369
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-invoice').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-invoice').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['invoice_no']) {
\t\t\t\t  \$('#invoice').html(json['invoice_no']);

\t\t\t\t  \$('#button-invoice').replaceWith('<button disabled=\"disabled\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-cog\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addreward&user_token=";
        // line 398
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-add').replaceWith('<button id=\"button-reward-remove\" data-toggle=\"tooltip\" title=\"";
        // line 417
        yield ($context["button_reward_remove"] ?? null);
        yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-reward-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removereward&user_token=";
        // line 428
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-reward-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-reward-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-reward-remove').replaceWith('<button id=\"button-reward-add\" data-toggle=\"tooltip\" title=\"";
        // line 447
        yield ($context["button_reward_add"] ?? null);
        yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-add', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/addcommission&user_token=";
        // line 458
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-add').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-add').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-add').replaceWith('<button id=\"button-commission-remove\" data-toggle=\"tooltip\" title=\"";
        // line 477
        yield ($context["button_commission_remove"] ?? null);
        yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-minus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-commission-remove', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=sale/order/removecommission&user_token=";
        // line 488
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-commission-remove').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-commission-remove').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t  \$('#button-commission-remove').replaceWith('<button id=\"button-commission-add\" data-toggle=\"tooltip\" title=\"";
        // line 507
        yield ($context["button_commission_add"] ?? null);
        yield "\" class=\"btn btn-success btn-xs\"><i class=\"fa fa-plus-circle\"></i></button>');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  var api_token = '';

  \$.ajax({
\t  url: '";
        // line 519
        yield ($context["catalog"] ?? null);
        yield "index.php?route=api/login',
\t  type: 'post',
\t  dataType: 'json',
\t  data: 'key=";
        // line 522
        yield ($context["api_key"] ?? null);
        yield "',
\t  crossDomain: true,
\t  success: function(json) {
\t\t  \$('.alert').remove();
\t\t  if (json['error']) {
\t\t\t  if (json['error']['key']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['key'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }
\t\t\t  if (json['error']['ip']) {
\t\t\t\t  \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['ip'] + ' <button type=\"button\" id=\"button-ip-add\" data-loading-text=\"";
        // line 531
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-danger btn-xs pull-right\"><i class=\"fa fa-plus\"></i>";
        yield ($context["button_ip_add"] ?? null);
        yield "</button></div>');
\t\t\t  }
\t\t  }
\t\t  if (json['token']) {
\t\t\t  api_token = json['token'];
\t\t  }
\t  },
\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t  }
  });

  \$('#history').delegate('.pagination a', 'click', function(e) {
\t  e.preventDefault();

\t  \$('#history').load(this.href);
  });

  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 549
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "');

  \$('#button-history').on('click', function() {
\t  \$.ajax({
\t\t  url: '";
        // line 553
        yield ($context["catalog"] ?? null);
        yield "index.php?route=api/order/history&api_token=";
        yield ($context["api_token"] ?? null);
        yield "&store_id=";
        yield ($context["store_id"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "',
\t\t  type: 'post',
\t\t  dataType: 'json',
\t\t  data: 'order_status_id=' + encodeURIComponent(\$('select[name=\\'order_status_id\\']').val()) + '&notify=' + (\$('input[name=\\'notify\\']').prop('checked') ? 1 : 0) + '&override=' + (\$('input[name=\\'override\\']').prop('checked') ? 1 : 0) + '&append=' + (\$('input[name=\\'append\\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent(\$('textarea[name=\\'comment\\']').val()),
\t\t  beforeSend: function() {
\t\t\t  \$('#button-history').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-history').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }

\t\t\t  if (json['success']) {
\t\t\t\t  \$('#history').load('index.php?route=sale/order/history&user_token=";
        // line 571
        yield ($context["user_token"] ?? null);
        yield "&order_id=";
        yield ($context["order_id"] ?? null);
        yield "');

\t\t\t\t  \$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t  \$('textarea[name=\\'comment\\']').val('');
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });
  //--></script>
</div>
";
        // line 585
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
        return "sale/order_info.twig";
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
        return array (  1226 => 585,  1207 => 571,  1180 => 553,  1171 => 549,  1148 => 531,  1136 => 522,  1130 => 519,  1115 => 507,  1091 => 488,  1077 => 477,  1053 => 458,  1039 => 447,  1015 => 428,  1001 => 417,  977 => 398,  943 => 369,  934 => 362,  923 => 361,  919 => 360,  909 => 353,  905 => 352,  899 => 349,  895 => 348,  892 => 347,  886 => 344,  882 => 343,  879 => 342,  877 => 341,  872 => 339,  868 => 338,  860 => 333,  854 => 329,  847 => 324,  838 => 321,  834 => 320,  831 => 319,  827 => 318,  819 => 313,  813 => 309,  810 => 308,  803 => 303,  794 => 300,  790 => 299,  787 => 298,  783 => 297,  775 => 292,  769 => 288,  766 => 287,  759 => 282,  750 => 279,  746 => 278,  743 => 277,  739 => 276,  731 => 271,  725 => 267,  723 => 266,  715 => 263,  704 => 255,  693 => 247,  680 => 239,  674 => 235,  668 => 234,  660 => 232,  652 => 230,  649 => 229,  645 => 228,  639 => 225,  633 => 222,  625 => 216,  614 => 214,  610 => 213,  606 => 212,  602 => 211,  595 => 207,  589 => 203,  581 => 199,  573 => 194,  568 => 191,  566 => 190,  561 => 187,  552 => 184,  548 => 183,  545 => 182,  540 => 181,  531 => 178,  527 => 177,  519 => 174,  516 => 173,  511 => 172,  502 => 169,  498 => 168,  494 => 167,  490 => 166,  482 => 165,  474 => 164,  471 => 163,  465 => 162,  462 => 161,  460 => 160,  457 => 159,  449 => 158,  446 => 157,  442 => 156,  434 => 151,  430 => 150,  426 => 149,  422 => 148,  418 => 147,  410 => 141,  404 => 140,  402 => 139,  398 => 138,  392 => 134,  386 => 133,  384 => 132,  380 => 131,  371 => 125,  360 => 116,  356 => 115,  353 => 114,  345 => 112,  337 => 110,  334 => 109,  332 => 108,  328 => 107,  325 => 106,  315 => 105,  313 => 104,  309 => 103,  304 => 100,  300 => 99,  297 => 98,  289 => 96,  281 => 94,  278 => 93,  276 => 92,  272 => 91,  268 => 90,  263 => 87,  259 => 86,  251 => 84,  249 => 83,  245 => 82,  241 => 81,  233 => 76,  222 => 68,  218 => 67,  210 => 64,  206 => 63,  200 => 60,  196 => 59,  191 => 56,  183 => 55,  173 => 54,  169 => 53,  162 => 49,  152 => 41,  146 => 38,  142 => 37,  139 => 36,  137 => 35,  132 => 33,  128 => 32,  122 => 29,  118 => 28,  110 => 25,  106 => 24,  98 => 19,  88 => 11,  77 => 9,  73 => 8,  68 => 6,  50 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "sale/order_info.twig", "");
    }
}
