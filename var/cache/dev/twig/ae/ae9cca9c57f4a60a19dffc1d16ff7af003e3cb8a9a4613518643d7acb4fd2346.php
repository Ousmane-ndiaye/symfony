<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_e54b849e9959bf1ab0b8f750f6330773e2d875aebe2143d7d3e9ad3368ef37f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54b849e9959bf1ab0b8f750f6330773e2d875aebe2143d7d3e9ad3368ef37f2->enter($__internal_e54b849e9959bf1ab0b8f750f6330773e2d875aebe2143d7d3e9ad3368ef37f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bb5ece6688a5f23e7d2b4ea06c73cc2bc8399b671468921bb30fc5915041b81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5ece6688a5f23e7d2b4ea06c73cc2bc8399b671468921bb30fc5915041b81b->enter($__internal_bb5ece6688a5f23e7d2b4ea06c73cc2bc8399b671468921bb30fc5915041b81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e54b849e9959bf1ab0b8f750f6330773e2d875aebe2143d7d3e9ad3368ef37f2->leave($__internal_e54b849e9959bf1ab0b8f750f6330773e2d875aebe2143d7d3e9ad3368ef37f2_prof);

        
        $__internal_bb5ece6688a5f23e7d2b4ea06c73cc2bc8399b671468921bb30fc5915041b81b->leave($__internal_bb5ece6688a5f23e7d2b4ea06c73cc2bc8399b671468921bb30fc5915041b81b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6d87f36283a3cf4dfcafb573d7b24b041ce04da818ceb2ca0694197a7d63397d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d87f36283a3cf4dfcafb573d7b24b041ce04da818ceb2ca0694197a7d63397d->enter($__internal_6d87f36283a3cf4dfcafb573d7b24b041ce04da818ceb2ca0694197a7d63397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_982b6cbeabd4e9e1db09d5f29c442ede550c90faa74d4856d015591164a71980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982b6cbeabd4e9e1db09d5f29c442ede550c90faa74d4856d015591164a71980->enter($__internal_982b6cbeabd4e9e1db09d5f29c442ede550c90faa74d4856d015591164a71980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_982b6cbeabd4e9e1db09d5f29c442ede550c90faa74d4856d015591164a71980->leave($__internal_982b6cbeabd4e9e1db09d5f29c442ede550c90faa74d4856d015591164a71980_prof);

        
        $__internal_6d87f36283a3cf4dfcafb573d7b24b041ce04da818ceb2ca0694197a7d63397d->leave($__internal_6d87f36283a3cf4dfcafb573d7b24b041ce04da818ceb2ca0694197a7d63397d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_71b7d9d8996208e3d40c8622d7ecfb4faeda1b7db61aee352f5379e381cd521c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b7d9d8996208e3d40c8622d7ecfb4faeda1b7db61aee352f5379e381cd521c->enter($__internal_71b7d9d8996208e3d40c8622d7ecfb4faeda1b7db61aee352f5379e381cd521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e4b87e9dbf37580f4a19f1b0861a08269822304ab125dbcde5e414908f86be2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b87e9dbf37580f4a19f1b0861a08269822304ab125dbcde5e414908f86be2f->enter($__internal_e4b87e9dbf37580f4a19f1b0861a08269822304ab125dbcde5e414908f86be2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4b87e9dbf37580f4a19f1b0861a08269822304ab125dbcde5e414908f86be2f->leave($__internal_e4b87e9dbf37580f4a19f1b0861a08269822304ab125dbcde5e414908f86be2f_prof);

        
        $__internal_71b7d9d8996208e3d40c8622d7ecfb4faeda1b7db61aee352f5379e381cd521c->leave($__internal_71b7d9d8996208e3d40c8622d7ecfb4faeda1b7db61aee352f5379e381cd521c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc73c9a1542fd8cc3d992532d89b5bd61bb582abf4a61f2a6359ce5b0a2a2b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc73c9a1542fd8cc3d992532d89b5bd61bb582abf4a61f2a6359ce5b0a2a2b7c->enter($__internal_cc73c9a1542fd8cc3d992532d89b5bd61bb582abf4a61f2a6359ce5b0a2a2b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a29bcbd504ba3d888c22263a43efcb9281d79fab9b7732191ba06628fc7a7b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29bcbd504ba3d888c22263a43efcb9281d79fab9b7732191ba06628fc7a7b5c->enter($__internal_a29bcbd504ba3d888c22263a43efcb9281d79fab9b7732191ba06628fc7a7b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a29bcbd504ba3d888c22263a43efcb9281d79fab9b7732191ba06628fc7a7b5c->leave($__internal_a29bcbd504ba3d888c22263a43efcb9281d79fab9b7732191ba06628fc7a7b5c_prof);

        
        $__internal_cc73c9a1542fd8cc3d992532d89b5bd61bb582abf4a61f2a6359ce5b0a2a2b7c->leave($__internal_cc73c9a1542fd8cc3d992532d89b5bd61bb582abf4a61f2a6359ce5b0a2a2b7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
