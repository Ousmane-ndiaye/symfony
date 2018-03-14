<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c8bb9c4e15bb7aaabdef164dddeda6fc2bbafd00fd8e56a75c745fd192671372 extends Twig_Template
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
        $__internal_219d4302f8fc41abc2a130a750cd2cb8e3f7170cfd3870af94fd4134c8b42cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219d4302f8fc41abc2a130a750cd2cb8e3f7170cfd3870af94fd4134c8b42cdb->enter($__internal_219d4302f8fc41abc2a130a750cd2cb8e3f7170cfd3870af94fd4134c8b42cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_1375ddef315bf476241adc14e793e2bc701dda855e76784b3bcac80a2d5ca307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1375ddef315bf476241adc14e793e2bc701dda855e76784b3bcac80a2d5ca307->enter($__internal_1375ddef315bf476241adc14e793e2bc701dda855e76784b3bcac80a2d5ca307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_219d4302f8fc41abc2a130a750cd2cb8e3f7170cfd3870af94fd4134c8b42cdb->leave($__internal_219d4302f8fc41abc2a130a750cd2cb8e3f7170cfd3870af94fd4134c8b42cdb_prof);

        
        $__internal_1375ddef315bf476241adc14e793e2bc701dda855e76784b3bcac80a2d5ca307->leave($__internal_1375ddef315bf476241adc14e793e2bc701dda855e76784b3bcac80a2d5ca307_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
