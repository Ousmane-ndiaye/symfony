<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15e3cac8b41070ebff04035ece6b4d630489bc4135419d985cd2a85660b856bb extends Twig_Template
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
        $__internal_0e3422018707e5062cbb05cf083f5f00aae93885b5b28f71813015a14e9b32ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3422018707e5062cbb05cf083f5f00aae93885b5b28f71813015a14e9b32ae->enter($__internal_0e3422018707e5062cbb05cf083f5f00aae93885b5b28f71813015a14e9b32ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_b3a065caf291fba4ac737ca4ddc8f2418f55becfb6f0f43b96da7d9ca6ee71bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a065caf291fba4ac737ca4ddc8f2418f55becfb6f0f43b96da7d9ca6ee71bb->enter($__internal_b3a065caf291fba4ac737ca4ddc8f2418f55becfb6f0f43b96da7d9ca6ee71bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_0e3422018707e5062cbb05cf083f5f00aae93885b5b28f71813015a14e9b32ae->leave($__internal_0e3422018707e5062cbb05cf083f5f00aae93885b5b28f71813015a14e9b32ae_prof);

        
        $__internal_b3a065caf291fba4ac737ca4ddc8f2418f55becfb6f0f43b96da7d9ca6ee71bb->leave($__internal_b3a065caf291fba4ac737ca4ddc8f2418f55becfb6f0f43b96da7d9ca6ee71bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
