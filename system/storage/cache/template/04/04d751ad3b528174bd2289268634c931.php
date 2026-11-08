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

/* tool/image_update.twig */
class __TwigTemplate_4ef7db643d49c9bc6143a42b35a10fd6 extends Template
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
      <h1>图片批量更新 (按 Model)</h1>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div id=\"upload-section\" class=\"text-center\" style=\"padding: 50px; border: 2px dashed #ccc; border-radius: 10px;\">
          <i class=\"fa fa-image fa-4x\" style=\"color: #3498db; margin-bottom: 20px;\"></i>
          <p>请上传 XLSX 文件。列 1: Model, 列 2: 图片地址 (逗号隔开)</p>
          <input type=\"file\" id=\"input-file\" class=\"hidden\" accept=\".xlsx\" />
          <button type=\"button\" class=\"btn btn-default btn-lg\" onclick=\"\$('#input-file').click();\">选择文件</button>
          <button type=\"button\" id=\"button-start\" class=\"btn btn-primary btn-lg\" style=\"margin-top: 10px; display: block; width: 100%;\">开始下载并更新图片</button>
        </div>

        <div id=\"progress-section\" style=\"display:none; margin-top:30px;\">
          <div class=\"progress\" style=\"height: 30px; border-radius: 15px;\">
            <div id=\"progress-bar\" class=\"progress-bar progress-bar-info progress-bar-striped active\" style=\"width: 0%; line-height: 30px; font-weight: bold;\">0%</div>
          </div>
          <div id=\"countdown-text\" class=\"text-center\" style=\"color: #e67e22; font-weight: bold; margin-bottom: 10px;\"></div>
          
          <div class=\"well\" id=\"log-container\" style=\"background: #222; color: #fff; font-family: monospace; height: 350px; overflow-y: scroll;\">
            <div id=\"log\"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
var totalRows = 0; var currentRow = 0; var filePath = ''; var waitTime = 5000;

\$('#button-start').on('click', function() {
    if (!\$('#input-file')[0].files[0]) { alert(\"请先选择文件\"); return; }
    var formData = new FormData();
    formData.append('file', \$('#input-file')[0].files[0]);
    
    \$.ajax({
        url: 'index.php?route=tool/image_update/upload&user_token=";
        // line 43
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'POST',
        data: formData,
        processData: false, contentType: false, dataType: 'json',
        beforeSend: function() { \$('#button-start').prop('disabled', true); },
        success: function(json) {
            if (json['error']) { alert(json['error']); \$('#button-start').prop('disabled', false); } 
            else {
                totalRows = json['total']; filePath = json['file_path'];
                \$('#upload-section').hide(); \$('#progress-section').show();
                processNextRow();
            }
        }
    });
});

function processNextRow() {
    if (currentRow >= totalRows) {
        \$('#progress-bar').removeClass('active').text('图片更新任务已完成！');
        \$('#countdown-text').html('<span class=\"text-success\">全部处理完毕。</span>');
        return;
    }

    var timeLeft = waitTime / 1000;
    var timer = setInterval(function() {
        \$('#countdown-text').html('<i class=\"fa fa-clock-o\"></i> 间隔等待中: ' + timeLeft + 's');
        timeLeft--;
        if (timeLeft < 0) { clearInterval(timer); executeUpdate(); }
    }, 1000);
}

function executeUpdate() {
    \$('#countdown-text').html('<i class=\"fa fa-spinner fa-spin\"></i> 正在抓取第 ' + (currentRow + 1) + ' 行图片...');
    \$.ajax({
        url: 'index.php?route=tool/image_update/process&user_token=";
        // line 77
        yield ($context["user_token"] ?? null);
        yield "',
        type: 'POST',
        data: { file_path: filePath, row_index: currentRow },
        dataType: 'json',
        success: function(json) {
            currentRow++;
            var percent = Math.round((currentRow / totalRows) * 100);
            \$('#progress-bar').css('width', percent + '%').text(percent + '%');
            
            var timeTag = '<span style=\"color: #888;\">[' + new Date().toLocaleTimeString() + ']</span> ';
            if (json['success']) {
                \$('#log').append('<div>' + timeTag + '<span style=\"color: #2ecc71;\">[成功]</span> ' + json['msg'] + '</div>');
            } else {
                // 这里处理未匹配到产品的情况，记录到输出
                \$('#log').append('<div>' + timeTag + '<span style=\"color: #e74c3c;\">[失败]</span> ' + json['error'] + '</div>');
            }
            
            \$(\"#log-container\").scrollTop(\$(\"#log-container\")[0].scrollHeight);
            processNextRow();
        }
    });
}
//--></script>
";
        // line 100
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tool/image_update.twig";
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
        return array (  151 => 100,  125 => 77,  88 => 43,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tool/image_update.twig", "");
    }
}
