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
class __TwigTemplate_cca8e63ce6a385a485f6f4c956029a6ae49a5fa760d56665cc504131a6b21dba extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'favicons' => [$this, 'block_favicons'],
            'jsonld' => [$this, 'block_jsonld'],
            'webfont' => [$this, 'block_webfont'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'navigation' => [$this, 'block_navigation'],
            'browserchecks' => [$this, 'block_browserchecks'],
            'intro' => [$this, 'block_intro'],
            'main' => [$this, 'block_main'],
            'content' => [$this, 'block_content'],
            'pagination' => [$this, 'block_pagination'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ("en"));
        echo "\" class=\"no-js\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "  </head>
  <body class=\"preload body-nav-fix\">
    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 89
        echo "
    ";
        // line 90
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        // line 5
        echo "      <title>";
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
        echo "      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

      ";
        // line 11
        $this->displayBlock('favicons', $context, $blocks);
        // line 14
        echo "
      ";
        // line 15
        $this->displayBlock('jsonld', $context, $blocks);
        // line 24
        echo "
      ";
        // line 25
        $this->displayBlock('webfont', $context, $blocks);
        // line 28
        echo "
      ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    ";
    }

    // line 11
    public function block_favicons($context, array $blocks = [])
    {
        // line 12
        echo "        <link rel=\"icon\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.ico", true);
        echo "\">
      ";
    }

    // line 15
    public function block_jsonld($context, array $blocks = [])
    {
        // line 16
        echo "        <script type=\"application/ld+json\">
          {
            \"@context\": \"http://schema.org\",
            \"@type\": \"WebSite\",
            \"url\": \"";
        // line 20
        echo ($context["base_url_absolute"] ?? null);
        echo "\"
          }
        </script>
      ";
    }

    // line 25
    public function block_webfont($context, array $blocks = [])
    {
        // line 26
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700\" rel=\"stylesheet\">
      ";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/master.css", 1 => ["priority" => 100]], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 99], "method");
        // line 32
        echo "
        ";
        // line 33
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
      ";
    }

    // line 38
    public function block_body($context, array $blocks = [])
    {
        // line 39
        echo "
      ";
        // line 40
        $this->displayBlock('navigation', $context, $blocks);
        // line 43
        echo "
      ";
        // line 44
        $this->displayBlock('browserchecks', $context, $blocks);
        // line 55
        echo "
      ";
        // line 56
        $this->displayBlock('intro', $context, $blocks);
        // line 61
        echo "
      ";
        // line 62
        $context["overlap"] = (($this->getAttribute($this->getAttribute(($context["header"] ?? null), "intro", []), "enabled", [])) ? ("overlap") : (""));
        // line 63
        echo "
      ";
        // line 64
        $this->displayBlock('main', $context, $blocks);
        // line 82
        echo "
      ";
        // line 83
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "    ";
    }

    // line 40
    public function block_navigation($context, array $blocks = [])
    {
        // line 41
        echo "        ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "      ";
    }

    // line 44
    public function block_browserchecks($context, array $blocks = [])
    {
        // line 45
        echo "        <noscript>
          <div id=\"nojs\" class=\"message warning text-center\">
            ";
        // line 47
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_PLUSPUNKT.NOSCRIPT");
        echo "
          </div>
        </noscript>

        <div id=\"oldbrowser\" class=\"message error text-center hide\">
          ";
        // line 52
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, "THEME_PLUSPUNKT.OLDBROWSER");
        echo "
        </div>
      ";
    }

    // line 56
    public function block_intro($context, array $blocks = [])
    {
        // line 57
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["header"] ?? null), "intro", []), "enabled", [])) {
            // line 58
            echo "          ";
            $this->loadTemplate("partials/intro.html.twig", "partials/base.html.twig", 58)->display($context);
            // line 59
            echo "        ";
        }
        // line 60
        echo "      ";
    }

    // line 64
    public function block_main($context, array $blocks = [])
    {
        // line 65
        echo "        <main id=\"main\" class=\"";
        echo ($context["overlap"] ?? null);
        echo "\">
          ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "
          ";
        // line 69
        $this->displayBlock('pagination', $context, $blocks);
        // line 74
        echo "
          ";
        // line 75
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 80
        echo "        </main>
      ";
    }

    // line 66
    public function block_content($context, array $blocks = [])
    {
        // line 67
        echo "          ";
    }

    // line 69
    public function block_pagination($context, array $blocks = [])
    {
        // line 70
        echo "            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "pagination", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", []))) {
            // line 71
            echo "              ";
            $this->loadTemplate("partials/pagination.html.twig", "partials/base.html.twig", 71)->display(twig_array_merge($context, ["base_url" => $this->getAttribute(($context["page"] ?? null), "url", []), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", []), "pagination", [])]));
            // line 72
            echo "            ";
        }
        // line 73
        echo "          ";
    }

    // line 75
    public function block_breadcrumbs($context, array $blocks = [])
    {
        // line 76
        echo "            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "breadcrumbs", []), "enabled", [])) {
            // line 77
            echo "              ";
            $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 77)->display($context);
            // line 78
            echo "            ";
        }
        // line 79
        echo "          ";
    }

    // line 83
    public function block_footer($context, array $blocks = [])
    {
        // line 84
        echo "        <footer>
          ";
        // line 85
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 85)->display($context);
        // line 86
        echo "        </footer>
      ";
    }

    // line 90
    public function block_javascripts($context, array $blocks = [])
    {
        // line 91
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/modernizr.js", 1 => ["priority" => 100]], "method");
        // line 92
        echo "
      ";
        // line 93
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 94
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/respond.min.js", 1 => ["priority" => 99]], "method");
            // line 95
            echo "      ";
        }
        // line 96
        echo "
      ";
        // line 97
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/smooth-scroll.js", 1 => ["priority" => 98]], "method");
        // line 98
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://js/pluspunkt.js", 1 => ["priority" => 97]], "method");
        // line 99
        echo "
      ";
        // line 100
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
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
        return array (  356 => 100,  353 => 99,  350 => 98,  348 => 97,  345 => 96,  342 => 95,  339 => 94,  337 => 93,  334 => 92,  331 => 91,  328 => 90,  323 => 86,  321 => 85,  318 => 84,  315 => 83,  311 => 79,  308 => 78,  305 => 77,  302 => 76,  299 => 75,  295 => 73,  292 => 72,  289 => 71,  286 => 70,  283 => 69,  279 => 67,  276 => 66,  271 => 80,  269 => 75,  266 => 74,  264 => 69,  261 => 68,  259 => 66,  254 => 65,  251 => 64,  247 => 60,  244 => 59,  241 => 58,  238 => 57,  235 => 56,  228 => 52,  220 => 47,  216 => 45,  213 => 44,  209 => 42,  206 => 41,  203 => 40,  199 => 88,  197 => 83,  194 => 82,  192 => 64,  189 => 63,  187 => 62,  184 => 61,  182 => 56,  179 => 55,  177 => 44,  174 => 43,  172 => 40,  169 => 39,  166 => 38,  160 => 33,  157 => 32,  154 => 31,  151 => 30,  148 => 29,  143 => 26,  140 => 25,  132 => 20,  126 => 16,  123 => 15,  116 => 12,  113 => 11,  109 => 35,  107 => 29,  104 => 28,  102 => 25,  99 => 24,  97 => 15,  94 => 14,  92 => 11,  87 => 8,  85 => 7,  75 => 5,  72 => 4,  66 => 102,  64 => 90,  61 => 89,  59 => 38,  55 => 36,  53 => 4,  48 => 2,  45 => 1,);
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
<html lang=\"{{ grav.language.getActive ? grav.language.getActive : 'en'}}\" class=\"no-js\">
  <head>
    {% block head %}
      <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>

      {% include 'partials/metadata.html.twig' %}
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

      {% block favicons %}
        <link rel=\"icon\" href=\"{{ url('theme://images/favicon.ico', true) }}\">
      {% endblock %}

      {% block jsonld %}
        <script type=\"application/ld+json\">
          {
            \"@context\": \"http://schema.org\",
            \"@type\": \"WebSite\",
            \"url\": \"{{ base_url_absolute }}\"
          }
        </script>
      {% endblock %}

      {% block webfont %}
        <link href=\"https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700\" rel=\"stylesheet\">
      {% endblock %}

      {% block stylesheets %}
        {% do assets.addCss('theme://css/master.css', {'priority': 100}) %}
        {% do assets.addCss('theme://css/custom.css', 99) %}

        {{ assets.css() }}
      {% endblock %}
    {% endblock %}
  </head>
  <body class=\"preload body-nav-fix\">
    {% block body %}

      {% block navigation %}
        {% include 'partials/navigation.html.twig' %}
      {% endblock %}

      {% block browserchecks %}
        <noscript>
          <div id=\"nojs\" class=\"message warning text-center\">
            {{ \"THEME_PLUSPUNKT.NOSCRIPT\"|t }}
          </div>
        </noscript>

        <div id=\"oldbrowser\" class=\"message error text-center hide\">
          {{ \"THEME_PLUSPUNKT.OLDBROWSER\"|t }}
        </div>
      {% endblock %}

      {% block intro %}
        {% if header.intro.enabled %}
          {% include 'partials/intro.html.twig' %}
        {% endif %}
      {% endblock %}

      {% set overlap = header.intro.enabled ? 'overlap' : '' %}

      {% block main %}
        <main id=\"main\" class=\"{{ overlap }}\">
          {% block content %}
          {% endblock %}

          {% block pagination %}
            {% if config.plugins.pagination.enabled and collection.params.pagination %}
              {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination}%}
            {% endif %}
          {% endblock %}

          {% block breadcrumbs %}
            {% if config.plugins.breadcrumbs.enabled %}
              {% include 'partials/breadcrumbs.html.twig' %}
            {% endif %}
          {% endblock %}
        </main>
      {% endblock %}

      {% block footer %}
        <footer>
          {% include 'partials/footer.html.twig' %}
        </footer>
      {% endblock %}
    {% endblock %}

    {% block javascripts %}
      {% do assets.add('theme://js/modernizr.js', {'priority': 100}) %}

      {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://js/respond.min.js', {'priority': 99}) %}
      {% endif %}

      {% do assets.add('theme://js/smooth-scroll.js', {'priority': 98}) %}
      {% do assets.add('theme://js/pluspunkt.js', {'priority': 97}) %}

      {{ assets.js() }}
    {% endblock %}
  </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\base.html.twig");
    }
}
