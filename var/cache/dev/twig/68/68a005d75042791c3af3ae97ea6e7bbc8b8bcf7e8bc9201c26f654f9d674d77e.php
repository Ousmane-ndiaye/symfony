<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_fa9c342d4d329793fb85bb7e10b392c661eca0e5533a1a592337e1606e21ba5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9c342d4d329793fb85bb7e10b392c661eca0e5533a1a592337e1606e21ba5e->enter($__internal_fa9c342d4d329793fb85bb7e10b392c661eca0e5533a1a592337e1606e21ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ba87eaf18ab6bef85f23c36dc9b36e1b9ecf737eefab9466bd5a70f27d94bfcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba87eaf18ab6bef85f23c36dc9b36e1b9ecf737eefab9466bd5a70f27d94bfcb->enter($__internal_ba87eaf18ab6bef85f23c36dc9b36e1b9ecf737eefab9466bd5a70f27d94bfcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_fa9c342d4d329793fb85bb7e10b392c661eca0e5533a1a592337e1606e21ba5e->leave($__internal_fa9c342d4d329793fb85bb7e10b392c661eca0e5533a1a592337e1606e21ba5e_prof);

        
        $__internal_ba87eaf18ab6bef85f23c36dc9b36e1b9ecf737eefab9466bd5a70f27d94bfcb->leave($__internal_ba87eaf18ab6bef85f23c36dc9b36e1b9ecf737eefab9466bd5a70f27d94bfcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
