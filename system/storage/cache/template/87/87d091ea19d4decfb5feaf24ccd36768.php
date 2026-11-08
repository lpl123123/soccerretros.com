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

/* common/filemanager.twig */
class __TwigTemplate_1547c9d41e4e943fbee32c9f09037e75 extends Template
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
        yield "<div id=\"filemanager\" class=\"modal-dialog modal-lg\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 5
        yield ($context["heading_title"] ?? null);
        yield "</h4>
    </div>
    <div class=\"modal-body\">
      <div class=\"row\">
        <div class=\"col-sm-5\"><a href=\"";
        // line 9
        yield ($context["parent"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_parent"] ?? null);
        yield "\" id=\"button-parent\" class=\"btn btn-default\"><i class=\"fa fa-level-up\"></i></a> <a href=\"";
        yield ($context["refresh"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_refresh"] ?? null);
        yield "\" id=\"button-refresh\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        yield ($context["button_upload"] ?? null);
        yield "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa fa-upload\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 11
        yield ($context["button_folder"] ?? null);
        yield "\" id=\"button-folder\" class=\"btn btn-default\"><i class=\"fa fa-folder\"></i></button>
          <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        yield ($context["button_delete"] ?? null);
        yield "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>
        </div>
        <div class=\"col-sm-7\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 16
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_search"] ?? null);
        yield "\" class=\"form-control\">
            <span class=\"input-group-btn\">
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 18
        yield ($context["button_search"] ?? null);
        yield "\" id=\"button-search\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
            </span></div>
        </div>
      </div>
      <hr />
      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::batch(($context["images"] ?? null), 4));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 24
            yield "      <div class=\"row\">
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["image"]);
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 26
                yield "        <div class=\"col-sm-3 col-xs-6 text-center\">
          ";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 27) == "directory")) {
                    // line 28
                    yield "          <div class=\"text-center\"><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 28);
                    yield "\" class=\"directory\" style=\"vertical-align: middle;\"><i class=\"fa fa-folder fa-5x\"></i></a></div>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 30
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 30);
                    yield "\" />
            ";
                    // line 31
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 31);
                    yield "</label>
          ";
                }
                // line 33
                yield "          ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["image"], "type", [], "any", false, false, false, 33) == "image")) {
                    // line 34
                    yield "          <a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "href", [], "any", false, false, false, 34);
                    yield "\" class=\"thumbnail\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 34);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 34);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 34);
                    yield "\" /></a>
          <label>
            <input type=\"checkbox\" name=\"path[]\" value=\"";
                    // line 36
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 36);
                    yield "\" />
            ";
                    // line 37
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 37);
                    yield "</label>
          ";
                }
                // line 39
                yield "        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "      </div>
      <br/>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "    </div>
    <div class=\"modal-footer\">";
        // line 45
        yield ($context["pagination"] ?? null);
        yield "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
";
        // line 49
        if ((($tmp = ($context["target"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 50
            yield "\$('a.thumbnail').on('click', function(e) {
\te.preventDefault();

\t";
            // line 53
            if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 54
                yield "\t\$('#";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumb"] ?? null), "js");
                yield "').find('img').attr('src', \$(this).find('img').attr('src'));
\t";
            }
            // line 56
            yield "
\t\$('#";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "js");
            yield "').val(\$(this).parent().find('input').val());

\t\$('#modal-image').modal('hide');
});
";
        }
        // line 62
        yield "
\$('a.directory').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('.pagination a').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-parent').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('#button-refresh').on('click', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href'));
});

\$('input[name=\\'search\\']').on('keydown', function(e) {
\tif (e.which == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('#button-search').on('click', function(e) {
\tvar url = 'index.php?route=common/filemanager&user_token=";
        // line 94
        yield ($context["user_token"] ?? null);
        yield "&directory=";
        yield ($context["directory"] ?? null);
        yield "';

\tvar filter_name = \$('input[name=\\'search\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\t";
        // line 102
        if ((($tmp = ($context["thumb"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "\turl += '&thumb=' + '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["thumb"] ?? null), "js");
            yield "';
\t";
        }
        // line 105
        yield "
\t";
        // line 106
        if ((($tmp = ($context["target"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 107
            yield "\turl += '&target=' + '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["target"] ?? null), "js");
            yield "';
\t";
        }
        // line 109
        yield "
\t\$('#modal-image').load(url);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=common/filemanager/upload&user_token=";
        // line 130
        yield ($context["user_token"] ?? null);
        yield "&directory=";
        yield ($context["directory"] ?? null);
        yield "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\talert(json['error']);
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#button-folder').popover({
\thtml: true,
\tsanitize: false,
\tplacement: 'bottom',
\ttrigger: 'click',
\ttitle: '";
        // line 169
        yield ($context["entry_folder"] ?? null);
        yield "',
\tcontent: function() {
\t\thtml  = '<div class=\"input-group\">';
\t\thtml += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 172
        yield ($context["entry_folder"] ?? null);
        yield "\" class=\"form-control\">';
\t\thtml += '  <span class=\"input-group-btn\"><button type=\"button\" title=\"";
        // line 173
        yield ($context["button_folder"] ?? null);
        yield "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></span>';
\t\thtml += '</div>';

\t\treturn html;
\t}
});

\$('#button-folder').on('shown.bs.popover', function() {
\t\$('#button-create').on('click', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/folder&user_token=";
        // line 183
        yield ($context["user_token"] ?? null);
        yield "&directory=";
        yield ($context["directory"] ?? null);
        yield "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: 'folder=' + encodeURIComponent(\$('input[name=\\'folder\\']').val()),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-create').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-create').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t});
});

\$('#modal-image #button-delete').on('click', function(e) {
\tif (confirm('";
        // line 212
        yield ($context["text_confirm"] ?? null);
        yield "')) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/delete&user_token=";
        // line 214
        yield ($context["user_token"] ?? null);
        yield "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "common/filemanager.twig";
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
        return array (  396 => 214,  391 => 212,  357 => 183,  344 => 173,  340 => 172,  334 => 169,  290 => 130,  267 => 109,  261 => 107,  259 => 106,  256 => 105,  250 => 103,  248 => 102,  235 => 94,  201 => 62,  193 => 57,  190 => 56,  184 => 54,  182 => 53,  177 => 50,  175 => 49,  168 => 45,  165 => 44,  157 => 41,  150 => 39,  145 => 37,  141 => 36,  129 => 34,  126 => 33,  121 => 31,  117 => 30,  111 => 28,  109 => 27,  106 => 26,  102 => 25,  99 => 24,  95 => 23,  87 => 18,  80 => 16,  73 => 12,  69 => 11,  65 => 10,  55 => 9,  48 => 5,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "common/filemanager.twig", "");
    }
}
