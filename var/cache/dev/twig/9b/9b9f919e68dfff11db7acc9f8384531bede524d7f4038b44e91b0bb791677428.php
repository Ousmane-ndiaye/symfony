<?php

/* SoultanaBundle:Admin:login.html.twig */
class __TwigTemplate_aadd65952d83a00b7cb3c404159483aefb1717f706245da01d4df216eb919c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "SoultanaBundle:Admin:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1becdc3a21d6f8257e2031a620f80bd8854ec5a7d3aa0581585d2f0a65a94d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1becdc3a21d6f8257e2031a620f80bd8854ec5a7d3aa0581585d2f0a65a94d6d->enter($__internal_1becdc3a21d6f8257e2031a620f80bd8854ec5a7d3aa0581585d2f0a65a94d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:login.html.twig"));

        $__internal_252e9e6ee3afb43b306f2d9a27587eb39fdac249f4221f05955f8a1cdbcdcab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252e9e6ee3afb43b306f2d9a27587eb39fdac249f4221f05955f8a1cdbcdcab5->enter($__internal_252e9e6ee3afb43b306f2d9a27587eb39fdac249f4221f05955f8a1cdbcdcab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1becdc3a21d6f8257e2031a620f80bd8854ec5a7d3aa0581585d2f0a65a94d6d->leave($__internal_1becdc3a21d6f8257e2031a620f80bd8854ec5a7d3aa0581585d2f0a65a94d6d_prof);

        
        $__internal_252e9e6ee3afb43b306f2d9a27587eb39fdac249f4221f05955f8a1cdbcdcab5->leave($__internal_252e9e6ee3afb43b306f2d9a27587eb39fdac249f4221f05955f8a1cdbcdcab5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3319c7c28644f0ec91a8e9f2990a5df081d2be58da030dc8bfc8c098d73ab9a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3319c7c28644f0ec91a8e9f2990a5df081d2be58da030dc8bfc8c098d73ab9a5->enter($__internal_3319c7c28644f0ec91a8e9f2990a5df081d2be58da030dc8bfc8c098d73ab9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20e1a41265940ab93c024e2dcfa8bf927eee5144fa34f57c29fae05d7a00a57b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e1a41265940ab93c024e2dcfa8bf927eee5144fa34f57c29fae05d7a00a57b->enter($__internal_20e1a41265940ab93c024e2dcfa8bf927eee5144fa34f57c29fae05d7a00a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"bg-overlay\"></div>
                <h3 class=\"text-center m-t-10 text-white\"> Sign In to <strong>Moltran</strong> </h3>
            </div>


            <div class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" action=\"index.html\">

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" required=\"\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\">
                                <label for=\"checkbox-signup\">
                                    Remember me
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">Log In</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"pages-recoverpw.html\"><i class=\"fa fa-lock m-r-5\"></i> Forgot your password?</a>
                        </div>
                        <div class=\"col-sm-5 text-right\">
                            <a href=\"pages-register.html\">Create an account</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

";
        
        $__internal_20e1a41265940ab93c024e2dcfa8bf927eee5144fa34f57c29fae05d7a00a57b->leave($__internal_20e1a41265940ab93c024e2dcfa8bf927eee5144fa34f57c29fae05d7a00a57b_prof);

        
        $__internal_3319c7c28644f0ec91a8e9f2990a5df081d2be58da030dc8bfc8c098d73ab9a5->leave($__internal_3319c7c28644f0ec91a8e9f2990a5df081d2be58da030dc8bfc8c098d73ab9a5_prof);

    }

    public function getTemplateName()
    {
        return "SoultanaBundle:Admin:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block body %}
    <div class=\"wrapper-page\">
        <div class=\"panel panel-color panel-primary panel-pages\">
            <div class=\"panel-heading bg-img\">
                <div class=\"bg-overlay\"></div>
                <h3 class=\"text-center m-t-10 text-white\"> Sign In to <strong>Moltran</strong> </h3>
            </div>


            <div class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" action=\"index.html\">

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" required=\"\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\">
                                <label for=\"checkbox-signup\">
                                    Remember me
                                </label>
                            </div>

                        </div>
                    </div>

                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">Log In</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"pages-recoverpw.html\"><i class=\"fa fa-lock m-r-5\"></i> Forgot your password?</a>
                        </div>
                        <div class=\"col-sm-5 text-right\">
                            <a href=\"pages-register.html\">Create an account</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

{% endblock %}", "SoultanaBundle:Admin:login.html.twig", "/var/www/html/soultana.sn/src/SNT/SoultanaBundle/Resources/views/Admin/login.html.twig");
    }
}
