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

/* journal3/template/common/header.twig */
class __TwigTemplate_24f13bffb939d29271b8cb9b0c9bbc3d extends Template
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
        if ((($tmp =  !array_key_exists("journal3", $context)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "<style>body { display: none !important; }</style>
<script>window.location = 'index.php?route=journal3/startup/error_not_installed';</script>
";
        }
        // line 5
        yield "<!DOCTYPE html>
<html dir=\"";
        // line 6
        yield ($context["direction"] ?? null);
        yield "\" lang=\"";
        yield ($context["lang"] ?? null);
        yield "\" class=\"";
        yield Twig\Extension\CoreExtension::join(($context["journal3_classes"] ?? null), " ");
        yield "\" data-ov=\"";
        yield ($context["journal3_oc_version"] ?? null);
        yield "\" data-jv=\"";
        yield ($context["journal3_version"] ?? null);
        yield "\">
<head>
<meta charset=\"UTF-8\" />
<meta name=\"theme-color\" content=\"";
        // line 9
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["theme_color"], "method", false, false, false, 9);
        yield "\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        yield ($context["title"] ?? null);
        yield "</title>
<base href=\"";
        // line 13
        yield ($context["base"] ?? null);
        yield "\" />
";
        // line 14
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 15
            yield "<meta name=\"description\" content=\"";
            yield ($context["description"] ?? null);
            yield "\" />
";
        }
        // line 17
        if ((($tmp = ($context["keywords"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "<meta name=\"keywords\" content=\"";
            yield ($context["keywords"] ?? null);
            yield "\" />
";
        }
        // line 20
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_metas"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
                // line 22
                yield "<meta ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "attr", [], "any", false, false, false, 22);
                yield "=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "name", [], "any", false, false, false, 22);
                yield "\" content=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["meta"], "content", [], "any", false, false, false, 22);
                yield "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['meta'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_meta_tags"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
                // line 25
                yield "<meta ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "type", [], "any", false, false, false, 25);
                yield "=\"";
                yield $context["key"];
                yield "\" content=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "content", [], "any", false, false, false, 25);
                yield "\"/>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        if ((($tmp = ($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "  <link rel=\"icon\" href=\"";
            yield ($context["icon"] ?? null);
            yield "\" type=\"image/png\">
";
        }
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 32
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 32);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 32);
            yield "\" ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "attrs", [], "any", false, false, false, 32);
            yield "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
\t";
        // line 35
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["config_google_pageid"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "\t<link href=\"https://plus.google.com/";
            yield ($context["config_google_pageid"] ?? null);
            yield "\" rel=\"publisher\" />
\t";
        }
        // line 38
        yield "\t";
        if (((($context["plink"] ?? null) && ($context["config_facebook_status"] ?? null)) && ($context["config_pinterest_status"] ?? null))) {
            // line 39
            yield "\t";
            if ((($tmp = ($context["pprice"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "\t
\t<meta property=\"og:type\" content=\"op:product\" /> ";
            }
            // line 41
            yield "\t\t\t
\t<meta property=\"og:title\" content=\"";
            // line 42
            yield ($context["title"] ?? null);
            yield "\" />
\t";
            // line 43
            if ((($tmp = ($context["pinimage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "\t<meta property=\"og:image\" content=\"";
                yield ($context["pinimage"] ?? null);
                yield "\" />
\t";
            }
            // line 46
            yield "\t";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 47
                yield "\t<meta property=\"og:description\" content=\"";
                yield ($context["description"] ?? null);
                yield "\" />
\t";
            }
            // line 49
            yield "\t<meta property=\"og:url\" content=\"";
            yield ($context["plink"] ?? null);
            yield "\" />
\t";
            // line 50
            if (((($context["pprice"] ?? null) && ($context["config_facebook_status"] ?? null)) && ($context["config_pinterest_status"] ?? null))) {
                // line 51
                yield "\t<meta property=\"product:price:amount\" content=\"";
                yield ($context["pprice"] ?? null);
                yield "\" />
\t<meta property=\"product:price:currency\" content=\"";
                // line 52
                yield ($context["config_currency"] ?? null);
                yield "\" />
\t<meta property=\"product:condition\" content=\"new\" />
\t";
                // line 54
                if ((array_key_exists("pid", $context) && ($context["pid"] ?? null))) {
                    // line 55
                    yield "\t<meta property=\"product:retailer_item_id\" content=\"";
                    yield ($context["pid"] ?? null);
                    yield "\" />
\t";
                }
                // line 57
                yield "\t";
            }
            // line 58
            yield "\t";
            if ((($tmp = ($context["fbstock"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 59
                yield "\t<meta property=\"og:availability\" content=\"";
                yield ($context["fbstock"] ?? null);
                yield "\" />
\t";
            }
            // line 61
            yield "\t";
            if ((($tmp = ($context["pbrand"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "\t<meta property=\"og:brand\" content=\"";
                yield ($context["pbrand"] ?? null);
                yield "\" />
\t";
            }
            // line 64
            yield "\t<meta property=\"og:site_name\" content=\"";
            yield ($context["config_name"] ?? null);
            yield "\" />
\t";
            // line 65
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["config_facebook_adminid"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "\t<meta property=\"fb:admins\" content=\"";
                yield ($context["config_facebook_adminid"] ?? null);
                yield "\" />
\t";
            }
            // line 68
            yield "\t";
        }
        // line 69
        yield "\t";
        if (((($context["pprice"] ?? null) &&  !Twig\Extension\CoreExtension::testEmpty(($context["config_twitter_uername"] ?? null))) && ($context["config_twitter_status"] ?? null))) {
            // line 70
            yield "\t<meta name=\"twitter:card\" content=\"";
            yield ($context["tcardsize"] ?? null);
            yield "\" />
\t<meta name=\"twitter:site\" content=\"";
            // line 71
            yield ($context["config_twitter_uername"] ?? null);
            yield "\" />
\t<meta name=\"twitter:title\" content=\"";
            // line 72
            yield ($context["title"] ?? null);
            yield "\" />
\t";
            // line 73
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["description"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "\t<meta name=\"twitter:description\" content=\"";
                yield ($context["description"] ?? null);
                yield "\" />
\t";
            }
            // line 76
            yield "\t";
            if ((($tmp = ($context["twitimage"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 77
                yield "\t<meta name=\"twitter:image\" content=\"";
                yield ($context["twitimage"] ?? null);
                yield "\" />
\t";
            }
            // line 79
            yield "\t<meta name=\"twitter:domain\" content=\"";
            yield ($context["base"] ?? null);
            yield "\" />
\t";
        }
        // line 81
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["alternatelinks"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["alternatelink"]) {
            // line 82
            yield "<link rel=\"alternate\" href=\"";
            yield $context["alternatelink"];
            yield "\" hreflang=\"";
            yield $context["key"];
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['alternatelink'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "\t
";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 86
            yield "<link href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 86);
            yield "\" rel=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 86);
            yield "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        if ((($tmp = ($context["journal3_sentry_dsn_loader"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "js_defer", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "<script src=\"";
                yield ($context["journal3_sentry_dsn_loader"] ?? null);
                yield "\" crossorigin=\"anonymous\" defer></script>
";
            } else {
                // line 92
                yield "<script src=\"";
                yield ($context["journal3_sentry_dsn_loader"] ?? null);
                yield "\" crossorigin=\"anonymous\"></script>
";
            }
        }
        // line 95
        yield "<script>window['Journal'] = ";
        yield ($context["journal3_js"] ?? null);
        yield ";</script>
";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_inline_scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 97
            yield "<script>";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 97)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 97)) : ($context["script"]));
            yield "</script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 100
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 100)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 101
                yield "<link href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 101);
                yield "\" type=\"text/css\" rel=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 101);
                yield "\" media=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 101);
                yield "\" />
";
            } else {
                // line 103
                yield "<style>";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["style"], "content", [], "any", false, false, false, 103);
                yield "</style>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['style'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "<script>performance.mark('css');</script>
";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["journal3_css"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 108
            yield "<style ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["css"], "id", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-id=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["css"], "id", [], "any", false, false, false, 108);
                yield "\"";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["css"], "css", [], "any", false, false, false, 108);
            yield "</style>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['css'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "<script>performance.measure('css', 'css');</script>
";
        // line 111
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCSS"], "method", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "<style>";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCSS"], "method", false, false, false, 112);
            yield "</style>
";
        }
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 115
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "js_defer", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 116
                yield "<script src=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 116)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 116)) : ($context["script"]));
                yield "\" defer></script>
";
            } else {
                // line 118
                yield "<script src=\"";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 118)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 118)) : ($context["script"]));
                yield "\"></script>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["scripts_defer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 122
            yield "<script src=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 122)) ? (CoreExtension::getAttribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 122)) : ($context["script"]));
            yield "\" defer></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['script'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeHeader"], "method", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 125
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["customCodeHeader"], "method", false, false, false, 125);
            yield "
";
        }
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 128
            yield $context["analytic"];
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['analytic'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "<!-- Yandex.Metrika counter -->
<script type=\"text/javascript\">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
        k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
    })(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=110103099', 'ym');

    ym(110103099, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:\"dataLayer\", referrer: document.referrer, url: location.href, accurateTrackBounce:true, trackLinks:true});
</script>
<!-- /Yandex.Metrika counter -->
</head>
<body>
";
        // line 144
        if ((($tmp = ($context["journal3_is_oc4"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "<div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\" style=\"position: fixed; right: 0; top: 0; padding: 1rem; z-index: 999999;\"></div>
";
        }
        // line 147
        yield "
";
        // line 148
        yield ($context["journal3_background_slider"] ?? null);
        yield "

";
        // line 150
        if ((($tmp = ($context["journal3_home_h1"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 151
            yield "<h1 style=\"position: absolute; height: 1px; width: 1px; clip: rect(0,0,0,0);\">";
            yield ($context["journal3_home_h1"] ?? null);
            yield "</h1>
";
        }
        // line 153
        yield "
";
        // line 154
        if ((($tmp = ($context["journal_admin_bar_links"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 155
            yield "<div class=\"admin-bar\">
  <div class=\"j-logo\">
    <svg width=\"512px\" height=\"512px\" viewBox=\"0 0 512 512\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
      <title>J3</title>
      <g id=\"Page-1\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
        <g id=\"J3\" fill-rule=\"nonzero\">
          <path d=\"M256.000557,512 C397.384748,512 512,397.384698 512,256.000446 C512,114.615079 397.384748,0 256.000557,0 C114.615252,0 0,114.615079 0,256.000446 C0,397.384698 114.615252,512 256.000557,512 Z\" id=\"BG-Outer\" fill=\"#6790DA\"></path>
          <path d=\"M256.000457,466 C371.979676,466 466,371.979636 466,256.000366 C466,140.020182 371.979676,46 256.000457,46 C140.020324,46 46,140.020182 46,256.000366 C46,371.979636 140.020324,466 256.000457,466 Z\" id=\"BG-Inner\" fill=\"#0D52D6\"></path>
          <path d=\"M216.194955,386.412646 C206.303796,386.617232 195.797885,386.734277 189.951036,386.084719 L189.951036,329.987416 C209.71318,330.020662 221.727013,330.037284 225.992535,330.037284 C245.252334,330.037284 261.013567,323.420558 261.013567,293.719683 L261.013567,164.986102 L322,164.986102 L322,289.480887 C322,365.707612 280.634337,385.683028 235.507407,386.078742 L232.645402,386.090602 C231.087699,386.102109 229.342494,386.129703 227.465826,386.166355 L216.194955,386.412646 Z\" id=\"Path\" fill=\"#FFFFFF\"></path>
          <polygon id=\"Path\" fill=\"#FFFFFF\" points=\"322 144.006222 322 124.030762 261.041677 124.030762 261.041677 144.006222\"></polygon>
          <polygon id=\"Path\" fill=\"#FFFFFF\" points=\"261.029977 104.007695 322 104.007695 322 84.0271859 261.029977 84.0271859\"></polygon>
          <path d=\"M261.001362,0.0478691985 C282.06378,0.451418555 302.50341,3.39872913 322.025809,8.5953623 L322.023739,64.0029947 L261.008707,64.0029947 L261.001362,0.0478691985 Z\" id=\"Path\" fill=\"#FFFFFF\"></path>
        </g>
      </g>
    </svg>
    <span>Editor</span>
  </div>
  <div class=\"admin-bar-buttons\">
    ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["journal_admin_bar_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 174
                yield "      <button data-edit=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "edit", [], "any", false, false, false, 174);
                yield "\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, false, 174);
                yield "</button>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            yield "  </div>
  <button class=\"admin-close-bar\" type=\"button\" title=\"Toggle Editor\"><span>&times;</span></button>
</div>
";
        }
        // line 180
        yield "
";
        // line 181
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserStatus"], "method", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 182
            yield "<div class=\"old-browser\">
  <div class=\"ob-content\">
    <h2 class=\"ob-title\">";
            // line 184
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserTitle"], "method", false, false, false, 184);
            yield "</h2>
    <span class=\"ob-text\">";
            // line 185
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserText"], "method", false, false, false, 185);
            yield "</span>
    <div class=\"ob-links\">
      <a href=\"https://www.google.com/chrome/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 188
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserChrome"], "method", false, false, false, 188);
            yield "\" alt=\"Chrome\" />
        <span class=\"ob-name\">Chrome</span>
      </a>
      <a href=\"https://www.mozilla.org/firefox/new/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 192
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserFirefox"], "method", false, false, false, 192);
            yield "\" alt=\"Firefox\" />
        <span class=\"ob-name\">Firefox</span>
      </a>
      <a href=\"https://www.microsoft.com/en-us/windows/microsoft-edge\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 196
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserEdge"], "method", false, false, false, 196);
            yield "\" alt=\"edge\" />
        <span class=\"ob-name\">Microsoft Edge</span>
      </a>
      <a href=\"https://www.opera.com/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 200
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserOpera"], "method", false, false, false, 200);
            yield "\" alt=\"opera\" />
        <span class=\"ob-name\">Opera</span>
      </a>
      <a href=\"https://www.apple.com/lae/safari/\" target=\"_blank\" rel=\"nofollow\">
        <img src=\"";
            // line 204
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["oldBrowserSafari"], "method", false, false, false, 204);
            yield "\" alt=\"safari\" />
        <span class=\"ob-name\">Safari on Mac</span>
      </a>
    </div>
  </div>
</div>
";
        }
        // line 211
        yield "
";
        // line 212
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "is_popup", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 213
            yield "<div class=\"mobile-container mobile-main-menu-container\">
  ";
            // line 214
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_bottom_menu"], "method", false, false, false, 214);
            yield "
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 216
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 216);
            yield "</span>
    <div class=\"mobile-wrapper-top-menu\">";
            // line 217
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_top_menu_2"], "method", false, false, false, 217);
            yield "</div>
    ";
            // line 218
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileLangPosition"], "method", false, false, false, 218) == "menu")) {
                // line 219
                yield "      <div class=\"language-currency top-menu\">
        <div class=\"mobile-language-wrapper\">
            ";
                // line 221
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["language"] ?? null)) : (""));
                yield "
        </div>
        <div class=\"mobile-currency-wrapper\">
          ";
                // line 224
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_header_active"], "method", false, false, false, 224)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (($context["currency"] ?? null)) : (""));
                yield "
        </div>
      </div>
    ";
            }
            // line 228
            yield "    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <template class=\"mobile-main-menu-wrapper\">";
            // line 230
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobile_main_menu"], "method", false, false, false, 230);
            yield "</template>
  ";
            // line 231
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuAccordion"], "method", false, false, false, 231);
            yield "
  ";
            // line 232
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuBuilder"], "method", false, false, false, 232);
            yield "
</div>

<div class=\"mobile-container desktop-mobile-main-menu-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 237
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileMenuTitle"], "method", false, false, false, 237);
            yield "</span>
    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <div class=\"desktop-mobile-main-menu-wrapper\">";
            // line 240
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu1"], "method", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu"], "method", false, false, false, 240);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileMenu2"], "method", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["desktop_main_menu_2"], "method", false, false, false, 240);
            }
            yield "</div>
  ";
            // line 241
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerDesktopMobileMenuAccordion"], "method", false, false, false, 241);
            yield "
  ";
            // line 242
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerDesktopMobileMenuBuilder"], "method", false, false, false, 242);
            yield "
</div>

<div class=\"mobile-container mobile-filter-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 247
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterTitle"], "method", false, false, false, 247);
            yield "</span>
    <button aria-label=\"Reset\" class=\"reset-filter btn\">";
            // line 248
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["mobileFilterReset"], "method", false, false, false, 248);
            yield "</button>
    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <div class=\"mobile-filter-wrapper\"></div>
</div>

<div class=\"mobile-container mobile-cart-content-container\">
  <div class=\"mobile-wrapper-header\">
    <span>";
            // line 256
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerMobileCartTitle"], "method", false, false, false, 256);
            yield "</span>
    <a class=\"x\" href=\"javascript:;\" title=\"Close\"></a>
  </div>
  <div class=\"mobile-cart-content-wrapper cart-content\"></div>
</div>
";
        }
        // line 262
        yield "
";
        // line 263
        yield ($context["journal3_popup"] ?? null);
        yield "

";
        // line 265
        yield ($context["journal3_bottom_menu"] ?? null);
        yield "

";
        // line 267
        yield ($context["journal3_side_menu"] ?? null);
        yield "

";
        // line 269
        yield ($context["journal3_notification"] ?? null);
        yield "

";
        // line 271
        yield ($context["journal3_header_notice"] ?? null);
        yield "

";
        // line 273
        yield "<div class=\"global-wrapper\">";
        yield "

";
        // line 275
        if ((($context["journal3_header_desktop"] ?? null) || ($context["journal3_header_mobile"] ?? null))) {
            // line 276
            yield "  <header class=\"header-";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "get", ["headerType"], "method", false, false, false, 276);
            yield "\">
    ";
            // line 277
            yield ($context["journal3_header_desktop"] ?? null);
            yield "
    ";
            // line 278
            yield ($context["journal3_header_mobile"] ?? null);
            yield "
    <div class=\"site-overlay\"></div>
  </header>
";
        }
        // line 282
        yield "
";
        // line 283
        yield "<div class=\"site-wrapper\">";
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/common/header.twig";
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
        return array (  792 => 283,  789 => 282,  782 => 278,  778 => 277,  773 => 276,  771 => 275,  766 => 273,  761 => 271,  756 => 269,  751 => 267,  746 => 265,  741 => 263,  738 => 262,  729 => 256,  718 => 248,  714 => 247,  706 => 242,  702 => 241,  693 => 240,  687 => 237,  679 => 232,  675 => 231,  671 => 230,  667 => 228,  660 => 224,  654 => 221,  650 => 219,  648 => 218,  644 => 217,  640 => 216,  635 => 214,  632 => 213,  630 => 212,  627 => 211,  617 => 204,  610 => 200,  603 => 196,  596 => 192,  589 => 188,  583 => 185,  579 => 184,  575 => 182,  573 => 181,  570 => 180,  564 => 176,  553 => 174,  549 => 173,  529 => 155,  527 => 154,  524 => 153,  518 => 151,  516 => 150,  511 => 148,  508 => 147,  504 => 145,  502 => 144,  486 => 130,  478 => 128,  474 => 127,  469 => 125,  467 => 124,  458 => 122,  454 => 121,  444 => 118,  438 => 116,  436 => 115,  432 => 114,  426 => 112,  424 => 111,  421 => 110,  406 => 108,  402 => 107,  399 => 106,  389 => 103,  379 => 101,  377 => 100,  373 => 99,  364 => 97,  360 => 96,  355 => 95,  348 => 92,  342 => 90,  340 => 89,  338 => 88,  327 => 86,  323 => 85,  320 => 84,  309 => 82,  304 => 81,  298 => 79,  292 => 77,  289 => 76,  283 => 74,  281 => 73,  277 => 72,  273 => 71,  268 => 70,  265 => 69,  262 => 68,  256 => 66,  254 => 65,  249 => 64,  243 => 62,  240 => 61,  234 => 59,  231 => 58,  228 => 57,  222 => 55,  220 => 54,  215 => 52,  210 => 51,  208 => 50,  203 => 49,  197 => 47,  194 => 46,  188 => 44,  186 => 43,  182 => 42,  179 => 41,  175 => 40,  172 => 39,  169 => 38,  163 => 36,  161 => 35,  158 => 34,  145 => 32,  141 => 31,  135 => 29,  133 => 28,  119 => 25,  115 => 24,  102 => 22,  98 => 21,  96 => 20,  90 => 18,  88 => 17,  82 => 15,  80 => 14,  76 => 13,  72 => 12,  66 => 9,  52 => 6,  49 => 5,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/common/header.twig", "");
    }
}
