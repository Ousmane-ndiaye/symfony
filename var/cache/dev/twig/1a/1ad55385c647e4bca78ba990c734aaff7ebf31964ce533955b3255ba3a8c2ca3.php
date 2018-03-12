<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_45325cee6d8e2b684302b81f94ea5d5b217e9c7aa9f46b87a48c2e02d776d7e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45325cee6d8e2b684302b81f94ea5d5b217e9c7aa9f46b87a48c2e02d776d7e5->enter($__internal_45325cee6d8e2b684302b81f94ea5d5b217e9c7aa9f46b87a48c2e02d776d7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_53726258e5508925dfe95291669847bb579e5ea5ab7aadb934824a7eb4426f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53726258e5508925dfe95291669847bb579e5ea5ab7aadb934824a7eb4426f52->enter($__internal_53726258e5508925dfe95291669847bb579e5ea5ab7aadb934824a7eb4426f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45325cee6d8e2b684302b81f94ea5d5b217e9c7aa9f46b87a48c2e02d776d7e5->leave($__internal_45325cee6d8e2b684302b81f94ea5d5b217e9c7aa9f46b87a48c2e02d776d7e5_prof);

        
        $__internal_53726258e5508925dfe95291669847bb579e5ea5ab7aadb934824a7eb4426f52->leave($__internal_53726258e5508925dfe95291669847bb579e5ea5ab7aadb934824a7eb4426f52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
