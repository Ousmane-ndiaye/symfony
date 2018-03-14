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
        $__internal_785f881bc8a43e0ea8ad92c5086c81737d059e5b5a51201c1bb372f127ef054c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785f881bc8a43e0ea8ad92c5086c81737d059e5b5a51201c1bb372f127ef054c->enter($__internal_785f881bc8a43e0ea8ad92c5086c81737d059e5b5a51201c1bb372f127ef054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_6824a774d1e12575e5867557626a2dc6f66630c2e656d13906e03a9555c5109f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6824a774d1e12575e5867557626a2dc6f66630c2e656d13906e03a9555c5109f->enter($__internal_6824a774d1e12575e5867557626a2dc6f66630c2e656d13906e03a9555c5109f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_785f881bc8a43e0ea8ad92c5086c81737d059e5b5a51201c1bb372f127ef054c->leave($__internal_785f881bc8a43e0ea8ad92c5086c81737d059e5b5a51201c1bb372f127ef054c_prof);

        
        $__internal_6824a774d1e12575e5867557626a2dc6f66630c2e656d13906e03a9555c5109f->leave($__internal_6824a774d1e12575e5867557626a2dc6f66630c2e656d13906e03a9555c5109f_prof);

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
