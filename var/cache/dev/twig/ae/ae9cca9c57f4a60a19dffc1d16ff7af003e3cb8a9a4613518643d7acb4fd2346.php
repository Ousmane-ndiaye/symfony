<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5290a4e29ec307f9332c2fa9f786f9a99dafc26a3a76f0076e08e4bc68a8c020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5290a4e29ec307f9332c2fa9f786f9a99dafc26a3a76f0076e08e4bc68a8c020->enter($__internal_5290a4e29ec307f9332c2fa9f786f9a99dafc26a3a76f0076e08e4bc68a8c020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6ce12192b5b5229a589257ba7c35ac59dd29e81cbb4f95bca27e1416b7f2e7e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce12192b5b5229a589257ba7c35ac59dd29e81cbb4f95bca27e1416b7f2e7e4->enter($__internal_6ce12192b5b5229a589257ba7c35ac59dd29e81cbb4f95bca27e1416b7f2e7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5290a4e29ec307f9332c2fa9f786f9a99dafc26a3a76f0076e08e4bc68a8c020->leave($__internal_5290a4e29ec307f9332c2fa9f786f9a99dafc26a3a76f0076e08e4bc68a8c020_prof);

        
        $__internal_6ce12192b5b5229a589257ba7c35ac59dd29e81cbb4f95bca27e1416b7f2e7e4->leave($__internal_6ce12192b5b5229a589257ba7c35ac59dd29e81cbb4f95bca27e1416b7f2e7e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dff1c599fdecda06ca2babf6fe94cd719a31850132b34b946b5667dcb57979e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff1c599fdecda06ca2babf6fe94cd719a31850132b34b946b5667dcb57979e3->enter($__internal_dff1c599fdecda06ca2babf6fe94cd719a31850132b34b946b5667dcb57979e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e6baa7a9be9ef1a624e6ddb6df8a2b39c22cd5e857a0aac617f920e127bda0d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6baa7a9be9ef1a624e6ddb6df8a2b39c22cd5e857a0aac617f920e127bda0d7->enter($__internal_e6baa7a9be9ef1a624e6ddb6df8a2b39c22cd5e857a0aac617f920e127bda0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e6baa7a9be9ef1a624e6ddb6df8a2b39c22cd5e857a0aac617f920e127bda0d7->leave($__internal_e6baa7a9be9ef1a624e6ddb6df8a2b39c22cd5e857a0aac617f920e127bda0d7_prof);

        
        $__internal_dff1c599fdecda06ca2babf6fe94cd719a31850132b34b946b5667dcb57979e3->leave($__internal_dff1c599fdecda06ca2babf6fe94cd719a31850132b34b946b5667dcb57979e3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_230aba0bdcc26f48504529f44433a58ee88b9b942a681f36f5e86252d88c1943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230aba0bdcc26f48504529f44433a58ee88b9b942a681f36f5e86252d88c1943->enter($__internal_230aba0bdcc26f48504529f44433a58ee88b9b942a681f36f5e86252d88c1943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b5fcbbd741156ed82d4de3aef57be1360c63964fcc9be46d1a7796defc7190dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5fcbbd741156ed82d4de3aef57be1360c63964fcc9be46d1a7796defc7190dc->enter($__internal_b5fcbbd741156ed82d4de3aef57be1360c63964fcc9be46d1a7796defc7190dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b5fcbbd741156ed82d4de3aef57be1360c63964fcc9be46d1a7796defc7190dc->leave($__internal_b5fcbbd741156ed82d4de3aef57be1360c63964fcc9be46d1a7796defc7190dc_prof);

        
        $__internal_230aba0bdcc26f48504529f44433a58ee88b9b942a681f36f5e86252d88c1943->leave($__internal_230aba0bdcc26f48504529f44433a58ee88b9b942a681f36f5e86252d88c1943_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf1e98b0232a11bd9de64bf82bbb07889663e0b82d5fd8e5b1de8749800d7f4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1e98b0232a11bd9de64bf82bbb07889663e0b82d5fd8e5b1de8749800d7f4b->enter($__internal_cf1e98b0232a11bd9de64bf82bbb07889663e0b82d5fd8e5b1de8749800d7f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6bee1d59f935cc89dfbc32d36037b266e592b63b0401fbc98c0ef83c1d0a681a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bee1d59f935cc89dfbc32d36037b266e592b63b0401fbc98c0ef83c1d0a681a->enter($__internal_6bee1d59f935cc89dfbc32d36037b266e592b63b0401fbc98c0ef83c1d0a681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_6bee1d59f935cc89dfbc32d36037b266e592b63b0401fbc98c0ef83c1d0a681a->leave($__internal_6bee1d59f935cc89dfbc32d36037b266e592b63b0401fbc98c0ef83c1d0a681a_prof);

        
        $__internal_cf1e98b0232a11bd9de64bf82bbb07889663e0b82d5fd8e5b1de8749800d7f4b->leave($__internal_cf1e98b0232a11bd9de64bf82bbb07889663e0b82d5fd8e5b1de8749800d7f4b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
