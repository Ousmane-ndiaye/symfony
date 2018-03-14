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
        $__internal_e0cbbb612fa48b7649532bd1f730228282f8b765e4403a147b44fbee424f4335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cbbb612fa48b7649532bd1f730228282f8b765e4403a147b44fbee424f4335->enter($__internal_e0cbbb612fa48b7649532bd1f730228282f8b765e4403a147b44fbee424f4335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:login.html.twig"));

        $__internal_68ea83f7652ded5e196eb06f6f336f3dd7987f36945ee641ad1079152e1280c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ea83f7652ded5e196eb06f6f336f3dd7987f36945ee641ad1079152e1280c0->enter($__internal_68ea83f7652ded5e196eb06f6f336f3dd7987f36945ee641ad1079152e1280c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0cbbb612fa48b7649532bd1f730228282f8b765e4403a147b44fbee424f4335->leave($__internal_e0cbbb612fa48b7649532bd1f730228282f8b765e4403a147b44fbee424f4335_prof);

        
        $__internal_68ea83f7652ded5e196eb06f6f336f3dd7987f36945ee641ad1079152e1280c0->leave($__internal_68ea83f7652ded5e196eb06f6f336f3dd7987f36945ee641ad1079152e1280c0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_890f15085bdc8798ad91006716aa55f27e4085278538c14b8317df4789910a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_890f15085bdc8798ad91006716aa55f27e4085278538c14b8317df4789910a93->enter($__internal_890f15085bdc8798ad91006716aa55f27e4085278538c14b8317df4789910a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5089073d12573562f9b3147857a8f1eaf57c2312b27724c701a060ecf1bb7efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5089073d12573562f9b3147857a8f1eaf57c2312b27724c701a060ecf1bb7efc->enter($__internal_5089073d12573562f9b3147857a8f1eaf57c2312b27724c701a060ecf1bb7efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5089073d12573562f9b3147857a8f1eaf57c2312b27724c701a060ecf1bb7efc->leave($__internal_5089073d12573562f9b3147857a8f1eaf57c2312b27724c701a060ecf1bb7efc_prof);

        
        $__internal_890f15085bdc8798ad91006716aa55f27e4085278538c14b8317df4789910a93->leave($__internal_890f15085bdc8798ad91006716aa55f27e4085278538c14b8317df4789910a93_prof);

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
