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
class __TwigTemplate_959cc46e28eb1b0f3734968802fa91d8bb267634d1422ed244d5aa9f3aa47537 extends \Twig\Template
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
            'header' => [$this, 'block_header'],
            'header_extra' => [$this, 'block_header_extra'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'sidebar' => [$this, 'block_sidebar'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 48
        echo "</head>
<body id=\"top\" class=\"";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <div id=\"sb-site\">
        ";
        // line 51
        $this->displayBlock('header', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        ";
        // line 84
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 84)->display($context);
        // line 85
        echo "        </div>
    </div>
    ";
        // line 87
        $this->displayBlock('bottom', $context, $blocks);
        // line 103
        echo "</body>
</html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->displayBlock('assets', $context, $blocks);
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 13
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/pure-0.5.0/grids-min.css", 1 => 103], "method");
        // line 14
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/nucleus.css", 1 => 102], "method");
        // line 15
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css-compiled/template.css", 1 => 101], "method");
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/font-awesome.min.css", 1 => 100], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/slidebars.min.css"], "method");
        // line 18
        echo "
        ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightbox", [])) {
            // line 20
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/featherlight.min.css"], "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "
        ";
        // line 23
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 10))) {
            // line 24
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/nucleus-ie10.css"], "method");
            // line 25
            echo "        ";
        }
        // line 26
        echo "
        ";
        // line 27
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 28
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://css/nucleus-ie9.css", 1 => 99], "method");
            // line 29
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/html5shiv-printshiv.min.js", 1 => 99], "method");
            // line 30
            echo "        ";
        }
        // line 31
        echo "    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/slidebars.min.js"], "method");
        // line 37
        echo "
        ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightbox", [])) {
            // line 39
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/featherlight.min.js"], "method");
            // line 40
            echo "        ";
        }
        // line 41
        echo "    ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 43
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 44
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 45
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 51
    public function block_header($context, array $blocks = [])
    {
        // line 52
        echo "        <header id=\"header\">
                <div class=\"logo-surround\">
                    <a href=\"";
        // line 54
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" id=\"logo\"></a>
                    <span class=\"logo-accent\"></span>
                </div>
                <div id=\"navbar\">
                    ";
        // line 58
        $this->displayBlock('header_extra', $context, $blocks);
        // line 59
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 60
            echo "                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 60)->display($context);
            // line 61
            echo "                    ";
        }
        // line 62
        echo "                    ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 65
        echo "                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        ";
    }

    // line 58
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 62
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 63
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "                    ";
    }

    // line 69
    public function block_body($context, array $blocks = [])
    {
        // line 70
        echo "        <section id=\"body\">
            ";
        // line 71
        $this->displayBlock('sidebar', $context, $blocks);
        // line 72
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "        </section>
        ";
    }

    // line 71
    public function block_sidebar($context, array $blocks = [])
    {
    }

    // line 72
    public function block_content($context, array $blocks = [])
    {
    }

    // line 76
    public function block_footer($context, array $blocks = [])
    {
        // line 77
        echo "        <footer id=\"footer\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        ";
    }

    // line 87
    public function block_bottom($context, array $blocks = [])
    {
        // line 88
        echo "    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
        ";
        // line 96
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "lightbox", [])) {
            // line 97
            echo "        \$('a[rel=\"lightbox\"]').featherlight();
        ";
        }
        // line 99
        echo "    });
    </script>
    ";
        // line 101
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
        return array (  344 => 101,  340 => 99,  336 => 97,  334 => 96,  324 => 88,  321 => 87,  314 => 77,  311 => 76,  306 => 72,  301 => 71,  296 => 73,  293 => 72,  291 => 71,  288 => 70,  285 => 69,  281 => 64,  278 => 63,  275 => 62,  270 => 58,  263 => 65,  260 => 62,  257 => 61,  254 => 60,  251 => 59,  249 => 58,  242 => 54,  238 => 52,  235 => 51,  228 => 45,  223 => 44,  220 => 43,  211 => 41,  208 => 40,  205 => 39,  203 => 38,  200 => 37,  197 => 36,  194 => 35,  191 => 34,  188 => 33,  184 => 31,  181 => 30,  178 => 29,  175 => 28,  173 => 27,  170 => 26,  167 => 25,  164 => 24,  162 => 23,  159 => 22,  156 => 21,  153 => 20,  151 => 19,  148 => 18,  145 => 17,  142 => 16,  139 => 15,  136 => 14,  133 => 13,  130 => 12,  126 => 43,  123 => 42,  121 => 33,  118 => 32,  116 => 12,  111 => 10,  108 => 9,  106 => 8,  98 => 7,  95 => 6,  92 => 5,  85 => 103,  83 => 87,  79 => 85,  77 => 84,  72 => 81,  70 => 76,  67 => 75,  64 => 69,  62 => 51,  57 => 49,  54 => 48,  52 => 5,  50 => 4,  45 => 2,  42 => 1,);
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
{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />

    {% block stylesheets %}
        {% do assets.add('theme://css/pure-0.5.0/grids-min.css',103) %}
        {% do assets.add('theme://css-compiled/nucleus.css',102) %}
        {% do assets.add('theme://css-compiled/template.css',101) %}
        {% do assets.add('theme://css/font-awesome.min.css',100) %}
        {% do assets.add('theme://css/slidebars.min.css') %}

        {% if page.header.lightbox %}
            {% do assets.add('theme://css/featherlight.min.css') %}
        {% endif %}

        {% if browser.getBrowser == 'msie' and browser.getVersion == 10 %}
            {% do assets.addCss('theme://css/nucleus-ie10.css') %}
        {% endif %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.add('theme://css/nucleus-ie9.css',99) %}
            {% do assets.add('theme://js/html5shiv-printshiv.min.js',99) %}
        {% endif %}
    {% endblock %}

    {% block javascripts %}
        {% do assets.add('jquery',101) %}
        {% do assets.add('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.add('theme://js/slidebars.min.js') %}

        {% if page.header.lightbox %}
            {% do assets.add('theme://js/featherlight.min.js') %}
        {% endif %}
    {% endblock %}

    {% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
    {% endblock %}
{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"sb-site\">
        {% block header %}
        <header id=\"header\">
                <div class=\"logo-surround\">
                    <a href=\"{{ base_url == '' ? '/' : base_url }}\" id=\"logo\"></a>
                    <span class=\"logo-accent\"></span>
                </div>
                <div id=\"navbar\">
                    {% block header_extra %}{% endblock %}
                    {% if config.plugins.langswitcher.enabled %}
                    {% include 'partials/langswitcher.html.twig' %}
                    {% endif %}
                    {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                    <span class=\"panel-activation sb-toggle-left navbar-left menu-btn fa fa-bars\"></span>
                </div>
        </header>
        {% endblock %}
        {% block body %}
        <section id=\"body\">
            {% block sidebar %}{% endblock %}
            {% block content %}{% endblock %}
        </section>
        {% endblock %}

        {% block footer %}
        <footer id=\"footer\">
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        {% endblock %}
    </div>
    <div class=\"sb-slidebar sb-left sb-width-thin\">
        <div id=\"panel\">
        {% include 'partials/navigation.html.twig' %}
        </div>
    </div>
    {% block bottom %}
    <script>
    \$(function () {
        \$(document).ready(function() {
          \$.slidebars({
            hideControlClasses: true,
            scrollLock: true
          });
        });
        {% if page.header.lightbox %}
        \$('a[rel=\"lightbox\"]').featherlight();
        {% endif %}
    });
    </script>
    {{ assets.js('bottom')|raw }} 
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\afterburner2\\templates\\partials\\base.html.twig");
    }
}
