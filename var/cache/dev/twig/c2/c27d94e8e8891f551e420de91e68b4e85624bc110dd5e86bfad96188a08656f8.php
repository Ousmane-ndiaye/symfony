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
        $__internal_ca4fc6dd8f27f72e1c8d1055140fb7c371a79689ad2d02e46bf7e862c9dc3e20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4fc6dd8f27f72e1c8d1055140fb7c371a79689ad2d02e46bf7e862c9dc3e20->enter($__internal_ca4fc6dd8f27f72e1c8d1055140fb7c371a79689ad2d02e46bf7e862c9dc3e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_ba12f86f591f8eff7b7fe9603f94d8f5358f3e26d999e3a29dfd2baac82312c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba12f86f591f8eff7b7fe9603f94d8f5358f3e26d999e3a29dfd2baac82312c0->enter($__internal_ba12f86f591f8eff7b7fe9603f94d8f5358f3e26d999e3a29dfd2baac82312c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_ca4fc6dd8f27f72e1c8d1055140fb7c371a79689ad2d02e46bf7e862c9dc3e20->leave($__internal_ca4fc6dd8f27f72e1c8d1055140fb7c371a79689ad2d02e46bf7e862c9dc3e20_prof);

        
        $__internal_ba12f86f591f8eff7b7fe9603f94d8f5358f3e26d999e3a29dfd2baac82312c0->leave($__internal_ba12f86f591f8eff7b7fe9603f94d8f5358f3e26d999e3a29dfd2baac82312c0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8627b8a6910c7835540e2ec813510e10c6ecfe18f3faddc838a6bcdc26ab3cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8627b8a6910c7835540e2ec813510e10c6ecfe18f3faddc838a6bcdc26ab3cc->enter($__internal_f8627b8a6910c7835540e2ec813510e10c6ecfe18f3faddc838a6bcdc26ab3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bd32d87ede8ad41c3001d859cbe4a5a14ba3e698c29db8170edf878f1b623e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd32d87ede8ad41c3001d859cbe4a5a14ba3e698c29db8170edf878f1b623e9d->enter($__internal_bd32d87ede8ad41c3001d859cbe4a5a14ba3e698c29db8170edf878f1b623e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_bd32d87ede8ad41c3001d859cbe4a5a14ba3e698c29db8170edf878f1b623e9d->leave($__internal_bd32d87ede8ad41c3001d859cbe4a5a14ba3e698c29db8170edf878f1b623e9d_prof);

        
        $__internal_f8627b8a6910c7835540e2ec813510e10c6ecfe18f3faddc838a6bcdc26ab3cc->leave($__internal_f8627b8a6910c7835540e2ec813510e10c6ecfe18f3faddc838a6bcdc26ab3cc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7d79bbc50d4f72d631725d5881200bdb3ca1cfae9b870f651f329dc49ccdba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d79bbc50d4f72d631725d5881200bdb3ca1cfae9b870f651f329dc49ccdba2->enter($__internal_c7d79bbc50d4f72d631725d5881200bdb3ca1cfae9b870f651f329dc49ccdba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_32f0525a502dc20445a00ec52bc19f4dc2cbfb9eb41c30a45db270dcf126be68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f0525a502dc20445a00ec52bc19f4dc2cbfb9eb41c30a45db270dcf126be68->enter($__internal_32f0525a502dc20445a00ec52bc19f4dc2cbfb9eb41c30a45db270dcf126be68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_32f0525a502dc20445a00ec52bc19f4dc2cbfb9eb41c30a45db270dcf126be68->leave($__internal_32f0525a502dc20445a00ec52bc19f4dc2cbfb9eb41c30a45db270dcf126be68_prof);

        
        $__internal_c7d79bbc50d4f72d631725d5881200bdb3ca1cfae9b870f651f329dc49ccdba2->leave($__internal_c7d79bbc50d4f72d631725d5881200bdb3ca1cfae9b870f651f329dc49ccdba2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e818c4658cb2ef47f4b83aa52fd7a37850ca3001573cb1b97136cca3b2c155da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e818c4658cb2ef47f4b83aa52fd7a37850ca3001573cb1b97136cca3b2c155da->enter($__internal_e818c4658cb2ef47f4b83aa52fd7a37850ca3001573cb1b97136cca3b2c155da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20024c94292d0dc54480cbebea147361bb04ec6c11cb516080e8442c1fb46495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20024c94292d0dc54480cbebea147361bb04ec6c11cb516080e8442c1fb46495->enter($__internal_20024c94292d0dc54480cbebea147361bb04ec6c11cb516080e8442c1fb46495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_20024c94292d0dc54480cbebea147361bb04ec6c11cb516080e8442c1fb46495->leave($__internal_20024c94292d0dc54480cbebea147361bb04ec6c11cb516080e8442c1fb46495_prof);

        
        $__internal_e818c4658cb2ef47f4b83aa52fd7a37850ca3001573cb1b97136cca3b2c155da->leave($__internal_e818c4658cb2ef47f4b83aa52fd7a37850ca3001573cb1b97136cca3b2c155da_prof);

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
