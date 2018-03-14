<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6c1891cfa0df1ad9c01e564727ba2e8328fa05bf37295d26f76c26e49bb91e73 extends Twig_Template
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
        $__internal_4634462748d8096566513c45007b569bff1c2b36fe73b9c70335b52260c36d83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4634462748d8096566513c45007b569bff1c2b36fe73b9c70335b52260c36d83->enter($__internal_4634462748d8096566513c45007b569bff1c2b36fe73b9c70335b52260c36d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_33e8637a86704cd9c0557c43c959554ac0416a3bbf197da3abb30da2a9cf2970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33e8637a86704cd9c0557c43c959554ac0416a3bbf197da3abb30da2a9cf2970->enter($__internal_33e8637a86704cd9c0557c43c959554ac0416a3bbf197da3abb30da2a9cf2970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4634462748d8096566513c45007b569bff1c2b36fe73b9c70335b52260c36d83->leave($__internal_4634462748d8096566513c45007b569bff1c2b36fe73b9c70335b52260c36d83_prof);

        
        $__internal_33e8637a86704cd9c0557c43c959554ac0416a3bbf197da3abb30da2a9cf2970->leave($__internal_33e8637a86704cd9c0557c43c959554ac0416a3bbf197da3abb30da2a9cf2970_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
