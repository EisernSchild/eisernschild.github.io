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

/* partials/breadcrumbs-navbar.html.twig */
class __TwigTemplate_b25a7212969b666852df81c60c1010643bb1a7e53485b11186a0bac2a9cc60bd extends \Twig\Template
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
        $context["crumbs"] = $this->getAttribute(($context["breadcrumbs"] ?? null), "get", [], "method");
        // line 2
        $context["breadcrumbs_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []);
        // line 3
        $context["divider"] = $this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_divider_classes", []);
        // line 4
        echo "
<ul class=\"";
        // line 5
        echo ($context["class"] ?? null);
        echo "\">
    <li>
        <a href=\"";
        // line 7
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">
            <span class=\"fa-stack fa-2x logo\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"";
        // line 10
        echo ((($this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", []) != "")) ? ($this->getAttribute(($context["breadcrumbs_config"] ?? null), "icon_home", [])) : ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "top_left_icon", [])));
        echo " fa-stack-1x fa-inverse inverse-logo\"></i>
            </span>
        </a>
    </li>
";
        // line 14
        if (($this->getAttribute(($context["breadcrumbs_config"] ?? null), "enabled", []) && ((twig_length_filter($this->env, ($context["crumbs"] ?? null)) > 1) || $this->getAttribute(($context["breadcrumbs_config"] ?? null), "show_all", [])))) {
            // line 15
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["crumbs"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["crumb"]) {
                // line 16
                echo "        ";
                $context["parents_routable"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "parents_routable", []);
                // line 17
                echo "        ";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
                    // line 18
                    echo "            <li class=\"mobile-noshow\"><a href=\"";
                    echo ((($context["parents_routable"] ?? null)) ? ($this->getAttribute($context["crumb"], "url", [])) : ("#"));
                    echo "\" class=\"";
                    echo ((($context["parents_routable"] ?? null)) ? ("") : ("hover-cursor-default"));
                    echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                    echo $this->getAttribute($context["crumb"], "menu", []);
                    echo "</span></a></li>
        ";
                } else {
                    // line 20
                    echo "            <li class=\"small-mobile-noshow\"><a href=\"";
                    echo ((($context["parents_routable"] ?? null)) ? ($this->getAttribute($context["crumb"], "url", [])) : ("#"));
                    echo "\" class=\"";
                    echo ((($context["parents_routable"] ?? null)) ? ("") : ("hover-cursor-default"));
                    echo "\" itemprop=\"url\"><span itemprop=\"title\">";
                    echo $this->getAttribute($context["crumb"], "menu", []);
                    echo "</span></a></li>
        ";
                }
                // line 21
                echo " 
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 24
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs-navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 24,  103 => 21,  93 => 20,  83 => 18,  80 => 17,  77 => 16,  59 => 15,  57 => 14,  50 => 10,  44 => 7,  39 => 5,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set crumbs = breadcrumbs.get() %}
{% set breadcrumbs_config = config.plugins.breadcrumbs %}
{% set divider = breadcrumbs_config.icon_divider_classes %}

<ul class=\"{{class}}\">
    <li>
        <a href=\"{{ base_url == '' ? '/' : base_url }}\">
            <span class=\"fa-stack fa-2x logo\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"{{ breadcrumbs_config.icon_home != '' ? breadcrumbs_config.icon_home : config.theme.top_left_icon }} fa-stack-1x fa-inverse inverse-logo\"></i>
            </span>
        </a>
    </li>
{% if breadcrumbs_config.enabled and (crumbs|length > 1 or breadcrumbs_config.show_all) %}
    {% for crumb in crumbs %}
        {% set parents_routable = config.theme.parents_routable %}
        {% if not loop.last %}
            <li class=\"mobile-noshow\"><a href=\"{{ parents_routable ? crumb.url : '#' }}\" class=\"{{ parents_routable ? '' : 'hover-cursor-default' }}\" itemprop=\"url\"><span itemprop=\"title\">{{ crumb.menu }}</span></a></li>
        {% else %}
            <li class=\"small-mobile-noshow\"><a href=\"{{ parents_routable ? crumb.url : '#' }}\" class=\"{{ parents_routable ? '' : 'hover-cursor-default' }}\" itemprop=\"url\"><span itemprop=\"title\">{{ crumb.menu }}</span></a></li>
        {% endif %} 
    {% endfor %}
{% endif %}
</ul>", "partials/breadcrumbs-navbar.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\partials\\breadcrumbs-navbar.html.twig");
    }
}
