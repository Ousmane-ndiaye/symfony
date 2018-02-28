<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11c5730e98437f9772825724ea7fbf0d3fd8286a41797bd0885d24eb54f88ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c5730e98437f9772825724ea7fbf0d3fd8286a41797bd0885d24eb54f88ffb->enter($__internal_11c5730e98437f9772825724ea7fbf0d3fd8286a41797bd0885d24eb54f88ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f488cf5d861393352188d8c0fd72d3db6492872da384313128e958b17a67921f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f488cf5d861393352188d8c0fd72d3db6492872da384313128e958b17a67921f->enter($__internal_f488cf5d861393352188d8c0fd72d3db6492872da384313128e958b17a67921f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_11c5730e98437f9772825724ea7fbf0d3fd8286a41797bd0885d24eb54f88ffb->leave($__internal_11c5730e98437f9772825724ea7fbf0d3fd8286a41797bd0885d24eb54f88ffb_prof);

        
        $__internal_f488cf5d861393352188d8c0fd72d3db6492872da384313128e958b17a67921f->leave($__internal_f488cf5d861393352188d8c0fd72d3db6492872da384313128e958b17a67921f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_23823ed77bb48aee239ad226d3f4263b0a849351bdc01a08e1855b28d6701485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23823ed77bb48aee239ad226d3f4263b0a849351bdc01a08e1855b28d6701485->enter($__internal_23823ed77bb48aee239ad226d3f4263b0a849351bdc01a08e1855b28d6701485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a4838231b71e2b03a48bcf81e43d0ef7ed7ce0598e3e22b549166b2f57ac26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4838231b71e2b03a48bcf81e43d0ef7ed7ce0598e3e22b549166b2f57ac26a->enter($__internal_7a4838231b71e2b03a48bcf81e43d0ef7ed7ce0598e3e22b549166b2f57ac26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7a4838231b71e2b03a48bcf81e43d0ef7ed7ce0598e3e22b549166b2f57ac26a->leave($__internal_7a4838231b71e2b03a48bcf81e43d0ef7ed7ce0598e3e22b549166b2f57ac26a_prof);

        
        $__internal_23823ed77bb48aee239ad226d3f4263b0a849351bdc01a08e1855b28d6701485->leave($__internal_23823ed77bb48aee239ad226d3f4263b0a849351bdc01a08e1855b28d6701485_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66d8d196de03bc43d31565e07adde9afdb392bb94336461b1db5e4f046a25747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66d8d196de03bc43d31565e07adde9afdb392bb94336461b1db5e4f046a25747->enter($__internal_66d8d196de03bc43d31565e07adde9afdb392bb94336461b1db5e4f046a25747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ea8bbab52658a92a1da4ccabfcda49e00b9e27aa7e4b72cd1d0ccf862d7253ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8bbab52658a92a1da4ccabfcda49e00b9e27aa7e4b72cd1d0ccf862d7253ae->enter($__internal_ea8bbab52658a92a1da4ccabfcda49e00b9e27aa7e4b72cd1d0ccf862d7253ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ea8bbab52658a92a1da4ccabfcda49e00b9e27aa7e4b72cd1d0ccf862d7253ae->leave($__internal_ea8bbab52658a92a1da4ccabfcda49e00b9e27aa7e4b72cd1d0ccf862d7253ae_prof);

        
        $__internal_66d8d196de03bc43d31565e07adde9afdb392bb94336461b1db5e4f046a25747->leave($__internal_66d8d196de03bc43d31565e07adde9afdb392bb94336461b1db5e4f046a25747_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5486f36af5fd9aa574151667b0310cb754f9510adc87f3879c870b68416b1942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5486f36af5fd9aa574151667b0310cb754f9510adc87f3879c870b68416b1942->enter($__internal_5486f36af5fd9aa574151667b0310cb754f9510adc87f3879c870b68416b1942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fef5d35c205c4ed63e931df31a6fa47879354477d24237dd26dacd0eb0e28e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fef5d35c205c4ed63e931df31a6fa47879354477d24237dd26dacd0eb0e28e3->enter($__internal_6fef5d35c205c4ed63e931df31a6fa47879354477d24237dd26dacd0eb0e28e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6fef5d35c205c4ed63e931df31a6fa47879354477d24237dd26dacd0eb0e28e3->leave($__internal_6fef5d35c205c4ed63e931df31a6fa47879354477d24237dd26dacd0eb0e28e3_prof);

        
        $__internal_5486f36af5fd9aa574151667b0310cb754f9510adc87f3879c870b68416b1942->leave($__internal_5486f36af5fd9aa574151667b0310cb754f9510adc87f3879c870b68416b1942_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0f490849c1a33a97f388967c829a9b0f897b8677286e880f89a7a147f5ca78e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f490849c1a33a97f388967c829a9b0f897b8677286e880f89a7a147f5ca78e->enter($__internal_c0f490849c1a33a97f388967c829a9b0f897b8677286e880f89a7a147f5ca78e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c9a391af3aad2406b40af756cf5ac00d93023b1d32f544a2b6ca3be7e96116df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9a391af3aad2406b40af756cf5ac00d93023b1d32f544a2b6ca3be7e96116df->enter($__internal_c9a391af3aad2406b40af756cf5ac00d93023b1d32f544a2b6ca3be7e96116df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c9a391af3aad2406b40af756cf5ac00d93023b1d32f544a2b6ca3be7e96116df->leave($__internal_c9a391af3aad2406b40af756cf5ac00d93023b1d32f544a2b6ca3be7e96116df_prof);

        
        $__internal_c0f490849c1a33a97f388967c829a9b0f897b8677286e880f89a7a147f5ca78e->leave($__internal_c0f490849c1a33a97f388967c829a9b0f897b8677286e880f89a7a147f5ca78e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/soultana.sn/app/Resources/views/base.html.twig");
    }
}
