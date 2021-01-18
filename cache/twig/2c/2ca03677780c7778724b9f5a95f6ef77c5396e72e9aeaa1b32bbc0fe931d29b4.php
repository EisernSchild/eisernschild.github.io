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

/* partials/navigation.html.twig */
class __TwigTemplate_e838ef1659e57d7f5153743a25734aae58290ec3370d1f5720b367ee6f061f5b extends \Twig\Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 10
        echo (((($context["base_url"] ?? null) == "")) ? ("/") : (($context["base_url"] ?? null)));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "                    ";
            $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 16
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "bootstrap", []), "dropdown", []), "enabled", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []), "count", []) > 0))) {
                // line 17
                echo "                        <li class=\"dropdown ";
                echo ($context["current_page"] ?? null);
                echo "\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
                // line 18
                echo $this->getAttribute($context["page"], "menu", []);
                echo " <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                ";
                // line 20
                $context["current_parent"] = (($this->getAttribute($context["page"], "active", [])) ? ("active") : (""));
                // line 21
                echo "                                <li class=\"";
                echo ($context["current_parent"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                                <li class=\"divider\"></li>
                                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["page"], "children", []), "visible", []));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 24
                    echo "                                    ";
                    $context["current_child"] = ((($this->getAttribute($context["child"], "active", []) || $this->getAttribute($context["child"], "activeChild", []))) ? ("active") : (""));
                    // line 25
                    echo "                                    <li class=\"";
                    echo ($context["current_child"] ?? null);
                    echo "\"><a href=\"";
                    echo $this->getAttribute($context["child"], "url", []);
                    echo "\">";
                    echo $this->getAttribute($context["child"], "menu", []);
                    echo "</a></li>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "                            </ul>
                        </li>
                    ";
            } else {
                // line 30
                echo "                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\"><a href=\"";
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a></li>
                    ";
            }
            // line 32
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", []));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 34
            echo "                    <li>
                        <a href=\"";
            // line 35
            echo $this->getAttribute($context["mitem"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", []);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
                ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 40
            echo "                    <li><i class=\"fa fa-lock\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/navigation.html.twig", 40)->display($context);
            echo "</li>
                ";
        }
        // line 42
        echo "            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 42,  147 => 40,  145 => 39,  142 => 38,  131 => 35,  128 => 34,  123 => 33,  117 => 32,  107 => 30,  102 => 27,  89 => 25,  86 => 24,  82 => 23,  72 => 21,  70 => 20,  65 => 18,  60 => 17,  57 => 16,  54 => 15,  50 => 14,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ base_url == '' ? '/' : base_url }}\">{{ site.title|e('html') }}</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                {% for page in pages.children.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
                    {% if config.themes.bootstrap.dropdown.enabled and page.children.visible.count > 0 %}
                        <li class=\"dropdown {{ current_page }}\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">{{ page.menu }} <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                {% set current_parent = page.active ? 'active' : '' %}
                                <li class=\"{{ current_parent }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                                <li class=\"divider\"></li>
                                {% for child in page.children.visible %}
                                    {% set current_child = (child.active or child.activeChild) ? 'active' : '' %}
                                    <li class=\"{{ current_child }}\"><a href=\"{{ child.url }}\">{{ child.menu }}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                    {% else %}
                        <li class=\"{{ current_page }}\"><a href=\"{{ page.url }}\">{{ page.menu }}</a></li>
                    {% endif %}
                {% endfor %}
                {% for mitem in site.menu %}
                    <li>
                        <a href=\"{{ mitem.url }}\">{{ mitem.text }}</a>
                    </li>
                {% endfor %}

                {% if config.plugins.login.enabled and grav.user.username %}
                    <li><i class=\"fa fa-lock\"></i> {% include 'partials/login-status.html.twig' %}</li>
                {% endif %}
            </ul>
        </div>
    </div>
</nav>
", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\bootstrap\\templates\\partials\\navigation.html.twig");
    }
}
