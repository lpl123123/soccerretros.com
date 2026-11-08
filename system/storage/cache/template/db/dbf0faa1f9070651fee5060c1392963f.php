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

/* catalog/review_list.twig */
class __TwigTemplate_b3817c41fa2920cc32f70035be6545ac extends Template
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
        yield "\" onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        yield ($context["add"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_add"] ?? null);
        yield "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 8
        yield ($context["button_delete"] ?? null);
        yield "\" class=\"btn btn-danger\" onclick=\"confirm('";
        yield ($context["text_confirm"] ?? null);
        yield "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 10
        yield ($context["heading_title"] ?? null);
        yield "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
            yield "        <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 13);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
            yield "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 18
        if ((($tmp = ($context["error_warning"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            yield ($context["error_warning"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        yield "    ";
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        yield "    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 32
        yield ($context["text_filter"] ?? null);
        yield "</h3>
          </div>
          <div  class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 36
        yield ($context["entry_product"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 37
        yield ($context["filter_product"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_product"] ?? null);
        yield "\" id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">";
        // line 40
        yield ($context["entry_author"] ?? null);
        yield "</label>
              <input type=\"text\" name=\"filter_author\" value=\"";
        // line 41
        yield ($context["filter_author"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_author"] ?? null);
        yield "\" id=\"input-author\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 44
        yield ($context["entry_status"] ?? null);
        yield "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>                           
                  ";
        // line 47
        if ((($context["filter_status"] ?? null) == "1")) {
            yield "                  
                    <option value=\"1\" selected=\"selected\">";
            // line 48
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                  ";
        } else {
            // line 50
            yield "                    <option value=\"1\">";
            yield ($context["text_enabled"] ?? null);
            yield "</option>
                  ";
        }
        // line 52
        yield "                  ";
        if ((($context["filter_status"] ?? null) == "0")) {
            // line 53
            yield "                    <option value=\"0\" selected=\"selected\">";
            yield ($context["text_disabled"] ?? null);
            yield "</option>
                  ";
        } else {
            // line 55
            yield "                    <option value=\"0\">";
            yield ($context["text_disabled"] ?? null);
            yield "</option>              
                  ";
        }
        // line 56
        yield "                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 60
        yield ($context["entry_date_added"] ?? null);
        yield "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 62
        yield ($context["filter_date_added"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_date_added"] ?? null);
        yield "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 68
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
        // line 76
        yield ($context["text_list"] ?? null);
        yield "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 79
        yield ($context["delete"] ?? null);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 85
        if ((($context["sort"] ?? null) == "pd.name")) {
            yield " <a href=\"";
            yield ($context["sort_product"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_product"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_product"] ?? null);
            yield "\">";
            yield ($context["column_product"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 86
        if ((($context["sort"] ?? null) == "r.author")) {
            yield " <a href=\"";
            yield ($context["sort_author"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_author"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_author"] ?? null);
            yield "\">";
            yield ($context["column_author"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 87
        if ((($context["sort"] ?? null) == "r.rating")) {
            yield " <a href=\"";
            yield ($context["sort_rating"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_rating"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_rating"] ?? null);
            yield "\">";
            yield ($context["column_rating"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-left\">";
        // line 88
        if ((($context["sort"] ?? null) == "r.status")) {
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
                      <td class=\"text-left\">";
        // line 89
        if ((($context["sort"] ?? null) == "r.date_added")) {
            yield " <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\" class=\"";
            yield Twig\Extension\CoreExtension::lower($this->env->getCharset(), ($context["order"] ?? null));
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a> ";
        } else {
            yield " <a href=\"";
            yield ($context["sort_date_added"] ?? null);
            yield "\">";
            yield ($context["column_date_added"] ?? null);
            yield "</a> ";
        }
        yield "</td>
                      <td class=\"text-right\">";
        // line 90
        yield ($context["column_action"] ?? null);
        yield "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 95
        if ((($tmp = ($context["reviews"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 96
            yield "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 97
                yield "                  <tr>
                    <td class=\"text-center\">";
                // line 98
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 98), ($context["selected"] ?? null))) {
                    // line 99
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 99);
                    yield "\" checked=\"checked\" />
                      ";
                } else {
                    // line 101
                    yield "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "review_id", [], "any", false, false, false, 101);
                    yield "\" />
                      ";
                }
                // line 102
                yield "</td>
                    <td class=\"text-left\">";
                // line 103
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "name", [], "any", false, false, false, 103);
                yield "</td>
                    <td class=\"text-left\">";
                // line 104
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 104);
                yield "</td>
                    <td class=\"text-right\">";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 105);
                yield "</td>
                    <td class=\"text-left\">";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "status", [], "any", false, false, false, 106);
                yield "</td>
                    <td class=\"text-left\">";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 107);
                yield "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 108
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "edit", [], "any", false, false, false, 108);
                yield "\" data-toggle=\"tooltip\" title=\"";
                yield ($context["button_edit"] ?? null);
                yield "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            yield "                  ";
        } else {
            // line 112
            yield "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 113
            yield ($context["text_no_results"] ?? null);
            yield "</td>
                  </tr>
                  ";
        }
        // line 116
        yield "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 122
        yield ($context["pagination"] ?? null);
        yield "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 123
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
\turl = 'index.php?route=catalog/review&user_token=";
        // line 132
        yield ($context["user_token"] ?? null);
        yield "';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 163
        yield ($context["datepicker"] ?? null);
        yield "',
\tpickTime: false
});
//--></script></div>
";
        // line 167
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/review_list.twig";
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
        return array (  468 => 167,  461 => 163,  427 => 132,  415 => 123,  411 => 122,  403 => 116,  397 => 113,  394 => 112,  391 => 111,  380 => 108,  376 => 107,  372 => 106,  368 => 105,  364 => 104,  360 => 103,  357 => 102,  351 => 101,  345 => 99,  343 => 98,  340 => 97,  335 => 96,  333 => 95,  325 => 90,  307 => 89,  289 => 88,  271 => 87,  253 => 86,  235 => 85,  226 => 79,  220 => 76,  209 => 68,  198 => 62,  193 => 60,  187 => 56,  181 => 55,  175 => 53,  172 => 52,  166 => 50,  161 => 48,  157 => 47,  151 => 44,  143 => 41,  139 => 40,  131 => 37,  127 => 36,  120 => 32,  114 => 28,  106 => 24,  103 => 23,  95 => 19,  93 => 18,  88 => 15,  77 => 13,  73 => 12,  68 => 10,  61 => 8,  55 => 7,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "catalog/review_list.twig", "");
    }
}
