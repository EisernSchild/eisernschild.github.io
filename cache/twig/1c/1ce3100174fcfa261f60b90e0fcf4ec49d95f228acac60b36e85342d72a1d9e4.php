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
class __TwigTemplate_5b13d4352be2510496bc09ba6218a7b7b10419756c6fb5c4c896ca56c7d5c92b extends \Twig\Template
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
        $context["logo"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "custom_logo", []);
        // line 2
        if (($context["logo"] ?? null)) {
            // line 3
            echo "  ";
            $context["logo"] = $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", []);
        } else {
            // line 5
            echo "  ";
            $context["logo"] = "default-logo.svg";
        }
        // line 7
        echo "<div class=\"flex-container\">
    <a href=\"";
        // line 8
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" class=\"sidebar-brand\">
      ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "use_logo", [])) {
            // line 10
            echo "        <img
          src=\"";
            // line 11
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images");
            echo "/";
            echo ($context["logo"] ?? null);
            echo "\"
          style=\"object-fit: contain;
            ";
            // line 13
            if ( !$this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "size_dimension", [])) {
                // line 14
                echo "              width:";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "logo_size", []);
                echo "px;
            ";
            } else {
                // line 16
                echo "              height:";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "logo_size", []);
                echo "px;
            ";
            }
            // line 18
            echo "            ";
            if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "title_in_menu", []) == "")) {
                // line 19
                echo "              max-width: 100%;
            ";
            } else {
                // line 21
                echo "              max-width: 50%;
            ";
            }
            // line 23
            echo "            \"
          alt=\"";
            // line 24
            echo $this->getAttribute(($context["site"] ?? null), "name", []);
            echo "\">
      ";
        }
        // line 25
        echo "          
      ";
        // line 26
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "title_in_menu", []);
        echo "
    </a>
</div>

<nav class=\"sidebar-nav\">
";
        // line 55
        echo "
";
        // line 56
        $context["parents_routable"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "parents_routable", []);
        // line 57
        echo "<ul class=\"metismenu\"  id=\"metismenu\">
    ";
        // line 58
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null), 1 => ($context["parents_routable"] ?? null)], "method");
        echo "
</ul>
</nav>
";
    }

    // line 31
    public function getnav_loop($__page__ = null, $__parents_routable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "page" => $__page__,
            "parents_routable" => $__parents_routable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 32
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 33
                echo "        ";
                $context["active_page_or_child"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("mm-active") : (""));
                // line 34
                echo "        ";
                $context["active_page"] = (($this->getAttribute($context["p"], "active", [])) ? ("active-page") : (""));
                // line 35
                echo "        ";
                $context["aria_expanded"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("aria-expanded=\"true\"") : ("aria-expanded=\"false\""));
                // line 36
                echo "        ";
                $context["parent_link"] = (((($context["parents_routable"] ?? null) && $this->getAttribute($context["p"], "routable", []))) ? ($this->getAttribute($context["p"], "url", [])) : ("#"));
                // line 37
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 38
                    echo "            <li class=\"";
                    echo ($context["active_page_or_child"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 39
                    echo ($context["parent_link"] ?? null);
                    echo "\" class=\"";
                    echo ($context["active_page_or_child"] ?? null);
                    echo " ";
                    echo ($context["active_page"] ?? null);
                    echo " has-arrow webkitNoSelect\" ";
                    echo ($context["aria_expanded"] ?? null);
                    echo ">
                    ";
                    // line 40
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul class=\"";
                    // line 42
                    echo ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("mm-show") : (""));
                    echo "\">
                    ";
                    // line 43
                    echo $this->getAttribute($this, "nav_loop", [0 => $context["p"], 1 => ($context["parents_routable"] ?? null)], "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page_or_child"] ?? null);
                    echo " ";
                    echo ($context["active_page"] ?? null);
                    echo " webkitNoSelect\" aria-expanded=\"false\">
                    ";
                    // line 49
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
            </li>
        ";
                }
                // line 53
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  203 => 53,  196 => 49,  188 => 48,  185 => 47,  178 => 43,  174 => 42,  169 => 40,  159 => 39,  154 => 38,  151 => 37,  148 => 36,  145 => 35,  142 => 34,  139 => 33,  134 => 32,  121 => 31,  113 => 58,  110 => 57,  108 => 56,  105 => 55,  97 => 26,  94 => 25,  89 => 24,  86 => 23,  82 => 21,  78 => 19,  75 => 18,  69 => 16,  63 => 14,  61 => 13,  54 => 11,  51 => 10,  49 => 9,  45 => 8,  42 => 7,  38 => 5,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = config.theme.custom_logo %}
{% if logo %}
  {% set logo = (logo|first).name %}
{% else %}
  {% set logo = \"default-logo.svg\" %}
{% endif %}
<div class=\"flex-container\">
    <a href=\"{{ base_url == '' ? '/' : base_url }}\" class=\"sidebar-brand\">
      {% if config.theme.use_logo %}
        <img
          src=\"{{url('theme://images')}}/{{logo}}\"
          style=\"object-fit: contain;
            {% if not config.theme.size_dimension %}
              width:{{config.theme.logo_size}}px;
            {% else %}
              height:{{config.theme.logo_size}}px;
            {% endif %}
            {% if config.theme.title_in_menu == '' %}
              max-width: 100%;
            {% else %}
              max-width: 50%;
            {% endif %}
            \"
          alt=\"{{site.name}}\">
      {% endif %}          
      {{ config.theme.title_in_menu }}
    </a>
</div>

<nav class=\"sidebar-nav\">
{% macro nav_loop(page, parents_routable) %}
    {% for p in page.children.visible %}
        {% set active_page_or_child = (p.active or p.activeChild) ? 'mm-active' : '' %}
        {% set active_page = p.active ? 'active-page' : '' %}
        {% set aria_expanded = (p.active or p.activeChild) ? 'aria-expanded=\"true\"' :  'aria-expanded=\"false\"' %}
        {% set parent_link = (parents_routable and p.routable) ? p.url : '#' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"{{ active_page_or_child }}\">
                <a href=\"{{ parent_link }}\" class=\"{{ active_page_or_child }} {{ active_page }} has-arrow webkitNoSelect\" {{aria_expanded}}>
                    {{ p.menu }}
                </a>
                <ul class=\"{{(p.active or p.activeChild) ? 'mm-show' :  ''}}\">
                    {{ _self.nav_loop(p, parents_routable) }}
                </ul>
            </li>
        {% else %}
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page_or_child }} {{ active_page }} webkitNoSelect\" aria-expanded=\"false\">
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

{% set parents_routable = config.theme.parents_routable %}
<ul class=\"metismenu\"  id=\"metismenu\">
    {{ _self.nav_loop(pages, parents_routable) }}
</ul>
</nav>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\vela\\templates\\partials\\navigation.html.twig");
    }
}
