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

/* @bim_landing/bim-product-card.html.twig */
class __TwigTemplate_05e8a259cd3eb61099073ba3dfc7db3a extends Template
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
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "
<div class=\"product-card\">
  <div class=\"product-logo\">
   <img src=\"";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "logo", [], "any", false, false, true, 13), "html", null, true);
        yield "\"> </img>
  </div>
  ";
        // line 16
        yield "  <p class=\"tagline\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "tagline", [], "any", false, false, true, 16), "html", null, true);
        yield "</p>
  <p>";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, true, 17), "html", null, true);
        yield "</p>
  ";
        // line 18
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "link", [], "any", false, false, true, 18)) {
            // line 19
            yield "    <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "link", [], "any", false, false, true, 19), "html", null, true);
            yield "\" class=\"product-link\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Learn More"));
            yield " →</a>
  ";
        }
        // line 21
        yield "</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["product"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bim_landing/bim-product-card.html.twig";
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
        return array (  73 => 21,  65 => 19,  63 => 18,  59 => 17,  54 => 16,  49 => 13,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bim_landing/bim-product-card.html.twig", "C:\\laragon\\www\\nemetschek\\web\\modules\\custom\\bim_landing\\bim-product-card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 18];
        static $filters = ["escape" => 13, "t" => 19];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
