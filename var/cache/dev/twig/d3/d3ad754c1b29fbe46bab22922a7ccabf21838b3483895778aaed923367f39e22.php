<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_a4f44e2d5f68e29590c6472a56ff53fa137c3c1edc1c00d94703c20d57f4593e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f44e2d5f68e29590c6472a56ff53fa137c3c1edc1c00d94703c20d57f4593e->enter($__internal_a4f44e2d5f68e29590c6472a56ff53fa137c3c1edc1c00d94703c20d57f4593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_938b1bd9b97dc6346ee332919d273dd61dab1fc42be1ee31a234e50361380e95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_938b1bd9b97dc6346ee332919d273dd61dab1fc42be1ee31a234e50361380e95->enter($__internal_938b1bd9b97dc6346ee332919d273dd61dab1fc42be1ee31a234e50361380e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a4f44e2d5f68e29590c6472a56ff53fa137c3c1edc1c00d94703c20d57f4593e->leave($__internal_a4f44e2d5f68e29590c6472a56ff53fa137c3c1edc1c00d94703c20d57f4593e_prof);

        
        $__internal_938b1bd9b97dc6346ee332919d273dd61dab1fc42be1ee31a234e50361380e95->leave($__internal_938b1bd9b97dc6346ee332919d273dd61dab1fc42be1ee31a234e50361380e95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
