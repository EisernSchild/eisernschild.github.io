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
class __TwigTemplate_fa36210d09b885e3c8aaad328911b0e3cff823f434b921f27d0aeb2d59d2c7bb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section id=\"sidebar\">

                        <!-- Intro -->
                            <section id=\"intro\" role=\"banner\">
                                <a href=\"";
        // line 5
        echo ($context["base_url_absolute"] ?? null);
        echo "\" class=\"logo\"><img src=\"";
        echo ($context["theme_url"] ?? null);
        echo "/images/logo.jpg\" alt=\"";
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "\" /></a>
                                <header>
                                    <h2>";
        // line 7
        echo twig_upper_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []));
        echo "</h2>
                                    <p>Another fine responsive site template by <a href=\"http://html5up.net\">HTML5 UP</a></p>
                                </header>
                            </section>

                            <section role=\"complementary\">
                                <div class=\"mini-posts\">

                                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "hits", 1 => "desc"], "method"), "slice", [0 => 0, 1 => 2], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 16
            echo "                                ";
            $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", []), "images", []));
            // line 17
            echo "                                    ";
            if ($this->getAttribute($this->getAttribute($context["p"], "header", []), "author", [])) {
                // line 18
                echo "                                    ";
                $context["pauthor"] = $this->getAttribute($this->getAttribute($context["p"], "header", []), "author", []);
                // line 19
                echo "                                    ";
            } else {
                // line 20
                echo "                                    ";
                $context["pauthor"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", []), "taxonomy", []), "author", []), 0, [], "array");
                // line 21
                echo "                                    ";
            }
            // line 22
            echo "                                    ";
            if (($context["pauthor"] ?? null)) {
                // line 23
                echo "                                    ";
                $context["pavatar"] = twig_lower_filter($this->env, twig_replace_filter($this->getAttribute($context["p"], "author", []), " ", "-"));
                // line 24
                echo "                                    ";
            }
            // line 25
            echo "
                                    <!-- Mini Post -->
                                        <article class=\"mini-post\">
                                            <header>
                                                <h3><a href=\"";
            // line 29
            echo $this->getAttribute($context["p"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["p"], "title", []);
            echo "</a></h3>
                                                <time class=\"published\" datetime=\"";
            // line 30
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "Y-m-d");
            echo "\">";
            echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y");
            echo "</time>
                                                ";
            // line 31
            if (($context["pauthor"] ?? null)) {
                // line 32
                echo "                                                <a href=\"";
                echo $this->getAttribute(($context["page"] ?? null), "url", []);
                echo "\" class=\"author\"><img src=\"";
                echo ($context["theme_url"] ?? null);
                echo "/images/";
                echo ($context["pavatar"] ?? null);
                echo ".jpg\" alt=\"";
                echo ($context["pauthor"] ?? null);
                echo "\" /></a>
                                                ";
            }
            // line 34
            echo "                                            </header>
                                            <a href=\"";
            // line 35
            echo $this->getAttribute($context["p"], "url", []);
            echo "\" class=\"image\">";
            echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", [0 => 350, 1 => 175], "method"), "quality", [0 => 60], "method");
            echo "</a>                                       
                                    </article>

   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
</div>
</section>
";
        // line 42
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 43
            echo "        ";
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 43)->display($context);
        }
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "relatedpages", []), "enabled", []) && (twig_length_filter($this->env, ($context["related_pages"] ?? null)) > 0))) {
            // line 46
            echo "    ";
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 46)->display($context);
        }
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 49
            echo "<section role=\"complementary\">
    <ul class=\"posts\">
    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/blog"], "method"), "children", []), "order", [0 => "random"], "method"), "slice", [0 => 0, 1 => 1], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 52
                echo "    ";
                $context["bannerimage"] = twig_first($this->env, $this->getAttribute($this->getAttribute($context["p"], "media", []), "images", []));
                // line 53
                echo "    <li>
        <article>
           <header>
         <h3><a href=\"";
                // line 56
                echo $this->getAttribute($context["p"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["p"], "title", []);
                echo "</a></h3>
        <time class=\"published\" datetime=\"";
                // line 57
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "Y-m-d");
                echo "\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "M j, Y");
                echo "</time>
        </header>
        <a href=\"";
                // line 59
                echo $this->getAttribute($context["p"], "url", []);
                echo "\" class=\"image\">";
                echo $this->getAttribute($this->getAttribute(($context["bannerimage"] ?? null), "cropZoom", [0 => 64, 1 => 64], "method"), "quality", [0 => 60], "method");
                echo "</a>
       </article>
    </li>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "   </ul>
</section>
";
        }
        // line 66
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        // line 67
        echo "                            <section class=\"blurb\" role=\"complementary\">
                                <h2>About</h2>
                                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">Learn More</a></li>
                                </ul>
                            </section>

                        <!-- Footer -->
                            <section id=\"footer\" role=\"contentinfo\">
                                <ul class=\"icons\">
                                    <li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                                    <li><a href=\"#\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                                    <li><a href=\"#\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                                    ";
        // line 81
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 82
            echo "                                    <li><a href=\"";
            echo ($context["feed_url"] ?? null);
            echo ".rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
                                    ";
        }
        // line 84
        echo "                                    <li><a href=\"#\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
                                </ul>
                                <p class=\"copyright\">&copy; ";
        // line 86
        echo twig_date_format_filter($this->env, "now", "Y");
        echo " ";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
        echo ". Design: <a href=\"http://html5up.net\">HTML5 UP</a>. Images: <a href=\"http://unsplash.com\">Unsplash</a>.</p>
                            </section>

                    </section>
\t\t";
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
        return array (  235 => 86,  231 => 84,  225 => 82,  223 => 81,  207 => 67,  200 => 66,  195 => 63,  183 => 59,  176 => 57,  170 => 56,  165 => 53,  162 => 52,  158 => 51,  154 => 49,  152 => 48,  148 => 46,  146 => 45,  142 => 43,  140 => 42,  135 => 39,  123 => 35,  120 => 34,  108 => 32,  106 => 31,  100 => 30,  94 => 29,  88 => 25,  85 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  67 => 18,  64 => 17,  61 => 16,  57 => 15,  46 => 7,  37 => 5,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"sidebar\">

                        <!-- Intro -->
                            <section id=\"intro\" role=\"banner\">
                                <a href=\"{{ base_url_absolute }}\" class=\"logo\"><img src=\"{{ theme_url }}/images/logo.jpg\" alt=\"{{ site.title|upper }}\" /></a>
                                <header>
                                    <h2>{{ site.title|upper }}</h2>
                                    <p>Another fine responsive site template by <a href=\"http://html5up.net\">HTML5 UP</a></p>
                                </header>
                            </section>

                            <section role=\"complementary\">
                                <div class=\"mini-posts\">

                                {% for p in page.find('/blog').children.order('hits', 'desc').slice(0, 2) %}
                                {% set bannerimage = p.media.images|first %}
                                    {% if p.header.author %}
                                    {% set pauthor =  p.header.author %}
                                    {% else %}
                                    {% set pauthor =  p.header.taxonomy.author[0] %}
                                    {% endif %}
                                    {% if pauthor %}
                                    {% set pavatar = p.author|replace(' ', '-')|lower %}
                                    {% endif %}

                                    <!-- Mini Post -->
                                        <article class=\"mini-post\">
                                            <header>
                                                <h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
                                                <time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
                                                {% if pauthor %}
                                                <a href=\"{{ page.url }}\" class=\"author\"><img src=\"{{ theme_url }}/images/{{pavatar}}.jpg\" alt=\"{{ pauthor }}\" /></a>
                                                {% endif %}
                                            </header>
                                            <a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(350,175).quality(60) }}</a>                                       
                                    </article>

   {% endfor %}

</div>
</section>
{% if config.plugins.archives.enabled %}
        {% include 'partials/archives.html.twig' %}
{% endif %}
{% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}
    {% include 'partials/relatedpages.html.twig' %}
{% endif %}
{% if config.plugins.random.enabled %}
<section role=\"complementary\">
    <ul class=\"posts\">
    {% for p in page.find('/blog').children.order('random').slice(0, 1) %}
    {% set bannerimage = p.media.images|first %}
    <li>
        <article>
           <header>
         <h3><a href=\"{{p.url}}\">{{ p.title }}</a></h3>
        <time class=\"published\" datetime=\"{{p.date|date(\"Y-m-d\")}}\">{{ p.date|date(\"M j, Y\")}}</time>
        </header>
        <a href=\"{{p.url}}\" class=\"image\">{{ bannerimage.cropZoom(64,64).quality(60) }}</a>
       </article>
    </li>
   {% endfor %}
   </ul>
</section>
{% endif %}
        {% block footer %}
                            <section class=\"blurb\" role=\"complementary\">
                                <h2>About</h2>
                                <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
                                <ul class=\"actions\">
                                    <li><a href=\"#\" class=\"button\">Learn More</a></li>
                                </ul>
                            </section>

                        <!-- Footer -->
                            <section id=\"footer\" role=\"contentinfo\">
                                <ul class=\"icons\">
                                    <li><a href=\"#\" class=\"fa-twitter\"><span class=\"label\">Twitter</span></a></li>
                                    <li><a href=\"#\" class=\"fa-facebook\"><span class=\"label\">Facebook</span></a></li>
                                    <li><a href=\"#\" class=\"fa-instagram\"><span class=\"label\">Instagram</span></a></li>
                                    {% if config.plugins.feed.enabled %}
                                    <li><a href=\"{{ feed_url }}.rss\" class=\"fa-rss\"><span class=\"label\">RSS</span></a></li>
                                    {% endif %}
                                    <li><a href=\"#\" class=\"fa-envelope\"><span class=\"label\">Email</span></a></li>
                                </ul>
                                <p class=\"copyright\">&copy; {{ \"now\"|date(\"Y\") }} {{ site.author.name }}. Design: <a href=\"http://html5up.net\">HTML5 UP</a>. Images: <a href=\"http://unsplash.com\">Unsplash</a>.</p>
                            </section>

                    </section>
\t\t{% endblock %}", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\future\\templates\\partials\\sidebar.html.twig");
    }
}
