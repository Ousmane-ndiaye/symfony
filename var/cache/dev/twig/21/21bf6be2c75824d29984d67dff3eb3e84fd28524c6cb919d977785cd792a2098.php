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
        $__internal_35a64299455ec555040cc19a5d54759827062e4965987d9db36e483bb902fefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a64299455ec555040cc19a5d54759827062e4965987d9db36e483bb902fefa->enter($__internal_35a64299455ec555040cc19a5d54759827062e4965987d9db36e483bb902fefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_765b614b3a9e5ca85d37b74df748911ad344038f3764677c9eae6f0cd8f3c490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765b614b3a9e5ca85d37b74df748911ad344038f3764677c9eae6f0cd8f3c490->enter($__internal_765b614b3a9e5ca85d37b74df748911ad344038f3764677c9eae6f0cd8f3c490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_35a64299455ec555040cc19a5d54759827062e4965987d9db36e483bb902fefa->leave($__internal_35a64299455ec555040cc19a5d54759827062e4965987d9db36e483bb902fefa_prof);

        
        $__internal_765b614b3a9e5ca85d37b74df748911ad344038f3764677c9eae6f0cd8f3c490->leave($__internal_765b614b3a9e5ca85d37b74df748911ad344038f3764677c9eae6f0cd8f3c490_prof);

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
