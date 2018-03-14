<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_a5d8e230d581d7457cc97fe6a6b6b1bef4d665c341599f6d2861bae7a0e9be16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d8e230d581d7457cc97fe6a6b6b1bef4d665c341599f6d2861bae7a0e9be16->enter($__internal_a5d8e230d581d7457cc97fe6a6b6b1bef4d665c341599f6d2861bae7a0e9be16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_00f82cdcb37f067ba8cc36b05fc9f610810f63465ab1c8d2cbed4293e55d7f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f82cdcb37f067ba8cc36b05fc9f610810f63465ab1c8d2cbed4293e55d7f75->enter($__internal_00f82cdcb37f067ba8cc36b05fc9f610810f63465ab1c8d2cbed4293e55d7f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a5d8e230d581d7457cc97fe6a6b6b1bef4d665c341599f6d2861bae7a0e9be16->leave($__internal_a5d8e230d581d7457cc97fe6a6b6b1bef4d665c341599f6d2861bae7a0e9be16_prof);

        
        $__internal_00f82cdcb37f067ba8cc36b05fc9f610810f63465ab1c8d2cbed4293e55d7f75->leave($__internal_00f82cdcb37f067ba8cc36b05fc9f610810f63465ab1c8d2cbed4293e55d7f75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
