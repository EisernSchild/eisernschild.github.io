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
class __TwigTemplate_88a87f79082f77293a77f92c164c7421bed768bcafc1a60059092599d68337b2 extends \Twig\Template
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
        echo "<div class=\"flex-container\">
    <span class=\"sidebar-brand\">
        ";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "title_in_menu", []);
        echo " 
    </span> 
</div>

<nav class=\"sidebar-nav\">
";
        // line 32
        echo "
";
        // line 33
        $context["parents_routable"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "parents_routable", []);
        // line 34
        echo "<ul class=\"metismenu\"  id=\"metismenu\">
    ";
        // line 35
        echo $this->getAttribute($this, "nav_loop", [0 => ($context["pages"] ?? null), 1 => ($context["parents_routable"] ?? null)], "method");
        echo "
</ul>
</nav>";
    }

    // line 8
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
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 10
                echo "        ";
                $context["active_page_or_child"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("mm-active") : (""));
                // line 11
                echo "        ";
                $context["active_page"] = (($this->getAttribute($context["p"], "active", [])) ? ("active-page") : (""));
                // line 12
                echo "        ";
                $context["aria_expanded"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("aria-expanded=\"true\"") : ("aria-expanded=\"false\""));
                // line 13
                echo "        ";
                $context["parent_link"] = (((($context["parents_routable"] ?? null) && $this->getAttribute($context["p"], "routable", []))) ? ($this->getAttribute($context["p"], "url", [])) : ("#"));
                // line 14
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 15
                    echo "            <li class=\"";
                    echo ($context["active_page_or_child"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 16
                    echo ($context["parent_link"] ?? null);
                    echo "\" class=\"";
                    echo ($context["active_page_or_child"] ?? null);
                    echo " ";
                    echo ($context["active_page"] ?? null);
                    echo " has-arrow\" ";
                    echo ($context["aria_expanded"] ?? null);
                    echo ">
                    ";
                    // line 17
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "
                </a>
                <ul class=\"";
                    // line 19
                    echo ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("mm-show") : (""));
                    echo "\">
                    ";
                    // line 20
                    echo $this->getAttribute($this, "nav_loop", [0 => $context["p"], 1 => ($context["parents_routable"] ?? null)], "method");
                    echo " 
                </ul>
            </li>
        ";
                } else {
                    // line 23
                    echo " 
            <li>
                <a href=\"";
                    // line 25
                    echo $this->getAttribute($context["p"], "url", []);
                    echo "\" class=\"";
                    echo ($context["active_page_or_child"] ?? null);
                    echo " ";
                    echo ($context["active_page"] ?? null);
                    echo " \" aria-expanded=\"false\">
                    ";
                    // line 26
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo " 
                </a>
            </li>
        ";
                }
                // line 30
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
        return array (  140 => 30,  133 => 26,  125 => 25,  121 => 23,  114 => 20,  110 => 19,  105 => 17,  95 => 16,  90 => 15,  87 => 14,  84 => 13,  81 => 12,  78 => 11,  75 => 10,  70 => 9,  57 => 8,  50 => 35,  47 => 34,  45 => 33,  42 => 32,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"flex-container\">
    <span class=\"sidebar-brand\">
        {{ config.theme.title_in_menu }} 
    </span> 
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
                <a href=\"{{ parent_link }}\" class=\"{{ active_page_or_child }} {{ active_page }} has-arrow\" {{aria_expanded}}>
                    {{ p.menu }}
                </a>
                <ul class=\"{{(p.active or p.activeChild) ? 'mm-show' :  ''}}\">
                    {{ _self.nav_loop(p, parents_routable) }} 
                </ul>
            </li>
        {% else %} 
            <li>
                <a href=\"{{ p.url }}\" class=\"{{ active_page_or_child }} {{ active_page }} \" aria-expanded=\"false\">
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
</nav>", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\partials\\navigation.html.twig");
    }
}
