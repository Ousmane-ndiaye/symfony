<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00b66e0da0dade31f168a3b2bc33b687428e4633ffdee8a9fc0b082a4297f521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b66e0da0dade31f168a3b2bc33b687428e4633ffdee8a9fc0b082a4297f521->enter($__internal_00b66e0da0dade31f168a3b2bc33b687428e4633ffdee8a9fc0b082a4297f521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_751457415782083627e143dd31540401b5931fcb26ad55a13e3b3deca51fbb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_751457415782083627e143dd31540401b5931fcb26ad55a13e3b3deca51fbb36->enter($__internal_751457415782083627e143dd31540401b5931fcb26ad55a13e3b3deca51fbb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00b66e0da0dade31f168a3b2bc33b687428e4633ffdee8a9fc0b082a4297f521->leave($__internal_00b66e0da0dade31f168a3b2bc33b687428e4633ffdee8a9fc0b082a4297f521_prof);

        
        $__internal_751457415782083627e143dd31540401b5931fcb26ad55a13e3b3deca51fbb36->leave($__internal_751457415782083627e143dd31540401b5931fcb26ad55a13e3b3deca51fbb36_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9219a965dc5547dd79acf2d06a8a8a49a2190a9273e1d8a9b912aad338729d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9219a965dc5547dd79acf2d06a8a8a49a2190a9273e1d8a9b912aad338729d9->enter($__internal_c9219a965dc5547dd79acf2d06a8a8a49a2190a9273e1d8a9b912aad338729d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c33de139b1b45338cfe4817a23836fbb682a3c26dd4ae4345132e5cb1512cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c33de139b1b45338cfe4817a23836fbb682a3c26dd4ae4345132e5cb1512cd7->enter($__internal_3c33de139b1b45338cfe4817a23836fbb682a3c26dd4ae4345132e5cb1512cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3c33de139b1b45338cfe4817a23836fbb682a3c26dd4ae4345132e5cb1512cd7->leave($__internal_3c33de139b1b45338cfe4817a23836fbb682a3c26dd4ae4345132e5cb1512cd7_prof);

        
        $__internal_c9219a965dc5547dd79acf2d06a8a8a49a2190a9273e1d8a9b912aad338729d9->leave($__internal_c9219a965dc5547dd79acf2d06a8a8a49a2190a9273e1d8a9b912aad338729d9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9dff96c5f1d923fe2984bf8ecc8a4b34095091d958d2ef6c23962dd1d9c73f3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dff96c5f1d923fe2984bf8ecc8a4b34095091d958d2ef6c23962dd1d9c73f3c->enter($__internal_9dff96c5f1d923fe2984bf8ecc8a4b34095091d958d2ef6c23962dd1d9c73f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7a9f9013b768f8ee6abc657632b733c70719fe5397bd6892b837ea9fc69eac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a9f9013b768f8ee6abc657632b733c70719fe5397bd6892b837ea9fc69eac6->enter($__internal_e7a9f9013b768f8ee6abc657632b733c70719fe5397bd6892b837ea9fc69eac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e7a9f9013b768f8ee6abc657632b733c70719fe5397bd6892b837ea9fc69eac6->leave($__internal_e7a9f9013b768f8ee6abc657632b733c70719fe5397bd6892b837ea9fc69eac6_prof);

        
        $__internal_9dff96c5f1d923fe2984bf8ecc8a4b34095091d958d2ef6c23962dd1d9c73f3c->leave($__internal_9dff96c5f1d923fe2984bf8ecc8a4b34095091d958d2ef6c23962dd1d9c73f3c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
