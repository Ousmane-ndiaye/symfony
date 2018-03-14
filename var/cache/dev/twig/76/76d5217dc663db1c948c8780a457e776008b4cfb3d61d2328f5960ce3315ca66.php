<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_652c6f5da4d22f130958983ebeea86daebc195a5a376933eae19786aaffdeeb3 extends Twig_Template
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
        $__internal_e59e1fad08d3e45088eca872f4e3b257d3fec0ed1c1a3d37010c8f94430054d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59e1fad08d3e45088eca872f4e3b257d3fec0ed1c1a3d37010c8f94430054d0->enter($__internal_e59e1fad08d3e45088eca872f4e3b257d3fec0ed1c1a3d37010c8f94430054d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_92f4ddcaffa0b0597d9f141edf4455c8d158371d0a4c3e0f82192ea3c98b07dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f4ddcaffa0b0597d9f141edf4455c8d158371d0a4c3e0f82192ea3c98b07dd->enter($__internal_92f4ddcaffa0b0597d9f141edf4455c8d158371d0a4c3e0f82192ea3c98b07dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e59e1fad08d3e45088eca872f4e3b257d3fec0ed1c1a3d37010c8f94430054d0->leave($__internal_e59e1fad08d3e45088eca872f4e3b257d3fec0ed1c1a3d37010c8f94430054d0_prof);

        
        $__internal_92f4ddcaffa0b0597d9f141edf4455c8d158371d0a4c3e0f82192ea3c98b07dd->leave($__internal_92f4ddcaffa0b0597d9f141edf4455c8d158371d0a4c3e0f82192ea3c98b07dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
