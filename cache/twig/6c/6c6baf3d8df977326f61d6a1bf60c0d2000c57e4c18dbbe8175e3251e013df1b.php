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
class __TwigTemplate_9c39d1856d6dcffe012ef68df2bdf71b77a41dd7de8e5c74377c33b597dce4e3 extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/footer.html.twig", 1)->unwrap();
        // line 2
        echo "
<footer class=\"footer\">
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "copyright", [])) {
            // line 5
            echo "        <span class=\"footer__copyright\">
            &copy; ";
            // line 6
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "copyright", []), "year", []);
            echo " 
            <a href=\"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "copyright", []), "link", []);
            echo "\" target=\"_blank\">
                ";
            // line 8
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "copyright", []), "name", []);
            echo " 
            </a>
        </span>
        ";
            // line 11
            if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_links", []) || $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_credit", []))) {
                // line 12
                echo "            |
        ";
            }
            // line 14
            echo "    ";
        }
        // line 15
        echo "    <span class=\"footer__links\">
    ";
        // line 16
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_links", [])) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_links", []));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 18
                echo "            ";
                echo $context["macros"]->geticon_link($this->getAttribute($context["link"], "link", []), $this->getAttribute($context["link"], "icon", []));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_credit", [])) {
                // line 22
                echo "            |
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    </span>
    ";
        // line 26
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_credit", [])) {
            // line 27
            echo "    <span class=\"footer__credit\">
        Made with <a href=\"https://github.com/jasonccox/grav-theme-webfolio\" target=\"_blank\">Webfolio</a> on <a href=\"http://getgrav.org\" target=\"_blank\">Grav</a>
    </span>
    ";
        }
        // line 31
        echo "</footer>
";
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
        return array (  106 => 31,  100 => 27,  98 => 26,  95 => 25,  92 => 24,  88 => 22,  86 => 21,  83 => 20,  74 => 18,  69 => 17,  67 => 16,  64 => 15,  61 => 14,  57 => 12,  55 => 11,  49 => 8,  45 => 7,  41 => 6,  38 => 5,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<footer class=\"footer\">
    {% if config.theme.copyright %}
        <span class=\"footer__copyright\">
            &copy; {{ config.theme.copyright.year }} 
            <a href=\"{{ config.theme.copyright.link }}\" target=\"_blank\">
                {{ config.theme.copyright.name }} 
            </a>
        </span>
        {% if config.theme.footer_links or config.theme.footer_credit %}
            |
        {% endif %}
    {% endif %}
    <span class=\"footer__links\">
    {% if config.theme.footer_links %}
        {% for link in config.theme.footer_links %}
            {{ macros.icon_link(link.link, link.icon) }}
        {% endfor %}

        {% if config.theme.footer_credit %}
            |
        {% endif %}
    {% endif %}
    </span>
    {% if config.theme.footer_credit %}
    <span class=\"footer__credit\">
        Made with <a href=\"https://github.com/jasonccox/grav-theme-webfolio\" target=\"_blank\">Webfolio</a> on <a href=\"http://getgrav.org\" target=\"_blank\">Grav</a>
    </span>
    {% endif %}
</footer>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\webfolio\\templates\\partials\\footer.html.twig");
    }
}
