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

/* partials/collection_item.html.twig */
class __TwigTemplate_4710b0a471c24408f74d5d1099e1a35d3f1b0c734a5b68427c8706d39f4f57fa extends \Twig\Template
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
        $context["show_summary"] = (($context["truncate"] ?? null) && ($this->getAttribute(($context["page"] ?? null), "content", []) != $this->getAttribute(($context["page"] ?? null), "summary", [])));
        // line 2
        $context["show_download"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "download", []);
        // line 3
        echo "
<div id=\"";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "slug", []);
        echo "\" class=\"card ripple\">
  <article class=\"content\">
    <header>
      <h3>
        <a href=\"";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</a>
      </h3>

      ";
        // line 11
        $this->loadTemplate("partials/taxonomies.html.twig", "partials/collection_item.html.twig", 11)->display($context);
        // line 12
        echo "
      ";
        // line 13
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", [])) {
            // line 14
            echo "        <span class=\"label default\"><time>";
            echo twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "publish_date", []));
            echo "</time></span>
      ";
        }
        // line 16
        echo "    </header>

    ";
        // line 18
        if (($context["show_summary"] ?? null)) {
            // line 19
            echo "      ";
            echo $this->getAttribute(($context["page"] ?? null), "summary", []);
            echo "
    ";
        } else {
            // line 21
            echo "      ";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "
    ";
        }
        // line 23
        echo "  </article>

  ";
        // line 25
        if ((($context["show_summary"] ?? null) || ($context["show_download"] ?? null))) {
            // line 26
            echo "    <div class=\"actions content\">
      ";
            // line 27
            if (($context["show_summary"] ?? null)) {
                // line 28
                echo "        <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\">
          ";
                // line 29
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_PLUSPUNKT.READ_MORE");
                echo "
        </a>
      ";
            }
            // line 32
            echo "      ";
            if (($context["show_download"] ?? null)) {
                // line 33
                echo "        <a target=\"_blank\" href=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "download", []), "url", []), [], "array"), "url", []);
                echo "\">
          ";
                // line 34
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "download", []), "alt", []);
                echo "
        </a>
      ";
            }
            // line 37
            echo "    </div>
  ";
        }
        // line 39
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/collection_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 39,  119 => 37,  113 => 34,  108 => 33,  105 => 32,  99 => 29,  94 => 28,  92 => 27,  89 => 26,  87 => 25,  83 => 23,  77 => 21,  71 => 19,  69 => 18,  65 => 16,  59 => 14,  57 => 13,  54 => 12,  52 => 11,  44 => 8,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set show_summary = truncate and page.content != page.summary %}
{% set show_download = page.header.download %}

<div id=\"{{ page.slug }}\" class=\"card ripple\">
  <article class=\"content\">
    <header>
      <h3>
        <a href=\"{{ page.url }}\">{{ page.title }}</a>
      </h3>

      {% include 'partials/taxonomies.html.twig' %}

      {% if page.header.publish_date %}
        <span class=\"label default\"><time>{{ page.header.publish_date|date() }}</time></span>
      {% endif %}
    </header>

    {% if show_summary %}
      {{ page.summary }}
    {% else %}
      {{ page.content }}
    {% endif %}
  </article>

  {% if show_summary or show_download %}
    <div class=\"actions content\">
      {% if show_summary %}
        <a href=\"{{ page.url }}\">
          {{ \"THEME_PLUSPUNKT.READ_MORE\"|t }}
        </a>
      {% endif %}
      {% if show_download %}
        <a target=\"_blank\" href=\"{{ page.media[page.header.download.url].url }}\">
          {{ page.header.download.alt }}
        </a>
      {% endif %}
    </div>
  {% endif %}
</div>
", "partials/collection_item.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\collection_item.html.twig");
    }
}
