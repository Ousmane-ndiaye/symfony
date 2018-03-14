<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13f2180efa51015ae0b9f13e1a83915b567114dff90db879878bd5829dedfd0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f2180efa51015ae0b9f13e1a83915b567114dff90db879878bd5829dedfd0d->enter($__internal_13f2180efa51015ae0b9f13e1a83915b567114dff90db879878bd5829dedfd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4adbbf60e26b5e56c9c0aca43e2410d11bba6ec5f600e09052bb51511272b9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adbbf60e26b5e56c9c0aca43e2410d11bba6ec5f600e09052bb51511272b9a5->enter($__internal_4adbbf60e26b5e56c9c0aca43e2410d11bba6ec5f600e09052bb51511272b9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f2180efa51015ae0b9f13e1a83915b567114dff90db879878bd5829dedfd0d->leave($__internal_13f2180efa51015ae0b9f13e1a83915b567114dff90db879878bd5829dedfd0d_prof);

        
        $__internal_4adbbf60e26b5e56c9c0aca43e2410d11bba6ec5f600e09052bb51511272b9a5->leave($__internal_4adbbf60e26b5e56c9c0aca43e2410d11bba6ec5f600e09052bb51511272b9a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9fae5d0035b8628136155b4f2378f9e595fe7f966eedf967023b1aeab035b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9fae5d0035b8628136155b4f2378f9e595fe7f966eedf967023b1aeab035b44->enter($__internal_b9fae5d0035b8628136155b4f2378f9e595fe7f966eedf967023b1aeab035b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_125863b49c0cd8a2aed57c2043881973cb4f4ac65bad1741489816806ec0f782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125863b49c0cd8a2aed57c2043881973cb4f4ac65bad1741489816806ec0f782->enter($__internal_125863b49c0cd8a2aed57c2043881973cb4f4ac65bad1741489816806ec0f782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_125863b49c0cd8a2aed57c2043881973cb4f4ac65bad1741489816806ec0f782->leave($__internal_125863b49c0cd8a2aed57c2043881973cb4f4ac65bad1741489816806ec0f782_prof);

        
        $__internal_b9fae5d0035b8628136155b4f2378f9e595fe7f966eedf967023b1aeab035b44->leave($__internal_b9fae5d0035b8628136155b4f2378f9e595fe7f966eedf967023b1aeab035b44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d26821066014603d0e2560da3255a06b6d9550353eaaf248154646a2afee008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d26821066014603d0e2560da3255a06b6d9550353eaaf248154646a2afee008->enter($__internal_9d26821066014603d0e2560da3255a06b6d9550353eaaf248154646a2afee008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe5945355fb68c116a865f7a79de2916dad304ee1c483eb1b5a20514f0f9dd04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5945355fb68c116a865f7a79de2916dad304ee1c483eb1b5a20514f0f9dd04->enter($__internal_fe5945355fb68c116a865f7a79de2916dad304ee1c483eb1b5a20514f0f9dd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fe5945355fb68c116a865f7a79de2916dad304ee1c483eb1b5a20514f0f9dd04->leave($__internal_fe5945355fb68c116a865f7a79de2916dad304ee1c483eb1b5a20514f0f9dd04_prof);

        
        $__internal_9d26821066014603d0e2560da3255a06b6d9550353eaaf248154646a2afee008->leave($__internal_9d26821066014603d0e2560da3255a06b6d9550353eaaf248154646a2afee008_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
