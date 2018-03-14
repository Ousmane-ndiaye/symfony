<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_592e8f8412ccbe3048199d3164834fc70e57b6dab8d3604c10b287881c004b04 extends Twig_Template
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
        $__internal_4dd4fd38aefc9cadaccdc9f685748df3ff3970a90e9fc226c9f5097e88c168f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd4fd38aefc9cadaccdc9f685748df3ff3970a90e9fc226c9f5097e88c168f6->enter($__internal_4dd4fd38aefc9cadaccdc9f685748df3ff3970a90e9fc226c9f5097e88c168f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a05d7ccc6e80b14d06192766fe0830a3e5c28cf43612f2c04fcb293fbbd74061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05d7ccc6e80b14d06192766fe0830a3e5c28cf43612f2c04fcb293fbbd74061->enter($__internal_a05d7ccc6e80b14d06192766fe0830a3e5c28cf43612f2c04fcb293fbbd74061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4dd4fd38aefc9cadaccdc9f685748df3ff3970a90e9fc226c9f5097e88c168f6->leave($__internal_4dd4fd38aefc9cadaccdc9f685748df3ff3970a90e9fc226c9f5097e88c168f6_prof);

        
        $__internal_a05d7ccc6e80b14d06192766fe0830a3e5c28cf43612f2c04fcb293fbbd74061->leave($__internal_a05d7ccc6e80b14d06192766fe0830a3e5c28cf43612f2c04fcb293fbbd74061_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
