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

/* partials/blog_sidebar_header.html.twig */
class __TwigTemplate_76dc0450da6a97bde64bd36a2d0a9dd4cb34f531a605c0901572c8292baf56df extends \Twig\Template
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
        echo "<div class=\"with-sidebar-wrapper gdlr-right-sidebar\">
    <div class=\"with-sidebar-container container\">
        <div class=\"with-sidebar-left eight columns\">
            <div class=\"with-sidebar-content twelve columns\">
                <div id=\"content-section-2\">
                    <div class=\"section-container container\"><div class=\"blog-item-wrapper gdlr-blog-full-type\">
                        <div class=\"blog-item-holder\">
                            <div class=\"main section\" id=\"main\">
                                <div class=\"widget Blog\" id=\"Blog1\">
                                <div class=\"blog-posts hfeed\">
                                    <div class=\"date-outer\">
                                        <div class=\"date-posts\">";
    }

    public function getTemplateName()
    {
        return "partials/blog_sidebar_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"with-sidebar-wrapper gdlr-right-sidebar\">
    <div class=\"with-sidebar-container container\">
        <div class=\"with-sidebar-left eight columns\">
            <div class=\"with-sidebar-content twelve columns\">
                <div id=\"content-section-2\">
                    <div class=\"section-container container\"><div class=\"blog-item-wrapper gdlr-blog-full-type\">
                        <div class=\"blog-item-holder\">
                            <div class=\"main section\" id=\"main\">
                                <div class=\"widget Blog\" id=\"Blog1\">
                                <div class=\"blog-posts hfeed\">
                                    <div class=\"date-outer\">
                                        <div class=\"date-posts\">", "partials/blog_sidebar_header.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\partials\\blog_sidebar_header.html.twig");
    }
}
