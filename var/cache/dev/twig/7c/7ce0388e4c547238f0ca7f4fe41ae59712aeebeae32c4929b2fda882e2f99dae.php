<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_f58dc2abed82f64fd0f5a4bbac2b15c05e5295b003a0d5286aed617ba1c3193c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58dc2abed82f64fd0f5a4bbac2b15c05e5295b003a0d5286aed617ba1c3193c->enter($__internal_f58dc2abed82f64fd0f5a4bbac2b15c05e5295b003a0d5286aed617ba1c3193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_6419237414efffd935a43d4320eb095cbf16422ad94d3d2a9b23f02665cc7e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6419237414efffd935a43d4320eb095cbf16422ad94d3d2a9b23f02665cc7e0f->enter($__internal_6419237414efffd935a43d4320eb095cbf16422ad94d3d2a9b23f02665cc7e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f58dc2abed82f64fd0f5a4bbac2b15c05e5295b003a0d5286aed617ba1c3193c->leave($__internal_f58dc2abed82f64fd0f5a4bbac2b15c05e5295b003a0d5286aed617ba1c3193c_prof);

        
        $__internal_6419237414efffd935a43d4320eb095cbf16422ad94d3d2a9b23f02665cc7e0f->leave($__internal_6419237414efffd935a43d4320eb095cbf16422ad94d3d2a9b23f02665cc7e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
