<?php

/* SoultanaBundle:Default:index.html.twig */
class __TwigTemplate_1be5e427f2ea657c279e4e5d74f25b8c3a37842b3f25d30b1dd3ebbdd2d6a32a extends Twig_Template
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
        $__internal_7a6cba3472f89f37ebc838fede6c3f062d9f750a8dea759fe0ca174eeb46b4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a6cba3472f89f37ebc838fede6c3f062d9f750a8dea759fe0ca174eeb46b4ed->enter($__internal_7a6cba3472f89f37ebc838fede6c3f062d9f750a8dea759fe0ca174eeb46b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Default:index.html.twig"));

        $__internal_f283b1cbb94d4395b2d9e1179f5a947840c763447955798e22b469d82b005309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f283b1cbb94d4395b2d9e1179f5a947840c763447955798e22b469d82b005309->enter($__internal_f283b1cbb94d4395b2d9e1179f5a947840c763447955798e22b469d82b005309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_7a6cba3472f89f37ebc838fede6c3f062d9f750a8dea759fe0ca174eeb46b4ed->leave($__internal_7a6cba3472f89f37ebc838fede6c3f062d9f750a8dea759fe0ca174eeb46b4ed_prof);

        
        $__internal_f283b1cbb94d4395b2d9e1179f5a947840c763447955798e22b469d82b005309->leave($__internal_f283b1cbb94d4395b2d9e1179f5a947840c763447955798e22b469d82b005309_prof);

    }

    public function getTemplateName()
    {
        return "SoultanaBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "SoultanaBundle:Default:index.html.twig", "/var/www/html/soultana.sn/src/SNT/SoultanaBundle/Resources/views/Default/index.html.twig");
    }
}
