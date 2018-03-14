<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_10934cc73416989401d10f448d1c3c6d07e0d66002cc758d128c203241a349f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10934cc73416989401d10f448d1c3c6d07e0d66002cc758d128c203241a349f3->enter($__internal_10934cc73416989401d10f448d1c3c6d07e0d66002cc758d128c203241a349f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bfe0f4225e8669dcb15feddce3d8f0f5e0f82022f0df7c4fa11e85644eed4369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfe0f4225e8669dcb15feddce3d8f0f5e0f82022f0df7c4fa11e85644eed4369->enter($__internal_bfe0f4225e8669dcb15feddce3d8f0f5e0f82022f0df7c4fa11e85644eed4369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_10934cc73416989401d10f448d1c3c6d07e0d66002cc758d128c203241a349f3->leave($__internal_10934cc73416989401d10f448d1c3c6d07e0d66002cc758d128c203241a349f3_prof);

        
        $__internal_bfe0f4225e8669dcb15feddce3d8f0f5e0f82022f0df7c4fa11e85644eed4369->leave($__internal_bfe0f4225e8669dcb15feddce3d8f0f5e0f82022f0df7c4fa11e85644eed4369_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
