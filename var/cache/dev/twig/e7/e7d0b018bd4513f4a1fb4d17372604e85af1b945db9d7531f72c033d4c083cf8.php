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
        $__internal_0b88237096a1431eff741a928ae31f92cd2abe53b169f11fa5b73e1e8e8a7af2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b88237096a1431eff741a928ae31f92cd2abe53b169f11fa5b73e1e8e8a7af2->enter($__internal_0b88237096a1431eff741a928ae31f92cd2abe53b169f11fa5b73e1e8e8a7af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_9d8e4d0a4b8a54dfc0e5f65589c552214a76d84c44a5b666ae59507a370f34ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8e4d0a4b8a54dfc0e5f65589c552214a76d84c44a5b666ae59507a370f34ae->enter($__internal_9d8e4d0a4b8a54dfc0e5f65589c552214a76d84c44a5b666ae59507a370f34ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0b88237096a1431eff741a928ae31f92cd2abe53b169f11fa5b73e1e8e8a7af2->leave($__internal_0b88237096a1431eff741a928ae31f92cd2abe53b169f11fa5b73e1e8e8a7af2_prof);

        
        $__internal_9d8e4d0a4b8a54dfc0e5f65589c552214a76d84c44a5b666ae59507a370f34ae->leave($__internal_9d8e4d0a4b8a54dfc0e5f65589c552214a76d84c44a5b666ae59507a370f34ae_prof);

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
