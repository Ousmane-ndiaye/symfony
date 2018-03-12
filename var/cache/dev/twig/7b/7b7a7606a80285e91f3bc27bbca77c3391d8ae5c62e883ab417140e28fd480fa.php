<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0cf73d5893792eeda0d00fb03587ceee5be4f7472e9df275352e545c949b5e3b extends Twig_Template
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
        $__internal_e548b0777202e158a6b8e542047bfb76b29ad2aaf45cf1e7d580aac313c45fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e548b0777202e158a6b8e542047bfb76b29ad2aaf45cf1e7d580aac313c45fc9->enter($__internal_e548b0777202e158a6b8e542047bfb76b29ad2aaf45cf1e7d580aac313c45fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a269909823bfd3b9bdf22faa9d7af9cd379c9fcc855bfb32091294023fbef322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a269909823bfd3b9bdf22faa9d7af9cd379c9fcc855bfb32091294023fbef322->enter($__internal_a269909823bfd3b9bdf22faa9d7af9cd379c9fcc855bfb32091294023fbef322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e548b0777202e158a6b8e542047bfb76b29ad2aaf45cf1e7d580aac313c45fc9->leave($__internal_e548b0777202e158a6b8e542047bfb76b29ad2aaf45cf1e7d580aac313c45fc9_prof);

        
        $__internal_a269909823bfd3b9bdf22faa9d7af9cd379c9fcc855bfb32091294023fbef322->leave($__internal_a269909823bfd3b9bdf22faa9d7af9cd379c9fcc855bfb32091294023fbef322_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
