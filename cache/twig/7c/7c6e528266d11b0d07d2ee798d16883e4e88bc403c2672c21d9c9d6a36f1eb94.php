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
class __TwigTemplate_9b4e06b42d01da29a5cafcd89466725cd73ad401936abd24583df6c1f189e24d extends \Twig\Template
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
            'navigation' => [$this, 'block_navigation'],
            'body' => [$this, 'block_body'],
            'masterslider' => [$this, 'block_masterslider'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", [])));
        echo "\" class='";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
        } else {
            echo "v2";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 7))) {
            echo "ie ie7 ltie8 ltie9";
        }
        echo " ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            echo "ie ie8 ltie9";
        }
        echo "'>
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 40
        echo "</head>
<body id=\"top\" class=\"page page-template-default ";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <div class=\"body-wrapper  float-menu gdlr-pattern-background\">
        ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('navigation', $context, $blocks);
        // line 74
        echo "
        ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "
            ";
        // line 88
        $this->displayBlock('footer', $context, $blocks);
        // line 91
        echo "        </div>
        ";
        // line 92
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo " 
    </body>
    </html>
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1' id='Merriweather-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Arvo%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=3.9.1' id='Arvo-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'/>
        <meta name=\"google-translate-customization\" content=\"";
        // line 13
        echo $this->getAttribute(($context["site"] ?? null), "google_translate_token", []);
        echo "\">
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 31
            echo "            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('assets', $context, $blocks);
        // line 38
        echo "
    ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 15
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/widget_css_2_bundle.css"], "method");
        // line 16
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css"], "method");
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/lightbox.css"], "method");
        // line 18
        echo "            ";
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 7)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 19
            echo "                ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/ie.css"], "method");
            // line 20
            echo "            ";
        }
        // line 21
        echo "        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        // line 24
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/jquery-migrate-1.2.1.min.js"], "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/lightbox.min.js"], "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/script.js"], "method");
        // line 28
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 34
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 36
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        // line 44
        echo "            <header class='gdlr-header-wrapper'>
                <div class='gdlr-logo-container container'>
                    <div class='gdlr-logo-wrapper'>
                        <div class='gdlr-logo'>
                            <div class='header section' id='header'><div class='widget Header' id='Header1'>
                                <div id='header-inner'>
                                    <a href='";
        // line 50
        echo ($context["base_url_absolute"] ?? null);
        echo "' style='display: block'>
                                        <img id='Header1_headerimg' src='";
        // line 51
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.png' style='display: block' alt='";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "' />
                                    </a>
                                </div>
                            </div></div>
                            <div class='gdlr-responsive-navigation dl-menuwrapper' id='gdlr-responsive-navigation'><button class='dl-trigger'>Open Menu</button><ul class='dl-menu gdlr-main-mobile-menu' id='menu-main-menu'>
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "mainmenu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "                                    ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["item"], "url", []), "page:")) {
                // line 58
                echo "                    \t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='";
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["item"], "url", []), ["page:" => ""]);
                echo "'>";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a></li>
                    \t\t\t\t";
            } else {
                // line 60
                echo "                   \t\t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='";
                echo $this->getAttribute($context["item"], "url", []);
                echo "'>";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a></li>
                \t\t\t\t\t";
            }
            // line 62
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </ul></div>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </header>
        ";
    }

    // line 71
    public function block_navigation($context, array $blocks = [])
    {
        // line 72
        echo "            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 72)->display($context);
        // line 73
        echo "        ";
    }

    // line 75
    public function block_body($context, array $blocks = [])
    {
        // line 76
        echo "            <div class='content-wrapper'>
                <div class='gdlr-content'>

                    ";
        // line 79
        $this->displayBlock('masterslider', $context, $blocks);
        // line 82
        echo "
                    ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "                    </div>
                </div>
            ";
    }

    // line 79
    public function block_masterslider($context, array $blocks = [])
    {
        // line 80
        echo "                        ";
        $this->loadTemplate("partials/masterslider.html.twig", "partials/base.html.twig", 80)->display($context);
        // line 81
        echo "                    ";
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
    }

    // line 88
    public function block_footer($context, array $blocks = [])
    {
        // line 89
        echo "                ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 89)->display($context);
        // line 90
        echo "            ";
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
        return array (  338 => 90,  335 => 89,  332 => 88,  327 => 83,  323 => 81,  320 => 80,  317 => 79,  311 => 84,  309 => 83,  306 => 82,  304 => 79,  299 => 76,  296 => 75,  292 => 73,  289 => 72,  286 => 71,  276 => 63,  270 => 62,  262 => 60,  252 => 58,  249 => 57,  245 => 56,  235 => 51,  231 => 50,  223 => 44,  220 => 43,  213 => 36,  208 => 35,  205 => 34,  196 => 28,  193 => 27,  190 => 26,  187 => 25,  184 => 24,  181 => 23,  177 => 21,  174 => 20,  171 => 19,  168 => 18,  165 => 17,  162 => 16,  159 => 15,  156 => 14,  151 => 38,  149 => 34,  146 => 33,  142 => 31,  140 => 30,  137 => 29,  135 => 23,  132 => 22,  130 => 14,  126 => 13,  119 => 9,  116 => 8,  114 => 7,  106 => 6,  103 => 5,  100 => 4,  91 => 92,  88 => 91,  86 => 88,  83 => 87,  81 => 75,  78 => 74,  76 => 71,  73 => 70,  71 => 43,  66 => 41,  63 => 40,  61 => 4,  43 => 2,  40 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\" class='{% if browser.getBrowser == 'msie' and browser.getVersion == 7 and browser.getVersion == 8 %}{% else %}v2{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 7 %}ie ie7 ltie8 ltie9{% endif %} {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}ie ie8 ltie9{% endif %}'>
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />
        <link href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;ver=3.9.1' id='Merriweather-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='https://fonts.googleapis.com/css?family=Arvo%3Aregular%2Citalic%2C700%2C700italic&amp;subset=latin&amp;ver=3.9.1' id='Arvo-google-font-css' media='all' rel='stylesheet' type='text/css'/>
        <link href='//maxcdn.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css' rel='stylesheet'/>
        <meta name=\"google-translate-customization\" content=\"{{ site.google_translate_token }}\">
        {% block stylesheets %}
            {% do assets.addCss('theme://css/widget_css_2_bundle.css') %}
            {% do assets.addCss('theme://css/style.css') %}
            {% do assets.addCss('theme://css/lightbox.css') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion >= 7 and browser.getVersion <= 8 %}
                {% do assets.addCss('theme://css/ie.css') %}
            {% endif %}
        {% endblock %}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.add('theme://js/jquery-migrate-1.2.1.min.js') %}
            {% do assets.add('theme://js/lightbox.min.js') %}
            {% do assets.add('theme://js/script.js') %}
        {% endblock %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
        {% endif %}

        {% block assets deferred %}
            {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

    {% endblock head %}
</head>
<body id=\"top\" class=\"page page-template-default {{ page.header.body_classes }}\">
    <div class=\"body-wrapper  float-menu gdlr-pattern-background\">
        {% block header %}
            <header class='gdlr-header-wrapper'>
                <div class='gdlr-logo-container container'>
                    <div class='gdlr-logo-wrapper'>
                        <div class='gdlr-logo'>
                            <div class='header section' id='header'><div class='widget Header' id='Header1'>
                                <div id='header-inner'>
                                    <a href='{{ base_url_absolute }}' style='display: block'>
                                        <img id='Header1_headerimg' src='{{ theme_url }}/images/logo.png' style='display: block' alt='{{ site.title }}' />
                                    </a>
                                </div>
                            </div></div>
                            <div class='gdlr-responsive-navigation dl-menuwrapper' id='gdlr-responsive-navigation'><button class='dl-trigger'>Open Menu</button><ul class='dl-menu gdlr-main-mobile-menu' id='menu-main-menu'>
                                {% for item in site.mainmenu %}
                                    {% if item.url | contains('page:') %}
                    \t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='{{ base_url_absolute }}/{{ item.url|replace({\"page:\":''}) }}'>{{ item.text }}</a></li>
                    \t\t\t\t{% else %}
                   \t\t\t\t\t\t<li class='menu-item menu-item-type-post_type'><a href='{{ item.url }}'>{{ item.text }}</a></li>
                \t\t\t\t\t{% endif %}
                                {% endfor %}
                            </ul></div>
                        </div>
                    </div>
                </div>
                <div class='clear'></div>
            </header>
        {% endblock %}

        {% block navigation %}
            {% include 'partials/navigation.html.twig' %}
        {% endblock %}

        {% block body %}
            <div class='content-wrapper'>
                <div class='gdlr-content'>

                    {% block masterslider %}
                        {% include 'partials/masterslider.html.twig' %}
                    {% endblock %}

                    {% block content %}{% endblock %}
                    </div>
                </div>
            {% endblock %}

            {% block footer %}
                {% include 'partials/footer.html.twig' %}
            {% endblock %}
        </div>
        {{ assets.js('bottom')|raw }} 
    </body>
    </html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\partials\\base.html.twig");
    }
}
