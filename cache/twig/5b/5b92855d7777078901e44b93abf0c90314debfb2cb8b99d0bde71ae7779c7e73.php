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

/* partials/nav.html.twig */
class __TwigTemplate_86c8febd6e54e45d4700d7ce4f641ef467c94510b490dba2af39697106e7559e extends \Twig\Template
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
        $context["macros"] = $this->loadTemplate("macros/macros.html.twig", "partials/nav.html.twig", 1)->unwrap();
        // line 2
        echo "
<ul class=\"navigation\">
    ";
        // line 4
        echo $context["macros"]->getnav_loop($this->getAttribute(($context["pages"] ?? null), "children", []), false, false);
        echo "
    
    ";
        // line 6
        echo $context["macros"]->getlink_loop($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "show_external_links", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "external_links", []));
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "partials/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  36 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/macros.html.twig' as macros %}

<ul class=\"navigation\">
    {{ macros.nav_loop(pages.children, false, false) }}
    
    {{ macros.link_loop(config.theme.show_external_links, config.theme.external_links) }}
</ul>", "partials/nav.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\webfolio\\templates\\partials\\nav.html.twig");
    }
}
