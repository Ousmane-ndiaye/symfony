<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_0e7526df143c5e09cbf1a79a9900f7cc9b7e664168130bc51124362c615a5d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7526df143c5e09cbf1a79a9900f7cc9b7e664168130bc51124362c615a5d77->enter($__internal_0e7526df143c5e09cbf1a79a9900f7cc9b7e664168130bc51124362c615a5d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_8b7e94c67299b67ab01937b3fc0ba0c9db7ae369921a778990b6de99040fad88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b7e94c67299b67ab01937b3fc0ba0c9db7ae369921a778990b6de99040fad88->enter($__internal_8b7e94c67299b67ab01937b3fc0ba0c9db7ae369921a778990b6de99040fad88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0e7526df143c5e09cbf1a79a9900f7cc9b7e664168130bc51124362c615a5d77->leave($__internal_0e7526df143c5e09cbf1a79a9900f7cc9b7e664168130bc51124362c615a5d77_prof);

        
        $__internal_8b7e94c67299b67ab01937b3fc0ba0c9db7ae369921a778990b6de99040fad88->leave($__internal_8b7e94c67299b67ab01937b3fc0ba0c9db7ae369921a778990b6de99040fad88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
