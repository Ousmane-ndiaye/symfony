<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_9d88621f157963400a6e2625afbe21073bba5829283fb5770b3e18a5511485ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d88621f157963400a6e2625afbe21073bba5829283fb5770b3e18a5511485ff->enter($__internal_9d88621f157963400a6e2625afbe21073bba5829283fb5770b3e18a5511485ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ea616b57f6555a29b58c386fada59862c7d2e8c65b70af19148259ae3602b26f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea616b57f6555a29b58c386fada59862c7d2e8c65b70af19148259ae3602b26f->enter($__internal_ea616b57f6555a29b58c386fada59862c7d2e8c65b70af19148259ae3602b26f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9d88621f157963400a6e2625afbe21073bba5829283fb5770b3e18a5511485ff->leave($__internal_9d88621f157963400a6e2625afbe21073bba5829283fb5770b3e18a5511485ff_prof);

        
        $__internal_ea616b57f6555a29b58c386fada59862c7d2e8c65b70af19148259ae3602b26f->leave($__internal_ea616b57f6555a29b58c386fada59862c7d2e8c65b70af19148259ae3602b26f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
