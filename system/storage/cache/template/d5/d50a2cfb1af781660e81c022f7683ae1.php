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

/* journal3/template/extension/total/shipping.twig */
class __TwigTemplate_fcbb0d0874275ec0de5681b5c00d7289 extends Template
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
        yield "<div class=\"panel panel-default panel-shipping\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-shipping\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-shipping\" class=\"panel-collapse collapse\">
    <div class=\"panel-body\">
      <p>";
        // line 7
        yield ($context["text_shipping"] ?? null);
        yield "</p>
      <div class=\"form-horizontal\">
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 10
        yield ($context["entry_country"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
              <option value=\"\">";
        // line 13
        yield ($context["text_select"] ?? null);
        yield "</option>
              ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 15
            yield "              ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 15) == ($context["country_id"] ?? null))) {
                // line 16
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 16);
                yield "\" selected=\"selected\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 16);
                yield "</option>
              ";
            } else {
                // line 18
                yield "              <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 18);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 18);
                yield "</option>
              ";
            }
            // line 20
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['country'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 25
        yield ($context["entry_zone"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
            </select>
          </div>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 32
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"text\" name=\"postcode\" value=\"";
        // line 34
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-postcode\" class=\"form-control\" />
          </div>
        </div>
        <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 37
        yield ($context["text_loading"] ?? null);
        yield "\" class=\"btn btn-primary\">";
        yield ($context["button_quote"] ?? null);
        yield "</button>
      </div>
      <script type=\"text/javascript\"><!--
\$('#button-quote').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/quote',
\t\ttype: 'post',
\t\tdata: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-quote').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-quote').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('.container').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}

\t\t\t\tif (json['error']['country']) {
\t\t\t\t\t\$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['zone']) {
\t\t\t\t\t\$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
\t\t\t\t}

\t\t\t\tif (json['error']['postcode']) {
\t\t\t\t\t\$('input[name=\\'postcode\\']').after('<div class=\"text-danger\">' + json['error']['postcode'] + '</div>');
\t\t\t\t}
\t\t\t}

\t\t\tif (json['shipping_method']) {
\t\t\t\t\$('#modal-shipping').remove();

\t\t\t\thtml  = '<div id=\"modal-shipping\" class=\"modal\">';
\t\t\t\thtml += '  <div class=\"modal-dialog\">';
\t\t\t\thtml += '    <div class=\"modal-content\">';
\t\t\t\thtml += '      <div class=\"modal-header\">';
\t\t\t\thtml += '        <h4 class=\"modal-title\">";
        // line 82
        yield ($context["text_shipping_method"] ?? null);
        yield "</h4>';
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-body\">';

\t\t\t\tfor (i in json['shipping_method']) {
\t\t\t\t\thtml += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

\t\t\t\t\tif (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\tfor (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\thtml += '<div class=\"radio\">';
\t\t\t\t\t\t\thtml += '  <label>';

\t\t\t\t\t\t\tif (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 94
        yield ($context["shipping_method"] ?? null);
        yield "') {
\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" />';
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\thtml += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" />';
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\thtml += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
\t\t\t\t\t\t}
\t\t\t\t\t} else {
\t\t\t\t\t\thtml += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '      <div class=\"modal-footer\">';
\t\t\t\thtml += '        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 109
        yield ($context["button_cancel"] ?? null);
        yield "</button>';

\t\t\t\t";
        // line 111
        if ((($tmp = ($context["shipping_method"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "\t\t\t\thtml += '        <input type=\"button\" value=\"";
            yield ($context["button_shipping"] ?? null);
            yield "\" id=\"button-shipping\" data-loading-text=\"";
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\" />';
\t\t\t\t";
        } else {
            // line 114
            yield "\t\t\t\thtml += '        <input type=\"button\" value=\"";
            yield ($context["button_shipping"] ?? null);
            yield "\" id=\"button-shipping\" data-loading-text=\"";
            yield ($context["text_loading"] ?? null);
            yield "\" class=\"btn btn-primary\" disabled=\"disabled\" />';
\t\t\t\t";
        }
        // line 116
        yield "
\t\t\t\thtml += '      </div>';
\t\t\t\thtml += '    </div>';
\t\t\t\thtml += '  </div>';
\t\t\t\thtml += '</div> ';

\t\t\t\t\$('body').append(html);

\t\t\t\t\$('#modal-shipping').modal('show');

\t\t\t\t\$('input[name=\\'shipping_method\\']').on('change', function() {
\t\t\t\t\t\$('#button-shipping').prop('disabled', false);
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$(document).delegate('#button-shipping', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/shipping',
\t\ttype: 'post',
\t\tdata: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-shipping').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('.container').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
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

\t\t\thtml = '<option value=\"\">";
        // line 186
        yield ($context["text_select"] ?? null);
        yield "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 192
        yield ($context["zone_id"] ?? null);
        yield "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 199
        yield ($context["text_none"] ?? null);
        yield "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'country_id\\']').trigger('change');
//--></script>
    </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/extension/total/shipping.twig";
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
        return array (  324 => 199,  314 => 192,  305 => 186,  233 => 116,  225 => 114,  217 => 112,  215 => 111,  210 => 109,  192 => 94,  177 => 82,  127 => 37,  119 => 34,  114 => 32,  104 => 25,  98 => 21,  92 => 20,  84 => 18,  76 => 16,  73 => 15,  69 => 14,  65 => 13,  59 => 10,  53 => 7,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/extension/total/shipping.twig", "");
    }
}
