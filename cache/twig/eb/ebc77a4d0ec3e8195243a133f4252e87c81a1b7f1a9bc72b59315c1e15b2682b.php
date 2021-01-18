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

/* partials/base.html.twig */
class __TwigTemplate_b96d7129a08fc879e706ec5533c90c0bba308c6bc4112479808fa7b7554edc09 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'assets' => [$this, 'block_assets'],
            'body_classes' => [$this, 'block_body_classes'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\">
    <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 33
        echo "    </head>

    <body class=\"";
        // line 35
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
        ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 37
            echo "            ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 37)->display($context);
            // line 38
            echo "        ";
        }
        // line 39
        echo "        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 42
        echo "
        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "        ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 45
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
    ";
        // line 51
        $this->displayBlock('bottom', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "        <title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
        
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('assets', $context, $blocks);
        // line 31
        echo "
    ";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css", 1 => 99], "method");
        // line 14
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/theme.css", 1 => 98], "method");
        // line 15
        echo "        ";
    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 20
        echo "
            ";
        // line 21
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 22
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"], "method");
            // line 23
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 24
            echo "            ";
        }
        // line 25
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 27
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 28
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 29
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 35
    public function block_body_classes($context, array $blocks = [])
    {
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
    }

    // line 39
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 40
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "        ";
    }

    // line 43
    public function block_content($context, array $blocks = [])
    {
    }

    // line 44
    public function block_pagination($context, array $blocks = [])
    {
    }

    // line 51
    public function block_bottom($context, array $blocks = [])
    {
        // line 52
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 52,  220 => 51,  215 => 44,  210 => 43,  206 => 41,  203 => 40,  200 => 39,  194 => 35,  187 => 29,  182 => 28,  179 => 27,  170 => 25,  167 => 24,  164 => 23,  161 => 22,  159 => 21,  156 => 20,  153 => 19,  150 => 18,  147 => 17,  143 => 15,  140 => 14,  137 => 13,  134 => 12,  129 => 31,  127 => 27,  124 => 26,  122 => 17,  119 => 16,  117 => 12,  112 => 10,  103 => 9,  101 => 8,  96 => 5,  93 => 4,  86 => 54,  84 => 51,  76 => 45,  73 => 44,  71 => 43,  68 => 42,  65 => 39,  62 => 38,  59 => 37,  57 => 36,  53 => 35,  49 => 33,  47 => 4,  42 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">
    <head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        {% include 'partials/metadata.html.twig' %}
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
        
        {% block stylesheets %}
            {% do assets.add('theme://css/font-awesome.min.css',99) %}
            {% do assets.add('theme://css-compiled/theme.css',98) %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery', 101) %}
            {% do assets.add('theme://js/modernizr.custom.71422.js', 100) %}

            {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
                {% do assets.add('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') %}
                {% do assets.add('theme://js/html5shiv-printshiv.min.js') %}
            {% endif %}
        {% endblock %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

    {% endblock head%}
    </head>

    <body class=\"{% block body_classes %}{{ page.header.body_classes }}{% endblock %}\">
        {% if config.plugins.langswitcher.enabled %}
            {% include 'partials/langswitcher.html.twig' %}
        {% endif %}
        {% block header_navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block content %}{% endblock %}
        {% block pagination %}{% endblock %}

        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
    {% block bottom %}
        {{ assets.js('bottom')|raw }}
    {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\bootstrap\\templates\\partials\\base.html.twig");
    }
}
