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
class __TwigTemplate_fca803d07f8b3435ba88d070c4c57badf354347bf3044e28ee22a2882d2e410b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<footer class=\"footer ";
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "footcolor", []);
        echo "\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12 ";
        // line 4
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "footcolortext", []);
        echo "\">

                ";
        // line 6
        $this->displayBlock('footer', $context, $blocks);
        // line 12
        echo "
            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"";
        // line 15
        echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "footcolortext", []);
        echo "\">Navigation</h5>
                <ul>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", []));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 18
            echo "                        ";
            if ($this->getAttribute($context["page"], "visible", [])) {
                // line 19
                echo "                            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", []) || $this->getAttribute($context["page"], "activeChild", []))) ? ("active") : (""));
                // line 22
                echo "                            <li class=\"white-text\">
                                <a href=\"";
                // line 23
                echo $this->getAttribute($context["page"], "url", []);
                echo "\">";
                echo $this->getAttribute($context["page"], "menu", []);
                echo "</a>
                            </li>
                        ";
            }
            // line 26
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </ul>
            </div>
                ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "social", []), "enabled", [])) {
            // line 30
            echo "            <div class=\"col l3 s12\">
                <h5 class=\"";
            // line 31
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", []), "mdux", []), "footcolortext", []);
            echo "\">Connect</h5>
                <ul>
                    <li>
                        <a class=\"waves-effect waves-light btn red darken-1\">
                            <i class=\"material-icons left\">cloud</i>G</a>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-light btn yellow darken-1\">
                            <i class=\"material-icons left\">email</i>L</a>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-light btn green darken-1\">
                            <i class=\"material-icons left\">textsms</i>E</a>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-light btn blue darken-1\">
                            <i class=\"material-icons left\">stars</i>F</a>
                    </li>
                </ul>
            </div>
              ";
        }
        // line 52
        echo "        </div>
    </div>
    <div class=\"footer-copyright grey darken-3 white-text\">
        <div class=\"container\">
            © 2016 TYLER WOODS
            <a class=\"white-text right\" href=\"#!\">
                <i class=\"fa fa-heart\"></i>
            </a>
        </div>
    </div>
</footer>
";
        // line 63
        $this->displayBlock('bottom', $context, $blocks);
        // line 64
        echo "<!--  Scripts-->
<script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script src=\"";
        // line 66
        echo ($context["theme_url"] ?? null);
        echo "/js/materialize.js\"></script>
<script src=\"";
        // line 67
        echo ($context["theme_url"] ?? null);
        echo "/js/init.js\"></script>
";
    }

    // line 6
    public function block_footer($context, array $blocks = [])
    {
        // line 7
        echo "                    ";
        $context["content"] = $this->getAttribute($this->getAttribute(($context["pages"] ?? null), "find", [0 => "/footer"], "method"), "content", []);
        // line 8
        echo "                    ";
        if (($context["content"] ?? null)) {
            // line 9
            echo "                        ";
            echo ($context["content"] ?? null);
            echo "
                    ";
        }
        // line 11
        echo "                ";
    }

    // line 63
    public function block_bottom($context, array $blocks = [])
    {
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
        return array (  164 => 63,  160 => 11,  154 => 9,  151 => 8,  148 => 7,  145 => 6,  139 => 67,  135 => 66,  131 => 64,  129 => 63,  116 => 52,  92 => 31,  89 => 30,  87 => 29,  83 => 27,  77 => 26,  69 => 23,  66 => 22,  63 => 19,  60 => 18,  56 => 17,  51 => 15,  46 => 12,  44 => 6,  39 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer {{ config.themes.mdux.footcolor }}\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col l6 s12 {{ config.themes.mdux.footcolortext }}\">

                {% block footer %}
                    {% set content = pages.find('/footer').content %}
                    {% if content %}
                        {{ content }}
                    {% endif %}
                {% endblock %}

            </div>
            <div class=\"col l3 s12\">
                <h5 class=\"{{ config.themes.mdux.footcolortext }}\">Navigation</h5>
                <ul>
                    {% for page in pages.children %}
                        {% if page.visible %}
                            {% set current_page = (page.active or page.activeChild)
                                ? 'active'
                                : '' %}
                            <li class=\"white-text\">
                                <a href=\"{{ page.url }}\">{{ page.menu }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
                {% if config.themes.mdux.social.enabled %}
            <div class=\"col l3 s12\">
                <h5 class=\"{{ config.themes.mdux.footcolortext }}\">Connect</h5>
                <ul>
                    <li>
                        <a class=\"waves-effect waves-light btn red darken-1\">
                            <i class=\"material-icons left\">cloud</i>G</a>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-light btn yellow darken-1\">
                            <i class=\"material-icons left\">email</i>L</a>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-light btn green darken-1\">
                            <i class=\"material-icons left\">textsms</i>E</a>
                    </li>
                    <li>
                        <a class=\"waves-effect waves-light btn blue darken-1\">
                            <i class=\"material-icons left\">stars</i>F</a>
                    </li>
                </ul>
            </div>
              {% endif %}
        </div>
    </div>
    <div class=\"footer-copyright grey darken-3 white-text\">
        <div class=\"container\">
            © 2016 TYLER WOODS
            <a class=\"white-text right\" href=\"#!\">
                <i class=\"fa fa-heart\"></i>
            </a>
        </div>
    </div>
</footer>
{% block bottom %}{% endblock %}
<!--  Scripts-->
<script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
<script src=\"{{ theme_url }}/js/materialize.js\"></script>
<script src=\"{{ theme_url }}/js/init.js\"></script>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\mdux\\templates\\partials\\footer.html.twig");
    }
}
