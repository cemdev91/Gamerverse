<?php

/* modules/faqfield/templates/faqfield-jquery-accordion-formatter.html.twig */
class __TwigTemplate_8b2d6ffe74aeeef8a6251bbfa33c3da708d73af65614925a5dca0c0f13881c61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("spaceless" => 18, "for" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        ob_start();
        // line 19
        echo "  <div id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true));
        echo "\">
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "    <h3 class=\"faqfield-question\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "question", array()), "html", null, true));
            echo "</h3>
    <div class=\"faqfield-answer\">";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "answer", array()), "html", null, true));
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/faqfield/templates/faqfield-jquery-accordion-formatter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  59 => 22,  54 => 21,  50 => 20,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a FAQ Field accordion formatter.*/
/*  **/
/*  * Available variables:*/
/*  * - items: An array of objects with the following fields.*/
/*  *   - question: Prefiltered question value by check_plain.*/
/*  *   - answer: Prefiltered answer value by field setting format.*/
/*  * - id: Id to wrap the accordion markup in.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_faqfield_jquery_accordion_formatter()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   <div id="{{ id }}">*/
/*   {% for item in items %}*/
/*     <h3 class="faqfield-question">{{ item.question }}</h3>*/
/*     <div class="faqfield-answer">{{ item.answer }}</div>*/
/*   {% endfor %}*/
/*   </div>*/
/* {% endspaceless %}*/
