<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e090cefb6ebfbe353efa6fcd8d98a53e2e6f16c60a94c9152aa1ff2d650d941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e090cefb6ebfbe353efa6fcd8d98a53e2e6f16c60a94c9152aa1ff2d650d941->enter($__internal_2e090cefb6ebfbe353efa6fcd8d98a53e2e6f16c60a94c9152aa1ff2d650d941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_62fe0bf8a394522f6f8cb34fb5326ffac34bfc69b15d642b8a377e7932224f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62fe0bf8a394522f6f8cb34fb5326ffac34bfc69b15d642b8a377e7932224f66->enter($__internal_62fe0bf8a394522f6f8cb34fb5326ffac34bfc69b15d642b8a377e7932224f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_2e090cefb6ebfbe353efa6fcd8d98a53e2e6f16c60a94c9152aa1ff2d650d941->leave($__internal_2e090cefb6ebfbe353efa6fcd8d98a53e2e6f16c60a94c9152aa1ff2d650d941_prof);

        
        $__internal_62fe0bf8a394522f6f8cb34fb5326ffac34bfc69b15d642b8a377e7932224f66->leave($__internal_62fe0bf8a394522f6f8cb34fb5326ffac34bfc69b15d642b8a377e7932224f66_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_82d1f4fe7110464b27111d52ea80c90fa3623a7cd84710241546eb61931de604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d1f4fe7110464b27111d52ea80c90fa3623a7cd84710241546eb61931de604->enter($__internal_82d1f4fe7110464b27111d52ea80c90fa3623a7cd84710241546eb61931de604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ea7490b241d2e29bce8c1c4a77ac94189a3c96cf06648b1854794e7d6b486558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea7490b241d2e29bce8c1c4a77ac94189a3c96cf06648b1854794e7d6b486558->enter($__internal_ea7490b241d2e29bce8c1c4a77ac94189a3c96cf06648b1854794e7d6b486558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ea7490b241d2e29bce8c1c4a77ac94189a3c96cf06648b1854794e7d6b486558->leave($__internal_ea7490b241d2e29bce8c1c4a77ac94189a3c96cf06648b1854794e7d6b486558_prof);

        
        $__internal_82d1f4fe7110464b27111d52ea80c90fa3623a7cd84710241546eb61931de604->leave($__internal_82d1f4fe7110464b27111d52ea80c90fa3623a7cd84710241546eb61931de604_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_42deaea0bacd7b2224e7ccea07aa55b43ea1b685c93f00d67c87b3ab4d8a216f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42deaea0bacd7b2224e7ccea07aa55b43ea1b685c93f00d67c87b3ab4d8a216f->enter($__internal_42deaea0bacd7b2224e7ccea07aa55b43ea1b685c93f00d67c87b3ab4d8a216f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed50cf87149f71a8dad859f03eb22d5a7cf5d3ca2308b45eef5ff0b33912151d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed50cf87149f71a8dad859f03eb22d5a7cf5d3ca2308b45eef5ff0b33912151d->enter($__internal_ed50cf87149f71a8dad859f03eb22d5a7cf5d3ca2308b45eef5ff0b33912151d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ed50cf87149f71a8dad859f03eb22d5a7cf5d3ca2308b45eef5ff0b33912151d->leave($__internal_ed50cf87149f71a8dad859f03eb22d5a7cf5d3ca2308b45eef5ff0b33912151d_prof);

        
        $__internal_42deaea0bacd7b2224e7ccea07aa55b43ea1b685c93f00d67c87b3ab4d8a216f->leave($__internal_42deaea0bacd7b2224e7ccea07aa55b43ea1b685c93f00d67c87b3ab4d8a216f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b82d8e23b1b814781809d89ca66ef0f91184567547addd5f515dbc976ba7c7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b82d8e23b1b814781809d89ca66ef0f91184567547addd5f515dbc976ba7c7d->enter($__internal_8b82d8e23b1b814781809d89ca66ef0f91184567547addd5f515dbc976ba7c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ccd0f5179ef1a98df91415ff65141e2d1ee87f13fb9627eeab115fd0319bf2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd0f5179ef1a98df91415ff65141e2d1ee87f13fb9627eeab115fd0319bf2e2->enter($__internal_ccd0f5179ef1a98df91415ff65141e2d1ee87f13fb9627eeab115fd0319bf2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ccd0f5179ef1a98df91415ff65141e2d1ee87f13fb9627eeab115fd0319bf2e2->leave($__internal_ccd0f5179ef1a98df91415ff65141e2d1ee87f13fb9627eeab115fd0319bf2e2_prof);

        
        $__internal_8b82d8e23b1b814781809d89ca66ef0f91184567547addd5f515dbc976ba7c7d->leave($__internal_8b82d8e23b1b814781809d89ca66ef0f91184567547addd5f515dbc976ba7c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
