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

/* journal3/template/product/review.twig */
class __TwigTemplate_22406bdd447d50b0187721b969a60332 extends Template
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
        if ((($tmp = ($context["reviews"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 3
                yield "<table class=\"table table-striped table-bordered\">
  <tr>
    <td style=\"width: 50%;\"><strong>";
                // line 5
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "author", [], "any", false, false, false, 5);
                yield "</strong></td>
    <td class=\"text-right\">";
                // line 6
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "date_added", [], "any", false, false, false, 6);
                yield "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><p>";
                // line 9
                yield CoreExtension::getAttribute($this->env, $this->source, $context["review"], "text", [], "any", false, false, false, 9);
                yield "</p>
      <div class=\"rating\">
      <div class=\"rating-stars\">
      ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 13
                    yield "      ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 13) < $context["i"])) {
                        yield " <span class=\"fa fa-stack\"><em class=\"fa fa-star-o fa-stack-2x\"></em></span> ";
                    } else {
                        yield " <span class=\"fa fa-stack\"><em class=\"fa fa-star fa-stack-2x\"></em><em class=\"fa fa-star-o fa-stack-2x\"></em></span> ";
                    }
                    // line 14
                    yield "      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                yield "      </div>
      </div>
    </td>
  </tr>
</table>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['review'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "<div class=\"pagination-results\">
  <div class=\"text-left\">";
            // line 22
            yield ($context["pagination"] ?? null);
            yield "</div>
</div>
";
        } else {
            // line 25
            yield "<p>";
            yield ($context["text_no_reviews"] ?? null);
            yield "</p>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "journal3/template/product/review.twig";
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
        return array (  105 => 25,  99 => 22,  96 => 21,  85 => 15,  79 => 14,  72 => 13,  68 => 12,  62 => 9,  56 => 6,  52 => 5,  48 => 3,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "journal3/template/product/review.twig", "");
    }
}
