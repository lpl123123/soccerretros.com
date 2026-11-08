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

/* catalog/product_list.twig */
class __TwigTemplate_c3d1d39cfa69803d777b7673cf5c776d extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        yield ($context["button_filter"] ?? null);
        yield "\" onclick=\"\$('#filter-product').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-product\" formaction=\"";
        // line 8
        yield ($context["copy"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_copy"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-copy\"></i></button>
        <button type=\"button\" form=\"form-product\" formaction=\"";
        // line 9
        yield ($context["delete"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-product').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 14);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 19
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        yield "    <div class=\"row\">
      <div id=\"filter-product\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 33
        yield ($context["text_filter"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-name\">";
        // line 37
        yield ($context["entry_name"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_name\" value=\"";
        // line 38
        yield ($context["filter_name"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_name"] ?? null);
        yield "\" id=\"input-name\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-model\">";
        // line 41
        yield ($context["entry_model"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_model\" value=\"";
        // line 42
        yield ($context["filter_model"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_model"] ?? null);
        yield "\" id=\"input-model\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-price\">";
        // line 45
        yield ($context["entry_price"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_price\" value=\"";
        // line 46
        yield ($context["filter_price"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_price"] ?? null);
        yield "\" id=\"input-price\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 49
        yield ($context["entry_quantity"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_quantity\" value=\"";
        // line 50
        yield ($context["filter_quantity"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_quantity"] ?? null);
        yield "\" id=\"input-quantity\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 53
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                
                
                  
                

                  ";
        // line 62
        if ((($context["filter_status"] ?? null) == "1")) {
            // line 63
            yield "
                
                
                  
                
                
                <option value=\"1\" selected=\"selected\">";
            // line 69
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 77
            yield "
                
                
                  
                
                
                <option value=\"1\">";
            // line 83
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                
                
                
                  
                

                  ";
        }
        // line 91
        yield "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 92
            yield "
                
                
                  
                
                
                <option value=\"0\" selected=\"selected\">";
            // line 98
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                
                
                
                  
                

                  ";
        } else {
            // line 106
            yield "
                
                
                  
                
                
                <option value=\"0\">";
            // line 112
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                
                
                
                  
                

                  ";
        }
        // line 120
        yield "

              
              
                
              
              
              </select>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 130
        yield ($context["button_filter"] ?? null);
        yield "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 138
        yield ($context["text_list"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 141
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-center\">";
        // line 147
        yield ($context["column_image"] ?? null);
        yield "</td>
                      <td class=\"text-left\">";
        // line 148
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_name"] ?? null);
            yield "\">";
            yield ($context["column_name"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 149
        if ((($context["sort"] ?? null) == "p.model")) {
            yield " <a href=\"";
            yield ($context["sort_model"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_model"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_model"] ?? null);
            yield "\">";
            yield ($context["column_model"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 150
        if ((($context["sort"] ?? null) == "p.price")) {
            yield " <a href=\"";
            yield ($context["sort_price"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_price"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_price"] ?? null);
            yield "\">";
            yield ($context["column_price"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 151
        if ((($context["sort"] ?? null) == "p.quantity")) {
            yield " <a href=\"";
            yield ($context["sort_quantity"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_quantity"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_quantity"] ?? null);
            yield "\">";
            yield ($context["column_quantity"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 152
        if ((($context["sort"] ?? null) == "p.status")) {
            yield " <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_status"] ?? null);
            yield "\">";
            yield ($context["column_status"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 153
        yield ($context["column_action"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 158
        if ((($tmp = ($context["products"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 159
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 160
                yield "                  <tr>
                    <td class=\"text-center\">";
                // line 161
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 161), ($context["selected"] ?? null))) {
                    // line 162
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 162);
                    yield "\" checked=\"checked\" />
                      ";
                } else {
                    // line 164
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 164);
                    yield "\" />
                      ";
                }
                // line 165
                yield "</td>
                    <td class=\"text-center\">";
                // line 166
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 166)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 166);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 166);
                    yield "\" class=\"img-thumbnail\" /> ";
                } else {
                    yield " <span class=\"img-thumbnail list\"><i class=\"fa fa-camera fa-2x\"></i></span> ";
                }
                yield "</td>
                    <td class=\"text-left\">";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 167);
                yield "</td>
                    <td class=\"text-left\">";
                // line 168
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 168);
                yield "</td>
                    <td class=\"text-right\">";
                // line 169
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " <span style=\"text-decoration: line-through;\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 169);
                    yield "</span><br/>
                      <div class=\"text-danger\">";
                    // line 170
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 170);
                    yield "</div>
                      ";
                } else {
                    // line 172
                    yield "                      ";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 172);
                    yield "
                      ";
                }
                // line 173
                yield "</td>
                    <td class=\"text-right\">";
                // line 174
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174) <= 0)) {
                    yield " <span class=\"label label-warning\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174);
                    yield "</span> ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174) <= 5)) {
                    yield " <span class=\"label label-danger\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174);
                    yield "</span> ";
                } else {
                    yield " <span class=\"label label-success\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174);
                    yield "</span> ";
                }
                yield "</td>
                    <td class=\"text-left\">";
                // line 175
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "status", [], "any", false, false, false, 175);
                yield "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 176
                yield CoreExtension::getAttribute($this->env, $this->source, $context["product"], "edit", [], "any", false, false, false, 176);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['product'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            yield "                  ";
        } else {
            // line 180
            yield "                  <tr>
                    <td class=\"text-center\" colspan=\"8\">";
            // line 181
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                  </tr>
                  ";
        }
        // line 184
        yield "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 190
        yield ($context["pagination"] ?? null);
        yield "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 191
        yield ($context["results"] ?? null);
        yield "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

\tvar filter_model = \$('input[name=\\'filter_model\\']').val();

\tif (filter_model) {
\t\turl += '&filter_model=' + encodeURIComponent(filter_model);
\t}

\tvar filter_price = \$('input[name=\\'filter_price\\']').val();

\tif (filter_price) {
\t\turl += '&filter_price=' + encodeURIComponent(filter_price);
\t}

\tvar filter_quantity = \$('input[name=\\'filter_quantity\\']').val();

\tif (filter_quantity) {
\t\turl += '&filter_quantity=' + encodeURIComponent(filter_quantity);
\t}

\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = 'index.php?route=catalog/product&user_token=";
        // line 232
        yield ($context["user_token"] ?? null);
        yield "' + url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
// IE and Edge fix!
\$('button[form=\\'form-product\\']').on('click', function(e) {
\t\$('#form-product').attr('action', \$(this).attr('formaction'));
});
  
\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 244
        yield ($context["user_token"] ?? null);
        yield "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_model\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 264
        yield ($context["user_token"] ?? null);
        yield "&filter_model=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['model'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_model\\']').val(item['label']);
\t}
});
//--></script></div>
";
        // line 281
        yield ($context["footer"] ?? null);
        yield " ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/product_list.twig";
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
        return array (  640 => 281,  620 => 264,  597 => 244,  582 => 232,  538 => 191,  534 => 190,  526 => 184,  520 => 181,  517 => 180,  514 => 179,  503 => 176,  499 => 175,  483 => 174,  480 => 173,  474 => 172,  469 => 170,  463 => 169,  459 => 168,  455 => 167,  443 => 166,  440 => 165,  434 => 164,  428 => 162,  426 => 161,  423 => 160,  418 => 159,  416 => 158,  408 => 153,  390 => 152,  372 => 151,  354 => 150,  336 => 149,  318 => 148,  314 => 147,  305 => 141,  299 => 138,  288 => 130,  276 => 120,  265 => 112,  257 => 106,  246 => 98,  238 => 92,  235 => 91,  224 => 83,  216 => 77,  205 => 69,  197 => 63,  195 => 62,  183 => 53,  175 => 50,  171 => 49,  163 => 46,  159 => 45,  151 => 42,  147 => 41,  139 => 38,  135 => 37,  128 => 33,  122 => 29,  114 => 25,  111 => 24,  103 => 20,  101 => 19,  96 => 16,  85 => 14,  81 => 13,  76 => 11,  67 => 9,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/product_list.twig", "");
    }
}
