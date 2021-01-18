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
class __TwigTemplate_18858a120ec7ec4b67eb352b529ae71536e152f0927746fd885c6bd14303d35c extends \Twig\Template
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

    // line 2
    public function block_content($context, array $blocks = [])
    {
        // line 3
        echo "<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h2>\t
\t</div>
    <div class=\"meta\">
    <time class=\"published\" datetime=\"";
        // line 9
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "Y-m-d");
        echo "\">";
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", []), "M j, Y");
        echo "</time>                              
    </div>
    </header>

        ";
        // line 13
        if (($context["big_header"] ?? null)) {
            // line 14
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropResize", [0 => 1038, 1 => 437], "method"), "html", [0 => $this->getAttribute(($context["page"] ?? null), "title", []), 1 => $this->getAttribute(($context["page"] ?? null), "title", []), 2 => "image featured"], "method");
            echo "
        ";
        } else {
            // line 16
            echo "            ";
            echo $this->getAttribute($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])), "cropZoom", [0 => 1038, 1 => 437], "method"), "html", [0 => $this->getAttribute(($context["page"] ?? null), "title", []), 1 => $this->getAttribute(($context["page"] ?? null), "title", []), 2 => "image featured"], "method");
            echo "
        ";
        }
        // line 18
        echo "   ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
</article>
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
        return array (  76 => 18,  70 => 16,  64 => 14,  62 => 13,  53 => 9,  47 => 6,  42 => 3,  39 => 2,  29 => 1,);
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
<article class=\"box post post-excerpt\">
  <header>
  \t<div class=\"title\">
    <h2>{{ page.header.title }}</h2>\t
\t</div>
    <div class=\"meta\">
    <time class=\"published\" datetime=\"{{page.date|date(\"Y-m-d\")}}\">{{ page.date|date(\"M j, Y\")}}</time>                              
    </div>
    </header>

        {% if big_header %}
            {{ page.media.images|first.cropResize(1038,437).html(page.title, page.title, 'image featured') }}
        {% else %}
            {{ page.media.images|first.cropZoom(1038,437).html(page.title, page.title, 'image featured') }}
        {% endif %}
   {{ page.content}}
</article>
{% endblock %}
", "default.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\future\\templates\\default.html.twig");
    }
}
