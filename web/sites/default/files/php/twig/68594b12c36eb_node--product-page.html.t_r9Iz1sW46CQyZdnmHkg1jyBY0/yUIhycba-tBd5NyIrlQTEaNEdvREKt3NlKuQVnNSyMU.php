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

/* themes/custom/Nemetschek/templates/node--product-page.html.twig */
class __TwigTemplate_645e84a2bf723232e629700932f02c75 extends Template
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
        // line 1
        yield "<div
\tclass=\"products-page bluebeam-page\">

\t";
        // line 5
        yield "\t<section class=\"hero-section section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"hero-content row\">
\t\t\t\t<div class=\"hero-text col-12 col-md-6\">
\t\t\t\t\t<p class=\"title2 text-white\">";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_small_title", [], "any", false, false, true, 9), "html", null, true);
        yield "</p>
\t\t\t\t\t<h1 class=\"title text-white\">";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_name", [], "any", false, false, true, 10), "html", null, true);
        yield "</h1>
\t\t\t\t\t<p class=\"subtext text-white\">";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_description", [], "any", false, false, true, 11), "html", null, true);
        yield "</p>
\t\t\t\t\t<a href=\"javascript:Void(0)\" class=\"btn btn-custom mx-0\">
\t\t\t\t\t\t";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_cta_text", [], "any", false, false, true, 13), "html", null, true);
        yield "
\t\t\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M17.725 5.33639L17.7242 5.3355L12.8256 0.460497C12.4586 0.0952938 11.865 0.0966529 11.4997 0.463684C11.1345 0.830668 11.1359 1.42425 11.5028 1.7895L14.7918 5.0625H0.9375C0.419719 5.0625 0 5.48222 0 6C0 6.51778 0.419719 6.9375 0.9375 6.9375H14.7917L11.5029 10.2105C11.1359 10.5757 11.1345 11.1693 11.4998 11.5363C11.865 11.9034 12.4587 11.9047 12.8256 11.5395L17.7242 6.6645L17.7251 6.66361C18.0923 6.29714 18.0911 5.70164 17.725 5.33639Z\" fill=\"white\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"building-image col-12 col-md-6\">
\t\t\t\t\t";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_hero_image", [], "any", false, false, true, 20), "html", null, true);
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t";
        // line 28
        yield "\t<section class=\"product-content section white\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-grid-gutter align-items-center\">
\t\t\t\t<div class=\"content-text col-12 col-md-6\">
\t\t\t\t\t<p class=\"subtext\">";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_intro_text", [], "any", false, false, true, 32), "html", null, true);
        yield "</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"content-video col-12 col-md-6\">
\t\t\t\t\t<div class=\"video-container\">
\t\t\t\t\t\t<div class=\"video-thumbnail\">
\t\t\t\t\t\t\t";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_video_thubmnail", [], "any", false, false, true, 37), "html", null, true);
        yield "
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
        // line 51
        yield "\t";
        // line 52
        yield "\t<section class=\"features-section section\" style=\"background:#D3E4F680\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 mb-40\">

\t\t\t\t\t<h1 class=\"title text-center\">Key Features</h1>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12  project-slider\">
\t\t\t\t\t<div class=\"swiper mySwiper2\">
\t\t\t\t\t\t<div class=\"swiper-wrapper\">

\t\t\t\t\t\t\t";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_key_features", [], "any", false, false, true, 64)) {
            // line 65
            yield "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_key_features", [], "any", false, false, true, 65));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 66
                yield "\t\t\t\t\t\t\t\t\t";
                if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                    // line 67
                    yield "\t\t\t\t\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-card\" style=\"background-image: url('";
                    // line 68
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v0 = $context["item"]) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 68)), "field_feature_image", [], "any", false, false, true, 68), "entity", [], "any", false, false, true, 68), "fileuri", [], "any", false, false, true, 68)), "html", null, true);
                    yield "');\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"image-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h3>";
                    // line 70
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v1 = $context["item"]) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 70)), "field_feature_title", [], "any", false, false, true, 70), "value", [], "any", false, false, true, 70), "html", null, true);
                    yield "</h3>
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 71
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = $context["item"]) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 71)), "field_feature_description", [], "any", false, false, true, 71), "value", [], "any", false, false, true, 71), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                yield "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "\t\t\t\t\t\t\t";
        }
        // line 78
        yield "\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"swiper-button-prev\">

\t\t\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M0.274969 6.85111L0.275812 6.852L5.17444 11.727C5.54142 12.0922 6.135 12.0908 6.5003 11.7238C6.86555 11.3568 6.86414 10.7633 6.49716 10.398L3.20822 7.125L17.0625 7.125C17.5803 7.125 18 6.70528 18 6.1875C18 5.66972 17.5803 5.25 17.0625 5.25L3.20826 5.25001L6.49711 1.977C6.86409 1.61175 6.8655 1.01818 6.50025 0.651192C6.13495 0.284114 5.54133 0.282848 5.17439 0.648005L0.275764 5.52301L0.274921 5.5239C-0.0922514 5.89036 -0.0910783 6.48586 0.274969 6.85111Z\" fill=\"#878787\"/>
\t\t\t\t\t\t</svg>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"swiper-button-next\">

\t\t\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M17.725 5.14889L17.7242 5.148L12.8256 0.272997C12.4586 -0.0922062 11.865 -0.0908471 11.4997 0.276184C11.1345 0.643168 11.1359 1.23675 11.5028 1.602L14.7918 4.875L0.9375 4.875C0.419719 4.875 0 5.29472 0 5.8125C0 6.33028 0.419719 6.75 0.9375 6.75L14.7917 6.75L11.5029 10.023C11.1359 10.3882 11.1345 10.9818 11.4998 11.3488C11.865 11.7159 12.4587 11.7172 12.8256 11.352L17.7242 6.477L17.7251 6.47611C18.0923 6.10964 18.0911 5.51414 17.725 5.14889Z\" fill=\"#878787\"/>
\t\t\t\t\t\t</svg>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 text-center mt-40\">
\t\t\t\t\t<a href=\"javascript:Void(0)\" class=\"btn btn-custom\">
\t\t\t\t\t\tBuy
\t\t\t\t\t\t";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_name", [], "any", false, false, true, 99), "html", null, true);
        yield "
\t\t\t\t\t\tNow
\t\t\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t<path d=\"M17.725 5.33639L17.7242 5.3355L12.8256 0.460497C12.4586 0.0952938 11.865 0.0966529 11.4997 0.463684C11.1345 0.830668 11.1359 1.42425 11.5028 1.7895L14.7918 5.0625H0.9375C0.419719 5.0625 0 5.48222 0 6C0 6.51778 0.419719 6.9375 0.9375 6.9375H14.7917L11.5029 10.2105C11.1359 10.5757 11.1345 11.1693 11.4998 11.5363C11.865 11.9034 12.4587 11.9047 12.8256 11.5395L17.7242 6.6645L17.7251 6.66361C18.0923 6.29714 18.0911 5.70164 17.725 5.33639Z\" fill=\"white\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 111
        yield "
\t<section class=\"company-relies section bg-white\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t<h1 class=\"title  text-center\">Companies that rely on
\t\t\t\t\t\t";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_name", [], "any", false, false, true, 118), "html", null, true);
        yield "
\t\t\t\t\t</h1>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"company-card d-flex justify-content-between\">
\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_companies_logo", [], "any", false, false, true, 124));
        foreach ($context['_seq'] as $context["key"] => $context["logo"]) {
            // line 125
            yield "\t\t\t\t\t\t\t";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 126
                yield "\t\t\t\t\t\t\t\t<div class=\"company-logo\">
\t\t\t\t\t\t\t\t\t";
                // line 127
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["logo"], "html", null, true);
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 130
            yield "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['logo'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t";
        // line 138
        yield "\t<section class=\"case-studies-section section bg-white\">

\t\t<h2 class=\"title text-center\">Case Studies</h2>

\t\t<div class=\"swiper case-study-slider\">
\t\t\t<div class=\"swiper-wrapper\">
\t\t\t\t";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_case_studies", [], "any", false, false, true, 144));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 145
            yield "\t\t\t\t\t";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 146
                yield "\t\t\t\t\t\t<div class=\"swiper-slide\">
\t\t\t\t\t\t\t<div class=\"image-card\" style=\"background-image: url('";
                // line 147
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = $context["item"]) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 147)), "field_background_of_the_card", [], "any", false, false, true, 147), "entity", [], "any", false, false, true, 147), "fileuri", [], "any", false, false, true, 147)), "html", null, true);
                yield "');\">
\t\t\t\t\t\t\t\t<div class=\"image-content\">
\t\t\t\t\t\t\t\t\t<h3 class=\"text-center\">";
                // line 149
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v4 = $context["item"]) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 149)), "field_company_name", [], "any", false, false, true, 149), "value", [], "any", false, false, true, 149), "html", null, true);
                yield "</h3>
\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
                // line 150
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = $context["item"]) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["item"], "#paragraph", [], "array", false, false, true, 150)), "field_company_description", [], "any", false, false, true, 150), "value", [], "any", false, false, true, 150), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 155
            yield "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        yield "\t\t\t</div>
\t\t\t<div class=\"swiper-button-prev\">

\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M0.274969 6.85111L0.275812 6.852L5.17444 11.727C5.54142 12.0922 6.135 12.0908 6.5003 11.7238C6.86555 11.3568 6.86414 10.7633 6.49716 10.398L3.20822 7.125L17.0625 7.125C17.5803 7.125 18 6.70528 18 6.1875C18 5.66972 17.5803 5.25 17.0625 5.25L3.20826 5.25001L6.49711 1.977C6.86409 1.61175 6.8655 1.01818 6.50025 0.651192C6.13495 0.284114 5.54133 0.282848 5.17439 0.648005L0.275764 5.52301L0.274921 5.5239C-0.0922514 5.89036 -0.0910783 6.48586 0.274969 6.85111Z\" fill=\"#878787\"/>
\t\t\t\t</svg>

\t\t\t</div>
\t\t\t<div class=\"swiper-button-next\">

\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t<path d=\"M17.725 5.14889L17.7242 5.148L12.8256 0.272997C12.4586 -0.0922062 11.865 -0.0908471 11.4997 0.276184C11.1345 0.643168 11.1359 1.23675 11.5028 1.602L14.7918 4.875L0.9375 4.875C0.419719 4.875 0 5.29472 0 5.8125C0 6.33028 0.419719 6.75 0.9375 6.75L14.7917 6.75L11.5029 10.023C11.1359 10.3882 11.1345 10.9818 11.4998 11.3488C11.865 11.7159 12.4587 11.7172 12.8256 11.352L17.7242 6.477L17.7251 6.47611C18.0923 6.10964 18.0911 5.51414 17.725 5.14889Z\" fill=\"#878787\"/>
\t\t\t\t</svg>

\t\t\t</div>
\t\t</div>

\t\t<!-- Optional Swiper nav -->
\t\t<div class=\"swiper-button-prev\"></div>
\t\t<div class=\"swiper-button-next\"></div>
\t</section>


\t";
        // line 180
        yield "\t<section class=\"pricing-container section\">
\t\t<div class=\"tab-navigation\">
\t\t\t<button class=\"tab-button active\" onclick=\"switchTab('single')\">";
        // line 182
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_product_name", [], "any", false, false, true, 182), "html", null, true);
        yield "</button>
\t\t\t<button class=\"tab-button\" onclick=\"switchTab('bundled')\">Bundled Stacks</button>
\t\t</div>
\t\t<div id=\"single\" class=\"tab-content active\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"pricing-grid row\">
\t\t\t\t\t";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_pricing_plan", [], "any", false, false, true, 188));
        foreach ($context['_seq'] as $context["key"] => $context["plan"]) {
            // line 189
            yield "\t\t\t\t\t\t";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 190
                yield "\t\t\t\t\t\t\t<div class=\"col-12 col-md-4\">
\t\t\t\t\t\t\t\t";
                // line 191
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = $context["plan"]) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 191)), "field_pricing_product_type", [], "any", false, false, true, 191), "value", [], "any", false, false, true, 191) == "single")) {
                    // line 192
                    yield "\t\t\t\t\t\t\t\t\t<div class=\"pricing-card  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v7 = $context["plan"]) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 192)), "field_is_featured", [], "any", false, false, true, 192), "value", [], "any", false, false, true, 192)) {
                        yield "featured";
                    }
                    yield "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"inner-pricing-card\">
                                        <h3 class=\"plan-name\">";
                    // line 194
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v8 = $context["plan"]) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 194)), "field_plan_name", [], "any", false, false, true, 194), "value", [], "any", false, false, true, 194), "html", null, true);
                    yield "  ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = $context["plan"]) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 194)), "field_is_featured", [], "any", false, false, true, 194), "value", [], "any", false, false, true, 194)) {
                        yield " <span class=\"best-value\">Best Value</span>";
                    }
                    yield " </h3>
\t\t\t\t\t\t\t\t\t\t<p class=\"plan-description\">";
                    // line 195
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v10 = $context["plan"]) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 195)), "field_plan_description", [], "any", false, false, true, 195), "value", [], "any", false, false, true, 195), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"plan-price\">";
                    // line 196
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v11 = $context["plan"]) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 196)), "field_plan_price", [], "any", false, false, true, 196), "value", [], "any", false, false, true, 196), "html", null, true);
                    yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"plan-period\">";
                    // line 197
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = $context["plan"]) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 197)), "field_plan_period", [], "any", false, false, true, 197), "value", [], "any", false, false, true, 197), "html", null, true);
                    yield "</div>

\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:Void(0)\" class=\"btn btn-custom \">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 200
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v13 = $context["plan"]) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 200)), "field_cta_button_text", [], "any", false, false, true, 200), "value", [], "any", false, false, true, 200), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t\t\t\t<path d=\"M17.725 5.33639L17.7242 5.3355L12.8256 0.460497C12.4586 0.0952938 11.865 0.0966529 11.4997 0.463684C11.1345 0.830668 11.1359 1.42425 11.5028 1.7895L14.7918 5.0625H0.9375C0.419719 5.0625 0 5.48222 0 6C0 6.51778 0.419719 6.9375 0.9375 6.9375H14.7917L11.5029 10.2105C11.1359 10.5757 11.1345 11.1693 11.4998 11.5363C11.865 11.9034 12.4587 11.9047 12.8256 11.5395L17.7242 6.6645L17.7251 6.66361C18.0923 6.29714 18.0911 5.70164 17.725 5.33639Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</a>
                                        </div>
\t\t\t\t\t\t\t\t\t\t<div class=\"features\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 207
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v14 = $context["plan"]) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["plan"], "#paragraph", [], "array", false, false, true, 207)), "field_plan_features", [], "any", false, false, true, 207), "value", [], "any", false, false, true, 207));
                    yield "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 211
                yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 213
            yield "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['plan'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 214
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>


\t\t<!-- Bundled Stacks Tab Content -->
\t\t";
        // line 231
        yield "\t</section>
\t";
        // line 233
        yield "\t<section class=\"section bg-white\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t<div class=\"learn-content\">
\t\t\t\t\t\t<h2 class=\"title\">
\t\t\t\t\t\t\t";
        // line 239
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_learn_section_title", [], "any", false, false, true, 239), "html", null, true);
        yield "</h2>
\t\t\t\t\t\t<p class=\"subtext\">
\t\t\t\t\t\t\t";
        // line 241
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_learn_section_description", [], "any", false, false, true, 241), "html", null, true);
        yield "
\t\t\t\t\t\t</p>
\t\t\t\t\t\t<div class=\"mt-4 text-center\">
\t\t\t\t\t\t\t<a href=\"javascript:Void(0)\" class=\"btn btn-custom mx-0\">

\t\t\t\t\t\t\t\t";
        // line 246
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_learn_section_cta_text", [], "any", false, false, true, 246), "html", null, true);
        yield "

\t\t\t\t\t\t\t\t<svg width=\"18\" height=\"12\" viewbox=\"0 0 18 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t\t<path d=\"M17.725 5.33639L17.7242 5.3355L12.8256 0.460497C12.4586 0.0952938 11.865 0.0966529 11.4997 0.463684C11.1345 0.830668 11.1359 1.42425 11.5028 1.7895L14.7918 5.0625H0.9375C0.419719 5.0625 0 5.48222 0 6C0 6.51778 0.419719 6.9375 0.9375 6.9375H14.7917L11.5029 10.2105C11.1359 10.5757 11.1345 11.1693 11.4998 11.5363C11.865 11.9034 12.4587 11.9047 12.8256 11.5395L17.7242 6.6645L17.7251 6.66361C18.0923 6.29714 18.0911 5.70164 17.725 5.33639Z\" fill=\"white\"/>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6 col-md-6\">
\t\t\t\t\t<div class=\"learn-image\">
\t\t\t\t\t\t";
        // line 257
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_learn_section_image", [], "any", false, false, true, 257), "html", null, true);
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<div class=\" faq-section section\">
\t\t<div class=\" container\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"col-12 text-center mb-40\">
\t\t\t\t\t<h2 class=\"title \">Frequently Asked Questions</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 col-md-12 col-lg-9 mx-auto\">
\t\t\t\t\t<div class=\"custom-accordian \">
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"accordion\" id=\"faqAccordion\">
\t\t\t\t\t\t\t<!-- FAQ Item 1 -->
\t\t\t\t\t\t\t";
        // line 274
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_faq", [], "any", false, false, true, 274));
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
        foreach ($context['_seq'] as $context["key"] => $context["faq"]) {
            // line 275
            yield "\t\t\t\t\t\t\t\t";
            if ((Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["key"]) != "#")) {
                // line 276
                yield "\t\t\t\t\t\t\t\t\t";
                $context["unique_id"] = ("faq-" . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 276));
                // line 277
                yield "\t\t\t\t\t\t\t\t\t<div class=\"accordion-item\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"accordion-header\" id=\"headingOne-";
                // line 278
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"accordion-button collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne-";
                // line 279
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" aria-expanded=\"false\" aria-controls=\"collapseOne\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 280
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v15 = $context["faq"]) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "#paragraph", [], "array", false, false, true, 280)), "field_question", [], "any", false, false, true, 280), "value", [], "any", false, false, true, 280), "html", null, true);
                yield "

\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t<div id=\"collapseOne-";
                // line 284
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne-";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                yield "\" data-bs-parent=\"#faqAccordion\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"accordion-body\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 286
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v16 = $context["faq"]) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["#paragraph"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, $context["faq"], "#paragraph", [], "array", false, false, true, 286)), "field_answer", [], "any", false, false, true, 286), "value", [], "any", false, false, true, 286));
                yield "

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            // line 292
            yield "\t\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 293
        yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "loop"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/Nemetschek/templates/node--product-page.html.twig";
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
        return array (  543 => 293,  529 => 292,  520 => 286,  513 => 284,  506 => 280,  502 => 279,  498 => 278,  495 => 277,  492 => 276,  489 => 275,  472 => 274,  452 => 257,  438 => 246,  430 => 241,  425 => 239,  417 => 233,  414 => 231,  406 => 214,  400 => 213,  396 => 211,  389 => 207,  379 => 200,  373 => 197,  369 => 196,  365 => 195,  357 => 194,  349 => 192,  347 => 191,  344 => 190,  341 => 189,  337 => 188,  328 => 182,  324 => 180,  299 => 156,  293 => 155,  285 => 150,  281 => 149,  276 => 147,  273 => 146,  270 => 145,  266 => 144,  258 => 138,  250 => 131,  244 => 130,  238 => 127,  235 => 126,  232 => 125,  228 => 124,  219 => 118,  210 => 111,  196 => 99,  173 => 78,  170 => 77,  164 => 76,  156 => 71,  152 => 70,  147 => 68,  144 => 67,  141 => 66,  136 => 65,  134 => 64,  120 => 52,  118 => 51,  102 => 37,  94 => 32,  88 => 28,  78 => 20,  68 => 13,  63 => 11,  59 => 10,  55 => 9,  49 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/Nemetschek/templates/node--product-page.html.twig", "C:\\laragon\\www\\nemetschek\\web\\themes\\custom\\Nemetschek\\templates\\node--product-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 64, "for" => 65, "set" => 276];
        static $filters = ["escape" => 9, "first" => 66, "raw" => 207];
        static $functions = ["file_url" => 68];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'first', 'raw'],
                ['file_url'],
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
