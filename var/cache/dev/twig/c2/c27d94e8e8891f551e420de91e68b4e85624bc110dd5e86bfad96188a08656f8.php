<?php

/* TwigBundle::layout.html.twig */
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
        $__internal_806ec8aeaced6b998e7bf2c2a5b29727facb6755563d2a8bc33c1be2b3486870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806ec8aeaced6b998e7bf2c2a5b29727facb6755563d2a8bc33c1be2b3486870->enter($__internal_806ec8aeaced6b998e7bf2c2a5b29727facb6755563d2a8bc33c1be2b3486870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_12bb5e11b27a6c5e13dcefa6cccae293ca99b689add807d36c3139fd34a4d40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bb5e11b27a6c5e13dcefa6cccae293ca99b689add807d36c3139fd34a4d40c->enter($__internal_12bb5e11b27a6c5e13dcefa6cccae293ca99b689add807d36c3139fd34a4d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_806ec8aeaced6b998e7bf2c2a5b29727facb6755563d2a8bc33c1be2b3486870->leave($__internal_806ec8aeaced6b998e7bf2c2a5b29727facb6755563d2a8bc33c1be2b3486870_prof);

        
        $__internal_12bb5e11b27a6c5e13dcefa6cccae293ca99b689add807d36c3139fd34a4d40c->leave($__internal_12bb5e11b27a6c5e13dcefa6cccae293ca99b689add807d36c3139fd34a4d40c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6277b9b05661c6d01e4d32bdb9aa7b299765851544a5de093a9270e8cc177b2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6277b9b05661c6d01e4d32bdb9aa7b299765851544a5de093a9270e8cc177b2e->enter($__internal_6277b9b05661c6d01e4d32bdb9aa7b299765851544a5de093a9270e8cc177b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47828da524b56de06af30299f8852e7c3f8485b632bbc8feab1809bdc614e554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47828da524b56de06af30299f8852e7c3f8485b632bbc8feab1809bdc614e554->enter($__internal_47828da524b56de06af30299f8852e7c3f8485b632bbc8feab1809bdc614e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_47828da524b56de06af30299f8852e7c3f8485b632bbc8feab1809bdc614e554->leave($__internal_47828da524b56de06af30299f8852e7c3f8485b632bbc8feab1809bdc614e554_prof);

        
        $__internal_6277b9b05661c6d01e4d32bdb9aa7b299765851544a5de093a9270e8cc177b2e->leave($__internal_6277b9b05661c6d01e4d32bdb9aa7b299765851544a5de093a9270e8cc177b2e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_59ad44ef37a010efe9fc5c2f05a0c9cda37a85a78b4c65445d2b46522b1fe9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ad44ef37a010efe9fc5c2f05a0c9cda37a85a78b4c65445d2b46522b1fe9e4->enter($__internal_59ad44ef37a010efe9fc5c2f05a0c9cda37a85a78b4c65445d2b46522b1fe9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92a10b00be0bc7aba9b8d170f657918dea062370e38a0a3d3037464d5135488f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a10b00be0bc7aba9b8d170f657918dea062370e38a0a3d3037464d5135488f->enter($__internal_92a10b00be0bc7aba9b8d170f657918dea062370e38a0a3d3037464d5135488f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_92a10b00be0bc7aba9b8d170f657918dea062370e38a0a3d3037464d5135488f->leave($__internal_92a10b00be0bc7aba9b8d170f657918dea062370e38a0a3d3037464d5135488f_prof);

        
        $__internal_59ad44ef37a010efe9fc5c2f05a0c9cda37a85a78b4c65445d2b46522b1fe9e4->leave($__internal_59ad44ef37a010efe9fc5c2f05a0c9cda37a85a78b4c65445d2b46522b1fe9e4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4c8f4ea82e8ef5c09db6abcfa32eeac7ea0b7a2f2d5add3cf156b16d0eefb66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4c8f4ea82e8ef5c09db6abcfa32eeac7ea0b7a2f2d5add3cf156b16d0eefb66->enter($__internal_f4c8f4ea82e8ef5c09db6abcfa32eeac7ea0b7a2f2d5add3cf156b16d0eefb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f91fd3ea3b0b7cf9c9b79e531924fc80958892a2ce4e968636b08f00aa50200d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91fd3ea3b0b7cf9c9b79e531924fc80958892a2ce4e968636b08f00aa50200d->enter($__internal_f91fd3ea3b0b7cf9c9b79e531924fc80958892a2ce4e968636b08f00aa50200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f91fd3ea3b0b7cf9c9b79e531924fc80958892a2ce4e968636b08f00aa50200d->leave($__internal_f91fd3ea3b0b7cf9c9b79e531924fc80958892a2ce4e968636b08f00aa50200d_prof);

        
        $__internal_f4c8f4ea82e8ef5c09db6abcfa32eeac7ea0b7a2f2d5add3cf156b16d0eefb66->leave($__internal_f4c8f4ea82e8ef5c09db6abcfa32eeac7ea0b7a2f2d5add3cf156b16d0eefb66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "/var/www/html/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
