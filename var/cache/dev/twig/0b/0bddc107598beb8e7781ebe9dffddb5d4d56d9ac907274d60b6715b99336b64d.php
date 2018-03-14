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
        $__internal_753fdb11bb05d0a2f28a91d33676f5a588cc845b7e1af1db8069a9493236010a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753fdb11bb05d0a2f28a91d33676f5a588cc845b7e1af1db8069a9493236010a->enter($__internal_753fdb11bb05d0a2f28a91d33676f5a588cc845b7e1af1db8069a9493236010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ee6ef4d1a6d42abf76717c279cd6f864dee8558daffd82e391b89cf3c21bbb15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6ef4d1a6d42abf76717c279cd6f864dee8558daffd82e391b89cf3c21bbb15->enter($__internal_ee6ef4d1a6d42abf76717c279cd6f864dee8558daffd82e391b89cf3c21bbb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_753fdb11bb05d0a2f28a91d33676f5a588cc845b7e1af1db8069a9493236010a->leave($__internal_753fdb11bb05d0a2f28a91d33676f5a588cc845b7e1af1db8069a9493236010a_prof);

        
        $__internal_ee6ef4d1a6d42abf76717c279cd6f864dee8558daffd82e391b89cf3c21bbb15->leave($__internal_ee6ef4d1a6d42abf76717c279cd6f864dee8558daffd82e391b89cf3c21bbb15_prof);

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
