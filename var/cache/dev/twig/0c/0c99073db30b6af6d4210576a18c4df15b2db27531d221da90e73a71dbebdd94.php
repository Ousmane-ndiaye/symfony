<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15f97b944ebc3ace0e95d2352f03ef5e7c6574f0b46eca4175bd75dbeff30c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f97b944ebc3ace0e95d2352f03ef5e7c6574f0b46eca4175bd75dbeff30c0e->enter($__internal_15f97b944ebc3ace0e95d2352f03ef5e7c6574f0b46eca4175bd75dbeff30c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8b23c15b55bf6935bbea7ce6f8675afa34a9c382c47b78dbec825fcf2e239401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b23c15b55bf6935bbea7ce6f8675afa34a9c382c47b78dbec825fcf2e239401->enter($__internal_8b23c15b55bf6935bbea7ce6f8675afa34a9c382c47b78dbec825fcf2e239401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f97b944ebc3ace0e95d2352f03ef5e7c6574f0b46eca4175bd75dbeff30c0e->leave($__internal_15f97b944ebc3ace0e95d2352f03ef5e7c6574f0b46eca4175bd75dbeff30c0e_prof);

        
        $__internal_8b23c15b55bf6935bbea7ce6f8675afa34a9c382c47b78dbec825fcf2e239401->leave($__internal_8b23c15b55bf6935bbea7ce6f8675afa34a9c382c47b78dbec825fcf2e239401_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_526fc1411baf28787572eb565c81ec24116133bcb9974e8d7e2df9b05edcc85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526fc1411baf28787572eb565c81ec24116133bcb9974e8d7e2df9b05edcc85b->enter($__internal_526fc1411baf28787572eb565c81ec24116133bcb9974e8d7e2df9b05edcc85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7099be971d383390dc510e9ab433224bd7cdca7e6e732fca7c3abc6cc5682d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7099be971d383390dc510e9ab433224bd7cdca7e6e732fca7c3abc6cc5682d4d->enter($__internal_7099be971d383390dc510e9ab433224bd7cdca7e6e732fca7c3abc6cc5682d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7099be971d383390dc510e9ab433224bd7cdca7e6e732fca7c3abc6cc5682d4d->leave($__internal_7099be971d383390dc510e9ab433224bd7cdca7e6e732fca7c3abc6cc5682d4d_prof);

        
        $__internal_526fc1411baf28787572eb565c81ec24116133bcb9974e8d7e2df9b05edcc85b->leave($__internal_526fc1411baf28787572eb565c81ec24116133bcb9974e8d7e2df9b05edcc85b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c80c3edee0cc16c7e13a469f6930f3699819a39cfe85a5e43aad5bca9b50b6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80c3edee0cc16c7e13a469f6930f3699819a39cfe85a5e43aad5bca9b50b6ed->enter($__internal_c80c3edee0cc16c7e13a469f6930f3699819a39cfe85a5e43aad5bca9b50b6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_67bbcc718e4390c6178d4eb2680df7d067ace33864fde51fa22f76ca8387d3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bbcc718e4390c6178d4eb2680df7d067ace33864fde51fa22f76ca8387d3eb->enter($__internal_67bbcc718e4390c6178d4eb2680df7d067ace33864fde51fa22f76ca8387d3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67bbcc718e4390c6178d4eb2680df7d067ace33864fde51fa22f76ca8387d3eb->leave($__internal_67bbcc718e4390c6178d4eb2680df7d067ace33864fde51fa22f76ca8387d3eb_prof);

        
        $__internal_c80c3edee0cc16c7e13a469f6930f3699819a39cfe85a5e43aad5bca9b50b6ed->leave($__internal_c80c3edee0cc16c7e13a469f6930f3699819a39cfe85a5e43aad5bca9b50b6ed_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_173f83d2c67c7674fb6264be230cdcff75230892a1dc3aaa8ddfffce2a025994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173f83d2c67c7674fb6264be230cdcff75230892a1dc3aaa8ddfffce2a025994->enter($__internal_173f83d2c67c7674fb6264be230cdcff75230892a1dc3aaa8ddfffce2a025994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b96625b847230937e62027bae723099b6f5136c59bb8c29b669ee329db6ae0bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b96625b847230937e62027bae723099b6f5136c59bb8c29b669ee329db6ae0bd->enter($__internal_b96625b847230937e62027bae723099b6f5136c59bb8c29b669ee329db6ae0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b96625b847230937e62027bae723099b6f5136c59bb8c29b669ee329db6ae0bd->leave($__internal_b96625b847230937e62027bae723099b6f5136c59bb8c29b669ee329db6ae0bd_prof);

        
        $__internal_173f83d2c67c7674fb6264be230cdcff75230892a1dc3aaa8ddfffce2a025994->leave($__internal_173f83d2c67c7674fb6264be230cdcff75230892a1dc3aaa8ddfffce2a025994_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
