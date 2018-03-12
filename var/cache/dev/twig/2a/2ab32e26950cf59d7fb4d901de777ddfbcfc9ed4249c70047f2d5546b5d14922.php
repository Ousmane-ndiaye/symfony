<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_1f2108f75fb320f5b2e449f82b80303372e162db3e270eb6c219d893d57c159c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f2108f75fb320f5b2e449f82b80303372e162db3e270eb6c219d893d57c159c->enter($__internal_1f2108f75fb320f5b2e449f82b80303372e162db3e270eb6c219d893d57c159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_c36777dd9de31199bf438df35e8b549c50e3bf97b74a333824fa4b7180bb72f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36777dd9de31199bf438df35e8b549c50e3bf97b74a333824fa4b7180bb72f2->enter($__internal_c36777dd9de31199bf438df35e8b549c50e3bf97b74a333824fa4b7180bb72f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1f2108f75fb320f5b2e449f82b80303372e162db3e270eb6c219d893d57c159c->leave($__internal_1f2108f75fb320f5b2e449f82b80303372e162db3e270eb6c219d893d57c159c_prof);

        
        $__internal_c36777dd9de31199bf438df35e8b549c50e3bf97b74a333824fa4b7180bb72f2->leave($__internal_c36777dd9de31199bf438df35e8b549c50e3bf97b74a333824fa4b7180bb72f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
