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
class __TwigTemplate_4748c329d4b2bdbe31eb4fc8d856bfd9002d61666288db3c697ad06563059ec9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
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

    public function block_content($context, array $blocks = [])
    {
        // line 2
        echo "    <div class=\"toggle-button hamburger ";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "hamburger_animation", []);
        echo "\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"content\">
        <h1 class=\"page-title\">";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
        <hr class=\"header-hr\">
        ";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    </div>
";
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
        return array (  56 => 10,  51 => 8,  41 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %} {% block content %}
    <div class=\"toggle-button hamburger {{ config.theme.hamburger_animation }}\">
        <div class=\"hamburger-box\">
            <div class=\"hamburger-inner\"></div>
        </div>
    </div>
    <div class=\"content\">
        <h1 class=\"page-title\">{{page.title}}</h1>
        <hr class=\"header-hr\">
        {{ page.content }}
    </div>
{% endblock %} ", "default.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\vela\\templates\\default.html.twig");
    }
}
