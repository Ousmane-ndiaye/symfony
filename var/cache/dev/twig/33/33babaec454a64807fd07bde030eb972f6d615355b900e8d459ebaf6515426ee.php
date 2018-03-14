<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_1602cc09636e6b12c848ee820213e259c2bb6cae13e0c85a9416e132421c710e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1602cc09636e6b12c848ee820213e259c2bb6cae13e0c85a9416e132421c710e->enter($__internal_1602cc09636e6b12c848ee820213e259c2bb6cae13e0c85a9416e132421c710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2dc0a34d8daf17427d7b93d578dd2902501bd623bcf441aba386e1e0d93bb05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc0a34d8daf17427d7b93d578dd2902501bd623bcf441aba386e1e0d93bb05c->enter($__internal_2dc0a34d8daf17427d7b93d578dd2902501bd623bcf441aba386e1e0d93bb05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1602cc09636e6b12c848ee820213e259c2bb6cae13e0c85a9416e132421c710e->leave($__internal_1602cc09636e6b12c848ee820213e259c2bb6cae13e0c85a9416e132421c710e_prof);

        
        $__internal_2dc0a34d8daf17427d7b93d578dd2902501bd623bcf441aba386e1e0d93bb05c->leave($__internal_2dc0a34d8daf17427d7b93d578dd2902501bd623bcf441aba386e1e0d93bb05c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
