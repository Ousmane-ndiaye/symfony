<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ad145957b7e6009e00103b81e21719a83e9b6329a9c19ddc328ea13bcea926d4 extends Twig_Template
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
        $__internal_a4b3d94f62269ad175a14a1ba622c806c2a8e8878260a49b1b0f97e6c9d1dfb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b3d94f62269ad175a14a1ba622c806c2a8e8878260a49b1b0f97e6c9d1dfb7->enter($__internal_a4b3d94f62269ad175a14a1ba622c806c2a8e8878260a49b1b0f97e6c9d1dfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_65817d9e927e7b4ce50f3b6f60d8463b040031b31fdc3b3f97e01eb5c8633704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65817d9e927e7b4ce50f3b6f60d8463b040031b31fdc3b3f97e01eb5c8633704->enter($__internal_65817d9e927e7b4ce50f3b6f60d8463b040031b31fdc3b3f97e01eb5c8633704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a4b3d94f62269ad175a14a1ba622c806c2a8e8878260a49b1b0f97e6c9d1dfb7->leave($__internal_a4b3d94f62269ad175a14a1ba622c806c2a8e8878260a49b1b0f97e6c9d1dfb7_prof);

        
        $__internal_65817d9e927e7b4ce50f3b6f60d8463b040031b31fdc3b3f97e01eb5c8633704->leave($__internal_65817d9e927e7b4ce50f3b6f60d8463b040031b31fdc3b3f97e01eb5c8633704_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
