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

/* journal3/template/account/register.twig */
class __TwigTemplate_e5da1ab5396da7362951d435bbb91af4 extends Template
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
<div id=\"account-register\" class=\"container\">
  ";
        // line 14
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
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
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield " register-page\">
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
      ";
        // line 30
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "      <p>";
            yield ($context["text_account_already"] ?? null);
            yield "</p>
      ";
        }
        // line 33
        yield "      <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>
      <form action=\"";
        // line 34
        yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["register"] ?? null)) : (($context["action"] ?? null)));
        yield "\" method=\"post\" ";
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "enctype=\"multipart/form-data\"";
        }
        yield " class=\"register-form form-horizontal\" ";
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-oc-toggle=\"ajax\"";
        }
        yield ">
        <div id=\"account\">
          <legend>";
        // line 36
        yield ($context["text_your_details"] ?? null);
        yield "</legend>
          <h2 class=\"sr-only\">";
        // line 37
        yield ($context["text_your_details"] ?? null);
        yield "</h2>
          <div class=\"form-group required account-customer-group\" style=\"display: ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) > 1)) {
            yield " block ";
        } else {
            yield " none ";
        }
        yield ";\">
            <label class=\"col-sm-2 control-label\">";
        // line 39
        yield ($context["entry_customer_group"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 41
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 41) == ($context["customer_group_id"] ?? null))) {
                // line 42
                yield "              <div class=\"radio\">
                <label for=\"input-customer-group-";
                // line 43
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 43);
                yield "\">
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 44
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44);
                yield "\" checked=\"checked\" id=\"input-customer-group-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 44);
                yield "\" />
                  ";
                // line 45
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 45);
                yield "</label>
              </div>
              ";
            } else {
                // line 48
                yield "              <div class=\"radio\">
                <label for=\"input-customer-group-";
                // line 49
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 49);
                yield "\">
                  <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 50
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
                yield "\" id=\"input-customer-group-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 50);
                yield "\" />
                  ";
                // line 51
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 51);
                yield "</label>
              </div>
              ";
            }
            // line 54
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</div>
          </div>
          <div class=\"form-group ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountFirstNameField"], "method", false, false, false, 56) == "required")) {
            yield "required";
        }
        yield " account-firstname\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 57
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 59
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 60
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "              <div id=\"error-firstname\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_firstname"] ?? null);
            yield "</div>
              ";
        }
        // line 62
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountLastNameField"], "method", false, false, false, 64) == "required")) {
            yield "required";
        }
        yield " account-lastname\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 65
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 67
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 68
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "              <div id=\"error-lastname\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_lastname"] ?? null);
            yield "</div>
              ";
        }
        // line 70
        yield " </div>
          </div>
          <div class=\"form-group required account-email\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 73
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 75
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 76
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 77
            yield "              <div id=\"error-email\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
              ";
        }
        // line 78
        yield " </div>
          </div>
          <div class=\"form-group ";
        // line 80
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountTelephoneField"], "method", false, false, false, 80) == "required")) {
            yield "required";
        }
        yield " account-telephone\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 81
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 83
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 84
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "              <div id=\"error-telephone\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
              ";
        }
        // line 86
        yield " </div>
          </div>
          ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 89
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 89) == "select")) {
                // line 90
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 90);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 91
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 91);
                yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field";
                // line 93
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 93);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                yield "]\" id=\"input-custom-field";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                yield "\" class=\"form-control\">
                <option value=\"\">";
                // line 94
                yield ($context["text_select"] ?? null);
                yield "</option>
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 96
                    yield "                ";
                    if (((($_v0 = (($_v1 = ($context["register_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 96)] ?? null) : null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96) == (($_v2 = ($context["register_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 96)] ?? null) : null)))) {
                        // line 97
                        yield "                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 97);
                        yield "</option>
                ";
                    } else {
                        // line 99
                        yield "                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 99);
                        yield "</option>
                ";
                    }
                    // line 101
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                yield "              </select>
              ";
                // line 103
                if (((($_v3 = ($context["error_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 104
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v4 = ($context["error_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 105
                yield "</div>
          </div>
          ";
            }
            // line 108
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 108) == "radio")) {
                // line 109
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 109);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 110
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 110);
                yield "</label>
            <div class=\"col-sm-10\">
              <div data-id=\"input-custom-field";
                // line 112
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 112);
                yield "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 113
                    yield "                <div class=\"radio\">";
                    if (((($_v5 = ($context["register_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 113) == (($_v6 = ($context["register_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113)] ?? null) : null)))) {
                        // line 114
                        yield "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 115
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 115);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 115);
                        yield "\" checked=\"checked\" />
                    ";
                        // line 116
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 116);
                        yield "</label>
                  ";
                    } else {
                        // line 118
                        yield "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 119
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 119);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 119);
                        yield "\" />
                    ";
                        // line 120
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 120);
                        yield "</label>
                  ";
                    }
                    // line 121
                    yield " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 122
                yield "</div>
              ";
                // line 123
                if (((($_v7 = ($context["error_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 124
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v8 = ($context["error_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 125
                yield "</div>
          </div>
          ";
            }
            // line 128
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "checkbox")) {
                // line 129
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 129);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                yield "</label>
            <div class=\"col-sm-10\">
              <div data-id=\"input-custom-field";
                // line 132
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                yield "\"> ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 132));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 133
                    yield "                <div class=\"checkbox\">";
                    if (((($_v9 = ($context["register_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 133), (($_v10 = ($context["register_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133)] ?? null) : null)))) {
                        // line 134
                        yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 135
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 135);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 135);
                        yield "\" checked=\"checked\" />
                    ";
                        // line 136
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 136);
                        yield "</label>
                  ";
                    } else {
                        // line 138
                        yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 139
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 139);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 139);
                        yield "\" />
                    ";
                        // line 140
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 140);
                        yield "</label>
                  ";
                    }
                    // line 141
                    yield " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                yield " </div>
              ";
                // line 143
                if (((($_v11 = ($context["error_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 144
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v12 = ($context["error_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 145
                yield " </div>
          </div>
          ";
            }
            // line 148
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 148) == "text")) {
                // line 149
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 149);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 150
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 150);
                yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field";
                // line 152
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 152);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                yield "]\" value=\"";
                if ((($tmp = (($_v13 = ($context["register_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v14 = ($context["register_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 152);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                yield "\" id=\"input-custom-field";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                yield "\" class=\"form-control\" />
              ";
                // line 153
                if (((($_v15 = ($context["error_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 154
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v16 = ($context["error_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 155
                yield " </div>
          </div>
          ";
            }
            // line 158
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 158) == "textarea")) {
                // line 159
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 159);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 160
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 160);
                yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field";
                // line 162
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 162);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 162);
                yield "\" id=\"input-custom-field";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                yield "\" class=\"form-control\">";
                if ((($tmp = (($_v17 = ($context["register_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v18 = ($context["register_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 162);
                }
                yield "</textarea>
              ";
                // line 163
                if (((($_v19 = ($context["error_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 164
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v20 = ($context["error_custom_field"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 165
                yield " </div>
          </div>
          ";
            }
            // line 168
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 168) == "file")) {
                // line 169
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 169);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 170);
                yield "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 172
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                yield "\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
              <input type=\"hidden\" name=\"custom_field";
                // line 173
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 173);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173);
                yield "]\" value=\"";
                if ((($tmp = (($_v21 = ($context["register_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "  ";
                    yield (($_v22 = ($context["register_custom_field"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 173)] ?? null) : null);
                    yield " ";
                }
                yield "\" />
              ";
                // line 174
                if (((($_v23 = ($context["error_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 174)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 175
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v24 = ($context["error_custom_field"] ?? null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 175)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 176
                yield "</div>
          </div>
          ";
            }
            // line 179
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 179) == "date")) {
                // line 180
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 180);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 181
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 181);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 181);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 183
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "date";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 184
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 184);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                yield "]\" value=\"";
                if ((($tmp = (($_v25 = ($context["register_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v26 = ($context["register_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 184);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 184);
                yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "date";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 188
                if (((($_v27 = ($context["error_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 188)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 189
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v28 = ($context["error_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 190
                yield " </div>
          </div>
          ";
            }
            // line 193
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 193) == "time")) {
                // line 194
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 194);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 194);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 195
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 197
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "time";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 198
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 198);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                yield "]\" value=\"";
                if ((($tmp = (($_v29 = ($context["register_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v30 = ($context["register_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 198);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 198);
                yield "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 198);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "time";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 202
                if (((($_v31 = ($context["error_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 202)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 203
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v32 = ($context["error_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 203)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 204
                yield " </div>
          </div>
          ";
            }
            // line 207
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 207) == "datetime")) {
                // line 208
                yield "          <div id=\"custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 208);
                yield "\" class=\"form-group custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 208);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 209
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 209);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 209);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 211
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "datetime";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 212
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 212);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                yield "]\" value=\"";
                if ((($tmp = (($_v33 = ($context["register_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v34 = ($context["register_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 212);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 212);
                yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "-";
                }
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 212);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "datetime";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 216
                if (((($_v35 = ($context["error_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 216)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 217
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v36 = ($context["error_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 217)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 218
                yield " </div>
          </div>
          ";
            }
            // line 221
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        yield "        </div>
        <fieldset>
          <legend>";
        // line 224
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
          <h2 class=\"sr-only\">";
        // line 225
        yield ($context["text_your_password"] ?? null);
        yield "</h2>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label account-pass\" for=\"input-password\">";
        // line 227
        yield ($context["entry_password"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 229
        yield ($context["password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" />
              ";
        // line 230
        if ((($tmp = ($context["error_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 231
            yield "              <div id=\"error-password\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_password"] ?? null);
            yield "</div>
              ";
        }
        // line 232
        yield " </div>
          </div>
          ";
        // line 234
        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 235
            yield "          <div class=\"form-group required account-pass2\">
            <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
            // line 236
            yield ($context["entry_confirm"] ?? null);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
            // line 238
            yield ($context["confirm"] ?? null);
            yield "\" placeholder=\"";
            yield ($context["entry_confirm"] ?? null);
            yield "\" id=\"input-confirm\" class=\"form-control\" />
              ";
            // line 239
            if ((($tmp = ($context["error_confirm"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 240
                yield "              <div id=\"error-confirm\" class=\"text-danger invalid-feedback\">";
                yield ($context["error_confirm"] ?? null);
                yield "</div>
              ";
            }
            // line 241
            yield " </div>
          </div>
          ";
        }
        // line 244
        yield "        </fieldset>
        <fieldset>
          <legend>";
        // line 246
        yield ($context["text_newsletter"] ?? null);
        yield "</legend>
          <h2 class=\"sr-only\">";
        // line 247
        yield ($context["text_newsletter"] ?? null);
        yield "</h2>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 249
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\"> ";
        // line 250
        if ((($tmp = ($context["newsletter"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "              <label class=\"radio-inline\" for=\"input-newsletter-yes\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\" id=\"input-newsletter-yes\" />
                ";
            // line 253
            yield ($context["text_yes"] ?? null);
            yield "</label>
              <label class=\"radio-inline\" for=\"input-newsletter-no\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" id=\"input-newsletter-no\" />
                ";
            // line 256
            yield ($context["text_no"] ?? null);
            yield "</label>
              ";
        } else {
            // line 258
            yield "              <label class=\"radio-inline\" for=\"input-newsletter-yes\">
                <input type=\"radio\" name=\"newsletter\" value=\"1\" id=\"input-newsletter-yes\" />
                ";
            // line 260
            yield ($context["text_yes"] ?? null);
            yield "</label>
              <label class=\"radio-inline\" for=\"input-newsletter-no\">
                <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\" id=\"input-newsletter-no\"/>
                ";
            // line 263
            yield ($context["text_no"] ?? null);
            yield "</label>
              ";
        }
        // line 264
        yield " </div>
          </div>
        </fieldset>
        ";
        // line 267
        yield ($context["captcha"] ?? null);
        yield "
        ";
        // line 268
        if ((($tmp = ($context["text_agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 269
            yield "        <div class=\"buttons\">
          <div class=\"pull-right\"><label for=\"input-agree\">";
            // line 270
            yield ($context["text_agree"] ?? null);
            yield "</label>
            ";
            // line 271
            if ((($tmp = ($context["agree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 272
                yield "            <input id=\"input-agree\" type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
            ";
            } else {
                // line 274
                yield "            <input id=\"input-agree\" type=\"checkbox\" name=\"agree\" value=\"1\" />
            ";
            }
            // line 276
            yield "            &nbsp;
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
            // line 277
            yield ($context["button_continue"] ?? null);
            yield "</span>\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
          </div>
        </div>
        ";
        } else {
            // line 281
            yield "        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\" data-loading-text=\"<span>";
            // line 283
            yield ($context["button_continue"] ?? null);
            yield "</span>\"><span>";
            yield ($context["button_continue"] ?? null);
            yield "</span></button>
          </div>
        </div>
        ";
        }
        // line 287
        yield "      </form>
      ";
        // line 288
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 289
        yield ($context["column_right"] ?? null);
        yield "</div>
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

\$('input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
    ";
        // line 313
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 314
            yield "\t\turl: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
    ";
        } else {
            // line 316
            yield "    url: 'index.php?route=account/custom_field&customer_group_id=' + this.value,
    ";
        }
        // line 318
        yield "\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('.custom-field').hide();
\t\t\t\$('.custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script>
<script type=\"text/javascript\"><!--
\$('button[id^=\\'button-custom-field\\']').on('click', function() {
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
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

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
";
        // line 394
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 395
            yield "<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
            // line 397
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
            // line 402
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
            // line 407
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
";
        }
        // line 413
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
        return "journal3/template/account/register.twig";
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
        return array (  1331 => 413,  1322 => 407,  1314 => 402,  1306 => 397,  1302 => 395,  1300 => 394,  1222 => 318,  1218 => 316,  1214 => 314,  1212 => 313,  1185 => 289,  1181 => 288,  1178 => 287,  1169 => 283,  1165 => 281,  1156 => 277,  1153 => 276,  1149 => 274,  1145 => 272,  1143 => 271,  1139 => 270,  1136 => 269,  1134 => 268,  1130 => 267,  1125 => 264,  1120 => 263,  1114 => 260,  1110 => 258,  1105 => 256,  1099 => 253,  1095 => 251,  1093 => 250,  1089 => 249,  1084 => 247,  1080 => 246,  1076 => 244,  1071 => 241,  1065 => 240,  1063 => 239,  1057 => 238,  1052 => 236,  1049 => 235,  1047 => 234,  1043 => 232,  1037 => 231,  1035 => 230,  1029 => 229,  1024 => 227,  1019 => 225,  1015 => 224,  1011 => 222,  1005 => 221,  1000 => 218,  992 => 217,  990 => 216,  960 => 212,  954 => 211,  944 => 209,  937 => 208,  934 => 207,  929 => 204,  921 => 203,  919 => 202,  889 => 198,  883 => 197,  873 => 195,  866 => 194,  863 => 193,  858 => 190,  850 => 189,  848 => 188,  818 => 184,  812 => 183,  802 => 181,  795 => 180,  792 => 179,  787 => 176,  779 => 175,  777 => 174,  761 => 173,  753 => 172,  748 => 170,  741 => 169,  738 => 168,  733 => 165,  725 => 164,  723 => 163,  700 => 162,  690 => 160,  683 => 159,  680 => 158,  675 => 155,  667 => 154,  665 => 153,  642 => 152,  632 => 150,  625 => 149,  622 => 148,  617 => 145,  609 => 144,  607 => 143,  604 => 142,  597 => 141,  592 => 140,  580 => 139,  577 => 138,  572 => 136,  560 => 135,  557 => 134,  554 => 133,  545 => 132,  540 => 130,  533 => 129,  530 => 128,  525 => 125,  517 => 124,  515 => 123,  512 => 122,  505 => 121,  500 => 120,  488 => 119,  485 => 118,  480 => 116,  468 => 115,  465 => 114,  462 => 113,  453 => 112,  448 => 110,  441 => 109,  438 => 108,  433 => 105,  425 => 104,  423 => 103,  420 => 102,  414 => 101,  406 => 99,  398 => 97,  395 => 96,  391 => 95,  387 => 94,  372 => 93,  362 => 91,  355 => 90,  352 => 89,  348 => 88,  344 => 86,  338 => 85,  336 => 84,  330 => 83,  325 => 81,  319 => 80,  315 => 78,  309 => 77,  307 => 76,  301 => 75,  296 => 73,  291 => 70,  285 => 69,  283 => 68,  277 => 67,  272 => 65,  266 => 64,  262 => 62,  256 => 61,  254 => 60,  248 => 59,  243 => 57,  237 => 56,  228 => 54,  222 => 51,  216 => 50,  212 => 49,  209 => 48,  203 => 45,  197 => 44,  193 => 43,  190 => 42,  187 => 41,  183 => 40,  179 => 39,  171 => 38,  167 => 37,  163 => 36,  150 => 34,  147 => 33,  141 => 31,  139 => 30,  134 => 29,  126 => 27,  124 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  99 => 18,  94 => 17,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/register.twig", "");
    }
}
