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

/* modules/custom/products/templates/products-bluebeam.html.twig */
class __TwigTemplate_69f94be69e673aa783d8918083a67f9e extends Template
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
        // line 11
        yield "
<div
\tclass=\"products-page bluebeam-page\">

\t";
        // line 16
        yield "\t<section class=\"hero-section\">
\t\t<div class=\"hero-content\">
\t\t\t<div class=\"hero-text\">
\t\t\t\t<p class=\"hero-heading\">";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "subtitle", [], "any", false, false, true, 19), "html", null, true);
        yield "</p>
\t\t\t\t<h1 class=\"title\">";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, true, 20), "html", null, true);
        yield "</h1>
\t\t\t\t<p class=\"subtitle\">";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "description", [], "any", false, false, true, 21), "html", null, true);
        yield "</p>
\t\t\t\t<a href=\"";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "cta_url", [], "any", false, false, true, 22), "html", null, true);
        yield "\" class=\"cta-button\">
\t\t\t\t\t";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "cta_text", [], "any", false, false, true, 23), "html", null, true);
        yield "
\t\t\t\t\t<span class=\"cta-arrow\">→</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"building-image\">
\t\t\t\t<img src=\"";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, true, 28), "html", null, true);
        yield "\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["banner"] ?? null), "title", [], "any", false, false, true, 28), "html", null, true);
        yield " Interface\"/>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 34
        yield "\t<section class=\"product-content\">
\t\t<div class=\"content-container\">
\t\t\t<div class=\"content-grid\">
\t\t\t\t<div class=\"content-text\">
\t\t\t\t\t<p class=\"content-stats\">";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "description", [], "any", false, false, true, 38), "html", null, true);
        yield "</p>
\t\t\t\t\t<p class=\"content-stats\">";
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "stats", [], "any", false, false, true, 39), "html", null, true);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-video\">
\t\t\t\t\t<div class=\"video-container\">
\t\t\t\t\t\t<div class=\"video-thumbnail\">
\t\t\t\t\t\t\t<img src=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "video_thumbnail", [], "any", false, false, true, 44), "html", null, true);
        yield "\" alt=\"Video thumbnail\"/>
\t\t\t\t\t\t\t<div class=\"play-button\">
\t\t\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\">
\t\t\t\t\t\t\t\t\t<path d=\"M8 5v14l11-7z\" fill=\"currentColor\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t";
        // line 59
        yield "\t<section class=\"learn-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t<div class=\"learn-content\">
\t\t\t\t\t\t<h2 class=\"learn-title\">Learn Bluebeam</h2>
\t\t\t\t\t\t<p class=\"learn-description\">
\t\t\t\t\t\t\tWhether you're just starting your journey with Bluebeam or aiming to enhance and refine your expertise, we provide all the resources, tools, and support you need to succeed. Whatever your goals may be, we've got you covered.
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<a href=\"#\" class=\"cta-button\">
\t\t\t\t\t\t\tStart Learning
\t\t\t\t\t\t\t<span class=\"learn-arrow\">→</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t<div class=\"learn-image\">
\t\t\t\t\t\t<img src=\"";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "learn_image", [], "any", true, true, true, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "learn_image", [], "any", false, false, true, 76), "/drupal/web/modules/custom/products/assets/learn_bluebeam.png")) : ("/drupal/web/modules/custom/products/assets/learn_bluebeam.png")), "html", null, true);
        yield "\" alt=\"Bluebeam Learning Interface\" class=\"img-fluid\"/>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t<section class=\"company-relies\">
\t\t<div class=\"container-company\">
\t\t<div class=\"content text-center\">Companies that rely on Bluebeam </div>


\t\t\t<div class=\"company-card d-flex justify-content-between\">
\t\t\t\t<div class=\"company-logo\">
\t\t\t\t\t<img src=\"";
        // line 91
        yield "/drupal/web/modules/custom/products/assets/ramboll.png";
        yield "\"></img>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"company-logo\">
\t\t\t\t\t<img src=\"";
        // line 94
        yield "/drupal/web/modules/custom/products/assets/wsp.png";
        yield "\"></img>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"company-logo\">
\t\t\t\t\t<img src=\"";
        // line 97
        yield "/drupal/web/modules/custom/products/assets/cowi.png";
        yield "\"></img>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"company-logo\">
\t\t\t\t\t<img src=\"";
        // line 100
        yield "/drupal/web/modules/custom/products/assets/afry.png";
        yield "\"></img>
\t\t\t\t</div>
\t\t\t\t\t<div class=\"company-logo\">
\t\t\t\t\t<img src=\"";
        // line 103
        yield "/drupal/web/modules/custom/products/assets/laing.png";
        yield "\"></img>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        // line 109
        yield "<div class=\"container\">
\t<h2 class=\"faq-title\">Frequently Asked Questions</h2>

\t<div class=\"faq-container\">
\t\t<div
\t\t\tclass=\"accordion\" id=\"faqAccordion\">
\t\t\t<!-- FAQ Item 1 -->
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h3 class=\"accordion-header\" id=\"headingOne\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
\t\t\t\t\t\tUnderstanding the Archicad BIM workflow
\t\t\t\t\t</button>
\t\t\t\t</h3>
\t\t\t\t<div id=\"collapseOne\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\tLearn about the Building Information Modeling (BIM) workflow in Archicad, including project setup, collaborative modeling, documentation, and delivery processes.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- FAQ Item 2 -->
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h3 class=\"accordion-header\" id=\"headingTwo\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\tCan I use Bluebeam on multiple devices?
\t\t\t\t\t</button>
\t\t\t\t</h3>
\t\t\t\t<div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\tYes, Bluebeam licenses allow installation on multiple devices. You can install and use Bluebeam on your desktop, laptop, and mobile devices with a single license, ensuring seamless workflow across all your devices.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- FAQ Item 3 -->
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h3 class=\"accordion-header\" id=\"headingThree\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
\t\t\t\t\t\tOnce I've purchased, how do I give myself or other users access to Bluebeam software?
\t\t\t\t\t</button>
\t\t\t\t</h3>
\t\t\t\t<div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\tAfter purchase, you'll receive license information and download links. You can distribute licenses to team members through the Bluebeam Administrator Console, where you can manage user access, assign seats, and monitor usage across your organization.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- FAQ Item 4 -->
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h3 class=\"accordion-header\" id=\"headingFour\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFour\" aria-expanded=\"false\" aria-controls=\"collapseFour\">
\t\t\t\t\t\tWhat operating system does Bluebeam run on?
\t\t\t\t\t</button>
\t\t\t\t</h3>
\t\t\t\t<div id=\"collapseFour\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFour\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\tBluebeam Revu runs on Windows operating systems (Windows 10 and 11). There are also mobile apps available for iOS and Android devices, allowing you to view, markup, and collaborate on documents from anywhere.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- FAQ Item 5 -->
\t\t\t<div class=\"accordion-item\">
\t\t\t\t<h3 class=\"accordion-header\" id=\"headingFive\">
\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseFive\" aria-expanded=\"false\" aria-controls=\"collapseFive\">
\t\t\t\t\t\tHow can I get in touch with Bluebeam?
\t\t\t\t\t</button>
\t\t\t\t</h3>
\t\t\t\t<div id=\"collapseFive\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingFive\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\tYou can contact Bluebeam through their official website, phone support, or email. They offer technical support, sales assistance, and training resources. Check their support portal for documentation, tutorials, and community forums.
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></section></div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["banner", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/custom/products/templates/products-bluebeam.html.twig";
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
        return array (  193 => 109,  185 => 103,  179 => 100,  173 => 97,  167 => 94,  161 => 91,  143 => 76,  124 => 59,  107 => 44,  99 => 39,  95 => 38,  89 => 34,  79 => 28,  71 => 23,  67 => 22,  63 => 21,  59 => 20,  55 => 19,  50 => 16,  44 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/custom/products/templates/products-bluebeam.html.twig", "C:\\laragon\\www\\nemetschek\\web\\modules\\custom\\products\\templates\\products-bluebeam.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 19, "default" => 76];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'default'],
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
