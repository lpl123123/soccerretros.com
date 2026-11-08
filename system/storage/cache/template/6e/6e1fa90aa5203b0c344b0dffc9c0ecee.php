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

/* catalog/product_form.twig */
class __TwigTemplate_3a5dd9498235c1e873396f53d4854c06 extends Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            yield "          <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 21
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        yield ($context["text_form"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        yield ($context["tab_data"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        yield ($context["tab_links"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 31
        yield ($context["tab_attribute"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 32
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 33
        yield ($context["tab_recurring"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 34
        yield ($context["tab_discount"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 35
        yield ($context["tab_special"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 36
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 37
        yield ($context["tab_reward"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 38
        yield ($context["tab_seo"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 39
        yield ($context["tab_design"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 45
            yield "                  <li><a href=\"#language";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 45);
            yield "\" data-toggle=\"tab\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 45);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            yield "\"/> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 45);
            yield "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "              </ul>
              <div class=\"tab-content\">";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            yield "                  <div class=\"tab-pane\" id=\"language";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49);
            yield "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 51
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 51);
            yield "\">";
            yield ($context["entry_name"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 53
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "][name]\" value=\"";
            yield (((($tmp = (($_v0 = ($context["product_description"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v1 = ($context["product_description"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53)] ?? null) : null), "name", [], "any", false, false, false, 53)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_name"] ?? null);
            yield "\" id=\"input-name";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 53);
            yield "\" class=\"form-control\"/>
                        ";
            // line 54
            if ((($tmp = (($_v2 = ($context["error_name"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess ? ($_v2[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "                          <div class=\"text-danger\">";
                yield (($_v3 = ($context["error_name"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess ? ($_v3[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55)] ?? null) : null);
                yield "</div>
                        ";
            }
            // line 56
            yield " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 59);
            yield "\">";
            yield ($context["entry_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "][description]\" placeholder=\"";
            yield ($context["entry_description"] ?? null);
            yield "\" id=\"input-description";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            yield "\" data-toggle=\"summernote\" data-lang=\"";
            yield ($context["summernote"] ?? null);
            yield "\" class=\"form-control\">";
            yield (((($tmp = (($_v4 = ($context["product_description"] ?? null)) && is_array($_v4) || $_v4 instanceof ArrayAccess ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v5 = ($context["product_description"] ?? null)) && is_array($_v5) || $_v5 instanceof ArrayAccess ? ($_v5[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null), "description", [], "any", false, false, false, 61)) : (""));
            yield "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 65
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 65);
            yield "\">";
            yield ($context["entry_meta_title"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 67
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            yield "][meta_title]\" value=\"";
            yield (((($tmp = (($_v6 = ($context["product_description"] ?? null)) && is_array($_v6) || $_v6 instanceof ArrayAccess ? ($_v6[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v7 = ($context["product_description"] ?? null)) && is_array($_v7) || $_v7 instanceof ArrayAccess ? ($_v7[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67)] ?? null) : null), "meta_title", [], "any", false, false, false, 67)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_meta_title"] ?? null);
            yield "\" id=\"input-meta-title";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            yield "\" class=\"form-control\"/>
                        ";
            // line 68
            if ((($tmp = (($_v8 = ($context["error_meta_title"] ?? null)) && is_array($_v8) || $_v8 instanceof ArrayAccess ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 68)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "                          <div class=\"text-danger\">";
                yield (($_v9 = ($context["error_meta_title"] ?? null)) && is_array($_v9) || $_v9 instanceof ArrayAccess ? ($_v9[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null);
                yield "</div>
                        ";
            }
            // line 70
            yield " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 73
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            yield "\">";
            yield ($context["entry_meta_description"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 75
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            yield "][meta_description]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_description"] ?? null);
            yield "\" id=\"input-meta-description";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            yield "\" class=\"form-control\">";
            yield (((($tmp = (($_v10 = ($context["product_description"] ?? null)) && is_array($_v10) || $_v10 instanceof ArrayAccess ? ($_v10[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v11 = ($context["product_description"] ?? null)) && is_array($_v11) || $_v11 instanceof ArrayAccess ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "meta_description", [], "any", false, false, false, 75)) : (""));
            yield "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 79
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            yield "\">";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 81
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            yield "][meta_keyword]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_meta_keyword"] ?? null);
            yield "\" id=\"input-meta-keyword";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            yield "\" class=\"form-control\">";
            yield (((($tmp = (($_v12 = ($context["product_description"] ?? null)) && is_array($_v12) || $_v12 instanceof ArrayAccess ? ($_v12[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v13 = ($context["product_description"] ?? null)) && is_array($_v13) || $_v13 instanceof ArrayAccess ? ($_v13[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 81)) : (""));
            yield "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 85
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 85);
            yield "\"><span data-toggle=\"tooltip\" title=\"";
            yield ($context["help_tag"] ?? null);
            yield "\">";
            yield ($context["entry_tag"] ?? null);
            yield "</span></label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 87
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            yield "][tag]\" value=\"";
            yield (((($tmp = (($_v14 = ($context["product_description"] ?? null)) && is_array($_v14) || $_v14 instanceof ArrayAccess ? ($_v14[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v15 = ($context["product_description"] ?? null)) && is_array($_v15) || $_v15 instanceof ArrayAccess ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87)] ?? null) : null), "tag", [], "any", false, false, false, 87)) : (""));
            yield "\" placeholder=\"";
            yield ($context["entry_tag"] ?? null);
            yield "\" id=\"input-tag";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 87);
            yield "\" class=\"form-control\"/>
                      </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 95
        yield ($context["entry_model"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 97
        yield ($context["model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 98
        if ((($tmp = ($context["error_model"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_model"] ?? null);
            yield "</div>
                  ";
        }
        // line 100
        yield "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 103
        yield ($context["help_sku"] ?? null);
        yield "\">";
        yield ($context["entry_sku"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 105
        yield ($context["sku"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sku"] ?? null);
        yield "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 109
        yield ($context["help_upc"] ?? null);
        yield "\">";
        yield ($context["entry_upc"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 111
        yield ($context["upc"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_upc"] ?? null);
        yield "\" id=\"input-upc\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 115
        yield ($context["help_ean"] ?? null);
        yield "\">";
        yield ($context["entry_ean"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 117
        yield ($context["ean"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_ean"] ?? null);
        yield "\" id=\"input-ean\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 121
        yield ($context["help_jan"] ?? null);
        yield "\">";
        yield ($context["entry_jan"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 123
        yield ($context["jan"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_jan"] ?? null);
        yield "\" id=\"input-jan\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 127
        yield ($context["help_isbn"] ?? null);
        yield "\">";
        yield ($context["entry_isbn"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 129
        yield ($context["isbn"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_isbn"] ?? null);
        yield "\" id=\"input-isbn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 133
        yield ($context["help_mpn"] ?? null);
        yield "\">";
        yield ($context["entry_mpn"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 135
        yield ($context["mpn"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mpn"] ?? null);
        yield "\" id=\"input-mpn\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 139
        yield ($context["entry_location"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 141
        yield ($context["location"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_location"] ?? null);
        yield "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 145
        yield ($context["entry_price"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 147
        yield ($context["price"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_price"] ?? null);
        yield "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 151
        yield ($context["entry_tax_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 154
        yield ($context["text_none"] ?? null);
        yield "</option>


                    ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tax_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 158
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 158) == ($context["tax_class_id"] ?? null))) {
                // line 159
                yield "

                        <option value=\"";
                // line 161
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 161);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 161);
                yield "</option>


                      ";
            } else {
                // line 165
                yield "

                        <option value=\"";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "tax_class_id", [], "any", false, false, false, 167);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tax_class"], "title", [], "any", false, false, false, 167);
                yield "</option>


                      ";
            }
            // line 171
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tax_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 178
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 180
        yield ($context["quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 184
        yield ($context["help_minimum"] ?? null);
        yield "\">";
        yield ($context["entry_minimum"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 186
        yield ($context["minimum"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_minimum"] ?? null);
        yield "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 190
        yield ($context["entry_subtract"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 195
        if ((($tmp = ($context["subtract"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 196
            yield "

                      <option value=\"1\" selected=\"selected\">";
            // line 198
            yield ($context["text_yes"] ?? null);
            yield "</option>
                      <option value=\"0\">";
            // line 199
            yield ($context["text_no"] ?? null);
            yield "</option>


                    ";
        } else {
            // line 203
            yield "

                      <option value=\"1\">";
            // line 205
            yield ($context["text_yes"] ?? null);
            yield "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 206
            yield ($context["text_no"] ?? null);
            yield "</option>


                    ";
        }
        // line 210
        yield "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 216
        yield ($context["help_stock_status"] ?? null);
        yield "\">";
        yield ($context["entry_stock_status"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 222
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 222) == ($context["stock_status_id"] ?? null))) {
                // line 223
                yield "

                        <option value=\"";
                // line 225
                yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 225);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 225);
                yield "</option>


                      ";
            } else {
                // line 229
                yield "

                        <option value=\"";
                // line 231
                yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 231);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 231);
                yield "</option>


                      ";
            }
            // line 235
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stock_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 236
        yield "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 242
        yield ($context["entry_shipping"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 244
        if ((($tmp = ($context["shipping"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 245
            yield "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 246
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        } else {
            // line 248
            yield "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 249
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        }
        // line 250
        yield " </label> <label class=\"radio-inline\"> ";
        if ((($tmp =  !($context["shipping"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 251
            yield "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 252
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        } else {
            // line 254
            yield "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 255
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        }
        // line 256
        yield " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 260
        yield ($context["entry_date_available"] ?? null);
        yield "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 263
        yield ($context["date_available"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_available"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 269
        yield ($context["entry_dimension"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 273
        yield ($context["length"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_length"] ?? null);
        yield "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 276
        yield ($context["width"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_width"] ?? null);
        yield "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 279
        yield ($context["height"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_height"] ?? null);
        yield "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 285
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 291
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 291) == ($context["length_class_id"] ?? null))) {
                // line 292
                yield "

                        <option value=\"";
                // line 294
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 294);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 294);
                yield "</option>


                      ";
            } else {
                // line 298
                yield "

                        <option value=\"";
                // line 300
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 300);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 300);
                yield "</option>


                      ";
            }
            // line 304
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 311
        yield ($context["entry_weight"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 313
        yield ($context["weight"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_weight"] ?? null);
        yield "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 317
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 322
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 323
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 323) == ($context["weight_class_id"] ?? null))) {
                // line 324
                yield "

                        <option value=\"";
                // line 326
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 326);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 326);
                yield "</option>


                      ";
            } else {
                // line 330
                yield "

                        <option value=\"";
                // line 332
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 332);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 332);
                yield "</option>


                      ";
            }
            // line 336
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        yield "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 343
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 348
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 349
            yield "

                      <option value=\"1\" selected=\"selected\">";
            // line 351
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                      <option value=\"0\">";
            // line 352
            yield ($context["text_disabled"] ?? null);
            yield "</option>


                    ";
        } else {
            // line 356
            yield "

                      <option value=\"1\">";
            // line 358
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 359
            yield ($context["text_disabled"] ?? null);
            yield "</option>


                    ";
        }
        // line 363
        yield "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 369
        yield ($context["entry_sort_order"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 371
        yield ($context["sort_order"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_sort_order"] ?? null);
        yield "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 377
        yield ($context["help_manufacturer"] ?? null);
        yield "\">";
        yield ($context["entry_manufacturer"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 379
        yield ($context["manufacturer"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_manufacturer"] ?? null);
        yield "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        yield ($context["manufacturer_id"] ?? null);
        yield "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 383
        yield ($context["help_category"] ?? null);
        yield "\">";
        yield ($context["entry_category"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 385
        yield ($context["entry_category"] ?? null);
        yield "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 387
            yield "                      <div id=\"product-category";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 387);
            yield "\"><i class=\"fa fa-minus-circle\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 387);
            yield "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 388
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 388);
            yield "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 390
        yield "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 394
        yield ($context["help_filter"] ?? null);
        yield "\">";
        yield ($context["entry_filter"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 396
        yield ($context["entry_filter"] ?? null);
        yield "\" id=\"input-filter\" class=\"form-control\"/>
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 398
            yield "                      <div id=\"product-filter";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 398);
            yield "\"><i class=\"fa fa-minus-circle\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "name", [], "any", false, false, false, 398);
            yield "
                        <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 399
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_filter"], "filter_id", [], "any", false, false, false, 399);
            yield "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_filter'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 401
        yield "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 405
        yield ($context["entry_store"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 407
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 408
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 409
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 409), ($context["product_store"] ?? null))) {
                // line 410
                yield "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 410);
                yield "\" checked=\"checked\"/>
                            ";
                // line 411
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 411);
                yield "
                          ";
            } else {
                // line 413
                yield "                            <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 413);
                yield "\"/>
                            ";
                // line 414
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 414);
                yield "
                          ";
            }
            // line 415
            yield " </label>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        yield "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 421
        yield ($context["help_download"] ?? null);
        yield "\">";
        yield ($context["entry_download"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 423
        yield ($context["entry_download"] ?? null);
        yield "\" id=\"input-download\" class=\"form-control\"/>
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 424
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_downloads"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 425
            yield "                      <div id=\"product-download";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 425);
            yield "\"><i class=\"fa fa-minus-circle\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "name", [], "any", false, false, false, 425);
            yield "
                        <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 426
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_download"], "download_id", [], "any", false, false, false, 426);
            yield "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_download'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 428
        yield "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 432
        yield ($context["help_related"] ?? null);
        yield "\">";
        yield ($context["entry_related"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 434
        yield ($context["entry_related"] ?? null);
        yield "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 435
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 436
            yield "                      <div id=\"product-related";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 436);
            yield "\"><i class=\"fa fa-minus-circle\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 436);
            yield "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 437
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 437);
            yield "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_related'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        yield "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 448
        yield ($context["entry_attribute"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 449
        yield ($context["entry_text"] ?? null);
        yield "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 455
        $context["attribute_row"] = 0;
        // line 456
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_attributes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 457
            yield "                      <tr id=\"attribute-row";
            yield ($context["attribute_row"] ?? null);
            yield "\">
                        <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 458
            yield ($context["attribute_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "name", [], "any", false, false, false, 458);
            yield "\" placeholder=\"";
            yield ($context["entry_attribute"] ?? null);
            yield "\" class=\"form-control\" style=\"position:relative;\"/> <input type=\"hidden\" name=\"product_attribute[";
            yield ($context["attribute_row"] ?? null);
            yield "][attribute_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "attribute_id", [], "any", false, false, false, 458);
            yield "\"/></td>
                        <td class=\"text-left\">";
            // line 459
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 460
                yield "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 460);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 460);
                yield ".png\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 460);
                yield "\"/></span> <textarea name=\"product_attribute[";
                yield ($context["attribute_row"] ?? null);
                yield "][product_attribute_description][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 460);
                yield "][text]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_text"] ?? null);
                yield "\" class=\"form-control\">";
                yield (((($tmp = (($_v16 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 460)) && is_array($_v16) || $_v16 instanceof ArrayAccess ? ($_v16[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 460)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v17 = CoreExtension::getAttribute($this->env, $this->source, $context["product_attribute"], "product_attribute_description", [], "any", false, false, false, 460)) && is_array($_v17) || $_v17 instanceof ArrayAccess ? ($_v17[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 460)] ?? null) : null), "text", [], "any", false, false, false, 460)) : (""));
                yield "</textarea>
                            </div>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 462
            yield "</td>
                        <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 463
            yield ($context["attribute_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 465
            $context["attribute_row"] = (($context["attribute_row"] ?? null) + 1);
            // line 466
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_attribute'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 467
        yield "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 472
        yield ($context["button_attribute_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 482
        $context["option_row"] = 0;
        // line 483
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 484
            yield "                      <li><a href=\"#tab-option";
            yield ($context["option_row"] ?? null);
            yield "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            yield ($context["option_row"] ?? null);
            yield "\\']').parent().remove(); \$('#tab-option";
            yield ($context["option_row"] ?? null);
            yield "').remove(); \$('#option a:first').tab('show');\"></i> ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 484);
            yield "</a></li>
                      ";
            // line 485
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 486
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        yield "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 488
        yield ($context["entry_option"] ?? null);
        yield "\" id=\"input-option\" class=\"form-control\"/>
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 493
        $context["option_row"] = 0;
        // line 494
        yield "                    ";
        $context["option_value_row"] = 0;
        // line 495
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 496
            yield "                      <div class=\"tab-pane\" id=\"tab-option";
            yield ($context["option_row"] ?? null);
            yield "\">
                        <input type=\"hidden\" name=\"product_option[";
            // line 497
            yield ($context["option_row"] ?? null);
            yield "][product_option_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_id", [], "any", false, false, false, 497);
            yield "\"/> <input type=\"hidden\" name=\"product_option[";
            yield ($context["option_row"] ?? null);
            yield "][name]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "name", [], "any", false, false, false, 497);
            yield "\"/> <input type=\"hidden\" name=\"product_option[";
            yield ($context["option_row"] ?? null);
            yield "][option_id]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 497);
            yield "\"/> <input type=\"hidden\" name=\"product_option[";
            yield ($context["option_row"] ?? null);
            yield "][type]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 497);
            yield "\"/>
                        <div class=\"form-group\">
                          <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 499
            yield ($context["option_row"] ?? null);
            yield "\">";
            yield ($context["entry_required"] ?? null);
            yield "</label>
                          <div class=\"col-sm-10\">
                            <select name=\"product_option[";
            // line 501
            yield ($context["option_row"] ?? null);
            yield "][required]\" id=\"input-required";
            yield ($context["option_row"] ?? null);
            yield "\" class=\"form-control\">


                              ";
            // line 504
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "required", [], "any", false, false, false, 504)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 505
                yield "

                                <option value=\"1\" selected=\"selected\">";
                // line 507
                yield ($context["text_yes"] ?? null);
                yield "</option>
                                <option value=\"0\">";
                // line 508
                yield ($context["text_no"] ?? null);
                yield "</option>


                              ";
            } else {
                // line 512
                yield "

                                <option value=\"1\">";
                // line 514
                yield ($context["text_yes"] ?? null);
                yield "</option>
                                <option value=\"0\" selected=\"selected\">";
                // line 515
                yield ($context["text_no"] ?? null);
                yield "</option>


                              ";
            }
            // line 519
            yield "

                            </select>
                          </div>
                        </div>
                        ";
            // line 524
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 524) == "text")) {
                // line 525
                yield "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 526
                yield ($context["option_row"] ?? null);
                yield "\">";
                yield ($context["entry_option_value"] ?? null);
                yield "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 528
                yield ($context["option_row"] ?? null);
                yield "][value]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 528);
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" id=\"input-value";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 532
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 532) == "textarea")) {
                // line 533
                yield "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 534
                yield ($context["option_row"] ?? null);
                yield "\">";
                yield ($context["entry_option_value"] ?? null);
                yield "</label>
                            <div class=\"col-sm-10\">
                              <textarea name=\"product_option[";
                // line 536
                yield ($context["option_row"] ?? null);
                yield "][value]\" rows=\"5\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" id=\"input-value";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 536);
                yield "</textarea>
                            </div>
                          </div>
                        ";
            }
            // line 540
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 540) == "file")) {
                // line 541
                yield "                          <div class=\"form-group\" style=\"display: none;\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 542
                yield ($context["option_row"] ?? null);
                yield "\">";
                yield ($context["entry_option_value"] ?? null);
                yield "</label>
                            <div class=\"col-sm-10\">
                              <input type=\"text\" name=\"product_option[";
                // line 544
                yield ($context["option_row"] ?? null);
                yield "][value]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 544);
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" id=\"input-value";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                          </div>
                        ";
            }
            // line 548
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 548) == "date")) {
                // line 549
                yield "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 550
                yield ($context["option_row"] ?? null);
                yield "\">";
                yield ($context["entry_option_value"] ?? null);
                yield "</label>
                            <div class=\"col-sm-3\">
                              <div class=\"input-group date\">
                                <input type=\"text\" name=\"product_option[";
                // line 553
                yield ($context["option_row"] ?? null);
                yield "][value]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 553);
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 559
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 559) == "time")) {
                // line 560
                yield "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 561
                yield ($context["option_row"] ?? null);
                yield "\">";
                yield ($context["entry_option_value"] ?? null);
                yield "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group time\">
                                <input type=\"text\" name=\"product_option[";
                // line 564
                yield ($context["option_row"] ?? null);
                yield "][value]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 564);
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" data-date-format=\"HH:mm\" id=\"input-value";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 570
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 570) == "datetime")) {
                // line 571
                yield "                          <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 572
                yield ($context["option_row"] ?? null);
                yield "\">";
                yield ($context["entry_option_value"] ?? null);
                yield "</label>
                            <div class=\"col-sm-10\">
                              <div class=\"input-group datetime\">
                                <input type=\"text\" name=\"product_option[";
                // line 575
                yield ($context["option_row"] ?? null);
                yield "][value]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "value", [], "any", false, false, false, 575);
                yield "\" placeholder=\"";
                yield ($context["entry_option_value"] ?? null);
                yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                yield ($context["option_row"] ?? null);
                yield "\" class=\"form-control\"/> <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                            </div>
                          </div>
                        ";
            }
            // line 581
            yield "                        ";
            if (((((CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 581) == "select") || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 581) == "radio")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 581) == "checkbox")) || (CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "type", [], "any", false, false, false, 581) == "image"))) {
                // line 582
                yield "                          <div class=\"table-responsive\">
                            <table id=\"option-value";
                // line 583
                yield ($context["option_row"] ?? null);
                yield "\" class=\"table table-striped table-bordered table-hover\">
                              <thead>
                                <tr>
                                  <td class=\"text-left\">";
                // line 586
                yield ($context["entry_option_value"] ?? null);
                yield "</td>
                                  <td class=\"text-right\">";
                // line 587
                yield ($context["entry_quantity"] ?? null);
                yield "</td>
                                  <td class=\"text-left\">";
                // line 588
                yield ($context["entry_subtract"] ?? null);
                yield "</td>
                                  <td class=\"text-right\">";
                // line 589
                yield ($context["entry_price"] ?? null);
                yield "</td>
                                  <td class=\"text-right\">";
                // line 590
                yield ($context["entry_option_points"] ?? null);
                yield "</td>
                                  <td class=\"text-right\">";
                // line 591
                yield ($context["entry_weight"] ?? null);
                yield "</td>
                                  <td></td>
                                </tr>
                              </thead>
                              <tbody>

                                ";
                // line 597
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "product_option_value", [], "any", false, false, false, 597));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 598
                    yield "                                  <tr id=\"option-value-row";
                    yield ($context["option_value_row"] ?? null);
                    yield "\">
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 599
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][option_value_id]\" class=\"form-control\">


                                        ";
                    // line 602
                    if ((($tmp = (($_v18 = ($context["option_values"] ?? null)) && is_array($_v18) || $_v18 instanceof ArrayAccess ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 602)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 603
                        yield "
                                          ";
                        // line 604
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((($_v19 = ($context["option_values"] ?? null)) && is_array($_v19) || $_v19 instanceof ArrayAccess ? ($_v19[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 604)] ?? null) : null));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 605
                            yield "
                                            ";
                            // line 606
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 606) == CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "option_value_id", [], "any", false, false, false, 606))) {
                                // line 607
                                yield "

                                              <option value=\"";
                                // line 609
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 609);
                                yield "\" selected=\"selected\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 609);
                                yield "</option>


                                            ";
                            } else {
                                // line 613
                                yield "

                                              <option value=\"";
                                // line 615
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 615);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 615);
                                yield "</option>


                                            ";
                            }
                            // line 619
                            yield "                                          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 620
                        yield "                                        ";
                    }
                    // line 621
                    yield "

                                      </select> <input type=\"hidden\" name=\"product_option[";
                    // line 623
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][product_option_value_id]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "product_option_value_id", [], "any", false, false, false, 623);
                    yield "\"/></td>
                                    <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 624
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][quantity]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "quantity", [], "any", false, false, false, 624);
                    yield "\" placeholder=\"";
                    yield ($context["entry_quantity"] ?? null);
                    yield "\" class=\"form-control\"/></td>
                                    <td class=\"text-left\"><select name=\"product_option[";
                    // line 625
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][subtract]\" class=\"form-control\">


                                        ";
                    // line 628
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "subtract", [], "any", false, false, false, 628)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 629
                        yield "

                                          <option value=\"1\" selected=\"selected\">";
                        // line 631
                        yield ($context["text_yes"] ?? null);
                        yield "</option>
                                          <option value=\"0\">";
                        // line 632
                        yield ($context["text_no"] ?? null);
                        yield "</option>


                                        ";
                    } else {
                        // line 636
                        yield "

                                          <option value=\"1\">";
                        // line 638
                        yield ($context["text_yes"] ?? null);
                        yield "</option>
                                          <option value=\"0\" selected=\"selected\">";
                        // line 639
                        yield ($context["text_no"] ?? null);
                        yield "</option>


                                        ";
                    }
                    // line 643
                    yield "

                                      </select></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 646
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][price_prefix]\" class=\"form-control\">


                                        ";
                    // line 649
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 649) == "+")) {
                        // line 650
                        yield "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 656
                        yield "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 662
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price_prefix", [], "any", false, false, false, 662) == "-")) {
                        // line 663
                        yield "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 669
                        yield "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 675
                    yield "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 677
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][price]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "price", [], "any", false, false, false, 677);
                    yield "\" placeholder=\"";
                    yield ($context["entry_price"] ?? null);
                    yield "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 678
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][points_prefix]\" class=\"form-control\">


                                        ";
                    // line 681
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 681) == "+")) {
                        // line 682
                        yield "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 688
                        yield "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 694
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points_prefix", [], "any", false, false, false, 694) == "-")) {
                        // line 695
                        yield "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 701
                        yield "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 707
                    yield "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 709
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][points]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "points", [], "any", false, false, false, 709);
                    yield "\" placeholder=\"";
                    yield ($context["entry_points"] ?? null);
                    yield "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><select name=\"product_option[";
                    // line 710
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][weight_prefix]\" class=\"form-control\">


                                        ";
                    // line 713
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 713) == "+")) {
                        // line 714
                        yield "

                                          <option value=\"+\" selected=\"selected\">+</option>


                                        ";
                    } else {
                        // line 720
                        yield "

                                          <option value=\"+\">+</option>


                                        ";
                    }
                    // line 726
                    yield "                                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight_prefix", [], "any", false, false, false, 726) == "-")) {
                        // line 727
                        yield "

                                          <option value=\"-\" selected=\"selected\">-</option>


                                        ";
                    } else {
                        // line 733
                        yield "

                                          <option value=\"-\">-</option>


                                        ";
                    }
                    // line 739
                    yield "

                                      </select> <input type=\"text\" name=\"product_option[";
                    // line 741
                    yield ($context["option_row"] ?? null);
                    yield "][product_option_value][";
                    yield ($context["option_value_row"] ?? null);
                    yield "][weight]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product_option_value"], "weight", [], "any", false, false, false, 741);
                    yield "\" placeholder=\"";
                    yield ($context["entry_weight"] ?? null);
                    yield "\" class=\"form-control\"/></td>
                                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 742
                    yield ($context["option_value_row"] ?? null);
                    yield "').remove();\" data-toggle=\"tooltip\" title=\"";
                    yield ($context["button_remove"] ?? null);
                    yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                                  </tr>
                                  ";
                    // line 744
                    $context["option_value_row"] = (($context["option_value_row"] ?? null) + 1);
                    // line 745
                    yield "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['product_option_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 746
                yield "                              </tbody>

                              <tfoot>
                                <tr>
                                  <td colspan=\"6\"></td>
                                  <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                // line 751
                yield ($context["option_row"] ?? null);
                yield "');\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_option_value_add"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                                </tr>
                              </tfoot>
                            </table>
                          </div>
                          <select id=\"option-values";
                // line 756
                yield ($context["option_row"] ?? null);
                yield "\" style=\"display: none;\">


                            ";
                // line 759
                if ((($tmp = (($_v20 = ($context["option_values"] ?? null)) && is_array($_v20) || $_v20 instanceof ArrayAccess ? ($_v20[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 759)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 760
                    yield "                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((($_v21 = ($context["option_values"] ?? null)) && is_array($_v21) || $_v21 instanceof ArrayAccess ? ($_v21[CoreExtension::getAttribute($this->env, $this->source, $context["product_option"], "option_id", [], "any", false, false, false, 760)] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 761
                        yield "

                                <option value=\"";
                        // line 763
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "option_value_id", [], "any", false, false, false, 763);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["option_value"], "name", [], "any", false, false, false, 763);
                        yield "</option>


                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['option_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 767
                    yield "                            ";
                }
                // line 768
                yield "

                          </select>
                        ";
            }
            // line 771
            yield " </div>
                      ";
            // line 772
            $context["option_row"] = (($context["option_row"] ?? null) + 1);
            // line 773
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_option'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 782
        yield ($context["entry_recurring"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 783
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 789
        $context["recurring_row"] = 0;
        // line 790
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 791
            yield "                      <tr id=\"recurring-row";
            yield ($context["recurring_row"] ?? null);
            yield "\">
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 792
            yield ($context["recurring_row"] ?? null);
            yield "][recurring_id]\" class=\"form-control\">


                            ";
            // line 795
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["recurrings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 796
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 796) == CoreExtension::getAttribute($this->env, $this->source, $context["product_recurring"], "recurring_id", [], "any", false, false, false, 796))) {
                    // line 797
                    yield "

                                <option value=\"";
                    // line 799
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 799);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 799);
                    yield "</option>


                              ";
                } else {
                    // line 803
                    yield "

                                <option value=\"";
                    // line 805
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 805);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 805);
                    yield "</option>


                              ";
                }
                // line 809
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recurring'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 810
            yield "

                          </select></td>
                        <td class=\"text-left\"><select name=\"product_recurring[";
            // line 813
            yield ($context["recurring_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 816
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 817
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 817) == CoreExtension::getAttribute($this->env, $this->source, $context["product_recurring"], "customer_group_id", [], "any", false, false, false, 817))) {
                    // line 818
                    yield "

                                <option value=\"";
                    // line 820
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 820);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 820);
                    yield "</option>


                              ";
                } else {
                    // line 824
                    yield "

                                <option value=\"";
                    // line 826
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 826);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 826);
                    yield "</option>


                              ";
                }
                // line 830
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 831
            yield "

                          </select></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 834
            yield ($context["recurring_row"] ?? null);
            yield "').remove()\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 836
            $context["recurring_row"] = (($context["recurring_row"] ?? null) + 1);
            // line 837
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_recurring'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 838
        yield "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 843
        yield ($context["button_recurring_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 854
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 855
        yield ($context["entry_quantity"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 856
        yield ($context["entry_priority"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 857
        yield ($context["entry_price"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 858
        yield ($context["entry_date_start"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 859
        yield ($context["entry_date_end"] ?? null);
        yield "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 865
        $context["discount_row"] = 0;
        // line 866
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 867
            yield "                      <tr id=\"discount-row";
            yield ($context["discount_row"] ?? null);
            yield "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 868
            yield ($context["discount_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 869
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 870
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 870) == CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 870))) {
                    // line 871
                    yield "                                <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 871);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 871);
                    yield "</option>
                              ";
                } else {
                    // line 873
                    yield "                                <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 873);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 873);
                    yield "</option>
                              ";
                }
                // line 875
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 876
            yield "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 877
            yield ($context["discount_row"] ?? null);
            yield "][quantity]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 877);
            yield "\" placeholder=\"";
            yield ($context["entry_quantity"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 878
            yield ($context["discount_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 878);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 879
            yield ($context["discount_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 879);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 882
            yield ($context["discount_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 882);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 888
            yield ($context["discount_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 888);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 892
            yield ($context["discount_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 894
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 895
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_discount'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 896
        yield "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 901
        yield ($context["button_discount_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 912
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 913
        yield ($context["entry_priority"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 914
        yield ($context["entry_price"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 915
        yield ($context["entry_date_start"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 916
        yield ($context["entry_date_end"] ?? null);
        yield "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 922
        $context["special_row"] = 0;
        // line 923
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 924
            yield "                      <tr id=\"special-row";
            yield ($context["special_row"] ?? null);
            yield "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 925
            yield ($context["special_row"] ?? null);
            yield "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 928
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 929
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 929) == CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 929))) {
                    // line 930
                    yield "

                                <option value=\"";
                    // line 932
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 932);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 932);
                    yield "</option>


                              ";
                } else {
                    // line 936
                    yield "

                                <option value=\"";
                    // line 938
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 938);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 938);
                    yield "</option>


                              ";
                }
                // line 942
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 943
            yield "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 946
            yield ($context["special_row"] ?? null);
            yield "][priority]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 946);
            yield "\" placeholder=\"";
            yield ($context["entry_priority"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 947
            yield ($context["special_row"] ?? null);
            yield "][price]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 947);
            yield "\" placeholder=\"";
            yield ($context["entry_price"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 950
            yield ($context["special_row"] ?? null);
            yield "][date_start]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 950);
            yield "\" placeholder=\"";
            yield ($context["entry_date_start"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 956
            yield ($context["special_row"] ?? null);
            yield "][date_end]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 956);
            yield "\" placeholder=\"";
            yield ($context["entry_date_end"] ?? null);
            yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 960
            yield ($context["special_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 962
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 963
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_special'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 964
        yield "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 969
        yield ($context["button_special_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 980
        yield ($context["entry_image"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 985
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\"/></a> <input type=\"hidden\" name=\"image\" value=\"";
        yield ($context["image"] ?? null);
        yield "\" id=\"input-image\"/></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 994
        yield ($context["entry_additional_image"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 995
        yield ($context["entry_sort_order"] ?? null);
        yield "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1001
        $context["image_row"] = 0;
        // line 1002
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["product_images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1003
            yield "                      <tr id=\"image-row";
            yield ($context["image_row"] ?? null);
            yield "\">
                        <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1004
            yield ($context["image_row"] ?? null);
            yield "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "thumb", [], "any", false, false, false, 1004);
            yield "\" alt=\"\" title=\"\" data-placeholder=\"";
            yield ($context["placeholder"] ?? null);
            yield "\"/></a> <input type=\"hidden\" name=\"product_image[";
            yield ($context["image_row"] ?? null);
            yield "][image]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "image", [], "any", false, false, false, 1004);
            yield "\" id=\"input-image";
            yield ($context["image_row"] ?? null);
            yield "\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1005
            yield ($context["image_row"] ?? null);
            yield "][sort_order]\" value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["product_image"], "sort_order", [], "any", false, false, false, 1005);
            yield "\" placeholder=\"";
            yield ($context["entry_sort_order"] ?? null);
            yield "\" class=\"form-control\"/></td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1006
            yield ($context["image_row"] ?? null);
            yield "').remove();\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 1008
            $context["image_row"] = (($context["image_row"] ?? null) + 1);
            // line 1009
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['product_image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1010
        yield "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        // line 1015
        yield ($context["button_image_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1023
        yield ($context["help_points"] ?? null);
        yield "\">";
        yield ($context["entry_points"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1025
        yield ($context["points"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_points"] ?? null);
        yield "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1032
        yield ($context["entry_customer_group"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 1033
        yield ($context["entry_reward"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1038
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1039
            yield "                      <tr>
                        <td class=\"text-left\">";
            // line 1040
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1040);
            yield "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1041
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1041);
            yield "][points]\" value=\"";
            yield (((($tmp = (($_v22 = ($context["product_reward"] ?? null)) && is_array($_v22) || $_v22 instanceof ArrayAccess ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1041)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (CoreExtension::getAttribute($this->env, $this->source, (($_v23 = ($context["product_reward"] ?? null)) && is_array($_v23) || $_v23 instanceof ArrayAccess ? ($_v23[CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1041)] ?? null) : null), "points", [], "any", false, false, false, 1041)) : (""));
            yield "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1044
        yield "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1050
        yield ($context["text_keyword"] ?? null);
        yield "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1055
        yield ($context["entry_store"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 1056
        yield ($context["entry_keyword"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1060
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1061
            yield "                      <tr>
                        <td class=\"text-left\">";
            // line 1062
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1062);
            yield "</td>
                        <td class=\"text-left\">";
            // line 1063
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1064
                yield "                            <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1064);
                yield "/";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1064);
                yield ".png\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1064);
                yield "\"/></span> <input type=\"text\" name=\"product_seo_url[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1064);
                yield "][";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064);
                yield "]\" value=\"";
                if ((($tmp = (($_v24 = (($_v25 = ($context["product_seo_url"] ?? null)) && is_array($_v25) || $_v25 instanceof ArrayAccess ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1064)] ?? null) : null)) && is_array($_v24) || $_v24 instanceof ArrayAccess ? ($_v24[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield (($_v26 = (($_v27 = ($context["product_seo_url"] ?? null)) && is_array($_v27) || $_v27 instanceof ArrayAccess ? ($_v27[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1064)] ?? null) : null)) && is_array($_v26) || $_v26 instanceof ArrayAccess ? ($_v26[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1064)] ?? null) : null);
                }
                yield "\" placeholder=\"";
                yield ($context["entry_keyword"] ?? null);
                yield "\" class=\"form-control\"/>
                            </div>
                            ";
                // line 1066
                if ((($tmp = (($_v28 = (($_v29 = ($context["error_keyword"] ?? null)) && is_array($_v29) || $_v29 instanceof ArrayAccess ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1066)] ?? null) : null)) && is_array($_v28) || $_v28 instanceof ArrayAccess ? ($_v28[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1066)] ?? null) : null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1067
                    yield "                              <div class=\"text-danger\">";
                    yield (($_v30 = (($_v31 = ($context["error_keyword"] ?? null)) && is_array($_v31) || $_v31 instanceof ArrayAccess ? ($_v31[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1067)] ?? null) : null)) && is_array($_v30) || $_v30 instanceof ArrayAccess ? ($_v30[CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1067)] ?? null) : null);
                    yield "</div>
                            ";
                }
                // line 1069
                yield "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield "</td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1072
        yield "                  </tbody>

                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1082
        yield ($context["entry_store"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 1083
        yield ($context["entry_layout"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 1087
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1088
            yield "                      <tr>
                        <td class=\"text-left\">";
            // line 1089
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1089);
            yield "</td>
                        <td class=\"text-left\"><select name=\"product_layout[";
            // line 1090
            yield CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1090);
            yield "]\" class=\"form-control\">
                            <option value=\"\"></option>


                            ";
            // line 1094
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1095
                yield "                              ";
                if (((($_v32 = ($context["product_layout"] ?? null)) && is_array($_v32) || $_v32 instanceof ArrayAccess ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1095)] ?? null) : null) && ((($_v33 = ($context["product_layout"] ?? null)) && is_array($_v33) || $_v33 instanceof ArrayAccess ? ($_v33[CoreExtension::getAttribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1095)] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1095)))) {
                    // line 1096
                    yield "

                                <option value=\"";
                    // line 1098
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1098);
                    yield "\" selected=\"selected\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1098);
                    yield "</option>


                              ";
                } else {
                    // line 1102
                    yield "

                                <option value=\"";
                    // line 1104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1104);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1104);
                    yield "</option>


                              ";
                }
                // line 1108
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1109
            yield "

                          </select></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['store'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1114
        yield "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.min.js\"></script>
  <link href=\"view/javascript/summernote/summernote.min.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1137
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 1142
        yield ($context["text_none"] ?? null);
        yield "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1164
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1193
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1222
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1251
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var attribute_row = ";
        // line 1277
        yield ($context["attribute_row"] ?? null);
        yield ";

  function addAttribute() {
\t  html = '<tr id=\"attribute-row' + attribute_row + '\">';
\t  html += '  <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1281
        yield ($context["entry_attribute"] ?? null);
        yield "\" class=\"form-control\" style=\"position:relative;\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-left\">';
    ";
        // line 1283
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1284
            yield "\t  html += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1284);
            yield "/";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1284);
            yield ".png\" title=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1284);
            yield "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1284);
            yield "][text]\" rows=\"5\" placeholder=\"";
            yield ($context["entry_text"] ?? null);
            yield "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1286
        yield "\t  html += '  </td>';
\t  html += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1287
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#attribute tbody').append(html);

\t  attributeautocomplete(attribute_row);

\t  attribute_row++;
  }

  function attributeautocomplete(attribute_row) {
\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t  'source': function(request, response) {
\t\t\t  \$.ajax({
\t\t\t\t  url: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1301
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t\t  dataType: 'json',
\t\t\t\t  success: function(json) {
\t\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t\t  return {
\t\t\t\t\t\t\t  category: item.attribute_group,
\t\t\t\t\t\t\t  label: item.name,
\t\t\t\t\t\t\t  value: item.attribute_id
\t\t\t\t\t\t  }
\t\t\t\t\t  }));
\t\t\t\t  }
\t\t\t  });
\t\t  },
\t\t  'select': function(item) {
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t  \$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t  }
\t  });
  }

  \$('#attribute tbody tr').each(function(index, element) {
\t  attributeautocomplete(index);
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_row = ";
        // line 1326
        yield ($context["option_row"] ?? null);
        yield ";

  \$('input[name=\\'option\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1331
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  category: item['category'],
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['option_id'],
\t\t\t\t\t\t  type: item['type'],
\t\t\t\t\t\t  option_value: item['option_value']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  html = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\t  html += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\t  html += '\t<div class=\"form-group\">';
\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1354
        yield ($context["entry_required"] ?? null);
        yield "</label>';
\t\t  html += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\t  html += '\t      <option value=\"1\">";
        // line 1356
        yield ($context["text_yes"] ?? null);
        yield "</option>';
\t\t  html += '\t      <option value=\"0\">";
        // line 1357
        yield ($context["text_no"] ?? null);
        yield "</option>';
\t\t  html += '\t  </select></div>';
\t\t  html += '\t</div>';

\t\t  if (item['type'] == 'text') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1363
        yield ($context["entry_option_value"] ?? null);
        yield "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1364
        yield ($context["entry_option_value"] ?? null);
        yield "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'textarea') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1370
        yield ($context["entry_option_value"] ?? null);
        yield "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1371
        yield ($context["entry_option_value"] ?? null);
        yield "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'file') {
\t\t\t  html += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1377
        yield ($context["entry_option_value"] ?? null);
        yield "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1378
        yield ($context["entry_option_value"] ?? null);
        yield "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'date') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1384
        yield ($context["entry_option_value"] ?? null);
        yield "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1385
        yield ($context["entry_option_value"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'time') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1391
        yield ($context["entry_option_value"] ?? null);
        yield "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1392
        yield ($context["entry_option_value"] ?? null);
        yield "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'datetime') {
\t\t\t  html += '\t<div class=\"form-group\">';
\t\t\t  html += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1398
        yield ($context["entry_option_value"] ?? null);
        yield "</label>';
\t\t\t  html += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1399
        yield ($context["entry_option_value"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\t  html += '\t</div>';
\t\t  }

\t\t  if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\t  html += '<div class=\"table-responsive\">';
\t\t\t  html += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\t  html += '  \t <thead>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1408
        yield ($context["entry_option_value"] ?? null);
        yield "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1409
        yield ($context["entry_quantity"] ?? null);
        yield "</td>';
\t\t\t  html += '        <td class=\"text-left\">";
        // line 1410
        yield ($context["entry_subtract"] ?? null);
        yield "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1411
        yield ($context["entry_price"] ?? null);
        yield "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1412
        yield ($context["entry_option_points"] ?? null);
        yield "</td>';
\t\t\t  html += '        <td class=\"text-right\">";
        // line 1413
        yield ($context["entry_weight"] ?? null);
        yield "</td>';
\t\t\t  html += '        <td></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '  \t </thead>';
\t\t\t  html += '  \t <tbody>';
\t\t\t  html += '    </tbody>';
\t\t\t  html += '    <tfoot>';
\t\t\t  html += '      <tr>';
\t\t\t  html += '        <td colspan=\"6\"></td>';
\t\t\t  html += '        <td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        // line 1422
        yield ($context["button_option_value_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\t  html += '      </tr>';
\t\t\t  html += '    </tfoot>';
\t\t\t  html += '  </table>';
\t\t\t  html += '</div>';

\t\t\t  html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

\t\t\t  for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\t  html += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
\t\t\t  }

\t\t\t  html += '  </select>';
\t\t\t  html += '</div>';
\t\t  }

\t\t  \$('#tab-option .tab-content').append(html);

\t\t  \$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t  \$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t  \$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\t  container: 'body',
\t\t\t  html: true
\t\t  });

\t\t  \$('.date').datetimepicker({
\t\t\t  language: '";
        // line 1450
        yield ($context["datepicker"] ?? null);
        yield "',
\t\t\t  pickTime: false
\t\t  });

\t\t  \$('.time').datetimepicker({
\t\t\t  language: '";
        // line 1455
        yield ($context["datepicker"] ?? null);
        yield "',
\t\t\t  pickDate: false
\t\t  });

\t\t  \$('.datetime').datetimepicker({
\t\t\t  language: '";
        // line 1460
        yield ($context["datepicker"] ?? null);
        yield "',
\t\t\t  pickDate: true,
\t\t\t  pickTime: true
\t\t  });

\t\t  option_row++;
\t  }
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  var option_value_row = ";
        // line 1470
        yield ($context["option_value_row"] ?? null);
        yield ";

  function addOptionValue(option_row) {
\t  html = '<tr id=\"option-value-row' + option_value_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\t  html += \$('#option-values' + option_row).html();
\t  html += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1477
        yield ($context["entry_quantity"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\t  html += '    <option value=\"1\">";
        // line 1479
        yield ($context["text_yes"] ?? null);
        yield "</option>';
\t  html += '    <option value=\"0\">";
        // line 1480
        yield ($context["text_no"] ?? null);
        yield "</option>';
\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1486
        yield ($context["entry_price"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1491
        yield ($context["entry_points"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\t  html += '    <option value=\"+\">+</option>';
\t  html += '    <option value=\"-\">-</option>';
\t  html += '  </select>';
\t  html += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1496
        yield ($context["entry_weight"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1497
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#option-value' + option_row + ' tbody').append(html);
\t  \$('[rel=tooltip]').tooltip();

\t  option_value_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 1508
        yield ($context["discount_row"] ?? null);
        yield ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1513
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1514
            yield "\t  html += '    <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1514);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1514), "js");
            yield "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1516
        yield "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1517
        yield ($context["entry_quantity"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1518
        yield ($context["entry_priority"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1519
        yield ($context["entry_price"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1520
        yield ($context["entry_date_start"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1521
        yield ($context["entry_date_end"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1522
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 1536
        yield ($context["special_row"] ?? null);
        yield ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 1541
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1542
            yield "\t  html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1542);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1542), "js");
            yield "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1544
        yield "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1545
        yield ($context["entry_priority"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1546
        yield ($context["entry_price"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1547
        yield ($context["entry_date_start"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1548
        yield ($context["entry_date_end"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1549
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 1555
        yield ($context["datepicker"] ?? null);
        yield "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var image_row = ";
        // line 1564
        yield ($context["image_row"] ?? null);
        yield ";

  function addImage() {
\t  html = '<tr id=\"image-row' + image_row + '\">';
\t  html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1568
        yield ($context["placeholder"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1569
        yield ($context["entry_sort_order"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1570
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#images tbody').append(html);

\t  image_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var recurring_row = ";
        // line 1580
        yield ($context["recurring_row"] ?? null);
        yield ";

  function addRecurring() {
\t  html = '<tr id=\"recurring-row' + recurring_row + '\">';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
    ";
        // line 1586
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["recurrings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1587
            yield "\t  html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "recurring_id", [], "any", false, false, false, 1587);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["recurring"], "name", [], "any", false, false, false, 1587);
            yield "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recurring'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1589
        yield "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
    ";
        // line 1593
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1594
            yield "\t  html += '      <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 1594);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 1594);
            yield "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1596
        yield "\t  html += '    </select>';
\t  html += '  </td>';
\t  html += '  <td class=\"left\">';
\t  html += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1599
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\t  html += '  </td>';
\t  html += '</tr>';

\t  \$('#tab-recurring table tbody').append(html);

\t  recurring_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 1611
        yield ($context["datepicker"] ?? null);
        yield "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 1616
        yield ($context["datepicker"] ?? null);
        yield "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 1621
        yield ($context["datepicker"] ?? null);
        yield "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>
";
        // line 1631
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
        return "catalog/product_form.twig";
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
        return array (  3651 => 1631,  3638 => 1621,  3630 => 1616,  3622 => 1611,  3607 => 1599,  3602 => 1596,  3591 => 1594,  3587 => 1593,  3581 => 1589,  3570 => 1587,  3566 => 1586,  3557 => 1580,  3544 => 1570,  3540 => 1569,  3534 => 1568,  3527 => 1564,  3515 => 1555,  3506 => 1549,  3502 => 1548,  3498 => 1547,  3494 => 1546,  3490 => 1545,  3487 => 1544,  3476 => 1542,  3472 => 1541,  3464 => 1536,  3447 => 1522,  3443 => 1521,  3439 => 1520,  3435 => 1519,  3431 => 1518,  3427 => 1517,  3424 => 1516,  3413 => 1514,  3409 => 1513,  3401 => 1508,  3387 => 1497,  3383 => 1496,  3375 => 1491,  3367 => 1486,  3358 => 1480,  3354 => 1479,  3349 => 1477,  3339 => 1470,  3326 => 1460,  3318 => 1455,  3310 => 1450,  3279 => 1422,  3267 => 1413,  3263 => 1412,  3259 => 1411,  3255 => 1410,  3251 => 1409,  3247 => 1408,  3235 => 1399,  3231 => 1398,  3222 => 1392,  3218 => 1391,  3209 => 1385,  3205 => 1384,  3196 => 1378,  3192 => 1377,  3183 => 1371,  3179 => 1370,  3170 => 1364,  3166 => 1363,  3157 => 1357,  3153 => 1356,  3148 => 1354,  3122 => 1331,  3114 => 1326,  3086 => 1301,  3069 => 1287,  3066 => 1286,  3049 => 1284,  3045 => 1283,  3040 => 1281,  3033 => 1277,  3004 => 1251,  2972 => 1222,  2940 => 1193,  2908 => 1164,  2883 => 1142,  2875 => 1137,  2850 => 1114,  2840 => 1109,  2834 => 1108,  2825 => 1104,  2821 => 1102,  2812 => 1098,  2808 => 1096,  2805 => 1095,  2801 => 1094,  2794 => 1090,  2790 => 1089,  2787 => 1088,  2783 => 1087,  2776 => 1083,  2772 => 1082,  2760 => 1072,  2747 => 1069,  2741 => 1067,  2739 => 1066,  2719 => 1064,  2715 => 1063,  2711 => 1062,  2708 => 1061,  2704 => 1060,  2697 => 1056,  2693 => 1055,  2685 => 1050,  2677 => 1044,  2666 => 1041,  2662 => 1040,  2659 => 1039,  2655 => 1038,  2647 => 1033,  2643 => 1032,  2631 => 1025,  2624 => 1023,  2613 => 1015,  2606 => 1010,  2600 => 1009,  2598 => 1008,  2591 => 1006,  2583 => 1005,  2569 => 1004,  2564 => 1003,  2559 => 1002,  2557 => 1001,  2548 => 995,  2544 => 994,  2528 => 985,  2520 => 980,  2506 => 969,  2499 => 964,  2493 => 963,  2491 => 962,  2484 => 960,  2473 => 956,  2460 => 950,  2450 => 947,  2442 => 946,  2437 => 943,  2431 => 942,  2422 => 938,  2418 => 936,  2409 => 932,  2405 => 930,  2402 => 929,  2398 => 928,  2392 => 925,  2387 => 924,  2382 => 923,  2380 => 922,  2371 => 916,  2367 => 915,  2363 => 914,  2359 => 913,  2355 => 912,  2341 => 901,  2334 => 896,  2328 => 895,  2326 => 894,  2319 => 892,  2308 => 888,  2295 => 882,  2285 => 879,  2277 => 878,  2269 => 877,  2266 => 876,  2260 => 875,  2252 => 873,  2244 => 871,  2241 => 870,  2237 => 869,  2233 => 868,  2228 => 867,  2223 => 866,  2221 => 865,  2212 => 859,  2208 => 858,  2204 => 857,  2200 => 856,  2196 => 855,  2192 => 854,  2178 => 843,  2171 => 838,  2165 => 837,  2163 => 836,  2156 => 834,  2151 => 831,  2145 => 830,  2136 => 826,  2132 => 824,  2123 => 820,  2119 => 818,  2116 => 817,  2112 => 816,  2106 => 813,  2101 => 810,  2095 => 809,  2086 => 805,  2082 => 803,  2073 => 799,  2069 => 797,  2066 => 796,  2062 => 795,  2056 => 792,  2051 => 791,  2046 => 790,  2044 => 789,  2035 => 783,  2031 => 782,  2015 => 773,  2013 => 772,  2010 => 771,  2004 => 768,  2001 => 767,  1989 => 763,  1985 => 761,  1980 => 760,  1978 => 759,  1972 => 756,  1962 => 751,  1955 => 746,  1949 => 745,  1947 => 744,  1940 => 742,  1930 => 741,  1926 => 739,  1918 => 733,  1910 => 727,  1907 => 726,  1899 => 720,  1891 => 714,  1889 => 713,  1881 => 710,  1871 => 709,  1867 => 707,  1859 => 701,  1851 => 695,  1848 => 694,  1840 => 688,  1832 => 682,  1830 => 681,  1822 => 678,  1812 => 677,  1808 => 675,  1800 => 669,  1792 => 663,  1789 => 662,  1781 => 656,  1773 => 650,  1771 => 649,  1763 => 646,  1758 => 643,  1751 => 639,  1747 => 638,  1743 => 636,  1736 => 632,  1732 => 631,  1728 => 629,  1726 => 628,  1718 => 625,  1708 => 624,  1700 => 623,  1696 => 621,  1693 => 620,  1687 => 619,  1678 => 615,  1674 => 613,  1665 => 609,  1661 => 607,  1659 => 606,  1656 => 605,  1652 => 604,  1649 => 603,  1647 => 602,  1639 => 599,  1634 => 598,  1630 => 597,  1621 => 591,  1617 => 590,  1613 => 589,  1609 => 588,  1605 => 587,  1601 => 586,  1595 => 583,  1592 => 582,  1589 => 581,  1574 => 575,  1566 => 572,  1563 => 571,  1560 => 570,  1545 => 564,  1537 => 561,  1534 => 560,  1531 => 559,  1516 => 553,  1508 => 550,  1505 => 549,  1502 => 548,  1489 => 544,  1482 => 542,  1479 => 541,  1476 => 540,  1463 => 536,  1456 => 534,  1453 => 533,  1450 => 532,  1437 => 528,  1430 => 526,  1427 => 525,  1425 => 524,  1418 => 519,  1411 => 515,  1407 => 514,  1403 => 512,  1396 => 508,  1392 => 507,  1388 => 505,  1386 => 504,  1378 => 501,  1371 => 499,  1352 => 497,  1347 => 496,  1342 => 495,  1339 => 494,  1337 => 493,  1329 => 488,  1326 => 487,  1320 => 486,  1318 => 485,  1307 => 484,  1302 => 483,  1300 => 482,  1287 => 472,  1280 => 467,  1274 => 466,  1272 => 465,  1265 => 463,  1262 => 462,  1240 => 460,  1236 => 459,  1224 => 458,  1219 => 457,  1214 => 456,  1212 => 455,  1203 => 449,  1199 => 448,  1188 => 439,  1179 => 437,  1172 => 436,  1168 => 435,  1164 => 434,  1157 => 432,  1151 => 428,  1142 => 426,  1135 => 425,  1131 => 424,  1127 => 423,  1120 => 421,  1114 => 417,  1106 => 415,  1101 => 414,  1096 => 413,  1091 => 411,  1086 => 410,  1084 => 409,  1081 => 408,  1077 => 407,  1072 => 405,  1066 => 401,  1057 => 399,  1050 => 398,  1046 => 397,  1042 => 396,  1035 => 394,  1029 => 390,  1020 => 388,  1013 => 387,  1009 => 386,  1005 => 385,  998 => 383,  987 => 379,  980 => 377,  969 => 371,  964 => 369,  956 => 363,  949 => 359,  945 => 358,  941 => 356,  934 => 352,  930 => 351,  926 => 349,  924 => 348,  916 => 343,  908 => 337,  902 => 336,  893 => 332,  889 => 330,  880 => 326,  876 => 324,  873 => 323,  869 => 322,  861 => 317,  852 => 313,  847 => 311,  839 => 305,  833 => 304,  824 => 300,  820 => 298,  811 => 294,  807 => 292,  804 => 291,  800 => 290,  792 => 285,  781 => 279,  773 => 276,  765 => 273,  758 => 269,  747 => 263,  741 => 260,  735 => 256,  730 => 255,  727 => 254,  722 => 252,  719 => 251,  716 => 250,  711 => 249,  708 => 248,  703 => 246,  700 => 245,  698 => 244,  693 => 242,  685 => 236,  679 => 235,  670 => 231,  666 => 229,  657 => 225,  653 => 223,  650 => 222,  646 => 221,  636 => 216,  628 => 210,  621 => 206,  617 => 205,  613 => 203,  606 => 199,  602 => 198,  598 => 196,  596 => 195,  588 => 190,  579 => 186,  572 => 184,  563 => 180,  558 => 178,  550 => 172,  544 => 171,  535 => 167,  531 => 165,  522 => 161,  518 => 159,  515 => 158,  511 => 157,  505 => 154,  499 => 151,  490 => 147,  485 => 145,  476 => 141,  471 => 139,  462 => 135,  455 => 133,  446 => 129,  439 => 127,  430 => 123,  423 => 121,  414 => 117,  407 => 115,  398 => 111,  391 => 109,  382 => 105,  375 => 103,  370 => 100,  364 => 99,  362 => 98,  356 => 97,  351 => 95,  345 => 91,  328 => 87,  319 => 85,  306 => 81,  299 => 79,  286 => 75,  279 => 73,  274 => 70,  268 => 69,  266 => 68,  256 => 67,  249 => 65,  234 => 61,  227 => 59,  222 => 56,  216 => 55,  214 => 54,  204 => 53,  197 => 51,  191 => 49,  187 => 48,  184 => 47,  167 => 45,  163 => 44,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}
