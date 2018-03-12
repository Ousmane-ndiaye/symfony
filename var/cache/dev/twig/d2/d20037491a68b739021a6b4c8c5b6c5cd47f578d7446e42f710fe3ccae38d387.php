<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7d9f8e8fbcea9b3c8677f32fbe40fda8a081396a22a0e80f2a6a54f024dde09 extends Twig_Template
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
        $__internal_d65521dddeffaec52b2e888ea4e81bfbc03a904528ecfac1860c2cee4137b343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65521dddeffaec52b2e888ea4e81bfbc03a904528ecfac1860c2cee4137b343->enter($__internal_d65521dddeffaec52b2e888ea4e81bfbc03a904528ecfac1860c2cee4137b343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2c0a9a5a15211fd5b8536187375d2efa3a044b61adb3f28c58ec343ebf95b42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0a9a5a15211fd5b8536187375d2efa3a044b61adb3f28c58ec343ebf95b42a->enter($__internal_2c0a9a5a15211fd5b8536187375d2efa3a044b61adb3f28c58ec343ebf95b42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d65521dddeffaec52b2e888ea4e81bfbc03a904528ecfac1860c2cee4137b343->leave($__internal_d65521dddeffaec52b2e888ea4e81bfbc03a904528ecfac1860c2cee4137b343_prof);

        
        $__internal_2c0a9a5a15211fd5b8536187375d2efa3a044b61adb3f28c58ec343ebf95b42a->leave($__internal_2c0a9a5a15211fd5b8536187375d2efa3a044b61adb3f28c58ec343ebf95b42a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
