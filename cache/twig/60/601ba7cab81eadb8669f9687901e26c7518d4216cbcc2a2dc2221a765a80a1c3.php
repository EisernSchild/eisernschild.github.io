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

/* partials/sidebar.html.twig */
class __TwigTemplate_9d709a53d6eb27433e003bea3fa41a9ccdf10a1032e039e2f677d2c869d1e145 extends \Twig\Template
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
        echo "<div id=\"sidebar\">
<h1 id=\"logo\"><a href=\"";
        // line 2
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</a></h1>

";
        // line 4
        $this->loadTemplate("partials/navigation.html.twig", "partials/sidebar.html.twig", 4)->display($context);
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 7
            echo "<section class=\"box search\">
    ";
            // line 8
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 8)->display($context);
            // line 9
            echo "</section>
";
        }
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 12
            echo "<section class=\"box recent-comments\">
    <header>
        <h2>Related Posts</h2>
    </header>
    ";
            // line 16
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 16)->display($context);
            // line 17
            echo "</section>
";
        }
        // line 19
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 20
            echo "<section class=\"box text-style1\">
    <div class=\"inner\">
        <header>
            <h2>Random Article</h2>
        </header>
        <a href=\"";
            // line 25
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
</section>
";
        }
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 30
            echo "    <section class=\"box recent-posts\">
        <header>
            <h2>Archives</h2>
        </header>
        ";
            // line 34
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 34)->display($context);
            // line 35
            echo "    </section>
";
        }
        // line 37
        echo "
";
        // line 38
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "taxonomylist", []), "enabled", [])) {
            // line 39
            echo "<section class=\"box recent-comments\">
    <header>
        <h2>Popular Tags</h2>
    </header>
    ";
            // line 43
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 43)->display(twig_array_merge($context, ["taxonomy" => "tag"]));
            // line 44
            echo "</section>
";
        }
        // line 46
        echo "
";
        // line 47
        if ($this->getAttribute(($context["site"] ?? null), "calendar", [])) {
            // line 48
            echo "<section class=\"box calendar\">
    <div class=\"inner\">
        <div id=\"datepicker\"></div>
    </div>
</section>
";
        }
        // line 54
        echo "
";
        // line 55
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 56
            echo "<section class=\"box text-style1\">
    <header>
        <h2>Syndicate</h2>
    </header>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"";
            // line 60
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"";
            // line 61
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</section>
";
        }
        // line 64
        echo "
<ul id=\"copyright\">
    <li>&copy; ";
        // line 66
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
        echo "</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
    <li>Demo Images: <a href=\"http://unsplash.com\">Unsplash</a></li>
</ul>

</div>
";
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 66,  151 => 64,  145 => 61,  141 => 60,  135 => 56,  133 => 55,  130 => 54,  122 => 48,  120 => 47,  117 => 46,  113 => 44,  111 => 43,  105 => 39,  103 => 38,  100 => 37,  96 => 35,  94 => 34,  88 => 30,  86 => 29,  79 => 25,  72 => 20,  70 => 19,  66 => 17,  64 => 16,  58 => 12,  56 => 11,  52 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,  40 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"sidebar\">
<h1 id=\"logo\"><a href=\"{{ base_url_absolute }}\">{{ site.title|upper }}</a></h1>

{% include 'partials/navigation.html.twig' %}

{% if config.plugins.simplesearch.enabled %}
<section class=\"box search\">
    {% include 'partials/simplesearch_searchbox.html.twig' %}
</section>
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
<section class=\"box recent-comments\">
    <header>
        <h2>Related Posts</h2>
    </header>
    {% include 'partials/relatedpages.html.twig' %}
</section>
{% endif %}
{% if config.plugins.random.enabled %}
<section class=\"box text-style1\">
    <div class=\"inner\">
        <header>
            <h2>Random Article</h2>
        </header>
        <a href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
    </div>
</section>
{% endif %}
{% if config.plugins.archives.enabled %}
    <section class=\"box recent-posts\">
        <header>
            <h2>Archives</h2>
        </header>
        {% include 'partials/archives.html.twig' %}
    </section>
{% endif %}

{% if config.plugins.taxonomylist.enabled %}
<section class=\"box recent-comments\">
    <header>
        <h2>Popular Tags</h2>
    </header>
    {% include 'partials/taxonomylist.html.twig' with {'taxonomy':'tag'} %}
</section>
{% endif %}

{% if site.calendar %}
<section class=\"box calendar\">
    <div class=\"inner\">
        <div id=\"datepicker\"></div>
    </div>
</section>
{% endif %}

{% if config.plugins.feed.enabled %}
<section class=\"box text-style1\">
    <header>
        <h2>Syndicate</h2>
    </header>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" style=\"padding-right: 1em;padding-left: 1em;\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</section>
{% endif %}

<ul id=\"copyright\">
    <li>&copy; {{ site.author.name }}</li><li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
    <li>Demo Images: <a href=\"http://unsplash.com\">Unsplash</a></li>
</ul>

</div>
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\striped\\templates\\partials\\sidebar.html.twig");
    }
}
