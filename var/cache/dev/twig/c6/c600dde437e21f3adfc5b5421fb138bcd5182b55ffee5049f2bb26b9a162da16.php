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
        $__internal_29c5547952c8d5f6ff7305d0e2e642c13bffb5e50dd82774a9ee1b2d00d6ae96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c5547952c8d5f6ff7305d0e2e642c13bffb5e50dd82774a9ee1b2d00d6ae96->enter($__internal_29c5547952c8d5f6ff7305d0e2e642c13bffb5e50dd82774a9ee1b2d00d6ae96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e7778b1ca65e70432e156cc76ecb74806164aca392ca2afe29a0da9c148e1305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7778b1ca65e70432e156cc76ecb74806164aca392ca2afe29a0da9c148e1305->enter($__internal_e7778b1ca65e70432e156cc76ecb74806164aca392ca2afe29a0da9c148e1305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_29c5547952c8d5f6ff7305d0e2e642c13bffb5e50dd82774a9ee1b2d00d6ae96->leave($__internal_29c5547952c8d5f6ff7305d0e2e642c13bffb5e50dd82774a9ee1b2d00d6ae96_prof);

        
        $__internal_e7778b1ca65e70432e156cc76ecb74806164aca392ca2afe29a0da9c148e1305->leave($__internal_e7778b1ca65e70432e156cc76ecb74806164aca392ca2afe29a0da9c148e1305_prof);

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
