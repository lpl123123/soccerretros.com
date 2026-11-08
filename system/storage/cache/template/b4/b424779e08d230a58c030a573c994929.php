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

/* journal3/template/checkout/shipping_address.twig */
class __TwigTemplate_57b718ca019e52924fbba83c35ad1bba extends Template
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
        yield "<form class=\"form-horizontal\">
  ";
        // line 2
        if ((($tmp = ($context["addresses"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 3
            yield "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            yield ($context["text_address_existing"] ?? null);
            yield "</label>
  </div>
  <div id=\"shipping-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 11) == ($context["address_id"] ?? null))) {
                    // line 12
                    yield "      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 12);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 12);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 12);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 12);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 12);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 12);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 12);
                    yield "</option>
      ";
                } else {
                    // line 14
                    yield "      <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 14);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 14);
                    yield " ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 14);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 14);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 14);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 14);
                    yield ", ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 14);
                    yield "</option>
      ";
                }
                // line 16
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"shipping_address\" value=\"new\" />
      ";
            // line 22
            yield ($context["text_address_new"] ?? null);
            yield "</label>
  </div>
  ";
        }
        // line 25
        yield "  <br />
  <div id=\"shipping-new\" style=\"display: ";
        // line 26
        if ((($tmp = ($context["addresses"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "none";
        } else {
            yield "block";
        }
        yield ";\">
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 28
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 30
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-shipping-firstname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 34
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 36
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-shipping-lastname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 40
        yield ($context["entry_company"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 42
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 46
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 48
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 52
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 54
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 58
        yield ($context["entry_city"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 60
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 64
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 66
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 70
        yield ($context["entry_country"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
          <option value=\"\">";
        // line 73
        yield ($context["text_select"] ?? null);
        yield "</option>
          ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 75
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 75) == ($context["country_id"] ?? null))) {
                // line 76
                yield "          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 76);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 76);
                yield "</option>
          ";
            } else {
                // line 78
                yield "          <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 78);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 78);
                yield "</option>
           ";
            }
            // line 80
            yield "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "        </select>
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 85
        yield ($context["entry_zone"] ?? null);
        yield "</label>
      <div class=\"col-sm-10\">
        <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
        </select>
      </div>
    </div>
   ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 92
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "select")) {
                // line 93
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 93);
                yield "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 94
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                yield "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 96
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                yield "]\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96);
                yield "\" class=\"form-control\">
          <option value=\"\">";
                // line 97
                yield ($context["text_select"] ?? null);
                yield "</option>
          ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 98));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 99
                    yield "          <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                yield "        </select>
      </div>
    </div>
    ";
            }
            // line 105
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 105) == "radio")) {
                // line 106
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 106);
                yield "\">
      <label class=\"col-sm-2 control-label\">";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 107);
                yield "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 109
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                yield "\">
          ";
                // line 110
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 110));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 111
                    yield "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 113
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 113);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113);
                    yield "\" />
              ";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 114);
                    yield "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "        </div>
      </div>
    </div>
    ";
            }
            // line 121
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "checkbox")) {
                // line 122
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 122);
                yield "\">
      <label class=\"col-sm-2 control-label\">";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                yield "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-shipping-custom-field";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                yield "\">
          ";
                // line 126
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 127
                    yield "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 129
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 129);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 129);
                    yield "\" />
              ";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 130);
                    yield "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                yield "        </div>
      </div>
    </div>
    ";
            }
            // line 137
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "text")) {
                // line 138
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 138);
                yield "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 139
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                yield "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"custom_field[";
                // line 141
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                yield "\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                yield "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 145
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "textarea")) {
                // line 146
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 146)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 146);
                yield "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                yield "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 149);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                yield "\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 149);
                yield "</textarea>
      </div>
    </div>
    ";
            }
            // line 153
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 153) == "file")) {
                // line 154
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 154)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 154);
                yield "\">
      <label class=\"col-sm-2 control-label\">";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                yield "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-shipping-custom-field";
                // line 157
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                yield "\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 158
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 158);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                yield "]\" value=\"\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                yield "\" />
      </div>
    </div>
    ";
            }
            // line 162
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "date")) {
                // line 163
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 163);
                yield "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                yield "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 167);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 167);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 174
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 174) == "time")) {
                // line 175
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 175)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 175);
                yield "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 176
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 176);
                yield "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 179
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 179);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 179);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                yield "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 186
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 186) == "datetime")) {
                // line 187
                yield "    <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 187);
                yield "\">
      <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                // line 188
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 188);
                yield "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 191
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 191);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 191);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 191);
                yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191);
                yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 198
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "  </div>
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <button type=\"button\" id=\"button-shipping-address\" data-loading-text=\"";
        // line 202
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#shipping-existing').hide();
\t\t\$('#shipping-new').show();
\t} else {
\t\t\$('#shipping-existing').show();
\t\t\$('#shipping-new').hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-shipping-address .form-group').length-2) {
\t\t\$('#collapse-shipping-address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address button[id^=\\'button-shipping-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 291
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 296
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 301
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-shipping-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-shipping-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-shipping-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 324
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 330
        yield ($context["zone_id"] ?? null);
        yield "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 337
        yield ($context["text_none"] ?? null);
        yield "</option>';
\t\t\t}

\t\t\t\$('#collapse-shipping-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping-address select[name=\\'country_id\\']').trigger('change');
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/checkout/shipping_address.twig";
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
        return array (  817 => 337,  807 => 330,  798 => 324,  772 => 301,  764 => 296,  756 => 291,  662 => 202,  657 => 199,  651 => 198,  633 => 191,  625 => 188,  616 => 187,  613 => 186,  595 => 179,  587 => 176,  578 => 175,  575 => 174,  557 => 167,  549 => 164,  540 => 163,  537 => 162,  526 => 158,  518 => 157,  513 => 155,  504 => 154,  501 => 153,  486 => 149,  479 => 147,  470 => 146,  467 => 145,  452 => 141,  445 => 139,  436 => 138,  433 => 137,  427 => 133,  418 => 130,  410 => 129,  406 => 127,  402 => 126,  398 => 125,  393 => 123,  384 => 122,  381 => 121,  375 => 117,  366 => 114,  358 => 113,  354 => 111,  350 => 110,  346 => 109,  341 => 107,  332 => 106,  329 => 105,  323 => 101,  312 => 99,  308 => 98,  304 => 97,  296 => 96,  289 => 94,  280 => 93,  277 => 92,  273 => 91,  264 => 85,  258 => 81,  252 => 80,  244 => 78,  236 => 76,  233 => 75,  229 => 74,  225 => 73,  219 => 70,  210 => 66,  205 => 64,  198 => 60,  193 => 58,  186 => 54,  181 => 52,  174 => 48,  169 => 46,  162 => 42,  157 => 40,  150 => 36,  145 => 34,  138 => 30,  133 => 28,  124 => 26,  121 => 25,  115 => 22,  108 => 17,  102 => 16,  84 => 14,  66 => 12,  63 => 11,  59 => 10,  52 => 6,  47 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/shipping_address.twig", "");
    }
}
