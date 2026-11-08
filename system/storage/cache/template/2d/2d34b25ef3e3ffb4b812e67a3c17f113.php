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

/* journal3/template/checkout/guest.twig */
class __TwigTemplate_3bfbc8e2fd060b9be9f6f2d422b2d3cb extends Template
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
        yield "<div class=\"row register-page\">
  <div class=\"col-sm-6\">
    <fieldset id=\"account\">
      <legend>";
        // line 4
        yield ($context["text_your_details"] ?? null);
        yield "</legend>
      <div class=\"form-group\" style=\"display: ";
        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) > 1)) {
            yield " block ";
        } else {
            yield " none ";
        }
        yield ";\">
        <label class=\"control-label\">";
        // line 6
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 8) == ($context["customer_group_id"] ?? null))) {
                // line 9
                yield "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 11
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 11);
                yield "\" checked=\"checked\" />
            ";
                // line 12
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 12);
                yield "</label>
        </div>
        ";
            } else {
                // line 15
                yield "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 17
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 17);
                yield "\" />
            ";
                // line 18
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 18);
                yield "</label>
        </div>
        ";
            }
            // line 21
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 23
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"firstname\" value=\"";
        // line 24
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 27
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"lastname\" value=\"";
        // line 28
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 31
        yield ($context["entry_email"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"email\" value=\"";
        // line 32
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 35
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"telephone\" value=\"";
        // line 36
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 39
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 39) == "account")) {
                // line 40
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 40) == "select")) {
                    // line 41
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 41);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 41);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 42
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 42);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 42);
                    yield "</label>
        <select name=\"custom_field[";
                    // line 43
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 43);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 43);
                    yield "]\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 43);
                    yield "\" class=\"form-control\">
          <option value=\"\">";
                    // line 44
                    yield ($context["text_select"] ?? null);
                    yield "</option>
          
          
          ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 47));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 48
                        yield "          ";
                        if (((($_v0 = ($context["guest_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 48)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 48) == (($_v1 = ($context["guest_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 48)] ?? null) : null)))) {
                            // line 49
                            yield "          <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 49);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 49);
                            yield "</option>
          
          
          ";
                        } else {
                            // line 53
                            yield "          
          
          <option value=\"";
                            // line 55
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 55);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 55);
                            yield "</option>
          
          
          ";
                        }
                        // line 59
                        yield "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    yield "        
        
        </select>
      </div>
      ";
                }
                // line 65
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 65) == "radio")) {
                    // line 66
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 66);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 66);
                    yield "\">
        <label class=\"control-label\">";
                    // line 67
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 67);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 68
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 68);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 68));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 69
                        yield "          <div class=\"radio\"> ";
                        if (((($_v2 = ($context["guest_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 69) == (($_v3 = ($context["guest_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69)] ?? null) : null)))) {
                            // line 70
                            yield "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 71
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 71);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 71);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 71);
                            yield "\" checked=\"checked\" />
              ";
                            // line 72
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 72);
                            yield "</label>
            ";
                        } else {
                            // line 74
                            yield "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 75
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 75);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 75);
                            yield "\" />
              ";
                            // line 76
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 76);
                            yield "</label>
            ";
                        }
                        // line 77
                        yield " </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    yield " </div>
      </div>
      ";
                }
                // line 81
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 81) == "checkbox")) {
                    // line 82
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 82);
                    yield "\">
        <label class=\"control-label\">";
                    // line 83
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 83);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 84
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 84));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 85
                        yield "          <div class=\"checkbox\"> ";
                        if (((($_v4 = ($context["guest_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85), (($_v5 = ($context["guest_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null)))) {
                            // line 86
                            yield "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 87
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 87);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 87);
                            yield "\" checked=\"checked\" />
              ";
                            // line 88
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 88);
                            yield "</label>
            ";
                        } else {
                            // line 90
                            yield "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 91
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 91);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 91);
                            yield "\" />
              ";
                            // line 92
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 92);
                            yield "</label>
            ";
                        }
                        // line 93
                        yield " </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    yield " </div>
      </div>
      ";
                }
                // line 97
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 97) == "text")) {
                    // line 98
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 98);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 98);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 99
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 99);
                    yield "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 100
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 100);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v6 = ($context["guest_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v7 = ($context["guest_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 100);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 100);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 103
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 103) == "textarea")) {
                    // line 104
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 104);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 105);
                    yield "</label>
        <textarea name=\"custom_field[";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 106);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                    yield "\" class=\"form-control\">";
                    if ((($tmp = (($_v8 = ($context["guest_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v9 = ($context["guest_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 106);
                        yield " ";
                    }
                    yield "</textarea>
      </div>
      ";
                }
                // line 109
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 109) == "file")) {
                    // line 110
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 110);
                    yield "\">
        <label class=\"control-label\">";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 111);
                    yield "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 113
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 114
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 114);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v10 = ($context["guest_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v11 = ($context["guest_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114)] ?? null) : null);
                        yield " ";
                    }
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                    yield "\" />
      </div>
      ";
                }
                // line 117
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 117) == "date")) {
                    // line 118
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 118);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 118);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 121
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 121);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v12 = ($context["guest_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v13 = ($context["guest_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 121);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 127
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "time")) {
                    // line 128
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 128);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 129
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                    yield "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 131
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 131);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v14 = ($context["guest_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v15 = ($context["guest_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 131);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 131);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 137
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 137) == "datetime")) {
                    // line 138
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 138);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 139
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 139);
                    yield "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 141
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 141);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v16 = ($context["guest_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v17 = ($context["guest_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 141);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 147
                yield "      ";
            }
            // line 148
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 153
        yield ($context["text_your_address"] ?? null);
        yield "</legend>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-company\">";
        // line 155
        yield ($context["entry_company"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"company\" value=\"";
        // line 156
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 159
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"address_1\" value=\"";
        // line 160
        yield ($context["address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 163
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"address_2\" value=\"";
        // line 164
        yield ($context["address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 167
        yield ($context["entry_city"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"city\" value=\"";
        // line 168
        yield ($context["city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 171
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 172
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
        // line 175
        yield ($context["entry_country"] ?? null);
        yield "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 177
        yield ($context["text_select"] ?? null);
        yield "</option>
          
          
         ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 181
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 181) == ($context["country_id"] ?? null))) {
                // line 182
                yield "          
          
          <option value=\"";
                // line 184
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 184);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 184);
                yield "</option>
          
          
          ";
            } else {
                // line 188
                yield "          
          
          <option value=\"";
                // line 190
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 190);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 190);
                yield "</option>
          
          
          ";
            }
            // line 194
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        yield "        
        
        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 200
        yield ($context["entry_zone"] ?? null);
        yield "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 205
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 205) == "address")) {
                // line 206
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 206) == "select")) {
                    // line 207
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 207);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 208
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                    yield "</label>
        <select name=\"custom_field[";
                    // line 209
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 209);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    yield "]\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                    yield "\" class=\"form-control\">
          <option value=\"\">";
                    // line 210
                    yield ($context["text_select"] ?? null);
                    yield "</option>
          
          
          ";
                    // line 213
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 213));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 214
                        yield "          ";
                        if (((($_v18 = ($context["guest_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 214) == (($_v19 = ($context["guest_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null)))) {
                            // line 215
                            yield "          <option value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 215);
                            yield "\" selected=\"selected\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 215);
                            yield "</option>
          
          
          ";
                        } else {
                            // line 219
                            yield "          
          
          <option value=\"";
                            // line 221
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 221);
                            yield "\">";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 221);
                            yield "</option>
          
          
          ";
                        }
                        // line 225
                        yield "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 226
                    yield "        
        
        </select>
      </div>
      ";
                }
                // line 231
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 231) == "radio")) {
                    // line 232
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 232);
                    yield "\">
        <label class=\"control-label\">";
                    // line 233
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 233);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 234
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 234);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 234));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 235
                        yield "          <div class=\"radio\"> ";
                        if (((($_v20 = ($context["guest_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 235) == (($_v21 = ($context["guest_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 235)] ?? null) : null)))) {
                            // line 236
                            yield "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 237
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 237);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 237);
                            yield "\" checked=\"checked\" />
              ";
                            // line 238
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 238);
                            yield "</label>
            ";
                        } else {
                            // line 240
                            yield "            <label>
              <input type=\"radio\" name=\"custom_field[";
                            // line 241
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 241);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 241);
                            yield "]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 241);
                            yield "\" />
              ";
                            // line 242
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 242);
                            yield "</label>
            ";
                        }
                        // line 243
                        yield " </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 244
                    yield " </div>
      </div>
      ";
                }
                // line 247
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 247) == "checkbox")) {
                    // line 248
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 248);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 248);
                    yield "\">
        <label class=\"control-label\">";
                    // line 249
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 249);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 250
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 250));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 251
                        yield "          <div class=\"checkbox\"> ";
                        if (((($_v22 = ($context["guest_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 251), (($_v23 = ($context["guest_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null)))) {
                            // line 252
                            yield "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 253
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 253);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 253);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 253);
                            yield "\" checked=\"checked\" />
              ";
                            // line 254
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 254);
                            yield "</label>
            ";
                        } else {
                            // line 256
                            yield "            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                            // line 257
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 257);
                            yield "][";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                            yield "][]\" value=\"";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 257);
                            yield "\" />
              ";
                            // line 258
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 258);
                            yield "</label>
            ";
                        }
                        // line 259
                        yield " </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 260
                    yield " </div>
      </div>
      ";
                }
                // line 263
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 263) == "text")) {
                    // line 264
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 264);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 265
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 265);
                    yield "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 266
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 266);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v24 = ($context["guest_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v25 = ($context["guest_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 266);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 266);
                    yield "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 269
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 269) == "textarea")) {
                    // line 270
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 270);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 271
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 271);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 271);
                    yield "</label>
        <textarea name=\"custom_field[";
                    // line 272
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 272);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 272);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272);
                    yield "\" class=\"form-control\">";
                    if ((($tmp = (($_v26 = ($context["guest_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v27 = ($context["guest_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 272)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 272);
                        yield " ";
                    }
                    yield "</textarea>
      </div>
      ";
                }
                // line 275
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 275) == "file")) {
                    // line 276
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 276);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 276);
                    yield "\">
        <label class=\"control-label\">";
                    // line 277
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 277);
                    yield "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 279
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 280
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 280);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v28 = ($context["guest_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v29 = ($context["guest_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280)] ?? null) : null);
                        yield " ";
                    }
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                    yield "\" />
      </div>
      ";
                }
                // line 283
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 283) == "date")) {
                    // line 284
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 284);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 284);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 285
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 285);
                    yield "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 287
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 287);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v30 = ($context["guest_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v31 = ($context["guest_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 287);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 287);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 293
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 293) == "time")) {
                    // line 294
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 294);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 294);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 295
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 295);
                    yield "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 297
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 297);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v32 = ($context["guest_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v33 = ($context["guest_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 297);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 297);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 297);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 303
                yield "      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 303) == "time")) {
                    // line 304
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 304);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 304);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 305
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 305);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 305);
                    yield "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 307
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 307);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                    yield "]\" value=\"";
                    if ((($tmp = (($_v34 = ($context["guest_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " ";
                        yield (($_v35 = ($context["guest_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307)] ?? null) : null);
                        yield " ";
                    } else {
                        yield " ";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 307);
                        yield " ";
                    }
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 307);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 307);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 313
                yield "      ";
            }
            // line 314
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        yield "    </fieldset>
    ";
        // line 316
        yield ($context["captcha"] ?? null);
        yield " </div>
</div>
";
        // line 318
        if ((($tmp = ($context["shipping_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 319
            yield "<div class=\"checkbox\">
  <label> ";
            // line 320
            if ((($tmp = ($context["shipping_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 321
                yield "    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            } else {
                // line 323
                yield "    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" />
    ";
            }
            // line 325
            yield "    ";
            yield ($context["entry_shipping"] ?? null);
            yield "</label>
</div>
";
        }
        // line 328
        yield "<div class=\"buttons\">
  <div class=\"pull-right\">
    <button type=\"button\" id=\"button-guest\" data-loading-text=\"";
        // line 330
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\"><span>";
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
  </div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('#address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\$('#address .form-group:first').before(this);
\t}
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/customfield&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\$('#collapse-payment-address .custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t} else {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).removeClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
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

\t\t\t\t\t\t\$(node).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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
        // line 454
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 459
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 464
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 487
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 493
        yield ($context["zone_id"] ?? null);
        yield "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 500
        yield ($context["text_none"] ?? null);
        yield "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/checkout/guest.twig";
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
        return array (  1441 => 500,  1431 => 493,  1422 => 487,  1396 => 464,  1388 => 459,  1380 => 454,  1251 => 330,  1247 => 328,  1240 => 325,  1236 => 323,  1232 => 321,  1230 => 320,  1227 => 319,  1225 => 318,  1220 => 316,  1217 => 315,  1211 => 314,  1208 => 313,  1183 => 307,  1176 => 305,  1169 => 304,  1166 => 303,  1141 => 297,  1134 => 295,  1127 => 294,  1124 => 293,  1099 => 287,  1092 => 285,  1085 => 284,  1082 => 283,  1066 => 280,  1058 => 279,  1053 => 277,  1046 => 276,  1043 => 275,  1021 => 272,  1015 => 271,  1008 => 270,  1005 => 269,  983 => 266,  977 => 265,  970 => 264,  967 => 263,  962 => 260,  955 => 259,  950 => 258,  942 => 257,  939 => 256,  934 => 254,  926 => 253,  923 => 252,  920 => 251,  914 => 250,  910 => 249,  903 => 248,  900 => 247,  895 => 244,  888 => 243,  883 => 242,  875 => 241,  872 => 240,  867 => 238,  859 => 237,  856 => 236,  853 => 235,  847 => 234,  843 => 233,  836 => 232,  833 => 231,  826 => 226,  820 => 225,  811 => 221,  807 => 219,  797 => 215,  794 => 214,  790 => 213,  784 => 210,  776 => 209,  770 => 208,  763 => 207,  760 => 206,  757 => 205,  753 => 204,  746 => 200,  739 => 195,  733 => 194,  724 => 190,  720 => 188,  711 => 184,  707 => 182,  704 => 181,  700 => 180,  694 => 177,  689 => 175,  681 => 172,  677 => 171,  669 => 168,  665 => 167,  657 => 164,  653 => 163,  645 => 160,  641 => 159,  633 => 156,  629 => 155,  624 => 153,  618 => 149,  612 => 148,  609 => 147,  584 => 141,  577 => 139,  570 => 138,  567 => 137,  542 => 131,  535 => 129,  528 => 128,  525 => 127,  500 => 121,  493 => 119,  486 => 118,  483 => 117,  467 => 114,  459 => 113,  454 => 111,  447 => 110,  444 => 109,  422 => 106,  416 => 105,  409 => 104,  406 => 103,  384 => 100,  378 => 99,  371 => 98,  368 => 97,  363 => 94,  356 => 93,  351 => 92,  343 => 91,  340 => 90,  335 => 88,  327 => 87,  324 => 86,  321 => 85,  315 => 84,  311 => 83,  304 => 82,  301 => 81,  296 => 78,  289 => 77,  284 => 76,  276 => 75,  273 => 74,  268 => 72,  260 => 71,  257 => 70,  254 => 69,  248 => 68,  244 => 67,  237 => 66,  234 => 65,  227 => 60,  221 => 59,  212 => 55,  208 => 53,  198 => 49,  195 => 48,  191 => 47,  185 => 44,  177 => 43,  171 => 42,  164 => 41,  161 => 40,  158 => 39,  154 => 38,  147 => 36,  143 => 35,  135 => 32,  131 => 31,  123 => 28,  119 => 27,  111 => 24,  107 => 23,  98 => 21,  92 => 18,  88 => 17,  84 => 15,  78 => 12,  74 => 11,  70 => 9,  67 => 8,  63 => 7,  59 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/guest.twig", "");
    }
}
