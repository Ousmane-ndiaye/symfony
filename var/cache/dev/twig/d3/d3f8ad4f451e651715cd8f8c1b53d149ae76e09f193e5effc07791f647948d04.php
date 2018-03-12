<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_06a1f2fb90dc687abb78282c16c4f2e8ba09bb5debd0b247936c23db996ea3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a1f2fb90dc687abb78282c16c4f2e8ba09bb5debd0b247936c23db996ea3cb->enter($__internal_06a1f2fb90dc687abb78282c16c4f2e8ba09bb5debd0b247936c23db996ea3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b3a0cd2e8801609f6ce9c61f2d36a25d8e5238caf6955c4e8776212f3d101180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3a0cd2e8801609f6ce9c61f2d36a25d8e5238caf6955c4e8776212f3d101180->enter($__internal_b3a0cd2e8801609f6ce9c61f2d36a25d8e5238caf6955c4e8776212f3d101180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_06a1f2fb90dc687abb78282c16c4f2e8ba09bb5debd0b247936c23db996ea3cb->leave($__internal_06a1f2fb90dc687abb78282c16c4f2e8ba09bb5debd0b247936c23db996ea3cb_prof);

        
        $__internal_b3a0cd2e8801609f6ce9c61f2d36a25d8e5238caf6955c4e8776212f3d101180->leave($__internal_b3a0cd2e8801609f6ce9c61f2d36a25d8e5238caf6955c4e8776212f3d101180_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
