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

/* journal3/template/checkout/guest_shipping.twig */
class __TwigTemplate_bbbd02ec292f6d0267b992d5c2280738 extends Template
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
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-firstname\">";
        // line 3
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"firstname\" value=\"";
        // line 5
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-shipping-firstname\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-lastname\">";
        // line 9
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"lastname\" value=\"";
        // line 11
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-shipping-lastname\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-company\">";
        // line 15
        yield ($context["entry_company"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"company\" value=\"";
        // line 17
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-1\">";
        // line 21
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"address_1\" value=\"";
        // line 23
        yield ($context["address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-address-2\">";
        // line 27
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"address_2\" value=\"";
        // line 29
        yield ($context["address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-city\">";
        // line 33
        yield ($context["entry_city"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"city\" value=\"";
        // line 35
        yield ($context["city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-postcode\">";
        // line 39
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"postcode\" value=\"";
        // line 41
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\" />
    </div>
  </div>
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-country\">";
        // line 45
        yield ($context["entry_country"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
        <option value=\"\">";
        // line 48
        yield ($context["text_select"] ?? null);
        yield "</option>
        
       ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 51
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 51) == ($context["country_id"] ?? null))) {
                // line 52
                yield "        
        <option value=\"";
                // line 53
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 53);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 53);
                yield "</option>
        
        ";
            } else {
                // line 56
                yield "        
        <option value=\"";
                // line 57
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 57);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 57);
                yield "</option>
        
        ";
            }
            // line 60
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "      
      </select>
    </div>
  </div>
  <div class=\"form-group required\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-zone\">";
        // line 66
        yield ($context["entry_zone"] ?? null);
        yield "</label>
    <div class=\"col-sm-10\">
      <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
      </select>
    </div>
  </div>
  ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 73
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 73) == "address")) {
                // line 74
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 74) == "select")) {
                    // line 75
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 75);
                    yield "\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 76
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 76);
                    yield "</label>
    <div class=\"col-sm-10\">
      <select name=\"custom_field[";
                    // line 78
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 78);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    yield "]\" id=\"input-shipping-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                    yield "\" class=\"form-control\">
        <option value=\"\">";
                    // line 79
                    yield ($context["text_select"] ?? null);
                    yield "</option>
        
        ";
                    // line 81
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 81));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 82
                        yield "        ";
                        if (((($_v0 = ($context["address_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82) == (($_v1 = ($context["address_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82)] ?? null) : null)))) {
                            // line 83
                            yield "        
        <option value=\"";
                            // line 84
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 84);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 84);
                            yield "</option>
        
        ";
                        } else {
                            // line 87
                            yield "        
        <option value=\"";
                            // line 88
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 88);
                            yield "</option>
        
        ";
                        }
                        // line 91
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 92
                    yield "      
      </select>
    </div>
  </div>
  ";
                }
                // line 97
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 97) == "radio")) {
                    // line 98
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 98)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 98);
                    yield "\">
    <label class=\"col-sm-2 control-label\">";
                    // line 99
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 99);
                    yield "</label>
    <div class=\"col-sm-10\">
      <div id=\"input-shipping-custom-field";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 101));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 102
                        yield "        <div class=\"radio\"> ";
                        if (((($_v2 = ($context["address_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 102) == (($_v3 = ($context["address_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102)] ?? null) : null)))) {
                            // line 103
                            yield "          <label>
            <input type=\"radio\" name=\"custom_field[";
                            // line 104
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 104);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                            yield "\" checked=\"checked\" />
            ";
                            // line 105
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 105);
                            yield "</label>
          ";
                        } else {
                            // line 107
                            yield "          <label>
            <input type=\"radio\" name=\"custom_field[";
                            // line 108
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 108);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 108);
                            yield "\" />
            ";
                            // line 109
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 109);
                            yield "</label>
          ";
                        }
                        // line 110
                        yield " </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    yield " </div>
    </div>
  </div>
  ";
                }
                // line 115
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "checkbox")) {
                    // line 116
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 116)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 116);
                    yield "\">
    <label class=\"col-sm-2 control-label\">";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                    yield "</label>
    <div class=\"col-sm-10\">
      <div id=\"input-shipping-custom-field";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 119));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 120
                        yield "        <div class=\"checkbox\"> ";
                        if (((($_v4 = ($context["address_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120), (($_v5 = ($context["address_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120)] ?? null) : null)))) {
                            // line 121
                            yield "          <label>
            <input type=\"checkbox\" name=\"custom_field[";
                            // line 122
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 122);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122);
                            yield "\" checked=\"checked\" />
            ";
                            // line 123
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 123);
                            yield "</label>
          ";
                        } else {
                            // line 125
                            yield "          <label>
            <input type=\"checkbox\" name=\"custom_field[";
                            // line 126
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 126);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 126);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 126);
                            yield "\" />
            ";
                            // line 127
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 127);
                            yield "</label>
          ";
                        }
                        // line 128
                        yield " </div>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 129
                    yield " </div>
    </div>
  </div>
  ";
                }
                // line 133
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 133) == "text")) {
                    // line 134
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 134);
                    yield "\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 135
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 135);
                    yield "</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" name=\"custom_field[";
                    // line 137
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 137);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v6 = ($context["address_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v7 = ($context["address_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 137);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                    yield "\" id=\"input-shipping-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 137);
                    yield "\" class=\"form-control\" />
    </div>
  </div>
  ";
                }
                // line 141
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 141) == "textarea")) {
                    // line 142
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 142)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 142);
                    yield "\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 143
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 143);
                    yield "</label>
    <div class=\"col-sm-10\">
      <textarea name=\"custom_field[";
                    // line 145
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 145);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 145);
                    yield "\" id=\"input-shipping-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                    yield "\" class=\"form-control\">";
                    if ((($tmp = (($_v8 = ($context["address_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v9 = ($context["address_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 145);
                    }
                    yield "</textarea>
    </div>
  </div>
  ";
                }
                // line 149
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 149) == "file")) {
                    // line 150
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 150)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 150);
                    yield "\">
    <label class=\"col-sm-2 control-label\">";
                    // line 151
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 151);
                    yield "</label>
    <div class=\"col-sm-10\">
      <button type=\"button\" id=\"button-shipping-custom-field";
                    // line 153
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
      <input type=\"hidden\" name=\"custom_field[";
                    // line 154
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 154);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v10 = ($context["address_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "  ";
                        yield (($_v11 = ($context["address_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                        yield " ";
                    }
                    yield "\" />
    </div>
  </div>
  ";
                }
                // line 158
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "date")) {
                    // line 159
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 159);
                    yield "\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 160
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                    yield "</label>
    <div class=\"col-sm-10\">
      <div class=\"input-group date\">
        <input type=\"text\" name=\"custom_field[";
                    // line 163
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 163);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v12 = ($context["address_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v13 = ($context["address_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 163);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-shipping-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                    yield "\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
        </span></div>
    </div>
  </div>
  ";
                }
                // line 170
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 170) == "time")) {
                    // line 171
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 171);
                    yield "\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 172
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 172);
                    yield "</label>
    <div class=\"col-sm-10\">
      <div class=\"input-group time\">
        <input type=\"text\" name=\"custom_field[";
                    // line 175
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 175);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v14 = ($context["address_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v15 = ($context["address_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 175);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 175);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-shipping-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
        </span></div>
    </div>
  </div>
  ";
                }
                // line 182
                yield "  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 182) == "datetime")) {
                    // line 183
                    yield "  <div class=\"form-group";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 183)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " required ";
                    }
                    yield " custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 183);
                    yield "\">
    <label class=\"col-sm-2 control-label\" for=\"input-shipping-custom-field";
                    // line 184
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                    yield "</label>
    <div class=\"col-sm-10\">
      <div class=\"input-group datetime\">
        <input type=\"text\" name=\"custom_field[";
                    // line 187
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 187);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v16 = ($context["address_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield (($_v17 = ($context["address_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187)] ?? null) : null);
                    } else {
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 187);
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 187);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-shipping-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                    yield "\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
        </span></div>
    </div>
  </div>
  ";
                }
                // line 194
                yield "  ";
            }
            // line 195
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "  <div class=\"buttons\">
    <div class=\"pull-right\">
      <button type=\"button\" id=\"button-guest-shipping\" data-loading-text=\"";
        // line 198
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
// Sort the custom fields
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
\tvar node = this;

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
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(node).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').attr('value', json['file']);
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
        // line 277
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 282
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 287
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
        // line 310
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 316
        yield ($context["zone_id"] ?? null);
        yield "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
          \t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 323
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
        return "journal3/template/checkout/guest_shipping.twig";
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
        return array (  829 => 323,  819 => 316,  810 => 310,  784 => 287,  776 => 282,  768 => 277,  684 => 198,  680 => 196,  674 => 195,  671 => 194,  649 => 187,  641 => 184,  632 => 183,  629 => 182,  607 => 175,  599 => 172,  590 => 171,  587 => 170,  565 => 163,  557 => 160,  548 => 159,  545 => 158,  530 => 154,  522 => 153,  517 => 151,  508 => 150,  505 => 149,  486 => 145,  479 => 143,  470 => 142,  467 => 141,  448 => 137,  441 => 135,  432 => 134,  429 => 133,  423 => 129,  416 => 128,  411 => 127,  403 => 126,  400 => 125,  395 => 123,  387 => 122,  384 => 121,  381 => 120,  375 => 119,  370 => 117,  361 => 116,  358 => 115,  352 => 111,  345 => 110,  340 => 109,  332 => 108,  329 => 107,  324 => 105,  316 => 104,  313 => 103,  310 => 102,  304 => 101,  299 => 99,  290 => 98,  287 => 97,  280 => 92,  274 => 91,  266 => 88,  263 => 87,  255 => 84,  252 => 83,  249 => 82,  245 => 81,  240 => 79,  232 => 78,  225 => 76,  216 => 75,  213 => 74,  210 => 73,  206 => 72,  197 => 66,  190 => 61,  184 => 60,  176 => 57,  173 => 56,  165 => 53,  162 => 52,  159 => 51,  155 => 50,  150 => 48,  144 => 45,  135 => 41,  130 => 39,  121 => 35,  116 => 33,  107 => 29,  102 => 27,  93 => 23,  88 => 21,  79 => 17,  74 => 15,  65 => 11,  60 => 9,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/guest_shipping.twig", "");
    }
}
