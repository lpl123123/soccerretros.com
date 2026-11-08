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

/* tool/gemini_blog.twig */
class __TwigTemplate_244f44d736dee89ed16740ba2ecd666b extends Template
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
        <button type=\"button\" id=\"button-run-all\" class=\"btn btn-warning\"><i class=\"fa fa-play-circle\"></i> 执行所有到期任务</button>
        <button type=\"button\" onclick=\"location.reload();\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></button>
      </div>
      <h1>Gemini AI 博客助手</h1>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div id=\"batch-progress\" style=\"display:none; margin-bottom:20px;\">
        <div class=\"progress\" style=\"height:30px; border-radius:15px;\">
            <div id=\"batch-progress-bar\" class=\"progress-bar progress-bar-success progress-bar-striped active\" style=\"width:0%; line-height:30px; font-weight:bold;\">0%</div>
        </div>
        <div class=\"text-center\" id=\"batch-status-text\">正在准备任务...</div>
    </div>

    ";
        // line 20
        if ((($tmp = ($context["success"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            yield ($context["success"] ?? null);
            yield "</div>";
        }
        // line 21
        yield "
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-list\" data-toggle=\"tab\">任务队列</a></li>
          <li><a href=\"#tab-add\" data-toggle=\"tab\">创建任务</a></li>
          <li><a href=\"#tab-prompt\" data-toggle=\"tab\">模板管理</a></li>
        </ul>
        <div class=\"tab-content\">
          <div class=\"tab-pane active\" id=\"tab-list\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead><tr><th>关键词</th><th>模板</th><th>时间</th><th>状态</th><th class=\"text-right\">操作</th></tr></thead>
                <tbody id=\"task-table-body\">
                  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 36
            yield "                  <tr id=\"task-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "task_id", [], "any", false, false, false, 36);
            yield "\" data-id=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "task_id", [], "any", false, false, false, 36);
            yield "\" data-status=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 36);
            yield "\">
                    <td>";
            // line 37
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "keywords", [], "any", false, false, false, 37);
            yield "</td><td>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "prompt_name", [], "any", false, false, false, 37);
            yield "</td><td>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "schedule_time", [], "any", false, false, false, 37);
            yield "</td>
                    <td class=\"task-status\">
                      ";
            // line 39
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 39) == 0)) {
                yield "<span class=\"label label-warning\">待处理</span>";
            }
            // line 40
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 40) == 1)) {
                yield "<span class=\"label label-primary\"><i class=\"fa fa-spinner fa-spin\"></i> 处理中</span>";
            }
            // line 41
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 41) == 2)) {
                yield "<span class=\"label label-success\">已发布</span>";
            }
            // line 42
            yield "                      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 42) == 3)) {
                yield "<span class=\"label label-danger\" title=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "error_log", [], "any", false, false, false, 42);
                yield "\">失败</span>";
            }
            // line 43
            yield "                    </td>
                    <td class=\"text-right\">
                      ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["task"], "status", [], "any", false, false, false, 45) != 2)) {
                yield "<button type=\"button\" onclick=\"runTask('";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "task_id", [], "any", false, false, false, 45);
                yield "');\" class=\"btn btn-success btn-xs btn-execute\"><i class=\"fa fa-play\"></i></button>";
            }
            // line 46
            yield "                      <button type=\"button\" onclick=\"editTask('";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "task_id", [], "any", false, false, false, 46);
            yield "');\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button>
                      <a href=\"index.php?route=tool/gemini_blog&user_token=";
            // line 47
            yield ($context["user_token"] ?? null);
            yield "&delete_task=";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["task"], "task_id", [], "any", false, false, false, 47);
            yield "\" class=\"btn btn-danger btn-xs\" onclick=\"return confirm('删除？');\"><i class=\"fa fa-trash-o\"></i></a>
                    </td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['task'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "                </tbody>
              </table>
            </div>
          </div>
          <!-- 其他选项卡保持原来的 HTML ... -->
          <div class=\"tab-pane\" id=\"tab-add\">
            <form action=\"\" method=\"post\" class=\"form-horizontal\">
              <input type=\"hidden\" name=\"action\" value=\"add_task\">
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">关键词</label><div class=\"col-sm-10\"><input type=\"text\" name=\"keywords\" class=\"form-control\" required /></div></div>
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">模板</label><div class=\"col-sm-10\"><select name=\"prompt_id\" class=\"form-control\">";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["prompts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prompt"]) {
            yield "<option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["prompt"], "prompt_id", [], "any", false, false, false, 60);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["prompt"], "title", [], "any", false, false, false, 60);
            yield "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prompt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</select></div></div>
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">图片链接</label><div class=\"col-sm-10\"><textarea name=\"image_urls\" rows=\"3\" class=\"form-control\"></textarea></div></div>
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">插入内链</label><div class=\"col-sm-10\"><textarea name=\"target_links\" rows=\"3\" class=\"form-control\"></textarea></div></div>
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">发布时间</label><div class=\"col-sm-3\"><div class=\"input-group datetime\"><input type=\"text\" name=\"schedule_time\" value=\"";
        // line 63
        yield $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d H:i");
        yield "\" class=\"form-control\" data-date-format=\"YYYY-MM-DD HH:mm\" /><span class=\"input-group-btn\"><button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button></span></div></div></div>
              <div class=\"text-right\"><button type=\"submit\" class=\"btn btn-primary\">提交任务</button></div>
            </form>
          </div>
          <div class=\"tab-pane\" id=\"tab-prompt\">
            <form action=\"\" method=\"post\" class=\"form-horizontal well\">
              <input type=\"hidden\" name=\"action\" value=\"save_prompt\">
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">模板标题</label><div class=\"col-sm-10\"><input type=\"text\" name=\"title\" class=\"form-control\" required /></div></div>
              <div class=\"form-group\"><label class=\"col-sm-2 control-label\">Prompt内容</label><div class=\"col-sm-10\"><textarea name=\"content\" rows=\"5\" class=\"form-control\" required></textarea></div></div>
              <div class=\"text-right\"><button type=\"submit\" class=\"btn btn-success\">保存模板</button></div>
            </form>
            <table class=\"table table-bordered\">
                <tbody>";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["prompts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["prompt"]) {
            yield "<tr><td>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["prompt"], "title", [], "any", false, false, false, 75);
            yield "</td><td class=\"text-right\"><button type=\"button\" onclick=\"editPrompt('";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["prompt"], "prompt_id", [], "any", false, false, false, 75);
            yield "');\" class=\"btn btn-primary btn-xs\"><i class=\"fa fa-pencil\"></i></button> <a href=\"index.php?route=tool/gemini_blog&user_token=";
            yield ($context["user_token"] ?? null);
            yield "&delete_prompt=";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["prompt"], "prompt_id", [], "any", false, false, false, 75);
            yield "\" class=\"btn btn-danger btn-xs\"><i class=\"fa fa-trash-o\"></i></a></td></tr>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['prompt'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "</tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal 结构 -->
<div class=\"modal fade\" id=\"modal-task-edit\" tabindex=\"-1\"><div class=\"modal-dialog\"><div class=\"modal-content\"><form action=\"\" method=\"post\"><div class=\"modal-header\"><h4 class=\"modal-title\">编辑任务</h4></div><div class=\"modal-body\"><input type=\"hidden\" name=\"action\" value=\"edit_task\"><input type=\"hidden\" name=\"task_id\" id=\"edit-task-id\"><div class=\"form-group\"><label>关键词</label><input type=\"text\" name=\"keywords\" id=\"edit-task-keywords\" class=\"form-control\"></div><div class=\"form-group\"><label>图片链接</label><textarea name=\"image_urls\" id=\"edit-task-images\" rows=\"3\" class=\"form-control\"></textarea></div><div class=\"form-group\"><label>时间</label><input type=\"text\" name=\"schedule_time\" id=\"edit-task-time\" class=\"form-control\"></div></div><div class=\"modal-footer\"><button type=\"submit\" class=\"btn btn-primary\">保存</button></div></form></div></div></div>
<div class=\"modal fade\" id=\"modal-prompt-edit\" tabindex=\"-1\"><div class=\"modal-dialog\"><div class=\"modal-content\"><form action=\"\" method=\"post\"><div class=\"modal-header\"><h4 class=\"modal-title\">编辑模板</h4></div><div class=\"modal-body\"><input type=\"hidden\" name=\"action\" value=\"edit_prompt\"><input type=\"hidden\" name=\"prompt_id\" id=\"edit-prompt-id\"><div class=\"form-group\"><label>标题</label><input type=\"text\" name=\"title\" id=\"edit-prompt-title\" class=\"form-control\"></div><div class=\"form-group\"><label>内容</label><textarea name=\"content\" id=\"edit-prompt-content\" rows=\"10\" class=\"form-control\"></textarea></div></div><div class=\"modal-footer\"><button type=\"submit\" class=\"btn btn-primary\">更新</button></div></form></div></div></div>

<script type=\"text/javascript\"><!--
\$('.datetime').datetimepicker({ language: 'zh-cn', pickDate: true, pickTime: true });

function editPrompt(id) { \$.ajax({ url: 'index.php?route=tool/gemini_blog/getPromptInfo&user_token=";
        // line 91
        yield ($context["user_token"] ?? null);
        yield "&prompt_id=' + id, dataType: 'json', success: function(json) { \$('#edit-prompt-id').val(json.prompt_id); \$('#edit-prompt-title').val(json.title); \$('#edit-prompt-content').val(json.content); \$('#modal-prompt-edit').modal('show'); } }); }
function editTask(id) { \$.ajax({ url: 'index.php?route=tool/gemini_blog/getTaskInfo&user_token=";
        // line 92
        yield ($context["user_token"] ?? null);
        yield "&task_id=' + id, dataType: 'json', success: function(json) { \$('#edit-task-id').val(json.task_id); \$('#edit-task-keywords').val(json.keywords); \$('#edit-task-images').val(json.image_urls); \$('#edit-task-time').val(json.schedule_time); \$('#modal-task-edit').modal('show'); } }); }

var taskQueue = [];
var totalToRun = 0;

\$('#button-run-all').on('click', function() {
    taskQueue = [];
    \$('#task-table-body tr').each(function() {
        var status = \$(this).attr('data-status');
        if (status == '0' || status == '3') { taskQueue.push(\$(this).attr('data-id')); }
    });
    if (taskQueue.length == 0) { alert('没有待处理的任务'); return; }
    if (!confirm('确认执行 ' + taskQueue.length + ' 个 AI 博客任务？')) return;
    totalToRun = taskQueue.length;
    \$('#batch-progress').show();
    \$('#button-run-all').prop('disabled', true);
    processQueue();
});

function processQueue() {
    if (taskQueue.length == 0) {
        \$('#batch-progress-bar').removeClass('active').text('任务已全部执行完毕');
        return;
    }
    var id = taskQueue.shift();
    var completed = totalToRun - taskQueue.length;
    var percent = Math.round((completed / totalToRun) * 100);
    \$('#batch-progress-bar').css('width', percent + '%').text(percent + '%');
    \$('#batch-status-text').text('正在处理 ID: ' + id);
    
    executeOneTask(id, function() {
        setTimeout(processQueue, 3500); // 间隔执行，防止 API 过热
    });
}

function runTask(id) {
    if(!confirm('执行 AI 发布？')) return;
    executeOneTask(id, null);
}

function executeOneTask(id, callback) {
    var \$row = \$('#task-' + id);
    \$row.find('.task-status').html('<span class=\"label label-primary\"><i class=\"fa fa-spinner fa-spin\"></i> 处理中</span>');
    \$row.find('.btn-execute').prop('disabled', true);
    \$.ajax({
        url: 'index.php?route=tool/gemini_blog/runTask&user_token=";
        // line 137
        yield ($context["user_token"] ?? null);
        yield "&task_id=' + id,
        dataType: 'json',
        success: function(json) {
            // 安全解析 JSON
            if (typeof json !== 'object') { try { json = JSON.parse(json); } catch(e) {} }
            if (json && json.success) {
                \$row.find('.task-status').html('<span class=\"label label-success\">已发布</span>');
                \$row.find('.btn-execute').hide();
                \$row.attr('data-status', '2');
            } else {
                \$row.find('.task-status').html('<span class=\"label label-danger\">失败</span>');
                \$row.find('.btn-execute').prop('disabled', false);
            }
            if (callback) callback();
        },
        error: function() {
            \$row.find('.task-status').html('<span class=\"label label-danger\">网络异常</span>');
            if (callback) callback();
        }
    });
}
//--></script>
";
        // line 159
        yield ($context["footer"] ?? null);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "tool/gemini_blog.twig";
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
        return array (  311 => 159,  286 => 137,  238 => 92,  234 => 91,  200 => 75,  185 => 63,  168 => 60,  157 => 51,  145 => 47,  140 => 46,  134 => 45,  130 => 43,  123 => 42,  118 => 41,  113 => 40,  109 => 39,  100 => 37,  91 => 36,  87 => 35,  71 => 21,  65 => 20,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "tool/gemini_blog.twig", "");
    }
}
