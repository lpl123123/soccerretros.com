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

/* journal3/template/extension/total/voucher.twig */
class __TwigTemplate_8ae5317d5dc38c83d7671c36e8b9ffd1 extends Template
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
        yield "<div class=\"panel panel-default panel-voucher\">
  <div class=\"panel-heading\">
    <h4 class=\"panel-title\"><a href=\"#collapse-voucher\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 3
        yield ($context["heading_title"] ?? null);
        yield " <i class=\"fa fa-caret-down\"></i></a></h4>
  </div>
  <div id=\"collapse-voucher\" class=\"panel-collapse collapse\">
    <div class=\"panel-body form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-voucher\">";
        // line 7
        yield ($context["entry_voucher"] ?? null);
        yield "</label>
      <div class=\"input-group\">
        <input type=\"text\" name=\"voucher\" value=\"";
        // line 9
        yield ($context["voucher"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_voucher"] ?? null);
        yield "\" id=\"input-voucher\" class=\"form-control\" />
        <span class=\"input-group-btn\">
        <input type=\"submit\" value=\"";
        // line 11
        yield ($context["button_voucher"] ?? null);
        yield "\" id=\"button-voucher\" data-loading-text=\"";
        yield ($context["text_loading"] ?? null);
        yield "\"  class=\"btn btn-primary\" />
        </span> </div>
      <script type=\"text/javascript\"><!--
\$('#button-voucher').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=extension/total/voucher/voucher',
\t\ttype: 'post',
\t\tdata: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('.container').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t
\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t}
\t\t\t
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
        return "journal3/template/extension/total/voucher.twig";
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
        return array (  65 => 11,  58 => 9,  53 => 7,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/extension/total/voucher.twig", "");
    }
}
