<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_84bd0fd7f1685476be8ccc3d0dc3b219580bcefa04b2229d3851db9fe5e26578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bd0fd7f1685476be8ccc3d0dc3b219580bcefa04b2229d3851db9fe5e26578->enter($__internal_84bd0fd7f1685476be8ccc3d0dc3b219580bcefa04b2229d3851db9fe5e26578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_984d19440e0480568f049b1ad12003b6d166e9dcae501d10b48c7c42e27346c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_984d19440e0480568f049b1ad12003b6d166e9dcae501d10b48c7c42e27346c1->enter($__internal_984d19440e0480568f049b1ad12003b6d166e9dcae501d10b48c7c42e27346c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_84bd0fd7f1685476be8ccc3d0dc3b219580bcefa04b2229d3851db9fe5e26578->leave($__internal_84bd0fd7f1685476be8ccc3d0dc3b219580bcefa04b2229d3851db9fe5e26578_prof);

        
        $__internal_984d19440e0480568f049b1ad12003b6d166e9dcae501d10b48c7c42e27346c1->leave($__internal_984d19440e0480568f049b1ad12003b6d166e9dcae501d10b48c7c42e27346c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
