<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_278c9e5fe3f1fd240302d22f4b30dd92921ca71c3d42a6d7f07d8e7663be153b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278c9e5fe3f1fd240302d22f4b30dd92921ca71c3d42a6d7f07d8e7663be153b->enter($__internal_278c9e5fe3f1fd240302d22f4b30dd92921ca71c3d42a6d7f07d8e7663be153b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_85c5e33aa48fc21aa7d47885bea9dad64b722eec4d8f0af2cf8c3e6754237246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c5e33aa48fc21aa7d47885bea9dad64b722eec4d8f0af2cf8c3e6754237246->enter($__internal_85c5e33aa48fc21aa7d47885bea9dad64b722eec4d8f0af2cf8c3e6754237246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_278c9e5fe3f1fd240302d22f4b30dd92921ca71c3d42a6d7f07d8e7663be153b->leave($__internal_278c9e5fe3f1fd240302d22f4b30dd92921ca71c3d42a6d7f07d8e7663be153b_prof);

        
        $__internal_85c5e33aa48fc21aa7d47885bea9dad64b722eec4d8f0af2cf8c3e6754237246->leave($__internal_85c5e33aa48fc21aa7d47885bea9dad64b722eec4d8f0af2cf8c3e6754237246_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
