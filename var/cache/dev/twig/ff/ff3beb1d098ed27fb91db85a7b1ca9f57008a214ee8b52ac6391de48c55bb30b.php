<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_dc0710f2bbcfb65e0e6564a97ac4b3a3cc0e5032fb9c055bbcfb22337708b5b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0710f2bbcfb65e0e6564a97ac4b3a3cc0e5032fb9c055bbcfb22337708b5b7->enter($__internal_dc0710f2bbcfb65e0e6564a97ac4b3a3cc0e5032fb9c055bbcfb22337708b5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c086f075d30a055dd8000349c18f4c52a5f9851b66a1014288dfb2b0fd64ca5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c086f075d30a055dd8000349c18f4c52a5f9851b66a1014288dfb2b0fd64ca5e->enter($__internal_c086f075d30a055dd8000349c18f4c52a5f9851b66a1014288dfb2b0fd64ca5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dc0710f2bbcfb65e0e6564a97ac4b3a3cc0e5032fb9c055bbcfb22337708b5b7->leave($__internal_dc0710f2bbcfb65e0e6564a97ac4b3a3cc0e5032fb9c055bbcfb22337708b5b7_prof);

        
        $__internal_c086f075d30a055dd8000349c18f4c52a5f9851b66a1014288dfb2b0fd64ca5e->leave($__internal_c086f075d30a055dd8000349c18f4c52a5f9851b66a1014288dfb2b0fd64ca5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
