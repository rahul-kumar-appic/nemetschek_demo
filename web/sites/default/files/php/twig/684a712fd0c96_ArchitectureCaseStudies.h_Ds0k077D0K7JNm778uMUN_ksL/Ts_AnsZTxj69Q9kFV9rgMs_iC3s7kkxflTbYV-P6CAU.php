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

/* @bim_landing/templates/ArchitectureCaseStudies.html.twig */
class __TwigTemplate_0c9101b7615d95591bb0d8a138ce7e61 extends Template
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
        // line 43
        yield "<div class=\"architecture-case-studies\" id=\"architecture-case-studies\">
  <div class=\"case-studies-header\">
    <h2 class=\"case-studies-title\">";
        // line 45
        yield "ARCHITECTURE CASE STUDIES";
        yield "</h2>
    <h1 class=\"case-studies-subtitle\">";
        // line 46
        yield "Driving Results with Precision and Purpose";
        yield "</h1>
  </div>
  
  <div class=\"case-studies-carousel-wrapper\">
    <div class=\"case-studies-carousel\" id=\"case-studies-carousel\">
      <div class=\"carousel-track\" id=\"carousel-track\">
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["architecture"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["study"]) {
            // line 53
            yield "          <div class=\"carousel-slide\">
            <div class=\"case-study-card\">
              <div class=\"case-study-image\" style=\"background-image: url('";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["study"], "image_url", [], "any", false, false, true, 55), "html", null, true);
            yield "');\">
                <div class=\"case-study-overlay\">
                  <h4 class=\"case-study-title\">";
            // line 57
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["study"], "title", [], "any", false, false, true, 57), "html", null, true);
            yield "</h4>
                  <p class=\"case-study-description\">";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["study"], "description", [], "any", false, false, true, 58), "html", null, true);
            yield "</p>
                </div>
              </div>
            </div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['study'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "      </div>
    </div>
    
    <button class=\"carousel-nav carousel-nav-prev\" id=\"prev-btn\" aria-label=\"";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous slide"));
        yield "\">
      <span class=\"nav-arrow\">‹</span>
    </button>
    <button class=\"carousel-nav carousel-nav-next\" id=\"next-btn\" aria-label=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next slide"));
        yield "\">
      <span class=\"nav-arrow\">›</span>
    </button>
  </div>
  
  <div class=\"cta-section\">
    <a href=\"#\" class=\"cta-button\">
      ";
        // line 77
        yield "Explore Case Studies";
        yield "
      <span>→</span>
    </a>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["architecture"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bim_landing/templates/ArchitectureCaseStudies.html.twig";
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
        return array (  111 => 77,  101 => 70,  95 => 67,  90 => 64,  78 => 58,  74 => 57,  69 => 55,  65 => 53,  61 => 52,  52 => 46,  48 => 45,  44 => 43,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bim_landing/templates/ArchitectureCaseStudies.html.twig", "C:\\laragon\\www\\nemetschek\\web\\modules\\custom\\bim_landing\\templates\\ArchitectureCaseStudies.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 52];
        static $filters = ["escape" => 55, "t" => 67];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
