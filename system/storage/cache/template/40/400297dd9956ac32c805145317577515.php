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

/* journal3/template/account/address_form.twig */
class __TwigTemplate_0ce41b7d43d05d173d59c95203e0b741 extends Template
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
            yield ($context["text_address"] ?? null);
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
<div id=\"account-address\" class=\"container\">
  <div class=\"row\">";
        // line 14
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 17
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 19
            yield "    ";
        } else {
            // line 20
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 21
            yield "    ";
        }
        // line 22
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            yield "\">";
            yield ($context["text_address"] ?? null);
            yield "</h1>
      ";
        }
        // line 26
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
      <form action=\"";
        // line 28
        yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["save"] ?? null)) : (($context["action"] ?? null)));
        yield "\" method=\"post\" ";
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "enctype=\"multipart/form-data\"";
        }
        yield " class=\"address-form form-horizontal\" ";
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-oc-toggle=\"ajax\"";
        }
        yield ">
        <div id=\"address\">
          <div class=\"form-group ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressFirstNameField"], "method", false, false, false, 30) == "required")) {
            yield "required";
        }
        yield " address-firstname\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 31
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 33
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 34
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "              <div id=\"error-firstname\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_firstname"] ?? null);
            yield "</div>
              ";
        }
        // line 36
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 38
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressLastNameField"], "method", false, false, false, 38) == "required")) {
            yield "required";
        }
        yield " address-lastname\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 39
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 41
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 42
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "              <div id=\"error-lastname\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_lastname"] ?? null);
            yield "</div>
              ";
        }
        // line 44
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressCompanyField"], "method", false, false, false, 46) == "required")) {
            yield "required";
        }
        yield " address-company\">
            <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 47
        yield ($context["entry_company"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"company\" value=\"";
        // line 49
        yield ($context["company"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-company\" class=\"form-control\" />
              ";
        // line 50
        if ((($tmp = ($context["error_company"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "              <div id=\"error-company\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_company"] ?? null);
            yield "</div>
              ";
        }
        // line 53
        yield "            </div>
          </div>
          <div class=\"form-group ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressAddress1Field"], "method", false, false, false, 55) == "required")) {
            yield "required";
        }
        yield " address-address-1\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-1\">";
        // line 56
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"address_1\" value=\"";
        // line 58
        yield ($context["address_1"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-address-1\" class=\"form-control\" />
              ";
        // line 59
        if ((($tmp = ($context["error_address_1"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "              <div id=\"error-address-1\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_address_1"] ?? null);
            yield "</div>
              ";
        }
        // line 61
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressAddress2Field"], "method", false, false, false, 63) == "required")) {
            yield "required";
        }
        yield " address-address-2\">
            <label class=\"col-sm-2 control-label\" for=\"input-address-2\">";
        // line 64
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"address_2\" value=\"";
        // line 66
        yield ($context["address_2"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-address-2\" class=\"form-control\" />
              ";
        // line 67
        if ((($tmp = ($context["error_address_2"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "              <div id=\"error-address-2\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_address_2"] ?? null);
            yield "</div>
              ";
        }
        // line 70
        yield "            </div>
          </div>
          <div class=\"form-group ";
        // line 72
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressCityField"], "method", false, false, false, 72) == "required")) {
            yield "required";
        }
        yield " address-city\">
            <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 73
        yield ($context["entry_city"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"city\" value=\"";
        // line 75
        yield ($context["city"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-city\" class=\"form-control\" />
              ";
        // line 76
        if ((($tmp = ($context["error_city"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "              <div id=\"error-city\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_city"] ?? null);
            yield "</div>
              ";
        }
        // line 78
        yield " </div>
          </div>
          <div class=\"form-group required address-postcode\">
            <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 81
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"postcode\" value=\"";
        // line 83
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-postcode\" class=\"form-control\" />
              ";
        // line 84
        if ((($tmp = ($context["error_postcode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "              <div id=\"error-postcode\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_postcode"] ?? null);
            yield "</div>
              ";
        }
        // line 86
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 88
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressCountryField"], "method", false, false, false, 88) == "required")) {
            yield "required";
        }
        yield " address-country\">
            <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 89
        yield ($context["entry_country"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
                <option value=\"\">";
        // line 92
        yield ($context["text_select"] ?? null);
        yield "</option>

                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 95
            yield "                  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 95) == ($context["country_id"] ?? null))) {
                // line 96
                yield "
                <option value=\"";
                // line 97
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 97);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 97);
                yield "</option>

                  ";
            } else {
                // line 100
                yield "
                <option value=\"";
                // line 101
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 101);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 101);
                yield "</option>

                  ";
            }
            // line 104
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "
              </select>
              ";
        // line 107
        if ((($tmp = ($context["error_country"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "              <div id=\"error-country\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_country"] ?? null);
            yield "</div>
              ";
        }
        // line 109
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 111
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAddressRegionField"], "method", false, false, false, 111) == "required")) {
            yield "required";
        }
        yield " address-zone\">
            <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 112
        yield ($context["entry_zone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
              </select>
              ";
        // line 116
        if ((($tmp = ($context["error_zone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 117
            yield "              <div id=\"error-zone\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_zone"] ?? null);
            yield "</div>
              ";
        }
        // line 118
        yield " </div>
          </div>
          ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 121
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 121) == "select")) {
                // line 122
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 122)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 122);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 123);
                yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field";
                // line 125
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 125);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                yield "]\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                yield "\" class=\"form-control\">
                <option value=\"\">";
                // line 126
                yield ($context["text_select"] ?? null);
                yield "</option>



                      ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 130));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 131
                    yield "                        ";
                    if (((($_v0 = ($context["address_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 131) == (($_v1 = ($context["address_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131)] ?? null) : null)))) {
                        // line 132
                        yield "
                <option value=\"";
                        // line 133
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 133);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 133);
                        yield "</option>



                        ";
                    } else {
                        // line 138
                        yield "


                <option value=\"";
                        // line 141
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 141);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 141);
                        yield "</option>



                        ";
                    }
                    // line 146
                    yield "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                yield "


              </select>
              ";
                // line 151
                if (((($_v2 = ($context["error_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 152
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v3 = ($context["error_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 153
                yield "</div>
          </div>
          ";
            }
            // line 156
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 156) == "radio")) {
                // line 157
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 157);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 158
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 158);
                yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-custom-field-";
                // line 160
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                yield "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 160));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 161
                    yield "                <div class=\"radio\"> ";
                    if (((($_v4 = ($context["address_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 161) == (($_v5 = ($context["address_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 161)] ?? null) : null)))) {
                        // line 162
                        yield "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 163
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 163);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 163);
                        yield "\" checked=\"checked\" />
                    ";
                        // line 164
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 164);
                        yield "</label>
                  ";
                    } else {
                        // line 166
                        yield "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 167
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 167);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 167);
                        yield "\" />
                    ";
                        // line 168
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 168);
                        yield "</label>
                  ";
                    }
                    // line 169
                    yield " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                yield " </div>
              ";
                // line 171
                if (((($_v6 = ($context["error_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 171)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 172
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v7 = ($context["error_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 173
                yield " </div>
          </div>
          ";
            }
            // line 176
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 176) == "checkbox")) {
                // line 177
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 177);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 178
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 178);
                yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-custom-field-";
                // line 180
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                yield "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 180));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 181
                    yield "                <div class=\"checkbox\"> ";
                    if (((($_v8 = ($context["address_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 181), (($_v9 = ($context["address_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181)] ?? null) : null)))) {
                        // line 182
                        yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 183
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 183);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 183);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 183);
                        yield "\" checked=\"checked\" />
                    ";
                        // line 184
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 184);
                        yield "</label>
                  ";
                    } else {
                        // line 186
                        yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 187
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 187);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 187);
                        yield "\" />
                    ";
                        // line 188
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 188);
                        yield "</label>
                  ";
                    }
                    // line 189
                    yield " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                yield " </div>
              ";
                // line 191
                if (((($_v10 = ($context["error_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 191)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 192
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v11 = ($context["error_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 193
                yield " </div>
          </div>
          ";
            }
            // line 196
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 196) == "text")) {
                // line 197
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 197);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 198
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field";
                // line 200
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 200);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                yield "]\" value=\"";
                if ((($tmp = (($_v12 = ($context["address_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v13 = ($context["address_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 200);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 200);
                yield "\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                yield "\" class=\"form-control\" />
              ";
                // line 201
                if (((($_v14 = ($context["error_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 201)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 202
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v15 = ($context["error_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 203
                yield " </div>
          </div>
          ";
            }
            // line 206
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 206) == "textarea")) {
                // line 207
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 207)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 207);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 208
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 208);
                yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field";
                // line 210
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 210);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                yield "\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                yield "\" class=\"form-control\">";
                if ((($tmp = (($_v16 = ($context["address_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v17 = ($context["address_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 210);
                }
                yield "</textarea>
              ";
                // line 211
                if (((($_v18 = ($context["error_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 211)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 212
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v19 = ($context["error_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 213
                yield " </div>
          </div>
          ";
            }
            // line 216
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 216) == "file")) {
                // line 217
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 217)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 217);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 218
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 218);
                yield "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 220
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 220);
                yield "\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
              <input type=\"hidden\" name=\"custom_field";
                // line 221
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 221);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221);
                yield "]\" value=\"";
                if ((($tmp = (($_v20 = ($context["address_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "  ";
                    yield (($_v21 = ($context["address_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 221)] ?? null) : null);
                    yield " ";
                }
                yield "\" />
              ";
                // line 222
                if (((($_v22 = ($context["error_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 222)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 223
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v23 = ($context["error_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 223)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 224
                yield " </div>
          </div>
          ";
            }
            // line 227
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 227) == "date")) {
                // line 228
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 228)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 228);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 229
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 229);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 229);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 231
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "date";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 232
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 232);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                yield "]\" value=\"";
                if ((($tmp = (($_v24 = ($context["address_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v25 = ($context["address_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 232);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 232);
                yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 232);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "date";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 236
                if (((($_v26 = ($context["error_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 236)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 237
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v27 = ($context["error_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 237)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 238
                yield " </div>
          </div>
          ";
            }
            // line 241
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 241) == "time")) {
                // line 242
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 242);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 243
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 243);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 243);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 245
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "time";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 246
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 246);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                yield "]\" value=\"";
                if ((($tmp = (($_v28 = ($context["address_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v29 = ($context["address_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 246);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 246);
                yield "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 246);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "time";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 250
                if (((($_v30 = ($context["error_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 250)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 251
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v31 = ($context["error_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 251)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 252
                yield " </div>
          </div>
          ";
            }
            // line 255
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 255) == "datetime")) {
                // line 256
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 256)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 256);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 257
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 257);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 257);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 259
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "datetime";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 260
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 260);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                yield "]\" value=\"";
                if ((($tmp = (($_v32 = ($context["address_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v33 = ($context["address_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 260);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 260);
                yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 260);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "datetime";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 264
                if (((($_v34 = ($context["error_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 264)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 265
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v35 = ($context["error_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 265)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 266
                yield " </div>
          </div>
          ";
            }
            // line 269
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        yield "          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 271
        yield ($context["entry_default"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\"> ";
        // line 272
        if ((($tmp = ($context["default"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 273
            yield "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" checked=\"checked\" />
                ";
            // line 275
            yield ($context["text_yes"] ?? null);
            yield "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" />
                ";
            // line 278
            yield ($context["text_no"] ?? null);
            yield "</label>
              ";
        } else {
            // line 280
            yield "              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"1\" />
                ";
            // line 282
            yield ($context["text_yes"] ?? null);
            yield "</label>
              <label class=\"radio-inline\">
                <input type=\"radio\" name=\"default\" value=\"0\" checked=\"checked\" />
                ";
            // line 285
            yield ($context["text_no"] ?? null);
            yield "</label>
              ";
        }
        // line 286
        yield " </div>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 290
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>";
        // line 292
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
          </div>
        </div>
      </form>
      ";
        // line 296
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 297
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 299
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 300
            yield "<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length-2) {
\t\t\$('.form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}
\t
\tif (\$(this).attr('data-sort') > \$('.form-group').length-2) {
\t\t\$('.form-group:last').after(this);
\t}
\t
\tif (\$(this).attr('data-sort') == \$('.form-group').length-2) {
\t\t\$('.form-group:last').after(this);
\t}
\t
\tif (\$(this).attr('data-sort') < -\$('.form-group').length-2) {
\t\t\$('.form-group:first').before(this);
\t}
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
\tvar element = this;
\t
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');
\t
\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t
\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}
\t
\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
\t\t
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
\t\t\t\t\t
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t\t
\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
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
            // line 375
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
            // line 380
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
            // line 386
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: false
});
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=account/account/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}
\t\t\t
\t\t\thtml = '<option value=\"\">";
            // line 408
            yield ($context["text_select"] ?? null);
            yield "</option>';
\t\t\t
\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';
\t\t\t\t\t
\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
            // line 414
            yield ($context["zone_id"] ?? null);
            yield "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
            // line 421
            yield ($context["text_none"] ?? null);
            yield "</option>';
\t\t\t}
\t\t\t
\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'country_id\\']').trigger('change');
//--></script>
";
        } else {
            // line 435
            yield "<script type=\"text/javascript\"><!--
\$('#input-country').on('change', function () {
    var element = this;

    \$.ajax({
        url: 'index.php?route=localisation/country&country_id=' + this.value + '&language=";
            // line 440
            yield ($context["language"] ?? null);
            yield "',
        dataType: 'json',
        beforeSend: function () {
            \$(element).prop('disabled', true);
        },
        complete: function () {
            \$(element).prop('disabled', false);
        },
        success: function (json) {
            if (json['postcode_required'] == '1') {
                \$('#input-postcode').parent().parent().addClass('required');
            } else {
                \$('#input-postcode').parent().parent().removeClass('required');
            }

            html = '<option value=\"\">";
            // line 455
            yield ($context["text_select"] ?? null);
            yield "</option>';

            if (json['zone'] && json['zone'] != '') {
                for (i = 0; i < json['zone'].length; i++) {
                    html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

                    if (json['zone'][i]['zone_id'] == '";
            // line 461
            yield ($context["zone_id"] ?? null);
            yield "') {
                        html += ' selected';
                    }

                    html += '>' + json['zone'][i]['name'] + '</option>';
                }
            } else {
                html += '<option value=\"0\" selected>   ";
            // line 468
            yield ($context["text_none"] ?? null);
            yield "</option>';
            }

            \$('#input-zone').html(html);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-country').trigger('change');
//--></script>
";
        }
        // line 482
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
        return "journal3/template/account/address_form.twig";
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
        return array (  1378 => 482,  1361 => 468,  1351 => 461,  1342 => 455,  1324 => 440,  1317 => 435,  1300 => 421,  1290 => 414,  1281 => 408,  1256 => 386,  1247 => 380,  1239 => 375,  1162 => 300,  1160 => 299,  1155 => 297,  1151 => 296,  1144 => 292,  1137 => 290,  1131 => 286,  1126 => 285,  1120 => 282,  1116 => 280,  1111 => 278,  1105 => 275,  1101 => 273,  1099 => 272,  1095 => 271,  1092 => 270,  1086 => 269,  1081 => 266,  1073 => 265,  1071 => 264,  1044 => 260,  1038 => 259,  1031 => 257,  1022 => 256,  1019 => 255,  1014 => 252,  1006 => 251,  1004 => 250,  977 => 246,  971 => 245,  964 => 243,  955 => 242,  952 => 241,  947 => 238,  939 => 237,  937 => 236,  910 => 232,  904 => 231,  897 => 229,  888 => 228,  885 => 227,  880 => 224,  872 => 223,  870 => 222,  854 => 221,  846 => 220,  841 => 218,  832 => 217,  829 => 216,  824 => 213,  816 => 212,  814 => 211,  794 => 210,  787 => 208,  778 => 207,  775 => 206,  770 => 203,  762 => 202,  760 => 201,  740 => 200,  733 => 198,  724 => 197,  721 => 196,  716 => 193,  708 => 192,  706 => 191,  703 => 190,  696 => 189,  691 => 188,  679 => 187,  676 => 186,  671 => 184,  659 => 183,  656 => 182,  653 => 181,  647 => 180,  642 => 178,  633 => 177,  630 => 176,  625 => 173,  617 => 172,  615 => 171,  612 => 170,  605 => 169,  600 => 168,  588 => 167,  585 => 166,  580 => 164,  568 => 163,  565 => 162,  562 => 161,  556 => 160,  551 => 158,  542 => 157,  539 => 156,  534 => 153,  526 => 152,  524 => 151,  518 => 147,  512 => 146,  502 => 141,  497 => 138,  487 => 133,  484 => 132,  481 => 131,  477 => 130,  470 => 126,  458 => 125,  451 => 123,  442 => 122,  439 => 121,  435 => 120,  431 => 118,  425 => 117,  423 => 116,  416 => 112,  410 => 111,  406 => 109,  400 => 108,  398 => 107,  394 => 105,  388 => 104,  380 => 101,  377 => 100,  369 => 97,  366 => 96,  363 => 95,  359 => 94,  354 => 92,  348 => 89,  342 => 88,  338 => 86,  332 => 85,  330 => 84,  324 => 83,  319 => 81,  314 => 78,  308 => 77,  306 => 76,  300 => 75,  295 => 73,  289 => 72,  285 => 70,  279 => 68,  277 => 67,  271 => 66,  266 => 64,  260 => 63,  256 => 61,  250 => 60,  248 => 59,  242 => 58,  237 => 56,  231 => 55,  227 => 53,  221 => 51,  219 => 50,  213 => 49,  208 => 47,  202 => 46,  198 => 44,  192 => 43,  190 => 42,  184 => 41,  179 => 39,  173 => 38,  169 => 36,  163 => 35,  161 => 34,  155 => 33,  150 => 31,  144 => 30,  131 => 28,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/address_form.twig", "");
    }
}
