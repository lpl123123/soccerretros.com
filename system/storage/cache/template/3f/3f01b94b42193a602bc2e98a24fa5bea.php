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

/* journal3/template/journal3/grid.twig */
class __TwigTemplate_2accdf40d7cf9ef7796b85719fb1b2d7 extends Template
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
        if ((($tmp = ($context["rows"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            yield "  <div class=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [($context["grid_classes"] ?? null)], "method", false, false, false, 2);
            yield " ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["rows"] ?? null)) == 1)) {
                yield "single-item";
            }
            yield "\">
    ";
            // line 3
            if ((($tmp = ($context["edit"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 4
                yield "      <button aria-label=\"Edit\" class=\"admin-edit\" type=\"button\" data-edit=\"";
                yield ($context["edit"] ?? null);
                yield "\"><em class=\"fa fa-pencil\" data-placement=\"auto\" data-toggle=\"tooltip-hover\" data-tooltip-class=\"admin-edit-tooltip\" title=\"Edit ";
                yield ($context["name"] ?? null);
                yield "\"></em></button>
    ";
            }
            // line 6
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["grid_row"]) {
                // line 7
                yield "      <div class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "classes", [], "any", false, false, false, 7)], "method", false, false, false, 7);
                yield "\">
        ";
                // line 8
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "waveStatus", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 9
                    yield "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-top\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 ";
                    // line 10
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "waveDirection", [], "any", false, false, false, 10);
                    yield " 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        ";
                }
                // line 13
                yield "        <div class=\"row-bg\"></div>
        ";
                // line 14
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "videoBgStatus", [], "any", false, false, false, 14) && CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "videoBg", [], "any", false, false, false, 14))) {
                    // line 15
                    yield "          <div class=\"video-row\">
            <video preload=\"none\" data-autoplay autoplay loop muted playsinline class=\"video-bg lazyload\" data-src=\"";
                    // line 16
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "videoBg", [], "any", false, false, false, 16);
                    yield "\"></video>
          </div>
        ";
                }
                // line 19
                yield "        <div class=\"grid-cols-wrapper\">
          <div class=\"grid-cols ";
                // line 20
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "columns", [], "any", false, false, false, 20)) == 1)) {
                    yield "single-item";
                }
                yield "\">
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "columns", [], "any", false, false, false, 21));
                foreach ($context['_seq'] as $context["_key"] => $context["grid_column"]) {
                    // line 22
                    yield "              <div class=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["grid_column"], "classes", [], "any", false, false, false, 22)], "method", false, false, false, 22);
                    yield "\">
                ";
                    // line 23
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["grid_column"], "videoColStatus", [], "any", false, false, false, 23) && CoreExtension::getAttribute($this->env, $this->source, $context["grid_column"], "videoCol", [], "any", false, false, false, 23))) {
                        // line 24
                        yield "                  <video preload=\"none\" data-autoplay autoplay loop muted playsinline class=\"video-col-bg lazyload\" data-src=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["grid_column"], "videoCol", [], "any", false, false, false, 24);
                        yield "\"></video>
                ";
                    }
                    // line 26
                    yield "                <div class=\"grid-items ";
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["grid_column"], "items", [], "any", false, false, false, 26)) == 1)) {
                        yield "single-item";
                    }
                    yield "\">
                  ";
                    // line 27
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["grid_column"], "items", [], "any", false, false, false, 27));
                    foreach ($context['_seq'] as $context["_key"] => $context["grid_item"]) {
                        // line 28
                        yield "                    <div class=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, ($context["journal3"] ?? null), "classes", [CoreExtension::getAttribute($this->env, $this->source, $context["grid_item"], "classes", [], "any", false, false, false, 28)], "method", false, false, false, 28);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["grid_item"], "item", [], "any", false, false, false, 28);
                        yield "</div>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['grid_item'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 30
                    yield "                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['grid_column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "          </div>
        </div>
        ";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "wave2Status", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "          <svg viewBox=\"0 0 100 20\" class=\"wave wave-bottom\" preserveAspectRatio=\"none\">
            <path fill=\"white\" d=\"M 0 30 V 10 Q 25 ";
                    // line 37
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["grid_row"], "wave2Direction", [], "any", false, false, false, 37);
                    yield " 55 10 T 100 10 V 30 Z\"></path>
          </svg>
        ";
                }
                // line 40
                yield "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['grid_row'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/journal3/grid.twig";
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
        return array (  176 => 42,  169 => 40,  163 => 37,  160 => 36,  158 => 35,  154 => 33,  146 => 30,  135 => 28,  131 => 27,  124 => 26,  118 => 24,  116 => 23,  111 => 22,  107 => 21,  101 => 20,  98 => 19,  92 => 16,  89 => 15,  87 => 14,  84 => 13,  78 => 10,  75 => 9,  73 => 8,  68 => 7,  63 => 6,  55 => 4,  53 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/journal3/grid.twig", "");
    }
}
