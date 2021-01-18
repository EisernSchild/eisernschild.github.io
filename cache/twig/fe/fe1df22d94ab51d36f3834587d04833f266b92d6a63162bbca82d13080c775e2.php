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

/* partials/blog_sidebar_footer.html.twig */
class __TwigTemplate_60edd201382a38d7f39fc5dc07c18ef544b8ad538107a79e3e3e2594985d721e extends \Twig\Template
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
        echo "                        </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>
<div class=\"clear\"></div>
</div>

<div class=\"gdlr-sidebar gdlr-right-sidebar four1 columns\">
<div class=\"gdlr-item-start-content sidebar-right-item\">
    <div class=\"section\" id=\"swid\">
        ";
        // line 20
        $this->loadTemplate("partials/sidebar.html.twig", "partials/blog_sidebar_footer.html.twig", 20)->display($context);
        // line 21
        echo "    </div>
</div>
</div>
<div class=\"clear\"></div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/blog_sidebar_footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 21,  51 => 20,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("                        </div>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                    <div class=\"clear\"></div>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>
<div class=\"clear\"></div>
</div>

<div class=\"gdlr-sidebar gdlr-right-sidebar four1 columns\">
<div class=\"gdlr-item-start-content sidebar-right-item\">
    <div class=\"section\" id=\"swid\">
        {% include 'partials/sidebar.html.twig' %}
    </div>
</div>
</div>
<div class=\"clear\"></div>
</div>
</div>", "partials/blog_sidebar_footer.html.twig", "C:\\xampp\\htdocs\\eisernschild.github.io\\user\\themes\\soraarticle\\templates\\partials\\blog_sidebar_footer.html.twig");
    }
}
