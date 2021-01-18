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

/* partials/navigation.html.twig */
class __TwigTemplate_0355b65b0da14e2d9ec1bd96dae73bd592664b781bc39f05d4ed5a1cd600b05a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class='gdlr-navigation-outer-wrapper' id='gdlr-navigation-outer-wrapper'>
    <div class='gdlr-navigation-container container'>
        <div class='gdlr-navigation-gimmick' id='gdlr-navigation-gimmick'></div>
        <div class='gdlr-navigation-wrapper'><nav class='gdlr-navigation' id='gdlr-main-navigation' role='navigation'>
            <ul class='sf-menu gdlr-main-menu' id='menu-main-menu-1'>
            <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='";
        // line 6
        echo ($context["base_url_absolute"] ?? null);
        echo "'>Home</a></li>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "mainmenu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "                ";
            if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($context["item"], "url", []), "page:")) {
                // line 9
                echo "                    <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='";
                echo ($context["base_url_absolute"] ?? null);
                echo "/";
                echo twig_replace_filter($this->getAttribute($context["item"], "url", []), ["page:" => ""]);
                echo "'>";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a></li>
                    ";
            } else {
                // line 11
                echo "                    <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='";
                echo $this->getAttribute($context["item"], "url", []);
                echo "'>";
                echo $this->getAttribute($context["item"], "text", []);
                echo "</a></li>
                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul></nav>
    <div class='top-search-button' id='top-search-button'>
        <i class='icon-search'></i>
    </div>
    <div class='clear'></div></div>
</div>
</div>
<div id='gdlr-navigation-substitute'></div>
<div class='gdlr-nav-search-form' id='gdlr-nav-search-form'>
    <div class='gdlr-nav-search-container container'>
        <form>
            <i class='icon-search'></i>
            <div class='search-text' id='search-text2'>
                <input autocomplete='off' data-default='Type keywords...' name='q' type='text' value=\"";
        // line 27
        echo ($context["query"] ?? null);
        echo "\" data-search-input2=\"";
        echo ($context["base_url_relative"] ?? null);
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "route", []);
        echo "/query\"/><input type='hidden' value='max-results=6'/>
            </div>
            <div class='clear'></div>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '";
        // line 41
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", []);
        echo "' + input.val();
        }
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 41,  87 => 27,  72 => 14,  66 => 13,  58 => 11,  48 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class='gdlr-navigation-outer-wrapper' id='gdlr-navigation-outer-wrapper'>
    <div class='gdlr-navigation-container container'>
        <div class='gdlr-navigation-gimmick' id='gdlr-navigation-gimmick'></div>
        <div class='gdlr-navigation-wrapper'><nav class='gdlr-navigation' id='gdlr-main-navigation' role='navigation'>
            <ul class='sf-menu gdlr-main-menu' id='menu-main-menu-1'>
            <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='{{ base_url_absolute }}'>Home</a></li>
            {% for item in site.mainmenu %}
                {% if item.url | contains('page:') %}
                    <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='{{ base_url_absolute }}/{{ item.url|replace({\"page:\":''}) }}'>{{ item.text }}</a></li>
                    {% else %}
                    <li class='menu-item menu-item-type-post_type gdlr-normal-menu'><a href='{{ item.url }}'>{{ item.text }}</a></li>
                {% endif %}
            {% endfor %}
    </ul></nav>
    <div class='top-search-button' id='top-search-button'>
        <i class='icon-search'></i>
    </div>
    <div class='clear'></div></div>
</div>
</div>
<div id='gdlr-navigation-substitute'></div>
<div class='gdlr-nav-search-form' id='gdlr-nav-search-form'>
    <div class='gdlr-nav-search-container container'>
        <form>
            <i class='icon-search'></i>
            <div class='search-text' id='search-text2'>
                <input autocomplete='off' data-default='Type keywords...' name='q' type='text' value=\"{{ query }}\" data-search-input2=\"{{ base_url_relative }}{{ config.plugins.simplesearch.route}}/query\"/><input type='hidden' value='max-results=6'/>
            </div>
            <div class='clear'></div>
        </form>
    </div>
</div>

<script>
jQuery(document).ready(function(\$){
    var input = \$('[data-search-input2]');

    input.on('keypress', function(event) {
        if (event.which == 13 && input.val().length > 3) {
            event.preventDefault();
            window.location.href = input.data('search-input2') + '{{ config.system.param_sep }}' + input.val();
        }
    });
});
</script>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\partials\\navigation.html.twig");
    }
}
