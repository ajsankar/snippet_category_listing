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

/* modules/custom/cgi_related_media/templates/media-overview-page.html.twig */
class __TwigTemplate_55ed78fb7d6fcff7b3dd8bf84fb0eea24433ba9b3128414d278187de6ff63867 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 2, "if" => 14];
        $filters = ["escape" => 3, "date" => 6, "e" => 16, "raw" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date', 'e', 'raw'],
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
        echo " <div class = \"content\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogFeed"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blogdata"]) {
            // line 3
            echo "    <div>  <img src= \" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["blogdata"], "image", [], "array")), "html", null, true);
            echo "\"/>  </div> 
     <div> ";
            // line 4
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["blogdata"], "author", [], "array")), "html", null, true);
            echo "
       ";
            // line 5
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["blogdata"], "title", [], "array")), "html", null, true);
            echo "
       ";
            // line 6
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["blogdata"], "date", [], "array")), "F jS \\a\\t g:ia"), "html", null, true);
            echo "
       Blog | ";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["blogdata"], "category", [], "array")), "html", null, true);
            echo " 
       </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogdata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediaAnnouncement"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 13
            echo "
    ";
            // line 14
            if ( !(null === $this->getAttribute($context["data"], "filename", []))) {
                // line 15
                echo "     <div>   
         <img src=\"";
                // line 16
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "uri", [])));
                echo "\"/>
     </div>
     ";
            }
            // line 19
            echo "        <div><h4>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "title", [])));
            echo "</h4> </div>
        <div><h4>";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "body", [])));
            echo "</h4> </div>
        <div>";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "created", [])));
            echo "</div>
 
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "   

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["brochure"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 27
            echo "
    ";
            // line 28
            if ( !(null === $this->getAttribute($context["data"], "filename", []))) {
                // line 29
                echo "     <div>   
         <img src=\"";
                // line 30
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "uri", [])));
                echo "\"/>
     </div>
     ";
            }
            // line 33
            echo "        <div><h4>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "title", [])));
            echo "</h4> </div>
        <div><h4>";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "body", [])));
            echo "</h4> </div>
        <div>";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "created", [])));
            echo "</div>
 
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
         ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["whitePaper"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 40
            echo "
    ";
            // line 41
            if ( !(null === $this->getAttribute($context["data"], "filename", []))) {
                // line 42
                echo "     <div>   
         <img src=\"";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "uri", [])));
                echo "\"/>
     </div>
     ";
            }
            // line 46
            echo "        <div><h4>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "title", [])));
            echo "</h4> </div>
        <div><h4>";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "body", [])));
            echo "</h4> </div>
        <div>";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["data"], "created", [])));
            echo "</div>
 
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "

</div>



";
    }

    public function getTemplateName()
    {
        return "modules/custom/cgi_related_media/templates/media-overview-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 51,  198 => 48,  194 => 47,  189 => 46,  183 => 43,  180 => 42,  178 => 41,  175 => 40,  171 => 39,  168 => 38,  159 => 35,  155 => 34,  150 => 33,  144 => 30,  141 => 29,  139 => 28,  136 => 27,  132 => 26,  128 => 24,  119 => 21,  115 => 20,  110 => 19,  104 => 16,  101 => 15,  99 => 14,  96 => 13,  92 => 12,  89 => 11,  79 => 7,  75 => 6,  71 => 5,  67 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/cgi_related_media/templates/media-overview-page.html.twig", "C:\\Users\\user\\Sites\\devdesktop\\drupal-8.9.1\\modules\\custom\\cgi_related_media\\templates\\media-overview-page.html.twig");
    }
}
