<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_4b7a5040ab19ea60cac7adde67c6010a1bba606d27ecf96f7c6b1a4a319949b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7a5040ab19ea60cac7adde67c6010a1bba606d27ecf96f7c6b1a4a319949b5->enter($__internal_4b7a5040ab19ea60cac7adde67c6010a1bba606d27ecf96f7c6b1a4a319949b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_aeb352d438df8afd7b6f232a5d8b97161724edb3b2d32bb593e76f4ecd7bb692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb352d438df8afd7b6f232a5d8b97161724edb3b2d32bb593e76f4ecd7bb692->enter($__internal_aeb352d438df8afd7b6f232a5d8b97161724edb3b2d32bb593e76f4ecd7bb692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4b7a5040ab19ea60cac7adde67c6010a1bba606d27ecf96f7c6b1a4a319949b5->leave($__internal_4b7a5040ab19ea60cac7adde67c6010a1bba606d27ecf96f7c6b1a4a319949b5_prof);

        
        $__internal_aeb352d438df8afd7b6f232a5d8b97161724edb3b2d32bb593e76f4ecd7bb692->leave($__internal_aeb352d438df8afd7b6f232a5d8b97161724edb3b2d32bb593e76f4ecd7bb692_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
