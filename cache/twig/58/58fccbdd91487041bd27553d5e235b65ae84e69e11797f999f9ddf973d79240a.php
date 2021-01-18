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
class __TwigTemplate_af56d1095c6747bab5f75d9cc550786ebcc7caa81ace4cf341cce0c3f233ac09 extends \Twig\Template
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
        echo "    <div class=\"content-header\">
        <div class=\"main-content-header-bg\">
        ";
        // line 6
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []) != "Pages")) {
            // line 7
            echo "            <div  class=\"main-content-header-bg-text\">";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "menu", []);
            echo "</div>
        ";
        } else {
            // line 9
            echo "            <div  class=\"main-content-header-bg-text\">";
            echo $this->getAttribute(($context["page"] ?? null), "menu", []);
            echo "</div>
        ";
        }
        // line 10
        echo " 
        </div>
    </div>
    <div class=\"content\">
        <h1 class=\"default-header\">";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
        ";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "&nbsp;
        ";
        // line 17
        echo "    </div> 
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
        return array (  74 => 17,  70 => 15,  66 => 14,  60 => 10,  54 => 9,  48 => 7,  46 => 6,  42 => 4,  39 => 3,  29 => 1,);
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
    <div class=\"content-header\">
        <div class=\"main-content-header-bg\">
        {% if page.parent.menu != 'Pages' %}
            <div  class=\"main-content-header-bg-text\">{{page.parent.menu}}</div>
        {% else %}
            <div  class=\"main-content-header-bg-text\">{{page.menu}}</div>
        {% endif %} 
        </div>
    </div>
    <div class=\"content\">
        <h1 class=\"default-header\">{{page.title}}</h1>
        {{ page.content }}&nbsp;
        {# &nbsp; solves strange hard to track bug #}
    </div> 
{% endblock %} 
", "default.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\default.html.twig");
    }
}
