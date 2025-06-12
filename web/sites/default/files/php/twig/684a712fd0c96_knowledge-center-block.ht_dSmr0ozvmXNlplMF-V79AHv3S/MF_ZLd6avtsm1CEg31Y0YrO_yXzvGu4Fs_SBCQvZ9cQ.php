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

/* modules/custom/bim_landing/templates/knowledge-center-block.html.twig */
class __TwigTemplate_20f6cfa34d642ce13053646a3a4b1020 extends Template
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
<section class=\"knowledge-center\">
  <div class=\"knowledge-center__header\">
    <p class=\"knowledge-center__label\">KNOWLEDGE CENTER</p>
    <h2 class=\"knowledge-center__title\">Your Guide to Smarter Learning</h2>
  </div>
  
  <div class=\"knowledge-center__grid\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["tutorials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
            // line 19
            yield "      <div class=\"tutorial-card\">
        <div class=\"tutorial-card__media\">
          <img src=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "thumbnail", [], "any", false, false, true, 21), "html", null, true);
            yield "\" alt=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, true, 21), "html", null, true);
            yield "\" class=\"tutorial-card__thumbnail\">
          <button class=\"tutorial-card__play-btn\" onclick=\"playVideo('";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "video_url", [], "any", false, false, true, 22), "html", null, true);
            yield "')\">
            <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
              <path d=\"M8 5v14l11-7z\" fill=\"currentColor\"/>
            </svg>
          </button>
        </div>
        
        <div class=\"tutorial-card__content\">
          <div class=\"tutorial-card__header\">
            <span class=\"tutorial-card__company\">";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "company", [], "any", false, false, true, 31), "html", null, true);
            yield "</span>
            <div class=\"tutorial-card__meta\">
              <span class=\"tutorial-card__type\">";
            // line 33
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "type", [], "any", false, false, true, 33), "html", null, true);
            yield "</span>
              <span class=\"tutorial-card__duration\">";
            // line 34
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "duration", [], "any", false, false, true, 34), "html", null, true);
            yield "</span>
            </div>
          </div>
          
          <h3 class=\"tutorial-card__title\">";
            // line 38
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, true, 38), "html", null, true);
            yield "</h3>
          
          <a href=\"";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["tutorial"], "tutorial_url", [], "any", false, false, true, 40), "html", null, true);
            yield "\" class=\"tutorial-card__link\">
            View Tutorial
            <svg width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\">
              <path d=\"M5 12h14m-7-7l7 7-7 7\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
            </svg>
          </a>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tutorial'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "  </div>
  
  <div class=\"knowledge-center__footer\">
    <a href=\"/tutorials\" class=\"btn btn--primary\">View all</a>
  </div>
</section>

<script>
function playVideo(videoUrl) {
  // Add your video player logic here
  console.log('Playing video:', videoUrl);
  // You can integrate with a modal video player or redirect to video page
}
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["tutorials"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/bim_landing/templates/knowledge-center-block.html.twig";
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
        return array (  116 => 49,  101 => 40,  96 => 38,  89 => 34,  85 => 33,  80 => 31,  68 => 22,  62 => 21,  58 => 19,  54 => 18,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/bim_landing/templates/knowledge-center-block.html.twig", "C:\\laragon\\www\\nemetschek\\web\\modules\\custom\\bim_landing\\templates\\knowledge-center-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 18];
        static $filters = ["escape" => 21];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
