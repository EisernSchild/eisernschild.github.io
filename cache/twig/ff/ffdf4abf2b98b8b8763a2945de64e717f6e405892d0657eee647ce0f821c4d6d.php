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

/* partials/navigation.html.twig */
class __TwigTemplate_86ce5c8ad7d0735a43803a9a59f40bec500b9f3a1d57fd044cee8046bf424b37 extends \Twig\Template
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
        // line 25
        echo "
";
        // line 26
        ob_start();
        // line 27
        echo "  ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "pluspunkt", []), "dropdowns", []), "enabled", [])) {
            // line 28
            echo "    ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
  ";
        } else {
            // line 30
            echo "    <ul>
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 32
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 33
                echo "        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
          <a href=\"";
                // line 34
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
            ";
                // line 35
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
           </a>
         </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    </ul>
  ";
        }
        $context["nav"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
<header class=\"nav-header\">
  <div class=\"container\">
    <nav class=\"nav-logo\">
      <a href=\"";
        // line 46
        echo ($context["base_url_absolute"] ?? null);
        echo "\">
        ";
        // line 47
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "
        ";
        // line 53
        echo "      </a>
    </nav>

    <input id=\"show-mobile-nav-toggle\" type=\"checkbox\"/>
    <nav class=\"nav primary-nav\">
      ";
        // line 58
        echo ($context["nav"] ?? null);
        echo "
    </nav>

    <label for=\"show-mobile-nav-toggle\" class=\"mobile-nav-toggle show-sm\" onclick>
      <span class=\"hamburger hamburger--htx\">
        <span></span>
      </span>
    </label>

  </div>
</header>
";
    }

    // line 1
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "  <ul>
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 4
                echo "      ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                // line 5
                echo "      ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 6
                    echo "        <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo " has-children\">
          <a href=\"";
                    // line 7
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
            ";
                    // line 8
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo " <i class=\"fas fa-chevron-down hide-sm\" aria-hidden=\"true\"></i>
          </a>

          <nav class=\"subnav hide-sm\">
            ";
                    // line 12
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
          </nav>
        </li>
      ";
                } else {
                    // line 16
                    echo "        <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
          <a href=\"";
                    // line 17
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\">
            ";
                    // line 18
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
          </a>
        </li>
      ";
                }
                // line 22
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 23,  179 => 22,  172 => 18,  168 => 17,  163 => 16,  156 => 12,  149 => 8,  145 => 7,  140 => 6,  137 => 5,  134 => 4,  130 => 3,  127 => 2,  115 => 1,  99 => 58,  92 => 53,  88 => 47,  84 => 46,  78 => 42,  73 => 39,  63 => 35,  59 => 34,  54 => 33,  51 => 32,  47 => 31,  44 => 30,  38 => 28,  35 => 27,  33 => 26,  30 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro loop(page) %}
  <ul>
    {% for p in page.children.visible %}
      {% set current_page = (p.active or p.activeChild) ? 'active' : '' %}
      {% if p.children.visible.count > 0 %}
        <li class=\"{{ current_page }} has-children\">
          <a href=\"{{ p.url }}\">
            {{ p.menu }} <i class=\"fas fa-chevron-down hide-sm\" aria-hidden=\"true\"></i>
          </a>

          <nav class=\"subnav hide-sm\">
            {{ _self.loop(p) }}
          </nav>
        </li>
      {% else %}
        <li class=\"{{ current_page }}\">
          <a href=\"{{ p.url }}\">
            {{ p.menu }}
          </a>
        </li>
      {% endif %}
    {% endfor %}
  </ul>
{% endmacro %}

{% set nav %}
  {% if config.themes.pluspunkt.dropdowns.enabled %}
    {{ _self.loop(pages) }}
  {% else %}
    <ul>
      {% for page in pages.children.visible %}
        {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
        <li class=\"{{ current_page }}\">
          <a href=\"{{ page.url }}\">
            {{ page.menu }}
           </a>
         </li>
      {% endfor %}
    </ul>
  {% endif %}
{% endset %}

<header class=\"nav-header\">
  <div class=\"container\">
    <nav class=\"nav-logo\">
      <a href=\"{{ base_url_absolute }}\">
        {{ site.title }}
        {# {% if browser.getBrowser() == 'msie' %}
          <img alt=\"Logo\" class=\"logo\" src=\"{{ url('theme://images/pluspunkt_logo_small.png', true) }}\" />
        {% else %}
          <img alt=\"Logo\" class=\"logo\" src=\"{{ url('theme://images/pluspunkt_logo.png', true) }}\" />
        {% endif %} #}
      </a>
    </nav>

    <input id=\"show-mobile-nav-toggle\" type=\"checkbox\"/>
    <nav class=\"nav primary-nav\">
      {{ nav }}
    </nav>

    <label for=\"show-mobile-nav-toggle\" class=\"mobile-nav-toggle show-sm\" onclick>
      <span class=\"hamburger hamburger--htx\">
        <span></span>
      </span>
    </label>

  </div>
</header>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\navigation.html.twig");
    }
}
