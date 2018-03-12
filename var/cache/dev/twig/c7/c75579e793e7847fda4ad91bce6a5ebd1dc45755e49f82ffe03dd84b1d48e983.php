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
        $__internal_c412fc9d070bda384c24f987070073746fbc218e30b7898f7896e5f02c57fc43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c412fc9d070bda384c24f987070073746fbc218e30b7898f7896e5f02c57fc43->enter($__internal_c412fc9d070bda384c24f987070073746fbc218e30b7898f7896e5f02c57fc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_b475d2d9fd0f3fd5ba604230ba6941169f61a8f7dcdd829df96ff2168e286259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b475d2d9fd0f3fd5ba604230ba6941169f61a8f7dcdd829df96ff2168e286259->enter($__internal_b475d2d9fd0f3fd5ba604230ba6941169f61a8f7dcdd829df96ff2168e286259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c412fc9d070bda384c24f987070073746fbc218e30b7898f7896e5f02c57fc43->leave($__internal_c412fc9d070bda384c24f987070073746fbc218e30b7898f7896e5f02c57fc43_prof);

        
        $__internal_b475d2d9fd0f3fd5ba604230ba6941169f61a8f7dcdd829df96ff2168e286259->leave($__internal_b475d2d9fd0f3fd5ba604230ba6941169f61a8f7dcdd829df96ff2168e286259_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1df0b32fe2da95683d4b5a252e40ec38d4767f8eb0ad58dcd27d1e6c0b25fadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1df0b32fe2da95683d4b5a252e40ec38d4767f8eb0ad58dcd27d1e6c0b25fadd->enter($__internal_1df0b32fe2da95683d4b5a252e40ec38d4767f8eb0ad58dcd27d1e6c0b25fadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91401db2acf4696afaf68c7bbb690c57a65c7c3dbaee1f97fc54f3f02a170296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91401db2acf4696afaf68c7bbb690c57a65c7c3dbaee1f97fc54f3f02a170296->enter($__internal_91401db2acf4696afaf68c7bbb690c57a65c7c3dbaee1f97fc54f3f02a170296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_91401db2acf4696afaf68c7bbb690c57a65c7c3dbaee1f97fc54f3f02a170296->leave($__internal_91401db2acf4696afaf68c7bbb690c57a65c7c3dbaee1f97fc54f3f02a170296_prof);

        
        $__internal_1df0b32fe2da95683d4b5a252e40ec38d4767f8eb0ad58dcd27d1e6c0b25fadd->leave($__internal_1df0b32fe2da95683d4b5a252e40ec38d4767f8eb0ad58dcd27d1e6c0b25fadd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca6695667b136571d6257df1f2dc25d286db7a0f7c4a40bb6c81e4ad37fbfc61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6695667b136571d6257df1f2dc25d286db7a0f7c4a40bb6c81e4ad37fbfc61->enter($__internal_ca6695667b136571d6257df1f2dc25d286db7a0f7c4a40bb6c81e4ad37fbfc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cb2af1be02acb9a66549f3b0866a8c0640923f3303ca42c0d2bbb161e92a0b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2af1be02acb9a66549f3b0866a8c0640923f3303ca42c0d2bbb161e92a0b9d->enter($__internal_cb2af1be02acb9a66549f3b0866a8c0640923f3303ca42c0d2bbb161e92a0b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cb2af1be02acb9a66549f3b0866a8c0640923f3303ca42c0d2bbb161e92a0b9d->leave($__internal_cb2af1be02acb9a66549f3b0866a8c0640923f3303ca42c0d2bbb161e92a0b9d_prof);

        
        $__internal_ca6695667b136571d6257df1f2dc25d286db7a0f7c4a40bb6c81e4ad37fbfc61->leave($__internal_ca6695667b136571d6257df1f2dc25d286db7a0f7c4a40bb6c81e4ad37fbfc61_prof);

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
