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

/* modules/custom/bim_landing/templates/bim-landing-page.html.twig */
class __TwigTemplate_c87b9588aa06f82bfdbc0430c6e3e204 extends Template
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
        // line 15
        yield "

</style>
<div
\tclass=\"bim-landing-page\">
\t<!-- Hero Section -->
\t<section class=\"hero-section\">
\t\t<div class=\"hero-content\">
\t\t\t<div class=\"hero-text\">
\t\t\t\t<h1 class=\"hero-heading\">";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["hero_heading"] ?? null));
        yield "</h1>
\t\t\t\t<h1 class=\"title\">";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["hero_title"] ?? null));
        yield "</h1>
\t\t\t\t<p class=\"subtitle\">";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["hero_subtitle"] ?? null), "html", null, true);
        yield "</p>
\t\t\t\t<a href=\"";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cta_link"] ?? null), "html", null, true);
        yield "\" class=\"cta-button\">
\t\t\t\t\t";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["cta_text"] ?? null), "html", null, true);
        yield "
\t\t\t\t\t→
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"hero-image\">
\t\t\t\t<div class=\"building-image\">
\t\t\t\t\t<img src=\"/drupal/web/modules/custom/bim_landing/assets/solutions_banner.png\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Content Section -->
\t<section class=\"content-section\">
\t\t<div class=\"intro-text\">
\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["intro_text"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["paragraph"]) {
            // line 44
            yield "\t\t\t\t<p>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["paragraph"], "html", null, true);
            yield "</p>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['paragraph'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "\t\t</div>
\t</section>

\t<!-- Tools Section -->
\t<section class=\"tools-section\">
\t\t<div class=\"tools-content\">
\t\t\t<div class=\"tools-header\">
\t\t\t\t<p class=\"tools-label\">";
        // line 53
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("UTILIZE OUR TOOLS TO"));
        yield "</p>
\t\t\t\t<h2>";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Bring design ideas to life"));
        yield "</h2>
\t\t\t\t<p class=\"subtitle\">";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Choose a bundle to view the included software"));
        yield "</p>
\t\t\t</div>

\t\t\t<div class=\"product-tabs\">
\t\t\t\t<button class=\"tab active\" data-series=\"all\">";
        // line 59
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All Products"));
        yield "</button>
\t\t\t\t<button class=\"tab\" data-series=\"series1\">";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Series 1"));
        yield "</button>
\t\t\t\t<button class=\"tab\" data-series=\"series2\">";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Series 2"));
        yield "</button>
\t\t\t\t<button class=\"tab\" data-series=\"series3\">";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Series 3"));
        yield "</button>
\t\t\t</div>

\t\t\t<div class=\"products-grid\" id=\"products-grid\">
\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["products"] ?? null));
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
        foreach ($context['_seq'] as $context["key"] => $context["product"]) {
            // line 67
            yield "\t\t\t\t\t";
            yield from $this->loadTemplate("@bim_landing/bim-product-card.html.twig", "modules/custom/bim_landing/templates/bim-landing-page.html.twig", 67)->unwrap()->yield(CoreExtension::merge($context, ["product" => $context["product"]]));
            // line 68
            yield "\t\t\t\t";
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
        unset($context['_seq'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "\t\t\t</div>
\t\t\t<a href=\"#\" class=\"cta-button\" style=\"margin-top:30px\">
\t\t\t\tBuy Stack Now →
\t\t\t</a>
\t\t</div>
\t</section>
</div>
";
        // line 76
        yield from $this->loadTemplate("@bim_landing/templates/ArchitectureCaseStudies.html.twig", "modules/custom/bim_landing/templates/bim-landing-page.html.twig", 76)->unwrap()->yield(CoreExtension::merge($context, ["architecture" => ($context["architecture"] ?? null)]));
        // line 77
        yield "

";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("knowledge_center_block"), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["hero_heading", "hero_title", "hero_subtitle", "cta_link", "cta_text", "intro_text", "products", "architecture"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/bim_landing/templates/bim-landing-page.html.twig";
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
        return array (  194 => 79,  190 => 77,  188 => 76,  179 => 69,  165 => 68,  162 => 67,  145 => 66,  138 => 62,  134 => 61,  130 => 60,  126 => 59,  119 => 55,  115 => 54,  111 => 53,  102 => 46,  93 => 44,  89 => 43,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/bim_landing/templates/bim-landing-page.html.twig", "C:\\laragon\\www\\nemetschek\\web\\modules\\custom\\bim_landing\\templates\\bim-landing-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 43, "include" => 67];
        static $filters = ["raw" => 24, "escape" => 26, "t" => 53];
        static $functions = ["drupal_block" => 79];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'include'],
                ['raw', 'escape', 't'],
                ['drupal_block'],
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
