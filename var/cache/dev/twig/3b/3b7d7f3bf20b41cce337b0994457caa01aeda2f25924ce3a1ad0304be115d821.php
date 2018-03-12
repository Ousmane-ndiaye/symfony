<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_39b98862ed2f148253dfb7664f926565e1e2c93624b101e9dacf4f2fabc59cc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b98862ed2f148253dfb7664f926565e1e2c93624b101e9dacf4f2fabc59cc1->enter($__internal_39b98862ed2f148253dfb7664f926565e1e2c93624b101e9dacf4f2fabc59cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_fca6f69359e4efb1ec5d46e834ee7ffd00f82fdd64d969b73c48ff1a612fcc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca6f69359e4efb1ec5d46e834ee7ffd00f82fdd64d969b73c48ff1a612fcc70->enter($__internal_fca6f69359e4efb1ec5d46e834ee7ffd00f82fdd64d969b73c48ff1a612fcc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_39b98862ed2f148253dfb7664f926565e1e2c93624b101e9dacf4f2fabc59cc1->leave($__internal_39b98862ed2f148253dfb7664f926565e1e2c93624b101e9dacf4f2fabc59cc1_prof);

        
        $__internal_fca6f69359e4efb1ec5d46e834ee7ffd00f82fdd64d969b73c48ff1a612fcc70->leave($__internal_fca6f69359e4efb1ec5d46e834ee7ffd00f82fdd64d969b73c48ff1a612fcc70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
