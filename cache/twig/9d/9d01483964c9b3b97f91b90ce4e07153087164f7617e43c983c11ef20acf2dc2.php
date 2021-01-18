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

/* default.html.twig */
class __TwigTemplate_ba336e754e8ff33c4ee7f687df8f73e223f1da06d12b945bfe62d8c6e7a6886a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "\t<article class=\"post hentry published\">
\t\t<header class=\"entry-header\"></header>
\t\t<div class=\"entry-content\">
\t\t\t";
        // line 7
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
\t\t</div>
\t\t<footer class=\"entry-footer\"></footer>
\t</article>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  42 => 4,  39 => 3,  29 => 1,);
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
\t<article class=\"post hentry published\">
\t\t<header class=\"entry-header\"></header>
\t\t<div class=\"entry-content\">
\t\t\t{{ page.content }}
\t\t</div>
\t\t<footer class=\"entry-footer\"></footer>
\t</article>
{% endblock %}
", "default.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\Nucleare\\templates\\default.html.twig");
    }
}
