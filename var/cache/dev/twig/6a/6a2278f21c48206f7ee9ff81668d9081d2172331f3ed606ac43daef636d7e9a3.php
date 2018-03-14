<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_e8ee1409e001ab5b653082f0702a20e32effc2c6c28b4c1e1136a4d1ce4f06d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ee1409e001ab5b653082f0702a20e32effc2c6c28b4c1e1136a4d1ce4f06d2->enter($__internal_e8ee1409e001ab5b653082f0702a20e32effc2c6c28b4c1e1136a4d1ce4f06d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_cc782c35f77a3a25481139490eeab7bd4a7263b2950b0dd72a1706875a0da66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc782c35f77a3a25481139490eeab7bd4a7263b2950b0dd72a1706875a0da66c->enter($__internal_cc782c35f77a3a25481139490eeab7bd4a7263b2950b0dd72a1706875a0da66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e8ee1409e001ab5b653082f0702a20e32effc2c6c28b4c1e1136a4d1ce4f06d2->leave($__internal_e8ee1409e001ab5b653082f0702a20e32effc2c6c28b4c1e1136a4d1ce4f06d2_prof);

        
        $__internal_cc782c35f77a3a25481139490eeab7bd4a7263b2950b0dd72a1706875a0da66c->leave($__internal_cc782c35f77a3a25481139490eeab7bd4a7263b2950b0dd72a1706875a0da66c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
