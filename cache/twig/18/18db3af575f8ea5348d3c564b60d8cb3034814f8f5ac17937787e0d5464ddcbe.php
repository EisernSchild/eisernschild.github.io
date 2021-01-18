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
class __TwigTemplate_e1307fcdba13cf956be6567ef7ea10e0de5a8833aa28dd5cdd436e1a4dfefe50 extends \Twig\Template
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
            'header_navigation' => [$this, 'block_header_navigation'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'header_navigation_mobile' => [$this, 'block_header_navigation_mobile'],
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
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('assets', $context, $blocks);
        // line 39
        echo "</head>
<body id=\"top\" class=\"";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "
<button class=\"nav--mobile__toggle\" id=\"nav-mobile-toggle\">
    <span class=\"top\"></span>
    <span class=\"middle\"></span>
    <span class=\"bottom\"></span>
</button>

<div class=\"nav--mobile__overlay\" id=\"nav-mobile-overlay\">
    <div class=\"nav--mobile__overlay__logo\">
        ";
        // line 76
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 76)->display(twig_array_merge($context, ["mobile" => true]));
        // line 77
        echo "    </div>
    <nav class=\"nav--mobile__nav\">
        ";
        // line 79
        $this->displayBlock('header_navigation_mobile', $context, $blocks);
        // line 82
        echo "    </nav>
</div>

";
        // line 85
        $this->displayBlock('bottom', $context, $blocks);
        // line 88
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
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 10
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 10)->display($context);
        // line 11
        echo "
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "favicon", [])) {
            // line 13
            echo "        ";
            $context["favicon_img"] = $this->getAttribute(($context["media"] ?? null), ("image://webfolio/" . $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "favicon", [])), "name", [])), [], "array");
            // line 14
            echo "        ";
            if ( !($context["favicon_img"] ?? null)) {
                // line 15
                echo "            ";
                $context["favicon_img"] = $this->getAttribute(($context["media"] ?? null), ("theme://images/" . $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "favicon", [])), "name", [])), [], "array");
                // line 16
                echo "        ";
            }
            // line 17
            echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
            echo $this->getAttribute(($context["favicon_img"] ?? null), "url", []);
            echo "\" />
    ";
        }
        // line 19
        echo "    <link rel=\"canonical\" href=\"";
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->loadTemplate("partials/css-vars.html.twig", "partials/base.html.twig", 23)->display($context);
        // line 24
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/normalize.css", 1 => 98], "method");
        // line 25
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/theme.min.css", 1 => 98], "method");
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 98], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "user://css/webfolio.css", 1 => 98], "method");
    }

    // line 30
    public function block_javascripts($context, array $blocks = [])
    {
        // line 31
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 32
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/theme.js", 1 => 100], "method");
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 35
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 37
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 42
    public function block_header($context, array $blocks = [])
    {
        // line 43
        echo "    <header id=\"header\" class=\"header\">
        <div class=\"header__content\">
            <div class=\"header__logo\">
                ";
        // line 46
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 46)->display($context);
        // line 47
        echo "            </div>
            
            <nav class=\"nav--main__nav\">
            ";
        // line 50
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 53
        echo "            </nav>
        </div>
    </header>
";
    }

    // line 50
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 51
        echo "                ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "            ";
    }

    // line 58
    public function block_body($context, array $blocks = [])
    {
        // line 59
        echo "    <section id=\"body\">
        ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "    </section>
";
    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
    }

    // line 64
    public function block_footer($context, array $blocks = [])
    {
        // line 65
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 65)->display($context);
    }

    // line 79
    public function block_header_navigation_mobile($context, array $blocks = [])
    {
        // line 80
        echo "            ";
        $this->loadTemplate("partials/nav.html.twig", "partials/base.html.twig", 80)->display($context);
        // line 81
        echo "        ";
    }

    // line 85
    public function block_bottom($context, array $blocks = [])
    {
        // line 86
        echo "    ";
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
        return array (  293 => 86,  290 => 85,  286 => 81,  283 => 80,  280 => 79,  275 => 65,  272 => 64,  267 => 60,  262 => 61,  260 => 60,  257 => 59,  254 => 58,  250 => 52,  247 => 51,  244 => 50,  237 => 53,  235 => 50,  230 => 47,  228 => 46,  223 => 43,  220 => 42,  213 => 37,  208 => 36,  205 => 35,  195 => 32,  192 => 31,  189 => 30,  184 => 27,  181 => 26,  178 => 25,  175 => 24,  172 => 23,  169 => 22,  162 => 19,  156 => 17,  153 => 16,  150 => 15,  147 => 14,  144 => 13,  142 => 12,  139 => 11,  137 => 10,  126 => 6,  123 => 5,  120 => 4,  112 => 88,  110 => 85,  105 => 82,  103 => 79,  99 => 77,  97 => 76,  86 => 67,  84 => 64,  81 => 63,  79 => 58,  76 => 57,  74 => 42,  69 => 40,  66 => 39,  64 => 35,  61 => 34,  59 => 30,  56 => 29,  54 => 22,  51 => 21,  49 => 4,  44 => 2,  41 => 1,);
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
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    {% if config.theme.favicon %}
        {% set favicon_img = media['image://webfolio/' ~ (config.theme.favicon|first).name] %}
        {% if not favicon_img %}
            {% set favicon_img = media['theme://images/' ~ (config.theme.favicon|first).name] %}
        {% endif %}
        <link rel=\"icon\" type=\"image/png\" href=\"{{ favicon_img.url }}\" />
    {% endif %}
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
{% endblock head%}

{% block stylesheets %}
    {% include 'partials/css-vars.html.twig' %}
    {% do assets.addCss('theme://css/normalize.css', 98) %}
    {% do assets.addCss('theme://css-compiled/theme.min.css', 98) %}
    {% do assets.addCss('theme://css/custom.css', 98) %}
    {% do assets.addCss('user://css/webfolio.css', 98) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs('jquery', 100) %}
    {% do assets.addJs('theme://js/theme.js', 100) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }}\">

{% block header %}
    <header id=\"header\" class=\"header\">
        <div class=\"header__content\">
            <div class=\"header__logo\">
                {% include 'partials/logo.html.twig' %}
            </div>
            
            <nav class=\"nav--main__nav\">
            {% block header_navigation %}
                {% include 'partials/nav.html.twig' %}
            {% endblock %}
            </nav>
        </div>
    </header>
{% endblock %}

{% block body %}
    <section id=\"body\">
        {% block content %}{% endblock %}
    </section>
{% endblock %}

{% block footer %}
    {% include 'partials/footer.html.twig' %}
{% endblock %}

<button class=\"nav--mobile__toggle\" id=\"nav-mobile-toggle\">
    <span class=\"top\"></span>
    <span class=\"middle\"></span>
    <span class=\"bottom\"></span>
</button>

<div class=\"nav--mobile__overlay\" id=\"nav-mobile-overlay\">
    <div class=\"nav--mobile__overlay__logo\">
        {% include 'partials/logo.html.twig' with {mobile: true} %}
    </div>
    <nav class=\"nav--mobile__nav\">
        {% block header_navigation_mobile %}
            {% include 'partials/nav.html.twig' %}
        {% endblock %}
    </nav>
</div>

{% block bottom %}
    {{ assets.js('bottom')|raw }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\webfolio\\templates\\partials\\base.html.twig");
    }
}
