<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b899e230b900d2b3d22cc796f5c3e88ddc745e5e93d6d9aceea31f84a82f7bb0 extends Twig_Template
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
        $__internal_34b2d4edd2e60edcf4409bdf8b34ffc4376f41cdbf6019d7baf3a463b94a028c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b2d4edd2e60edcf4409bdf8b34ffc4376f41cdbf6019d7baf3a463b94a028c->enter($__internal_34b2d4edd2e60edcf4409bdf8b34ffc4376f41cdbf6019d7baf3a463b94a028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_91603d0c046b1fca5f729a84352dc1c2fd6597091fba7643c0076faf9eb882bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91603d0c046b1fca5f729a84352dc1c2fd6597091fba7643c0076faf9eb882bc->enter($__internal_91603d0c046b1fca5f729a84352dc1c2fd6597091fba7643c0076faf9eb882bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_34b2d4edd2e60edcf4409bdf8b34ffc4376f41cdbf6019d7baf3a463b94a028c->leave($__internal_34b2d4edd2e60edcf4409bdf8b34ffc4376f41cdbf6019d7baf3a463b94a028c_prof);

        
        $__internal_91603d0c046b1fca5f729a84352dc1c2fd6597091fba7643c0076faf9eb882bc->leave($__internal_91603d0c046b1fca5f729a84352dc1c2fd6597091fba7643c0076faf9eb882bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
