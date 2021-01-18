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

/* partials/breadcrumbs-navbar-container.html.twig */
class __TwigTemplate_6a90b2596870e180f03dbb1c3c740deecdfc5732146603d8b329848888750f1d extends \Twig\Template
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
        $this->loadTemplate("partials/breadcrumbs-navbar.html.twig", "partials/breadcrumbs-navbar-container.html.twig", 1)->display(twig_array_merge($context, ["class" => "breadcrumb-ul-dt tablet-noshow"]));
        // line 2
        $this->loadTemplate("partials/breadcrumbs-navbar.html.twig", "partials/breadcrumbs-navbar-container.html.twig", 2)->display(twig_array_merge($context, ["class" => "breadcrumb-ul-mob desktop-noshow"]));
    }

    public function getTemplateName()
    {
        return "partials/breadcrumbs-navbar-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% include 'partials/breadcrumbs-navbar.html.twig' with {class: 'breadcrumb-ul-dt tablet-noshow'} %}
{% include 'partials/breadcrumbs-navbar.html.twig' with {class: 'breadcrumb-ul-mob desktop-noshow'} %}", "partials/breadcrumbs-navbar-container.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\partials\\breadcrumbs-navbar-container.html.twig");
    }
}
