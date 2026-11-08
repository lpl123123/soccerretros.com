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

/* journal3/template/information/contact.twig */
class __TwigTemplate_5f1cbb9d3cf2b67444f0aed469f3ddf7 extends Template
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
            yield ($context["heading_title"] ?? null);
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
<div id=\"information-contact\" class=\"container\">
  <div class=\"row\">";
        // line 14
        yield ($context["column_left"] ?? null);
        yield "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            yield "    ";
            $context["class"] = "col-sm-6";
            // line 17
            yield "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            yield "    ";
            $context["class"] = "col-sm-9";
            // line 19
            yield "    ";
        } else {
            // line 20
            yield "    ";
            $context["class"] = "col-sm-12";
            // line 21
            yield "    ";
        }
        // line 22
        yield "    <div id=\"content\" class=\"";
        yield ($context["class"] ?? null);
        yield "\">
      ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["pageTitlePosition"], "method", false, false, false, 23) == "default")) {
            // line 24
            yield "      <h1 class=\"title page-title ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["title_color_scheme"], "method", false, false, false, 24);
            yield "\">";
            yield ($context["heading_title"] ?? null);
            yield "</h1>
      ";
        }
        // line 26
        yield "      ";
        yield ($context["content_top"] ?? null);
        yield "
      <h2 class=\"title location-title\">";
        // line 27
        yield ($context["text_location"] ?? null);
        yield "</h2>
      <div class=\"panel panel-default our-location\">
        <div class=\"panel-body\">
          <div class=\"row store-data\">
            ";
        // line 31
        if ((($tmp = ($context["image"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "            <div class=\"col-sm-3 store-image\"><img src=\"";
            yield ($context["image"] ?? null);
            yield "\" alt=\"";
            yield ($context["store"] ?? null);
            yield "\" title=\"";
            yield ($context["store"] ?? null);
            yield "\" class=\"img-thumbnail\" /></div>
            ";
        }
        // line 34
        yield "            <div class=\"col-sm-3 store-address\"><strong>";
        yield ($context["store"] ?? null);
        yield "</strong><br />
              <address>
              ";
        // line 36
        yield ($context["address"] ?? null);
        yield "
              </address>
              ";
        // line 38
        if ((($tmp = ($context["geocode"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 39
            yield "              <a href=\"https://maps.google.com/maps?q=";
            yield Twig\Extension\CoreExtension::urlencode(($context["geocode"] ?? null));
            yield "&hl=";
            yield ($context["geocode_hl"] ?? null);
            yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
            yield ($context["button_map"] ?? null);
            yield "</a>
              ";
        }
        // line 41
        yield "            </div>
            <div class=\"col-sm-3 store-tel\"><strong>";
        // line 42
        yield ($context["text_telephone"] ?? null);
        yield "</strong><br>
              ";
        // line 43
        yield ($context["telephone"] ?? null);
        yield "<br />
              <br />
              ";
        // line 45
        if ((($tmp = ($context["fax"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 46
            yield "              <div class=\"store-fax\">
              <strong>";
            // line 47
            yield ($context["text_fax"] ?? null);
            yield "</strong><br>
              ";
            // line 48
            yield ($context["fax"] ?? null);
            yield "
              </div>
              ";
        }
        // line 51
        yield "            </div>
            <div class=\"col-sm-3 store-info\">
              ";
        // line 53
        if ((($tmp = ($context["open"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "              <div class=\"store-hours\">
              <strong>";
            // line 55
            yield ($context["text_open"] ?? null);
            yield "</strong><br />
              ";
            // line 56
            yield ($context["open"] ?? null);
            yield "<br />
              </div>
              <br />
              ";
        }
        // line 60
        yield "              ";
        if ((($tmp = ($context["comment"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 61
            yield "              <div class=\"store-comment\">
              <strong>";
            // line 62
            yield ($context["text_comment"] ?? null);
            yield "</strong><br />
              ";
            // line 63
            yield ($context["comment"] ?? null);
            yield "
              </div>
              ";
        }
        // line 66
        yield "            </div>
          </div>
        </div>
      </div>
      ";
        // line 70
        if ((($tmp = ($context["locations"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 71
            yield "      <h2 class=\"title stores-title\">";
            yield ($context["text_store"] ?? null);
            yield "</h2>
      <div class=\"panel-group other-stores\" id=\"accordion\">
        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["locations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
                // line 74
                yield "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-location";
                // line 76
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 76);
                yield "\" class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 76);
                yield " <i class=\"fa fa-caret-down\"></i></a></h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-location";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "location_id", [], "any", false, false, false, 78);
                yield "\">
            <div class=\"panel-body\">
              <div class=\"row store-data\">
                ";
                // line 81
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "                <div class=\"col-sm-3 store-image\"><img src=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "image", [], "any", false, false, false, 82);
                    yield "\" alt=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                    yield "\" title=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 82);
                    yield "\" class=\"img-thumbnail\" /></div>
                ";
                }
                // line 84
                yield "                <div class=\"col-sm-3 store-address\"><strong>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "name", [], "any", false, false, false, 84);
                yield "</strong><br />
                  <address>
                  ";
                // line 86
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "address", [], "any", false, false, false, 86);
                yield "
                  </address>
                  ";
                // line 88
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 89
                    yield "                  <a href=\"https://maps.google.com/maps?q=";
                    yield Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["location"], "geocode", [], "any", false, false, false, 89));
                    yield "&hl=";
                    yield ($context["geocode_hl"] ?? null);
                    yield "&t=m&z=15\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> ";
                    yield ($context["button_map"] ?? null);
                    yield "</a>
                  ";
                }
                // line 91
                yield "                </div>
                <div class=\"col-sm-3 store-tel\"> <strong>";
                // line 92
                yield ($context["text_telephone"] ?? null);
                yield "</strong><br>
                  ";
                // line 93
                yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "telephone", [], "any", false, false, false, 93);
                yield "<br />
                  <br />
                  ";
                // line 95
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 95)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 96
                    yield "                  <div class=\"store-fax\">
                  <strong>";
                    // line 97
                    yield ($context["text_fax"] ?? null);
                    yield "</strong><br>
                  ";
                    // line 98
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "fax", [], "any", false, false, false, 98);
                    yield "
                  </div>
                  ";
                }
                // line 101
                yield "                </div>
                <div class=\"col-sm-3 store-info\">
                  ";
                // line 103
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 104
                    yield "                  <div class=\"store-hours\">
                  <strong>";
                    // line 105
                    yield ($context["text_open"] ?? null);
                    yield "</strong><br />
                  ";
                    // line 106
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "open", [], "any", false, false, false, 106);
                    yield "<br />
                  </div>
                  <br />
                  ";
                }
                // line 110
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 110)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 111
                    yield "                  <div class=\"store-comment\">
                  <strong>";
                    // line 112
                    yield ($context["text_comment"] ?? null);
                    yield "</strong><br />
                  ";
                    // line 113
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["location"], "comment", [], "any", false, false, false, 113);
                    yield "
                  </div>
                  ";
                }
                // line 116
                yield "                </div>
              </div>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['location'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "      </div>
      ";
        }
        // line 124
        yield "      ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["contactFormStatus"], "method", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield "      <form action=\"";
            yield ($context["action"] ?? null);
            yield "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
            // line 127
            yield ($context["text_contact"] ?? null);
            yield "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
            // line 129
            yield ($context["entry_name"] ?? null);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
            // line 131
            yield ($context["name"] ?? null);
            yield "\" id=\"input-name\" class=\"form-control\" />
              ";
            // line 132
            if ((($tmp = ($context["error_name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "              <div class=\"text-danger\">";
                yield ($context["error_name"] ?? null);
                yield "</div>
              ";
            }
            // line 135
            yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
            // line 138
            yield ($context["entry_email"] ?? null);
            yield "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
            // line 140
            yield ($context["email"] ?? null);
            yield "\" id=\"input-email\" class=\"form-control\" />
              ";
            // line 141
            if ((($tmp = ($context["error_email"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "              <div class=\"text-danger\">";
                yield ($context["error_email"] ?? null);
                yield "</div>
              ";
            }
            // line 144
            yield "            </div>
          </div>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">";
            // line 147
            yield ($context["entry_enquiry"] ?? null);
            yield "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\">";
            // line 149
            yield ($context["enquiry"] ?? null);
            yield "</textarea>
              ";
            // line 150
            if ((($tmp = ($context["error_enquiry"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 151
                yield "              <div class=\"text-danger\">";
                yield ($context["error_enquiry"] ?? null);
                yield "</div>
              ";
            }
            // line 153
            yield "            </div>
          </div>
          ";
            // line 155
            yield ($context["captcha"] ?? null);
            yield "
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-right\">
            <button class=\"btn btn-primary\" type=\"submit\"><span>";
            // line 159
            yield ($context["button_submit"] ?? null);
            yield "</span></button>
          </div>
        </div>
      </form>
      ";
        }
        // line 164
        yield "      ";
        yield ($context["content_bottom"] ?? null);
        yield "</div>
    ";
        // line 165
        yield ($context["column_right"] ?? null);
        yield "</div>
</div>
";
        // line 167
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
        return "journal3/template/information/contact.twig";
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
        return array (  487 => 167,  482 => 165,  477 => 164,  469 => 159,  462 => 155,  458 => 153,  452 => 151,  450 => 150,  446 => 149,  441 => 147,  436 => 144,  430 => 142,  428 => 141,  424 => 140,  419 => 138,  414 => 135,  408 => 133,  406 => 132,  402 => 131,  397 => 129,  392 => 127,  386 => 125,  383 => 124,  379 => 122,  368 => 116,  362 => 113,  358 => 112,  355 => 111,  352 => 110,  345 => 106,  341 => 105,  338 => 104,  336 => 103,  332 => 101,  326 => 98,  322 => 97,  319 => 96,  317 => 95,  312 => 93,  308 => 92,  305 => 91,  295 => 89,  293 => 88,  288 => 86,  282 => 84,  272 => 82,  270 => 81,  264 => 78,  257 => 76,  253 => 74,  249 => 73,  243 => 71,  241 => 70,  235 => 66,  229 => 63,  225 => 62,  222 => 61,  219 => 60,  212 => 56,  208 => 55,  205 => 54,  203 => 53,  199 => 51,  193 => 48,  189 => 47,  186 => 46,  184 => 45,  179 => 43,  175 => 42,  172 => 41,  162 => 39,  160 => 38,  155 => 36,  149 => 34,  139 => 32,  137 => 31,  130 => 27,  125 => 26,  117 => 24,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  101 => 19,  98 => 18,  95 => 17,  92 => 16,  90 => 15,  86 => 14,  81 => 12,  77 => 10,  66 => 8,  62 => 7,  56 => 5,  48 => 3,  46 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/information/contact.twig", "");
    }
}
