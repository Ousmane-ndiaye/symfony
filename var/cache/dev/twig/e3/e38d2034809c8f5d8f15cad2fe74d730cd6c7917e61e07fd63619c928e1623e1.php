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
        $__internal_547bc8784e1cece54a8af2257d2f412be3526f2cd63aff3934392ea92154d4d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_547bc8784e1cece54a8af2257d2f412be3526f2cd63aff3934392ea92154d4d7->enter($__internal_547bc8784e1cece54a8af2257d2f412be3526f2cd63aff3934392ea92154d4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_c25d77256955babbd7fccccd22c359562983d3d8eeb8d9b3eb30c32efc280f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25d77256955babbd7fccccd22c359562983d3d8eeb8d9b3eb30c32efc280f68->enter($__internal_c25d77256955babbd7fccccd22c359562983d3d8eeb8d9b3eb30c32efc280f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_547bc8784e1cece54a8af2257d2f412be3526f2cd63aff3934392ea92154d4d7->leave($__internal_547bc8784e1cece54a8af2257d2f412be3526f2cd63aff3934392ea92154d4d7_prof);

        
        $__internal_c25d77256955babbd7fccccd22c359562983d3d8eeb8d9b3eb30c32efc280f68->leave($__internal_c25d77256955babbd7fccccd22c359562983d3d8eeb8d9b3eb30c32efc280f68_prof);

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
