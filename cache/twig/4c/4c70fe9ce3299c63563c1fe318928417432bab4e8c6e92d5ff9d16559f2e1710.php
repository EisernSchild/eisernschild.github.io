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

/* partials/navbartop.html.twig */
class __TwigTemplate_7ee4e2e8141144d12e5ba6a379a455b5658413ec9cb10968cfff50dedd1f3a84 extends \Twig\Template
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
        echo "<header class=\"header\">
    <div class=\"breadcrumbs-wrapper\">
        ";
        // line 3
        $this->loadTemplate("partials/breadcrumbs-navbar-container.html.twig", "partials/navbartop.html.twig", 3)->display($context);
        // line 4
        echo "    </div>
    <div class=\"buttons-wrapper\">
        <ul class=\"primary-nav-ul\">
            ";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tntsearch", []), "enabled", [])) {
            echo "        
            <a href=\"";
            // line 8
            echo ($context["base_url"] ?? null);
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tntsearch", []), "search_route", []);
            echo "\">
                <li id=\"search-button\" class=\"navbar-button-li search-button\">
                    <i class=\"fas fa-search search-logo\"></i>
                </li>
            </a>
            ";
        }
        // line 13
        echo " 
            <li id=\"toggle-button\" class=\"navbar-button-li menu-button\">
                <div class=\"toggle-button hamburger hamburger--spin-r\">
                    <div class=\"hamburger-box\">
                        <div class=\"hamburger-inner\"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/navbartop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  45 => 8,  41 => 7,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <div class=\"breadcrumbs-wrapper\">
        {% include 'partials/breadcrumbs-navbar-container.html.twig' %}
    </div>
    <div class=\"buttons-wrapper\">
        <ul class=\"primary-nav-ul\">
            {% if config.plugins.tntsearch.enabled %}        
            <a href=\"{{ base_url }}{{config.plugins.tntsearch.search_route}}\">
                <li id=\"search-button\" class=\"navbar-button-li search-button\">
                    <i class=\"fas fa-search search-logo\"></i>
                </li>
            </a>
            {% endif %} 
            <li id=\"toggle-button\" class=\"navbar-button-li menu-button\">
                <div class=\"toggle-button hamburger hamburger--spin-r\">
                    <div class=\"hamburger-box\">
                        <div class=\"hamburger-inner\"></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>", "partials/navbartop.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\partials\\navbartop.html.twig");
    }
}
