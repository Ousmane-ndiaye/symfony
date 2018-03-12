<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_d2095d11826d37c3121ffd9a219f2ac6e50cb5378c5f780c22d727359e534871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2095d11826d37c3121ffd9a219f2ac6e50cb5378c5f780c22d727359e534871->enter($__internal_d2095d11826d37c3121ffd9a219f2ac6e50cb5378c5f780c22d727359e534871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9bb5f743c14a637a32deb215b711571b846137a09b4d4ac4a516ad749fcbf4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb5f743c14a637a32deb215b711571b846137a09b4d4ac4a516ad749fcbf4cb->enter($__internal_9bb5f743c14a637a32deb215b711571b846137a09b4d4ac4a516ad749fcbf4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d2095d11826d37c3121ffd9a219f2ac6e50cb5378c5f780c22d727359e534871->leave($__internal_d2095d11826d37c3121ffd9a219f2ac6e50cb5378c5f780c22d727359e534871_prof);

        
        $__internal_9bb5f743c14a637a32deb215b711571b846137a09b4d4ac4a516ad749fcbf4cb->leave($__internal_9bb5f743c14a637a32deb215b711571b846137a09b4d4ac4a516ad749fcbf4cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
