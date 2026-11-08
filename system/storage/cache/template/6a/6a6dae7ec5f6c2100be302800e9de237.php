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

/* journal3/template/journal3/blog/post.twig */
class __TwigTemplate_aa756a949202c8e47680579db0d23096 extends Template
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
        yield "
";
        // line 2
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 2) == "top")) {
            // line 3
            yield "  <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 3);
            yield "\"><span class=\"page-title-text\">";
            yield ($context["post_name"] ?? null);
            yield "</span></h1>
";
        }
        // line 5
        yield "<div class=\"breadcrumbs ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["breadcrumbs_color_scheme"], "method", false, false, false, 5);
        yield "\">
  <ul class=\"breadcrumb\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            yield "      <li><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 8);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "  </ul>
</div>
";
        // line 12
        yield ($context["journal3_top"] ?? null);
        yield "
<div class=\"container blog-post\">
  <div class=\"row\">";
        // line 14
        yield ($context["column_left"] ?? null);
        yield "
    <div id=\"content\">
      ";
        // line 16
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 16) == "default")) {
            // line 17
            yield "        <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 17);
            yield "\">";
            yield ($context["post_name"] ?? null);
            yield "</h1>
      ";
        }
        // line 19
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <div class=\"post-details\">
        <div class=\"post-image\">
          ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["datePosition"], "method", false, false, false, 22) == "image")) {
            // line 23
            yield "            <span class=\"p-date p-date-image\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [($context["post_date"] ?? null)], "method", false, false, false, 23);
            yield "</span>
          ";
        }
        // line 25
        yield "          <img src=\"";
        yield ($context["post_image"] ?? null);
        yield "\" ";
        if ((($tmp = ($context["post_image2x"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " srcset=\"";
            yield ($context["post_image"] ?? null);
            yield " 1x, ";
            yield ($context["post_image2x"] ?? null);
            yield " 2x\" ";
        }
        yield " width=\"";
        yield ($context["image_width"] ?? null);
        yield "\" height=\"";
        yield ($context["image_height"] ?? null);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["post_name"] ?? null));
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["post_name"] ?? null));
        yield "\"/>
        </div>
        <div class=\"post-stats-wrapper\">
          <div class=\"post-stats\">
            ";
        // line 29
        if ((($tmp = ($context["post_author"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 30
            yield "              <span class=\"p-posted\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogPostedByText"], "method", false, false, false, 30);
            yield "</span>
              <span class=\"p-author\">";
            // line 31
            yield ($context["post_author"] ?? null);
            yield "</span>
            ";
        }
        // line 33
        yield "            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["datePosition"], "method", false, false, false, 33) == "default")) {
            // line 34
            yield "              <span class=\"p-date p-date-default\">";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [($context["post_date"] ?? null)], "method", false, false, false, 34);
            yield "</span>
            ";
        }
        // line 36
        yield "            <span class=\"p-comment\">";
        yield Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["comments"] ?? null));
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogCommentsText"], "method", false, false, false, 36);
        yield "</span>
            <span class=\"p-view\">";
        // line 37
        yield ($context["post_views"] ?? null);
        yield " ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogViewsText"], "method", false, false, false, 37);
        yield "</span>
            ";
        // line 38
        if ((($tmp = ($context["post_categories"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "              <span class=\"p-category\">
          ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["post_categories"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 41
                yield "            <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 41);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41);
                yield "</a>
            ";
                // line 42
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 43
                    yield "            <span>, </span>
          ";
                }
                // line 45
                yield "          ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "          </span>
            ";
        }
        // line 48
        yield "          </div>
        </div>
        <div class=\"post-content\">
          ";
        // line 51
        yield ($context["post_content"] ?? null);
        yield "
        </div>
        ";
        // line 53
        if ((($tmp = ($context["post_gallery"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "          <div class=\"post-gallery\">
            ";
            // line 55
            yield ($context["post_gallery"] ?? null);
            yield "
          </div>
        ";
        }
        // line 58
        yield "        ";
        if ((($tmp = ($context["post_tags"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "          <div class=\"tags\">
            <span class=\"tags-title\">";
            // line 60
            yield ($context["text_tags"] ?? null);
            yield "</span>
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["post_tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 62
                yield "              <a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "href", [], "any", false, false, false, 62);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 62);
                yield "</a><b>,</b>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "          </div>
        ";
        }
        // line 66
        yield "      </div>

      ";
        // line 68
        yield ($context["content_bottom"] ?? null);
        yield "

      ";
        // line 70
        if ((($tmp = ($context["allow_comments"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "        <div class=\"post-comments\">
          ";
            // line 72
            if ((($context["comments_total"] ?? null) > 0)) {
                // line 73
                yield "            <h3 class=\"title\">";
                yield ($context["comments_total"] ?? null);
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogCommentsText"], "method", false, false, false, 73);
                yield "</h3>
          ";
            }
            // line 75
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 76
                yield "            <div class=\"post-comment\" data-comment-id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment_id", [], "any", false, false, false, 76);
                yield "\" data-has-form=\"false\">
              <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                // line 77
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "avatar", [], "any", false, false, false, 77);
                yield "?s=";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 77);
                yield "\" width=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 77);
                yield "\" height=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 77);
                yield "\" alt=\"\">
              <div class=\"comment\">
                <div class=\"user-name\">";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "name", [], "any", false, false, false, 79);
                yield ":</div>
                <div class=\"user-data\">
                  <div>
                    <span class=\"user-date p-date\">";
                // line 82
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 82)], "method", false, false, false, 82);
                yield "</span>
                    <span class=\"user-time p-time\">";
                // line 83
                yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 83), ($context["time_format"] ?? null));
                yield "</span>
                  </div>
                  ";
                // line 85
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 86
                    yield "                    <span class=\"user-site p-site\"><a href=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 86);
                    yield "\" target=\"_blank\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "website", [], "any", false, false, false, 86);
                    yield "</a></span>
                  ";
                }
                // line 88
                yield "                </div>
                <a class=\"btn reply-btn\">";
                // line 89
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogReplyText"], "method", false, false, false, 89);
                yield "</a>
                <p>";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 90);
                yield "</p>
                ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "replies", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 92
                    yield "                  <div class=\"post-reply\">
                    <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/";
                    // line 93
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "avatar", [], "any", false, false, false, 93);
                    yield "?s=";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 93);
                    yield "\" width=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 93);
                    yield "\" height=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 93);
                    yield "\" alt=\"\">
                    <div class=\"comment\">
                      <div class=\"user-name\">";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "name", [], "any", false, false, false, 95);
                    yield ":</div>
                      <div class=\"user-data\">
                        <div>
                          <span class=\"user-date p-date\">";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "blog_date", [CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "date", [], "any", false, false, false, 98)], "method", false, false, false, 98);
                    yield "</span>
                          <span class=\"user-time p-time\">";
                    // line 99
                    yield $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "date", [], "any", false, false, false, 99), ($context["time_format"] ?? null));
                    yield "</span>
                        </div>
                        ";
                    // line 101
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 101)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 102
                        yield "                          <span class=\"user-site p-site\"><a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 102);
                        yield "\" target=\"_blank\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "website", [], "any", false, false, false, 102);
                        yield "</a></span>
                        ";
                    }
                    // line 104
                    yield "                      </div>
                      <p>";
                    // line 105
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "comment", [], "any", false, false, false, 105);
                    yield "</p>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                yield "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            yield "          <div class=\"comment-form\">
            <h3 class=\"title\">";
            // line 113
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogLeaveCommentText"], "method", false, false, false, 113);
            yield "</h3>
            <form method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
              <fieldset>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 117
            yield ($context["entry_name"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"name\" value=\"";
            // line 119
            yield ($context["default_name"] ?? null);
            yield "\" id=\"input-name\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 124
            yield ($context["entry_email"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"email\" value=\"";
            // line 126
            yield ($context["default_email"] ?? null);
            yield "\" id=\"input-email\" class=\"form-control\"/>

                  </div>
                </div>

                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-website\">";
            // line 132
            yield ($context["entry_website"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"website\" value=\"";
            // line 134
            yield ($context["default_website"] ?? null);
            yield "\" id=\"input-website\" class=\"form-control\"/>
                  </div>
                </div>

                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-comment\">";
            // line 139
            yield ($context["text_comment"] ?? null);
            yield "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"comment\" rows=\"10\" id=\"input-comment\" class=\"form-control\">";
            // line 141
            yield ($context["default_comment"] ?? null);
            yield "</textarea>
                  </div>
                </div>
              </fieldset>

              ";
            // line 146
            if ((($tmp = ($context["captcha"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 147
                yield "              <div class=\"input-captcha\">";
                yield ($context["captcha"] ?? null);
                yield "</div>
              ";
            }
            // line 149
            yield "
              <div class=\"buttons\">
                <div class=\"pull-right\">
                  <button type=\"button\" class=\"btn comment-submit\">";
            // line 152
            yield ($context["button_submit"] ?? null);
            yield "</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        ";
            // line 158
            if ((($context["comments_total"] ?? null) > 0)) {
                // line 159
                yield "        <div class=\"row pagination-results\">
          <div class=\"col-sm-6 text-left\">";
                // line 160
                yield ($context["pagination"] ?? null);
                yield "</div>
          <div class=\"col-sm-6 text-right\">";
                // line 161
                yield ($context["results"] ?? null);
                yield "</div>
        </div>
        ";
            }
            // line 164
            yield "      ";
        }
        // line 165
        yield "
    </div>
    ";
        // line 167
        yield ($context["column_right"] ?? null);
        yield "
  </div>
  ";
        // line 169
        if ((($tmp = ($context["allow_comments"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "    <script type=\"text/javascript\">
      function generateComment(\$form, cls, \$appendTo, callback) {
        \$form.find('.has-error').removeClass('has-error');

        \$.post('index.php?route=journal3/blog";
            // line 174
            yield Twig\Extension\CoreExtension::constant("JOURNAL3_ROUTE_SEPARATOR");
            yield "comment&post_id=";
            yield ($context["post_id"] ?? null);
            yield "', \$form.serializeArray(), function (response) {
          if (response.status === 'success') {
            if (response.response.data) {
              var html = '';

              html += '<div class=\"' + cls + '\" data-comment-id=\"' + response.response.data.comment_id + '\" data-has-form=\"false\">';
              html += ' <img class=\"user-avatar\" src=\"https://s.gravatar.com/avatar/' + response.response.data.avatar + '?s=";
            // line 180
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 180);
            yield "\" width=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 180);
            yield "\" height=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["postCommentImageSize"], "method", false, false, false, 180);
            yield "\" alt=\"\">';
              html += ' <div class=\"comment\">';
              html += '   <div class=\"user-name\">' + response.response.data.name + ':</div>';
              html += '   <div class=\"user-data\">';
              html += '     <div>';
              html += '       <span class=\"user-date p-date\">' + response.response.data.date + '</span>';
              html += '       <span class=\"user-time p-time\">' + response.response.data.time + '</span>';
              html += '     </div>';
              html += '     <span class=\"user-site p-site\"><a href=\"' + response.response.data.website + '\" target=\"_blank\">' + response.response.data.website + '</a></span>';
              html += '   </div>';

              if (cls === 'post-comment') {
                html += ' <a class=\"btn reply-btn\">";
            // line 192
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogReplyText"], "method", false, false, false, 192);
            yield "</a>';
              }

              html += ' <p>' + response.response.data.comment + '</p>';
              html += '</div>';

              \$appendTo.before(html);
            }

            callback && callback(response.response.message);
          }

          if (response.status === 'error') {
            \$.each(response.response.errors, function (field) {
              if (field === 'captcha') {
                \$form.find('.input-captcha .form-group').addClass('has-error');
              } else {
                \$form.find('[name=\"' + field + '\"]').closest('.form-group').addClass('has-error');
              }
            });
          }
        }, 'json');
      }

      \$(document).delegate('.reply-btn', 'click', function () {
        var \$comment = \$(this).closest('.post-comment');

        if (\$comment.attr('data-has-form') === 'false') {
          var \$form = \$('.post-comments form').clone(true, true);
          \$form.find('script').remove();
          \$form.find('.g-recaptcha').html('');
          \$form.find('.has-error').removeClass('has-error');
          \$form.append('<input type=\"hidden\" name=\"parent_id\" value=\"' + \$comment.attr('data-comment-id') + '\" />');
          \$form.find('button').removeClass('comment-submit').addClass('reply-submit');
          \$comment.find('> .comment').append('<div class=\"reply-form\"><h3 class=\"title\">' + '";
            // line 226
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["blogLeaveReplyText"], "method", false, false, false, 226);
            yield "' + '</h3><div class=\"comment-form\"><div><form class=\"form-horizontal\">' + \$form.html() + '</form></div></div></div>');
          \$comment.attr('data-has-form', 'true');
          var gc = \$comment.find('.reply-form .g-recaptcha');
          if (gc.length && window.grecaptcha) {
            window.grecaptcha.render(gc[0]);
          }
        } else {
          \$comment.find('.reply-form').remove();
          \$comment.attr('data-has-form', 'false');
        }
      });

      \$(document).delegate('form .comment-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$comment_form = \$('.comment-form');

        generateComment(\$form, 'post-comment', \$comment_form, function (message) {
          show_message({
            message: message,
          });
          \$form[0].reset();
        });
      });

      \$(document).delegate('form .reply-submit', 'click', function () {
        var \$form = \$(this).closest('form');
        var \$reply_form = \$(this).closest('.post-comment').find('.reply-form');

        generateComment(\$form, 'post-reply', \$reply_form, function (message) {
          show_message({
            message: message,
          });
          \$form.closest('.post-comment').attr('data-has-form', 'false');
          \$reply_form.remove();
        });
      });
    </script>
  ";
        }
        // line 264
        yield "</div>
";
        // line 265
        yield ($context["journal3_rich_snippets"] ?? null);
        yield "
";
        // line 266
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
        return "journal3/template/journal3/blog/post.twig";
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
        return array (  657 => 266,  653 => 265,  650 => 264,  609 => 226,  572 => 192,  553 => 180,  542 => 174,  536 => 170,  534 => 169,  529 => 167,  525 => 165,  522 => 164,  516 => 161,  512 => 160,  509 => 159,  507 => 158,  498 => 152,  493 => 149,  487 => 147,  485 => 146,  477 => 141,  472 => 139,  464 => 134,  459 => 132,  450 => 126,  445 => 124,  437 => 119,  432 => 117,  425 => 113,  422 => 112,  414 => 109,  404 => 105,  401 => 104,  393 => 102,  391 => 101,  386 => 99,  382 => 98,  376 => 95,  365 => 93,  362 => 92,  358 => 91,  354 => 90,  350 => 89,  347 => 88,  339 => 86,  337 => 85,  332 => 83,  328 => 82,  322 => 79,  311 => 77,  306 => 76,  301 => 75,  293 => 73,  291 => 72,  288 => 71,  286 => 70,  281 => 68,  277 => 66,  273 => 64,  262 => 62,  258 => 61,  254 => 60,  251 => 59,  248 => 58,  242 => 55,  239 => 54,  237 => 53,  232 => 51,  227 => 48,  223 => 46,  209 => 45,  205 => 43,  203 => 42,  196 => 41,  179 => 40,  176 => 39,  174 => 38,  168 => 37,  161 => 36,  155 => 34,  152 => 33,  147 => 31,  142 => 30,  140 => 29,  116 => 25,  110 => 23,  108 => 22,  101 => 19,  93 => 17,  91 => 16,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/blog/post.twig", "");
    }
}
