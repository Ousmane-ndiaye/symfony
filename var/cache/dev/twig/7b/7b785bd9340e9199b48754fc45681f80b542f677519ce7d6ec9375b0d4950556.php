<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_f9889c689d40dcc080aac94b8b9d8a433e7c456892f85fdf97d04108cbe93030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9889c689d40dcc080aac94b8b9d8a433e7c456892f85fdf97d04108cbe93030->enter($__internal_f9889c689d40dcc080aac94b8b9d8a433e7c456892f85fdf97d04108cbe93030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9c57f17495db3603d5a61196ab2f49f9a66cf5aefd3397ac7d18e646b5c7b71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c57f17495db3603d5a61196ab2f49f9a66cf5aefd3397ac7d18e646b5c7b71c->enter($__internal_9c57f17495db3603d5a61196ab2f49f9a66cf5aefd3397ac7d18e646b5c7b71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f9889c689d40dcc080aac94b8b9d8a433e7c456892f85fdf97d04108cbe93030->leave($__internal_f9889c689d40dcc080aac94b8b9d8a433e7c456892f85fdf97d04108cbe93030_prof);

        
        $__internal_9c57f17495db3603d5a61196ab2f49f9a66cf5aefd3397ac7d18e646b5c7b71c->leave($__internal_9c57f17495db3603d5a61196ab2f49f9a66cf5aefd3397ac7d18e646b5c7b71c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
