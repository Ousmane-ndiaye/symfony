<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_229013a302df9d17dc51ed91f2085062b20b3dea64486f8ce4981a3dd907fd31 extends Twig_Template
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
        $__internal_4de99150c97dfcb5c54b39cfc69c1e22335f1cdb3dc78010b6d765f782f31cb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4de99150c97dfcb5c54b39cfc69c1e22335f1cdb3dc78010b6d765f782f31cb8->enter($__internal_4de99150c97dfcb5c54b39cfc69c1e22335f1cdb3dc78010b6d765f782f31cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_fd430bc3975116dd08e90a1f64f2946b947270e143b17c027ab8af06d021bc46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd430bc3975116dd08e90a1f64f2946b947270e143b17c027ab8af06d021bc46->enter($__internal_fd430bc3975116dd08e90a1f64f2946b947270e143b17c027ab8af06d021bc46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_4de99150c97dfcb5c54b39cfc69c1e22335f1cdb3dc78010b6d765f782f31cb8->leave($__internal_4de99150c97dfcb5c54b39cfc69c1e22335f1cdb3dc78010b6d765f782f31cb8_prof);

        
        $__internal_fd430bc3975116dd08e90a1f64f2946b947270e143b17c027ab8af06d021bc46->leave($__internal_fd430bc3975116dd08e90a1f64f2946b947270e143b17c027ab8af06d021bc46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
