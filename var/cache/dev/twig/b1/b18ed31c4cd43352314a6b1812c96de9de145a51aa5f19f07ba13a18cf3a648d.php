<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_ac4f7aa752af08359da037a8713692bd744663fdb40004b713074bec99fbddae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac4f7aa752af08359da037a8713692bd744663fdb40004b713074bec99fbddae->enter($__internal_ac4f7aa752af08359da037a8713692bd744663fdb40004b713074bec99fbddae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ececb89b137f7a185e9053d9caffe100a415595f94a029d57a4daf4bab7870c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ececb89b137f7a185e9053d9caffe100a415595f94a029d57a4daf4bab7870c5->enter($__internal_ececb89b137f7a185e9053d9caffe100a415595f94a029d57a4daf4bab7870c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ac4f7aa752af08359da037a8713692bd744663fdb40004b713074bec99fbddae->leave($__internal_ac4f7aa752af08359da037a8713692bd744663fdb40004b713074bec99fbddae_prof);

        
        $__internal_ececb89b137f7a185e9053d9caffe100a415595f94a029d57a4daf4bab7870c5->leave($__internal_ececb89b137f7a185e9053d9caffe100a415595f94a029d57a4daf4bab7870c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
