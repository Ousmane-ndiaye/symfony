<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_8af119eb6f6da9586c752af9956859f9440a144e166b39fbfdc14dcedaba124c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af119eb6f6da9586c752af9956859f9440a144e166b39fbfdc14dcedaba124c->enter($__internal_8af119eb6f6da9586c752af9956859f9440a144e166b39fbfdc14dcedaba124c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ca9986fd18195429d9e70a1c31109de51c7a25c8f6dce1dac25ecd0f3ab6459c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9986fd18195429d9e70a1c31109de51c7a25c8f6dce1dac25ecd0f3ab6459c->enter($__internal_ca9986fd18195429d9e70a1c31109de51c7a25c8f6dce1dac25ecd0f3ab6459c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8af119eb6f6da9586c752af9956859f9440a144e166b39fbfdc14dcedaba124c->leave($__internal_8af119eb6f6da9586c752af9956859f9440a144e166b39fbfdc14dcedaba124c_prof);

        
        $__internal_ca9986fd18195429d9e70a1c31109de51c7a25c8f6dce1dac25ecd0f3ab6459c->leave($__internal_ca9986fd18195429d9e70a1c31109de51c7a25c8f6dce1dac25ecd0f3ab6459c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
