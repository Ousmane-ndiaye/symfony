<?php

/* ::front.html.twig */
class __TwigTemplate_97685d9827364fec047d1f97668a733be90067c3267132247f46987f7631c764 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'autrestyle' => array($this, 'block_autrestyle'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'contenus' => array($this, 'block_contenus'),
            'slide' => array($this, 'block_slide'),
            'form_recherche' => array($this, 'block_form_recherche'),
            'catalogue' => array($this, 'block_catalogue'),
            'titre_catalogue' => array($this, 'block_titre_catalogue'),
            'bienvenu' => array($this, 'block_bienvenu'),
            'temoignages1' => array($this, 'block_temoignages1'),
            'temoignages2' => array($this, 'block_temoignages2'),
            'zone_de_recherche' => array($this, 'block_zone_de_recherche'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'autrescript' => array($this, 'block_autrescript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c21114f94bc0f19fcbf6a393d210e147393e43dce7c8482646c20c8551efc23e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21114f94bc0f19fcbf6a393d210e147393e43dce7c8482646c20c8551efc23e->enter($__internal_c21114f94bc0f19fcbf6a393d210e147393e43dce7c8482646c20c8551efc23e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        $__internal_0941735b771d9de2531688f34f755a330c24b96b0d30d28258638ea5adc088ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0941735b771d9de2531688f34f755a330c24b96b0d30d28258638ea5adc088ff->enter($__internal_0941735b771d9de2531688f34f755a330c24b96b0d30d28258638ea5adc088ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::front.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"Leader dans ce domaine, la satisfaction de nos visiteurs fait notre bonheur !\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"soultana, immobilier, logement, proprieté, maison, appartement , studio, salle\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'> -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/soultana.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/soultana.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">

        ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "
        ";
        // line 47
        $this->displayBlock('autrestyle', $context, $blocks);
        // line 50
        echo "
    </head>
    <body>
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 724
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 743
        echo "
<script src=\"assets/js/vendor/modernizr-2.6.2.min.js\"></script>
    <script src=\"assets/js//jquery-1.10.2.min.js\"></script>
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/bootstrap-select.min.js\"></script>
    <script src=\"assets/js/bootstrap-hover-dropdown.js\"></script>
    <script src=\"assets/js/easypiechart.min.js\"></script>
    <script src=\"assets/js/jquery.easypiechart.min.js\"></script>
    <script src=\"assets/js/owl.carousel.min.js\"></script>
    <script src=\"assets/js/wow.js\"></script>
    <script src=\"assets/js/icheck.min.js\"></script>

    <script src=\"assets/js/price-range.js\"></script>
    <script src=\"assets/js/jquery.bootstrap.wizard.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/jquery.validate.min.js\"></script>
    <script src=\"assets/js/wizard.js\"></script>

    <script src=\"assets/js/main.js\"></script>

        ";
        // line 762
        $this->displayBlock('autrescript', $context, $blocks);
        // line 764
        echo "    </body>
</html>
";
        
        $__internal_c21114f94bc0f19fcbf6a393d210e147393e43dce7c8482646c20c8551efc23e->leave($__internal_c21114f94bc0f19fcbf6a393d210e147393e43dce7c8482646c20c8551efc23e_prof);

        
        $__internal_0941735b771d9de2531688f34f755a330c24b96b0d30d28258638ea5adc088ff->leave($__internal_0941735b771d9de2531688f34f755a330c24b96b0d30d28258638ea5adc088ff_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8cbdde13167152a3ef20d3a38032b0246f6fb2f2168a57db08543092d57dac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cbdde13167152a3ef20d3a38032b0246f6fb2f2168a57db08543092d57dac5->enter($__internal_d8cbdde13167152a3ef20d3a38032b0246f6fb2f2168a57db08543092d57dac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e1a62d55b96f797e1258e56b9c900399b1b36c53a3d8f3cf2cd6c44f59ae28c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a62d55b96f797e1258e56b9c900399b1b36c53a3d8f3cf2cd6c44f59ae28c8->enter($__internal_e1a62d55b96f797e1258e56b9c900399b1b36c53a3d8f3cf2cd6c44f59ae28c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e1a62d55b96f797e1258e56b9c900399b1b36c53a3d8f3cf2cd6c44f59ae28c8->leave($__internal_e1a62d55b96f797e1258e56b9c900399b1b36c53a3d8f3cf2cd6c44f59ae28c8_prof);

        
        $__internal_d8cbdde13167152a3ef20d3a38032b0246f6fb2f2168a57db08543092d57dac5->leave($__internal_d8cbdde13167152a3ef20d3a38032b0246f6fb2f2168a57db08543092d57dac5_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a81c8cbf628919b42ccc25758590f182ac0ddc6cf25d347e757c8bacb2bf5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a81c8cbf628919b42ccc25758590f182ac0ddc6cf25d347e757c8bacb2bf5f3->enter($__internal_8a81c8cbf628919b42ccc25758590f182ac0ddc6cf25d347e757c8bacb2bf5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4e328e229304fd5c3ad7ec36e0c1aa11ccf42792d0e88c2cdef7952250c80693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e328e229304fd5c3ad7ec36e0c1aa11ccf42792d0e88c2cdef7952250c80693->enter($__internal_4e328e229304fd5c3ad7ec36e0c1aa11ccf42792d0e88c2cdef7952250c80693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/fontello.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/fonts/icon-7-stroke/css/helper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/icheck.min_all.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/price-range.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/owl.theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/owl.transitions.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/monstyle.css"), "html", null, true);
        echo "\">
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
        ";
        
        $__internal_4e328e229304fd5c3ad7ec36e0c1aa11ccf42792d0e88c2cdef7952250c80693->leave($__internal_4e328e229304fd5c3ad7ec36e0c1aa11ccf42792d0e88c2cdef7952250c80693_prof);

        
        $__internal_8a81c8cbf628919b42ccc25758590f182ac0ddc6cf25d347e757c8bacb2bf5f3->leave($__internal_8a81c8cbf628919b42ccc25758590f182ac0ddc6cf25d347e757c8bacb2bf5f3_prof);

    }

    // line 47
    public function block_autrestyle($context, array $blocks = array())
    {
        $__internal_4eeb050ee534a82e42fcfcf3198083c1680fa147e25be1d8e84ef4b658882677 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eeb050ee534a82e42fcfcf3198083c1680fa147e25be1d8e84ef4b658882677->enter($__internal_4eeb050ee534a82e42fcfcf3198083c1680fa147e25be1d8e84ef4b658882677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrestyle"));

        $__internal_ebb859f614345175e7801897bf8b859307174510012ad7706f716ed4530c2876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb859f614345175e7801897bf8b859307174510012ad7706f716ed4530c2876->enter($__internal_ebb859f614345175e7801897bf8b859307174510012ad7706f716ed4530c2876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrestyle"));

        // line 48
        echo "
        ";
        
        $__internal_ebb859f614345175e7801897bf8b859307174510012ad7706f716ed4530c2876->leave($__internal_ebb859f614345175e7801897bf8b859307174510012ad7706f716ed4530c2876_prof);

        
        $__internal_4eeb050ee534a82e42fcfcf3198083c1680fa147e25be1d8e84ef4b658882677->leave($__internal_4eeb050ee534a82e42fcfcf3198083c1680fa147e25be1d8e84ef4b658882677_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_e446aca4f341070702223677306da4b2df828b56d1f2e1e11243e8c57a273d99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e446aca4f341070702223677306da4b2df828b56d1f2e1e11243e8c57a273d99->enter($__internal_e446aca4f341070702223677306da4b2df828b56d1f2e1e11243e8c57a273d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7a0f5c8ee3934a130b8c6335a5d32670d92dbdf337e6ced10288dc09be836fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a0f5c8ee3934a130b8c6335a5d32670d92dbdf337e6ced10288dc09be836fd->enter($__internal_c7a0f5c8ee3934a130b8c6335a5d32670d92dbdf337e6ced10288dc09be836fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "        <div id=\"preloader\">
            <div id=\"status\">&nbsp;</div>
        </div>
        <!-- Body content -->
        ";
        // line 58
        $this->displayBlock('header', $context, $blocks);
        // line 116
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 160
        echo "        ";
        $this->displayBlock('contenus', $context, $blocks);
        // line 586
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 723
        echo "        ";
        
        $__internal_c7a0f5c8ee3934a130b8c6335a5d32670d92dbdf337e6ced10288dc09be836fd->leave($__internal_c7a0f5c8ee3934a130b8c6335a5d32670d92dbdf337e6ced10288dc09be836fd_prof);

        
        $__internal_e446aca4f341070702223677306da4b2df828b56d1f2e1e11243e8c57a273d99->leave($__internal_e446aca4f341070702223677306da4b2df828b56d1f2e1e11243e8c57a273d99_prof);

    }

    // line 58
    public function block_header($context, array $blocks = array())
    {
        $__internal_b99f337ea3bc1e48d3fd29334a2a9600dde2fd9e7c401beb6ffbb32ef4e5ece3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b99f337ea3bc1e48d3fd29334a2a9600dde2fd9e7c401beb6ffbb32ef4e5ece3->enter($__internal_b99f337ea3bc1e48d3fd29334a2a9600dde2fd9e7c401beb6ffbb32ef4e5ece3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1cf137acf1e2c469e182f929a7ff77426414c1bc0962205711efd7f0964120e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf137acf1e2c469e182f929a7ff77426414c1bc0962205711efd7f0964120e8->enter($__internal_1cf137acf1e2c469e182f929a7ff77426414c1bc0962205711efd7f0964120e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 59
        echo "        <div class=\"header-connect\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-sm-8  col-xs-12\">
                        <div class=\"header-half header-call\">
                            <p>
                                <span>
                                    <i class=\"pe-7s-call\"></i>
                                    +221 33 800 00 00</span>
                                <span>
                                    <i class=\"pe-7s-mail\"></i>
                                    soultanaimmo@gmail.com</span>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12\">
                        <div class=\"header-half header-social\">
                            <ul class=\"list-inline\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-twitter\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-vine\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-linkedin\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-dribbble\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-instagram\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End top header -->
        ";
        
        $__internal_1cf137acf1e2c469e182f929a7ff77426414c1bc0962205711efd7f0964120e8->leave($__internal_1cf137acf1e2c469e182f929a7ff77426414c1bc0962205711efd7f0964120e8_prof);

        
        $__internal_b99f337ea3bc1e48d3fd29334a2a9600dde2fd9e7c401beb6ffbb32ef4e5ece3->leave($__internal_b99f337ea3bc1e48d3fd29334a2a9600dde2fd9e7c401beb6ffbb32ef4e5ece3_prof);

    }

    // line 116
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_23e1ee602143fde038de0fa78565020e581b97614b378edb85725b7c9b69f5fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e1ee602143fde038de0fa78565020e581b97614b378edb85725b7c9b69f5fc->enter($__internal_23e1ee602143fde038de0fa78565020e581b97614b378edb85725b7c9b69f5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_a6e5f6a2e243f7d132497a6591c1f83283cac1d5379d6861ece482e45d9db934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e5f6a2e243f7d132497a6591c1f83283cac1d5379d6861ece482e45d9db934->enter($__internal_a6e5f6a2e243f7d132497a6591c1f83283cac1d5379d6861ece482e45d9db934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 117
        echo "        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navigation\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse yamm\" id=\"navigation\">
                    <div class=\"button navbar-right\">
                        <button class=\"navbar-btn nav-button wow bounceInRight login\"><a style=\"color: white;\" href=\"\">Login</a></button>
                        <button class=\"navbar-btn nav-button wow fadeInRight\"><a style=\"color: white;\" href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proprietaire_soumettre_bien");
        echo "\">Soumettre un bien</a></button>
                    </div>
                    <ul class=\"main-nav nav navbar-nav navbar-right\">
                        <li class=\"ymm-sw \" data-wow-delay=\"0.1s\">
                            <a href=\"\" class=\"active\">Accueil</a>
                        </li>

                        <li class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">
                            <a class=\"\" href=\"properties.html\">Aide et conseils</a>
                        </li>

                        <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                            <a class=\"\" href=\"property.html\">Propriètaire</a>
                        </li>

                        <li class=\"wow fadeInDown\" data-wow-delay=\"0.5s\">
                            <a href=\"contact.html\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
        ";
        
        $__internal_a6e5f6a2e243f7d132497a6591c1f83283cac1d5379d6861ece482e45d9db934->leave($__internal_a6e5f6a2e243f7d132497a6591c1f83283cac1d5379d6861ece482e45d9db934_prof);

        
        $__internal_23e1ee602143fde038de0fa78565020e581b97614b378edb85725b7c9b69f5fc->leave($__internal_23e1ee602143fde038de0fa78565020e581b97614b378edb85725b7c9b69f5fc_prof);

    }

    // line 160
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_ac0e55cd9bf14bc85123e715969ac2fd08ac6db48886ee13e2634f292dc6394b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0e55cd9bf14bc85123e715969ac2fd08ac6db48886ee13e2634f292dc6394b->enter($__internal_ac0e55cd9bf14bc85123e715969ac2fd08ac6db48886ee13e2634f292dc6394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_643b00e9cdc625a6df426b8fcd869d06ec7a2b8303a3ae9897ac917fa73ba7e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643b00e9cdc625a6df426b8fcd869d06ec7a2b8303a3ae9897ac917fa73ba7e6->enter($__internal_643b00e9cdc625a6df426b8fcd869d06ec7a2b8303a3ae9897ac917fa73ba7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 161
        echo "        ";
        $this->displayBlock('slide', $context, $blocks);
        // line 272
        echo "        ";
        $this->displayBlock('catalogue', $context, $blocks);
        // line 327
        echo "        ";
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 392
        echo "        ";
        $this->displayBlock('temoignages1', $context, $blocks);
        // line 465
        echo "        ";
        $this->displayBlock('temoignages2', $context, $blocks);
        // line 532
        echo "        ";
        $this->displayBlock('zone_de_recherche', $context, $blocks);
        // line 585
        echo "        ";
        
        $__internal_643b00e9cdc625a6df426b8fcd869d06ec7a2b8303a3ae9897ac917fa73ba7e6->leave($__internal_643b00e9cdc625a6df426b8fcd869d06ec7a2b8303a3ae9897ac917fa73ba7e6_prof);

        
        $__internal_ac0e55cd9bf14bc85123e715969ac2fd08ac6db48886ee13e2634f292dc6394b->leave($__internal_ac0e55cd9bf14bc85123e715969ac2fd08ac6db48886ee13e2634f292dc6394b_prof);

    }

    // line 161
    public function block_slide($context, array $blocks = array())
    {
        $__internal_f5592a5257a7dd4be6012437c2707bfab84a7ac8cddf7afdaad484329175c042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5592a5257a7dd4be6012437c2707bfab84a7ac8cddf7afdaad484329175c042->enter($__internal_f5592a5257a7dd4be6012437c2707bfab84a7ac8cddf7afdaad484329175c042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_a9c36940d08fcc597d97950e9eb43d800cfe255fb093a651431320e2b17b5b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c36940d08fcc597d97950e9eb43d800cfe255fb093a651431320e2b17b5b38->enter($__internal_a9c36940d08fcc597d97950e9eb43d800cfe255fb093a651431320e2b17b5b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 162
        echo "        <div class=\"slider-area\">
            <div class=\"slider\">
                <div id=\"bg-slider\" class=\"owl-carousel owl-theme\">

                    <div class=\"item\"><img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/slide1/blog1.jpg"), "html", null, true);
        echo "\" alt=\"GTA V\"></div>
                    <div class=\"item\"><img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/slide1/slider-image-3.jpg"), "html", null, true);
        echo "\" alt=\"The Last of us\"></div>
                    <div class=\"item\"><img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/slide1/property2.jpg"), "html", null, true);
        echo "\" alt=\"GTA V\"></div>

                </div>
            </div>
            <div class=\"slider-content\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                        <h2 class=\"notre_slogan\" style=\"color: #FDC600; font-weight: bold; text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;\">1er sur l'immobilier des particuliers</h2>
                        <p class=\"notre_devise\" style=\"font-size: 18px; text-shadow:#FDC600 1px 1px, #FDC600 -1px 1px, #FDC600 -1px -1px, #FDC600 1px -1px;\">Leader dans ce domaine, la satisfaction de nos visiteurs fait notre bonheur !</p>
                        ";
        // line 177
        $this->displayBlock('form_recherche', $context, $blocks);
        // line 267
        echo "                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_a9c36940d08fcc597d97950e9eb43d800cfe255fb093a651431320e2b17b5b38->leave($__internal_a9c36940d08fcc597d97950e9eb43d800cfe255fb093a651431320e2b17b5b38_prof);

        
        $__internal_f5592a5257a7dd4be6012437c2707bfab84a7ac8cddf7afdaad484329175c042->leave($__internal_f5592a5257a7dd4be6012437c2707bfab84a7ac8cddf7afdaad484329175c042_prof);

    }

    // line 177
    public function block_form_recherche($context, array $blocks = array())
    {
        $__internal_5045b4a432d162f16542440be97568e86d565ec2f1127d18cb66f15967d9259e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5045b4a432d162f16542440be97568e86d565ec2f1127d18cb66f15967d9259e->enter($__internal_5045b4a432d162f16542440be97568e86d565ec2f1127d18cb66f15967d9259e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        $__internal_f5706f5165f117cbe3b6f7760b0ee770ba367ac342f3cf76fbd1a3ff287f7a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5706f5165f117cbe3b6f7760b0ee770ba367ac342f3cf76fbd1a3ff287f7a1c->enter($__internal_f5706f5165f117cbe3b6f7760b0ee770ba367ac342f3cf76fbd1a3ff287f7a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        // line 178
        echo "                        <div class=\"search-form wow pulse changements\" data-wow-delay=\"0.8s\">
                            <form action=\"\" method=\"post\" data-form=\"form_recherche\" class=\"form-inline\">
                                <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                                <button class=\"btn  toggle-btn\" type=\"button\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <div class=\"form-group\">
                                    <!-- <input type=\"text\" name=\"lieu\" id=\"lieu\" class=\"\" placeholder=\"Saisir une localité\"/> -->
                                    <select name=\"nomVille\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                    ";
        // line 190
        echo "                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <select name=\"TypeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                    ";
        // line 197
        echo "                                    </select>
                                </div>
                                <div class=\"form-group mar-r-20\">
                                    <input type=\"text\" name=\"prix_choisi\" id=\"prix_choisi\" class=\"filter-option\" placeholder=\"\" readonly=\"true\" />
                                    <input type=\"text\" name=\"prix\" class=\"span2 prix_compris\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
                                    <b class=\"pull-left color numero\">50 000f</b>
                                    <b class=\"pull-right color numero\">500 000 000f</b>
                                </div>
                                <!-- End of -->
                                <button class=\"btn search-btn\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                                <div style=\"display: none;\" class=\"search-toggle\">
                                    <div class=\"search-row\">
                                        <div class=\"form-group mar-r-20\">
                                            <label for=\"price-range\">Nombre de salle de bains :</label>
                                            <input type=\"text\" name=\"nbreSallebains\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                            <b class=\"pull-left color numero\">1</b>
                                            <b class=\"pull-right color numero\">20</b>
                                        </div>
                                        <!-- End of -->
                                        <div class=\"form-group mar-l-20\">
                                            <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                            <input type=\"text\" name=\"nbreChambres\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
                                            <b class=\"pull-left color numero\">1</b>
                                            <b class=\"pull-right color numero\">20</b>
                                        </div>
                                        <!-- End of -->
                                    </div>
                                    <br>
                                    <div class=\"search-row\">
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"meuble\" id=\"meuble\">
                                                    Meublé
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of -->
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"balcon\" id=\"balcon\">
                                                    Avec balcon
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of -->
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"parking\" id=\"parking\">
                                                    Avec parking
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of -->
                                    </div>

                                    <div class=\"search-row\">
                                        <hr>
                                    </div>
                                    <button class=\"btn search-btn prop-btm-sheaerch\" type=\"submit\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        ";
        
        $__internal_f5706f5165f117cbe3b6f7760b0ee770ba367ac342f3cf76fbd1a3ff287f7a1c->leave($__internal_f5706f5165f117cbe3b6f7760b0ee770ba367ac342f3cf76fbd1a3ff287f7a1c_prof);

        
        $__internal_5045b4a432d162f16542440be97568e86d565ec2f1127d18cb66f15967d9259e->leave($__internal_5045b4a432d162f16542440be97568e86d565ec2f1127d18cb66f15967d9259e_prof);

    }

    // line 272
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_68b268e7b33e748c1a804821880b22bfbf3e914f50431583193579422f9f52e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b268e7b33e748c1a804821880b22bfbf3e914f50431583193579422f9f52e6->enter($__internal_68b268e7b33e748c1a804821880b22bfbf3e914f50431583193579422f9f52e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_27d35f9a66a327b63a6ed4e6c3d8610cbf26651f01548ef3eb9964ef5a49a6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d35f9a66a327b63a6ed4e6c3d8610cbf26651f01548ef3eb9964ef5a49a6b1->enter($__internal_27d35f9a66a327b63a6ed4e6c3d8610cbf26651f01548ef3eb9964ef5a49a6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 273
        echo "        <!-- property area -->
        <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
            <div class=\"container\">
                ";
        // line 276
        $this->displayBlock('titre_catalogue', $context, $blocks);
        // line 285
        echo "                ";
        // line 324
        echo "            </div>
        </div>
        ";
        
        $__internal_27d35f9a66a327b63a6ed4e6c3d8610cbf26651f01548ef3eb9964ef5a49a6b1->leave($__internal_27d35f9a66a327b63a6ed4e6c3d8610cbf26651f01548ef3eb9964ef5a49a6b1_prof);

        
        $__internal_68b268e7b33e748c1a804821880b22bfbf3e914f50431583193579422f9f52e6->leave($__internal_68b268e7b33e748c1a804821880b22bfbf3e914f50431583193579422f9f52e6_prof);

    }

    // line 276
    public function block_titre_catalogue($context, array $blocks = array())
    {
        $__internal_e828ea621d9b13c01931eb0ce81d35a111aa9df5584b0058599c67a1190c46a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e828ea621d9b13c01931eb0ce81d35a111aa9df5584b0058599c67a1190c46a7->enter($__internal_e828ea621d9b13c01931eb0ce81d35a111aa9df5584b0058599c67a1190c46a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        $__internal_aede16f9cdb1d4d5fa76fcac0543128f855407a9176d65a5ba4330965fed5254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aede16f9cdb1d4d5fa76fcac0543128f855407a9176d65a5ba4330965fed5254->enter($__internal_aede16f9cdb1d4d5fa76fcac0543128f855407a9176d65a5ba4330965fed5254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        // line 277
        echo "                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                        <!-- /.feature title -->
                        <h2>Top des propriétés soumises</h2>
                        <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .</p>
                    </div>
                </div>
                ";
        
        $__internal_aede16f9cdb1d4d5fa76fcac0543128f855407a9176d65a5ba4330965fed5254->leave($__internal_aede16f9cdb1d4d5fa76fcac0543128f855407a9176d65a5ba4330965fed5254_prof);

        
        $__internal_e828ea621d9b13c01931eb0ce81d35a111aa9df5584b0058599c67a1190c46a7->leave($__internal_e828ea621d9b13c01931eb0ce81d35a111aa9df5584b0058599c67a1190c46a7_prof);

    }

    // line 327
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_5792d08895aaad6c1bb7c1c1e62f0c388db3b32dc9c62cfd255a1427ef1421a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5792d08895aaad6c1bb7c1c1e62f0c388db3b32dc9c62cfd255a1427ef1421a8->enter($__internal_5792d08895aaad6c1bb7c1c1e62f0c388db3b32dc9c62cfd255a1427ef1421a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        $__internal_b191d3898ed444f9cb54c9c4e0486c1237e144deb40125c63eeab943b73c99e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b191d3898ed444f9cb54c9c4e0486c1237e144deb40125c63eeab943b73c99e2->enter($__internal_b191d3898ed444f9cb54c9c4e0486c1237e144deb40125c63eeab943b73c99e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        // line 328
        echo "        <!--Welcome area -->
        <div class=\"Welcome-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 Welcome-entry col-sm-12\">
                        <div class=\"col-md-5 col-md-offset-2 col-sm-6 col-xs-12\">
                            <div class=\"welcome_text wow fadeInLeft\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                                <div class=\"row\">
                                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                                        <!-- /.feature title -->
                                        <h2>SOUL TANA</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-6 col-xs-12\">
                            <div class=\"welcome_services wow fadeInRight\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-home pe-4x\"></i>
                                            </div>
                                            <h3>Any property</h3>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-users pe-4x\"></i>
                                            </div>
                                            <h3>More Clients</h3>
                                        </div>
                                    </div>

                                    <div class=\"col-xs-12 text-center\">
                                        <i class=\"welcome-circle\"></i>
                                    </div>

                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-notebook pe-4x\"></i>
                                            </div>
                                            <h3>Easy to use</h3>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-help2 pe-4x\"></i>
                                            </div>
                                            <h3>Any help</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_b191d3898ed444f9cb54c9c4e0486c1237e144deb40125c63eeab943b73c99e2->leave($__internal_b191d3898ed444f9cb54c9c4e0486c1237e144deb40125c63eeab943b73c99e2_prof);

        
        $__internal_5792d08895aaad6c1bb7c1c1e62f0c388db3b32dc9c62cfd255a1427ef1421a8->leave($__internal_5792d08895aaad6c1bb7c1c1e62f0c388db3b32dc9c62cfd255a1427ef1421a8_prof);

    }

    // line 392
    public function block_temoignages1($context, array $blocks = array())
    {
        $__internal_6413dd632e3cec03181f587e4c5c2b34e7031b22752dad2228ca8939e1ef0fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6413dd632e3cec03181f587e4c5c2b34e7031b22752dad2228ca8939e1ef0fc5->enter($__internal_6413dd632e3cec03181f587e4c5c2b34e7031b22752dad2228ca8939e1ef0fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        $__internal_a7337e58b097863d4c45151753fba59ce93c76bcc068ae3105456121c5beabae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7337e58b097863d4c45151753fba59ce93c76bcc068ae3105456121c5beabae->enter($__internal_a7337e58b097863d4c45151753fba59ce93c76bcc068ae3105456121c5beabae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        // line 393
        echo "        <!--TESTIMONIALS -->
        <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                        <!-- /.feature title -->
                        <h2>Nos Clients ont dit</h2>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"row testimonial\">
                        <div class=\"col-md-12\">
                            <div id=\"testimonial-slider\">
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,</strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                        <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/client-face1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,</strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face\">
                                        <img src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/client-face2.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,
                                            </strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face\">
                                        <img src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/client-face1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,
                                            </strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face\">
                                        <img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/client-face2.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        ";
        
        $__internal_a7337e58b097863d4c45151753fba59ce93c76bcc068ae3105456121c5beabae->leave($__internal_a7337e58b097863d4c45151753fba59ce93c76bcc068ae3105456121c5beabae_prof);

        
        $__internal_6413dd632e3cec03181f587e4c5c2b34e7031b22752dad2228ca8939e1ef0fc5->leave($__internal_6413dd632e3cec03181f587e4c5c2b34e7031b22752dad2228ca8939e1ef0fc5_prof);

    }

    // line 465
    public function block_temoignages2($context, array $blocks = array())
    {
        $__internal_2ff20fc1d5ed64828be357bc53a35eb8b913e395141a3f43d98e847bc7c692b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ff20fc1d5ed64828be357bc53a35eb8b913e395141a3f43d98e847bc7c692b3->enter($__internal_2ff20fc1d5ed64828be357bc53a35eb8b913e395141a3f43d98e847bc7c692b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        $__internal_1e0cbe37c32ed27f7e21c0c7b43682f2f780f1189a614eba9169b75b6b22e54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e0cbe37c32ed27f7e21c0c7b43682f2f780f1189a614eba9169b75b6b22e54e->enter($__internal_1e0cbe37c32ed27f7e21c0c7b43682f2f780f1189a614eba9169b75b6b22e54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        // line 466
        echo "        <!-- Count area -->
        <div class=\"count-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                        <!-- /.feature title -->
                        <h2>Vous Pouvez Nous Faire Confiance
                        </h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 col-xs-12 percent-blocks m-main\" data-waypoint-scroll=\"true\">
                        <div class=\"row\">
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-users\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"5000\">
                                        <h2 class=\"percent\" id=\"counter\">0</h2>
                                        <h5>Client satisfaits
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-home\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"12000\">
                                        <h2 class=\"percent\" id=\"counter1\">0</h2>
                                        <h5>propriétés en stock</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-flag\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"120\">
                                        <h2 class=\"percent\" id=\"counter2\">0</h2>
                                        <h5>VILLES ENREGISTRÉES
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-graph2\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"5000\">
                                        <h2 class=\"percent\" id=\"counter3\">5000</h2>
                                        <h5>BRANCHES DE CONCESSION</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_1e0cbe37c32ed27f7e21c0c7b43682f2f780f1189a614eba9169b75b6b22e54e->leave($__internal_1e0cbe37c32ed27f7e21c0c7b43682f2f780f1189a614eba9169b75b6b22e54e_prof);

        
        $__internal_2ff20fc1d5ed64828be357bc53a35eb8b913e395141a3f43d98e847bc7c692b3->leave($__internal_2ff20fc1d5ed64828be357bc53a35eb8b913e395141a3f43d98e847bc7c692b3_prof);

    }

    // line 532
    public function block_zone_de_recherche($context, array $blocks = array())
    {
        $__internal_cd7a05a27c5f518dc83ac8617ba172aa140938c840d7b870cc58cfe72a480084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd7a05a27c5f518dc83ac8617ba172aa140938c840d7b870cc58cfe72a480084->enter($__internal_cd7a05a27c5f518dc83ac8617ba172aa140938c840d7b870cc58cfe72a480084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        $__internal_8d6771f20aa200bba2d7d63b62ada31bd013fa59e14d1314a222ce579fb345c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6771f20aa200bba2d7d63b62ada31bd013fa59e14d1314a222ce579fb345c9->enter($__internal_8d6771f20aa200bba2d7d63b62ada31bd013fa59e14d1314a222ce579fb345c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        // line 533
        echo "        <!-- boy-sale area -->
        <div class=\"boy-sale-area\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12\">
                        <div class=\"asks-first\">
                            <div class=\"asks-first-circle\">
                                <span class=\"fa fa-search\"></span>
                            </div>
                            <div class=\"asks-first-info\">
                                <h2>CHERCHEZ VOUS UNE  Propriété ?</h2>
                                <p>
                                    varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa
                                </p>
                            </div>
                            <div class=\"asks-first-arrow\">
                                <a href=\"properties.html\">
                                    <span class=\"fa fa-angle-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0\">
                        <div class=\"asks-first\">
                            <div class=\"asks-first-circle\">
                                <span class=\"fa fa-usd\"></span>
                            </div>
                            <div class=\"asks-first-info\">
                                <h2>VENDEZ VOUS UNE Propriété ?</h2>
                                <p>
                                    varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa
                                </p>
                            </div>
                            <div class=\"asks-first-arrow\">
                                <a href=\"properties.html\">
                                    <span class=\"fa fa-angle-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12\">
                        <p class=\"asks-call\">QUESTIONS? APPELEZ NOUS :
                            <span class=\"strong\">
                                + 221 33 800 00 00
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_8d6771f20aa200bba2d7d63b62ada31bd013fa59e14d1314a222ce579fb345c9->leave($__internal_8d6771f20aa200bba2d7d63b62ada31bd013fa59e14d1314a222ce579fb345c9_prof);

        
        $__internal_cd7a05a27c5f518dc83ac8617ba172aa140938c840d7b870cc58cfe72a480084->leave($__internal_cd7a05a27c5f518dc83ac8617ba172aa140938c840d7b870cc58cfe72a480084_prof);

    }

    // line 586
    public function block_footer($context, array $blocks = array())
    {
        $__internal_41632be0b568890882de2062a8ccb1f3fd66c5804d843b29d41fb58ff3f13e4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41632be0b568890882de2062a8ccb1f3fd66c5804d843b29d41fb58ff3f13e4d->enter($__internal_41632be0b568890882de2062a8ccb1f3fd66c5804d843b29d41fb58ff3f13e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_b518374664eb2e1a89b6df6fe18152f0a4638a8104887aac98d5d555432859c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b518374664eb2e1a89b6df6fe18152f0a4638a8104887aac98d5d555432859c2->enter($__internal_b518374664eb2e1a89b6df6fe18152f0a4638a8104887aac98d5d555432859c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 587
        echo "        <!-- Footer area-->
        <div class=\"footer-area\">
            <div class=\" footer\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer\">
                                <h4>À propos de nous </h4>
                                <div class=\"footer-title-line\"></div>

                                <img src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"wow pulse\" data-wow-delay=\"1s\">
                                <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                                <ul class=\"footer-adress\">
                                    <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                    <li><i class=\"pe-7s-mail strong\"> </i> soultanaimmo@gmail.com</li>
                                    <li><i class=\"pe-7s-call strong\"> </i> + 221 33 800 00 00</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer\">
                                <h4>liens rapides </h4>
                                <div class=\"footer-title-line\"></div>
                                <ul class=\"footer-menu\">
                                    <li><a href=\"properties.html\">Properties</a>  </li>
                                    <li><a href=\"#\">Services</a>  </li>
                                    <li><a href=\"submit-property.html\">Submit property </a></li>
                                    <li><a href=\"contact.html\">Contact us</a></li>
                                    <li><a href=\"faq.html\">fqa</a>  </li>
                                    <li><a href=\"faq.html\">Terms </a>  </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer\">
                                <h4>News</h4>
                                <div class=\"footer-title-line\"></div>
                                <ul class=\"footer-blog\">
                                    <li>
                                        <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                            <a href=\"single.html\">
                                                <img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                            </a>
                                            <span class=\"blg-date\">12-12-2016</span>

                                        </div>
                                        <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                            <h6> <a href=\"single.html\">Add news functions </a></h6>
                                            <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                            <a href=\"single.html\">
                                                <img src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                            </a>
                                            <span class=\"blg-date\">12-12-2016</span>

                                        </div>
                                        <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                            <h6> <a href=\"single.html\">Add news functions </a></h6>
                                            <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                            <a href=\"single.html\">
                                                <img src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                            </a>
                                            <span class=\"blg-date\">12-12-2016</span>

                                        </div>
                                        <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                            <h6> <a href=\"single.html\">Add news functions </a></h6>
                                            <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer news-letter\">
                                <h4>Restez en contact</h4>
                                <div class=\"footer-title-line\"></div>
                                <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                                <form>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" type=\"text\" placeholder=\"E-mail ... \">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-primary subscribe\" type=\"button\"><i class=\"pe-7s-paper-plane pe-2x\"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <div class=\"social pull-right\">
                                    <ul>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://twitter.com/kimarotec\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://www.facebook.com/kimarotec\" data-wow-delay=\"0.2s\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://plus.google.com/kimarotec\" data-wow-delay=\"0.3s\"><i class=\"fa fa-google-plus\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.4s\"><i class=\"fa fa-instagram\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.6s\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"footer-copy text-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"pull-left\">
                            <span> (C) <a href=\"http://www.KimaroTec.com\">KimaroTheme</a> , All rights reserved 2016  </span>
                        </div>
                        <div class=\"bottom-menu pull-right\">
                            <ul>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.2s\">Home</a></li>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.3s\">Property</a></li>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.4s\">Faq</a></li>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.6s\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        
        $__internal_b518374664eb2e1a89b6df6fe18152f0a4638a8104887aac98d5d555432859c2->leave($__internal_b518374664eb2e1a89b6df6fe18152f0a4638a8104887aac98d5d555432859c2_prof);

        
        $__internal_41632be0b568890882de2062a8ccb1f3fd66c5804d843b29d41fb58ff3f13e4d->leave($__internal_41632be0b568890882de2062a8ccb1f3fd66c5804d843b29d41fb58ff3f13e4d_prof);

    }

    // line 724
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aade53d9c3eb6e6019111f55259572980cdeb3e30573435c2f61932420c02bcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aade53d9c3eb6e6019111f55259572980cdeb3e30573435c2f61932420c02bcc->enter($__internal_aade53d9c3eb6e6019111f55259572980cdeb3e30573435c2f61932420c02bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5619ff129f36fc5aafa40b382651b2b5e3919fdf6f8d68e1f5f23271199d76f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5619ff129f36fc5aafa40b382651b2b5e3919fdf6f8d68e1f5f23271199d76f->enter($__internal_e5619ff129f36fc5aafa40b382651b2b5e3919fdf6f8d68e1f5f23271199d76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 725
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 730
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 733
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/wow.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/price-range.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_e5619ff129f36fc5aafa40b382651b2b5e3919fdf6f8d68e1f5f23271199d76f->leave($__internal_e5619ff129f36fc5aafa40b382651b2b5e3919fdf6f8d68e1f5f23271199d76f_prof);

        
        $__internal_aade53d9c3eb6e6019111f55259572980cdeb3e30573435c2f61932420c02bcc->leave($__internal_aade53d9c3eb6e6019111f55259572980cdeb3e30573435c2f61932420c02bcc_prof);

    }

    // line 762
    public function block_autrescript($context, array $blocks = array())
    {
        $__internal_4518f2dd7212896864197d6cb899644847e9cc94cc8ccf92aad345c022b1d9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4518f2dd7212896864197d6cb899644847e9cc94cc8ccf92aad345c022b1d9bd->enter($__internal_4518f2dd7212896864197d6cb899644847e9cc94cc8ccf92aad345c022b1d9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrescript"));

        $__internal_25944efbdbd011017396be82c5ce0cafbe2f55287be4367f65b45f9b4667cdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25944efbdbd011017396be82c5ce0cafbe2f55287be4367f65b45f9b4667cdf0->enter($__internal_25944efbdbd011017396be82c5ce0cafbe2f55287be4367f65b45f9b4667cdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrescript"));

        // line 763
        echo "        ";
        
        $__internal_25944efbdbd011017396be82c5ce0cafbe2f55287be4367f65b45f9b4667cdf0->leave($__internal_25944efbdbd011017396be82c5ce0cafbe2f55287be4367f65b45f9b4667cdf0_prof);

        
        $__internal_4518f2dd7212896864197d6cb899644847e9cc94cc8ccf92aad345c022b1d9bd->leave($__internal_4518f2dd7212896864197d6cb899644847e9cc94cc8ccf92aad345c022b1d9bd_prof);

    }

    public function getTemplateName()
    {
        return "::front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1263 => 763,  1254 => 762,  1242 => 741,  1237 => 739,  1233 => 738,  1228 => 736,  1224 => 735,  1219 => 733,  1215 => 732,  1210 => 730,  1206 => 729,  1202 => 728,  1198 => 727,  1192 => 725,  1183 => 724,  1107 => 657,  1090 => 643,  1073 => 629,  1039 => 598,  1026 => 587,  1017 => 586,  956 => 533,  947 => 532,  872 => 466,  863 => 465,  842 => 454,  826 => 441,  810 => 428,  795 => 416,  770 => 393,  761 => 392,  688 => 328,  679 => 327,  662 => 277,  653 => 276,  641 => 324,  639 => 285,  637 => 276,  632 => 273,  623 => 272,  544 => 197,  538 => 190,  527 => 178,  518 => 177,  504 => 267,  502 => 177,  490 => 168,  486 => 167,  482 => 166,  476 => 162,  467 => 161,  457 => 585,  454 => 532,  451 => 465,  448 => 392,  445 => 327,  442 => 272,  439 => 161,  430 => 160,  394 => 134,  384 => 127,  372 => 117,  363 => 116,  297 => 59,  288 => 58,  278 => 723,  275 => 586,  272 => 160,  269 => 116,  267 => 58,  261 => 54,  252 => 53,  241 => 48,  232 => 47,  214 => 38,  210 => 37,  206 => 36,  202 => 35,  198 => 34,  194 => 33,  190 => 32,  186 => 31,  182 => 30,  178 => 29,  174 => 28,  170 => 27,  166 => 26,  162 => 25,  158 => 24,  153 => 23,  144 => 22,  127 => 11,  115 => 764,  113 => 762,  92 => 743,  89 => 724,  87 => 53,  82 => 50,  80 => 47,  77 => 46,  75 => 22,  70 => 20,  66 => 19,  55 => 11,  43 => 1,);
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
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class=\"no-js\">
<!--<![endif]-->
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>{% block title %}{% endblock %}</title>
        <meta name=\"description\" content=\"Leader dans ce domaine, la satisfaction de nos visiteurs fait notre bonheur !\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"soultana, immobilier, logement, proprieté, maison, appartement , studio, salle\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'> -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"{{asset('front/soultana.ico')}}\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{asset('front/soultana.ico')}}\" type=\"image/x-icon\">

        {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/normalize.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/font-awesome.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/fontello.css')}}\">
        <link href=\"{{asset('front/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('front/assets/fonts/icon-7-stroke/css/helper.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('front/assets/css/animate.css')}}\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/bootstrap-select.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/bootstrap/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/icheck.min_all.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/price-range.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/owl.carousel.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/owl.theme.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/owl.transitions.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/responsive.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/monstyle.css')}}\">
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
        {% endblock %}

        {% block autrestyle %}

        {% endblock %}

    </head>
    <body>
        {% block body %}
        <div id=\"preloader\">
            <div id=\"status\">&nbsp;</div>
        </div>
        <!-- Body content -->
        {% block header %}
        <div class=\"header-connect\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-5 col-sm-8  col-xs-12\">
                        <div class=\"header-half header-call\">
                            <p>
                                <span>
                                    <i class=\"pe-7s-call\"></i>
                                    +221 33 800 00 00</span>
                                <span>
                                    <i class=\"pe-7s-mail\"></i>
                                    soultanaimmo@gmail.com</span>
                            </p>
                        </div>
                    </div>

                    <div class=\"col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12\">
                        <div class=\"header-half header-social\">
                            <ul class=\"list-inline\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-facebook\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-twitter\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-vine\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-linkedin\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-dribbble\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-instagram\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End top header -->
        {% endblock %}
        {% block navbar %}
        <nav class=\"navbar navbar-default\">
            <div class=\"container\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navigation\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"\"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse yamm\" id=\"navigation\">
                    <div class=\"button navbar-right\">
                        <button class=\"navbar-btn nav-button wow bounceInRight login\"><a style=\"color: white;\" href=\"\">Login</a></button>
                        <button class=\"navbar-btn nav-button wow fadeInRight\"><a style=\"color: white;\" href=\"{{path('proprietaire_soumettre_bien')}}\">Soumettre un bien</a></button>
                    </div>
                    <ul class=\"main-nav nav navbar-nav navbar-right\">
                        <li class=\"ymm-sw \" data-wow-delay=\"0.1s\">
                            <a href=\"\" class=\"active\">Accueil</a>
                        </li>

                        <li class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">
                            <a class=\"\" href=\"properties.html\">Aide et conseils</a>
                        </li>

                        <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                            <a class=\"\" href=\"property.html\">Propriètaire</a>
                        </li>

                        <li class=\"wow fadeInDown\" data-wow-delay=\"0.5s\">
                            <a href=\"contact.html\">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->
        {% endblock %}
        {% block contenus %}
        {% block slide %}
        <div class=\"slider-area\">
            <div class=\"slider\">
                <div id=\"bg-slider\" class=\"owl-carousel owl-theme\">

                    <div class=\"item\"><img src=\"{{asset('front/assets/img/slide1/blog1.jpg')}}\" alt=\"GTA V\"></div>
                    <div class=\"item\"><img src=\"{{asset('front/assets/img/slide1/slider-image-3.jpg')}}\" alt=\"The Last of us\"></div>
                    <div class=\"item\"><img src=\"{{asset('front/assets/img/slide1/property2.jpg')}}\" alt=\"GTA V\"></div>

                </div>
            </div>
            <div class=\"slider-content\">
                <div class=\"row\">
                    <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                        <h2 class=\"notre_slogan\" style=\"color: #FDC600; font-weight: bold; text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;\">1er sur l'immobilier des particuliers</h2>
                        <p class=\"notre_devise\" style=\"font-size: 18px; text-shadow:#FDC600 1px 1px, #FDC600 -1px 1px, #FDC600 -1px -1px, #FDC600 1px -1px;\">Leader dans ce domaine, la satisfaction de nos visiteurs fait notre bonheur !</p>
                        {% block form_recherche %}
                        <div class=\"search-form wow pulse changements\" data-wow-delay=\"0.8s\">
                            <form action=\"\" method=\"post\" data-form=\"form_recherche\" class=\"form-inline\">
                                <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                                <button class=\"btn  toggle-btn\" type=\"button\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                                <div class=\"form-group\">
                                    <!-- <input type=\"text\" name=\"lieu\" id=\"lieu\" class=\"\" placeholder=\"Saisir une localité\"/> -->
                                    <select name=\"nomVille\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                    {# {% for ville in villes %}
                                        <option value=\"{{ ville.id }}\"> {{ ville.nomVille }} </option>
                                    {% endfor %} #}
                                    </select>
                                </div>
                                <div class=\"form-group\">
                                    <select name=\"TypeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                    {# {% for typeBien in typesBien %}
                                        <option value=\"{{ typeBien.id }}\"> {{ typeBien.nomTypeBien }} </option>
                                    {% endfor %} #}
                                    </select>
                                </div>
                                <div class=\"form-group mar-r-20\">
                                    <input type=\"text\" name=\"prix_choisi\" id=\"prix_choisi\" class=\"filter-option\" placeholder=\"\" readonly=\"true\" />
                                    <input type=\"text\" name=\"prix\" class=\"span2 prix_compris\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
                                    <b class=\"pull-left color numero\">50 000f</b>
                                    <b class=\"pull-right color numero\">500 000 000f</b>
                                </div>
                                <!-- End of -->
                                <button class=\"btn search-btn\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                                <div style=\"display: none;\" class=\"search-toggle\">
                                    <div class=\"search-row\">
                                        <div class=\"form-group mar-r-20\">
                                            <label for=\"price-range\">Nombre de salle de bains :</label>
                                            <input type=\"text\" name=\"nbreSallebains\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                            <b class=\"pull-left color numero\">1</b>
                                            <b class=\"pull-right color numero\">20</b>
                                        </div>
                                        <!-- End of -->
                                        <div class=\"form-group mar-l-20\">
                                            <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                            <input type=\"text\" name=\"nbreChambres\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
                                            <b class=\"pull-left color numero\">1</b>
                                            <b class=\"pull-right color numero\">20</b>
                                        </div>
                                        <!-- End of -->
                                    </div>
                                    <br>
                                    <div class=\"search-row\">
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"meuble\" id=\"meuble\">
                                                    Meublé
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of -->
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"balcon\" id=\"balcon\">
                                                    Avec balcon
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of -->
                                        <div class=\"form-group\">
                                            <div class=\"checkbox\">
                                                <label>
                                                    <input type=\"checkbox\" name=\"parking\" id=\"parking\">
                                                    Avec parking
                                                </label>
                                            </div>
                                        </div>
                                        <!-- End of -->
                                    </div>

                                    <div class=\"search-row\">
                                        <hr>
                                    </div>
                                    <button class=\"btn search-btn prop-btm-sheaerch\" type=\"submit\">
                                        <i class=\"fa fa-search\"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        {% endblock %}
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block catalogue %}
        <!-- property area -->
        <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
            <div class=\"container\">
                {% block titre_catalogue %}
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                        <!-- /.feature title -->
                        <h2>Top des propriétés soumises</h2>
                        <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .</p>
                    </div>
                </div>
                {% endblock %}
                {# {% block articles %}
                <div class=\"row\">
                    <div class=\"proerty-th\">
                        {% for bien in biens %}
                        <div class=\"col-sm-6 col-md-3 p0\">
                            <div class=\"box-two proerty-item\">
                                <div class=\"item-thumb\">
                                    <a href=\"{{path('reservation_approuver',{'idBien':bien.id})}}\"><img src=\"{{asset(bien.chemin)}}\"></a>
                                </div>
                                <div class=\"item-entry overflow\">
                                    <h5>
                                        <a href=\"{{path('reservation_approuver',{'idBien':bien.id})}}s\">Superbe {{ bien.nomTypeBien }}</a>
                                    </h5>
                                    <div class=\"dot-hr\"></div>
                                    <span class=\"pull-left\">
                                        <b>Surface : </b>{{ bien.surface }}
                                    </span>
                                    <span class=\"proerty-price pull-right\">{{ bien.prixLoc }} f</span>
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                        <div class=\"col-sm-6 col-md-3 p0\">
                            <div class=\"box-tree more-proerty text-center\">
                                <div class=\"item-tree-icon\">
                                    <i class=\"fa fa-th\"></i>
                                </div>
                                <div class=\"more-entry overflow\">
                                    <h5>
                                        <a href=\"property-1.html\">DU MAL À DECIDER ?</a>
                                    </h5>
                                    <h5 class=\"tree-sub-ttl\">Voir toutes les propriétés</h5>
                                    <a href=\"\" ><button class=\"btn border-btn more-black\" value=\"All properties\">Toutes les propriétés</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% endblock %} #}
            </div>
        </div>
        {% endblock %}
        {% block bienvenu %}
        <!--Welcome area -->
        <div class=\"Welcome-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 Welcome-entry col-sm-12\">
                        <div class=\"col-md-5 col-md-offset-2 col-sm-6 col-xs-12\">
                            <div class=\"welcome_text wow fadeInLeft\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                                <div class=\"row\">
                                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                                        <!-- /.feature title -->
                                        <h2>SOUL TANA</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-5 col-sm-6 col-xs-12\">
                            <div class=\"welcome_services wow fadeInRight\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                                <div class=\"row\">
                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-home pe-4x\"></i>
                                            </div>
                                            <h3>Any property</h3>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-users pe-4x\"></i>
                                            </div>
                                            <h3>More Clients</h3>
                                        </div>
                                    </div>

                                    <div class=\"col-xs-12 text-center\">
                                        <i class=\"welcome-circle\"></i>
                                    </div>

                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-notebook pe-4x\"></i>
                                            </div>
                                            <h3>Easy to use</h3>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-6 m-padding\">
                                        <div class=\"welcome-estate\">
                                            <div class=\"welcome-icon\">
                                                <i class=\"pe-7s-help2 pe-4x\"></i>
                                            </div>
                                            <h3>Any help</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% block temoignages1 %}
        <!--TESTIMONIALS -->
        <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                        <!-- /.feature title -->
                        <h2>Nos Clients ont dit</h2>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"row testimonial\">
                        <div class=\"col-md-12\">
                            <div id=\"testimonial-slider\">
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,</strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                        <img src=\"{{asset('front/assets/img/client-face1.png')}}\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,</strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face\">
                                        <img src=\"{{asset('front/assets/img/client-face2.png')}}\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,
                                            </strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face\">
                                        <img src=\"{{asset('front/assets/img/client-face1.png')}}\" alt=\"\">
                                    </div>
                                </div>
                                <div class=\"item\">
                                    <div class=\"client-text\">
                                        <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                        <h4>
                                            <strong>Ohidul Islam,
                                            </strong>
                                            <i>Web Designer</i>
                                        </h4>
                                    </div>
                                    <div class=\"client-face\">
                                        <img src=\"{{asset('front/assets/img/client-face2.png')}}\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {% endblock %}
        {% block temoignages2 %}
        <!-- Count area -->
        <div class=\"count-area\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                        <!-- /.feature title -->
                        <h2>Vous Pouvez Nous Faire Confiance
                        </h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 col-xs-12 percent-blocks m-main\" data-waypoint-scroll=\"true\">
                        <div class=\"row\">
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-users\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"5000\">
                                        <h2 class=\"percent\" id=\"counter\">0</h2>
                                        <h5>Client satisfaits
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-home\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"12000\">
                                        <h2 class=\"percent\" id=\"counter1\">0</h2>
                                        <h5>propriétés en stock</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-flag\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"120\">
                                        <h2 class=\"percent\" id=\"counter2\">0</h2>
                                        <h5>VILLES ENREGISTRÉES
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-3 col-xs-6\">
                                <div class=\"count-item\">
                                    <div class=\"count-item-circle\">
                                        <span class=\"pe-7s-graph2\"></span>
                                    </div>
                                    <div class=\"chart\" data-percent=\"5000\">
                                        <h2 class=\"percent\" id=\"counter3\">5000</h2>
                                        <h5>BRANCHES DE CONCESSION</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock  %}
        {% block zone_de_recherche %}
        <!-- boy-sale area -->
        <div class=\"boy-sale-area\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12\">
                        <div class=\"asks-first\">
                            <div class=\"asks-first-circle\">
                                <span class=\"fa fa-search\"></span>
                            </div>
                            <div class=\"asks-first-info\">
                                <h2>CHERCHEZ VOUS UNE  Propriété ?</h2>
                                <p>
                                    varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa
                                </p>
                            </div>
                            <div class=\"asks-first-arrow\">
                                <a href=\"properties.html\">
                                    <span class=\"fa fa-angle-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0\">
                        <div class=\"asks-first\">
                            <div class=\"asks-first-circle\">
                                <span class=\"fa fa-usd\"></span>
                            </div>
                            <div class=\"asks-first-info\">
                                <h2>VENDEZ VOUS UNE Propriété ?</h2>
                                <p>
                                    varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa
                                </p>
                            </div>
                            <div class=\"asks-first-arrow\">
                                <a href=\"properties.html\">
                                    <span class=\"fa fa-angle-right\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-12\">
                        <p class=\"asks-call\">QUESTIONS? APPELEZ NOUS :
                            <span class=\"strong\">
                                + 221 33 800 00 00
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {% endblock  %}
        {% endblock %}
        {% block footer %}
        <!-- Footer area-->
        <div class=\"footer-area\">
            <div class=\" footer\">
                <div class=\"container\">
                    <div class=\"row\">

                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer\">
                                <h4>À propos de nous </h4>
                                <div class=\"footer-title-line\"></div>

                                <img src=\"{{asset('front/assets/img/footer-logo.png')}}\" alt=\"\" class=\"wow pulse\" data-wow-delay=\"1s\">
                                <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                                <ul class=\"footer-adress\">
                                    <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                    <li><i class=\"pe-7s-mail strong\"> </i> soultanaimmo@gmail.com</li>
                                    <li><i class=\"pe-7s-call strong\"> </i> + 221 33 800 00 00</li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer\">
                                <h4>liens rapides </h4>
                                <div class=\"footer-title-line\"></div>
                                <ul class=\"footer-menu\">
                                    <li><a href=\"properties.html\">Properties</a>  </li>
                                    <li><a href=\"#\">Services</a>  </li>
                                    <li><a href=\"submit-property.html\">Submit property </a></li>
                                    <li><a href=\"contact.html\">Contact us</a></li>
                                    <li><a href=\"faq.html\">fqa</a>  </li>
                                    <li><a href=\"faq.html\">Terms </a>  </li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer\">
                                <h4>News</h4>
                                <div class=\"footer-title-line\"></div>
                                <ul class=\"footer-blog\">
                                    <li>
                                        <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                            <a href=\"single.html\">
                                                <img src=\"{{asset('front/assets/img/demo/small-proerty-2.jpg')}}\">
                                            </a>
                                            <span class=\"blg-date\">12-12-2016</span>

                                        </div>
                                        <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                            <h6> <a href=\"single.html\">Add news functions </a></h6>
                                            <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                            <a href=\"single.html\">
                                                <img src=\"{{asset('front/assets/img/demo/small-proerty-2.jpg')}}\">
                                            </a>
                                            <span class=\"blg-date\">12-12-2016</span>

                                        </div>
                                        <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                            <h6> <a href=\"single.html\">Add news functions </a></h6>
                                            <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>

                                    <li>
                                        <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                            <a href=\"single.html\">
                                                <img src=\"{{asset('front/assets/img/demo/small-proerty-2.jpg')}}\">
                                            </a>
                                            <span class=\"blg-date\">12-12-2016</span>

                                        </div>
                                        <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                            <h6> <a href=\"single.html\">Add news functions </a></h6>
                                            <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </div>
                        <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                            <div class=\"single-footer news-letter\">
                                <h4>Restez en contact</h4>
                                <div class=\"footer-title-line\"></div>
                                <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                                <form>
                                    <div class=\"input-group\">
                                        <input class=\"form-control\" type=\"text\" placeholder=\"E-mail ... \">
                                        <span class=\"input-group-btn\">
                                            <button class=\"btn btn-primary subscribe\" type=\"button\"><i class=\"pe-7s-paper-plane pe-2x\"></i></button>
                                        </span>
                                    </div>
                                    <!-- /input-group -->
                                </form>

                                <div class=\"social pull-right\">
                                    <ul>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://twitter.com/kimarotec\"><i class=\"fa fa-twitter\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://www.facebook.com/kimarotec\" data-wow-delay=\"0.2s\"><i class=\"fa fa-facebook\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://plus.google.com/kimarotec\" data-wow-delay=\"0.3s\"><i class=\"fa fa-google-plus\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.4s\"><i class=\"fa fa-instagram\"></i></a></li>
                                        <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.6s\"><i class=\"fa fa-dribbble\"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class=\"footer-copy text-center\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"pull-left\">
                            <span> (C) <a href=\"http://www.KimaroTec.com\">KimaroTheme</a> , All rights reserved 2016  </span>
                        </div>
                        <div class=\"bottom-menu pull-right\">
                            <ul>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.2s\">Home</a></li>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.3s\">Property</a></li>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.4s\">Faq</a></li>
                                <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.6s\">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {% endblock %}
        {% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('front/assets/js/modernizr-2.6.2.min.js')}}\"></script>

        <script src=\"{{asset('front/assets/js/jquery-1.10.2.min.js')}}\"></script>
        <script src=\"{{asset('front/bootstrap/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('front/assets/js/bootstrap-select.min.js')}}\"></script>
        <script src=\"{{asset('front/assets/js/bootstrap-hover-dropdown.js')}}\"></script>

        <script src=\"{{asset('front/assets/js/easypiechart.min.js')}}\"></script>
        <script src=\"{{asset('front/assets/js/jquery.easypiechart.min.js')}}\"></script>

        <script src=\"{{asset('front/assets/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{asset('front/assets/js/wow.js')}}\"></script>

        <script src=\"{{asset('front/assets/js/icheck.min.js')}}\"></script>
        <script src=\"{{asset('front/assets/js/price-range.js')}}\"></script>

        <script src=\"{{asset('front/assets/js/main.js')}}\"></script>
        {% endblock %}

<script src=\"assets/js/vendor/modernizr-2.6.2.min.js\"></script>
    <script src=\"assets/js//jquery-1.10.2.min.js\"></script>
    <script src=\"bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"assets/js/bootstrap-select.min.js\"></script>
    <script src=\"assets/js/bootstrap-hover-dropdown.js\"></script>
    <script src=\"assets/js/easypiechart.min.js\"></script>
    <script src=\"assets/js/jquery.easypiechart.min.js\"></script>
    <script src=\"assets/js/owl.carousel.min.js\"></script>
    <script src=\"assets/js/wow.js\"></script>
    <script src=\"assets/js/icheck.min.js\"></script>

    <script src=\"assets/js/price-range.js\"></script>
    <script src=\"assets/js/jquery.bootstrap.wizard.js\" type=\"text/javascript\"></script>
    <script src=\"assets/js/jquery.validate.min.js\"></script>
    <script src=\"assets/js/wizard.js\"></script>

    <script src=\"assets/js/main.js\"></script>

        {% block autrescript %}
        {% endblock %}
    </body>
</html>
", "::front.html.twig", "/var/www/html/soultana.sn/app/Resources/views/front.html.twig");
    }
}
