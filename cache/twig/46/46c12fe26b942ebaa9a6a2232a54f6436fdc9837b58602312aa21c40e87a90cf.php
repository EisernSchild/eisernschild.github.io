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

/* default.html.twig */
class __TwigTemplate_02aab6938da2effce41e9b8a991b07bcdbce7cea1aa192e723b75bab5e478aaa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'masterslider' => [$this, 'block_masterslider'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayBlock('masterslider', $context, $blocks);
        // line 5
        echo "     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
     </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

     ";
        // line 8
        $this->loadTemplate("partials/blog_sidebar_header.html.twig", "default.html.twig", 8)->display($context);
        // line 9
        echo "     <div class=\"post-outer\">
      <div class=\"gdlr-item gdlr-blog-full \">
        <div class=\"gdlr-ux gdlr-blog-full-ux\">
            <div class=\"blog-content-inner-wrapper contact\">
               <h3 class=\"gdlr-blog-title\">";
        // line 13
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []);
        echo "</h3>

                ";
        // line 15
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
                <br />
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>

";
        // line 23
        $this->loadTemplate("partials/blog_sidebar_footer.html.twig", "default.html.twig", 23)->display($context);
    }

    // line 4
    public function block_masterslider($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 4,  75 => 23,  64 => 15,  59 => 13,  53 => 9,  51 => 8,  46 => 5,  43 => 4,  40 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {% block masterslider %}{% endblock %}
     <div class=\"above-sidebar-wrapper\"><section id=\"content-section-1\"><div class=\"gdlr-color-wrapper  gdlr-show-all no-skin\" style=\"padding-top: 0px; padding-bottom: 30px; \"><div class=\"container\"><div class=\"gdlr-master-slider-item gdlr-slider-item gdlr-item\">
     </div><div class=\"clear\"></div></div></div><div class=\"clear\"></div></section></div>

     {% include 'partials/blog_sidebar_header.html.twig' %}
     <div class=\"post-outer\">
      <div class=\"gdlr-item gdlr-blog-full \">
        <div class=\"gdlr-ux gdlr-blog-full-ux\">
            <div class=\"blog-content-inner-wrapper contact\">
               <h3 class=\"gdlr-blog-title\">{{ page.header.title }}</h3>

                {{ page.content|raw }}
                <br />
                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
</div>

{% include 'partials/blog_sidebar_footer.html.twig' %}
{% endblock %}
", "default.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\default.html.twig");
    }
}
