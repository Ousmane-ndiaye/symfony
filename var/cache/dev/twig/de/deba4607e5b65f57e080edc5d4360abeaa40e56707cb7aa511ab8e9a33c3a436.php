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
        $__internal_d13c3238ddeef665b7eb3c8cbb0f656ce1a8087f8ef9d635f58874ba679ae4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d13c3238ddeef665b7eb3c8cbb0f656ce1a8087f8ef9d635f58874ba679ae4db->enter($__internal_d13c3238ddeef665b7eb3c8cbb0f656ce1a8087f8ef9d635f58874ba679ae4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_be0ae174d1ab38bb7ce94d60ba3d0c6e8e0693b3d89fac60f7ebef83d852ed69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0ae174d1ab38bb7ce94d60ba3d0c6e8e0693b3d89fac60f7ebef83d852ed69->enter($__internal_be0ae174d1ab38bb7ce94d60ba3d0c6e8e0693b3d89fac60f7ebef83d852ed69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_d13c3238ddeef665b7eb3c8cbb0f656ce1a8087f8ef9d635f58874ba679ae4db->leave($__internal_d13c3238ddeef665b7eb3c8cbb0f656ce1a8087f8ef9d635f58874ba679ae4db_prof);

        
        $__internal_be0ae174d1ab38bb7ce94d60ba3d0c6e8e0693b3d89fac60f7ebef83d852ed69->leave($__internal_be0ae174d1ab38bb7ce94d60ba3d0c6e8e0693b3d89fac60f7ebef83d852ed69_prof);

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
