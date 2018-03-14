<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_27f084419f665ebf79b79015834bb4c6b08d05e3527f3297d8f71aa08556b16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27f084419f665ebf79b79015834bb4c6b08d05e3527f3297d8f71aa08556b16f->enter($__internal_27f084419f665ebf79b79015834bb4c6b08d05e3527f3297d8f71aa08556b16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_3cecfbeb7a45176563700b5f4e9cf574b2ed9d9c235b8f3334b1574b42d55565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cecfbeb7a45176563700b5f4e9cf574b2ed9d9c235b8f3334b1574b42d55565->enter($__internal_3cecfbeb7a45176563700b5f4e9cf574b2ed9d9c235b8f3334b1574b42d55565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_27f084419f665ebf79b79015834bb4c6b08d05e3527f3297d8f71aa08556b16f->leave($__internal_27f084419f665ebf79b79015834bb4c6b08d05e3527f3297d8f71aa08556b16f_prof);

        
        $__internal_3cecfbeb7a45176563700b5f4e9cf574b2ed9d9c235b8f3334b1574b42d55565->leave($__internal_3cecfbeb7a45176563700b5f4e9cf574b2ed9d9c235b8f3334b1574b42d55565_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
