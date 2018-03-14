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
        $__internal_941961d1a616e3878efb34ff4c1472f2fa5d1594a0927a1ccc745b95be257ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_941961d1a616e3878efb34ff4c1472f2fa5d1594a0927a1ccc745b95be257ca2->enter($__internal_941961d1a616e3878efb34ff4c1472f2fa5d1594a0927a1ccc745b95be257ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_96da922701331e0c0941334033ee3273c36d3b7dda07cc87d3a4e1bf17ffc021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96da922701331e0c0941334033ee3273c36d3b7dda07cc87d3a4e1bf17ffc021->enter($__internal_96da922701331e0c0941334033ee3273c36d3b7dda07cc87d3a4e1bf17ffc021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_941961d1a616e3878efb34ff4c1472f2fa5d1594a0927a1ccc745b95be257ca2->leave($__internal_941961d1a616e3878efb34ff4c1472f2fa5d1594a0927a1ccc745b95be257ca2_prof);

        
        $__internal_96da922701331e0c0941334033ee3273c36d3b7dda07cc87d3a4e1bf17ffc021->leave($__internal_96da922701331e0c0941334033ee3273c36d3b7dda07cc87d3a4e1bf17ffc021_prof);

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
