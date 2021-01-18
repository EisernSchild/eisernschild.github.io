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

/* partials/settings.css.html.twig */
class __TwigTemplate_60bc56c92b98076ba0ed9475bda4cffc89b61fad0ab84a0d0fbe4ee923a8cff3 extends \Twig\Template
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
        echo "<style>
    ";
        // line 2
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "markdown-notices", [], "array"), "built_in_css", [])) {
            // line 3
            echo "        .notices.yellow p::after {
        content: \"";
            // line 4
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "notice", []), "yellow", []);
            echo "\";
        } 
        .notices.red p::after {
        content: \"";
            // line 7
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "notice", []), "red", []);
            echo "\";
        }
        .notices.blue p::after {
        content: \"";
            // line 10
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "notice", []), "blue", []);
            echo "\";
        }
        .notices.green p::after {
        content: \"";
            // line 13
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "notice", []), "green", []);
            echo "\";
        } 
    ";
        }
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "desktop_mode", [])) {
            // line 17
            echo "        @media screen and (min-width: ";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "theme", []), "desktop_min_width", []);
            echo "px) {
            .slideout-panel {
            margin-left: 320px;
            }

            .slideout-menu {
            display: block;
            }

            .toggle-button {
            visibility: hidden;
            }
            .page-title{ 
                margin-top: 35px;
            }
        }
    ";
        }
        // line 34
        echo "</style>";
    }

    public function getTemplateName()
    {
        return "partials/settings.css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 34,  65 => 17,  62 => 16,  56 => 13,  50 => 10,  44 => 7,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
    {% if not config.plugins['markdown-notices'].built_in_css %}
        .notices.yellow p::after {
        content: \"{{config.theme.notice.yellow}}\";
        } 
        .notices.red p::after {
        content: \"{{config.theme.notice.red}}\";
        }
        .notices.blue p::after {
        content: \"{{config.theme.notice.blue}}\";
        }
        .notices.green p::after {
        content: \"{{config.theme.notice.green}}\";
        } 
    {% endif %}
    {% if config.theme.desktop_mode %}
        @media screen and (min-width: {{config.theme.desktop_min_width}}px) {
            .slideout-panel {
            margin-left: 320px;
            }

            .slideout-menu {
            display: block;
            }

            .toggle-button {
            visibility: hidden;
            }
            .page-title{ 
                margin-top: 35px;
            }
        }
    {% endif %}
</style>", "partials/settings.css.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\vela\\templates\\partials\\settings.css.html.twig");
    }
}
