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
class __TwigTemplate_6f56ab19b571a0dfc3d57e6144eb3b5906ee59b48efb0b1d02cf2d7083755d54 extends \Twig\Template
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
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
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
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo " 
    </head>
    <body>
    ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "
    ";
        // line 48
        $this->displayBlock('bottom', $context, $blocks);
        // line 51
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\" />
        ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo "
        <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\">

        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo " 
        ";
        // line 22
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo " 
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        // line 30
        $this->loadTemplate("partials/settings.css.html.twig", "partials/base.html.twig", 30)->display($context);
        // line 31
        echo "    ";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/main.min.css", 1 => 99], "method");
        // line 19
        echo "            ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "markdown-notices", [], "array"), "built_in_css", [])) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/markdown-notices.min.css", 1 => 98], "method");
        }
        echo " 
            ";
        // line 20
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/custom.css", 1 => 97], "method");
        // line 21
        echo "        ";
    }

    // line 23
    public function block_javascripts($context, array $blocks = [])
    {
        echo " 
            ";
        // line 24
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 25
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/metismenu/metismenu.min.js", 1 => ["group" => "bottom"]], "method");
        // line 26
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/slideoutjs/slideout.min.js", 1 => ["group" => "bottom"]], "method");
        // line 27
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 28
        echo "        ";
    }

    // line 34
    public function block_header($context, array $blocks = [])
    {
        // line 35
        echo "        ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 40
        echo "    ";
    }

    // line 35
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 36
        echo "        <div class=\"main-nav\" id=\"menu\"> 
            ";
        // line 37
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 37)->display($context);
        // line 38
        echo "        </div> 
        ";
    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        // line 43
        echo "        <main id=\"panel\" class=\"slideout-panel\"> 
            ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "        </main>
    ";
    }

    // line 44
    public function block_content($context, array $blocks = [])
    {
    }

    // line 48
    public function block_bottom($context, array $blocks = [])
    {
        // line 49
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
        return array (  210 => 49,  207 => 48,  202 => 44,  197 => 45,  195 => 44,  192 => 43,  189 => 42,  184 => 38,  182 => 37,  179 => 36,  176 => 35,  172 => 40,  169 => 35,  166 => 34,  162 => 28,  159 => 27,  156 => 26,  153 => 25,  151 => 24,  146 => 23,  142 => 21,  140 => 20,  133 => 19,  130 => 18,  127 => 17,  123 => 31,  121 => 30,  116 => 29,  114 => 23,  110 => 22,  107 => 21,  105 => 17,  99 => 14,  96 => 13,  94 => 12,  90 => 11,  79 => 7,  76 => 6,  73 => 5,  67 => 51,  65 => 48,  62 => 47,  60 => 42,  57 => 41,  55 => 34,  50 => 31,  48 => 5,  43 => 3,  40 => 2,  38 => 1,);
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
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{url('theme://images/favicon.png')}}\" />
        {% include 'partials/metadata.html.twig' %}

        <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
        <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500\" rel=\"stylesheet\">

        {% block stylesheets %}
            {% do assets.addCss('theme://css-compiled/main.min.css', 99) %}
            {% if not config.plugins['markdown-notices'].built_in_css %}{% do assets.addCss('theme://css-compiled/markdown-notices.min.css', 98) %}{% endif %} 
            {% do assets.addCss('theme://css-compiled/custom.css', 97) %}
        {% endblock %} 
        {{ assets.css() }} 
        {% block javascripts %} 
            {% do assets.addJs('jquery', 100) %}
            {% do assets.addJs('theme://js/vendor/metismenu/metismenu.min.js', {group: 'bottom'}) %}
            {% do assets.addJs('theme://js/vendor/slideoutjs/slideout.min.js', {group: 'bottom'}) %}
            {% do assets.addJs('theme://js/main.js', {group: 'bottom'}) %}
        {% endblock %}
        {{ assets.js() }}
        {% include 'partials/settings.css.html.twig' %}
    {% endblock head%} 
    </head>
    <body>
    {% block header %}
        {% block header_navigation %}
        <div class=\"main-nav\" id=\"menu\"> 
            {% include 'partials/navigation.html.twig' %}
        </div> 
        {% endblock %}
    {% endblock %}

    {% block body %}
        <main id=\"panel\" class=\"slideout-panel\"> 
            {% block content %}{% endblock %}
        </main>
    {% endblock %}

    {% block bottom %}
        {{ assets.js('bottom') }}
    {% endblock %}
    </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\vela\\templates\\partials\\base.html.twig");
    }
}
