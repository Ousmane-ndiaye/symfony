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
        $__internal_087a730c30464a14f51ad6e4448fd913ea8d0c3bb5bd1c6371c80f64d8dda778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087a730c30464a14f51ad6e4448fd913ea8d0c3bb5bd1c6371c80f64d8dda778->enter($__internal_087a730c30464a14f51ad6e4448fd913ea8d0c3bb5bd1c6371c80f64d8dda778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        $__internal_49ca984e215ed94addd691073dc833fb55ad5b96830c2b4f46c3669ef583e2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ca984e215ed94addd691073dc833fb55ad5b96830c2b4f46c3669ef583e2ec->enter($__internal_49ca984e215ed94addd691073dc833fb55ad5b96830c2b4f46c3669ef583e2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

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
        
        $__internal_087a730c30464a14f51ad6e4448fd913ea8d0c3bb5bd1c6371c80f64d8dda778->leave($__internal_087a730c30464a14f51ad6e4448fd913ea8d0c3bb5bd1c6371c80f64d8dda778_prof);

        
        $__internal_49ca984e215ed94addd691073dc833fb55ad5b96830c2b4f46c3669ef583e2ec->leave($__internal_49ca984e215ed94addd691073dc833fb55ad5b96830c2b4f46c3669ef583e2ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5ef338e77a92db9ec7cf211065361267dcf38b8366fa20af691a88b9139d911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ef338e77a92db9ec7cf211065361267dcf38b8366fa20af691a88b9139d911->enter($__internal_f5ef338e77a92db9ec7cf211065361267dcf38b8366fa20af691a88b9139d911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48b408f06e862b072e9590758a1b67f59d34c3fb0bc582d9858da15f6c6c67f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b408f06e862b072e9590758a1b67f59d34c3fb0bc582d9858da15f6c6c67f8->enter($__internal_48b408f06e862b072e9590758a1b67f59d34c3fb0bc582d9858da15f6c6c67f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48b408f06e862b072e9590758a1b67f59d34c3fb0bc582d9858da15f6c6c67f8->leave($__internal_48b408f06e862b072e9590758a1b67f59d34c3fb0bc582d9858da15f6c6c67f8_prof);

        
        $__internal_f5ef338e77a92db9ec7cf211065361267dcf38b8366fa20af691a88b9139d911->leave($__internal_f5ef338e77a92db9ec7cf211065361267dcf38b8366fa20af691a88b9139d911_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e31e45d835ee214f2f8b2a8b8329013050af7a2ba1e7233c2f4794dce07b88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e31e45d835ee214f2f8b2a8b8329013050af7a2ba1e7233c2f4794dce07b88d->enter($__internal_6e31e45d835ee214f2f8b2a8b8329013050af7a2ba1e7233c2f4794dce07b88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_51f03c1de36fb3309d284e9f8e9161daa7c161c159f85d42aa0601e0baf9d86a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f03c1de36fb3309d284e9f8e9161daa7c161c159f85d42aa0601e0baf9d86a->enter($__internal_51f03c1de36fb3309d284e9f8e9161daa7c161c159f85d42aa0601e0baf9d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_51f03c1de36fb3309d284e9f8e9161daa7c161c159f85d42aa0601e0baf9d86a->leave($__internal_51f03c1de36fb3309d284e9f8e9161daa7c161c159f85d42aa0601e0baf9d86a_prof);

        
        $__internal_6e31e45d835ee214f2f8b2a8b8329013050af7a2ba1e7233c2f4794dce07b88d->leave($__internal_6e31e45d835ee214f2f8b2a8b8329013050af7a2ba1e7233c2f4794dce07b88d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ab723b1437e894afa595fdb2036eb62e5f31dfe9c5ed7385eccc62edb2f96c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab723b1437e894afa595fdb2036eb62e5f31dfe9c5ed7385eccc62edb2f96c4->enter($__internal_3ab723b1437e894afa595fdb2036eb62e5f31dfe9c5ed7385eccc62edb2f96c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2bacebf207479f77b0dbccf47060f631a5b1106eba32b446068c891217240483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bacebf207479f77b0dbccf47060f631a5b1106eba32b446068c891217240483->enter($__internal_2bacebf207479f77b0dbccf47060f631a5b1106eba32b446068c891217240483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2bacebf207479f77b0dbccf47060f631a5b1106eba32b446068c891217240483->leave($__internal_2bacebf207479f77b0dbccf47060f631a5b1106eba32b446068c891217240483_prof);

        
        $__internal_3ab723b1437e894afa595fdb2036eb62e5f31dfe9c5ed7385eccc62edb2f96c4->leave($__internal_3ab723b1437e894afa595fdb2036eb62e5f31dfe9c5ed7385eccc62edb2f96c4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3987af278bcac9ebf550be08166689115a58beed1190739b6eacecc5ad8e3391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3987af278bcac9ebf550be08166689115a58beed1190739b6eacecc5ad8e3391->enter($__internal_3987af278bcac9ebf550be08166689115a58beed1190739b6eacecc5ad8e3391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9131e9849724637aa66ebe2e61a4d330b0afb081012a4a66be6c7b6bd82f5ad8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9131e9849724637aa66ebe2e61a4d330b0afb081012a4a66be6c7b6bd82f5ad8->enter($__internal_9131e9849724637aa66ebe2e61a4d330b0afb081012a4a66be6c7b6bd82f5ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9131e9849724637aa66ebe2e61a4d330b0afb081012a4a66be6c7b6bd82f5ad8->leave($__internal_9131e9849724637aa66ebe2e61a4d330b0afb081012a4a66be6c7b6bd82f5ad8_prof);

        
        $__internal_3987af278bcac9ebf550be08166689115a58beed1190739b6eacecc5ad8e3391->leave($__internal_3987af278bcac9ebf550be08166689115a58beed1190739b6eacecc5ad8e3391_prof);

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
        <title>{% block title %}Welcome!{% endblock %}</title>
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
