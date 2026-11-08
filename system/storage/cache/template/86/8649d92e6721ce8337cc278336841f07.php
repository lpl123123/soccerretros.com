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

/* setting/setting.twig */
class __TwigTemplate_9bbcac68d5416c8681387a60571a75b5 extends Template
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
        <button type=\"submit\" id=\"button-save\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_save"] ?? null);
        yield "\" disabled=\"disabled\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
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
            yield "        <li><a href=\"";
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
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        yield "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 28
        yield ($context["text_edit"] ?? null);
        yield "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 31
        yield ($context["action"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 33
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-store\" data-toggle=\"tab\">";
        // line 34
        yield ($context["tab_store"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-local\" data-toggle=\"tab\">";
        // line 35
        yield ($context["tab_local"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 36
        yield ($context["tab_option"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 37
        yield ($context["tab_image"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-mail\" data-toggle=\"tab\">";
        // line 38
        yield ($context["tab_mail"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-server\" data-toggle=\"tab\">";
        // line 39
        yield ($context["tab_server"] ?? null);
        yield "</a></li>

\t\t\t\t<li><a href=\"#tab-allinoneseo\" data-toggle=\"tab\">";
        // line 41
        yield ($context["tab_allinoneseo"] ?? null);
        yield "</a></li>
\t\t\t\t
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 47
        yield ($context["entry_meta_title"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_meta_title\" value=\"";
        // line 49
        yield ($context["config_meta_title"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_meta_title"] ?? null);
        yield "\" id=\"input-meta-title\" class=\"form-control\" />
                  ";
        // line 50
        if ((($tmp = ($context["error_meta_title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_meta_title"] ?? null);
            yield "</div>
                  ";
        }
        // line 52
        yield " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 55
        yield ($context["entry_meta_description"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_description\" rows=\"5\" placeholder=\"";
        // line 57
        yield ($context["entry_meta_description"] ?? null);
        yield "\" id=\"input-meta-description\" class=\"form-control\">";
        yield ($context["config_meta_description"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 61
        yield ($context["entry_meta_keyword"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 63
        yield ($context["entry_meta_keyword"] ?? null);
        yield "\" id=\"input-meta-keyword\" class=\"form-control\">";
        yield ($context["config_meta_keyword"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 67
        yield ($context["entry_theme"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_theme\" id=\"input-theme\" class=\"form-control\">                    
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["themes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 71
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 71) == ($context["config_theme"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 72
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 72);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 72);
                yield "</option>                    
                    ";
            } else {
                // line 73
                yield "                    
                    <option value=\"";
                // line 74
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "value", [], "any", false, false, false, 74);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["theme"], "text", [], "any", false, false, false, 74);
                yield "</option>                    
                    ";
            }
            // line 76
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['theme'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                  <br/>
                  <img src=\"\" alt=\"\" id=\"theme\" class=\"img-thumbnail\" /></div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-layout\">";
        // line 82
        yield ($context["entry_layout"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_layout_id\" id=\"input-layout\" class=\"form-control\">                    
                    ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["layouts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
            // line 86
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 86) == ($context["config_layout_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 87
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 87);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 87);
                yield "</option>                    
                    ";
            } else {
                // line 88
                yield "                    
                    <option value=\"";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 89);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 89);
                yield "</option>                    
                    ";
            }
            // line 91
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['layout'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-store\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 98
        yield ($context["entry_name"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_name\" value=\"";
        // line 100
        yield ($context["config_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
                  ";
        // line 101
        if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 102
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_name"] ?? null);
            yield "</div>
                  ";
        }
        // line 103
        yield " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-owner\">";
        // line 106
        yield ($context["entry_owner"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_owner\" value=\"";
        // line 108
        yield ($context["config_owner"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_owner"] ?? null);
        yield "\" id=\"input-owner\" class=\"form-control\" />
                  ";
        // line 109
        if ((($tmp = ($context["error_owner"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 110
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_owner"] ?? null);
            yield "</div>
                  ";
        }
        // line 111
        yield " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-address\">";
        // line 114
        yield ($context["entry_address"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_address\" placeholder=\"";
        // line 116
        yield ($context["entry_address"] ?? null);
        yield "\" rows=\"5\" id=\"input-address\" class=\"form-control\">";
        yield ($context["config_address"] ?? null);
        yield "</textarea>
                  ";
        // line 117
        if ((($tmp = ($context["error_address"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 118
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_address"] ?? null);
            yield "</div>
                  ";
        }
        // line 119
        yield " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-geocode\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 122
        yield ($context["help_geocode"] ?? null);
        yield "\">";
        yield ($context["entry_geocode"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_geocode\" value=\"";
        // line 124
        yield ($context["config_geocode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_geocode"] ?? null);
        yield "\" id=\"input-geocode\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 128
        yield ($context["entry_email"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_email\" value=\"";
        // line 130
        yield ($context["config_email"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" />
                  ";
        // line 131
        if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_email"] ?? null);
            yield "</div>
                  ";
        }
        // line 133
        yield " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 136
        yield ($context["entry_telephone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_telephone\" value=\"";
        // line 138
        yield ($context["config_telephone"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_telephone"] ?? null);
        yield "\" id=\"input-telephone\" class=\"form-control\" />
                  ";
        // line 139
        if ((($tmp = ($context["error_telephone"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_telephone"] ?? null);
            yield "</div>
                  ";
        }
        // line 141
        yield " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-fax\">";
        // line 144
        yield ($context["entry_fax"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"config_fax\" value=\"";
        // line 146
        yield ($context["config_fax"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_fax"] ?? null);
        yield "\" id=\"input-fax\" class=\"form-control\" />
                </div>
              </div>              
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-image\">";
        // line 150
        yield ($context["entry_image"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 151
        yield ($context["thumb"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_image\" value=\"";
        // line 152
        yield ($context["config_image"] ?? null);
        yield "\" id=\"input-image\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-open\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 156
        yield ($context["help_open"] ?? null);
        yield "\">";
        yield ($context["entry_open"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_open\" rows=\"5\" placeholder=\"";
        // line 158
        yield ($context["entry_open"] ?? null);
        yield "\" id=\"input-open\" class=\"form-control\">";
        yield ($context["config_open"] ?? null);
        yield "</textarea>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-comment\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
        // line 162
        yield ($context["help_comment"] ?? null);
        yield "\">";
        yield ($context["entry_comment"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <textarea name=\"config_comment\" rows=\"5\" placeholder=\"";
        // line 164
        yield ($context["entry_comment"] ?? null);
        yield "\" id=\"input-comment\" class=\"form-control\">";
        yield ($context["config_comment"] ?? null);
        yield "</textarea>
                </div>
              </div>
              ";
        // line 167
        if ((($tmp = ($context["locations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 168
            yield "              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" data-container=\"#tab-general\" title=\"";
            // line 169
            yield ($context["help_location"] ?? null);
            yield "\">";
            yield ($context["entry_location"] ?? null);
            yield "</span></label>
                <div class=\"col-sm-10\"> ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 171
                yield "                  <div class=\"checkbox\">
                    <label> ";
                // line 172
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 172), ($context["config_location"] ?? null))) {
                    // line 173
                    yield "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 173);
                    yield "\" checked=\"checked\" />
                      ";
                    // line 174
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 174);
                    yield "
                      ";
                } else {
                    // line 176
                    yield "                      <input type=\"checkbox\" name=\"config_location[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 176);
                    yield "\" />
                      ";
                    // line 177
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 177);
                    yield "
                      ";
                }
                // line 178
                yield " </label>
                  </div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            yield " </div>
              </div>
              ";
        }
        // line 182
        yield " </div>
            <div class=\"tab-pane\" id=\"tab-local\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 185
        yield ($context["entry_country"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_country_id\" id=\"input-country\" class=\"form-control\">                    
                    ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 189
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 189) == ($context["config_country_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 190
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 190);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 190);
                yield "</option>                    
                    ";
            } else {
                // line 191
                yield "                    
                    <option value=\"";
                // line 192
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 192);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 192);
                yield "</option>                    
                    ";
            }
            // line 194
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 199
        yield ($context["entry_zone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_zone_id\" id=\"input-zone\" class=\"form-control\">
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-timezone\">";
        // line 206
        yield ($context["entry_timezone"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_timezone\" id=\"input-timezone\" class=\"form-control\">
                    ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["timezones"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["timezone"]) {
            // line 210
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 210) == ($context["config_timezone"] ?? null))) {
                // line 211
                yield "                        <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 211);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 211);
                yield "</option>
                      ";
            } else {
                // line 213
                yield "                        <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "value", [], "any", false, false, false, 213);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["timezone"], "text", [], "any", false, false, false, 213);
                yield "</option>
                      ";
            }
            // line 215
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['timezone'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        yield "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-language\">";
        // line 220
        yield ($context["entry_language"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_language\" id=\"input-language\" class=\"form-control\">                    
                    ";
        // line 223
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 224
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 224) == ($context["config_language"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 225
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 225);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 225);
                yield "</option>                    
                    ";
            } else {
                // line 226
                yield "                    
                    <option value=\"";
                // line 227
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 227);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 227);
                yield "</option>                    
                    ";
            }
            // line 229
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-admin-language\">";
        // line 234
        yield ($context["entry_admin_language"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_admin_language\" id=\"input-admin-language\" class=\"form-control\">                    
                    ";
        // line 237
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 238
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 238) == ($context["config_admin_language"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 239
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 239);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 239);
                yield "</option>                    
                    ";
            } else {
                // line 240
                yield "                    
                    <option value=\"";
                // line 241
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 241);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 241);
                yield "</option>                    
                    ";
            }
            // line 243
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 248
        yield ($context["help_currency"] ?? null);
        yield "\">";
        yield ($context["entry_currency"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"config_currency\" id=\"input-currency\" class=\"form-control\">                    
                    ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 252
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 252) == ($context["config_currency"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 253
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 253);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 253);
                yield "</option>                    
                    ";
            } else {
                // line 254
                yield "                    
                    <option value=\"";
                // line 255
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "code", [], "any", false, false, false, 255);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency"], "title", [], "any", false, false, false, 255);
                yield "</option>                    
                    ";
            }
            // line 257
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-currency-engine\">";
        // line 262
        yield ($context["entry_currency_engine"] ?? null);
        yield "</label>              
                <div class=\"col-sm-10\">
                  <select name=\"config_currency_engine\" id=\"input-currency-engine\" class=\"form-control\">
                    ";
        // line 265
        if ((($tmp =  !($context["config_currency_engine"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 266
            yield "                    <option value=\"\" selected>";
            yield ($context["text_none"] ?? null);
            yield "</option>
                    ";
        } else {
            // line 268
            yield "                    <option value=\"\">";
            yield ($context["text_none"] ?? null);
            yield "</option>
                    ";
        }
        // line 270
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["currency_engines"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency_engine"]) {
            // line 271
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 271) == ($context["config_currency_engine"] ?? null))) {
                // line 272
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 272);
                yield "\" selected>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 272);
                yield "</option>
                    ";
            } else {
                // line 274
                yield "                    <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "value", [], "any", false, false, false, 274);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["currency_engine"], "text", [], "any", false, false, false, 274);
                yield "</option>
                    ";
            }
            // line 276
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['currency_engine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        yield "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 281
        yield ($context["help_currency_auto"] ?? null);
        yield "\">";
        yield ($context["entry_currency_auto"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 283
        if ((($tmp = ($context["config_currency_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 284
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" checked=\"checked\" />
                    ";
            // line 285
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        } else {
            // line 287
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"1\" />
                    ";
            // line 288
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        }
        // line 289
        yield " </label>
                  <label class=\"radio-inline\"> ";
        // line 290
        if ((($tmp =  !($context["config_currency_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 291
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" checked=\"checked\" />
                    ";
            // line 292
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        } else {
            // line 294
            yield "                    <input type=\"radio\" name=\"config_currency_auto\" value=\"0\" />
                    ";
            // line 295
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        }
        // line 296
        yield " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 300
        yield ($context["help_symbol_left_space"] ?? null);
        yield "\">";
        yield ($context["entry_symbol_left_space"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 302
        if ((($tmp = ($context["config_symbol_left_space"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 303
            yield "                    <input type=\"radio\" name=\"config_symbol_left_space\" value=\"1\" checked=\"checked\" />
                    ";
            // line 304
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        } else {
            // line 306
            yield "                    <input type=\"radio\" name=\"config_symbol_left_space\" value=\"1\" />
                    ";
            // line 307
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        }
        // line 308
        yield " </label>
                  <label class=\"radio-inline\"> ";
        // line 309
        if ((($tmp =  !($context["config_symbol_left_space"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 310
            yield "                    <input type=\"radio\" name=\"config_symbol_left_space\" value=\"0\" checked=\"checked\" />
                    ";
            // line 311
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        } else {
            // line 313
            yield "                    <input type=\"radio\" name=\"config_symbol_left_space\" value=\"0\" />
                    ";
            // line 314
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        }
        // line 315
        yield " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 319
        yield ($context["help_symbol_right_space"] ?? null);
        yield "\">";
        yield ($context["entry_symbol_right_space"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 321
        if ((($tmp = ($context["config_symbol_right_space"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 322
            yield "                    <input type=\"radio\" name=\"config_symbol_right_space\" value=\"1\" checked=\"checked\" />
                    ";
            // line 323
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        } else {
            // line 325
            yield "                    <input type=\"radio\" name=\"config_symbol_right_space\" value=\"1\" />
                    ";
            // line 326
            yield ($context["text_yes"] ?? null);
            yield "
                    ";
        }
        // line 327
        yield " </label>
                  <label class=\"radio-inline\"> ";
        // line 328
        if ((($tmp =  !($context["config_symbol_right_space"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 329
            yield "                    <input type=\"radio\" name=\"config_symbol_right_space\" value=\"0\" checked=\"checked\" />
                    ";
            // line 330
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        } else {
            // line 332
            yield "                    <input type=\"radio\" name=\"config_symbol_right_space\" value=\"0\" />
                    ";
            // line 333
            yield ($context["text_no"] ?? null);
            yield "
                    ";
        }
        // line 334
        yield " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 338
        yield ($context["entry_length_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_length_class_id\" id=\"input-length-class\" class=\"form-control\">                    
                    ";
        // line 341
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 342
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 342) == ($context["config_length_class_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 343
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 343);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 343);
                yield "</option>                    
                    ";
            } else {
                // line 344
                yield "                    
                    <option value=\"";
                // line 345
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 345);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 345);
                yield "</option>                    
                    ";
            }
            // line 347
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['length_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 352
        yield ($context["entry_weight_class"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"config_weight_class_id\" id=\"input-weight-class\" class=\"form-control\">                    
                    ";
        // line 355
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 356
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 356) == ($context["config_weight_class_id"] ?? null))) {
                yield "                    
                    <option value=\"";
                // line 357
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 357);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 357);
                yield "</option>                    
                    ";
            } else {
                // line 358
                yield "                    
                    <option value=\"";
                // line 359
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 359);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 359);
                yield "</option>                    
                    ";
            }
            // line 361
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['weight_class'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 368
        yield ($context["text_product"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 370
        yield ($context["help_product_count"] ?? null);
        yield "\">";
        yield ($context["entry_product_count"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 372
        if ((($tmp = ($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 373
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 374
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 376
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"1\" />
                      ";
            // line 377
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 378
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 379
        if ((($tmp =  !($context["config_product_count"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 380
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 381
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 383
            yield "                      <input type=\"radio\" name=\"config_product_count\" value=\"0\" />
                      ";
            // line 384
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 385
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 389
        yield ($context["help_limit_admin"] ?? null);
        yield "\">";
        yield ($context["entry_limit_admin"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_limit_admin\" value=\"";
        // line 391
        yield ($context["config_limit_admin"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_limit_admin"] ?? null);
        yield "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 392
        if ((($tmp = ($context["error_limit_admin"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 393
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_limit_admin"] ?? null);
            yield "</div>
                    ";
        }
        // line 394
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 398
        yield ($context["text_review"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 400
        yield ($context["help_review"] ?? null);
        yield "\">";
        yield ($context["entry_review"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 402
        if ((($tmp = ($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 403
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 404
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 406
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"1\" />
                      ";
            // line 407
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 408
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 409
        if ((($tmp =  !($context["config_review_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 410
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 411
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 413
            yield "                      <input type=\"radio\" name=\"config_review_status\" value=\"0\" />
                      ";
            // line 414
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 415
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 419
        yield ($context["help_review_guest"] ?? null);
        yield "\">";
        yield ($context["entry_review_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 421
        if ((($tmp = ($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 422
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 423
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 425
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"1\" />
                      ";
            // line 426
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 427
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 428
        if ((($tmp =  !($context["config_review_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 429
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 430
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 432
            yield "                      <input type=\"radio\" name=\"config_review_guest\" value=\"0\" />
                      ";
            // line 433
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 434
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 439
        yield ($context["text_voucher"] ?? null);
        yield "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-min\"><span data-toggle=\"tooltip\" title=\"";
        // line 441
        yield ($context["help_voucher_min"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_min"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_min\" value=\"";
        // line 443
        yield ($context["config_voucher_min"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_min"] ?? null);
        yield "\" id=\"input-voucher-min\" class=\"form-control\" />
                    ";
        // line 444
        if ((($tmp = ($context["error_voucher_min"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 445
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_min"] ?? null);
            yield "</div>
                    ";
        }
        // line 446
        yield " </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-voucher-max\"><span data-toggle=\"tooltip\" title=\"";
        // line 449
        yield ($context["help_voucher_max"] ?? null);
        yield "\">";
        yield ($context["entry_voucher_max"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_voucher_max\" value=\"";
        // line 451
        yield ($context["config_voucher_max"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher_max"] ?? null);
        yield "\" id=\"input-voucher-max\" class=\"form-control\" />
                    ";
        // line 452
        if ((($tmp = ($context["error_voucher_max"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 453
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_voucher_max"] ?? null);
            yield "</div>
                    ";
        }
        // line 454
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 458
        yield ($context["text_tax"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 460
        yield ($context["entry_tax"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 462
        if ((($tmp = ($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 463
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" checked=\"checked\" />
                      ";
            // line 464
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 466
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"1\" />
                      ";
            // line 467
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 468
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 469
        if ((($tmp =  !($context["config_tax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 470
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" checked=\"checked\" />
                      ";
            // line 471
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 473
            yield "                      <input type=\"radio\" name=\"config_tax\" value=\"0\" />
                      ";
            // line 474
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 475
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-default\"><span data-toggle=\"tooltip\" title=\"";
        // line 479
        yield ($context["help_tax_default"] ?? null);
        yield "\">";
        yield ($context["entry_tax_default"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_default\" id=\"input-tax-default\" class=\"form-control\">
                      <option value=\"\">";
        // line 482
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 483
        if ((($context["config_tax_default"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 484
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 485
            yield "                      
                      <option value=\"shipping\">";
            // line 486
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 488
        yield "                      ";
        if ((($context["config_tax_default"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 489
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 490
            yield "                      
                      <option value=\"payment\">";
            // line 491
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 492
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-tax-customer\"><span data-toggle=\"tooltip\" title=\"";
        // line 497
        yield ($context["help_tax_customer"] ?? null);
        yield "\">";
        yield ($context["entry_tax_customer"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_tax_customer\" id=\"input-tax-customer\" class=\"form-control\">
                      <option value=\"\">";
        // line 500
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 501
        if ((($context["config_tax_customer"] ?? null) == "shipping")) {
            yield "                      
                      <option value=\"shipping\" selected=\"selected\">";
            // line 502
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 503
            yield "                      
                      <option value=\"shipping\">";
            // line 504
            yield ($context["text_shipping"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 506
        yield "                      ";
        if ((($context["config_tax_customer"] ?? null) == "payment")) {
            yield "                      
                      <option value=\"payment\" selected=\"selected\">";
            // line 507
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 508
            yield "                      
                      <option value=\"payment\">";
            // line 509
            yield ($context["text_payment"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 510
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 516
        yield ($context["text_account"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 518
        yield ($context["help_customer_online"] ?? null);
        yield "\">";
        yield ($context["entry_customer_online"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 520
        if ((($tmp = ($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 521
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" checked=\"checked\" />
                      ";
            // line 522
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 524
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"1\" />
                      ";
            // line 525
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 526
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 527
        if ((($tmp =  !($context["config_customer_online"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 528
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" checked=\"checked\" />
                      ";
            // line 529
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 531
            yield "                      <input type=\"radio\" name=\"config_customer_online\" value=\"0\" />
                      ";
            // line 532
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 533
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 537
        yield ($context["help_customer_activity"] ?? null);
        yield "\">";
        yield ($context["entry_customer_activity"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 539
        if ((($tmp = ($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 540
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" checked=\"checked\" />
                      ";
            // line 541
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 543
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"1\" />
                      ";
            // line 544
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 545
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 546
        if ((($tmp =  !($context["config_customer_activity"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 547
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" checked=\"checked\" />
                      ";
            // line 548
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 550
            yield "                      <input type=\"radio\" name=\"config_customer_activity\" value=\"0\" />
                      ";
            // line 551
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 552
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 556
        yield ($context["entry_customer_search"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 558
        if ((($tmp = ($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 559
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" checked=\"checked\" />
                      ";
            // line 560
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 562
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"1\" />
                      ";
            // line 563
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 564
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 565
        if ((($tmp =  !($context["config_customer_search"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 566
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" checked=\"checked\" />
                      ";
            // line 567
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 569
            yield "                      <input type=\"radio\" name=\"config_customer_search\" value=\"0\" />
                      ";
            // line 570
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 571
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 575
        yield ($context["help_customer_group"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">                      
                      ";
        // line 578
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 579
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 579) == ($context["config_customer_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 580
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 580);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 580);
                yield "</option>                      
                      ";
            } else {
                // line 581
                yield "                      
                      <option value=\"";
                // line 582
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 582);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 582);
                yield "</option>                      
                      ";
            }
            // line 584
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 589
        yield ($context["help_customer_group_display"] ?? null);
        yield "\">";
        yield ($context["entry_customer_group_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\"> ";
        // line 590
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 591
            yield "                    <div class=\"checkbox\">
                      <label> ";
            // line 592
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 592), ($context["config_customer_group_display"] ?? null))) {
                // line 593
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 593);
                yield "\" checked=\"checked\" />
                        ";
                // line 594
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 594);
                yield "
                        ";
            } else {
                // line 596
                yield "                        <input type=\"checkbox\" name=\"config_customer_group_display[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 596);
                yield "\" />
                        ";
                // line 597
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 597);
                yield "
                        ";
            }
            // line 598
            yield " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 601
        yield "                    ";
        if ((($tmp = ($context["error_customer_group_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 602
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_customer_group_display"] ?? null);
            yield "</div>
                    ";
        }
        // line 603
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 606
        yield ($context["help_customer_price"] ?? null);
        yield "\">";
        yield ($context["entry_customer_price"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 608
        if ((($tmp = ($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 609
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" checked=\"checked\" />
                      ";
            // line 610
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 612
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"1\" />
                      ";
            // line 613
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 614
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 615
        if ((($tmp =  !($context["config_customer_price"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 616
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" checked=\"checked\" />
                      ";
            // line 617
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 619
            yield "                      <input type=\"radio\" name=\"config_customer_price\" value=\"0\" />
                      ";
            // line 620
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 621
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-login-attempts\"><span data-toggle=\"tooltip\" title=\"";
        // line 625
        yield ($context["help_login_attempts"] ?? null);
        yield "\">";
        yield ($context["entry_login_attempts"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_login_attempts\" value=\"";
        // line 627
        yield ($context["config_login_attempts"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_login_attempts"] ?? null);
        yield "\" id=\"input-login-attempts\" class=\"form-control\" />
                    ";
        // line 628
        if ((($tmp = ($context["error_login_attempts"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 629
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_login_attempts"] ?? null);
            yield "</div>
                    ";
        }
        // line 630
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-account\"><span data-toggle=\"tooltip\" title=\"";
        // line 633
        yield ($context["help_account"] ?? null);
        yield "\">";
        yield ($context["entry_account"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_account_id\" id=\"input-account\" class=\"form-control\">
                      <option value=\"0\">";
        // line 636
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 638
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 638) == ($context["config_account_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 639
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 639);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 639);
                yield "</option>                      
                      ";
            } else {
                // line 640
                yield "                      
                      <option value=\"";
                // line 641
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 641);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 641);
                yield "</option>                      
                      ";
            }
            // line 643
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 649
        yield ($context["text_checkout"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-invoice-prefix\"><span data-toggle=\"tooltip\" title=\"";
        // line 651
        yield ($context["help_invoice_prefix"] ?? null);
        yield "\">";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_invoice_prefix\" value=\"";
        // line 653
        yield ($context["config_invoice_prefix"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_invoice_prefix"] ?? null);
        yield "\" id=\"input-invoice-prefix\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 657
        yield ($context["help_cart_weight"] ?? null);
        yield "\">";
        yield ($context["entry_cart_weight"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 659
        if ((($tmp = ($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 660
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" checked=\"checked\" />
                      ";
            // line 661
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 663
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"1\" />
                      ";
            // line 664
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 665
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 666
        if ((($tmp =  !($context["config_cart_weight"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 667
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" checked=\"checked\" />
                      ";
            // line 668
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 670
            yield "                      <input type=\"radio\" name=\"config_cart_weight\" value=\"0\" />
                      ";
            // line 671
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 672
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 676
        yield ($context["help_checkout_guest"] ?? null);
        yield "\">";
        yield ($context["entry_checkout_guest"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 678
        if ((($tmp = ($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 679
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 680
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 682
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"1\" />
                      ";
            // line 683
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 684
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 685
        if ((($tmp =  !($context["config_checkout_guest"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 686
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 687
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 689
            yield "                      <input type=\"radio\" name=\"config_checkout_guest\" value=\"0\" />
                      ";
            // line 690
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 691
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-checkout\"><span data-toggle=\"tooltip\" title=\"";
        // line 695
        yield ($context["help_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_checkout_id\" id=\"input-checkout\" class=\"form-control\">
                      <option value=\"0\">";
        // line 698
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 699
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 700
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 700) == ($context["config_checkout_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 701
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 701);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 701);
                yield "</option>                      
                      ";
            } else {
                // line 702
                yield "                      
                      <option value=\"";
                // line 703
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 703);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 703);
                yield "</option>                      
                      ";
            }
            // line 705
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-order-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 710
        yield ($context["help_order_status"] ?? null);
        yield "\">";
        yield ($context["entry_order_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_order_status_id\" id=\"input-order-status\" class=\"form-control\">                      
                      ";
        // line 713
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 714
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 714) == ($context["config_order_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 715
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 715);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 715);
                yield "</option>                      
                      ";
            } else {
                // line 716
                yield "                      
                      <option value=\"";
                // line 717
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 717);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 717);
                yield "</option>                      
                      ";
            }
            // line 719
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-process-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 724
        yield ($context["help_processing_status"] ?? null);
        yield "\">";
        yield ($context["entry_processing_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 726
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 727
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 728
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 728), ($context["config_processing_status"] ?? null))) {
                // line 729
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 729);
                yield "\" checked=\"checked\" />
                          ";
                // line 730
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 730);
                yield "
                          ";
            } else {
                // line 732
                yield "                          <input type=\"checkbox\" name=\"config_processing_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 732);
                yield "\" />
                          ";
                // line 733
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 733);
                yield "
                          ";
            }
            // line 734
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 736
        yield " </div>
                    ";
        // line 737
        if ((($tmp = ($context["error_processing_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 738
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_processing_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 739
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-complete-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 742
        yield ($context["help_complete_status"] ?? null);
        yield "\">";
        yield ($context["entry_complete_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 744
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 745
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 746
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 746), ($context["config_complete_status"] ?? null))) {
                // line 747
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 747);
                yield "\" checked=\"checked\" />
                          ";
                // line 748
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 748);
                yield "
                          ";
            } else {
                // line 750
                yield "                          <input type=\"checkbox\" name=\"config_complete_status[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 750);
                yield "\" />
                          ";
                // line 751
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 751);
                yield "
                          ";
            }
            // line 752
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 754
        yield " </div>
                    ";
        // line 755
        if ((($tmp = ($context["error_complete_status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 756
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_complete_status"] ?? null);
            yield "</div>
                    ";
        }
        // line 757
        yield " </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-fraud-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 760
        yield ($context["help_fraud_status"] ?? null);
        yield "\">";
        yield ($context["entry_fraud_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_fraud_status_id\" id=\"input-fraud-status\" class=\"form-control\">                      
                      ";
        // line 763
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["order_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 764
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 764) == ($context["config_fraud_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 765
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 765);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 765);
                yield "</option>                      
                      ";
            } else {
                // line 766
                yield "                      
                      <option value=\"";
                // line 767
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "order_status_id", [], "any", false, false, false, 767);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["order_status"], "name", [], "any", false, false, false, 767);
                yield "</option>                      
                      ";
            }
            // line 769
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-api\"><span data-toggle=\"tooltip\" title=\"";
        // line 774
        yield ($context["help_api"] ?? null);
        yield "\">";
        yield ($context["entry_api"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_api_id\" id=\"input-api\" class=\"form-control\">
                      <option value=\"0\">";
        // line 777
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 778
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["apis"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api"]) {
            // line 779
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 779) == ($context["config_api_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 780
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 780);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 780);
                yield "</option>                      
                      ";
            } else {
                // line 781
                yield "                      
                      <option value=\"";
                // line 782
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "api_id", [], "any", false, false, false, 782);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api"], "username", [], "any", false, false, false, 782);
                yield "</option>                      
                      ";
            }
            // line 784
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 790
        yield ($context["text_stock"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 792
        yield ($context["help_stock_display"] ?? null);
        yield "\">";
        yield ($context["entry_stock_display"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 794
        if ((($tmp = ($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 795
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 796
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 798
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"1\" />
                      ";
            // line 799
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 800
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 801
        if ((($tmp =  !($context["config_stock_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 802
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 803
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 805
            yield "                      <input type=\"radio\" name=\"config_stock_display\" value=\"0\" />
                      ";
            // line 806
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 807
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 811
        yield ($context["help_stock_warning"] ?? null);
        yield "\">";
        yield ($context["entry_stock_warning"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 813
        if ((($tmp = ($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 814
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" checked=\"checked\" />
                      ";
            // line 815
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 817
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"1\" />
                      ";
            // line 818
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 819
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 820
        if ((($tmp =  !($context["config_stock_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 821
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" checked=\"checked\" />
                      ";
            // line 822
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 824
            yield "                      <input type=\"radio\" name=\"config_stock_warning\" value=\"0\" />
                      ";
            // line 825
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 826
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 830
        yield ($context["help_stock_checkout"] ?? null);
        yield "\">";
        yield ($context["entry_stock_checkout"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 832
        if ((($tmp = ($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 833
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" checked=\"checked\" />
                      ";
            // line 834
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 836
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"1\" />
                      ";
            // line 837
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 838
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 839
        if ((($tmp =  !($context["config_stock_checkout"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 840
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" checked=\"checked\" />
                      ";
            // line 841
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 843
            yield "                      <input type=\"radio\" name=\"config_stock_checkout\" value=\"0\" />
                      ";
            // line 844
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 845
        yield " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 850
        yield ($context["text_affiliate"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-group\">";
        // line 852
        yield ($context["entry_affiliate_group"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_group_id\" id=\"input-affiliate-group\" class=\"form-control\">                      
                      ";
        // line 855
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 856
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 856) == ($context["config_affiliate_group_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 857
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 857);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 857);
                yield "</option>                      
                      ";
            } else {
                // line 858
                yield "                      
                      <option value=\"";
                // line 859
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 859);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 859);
                yield "</option>                      
                      ";
            }
            // line 861
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 866
        yield ($context["help_affiliate_approval"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_approval"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 868
        if ((($tmp = ($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 869
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" checked=\"checked\" />
                      ";
            // line 870
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 872
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"1\" />
                      ";
            // line 873
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 874
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 875
        if ((($tmp =  !($context["config_affiliate_approval"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 876
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" checked=\"checked\" />
                      ";
            // line 877
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 879
            yield "                      <input type=\"radio\" name=\"config_affiliate_approval\" value=\"0\" />
                      ";
            // line 880
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 881
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 885
        yield ($context["help_affiliate_auto"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_auto"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 887
        if ((($tmp = ($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 888
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" checked=\"checked\" />
                      ";
            // line 889
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 891
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"1\" />
                      ";
            // line 892
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 893
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 894
        if ((($tmp =  !($context["config_affiliate_auto"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 895
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" checked=\"checked\" />
                      ";
            // line 896
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 898
            yield "                      <input type=\"radio\" name=\"config_affiliate_auto\" value=\"0\" />
                      ";
            // line 899
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 900
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate-commission\"><span data-toggle=\"tooltip\" title=\"";
        // line 904
        yield ($context["help_affiliate_commission"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_affiliate_commission\" value=\"";
        // line 906
        yield ($context["config_affiliate_commission"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_affiliate_commission"] ?? null);
        yield "\" id=\"input-affiliate-commission\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-affiliate\"><span data-toggle=\"tooltip\" title=\"";
        // line 910
        yield ($context["help_affiliate"] ?? null);
        yield "\">";
        yield ($context["entry_affiliate"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_affiliate_id\" id=\"input-affiliate\" class=\"form-control\">
                      <option value=\"0\">";
        // line 913
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 914
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 915
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 915) == ($context["config_affiliate_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 916
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 916);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 916);
                yield "</option>                      
                      ";
            } else {
                // line 917
                yield "                      
                      <option value=\"";
                // line 918
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 918);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 918);
                yield "</option>                      
                      ";
            }
            // line 920
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 926
        yield ($context["text_return"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return\"><span data-toggle=\"tooltip\" title=\"";
        // line 928
        yield ($context["help_return"] ?? null);
        yield "\">";
        yield ($context["entry_return"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_id\" id=\"input-return\" class=\"form-control\">
                      <option value=\"0\">";
        // line 931
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 932
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 933
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 933) == ($context["config_return_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 934
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 934);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 934);
                yield "</option>                      
                      ";
            } else {
                // line 935
                yield "                      
                      <option value=\"";
                // line 936
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "information_id", [], "any", false, false, false, 936);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 936);
                yield "</option>                      
                      ";
            }
            // line 938
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['information'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-return-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 943
        yield ($context["help_return_status"] ?? null);
        yield "\">";
        yield ($context["entry_return_status"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_return_status_id\" id=\"input-return-status\" class=\"form-control\">                      
                      ";
        // line 946
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["return_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["return_status"]) {
            // line 947
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 947) == ($context["config_return_status_id"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 948
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 948);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 948);
                yield "</option>                      
                      ";
            } else {
                // line 949
                yield "                      
                      <option value=\"";
                // line 950
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "return_status_id", [], "any", false, false, false, 950);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["return_status"], "name", [], "any", false, false, false, 950);
                yield "</option>                      
                      ";
            }
            // line 952
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['return_status'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 958
        yield ($context["text_captcha"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 960
        yield ($context["help_captcha"] ?? null);
        yield "\">";
        yield ($context["entry_captcha"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 963
        yield ($context["text_none"] ?? null);
        yield "</option>                      
                      ";
        // line 964
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 965
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 965) == ($context["config_captcha"] ?? null))) {
                yield "                      
                      <option value=\"";
                // line 966
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 966);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 966);
                yield "</option>                      
                      ";
            } else {
                // line 967
                yield "                      
                      <option value=\"";
                // line 968
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 968);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 968);
                yield "</option>                      
                      ";
            }
            // line 970
            yield "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 975
        yield ($context["entry_captcha_page"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 977
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["captcha_pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha_page"]) {
            // line 978
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 979
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 979), ($context["config_captcha_page"] ?? null))) {
                // line 980
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 980);
                yield "\" checked=\"checked\" />
                          ";
                // line 981
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 981);
                yield "
                          ";
            } else {
                // line 983
                yield "                          <input type=\"checkbox\" name=\"config_captcha_page[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "value", [], "any", false, false, false, 983);
                yield "\" />
                          ";
                // line 984
                yield CoreExtension::getAttribute($this->env, $this->source, $context["captcha_page"], "text", [], "any", false, false, false, 984);
                yield "
                          ";
            }
            // line 985
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['captcha_page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 987
        yield " </div>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-logo\">";
        // line 994
        yield ($context["entry_logo"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-logo\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 995
        yield ($context["logo"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_logo\" value=\"";
        // line 996
        yield ($context["config_logo"] ?? null);
        yield "\" id=\"input-logo\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-icon\"><span data-toggle=\"tooltip\" title=\"";
        // line 1000
        yield ($context["help_icon"] ?? null);
        yield "\">";
        yield ($context["entry_icon"] ?? null);
        yield "</span></label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-icon\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1001
        yield ($context["icon"] ?? null);
        yield "\" alt=\"\" title=\"\" data-placeholder=\"";
        yield ($context["placeholder"] ?? null);
        yield "\" /></a>
                  <input type=\"hidden\" name=\"config_icon\" value=\"";
        // line 1002
        yield ($context["config_icon"] ?? null);
        yield "\" id=\"input-icon\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-mail\">
              <fieldset>
                <legend>";
        // line 1008
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-engine\"><span data-toggle=\"tooltip\" title=\"";
        // line 1010
        yield ($context["help_mail_engine"] ?? null);
        yield "\">";
        yield ($context["entry_mail_engine"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"config_mail_engine\" id=\"input-mail-engine\" class=\"form-control\">                      
                      ";
        // line 1013
        if ((($context["config_mail_engine"] ?? null) == "mail")) {
            yield "                      
                      <option value=\"mail\" selected=\"selected\">";
            // line 1014
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1015
            yield "                      
                      <option value=\"mail\">";
            // line 1016
            yield ($context["text_mail"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1018
        yield "                      ";
        if ((($context["config_mail_engine"] ?? null) == "smtp")) {
            yield "                      
                      <option value=\"smtp\" selected=\"selected\">";
            // line 1019
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        } else {
            // line 1020
            yield "                      
                      <option value=\"smtp\">";
            // line 1021
            yield ($context["text_smtp"] ?? null);
            yield "</option>                      
                      ";
        }
        // line 1022
        yield "                    
                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-parameter\"><span data-toggle=\"tooltip\" title=\"";
        // line 1027
        yield ($context["help_mail_parameter"] ?? null);
        yield "\">";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_parameter\" value=\"";
        // line 1029
        yield ($context["config_mail_parameter"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_parameter"] ?? null);
        yield "\" id=\"input-mail-parameter\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-hostname\"><span data-toggle=\"tooltip\" title=\"";
        // line 1033
        yield ($context["help_mail_smtp_hostname"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_hostname\" value=\"";
        // line 1035
        yield ($context["config_mail_smtp_hostname"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_hostname"] ?? null);
        yield "\" id=\"input-mail-smtp-hostname\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-username\">";
        // line 1039
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_username\" value=\"";
        // line 1041
        yield ($context["config_mail_smtp_username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_username"] ?? null);
        yield "\" id=\"input-mail-smtp-username\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-password\"><span data-toggle=\"tooltip\" title=\"";
        // line 1045
        yield ($context["help_mail_smtp_password"] ?? null);
        yield "\">";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_password\" value=\"";
        // line 1047
        yield ($context["config_mail_smtp_password"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_password"] ?? null);
        yield "\" id=\"input-mail-smtp-password\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-port\">";
        // line 1051
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_port\" value=\"";
        // line 1053
        yield ($context["config_mail_smtp_port"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_port"] ?? null);
        yield "\" id=\"input-mail-smtp-port\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-smtp-timeout\">";
        // line 1057
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_mail_smtp_timeout\" value=\"";
        // line 1059
        yield ($context["config_mail_smtp_timeout"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_mail_smtp_timeout"] ?? null);
        yield "\" id=\"input-mail-smtp-timeout\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1064
        yield ($context["text_mail_alert"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1066
        yield ($context["help_mail_alert"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1068
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["mail_alerts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["mail_alert"]) {
            // line 1069
            yield "                      <div class=\"checkbox\">
                        <label> ";
            // line 1070
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1070), ($context["config_mail_alert"] ?? null))) {
                // line 1071
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1071);
                yield "\" checked=\"checked\" />
                          ";
                // line 1072
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1072);
                yield "
                          ";
            } else {
                // line 1074
                yield "                          <input type=\"checkbox\" name=\"config_mail_alert[]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "value", [], "any", false, false, false, 1074);
                yield "\" />
                          ";
                // line 1075
                yield CoreExtension::getAttribute($this->env, $this->source, $context["mail_alert"], "text", [], "any", false, false, false, 1075);
                yield "
                          ";
            }
            // line 1076
            yield " </label>
                      </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['mail_alert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1078
        yield " </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-mail-alert-email\"><span data-toggle=\"tooltip\" title=\"";
        // line 1082
        yield ($context["help_mail_alert_email"] ?? null);
        yield "\">";
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_mail_alert_email\" rows=\"5\" placeholder=\"";
        // line 1084
        yield ($context["entry_mail_alert_email"] ?? null);
        yield "\" id=\"input-alert-email\" class=\"form-control\">";
        yield ($context["config_mail_alert_email"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
            </div>

\t\t\t\t <div class=\"tab-pane\" id=\"tab-allinoneseo\">
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-sort-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1092
        yield ($context["help_googlepageid"] ?? null);
        yield "\">";
        yield ($context["text_googlepageid"] ?? null);
        yield "</span></label>
      <div class=\"col-sm-8\" style=\"display: inline-flex;\">
       <input type=\"text\" placeholder=\"Google Page Id\" name=\"config_google_pageid\" value=\"";
        // line 1094
        yield ($context["config_google_pageid"] ?? null);
        yield "\" class=\"form-control\">
      </div>
    </div>

     <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-sort-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1099
        yield ($context["help_facebookadminid"] ?? null);
        yield "\">";
        yield ($context["text_facebookadminid"] ?? null);
        yield "</span></label>
      <div class=\"col-sm-10\" style=\"display: inline-flex;\">
       <input type=\"text\" placeholder=\"Facebook Admin Id\" name=\"config_facebook_adminid\" value=\"";
        // line 1101
        yield ($context["config_facebook_adminid"] ?? null);
        yield "\" class=\"form-control\">
      </div>
    </div>


    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-sort-order\"><span data-toggle=\"tooltip\" title=\"";
        // line 1107
        yield ($context["help_twitterusername"] ?? null);
        yield "\">";
        yield ($context["text_twitterusername"] ?? null);
        yield "</span></label>
      <div class=\"col-sm-10\" style=\"display: inline-flex;\">
       <input type=\"text\" placeholder=\"Twitter UserName\" name=\"config_twitter_uername\" value=\"";
        // line 1109
        yield ($context["config_twitter_uername"] ?? null);
        yield "\" class=\"form-control\">
      </div>
    </div>

    <div class=\"form-group\">
\t  <label class=\"col-sm-2 control-label\" for=\"input-twittersnippet-cardsize\">";
        // line 1114
        yield ($context["text_twittercardsize"] ?? null);
        yield "</label>
\t  <div class=\"col-sm-10\" style=\"display: inline-flex;\">
\t    <select name=\"config_twitter_cardsize\" id=\"input-twittersnippet-cardsize\" class=\"form-control twittersnippet_cardsize\">
\t      ";
        // line 1117
        if ((($tmp = ($context["config_twitter_cardsize"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1118
            yield "\t      <option value=\"1\" selected=\"selected\">Large</option>
\t      <option value=\"0\">Small</option>
\t      ";
        } else {
            // line 1121
            yield "\t      <option value=\"1\">Large</option>
\t      <option value=\"0\" selected=\"selected\">Small</option>
\t      ";
        }
        // line 1124
        yield "\t    </select>
\t  </div>
\t</div>

  </div>
\t\t\t\t
            <div class=\"tab-pane\" id=\"tab-server\">
              <fieldset>
                <legend>";
        // line 1132
        yield ($context["text_general"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1134
        yield ($context["help_maintenance"] ?? null);
        yield "\">";
        yield ($context["entry_maintenance"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1136
        if ((($tmp = ($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1137
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1138
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1140
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"1\" />
                      ";
            // line 1141
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1142
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1143
        if ((($tmp =  !($context["config_maintenance"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1144
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1145
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1147
            yield "                      <input type=\"radio\" name=\"config_maintenance\" value=\"0\" />
                      ";
            // line 1148
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1149
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1153
        yield ($context["help_seo_url"] ?? null);
        yield "\">";
        yield ($context["entry_seo_url"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1155
        if ((($tmp = ($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1156
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1157
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1159
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"1\" />
                      ";
            // line 1160
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1161
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1162
        if ((($tmp =  !($context["config_seo_url"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1163
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1164
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1166
            yield "                      <input type=\"radio\" name=\"config_seo_url\" value=\"0\" />
                      ";
            // line 1167
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1168
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-robots\"><span data-toggle=\"tooltip\" title=\"";
        // line 1172
        yield ($context["help_robots"] ?? null);
        yield "\">";
        yield ($context["entry_robots"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_robots\" rows=\"5\" placeholder=\"";
        // line 1174
        yield ($context["entry_robots"] ?? null);
        yield "\" id=\"input-robots\" class=\"form-control\">";
        yield ($context["config_robots"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-compression\"><span data-toggle=\"tooltip\" title=\"";
        // line 1178
        yield ($context["help_compression"] ?? null);
        yield "\">";
        yield ($context["entry_compression"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_compression\" value=\"";
        // line 1180
        yield ($context["config_compression"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_compression"] ?? null);
        yield "\" id=\"input-compression\" class=\"form-control\" />
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1185
        yield ($context["text_security"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1187
        yield ($context["help_secure"] ?? null);
        yield "\">";
        yield ($context["entry_secure"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1189
        if ((($tmp = ($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1190
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1191
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1193
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"1\" />
                      ";
            // line 1194
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1195
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1196
        if ((($tmp =  !($context["config_secure"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1197
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1198
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1200
            yield "                      <input type=\"radio\" name=\"config_secure\" value=\"0\" />
                      ";
            // line 1201
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1202
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1206
        yield ($context["help_password"] ?? null);
        yield "\">";
        yield ($context["entry_password"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1208
        if ((($tmp = ($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1209
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1210
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1212
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"1\" />
                      ";
            // line 1213
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1214
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1215
        if ((($tmp =  !($context["config_password"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1216
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1217
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1219
            yield "                      <input type=\"radio\" name=\"config_password\" value=\"0\" />
                      ";
            // line 1220
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1221
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 1225
        yield ($context["help_shared"] ?? null);
        yield "\">";
        yield ($context["entry_shared"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1227
        if ((($tmp = ($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1228
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1229
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1231
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"1\" />
                      ";
            // line 1232
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1233
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1234
        if ((($tmp =  !($context["config_shared"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1235
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1236
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1238
            yield "                      <input type=\"radio\" name=\"config_shared\" value=\"0\" />
                      ";
            // line 1239
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1240
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-encryption\"><span data-toggle=\"tooltip\" title=\"";
        // line 1244
        yield ($context["help_encryption"] ?? null);
        yield "\">";
        yield ($context["entry_encryption"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_encryption\" rows=\"5\" placeholder=\"";
        // line 1246
        yield ($context["entry_encryption"] ?? null);
        yield "\" id=\"input-encryption\" class=\"form-control\">";
        yield ($context["config_encryption"] ?? null);
        yield "</textarea>
                    ";
        // line 1247
        if ((($tmp = ($context["error_encryption"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1248
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_encryption"] ?? null);
            yield "</div>
                    ";
        }
        // line 1249
        yield " </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1253
        yield ($context["text_upload"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-max-size\"><span data-toggle=\"tooltip\" title=\"";
        // line 1255
        yield ($context["help_file_max_size"] ?? null);
        yield "\">";
        yield ($context["entry_file_max_size"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_file_max_size\" value=\"";
        // line 1257
        yield ($context["config_file_max_size"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_file_max_size"] ?? null);
        yield "\" id=\"input-file-max-size\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-ext-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1261
        yield ($context["help_file_ext_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_ext_allowed\" rows=\"5\" placeholder=\"";
        // line 1263
        yield ($context["entry_file_ext_allowed"] ?? null);
        yield "\" id=\"input-file-ext-allowed\" class=\"form-control\">";
        yield ($context["config_file_ext_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-file-mime-allowed\"><span data-toggle=\"tooltip\" title=\"";
        // line 1267
        yield ($context["help_file_mime_allowed"] ?? null);
        yield "\">";
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "</span></label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"config_file_mime_allowed\" rows=\"5\" placeholder=\"";
        // line 1269
        yield ($context["entry_file_mime_allowed"] ?? null);
        yield "\" id=\"input-file-mime-allowed\" class=\"form-control\">";
        yield ($context["config_file_mime_allowed"] ?? null);
        yield "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 1274
        yield ($context["text_error"] ?? null);
        yield "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1276
        yield ($context["entry_error_display"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1278
        if ((($tmp = ($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1279
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1280
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1282
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"1\" />
                      ";
            // line 1283
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1284
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1285
        if ((($tmp =  !($context["config_error_display"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1286
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1287
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1289
            yield "                      <input type=\"radio\" name=\"config_error_display\" value=\"0\" />
                      ";
            // line 1290
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1291
        yield " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 1295
        yield ($context["entry_error_log"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 1297
        if ((($tmp = ($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1298
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" checked=\"checked\" />
                      ";
            // line 1299
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        } else {
            // line 1301
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"1\" />
                      ";
            // line 1302
            yield ($context["text_yes"] ?? null);
            yield "
                      ";
        }
        // line 1303
        yield " </label>
                    <label class=\"radio-inline\"> ";
        // line 1304
        if ((($tmp =  !($context["config_error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1305
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" checked=\"checked\" />
                      ";
            // line 1306
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        } else {
            // line 1308
            yield "                      <input type=\"radio\" name=\"config_error_log\" value=\"0\" />
                      ";
            // line 1309
            yield ($context["text_no"] ?? null);
            yield "
                      ";
        }
        // line 1310
        yield "</label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-error-filename\">";
        // line 1314
        yield ($context["entry_error_filename"] ?? null);
        yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"config_error_filename\" value=\"";
        // line 1316
        yield ($context["config_error_filename"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_error_filename"] ?? null);
        yield "\" id=\"input-error-filename\" class=\"form-control\" />
                    ";
        // line 1317
        if ((($tmp = ($context["error_log"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1318
            yield "                    <div class=\"text-danger\">";
            yield ($context["error_log"] ?? null);
            yield "</div>
                    ";
        }
        // line 1319
        yield " </div>
                </div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_theme\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=setting/setting/theme&user_token=";
        // line 1331
        yield ($context["user_token"] ?? null);
        yield "&theme=' + this.value,
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_theme\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('#theme').attr('src', html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_theme\\']').trigger('change');
//--></script> 
  <script type=\"text/javascript\"><!--
\$('select[name=\\'config_country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1353
        yield ($context["user_token"] ?? null);
        yield "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('select[name=\\'config_country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1362
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1368
        yield ($context["config_zone_id"] ?? null);
        yield "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1375
        yield ($context["text_none"] ?? null);
        yield "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'config_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'config_country_id\\']').trigger('change');
//--></script></div>
";
        // line 1390
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
        return "setting/setting.twig";
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
        return array (  3854 => 1390,  3836 => 1375,  3826 => 1368,  3817 => 1362,  3805 => 1353,  3780 => 1331,  3766 => 1319,  3760 => 1318,  3758 => 1317,  3752 => 1316,  3747 => 1314,  3741 => 1310,  3736 => 1309,  3733 => 1308,  3728 => 1306,  3725 => 1305,  3723 => 1304,  3720 => 1303,  3715 => 1302,  3712 => 1301,  3707 => 1299,  3704 => 1298,  3702 => 1297,  3697 => 1295,  3691 => 1291,  3686 => 1290,  3683 => 1289,  3678 => 1287,  3675 => 1286,  3673 => 1285,  3670 => 1284,  3665 => 1283,  3662 => 1282,  3657 => 1280,  3654 => 1279,  3652 => 1278,  3647 => 1276,  3642 => 1274,  3632 => 1269,  3625 => 1267,  3616 => 1263,  3609 => 1261,  3600 => 1257,  3593 => 1255,  3588 => 1253,  3582 => 1249,  3576 => 1248,  3574 => 1247,  3568 => 1246,  3561 => 1244,  3555 => 1240,  3550 => 1239,  3547 => 1238,  3542 => 1236,  3539 => 1235,  3537 => 1234,  3534 => 1233,  3529 => 1232,  3526 => 1231,  3521 => 1229,  3518 => 1228,  3516 => 1227,  3509 => 1225,  3503 => 1221,  3498 => 1220,  3495 => 1219,  3490 => 1217,  3487 => 1216,  3485 => 1215,  3482 => 1214,  3477 => 1213,  3474 => 1212,  3469 => 1210,  3466 => 1209,  3464 => 1208,  3457 => 1206,  3451 => 1202,  3446 => 1201,  3443 => 1200,  3438 => 1198,  3435 => 1197,  3433 => 1196,  3430 => 1195,  3425 => 1194,  3422 => 1193,  3417 => 1191,  3414 => 1190,  3412 => 1189,  3405 => 1187,  3400 => 1185,  3390 => 1180,  3383 => 1178,  3374 => 1174,  3367 => 1172,  3361 => 1168,  3356 => 1167,  3353 => 1166,  3348 => 1164,  3345 => 1163,  3343 => 1162,  3340 => 1161,  3335 => 1160,  3332 => 1159,  3327 => 1157,  3324 => 1156,  3322 => 1155,  3315 => 1153,  3309 => 1149,  3304 => 1148,  3301 => 1147,  3296 => 1145,  3293 => 1144,  3291 => 1143,  3288 => 1142,  3283 => 1141,  3280 => 1140,  3275 => 1138,  3272 => 1137,  3270 => 1136,  3263 => 1134,  3258 => 1132,  3248 => 1124,  3243 => 1121,  3238 => 1118,  3236 => 1117,  3230 => 1114,  3222 => 1109,  3215 => 1107,  3206 => 1101,  3199 => 1099,  3191 => 1094,  3184 => 1092,  3171 => 1084,  3164 => 1082,  3158 => 1078,  3150 => 1076,  3145 => 1075,  3140 => 1074,  3135 => 1072,  3130 => 1071,  3128 => 1070,  3125 => 1069,  3121 => 1068,  3114 => 1066,  3109 => 1064,  3099 => 1059,  3094 => 1057,  3085 => 1053,  3080 => 1051,  3071 => 1047,  3064 => 1045,  3055 => 1041,  3050 => 1039,  3041 => 1035,  3034 => 1033,  3025 => 1029,  3018 => 1027,  3011 => 1022,  3006 => 1021,  3003 => 1020,  2998 => 1019,  2993 => 1018,  2988 => 1016,  2985 => 1015,  2980 => 1014,  2976 => 1013,  2968 => 1010,  2963 => 1008,  2954 => 1002,  2948 => 1001,  2942 => 1000,  2935 => 996,  2929 => 995,  2925 => 994,  2916 => 987,  2908 => 985,  2903 => 984,  2898 => 983,  2893 => 981,  2888 => 980,  2886 => 979,  2883 => 978,  2879 => 977,  2874 => 975,  2862 => 970,  2855 => 968,  2852 => 967,  2845 => 966,  2840 => 965,  2836 => 964,  2832 => 963,  2824 => 960,  2819 => 958,  2806 => 952,  2799 => 950,  2796 => 949,  2789 => 948,  2784 => 947,  2780 => 946,  2772 => 943,  2760 => 938,  2753 => 936,  2750 => 935,  2743 => 934,  2738 => 933,  2734 => 932,  2730 => 931,  2722 => 928,  2717 => 926,  2704 => 920,  2697 => 918,  2694 => 917,  2687 => 916,  2682 => 915,  2678 => 914,  2674 => 913,  2666 => 910,  2657 => 906,  2650 => 904,  2644 => 900,  2639 => 899,  2636 => 898,  2631 => 896,  2628 => 895,  2626 => 894,  2623 => 893,  2618 => 892,  2615 => 891,  2610 => 889,  2607 => 888,  2605 => 887,  2598 => 885,  2592 => 881,  2587 => 880,  2584 => 879,  2579 => 877,  2576 => 876,  2574 => 875,  2571 => 874,  2566 => 873,  2563 => 872,  2558 => 870,  2555 => 869,  2553 => 868,  2546 => 866,  2534 => 861,  2527 => 859,  2524 => 858,  2517 => 857,  2512 => 856,  2508 => 855,  2502 => 852,  2497 => 850,  2490 => 845,  2485 => 844,  2482 => 843,  2477 => 841,  2474 => 840,  2472 => 839,  2469 => 838,  2464 => 837,  2461 => 836,  2456 => 834,  2453 => 833,  2451 => 832,  2444 => 830,  2438 => 826,  2433 => 825,  2430 => 824,  2425 => 822,  2422 => 821,  2420 => 820,  2417 => 819,  2412 => 818,  2409 => 817,  2404 => 815,  2401 => 814,  2399 => 813,  2392 => 811,  2386 => 807,  2381 => 806,  2378 => 805,  2373 => 803,  2370 => 802,  2368 => 801,  2365 => 800,  2360 => 799,  2357 => 798,  2352 => 796,  2349 => 795,  2347 => 794,  2340 => 792,  2335 => 790,  2322 => 784,  2315 => 782,  2312 => 781,  2305 => 780,  2300 => 779,  2296 => 778,  2292 => 777,  2284 => 774,  2272 => 769,  2265 => 767,  2262 => 766,  2255 => 765,  2250 => 764,  2246 => 763,  2238 => 760,  2233 => 757,  2227 => 756,  2225 => 755,  2222 => 754,  2214 => 752,  2209 => 751,  2204 => 750,  2199 => 748,  2194 => 747,  2192 => 746,  2189 => 745,  2185 => 744,  2178 => 742,  2173 => 739,  2167 => 738,  2165 => 737,  2162 => 736,  2154 => 734,  2149 => 733,  2144 => 732,  2139 => 730,  2134 => 729,  2132 => 728,  2129 => 727,  2125 => 726,  2118 => 724,  2106 => 719,  2099 => 717,  2096 => 716,  2089 => 715,  2084 => 714,  2080 => 713,  2072 => 710,  2060 => 705,  2053 => 703,  2050 => 702,  2043 => 701,  2038 => 700,  2034 => 699,  2030 => 698,  2022 => 695,  2016 => 691,  2011 => 690,  2008 => 689,  2003 => 687,  2000 => 686,  1998 => 685,  1995 => 684,  1990 => 683,  1987 => 682,  1982 => 680,  1979 => 679,  1977 => 678,  1970 => 676,  1964 => 672,  1959 => 671,  1956 => 670,  1951 => 668,  1948 => 667,  1946 => 666,  1943 => 665,  1938 => 664,  1935 => 663,  1930 => 661,  1927 => 660,  1925 => 659,  1918 => 657,  1909 => 653,  1902 => 651,  1897 => 649,  1884 => 643,  1877 => 641,  1874 => 640,  1867 => 639,  1862 => 638,  1858 => 637,  1854 => 636,  1846 => 633,  1841 => 630,  1835 => 629,  1833 => 628,  1827 => 627,  1820 => 625,  1814 => 621,  1809 => 620,  1806 => 619,  1801 => 617,  1798 => 616,  1796 => 615,  1793 => 614,  1788 => 613,  1785 => 612,  1780 => 610,  1777 => 609,  1775 => 608,  1768 => 606,  1763 => 603,  1757 => 602,  1754 => 601,  1746 => 598,  1741 => 597,  1736 => 596,  1731 => 594,  1726 => 593,  1724 => 592,  1721 => 591,  1717 => 590,  1711 => 589,  1699 => 584,  1692 => 582,  1689 => 581,  1682 => 580,  1677 => 579,  1673 => 578,  1665 => 575,  1659 => 571,  1654 => 570,  1651 => 569,  1646 => 567,  1643 => 566,  1641 => 565,  1638 => 564,  1633 => 563,  1630 => 562,  1625 => 560,  1622 => 559,  1620 => 558,  1615 => 556,  1609 => 552,  1604 => 551,  1601 => 550,  1596 => 548,  1593 => 547,  1591 => 546,  1588 => 545,  1583 => 544,  1580 => 543,  1575 => 541,  1572 => 540,  1570 => 539,  1563 => 537,  1557 => 533,  1552 => 532,  1549 => 531,  1544 => 529,  1541 => 528,  1539 => 527,  1536 => 526,  1531 => 525,  1528 => 524,  1523 => 522,  1520 => 521,  1518 => 520,  1511 => 518,  1506 => 516,  1498 => 510,  1493 => 509,  1490 => 508,  1485 => 507,  1480 => 506,  1475 => 504,  1472 => 503,  1467 => 502,  1463 => 501,  1459 => 500,  1451 => 497,  1444 => 492,  1439 => 491,  1436 => 490,  1431 => 489,  1426 => 488,  1421 => 486,  1418 => 485,  1413 => 484,  1409 => 483,  1405 => 482,  1397 => 479,  1391 => 475,  1386 => 474,  1383 => 473,  1378 => 471,  1375 => 470,  1373 => 469,  1370 => 468,  1365 => 467,  1362 => 466,  1357 => 464,  1354 => 463,  1352 => 462,  1347 => 460,  1342 => 458,  1336 => 454,  1330 => 453,  1328 => 452,  1322 => 451,  1315 => 449,  1310 => 446,  1304 => 445,  1302 => 444,  1296 => 443,  1289 => 441,  1284 => 439,  1277 => 434,  1272 => 433,  1269 => 432,  1264 => 430,  1261 => 429,  1259 => 428,  1256 => 427,  1251 => 426,  1248 => 425,  1243 => 423,  1240 => 422,  1238 => 421,  1231 => 419,  1225 => 415,  1220 => 414,  1217 => 413,  1212 => 411,  1209 => 410,  1207 => 409,  1204 => 408,  1199 => 407,  1196 => 406,  1191 => 404,  1188 => 403,  1186 => 402,  1179 => 400,  1174 => 398,  1168 => 394,  1162 => 393,  1160 => 392,  1154 => 391,  1147 => 389,  1141 => 385,  1136 => 384,  1133 => 383,  1128 => 381,  1125 => 380,  1123 => 379,  1120 => 378,  1115 => 377,  1112 => 376,  1107 => 374,  1104 => 373,  1102 => 372,  1095 => 370,  1090 => 368,  1076 => 361,  1069 => 359,  1066 => 358,  1059 => 357,  1054 => 356,  1050 => 355,  1044 => 352,  1032 => 347,  1025 => 345,  1022 => 344,  1015 => 343,  1010 => 342,  1006 => 341,  1000 => 338,  994 => 334,  989 => 333,  986 => 332,  981 => 330,  978 => 329,  976 => 328,  973 => 327,  968 => 326,  965 => 325,  960 => 323,  957 => 322,  955 => 321,  948 => 319,  942 => 315,  937 => 314,  934 => 313,  929 => 311,  926 => 310,  924 => 309,  921 => 308,  916 => 307,  913 => 306,  908 => 304,  905 => 303,  903 => 302,  896 => 300,  890 => 296,  885 => 295,  882 => 294,  877 => 292,  874 => 291,  872 => 290,  869 => 289,  864 => 288,  861 => 287,  856 => 285,  853 => 284,  851 => 283,  844 => 281,  838 => 277,  832 => 276,  824 => 274,  816 => 272,  813 => 271,  808 => 270,  802 => 268,  796 => 266,  794 => 265,  788 => 262,  776 => 257,  769 => 255,  766 => 254,  759 => 253,  754 => 252,  750 => 251,  742 => 248,  730 => 243,  723 => 241,  720 => 240,  713 => 239,  708 => 238,  704 => 237,  698 => 234,  686 => 229,  679 => 227,  676 => 226,  669 => 225,  664 => 224,  660 => 223,  654 => 220,  648 => 216,  642 => 215,  634 => 213,  626 => 211,  623 => 210,  619 => 209,  613 => 206,  603 => 199,  591 => 194,  584 => 192,  581 => 191,  574 => 190,  569 => 189,  565 => 188,  559 => 185,  554 => 182,  549 => 180,  541 => 178,  536 => 177,  531 => 176,  526 => 174,  521 => 173,  519 => 172,  516 => 171,  512 => 170,  506 => 169,  503 => 168,  501 => 167,  493 => 164,  486 => 162,  477 => 158,  470 => 156,  463 => 152,  457 => 151,  453 => 150,  444 => 146,  439 => 144,  434 => 141,  428 => 140,  426 => 139,  420 => 138,  415 => 136,  410 => 133,  404 => 132,  402 => 131,  396 => 130,  391 => 128,  382 => 124,  375 => 122,  370 => 119,  364 => 118,  362 => 117,  356 => 116,  351 => 114,  346 => 111,  340 => 110,  338 => 109,  332 => 108,  327 => 106,  322 => 103,  316 => 102,  314 => 101,  308 => 100,  303 => 98,  289 => 91,  282 => 89,  279 => 88,  272 => 87,  267 => 86,  263 => 85,  257 => 82,  244 => 76,  237 => 74,  234 => 73,  227 => 72,  222 => 71,  218 => 70,  212 => 67,  203 => 63,  198 => 61,  189 => 57,  184 => 55,  179 => 52,  173 => 51,  171 => 50,  165 => 49,  160 => 47,  151 => 41,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  117 => 31,  111 => 28,  107 => 26,  99 => 22,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "setting/setting.twig", "");
    }
}
