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

/* journal3/template/journal3/blog/feed.twig */
class __TwigTemplate_6e80eb193edf21049a4f2aeab0b96b77 extends Template
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
        yield "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\" xmlns:atom=\"http://www.w3.org/2005/Atom\">
  <channel>
    <atom:link href=\"";
        // line 4
        yield ($context["feed_link"] ?? null);
        yield "\" rel=\"self\" type=\"application/rss+xml\"/>
    <title><![CDATA[";
        // line 5
        yield ($context["title"] ?? null);
        yield "]]></title>
    <link>";
        // line 6
        yield ($context["blog_link"] ?? null);
        yield "</link>
    <description><![CDATA[";
        // line 7
        yield ($context["meta_description"] ?? null);
        yield "]]></description>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 10
            yield "      <item>
        <title><![CDATA[";
            // line 11
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 11);
            yield "]]></title>
        ";
            // line 12
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 12)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 13
                yield "          <author><![CDATA[";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 13);
                yield "]]></author>
        ";
            }
            // line 15
            yield "        <pubDate>";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "date", [], "any", false, false, false, 15);
            yield "</pubDate>
        <link>";
            // line 16
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 16);
            yield "</link>
        <guid>";
            // line 17
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 17);
            yield "</guid>
        <description>
          <![CDATA[
          ";
            // line 20
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 21
                yield "            <p><img src=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "thumb", [], "any", false, false, false, 21);
                yield "\" alt=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "name", [], "any", false, false, false, 21);
                yield "\"/></p>
          ";
            }
            // line 23
            yield "          ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 23);
            yield "
          <a href=\"";
            // line 24
            yield CoreExtension::getAttribute($this->env, $this->source, $context["post"], "href", [], "any", false, false, false, 24);
            yield "\">Read More</a>
          ]]>
        </description>
      </item>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "
  </channel>
</rss>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/blog/feed.twig";
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
        return array (  124 => 29,  113 => 24,  108 => 23,  100 => 21,  98 => 20,  92 => 17,  88 => 16,  83 => 15,  77 => 13,  75 => 12,  71 => 11,  68 => 10,  64 => 9,  59 => 7,  55 => 6,  51 => 5,  47 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/blog/feed.twig", "");
    }
}
