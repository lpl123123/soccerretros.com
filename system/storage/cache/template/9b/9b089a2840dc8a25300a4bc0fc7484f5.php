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

/* journal3/template/checkout/register.twig */
class __TwigTemplate_38a5dfc109067aa4f7540b7e371f82e5 extends Template
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
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 24
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 27
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 28
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 31
        yield ($context["entry_email"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 32
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 35
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 36
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 39
            yield "      
      ";
            // line 40
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 40) == "account")) {
                // line 41
                yield "      
      ";
                // line 42
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 42) == "select")) {
                    // line 43
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 43);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 43);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 44
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 44);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 44);
                    yield "</label>
        <select name=\"custom_field[";
                    // line 45
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 45);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 45);
                    yield "]\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 45);
                    yield "\" class=\"form-control\">
          <option value=\"\">";
                    // line 46
                    yield ($context["text_select"] ?? null);
                    yield "</option>
          
          
          
          ";
                    // line 50
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 50));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 51
                        yield "          
          
          
          <option value=\"";
                        // line 54
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 54);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 54);
                        yield "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 59
                    yield "        
        
        
        </select>
      </div>
      ";
                }
                // line 65
                yield "      
      ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 66) == "radio")) {
                    // line 67
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 67);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 67);
                    yield "\">
        <label class=\"control-label\">";
                    // line 68
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 68);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 69
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 69);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 69));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 70
                        yield "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 72
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 72);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 72);
                        yield "\" />
              ";
                        // line 73
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 73);
                        yield "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 75
                    yield " </div>
      </div>
      ";
                }
                // line 78
                yield "      
      ";
                // line 79
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 79) == "checkbox")) {
                    // line 80
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 80);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 80);
                    yield "\">
        <label class=\"control-label\">";
                    // line 81
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 81);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 82
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 82));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 83
                        yield "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 85
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 85);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 85);
                        yield "\" />
              ";
                        // line 86
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 86);
                        yield "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 88
                    yield " </div>
      </div>
      ";
                }
                // line 91
                yield "      
      ";
                // line 92
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 92) == "text")) {
                    // line 93
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 93);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 94
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 94);
                    yield "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 95);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 95);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 95);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 98
                yield "      
      ";
                // line 99
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 99) == "textarea")) {
                    // line 100
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 100);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 101
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 101);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 101);
                    yield "</label>
        <textarea name=\"custom_field[";
                    // line 102
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 102);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 102);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 102);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 102);
                    yield "</textarea>
      </div>
      ";
                }
                // line 105
                yield "      
      ";
                // line 106
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 106) == "file")) {
                    // line 107
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 107);
                    yield "\">
        <label class=\"control-label\">";
                    // line 108
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 108);
                    yield "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 111);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "]\" value=\"\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 111);
                    yield "\" />
      </div>
      ";
                }
                // line 114
                yield "      
      ";
                // line 115
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "date")) {
                    // line 116
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 116);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 116);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 117
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 117);
                    yield "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 119
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 119);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 119);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 119);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 125
                yield "      
      ";
                // line 126
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 126) == "time")) {
                    // line 127
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 127);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 128
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                    yield "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 130
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 130);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 130);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 136
                yield "      
      ";
                // line 137
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
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 141);
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
                yield "      
      ";
            }
            // line 149
            yield "      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "    </fieldset>
    <fieldset>
      <legend>";
        // line 153
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-password\">";
        // line 155
        yield ($context["entry_password"] ?? null);
        yield "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 156
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-payment-password\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 159
        yield ($context["entry_confirm"] ?? null);
        yield "</label>
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 160
        yield ($context["entry_confirm"] ?? null);
        yield "\" id=\"input-payment-confirm\" class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 166
        yield ($context["text_your_address"] ?? null);
        yield "</legend>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-company\">";
        // line 168
        yield ($context["entry_company"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 169
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 172
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 173
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 176
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 177
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 180
        yield ($context["entry_city"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 181
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 184
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 185
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
        // line 188
        yield ($context["entry_country"] ?? null);
        yield "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 190
        yield ($context["text_select"] ?? null);
        yield "</option>
          
          
          
         ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 195
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 195) == ($context["country_id"] ?? null))) {
                // line 196
                yield "          
          
          
          <option value=\"";
                // line 199
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 199);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 199);
                yield "</option>
          
          
          
          ";
            } else {
                // line 204
                yield "          
          
          
          <option value=\"";
                // line 207
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 207);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 207);
                yield "</option>
          
          
          
          ";
            }
            // line 212
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "        
        
        
        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 219
        yield ($context["entry_zone"] ?? null);
        yield "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 224
            yield "      
      ";
            // line 225
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 225) == "address")) {
                // line 226
                yield "      
      ";
                // line 227
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 227) == "select")) {
                    // line 228
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 228);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 228);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 229
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 229);
                    yield "</label>
        <select name=\"custom_field[";
                    // line 230
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 230);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                    yield "]\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 230);
                    yield "\" class=\"form-control\">
          <option value=\"\">";
                    // line 231
                    yield ($context["text_select"] ?? null);
                    yield "</option>
          
          
          
          ";
                    // line 235
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 235));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 236
                        yield "          
          
          
          <option value=\"";
                        // line 239
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 239);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 239);
                        yield "</option>
          
          
          
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 244
                    yield "        
        
        
        </select>
      </div>
      ";
                }
                // line 250
                yield "      
      ";
                // line 251
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 251) == "radio")) {
                    // line 252
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 252);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 252);
                    yield "\">
        <label class=\"control-label\">";
                    // line 253
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 253);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 254
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 254);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 254));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 255
                        yield "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 257
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 257);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 257);
                        yield "\" />
              ";
                        // line 258
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 258);
                        yield "</label>
          </div>
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
                yield "      
      ";
                // line 264
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 264) == "checkbox")) {
                    // line 265
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 265);
                    yield "\">
        <label class=\"control-label\">";
                    // line 266
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 266);
                    yield "</label>
        <div id=\"input-payment-custom-field";
                    // line 267
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 267);
                    yield "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 267));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 268
                        yield "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 270
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 270);
                        yield "][";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 270);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 270);
                        yield "\" />
              ";
                        // line 271
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 271);
                        yield "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    yield " </div>
      </div>
      ";
                }
                // line 276
                yield "      
      ";
                // line 277
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 277) == "text")) {
                    // line 278
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 278);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 278);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 279
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 279);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 279);
                    yield "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 280
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 280);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 280);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 280);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 280);
                    yield "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 283
                yield "      
      ";
                // line 284
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 284) == "textarea")) {
                    // line 285
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 285);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 285);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 286
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 286);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 286);
                    yield "</label>
        <textarea name=\"custom_field[";
                    // line 287
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 287);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                    yield "]\" rows=\"5\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 287);
                    yield "\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 287);
                    yield "\" class=\"form-control\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 287);
                    yield "</textarea>
      </div>
      ";
                }
                // line 290
                yield "      
      ";
                // line 291
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 291) == "file")) {
                    // line 292
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 292);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 292);
                    yield "\">
        <label class=\"control-label\">";
                    // line 293
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 293);
                    yield "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 295
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 295);
                    yield "\" data-loading-text=\"";
                    yield ($context["text_loading"] ?? null);
                    yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    yield ($context["button_upload"] ?? null);
                    yield "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 296
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 296);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 296);
                    yield "]\" value=\"\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 296);
                    yield "\" />
      </div>
      ";
                }
                // line 299
                yield "      
      ";
                // line 300
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 300) == "date")) {
                    // line 301
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 301);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 301);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 302
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 302);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 302);
                    yield "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 304
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 304);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 304);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 304);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 304);
                    yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 304);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 310
                yield "      
      ";
                // line 311
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 311) == "time")) {
                    // line 312
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 312);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 312);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 313
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 313);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 313);
                    yield "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 315
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 315);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 315);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 315);
                    yield "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 315);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 321
                yield "      
      ";
                // line 322
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 322) == "datetime")) {
                    // line 323
                    yield "      <div id=\"payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 323);
                    yield "\" class=\"form-group custom-field\" data-sort=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 323);
                    yield "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 324
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 324);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 324);
                    yield "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 326
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 326);
                    yield "][";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 326);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 326);
                    yield "\" placeholder=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 326);
                    yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 326);
                    yield "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
      ";
                }
                // line 332
                yield "      
      ";
            }
            // line 334
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 335
        yield "    </fieldset>

    ";
        // line 337
        yield ($context["captcha"] ?? null);
        yield "</div>
</div>
<div class=\"checkbox\">
  <label for=\"newsletter\">
    <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
    ";
        // line 342
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
</div>
";
        // line 344
        if ((($tmp = ($context["shipping_required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 345
            yield "<div class=\"checkbox\">
  <label>
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            // line 348
            yield ($context["entry_shipping"] ?? null);
            yield "</label>
</div>
";
        }
        // line 351
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 352
            yield "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">";
            // line 353
            yield ($context["text_agree"] ?? null);
            yield " 
    &nbsp;
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    <button type=\"button\" id=\"button-register\" data-loading-text=\"";
            // line 356
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
  </div>
</div>
";
        } else {
            // line 360
            yield "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">
    <button type=\"button\" id=\"button-register\" data-loading-text=\"";
            // line 362
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
  </div>
</div>
";
        }
        // line 365
        yield " 
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
\t\t\t\t\t\$('.text-danger').remove();

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
        // line 485
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 490
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 495
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
        // line 518
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 524
        yield ($context["zone_id"] ?? null);
        yield "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 531
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
        return "journal3/template/checkout/register.twig";
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
        return array (  1322 => 531,  1312 => 524,  1303 => 518,  1277 => 495,  1269 => 490,  1261 => 485,  1139 => 365,  1130 => 362,  1126 => 360,  1117 => 356,  1111 => 353,  1108 => 352,  1106 => 351,  1100 => 348,  1095 => 345,  1093 => 344,  1088 => 342,  1080 => 337,  1076 => 335,  1070 => 334,  1066 => 332,  1049 => 326,  1042 => 324,  1035 => 323,  1033 => 322,  1030 => 321,  1013 => 315,  1006 => 313,  999 => 312,  997 => 311,  994 => 310,  977 => 304,  970 => 302,  963 => 301,  961 => 300,  958 => 299,  948 => 296,  940 => 295,  935 => 293,  928 => 292,  926 => 291,  923 => 290,  909 => 287,  903 => 286,  896 => 285,  894 => 284,  891 => 283,  877 => 280,  871 => 279,  864 => 278,  862 => 277,  859 => 276,  854 => 273,  845 => 271,  837 => 270,  833 => 268,  827 => 267,  823 => 266,  816 => 265,  814 => 264,  811 => 263,  806 => 260,  797 => 258,  789 => 257,  785 => 255,  779 => 254,  775 => 253,  768 => 252,  766 => 251,  763 => 250,  755 => 244,  742 => 239,  737 => 236,  733 => 235,  726 => 231,  718 => 230,  712 => 229,  705 => 228,  703 => 227,  700 => 226,  698 => 225,  695 => 224,  691 => 223,  684 => 219,  676 => 213,  670 => 212,  660 => 207,  655 => 204,  645 => 199,  640 => 196,  637 => 195,  633 => 194,  626 => 190,  621 => 188,  613 => 185,  609 => 184,  603 => 181,  599 => 180,  593 => 177,  589 => 176,  583 => 173,  579 => 172,  573 => 169,  569 => 168,  564 => 166,  555 => 160,  551 => 159,  545 => 156,  541 => 155,  536 => 153,  532 => 151,  525 => 149,  521 => 147,  504 => 141,  497 => 139,  490 => 138,  488 => 137,  485 => 136,  468 => 130,  461 => 128,  454 => 127,  452 => 126,  449 => 125,  432 => 119,  425 => 117,  418 => 116,  416 => 115,  413 => 114,  403 => 111,  395 => 110,  390 => 108,  383 => 107,  381 => 106,  378 => 105,  364 => 102,  358 => 101,  351 => 100,  349 => 99,  346 => 98,  332 => 95,  326 => 94,  319 => 93,  317 => 92,  314 => 91,  309 => 88,  300 => 86,  292 => 85,  288 => 83,  282 => 82,  278 => 81,  271 => 80,  269 => 79,  266 => 78,  261 => 75,  252 => 73,  244 => 72,  240 => 70,  234 => 69,  230 => 68,  223 => 67,  221 => 66,  218 => 65,  210 => 59,  197 => 54,  192 => 51,  188 => 50,  181 => 46,  173 => 45,  167 => 44,  160 => 43,  158 => 42,  155 => 41,  153 => 40,  150 => 39,  146 => 38,  141 => 36,  137 => 35,  131 => 32,  127 => 31,  121 => 28,  117 => 27,  111 => 24,  107 => 23,  98 => 21,  92 => 18,  88 => 17,  84 => 15,  78 => 12,  74 => 11,  70 => 9,  67 => 8,  63 => 7,  59 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/checkout/register.twig", "");
    }
}
