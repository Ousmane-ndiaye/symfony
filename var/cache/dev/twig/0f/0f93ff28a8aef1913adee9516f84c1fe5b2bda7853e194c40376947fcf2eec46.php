<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88fa095271f0b72c40f5caa69b7b8f0d25ed25e6f42e1cf82ff1111deec3979 extends Twig_Template
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
        $__internal_06347d62f788e630d6afd112e59f1bf5741f6c9aa3b3967671e340243a3ed304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06347d62f788e630d6afd112e59f1bf5741f6c9aa3b3967671e340243a3ed304->enter($__internal_06347d62f788e630d6afd112e59f1bf5741f6c9aa3b3967671e340243a3ed304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_018c35a96e2a336f0f92b6f93c3fde6f76bfd569067b5b2cef4c0f6292fe0dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018c35a96e2a336f0f92b6f93c3fde6f76bfd569067b5b2cef4c0f6292fe0dc7->enter($__internal_018c35a96e2a336f0f92b6f93c3fde6f76bfd569067b5b2cef4c0f6292fe0dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_06347d62f788e630d6afd112e59f1bf5741f6c9aa3b3967671e340243a3ed304->leave($__internal_06347d62f788e630d6afd112e59f1bf5741f6c9aa3b3967671e340243a3ed304_prof);

        
        $__internal_018c35a96e2a336f0f92b6f93c3fde6f76bfd569067b5b2cef4c0f6292fe0dc7->leave($__internal_018c35a96e2a336f0f92b6f93c3fde6f76bfd569067b5b2cef4c0f6292fe0dc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
