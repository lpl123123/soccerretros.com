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

/* user/api_form.twig */
class __TwigTemplate_c427b7102dfdc80f62258ea958a4617e extends Template
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
        <button type=\"submit\" form=\"form-api\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">";
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
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-api\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        yield ($context["tab_general"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-ip\" data-toggle=\"tab\">";
        // line 29
        yield ($context["tab_ip"] ?? null);
        yield "</a></li>
            <li><a href=\"#tab-session\" data-toggle=\"tab\">";
        // line 30
        yield ($context["tab_session"] ?? null);
        yield "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-username\">";
        // line 35
        yield ($context["entry_username"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"username\" value=\"";
        // line 37
        yield ($context["username"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_username"] ?? null);
        yield "\" id=\"input-username\" class=\"form-control\" />
                  ";
        // line 38
        if ((($tmp = ($context["error_username"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_username"] ?? null);
            yield "</div>
                  ";
        }
        // line 40
        yield " </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-key\">";
        // line 43
        yield ($context["entry_key"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"key\" placeholder=\"";
        // line 45
        yield ($context["entry_key"] ?? null);
        yield "\" rows=\"5\" id=\"input-key\" class=\"form-control\">";
        yield ($context["key"] ?? null);
        yield "</textarea>
                  <br/>
                  <button type=\"button\" id=\"button-generate\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i> ";
        // line 47
        yield ($context["button_generate"] ?? null);
        yield "</button>
                  ";
        // line 48
        if ((($tmp = ($context["error_key"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 49
            yield "                  <div class=\"text-danger\">";
            yield ($context["error_key"] ?? null);
            yield "</div>
                  ";
        }
        // line 50
        yield " </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 53
        yield ($context["entry_status"] ?? null);
        yield "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">                    
                    ";
        // line 56
        if ((($tmp = ($context["status"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "                    
                    <option value=\"0\">";
            // line 57
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                    <option value=\"1\" selected=\"selected\">";
            // line 58
            yield ($context["text_enabled"] ?? null);
            yield "</option>                    
                    ";
        } else {
            // line 59
            yield "                    
                    <option value=\"0\" selected=\"selected\">";
            // line 60
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                    <option value=\"1\">";
            // line 61
            yield ($context["text_enabled"] ?? null);
            yield "</option>                    
                    ";
        }
        // line 62
        yield "                  
                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-ip\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 68
        yield ($context["text_ip"] ?? null);
        yield "</div>
              <div class=\"table-responsive\">
                <table id=\"ip\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 73
        yield ($context["entry_ip"] ?? null);
        yield "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 79
        $context["ip_row"] = 0;
        // line 80
        yield "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["api_ips"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["api_ip"]) {
            // line 81
            yield "                  <tr id=\"ip-row";
            yield ($context["ip_row"] ?? null);
            yield "\">
                    <td class=\"text-left\"><input type=\"text\" name=\"api_ip[]\" value=\"";
            // line 82
            yield CoreExtension::getAttribute($this->env, $this->source, $context["api_ip"], "ip", [], "any", false, false, false, 82);
            yield "\" placeholder=\"";
            yield ($context["entry_ip"] ?? null);
            yield "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#ip-row";
            // line 83
            yield ($context["ip_row"] ?? null);
            yield "').remove()\" data-toggle=\"tooltip\" title=\"";
            yield ($context["button_remove"] ?? null);
            yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 85
            $context["ip_row"] = (($context["ip_row"] ?? null) + 1);
            // line 86
            yield "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['api_ip'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addIp()\" data-toggle=\"tooltip\" title=\"";
        // line 92
        yield ($context["button_ip_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
\t\t  
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-session\">
              <div class=\"table-responsive\">
                <table id=\"session\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 104
        yield ($context["column_token"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 105
        yield ($context["column_ip"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 106
        yield ($context["column_date_added"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 107
        yield ($context["column_date_modified"] ?? null);
        yield "</td>
                      <td class=\"text-right\">";
        // line 108
        yield ($context["column_action"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 113
        if ((($tmp = ($context["api_sessions"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 114
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["api_sessions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["api_session"]) {
                // line 115
                yield "                  <tr>
                    <td class=\"text-left\">";
                // line 116
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api_session"], "session_id", [], "any", false, false, false, 116);
                yield "</td>
                    <td class=\"text-left\">";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api_session"], "ip", [], "any", false, false, false, 117);
                yield "</td>
                    <td class=\"text-left\">";
                // line 118
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api_session"], "date_added", [], "any", false, false, false, 118);
                yield "</td>
                    <td class=\"text-left\">";
                // line 119
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api_session"], "date_modified", [], "any", false, false, false, 119);
                yield "</td>
                    <td class=\"text-right\"><button type=\"button\" value=\"";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["api_session"], "api_session_id", [], "any", false, false, false, 120);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_remove"] ?? null);
                yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['api_session'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "                  ";
        } else {
            // line 124
            yield "                  <tr>
                    <td class=\"text-center\" colspan=\"5\">";
            // line 125
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                  </tr>
                  ";
        }
        // line 128
        yield "                    </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-generate').on('click', function() {
\trand = '';

\tstring = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

\tfor (i = 0; i < 256; i++) {
\t\trand += string[Math.floor(Math.random() * (string.length - 1))];
\t}

\t\$('#input-key').val(rand);
});
//--></script> 
  <script type=\"text/javascript\"><!--
var ip_row = ";
        // line 152
        yield ($context["ip_row"] ?? null);
        yield ";

function addIp() {
\thtml  = '<tr id=\"ip-row' + ip_row + '\">';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"api_ip[]\" value=\"\" placeholder=\"";
        // line 156
        yield ($context["entry_ip"] ?? null);
        yield "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#ip-row' + ip_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 157
        yield ($context["button_remove"] ?? null);
        yield "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#ip tbody').append(html);

\tip_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#session button').on('click', function(e) {
\te.preventDefault();

\tvar node = this;

\t\$.ajax({
\t\turl: 'index.php?route=user/api/deletesession&user_token=";
        // line 172
        yield ($context["user_token"] ?? null);
        yield "&api_session_id=' + \$(node).val(),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(node).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(node).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#tab-session').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$(node).parent().parent().remove();
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
</div>
";
        // line 201
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
        return "user/api_form.twig";
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
        return array (  451 => 201,  419 => 172,  401 => 157,  397 => 156,  390 => 152,  364 => 128,  358 => 125,  355 => 124,  352 => 123,  341 => 120,  337 => 119,  333 => 118,  329 => 117,  325 => 116,  322 => 115,  317 => 114,  315 => 113,  307 => 108,  303 => 107,  299 => 106,  295 => 105,  291 => 104,  276 => 92,  269 => 87,  263 => 86,  261 => 85,  254 => 83,  248 => 82,  243 => 81,  238 => 80,  236 => 79,  227 => 73,  219 => 68,  211 => 62,  206 => 61,  202 => 60,  199 => 59,  194 => 58,  190 => 57,  186 => 56,  180 => 53,  175 => 50,  169 => 49,  167 => 48,  163 => 47,  156 => 45,  151 => 43,  146 => 40,  140 => 39,  138 => 38,  132 => 37,  127 => 35,  119 => 30,  115 => 29,  111 => 28,  106 => 26,  100 => 23,  96 => 21,  88 => 17,  86 => 16,  81 => 13,  70 => 11,  66 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "user/api_form.twig", "");
    }
}
