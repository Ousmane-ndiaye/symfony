<?php

/* SoultanaBundle:Admin:bien.html.twig */
class __TwigTemplate_602d0beac7a133a59466a5a30a2f6a7576c7ed0ab80ee5ea7c0a1c8ec5f81ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "SoultanaBundle:Admin:bien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'titre_page' => array($this, 'block_titre_page'),
            'file_dariane' => array($this, 'block_file_dariane'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65bc1973321cddd89cc6479950a60a016def7dfdd3ce3b6747bd22e250f9a885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc1973321cddd89cc6479950a60a016def7dfdd3ce3b6747bd22e250f9a885->enter($__internal_65bc1973321cddd89cc6479950a60a016def7dfdd3ce3b6747bd22e250f9a885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:bien.html.twig"));

        $__internal_ea37a83886a38f26faae0d582958d93b64a0be2be4422b45f686670f773e96c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea37a83886a38f26faae0d582958d93b64a0be2be4422b45f686670f773e96c6->enter($__internal_ea37a83886a38f26faae0d582958d93b64a0be2be4422b45f686670f773e96c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65bc1973321cddd89cc6479950a60a016def7dfdd3ce3b6747bd22e250f9a885->leave($__internal_65bc1973321cddd89cc6479950a60a016def7dfdd3ce3b6747bd22e250f9a885_prof);

        
        $__internal_ea37a83886a38f26faae0d582958d93b64a0be2be4422b45f686670f773e96c6->leave($__internal_ea37a83886a38f26faae0d582958d93b64a0be2be4422b45f686670f773e96c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_03ef0845967a8a7ad1278e96ea58c0ce35c9ad080a34d0b86bc6b45d5c1f2953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03ef0845967a8a7ad1278e96ea58c0ce35c9ad080a34d0b86bc6b45d5c1f2953->enter($__internal_03ef0845967a8a7ad1278e96ea58c0ce35c9ad080a34d0b86bc6b45d5c1f2953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a9564f065ee9c8b62782e09e41ceedb0d92aae484ad4d9afb33949c6986e21f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9564f065ee9c8b62782e09e41ceedb0d92aae484ad4d9afb33949c6986e21f8->enter($__internal_a9564f065ee9c8b62782e09e41ceedb0d92aae484ad4d9afb33949c6986e21f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_a9564f065ee9c8b62782e09e41ceedb0d92aae484ad4d9afb33949c6986e21f8->leave($__internal_a9564f065ee9c8b62782e09e41ceedb0d92aae484ad4d9afb33949c6986e21f8_prof);

        
        $__internal_03ef0845967a8a7ad1278e96ea58c0ce35c9ad080a34d0b86bc6b45d5c1f2953->leave($__internal_03ef0845967a8a7ad1278e96ea58c0ce35c9ad080a34d0b86bc6b45d5c1f2953_prof);

    }

    // line 4
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_61d816bc21d07aaffa6bb9c6a7d898211fc76995ecfbcd3e2f59c9566d51a537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61d816bc21d07aaffa6bb9c6a7d898211fc76995ecfbcd3e2f59c9566d51a537->enter($__internal_61d816bc21d07aaffa6bb9c6a7d898211fc76995ecfbcd3e2f59c9566d51a537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        $__internal_fc53ec84d9561ef813229f61c0209a2d3bfb6f20471bb161cce400da41cef3f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc53ec84d9561ef813229f61c0209a2d3bfb6f20471bb161cce400da41cef3f0->enter($__internal_fc53ec84d9561ef813229f61c0209a2d3bfb6f20471bb161cce400da41cef3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "Page ";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        
        $__internal_fc53ec84d9561ef813229f61c0209a2d3bfb6f20471bb161cce400da41cef3f0->leave($__internal_fc53ec84d9561ef813229f61c0209a2d3bfb6f20471bb161cce400da41cef3f0_prof);

        
        $__internal_61d816bc21d07aaffa6bb9c6a7d898211fc76995ecfbcd3e2f59c9566d51a537->leave($__internal_61d816bc21d07aaffa6bb9c6a7d898211fc76995ecfbcd3e2f59c9566d51a537_prof);

    }

    // line 5
    public function block_file_dariane($context, array $blocks = array())
    {
        $__internal_58f4788762cd837f6d9b25b00a83e4b19eb5d78d51626549c479e2ee99a964de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f4788762cd837f6d9b25b00a83e4b19eb5d78d51626549c479e2ee99a964de->enter($__internal_58f4788762cd837f6d9b25b00a83e4b19eb5d78d51626549c479e2ee99a964de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

        $__internal_2da3de02434dd0105377ee31ac816ad86ede413c4f902e93c337ccf025d619d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da3de02434dd0105377ee31ac816ad86ede413c4f902e93c337ccf025d619d2->enter($__internal_2da3de02434dd0105377ee31ac816ad86ede413c4f902e93c337ccf025d619d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

        // line 6
        echo "<li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\">Soultana</a></li>
<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien", array("action" => ($context["action"] ?? $this->getContext($context, "action")))), "html", null, true);
        echo "\">Bien</a></li>
<li class=\"active\"> ";
        // line 8
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        echo "</li>
";
        
        $__internal_2da3de02434dd0105377ee31ac816ad86ede413c4f902e93c337ccf025d619d2->leave($__internal_2da3de02434dd0105377ee31ac816ad86ede413c4f902e93c337ccf025d619d2_prof);

        
        $__internal_58f4788762cd837f6d9b25b00a83e4b19eb5d78d51626549c479e2ee99a964de->leave($__internal_58f4788762cd837f6d9b25b00a83e4b19eb5d78d51626549c479e2ee99a964de_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a5577d23df18f790517113748f8ba5563bcfc852194aab9e3b1be69d42ab7b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5577d23df18f790517113748f8ba5563bcfc852194aab9e3b1be69d42ab7b89->enter($__internal_a5577d23df18f790517113748f8ba5563bcfc852194aab9e3b1be69d42ab7b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_37573ecb134e1349f179f389a42752e0c5d8ec1a6221346cc9b6788dbfbe24e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37573ecb134e1349f179f389a42752e0c5d8ec1a6221346cc9b6788dbfbe24e6->enter($__internal_37573ecb134e1349f179f389a42752e0c5d8ec1a6221346cc9b6788dbfbe24e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <!-- DataTables -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/jquery.dataTables.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/buttons.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/responsive.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/scroller.bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .border-red{
            border: 1px solid red;
        }
    </style>
";
        
        $__internal_37573ecb134e1349f179f389a42752e0c5d8ec1a6221346cc9b6788dbfbe24e6->leave($__internal_37573ecb134e1349f179f389a42752e0c5d8ec1a6221346cc9b6788dbfbe24e6_prof);

        
        $__internal_a5577d23df18f790517113748f8ba5563bcfc852194aab9e3b1be69d42ab7b89->leave($__internal_a5577d23df18f790517113748f8ba5563bcfc852194aab9e3b1be69d42ab7b89_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_895e91817380cb5d0bb17118436f3feb58201706df76fc4aa5c2b2724fb1bfa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_895e91817380cb5d0bb17118436f3feb58201706df76fc4aa5c2b2724fb1bfa7->enter($__internal_895e91817380cb5d0bb17118436f3feb58201706df76fc4aa5c2b2724fb1bfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6a3a672b133b804c42e254d564b1d99da398e4167f7b31fbdece4f58f079a0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3a672b133b804c42e254d564b1d99da398e4167f7b31fbdece4f58f079a0e1->enter($__internal_6a3a672b133b804c42e254d564b1d99da398e4167f7b31fbdece4f58f079a0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <!-- Datatables-->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/dataTables.buttons.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/buttons.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/jszip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/pdfmake.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/vfs_fonts.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/buttons.html5.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/buttons.print.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/dataTables.fixedHeader.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/dataTables.keyTable.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/dataTables.responsive.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/responsive.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/plugins/datatables/dataTables.scroller.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Datatable init js -->
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/pages/datatables.init.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dark_admin/assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#datatable').dataTable();
            \$('#datatable-keytable').DataTable({
                keys: true
            });
            \$('#datatable-responsive').DataTable();
            \$('#datatable-scroller').DataTable({
                ajax: \"assets/plugins/datatables/json/scroller-demo.json\",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = \$('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
        });
        TableManageButtons.init();
    </script>
";
        
        $__internal_6a3a672b133b804c42e254d564b1d99da398e4167f7b31fbdece4f58f079a0e1->leave($__internal_6a3a672b133b804c42e254d564b1d99da398e4167f7b31fbdece4f58f079a0e1_prof);

        
        $__internal_895e91817380cb5d0bb17118436f3feb58201706df76fc4aa5c2b2724fb1bfa7->leave($__internal_895e91817380cb5d0bb17118436f3feb58201706df76fc4aa5c2b2724fb1bfa7_prof);

    }

    // line 66
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_22d1702d5199e1e463b90d662a728f89ca785c30377fa37c69a7467e0c28ca6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d1702d5199e1e463b90d662a728f89ca785c30377fa37c69a7467e0c28ca6b->enter($__internal_22d1702d5199e1e463b90d662a728f89ca785c30377fa37c69a7467e0c28ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_4560a9225fa3cbb46a5d5f91364c7e43ad8af114243ac959670c0187b0726a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4560a9225fa3cbb46a5d5f91364c7e43ad8af114243ac959670c0187b0726a43->enter($__internal_4560a9225fa3cbb46a5d5f91364c7e43ad8af114243ac959670c0187b0726a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 67
        echo "    <div class=\"row\">


        ";
        // line 70
        if ((($context["action"] ?? $this->getContext($context, "action")) == "ville")) {
            // line 71
            echo "
        <!-- start table for ville -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Listes des villes</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"m-b-30\">
                                <button type=\"button\" data-idtable=\"table_des_ville\" id=\"button-ajouter\" class=\"btn btn-primary waves-effect waves-light btn-ajouter\">Ajouter <i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                    <table id=\"datatable-buttons\" data-idtable=\"table_des_ville\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th style=\"width: 30px;\">#</th>
                                <th>Nom du ville</th>
                                <th style=\"width: 200px;\">Nombre de quartiers</th>
                                <th style=\"width: 100px;\">Action</th>
                            </tr>
                            <tr id=\"formAjout\" class=\"hidden\">
                                <form method=\"post\" action=\"#\">
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input style=\"width: 100%;\" type=\"text\" name=\"for-saving\" id=\"for-saving\" data-champs=\"nomville\" placeholder=\"nom du ville\" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td class=\"\">
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </form>
                            </tr>
                        </thead>


                        <tbody>
                        ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10, 10 => 11, 11 => 12, 12 => 13, 13 => 14, 14 => 15, 15 => 16, 16 => 17, 17 => 18, 18 => 19, 19 => 20));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 118
                echo "                            <tr id=\"";
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\">
                                <td style=\"text-align: center;\">";
                // line 119
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</td>
                                <td class=\"form-edit\">System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 123
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"";
                // line 124
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 125
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"";
                // line 126
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for ville -->


        ";
        } elseif ((        // line 140
($context["action"] ?? $this->getContext($context, "action")) == "quartier")) {
            // line 141
            echo "
        <!-- start table for quartier -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Listes des quartiers</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"m-b-30\">
                                <button type=\"button\" data-idtable=\"table_des_quartier\" id=\"button-ajouter\" class=\"btn btn-primary waves-effect waves-light btn-ajouter\">Ajouter <i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                    <table id=\"datatable-buttons\" data-idtable=\"table_des_quartier\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th style=\"width: 30px;\">#</th>
                                <th>Nom du Quartier</th>
                                <th style=\"width: 200px;\">Nombre de bien</th>
                                <th style=\"width: 100px;\">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr id=\"formAjout\" class=\"hidden\">
                                <form method=\"post\" action=\"#\">
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input style=\"width: 100%;\"type=\"text\" name=\"\" id=\"\" placeholder=\"\" />
                                    </td>
                                    <td>
                                        &nbsp;<input type=\"submit\" class=\"btn btn-primary hidden\" name=\"enregistrer\" id=\"enregistrer\" value=\"enregistrer\">
                                    </td>
                                    <td class=\"\">
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td style=\"text-align: center;\">1</td>
                                <td>System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for quartier -->


        ";
        } elseif ((        // line 207
($context["action"] ?? $this->getContext($context, "action")) == "type_de_bien")) {
            // line 208
            echo "
        <!-- start table for type de bien -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Liste des type de bien</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"m-b-30\">
                                <button type=\"button\" data-idtable=\"table_des_type_de_Bien\" id=\"button-ajouter\" class=\"btn btn-primary waves-effect waves-light btn-ajouter\">Ajouter <i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                    <table id=\"datatable-buttons\" data-idtable=\"table_des_type_de_Bien\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th style=\"width: 30px;\">#</th>
                                <th>Nom du type de bien</th>
                                <th style=\"width: 200px;\">Nombre de bien</th>
                                <th style=\"width: 100px;\">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr id=\"formAjout\" class=\"hidden\">
                                <form method=\"post\" action=\"#\">
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input style=\"width: 100%;\"type=\"text\" name=\"\" id=\"\" placeholder=\"\" />
                                    </td>
                                    <td>
                                        &nbsp;<input type=\"submit\" class=\"btn btn-primary hidden\" name=\"enregistrer\" id=\"enregistrer\" value=\"enregistrer\">
                                    </td>
                                    <td class=\"\">
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td style=\"text-align: center;\">1</td>
                                <td>System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for type de bien -->
        ";
        }
        // line 273
        echo "
    </div>
    <!-- End Row -->

";
        
        $__internal_4560a9225fa3cbb46a5d5f91364c7e43ad8af114243ac959670c0187b0726a43->leave($__internal_4560a9225fa3cbb46a5d5f91364c7e43ad8af114243ac959670c0187b0726a43_prof);

        
        $__internal_22d1702d5199e1e463b90d662a728f89ca785c30377fa37c69a7467e0c28ca6b->leave($__internal_22d1702d5199e1e463b90d662a728f89ca785c30377fa37c69a7467e0c28ca6b_prof);

    }

    public function getTemplateName()
    {
        return "SoultanaBundle:Admin:bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 273,  451 => 208,  449 => 207,  381 => 141,  379 => 140,  367 => 130,  357 => 126,  353 => 125,  349 => 124,  345 => 123,  338 => 119,  333 => 118,  329 => 117,  281 => 71,  279 => 70,  274 => 67,  265 => 66,  232 => 43,  227 => 41,  221 => 38,  217 => 37,  213 => 36,  209 => 35,  205 => 34,  201 => 33,  197 => 32,  193 => 31,  189 => 30,  185 => 29,  181 => 28,  177 => 27,  173 => 26,  169 => 25,  166 => 24,  157 => 23,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  121 => 11,  112 => 10,  100 => 8,  96 => 7,  91 => 6,  82 => 5,  63 => 4,  45 => 3,  11 => 1,);
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
{% block titre_page %}Page {{action}}{% endblock %}
{% block file_dariane %}
<li><a href=\"{{path('admin_index')}}\">Soultana</a></li>
<li><a href=\"{{path('admin_bien', {'action':action})}}\">Bien</a></li>
<li class=\"active\"> {{action}}</li>
{% endblock %}
{% block stylesheets %}
    <!-- DataTables -->
    <link href=\"{{asset('dark_admin/assets/plugins/datatables/jquery.dataTables.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('dark_admin/assets/plugins/datatables/buttons.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('dark_admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('dark_admin/assets/plugins/datatables/responsive.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"{{asset('dark_admin/assets/plugins/datatables/scroller.bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\" />
    <style>
        .border-red{
            border: 1px solid red;
        }
    </style>
{% endblock %}
{% block javascripts %}
    <!-- Datatables-->
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/dataTables.buttons.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/buttons.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/jszip.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/pdfmake.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/vfs_fonts.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/buttons.html5.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/buttons.print.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/dataTables.fixedHeader.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/dataTables.keyTable.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/dataTables.responsive.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/responsive.bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('dark_admin/assets/plugins/datatables/dataTables.scroller.min.js')}}\"></script>

    <!-- Datatable init js -->
    <script src=\"{{asset('dark_admin/assets/pages/datatables.init.js')}}\"></script>

    <script src=\"{{asset('dark_admin/assets/js/jquery.app.js')}}\"></script>

    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$('#datatable').dataTable();
            \$('#datatable-keytable').DataTable({
                keys: true
            });
            \$('#datatable-responsive').DataTable();
            \$('#datatable-scroller').DataTable({
                ajax: \"assets/plugins/datatables/json/scroller-demo.json\",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = \$('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
        });
        TableManageButtons.init();
    </script>
{% endblock %}
{% block contenus %}
    <div class=\"row\">


        {% if action == 'ville' %}

        <!-- start table for ville -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Listes des villes</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"m-b-30\">
                                <button type=\"button\" data-idtable=\"table_des_ville\" id=\"button-ajouter\" class=\"btn btn-primary waves-effect waves-light btn-ajouter\">Ajouter <i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                    <table id=\"datatable-buttons\" data-idtable=\"table_des_ville\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th style=\"width: 30px;\">#</th>
                                <th>Nom du ville</th>
                                <th style=\"width: 200px;\">Nombre de quartiers</th>
                                <th style=\"width: 100px;\">Action</th>
                            </tr>
                            <tr id=\"formAjout\" class=\"hidden\">
                                <form method=\"post\" action=\"#\">
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input style=\"width: 100%;\" type=\"text\" name=\"for-saving\" id=\"for-saving\" data-champs=\"nomville\" placeholder=\"nom du ville\" />
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td class=\"\">
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </form>
                            </tr>
                        </thead>


                        <tbody>
                        {% for i in [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20] %}
                            <tr id=\"{{ 'tr_numero_' ~ i }}\">
                                <td style=\"text-align: center;\">{{i}}</td>
                                <td class=\"form-edit\">System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"{{'tr_numero_' ~ i}}\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"{{'tr_numero_' ~ i}}\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"{{'tr_numero_' ~ i}}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"{{'tr_numero_' ~ i}}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for ville -->


        {% elseif action == 'quartier' %}

        <!-- start table for quartier -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Listes des quartiers</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"m-b-30\">
                                <button type=\"button\" data-idtable=\"table_des_quartier\" id=\"button-ajouter\" class=\"btn btn-primary waves-effect waves-light btn-ajouter\">Ajouter <i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                    <table id=\"datatable-buttons\" data-idtable=\"table_des_quartier\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th style=\"width: 30px;\">#</th>
                                <th>Nom du Quartier</th>
                                <th style=\"width: 200px;\">Nombre de bien</th>
                                <th style=\"width: 100px;\">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr id=\"formAjout\" class=\"hidden\">
                                <form method=\"post\" action=\"#\">
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input style=\"width: 100%;\"type=\"text\" name=\"\" id=\"\" placeholder=\"\" />
                                    </td>
                                    <td>
                                        &nbsp;<input type=\"submit\" class=\"btn btn-primary hidden\" name=\"enregistrer\" id=\"enregistrer\" value=\"enregistrer\">
                                    </td>
                                    <td class=\"\">
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td style=\"text-align: center;\">1</td>
                                <td>System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for quartier -->


        {% elseif action == 'type_de_bien' %}

        <!-- start table for type de bien -->
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Liste des type de bien</h3>
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"m-b-30\">
                                <button type=\"button\" data-idtable=\"table_des_type_de_Bien\" id=\"button-ajouter\" class=\"btn btn-primary waves-effect waves-light btn-ajouter\">Ajouter <i class=\"fa fa-plus\"></i></button>
                            </div>
                        </div>
                    </div>
                    <table id=\"datatable-buttons\" data-idtable=\"table_des_type_de_Bien\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th style=\"width: 30px;\">#</th>
                                <th>Nom du type de bien</th>
                                <th style=\"width: 200px;\">Nombre de bien</th>
                                <th style=\"width: 100px;\">Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr id=\"formAjout\" class=\"hidden\">
                                <form method=\"post\" action=\"#\">
                                    <td>
                                        &nbsp;
                                    </td>
                                    <td>
                                        <input style=\"width: 100%;\"type=\"text\" name=\"\" id=\"\" placeholder=\"\" />
                                    </td>
                                    <td>
                                        &nbsp;<input type=\"submit\" class=\"btn btn-primary hidden\" name=\"enregistrer\" id=\"enregistrer\" value=\"enregistrer\">
                                    </td>
                                    <td class=\"\">
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                        <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                    </td>
                                </form>
                            </tr>
                            <tr>
                                <td style=\"text-align: center;\">1</td>
                                <td>System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for type de bien -->
        {% endif %}

    </div>
    <!-- End Row -->

{% endblock %}
", "SoultanaBundle:Admin:bien.html.twig", "/var/www/html/soultana.sn/src/SNT/SoultanaBundle/Resources/views/Admin/bien.html.twig");
    }
}
