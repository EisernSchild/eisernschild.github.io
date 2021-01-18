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

/* partials/collection.html.twig */
class __TwigTemplate_3ab528842ed4fa98c832004ec4d23355e3ff58f71dae482c7af67835dfd80bd8 extends \Twig\Template
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
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", []);
        // line 2
        $context["schema_list"] = [];
        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 5
            echo "  ";
            $this->loadTemplate(($context["include_item"] ?? null), "partials/collection.html.twig", 5)->display(twig_array_merge($context, ["page" => $context["child"], "truncate" => $this->getAttribute($this->getAttribute(($context["site"] ?? null), "summary", []), "enabled", [])]));
            // line 6
            echo "
  ";
            // line 7
            $context["schema_list_item"] = [0 => ["@type" => "ListItem", "position" => $this->getAttribute(            // line 10
$context["loop"], "index", []), "url" => $this->getAttribute(            // line 11
$context["child"], "url", [0 => true], "method")]];
            // line 14
            echo "  ";
            $context["schema_list"] = twig_array_merge(($context["schema_list"] ?? null), ($context["schema_list_item"] ?? null));
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<script type=\"application/ld+json\">
  {
    \"@context\": \"http://schema.org\",
    \"@type\": \"ItemList\",
    \"itemListElement\": ";
        // line 21
        echo twig_jsonencode_filter(($context["schema_list"] ?? null));
        echo "
  }
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/collection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  79 => 16,  64 => 14,  62 => 11,  61 => 10,  60 => 7,  57 => 6,  54 => 5,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set collection = page.collection %}
{% set schema_list = [] %}

{% for child in collection %}
  {% include include_item with {'page': child, 'truncate': site.summary.enabled} %}

  {% set schema_list_item =
    [{
      \"@type\": \"ListItem\",
      \"position\": loop.index,
      \"url\": child.url(true)
    }]
  %}
  {% set schema_list = schema_list|merge(schema_list_item) %}
{% endfor %}

<script type=\"application/ld+json\">
  {
    \"@context\": \"http://schema.org\",
    \"@type\": \"ItemList\",
    \"itemListElement\": {{ schema_list|json_encode }}
  }
</script>
", "partials/collection.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\collection.html.twig");
    }
}
