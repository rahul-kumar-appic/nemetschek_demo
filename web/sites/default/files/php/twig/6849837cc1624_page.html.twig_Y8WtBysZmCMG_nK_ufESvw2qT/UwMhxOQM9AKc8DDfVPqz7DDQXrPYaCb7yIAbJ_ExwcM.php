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

/* themes/custom/Nemetschek/templates/page.html.twig */
class __TwigTemplate_a047e1ec6660a88c8586f30fae4a0ef9 extends Template
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
        yield "<div class=\"bg-white flex flex-col items-center w-full\">
  <div class=\"bg-white w-full max-w-[1440px] relative\">
    ";
        // line 3
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 3)) {
            // line 4
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 4), "html", null, true);
            yield "
    ";
        }
        // line 6
        yield "
    ";
        // line 7
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 7)) {
            // line 8
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 8), "html", null, true);
            yield "
    ";
        }
        // line 10
        yield "
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 13), "html", null, true);
        yield "
    </main>

    ";
        // line 16
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 16) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 16)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 16))) {
            // line 17
            yield "      <footer class=\"w-full bg-white py-10 px-20\">
        <div class=\"grid grid-cols-4 gap-8\">
          ";
            // line 19
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 19)) {
                // line 20
                yield "            <div class=\"flex flex-col space-y-4\">
              ";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 21), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 24
            yield "
          ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 25)) {
                // line 26
                yield "            <div class=\"flex flex-col space-y-4\">
              ";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 27), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 30
            yield "
          ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 31)) {
                // line 32
                yield "            <div class=\"flex flex-col space-y-4\">
              ";
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 33), "html", null, true);
                yield "
            </div>
          ";
            }
            // line 36
            yield "        </div>

        ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 38)) {
                // line 39
                yield "          ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom", [], "any", false, false, true, 39), "html", null, true);
                yield "
        ";
            }
            // line 41
            yield "      </footer>
    ";
        }
        // line 43
        yield "  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/Nemetschek/templates/page.html.twig";
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
        return array (  139 => 43,  135 => 41,  129 => 39,  127 => 38,  123 => 36,  117 => 33,  114 => 32,  112 => 31,  109 => 30,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  89 => 21,  86 => 20,  84 => 19,  80 => 17,  78 => 16,  72 => 13,  67 => 10,  61 => 8,  59 => 7,  56 => 6,  50 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/Nemetschek/templates/page.html.twig", "C:\\laragon\\www\\nemetschek\\web\\themes\\custom\\Nemetschek\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 3];
        static $filters = ["escape" => 4];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
