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
        $__internal_e3375de383463b3e29e6448f07bce3e5396b0a0e0798a702a258c6f79bf909f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3375de383463b3e29e6448f07bce3e5396b0a0e0798a702a258c6f79bf909f3->enter($__internal_e3375de383463b3e29e6448f07bce3e5396b0a0e0798a702a258c6f79bf909f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:bien.html.twig"));

        $__internal_d475fbd0c383844a262107085d7466d80c8238bb0887169ef3370a331335edc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d475fbd0c383844a262107085d7466d80c8238bb0887169ef3370a331335edc2->enter($__internal_d475fbd0c383844a262107085d7466d80c8238bb0887169ef3370a331335edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3375de383463b3e29e6448f07bce3e5396b0a0e0798a702a258c6f79bf909f3->leave($__internal_e3375de383463b3e29e6448f07bce3e5396b0a0e0798a702a258c6f79bf909f3_prof);

        
        $__internal_d475fbd0c383844a262107085d7466d80c8238bb0887169ef3370a331335edc2->leave($__internal_d475fbd0c383844a262107085d7466d80c8238bb0887169ef3370a331335edc2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16b1fdb0c53cbed97a951de353168a84717aba19aa77385fa9fa68bfa004530e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b1fdb0c53cbed97a951de353168a84717aba19aa77385fa9fa68bfa004530e->enter($__internal_16b1fdb0c53cbed97a951de353168a84717aba19aa77385fa9fa68bfa004530e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_86e51d5c3f1b3920cb411884fd58446bbc364c2fa1671d78b99aa08f978ce313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e51d5c3f1b3920cb411884fd58446bbc364c2fa1671d78b99aa08f978ce313->enter($__internal_86e51d5c3f1b3920cb411884fd58446bbc364c2fa1671d78b99aa08f978ce313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_86e51d5c3f1b3920cb411884fd58446bbc364c2fa1671d78b99aa08f978ce313->leave($__internal_86e51d5c3f1b3920cb411884fd58446bbc364c2fa1671d78b99aa08f978ce313_prof);

        
        $__internal_16b1fdb0c53cbed97a951de353168a84717aba19aa77385fa9fa68bfa004530e->leave($__internal_16b1fdb0c53cbed97a951de353168a84717aba19aa77385fa9fa68bfa004530e_prof);

    }

    // line 4
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_47f17992f19f55689a825cbd5810154dc5ed6907a4a33f233a590b7331d9ec73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f17992f19f55689a825cbd5810154dc5ed6907a4a33f233a590b7331d9ec73->enter($__internal_47f17992f19f55689a825cbd5810154dc5ed6907a4a33f233a590b7331d9ec73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        $__internal_a2b617c978754b7c2afc5a06c94030026daebabc5a8c0ca7a21838fe33a4d60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b617c978754b7c2afc5a06c94030026daebabc5a8c0ca7a21838fe33a4d60a->enter($__internal_a2b617c978754b7c2afc5a06c94030026daebabc5a8c0ca7a21838fe33a4d60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "Page ";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        
        $__internal_a2b617c978754b7c2afc5a06c94030026daebabc5a8c0ca7a21838fe33a4d60a->leave($__internal_a2b617c978754b7c2afc5a06c94030026daebabc5a8c0ca7a21838fe33a4d60a_prof);

        
        $__internal_47f17992f19f55689a825cbd5810154dc5ed6907a4a33f233a590b7331d9ec73->leave($__internal_47f17992f19f55689a825cbd5810154dc5ed6907a4a33f233a590b7331d9ec73_prof);

    }

    // line 5
    public function block_file_dariane($context, array $blocks = array())
    {
        $__internal_6712ca0f8370472dc8369ac94d80164f21142ca4f96a9ba44c1370b5a9bdc413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6712ca0f8370472dc8369ac94d80164f21142ca4f96a9ba44c1370b5a9bdc413->enter($__internal_6712ca0f8370472dc8369ac94d80164f21142ca4f96a9ba44c1370b5a9bdc413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

        $__internal_e97d615600019410a3d3ce1a7959bb044a3d6649b10860b5193c6fe56cdb39dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e97d615600019410a3d3ce1a7959bb044a3d6649b10860b5193c6fe56cdb39dd->enter($__internal_e97d615600019410a3d3ce1a7959bb044a3d6649b10860b5193c6fe56cdb39dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

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
        
        $__internal_e97d615600019410a3d3ce1a7959bb044a3d6649b10860b5193c6fe56cdb39dd->leave($__internal_e97d615600019410a3d3ce1a7959bb044a3d6649b10860b5193c6fe56cdb39dd_prof);

        
        $__internal_6712ca0f8370472dc8369ac94d80164f21142ca4f96a9ba44c1370b5a9bdc413->leave($__internal_6712ca0f8370472dc8369ac94d80164f21142ca4f96a9ba44c1370b5a9bdc413_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e8bcdff8323432bb0086fa51b87979b8d91ba1e3793068586868f8b6381c60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e8bcdff8323432bb0086fa51b87979b8d91ba1e3793068586868f8b6381c60a->enter($__internal_1e8bcdff8323432bb0086fa51b87979b8d91ba1e3793068586868f8b6381c60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a2d459e4e19b23158c9d10a7df03ad2632a74455a8662608b4f4824624f93dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2d459e4e19b23158c9d10a7df03ad2632a74455a8662608b4f4824624f93dc0->enter($__internal_a2d459e4e19b23158c9d10a7df03ad2632a74455a8662608b4f4824624f93dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_a2d459e4e19b23158c9d10a7df03ad2632a74455a8662608b4f4824624f93dc0->leave($__internal_a2d459e4e19b23158c9d10a7df03ad2632a74455a8662608b4f4824624f93dc0_prof);

        
        $__internal_1e8bcdff8323432bb0086fa51b87979b8d91ba1e3793068586868f8b6381c60a->leave($__internal_1e8bcdff8323432bb0086fa51b87979b8d91ba1e3793068586868f8b6381c60a_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8d730241c088ece399f26f5055142ac5d8fe14f7626ed0f30416197bc832427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d730241c088ece399f26f5055142ac5d8fe14f7626ed0f30416197bc832427->enter($__internal_d8d730241c088ece399f26f5055142ac5d8fe14f7626ed0f30416197bc832427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_94302940f67e6be12bfc3fcd7734d2792b8abb07c0205378db387b0e359b3d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94302940f67e6be12bfc3fcd7734d2792b8abb07c0205378db387b0e359b3d29->enter($__internal_94302940f67e6be12bfc3fcd7734d2792b8abb07c0205378db387b0e359b3d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_94302940f67e6be12bfc3fcd7734d2792b8abb07c0205378db387b0e359b3d29->leave($__internal_94302940f67e6be12bfc3fcd7734d2792b8abb07c0205378db387b0e359b3d29_prof);

        
        $__internal_d8d730241c088ece399f26f5055142ac5d8fe14f7626ed0f30416197bc832427->leave($__internal_d8d730241c088ece399f26f5055142ac5d8fe14f7626ed0f30416197bc832427_prof);

    }

    // line 66
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_4a6edc2c7ce97a759f9b34139f2b64669cc74f64f72d7dfb53e8d81101ac7c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6edc2c7ce97a759f9b34139f2b64669cc74f64f72d7dfb53e8d81101ac7c3a->enter($__internal_4a6edc2c7ce97a759f9b34139f2b64669cc74f64f72d7dfb53e8d81101ac7c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_d09bde930af4501dde03b38312cfd5e67eb5dbd8b2b614b1bb751ca09326b6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09bde930af4501dde03b38312cfd5e67eb5dbd8b2b614b1bb751ca09326b6af->enter($__internal_d09bde930af4501dde03b38312cfd5e67eb5dbd8b2b614b1bb751ca09326b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
                    <h3 class=\"panel-title\">Liste des villes</h3>
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
            $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
                // line 118
                echo "                            <tr id=\"";
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["ville"], "idVille", array())), "html", null, true);
                echo "\">
                                <td style=\"text-align: center;\">";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                                <td class=\"form-edit\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomVille", array()), "html", null, true);
                echo "</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 123
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["ville"], "idVille", array())), "html", null, true);
                echo "\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"";
                // line 124
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["ville"], "idVille", array())), "html", null, true);
                echo "\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 125
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["ville"], "idVille", array())), "html", null, true);
                echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"";
                // line 126
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["ville"], "idVille", array())), "html", null, true);
                echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
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
                    <h3 class=\"panel-title\">Liste des quartiers</h3>
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
            // line 187
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10, 10 => 11, 11 => 12, 12 => 13, 13 => 14, 14 => 15, 15 => 16, 16 => 17, 17 => 18, 18 => 19, 19 => 20));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 188
                echo "                            <tr id=\"";
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\">
                                <td style=\"text-align: center;\">";
                // line 189
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</td>
                                <td class=\"form-edit\">System Architect</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 193
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"";
                // line 194
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 195
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"";
                // line 196
                echo twig_escape_filter($this->env, ("tr_numero_" . $context["i"]), "html", null, true);
                echo "\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for quartier -->


        ";
        } elseif ((        // line 210
($context["action"] ?? $this->getContext($context, "action")) == "type_de_bien")) {
            // line 211
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
        // line 276
        echo "
    </div>
    <!-- End Row -->

";
        
        $__internal_d09bde930af4501dde03b38312cfd5e67eb5dbd8b2b614b1bb751ca09326b6af->leave($__internal_d09bde930af4501dde03b38312cfd5e67eb5dbd8b2b614b1bb751ca09326b6af_prof);

        
        $__internal_4a6edc2c7ce97a759f9b34139f2b64669cc74f64f72d7dfb53e8d81101ac7c3a->leave($__internal_4a6edc2c7ce97a759f9b34139f2b64669cc74f64f72d7dfb53e8d81101ac7c3a_prof);

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
        return array (  572 => 276,  505 => 211,  503 => 210,  491 => 200,  481 => 196,  477 => 195,  473 => 194,  469 => 193,  462 => 189,  457 => 188,  453 => 187,  405 => 141,  403 => 140,  391 => 130,  373 => 126,  369 => 125,  365 => 124,  361 => 123,  355 => 120,  351 => 119,  346 => 118,  329 => 117,  281 => 71,  279 => 70,  274 => 67,  265 => 66,  232 => 43,  227 => 41,  221 => 38,  217 => 37,  213 => 36,  209 => 35,  205 => 34,  201 => 33,  197 => 32,  193 => 31,  189 => 30,  185 => 29,  181 => 28,  177 => 27,  173 => 26,  169 => 25,  166 => 24,  157 => 23,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  121 => 11,  112 => 10,  100 => 8,  96 => 7,  91 => 6,  82 => 5,  63 => 4,  45 => 3,  11 => 1,);
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
                    <h3 class=\"panel-title\">Liste des villes</h3>
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
                        {% for ville in villes %}
                            <tr id=\"{{ 'tr_numero_' ~ ville.idVille }}\">
                                <td style=\"text-align: center;\">{{ loop.index }}</td>
                                <td class=\"form-edit\">{{ville.nomVille}}</td>
                                <td>5</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"{{'tr_numero_' ~ ville.idVille}}\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"{{'tr_numero_' ~ ville.idVille}}\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"{{'tr_numero_' ~ ville.idVille}}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"{{'tr_numero_' ~ ville.idVille}}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
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
                    <h3 class=\"panel-title\">Liste des quartiers</h3>
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
