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

/* collection.html.twig */
class __TwigTemplate_bb79017d76129d9e91f6db9a27e7e024e2a8a9c7271b74cc122a8af33d067971 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'collection_head' => [$this, 'block_collection_head'],
            'collection' => [$this, 'block_collection'],
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", []);
        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "collection.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "  ";
        $this->displayBlock('collection_head', $context, $blocks);
        // line 13
        echo "
  ";
        // line 14
        $this->displayBlock('collection', $context, $blocks);
    }

    // line 6
    public function block_collection_head($context, array $blocks = [])
    {
        // line 7
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["header"] ?? null), "collection_head", []), "enabled", []), false)) {
            // line 8
            echo "      <section class=\"container\">
        ";
            // line 9
            $this->loadTemplate("partials/collection_head.html.twig", "collection.html.twig", 9)->display(twig_array_merge($context, ["list_items" => $this->env->getExtension('Grav\Common\Twig\TwigExtension')->definedDefaultFilter($this->getAttribute($this->getAttribute(($context["header"] ?? null), "collection_head", []), "list_items", []), false)]));
            // line 10
            echo "      </section>
    ";
        }
        // line 12
        echo "  ";
    }

    // line 14
    public function block_collection($context, array $blocks = [])
    {
        // line 15
        echo "    <section class=\"container\">
      ";
        // line 16
        $this->loadTemplate("partials/collection.html.twig", "collection.html.twig", 16)->display(twig_array_merge($context, ["include_item" => "partials/collection_item.html.twig"]));
        // line 17
        echo "    </section>
  ";
    }

    public function getTemplateName()
    {
        return "collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  82 => 16,  79 => 15,  76 => 14,  72 => 12,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  53 => 14,  50 => 13,  47 => 6,  44 => 5,  39 => 1,  37 => 3,  31 => 1,);
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

{% set collection = page.collection %}

{% block content %}
  {% block collection_head %}
    {% if header.collection_head.enabled|defined(false) %}
      <section class=\"container\">
        {% include 'partials/collection_head.html.twig' with {'list_items': header.collection_head.list_items|defined(false)} %}
      </section>
    {% endif %}
  {% endblock %}

  {% block collection %}
    <section class=\"container\">
      {% include 'partials/collection.html.twig' with {'include_item': 'partials/collection_item.html.twig'} %}
    </section>
  {% endblock %}
{% endblock %}
", "collection.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\collection.html.twig");
    }
}
