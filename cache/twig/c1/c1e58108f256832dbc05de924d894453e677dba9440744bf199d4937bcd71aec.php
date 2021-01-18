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

/* partials/taxonomies.html.twig */
class __TwigTemplate_78e96290df8fbce4bb7344bc7ef0d60c6d8947a0a90c3c5d5f5499d4129354c1 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", [])) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "tag", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 3
                echo "    <span class=\"label accent taxonomy\">
      <a href=\"";
                // line 4
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
                echo "/tag";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["tag"];
                echo "\">
        ";
                // line 5
                echo $context["tag"];
                echo "
      </a>
    </span>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "author", [])) {
            // line 12
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", []), "author", []));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 13
                echo "    <address class=\"taxonomy\">
      <span class=\"label\">
        <a rel=\"author\" href=\"";
                // line 15
                echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "url", []);
                echo "/author";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
                echo $context["author"];
                echo "\">
          ";
                // line 16
                echo $context["author"];
                echo "
        </a>
      </span>
    </address>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "partials/taxonomies.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  72 => 15,  68 => 13,  63 => 12,  61 => 11,  58 => 10,  47 => 5,  40 => 4,  37 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if page.taxonomy.tag %}
  {% for tag in page.taxonomy.tag %}
    <span class=\"label accent taxonomy\">
      <a href=\"{{ page.parent.url }}/tag{{ config.system.param_sep }}{{ tag }}\">
        {{ tag }}
      </a>
    </span>
  {% endfor %}
{% endif %}

{% if page.taxonomy.author %}
  {% for author in page.taxonomy.author %}
    <address class=\"taxonomy\">
      <span class=\"label\">
        <a rel=\"author\" href=\"{{ page.parent.url }}/author{{ config.system.param_sep }}{{ author }}\">
          {{ author }}
        </a>
      </span>
    </address>
  {% endfor %}
{% endif %}
", "partials/taxonomies.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\taxonomies.html.twig");
    }
}
