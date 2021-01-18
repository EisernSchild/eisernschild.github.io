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
class __TwigTemplate_b1f2626d825ea52abc7e2493643765af7ed8895598d97eac5fe08a8061f53117 extends \Twig\Template
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
        // line 17
        echo "
<div class=\"menu-default-menu-container\">
    <ul id=\"menu-default-menu\" class=\"menu nav-menu\" aria-expanded=\"false\">
        ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", []), "enabled", [])) {
            // line 21
            echo "            ";
            echo $this->getAttribute($this, "loop", [0 => ($context["pages"] ?? null)], "method");
            echo "
        ";
        } else {
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 24
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current-menu-item") : (""));
                // line 25
                echo "                <li class=\"";
                echo ($context["current_page"] ?? null);
                echo " menu-item\">
                    <a href=\"";
                // line 26
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                        ";
                // line 27
                if ($this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 28
                echo "                        ";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 34
            echo "            <li>
                <a href=\"";
            // line 35
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">
                    ";
            // line 36
            if ($this->getAttribute($context["mitem"], "icon", [])) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", []);
                echo "\"></i>";
            }
            // line 37
            echo "                    ";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 42
            echo "            <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 42)->display($context);
            echo "</li>
        ";
        }
        // line 44
        echo "    </ul>
</div>

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
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", []), "visible", []));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("current-menu-item") : (""));
                // line 4
                echo "        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
            <a href=\"";
                // line 5
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">
                ";
                // line 6
                if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", [])) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", []), "icon", []);
                    echo "\"></i>";
                }
                // line 7
                echo "                ";
                echo $this->getAttribute($context["p"], "menu", []);
                echo "
            </a>
            ";
                // line 9
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0)) {
                    // line 10
                    echo "                <ul class=\"sub-menu\">
                    ";
                    // line 11
                    echo $this->getAttribute($this, "loop", [0 => $context["p"]], "method");
                    echo "
                </ul>
            ";
                }
                // line 14
                echo "        </li>
    ";
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
        return array (  177 => 14,  171 => 11,  168 => 10,  166 => 9,  160 => 7,  154 => 6,  150 => 5,  145 => 4,  142 => 3,  137 => 2,  125 => 1,  118 => 44,  112 => 42,  109 => 41,  98 => 37,  92 => 36,  88 => 35,  85 => 34,  80 => 33,  77 => 32,  66 => 28,  60 => 27,  56 => 26,  51 => 25,  48 => 24,  43 => 23,  37 => 21,  35 => 20,  30 => 17,);
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
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'current-menu-item' : '' %}
        <li class=\"{{ current_page }}\">
            <a href=\"{{ p.url }}\">
                {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                {{ p.menu }}
            </a>
            {% if p.children.visible.count > 0 %}
                <ul class=\"sub-menu\">
                    {{ _self.loop(p) }}
                </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

<div class=\"menu-default-menu-container\">
    <ul id=\"menu-default-menu\" class=\"menu nav-menu\" aria-expanded=\"false\">
        {% if theme_config.dropdown.enabled %}
            {{ _self.loop(pages) }}
        {% else %}
            {% for page in pages.children.visible %}
                {% set current_page = (page.active or page.activeChild) ? 'current-menu-item' : '' %}
                <li class=\"{{ current_page }} menu-item\">
                    <a href=\"{{ page.url }}\">
                        {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                        {{ page.menu }}
                    </a>
                </li>
            {% endfor %}
        {% endif %}
        {% for mitem in site.menu %}
            <li>
                <a href=\"{{ mitem.url }}\">
                    {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                    {{ mitem.text }}
                </a>
            </li>
        {% endfor %}
        {% if config.plugins.login.enabled and grav.user.username %}
            <li><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
        {% endif %}
    </ul>
</div>

", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\Nucleare\\templates\\partials\\navigation.html.twig");
    }
}
