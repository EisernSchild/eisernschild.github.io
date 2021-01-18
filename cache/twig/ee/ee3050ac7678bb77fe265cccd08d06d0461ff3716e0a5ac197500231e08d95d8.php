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
class __TwigTemplate_7cdbc1fb0a9807b885806ccc48310dc7d15d34093dc8ed4d9f4ee973a5ce9e0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "    </head>
    <body id=\"wrapper\" class=\"grey lighten-2\">
        ";
        // line 53
        $this->loadTemplate("partials/nav.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "        <div class=\"col s12\">
            ";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 56
            echo "                ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 56)->display($context);
            // line 57
            echo "            ";
        }
        // line 58
        echo "        </div>
        <div id=\"color-bar\" class=\"";
        // line 59
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "barcolor", []);
        echo "\"></div>
        <div id=\"content\">
            <div class=\"container-wrapper\">
                <div class=\"col s12 panel\">
                                ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "                </div>
            </div>
        </div>
        ";
        // line 69
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 69)->display($context);
        // line 70
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <!--Let browser know website is optimized for mobile-->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
            ";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "description", [])) {
            // line 10
            echo "                <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "description", []);
            echo "\">
            ";
        } else {
            // line 12
            echo "                <meta name=\"description\" content=\"";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "\">
            ";
        }
        // line 14
        echo "            ";
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 15
            echo "                <meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
            ";
        }
        // line 17
        echo "            <link rel=\"icon\" type=\"image/png\" href=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\">
            <title>
                ";
        // line 19
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo "
                    |
                ";
        }
        // line 21
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>

            ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
            ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "
        ";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        $this->getAttribute(        // line 26
($context["assets"] ?? null), "add", [0 => "theme://css/materialize.css", 1 => 100], "method");
        // line 27
        echo "
                ";
        // line 29
        echo "                ";
        $this->getAttribute(        // line 30
($context["assets"] ?? null), "add", [0 => "theme://css/style.css", 1 => 96], "method");
        // line 31
        echo "                ";
        $this->getAttribute(        // line 32
($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/icon?family=Material+Icons", 1 => 98], "method");
        // line 33
        echo "                ";
        $this->getAttribute(        // line 34
($context["assets"] ?? null), "addCss", [0 => "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css", 1 => 97], "method");
        // line 35
        echo "
                ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "                ";
        $this->getAttribute(        // line 41
($context["assets"] ?? null), "add", [0 => "https://code.jquery.com/jquery-2.1.4.min.js", 1 => 99], "method");
        // line 42
        echo "                ";
        $this->getAttribute(        // line 43
($context["assets"] ?? null), "add", [0 => "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js", 1 => 100], "method");
        // line 44
        echo "                ";
        $this->getAttribute(        // line 45
($context["assets"] ?? null), "add", [0 => "theme://js/init.js", 1 => 101], "method");
        // line 46
        echo "
                ";
        // line 47
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
            ";
    }

    // line 63
    public function block_content($context, array $blocks = [])
    {
        // line 64
        echo "                                    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
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
        return array (  206 => 64,  203 => 63,  197 => 47,  194 => 46,  192 => 45,  190 => 44,  188 => 43,  186 => 42,  184 => 41,  182 => 40,  179 => 39,  173 => 36,  170 => 35,  168 => 34,  166 => 33,  164 => 32,  162 => 31,  160 => 30,  158 => 29,  155 => 27,  153 => 26,  151 => 25,  149 => 24,  146 => 23,  141 => 49,  139 => 39,  136 => 38,  134 => 23,  129 => 21,  122 => 19,  116 => 17,  110 => 15,  107 => 14,  101 => 12,  95 => 10,  93 => 9,  87 => 5,  84 => 4,  77 => 70,  75 => 69,  70 => 66,  68 => 63,  61 => 59,  58 => 58,  55 => 57,  52 => 56,  50 => 55,  47 => 54,  45 => 53,  41 => 51,  39 => 4,  34 => 1,);
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
<html lang=\"en\">
    <head>
        {% block head %}
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <!--Let browser know website is optimized for mobile-->
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
            {% if header.description %}
                <meta name=\"description\" content=\"{{ header.description }}\">
            {% else %}
                <meta name=\"description\" content=\"{{ site.description }}\">
            {% endif %}
            {% if header.robots %}
                <meta name=\"robots\" content=\"{{ header.robots }}\">
            {% endif %}
            <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\">
            <title>
                {% if header.title %}{{ header.title }}
                    |
                {% endif %}{{ site.title }}</title>

            {% block stylesheets %}
                {# MDUX core CSS #}
                {% do
                    assets.add('theme://css/materialize.css', 100) %}

                {# CSS MDUX custom #}
                {% do
                    assets.add('theme://css/style.css', 96) %}
                {% do
                    assets.addCss('https://fonts.googleapis.com/icon?family=Material+Icons', 98) %}
                {% do
                    assets.addCss('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', 97) %}

                {{ assets.css() }}
            {% endblock %}

            {% block javascripts %}
                {% do
                    assets.add('https://code.jquery.com/jquery-2.1.4.min.js', 99) %}
                {% do
                    assets.add('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js', 100) %}
                {% do
                    assets.add('theme://js/init.js', 101) %}

                {{ assets.js() }}
            {% endblock %}

        {% endblock head %}
    </head>
    <body id=\"wrapper\" class=\"grey lighten-2\">
        {% include 'partials/nav.html.twig' %}
        <div class=\"col s12\">
            {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}
        </div>
        <div id=\"color-bar\" class=\"{{ config.themes.mdux.barcolor }}\"></div>
        <div id=\"content\">
            <div class=\"container-wrapper\">
                <div class=\"col s12 panel\">
                                {% block content %}
                                    {{ page.content }}
                                {% endblock %}
                </div>
            </div>
        </div>
        {% include 'partials/footer.html.twig' %}

    </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\mdux\\templates\\partials\\base.html.twig");
    }
}
