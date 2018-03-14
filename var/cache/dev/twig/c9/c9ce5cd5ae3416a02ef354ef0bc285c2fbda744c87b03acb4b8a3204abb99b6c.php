<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_0a31719019ee6450d3b8dc214d81b6351ba71d151373485a4dcaf45ee2a47a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a31719019ee6450d3b8dc214d81b6351ba71d151373485a4dcaf45ee2a47a98->enter($__internal_0a31719019ee6450d3b8dc214d81b6351ba71d151373485a4dcaf45ee2a47a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cd73ca2ded951756a683635bd0cf84e1a0a62342ff72a69861cfc5255eb0bb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd73ca2ded951756a683635bd0cf84e1a0a62342ff72a69861cfc5255eb0bb7a->enter($__internal_cd73ca2ded951756a683635bd0cf84e1a0a62342ff72a69861cfc5255eb0bb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0a31719019ee6450d3b8dc214d81b6351ba71d151373485a4dcaf45ee2a47a98->leave($__internal_0a31719019ee6450d3b8dc214d81b6351ba71d151373485a4dcaf45ee2a47a98_prof);

        
        $__internal_cd73ca2ded951756a683635bd0cf84e1a0a62342ff72a69861cfc5255eb0bb7a->leave($__internal_cd73ca2ded951756a683635bd0cf84e1a0a62342ff72a69861cfc5255eb0bb7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
