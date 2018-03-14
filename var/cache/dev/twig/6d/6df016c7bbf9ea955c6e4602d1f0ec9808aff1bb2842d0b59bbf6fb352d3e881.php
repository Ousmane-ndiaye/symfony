<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_9f483bad605def53b30638544565a73c23f16f6e76dc24d132a5dca62e8da61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f483bad605def53b30638544565a73c23f16f6e76dc24d132a5dca62e8da61f->enter($__internal_9f483bad605def53b30638544565a73c23f16f6e76dc24d132a5dca62e8da61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c4405d4338d60aa74cf8b54c21730528bd0ecd4939fdab38c7e15f65fbfee660 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4405d4338d60aa74cf8b54c21730528bd0ecd4939fdab38c7e15f65fbfee660->enter($__internal_c4405d4338d60aa74cf8b54c21730528bd0ecd4939fdab38c7e15f65fbfee660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f483bad605def53b30638544565a73c23f16f6e76dc24d132a5dca62e8da61f->leave($__internal_9f483bad605def53b30638544565a73c23f16f6e76dc24d132a5dca62e8da61f_prof);

        
        $__internal_c4405d4338d60aa74cf8b54c21730528bd0ecd4939fdab38c7e15f65fbfee660->leave($__internal_c4405d4338d60aa74cf8b54c21730528bd0ecd4939fdab38c7e15f65fbfee660_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_afaaa8d4c8e84a1486ce7eb6c182e63a2c160bfda8f4e0fc8093efe84de85c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afaaa8d4c8e84a1486ce7eb6c182e63a2c160bfda8f4e0fc8093efe84de85c19->enter($__internal_afaaa8d4c8e84a1486ce7eb6c182e63a2c160bfda8f4e0fc8093efe84de85c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99d689c2d2e30c526a951ad1319a53255041c27df3624793be70515286631906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d689c2d2e30c526a951ad1319a53255041c27df3624793be70515286631906->enter($__internal_99d689c2d2e30c526a951ad1319a53255041c27df3624793be70515286631906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_99d689c2d2e30c526a951ad1319a53255041c27df3624793be70515286631906->leave($__internal_99d689c2d2e30c526a951ad1319a53255041c27df3624793be70515286631906_prof);

        
        $__internal_afaaa8d4c8e84a1486ce7eb6c182e63a2c160bfda8f4e0fc8093efe84de85c19->leave($__internal_afaaa8d4c8e84a1486ce7eb6c182e63a2c160bfda8f4e0fc8093efe84de85c19_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c8d10959442f3981660cd72dc27b32cabeefd7b7e34643cce7da878317c7957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8d10959442f3981660cd72dc27b32cabeefd7b7e34643cce7da878317c7957->enter($__internal_1c8d10959442f3981660cd72dc27b32cabeefd7b7e34643cce7da878317c7957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cd31846fc9ed305f6cb263d70222c6fdf2bfbd17d266f21c6d0133f474fa4b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd31846fc9ed305f6cb263d70222c6fdf2bfbd17d266f21c6d0133f474fa4b77->enter($__internal_cd31846fc9ed305f6cb263d70222c6fdf2bfbd17d266f21c6d0133f474fa4b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cd31846fc9ed305f6cb263d70222c6fdf2bfbd17d266f21c6d0133f474fa4b77->leave($__internal_cd31846fc9ed305f6cb263d70222c6fdf2bfbd17d266f21c6d0133f474fa4b77_prof);

        
        $__internal_1c8d10959442f3981660cd72dc27b32cabeefd7b7e34643cce7da878317c7957->leave($__internal_1c8d10959442f3981660cd72dc27b32cabeefd7b7e34643cce7da878317c7957_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cfcbe61cef8d05e6563ae13986529bc01de86c94f4faf4b44203859e78dd9cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfcbe61cef8d05e6563ae13986529bc01de86c94f4faf4b44203859e78dd9cbc->enter($__internal_cfcbe61cef8d05e6563ae13986529bc01de86c94f4faf4b44203859e78dd9cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e27895a077b3b7360285c68a8dbaa69278835c6a8e5f5333c23837d26c78c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e27895a077b3b7360285c68a8dbaa69278835c6a8e5f5333c23837d26c78c1a->enter($__internal_0e27895a077b3b7360285c68a8dbaa69278835c6a8e5f5333c23837d26c78c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0e27895a077b3b7360285c68a8dbaa69278835c6a8e5f5333c23837d26c78c1a->leave($__internal_0e27895a077b3b7360285c68a8dbaa69278835c6a8e5f5333c23837d26c78c1a_prof);

        
        $__internal_cfcbe61cef8d05e6563ae13986529bc01de86c94f4faf4b44203859e78dd9cbc->leave($__internal_cfcbe61cef8d05e6563ae13986529bc01de86c94f4faf4b44203859e78dd9cbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
