<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_ce79601f5a6ab9515e595dd5f8a4ddb622eae2e99fb330e812527e912b79bfe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce79601f5a6ab9515e595dd5f8a4ddb622eae2e99fb330e812527e912b79bfe1->enter($__internal_ce79601f5a6ab9515e595dd5f8a4ddb622eae2e99fb330e812527e912b79bfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_3fb65f136a4482471b581679dd0460e47e2fe49b085101309c6ea7c948da0139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb65f136a4482471b581679dd0460e47e2fe49b085101309c6ea7c948da0139->enter($__internal_3fb65f136a4482471b581679dd0460e47e2fe49b085101309c6ea7c948da0139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce79601f5a6ab9515e595dd5f8a4ddb622eae2e99fb330e812527e912b79bfe1->leave($__internal_ce79601f5a6ab9515e595dd5f8a4ddb622eae2e99fb330e812527e912b79bfe1_prof);

        
        $__internal_3fb65f136a4482471b581679dd0460e47e2fe49b085101309c6ea7c948da0139->leave($__internal_3fb65f136a4482471b581679dd0460e47e2fe49b085101309c6ea7c948da0139_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_36d2525402e9f205b08e6fb6060ff8bff4bc89a1e37e5aff62409986787ad9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d2525402e9f205b08e6fb6060ff8bff4bc89a1e37e5aff62409986787ad9da->enter($__internal_36d2525402e9f205b08e6fb6060ff8bff4bc89a1e37e5aff62409986787ad9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_88956dca8836d6b6ef2ad5037dd7c1cf5e451facc0737795a424357c67077779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88956dca8836d6b6ef2ad5037dd7c1cf5e451facc0737795a424357c67077779->enter($__internal_88956dca8836d6b6ef2ad5037dd7c1cf5e451facc0737795a424357c67077779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_88956dca8836d6b6ef2ad5037dd7c1cf5e451facc0737795a424357c67077779->leave($__internal_88956dca8836d6b6ef2ad5037dd7c1cf5e451facc0737795a424357c67077779_prof);

        
        $__internal_36d2525402e9f205b08e6fb6060ff8bff4bc89a1e37e5aff62409986787ad9da->leave($__internal_36d2525402e9f205b08e6fb6060ff8bff4bc89a1e37e5aff62409986787ad9da_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7f0b4a8aebfd5769901a682a484377f5e4acbb75bdda55c8d97785c3848601c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f0b4a8aebfd5769901a682a484377f5e4acbb75bdda55c8d97785c3848601c->enter($__internal_c7f0b4a8aebfd5769901a682a484377f5e4acbb75bdda55c8d97785c3848601c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1a629aeaea6bbb792885671b0e12fb09d0a9e8da2e8f03eccc121e8c97031a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a629aeaea6bbb792885671b0e12fb09d0a9e8da2e8f03eccc121e8c97031a04->enter($__internal_1a629aeaea6bbb792885671b0e12fb09d0a9e8da2e8f03eccc121e8c97031a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a629aeaea6bbb792885671b0e12fb09d0a9e8da2e8f03eccc121e8c97031a04->leave($__internal_1a629aeaea6bbb792885671b0e12fb09d0a9e8da2e8f03eccc121e8c97031a04_prof);

        
        $__internal_c7f0b4a8aebfd5769901a682a484377f5e4acbb75bdda55c8d97785c3848601c->leave($__internal_c7f0b4a8aebfd5769901a682a484377f5e4acbb75bdda55c8d97785c3848601c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40d430bf1c0bf5beb320e71a11c4cbeb9c0f64d4af72628cf67fd8cef1904c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40d430bf1c0bf5beb320e71a11c4cbeb9c0f64d4af72628cf67fd8cef1904c99->enter($__internal_40d430bf1c0bf5beb320e71a11c4cbeb9c0f64d4af72628cf67fd8cef1904c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e56f09c898e7de0f2e0a6d95c19970a5c762f0f9db5232f2685236635c4339db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56f09c898e7de0f2e0a6d95c19970a5c762f0f9db5232f2685236635c4339db->enter($__internal_e56f09c898e7de0f2e0a6d95c19970a5c762f0f9db5232f2685236635c4339db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e56f09c898e7de0f2e0a6d95c19970a5c762f0f9db5232f2685236635c4339db->leave($__internal_e56f09c898e7de0f2e0a6d95c19970a5c762f0f9db5232f2685236635c4339db_prof);

        
        $__internal_40d430bf1c0bf5beb320e71a11c4cbeb9c0f64d4af72628cf67fd8cef1904c99->leave($__internal_40d430bf1c0bf5beb320e71a11c4cbeb9c0f64d4af72628cf67fd8cef1904c99_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
