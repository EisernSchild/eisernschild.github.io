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
class __TwigTemplate_2a58cc4a956392f26f7254bc1c71420fa3b8c9c806bbdd348ebc67f83a7fedeb extends \Twig\Template
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
        echo "<footer class=\"footer-wrapper\">
    <div class=\"footer-container container\">
        <div class=\"footer-column four columns section\" id=\"footer-widget-1\">
            <div class=\"widget FollowByEmail\" id=\"FollowByEmail1\">
                <h2 class=\"title\">";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", []), "title", []);
        echo "</h2>
                <div class=\"content\">
                    ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", []), "text", []);
        echo "
                    <div class=\"follow-by-email-inner\">
                        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" onsubmit=\"window.open(&quot;https://feedburner.google.com/fb/a/mailverify?uri=";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", []), "id", []);
        echo "&quot;, &quot;popupwindow&quot;, &quot;scrollbars=yes,width=550,height=520&quot;); return true\" target=\"popupwindow\">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class=\"follow-by-email-address\" name=\"email\" placeholder=\"Email address...\" type=\"text\">
                                        </td>
                                        <td>
                                            <input class=\"follow-by-email-submit\" type=\"submit\" value=\"Submit\">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input name=\"uri\" type=\"hidden\" value=\"";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "feedburner", []), "id", []);
        echo "\">
                            <input name=\"loc\" type=\"hidden\" value=\"en_US\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-2\">
            <div class=\"widget Label\" id=\"Label2\">
                <h2>";
        // line 31
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "labels", []), "title", []);
        echo "</h2>
                <div class=\"widget-content list-label-widget-content\">
                    <ul>
                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["site"] ?? null), "labels", []), "items", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                            <li>
                                <a dir=\"ltr\" href=\"";
            // line 36
            echo $this->getAttribute($context["item"], "url", []);
            echo "\">";
            echo $this->getAttribute($context["item"], "label", []);
            echo "</a>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-3\">
            <div class=\"widget HTML\" id=\"HTML4\">
                <h2 class=\"title\">";
        // line 46
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "title", []);
        echo "</h2>
                <div class=\"widget-content\">
                    ";
        // line 48
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "content", []);
        echo "
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"copyright-wrapper\">
        <div class=\"copyright-container container\">
            <div class=\"copyright-left\">
                ";
        // line 58
        if ($this->getAttribute(($context["site"] ?? null), "copyright", [])) {
            // line 59
            echo "                    ";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "text1", []);
            echo " © ";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "year", []);
            echo " <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", []), "text2", []);
            echo "</a>
                ";
        }
        // line 61
        echo "                ";
        if ($this->getAttribute(($context["site"] ?? null), "copyright2", [])) {
            // line 62
            echo "                    ";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright2", []), "text1", []);
            echo " <a href=\"";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright2", []), "url", []);
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright2", []), "text2", []);
            echo "</a>
                ";
        }
        // line 64
        echo "            </div>
            <div class=\"copyright-right\">
                <span id=\"mycontent\">
                    Designed By <a href=\"http://www.soratemplates.com/\" target=\"_blank\" title=\"Blogger Templates\">Sora Templates</a> and <a href=\"http://mybloggerthemes.com/\" target=\"_blank\" title=\"Free Blogger Templates\">My Blogger Themes</a>
                </span>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</footer>
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
        return array (  152 => 64,  142 => 62,  139 => 61,  127 => 59,  125 => 58,  112 => 48,  107 => 46,  98 => 39,  87 => 36,  84 => 35,  80 => 34,  74 => 31,  62 => 22,  46 => 9,  41 => 7,  36 => 5,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-wrapper\">
    <div class=\"footer-container container\">
        <div class=\"footer-column four columns section\" id=\"footer-widget-1\">
            <div class=\"widget FollowByEmail\" id=\"FollowByEmail1\">
                <h2 class=\"title\">{{ site.feedburner.title }}</h2>
                <div class=\"content\">
                    {{ site.feedburner.text }}
                    <div class=\"follow-by-email-inner\">
                        <form action=\"https://feedburner.google.com/fb/a/mailverify\" method=\"post\" onsubmit=\"window.open(&quot;https://feedburner.google.com/fb/a/mailverify?uri={{ site.feedburner.id }}&quot;, &quot;popupwindow&quot;, &quot;scrollbars=yes,width=550,height=520&quot;); return true\" target=\"popupwindow\">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>
                                            <input class=\"follow-by-email-address\" name=\"email\" placeholder=\"Email address...\" type=\"text\">
                                        </td>
                                        <td>
                                            <input class=\"follow-by-email-submit\" type=\"submit\" value=\"Submit\">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input name=\"uri\" type=\"hidden\" value=\"{{ site.feedburner.id }}\">
                            <input name=\"loc\" type=\"hidden\" value=\"en_US\">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-2\">
            <div class=\"widget Label\" id=\"Label2\">
                <h2>{{ site.labels.title }}</h2>
                <div class=\"widget-content list-label-widget-content\">
                    <ul>
                        {% for item in site.labels.items %}
                            <li>
                                <a dir=\"ltr\" href=\"{{ item.url }}\">{{ item.label }}</a>
                            </li>
                        {% endfor %}
                    </ul>
                    <div class=\"clear\"></div>
                </div>
            </div>
        </div>
        <div class=\"footer-column four columns section\" id=\"footer-widget-3\">
            <div class=\"widget HTML\" id=\"HTML4\">
                <h2 class=\"title\">{{ site.footer.title }}</h2>
                <div class=\"widget-content\">
                    {{ site.footer.content|raw }}
                </div>
                <div class=\"clear\"></div>
            </div>
        </div>
        <div class=\"clear\"></div>
    </div>
    <div class=\"copyright-wrapper\">
        <div class=\"copyright-container container\">
            <div class=\"copyright-left\">
                {% if site.copyright %}
                    {{ site.copyright.text1 }} © {{ site.copyright.year }} <a href=\"{{ site.copyright.url }}\">{{ site.copyright.text2}}</a>
                {% endif %}
                {% if site.copyright2 %}
                    {{ site.copyright2.text1 }} <a href=\"{{ site.copyright2.url }}\">{{ site.copyright2.text2}}</a>
                {% endif %}
            </div>
            <div class=\"copyright-right\">
                <span id=\"mycontent\">
                    Designed By <a href=\"http://www.soratemplates.com/\" target=\"_blank\" title=\"Blogger Templates\">Sora Templates</a> and <a href=\"http://mybloggerthemes.com/\" target=\"_blank\" title=\"Free Blogger Templates\">My Blogger Themes</a>
                </span>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</footer>
", "partials/footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\partials\\footer.html.twig");
    }
}
