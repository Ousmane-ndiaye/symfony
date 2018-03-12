<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_f6fa3f3a6f1a95e2edd8ab6b9ca43e49d68270594f8fac94d353b786f5a06e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6fa3f3a6f1a95e2edd8ab6b9ca43e49d68270594f8fac94d353b786f5a06e4c->enter($__internal_f6fa3f3a6f1a95e2edd8ab6b9ca43e49d68270594f8fac94d353b786f5a06e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_a55145bab518bc51bfe46c2339ea5f20f104cd41c67ec486b1827eb59ebdd1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55145bab518bc51bfe46c2339ea5f20f104cd41c67ec486b1827eb59ebdd1f7->enter($__internal_a55145bab518bc51bfe46c2339ea5f20f104cd41c67ec486b1827eb59ebdd1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f6fa3f3a6f1a95e2edd8ab6b9ca43e49d68270594f8fac94d353b786f5a06e4c->leave($__internal_f6fa3f3a6f1a95e2edd8ab6b9ca43e49d68270594f8fac94d353b786f5a06e4c_prof);

        
        $__internal_a55145bab518bc51bfe46c2339ea5f20f104cd41c67ec486b1827eb59ebdd1f7->leave($__internal_a55145bab518bc51bfe46c2339ea5f20f104cd41c67ec486b1827eb59ebdd1f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
