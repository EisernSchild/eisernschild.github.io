<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/css-vars.html.twig */
class __TwigTemplate_976b312f7fbe3b3fbcb959c3ea1e9b680763a41d3c3573345cf03fd562ffe327 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>
    :root {
        --webfolio-color-bg: ";
        // line 3
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_bg", []);
        echo ";
        --webfolio-color-bg-alt: ";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_bg_alt", []);
        echo ";
        --webfolio-color-bg-blockquote: ";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_bg_blockquote", []);
        echo ";
        --webfolio-color-bg-code: ";
        // line 6
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_bg_code", []);
        echo ";
        --webfolio-color-bg-hover: ";
        // line 7
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_bg_hover", []);
        echo ";
        --webfolio-color-text: ";
        // line 8
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_text", []);
        echo ";
        --webfolio-color-text-light: ";
        // line 9
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_text_light", []);
        echo ";
        --webfolio-color-text-dark: ";
        // line 10
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_text_dark", []);
        echo ";
        --webfolio-color-text-hover: ";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_text_hover", []);
        echo ";
        --webfolio-color-accent: ";
        // line 12
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_accent", []);
        echo ";
        --webfolio-color-accent-hover: ";
        // line 13
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_accent_hover", []);
        echo ";
        --webfolio-color-required: ";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_required", []);
        echo ";
        --webfolio-color-border: ";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_border", []);
        echo ";
        --webfolio-color-border-blockquote: ";
        // line 16
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "style", []), "color_border_blockquote", []);
        echo ";
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "partials/css-vars.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  82 => 15,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  58 => 9,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
    :root {
        --webfolio-color-bg: {{ config.theme.style.color_bg }};
        --webfolio-color-bg-alt: {{ config.theme.style.color_bg_alt }};
        --webfolio-color-bg-blockquote: {{ config.theme.style.color_bg_blockquote }};
        --webfolio-color-bg-code: {{ config.theme.style.color_bg_code }};
        --webfolio-color-bg-hover: {{ config.theme.style.color_bg_hover }};
        --webfolio-color-text: {{ config.theme.style.color_text }};
        --webfolio-color-text-light: {{ config.theme.style.color_text_light }};
        --webfolio-color-text-dark: {{ config.theme.style.color_text_dark }};
        --webfolio-color-text-hover: {{ config.theme.style.color_text_hover }};
        --webfolio-color-accent: {{ config.theme.style.color_accent }};
        --webfolio-color-accent-hover: {{ config.theme.style.color_accent_hover }};
        --webfolio-color-required: {{ config.theme.style.color_required }};
        --webfolio-color-border: {{ config.theme.style.color_border }};
        --webfolio-color-border-blockquote: {{ config.theme.style.color_border_blockquote }};
    }
</style>
", "partials/css-vars.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\webfolio\\templates\\partials\\css-vars.html.twig");
    }
}
