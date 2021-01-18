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
class __TwigTemplate_ca49ce9a6066a04406ecc592c1b59ddebbb132730be55d862977556819fd462d extends \Twig\Template
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
            'header_extra' => [$this, 'block_header_extra'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'sidebar' => [$this, 'block_sidebar'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"";
        // line 6
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 49
        echo "</head>

<body>
    <div id=\"wrapper\">
\t\t\t";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 98
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "        ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 110
        echo "
    </div>

";
        // line 113
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 114
            echo "<script type=\"text/javascript\">
\$(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '";
            // line 121
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
            echo "' + input.val();
        }
    });
});
</script>
";
        }
        // line 127
        echo "
    ";
        // line 128
        $this->displayBlock('bottom', $context, $blocks);
        // line 131
        echo "</body>
</html>
";
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
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

        ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

        <!--[if lte IE 8]><script src=\"";
        // line 29
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/html5shiv.js");
        echo "\"></script><![endif]-->

        ";
        // line 31
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 32
            echo "           <script src=\"//code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
       ";
        }
        // line 34
        echo "
       <!--[if lte IE 8]><script src=\"";
        // line 35
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/js/ie/respond.min.js");
        echo "\"></script><![endif]-->
       <!--[if lte IE 8]><script src=\"";
        // line 36
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://assets/css/ie8.css");
        echo "\"></script><![endif]-->

       ";
        // line 38
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 39
            echo "        <script type=\"text/javascript\">
        \$(function() {
            \$( \"#datepicker\" ).datepicker({
                hideIfNoPrevNext: true
            });
        });
        </script>
    ";
        }
        // line 47
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/main.css"], "method");
        // line 18
        echo "        ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        // line 22
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 23
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 24
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/util.js"], "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/main.js"], "method");
        // line 26
        echo "        ";
    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        // line 54
        echo "            <header id=\"header\" role=\"banner\">
              <h1><a href=\"";
        // line 55
        echo $this->getAttribute(($context["site"] ?? null), "url", []);
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a></h1>
                  ";
        // line 56
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "                  <nav class=\"main\">
                            <ul>
                                ";
        // line 59
        $this->displayBlock('header_extra', $context, $blocks);
        // line 60
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "langswitcher", []), "enabled", [])) {
            // line 61
            echo "                                ";
            $this->loadTemplate("partials/langswitcher.html.twig", "partials/base.html.twig", 61)->display($context);
            // line 62
            echo "                                ";
        }
        // line 63
        echo "                                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 64
            echo "                                ";
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/base.html.twig", 64)->display($context);
            // line 65
            echo "                                ";
        }
        // line 66
        echo "                                <li class=\"menu\">
                                    <a class=\"fa-bars\" href=\"#menu\">Menu</a>
                                </li>
                            </ul>
                        </nav>
\t\t\t<section id=\"menu\">
  \t\t\t  <!-- Links -->
\t\t\t    <section>
\t\t\t      <ul class=\"links\">
\t\t\t        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 76
            echo "     \t\t\t\t  ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 77
                echo "    \t\t\t\t    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("current") : (""));
                // line 78
                echo "              \t\t\t    <li>
                      \t\t      <a href=\"";
                // line 79
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">
                          \t\t<h3>";
                // line 80
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</h3>
                      \t\t      </a>
                  \t\t    </li>
          \t\t\t  ";
            }
            // line 84
            echo "      \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "      \t\t\t\t";
        // line 86
        echo "      \t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 87
            echo "          \t\t\t  <li>
              \t\t\t    <a href=\"";
            // line 88
            echo $this->getAttribute($context["mitem"], "link", []);
            echo "\">
                \t\t      <h3>";
            // line 89
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</h3>
              \t\t\t    </a>
          \t\t\t  </li>
      \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "      \t\t\t      </ul>
    \t\t\t    </section>
\t\t\t  </section>
            </header>
        ";
    }

    // line 59
    public function block_header_extra($context, array $blocks = [])
    {
    }

    // line 98
    public function block_body($context, array $blocks = [])
    {
        // line 99
        echo "
            <div id=\"content\">
                <div class=\"inner\" role=\"main\">
                    ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 104
        echo "                </div>
            </div>
        ";
    }

    // line 102
    public function block_content($context, array $blocks = [])
    {
        // line 103
        echo "                    ";
    }

    // line 107
    public function block_sidebar($context, array $blocks = [])
    {
        // line 108
        echo "            ";
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 108)->display($context);
        // line 109
        echo "        ";
    }

    // line 128
    public function block_bottom($context, array $blocks = [])
    {
        // line 129
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
        return array (  378 => 129,  375 => 128,  371 => 109,  368 => 108,  365 => 107,  361 => 103,  358 => 102,  352 => 104,  350 => 102,  345 => 99,  342 => 98,  337 => 59,  329 => 93,  319 => 89,  315 => 88,  312 => 87,  307 => 86,  305 => 85,  299 => 84,  292 => 80,  288 => 79,  285 => 78,  282 => 77,  279 => 76,  275 => 75,  264 => 66,  261 => 65,  258 => 64,  255 => 63,  252 => 62,  249 => 61,  246 => 60,  244 => 59,  240 => 57,  238 => 56,  232 => 55,  229 => 54,  226 => 53,  222 => 26,  219 => 25,  216 => 24,  213 => 23,  210 => 22,  207 => 21,  203 => 18,  200 => 17,  197 => 16,  192 => 47,  182 => 39,  180 => 38,  175 => 36,  171 => 35,  168 => 34,  164 => 32,  162 => 31,  157 => 29,  151 => 27,  149 => 21,  143 => 19,  141 => 16,  136 => 14,  132 => 13,  129 => 12,  127 => 11,  119 => 10,  116 => 9,  113 => 8,  107 => 131,  105 => 128,  102 => 127,  93 => 121,  84 => 114,  82 => 113,  77 => 110,  74 => 107,  71 => 98,  69 => 53,  63 => 49,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  41 => 2,  39 => 1,);
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
<!DOCTYPE html>
<!--[if lt IE 8 ]><html class=\"no-js ie ie7\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">\"> <![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie ie8\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">> <![endif]-->
<!--[if IE 9 ]><html class=\"no-js ie ie9\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class=\"no-js\" lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\"> <!--<![endif]-->
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

        {% block stylesheets %}
            {% do assets.addCss('theme://assets/css/main.css') %}
        {% endblock %}
        {{ assets.css() }}

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}
        {{ assets.js() }}

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

    {% endblock head%}
</head>

<body>
    <div id=\"wrapper\">
\t\t\t{% block header %}
            <header id=\"header\" role=\"banner\">
              <h1><a href=\"{{ site.url }}\">{{ site.title }}</a></h1>
                  {% include 'partials/navigation.html.twig' %}
                  <nav class=\"main\">
                            <ul>
                                {% block header_extra %}{% endblock %}
                                {% if config.plugins.langswitcher.enabled %}
                                {% include 'partials/langswitcher.html.twig' %}
                                {% endif %}
                                {% if config.plugins.simplesearch.enabled %}
                                {% include 'partials/simplesearch_searchbox.html.twig' %}
                                {% endif %}
                                <li class=\"menu\">
                                    <a class=\"fa-bars\" href=\"#menu\">Menu</a>
                                </li>
                            </ul>
                        </nav>
\t\t\t<section id=\"menu\">
  \t\t\t  <!-- Links -->
\t\t\t    <section>
\t\t\t      <ul class=\"links\">
\t\t\t        {% for page in pages.children %}
     \t\t\t\t  {% if page.visible %}
    \t\t\t\t    {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
              \t\t\t    <li>
                      \t\t      <a href=\"{{ page.url }}\">
                          \t\t<h3>{{ page.menu }}</h3>
                      \t\t      </a>
                  \t\t    </li>
          \t\t\t  {% endif %}
      \t\t\t\t{% endfor %}
      \t\t\t\t{# CUSTOM MENU ITEMS #}
      \t\t\t\t{% for mitem in site.menu %}
          \t\t\t  <li>
              \t\t\t    <a href=\"{{ mitem.link }}\">
                \t\t      <h3>{{ mitem.text }}</h3>
              \t\t\t    </a>
          \t\t\t  </li>
      \t\t\t\t{% endfor %}
      \t\t\t      </ul>
    \t\t\t    </section>
\t\t\t  </section>
            </header>
        {% endblock %}
        {% block body %}

            <div id=\"content\">
                <div class=\"inner\" role=\"main\">
                    {% block content %}
                    {% endblock %}
                </div>
            </div>
        {% endblock %}
        {% block sidebar %}
            {% include 'partials/sidebar.html.twig' %}
        {% endblock %}

    </div>

{% if config.plugins.simplesearch.enabled %}
<script type=\"text/javascript\">
\$(document).ready(function(\$){
    var input = \$('[data-search-input]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
{% endif %}

    {% block bottom %}
        {{ assets.js('bottom') }}
    {% endblock %}
</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\future\\templates\\partials\\base.html.twig");
    }
}
