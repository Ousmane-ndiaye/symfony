<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_57c180da2aa2876f04dacbe64395b69f919ebc5cf14dd7d4f9e6f75057c59c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c180da2aa2876f04dacbe64395b69f919ebc5cf14dd7d4f9e6f75057c59c06->enter($__internal_57c180da2aa2876f04dacbe64395b69f919ebc5cf14dd7d4f9e6f75057c59c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5ba4b6d15035efd7f50120b3d5a6702db9f5d77e07c9cb6132d6487cc399375f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba4b6d15035efd7f50120b3d5a6702db9f5d77e07c9cb6132d6487cc399375f->enter($__internal_5ba4b6d15035efd7f50120b3d5a6702db9f5d77e07c9cb6132d6487cc399375f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_57c180da2aa2876f04dacbe64395b69f919ebc5cf14dd7d4f9e6f75057c59c06->leave($__internal_57c180da2aa2876f04dacbe64395b69f919ebc5cf14dd7d4f9e6f75057c59c06_prof);

        
        $__internal_5ba4b6d15035efd7f50120b3d5a6702db9f5d77e07c9cb6132d6487cc399375f->leave($__internal_5ba4b6d15035efd7f50120b3d5a6702db9f5d77e07c9cb6132d6487cc399375f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
