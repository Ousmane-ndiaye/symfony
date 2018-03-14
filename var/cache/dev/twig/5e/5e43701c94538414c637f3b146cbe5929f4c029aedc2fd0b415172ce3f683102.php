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
        $__internal_1d3237aaaab7169aca53e801cabd79d8914ee5ee70e4694b08af6e2f8247776e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3237aaaab7169aca53e801cabd79d8914ee5ee70e4694b08af6e2f8247776e->enter($__internal_1d3237aaaab7169aca53e801cabd79d8914ee5ee70e4694b08af6e2f8247776e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:index.html.twig"));

        $__internal_81353593ca3fd51afc1071157f080229466ec455d2c0090fb3802cd30c3ca563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81353593ca3fd51afc1071157f080229466ec455d2c0090fb3802cd30c3ca563->enter($__internal_81353593ca3fd51afc1071157f080229466ec455d2c0090fb3802cd30c3ca563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d3237aaaab7169aca53e801cabd79d8914ee5ee70e4694b08af6e2f8247776e->leave($__internal_1d3237aaaab7169aca53e801cabd79d8914ee5ee70e4694b08af6e2f8247776e_prof);

        
        $__internal_81353593ca3fd51afc1071157f080229466ec455d2c0090fb3802cd30c3ca563->leave($__internal_81353593ca3fd51afc1071157f080229466ec455d2c0090fb3802cd30c3ca563_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aac8eb392979d6d2abe6269b9045731d44a243170fee322e76507b7038931009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac8eb392979d6d2abe6269b9045731d44a243170fee322e76507b7038931009->enter($__internal_aac8eb392979d6d2abe6269b9045731d44a243170fee322e76507b7038931009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a6e005ac75d51904e3ebae8cb92b2af0d7e4c6d271a5209dca0cd5c95e1f92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6e005ac75d51904e3ebae8cb92b2af0d7e4c6d271a5209dca0cd5c95e1f92c->enter($__internal_2a6e005ac75d51904e3ebae8cb92b2af0d7e4c6d271a5209dca0cd5c95e1f92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_2a6e005ac75d51904e3ebae8cb92b2af0d7e4c6d271a5209dca0cd5c95e1f92c->leave($__internal_2a6e005ac75d51904e3ebae8cb92b2af0d7e4c6d271a5209dca0cd5c95e1f92c_prof);

        
        $__internal_aac8eb392979d6d2abe6269b9045731d44a243170fee322e76507b7038931009->leave($__internal_aac8eb392979d6d2abe6269b9045731d44a243170fee322e76507b7038931009_prof);

    }

    // line 5
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_41bb81dea164eb70f52f30df2d40623dcb47bd7fd22de30a64e7c9e899b72fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bb81dea164eb70f52f30df2d40623dcb47bd7fd22de30a64e7c9e899b72fbd->enter($__internal_41bb81dea164eb70f52f30df2d40623dcb47bd7fd22de30a64e7c9e899b72fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_b5221342cb52771cb565fb504e8d2d007bd7cfb6383fdfb5cc703cf9ae8888e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5221342cb52771cb565fb504e8d2d007bd7cfb6383fdfb5cc703cf9ae8888e1->enter($__internal_b5221342cb52771cb565fb504e8d2d007bd7cfb6383fdfb5cc703cf9ae8888e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_b5221342cb52771cb565fb504e8d2d007bd7cfb6383fdfb5cc703cf9ae8888e1->leave($__internal_b5221342cb52771cb565fb504e8d2d007bd7cfb6383fdfb5cc703cf9ae8888e1_prof);

        
        $__internal_41bb81dea164eb70f52f30df2d40623dcb47bd7fd22de30a64e7c9e899b72fbd->leave($__internal_41bb81dea164eb70f52f30df2d40623dcb47bd7fd22de30a64e7c9e899b72fbd_prof);

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
