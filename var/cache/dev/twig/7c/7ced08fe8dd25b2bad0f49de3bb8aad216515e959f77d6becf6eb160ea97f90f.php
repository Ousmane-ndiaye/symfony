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
        $__internal_e88dc4e43fb8142eb194a648efe14bee2bf4ca2a0ea2fce49dc74540bf4498c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e88dc4e43fb8142eb194a648efe14bee2bf4ca2a0ea2fce49dc74540bf4498c1->enter($__internal_e88dc4e43fb8142eb194a648efe14bee2bf4ca2a0ea2fce49dc74540bf4498c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_a00b9d5e583585e6c519a65f8edebd1377de2a72261fc21d623d812877443ac5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a00b9d5e583585e6c519a65f8edebd1377de2a72261fc21d623d812877443ac5->enter($__internal_a00b9d5e583585e6c519a65f8edebd1377de2a72261fc21d623d812877443ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e88dc4e43fb8142eb194a648efe14bee2bf4ca2a0ea2fce49dc74540bf4498c1->leave($__internal_e88dc4e43fb8142eb194a648efe14bee2bf4ca2a0ea2fce49dc74540bf4498c1_prof);

        
        $__internal_a00b9d5e583585e6c519a65f8edebd1377de2a72261fc21d623d812877443ac5->leave($__internal_a00b9d5e583585e6c519a65f8edebd1377de2a72261fc21d623d812877443ac5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83a8ea8a3c776ffdc4e5d5d1114bc7c421ebe6440623da96c85aa325125fc735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a8ea8a3c776ffdc4e5d5d1114bc7c421ebe6440623da96c85aa325125fc735->enter($__internal_83a8ea8a3c776ffdc4e5d5d1114bc7c421ebe6440623da96c85aa325125fc735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7aec40a7fa84cb09c89d11687c4a5918bb6cf74edfe34c9b393035d48aeba40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7aec40a7fa84cb09c89d11687c4a5918bb6cf74edfe34c9b393035d48aeba40->enter($__internal_a7aec40a7fa84cb09c89d11687c4a5918bb6cf74edfe34c9b393035d48aeba40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a7aec40a7fa84cb09c89d11687c4a5918bb6cf74edfe34c9b393035d48aeba40->leave($__internal_a7aec40a7fa84cb09c89d11687c4a5918bb6cf74edfe34c9b393035d48aeba40_prof);

        
        $__internal_83a8ea8a3c776ffdc4e5d5d1114bc7c421ebe6440623da96c85aa325125fc735->leave($__internal_83a8ea8a3c776ffdc4e5d5d1114bc7c421ebe6440623da96c85aa325125fc735_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ef611fb086e62547590104bce05ab1b93e4e041bfddd758b55a289639fc83c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef611fb086e62547590104bce05ab1b93e4e041bfddd758b55a289639fc83c9->enter($__internal_2ef611fb086e62547590104bce05ab1b93e4e041bfddd758b55a289639fc83c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60500361f3c8efad659dff38ff272e297a3c99b443be489604fd2c1f45a4bb1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60500361f3c8efad659dff38ff272e297a3c99b443be489604fd2c1f45a4bb1c->enter($__internal_60500361f3c8efad659dff38ff272e297a3c99b443be489604fd2c1f45a4bb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_60500361f3c8efad659dff38ff272e297a3c99b443be489604fd2c1f45a4bb1c->leave($__internal_60500361f3c8efad659dff38ff272e297a3c99b443be489604fd2c1f45a4bb1c_prof);

        
        $__internal_2ef611fb086e62547590104bce05ab1b93e4e041bfddd758b55a289639fc83c9->leave($__internal_2ef611fb086e62547590104bce05ab1b93e4e041bfddd758b55a289639fc83c9_prof);

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
