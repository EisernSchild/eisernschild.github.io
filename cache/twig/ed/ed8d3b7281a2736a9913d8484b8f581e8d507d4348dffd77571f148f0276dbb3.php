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
class __TwigTemplate_9b713b0fce717072af9029e3798076179ee983151436e85a3d1edcf690bf161b extends \Twig\Template
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
        echo "<ul class=\"nav navbar-nav navbar-right \">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", []), "visible", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "        ";
            $context["active_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
            // line 4
            echo "        <li>
            <a href=\"";
            // line 5
            echo $this->getAttribute($context["page"], "url", []);
            echo "\" class=\"";
            echo ($context["active_page"] ?? null);
            echo "\">
                ";
            // line 6
            echo $this->getAttribute($context["page"], "menu", []);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
        // line 11
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "auth_link", []), "enabled", []) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []))) {
            // line 12
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "authenticated", [])) {
                // line 13
                echo "            <li>
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((twig_trim_filter($this->getAttribute(($context["uri"] ?? null), "path", []), "/") . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"], "method")));
                echo "\">
                    ";
                // line 15
                echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "fullname", [])) : ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", [])));
                echo ", Logout
                </a>
            </li>        
        ";
            } else {
                // line 19
                echo "            ";
                $context["active_page"] = ((($this->getAttribute(($context["page"] ?? null), "slug", []) == (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", [], "any", false, true), "auth_link", [], "any", false, true), "login_slug", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", [], "any", false, true), "auth_link", [], "any", false, true), "login_slug", []), "login")) : ("login")))) ? ("active") : (""));
                // line 20
                echo "            <li>
                <a href=\"/";
                // line 21
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", []), "auth_link", []), "login_slug", []);
                echo "\" class=\"";
                echo ($context["active_page"] ?? null);
                echo "\">
                    ";
                // line 22
                echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", [], "any", false, true), "auth_link", [], "any", false, true), "login_label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "navbar", [], "any", false, true), "auth_link", [], "any", false, true), "login_label", []), "Login")) : ("Login"));
                echo "
                </a>
            </li>
        ";
            }
            // line 26
            echo "    ";
        }
        // line 27
        echo "</ul>

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
        return array (  103 => 27,  100 => 26,  93 => 22,  87 => 21,  84 => 20,  81 => 19,  74 => 15,  70 => 14,  67 => 13,  64 => 12,  62 => 11,  59 => 10,  49 => 6,  43 => 5,  40 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"nav navbar-nav navbar-right \">
    {% for page in pages.children.visible %}
        {% set active_page = (page.active or page.activeChild) ? 'active' : '' %}
        <li>
            <a href=\"{{ page.url }}\" class=\"{{ active_page }}\">
                {{ page.menu }}
            </a>
        </li>
    {% endfor %}

    {% if theme_config.navbar.auth_link.enabled and config.plugins.login.enabled %}
        {% if grav.user.authenticated %}
            <li>
                <a href=\"{{ url(uri.addNonce((uri.path)|trim('/') ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce'))|e }}\">
                    {{ grav.user.fullname ?: grav.user.username }}, Logout
                </a>
            </li>        
        {% else %}
            {% set active_page = (page.slug == (theme_config.navbar.auth_link.login_slug | default('login'))) ? 'active' : '' %}
            <li>
                <a href=\"/{{ theme_config.navbar.auth_link.login_slug }}\" class=\"{{ active_page }}\">
                    {{ theme_config.navbar.auth_link.login_label | default('Login') }}
                </a>
            </li>
        {% endif %}
    {% endif %}
</ul>

", "partials/navigation.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\grav-coder\\templates\\partials\\navigation.html.twig");
    }
}
