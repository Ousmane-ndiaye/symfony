<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e7d77c85e058598661ab48652a436e7f63347b659988d8782cc92ee0f047cedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7d77c85e058598661ab48652a436e7f63347b659988d8782cc92ee0f047cedf->enter($__internal_e7d77c85e058598661ab48652a436e7f63347b659988d8782cc92ee0f047cedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_54c855bc8d62d3fc12944756e43c24e5614330fcae1c7f805b34f8c6fe52de10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c855bc8d62d3fc12944756e43c24e5614330fcae1c7f805b34f8c6fe52de10->enter($__internal_54c855bc8d62d3fc12944756e43c24e5614330fcae1c7f805b34f8c6fe52de10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d77c85e058598661ab48652a436e7f63347b659988d8782cc92ee0f047cedf->leave($__internal_e7d77c85e058598661ab48652a436e7f63347b659988d8782cc92ee0f047cedf_prof);

        
        $__internal_54c855bc8d62d3fc12944756e43c24e5614330fcae1c7f805b34f8c6fe52de10->leave($__internal_54c855bc8d62d3fc12944756e43c24e5614330fcae1c7f805b34f8c6fe52de10_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc3362f1a4c13d79d0d77264b81146a2c8e80c6adbf852fb5f82536a5115afde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc3362f1a4c13d79d0d77264b81146a2c8e80c6adbf852fb5f82536a5115afde->enter($__internal_fc3362f1a4c13d79d0d77264b81146a2c8e80c6adbf852fb5f82536a5115afde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46ffc703477a46c4d285005f1638d44283f649bacab9217b5ac4f57f5022129e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ffc703477a46c4d285005f1638d44283f649bacab9217b5ac4f57f5022129e->enter($__internal_46ffc703477a46c4d285005f1638d44283f649bacab9217b5ac4f57f5022129e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_46ffc703477a46c4d285005f1638d44283f649bacab9217b5ac4f57f5022129e->leave($__internal_46ffc703477a46c4d285005f1638d44283f649bacab9217b5ac4f57f5022129e_prof);

        
        $__internal_fc3362f1a4c13d79d0d77264b81146a2c8e80c6adbf852fb5f82536a5115afde->leave($__internal_fc3362f1a4c13d79d0d77264b81146a2c8e80c6adbf852fb5f82536a5115afde_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb3c2e6d5fa80f1b0e264ed6e9f7c29ed565d30e687b2f1f64a849b824f8b5a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3c2e6d5fa80f1b0e264ed6e9f7c29ed565d30e687b2f1f64a849b824f8b5a2->enter($__internal_bb3c2e6d5fa80f1b0e264ed6e9f7c29ed565d30e687b2f1f64a849b824f8b5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30b58a4ab44c2a144dcb7807fa8d39b95e6616298e19925bafe906b4efc92312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b58a4ab44c2a144dcb7807fa8d39b95e6616298e19925bafe906b4efc92312->enter($__internal_30b58a4ab44c2a144dcb7807fa8d39b95e6616298e19925bafe906b4efc92312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30b58a4ab44c2a144dcb7807fa8d39b95e6616298e19925bafe906b4efc92312->leave($__internal_30b58a4ab44c2a144dcb7807fa8d39b95e6616298e19925bafe906b4efc92312_prof);

        
        $__internal_bb3c2e6d5fa80f1b0e264ed6e9f7c29ed565d30e687b2f1f64a849b824f8b5a2->leave($__internal_bb3c2e6d5fa80f1b0e264ed6e9f7c29ed565d30e687b2f1f64a849b824f8b5a2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb6db5829080ff6eae5956008934fa5c55fa1d0bc29f4bb386fb9239af1f2156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6db5829080ff6eae5956008934fa5c55fa1d0bc29f4bb386fb9239af1f2156->enter($__internal_bb6db5829080ff6eae5956008934fa5c55fa1d0bc29f4bb386fb9239af1f2156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e96723e27c949164cb8e5657589ee1f407a50e30fb3d451fadfdf8787fa88ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e96723e27c949164cb8e5657589ee1f407a50e30fb3d451fadfdf8787fa88ce6->enter($__internal_e96723e27c949164cb8e5657589ee1f407a50e30fb3d451fadfdf8787fa88ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e96723e27c949164cb8e5657589ee1f407a50e30fb3d451fadfdf8787fa88ce6->leave($__internal_e96723e27c949164cb8e5657589ee1f407a50e30fb3d451fadfdf8787fa88ce6_prof);

        
        $__internal_bb6db5829080ff6eae5956008934fa5c55fa1d0bc29f4bb386fb9239af1f2156->leave($__internal_bb6db5829080ff6eae5956008934fa5c55fa1d0bc29f4bb386fb9239af1f2156_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
