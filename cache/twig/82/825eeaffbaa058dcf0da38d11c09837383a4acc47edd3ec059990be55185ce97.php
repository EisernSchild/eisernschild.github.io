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
class __TwigTemplate_3d2c55d7adad7bf99d740080af21d19235419c3172d376441b3df64f52ca437a extends \Twig\Template
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
        echo "<div class=\"navbar-fixed\">
    <nav class=\"";
        // line 2
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "navcolor", []);
        echo " nav-shadow\" role=\"navigation\">
        <div class=\"nav-wrapper container\">
            <a id=\"logo-container\" href=\"";
        // line 4
        echo $this->getAttribute(($context["site"] ?? null), "url", []);
        echo "\" class=\"brand-logo\">";
        echo $this->getAttribute(($context["site"] ?? null), "title", []);
        echo "</a>

            <ul class=\"right hide-on-med-and-down\">
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 8
            echo "                    ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 9
                echo "                        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 12
                echo "                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                            <a href=\"";
                // line 13
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                        </li>
                    ";
            }
            // line 16
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>

            <ul class=\"side-nav\" id=\"slide-out\">
                <li>
                    <div class=\"userView ";
        // line 21
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "navimg", []), "enabled", [])) {
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "barcolor", []);
        }
        echo "\">
                      ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "navimg", []), "enabled", [])) {
            // line 23
            echo "                        <img class=\"background\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/nav_bg.jpg\">
                      ";
        }
        // line 25
        echo "                        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "sideinfo", []), "enabled", [])) {
            // line 26
            echo "                        <a href=\"#!user\"><img class=\"circle ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "acccolor", []);
            echo "\" src=\"";
            echo ($context["theme_url"] ?? null);
            echo "/images/user.jpg\"></a>
                        <a href=\"#!name\">
                            <span class=\"white-text name\">";
            // line 28
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "author", []), "name", []);
            echo "</span>
                        </a>
                        <a href=\"#!email\">
                            <span class=\"white-text email\">";
            // line 31
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "site", []), "author", []), "email", []);
            echo "</span>
                        </a>
                        ";
        } else {
            // line 34
            echo "                        &nbsp;
                        ";
        }
        // line 36
        echo "                    </div>
                </li>
                <li>
                    <a class=\"subheader\">Navigation</a>
                </li>
                <li>
                    <div class=\"divider\"></div>
                </li>
                ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 45
            echo "                    ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 46
                echo "                        ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 49
                echo "                        <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                            <a class=\"waves-effect\" href=\"";
                // line 50
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                        </li>
                    ";
            }
            // line 53
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            </ul>
            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\">
                <i class=\"material-icons\">menu</i>
            </a>
        </div>
    </nav>
</div>
";
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
        return array (  161 => 54,  155 => 53,  147 => 50,  142 => 49,  139 => 46,  136 => 45,  132 => 44,  122 => 36,  118 => 34,  112 => 31,  106 => 28,  98 => 26,  95 => 25,  89 => 23,  87 => 22,  81 => 21,  75 => 17,  69 => 16,  61 => 13,  56 => 12,  53 => 9,  50 => 8,  46 => 7,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-fixed\">
    <nav class=\"{{ config.themes.mdux.navcolor }} nav-shadow\" role=\"navigation\">
        <div class=\"nav-wrapper container\">
            <a id=\"logo-container\" href=\"{{ site.url }}\" class=\"brand-logo\">{{ site.title }}</a>

            <ul class=\"right hide-on-med-and-down\">
                {% for page in pages.children %}
                    {% if page.visible %}
                        {% set current_page = (page.active or page.activeChild)
                            ? 'active'
                            : '' %}
                        <li class=\"{{ current_page }}\">
                            <a href=\"{{ page.url }}\">{{ page.menu }}</a>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>

            <ul class=\"side-nav\" id=\"slide-out\">
                <li>
                    <div class=\"userView {% if not config.themes.mdux.navimg.enabled %}{{ config.themes.mdux.barcolor }}{% endif %}\">
                      {% if config.themes.mdux.navimg.enabled %}
                        <img class=\"background\" src=\"{{ theme_url }}/images/nav_bg.jpg\">
                      {% endif %}
                        {% if config.themes.mdux.sideinfo.enabled %}
                        <a href=\"#!user\"><img class=\"circle {{ config.themes.mdux.acccolor }}\" src=\"{{ theme_url }}/images/user.jpg\"></a>
                        <a href=\"#!name\">
                            <span class=\"white-text name\">{{config.site.author.name}}</span>
                        </a>
                        <a href=\"#!email\">
                            <span class=\"white-text email\">{{config.site.author.email}}</span>
                        </a>
                        {% else %}
                        &nbsp;
                        {% endif %}
                    </div>
                </li>
                <li>
                    <a class=\"subheader\">Navigation</a>
                </li>
                <li>
                    <div class=\"divider\"></div>
                </li>
                {% for page in pages.children %}
                    {% if page.visible %}
                        {% set current_page = (page.active or page.activeChild)
                            ? 'active'
                            : '' %}
                        <li class=\"{{ current_page }}\">
                            <a class=\"waves-effect\" href=\"{{ page.url }}\">{{ page.menu }}</a>
                        </li>
                    {% endif %}
                {% endfor %}
            </ul>
            <a href=\"#\" data-activates=\"slide-out\" class=\"button-collapse\">
                <i class=\"material-icons\">menu</i>
            </a>
        </div>
    </nav>
</div>
", "partials/nav.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\mdux\\templates\\partials\\nav.html.twig");
    }
}
