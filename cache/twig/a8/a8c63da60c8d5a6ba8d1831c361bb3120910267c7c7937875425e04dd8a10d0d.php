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
class __TwigTemplate_9cbbf465d26424adfc3589e68a81a826b68dece280765e91ac113492d2480c0e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "pages", []), "theme", []));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", [])));
        echo "\">

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    ";
        // line 8
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 8)->display($context);
        // line 9
        echo "
    <base href=\"";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\">
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <link rel=\"canonical\" href=\"";
        // line 13
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 26
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon-16x16.png");
        echo "\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon-32x32.png");
        echo "\" sizes=\"32x32\">
  </head>

  <body class=\"\">
    <main class=\"wrapper\">
      <nav id=\"navigation\" class=\"navbar navbar-default navbar-fixed-top\">
        <section class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed float-right\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand float-left\" href=\"";
        // line 41
        echo ($context["home_url"] ?? null);
        echo "\">
              ";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "title", []);
        echo "
            </a>
          </div>
          ";
        // line 45
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 50
        echo "        </section>
      </nav>

      <div class=\"content\">
        ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "      </div>

      ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "
    </main>

    ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "
    ";
        // line 79
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    
  </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = [])
    {
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "//cdn.rawgit.com/necolas/normalize.css/master/normalize.css", 1 => 99], "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/bootstrap.min.css", 1 => 98], "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "https://use.fontawesome.com/releases/v5.2.0/css/all.css", 1 => 97], "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/style.min.css?v=8", 1 => 96], "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/main.min.css?v=8", 1 => 95], "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 94], "method");
        // line 22
        echo "    ";
    }

    // line 45
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 46
        echo "            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
              ";
        // line 47
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 47)->display($context);
        // line 48
        echo "            </div>
          ";
    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        // line 55
        echo "          <section class=\"container centered\">
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "          </section>
        ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
    }

    // line 61
    public function block_footer($context, array $blocks = [])
    {
        // line 62
        echo "        <footer class=\"footer\">
          ";
        // line 63
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 63)->display($context);
        // line 64
        echo "        </footer>
      ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        // line 70
        echo "      ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "debugger", []), "enabled", [])) {
            // line 71
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "//code.jquery.com/jquery-2.1.3.min.js", 1 => 100], "method");
            // line 72
            echo "      ";
        } else {
            // line 73
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/jquery-slim.min.js", 1 => 100], "method");
            // line 74
            echo "      ";
        }
        // line 75
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/bootstrap.min.js", 1 => 99], "method");
        // line 76
        echo "      ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.min.js", 1 => 98], "method");
        // line 77
        echo "    ";
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
        return array (  248 => 77,  245 => 76,  242 => 75,  239 => 74,  236 => 73,  233 => 72,  230 => 71,  227 => 70,  224 => 69,  219 => 64,  217 => 63,  214 => 62,  211 => 61,  206 => 56,  201 => 57,  199 => 56,  196 => 55,  193 => 54,  188 => 48,  186 => 47,  183 => 46,  180 => 45,  176 => 22,  173 => 21,  170 => 20,  167 => 19,  164 => 18,  161 => 17,  158 => 16,  155 => 15,  145 => 11,  136 => 79,  133 => 78,  131 => 69,  126 => 66,  124 => 61,  120 => 59,  118 => 54,  112 => 50,  110 => 45,  104 => 42,  100 => 41,  83 => 27,  79 => 26,  74 => 24,  71 => 23,  69 => 15,  64 => 13,  59 => 11,  55 => 10,  52 => 9,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
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
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">

  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    {% include 'partials/metadata.html.twig' %}

    <base href=\"{{ page.url(true, true) }}\">
    <title>{% block title %}{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}{% endblock %}</title>

    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\">

    {% block stylesheets %}
        {% do assets.addCss('//cdn.rawgit.com/necolas/normalize.css/master/normalize.css', 99) %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 98) %}
        {% do assets.addCss('https://use.fontawesome.com/releases/v5.2.0/css/all.css', 97) %}
        {% do assets.addCss('theme://css/style.min.css?v=8', 96) %}
        {% do assets.addCss('theme://css/main.min.css?v=8', 95) %}
        {% do assets.addCss('theme://css/custom.css', 94) %}
    {% endblock %}

    {{ assets.css() | raw }}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon-16x16.png') }}\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon-32x32.png') }}\" sizes=\"32x32\">
  </head>

  <body class=\"\">
    <main class=\"wrapper\">
      <nav id=\"navigation\" class=\"navbar navbar-default navbar-fixed-top\">
        <section class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed float-right\" data-toggle=\"collapse\" data-target=\"#navbar-menu\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand float-left\" href=\"{{ home_url }}\">
              {{ theme_config.navbar.title }}
            </a>
          </div>
          {% block header_navigation %}
            <div class=\"collapse navbar-collapse\" id=\"navbar-menu\">
              {% include 'partials/navigation.html.twig' %}
            </div>
          {% endblock %}
        </section>
      </nav>

      <div class=\"content\">
        {% block body %}
          <section class=\"container centered\">
            {% block content %}{% endblock %}
          </section>
        {% endblock %}
      </div>

      {% block footer %}
        <footer class=\"footer\">
          {% include 'partials/footer.html.twig' %}
        </footer>
      {% endblock %}

    </main>

    {% block javascripts %}
      {% if config.system.debugger.enabled %}
        {% do assets.addJs('//code.jquery.com/jquery-2.1.3.min.js',100) %}
      {% else %}
        {% do assets.addJs('theme://js/jquery-slim.min.js', 100) %}
      {% endif %}
      {% do assets.addJs('theme://js/bootstrap.min.js', 99) %}
      {% do assets.addJs('theme://js/main.min.js', 98) %}
    {% endblock %}

    {{ assets.js() | raw }}
    
  </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\grav-coder\\templates\\partials\\base.html.twig");
    }
}
