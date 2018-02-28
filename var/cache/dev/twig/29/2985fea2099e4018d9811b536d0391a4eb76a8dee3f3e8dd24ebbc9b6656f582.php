<?php

/* SoultanaBundle:Reservation:index.html.twig */
class __TwigTemplate_d81438ffe62bc80e14a3e9d6e1f59c363abccdec65e790a36f5459f6ec71c50f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front.html.twig", "SoultanaBundle:Reservation:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca0a97a50e8a89fc2849130299fa1f76e6a86e04c05e91831428e11602873ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0a97a50e8a89fc2849130299fa1f76e6a86e04c05e91831428e11602873ec7->enter($__internal_ca0a97a50e8a89fc2849130299fa1f76e6a86e04c05e91831428e11602873ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Reservation:index.html.twig"));

        $__internal_14ad19de199e362bd1346b67da1e6261157b73f786aac47c4113bc2278451ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ad19de199e362bd1346b67da1e6261157b73f786aac47c4113bc2278451ee1->enter($__internal_14ad19de199e362bd1346b67da1e6261157b73f786aac47c4113bc2278451ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca0a97a50e8a89fc2849130299fa1f76e6a86e04c05e91831428e11602873ec7->leave($__internal_ca0a97a50e8a89fc2849130299fa1f76e6a86e04c05e91831428e11602873ec7_prof);

        
        $__internal_14ad19de199e362bd1346b67da1e6261157b73f786aac47c4113bc2278451ee1->leave($__internal_14ad19de199e362bd1346b67da1e6261157b73f786aac47c4113bc2278451ee1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8916941c851688df48c36b4e53cae09a26077e8f3f03754d073dd232664e3747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8916941c851688df48c36b4e53cae09a26077e8f3f03754d073dd232664e3747->enter($__internal_8916941c851688df48c36b4e53cae09a26077e8f3f03754d073dd232664e3747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbe6f2e88d12cb591b9cbaa6231a8ad59f2880cb878d215a40b62e33f3708e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe6f2e88d12cb591b9cbaa6231a8ad59f2880cb878d215a40b62e33f3708e87->enter($__internal_fbe6f2e88d12cb591b9cbaa6231a8ad59f2880cb878d215a40b62e33f3708e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoultanaBundle:Reservation:index";
        
        $__internal_fbe6f2e88d12cb591b9cbaa6231a8ad59f2880cb878d215a40b62e33f3708e87->leave($__internal_fbe6f2e88d12cb591b9cbaa6231a8ad59f2880cb878d215a40b62e33f3708e87_prof);

        
        $__internal_8916941c851688df48c36b4e53cae09a26077e8f3f03754d073dd232664e3747->leave($__internal_8916941c851688df48c36b4e53cae09a26077e8f3f03754d073dd232664e3747_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb72aa206210447351b3984d07aac8a1e76fb96f347a29c3fd187ac47affab18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb72aa206210447351b3984d07aac8a1e76fb96f347a29c3fd187ac47affab18->enter($__internal_cb72aa206210447351b3984d07aac8a1e76fb96f347a29c3fd187ac47affab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c2e8c5536e41e444480b8d6a668774fdd72a05d547c0c1e75d90d430651607f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e8c5536e41e444480b8d6a668774fdd72a05d547c0c1e75d90d430651607f4->enter($__internal_c2e8c5536e41e444480b8d6a668774fdd72a05d547c0c1e75d90d430651607f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Reservation:index page</h1>
";
        
        $__internal_c2e8c5536e41e444480b8d6a668774fdd72a05d547c0c1e75d90d430651607f4->leave($__internal_c2e8c5536e41e444480b8d6a668774fdd72a05d547c0c1e75d90d430651607f4_prof);

        
        $__internal_cb72aa206210447351b3984d07aac8a1e76fb96f347a29c3fd187ac47affab18->leave($__internal_cb72aa206210447351b3984d07aac8a1e76fb96f347a29c3fd187ac47affab18_prof);

    }

    public function getTemplateName()
    {
        return "SoultanaBundle:Reservation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::front.html.twig\" %}

{% block title %}SoultanaBundle:Reservation:index{% endblock %}

{% block body %}
<h1>Welcome to the Reservation:index page</h1>
{% endblock %}
", "SoultanaBundle:Reservation:index.html.twig", "/var/www/html/soultana.sn/src/SNT/SoultanaBundle/Resources/views/Reservation/index.html.twig");
    }
}
