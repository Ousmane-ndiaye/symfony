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
        $__internal_e3cd792ad5dd253670583f27c57ffc03e64ca3f47823f6589237513ebdc992b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3cd792ad5dd253670583f27c57ffc03e64ca3f47823f6589237513ebdc992b8->enter($__internal_e3cd792ad5dd253670583f27c57ffc03e64ca3f47823f6589237513ebdc992b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_d10928035b3823528c0ebaa4d082755af7ba2f58b4024ec576bd3e627910bc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10928035b3823528c0ebaa4d082755af7ba2f58b4024ec576bd3e627910bc10->enter($__internal_d10928035b3823528c0ebaa4d082755af7ba2f58b4024ec576bd3e627910bc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_e3cd792ad5dd253670583f27c57ffc03e64ca3f47823f6589237513ebdc992b8->leave($__internal_e3cd792ad5dd253670583f27c57ffc03e64ca3f47823f6589237513ebdc992b8_prof);

        
        $__internal_d10928035b3823528c0ebaa4d082755af7ba2f58b4024ec576bd3e627910bc10->leave($__internal_d10928035b3823528c0ebaa4d082755af7ba2f58b4024ec576bd3e627910bc10_prof);

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
