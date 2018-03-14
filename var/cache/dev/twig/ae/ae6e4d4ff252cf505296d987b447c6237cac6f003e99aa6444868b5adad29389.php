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
        $__internal_f2db9f85ce680d552df98c6431943a5e3f25291f15f395bec81023973c8f586e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2db9f85ce680d552df98c6431943a5e3f25291f15f395bec81023973c8f586e->enter($__internal_f2db9f85ce680d552df98c6431943a5e3f25291f15f395bec81023973c8f586e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:bien.html.twig"));

        $__internal_20aa6aafabc53cedf9414a5b97f03a68d0dca42974f039b4fc7606b832540351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20aa6aafabc53cedf9414a5b97f03a68d0dca42974f039b4fc7606b832540351->enter($__internal_20aa6aafabc53cedf9414a5b97f03a68d0dca42974f039b4fc7606b832540351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Admin:bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2db9f85ce680d552df98c6431943a5e3f25291f15f395bec81023973c8f586e->leave($__internal_f2db9f85ce680d552df98c6431943a5e3f25291f15f395bec81023973c8f586e_prof);

        
        $__internal_20aa6aafabc53cedf9414a5b97f03a68d0dca42974f039b4fc7606b832540351->leave($__internal_20aa6aafabc53cedf9414a5b97f03a68d0dca42974f039b4fc7606b832540351_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9649dcdffada4a7cc7325e07c0720b6fcab52450ec3501966d2cd364257dc2ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9649dcdffada4a7cc7325e07c0720b6fcab52450ec3501966d2cd364257dc2ca->enter($__internal_9649dcdffada4a7cc7325e07c0720b6fcab52450ec3501966d2cd364257dc2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b4065e35ac3947050e4ee5aa75678ce7eb02d8c66e8399ddc573b00e3767cf4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4065e35ac3947050e4ee5aa75678ce7eb02d8c66e8399ddc573b00e3767cf4d->enter($__internal_b4065e35ac3947050e4ee5aa75678ce7eb02d8c66e8399ddc573b00e3767cf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin";
        
        $__internal_b4065e35ac3947050e4ee5aa75678ce7eb02d8c66e8399ddc573b00e3767cf4d->leave($__internal_b4065e35ac3947050e4ee5aa75678ce7eb02d8c66e8399ddc573b00e3767cf4d_prof);

        
        $__internal_9649dcdffada4a7cc7325e07c0720b6fcab52450ec3501966d2cd364257dc2ca->leave($__internal_9649dcdffada4a7cc7325e07c0720b6fcab52450ec3501966d2cd364257dc2ca_prof);

    }

    // line 4
    public function block_titre_page($context, array $blocks = array())
    {
        $__internal_51f17312c217f05f9ed7dfc7360950659669927efa563813f52dbe6aafa428ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f17312c217f05f9ed7dfc7360950659669927efa563813f52dbe6aafa428ec->enter($__internal_51f17312c217f05f9ed7dfc7360950659669927efa563813f52dbe6aafa428ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        $__internal_0e33dfb2e90b487586fc172cf98a8738dba6692aa473b954cfc1d65f4bbb4101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e33dfb2e90b487586fc172cf98a8738dba6692aa473b954cfc1d65f4bbb4101->enter($__internal_0e33dfb2e90b487586fc172cf98a8738dba6692aa473b954cfc1d65f4bbb4101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page"));

        echo "Page ";
        echo twig_escape_filter($this->env, ($context["action"] ?? $this->getContext($context, "action")), "html", null, true);
        
        $__internal_0e33dfb2e90b487586fc172cf98a8738dba6692aa473b954cfc1d65f4bbb4101->leave($__internal_0e33dfb2e90b487586fc172cf98a8738dba6692aa473b954cfc1d65f4bbb4101_prof);

        
        $__internal_51f17312c217f05f9ed7dfc7360950659669927efa563813f52dbe6aafa428ec->leave($__internal_51f17312c217f05f9ed7dfc7360950659669927efa563813f52dbe6aafa428ec_prof);

    }

    // line 5
    public function block_file_dariane($context, array $blocks = array())
    {
        $__internal_41552ce85c47bcb2778f234218eccb1cebfeeee230a00770e8070468a3c7cafd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41552ce85c47bcb2778f234218eccb1cebfeeee230a00770e8070468a3c7cafd->enter($__internal_41552ce85c47bcb2778f234218eccb1cebfeeee230a00770e8070468a3c7cafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

        $__internal_8a6c89b887c75bde1fb836dbc202de272c2f474cb79b07637c63e6e70f94ebb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6c89b887c75bde1fb836dbc202de272c2f474cb79b07637c63e6e70f94ebb5->enter($__internal_8a6c89b887c75bde1fb836dbc202de272c2f474cb79b07637c63e6e70f94ebb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "file_dariane"));

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
        
        $__internal_8a6c89b887c75bde1fb836dbc202de272c2f474cb79b07637c63e6e70f94ebb5->leave($__internal_8a6c89b887c75bde1fb836dbc202de272c2f474cb79b07637c63e6e70f94ebb5_prof);

        
        $__internal_41552ce85c47bcb2778f234218eccb1cebfeeee230a00770e8070468a3c7cafd->leave($__internal_41552ce85c47bcb2778f234218eccb1cebfeeee230a00770e8070468a3c7cafd_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8437556551783aada8e52d3edd9980e6ce3772ec14ce49e3004610f27eef4719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8437556551783aada8e52d3edd9980e6ce3772ec14ce49e3004610f27eef4719->enter($__internal_8437556551783aada8e52d3edd9980e6ce3772ec14ce49e3004610f27eef4719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_95b1a7e800bef85107602b11692c67ca13e1e82e6ff80af83bc5cb70e0ea4a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b1a7e800bef85107602b11692c67ca13e1e82e6ff80af83bc5cb70e0ea4a4d->enter($__internal_95b1a7e800bef85107602b11692c67ca13e1e82e6ff80af83bc5cb70e0ea4a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_95b1a7e800bef85107602b11692c67ca13e1e82e6ff80af83bc5cb70e0ea4a4d->leave($__internal_95b1a7e800bef85107602b11692c67ca13e1e82e6ff80af83bc5cb70e0ea4a4d_prof);

        
        $__internal_8437556551783aada8e52d3edd9980e6ce3772ec14ce49e3004610f27eef4719->leave($__internal_8437556551783aada8e52d3edd9980e6ce3772ec14ce49e3004610f27eef4719_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1e764fbc8961be0877dfe7d3e0916df29c5083d5d6744365a9028361db3a652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1e764fbc8961be0877dfe7d3e0916df29c5083d5d6744365a9028361db3a652->enter($__internal_e1e764fbc8961be0877dfe7d3e0916df29c5083d5d6744365a9028361db3a652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_380b4fa4491d18b41785ee9beb6117716a63dc9dce1c052aa22b361a2e9c794c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380b4fa4491d18b41785ee9beb6117716a63dc9dce1c052aa22b361a2e9c794c->enter($__internal_380b4fa4491d18b41785ee9beb6117716a63dc9dce1c052aa22b361a2e9c794c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_380b4fa4491d18b41785ee9beb6117716a63dc9dce1c052aa22b361a2e9c794c->leave($__internal_380b4fa4491d18b41785ee9beb6117716a63dc9dce1c052aa22b361a2e9c794c_prof);

        
        $__internal_e1e764fbc8961be0877dfe7d3e0916df29c5083d5d6744365a9028361db3a652->leave($__internal_e1e764fbc8961be0877dfe7d3e0916df29c5083d5d6744365a9028361db3a652_prof);

    }

    // line 66
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_64574573c91ffea25c19edd1588ecff6bf303c8175476e241f08935a1ac1ce00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64574573c91ffea25c19edd1588ecff6bf303c8175476e241f08935a1ac1ce00->enter($__internal_64574573c91ffea25c19edd1588ecff6bf303c8175476e241f08935a1ac1ce00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_0ec2c0265121f6788f2c305beb826a1bae0a790c82120b7feb2989d99bf55b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec2c0265121f6788f2c305beb826a1bae0a790c82120b7feb2989d99bf55b46->enter($__internal_0ec2c0265121f6788f2c305beb826a1bae0a790c82120b7feb2989d99bf55b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
                                        <input class=\"form-control\" style=\"width: 100%;\" type=\"text\" name=\"for-saving\" id=\"for-saving\" data-champs=\"nomquartier\" placeholder=\"nom du quartier\" />
                                    </td>
                                    <td>
                                        <select class=\"form-control\" style=\"width: 100%;\" name=\"\" id=\"\">
                                            ";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
            foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
                // line 175
                echo "                                                <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "idVille", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomVille", array()), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "                                            <option id=\"ajoutVille\">
                                                <form method=\"post\" action=\"#\">
                                                    <input class=\"form-control\" style=\"width: 100%;\" type=\"text\" name=\"for-saving\" id=\"for-saving\" data-champs=\"nomquartier\" placeholder=\"nom du quartier\" />
                                                </form>
                                            </option>
                                        </select>
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
            // line 196
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["quartiers"] ?? $this->getContext($context, "quartiers")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["quartier"]) {
                // line 197
                echo "                            <tr id=\"";
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["quartier"], "idQuartier", array())), "html", null, true);
                echo "\">
                                <td style=\"text-align: center;\">";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                                <td class=\"form-edit\">";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "nomQuartier", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["quartier"], "idVille", array()), "html", null, true);
                echo "</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 202
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["quartier"], "idQuartier", array())), "html", null, true);
                echo "\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"";
                // line 203
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["quartier"], "idQuartier", array())), "html", null, true);
                echo "\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"";
                // line 204
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["quartier"], "idQuartier", array())), "html", null, true);
                echo "\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"";
                // line 205
                echo twig_escape_filter($this->env, ("tr_numero_" . $this->getAttribute($context["quartier"], "idQuartier", array())), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quartier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 209
            echo "
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- End table for quartier -->


        ";
        } elseif ((        // line 219
($context["action"] ?? $this->getContext($context, "action")) == "type_de_bien")) {
            // line 220
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
        // line 285
        echo "
    </div>
    <!-- End Row -->

";
        
        $__internal_0ec2c0265121f6788f2c305beb826a1bae0a790c82120b7feb2989d99bf55b46->leave($__internal_0ec2c0265121f6788f2c305beb826a1bae0a790c82120b7feb2989d99bf55b46_prof);

        
        $__internal_64574573c91ffea25c19edd1588ecff6bf303c8175476e241f08935a1ac1ce00->leave($__internal_64574573c91ffea25c19edd1588ecff6bf303c8175476e241f08935a1ac1ce00_prof);

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
        return array (  622 => 285,  555 => 220,  553 => 219,  541 => 209,  523 => 205,  519 => 204,  515 => 203,  511 => 202,  506 => 200,  502 => 199,  498 => 198,  493 => 197,  476 => 196,  455 => 177,  444 => 175,  440 => 174,  405 => 141,  403 => 140,  391 => 130,  373 => 126,  369 => 125,  365 => 124,  361 => 123,  355 => 120,  351 => 119,  346 => 118,  329 => 117,  281 => 71,  279 => 70,  274 => 67,  265 => 66,  232 => 43,  227 => 41,  221 => 38,  217 => 37,  213 => 36,  209 => 35,  205 => 34,  201 => 33,  197 => 32,  193 => 31,  189 => 30,  185 => 29,  181 => 28,  177 => 27,  173 => 26,  169 => 25,  166 => 24,  157 => 23,  140 => 16,  136 => 15,  132 => 14,  128 => 13,  124 => 12,  121 => 11,  112 => 10,  100 => 8,  96 => 7,  91 => 6,  82 => 5,  63 => 4,  45 => 3,  11 => 1,);
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
                                        <input class=\"form-control\" style=\"width: 100%;\" type=\"text\" name=\"for-saving\" id=\"for-saving\" data-champs=\"nomquartier\" placeholder=\"nom du quartier\" />
                                    </td>
                                    <td>
                                        <select class=\"form-control\" style=\"width: 100%;\" name=\"\" id=\"\">
                                            {% for ville in villes %}
                                                <option value=\"{{ville.idVille}}\">{{ville.nomVille}}</option>
                                            {% endfor %}
                                            <option id=\"ajoutVille\">
                                                <form method=\"post\" action=\"#\">
                                                    <input class=\"form-control\" style=\"width: 100%;\" type=\"text\" name=\"for-saving\" id=\"for-saving\" data-champs=\"nomquartier\" placeholder=\"nom du quartier\" />
                                                </form>
                                            </option>
                                        </select>
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
                        {% for quartier in quartiers %}
                            <tr id=\"{{ 'tr_numero_' ~ quartier.idQuartier }}\">
                                <td style=\"text-align: center;\">{{loop.index}}</td>
                                <td class=\"form-edit\">{{quartier.nomQuartier}}</td>
                                <td>{{quartier.idVille}}</td>
                                <td class=\"\">
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"{{'tr_numero_' ~ quartier.idQuartier}}\" class=\"hidden on-editing save-row\"><i class=\"fa fa-save\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\" data-idtr=\"{{'tr_numero_' ~ quartier.idQuartier}}\" class=\"hidden on-editing cancel-row\"><i class=\"fa fa-times\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px;\" data-idtr=\"{{'tr_numero_' ~ quartier.idQuartier}}\" class=\"on-default edit-row\"><i class=\"fa fa-pencil\"></i></a>
                                    <a href=\"#\" style=\"margin-left: 25px; color: red;\"data-idtr=\"{{'tr_numero_' ~ quartier.idQuartier}}\" class=\"on-default remove-row\"><i class=\"fa fa-trash-o\"></i></a>
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
