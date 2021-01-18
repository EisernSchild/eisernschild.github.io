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
class __TwigTemplate_b559468ec43f8191f8d9b3886859596554f247bad3edeaa92557a8e603011a53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'assets' => [$this, 'block_assets'],
            'body' => [$this, 'block_body'],
            'content' => [$this, 'block_content'],
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
        // line 31
        echo "    </head>
    <body class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "body_classes", []);
        echo "\">

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"";
        // line 38
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">";
        // line 41
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</span>
                    </div>
                     ";
        // line 43
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "                </header>
            </div>
        </div>

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-10\">
                        <img class=\"img-intro\" src=\"";
        // line 52
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://img/" . $this->getAttribute(($context["site"] ?? null), "intro_avatar", [])));
        echo "\" alt=\"\">
                    </div>
                    <div class=\"unit-90\">
                        <p class=\"p-intro\">";
        // line 55
        echo $this->getAttribute(($context["site"] ?? null), "intro", []);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 61
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp\">
                            <a href=\"";
        // line 74
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "footer", []);
        echo "</a>
                        </p>
                    </div>
                    <div class=\"unit-50\">
                        <ul class=\"social list-flat right\">
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "                            <li><a href=\"";
            echo $this->getAttribute($context["item"], "link", []);
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></i></a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                        </ul>
                    </div>
                    <p class=\"text-centered foot-cp\">
                        <a href=\"";
        // line 85
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "url2", []);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "footer2", []);
        echo "</a>
                    </p>
                </div>
            </div>
        </footer>

        ";
        // line 91
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
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/favicon.png");
        echo "\" />

        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "        
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">

        ";
        // line 25
        $this->displayBlock('assets', $context, $blocks);
        // line 29
        echo "
        ";
    }

    // line 11
    public function block_javascripts($context, array $blocks = [])
    {
        // line 12
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 13
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/kube.min.js"], "method");
        // line 14
        echo "        ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 17
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/kube.min.css"], "method");
        // line 18
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/font-awesome.min.css"], "method");
        // line 19
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.min.css"], "method");
        // line 20
        echo "        ";
    }

    public function block_assets($context, array $blocks = array())
    {
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->defer($this, 'assets');
    }

    // line 25
    public function block_assets_deferred($context, array $blocks = array())
    {
        // line 26
        echo "\t        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
            ";
        // line 27
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
        ";
        $this->env->getExtension('Phive\Twig\Extensions\Deferred\DeferredExtension')->resolve($this, $context, $blocks);
    }

    // line 61
    public function block_body($context, array $blocks = [])
    {
        // line 62
        echo "            <div class=\"content\">
                <div class=\"container\">
                    ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "                </div>
            </div>
        ";
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
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
        return array (  266 => 64,  260 => 65,  258 => 64,  254 => 62,  251 => 61,  244 => 27,  239 => 26,  236 => 25,  227 => 20,  224 => 19,  221 => 18,  218 => 17,  215 => 16,  211 => 14,  208 => 13,  205 => 12,  202 => 11,  197 => 29,  195 => 25,  189 => 21,  187 => 16,  184 => 15,  182 => 11,  177 => 9,  174 => 8,  172 => 7,  164 => 6,  161 => 5,  158 => 4,  149 => 91,  138 => 85,  133 => 82,  122 => 80,  118 => 79,  108 => 74,  100 => 68,  98 => 61,  89 => 55,  83 => 52,  73 => 44,  71 => 43,  66 => 41,  58 => 38,  49 => 32,  46 => 31,  44 => 4,  39 => 2,  36 => 1,);
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
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://img/favicon.png') }}\" />

        {% block javascripts %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://js/kube.min.js') %}
        {% endblock %}
        
        {% block stylesheets %}
            {% do assets.addCss('theme://css/kube.min.css') %}
            {% do assets.addCss('theme://css/font-awesome.min.css') %}
            {% do assets.addCss('theme://css/custom.min.css') %}
        {% endblock %}

        <link href=\"https://fonts.googleapis.com/css?family=Lato:400,700\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:400,700\" rel=\"stylesheet\" type=\"text/css\">

        {% block assets deferred %}
\t        {{ assets.css()|raw }}
            {{ assets.js()|raw }}
        {% endblock %}

        {% endblock head%}
    </head>
    <body class=\"{{ page.header.body_classes }}\">

        <div class=\"main-nav\">
            <div class=\"container\">
                <header class=\"group top-nav\">
                    <nav class=\"navbar logo-w navbar-left\" >
                        <a class=\"logo\" href=\"{{ base_url_absolute }}\">{{ site.title }}</a>
                    </nav>
                    <div class=\"navigation-toggle\" data-tools=\"navigation-toggle\" data-target=\"#navbar-1\">
                        <span class=\"logo\">{{ site.title }}</span>
                    </div>
                     {% include 'partials/navigation.html.twig' %}
                </header>
            </div>
        </div>

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-10\">
                        <img class=\"img-intro\" src=\"{{ url('theme://img/' ~ site.intro_avatar ) }}\" alt=\"\">
                    </div>
                    <div class=\"unit-90\">
                        <p class=\"p-intro\">{{ site.intro }}</p>
                    </div>
                </div>
            </div>
        </div>

        {% block body %}
            <div class=\"content\">
                <div class=\"container\">
                    {% block content %}{% endblock %}
                </div>
            </div>
        {% endblock %}

        <footer>
            <div class=\"container\">
                <div class=\"units-row\">
                    <div class=\"unit-50\">
                        <p class=\"text-centered foot-cp\">
                            <a href=\"{{ site.author.url }}\">{{ site.author.footer }}</a>
                        </p>
                    </div>
                    <div class=\"unit-50\">
                        <ul class=\"social list-flat right\">
                        {% for item in site.social %}
                            <li><a href=\"{{ item.link }}\"><i class=\"fa fa-{{ item.icon }}\"></i></a></li>
                        {% endfor %}
                        </ul>
                    </div>
                    <p class=\"text-centered foot-cp\">
                        <a href=\"{{ site.author.url2}}\">{{ site.author.footer2 }}</a>
                    </p>
                </div>
            </div>
        </footer>

        {{ assets.js('bottom')|raw }}
    </body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\saturn\\templates\\partials\\base.html.twig");
    }
}
