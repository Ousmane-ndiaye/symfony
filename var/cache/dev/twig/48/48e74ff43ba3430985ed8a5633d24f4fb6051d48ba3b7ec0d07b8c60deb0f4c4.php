<?php

/* ::back.html.twig */
class __TwigTemplate_70054b6678eeb0c86882e283dcf5b6a23334c71cbdbc9ada40305b58bfc28b5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'titre_page' => array($this, 'block_titre_page'),
            'file_dariane' => array($this, 'block_file_dariane'),
            'contenus' => array($this, 'block_contenus'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6f7ee13f6fe8a662fed5abf7b11eb6ae287630b7556ee980d0a33d3d423ff6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6f7ee13f6fe8a662fed5abf7b11eb6ae287630b7556ee980d0a33d3d423ff6f->enter($__internal_d6f7ee13f6fe8a662fed5abf7b11eb6ae287630b7556ee980d0a33d3d423ff6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::back.html.twig"));

        $__internal_55e71ddc589b180b1150d3a281f3f168ee453053aef9aa3b4de730b569d23ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e71ddc589b180b1150d3a281f3f168ee453053aef9aa3b4de730b569d23ccc->enter($__internal_55e71ddc589b180b1150d3a281f3f168ee453053aef9aa3b4de730b569d23ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

        <!-- LES AUTRES STYLES -->
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        <!-- FIN DES AUTRES STYLES -->

        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->
    </head>
    <body class=\"fixed-left\" id=\"charge_page\">
        ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 471
        echo "        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <!-- mon script -->
        <script src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/mon_script.js"), "html", null, true);
        echo "\"></script>


        <!-- LES SCRIPTS AJOUTÉS -->
        ";
        // line 492
        $this->displayBlock('javascripts', $context, $blocks);
        // line 537
        echo "        <!-- END DES SCRIPTS AJOUTÉS -->
    </body>
</html>";
        
        $__internal_d6f7ee13f6fe8a662fed5abf7b11eb6ae287630b7556ee980d0a33d3d423ff6f->leave($__internal_d6f7ee13f6fe8a662fed5abf7b11eb6ae287630b7556ee980d0a33d3d423ff6f_prof);

        
        $__internal_55e71ddc589b180b1150d3a281f3f168ee453053aef9aa3b4de730b569d23ccc->leave($__internal_55e71ddc589b180b1150d3a281f3f168ee453053aef9aa3b4de730b569d23ccc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_20db4f843c9458d7a2871eec4d918db939945738d0fd324230c9fe0884f25eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20db4f843c9458d7a2871eec4d918db939945738d0fd324230c9fe0884f25eae->enter($__internal_20db4f843c9458d7a2871eec4d918db939945738d0fd324230c9fe0884f25eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c744753b0223564484fde7771c2896ff96aa574584e31331bd882dec122bd9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c744753b0223564484fde7771c2896ff96aa574584e31331bd882dec122bd9b->enter($__internal_5c744753b0223564484fde7771c2896ff96aa574584e31331bd882dec122bd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5c744753b0223564484fde7771c2896ff96aa574584e31331bd882dec122bd9b->leave($__internal_5c744753b0223564484fde7771c2896ff96aa574584e31331bd882dec122bd9b_prof);

        
        $__internal_20db4f843c9458d7a2871eec4d918db939945738d0fd324230c9fe0884f25eae->leave($__internal_20db4f843c9458d7a2871eec4d918db939945738d0fd324230c9fe0884f25eae_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56a5ca3207bac53b01f986ec8906b55326f67dd4e63817d013355a6d0c389428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a5ca3207bac53b01f986ec8906b55326f67dd4e63817d013355a6d0c389428->enter($__internal_56a5ca3207bac53b01f986ec8906b55326f67dd4e63817d013355a6d0c389428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6bd3b8014a3fc6a16f12c6f97b385099d21e8b9a690c02a350f4496f07293390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd3b8014a3fc6a16f12c6f97b385099d21e8b9a690c02a350f4496f07293390->enter($__internal_6bd3b8014a3fc6a16f12c6f97b385099d21e8b9a690c02a350f4496f07293390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        ";
        
        $__internal_6bd3b8014a3fc6a16f12c6f97b385099d21e8b9a690c02a350f4496f07293390->leave($__internal_6bd3b8014a3fc6a16f12c6f97b385099d21e8b9a690c02a350f4496f07293390_prof);

        
        $__internal_56a5ca3207bac53b01f986ec8906b55326f67dd4e63817d013355a6d0c389428->leave($__internal_56a5ca3207bac53b01f986ec8906b55326f67dd4e63817d013355a6d0c389428_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_d60ea8ec1d46adf03ae751457444badc31478f56f1806ea252e211df6a05d33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60ea8ec1d46adf03ae751457444badc31478f56f1806ea252e211df6a05d33b->enter($__internal_d60ea8ec1d46adf03ae751457444badc31478f56f1806ea252e211df6a05d33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8119bc463bc774b94c6ce2e2e0415025a0326504531a73227eaa19aeaad8ed7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8119bc463bc774b94c6ce2e2e0415025a0326504531a73227eaa19aeaad8ed7c->enter($__internal_8119bc463bc774b94c6ce2e2e0415025a0326504531a73227eaa19aeaad8ed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "            <!-- Begin page -->
            <div id=\"wrapper\">

                <!-- Top Bar Start -->
                <div class=\"topbar\">
                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <div class=\"text-center\">
                            <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Moltran </span></a>
                        </div>
                    </div>
                    <!-- Button mobile view to collapse sidebar menu -->
                    <div class=\"navbar navbar-default\" role=\"navigation\">
                        <div class=\"container\">
                            <div class=\"\">
                                <div class=\"pull-left\">
                                    <button type=\"button\" class=\"button-menu-mobile open-left\">
                                        <i class=\"fa fa-bars\"></i>
                                    </button>
                                    <span class=\"clearfix\"></span>
                                </div>
                                <form class=\"navbar-form pull-left\" role=\"search\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                                </form>

                                <ul class=\"nav navbar-nav navbar-right pull-right\">
                                    <li class=\"dropdown hidden-xs\">
                                        <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                            <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-lg\">
                                            <li class=\"text-center notifi-title\">Notification</li>
                                            <li class=\"list-group\">
                                                <!-- list item-->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                        </div>
                                                        <div class=\"media-body clearfix\">
                                                            <div class=\"media-heading\">New user registered</div>
                                                            <p class=\"m-0\">
                                                                <small>You have 10 unread messages</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- list item-->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                        </div>
                                                        <div class=\"media-body clearfix\">
                                                            <div class=\"media-heading\">New settings</div>
                                                            <p class=\"m-0\">
                                                                <small>There are new settings available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- list item-->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                        </div>
                                                        <div class=\"media-body clearfix\">
                                                            <div class=\"media-heading\">Updates</div>
                                                            <p class=\"m-0\">
                                                                <small>There are
                                                                <span class=\"text-primary\">2</span> new updates available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- last list item -->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <small>See all notifications</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"hidden-xs\">
                                        <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                                    </li>
                                    <li class=\"hidden-xs\">
                                        <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"user-img\" class=\"img-circle\"> </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->

                <div class=\"left side-menu\">
                    <div class=\"sidebar-inner slimscrollleft\">
                        <div class=\"user-details\">
                            <div class=\"pull-left\">
                                <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                            </div>
                            <div class=\"user-info\">
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">John Doe <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </div>

                                <p class=\"text-muted m-0\">Administrator</p>
                            </div>
                        </div>
                        <!--- Divider -->
                        <div id=\"sidebar-menu\">
                            <ul>
                                <li class=\"active\">
                                    <a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\" class=\"waves-effect mes-liens\"><i class=\"md md-home\"></i><span> tableau de bord </span></a>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                        <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                        <li><a href=\"mail-read.html\">View Mail</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href=\"calendar.html\" class=\"waves-effect mes-liens\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-palette\"></i> <span> Proprietaire </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"ui-typography.html\">Typography</a></li>
                                        <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                        <li><a href=\"ui-panels.html\">Panels</a></li>
                                        <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                        <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                        <li><a href=\"ui-modals.html\">Modals</a></li>
                                        <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                        <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                        <li><a href=\"ui-notification.html\">Notification</a></li>
                                        <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-invert-colors-on\"></i><span> Bien </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien", array("action" => "ville"));
        echo "\" class=\"sous-liens-bien\">Ville</a></li>
                                        <li><a href=\"";
        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien", array("action" => "quartier"));
        echo "\" class=\"sous-liens-bien\">Quartier</a></li>
                                        <li><a href=\"";
        // line 212
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien", array("action" => "type_de_bien"));
        echo "\" class=\"sous-liens-bien\">Type de bien</a></li>
                                        <li><a href=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien", array("action" => "image"));
        echo "\" class=\"sous-liens-bien\">Image</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"icons-material.html\">Material Design</a></li>
                                        <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                        <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"form-elements.html\">General Elements</a></li>
                                        <li><a href=\"form-validation.html\">Form Validation</a></li>
                                        <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                        <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                        <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                        <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                        <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                        <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                        <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                        <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                        <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                        <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                        <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                        <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                        <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                        <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                        <li><a href=\"charts-other.html\">Other Chart</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"maps-google.html\"> Google Map</a></li>
                                        <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"pages-profile.html\">Profile</a></li>
                                        <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                        <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                        <li><a href=\"pages-email-template.html\">Email template</a></li>
                                        <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                        <li><a href=\"pages-login.html\">Login</a></li>
                                        <li><a href=\"pages-register.html\">Register</a></li>
                                        <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                        <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                        <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                        <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                        <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                        <li><a href=\"pages-404.html\">404 Error</a></li>
                                        <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                        <li><a href=\"pages-500.html\">500 Error</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"javascript:void(0);\" class=\"waves-effect mes-liens\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul>
                                        <li class=\"has_sub\">
                                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                            <ul style=\"\">
                                                <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                                <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                                <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <!-- Left Sidebar End -->


                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class=\"content-page\">
                    <!-- Start content -->
                    <div class=\"content\">
                        <div class=\"container\">

                            <!-- Page-Title -->
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <h4 class=\"pull-left page-title\">";
        // line 328
        $this->displayBlock('titre_page', $context, $blocks);
        echo "</h4>
                                    <ol class=\"breadcrumb pull-right\">
                                        ";
        // line 330
        $this->displayBlock('file_dariane', $context, $blocks);
        // line 333
        echo "                                    </ol>
                                </div>
                            </div>

                            ";
        // line 337
        $this->displayBlock('contenus', $context, $blocks);
        // line 343
        echo "                        </div>
                        <!-- container -->

                    </div>
                    <!-- content -->

                    <footer class=\"footer text-right\">
                        2016 © Moltran.
                    </footer>

                </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->


                <!-- Right Sidebar -->
                <div class=\"side-bar right-bar nicescroll\">
                    <h4 class=\"text-center\">Chat</h4>
                    <div class=\"contact-list nicescroll\">
                        <ul class=\"list-group contacts-list\">
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Chadengle</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Tomaslau</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Stillnotdavid</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Kurafire</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Shahedk</span>
                                    <i class=\"fa fa-circle away\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Adhamdannaway</span>
                                    <i class=\"fa fa-circle away\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Ok</span>
                                    <i class=\"fa fa-circle away\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 437
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Arashasghari</span>
                                    <i class=\"fa fa-circle offline\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Joshaustin</span>
                                    <i class=\"fa fa-circle offline\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/images/users/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Sortino</span>
                                    <i class=\"fa fa-circle offline\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Right-bar -->
            </div>
            <!-- END wrapper -->
        ";
        
        $__internal_8119bc463bc774b94c6ce2e2e0415025a0326504531a73227eaa19aeaad8ed7c->leave($__internal_8119bc463bc774b94c6ce2e2e0415025a0326504531a73227eaa19aeaad8ed7c_prof);

        
        $__internal_d60ea8ec1d46adf03ae751457444badc31478f56f1806ea252e211df6a05d33b->leave($__internal_d60ea8ec1d46adf03ae751457444badc31478f56f1806ea252e211df6a05d33b_prof);

    }

    // line 328
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_3823840f74b0ee9d5cc11dd95c802f4d045d5ce1e9fbf234c139192f9659a92f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3823840f74b0ee9d5cc11dd95c802f4d045d5ce1e9fbf234c139192f9659a92f->enter($__internal_3823840f74b0ee9d5cc11dd95c802f4d045d5ce1e9fbf234c139192f9659a92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        $__internal_05dab5fc47b4c0745c6b3e67df007253d04488fd0bcdfc712558a51616e90def = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dab5fc47b4c0745c6b3e67df007253d04488fd0bcdfc712558a51616e90def->enter($__internal_05dab5fc47b4c0745c6b3e67df007253d04488fd0bcdfc712558a51616e90def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "Tableau de bord";
        
        $__internal_05dab5fc47b4c0745c6b3e67df007253d04488fd0bcdfc712558a51616e90def->leave($__internal_05dab5fc47b4c0745c6b3e67df007253d04488fd0bcdfc712558a51616e90def_prof);

        
        $__internal_3823840f74b0ee9d5cc11dd95c802f4d045d5ce1e9fbf234c139192f9659a92f->leave($__internal_3823840f74b0ee9d5cc11dd95c802f4d045d5ce1e9fbf234c139192f9659a92f_prof);

    }

    // line 330
    public function block_file_dariane($context, array $blocks = array())
    {
        $__internal_7fd528269ecc27bd637c817ed26582548c1fa8d2dfe35a3679780e6a2fd1ec14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd528269ecc27bd637c817ed26582548c1fa8d2dfe35a3679780e6a2fd1ec14->enter($__internal_7fd528269ecc27bd637c817ed26582548c1fa8d2dfe35a3679780e6a2fd1ec14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

        $__internal_dbf13dfce6c077fb22e7be694bc08bbcacc7ecd7f7f9b90b8f449e2447e71057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf13dfce6c077fb22e7be694bc08bbcacc7ecd7f7f9b90b8f449e2447e71057->enter($__internal_dbf13dfce6c077fb22e7be694bc08bbcacc7ecd7f7f9b90b8f449e2447e71057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

        // line 331
        echo "                                        <li class=\"active\">Soultana</li>
                                        ";
        
        $__internal_dbf13dfce6c077fb22e7be694bc08bbcacc7ecd7f7f9b90b8f449e2447e71057->leave($__internal_dbf13dfce6c077fb22e7be694bc08bbcacc7ecd7f7f9b90b8f449e2447e71057_prof);

        
        $__internal_7fd528269ecc27bd637c817ed26582548c1fa8d2dfe35a3679780e6a2fd1ec14->leave($__internal_7fd528269ecc27bd637c817ed26582548c1fa8d2dfe35a3679780e6a2fd1ec14_prof);

    }

    // line 337
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_fc9be0d834d8b78a09cd1f7c5c75f3a2c09404ef17b7e7a15da4408d5dbdee1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9be0d834d8b78a09cd1f7c5c75f3a2c09404ef17b7e7a15da4408d5dbdee1e->enter($__internal_fc9be0d834d8b78a09cd1f7c5c75f3a2c09404ef17b7e7a15da4408d5dbdee1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_5faaad2017020d4aa5d12d8df4f25fc960efdf39d6553abfd9866978eac994cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5faaad2017020d4aa5d12d8df4f25fc960efdf39d6553abfd9866978eac994cf->enter($__internal_5faaad2017020d4aa5d12d8df4f25fc960efdf39d6553abfd9866978eac994cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 338
        echo "                            <!-- Pls Remove -->
                            <div style=\"height:600px\">

                            </div>
                            ";
        
        $__internal_5faaad2017020d4aa5d12d8df4f25fc960efdf39d6553abfd9866978eac994cf->leave($__internal_5faaad2017020d4aa5d12d8df4f25fc960efdf39d6553abfd9866978eac994cf_prof);

        
        $__internal_fc9be0d834d8b78a09cd1f7c5c75f3a2c09404ef17b7e7a15da4408d5dbdee1e->leave($__internal_fc9be0d834d8b78a09cd1f7c5c75f3a2c09404ef17b7e7a15da4408d5dbdee1e_prof);

    }

    // line 492
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f34b3a7b756a4d939908f8e4828f3ae1a30f393e4403f81bd892b2a250e8f0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34b3a7b756a4d939908f8e4828f3ae1a30f393e4403f81bd892b2a250e8f0c9->enter($__internal_f34b3a7b756a4d939908f8e4828f3ae1a30f393e4403f81bd892b2a250e8f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_351a6ef92081b159b282d278867f99db74e4fedc856b78fa7200d3b221911119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351a6ef92081b159b282d278867f99db74e4fedc856b78fa7200d3b221911119->enter($__internal_351a6ef92081b159b282d278867f99db74e4fedc856b78fa7200d3b221911119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 493
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


        <!-- flot Chart -->
        <script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

        <!-- jQuery  -->
        <script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
            /* ==============================================
                                        Counter Up
                    =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        ";
        
        $__internal_351a6ef92081b159b282d278867f99db74e4fedc856b78fa7200d3b221911119->leave($__internal_351a6ef92081b159b282d278867f99db74e4fedc856b78fa7200d3b221911119_prof);

        
        $__internal_f34b3a7b756a4d939908f8e4828f3ae1a30f393e4403f81bd892b2a250e8f0c9->leave($__internal_f34b3a7b756a4d939908f8e4828f3ae1a30f393e4403f81bd892b2a250e8f0c9_prof);

    }

    public function getTemplateName()
    {
        return "::back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  864 => 523,  858 => 520,  852 => 517,  846 => 514,  842 => 513,  838 => 512,  834 => 511,  830 => 510,  826 => 509,  822 => 508,  818 => 507,  811 => 503,  805 => 500,  801 => 499,  795 => 496,  788 => 493,  779 => 492,  765 => 338,  756 => 337,  745 => 331,  736 => 330,  718 => 328,  694 => 457,  681 => 447,  668 => 437,  655 => 427,  642 => 417,  629 => 407,  616 => 397,  603 => 387,  590 => 377,  577 => 367,  551 => 343,  549 => 337,  543 => 333,  541 => 330,  536 => 328,  418 => 213,  414 => 212,  410 => 211,  406 => 210,  368 => 175,  345 => 155,  319 => 132,  224 => 39,  215 => 38,  205 => 15,  196 => 14,  178 => 5,  166 => 537,  164 => 492,  157 => 488,  151 => 485,  147 => 484,  143 => 483,  139 => 482,  135 => 481,  131 => 480,  127 => 479,  123 => 478,  119 => 477,  115 => 476,  108 => 471,  106 => 38,  93 => 28,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  64 => 20,  59 => 18,  55 => 16,  53 => 14,  47 => 11,  38 => 5,  32 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"{{asset('dark_admin/assets/images/favicon_1.ico')}}\">

        <!-- LES AUTRES STYLES -->
        {% block stylesheets %}
        {% endblock %}
        <!-- FIN DES AUTRES STYLES -->

        <link href=\"{{asset('dark_admin/assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('dark_admin/assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('dark_admin/assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('dark_admin/assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('dark_admin/assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('dark_admin/assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('dark_admin/assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('dark_admin/assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"{{asset('dark_admin/assets/js/modernizr.min.js')}}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->
    </head>
    <body class=\"fixed-left\" id=\"charge_page\">
        {% block body %}
            <!-- Begin page -->
            <div id=\"wrapper\">

                <!-- Top Bar Start -->
                <div class=\"topbar\">
                    <!-- LOGO -->
                    <div class=\"topbar-left\">
                        <div class=\"text-center\">
                            <a href=\"index.html\" class=\"logo\"><i class=\"md md-terrain\"></i> <span>Moltran </span></a>
                        </div>
                    </div>
                    <!-- Button mobile view to collapse sidebar menu -->
                    <div class=\"navbar navbar-default\" role=\"navigation\">
                        <div class=\"container\">
                            <div class=\"\">
                                <div class=\"pull-left\">
                                    <button type=\"button\" class=\"button-menu-mobile open-left\">
                                        <i class=\"fa fa-bars\"></i>
                                    </button>
                                    <span class=\"clearfix\"></span>
                                </div>
                                <form class=\"navbar-form pull-left\" role=\"search\">
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                                    </div>
                                    <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                                </form>

                                <ul class=\"nav navbar-nav navbar-right pull-right\">
                                    <li class=\"dropdown hidden-xs\">
                                        <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                            <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                        </a>
                                        <ul class=\"dropdown-menu dropdown-menu-lg\">
                                            <li class=\"text-center notifi-title\">Notification</li>
                                            <li class=\"list-group\">
                                                <!-- list item-->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                        </div>
                                                        <div class=\"media-body clearfix\">
                                                            <div class=\"media-heading\">New user registered</div>
                                                            <p class=\"m-0\">
                                                                <small>You have 10 unread messages</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- list item-->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                        </div>
                                                        <div class=\"media-body clearfix\">
                                                            <div class=\"media-heading\">New settings</div>
                                                            <p class=\"m-0\">
                                                                <small>There are new settings available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- list item-->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <div class=\"media\">
                                                        <div class=\"media-left\">
                                                            <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                        </div>
                                                        <div class=\"media-body clearfix\">
                                                            <div class=\"media-heading\">Updates</div>
                                                            <p class=\"m-0\">
                                                                <small>There are
                                                                <span class=\"text-primary\">2</span> new updates available</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- last list item -->
                                                <a href=\"javascript:void(0);\" class=\"list-group-item\">
                                                    <small>See all notifications</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"hidden-xs\">
                                        <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect\"><i class=\"md md-crop-free\"></i></a>
                                    </li>
                                    <li class=\"hidden-xs\">
                                        <a href=\"#\" class=\"right-bar-toggle waves-effect\"><i class=\"md md-chat\"></i></a>
                                    </li>
                                    <li class=\"dropdown\">
                                        <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"{{asset('dark_admin/assets/images/users/avatar-1.jpg')}}\" alt=\"user-img\" class=\"img-circle\"> </a>
                                        <ul class=\"dropdown-menu\">
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                            <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
                <!-- Top Bar End -->


                <!-- ========== Left Sidebar Start ========== -->

                <div class=\"left side-menu\">
                    <div class=\"sidebar-inner slimscrollleft\">
                        <div class=\"user-details\">
                            <div class=\"pull-left\">
                                <img src=\"{{asset('dark_admin/assets/images/users/avatar-1.jpg')}}\" alt=\"\" class=\"thumb-md img-circle\">
                            </div>
                            <div class=\"user-info\">
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">John Doe <span class=\"caret\"></span></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings\"></i> Settings</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                        <li><a href=\"javascript:void(0)\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                    </ul>
                                </div>

                                <p class=\"text-muted m-0\">Administrator</p>
                            </div>
                        </div>
                        <!--- Divider -->
                        <div id=\"sidebar-menu\">
                            <ul>
                                <li class=\"active\">
                                    <a href=\"{{path('admin_index')}}\" class=\"waves-effect mes-liens\"><i class=\"md md-home\"></i><span> tableau de bord </span></a>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"mail-inbox.html\">Inbox</a></li>
                                        <li><a href=\"mail-compose.html\">Compose Mail</a></li>
                                        <li><a href=\"mail-read.html\">View Mail</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href=\"calendar.html\" class=\"waves-effect mes-liens\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-palette\"></i> <span> Proprietaire </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"ui-typography.html\">Typography</a></li>
                                        <li><a href=\"ui-buttons.html\">Buttons</a></li>
                                        <li><a href=\"ui-panels.html\">Panels</a></li>
                                        <li><a href=\"ui-checkbox-radio.html\">Checkboxs-Radios</a></li>
                                        <li><a href=\"ui-tabs-accordions.html\">Tabs &amp; Accordions</a></li>
                                        <li><a href=\"ui-modals.html\">Modals</a></li>
                                        <li><a href=\"ui-bootstrap.html\">BS Elements</a></li>
                                        <li><a href=\"ui-progressbars.html\">Progress Bars</a></li>
                                        <li><a href=\"ui-notification.html\">Notification</a></li>
                                        <li><a href=\"ui-sweet-alert.html\">Sweet-Alert</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-invert-colors-on\"></i><span> Bien </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"{{path('admin_bien', { 'action': 'ville' })}}\" class=\"sous-liens-bien\">Ville</a></li>
                                        <li><a href=\"{{path('admin_bien', { 'action': 'quartier' })}}\" class=\"sous-liens-bien\">Quartier</a></li>
                                        <li><a href=\"{{path('admin_bien', { 'action': 'type_de_bien' })}}\" class=\"sous-liens-bien\">Type de bien</a></li>
                                        <li><a href=\"{{path('admin_bien', { 'action': 'image' })}}\" class=\"sous-liens-bien\">Image</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-redeem\"></i> <span> Icons </span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"icons-material.html\">Material Design</a></li>
                                        <li><a href=\"icons-ion.html\">Ion Icons</a></li>
                                        <li><a href=\"icons-fontawesome.html\">Font awesome</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-now-widgets\"></i><span> Forms </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"form-elements.html\">General Elements</a></li>
                                        <li><a href=\"form-validation.html\">Form Validation</a></li>
                                        <li><a href=\"form-advanced.html\">Advanced Form</a></li>
                                        <li><a href=\"form-wizard.html\">Form Wizard</a></li>
                                        <li><a href=\"form-wysiwyg.html\">WYSIWYG Editor</a></li>
                                        <li><a href=\"form-codeeditor.html\">Code Editors</a></li>
                                        <li><a href=\"form-uploads.html\">Multiple File Upload</a></li>
                                        <li><a href=\"form-xeditable.html\">X-editable</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-view-list\"></i><span> Tables </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"tables-basic.html\">Basic Tables</a></li>
                                        <li><a href=\"tables-datatable.html\">Data Table</a></li>
                                        <li><a href=\"tables-editable.html\">Editable Table</a></li>
                                        <li><a href=\"tables-responsive.html\">Responsive Table</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-poll\"></i><span> Charts </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"charts-morris.html\">Morris Chart</a></li>
                                        <li><a href=\"charts-chartjs.html\">Chartjs</a></li>
                                        <li><a href=\"charts-flot.html\">Flot Chart</a></li>
                                        <li><a href=\"charts-peity.html\">Peity Charts</a></li>
                                        <li><a href=\"charts-sparkline.html\">Sparkline Charts</a></li>
                                        <li><a href=\"charts-radial.html\">Radial charts</a></li>
                                        <li><a href=\"charts-other.html\">Other Chart</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"maps-google.html\"> Google Map</a></li>
                                        <li><a href=\"maps-vector.html\"> Vector Map</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"#\" class=\"waves-effect mes-liens\"><i class=\"md md-pages\"></i><span> Pages </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul class=\"list-unstyled\">
                                        <li><a href=\"pages-profile.html\">Profile</a></li>
                                        <li><a href=\"pages-timeline.html\">Timeline</a></li>
                                        <li><a href=\"pages-invoice.html\">Invoice</a></li>
                                        <li><a href=\"pages-email-template.html\">Email template</a></li>
                                        <li><a href=\"pages-contact.html\">Contact-list</a></li>
                                        <li><a href=\"pages-login.html\">Login</a></li>
                                        <li><a href=\"pages-register.html\">Register</a></li>
                                        <li><a href=\"pages-recoverpw.html\">Recover Password</a></li>
                                        <li><a href=\"pages-lock-screen.html\">Lock Screen</a></li>
                                        <li><a href=\"pages-blank.html\">Blank Page</a></li>
                                        <li><a href=\"pages-maintenance.html\">Maintenance</a></li>
                                        <li><a href=\"pages-coming-soon.html\">Coming-soon</a></li>
                                        <li><a href=\"pages-404.html\">404 Error</a></li>
                                        <li><a href=\"pages-404_alt.html\">404 alt</a></li>
                                        <li><a href=\"pages-500.html\">500 Error</a></li>
                                    </ul>
                                </li>

                                <li class=\"has_sub\">
                                    <a href=\"javascript:void(0);\" class=\"waves-effect mes-liens\"><i class=\"md md-share\"></i><span>Multi Level </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                    <ul>
                                        <li class=\"has_sub\">
                                            <a href=\"javascript:void(0);\" class=\"waves-effect\"><span>Menu Level 1.1</span> <span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                                            <ul style=\"\">
                                                <li><a href=\"javascript:void(0);\"><span>Menu Level 2.1</span></a></li>
                                                <li><a href=\"javascript:void(0);\"><span>Menu Level 2.2</span></a></li>
                                                <li><a href=\"javascript:void(0);\"><span>Menu Level 2.3</span></a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href=\"javascript:void(0);\"><span>Menu Level 1.2</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
                <!-- Left Sidebar End -->


                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class=\"content-page\">
                    <!-- Start content -->
                    <div class=\"content\">
                        <div class=\"container\">

                            <!-- Page-Title -->
                            <div class=\"row\">
                                <div class=\"col-sm-12\">
                                    <h4 class=\"pull-left page-title\">{% block titre_page %}Tableau de bord{% endblock %}</h4>
                                    <ol class=\"breadcrumb pull-right\">
                                        {% block file_dariane %}
                                        <li class=\"active\">Soultana</li>
                                        {% endblock %}
                                    </ol>
                                </div>
                            </div>

                            {% block contenus %}
                            <!-- Pls Remove -->
                            <div style=\"height:600px\">

                            </div>
                            {% endblock %}
                        </div>
                        <!-- container -->

                    </div>
                    <!-- content -->

                    <footer class=\"footer text-right\">
                        2016 © Moltran.
                    </footer>

                </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->


                <!-- Right Sidebar -->
                <div class=\"side-bar right-bar nicescroll\">
                    <h4 class=\"text-center\">Chat</h4>
                    <div class=\"contact-list nicescroll\">
                        <ul class=\"list-group contacts-list\">
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-1.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Chadengle</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-2.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Tomaslau</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-3.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Stillnotdavid</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-4.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Kurafire</span>
                                    <i class=\"fa fa-circle online\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-5.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Shahedk</span>
                                    <i class=\"fa fa-circle away\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-6.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Adhamdannaway</span>
                                    <i class=\"fa fa-circle away\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-7.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Ok</span>
                                    <i class=\"fa fa-circle away\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-8.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Arashasghari</span>
                                    <i class=\"fa fa-circle offline\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-9.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Joshaustin</span>
                                    <i class=\"fa fa-circle offline\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                            <li class=\"list-group-item\">
                                <a href=\"#\">
                                    <div class=\"avatar\">
                                        <img src=\"{{asset('dark_admin/assets/images/users/avatar-10.jpg')}}\" alt=\"\">
                                    </div>
                                    <span class=\"name\">Sortino</span>
                                    <i class=\"fa fa-circle offline\"></i>
                                </a>
                                <span class=\"clearfix\"></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /Right-bar -->
            </div>
            <!-- END wrapper -->
        {% endblock %}
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/detect.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/waves.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/js/jquery.scrollTo.min.js')}}\"></script>

        <!-- mon script -->
        <script src=\"{{asset('dark_admin/assets/js/mon_script.js')}}\"></script>


        <!-- LES SCRIPTS AJOUTÉS -->
        {% block javascripts %}
        <script src=\"{{asset('dark_admin/assets/js/jquery.app.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/plugins/moment/moment.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


        <!-- flot Chart -->
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
        <script src=\"{{asset('dark_admin/assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/pages/jquery.todo.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/pages/jquery.chat.js')}}\"></script>

        <!-- jQuery  -->
        <script src=\"{{asset('dark_admin/assets/pages/jquery.dashboard.js')}}\"></script>

        <script type=\"text/javascript\">
            /* ==============================================
                                        Counter Up
                    =============================================== */
            jQuery(document).ready(function(\$) {
                \$('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>
        {% endblock %}
        <!-- END DES SCRIPTS AJOUTÉS -->
    </body>
</html>", "::back.html.twig", "/var/www/html/soultana.sn/app/Resources/views/back.html.twig");
    }
}
