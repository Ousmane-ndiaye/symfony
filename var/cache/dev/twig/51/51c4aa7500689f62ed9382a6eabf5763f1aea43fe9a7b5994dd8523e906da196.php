<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75c1328c762b191d23adc8a7a0f6330ffe9a507dd90ddebe11ccf94029e82691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75c1328c762b191d23adc8a7a0f6330ffe9a507dd90ddebe11ccf94029e82691->enter($__internal_75c1328c762b191d23adc8a7a0f6330ffe9a507dd90ddebe11ccf94029e82691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_dad13479fd45b910e73abec3bf1229b5a513c657e9573ce1a6ef274571ddc98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad13479fd45b910e73abec3bf1229b5a513c657e9573ce1a6ef274571ddc98c->enter($__internal_dad13479fd45b910e73abec3bf1229b5a513c657e9573ce1a6ef274571ddc98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75c1328c762b191d23adc8a7a0f6330ffe9a507dd90ddebe11ccf94029e82691->leave($__internal_75c1328c762b191d23adc8a7a0f6330ffe9a507dd90ddebe11ccf94029e82691_prof);

        
        $__internal_dad13479fd45b910e73abec3bf1229b5a513c657e9573ce1a6ef274571ddc98c->leave($__internal_dad13479fd45b910e73abec3bf1229b5a513c657e9573ce1a6ef274571ddc98c_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_695260ff70894df9c49354323c2a48704f6326ce50162505905593c6fc733035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695260ff70894df9c49354323c2a48704f6326ce50162505905593c6fc733035->enter($__internal_695260ff70894df9c49354323c2a48704f6326ce50162505905593c6fc733035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_90890fe899406313c8e15404466f50d3d427feb9b047a5b0dbdb2d8a04a7f3c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90890fe899406313c8e15404466f50d3d427feb9b047a5b0dbdb2d8a04a7f3c7->enter($__internal_90890fe899406313c8e15404466f50d3d427feb9b047a5b0dbdb2d8a04a7f3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_90890fe899406313c8e15404466f50d3d427feb9b047a5b0dbdb2d8a04a7f3c7->leave($__internal_90890fe899406313c8e15404466f50d3d427feb9b047a5b0dbdb2d8a04a7f3c7_prof);

        
        $__internal_695260ff70894df9c49354323c2a48704f6326ce50162505905593c6fc733035->leave($__internal_695260ff70894df9c49354323c2a48704f6326ce50162505905593c6fc733035_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf029ac20e516336bac83d01223fd02ac345674911c9b76bcc215b343aa0fcdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf029ac20e516336bac83d01223fd02ac345674911c9b76bcc215b343aa0fcdc->enter($__internal_cf029ac20e516336bac83d01223fd02ac345674911c9b76bcc215b343aa0fcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4978ed988fdab790a2006065280eacc960562179349432ee94c46483c2f1cdd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4978ed988fdab790a2006065280eacc960562179349432ee94c46483c2f1cdd9->enter($__internal_4978ed988fdab790a2006065280eacc960562179349432ee94c46483c2f1cdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4978ed988fdab790a2006065280eacc960562179349432ee94c46483c2f1cdd9->leave($__internal_4978ed988fdab790a2006065280eacc960562179349432ee94c46483c2f1cdd9_prof);

        
        $__internal_cf029ac20e516336bac83d01223fd02ac345674911c9b76bcc215b343aa0fcdc->leave($__internal_cf029ac20e516336bac83d01223fd02ac345674911c9b76bcc215b343aa0fcdc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
