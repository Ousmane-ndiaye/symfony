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
        $__internal_f8146db44d7a9ba396d2e01a963af7fb70b1e104a7cef4e4b23da9fc75f4f247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8146db44d7a9ba396d2e01a963af7fb70b1e104a7cef4e4b23da9fc75f4f247->enter($__internal_f8146db44d7a9ba396d2e01a963af7fb70b1e104a7cef4e4b23da9fc75f4f247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_977b5040f80c9e099578e894123c908ea5234fb6ba30b80db5f08590469bbafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977b5040f80c9e099578e894123c908ea5234fb6ba30b80db5f08590469bbafb->enter($__internal_977b5040f80c9e099578e894123c908ea5234fb6ba30b80db5f08590469bbafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_f8146db44d7a9ba396d2e01a963af7fb70b1e104a7cef4e4b23da9fc75f4f247->leave($__internal_f8146db44d7a9ba396d2e01a963af7fb70b1e104a7cef4e4b23da9fc75f4f247_prof);

        
        $__internal_977b5040f80c9e099578e894123c908ea5234fb6ba30b80db5f08590469bbafb->leave($__internal_977b5040f80c9e099578e894123c908ea5234fb6ba30b80db5f08590469bbafb_prof);

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
