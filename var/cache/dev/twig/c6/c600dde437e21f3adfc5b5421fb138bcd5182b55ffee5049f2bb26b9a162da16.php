<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_141925000a888e5cfa79df6784bb5ee3b95604b35c13de4ee890d51e0c664a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141925000a888e5cfa79df6784bb5ee3b95604b35c13de4ee890d51e0c664a9d->enter($__internal_141925000a888e5cfa79df6784bb5ee3b95604b35c13de4ee890d51e0c664a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b200b79939f206e0de4c77cee829e2bb073f9111f6713b82a42a8ea99681c8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b200b79939f206e0de4c77cee829e2bb073f9111f6713b82a42a8ea99681c8f3->enter($__internal_b200b79939f206e0de4c77cee829e2bb073f9111f6713b82a42a8ea99681c8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_141925000a888e5cfa79df6784bb5ee3b95604b35c13de4ee890d51e0c664a9d->leave($__internal_141925000a888e5cfa79df6784bb5ee3b95604b35c13de4ee890d51e0c664a9d_prof);

        
        $__internal_b200b79939f206e0de4c77cee829e2bb073f9111f6713b82a42a8ea99681c8f3->leave($__internal_b200b79939f206e0de4c77cee829e2bb073f9111f6713b82a42a8ea99681c8f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
