<?php

/* ::front.html.twig */
class __TwigTemplate_97685d9827364fec047d1f97668a733be90067c3267132247f46987f7631c764 extends Twig_Template
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
        $__internal_964a8b519370a3a508515b40e7bafb1f5be7f39a604f3b56de9cfcd4e7b8162c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964a8b519370a3a508515b40e7bafb1f5be7f39a604f3b56de9cfcd4e7b8162c->enter($__internal_964a8b519370a3a508515b40e7bafb1f5be7f39a604f3b56de9cfcd4e7b8162c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        $__internal_5cb3259dcce4af441976adfac825a16b6facfd14f94fafdc1346e920153ad308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb3259dcce4af441976adfac825a16b6facfd14f94fafdc1346e920153ad308->enter($__internal_5cb3259dcce4af441976adfac825a16b6facfd14f94fafdc1346e920153ad308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

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
        
        $__internal_964a8b519370a3a508515b40e7bafb1f5be7f39a604f3b56de9cfcd4e7b8162c->leave($__internal_964a8b519370a3a508515b40e7bafb1f5be7f39a604f3b56de9cfcd4e7b8162c_prof);

        
        $__internal_5cb3259dcce4af441976adfac825a16b6facfd14f94fafdc1346e920153ad308->leave($__internal_5cb3259dcce4af441976adfac825a16b6facfd14f94fafdc1346e920153ad308_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f0667f7c3eb3cf44c74363d1d3be97ab584954f85e679daa5d3a839efe24d98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0667f7c3eb3cf44c74363d1d3be97ab584954f85e679daa5d3a839efe24d98->enter($__internal_0f0667f7c3eb3cf44c74363d1d3be97ab584954f85e679daa5d3a839efe24d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c378f31d5d63f71320629678e99a271aa5b87904ae36dd4b1555831a59682c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c378f31d5d63f71320629678e99a271aa5b87904ae36dd4b1555831a59682c2d->enter($__internal_c378f31d5d63f71320629678e99a271aa5b87904ae36dd4b1555831a59682c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenu à soultana ! ";
        
        $__internal_c378f31d5d63f71320629678e99a271aa5b87904ae36dd4b1555831a59682c2d->leave($__internal_c378f31d5d63f71320629678e99a271aa5b87904ae36dd4b1555831a59682c2d_prof);

        
        $__internal_0f0667f7c3eb3cf44c74363d1d3be97ab584954f85e679daa5d3a839efe24d98->leave($__internal_0f0667f7c3eb3cf44c74363d1d3be97ab584954f85e679daa5d3a839efe24d98_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b490cefc8ddd6ccb12ac10901cd5bb38ef9ba7cf8b63e6f9cac66f81b976d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b490cefc8ddd6ccb12ac10901cd5bb38ef9ba7cf8b63e6f9cac66f81b976d60->enter($__internal_3b490cefc8ddd6ccb12ac10901cd5bb38ef9ba7cf8b63e6f9cac66f81b976d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7a8117c112f0c99081eba521f51b7e390b7c56f1c39bfe2381a934d47146a051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8117c112f0c99081eba521f51b7e390b7c56f1c39bfe2381a934d47146a051->enter($__internal_7a8117c112f0c99081eba521f51b7e390b7c56f1c39bfe2381a934d47146a051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7a8117c112f0c99081eba521f51b7e390b7c56f1c39bfe2381a934d47146a051->leave($__internal_7a8117c112f0c99081eba521f51b7e390b7c56f1c39bfe2381a934d47146a051_prof);

        
        $__internal_3b490cefc8ddd6ccb12ac10901cd5bb38ef9ba7cf8b63e6f9cac66f81b976d60->leave($__internal_3b490cefc8ddd6ccb12ac10901cd5bb38ef9ba7cf8b63e6f9cac66f81b976d60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b5718c331a1a127a87291fc9085ee2c8e8b74299f4e2cdb22679c14458fffaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b5718c331a1a127a87291fc9085ee2c8e8b74299f4e2cdb22679c14458fffaf->enter($__internal_9b5718c331a1a127a87291fc9085ee2c8e8b74299f4e2cdb22679c14458fffaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f5cda4b859815bbf2fcebdb0ffac9454d24daf6f15f10197cdb94ddf1554c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5cda4b859815bbf2fcebdb0ffac9454d24daf6f15f10197cdb94ddf1554c4e->enter($__internal_6f5cda4b859815bbf2fcebdb0ffac9454d24daf6f15f10197cdb94ddf1554c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f5cda4b859815bbf2fcebdb0ffac9454d24daf6f15f10197cdb94ddf1554c4e->leave($__internal_6f5cda4b859815bbf2fcebdb0ffac9454d24daf6f15f10197cdb94ddf1554c4e_prof);

        
        $__internal_9b5718c331a1a127a87291fc9085ee2c8e8b74299f4e2cdb22679c14458fffaf->leave($__internal_9b5718c331a1a127a87291fc9085ee2c8e8b74299f4e2cdb22679c14458fffaf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_948129feac165535214b8190505576135777b089708c7d328fc81d938a3d50cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948129feac165535214b8190505576135777b089708c7d328fc81d938a3d50cc->enter($__internal_948129feac165535214b8190505576135777b089708c7d328fc81d938a3d50cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1662a90182510e69f89934012ebe0f7562359c3eef6b95de2060d4550a08c7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1662a90182510e69f89934012ebe0f7562359c3eef6b95de2060d4550a08c7cf->enter($__internal_1662a90182510e69f89934012ebe0f7562359c3eef6b95de2060d4550a08c7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1662a90182510e69f89934012ebe0f7562359c3eef6b95de2060d4550a08c7cf->leave($__internal_1662a90182510e69f89934012ebe0f7562359c3eef6b95de2060d4550a08c7cf_prof);

        
        $__internal_948129feac165535214b8190505576135777b089708c7d328fc81d938a3d50cc->leave($__internal_948129feac165535214b8190505576135777b089708c7d328fc81d938a3d50cc_prof);

    }

    public function getTemplateName()
    {
        return "::front.html.twig";
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
        <title>{% block title %}Bienvenu à soultana ! {% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::front.html.twig", "/var/www/html/soultana.sn/app/Resources/views/front.html.twig");
    }
}
