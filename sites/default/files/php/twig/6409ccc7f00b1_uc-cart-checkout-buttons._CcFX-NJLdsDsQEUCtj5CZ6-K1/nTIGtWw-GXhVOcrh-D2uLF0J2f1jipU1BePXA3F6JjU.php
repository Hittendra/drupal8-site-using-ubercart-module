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

/* modules/contrib/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig */
class __TwigTemplate_f11984842dba25a2f0d79451637bcd83d54e056a1686c3e948585e46e520e99d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 16, "for" => 22];
        $filters = ["escape" => 14, "first" => 14, "length" => 16, "t" => 19, "slice" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'first', 'length', 't', 'slice'],
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
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed(($context["buttons"] ?? null))), "html", null, true);
        echo "

";
        // line 16
        if ((twig_length_filter($this->env, ($context["buttons"] ?? null)) > 1)) {
            // line 17
            echo "  <div class=\"uc-cart-checkout-button-container clearfix\">
    <div class=\"uc-cart-checkout-button\">
      <div class=\"uc-cart-checkout-button-separator\">";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("- or -"));
            echo "</div>
      ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_slice($this->env, $this->sandbox->ensureToStringAllowed(($context["buttons"] ?? null)), 1, 1), "html", null, true);
            echo "
    </div>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["buttons"] ?? null), 2, null));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 23
                echo "      <div class=\"uc-cart-checkout-button\">
        ";
                // line 24
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["button"]), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  82 => 24,  79 => 23,  75 => 22,  70 => 20,  66 => 19,  62 => 17,  60 => 16,  55 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig", "/app/modules/contrib/ubercart/uc_cart/templates/uc-cart-checkout-buttons.html.twig");
    }
}
