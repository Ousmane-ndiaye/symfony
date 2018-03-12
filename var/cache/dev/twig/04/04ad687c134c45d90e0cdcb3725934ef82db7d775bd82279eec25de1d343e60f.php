<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_6a6736952e6cf39c0b694307397e2b3679fa928287f520bf781802fa4c420711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6736952e6cf39c0b694307397e2b3679fa928287f520bf781802fa4c420711->enter($__internal_6a6736952e6cf39c0b694307397e2b3679fa928287f520bf781802fa4c420711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3d91ee53159b64b55b5d8980f15f68757d7b179d2dfdc68f81512c02ee0cc0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d91ee53159b64b55b5d8980f15f68757d7b179d2dfdc68f81512c02ee0cc0e4->enter($__internal_3d91ee53159b64b55b5d8980f15f68757d7b179d2dfdc68f81512c02ee0cc0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6a6736952e6cf39c0b694307397e2b3679fa928287f520bf781802fa4c420711->leave($__internal_6a6736952e6cf39c0b694307397e2b3679fa928287f520bf781802fa4c420711_prof);

        
        $__internal_3d91ee53159b64b55b5d8980f15f68757d7b179d2dfdc68f81512c02ee0cc0e4->leave($__internal_3d91ee53159b64b55b5d8980f15f68757d7b179d2dfdc68f81512c02ee0cc0e4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
