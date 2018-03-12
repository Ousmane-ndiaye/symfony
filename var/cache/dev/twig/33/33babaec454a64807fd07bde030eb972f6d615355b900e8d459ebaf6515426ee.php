<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_eb9fc4b4a81188d17807f9791c57611a119a3b03565667ff2c8616a8c37389e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9fc4b4a81188d17807f9791c57611a119a3b03565667ff2c8616a8c37389e3->enter($__internal_eb9fc4b4a81188d17807f9791c57611a119a3b03565667ff2c8616a8c37389e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_a2718c33ba1a0ad58c0e07e530f5d25bed375ddc5ac8de499e61dba0665f294f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2718c33ba1a0ad58c0e07e530f5d25bed375ddc5ac8de499e61dba0665f294f->enter($__internal_a2718c33ba1a0ad58c0e07e530f5d25bed375ddc5ac8de499e61dba0665f294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_eb9fc4b4a81188d17807f9791c57611a119a3b03565667ff2c8616a8c37389e3->leave($__internal_eb9fc4b4a81188d17807f9791c57611a119a3b03565667ff2c8616a8c37389e3_prof);

        
        $__internal_a2718c33ba1a0ad58c0e07e530f5d25bed375ddc5ac8de499e61dba0665f294f->leave($__internal_a2718c33ba1a0ad58c0e07e530f5d25bed375ddc5ac8de499e61dba0665f294f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
