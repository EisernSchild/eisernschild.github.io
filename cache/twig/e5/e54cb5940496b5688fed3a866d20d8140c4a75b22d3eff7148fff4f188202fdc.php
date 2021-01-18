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

/* partials/footer.html.twig */
class __TwigTemplate_be35e900c3be97b95c82c721029f7226cfe1b9d5f83ed6064d50033acde50545 extends \Twig\Template
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
        echo "<section class=\"container centered\">
  <div class=\"about\">
    <ul>
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "social", []));
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
        foreach ($context['_seq'] as $context["type"] => $context["meta"]) {
            // line 5
            echo "        <li>
          <a href=\"";
            // line 6
            echo $this->getAttribute($context["meta"], "url", []);
            echo "\" class=\"btn btn-link\" title=\"";
            echo $this->getAttribute($context["meta"], "title", []);
            echo "\">
            <i class=\"fab ";
            // line 7
            echo $this->getAttribute($context["meta"], "icon", []);
            echo "\"></i>
          </a>
          ";
            // line 9
            if (($this->getAttribute($context["loop"], "last", []) == false)) {
                // line 10
                echo "            <span class=\"separator\">•</span>
          ";
            }
            // line 12
            echo "        </li>
      ";
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
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  </div>
</section>
<section class=\"container\">
  <span class=\"copyright\">
    ©
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "copyright_start_year", [])) {
            // line 21
            echo "      ";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "copyright_start_year", []);
            echo " -
    ";
        }
        // line 23
        echo "    ";
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " <a href=\"";
        echo ($context["home_url"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "footer", []), "copyright", []);
        echo "</a>
  </span>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 23,  97 => 21,  95 => 20,  87 => 14,  72 => 12,  68 => 10,  66 => 9,  61 => 7,  55 => 6,  52 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container centered\">
  <div class=\"about\">
    <ul>
      {% for type, meta in theme_config.social %}
        <li>
          <a href=\"{{ meta.url }}\" class=\"btn btn-link\" title=\"{{ meta.title }}\">
            <i class=\"fab {{ meta.icon }}\"></i>
          </a>
          {% if loop.last == false %}
            <span class=\"separator\">•</span>
          {% endif %}
        </li>
      {% endfor %}
    </ul>
  </div>
</section>
<section class=\"container\">
  <span class=\"copyright\">
    ©
    {% if theme_config.footer.copyright_start_year %}
      {{ theme_config.footer.copyright_start_year }} -
    {% endif %}
    {{ \"now\"|date(\"Y\") }} <a href=\"{{ home_url }}\">{{ theme_config.footer.copyright }}</a>
  </span>
</section>", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\grav-coder\\templates\\partials\\footer.html.twig");
    }
}
