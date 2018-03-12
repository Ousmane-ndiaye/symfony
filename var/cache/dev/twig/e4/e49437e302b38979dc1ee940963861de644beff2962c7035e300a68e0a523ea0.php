<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45bf5c7d21036b1fd2c456510a44c89889dbb06d472826a666f9502bdc6ffb24 extends Twig_Template
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
        $__internal_9d270211838cc927caef18cfff0b59f6a1206563e7a33f25f2acea8296daee56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d270211838cc927caef18cfff0b59f6a1206563e7a33f25f2acea8296daee56->enter($__internal_9d270211838cc927caef18cfff0b59f6a1206563e7a33f25f2acea8296daee56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_c492afec95994f9322d476ca8bf68a435b0a21065d2708aefe7594592623d1ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c492afec95994f9322d476ca8bf68a435b0a21065d2708aefe7594592623d1ba->enter($__internal_c492afec95994f9322d476ca8bf68a435b0a21065d2708aefe7594592623d1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9d270211838cc927caef18cfff0b59f6a1206563e7a33f25f2acea8296daee56->leave($__internal_9d270211838cc927caef18cfff0b59f6a1206563e7a33f25f2acea8296daee56_prof);

        
        $__internal_c492afec95994f9322d476ca8bf68a435b0a21065d2708aefe7594592623d1ba->leave($__internal_c492afec95994f9322d476ca8bf68a435b0a21065d2708aefe7594592623d1ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
