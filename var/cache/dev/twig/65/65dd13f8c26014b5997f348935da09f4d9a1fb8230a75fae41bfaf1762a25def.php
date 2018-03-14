<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c1a87904b4fba1800c6f0240b0ce2678c5a771c0de4fc173729bd5d5f9df1f11 extends Twig_Template
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
        $__internal_838f4e996f8b553b109ac82139e591c3c49f247676210902baed5763f3105a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_838f4e996f8b553b109ac82139e591c3c49f247676210902baed5763f3105a07->enter($__internal_838f4e996f8b553b109ac82139e591c3c49f247676210902baed5763f3105a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_3898c0a4a107ae34717ca4577857a51caf940474e8be26cce5ec1b61b7bca98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3898c0a4a107ae34717ca4577857a51caf940474e8be26cce5ec1b61b7bca98c->enter($__internal_3898c0a4a107ae34717ca4577857a51caf940474e8be26cce5ec1b61b7bca98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_838f4e996f8b553b109ac82139e591c3c49f247676210902baed5763f3105a07->leave($__internal_838f4e996f8b553b109ac82139e591c3c49f247676210902baed5763f3105a07_prof);

        
        $__internal_3898c0a4a107ae34717ca4577857a51caf940474e8be26cce5ec1b61b7bca98c->leave($__internal_3898c0a4a107ae34717ca4577857a51caf940474e8be26cce5ec1b61b7bca98c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
