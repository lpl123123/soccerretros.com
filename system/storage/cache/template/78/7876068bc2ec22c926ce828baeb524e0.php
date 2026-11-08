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

/* tool/my_import.twig */
class __TwigTemplate_c275290924fb9898701589138e2adcc6 extends Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"刷新页面\" class=\"btn btn-default\" onclick=\"location.reload();\"><i class=\"fa fa-refresh\"></i></button>
      </div>
      <h1><i class=\"fa fa-cloud-upload\"></i> 产品批量导入 (WebP优化版)</h1>
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
  
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\" style=\"border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);\">
      <div class=\"panel-heading\" style=\"background: #fcfcfc;\">
        <h3 class=\"panel-title\"><i class=\"fa fa-file-excel-o\"></i> 导入配置</h3>
      </div>
      <div class=\"panel-body\">
        
        <!-- 上传区域 -->
        <div id=\"upload-section\" class=\"text-center\" style=\"padding: 40px 20px;\">
            <div style=\"border: 2px dashed #ddd; padding: 30px; border-radius: 10px; background: #fafafa;\">
                <i class=\"fa fa-file-excel-o fa-4x\" style=\"color: #27ae60; margin-bottom: 15px;\"></i>
                <p style=\"font-size: 16px; color: #666;\">请选择包含产品数据的 .xlsx 文件</p>
                <input type=\"file\" id=\"input-file\" class=\"hidden\" accept=\".xlsx\" onchange=\"\$('#file-name').text(this.files[0].name);\" />
                <button type=\"button\" class=\"btn btn-default btn-lg\" onclick=\"\$('#input-file').click();\">选择文件</button>
                <div id=\"file-name\" style=\"margin-top: 10px; font-weight: bold; color: #333;\"></div>
                <br>
                <button type=\"button\" id=\"button-upload\" class=\"btn btn-primary btn-lg\" style=\"padding: 10px 40px; margin-top: 10px;\">
                    <i class=\"fa fa-play\"></i> 开始解析并导入
                </button>
            </div>
        </div>

        <!-- 进度条区域 -->
        <div id=\"progress-section\" style=\"display:none; padding: 20px;\">
            <div class=\"row\">
                <div class=\"col-sm-8 col-sm-offset-2\">
                    <div class=\"progress\" style=\"height: 30px; border-radius: 15px; margin-bottom: 10px; background: #ebebeb;\">
                        <div id=\"progress-bar\" class=\"progress-bar progress-bar-success progress-bar-striped active\" role=\"progressbar\" style=\"width: 0%; line-height: 30px; font-size: 14px; font-weight: bold;\">0%</div>
                    </div>
                    <div id=\"countdown-text\" class=\"text-center\" style=\"color: #e67e22; font-weight: bold; margin-bottom: 10px; height: 20px;\"></div>
                    <div id=\"progress-text\" class=\"text-center\" style=\"font-size: 16px; margin-bottom: 20px;\">正在初始化...</div>
                    
                    <div class=\"well\" style=\"background: #222; color: #0f0; font-family: 'Courier New', Courier, monospace; height: 300px; overflow-y: scroll; border-radius: 5px;\" id=\"log-container\">
                        <div id=\"log\"></div>
                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>

<script type=\"text/javascript\"><!--
var totalRows = 0;
var currentRow = 0;
var filePath = '';
var waitTime = 5000; // 5秒间隔

\$('#button-upload').on('click', function() {
    if (!\$('#input-file')[0].files[0]) {
        alert(\"请先选择文件！\");
        return;
    }

    var formData = new FormData();
    formData.append('file', \$('#input-file')[0].files[0]);

    \$.ajax({
        url: 'index.php?route=tool/my_import/upload&user_token=";
        // line 76
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        dataType: 'json',
        beforeSend: function() {
            \$('#button-upload').button('loading');
        },
        success: function(json) {
            if (json['error']) {
                alert(json['error']);
                \$('#button-upload').button('reset');
            } else {
                totalRows = json['total'];
                filePath = json['file_path'];
                \$('#upload-section').fadeOut(300, function() {
                    \$('#progress-section').fadeIn();
                    processNextRow();
                });
            }
        }
    });
});

function processNextRow() {
    if (currentRow >= totalRows) {
        \$('#progress-bar').removeClass('active').removeClass('progress-bar-striped');
        \$('#progress-text').html('<span class=\"text-success\" style=\"font-size:24px;\">🎉 导入全部完成！</span>');
        \$('#countdown-text').html('');
        return;
    }

    // 5秒倒计时逻辑
    var timeLeft = waitTime / 1000;
    var timer = setInterval(function() {
        \$('#countdown-text').html('<i class=\"fa fa-clock-o\"></i> 等待中... ' + timeLeft + 's');
        timeLeft--;
        if (timeLeft < 0) {
            clearInterval(timer);
            executeImport();
        }
    }, 1000);
}

function executeImport() {
    \$('#countdown-text').html('<i class=\"fa fa-spinner fa-spin\"></i> 正在处理第 ' + (currentRow + 1) + ' 条数据...');
    
    \$.ajax({
        url: 'index.php?route=tool/my_import/importRow&user_token=";
        // line 125
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'POST',
        data: { file_path: filePath, row_index: currentRow },
        dataType: 'json',
        success: function(json) {
            currentRow++;
            var percent = Math.round((currentRow / totalRows) * 100);
            \$('#progress-bar').css('width', percent + '%').text(percent + '%');
            \$('#progress-text').html('已处理: ' + currentRow + ' / ' + totalRows);
            
            if (json['success']) {
                \$('#log').append('<div><span style=\"color: #888;\">['+new Date().toLocaleTimeString()+']</span> ' + json['msg'] + ' <span style=\"color:#0f0;\">[SUCCESS]</span></div>');
            } else {
                \$('#log').append('<div style=\"color:#f00;\">第 ' + currentRow + ' 条失败: ' + (json['error'] || '未知错误') + '</div>');
            }
            
            \$(\"#log-container\").scrollTop(\$(\"#log-container\")[0].scrollHeight);
            
            // 处理下一条
            processNextRow();
        },
        error: function() {
            \$('#log').append('<div style=\"color:#f00;\">网络抖动，3秒后重试...</div>');
            setTimeout(executeImport, 3000);
        }
    });
}
//--></script>
</div>
";
        // line 154
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tool/my_import.twig";
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
        return array (  219 => 154,  187 => 125,  135 => 76,  70 => 13,  59 => 11,  55 => 10,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tool/my_import.twig", "");
    }
}
