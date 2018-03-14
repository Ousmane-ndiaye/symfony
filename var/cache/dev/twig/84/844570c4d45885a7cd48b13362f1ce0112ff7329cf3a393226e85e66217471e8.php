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
        $__internal_0167ff92ff281f25b3fac86c67326ad6a09d29cbc1aacfa787a90d7763344dc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0167ff92ff281f25b3fac86c67326ad6a09d29cbc1aacfa787a90d7763344dc4->enter($__internal_0167ff92ff281f25b3fac86c67326ad6a09d29cbc1aacfa787a90d7763344dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_734751cbce547a7097438aa59bb35b26c79774e69c2740d0fc152a7059582ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734751cbce547a7097438aa59bb35b26c79774e69c2740d0fc152a7059582ce6->enter($__internal_734751cbce547a7097438aa59bb35b26c79774e69c2740d0fc152a7059582ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_0167ff92ff281f25b3fac86c67326ad6a09d29cbc1aacfa787a90d7763344dc4->leave($__internal_0167ff92ff281f25b3fac86c67326ad6a09d29cbc1aacfa787a90d7763344dc4_prof);

        
        $__internal_734751cbce547a7097438aa59bb35b26c79774e69c2740d0fc152a7059582ce6->leave($__internal_734751cbce547a7097438aa59bb35b26c79774e69c2740d0fc152a7059582ce6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbb1c74231ac49ebd3149eac3cdd07fb4dd30ae6a2370918fe5ba3b29ec1e72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb1c74231ac49ebd3149eac3cdd07fb4dd30ae6a2370918fe5ba3b29ec1e72b->enter($__internal_cbb1c74231ac49ebd3149eac3cdd07fb4dd30ae6a2370918fe5ba3b29ec1e72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f7e0c73dc85e920a997b60f79b1de2adaa826f98ca2fc9685f04a8f1cd560dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7e0c73dc85e920a997b60f79b1de2adaa826f98ca2fc9685f04a8f1cd560dc->enter($__internal_1f7e0c73dc85e920a997b60f79b1de2adaa826f98ca2fc9685f04a8f1cd560dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1f7e0c73dc85e920a997b60f79b1de2adaa826f98ca2fc9685f04a8f1cd560dc->leave($__internal_1f7e0c73dc85e920a997b60f79b1de2adaa826f98ca2fc9685f04a8f1cd560dc_prof);

        
        $__internal_cbb1c74231ac49ebd3149eac3cdd07fb4dd30ae6a2370918fe5ba3b29ec1e72b->leave($__internal_cbb1c74231ac49ebd3149eac3cdd07fb4dd30ae6a2370918fe5ba3b29ec1e72b_prof);

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
