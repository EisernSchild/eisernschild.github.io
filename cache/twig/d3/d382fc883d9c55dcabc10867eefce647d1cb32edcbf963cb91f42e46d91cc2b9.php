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

/* partials/metadata.html.twig */
class __TwigTemplate_9283c63040ce6b282248fc9088c333391a70d6886744db5a164b1f76bd12690a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 2
            echo "  <meta
  ";
            // line 3
            if ($this->getAttribute($context["meta"], "name", [])) {
                // line 4
                echo "    name=\"";
                echo $this->getAttribute($context["meta"], "name", []);
                echo "\"
  ";
            }
            // line 6
            echo "
  ";
            // line 7
            if ($this->getAttribute($context["meta"], "property", [])) {
                // line 8
                echo "    property=\"";
                echo $this->getAttribute($context["meta"], "property", []);
                echo "\"
  ";
            }
            // line 10
            echo "
  ";
            // line 11
            if ($this->getAttribute($context["meta"], "content", [])) {
                // line 12
                echo "    content=\"";
                echo $this->getAttribute($context["meta"], "content", []);
                echo "\"
  ";
            }
            // line 13
            echo "/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partials/metadata.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  61 => 12,  59 => 11,  56 => 10,  50 => 8,  48 => 7,  45 => 6,  39 => 4,  37 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for meta in page.metadata %}
  <meta
  {% if meta.name %}
    name=\"{{ meta.name }}\"
  {% endif %}

  {% if meta.property %}
    property=\"{{ meta.property }}\"
  {% endif %}

  {% if meta.content %}
    content=\"{{ meta.content }}\"
  {% endif %}/>
{% endfor %}
", "partials/metadata.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\metadata.html.twig");
    }
}
