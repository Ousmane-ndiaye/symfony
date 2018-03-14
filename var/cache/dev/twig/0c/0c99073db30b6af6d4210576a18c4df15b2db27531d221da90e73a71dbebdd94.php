<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e902d0ef3781e4111162936bc22fda499b46d1e8d62a24a8a5bf7d2460b93abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e902d0ef3781e4111162936bc22fda499b46d1e8d62a24a8a5bf7d2460b93abf->enter($__internal_e902d0ef3781e4111162936bc22fda499b46d1e8d62a24a8a5bf7d2460b93abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e80bf514d09621608891c44c8fdf3ed0a42e0573309f400dd27de26825766af1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80bf514d09621608891c44c8fdf3ed0a42e0573309f400dd27de26825766af1->enter($__internal_e80bf514d09621608891c44c8fdf3ed0a42e0573309f400dd27de26825766af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e902d0ef3781e4111162936bc22fda499b46d1e8d62a24a8a5bf7d2460b93abf->leave($__internal_e902d0ef3781e4111162936bc22fda499b46d1e8d62a24a8a5bf7d2460b93abf_prof);

        
        $__internal_e80bf514d09621608891c44c8fdf3ed0a42e0573309f400dd27de26825766af1->leave($__internal_e80bf514d09621608891c44c8fdf3ed0a42e0573309f400dd27de26825766af1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4d89e99e67d0d4f9cf4f10517a6259812a0f95da87a9266a1a3e19d3dc54511 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d89e99e67d0d4f9cf4f10517a6259812a0f95da87a9266a1a3e19d3dc54511->enter($__internal_b4d89e99e67d0d4f9cf4f10517a6259812a0f95da87a9266a1a3e19d3dc54511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e3651e0618b51b1bf8e189356ae932219d03d6031dac332f23e5e78984bdf2aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3651e0618b51b1bf8e189356ae932219d03d6031dac332f23e5e78984bdf2aa->enter($__internal_e3651e0618b51b1bf8e189356ae932219d03d6031dac332f23e5e78984bdf2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e3651e0618b51b1bf8e189356ae932219d03d6031dac332f23e5e78984bdf2aa->leave($__internal_e3651e0618b51b1bf8e189356ae932219d03d6031dac332f23e5e78984bdf2aa_prof);

        
        $__internal_b4d89e99e67d0d4f9cf4f10517a6259812a0f95da87a9266a1a3e19d3dc54511->leave($__internal_b4d89e99e67d0d4f9cf4f10517a6259812a0f95da87a9266a1a3e19d3dc54511_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_912fb02ee2082ef515848beeaba4f906dad1467a9546b929c18cda25f29aeba0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_912fb02ee2082ef515848beeaba4f906dad1467a9546b929c18cda25f29aeba0->enter($__internal_912fb02ee2082ef515848beeaba4f906dad1467a9546b929c18cda25f29aeba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5a3aa60cf19fe40f12d7c4e8f7d47b3676532beb6cf5c1dc687a3916728f2b3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3aa60cf19fe40f12d7c4e8f7d47b3676532beb6cf5c1dc687a3916728f2b3c->enter($__internal_5a3aa60cf19fe40f12d7c4e8f7d47b3676532beb6cf5c1dc687a3916728f2b3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5a3aa60cf19fe40f12d7c4e8f7d47b3676532beb6cf5c1dc687a3916728f2b3c->leave($__internal_5a3aa60cf19fe40f12d7c4e8f7d47b3676532beb6cf5c1dc687a3916728f2b3c_prof);

        
        $__internal_912fb02ee2082ef515848beeaba4f906dad1467a9546b929c18cda25f29aeba0->leave($__internal_912fb02ee2082ef515848beeaba4f906dad1467a9546b929c18cda25f29aeba0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e654fbb99db5b109e939cff691b6d788141d6f5f5dd7067ff54c4dff095bc57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e654fbb99db5b109e939cff691b6d788141d6f5f5dd7067ff54c4dff095bc57c->enter($__internal_e654fbb99db5b109e939cff691b6d788141d6f5f5dd7067ff54c4dff095bc57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f4761e90036a0f55ec570016e9628c5ed73c9ef7bcb633d658ad32c8961b4416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4761e90036a0f55ec570016e9628c5ed73c9ef7bcb633d658ad32c8961b4416->enter($__internal_f4761e90036a0f55ec570016e9628c5ed73c9ef7bcb633d658ad32c8961b4416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4761e90036a0f55ec570016e9628c5ed73c9ef7bcb633d658ad32c8961b4416->leave($__internal_f4761e90036a0f55ec570016e9628c5ed73c9ef7bcb633d658ad32c8961b4416_prof);

        
        $__internal_e654fbb99db5b109e939cff691b6d788141d6f5f5dd7067ff54c4dff095bc57c->leave($__internal_e654fbb99db5b109e939cff691b6d788141d6f5f5dd7067ff54c4dff095bc57c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
