<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a3726c8ee160b6e7e6ec19455e1b5132f877b116a8ed2a93d8875e57ccfdb0d extends Twig_Template
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
        $__internal_a75dc0846bc2b4b03781e7673ec0774c5ddf038d9d89fb909c6effc88ca9c6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a75dc0846bc2b4b03781e7673ec0774c5ddf038d9d89fb909c6effc88ca9c6a3->enter($__internal_a75dc0846bc2b4b03781e7673ec0774c5ddf038d9d89fb909c6effc88ca9c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ebc1e487b9d611f6bac0653760011437b801890c3ee51aa73df957d447fdcb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc1e487b9d611f6bac0653760011437b801890c3ee51aa73df957d447fdcb35->enter($__internal_ebc1e487b9d611f6bac0653760011437b801890c3ee51aa73df957d447fdcb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a75dc0846bc2b4b03781e7673ec0774c5ddf038d9d89fb909c6effc88ca9c6a3->leave($__internal_a75dc0846bc2b4b03781e7673ec0774c5ddf038d9d89fb909c6effc88ca9c6a3_prof);

        
        $__internal_ebc1e487b9d611f6bac0653760011437b801890c3ee51aa73df957d447fdcb35->leave($__internal_ebc1e487b9d611f6bac0653760011437b801890c3ee51aa73df957d447fdcb35_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
