<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9906a7bb6d4587fc2ea785007594fb1945e70c549a8eb237652fa8e706c8c68 extends Twig_Template
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
        $__internal_b50476a84446cd65e4afa1c697627b1b68de01f42c13af60b1e45f685224921b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50476a84446cd65e4afa1c697627b1b68de01f42c13af60b1e45f685224921b->enter($__internal_b50476a84446cd65e4afa1c697627b1b68de01f42c13af60b1e45f685224921b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ad3d2d7bae9871a2980c8f7f3d69b7dea910b45af26e7b1e1881319cab177ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3d2d7bae9871a2980c8f7f3d69b7dea910b45af26e7b1e1881319cab177ead->enter($__internal_ad3d2d7bae9871a2980c8f7f3d69b7dea910b45af26e7b1e1881319cab177ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b50476a84446cd65e4afa1c697627b1b68de01f42c13af60b1e45f685224921b->leave($__internal_b50476a84446cd65e4afa1c697627b1b68de01f42c13af60b1e45f685224921b_prof);

        
        $__internal_ad3d2d7bae9871a2980c8f7f3d69b7dea910b45af26e7b1e1881319cab177ead->leave($__internal_ad3d2d7bae9871a2980c8f7f3d69b7dea910b45af26e7b1e1881319cab177ead_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
