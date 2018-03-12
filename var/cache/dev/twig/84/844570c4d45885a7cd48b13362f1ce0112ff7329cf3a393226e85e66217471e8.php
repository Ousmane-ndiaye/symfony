<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5edca8ecde9a8b82c98702764f435e050ce5f039c32ce5dc83034f9a76f4aafa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5edca8ecde9a8b82c98702764f435e050ce5f039c32ce5dc83034f9a76f4aafa->enter($__internal_5edca8ecde9a8b82c98702764f435e050ce5f039c32ce5dc83034f9a76f4aafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_512bc211c268649ce89b84ca7d6e447689ec7212e3be5cf32253ef86ba243cb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512bc211c268649ce89b84ca7d6e447689ec7212e3be5cf32253ef86ba243cb3->enter($__internal_512bc211c268649ce89b84ca7d6e447689ec7212e3be5cf32253ef86ba243cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5edca8ecde9a8b82c98702764f435e050ce5f039c32ce5dc83034f9a76f4aafa->leave($__internal_5edca8ecde9a8b82c98702764f435e050ce5f039c32ce5dc83034f9a76f4aafa_prof);

        
        $__internal_512bc211c268649ce89b84ca7d6e447689ec7212e3be5cf32253ef86ba243cb3->leave($__internal_512bc211c268649ce89b84ca7d6e447689ec7212e3be5cf32253ef86ba243cb3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e749ff0e472416ea0c268d5d00ee95913b5f2370d6fc7692f522412d8211d56f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e749ff0e472416ea0c268d5d00ee95913b5f2370d6fc7692f522412d8211d56f->enter($__internal_e749ff0e472416ea0c268d5d00ee95913b5f2370d6fc7692f522412d8211d56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_eab9614da7ac62deb84a2108870d1e645d7ed25b239719334a30458fcab60e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab9614da7ac62deb84a2108870d1e645d7ed25b239719334a30458fcab60e53->enter($__internal_eab9614da7ac62deb84a2108870d1e645d7ed25b239719334a30458fcab60e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eab9614da7ac62deb84a2108870d1e645d7ed25b239719334a30458fcab60e53->leave($__internal_eab9614da7ac62deb84a2108870d1e645d7ed25b239719334a30458fcab60e53_prof);

        
        $__internal_e749ff0e472416ea0c268d5d00ee95913b5f2370d6fc7692f522412d8211d56f->leave($__internal_e749ff0e472416ea0c268d5d00ee95913b5f2370d6fc7692f522412d8211d56f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
