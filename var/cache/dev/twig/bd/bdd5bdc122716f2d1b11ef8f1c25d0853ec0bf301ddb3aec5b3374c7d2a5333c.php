<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_8f618eb732faaa460a1596955ddfdde75ef2e6cb91459502a59cf64e6e06770e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f618eb732faaa460a1596955ddfdde75ef2e6cb91459502a59cf64e6e06770e->enter($__internal_8f618eb732faaa460a1596955ddfdde75ef2e6cb91459502a59cf64e6e06770e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_53c0fea33687cb097709fd591341f89c1e1bc3b75109e42cc3af5bb26d616294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c0fea33687cb097709fd591341f89c1e1bc3b75109e42cc3af5bb26d616294->enter($__internal_53c0fea33687cb097709fd591341f89c1e1bc3b75109e42cc3af5bb26d616294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8f618eb732faaa460a1596955ddfdde75ef2e6cb91459502a59cf64e6e06770e->leave($__internal_8f618eb732faaa460a1596955ddfdde75ef2e6cb91459502a59cf64e6e06770e_prof);

        
        $__internal_53c0fea33687cb097709fd591341f89c1e1bc3b75109e42cc3af5bb26d616294->leave($__internal_53c0fea33687cb097709fd591341f89c1e1bc3b75109e42cc3af5bb26d616294_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
