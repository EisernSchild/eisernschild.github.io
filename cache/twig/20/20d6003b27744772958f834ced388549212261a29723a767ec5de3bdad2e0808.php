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
class __TwigTemplate_6302f37fb2dbcfc21e2e8f3a365d14905979763a9e091924b6c32ad9d09559d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        $context["is_sidebar"] = (($this->getAttribute(($context["header"] ?? null), "sidebar", []) === true) || ( !$this->getAttribute(($context["header"] ?? null), "sidebar", [], "any", true, true) && ($this->getAttribute(($context["theme_config"] ?? null), "sidebar", []) === true)));
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">
<head>

";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "</head>
<body id=\"top\" class=\"";
        // line 45
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">
    <div id=\"page\" class=\"hfeed site\">
        ";
        // line 47
        $this->displayBlock('header', $context, $blocks);
        // line 92
        echo "        <div id=\"content\" class=\"site-content\">
            <div id=\"primary\" class=\"content-area";
        // line 93
        echo ((($context["is_sidebar"] ?? null)) ? ("") : (" full-width"));
        echo "\">
                <main id=\"main\" class=\"site-main\">
                    ";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "                </main>
            </div>
            ";
        // line 98
        if (($context["is_sidebar"] ?? null)) {
            // line 99
            echo "                <div id=\"secondary\" class=\"widget-area\" role=\"complementary\">
                ";
            // line 100
            $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 100)->display($context);
            // line 101
            echo "                </div>
            ";
        }
        // line 103
        echo "        </div>
        ";
        // line 104
        $this->displayBlock('footer', $context, $blocks);
        // line 112
        echo "    </div><!-- #page -->
    <a href=\"#top\" class=\"to-top\"><i class=\"fa fa-angle-up fa-lg\"><span class=\"screen-reader-text\">Back to top</span></i></a>

    ";
        // line 115
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
</body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        // line 8
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 9
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png", true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css", 1 => 103], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600", 1 => 103], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://fonts.googleapis.com/css?family=Roboto+Slab:300", 1 => 103], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.css", 1 => 102], "method");
        // line 20
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "rtl", [])) {
            // line 21
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/rtl.css", 1 => 101], "method");
            // line 22
            echo "        ";
        }
        // line 23
        echo "        ";
        if (($this->getAttribute(($context["theme_config"] ?? null), "colors", []) && $this->getAttribute(($context["theme_config"] ?? null), "custom_colors", []))) {
            // line 24
            echo "            ";
            $context["custom_colors"] = twig_include($this->env, $context, "css/custom_colors.css.twig");
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineCss", [0 => ($context["custom_colors"] ?? null), 1 => 102], "method");
            // line 26
            echo "        ";
        }
        // line 27
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 100], "method");
        // line 28
        echo "
        ";
        // line 29
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 9))) {
            // line 30
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/html5shiv-printshiv.min.js"], "method");
            // line 31
            echo "        ";
        }
        // line 32
        echo "    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/modernizr.custom.71422.js", 1 => 100], "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/skip-link-focus-fix.js", 1 => 100], "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/nucleare.js"], "method");
        // line 40
        echo "    ";
    }

    // line 47
    public function block_header($context, array $blocks = [])
    {
        // line 48
        echo "        <div class=\"navigation-bar clear\">
            <div class=\"navigation-block\">
                <nav id=\"site-navigation\" class=\"main-navigation\">
                    <button class=\"menu-toggle\" aria-controls=\"site-navigation\" aria-expanded=\"false\"><i class=\"fa fa-bars\"></i><span class=\"screen-reader-text\">Menu</span></button>
                    ";
        // line 52
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 55
        echo "                </nav><!-- #site-navigation -->
                ";
        // line 56
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 57
            echo "                    <div class=\"simple-search\">
                        <div class=\"open-search top-search\"><i class=\"fa fa-search\"><span class=\"screen-reader-text\">";
            // line 58
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_NUCLEARE.SEARCH.BUTTON");
            echo "</span></i></div>
                    </div>
                ";
        }
        // line 61
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 62
            echo "                    ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 62)->display($context);
            // line 63
            echo "                ";
        }
        // line 64
        echo "            </div>
        </div>

        ";
        // line 67
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 68
            echo "            ";
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 68)->display($context);
            // line 69
            echo "        ";
        }
        // line 70
        echo "
        <header id=\"masthead\" class=\"site-header\">
            <div class=\"site-branding\">
                <h1 class=\"site-title\"><a href=\"";
        // line 73
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\" rel=\"home\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a></h1>
                ";
        // line 74
        if ($this->getAttribute(($context["site"] ?? null), "description", [])) {
            // line 75
            echo "                    <h2 class=\"site-description\">";
            echo $this->getAttribute(($context["site"] ?? null), "description", []);
            echo "</h2>
                ";
        }
        // line 77
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "header_image", []), "enabled", [])) {
            // line 78
            echo "                    <figure class=\"entry-featured-image\">
                    <a class=\"site-header-image\" href=\"";
            // line 79
            echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
            echo "\" rel=\"home\" ";
            echo (($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "header_image", []), "height", [])) ? ((("style=\"max-height: " . $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "header_image", []), "height", [])) . "\"")) : (""));
            echo ">
                        <img src=\"";
            // line 80
            echo ($context["theme_url"] ?? null);
            echo "/";
            echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "header_image", []), "src", []);
            echo "\" alt=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_NUCLEARE.HEADER_IMAGE_ALT");
            echo "\" class=\"custom-header\">
                        <figcaption>
                        <p>
                            <i class=\"fa fa-home\"></i>
                        </p>
                        </figcaption>
                    </a>
                    </figure>
                ";
        }
        // line 89
        echo "            </div><!-- .site-branding -->
        </header><!-- #masthead -->
        ";
    }

    // line 52
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 53
        echo "                        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "                    ";
    }

    // line 95
    public function block_content($context, array $blocks = [])
    {
    }

    // line 104
    public function block_footer($context, array $blocks = [])
    {
        // line 105
        echo "        <footer id=\"colophon\" class=\"site-footer\">
            <div class=\"site-info small-part\">
                <span>© ";
        // line 107
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo " - ";
        echo $this->getAttribute(twig_date_converter($this->env), "format", [0 => "Y"], "method");
        echo "</span>&nbsp;|&nbsp;
                <span>";
        // line 108
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_NUCLEARE.FOOTER", "<a target=\"_blank\" href=\"https://wordpress.com/themes/nucleare/\">Nucleare</a>");
        echo "</span>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
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
        return array (  352 => 108,  346 => 107,  342 => 105,  339 => 104,  334 => 95,  330 => 54,  327 => 53,  324 => 52,  318 => 89,  302 => 80,  296 => 79,  293 => 78,  290 => 77,  284 => 75,  282 => 74,  276 => 73,  271 => 70,  268 => 69,  265 => 68,  263 => 67,  258 => 64,  255 => 63,  252 => 62,  249 => 61,  243 => 58,  240 => 57,  238 => 56,  235 => 55,  233 => 52,  227 => 48,  224 => 47,  220 => 40,  217 => 39,  214 => 38,  211 => 37,  208 => 36,  205 => 35,  201 => 32,  198 => 31,  195 => 30,  193 => 29,  190 => 28,  187 => 27,  184 => 26,  181 => 25,  178 => 24,  175 => 23,  172 => 22,  169 => 21,  166 => 20,  163 => 19,  160 => 18,  157 => 17,  154 => 16,  151 => 15,  143 => 41,  141 => 35,  135 => 33,  133 => 15,  128 => 13,  124 => 12,  121 => 11,  119 => 10,  111 => 9,  108 => 8,  105 => 7,  97 => 115,  92 => 112,  90 => 104,  87 => 103,  83 => 101,  81 => 100,  78 => 99,  76 => 98,  72 => 96,  70 => 95,  65 => 93,  62 => 92,  60 => 47,  55 => 45,  52 => 44,  50 => 7,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set is_sidebar = header.sidebar is sameas(true) or (header.sidebar is not defined and theme_config.sidebar is sameas(true)) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>

{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png', true) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {% block stylesheets %}
        {% do assets.addCss('theme://css/font-awesome.min.css',103) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600',103) %}
        {% do assets.addCss('https://fonts.googleapis.com/css?family=Roboto+Slab:300',103) %}
        {% do assets.addCss('theme://css/style.css', 102) %}
        {% if theme_config.rtl %}
            {% do assets.addCss('theme://css/rtl.css', 101) %}
        {% endif %}
        {% if theme_config.colors and theme_config.custom_colors %}
            {% set custom_colors = include('css/custom_colors.css.twig') %}
            {% do assets.addInlineCss(custom_colors, 102) %}
        {% endif %}
        {% do assets.addCss('theme://css/custom.css',100) %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/skip-link-focus-fix.js',100) %}
        {% do assets.addJs('theme://js/nucleare.js') %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">
    <div id=\"page\" class=\"hfeed site\">
        {% block header %}
        <div class=\"navigation-bar clear\">
            <div class=\"navigation-block\">
                <nav id=\"site-navigation\" class=\"main-navigation\">
                    <button class=\"menu-toggle\" aria-controls=\"site-navigation\" aria-expanded=\"false\"><i class=\"fa fa-bars\"></i><span class=\"screen-reader-text\">Menu</span></button>
                    {% block header_navigation %}
                        {% include 'partials/navigation.html.twig' %}
                    {% endblock %}
                </nav><!-- #site-navigation -->
                {% if config.plugins.simplesearch.enabled %}
                    <div class=\"simple-search\">
                        <div class=\"open-search top-search\"><i class=\"fa fa-search\"><span class=\"screen-reader-text\">{{ 'THEME_NUCLEARE.SEARCH.BUTTON'|t }}</span></i></div>
                    </div>
                {% endif %}
                {% if config.plugins.langswitcher.enabled %}
                    {% include 'partials/langswitcher.html.twig' %}
                {% endif %}
            </div>
        </div>

        {% if config.plugins.simplesearch.enabled %}
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        {% endif %}

        <header id=\"masthead\" class=\"site-header\">
            <div class=\"site-branding\">
                <h1 class=\"site-title\"><a href=\"{{ base_url == '' ? '/' : base_url }}\" rel=\"home\">{{ site.title }}</a></h1>
                {% if site.description %}
                    <h2 class=\"site-description\">{{ site.description }}</h2>
                {% endif %}
                {% if theme_config.header_image.enabled %}
                    <figure class=\"entry-featured-image\">
                    <a class=\"site-header-image\" href=\"{{ base_url == '' ? '/' : base_url }}\" rel=\"home\" {{ theme_config.header_image.height ? 'style=\"max-height: ' ~ theme_config.header_image.height ~ '\"' : '' }}>
                        <img src=\"{{ theme_url }}/{{ theme_config.header_image.src }}\" alt=\"{{ 'THEME_NUCLEARE.HEADER_IMAGE_ALT'|t }}\" class=\"custom-header\">
                        <figcaption>
                        <p>
                            <i class=\"fa fa-home\"></i>
                        </p>
                        </figcaption>
                    </a>
                    </figure>
                {% endif %}
            </div><!-- .site-branding -->
        </header><!-- #masthead -->
        {% endblock %}
        <div id=\"content\" class=\"site-content\">
            <div id=\"primary\" class=\"content-area{{ is_sidebar ? '' : ' full-width' }}\">
                <main id=\"main\" class=\"site-main\">
                    {% block content %}{% endblock %}
                </main>
            </div>
            {% if is_sidebar %}
                <div id=\"secondary\" class=\"widget-area\" role=\"complementary\">
                {% include 'partials/sidebar.html.twig' %}
                </div>
            {% endif %}
        </div>
        {% block footer %}
        <footer id=\"colophon\" class=\"site-footer\">
            <div class=\"site-info small-part\">
                <span>© {{ site.title }} - {{ date().format('Y') }}</span>&nbsp;|&nbsp;
                <span>{{ 'THEME_NUCLEARE.FOOTER'|t('<a target=\"_blank\" href=\"https://wordpress.com/themes/nucleare/\">Nucleare</a>') }}</span>
            </div><!-- .site-info -->
        </footer><!-- #colophon -->
        {% endblock %}
    </div><!-- #page -->
    <a href=\"#top\" class=\"to-top\"><i class=\"fa fa-angle-up fa-lg\"><span class=\"screen-reader-text\">Back to top</span></i></a>

    {{ assets.js('bottom') }}
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\Nucleare\\templates\\partials\\base.html.twig");
    }
}
