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

/* macros/macros.html.twig */
class __TwigTemplate_ececd9826c361baf4d44abffc611043ddf04ee43aaa5f4a645f2096fe9ba235c extends \Twig\Template
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
        // line 2
        echo "
";
        // line 42
        echo "
";
        // line 48
        echo "
";
    }

    // line 1
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), [" " => "_"]);
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 3
    public function getnav_loop($__pages__ = null, $__modular__ = null, $__nested__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "pages" => $__pages__,
            "modular" => $__modular__,
            "nested" => $__nested__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 4
            echo "  ";
            $context["macros"] = $this;
            // line 5
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 6
                echo "    ";
                if (($this->getAttribute($context["p"], "visible", []) || ($this->getAttribute($context["p"], "modular", []) &&  !($this->getAttribute($this->getAttribute($context["p"], "header", []), "visible", []) === false)))) {
                    // line 7
                    echo "      ";
                    $context["active_page"] = ((($this->getAttribute($context["p"], "active", []) || $this->getAttribute($context["p"], "activeChild", []))) ? ("active") : (""));
                    // line 8
                    echo "      <li>
        ";
                    // line 9
                    $context["href"] = "";
                    // line 10
                    echo "        ";
                    $context["internal"] = "";
                    // line 11
                    echo "        ";
                    if (($context["modular"] ?? null)) {
                        // line 12
                        echo "          ";
                        $context["internal"] = (($this->getAttribute($this->getAttribute($context["p"], "parent", []), "active", [])) ? ("internal") : (""));
                        // line 13
                        echo "          ";
                        $context["href"] = (($this->getAttribute($this->getAttribute($context["p"], "parent", []), "url", []) . "#") . $context["macros"]->getpageLinkName($this->getAttribute($context["p"], "menu", [])));
                        // line 14
                        echo "        ";
                    } else {
                        // line 15
                        echo "          ";
                        $context["href"] = $this->getAttribute($context["p"], "url", []);
                        // line 16
                        echo "        ";
                    }
                    // line 17
                    echo "        <a class=\"";
                    echo ($context["active_page"] ?? null);
                    echo " ";
                    echo ($context["internal"] ?? null);
                    echo "\" href=\"";
                    echo ($context["href"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["p"], "menu", []);
                    echo "</a>

        ";
                    // line 19
                    $context["show_modules"] = ($this->getAttribute($this->getAttribute($context["p"], "header", []), "modules_in_menu", []) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "collection", []), "modular", []), "count", []) > 0));
                    // line 20
                    echo "        ";
                    $context["show_children"] = ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), "count", []) > 0);
                    // line 21
                    echo "
        ";
                    // line 22
                    if (( !($context["nested"] ?? null) && (($context["show_modules"] ?? null) || ($context["show_children"] ?? null)))) {
                        // line 23
                        echo "          <button class=\"nav__dropdown\">
            <i class=\"nav__dropdown__icon fas fa-chevron-down\"></i>
          </button>
        ";
                    }
                    // line 27
                    echo "
        ";
                    // line 28
                    if (($context["show_modules"] ?? null)) {
                        // line 29
                        echo "          <ul>
          ";
                        // line 30
                        echo $context["macros"]->getnav_loop($this->getAttribute($this->getAttribute($context["p"], "collection", []), "modular", []), true, true);
                        echo "
          </ul>
        ";
                    }
                    // line 33
                    echo "        ";
                    if (($context["show_children"] ?? null)) {
                        // line 34
                        echo "          <ul>
          ";
                        // line 35
                        echo $context["macros"]->getnav_loop($this->getAttribute($this->getAttribute($context["p"], "children", []), "visible", []), false, true);
                        echo "
          </ul>
        ";
                    }
                    // line 38
                    echo "      </li>
    ";
                }
                // line 40
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 43
    public function geticon_link($__url__ = null, $__icon_classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "url" => $__url__,
            "icon_classes" => $__icon_classes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 44
            echo "  <a href=\"";
            echo ($context["url"] ?? null);
            echo "\" target=\"_blank\">
      <i class=\"";
            // line 45
            echo ($context["icon_classes"] ?? null);
            echo "\"></i>
  </a>
";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getlink_loop($__show_links__ = null, $__links__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "show_links" => $__show_links__,
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 50
            echo "  ";
            if (($context["show_links"] ?? null)) {
                // line 51
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                    // line 52
                    echo "      <li>        
        <a href=\"";
                    // line 53
                    echo $this->getAttribute($context["l"], "link", []);
                    echo "\">";
                    echo $this->getAttribute($context["l"], "text", []);
                    echo "</a>
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "  ";
            }
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 56,  258 => 53,  255 => 52,  250 => 51,  247 => 50,  234 => 49,  216 => 45,  211 => 44,  198 => 43,  179 => 40,  175 => 38,  169 => 35,  166 => 34,  163 => 33,  157 => 30,  154 => 29,  152 => 28,  149 => 27,  143 => 23,  141 => 22,  138 => 21,  135 => 20,  133 => 19,  121 => 17,  118 => 16,  115 => 15,  112 => 14,  109 => 13,  106 => 12,  103 => 11,  100 => 10,  98 => 9,  95 => 8,  92 => 7,  89 => 6,  84 => 5,  81 => 4,  67 => 3,  41 => 1,  36 => 48,  33 => 42,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% macro nav_loop(pages, modular, nested) %}
  {% import _self as macros %}
  {% for p in pages %}
    {% if p.visible or (p.modular and p.header.visible is not same as (false)) %}
      {% set active_page = (p.active or p.activeChild) ? 'active' : '' %}
      <li>
        {% set href = '' %}
        {% set internal = '' %}
        {% if modular %}
          {% set internal = p.parent.active ? 'internal' : '' %}
          {% set href = p.parent.url ~ '#' ~ macros.pageLinkName(p.menu) %}
        {% else %}
          {% set href = p.url %}
        {% endif %}
        <a class=\"{{ active_page }} {{ internal }}\" href=\"{{ href }}\">{{ p.menu }}</a>

        {% set show_modules = p.header.modules_in_menu and p.collection.modular.count > 0 %}
        {% set show_children = p.children.visible.count > 0 %}

        {% if not nested and (show_modules or show_children) %}
          <button class=\"nav__dropdown\">
            <i class=\"nav__dropdown__icon fas fa-chevron-down\"></i>
          </button>
        {% endif %}

        {% if show_modules %}
          <ul>
          {{ macros.nav_loop(p.collection.modular, true, true) }}
          </ul>
        {% endif %}
        {% if show_children %}
          <ul>
          {{ macros.nav_loop(p.children.visible, false, true) }}
          </ul>
        {% endif %}
      </li>
    {% endif %}
  {% endfor %}
{% endmacro %}

{% macro icon_link(url, icon_classes) %}
  <a href=\"{{ url }}\" target=\"_blank\">
      <i class=\"{{ icon_classes }}\"></i>
  </a>
{% endmacro %}

{% macro link_loop(show_links, links) %}
  {% if show_links %}
    {% for l in links %}
      <li>        
        <a href=\"{{ l.link }}\">{{ l.text }}</a>
      </li>
    {% endfor %}
  {% endif %}
{% endmacro %}
", "macros/macros.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\webfolio\\templates\\macros\\macros.html.twig");
    }
}
