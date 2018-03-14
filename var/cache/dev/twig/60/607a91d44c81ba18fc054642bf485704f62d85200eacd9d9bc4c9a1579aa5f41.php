<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9359811080183b2bba609c5259ca8b40a6020e024e821399c25d469fcc7f31a0 extends Twig_Template
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
        $__internal_e2bdaca088d8f2f69b732072ef90c11ac105974c276e3ee0307b613d0f8cc3ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bdaca088d8f2f69b732072ef90c11ac105974c276e3ee0307b613d0f8cc3ea->enter($__internal_e2bdaca088d8f2f69b732072ef90c11ac105974c276e3ee0307b613d0f8cc3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_d66b72248ab8e96e09863cf71adee3eaa5e9163237ad61232e9d51e38a24d905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66b72248ab8e96e09863cf71adee3eaa5e9163237ad61232e9d51e38a24d905->enter($__internal_d66b72248ab8e96e09863cf71adee3eaa5e9163237ad61232e9d51e38a24d905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e2bdaca088d8f2f69b732072ef90c11ac105974c276e3ee0307b613d0f8cc3ea->leave($__internal_e2bdaca088d8f2f69b732072ef90c11ac105974c276e3ee0307b613d0f8cc3ea_prof);

        
        $__internal_d66b72248ab8e96e09863cf71adee3eaa5e9163237ad61232e9d51e38a24d905->leave($__internal_d66b72248ab8e96e09863cf71adee3eaa5e9163237ad61232e9d51e38a24d905_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
