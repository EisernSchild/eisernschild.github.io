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
class __TwigTemplate_41da9282de0ecdda660cb71881f0ea9a94355e27d644bf35fa85cdd115e5a433 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
";
        // line 2
        $context["html_lang"] = (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        // line 3
        echo "<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        echo ($context["html_lang"] ?? null);
        echo "\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo ($context["html_lang"] ?? null);
        echo "\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo ($context["html_lang"] ?? null);
        echo "\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo ($context["html_lang"] ?? null);
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 51
        echo "</head>

<body class=\"";
        // line 53
        echo $this->getAttribute(($context["site"] ?? null), "sidebar_position", []);
        echo "-sidebar\">
    <div id=\"wrapper\">
        ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 66
        echo "
    </div>

    ";
        // line 69
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        // line 9
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 10
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "
        <!--[if lte IE 8]><script src=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->

        ";
        // line 28
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 29
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 31
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 32
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/respond.min.js");
        echo "\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"";
        // line 33
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/ie8.css");
        echo "\"></script><![endif]-->

       ";
        // line 35
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 36
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 44
        echo "
        ";
        // line 45
        $this->displayBlock('assets', $context, $blocks);
        // line 49
        echo "
    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/main.css"], "method");
        // line 17
        echo "        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        // line 20
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 21
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/util.js"], "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/main.js"], "method");
        // line 24
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 45
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 47
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 55
    public function block_body($context, array $blocks = [])
    {
        // line 56
        echo "            <div id=\"content\">
                <div class=\"inner\">
                    ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "                </div>
            </div>
        ";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "                    ";
    }

    // line 63
    public function block_sidebar($context, array $blocks = [])
    {
        // line 64
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 64)->display($context);
        // line 65
        echo "        ";
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
        return array (  246 => 65,  243 => 64,  240 => 63,  236 => 59,  233 => 58,  227 => 60,  225 => 58,  221 => 56,  218 => 55,  211 => 47,  206 => 46,  203 => 45,  194 => 24,  191 => 23,  188 => 22,  185 => 21,  182 => 20,  179 => 19,  175 => 17,  172 => 16,  169 => 15,  164 => 49,  162 => 45,  159 => 44,  149 => 36,  147 => 35,  142 => 33,  138 => 32,  135 => 31,  131 => 29,  129 => 28,  124 => 26,  121 => 25,  119 => 19,  116 => 18,  114 => 15,  109 => 13,  106 => 12,  104 => 11,  96 => 10,  93 => 9,  90 => 8,  81 => 69,  76 => 66,  73 => 63,  71 => 55,  66 => 53,  62 => 51,  60 => 8,  55 => 6,  51 => 5,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
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
{% set html_lang = grav.language.getActive ?: grav.config.site.default_lang %}
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ html_lang }}\"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ html_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />

        {% block stylesheets %}
            {% do assets.addCss('theme://assets/css/main.css') %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}

        <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/html5shiv.js') }}\"></script><![endif]-->

        {% if site.calendar %}
           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       {% endif %}

       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/js/ie/respond.min.js') }}\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"{{ url('theme://assets/css/ie8.css') }}\"></script><![endif]-->

       {% if site.calendar %}
        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    {% endif %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

    {% endblock head%}
</head>

<body class=\"{{ site.sidebar_position }}-sidebar\">
    <div id=\"wrapper\">
        {% block body %}
            <div id=\"content\">
                <div class=\"inner\">
                    {% block content %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}
        {% block sidebar %}
            {% include 'partials/sidebar.html.twig' %}
        {% endblock %}

    </div>

    {{ assets.js('bottom')|raw }} 
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\striped\\templates\\partials\\base.html.twig");
    }
}
