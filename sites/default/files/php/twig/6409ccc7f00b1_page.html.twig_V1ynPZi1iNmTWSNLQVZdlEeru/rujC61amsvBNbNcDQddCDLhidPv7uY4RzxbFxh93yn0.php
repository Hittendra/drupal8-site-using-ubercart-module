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

/* themes/contrib/zircon/templates/page.html.twig */
class __TwigTemplate_c1181c20aac3692afb47b12caf2321644918ecf808a8f70dc72f375e3b22a036 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["raw" => 1, "escape" => 11, "t" => 11];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['raw', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div id=\"page\" class=\"page\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["page_css"] ?? null)));
        echo ">

";
        // line 3
        if ($this->getAttribute(($context["page"] ?? null), "show_skins_menu", [])) {
            // line 4
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "show_skins_menu", [])));
            echo "
";
        }
        // line 6
        echo "  
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 10
        if (($context["logo"] ?? null)) {
            // line 11
            echo "      <a id=\"logo\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 15
        echo "
    ";
        // line 16
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 17
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 20
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 21
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 25
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 29
            echo "
        ";
            // line 30
            if (($context["site_slogan"] ?? null)) {
                // line 31
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
        ";
            }
            // line 33
            echo "      </div>
   ";
        }
        // line 35
        echo "    <button type=\"button\" class=\"navbar-toggle\" id=\"main-menu-inner\">
      <span class=\"sr-only\">";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
        echo "</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    ";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    
  </div>
</header>

  ";
        // line 47
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 48
            echo "    <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null)), "html", null, true);
            echo "
        ";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
      </div>
    </nav>
  ";
        }
        // line 55
        echo "
  ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 57
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            ";
            // line 60
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 67
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"container\">
        ";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 73
        echo "
  ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 75
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 77
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 81
        echo "
  ";
        // line 82
        if (($context["messages"] ?? null)) {
            // line 83
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 89
        echo "
  ";
        // line 90
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 91
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 93
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 96
        echo "    

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 103
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 104
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 105
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 108
        echo "\t\t
        <div class=\"content col-lg-";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-md-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 110
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

          ";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 113
        if (($context["title"] ?? null)) {
            // line 114
            echo "            <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
          ";
        }
        // line 116
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

          ";
        // line 118
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
        echo "

          ";
        // line 120
        if (($context["action_links"] ?? null)) {
            // line 121
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</nav>
          ";
        }
        // line 123
        echo "
          ";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

          <!--";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
        echo "-->
        </div>

        ";
        // line 129
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 130
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 131
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 134
        echo "      </div>
    </div>
  </section>

  ";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])) {
            // line 139
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 143
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 149
        echo "    
  ";
        // line 150
        if (((($this->getAttribute(($context["page"] ?? null), "panel_second_1", []) || $this->getAttribute(($context["page"] ?? null), "panel_second_2", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_3", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_4", []))) {
            // line 151
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 155
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_1", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 158
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_2", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 161
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_3", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 164
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_4", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 170
        echo "  
  ";
        // line 171
        if (($context["breadcrumb"] ?? null)) {
            // line 172
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 174
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 178
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Back to Top"));
        echo "\" style=\"display: block;\"></a>          

  ";
        // line 180
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 181
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 183
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 187
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 187,  443 => 183,  439 => 181,  437 => 180,  431 => 178,  424 => 174,  420 => 172,  418 => 171,  415 => 170,  406 => 164,  400 => 161,  394 => 158,  388 => 155,  382 => 151,  380 => 150,  377 => 149,  368 => 143,  362 => 139,  360 => 138,  354 => 134,  348 => 131,  345 => 130,  343 => 129,  337 => 126,  332 => 124,  329 => 123,  323 => 121,  321 => 120,  316 => 118,  310 => 116,  304 => 114,  302 => 113,  298 => 112,  293 => 110,  287 => 109,  284 => 108,  278 => 105,  275 => 104,  273 => 103,  264 => 96,  257 => 93,  253 => 91,  251 => 90,  248 => 89,  241 => 85,  237 => 83,  235 => 82,  232 => 81,  225 => 77,  221 => 75,  219 => 74,  216 => 73,  209 => 69,  205 => 67,  203 => 66,  200 => 65,  192 => 60,  187 => 57,  185 => 56,  182 => 55,  175 => 51,  171 => 50,  167 => 48,  165 => 47,  157 => 42,  148 => 36,  145 => 35,  141 => 33,  135 => 31,  133 => 30,  130 => 29,  120 => 26,  117 => 25,  107 => 22,  104 => 21,  101 => 20,  97 => 17,  95 => 16,  92 => 15,  84 => 12,  77 => 11,  75 => 10,  69 => 6,  63 => 4,  61 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/zircon/templates/page.html.twig", "/app/themes/contrib/zircon/templates/page.html.twig");
    }
}
