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
class __TwigTemplate_df3c6ff51e32ae9fbbee18da85a46dd4d26e5ef992e98c231cffffaa93a2aa60 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'navbartop' => [$this, 'block_navbartop'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        // line 36
        echo "</head>
<body>
 
";
        // line 39
        $this->displayBlock('menu', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('panel', $context, $blocks);
        // line 57
        echo " 

";
        // line 59
        $this->displayBlock('bottom', $context, $blocks);
        // line 62
        echo "
</body>
</html>
";
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

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"theme-color\" content=\"#d3e3ea\">
    ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 12)->display($context);
        // line 13
        echo " 
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method");
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Rubik\" rel=\"stylesheet\">
    <link href=\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\" rel=\"stylesheet\">
    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo " 
    ";
        // line 24
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 25
        $this->loadTemplate("partials/settings.css.html.twig", "partials/base.html.twig", 25)->display($context);
        // line 26
        echo "
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/main.min.css", 1 => 99], "method");
        // line 20
        echo "        ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "markdown-notices", [], "array"), "built_in_css", [])) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/plugins/markdown-notices.min.css", 1 => 90], "method");
        }
        echo " 
        ";
        // line 21
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "tntsearch", [], "array"), "built_in_css", [])) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css-compiled/plugins/tntsearch.min.css", 1 => 80], "method");
        }
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css", 1 => 70], "method");
        // line 23
        echo "    ";
    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        // line 28
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 100], "method");
        // line 29
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/slideoutjs/slideout.min.js", 1 => ["group" => "bottom"]], "method");
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/vendor/metismenu/metismenu.min.js", 1 => ["group" => "bottom"]], "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/main.js", 1 => ["group" => "bottom"]], "method");
        // line 32
        echo "    ";
    }

    // line 39
    public function block_menu($context, array $blocks = [])
    {
        echo " 
     <div class=\"main-nav\" id=\"menu\"> 
        ";
        // line 41
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 41)->display($context);
        // line 42
        echo "     </div> 
";
    }

    // line 45
    public function block_panel($context, array $blocks = [])
    {
        // line 46
        echo "    <div class=\"panel site\" id=\"panel\">
        ";
        // line 47
        $this->displayBlock('navbartop', $context, $blocks);
        // line 50
        echo "        <div class=\"site-content\">
            ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        echo " 
        </div>
        ";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 55
        echo " 
    </div>
";
    }

    // line 47
    public function block_navbartop($context, array $blocks = [])
    {
        // line 48
        echo "            ";
        $this->loadTemplate("partials/navbartop.html.twig", "partials/base.html.twig", 48)->display($context);
        // line 49
        echo "        ";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
    }

    // line 53
    public function block_footer($context, array $blocks = [])
    {
        // line 54
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "        ";
    }

    // line 59
    public function block_bottom($context, array $blocks = [])
    {
        // line 60
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
        return array (  241 => 60,  238 => 59,  234 => 55,  231 => 54,  228 => 53,  223 => 51,  219 => 49,  216 => 48,  213 => 47,  207 => 55,  205 => 53,  200 => 51,  197 => 50,  195 => 47,  192 => 46,  189 => 45,  184 => 42,  182 => 41,  176 => 39,  172 => 32,  169 => 31,  166 => 30,  163 => 29,  160 => 28,  157 => 27,  153 => 23,  150 => 22,  146 => 21,  139 => 20,  136 => 19,  133 => 18,  125 => 33,  123 => 27,  120 => 26,  118 => 25,  114 => 24,  111 => 23,  109 => 18,  103 => 15,  99 => 14,  96 => 13,  94 => 12,  82 => 7,  79 => 6,  76 => 5,  69 => 62,  67 => 59,  63 => 57,  61 => 45,  58 => 44,  56 => 39,  51 => 36,  49 => 5,  44 => 3,  41 => 2,  39 => 1,);
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
    <meta name=\"theme-color\" content=\"#d3e3ea\">
    {% include 'partials/metadata.html.twig' %}
 
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Rubik\" rel=\"stylesheet\">
    <link href=\"https://use.fontawesome.com/releases/v5.4.2/css/all.css\" rel=\"stylesheet\">
    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/main.min.css', 99) %}
        {% if not config.plugins['markdown-notices'].built_in_css %}{% do assets.addCss('theme://css-compiled/plugins/markdown-notices.min.css', 90) %}{% endif %} 
        {% if not config.plugins['tntsearch'].built_in_css %}{% do assets.addCss('theme://css-compiled/plugins/tntsearch.min.css', 80) %}{% endif %}
        {% do assets.addCss('theme://css/custom.css', 70) %}
    {% endblock %} 
    {{ assets.css() }}
    {% include 'partials/settings.css.html.twig' %}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/vendor/slideoutjs/slideout.min.js', {group: 'bottom'}) %}
        {% do assets.addJs('theme://js/vendor/metismenu/metismenu.min.js', {group: 'bottom'}) %}
        {% do assets.addJs('theme://js/main.js', {group: 'bottom'}) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head %}
</head>
<body>
 
{% block menu %} 
     <div class=\"main-nav\" id=\"menu\"> 
        {% include 'partials/navigation.html.twig' %}
     </div> 
{% endblock %}

{% block panel %}
    <div class=\"panel site\" id=\"panel\">
        {% block navbartop %}
            {% include 'partials/navbartop.html.twig' %}
        {% endblock %}
        <div class=\"site-content\">
            {% block content %}{% endblock %} 
        </div>
        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %} 
    </div>
{% endblock %} 

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\partials\\base.html.twig");
    }
}
