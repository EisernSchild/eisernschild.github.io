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
class __TwigTemplate_06b5bd39d9da1d1d16396b5803db0bc53003c29e07b4c2c9cdd3830d8a4258e0 extends \Twig\Template
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
        $context["footer"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "pluspunkt", []), "footer", []);
        // line 2
        echo "
<div class=\"container\">
  <div class=\"row gutters align-center\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "pluspunkt", []), "footer", []), "widgets", []));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 6
            echo "      <div class=\"widget col col-3\">
        <p class=\"title small\">";
            // line 7
            echo $this->getAttribute($context["widget"], "title", []);
            echo "</p>

        ";
            // line 9
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["widget"], "content", []));
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </div>

  <div>
    <p class=\"text-center small\">
      <span class=\"small\"><i class=\"far fa-copyright\" aria-hidden=\"true\"></i> ";
        // line 16
        echo twig_date_format_filter($this->env, "now", "Y");
        echo "</span>
      <br>
      <span>Made with </span>
      <i class=\"fas fa-heart\" aria-hidden=\"true\"></i>
      <span>+</span>
      <a href=\"https://getgrav.org/\" target=\"_blank\"><i class=\"fab fa-grav\" aria-hidden=\"true\"></i></a>
      <span>+</span>
      <a href=\"https://imperavi.com/kube\" target=\"_blank\">Kube</a>
      <span>by ";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "author", []), "name", []);
        echo "</span>
    </p>
  </div>
</div>
";
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
        return array (  75 => 24,  64 => 16,  58 => 12,  49 => 9,  44 => 7,  41 => 6,  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set footer = config.themes.pluspunkt.footer %}

<div class=\"container\">
  <div class=\"row gutters align-center\">
    {% for widget in config.themes.pluspunkt.footer.widgets %}
      <div class=\"widget col col-3\">
        <p class=\"title small\">{{ widget.title }}</p>

        {{ widget.content|markdown }}
      </div>
    {% endfor %}
  </div>

  <div>
    <p class=\"text-center small\">
      <span class=\"small\"><i class=\"far fa-copyright\" aria-hidden=\"true\"></i> {{ 'now'|date('Y') }}</span>
      <br>
      <span>Made with </span>
      <i class=\"fas fa-heart\" aria-hidden=\"true\"></i>
      <span>+</span>
      <a href=\"https://getgrav.org/\" target=\"_blank\"><i class=\"fab fa-grav\" aria-hidden=\"true\"></i></a>
      <span>+</span>
      <a href=\"https://imperavi.com/kube\" target=\"_blank\">Kube</a>
      <span>by {{ site.author.name }}</span>
    </p>
  </div>
</div>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\pluspunkt\\templates\\partials\\footer.html.twig");
    }
}
