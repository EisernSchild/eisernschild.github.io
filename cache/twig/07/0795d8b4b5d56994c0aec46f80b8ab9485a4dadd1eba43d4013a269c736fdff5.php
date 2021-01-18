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
class __TwigTemplate_487eb8cd6b5173d5c3f312f6e99fff6f039ca96ec21563e2fefd68842def645a extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", [0 => ["items" => ["@taxonomy.category" => "sidebar"], "order" => ["by" => "default", "dir" => "asc"]]], "method"));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 2
            echo "    ";
            if ($this->getAttribute($context["module"], "template", [])) {
                // line 3
                echo "        ";
                $this->loadTemplate(($this->getAttribute($context["module"], "template", []) . ".html.twig"), "partials/sidebar.html.twig", 3)->display($context);
                // line 4
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "simplesearch", []), "enabled", [])) {
            // line 8
            echo "    <div class=\"widget HTML\">
        <h2 class=\"title\">SimpleSearch</h2>
        <div class=\"widget-content simplesearch\">
            ";
            // line 11
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 11)->display($context);
            // line 12
            echo "        </div>
    </div>
";
        }
        // line 15
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "random", []), "enabled", [])) {
            // line 16
            echo "    <div class=\"widget HTML\">
       <h2 class=\"title\">Random Article</h2>
       <div class=\"widget-content\">
           <a class=\"button\" href=\"";
            // line 19
            echo ($context["base_url_relative"] ?? null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
       </div>
   </div>
";
        }
        // line 23
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "archives", []), "enabled", [])) {
            // line 24
            echo "    <div class=\"widget HTML\">
        <h2 class=\"title\">Archives</h2>
        <div class=\"widget-content\">
            ";
            // line 27
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 27)->display($context);
            // line 28
            echo "        </div>
    </div>
";
        }
        // line 31
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "feed", []), "enabled", [])) {
            // line 32
            echo "    <div class=\"widget HTML syndicate\">
        <h2 class=\"title\">Syndicate</h2>
        <div class=\"widget-content\">
            <a class=\"button\" href=\"";
            // line 35
            echo ($context["feed_url"] ?? null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"button\" href=\"";
            // line 36
            echo ($context["feed_url"] ?? null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
";
        }
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
        return array (  124 => 36,  120 => 35,  115 => 32,  113 => 31,  108 => 28,  106 => 27,  101 => 24,  99 => 23,  92 => 19,  87 => 16,  85 => 15,  80 => 12,  78 => 11,  73 => 8,  71 => 7,  68 => 6,  53 => 4,  50 => 3,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for module in page.collection({'items':{'@taxonomy.category': 'sidebar'},'order': {'by': 'default', 'dir': 'asc'}}) %}
    {% if module.template %}
        {% include module.template ~ '.html.twig' %}
    {% endif %}
{% endfor %}

{% if config.plugins.simplesearch.enabled %}
    <div class=\"widget HTML\">
        <h2 class=\"title\">SimpleSearch</h2>
        <div class=\"widget-content simplesearch\">
            {% include 'partials/simplesearch_searchbox.html.twig' %}
        </div>
    </div>
{% endif %}
{% if config.plugins.random.enabled %}
    <div class=\"widget HTML\">
       <h2 class=\"title\">Random Article</h2>
       <div class=\"widget-content\">
           <a class=\"button\" href=\"{{ base_url_relative }}/random\"><i class=\"fa fa-retweet\"></i> I'm Feeling Lucky!</a>
       </div>
   </div>
{% endif %}
{% if config.plugins.archives.enabled %}
    <div class=\"widget HTML\">
        <h2 class=\"title\">Archives</h2>
        <div class=\"widget-content\">
            {% include 'partials/archives.html.twig' %}
        </div>
    </div>
{% endif %}
{% if config.plugins.feed.enabled %}
    <div class=\"widget HTML syndicate\">
        <h2 class=\"title\">Syndicate</h2>
        <div class=\"widget-content\">
            <a class=\"button\" href=\"{{ feed_url }}.atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
            <a class=\"button\" href=\"{{ feed_url }}.rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
        </div>
    </div>
{% endif %}
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\partials\\sidebar.html.twig");
    }
}
