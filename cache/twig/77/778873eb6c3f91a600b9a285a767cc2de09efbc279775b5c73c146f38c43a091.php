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

/* partials/footer.html.twig */
class __TwigTemplate_3109cf92f9aa7a2cb7f580dfcb809d2d571b62310b31d7df4f20faa2df76770c extends \Twig\Template
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
        echo "<footer class=\"site-footer\">
    <div class=\"footer-content-container\">
        <div class=\"footer-content\">
            <p><i class=\"";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_icon", []);
        echo "\"></i>&nbsp;";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "footer_text", []);
        echo "</p>
        </div>
    </div>
</footer> ";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"site-footer\">
    <div class=\"footer-content-container\">
        <div class=\"footer-content\">
            <p><i class=\"{{config.theme.footer_icon}}\"></i>&nbsp;{{config.theme.footer_text}}</p>
        </div>
    </div>
</footer> ", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\rana\\templates\\partials\\footer.html.twig");
    }
}
