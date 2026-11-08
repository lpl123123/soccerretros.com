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

/* extension/module/bulk_product_manager.twig */
class __TwigTemplate_035b4073c0204aaec430ff6f24e8789f extends Template
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
<div id=\"content\" class=\"bpm-wrap\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <a href=\"";
        // line 6
        yield ($context["cancel"] ?? null);
        yield "\" data-toggle=\"tooltip\" title=\"";
        yield ($context["button_cancel"] ?? null);
        yield "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
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

  <div class=\"container-fluid\">
    <p class=\"bpm-desc\">";
        // line 18
        yield ($context["text_description"] ?? null);
        yield "</p>

    <div class=\"panel panel-default bpm-card\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 21
        yield ($context["text_filter"] ?? null);
        yield "</h3></div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"bpm_categories\">";
        // line 25
        yield ($context["text_categories"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <select id=\"bpm_categories\" name=\"category_ids[]\" multiple size=\"10\" class=\"form-control bpm-select-multi\">
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            yield "                  <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 29);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 29);
            yield " (";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "product_count", [], "any", false, false, false, 29);
            yield ")</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "              </select>
              <p class=\"help-block\">";
        // line 32
        yield ($context["text_categories_help"] ?? null);
        yield "</p>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 36
        yield ($context["text_date_range"] ?? null);
        yield "</label>
            <div class=\"col-sm-10\">
              <label>";
        // line 38
        yield ($context["text_date_from"] ?? null);
        yield "
                <input type=\"date\" id=\"bpm_date_from\" class=\"form-control bpm-date\" style=\"display:inline-block;width:auto;\" />
              </label>
              &nbsp;
              <label>";
        // line 42
        yield ($context["text_date_to"] ?? null);
        yield "
                <input type=\"date\" id=\"bpm_date_to\" class=\"form-control bpm-date\" style=\"display:inline-block;width:auto;\" />
              </label>
              <p class=\"help-block\">";
        // line 45
        yield ($context["text_date_help"] ?? null);
        yield "</p>
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"button\" class=\"btn btn-default\" id=\"bpm_preview_btn\">";
        // line 50
        yield ($context["button_preview"] ?? null);
        yield "</button>
              <span id=\"bpm_preview_result\" class=\"bpm-preview-result\"></span>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class=\"panel panel-default bpm-card\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 59
        yield ($context["text_outofstock"] ?? null);
        yield "</h3></div>
      <div class=\"panel-body\">
        <p>";
        // line 61
        yield ($context["text_outofstock_help"] ?? null);
        yield "</p>
        <button type=\"button\" class=\"btn btn-primary\" id=\"bpm_stock_btn\" disabled>";
        // line 62
        yield ($context["button_outofstock"] ?? null);
        yield "</button>
      </div>
    </div>

    <div class=\"panel panel-default bpm-card\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 67
        yield ($context["text_instock_sku"] ?? null);
        yield "</h3></div>
      <div class=\"panel-body\">
        <p class=\"help-block\">";
        // line 69
        yield ($context["text_instock_help"] ?? null);
        yield "</p>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"bpm_sku_file\">";
        // line 71
        yield ($context["text_sku_file"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"file\" id=\"bpm_sku_file\" accept=\".xlsx,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" />
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"bpm_instock_btn\">";
        // line 78
        yield ($context["button_instock"] ?? null);
        yield "</button>
            <span id=\"bpm_sku_file_result\" class=\"bpm-preview-result\"></span>
          </div>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default bpm-card\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 86
        yield ($context["text_sort_sku"] ?? null);
        yield "</h3></div>
      <div class=\"panel-body\">
        <p class=\"help-block\">";
        // line 88
        yield ($context["text_sort_help"] ?? null);
        yield "</p>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"bpm_sort_file\">";
        // line 90
        yield ($context["text_sku_file"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"file\" id=\"bpm_sort_file\" accept=\".xlsx,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet\" />
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-sm-2 control-label\" for=\"bpm_sort_order_value\">";
        // line 96
        yield ($context["text_sort_order"] ?? null);
        yield "</label>
          <div class=\"col-sm-10\">
            <input type=\"number\" id=\"bpm_sort_order_value\" class=\"form-control\" style=\"width:120px;\" step=\"1\" value=\"0\" />
          </div>
        </div>
        <div class=\"form-group\">
          <div class=\"col-sm-offset-2 col-sm-10\">
            <button type=\"button\" class=\"btn btn-primary\" id=\"bpm_sort_btn\">";
        // line 103
        yield ($context["button_sort"] ?? null);
        yield "</button>
            <span id=\"bpm_sort_result\" class=\"bpm-preview-result\"></span>
          </div>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default bpm-card\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 111
        yield ($context["text_prices"] ?? null);
        yield "</h3></div>
      <div class=\"panel-body\">
        <p class=\"help-block\">";
        // line 113
        yield ($context["text_prices_help"] ?? null);
        yield "</p>
        <table class=\"table table-bordered table-striped bpm-price-table\">
          <thead>
            <tr>
              <th>";
        // line 117
        yield ($context["text_size"] ?? null);
        yield "</th>
              <th>";
        // line 118
        yield ($context["text_regular"] ?? null);
        yield "</th>
              <th>";
        // line 119
        yield ($context["text_special"] ?? null);
        yield "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["size_labels"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["label"]) {
            // line 124
            yield "              <tr>
                <td><strong>";
            // line 125
            yield $context["label"];
            yield "</strong></td>
                <td>
                  <input type=\"number\" min=\"0\" step=\"0.01\" class=\"form-control bpm-price-input\" data-type=\"regular\" data-size=\"";
            // line 127
            yield $context["key"];
            yield "\" placeholder=\"";
            yield ($context["text_placeholder"] ?? null);
            yield "\" />
                </td>
                <td>
                  <input type=\"number\" min=\"0\" step=\"0.01\" class=\"form-control bpm-price-input\" data-type=\"sale\" data-size=\"";
            // line 130
            yield $context["key"];
            yield "\" placeholder=\"";
            yield ($context["text_placeholder"] ?? null);
            yield "\" />
                </td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['label'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "          </tbody>
        </table>
        <p class=\"bpm-price-actions\">
          <button type=\"button\" class=\"btn btn-default\" id=\"bpm_fill_demo\">";
        // line 137
        yield ($context["button_fill_demo"] ?? null);
        yield "</button>
          <button type=\"button\" class=\"btn btn-default\" id=\"bpm_clear_prices\">";
        // line 138
        yield ($context["button_clear_prices"] ?? null);
        yield "</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"bpm_price_btn\" disabled>";
        // line 139
        yield ($context["button_prices"] ?? null);
        yield "</button>
        </p>
      </div>
    </div>

    <div class=\"panel panel-default bpm-card bpm-progress-card\" id=\"bpm_progress_card\" style=\"display:none;\">
      <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 145
        yield ($context["text_progress"] ?? null);
        yield "</h3></div>
      <div class=\"panel-body\">
        <div class=\"bpm-progress-bar-bg\">
          <div class=\"bpm-progress-bar\" id=\"bpm_progress_bar\"></div>
        </div>
        <div class=\"bpm-stats\">
          <div class=\"bpm-stat\">
            <span class=\"bpm-stat-label\">";
        // line 152
        yield ($context["text_stat_total"] ?? null);
        yield "</span>
            <span class=\"bpm-stat-num\" id=\"bpm_stat_total\">0</span>
          </div>
          <div class=\"bpm-stat\">
            <span class=\"bpm-stat-label\">";
        // line 156
        yield ($context["text_stat_ok"] ?? null);
        yield "</span>
            <span class=\"bpm-stat-num bpm-ok\" id=\"bpm_stat_ok\">0</span>
          </div>
          <div class=\"bpm-stat\">
            <span class=\"bpm-stat-label\">";
        // line 160
        yield ($context["text_stat_fail"] ?? null);
        yield "</span>
            <span class=\"bpm-stat-num bpm-fail\" id=\"bpm_stat_fail\">0</span>
          </div>
          <div class=\"bpm-stat\">
            <span class=\"bpm-stat-label\">";
        // line 164
        yield ($context["text_stat_pct"] ?? null);
        yield "</span>
            <span class=\"bpm-stat-num\" id=\"bpm_stat_pct\">0%</span>
          </div>
        </div>
        <div class=\"bpm-console\" id=\"bpm_console\"></div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
window.bpmAdmin = ";
        // line 174
        yield ($context["bpm_admin_json"] ?? null);
        yield ";
</script>
<script type=\"text/javascript\" src=\"view/javascript/bulk_product_manager.js?v=1.0.1\"></script>
";
        // line 177
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
        return "extension/module/bulk_product_manager.twig";
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
        return array (  388 => 177,  382 => 174,  369 => 164,  362 => 160,  355 => 156,  348 => 152,  338 => 145,  329 => 139,  325 => 138,  321 => 137,  316 => 134,  304 => 130,  296 => 127,  291 => 125,  288 => 124,  284 => 123,  277 => 119,  273 => 118,  269 => 117,  262 => 113,  257 => 111,  246 => 103,  236 => 96,  227 => 90,  222 => 88,  217 => 86,  206 => 78,  196 => 71,  191 => 69,  186 => 67,  178 => 62,  174 => 61,  169 => 59,  157 => 50,  149 => 45,  143 => 42,  136 => 38,  131 => 36,  124 => 32,  121 => 31,  108 => 29,  104 => 28,  98 => 25,  91 => 21,  85 => 18,  78 => 13,  67 => 11,  63 => 10,  58 => 8,  51 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "extension/module/bulk_product_manager.twig", "");
    }
}
