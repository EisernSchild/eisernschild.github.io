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

/* item.html.twig */
class __TwigTemplate_f5ddfb49c900ff27c0a8696c9368f4cf21202551099b5e72607e04a6479cb34b extends \Twig\Template
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
        // line 3
        $context["show_download"] = $this->getAttribute(($context["header"] ?? null), "download", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "item.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "  <div class=\"container\">
    <div class=\"card\">
      <article class=\"content\">
        <header>
          <h1 class=\"hyphenate\">
            ";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "
          </h1>

          ";
        // line 14
        $this->loadTemplate("partials/taxonomies.html.twig", "item.html.twig", 14)->display($context);
        // line 15
        echo "
          ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", [])) {
            // line 17
            echo "            <span class=\"label default\"><time>";
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", []));
            echo "</time></span>
          ";
        }
        // line 19
        echo "        </header>

        ";
        // line 21
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
      </article>

      ";
        // line 24
        if (($context["show_download"] ?? null)) {
            // line 25
            echo "        <div class=\"actions content\">
          <a target=\"_blank\" href=\"";
            // line 26
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute(($context["header"] ?? null), "download", []), "url", []), [], "array"), "url", []);
            echo "\">
            ";
            // line 27
            echo $this->getAttribute($this->getAttribute(($context["header"] ?? null), "download", []), "alt", []);
            echo "
          </a>
        </div>
      ";
        }
        // line 31
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  90 => 27,  86 => 26,  83 => 25,  81 => 24,  75 => 21,  71 => 19,  65 => 17,  63 => 16,  60 => 15,  58 => 14,  52 => 11,  45 => 6,  42 => 5,  37 => 1,  35 => 3,  29 => 1,);
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

{% set show_download = header.download %}

{% block content %}
  <div class=\"container\">
    <div class=\"card\">
      <article class=\"content\">
        <header>
          <h1 class=\"hyphenate\">
            {{ page.title }}
          </h1>

          {% include 'partials/taxonomies.html.twig' %}

          {% if page.header.publish_date %}
            <span class=\"label default\"><time>{{ page.header.publish_date|date() }}</time></span>
          {% endif %}
        </header>

        {{ page.content }}
      </article>

      {% if show_download %}
        <div class=\"actions content\">
          <a target=\"_blank\" href=\"{{ page.media[header.download.url].url }}\">
            {{ header.download.alt }}
          </a>
        </div>
      {% endif %}
    </div>
  </div>
{% endblock %}
", "item.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\item.html.twig");
    }
}
