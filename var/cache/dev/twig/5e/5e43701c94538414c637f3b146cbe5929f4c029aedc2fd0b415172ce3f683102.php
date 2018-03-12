<?php

/* SoultanaBundle:Admin:index.html.twig */
class __TwigTemplate_0ed234a6095f4f7b76191b0c6ad831542e19eb760fd78ab0d096c4b73183adab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "SoultanaBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3100d5bcb3a98404eb6306042ce1138b4509a0fe422cb795ec1c74cf754cb5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3100d5bcb3a98404eb6306042ce1138b4509a0fe422cb795ec1c74cf754cb5c8->enter($__internal_3100d5bcb3a98404eb6306042ce1138b4509a0fe422cb795ec1c74cf754cb5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:index.html.twig"));

        $__internal_6935ea542511d180d89757f0d2acb121725c0844c821b249e0d284b9fc1dbd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6935ea542511d180d89757f0d2acb121725c0844c821b249e0d284b9fc1dbd26->enter($__internal_6935ea542511d180d89757f0d2acb121725c0844c821b249e0d284b9fc1dbd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3100d5bcb3a98404eb6306042ce1138b4509a0fe422cb795ec1c74cf754cb5c8->leave($__internal_3100d5bcb3a98404eb6306042ce1138b4509a0fe422cb795ec1c74cf754cb5c8_prof);

        
        $__internal_6935ea542511d180d89757f0d2acb121725c0844c821b249e0d284b9fc1dbd26->leave($__internal_6935ea542511d180d89757f0d2acb121725c0844c821b249e0d284b9fc1dbd26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33b2f79e97436164c83176fd96f2788278ca4bd15748d392889b5ebfd098ae82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33b2f79e97436164c83176fd96f2788278ca4bd15748d392889b5ebfd098ae82->enter($__internal_33b2f79e97436164c83176fd96f2788278ca4bd15748d392889b5ebfd098ae82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f6421a0f9f15a69aef3136b91a0d74e3456a43a7a0b0a7907070b90bea9ce38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6421a0f9f15a69aef3136b91a0d74e3456a43a7a0b0a7907070b90bea9ce38->enter($__internal_9f6421a0f9f15a69aef3136b91a0d74e3456a43a7a0b0a7907070b90bea9ce38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_9f6421a0f9f15a69aef3136b91a0d74e3456a43a7a0b0a7907070b90bea9ce38->leave($__internal_9f6421a0f9f15a69aef3136b91a0d74e3456a43a7a0b0a7907070b90bea9ce38_prof);

        
        $__internal_33b2f79e97436164c83176fd96f2788278ca4bd15748d392889b5ebfd098ae82->leave($__internal_33b2f79e97436164c83176fd96f2788278ca4bd15748d392889b5ebfd098ae82_prof);

    }

    // line 5
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_5d9da768f939747df6356f23532857133feddf696398340bafdf3af316287709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9da768f939747df6356f23532857133feddf696398340bafdf3af316287709->enter($__internal_5d9da768f939747df6356f23532857133feddf696398340bafdf3af316287709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_ceaef3d357ae95625222c7f0baf47556abdb84cfaeab8bb8c2746d909aec2058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceaef3d357ae95625222c7f0baf47556abdb84cfaeab8bb8c2746d909aec2058->enter($__internal_ceaef3d357ae95625222c7f0baf47556abdb84cfaeab8bb8c2746d909aec2058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 6
        echo "    <!-- Start Widget -->
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-info\">
                <span class=\"mini-stat-icon\"><i class=\"ion-social-usd\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">15852</span> Total Sales
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last week's Sales <span class=\"pull-right\">235</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bg-purple bx-shadow\">
                <span class=\"mini-stat-icon\"><i class=\"ion-ios7-cart\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">956</span> New Orders
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last week's Orders <span class=\"pull-right\">59</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bg-success bx-shadow\">
                <span class=\"mini-stat-icon\"><i class=\"ion-eye\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">20544</span> Unique Visitors
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last month's Visitors <span class=\"pull-right\">1026</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bg-primary bx-shadow\">
                <span class=\"mini-stat-icon\"><i class=\"ion-android-contacts\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">5210</span> New Users
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last month's Users <span class=\"pull-right\">136</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
";
        
        $__internal_ceaef3d357ae95625222c7f0baf47556abdb84cfaeab8bb8c2746d909aec2058->leave($__internal_ceaef3d357ae95625222c7f0baf47556abdb84cfaeab8bb8c2746d909aec2058_prof);

        
        $__internal_5d9da768f939747df6356f23532857133feddf696398340bafdf3af316287709->leave($__internal_5d9da768f939747df6356f23532857133feddf696398340bafdf3af316287709_prof);

    }

    public function getTemplateName()
    {
        return "SoultanaBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Admin{% endblock %}

{% block contenus %}
    <!-- Start Widget -->
    <div class=\"row\">
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bx-shadow bg-info\">
                <span class=\"mini-stat-icon\"><i class=\"ion-social-usd\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">15852</span> Total Sales
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last week's Sales <span class=\"pull-right\">235</span></h5>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bg-purple bx-shadow\">
                <span class=\"mini-stat-icon\"><i class=\"ion-ios7-cart\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">956</span> New Orders
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last week's Orders <span class=\"pull-right\">59</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bg-success bx-shadow\">
                <span class=\"mini-stat-icon\"><i class=\"ion-eye\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">20544</span> Unique Visitors
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last month's Visitors <span class=\"pull-right\">1026</span></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-sm-6 col-lg-3\">
            <div class=\"mini-stat clearfix bg-primary bx-shadow\">
                <span class=\"mini-stat-icon\"><i class=\"ion-android-contacts\"></i></span>
                <div class=\"mini-stat-info text-right\">
                    <span class=\"counter\">5210</span> New Users
                </div>
                <div class=\"tiles-progress\">
                    <div class=\"m-t-20\">
                        <h5 class=\"text-uppercase text-white m-0\">Last month's Users <span class=\"pull-right\">136</span></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
{% endblock %}
", "SoultanaBundle:Admin:index.html.twig", "/var/www/html/soultana.sn/src/SNT/SoultanaBundle/Resources/views/Admin/index.html.twig");
    }
}
