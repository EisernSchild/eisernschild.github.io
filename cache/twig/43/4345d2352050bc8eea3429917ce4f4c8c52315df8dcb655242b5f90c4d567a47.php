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

/* partials/logo.html.twig */
class __TwigTemplate_dd9814e39562076772e2b8fb7fb70c5d1c427bda13aad0fa73428181a80a40fd extends \Twig\Template
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
        $context["logo"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->themeVarFunc($context, ((($context["mobile"] ?? null)) ? ("custom_logo_mobile") : ("custom_logo")));
        // line 2
        echo "
";
        // line 3
        $context["logo_img"] = "";
        // line 4
        if (($context["logo"] ?? null)) {
            // line 5
            echo "  ";
            $context["logo_img"] = $this->getAttribute(($context["media"] ?? null), ("image://webfolio/" . $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", [])), [], "array");
            // line 6
            echo "
  ";
            // line 8
            echo "  ";
            if ( !($context["logo_img"] ?? null)) {
                // line 9
                echo "    ";
                $context["logo_img"] = $this->getAttribute(($context["media"] ?? null), ("theme://images/" . $this->getAttribute(twig_first($this->env, ($context["logo"] ?? null)), "name", [])), [], "array");
                // line 10
                echo "  ";
            }
        } else {
            // line 12
            echo "  ";
            $context["logo_img"] = $this->getAttribute(($context["media"] ?? null), "theme://images/grav-logo.svg", [], "array");
        }
        // line 14
        echo "
<a href=\"";
        // line 15
        echo ($context["home_url"] ?? null);
        echo "\">
  ";
        // line 16
        echo $this->getAttribute(($context["logo_img"] ?? null), "html", [0 => "", 1 => $this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "title", []), 2 => "logo__img"], "method");
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  62 => 15,  59 => 14,  55 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 6,  39 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set logo = theme_var(mobile ? 'custom_logo_mobile' : 'custom_logo') %}

{% set logo_img = \"\" %}
{% if logo %}
  {% set logo_img = media['image://webfolio/' ~ (logo|first).name] %}

  {# check theme images dir for backwards compatibility with v1.0.0 #}
  {% if not logo_img %}
    {% set logo_img = media['theme://images/' ~ (logo|first).name] %}
  {% endif %}
{% else %}
  {% set logo_img = media['theme://images/grav-logo.svg'] %}
{% endif %}

<a href=\"{{ home_url }}\">
  {{ logo_img.html('', config.site.title, 'logo__img')|raw }}
</a>
", "partials/logo.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\webfolio\\templates\\partials\\logo.html.twig");
    }
}
