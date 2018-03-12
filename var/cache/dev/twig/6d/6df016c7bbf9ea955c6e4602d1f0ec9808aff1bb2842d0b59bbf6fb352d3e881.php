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
        $__internal_9b84c86d4aff159f4635355a080a2476b30d485f0289d1bb8a1f6d5bf82f9157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b84c86d4aff159f4635355a080a2476b30d485f0289d1bb8a1f6d5bf82f9157->enter($__internal_9b84c86d4aff159f4635355a080a2476b30d485f0289d1bb8a1f6d5bf82f9157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ced1fa0f5526db12956993701608166d1dbae55d986ffa31a241412e418dc125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ced1fa0f5526db12956993701608166d1dbae55d986ffa31a241412e418dc125->enter($__internal_ced1fa0f5526db12956993701608166d1dbae55d986ffa31a241412e418dc125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b84c86d4aff159f4635355a080a2476b30d485f0289d1bb8a1f6d5bf82f9157->leave($__internal_9b84c86d4aff159f4635355a080a2476b30d485f0289d1bb8a1f6d5bf82f9157_prof);

        
        $__internal_ced1fa0f5526db12956993701608166d1dbae55d986ffa31a241412e418dc125->leave($__internal_ced1fa0f5526db12956993701608166d1dbae55d986ffa31a241412e418dc125_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_74cea728861371c8e4dd43a16fbbf25229b72b3afc9342e7cc860fb0be4418f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74cea728861371c8e4dd43a16fbbf25229b72b3afc9342e7cc860fb0be4418f9->enter($__internal_74cea728861371c8e4dd43a16fbbf25229b72b3afc9342e7cc860fb0be4418f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d2fc12944a3853747cbc6b32679f477acee413ba0e93266d9ec7b26c0f6bbba9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fc12944a3853747cbc6b32679f477acee413ba0e93266d9ec7b26c0f6bbba9->enter($__internal_d2fc12944a3853747cbc6b32679f477acee413ba0e93266d9ec7b26c0f6bbba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d2fc12944a3853747cbc6b32679f477acee413ba0e93266d9ec7b26c0f6bbba9->leave($__internal_d2fc12944a3853747cbc6b32679f477acee413ba0e93266d9ec7b26c0f6bbba9_prof);

        
        $__internal_74cea728861371c8e4dd43a16fbbf25229b72b3afc9342e7cc860fb0be4418f9->leave($__internal_74cea728861371c8e4dd43a16fbbf25229b72b3afc9342e7cc860fb0be4418f9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48c8e1badcfde281cda96282d63a632023d5498c2f112e90a6db0a4348aae018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48c8e1badcfde281cda96282d63a632023d5498c2f112e90a6db0a4348aae018->enter($__internal_48c8e1badcfde281cda96282d63a632023d5498c2f112e90a6db0a4348aae018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_16dfa6a775812dc202984f262da15796f863bc8e823fe437cd6c96ce91aad02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16dfa6a775812dc202984f262da15796f863bc8e823fe437cd6c96ce91aad02e->enter($__internal_16dfa6a775812dc202984f262da15796f863bc8e823fe437cd6c96ce91aad02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_16dfa6a775812dc202984f262da15796f863bc8e823fe437cd6c96ce91aad02e->leave($__internal_16dfa6a775812dc202984f262da15796f863bc8e823fe437cd6c96ce91aad02e_prof);

        
        $__internal_48c8e1badcfde281cda96282d63a632023d5498c2f112e90a6db0a4348aae018->leave($__internal_48c8e1badcfde281cda96282d63a632023d5498c2f112e90a6db0a4348aae018_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39a93561c5f2dd96f4e42e23f045e4f69167e2e66db9c6f3b5d4389dfbc90724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39a93561c5f2dd96f4e42e23f045e4f69167e2e66db9c6f3b5d4389dfbc90724->enter($__internal_39a93561c5f2dd96f4e42e23f045e4f69167e2e66db9c6f3b5d4389dfbc90724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e62a1cd54d0082343de3ab1cd3719b233c843166c047b65f2bd477726dcf6e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e62a1cd54d0082343de3ab1cd3719b233c843166c047b65f2bd477726dcf6e3a->enter($__internal_e62a1cd54d0082343de3ab1cd3719b233c843166c047b65f2bd477726dcf6e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e62a1cd54d0082343de3ab1cd3719b233c843166c047b65f2bd477726dcf6e3a->leave($__internal_e62a1cd54d0082343de3ab1cd3719b233c843166c047b65f2bd477726dcf6e3a_prof);

        
        $__internal_39a93561c5f2dd96f4e42e23f045e4f69167e2e66db9c6f3b5d4389dfbc90724->leave($__internal_39a93561c5f2dd96f4e42e23f045e4f69167e2e66db9c6f3b5d4389dfbc90724_prof);

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
