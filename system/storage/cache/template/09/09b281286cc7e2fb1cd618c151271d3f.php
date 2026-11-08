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

/* journal3/template/account/edit.twig */
class __TwigTemplate_a27a6a106a5d3e0be202b26cdca1fa31 extends Template
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
<div id=\"account-edit\" class=\"container\">
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
      <form action=\"";
        // line 30
        yield (((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["save"] ?? null)) : (($context["action"] ?? null)));
        yield "\" method=\"post\" ";
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "enctype=\"multipart/form-data\"";
        }
        yield " class=\"account-form form-horizontal\" ";
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "data-oc-toggle=\"ajax\"";
        }
        yield ">
        <div id=\"account\">
          <legend>";
        // line 32
        yield ($context["text_your_details"] ?? null);
        yield "</legend>
          <div class=\"form-group ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountFirstNameField"], "method", false, false, false, 33) == "required")) {
            yield "required";
        }
        yield " account-firstname\">
            <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 34
        yield ($context["entry_firstname"] ?? null);
        yield " </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 36
        yield ($context["firstname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" />
              ";
        // line 37
        if ((($tmp = ($context["error_firstname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "              <div id=\"error-firstname\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_firstname"] ?? null);
            yield "</div>
              ";
        }
        // line 40
        yield "            </div>
          </div>
          <div class=\"form-group ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountLastNameField"], "method", false, false, false, 42) == "required")) {
            yield "required";
        }
        yield " account-lastname\">
            <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 43
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 45
        yield ($context["lastname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" />
              ";
        // line 46
        if ((($tmp = ($context["error_lastname"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "              <div id=\"error-firstname\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_lastname"] ?? null);
            yield "</div>
              ";
        }
        // line 49
        yield "            </div>
          </div>
          <div class=\"form-group required account-email\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 52
        yield ($context["entry_email"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"";
        // line 54
        yield ($context["email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
              ";
        // line 55
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 56
            yield "              <div id=\"error-email\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
              ";
        }
        // line 58
        yield "            </div>
          </div>
          <div class=\"form-group ";
        // line 60
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["accountAccountTelephoneField"], "method", false, false, false, 60) == "required")) {
            yield "required";
        }
        yield " account-telephone\">
            <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 61
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"tel\" name=\"telephone\" value=\"";
        // line 63
        yield ($context["telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
              ";
        // line 64
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 65
            yield "              <div id=\"error-telephone\" class=\"text-danger invalid-feedback\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
              ";
        }
        // line 67
        yield "            </div>
          </div>
          ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 70
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 70) == "select")) {
                // line 71
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 71);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 72
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 72);
                yield "</label>
            <div class=\"col-sm-10\">
              <select name=\"custom_field";
                // line 74
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 74);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                yield "]\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 74);
                yield "\" class=\"form-control\">
                <option value=\"\">";
                // line 75
                yield ($context["text_select"] ?? null);
                yield "</option>
                ";
                // line 76
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 76));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 77
                    yield "                ";
                    if (((($_v0 = ($context["account_custom_field"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 77) == (($_v1 = ($context["account_custom_field"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77)] ?? null) : null)))) {
                        // line 78
                        yield "                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 78);
                        yield "\" selected=\"selected\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 78);
                        yield "</option>
                ";
                    } else {
                        // line 80
                        yield "                <option value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 80);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 80);
                        yield "</option>
                ";
                    }
                    // line 82
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                yield "              </select>
              ";
                // line 84
                if (((($_v2 = ($context["error_custom_field"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 85
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v3 = ($context["error_custom_field"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 87
                yield "            </div>
          </div>
          ";
            }
            // line 90
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 90) == "radio")) {
                // line 91
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 91);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 92);
                yield "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-custom-field-";
                // line 94
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                yield "\">
                ";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 96
                    yield "                <div class=\"radio\">
                  ";
                    // line 97
                    if (((($_v4 = ($context["account_custom_field"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null) && (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 97) == (($_v5 = ($context["account_custom_field"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97)] ?? null) : null)))) {
                        // line 98
                        yield "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 99
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 99);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 99);
                        yield "\" checked=\"checked\" />
                    ";
                        // line 100
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 100);
                        yield "</label>
                  ";
                    } else {
                        // line 102
                        yield "                  <label>
                    <input type=\"radio\" name=\"custom_field";
                        // line 103
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 103);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                        yield "]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                        yield "\" />
                    ";
                        // line 104
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                        yield "</label>
                  ";
                    }
                    // line 106
                    yield "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                yield "              </div>
              ";
                // line 109
                if (((($_v6 = ($context["error_custom_field"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 110
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v7 = ($context["error_custom_field"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 112
                yield "            </div>
          </div>
          ";
            }
            // line 115
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 115) == "checkbox")) {
                // line 116
                yield "          <div class=\"form-group";
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
              <div id=\"input-custom-field-";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                yield "\">
                ";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 121
                    yield "                <div class=\"checkbox\">
                  ";
                    // line 122
                    if (((($_v8 = ($context["account_custom_field"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 122), (($_v9 = ($context["account_custom_field"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122)] ?? null) : null)))) {
                        // line 123
                        yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 124
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 124);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 124);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 124);
                        yield "\" checked=\"checked\" />
                    ";
                        // line 125
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 125);
                        yield "</label>
                  ";
                    } else {
                        // line 127
                        yield "                  <label>
                    <input type=\"checkbox\" name=\"custom_field";
                        // line 128
                        if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "[";
                            yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 128);
                            yield "]";
                        }
                        yield "[";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                        yield "][]\" value=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 128);
                        yield "\" />
                    ";
                        // line 129
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 129);
                        yield "</label>
                  ";
                    }
                    // line 131
                    yield "                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                yield "              </div>
              ";
                // line 134
                if (((($_v10 = ($context["error_custom_field"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 135
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v11 = ($context["error_custom_field"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 137
                yield "            </div>
          </div>
          ";
            }
            // line 140
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 140) == "text")) {
                // line 141
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 141);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 142
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"custom_field";
                // line 144
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 144);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "]\" value=\"";
                if ((($tmp = (($_v12 = ($context["account_custom_field"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v13 = ($context["account_custom_field"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 144);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                yield "\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "\" class=\"form-control\" />
              ";
                // line 145
                if (((($_v14 = ($context["error_custom_field"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 146
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v15 = ($context["error_custom_field"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 148
                yield "            </div>
          </div>
          ";
            }
            // line 151
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 151) == "textarea")) {
                // line 152
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 152);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 153
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"custom_field";
                // line 155
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 155);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                yield "\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "\" class=\"form-control\">";
                if ((($tmp = (($_v16 = ($context["account_custom_field"] ?? null)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v17 = ($context["account_custom_field"] ?? null)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 155);
                }
                yield "</textarea>
              ";
                // line 156
                if (((($_v18 = ($context["error_custom_field"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 157
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v19 = ($context["error_custom_field"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 159
                yield "            </div>
          </div>
          ";
            }
            // line 162
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "file")) {
                // line 163
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 163);
                yield "\">
            <label class=\"col-sm-2 control-label\">";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                yield "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-custom-field";
                // line 166
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "\" data-loading-text=\"";
                yield ($context["text_loading"] ?? null);
                yield "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
              <input type=\"hidden\" name=\"custom_field";
                // line 167
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 167);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                yield "]\" value=\"";
                if ((($tmp = (($_v20 = (($_v21 = ($context["account_custom_field"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20["code"] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v22 = (($_v23 = ($context["account_custom_field"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167)] ?? null) : null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22["code"] ?? null) : null);
                    yield " ";
                }
                yield "\" />
              <span style=\"display: flex; align-items: center; margin-inline-start: 32px;\">";
                // line 168
                yield (($_v24 = (($_v25 = ($context["account_custom_field"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 168)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24["name"] ?? null) : null);
                yield "</span>
              ";
                // line 169
                if (((($_v26 = ($context["error_custom_field"] ?? null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 170
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v27 = ($context["error_custom_field"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 172
                yield "            </div>
          </div>
          ";
            }
            // line 175
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "date")) {
                // line 176
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 176)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 176);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 177
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 179
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "date";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 180
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 180);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                yield "]\" value=\"";
                if ((($tmp = (($_v28 = ($context["account_custom_field"] ?? null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v29 = ($context["account_custom_field"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 180);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 180);
                yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "date";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 184
                if (((($_v30 = ($context["error_custom_field"] ?? null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 184)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 185
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v31 = ($context["error_custom_field"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 187
                yield "            </div>
          </div>
          ";
            }
            // line 190
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 190) == "time")) {
                // line 191
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 191)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 191);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 192
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 192);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 192);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 194
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "time";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 195
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 195);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                yield "]\" value=\"";
                if ((($tmp = (($_v32 = ($context["account_custom_field"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v33 = ($context["account_custom_field"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 195);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 195);
                yield "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 195);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "time";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 199
                if (((($_v34 = ($context["error_custom_field"] ?? null)) && is_array($_v34) || $_v34 instanceof ArrayAccess ? ($_v34[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 199)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 200
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v35 = ($context["error_custom_field"] ?? null)) && is_array($_v35) || $_v35 instanceof ArrayAccess ? ($_v35[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 200)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 202
                yield "            </div>
          </div>
          ";
            }
            // line 205
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 205) == "datetime")) {
                // line 206
                yield "          <div class=\"form-group";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " required ";
                }
                yield " custom-field\" data-sort=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "sort_order", [], "any", false, false, false, 206);
                yield "\">
            <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 207
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 207);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 207);
                yield "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group ";
                // line 209
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "datetime";
                }
                yield "\">
                <input type=\"text\" name=\"custom_field";
                // line 210
                if ((($tmp =  !($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "[";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "location", [], "any", false, false, false, 210);
                    yield "]";
                }
                yield "[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                yield "]\" value=\"";
                if ((($tmp = (($_v36 = ($context["account_custom_field"] ?? null)) && is_array($_v36) || $_v36 instanceof ArrayAccess ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v37 = ($context["account_custom_field"] ?? null)) && is_array($_v37) || $_v37 instanceof ArrayAccess ? ($_v37[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210)] ?? null) : null);
                } else {
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 210);
                }
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 210);
                yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 210);
                yield "\" class=\"form-control ";
                if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "datetime";
                }
                yield "\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
              ";
                // line 214
                if (((($_v38 = ($context["error_custom_field"] ?? null)) && is_array($_v38) || $_v38 instanceof ArrayAccess ? ($_v38[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 214)] ?? null) : null) || ($context["journal3_is_oc4"] ?? null))) {
                    // line 215
                    yield "              <div id=\"error-custom-field-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215);
                    yield "\" class=\"text-danger invalid-feedback\">";
                    yield (($_v39 = ($context["error_custom_field"] ?? null)) && is_array($_v39) || $_v39 instanceof ArrayAccess ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 215)] ?? null) : null);
                    yield "</div>
              ";
                }
                // line 217
                yield "            </div>
          </div>
          ";
            }
            // line 220
            yield "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        yield "        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 223
        yield ($context["back"] ?? null);
        yield "\" class=\"btn btn-default\">";
        yield ($context["button_back"] ?? null);
        yield "</a></div>
          <div class=\"pull-right\">
            <button type=\"submit\" class=\"btn btn-primary\"><span>";
        // line 225
        yield ($context["button_continue"] ?? null);
        yield "</span></button>
          </div>
        </div>
      </form>
      ";
        // line 229
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 230
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('.form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
\t\t\$('.form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('.form-group').length) {
\t\t\$('.form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('.form-group').length) {
\t\t\$('.form-group:first').before(this);
\t}
});
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
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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
        // line 305
        if ((($tmp = ($context["journal3_is_oc3"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 306
            yield "<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
            // line 308
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
            // line 313
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
            // line 319
            yield ($context["datepicker"] ?? null);
            yield "',
\tpickDate: false
});
//--></script>
";
        }
        // line 324
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
        return "journal3/template/account/edit.twig";
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
        return array (  1048 => 324,  1040 => 319,  1031 => 313,  1023 => 308,  1019 => 306,  1017 => 305,  939 => 230,  935 => 229,  928 => 225,  921 => 223,  917 => 221,  911 => 220,  906 => 217,  898 => 215,  896 => 214,  869 => 210,  863 => 209,  856 => 207,  847 => 206,  844 => 205,  839 => 202,  831 => 200,  829 => 199,  802 => 195,  796 => 194,  789 => 192,  780 => 191,  777 => 190,  772 => 187,  764 => 185,  762 => 184,  735 => 180,  729 => 179,  722 => 177,  713 => 176,  710 => 175,  705 => 172,  697 => 170,  695 => 169,  691 => 168,  676 => 167,  668 => 166,  663 => 164,  654 => 163,  651 => 162,  646 => 159,  638 => 157,  636 => 156,  616 => 155,  609 => 153,  600 => 152,  597 => 151,  592 => 148,  584 => 146,  582 => 145,  562 => 144,  555 => 142,  546 => 141,  543 => 140,  538 => 137,  530 => 135,  528 => 134,  525 => 133,  518 => 131,  513 => 129,  501 => 128,  498 => 127,  493 => 125,  481 => 124,  478 => 123,  476 => 122,  473 => 121,  469 => 120,  465 => 119,  460 => 117,  451 => 116,  448 => 115,  443 => 112,  435 => 110,  433 => 109,  430 => 108,  423 => 106,  418 => 104,  406 => 103,  403 => 102,  398 => 100,  386 => 99,  383 => 98,  381 => 97,  378 => 96,  374 => 95,  370 => 94,  365 => 92,  356 => 91,  353 => 90,  348 => 87,  340 => 85,  338 => 84,  335 => 83,  329 => 82,  321 => 80,  313 => 78,  310 => 77,  306 => 76,  302 => 75,  290 => 74,  283 => 72,  274 => 71,  271 => 70,  267 => 69,  263 => 67,  257 => 65,  255 => 64,  249 => 63,  244 => 61,  238 => 60,  234 => 58,  228 => 56,  226 => 55,  220 => 54,  215 => 52,  210 => 49,  204 => 47,  202 => 46,  196 => 45,  191 => 43,  185 => 42,  181 => 40,  175 => 38,  173 => 37,  167 => 36,  162 => 34,  156 => 33,  152 => 32,  139 => 30,  134 => 29,  126 => 27,  124 => 26,  119 => 25,  116 => 24,  113 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  99 => 18,  94 => 17,  88 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/account/edit.twig", "");
    }
}
