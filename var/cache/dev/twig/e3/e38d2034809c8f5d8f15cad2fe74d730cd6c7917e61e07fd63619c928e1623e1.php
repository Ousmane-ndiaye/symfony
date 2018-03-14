<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5404c85926d28cb02228d486bceeca74a365699fc6ad831008a58882c15e3634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5404c85926d28cb02228d486bceeca74a365699fc6ad831008a58882c15e3634->enter($__internal_5404c85926d28cb02228d486bceeca74a365699fc6ad831008a58882c15e3634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_008b49560103ed8281ae4ac0c2596be6674b1c7a4db0f3c65457e72092618034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008b49560103ed8281ae4ac0c2596be6674b1c7a4db0f3c65457e72092618034->enter($__internal_008b49560103ed8281ae4ac0c2596be6674b1c7a4db0f3c65457e72092618034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_5404c85926d28cb02228d486bceeca74a365699fc6ad831008a58882c15e3634->leave($__internal_5404c85926d28cb02228d486bceeca74a365699fc6ad831008a58882c15e3634_prof);

        
        $__internal_008b49560103ed8281ae4ac0c2596be6674b1c7a4db0f3c65457e72092618034->leave($__internal_008b49560103ed8281ae4ac0c2596be6674b1c7a4db0f3c65457e72092618034_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
