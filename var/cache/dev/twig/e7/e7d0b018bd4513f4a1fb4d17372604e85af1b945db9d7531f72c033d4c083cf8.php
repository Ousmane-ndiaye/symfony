<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_0d58c000479c1d22e3aa995db69c3d85346aa4369542224437b7cf09ce16cace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d58c000479c1d22e3aa995db69c3d85346aa4369542224437b7cf09ce16cace->enter($__internal_0d58c000479c1d22e3aa995db69c3d85346aa4369542224437b7cf09ce16cace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_e74ed9909f3c91bb805ec23aeaacfbfe1ae8dd88814715d1ae8c34ab85bc1a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e74ed9909f3c91bb805ec23aeaacfbfe1ae8dd88814715d1ae8c34ab85bc1a88->enter($__internal_e74ed9909f3c91bb805ec23aeaacfbfe1ae8dd88814715d1ae8c34ab85bc1a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0d58c000479c1d22e3aa995db69c3d85346aa4369542224437b7cf09ce16cace->leave($__internal_0d58c000479c1d22e3aa995db69c3d85346aa4369542224437b7cf09ce16cace_prof);

        
        $__internal_e74ed9909f3c91bb805ec23aeaacfbfe1ae8dd88814715d1ae8c34ab85bc1a88->leave($__internal_e74ed9909f3c91bb805ec23aeaacfbfe1ae8dd88814715d1ae8c34ab85bc1a88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
