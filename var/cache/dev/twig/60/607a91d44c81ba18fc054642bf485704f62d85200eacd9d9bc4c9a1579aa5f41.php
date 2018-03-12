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
        $__internal_3f500f1333dd0680c546f2bdca8a73641fa66be12d2d4ca952f5e960fee9aeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f500f1333dd0680c546f2bdca8a73641fa66be12d2d4ca952f5e960fee9aeee->enter($__internal_3f500f1333dd0680c546f2bdca8a73641fa66be12d2d4ca952f5e960fee9aeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_a4db30a33c75b7b527886890d30b58d82e039992ecc831606fe6fc7e7c1aa8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4db30a33c75b7b527886890d30b58d82e039992ecc831606fe6fc7e7c1aa8b8->enter($__internal_a4db30a33c75b7b527886890d30b58d82e039992ecc831606fe6fc7e7c1aa8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3f500f1333dd0680c546f2bdca8a73641fa66be12d2d4ca952f5e960fee9aeee->leave($__internal_3f500f1333dd0680c546f2bdca8a73641fa66be12d2d4ca952f5e960fee9aeee_prof);

        
        $__internal_a4db30a33c75b7b527886890d30b58d82e039992ecc831606fe6fc7e7c1aa8b8->leave($__internal_a4db30a33c75b7b527886890d30b58d82e039992ecc831606fe6fc7e7c1aa8b8_prof);

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
