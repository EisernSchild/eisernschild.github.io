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

/* error.html.twig */
class __TwigTemplate_e31e73a31d2a225f6a72b2db37716c25546c0b1fe6a736cdb166d5d1dd770cd4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'masterslider' => [$this, 'block_masterslider'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 5
        echo "     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
    </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

\t";
        // line 8
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "error.html.twig", 8)->display($context);
        // line 9
        echo "\t\t\t<h1>Error ";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "http_response_code", []);
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t\t\t</p>
    ";
        // line 13
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "error.html.twig", 13)->display($context);
    }

    // line 4
    public function block_masterslider($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  64 => 13,  59 => 11,  53 => 9,  51 => 8,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {% block masterslider %}{% endblock %}
     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
    </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

\t{% include 'partials/blog_sidebar_header.html.twig' %}
\t\t\t<h1>Error {{ page.header.http_response_code }}</h1>
\t\t\t<p>
\t\t\t\t{{ page.content|raw }}
\t\t\t</p>
    {% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "error.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\error.html.twig");
    }
}
