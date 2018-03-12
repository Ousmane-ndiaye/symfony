<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cbe54f18bcd2ec7904b5046b285c12f82dcedd8c9426bd5b09c59d5318f0d1c extends Twig_Template
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
        $__internal_c420f773e0acd2dec0dbf5345d7536788a28ab197dc2f44f1205041800bfb7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c420f773e0acd2dec0dbf5345d7536788a28ab197dc2f44f1205041800bfb7fc->enter($__internal_c420f773e0acd2dec0dbf5345d7536788a28ab197dc2f44f1205041800bfb7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3665067a21f942b6640e947a2a445a429e960c25ed9b5785bee3e0d7399ac5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3665067a21f942b6640e947a2a445a429e960c25ed9b5785bee3e0d7399ac5b4->enter($__internal_3665067a21f942b6640e947a2a445a429e960c25ed9b5785bee3e0d7399ac5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c420f773e0acd2dec0dbf5345d7536788a28ab197dc2f44f1205041800bfb7fc->leave($__internal_c420f773e0acd2dec0dbf5345d7536788a28ab197dc2f44f1205041800bfb7fc_prof);

        
        $__internal_3665067a21f942b6640e947a2a445a429e960c25ed9b5785bee3e0d7399ac5b4->leave($__internal_3665067a21f942b6640e947a2a445a429e960c25ed9b5785bee3e0d7399ac5b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
