<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec03dc96dbfb1a26d7fd588348b8dd0968ae4e0891b641a19b68775ff46a340e extends Twig_Template
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
        $__internal_cc47473988ecce1b392a25cba640d0242ad0ac56cee84e01190c188539e6d98c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc47473988ecce1b392a25cba640d0242ad0ac56cee84e01190c188539e6d98c->enter($__internal_cc47473988ecce1b392a25cba640d0242ad0ac56cee84e01190c188539e6d98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_760d68c6cc8e1d00e8addf74aeb8e406176f5111070d0497511b08cd59766a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760d68c6cc8e1d00e8addf74aeb8e406176f5111070d0497511b08cd59766a6d->enter($__internal_760d68c6cc8e1d00e8addf74aeb8e406176f5111070d0497511b08cd59766a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cc47473988ecce1b392a25cba640d0242ad0ac56cee84e01190c188539e6d98c->leave($__internal_cc47473988ecce1b392a25cba640d0242ad0ac56cee84e01190c188539e6d98c_prof);

        
        $__internal_760d68c6cc8e1d00e8addf74aeb8e406176f5111070d0497511b08cd59766a6d->leave($__internal_760d68c6cc8e1d00e8addf74aeb8e406176f5111070d0497511b08cd59766a6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
