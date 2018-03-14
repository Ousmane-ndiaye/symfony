<?php

/* SoultanaBundle:Proprietaire:soumettre.bien.html.twig */
class __TwigTemplate_29e7f8730099559dfc8e82669057ef8f440b714c739a074e73d9e492f4e6160c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::front.html.twig", "SoultanaBundle:Proprietaire:soumettre.bien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'autrestyle' => array($this, 'block_autrestyle'),
            'autrescript' => array($this, 'block_autrescript'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c99915a7fa9326d7af498a502c5511a85f62f097b533a95256721de6541c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c99915a7fa9326d7af498a502c5511a85f62f097b533a95256721de6541c83->enter($__internal_99c99915a7fa9326d7af498a502c5511a85f62f097b533a95256721de6541c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Proprietaire:soumettre.bien.html.twig"));

        $__internal_f2e31e18d07c2071d1ef8542de1e34528ad493d5c18e90ae588f91a52ad53744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e31e18d07c2071d1ef8542de1e34528ad493d5c18e90ae588f91a52ad53744->enter($__internal_f2e31e18d07c2071d1ef8542de1e34528ad493d5c18e90ae588f91a52ad53744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoultanaBundle:Proprietaire:soumettre.bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c99915a7fa9326d7af498a502c5511a85f62f097b533a95256721de6541c83->leave($__internal_99c99915a7fa9326d7af498a502c5511a85f62f097b533a95256721de6541c83_prof);

        
        $__internal_f2e31e18d07c2071d1ef8542de1e34528ad493d5c18e90ae588f91a52ad53744->leave($__internal_f2e31e18d07c2071d1ef8542de1e34528ad493d5c18e90ae588f91a52ad53744_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5758d23c296acedb13aa466f3a2787852f24236cc6433455348ee80730aba4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5758d23c296acedb13aa466f3a2787852f24236cc6433455348ee80730aba4a3->enter($__internal_5758d23c296acedb13aa466f3a2787852f24236cc6433455348ee80730aba4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9a363ca958917ca92992700b3c51b3df52f51860e333334aef5169f3b87e73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a363ca958917ca92992700b3c51b3df52f51860e333334aef5169f3b87e73a->enter($__internal_f9a363ca958917ca92992700b3c51b3df52f51860e333334aef5169f3b87e73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SoultanaBundle:Proprietaire:insererBien";
        
        $__internal_f9a363ca958917ca92992700b3c51b3df52f51860e333334aef5169f3b87e73a->leave($__internal_f9a363ca958917ca92992700b3c51b3df52f51860e333334aef5169f3b87e73a_prof);

        
        $__internal_5758d23c296acedb13aa466f3a2787852f24236cc6433455348ee80730aba4a3->leave($__internal_5758d23c296acedb13aa466f3a2787852f24236cc6433455348ee80730aba4a3_prof);

    }

    // line 4
    public function block_autrestyle($context, array $blocks = array())
    {
        $__internal_a5326a64376f92036010a4141d6d8406b09a8749ba039355ea7a2189e1d3a1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5326a64376f92036010a4141d6d8406b09a8749ba039355ea7a2189e1d3a1e4->enter($__internal_a5326a64376f92036010a4141d6d8406b09a8749ba039355ea7a2189e1d3a1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrestyle"));

        $__internal_e66dc180d83711101bc990b86695c021c6d4f13a1db25225ddb6d2b7093e9374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66dc180d83711101bc990b86695c021c6d4f13a1db25225ddb6d2b7093e9374->enter($__internal_e66dc180d83711101bc990b86695c021c6d4f13a1db25225ddb6d2b7093e9374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrestyle"));

        // line 5
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/css/wizard.css"), "html", null, true);
        echo "\">
";
        
        $__internal_e66dc180d83711101bc990b86695c021c6d4f13a1db25225ddb6d2b7093e9374->leave($__internal_e66dc180d83711101bc990b86695c021c6d4f13a1db25225ddb6d2b7093e9374_prof);

        
        $__internal_a5326a64376f92036010a4141d6d8406b09a8749ba039355ea7a2189e1d3a1e4->leave($__internal_a5326a64376f92036010a4141d6d8406b09a8749ba039355ea7a2189e1d3a1e4_prof);

    }

    // line 8
    public function block_autrescript($context, array $blocks = array())
    {
        $__internal_15803716e052af03c43c81f20fee900a921e0311065b464ec4998a720733715d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15803716e052af03c43c81f20fee900a921e0311065b464ec4998a720733715d->enter($__internal_15803716e052af03c43c81f20fee900a921e0311065b464ec4998a720733715d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrescript"));

        $__internal_a547f0d4bd3bc4776cbaba973d3c0a317b1bc981f44e40db8694240a72932219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a547f0d4bd3bc4776cbaba973d3c0a317b1bc981f44e40db8694240a72932219->enter($__internal_a547f0d4bd3bc4776cbaba973d3c0a317b1bc981f44e40db8694240a72932219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "autrescript"));

        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.bootstrap.wizard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/js/wizard.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a547f0d4bd3bc4776cbaba973d3c0a317b1bc981f44e40db8694240a72932219->leave($__internal_a547f0d4bd3bc4776cbaba973d3c0a317b1bc981f44e40db8694240a72932219_prof);

        
        $__internal_15803716e052af03c43c81f20fee900a921e0311065b464ec4998a720733715d->leave($__internal_15803716e052af03c43c81f20fee900a921e0311065b464ec4998a720733715d_prof);

    }

    // line 13
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_24f459ff4df85f8fd1133fbd83f23065a97b1e2f804f35ef3c9d37ca04132ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f459ff4df85f8fd1133fbd83f23065a97b1e2f804f35ef3c9d37ca04132ca8->enter($__internal_24f459ff4df85f8fd1133fbd83f23065a97b1e2f804f35ef3c9d37ca04132ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_4af582ba806af70a83bc8801a561457d32bb41bb4399bebf5c51cf63ce175de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af582ba806af70a83bc8801a561457d32bb41bb4399bebf5c51cf63ce175de9->enter($__internal_4af582ba806af70a83bc8801a561457d32bb41bb4399bebf5c51cf63ce175de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 14
        echo "    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"page-head-content\">
                    <h1 class=\"page-title\">Soumettre un nouveau bien</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class=\"content-area submit-property\" style=\"background-color: #FCFCFC;\">&nbsp;
        <div class=\"container\">
            <div class=\"clearfix\">
                <div class=\"wizard-container\">

                    <div class=\"wizard-card ct-wizard-orange\" id=\"wizardProperty\">
                        <form action=\"\" method=\"POST\">
                            <div class=\"wizard-header\">
                                <h3>
                                    <b>Soumettez</b> nous votre bien <br>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                                </h3>
                            </div>

                            <ul>
                                <li><a href=\"#step1\" data-toggle=\"tab\">Etape 1 </a></li>
                                <li><a href=\"#step2\" data-toggle=\"tab\">Etape 2 </a></li>
                                <li><a href=\"#step3\" data-toggle=\"tab\">Etape 3 </a></li>
                                <li><a href=\"#step4\" data-toggle=\"tab\">FIN </a></li>
                            </ul>

                            <div class=\"tab-content\">

                                <div class=\"tab-pane\" id=\"step1\">
                                    <div class=\"row p-b-15  \">
                                        <h4 class=\"info-text\"> Commençons avec quelques informations basic vous concernant (proprietaire)</h4>
                                        <div class=\"col-sm-4 col-sm-offset-1\">
                                            <div class=\"picture-container\">
                                                <div class=\"picture\">
                                                    <img src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("front/assets/img/default-property.jpg"), "html", null, true);
        echo "\" class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\" />
                                                    <input type=\"file\" name=\"proprietairePP\" id=\"wizard-picture\" accept = \"image/jpeg, image/png\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label>Prénom et Nom <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"nomComplet\" id=\"nomComplet\" data-champs=\"Prénom et Nom\" type=\"text\" class=\"form-control\" placeholder=\"Super villa ...\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Adresse <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"adresseProp\" id=\"adresseProp\" data-champs=\"Adresse\" type=\"text\" class=\"form-control\" placeholder=\".....\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Numéro CNI <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"numPiece\" id=\"numPiece\" data-champs=\"numéro CNI\" type=\"text\" class=\"form-control\" placeholder=\".....\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>E-mail <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"email\" id=\"email\" data-champs=\"E-mail\" type=\"text\" class=\"form-control\" placeholder=\"xyzt@xyzt.com\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Téléphone <small>(empty if you wanna use default phone number)</small></label>
                                                <input name=\"tel\" id=\"tel\" data-champs=\"Téléphone\" type=\"text\" class=\"form-control\" placeholder=\"77 591 96 86\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End step 1 -->

                                <div class=\"tab-pane\" id=\"step2\">
                                    <h4 class=\"info-text\"> À quel point votre bien est spécial ? </h4>
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"col-sm-12\">
                                                <div class=\"form-group\">
                                                    <label>Déscription du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <textarea name=\"description\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-12\">
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Ville du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <select id=\"lunchBegins\" name=\"nomVille\" data-champs=\"Ville du bien\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir le ville\">
                                                        <option>Seoul</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Quartier du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <select id=\"lunchBegins\" name=\"nomQuartier\" data-champs=\"Quartier du bien\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir le quartier\">
                                                        <option>New york, CA</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Type de bien  : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <select id=\"basic\" name=\"nomTypeBien\" data-champs=\"Type de bien\" class=\"selectpicker show-tick form-control\">
                                                        <option> -Status- </option>
                                                        <option>Rent </option>
                                                        <option>Boy</option>
                                                        <option>used</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Nom du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"nomBien\" id=\"nomBien\" data-champs=\"Nom du bien\" type=\"text\" class=\"form-control\" placeholder=\"Keur...\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-12 padding-top-15\">
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Adresse du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"adresseBien\" id=\"adresseBien\" data-champs=\"Adresse du bien\" type=\"text\" class=\"form-control\" placeholder=\"Park Amazout, Villa n°12\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Prix du bien : <small>en <b>FCFA</b> (<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"prixLocation\" id=\"prixLocation\" data-champs=\"Prix du bien\" type=\"text\" class=\"form-control\" placeholder=\"15 000\">
                                                </div>
                                            </div>
                                            <!--
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Surface : <small>en <b>M²</b> (<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input type=\"text\" name=\"surface\" data-champs=\"Surface\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"500\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"min-bed\"><br />
                                                    <b class=\"pull-left color\">1</b>
                                                    <b class=\"pull-right color\">500</b>
                                                </div>
                                            </div>
                                            -->
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Surface : <small>en <b>M²</b> (<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"surface\" id=\"surface\" data-champs=\"Surface\" type=\"text\" class=\"form-control\" placeholder=\"150\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Nombre d'étage :</label>
                                                    <input name=\"nbreEtage\" id=\"nbreEtage\" data-champs=\"Nombre d'étage\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-12 padding-top-15\">
                                            <div class=\"col-sm-4\">
                                                <div class=\"form-group\">
                                                    <label>Nombre de chambre :</label>
                                                    <input name=\"nbreChambre\" id=\"nbreChambre\" data-champs=\"Nombre de chambre\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <div class=\"form-group\">
                                                    <label>Nombre de salle de bain :</label>
                                                    <input name=\"nbreSalleBain\" id=\"nbreSalleBain\" data-champs=\"Nombre de salle de bain\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <div class=\"form-group\">
                                                    <label>Nombre de salon :</label>
                                                    <input name=\"nbreSalon\" id=\"nbreSalon\" data-champs=\"Nombre de salon\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <!--
                                        <div class=\"col-sm-12 padding-bottom-15\">
                                            <div class=\"form-group\">
                                                <input type=\"range\" list=\"tickmarks\">
                                                <datalist id=\"tickmarks\">
                                                <option value=\"0\">
                                                <option value=\"10\">
                                                <option value=\"20\">
                                                <option value=\"30\">
                                                <option value=\"40\">
                                                <option value=\"50\">
                                                <option value=\"60\">
                                                <option value=\"70\">
                                                <option value=\"80\">
                                                <option value=\"90\">
                                                <option value=\"100\">
                                                </datalist>
                                                </div>
                                        </div>
                                        -->
                                        <div class=\"col-sm-12 padding-bottom-15\">
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"balcon\" id=\"balcon\" data-champs=\"balcon\" type=\"checkbox\"> Balcon
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"terasse\" id=\"terasse\" data-champs=\"terasse\" type=\"checkbox\"> Térasse
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"parking\" id=\"parking\" data-champs=\"parking\" type=\"checkbox\"> Parking
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"meuble\" id=\"meuble\" data-champs=\"meuble\" type=\"checkbox\"> Meublé
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <!-- End step 2 -->

                                <div class=\"tab-pane\" id=\"step3\">
                                    <h4 class=\"info-text\">Donnez nous quelqques images et videos ? </h4>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"property-images\">Choisir Images :</label>
                                                <input class=\"form-control\" type=\"file\" id=\"property-images\" multiple>
                                                <p class=\"help-block\">Choisir plusieurs images de votre bien .</p>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"property-video\">Video du bien :</label>
                                                <input class=\"form-control\" value=\"\" placeholder=\"http://www.youtube.com, http://vimeo.com\" name=\"property_video\" type=\"text\">
                                            </div>

                                            <div class=\"form-group\">
                                                <input class=\"form-control\" value=\"\" placeholder=\"http://www.youtube.com, http://vimeo.com\" name=\"property_video\" type=\"text\">
                                            </div>

                                            <div class=\"form-group\">
                                                <input class=\"form-control\" value=\"\" placeholder=\"http://www.youtube.com, http://vimeo.com\" name=\"property_video\" type=\"text\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End step 3 -->


                                <div class=\"tab-pane\" id=\"step4\">
                                    <h4 class=\"info-text\"> Finission et soumission </h4>
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"\">
                                                <p>
                                                    <label><strong>Termes et Conditions :</strong></label> pour acceder ou utiliser SOULTANA services, such as posting your property advertisement with your personal information on our website you agree to
                                                    the collection, use and disclosure of your personal information in the legal proper manner
                                                </p>
                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input name=\"approuver\" id=\"approuver\" type=\"checkbox\" /> <strong>J' accepte les termes et conditions.</strong>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End step 4 -->

                            </div>

                            <div class=\"wizard-footer\">
                                <div class=\"pull-right\">
                                    <input type='button' class='btn btn-next btn-primary' name='next' value='Suivant' />
                                    <input type='submit' class='btn btn-finish btn-primary ' name='finish' value='Soumettre' />
                                </div>

                                <div class=\"pull-left\">
                                    <input type='button' class='btn btn-previous btn-default' name='previous' value='Précédent' />
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End submit form -->
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_4af582ba806af70a83bc8801a561457d32bb41bb4399bebf5c51cf63ce175de9->leave($__internal_4af582ba806af70a83bc8801a561457d32bb41bb4399bebf5c51cf63ce175de9_prof);

        
        $__internal_24f459ff4df85f8fd1133fbd83f23065a97b1e2f804f35ef3c9d37ca04132ca8->leave($__internal_24f459ff4df85f8fd1133fbd83f23065a97b1e2f804f35ef3c9d37ca04132ca8_prof);

    }

    public function getTemplateName()
    {
        return "SoultanaBundle:Proprietaire:soumettre.bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 55,  122 => 14,  113 => 13,  101 => 11,  97 => 10,  92 => 9,  83 => 8,  70 => 5,  61 => 4,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::front.html.twig\" %}

{% block title %}SoultanaBundle:Proprietaire:insererBien{% endblock %}
{% block autrestyle %}
    <link rel=\"stylesheet\" href=\"{{asset('front/assets/css/wizard.css')}}\">
{% endblock %}

{% block autrescript %}
    <script src=\"{{asset('front/assets/js/jquery.bootstrap.wizard.js')}}\" type=\"text/javascript\"></script>
    <script src=\"{{asset('front/assets/js/jquery.validate.min.js')}}\"></script>
    <script src=\"{{asset('front/assets/js/wizard.js')}}\"></script>
{% endblock %}
{% block contenus %}
    <div class=\"page-head\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"page-head-content\">
                    <h1 class=\"page-title\">Soumettre un nouveau bien</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End page header -->

    <!-- property area -->
    <div class=\"content-area submit-property\" style=\"background-color: #FCFCFC;\">&nbsp;
        <div class=\"container\">
            <div class=\"clearfix\">
                <div class=\"wizard-container\">

                    <div class=\"wizard-card ct-wizard-orange\" id=\"wizardProperty\">
                        <form action=\"\" method=\"POST\">
                            <div class=\"wizard-header\">
                                <h3>
                                    <b>Soumettez</b> nous votre bien <br>
                                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing.</small>
                                </h3>
                            </div>

                            <ul>
                                <li><a href=\"#step1\" data-toggle=\"tab\">Etape 1 </a></li>
                                <li><a href=\"#step2\" data-toggle=\"tab\">Etape 2 </a></li>
                                <li><a href=\"#step3\" data-toggle=\"tab\">Etape 3 </a></li>
                                <li><a href=\"#step4\" data-toggle=\"tab\">FIN </a></li>
                            </ul>

                            <div class=\"tab-content\">

                                <div class=\"tab-pane\" id=\"step1\">
                                    <div class=\"row p-b-15  \">
                                        <h4 class=\"info-text\"> Commençons avec quelques informations basic vous concernant (proprietaire)</h4>
                                        <div class=\"col-sm-4 col-sm-offset-1\">
                                            <div class=\"picture-container\">
                                                <div class=\"picture\">
                                                    <img src=\"{{asset('front/assets/img/default-property.jpg')}}\" class=\"picture-src\" id=\"wizardPicturePreview\" title=\"\" />
                                                    <input type=\"file\" name=\"proprietairePP\" id=\"wizard-picture\" accept = \"image/jpeg, image/png\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label>Prénom et Nom <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"nomComplet\" id=\"nomComplet\" data-champs=\"Prénom et Nom\" type=\"text\" class=\"form-control\" placeholder=\"Super villa ...\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Adresse <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"adresseProp\" id=\"adresseProp\" data-champs=\"Adresse\" type=\"text\" class=\"form-control\" placeholder=\".....\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Numéro CNI <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"numPiece\" id=\"numPiece\" data-champs=\"numéro CNI\" type=\"text\" class=\"form-control\" placeholder=\".....\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>E-mail <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                <input name=\"email\" id=\"email\" data-champs=\"E-mail\" type=\"text\" class=\"form-control\" placeholder=\"xyzt@xyzt.com\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Téléphone <small>(empty if you wanna use default phone number)</small></label>
                                                <input name=\"tel\" id=\"tel\" data-champs=\"Téléphone\" type=\"text\" class=\"form-control\" placeholder=\"77 591 96 86\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End step 1 -->

                                <div class=\"tab-pane\" id=\"step2\">
                                    <h4 class=\"info-text\"> À quel point votre bien est spécial ? </h4>
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"col-sm-12\">
                                                <div class=\"form-group\">
                                                    <label>Déscription du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <textarea name=\"description\" class=\"form-control\"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"col-sm-12\">
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Ville du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <select id=\"lunchBegins\" name=\"nomVille\" data-champs=\"Ville du bien\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir le ville\">
                                                        <option>Seoul</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Quartier du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <select id=\"lunchBegins\" name=\"nomQuartier\" data-champs=\"Quartier du bien\" class=\"selectpicker\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir le quartier\">
                                                        <option>New york, CA</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Type de bien  : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <select id=\"basic\" name=\"nomTypeBien\" data-champs=\"Type de bien\" class=\"selectpicker show-tick form-control\">
                                                        <option> -Status- </option>
                                                        <option>Rent </option>
                                                        <option>Boy</option>
                                                        <option>used</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Nom du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"nomBien\" id=\"nomBien\" data-champs=\"Nom du bien\" type=\"text\" class=\"form-control\" placeholder=\"Keur...\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-12 padding-top-15\">
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Adresse du bien : <small>(<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"adresseBien\" id=\"adresseBien\" data-champs=\"Adresse du bien\" type=\"text\" class=\"form-control\" placeholder=\"Park Amazout, Villa n°12\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Prix du bien : <small>en <b>FCFA</b> (<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"prixLocation\" id=\"prixLocation\" data-champs=\"Prix du bien\" type=\"text\" class=\"form-control\" placeholder=\"15 000\">
                                                </div>
                                            </div>
                                            <!--
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Surface : <small>en <b>M²</b> (<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input type=\"text\" name=\"surface\" data-champs=\"Surface\" class=\"span2\" value=\"\" data-slider-min=\"0\" data-slider-max=\"500\" data-slider-step=\"5\" data-slider-value=\"[0,450]\" id=\"min-bed\"><br />
                                                    <b class=\"pull-left color\">1</b>
                                                    <b class=\"pull-right color\">500</b>
                                                </div>
                                            </div>
                                            -->
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Surface : <small>en <b>M²</b> (<font style=\"color: red;\">Obligatoire</font>)</small></label>
                                                    <input name=\"surface\" id=\"surface\" data-champs=\"Surface\" type=\"text\" class=\"form-control\" placeholder=\"150\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <label>Nombre d'étage :</label>
                                                    <input name=\"nbreEtage\" id=\"nbreEtage\" data-champs=\"Nombre d'étage\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-12 padding-top-15\">
                                            <div class=\"col-sm-4\">
                                                <div class=\"form-group\">
                                                    <label>Nombre de chambre :</label>
                                                    <input name=\"nbreChambre\" id=\"nbreChambre\" data-champs=\"Nombre de chambre\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <div class=\"form-group\">
                                                    <label>Nombre de salle de bain :</label>
                                                    <input name=\"nbreSalleBain\" id=\"nbreSalleBain\" data-champs=\"Nombre de salle de bain\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <div class=\"form-group\">
                                                    <label>Nombre de salon :</label>
                                                    <input name=\"nbreSalon\" id=\"nbreSalon\" data-champs=\"Nombre de salon\" type=\"text\" class=\"form-control\" placeholder=\"1\">
                                                </div>
                                            </div>
                                        </div>
                                        <!--
                                        <div class=\"col-sm-12 padding-bottom-15\">
                                            <div class=\"form-group\">
                                                <input type=\"range\" list=\"tickmarks\">
                                                <datalist id=\"tickmarks\">
                                                <option value=\"0\">
                                                <option value=\"10\">
                                                <option value=\"20\">
                                                <option value=\"30\">
                                                <option value=\"40\">
                                                <option value=\"50\">
                                                <option value=\"60\">
                                                <option value=\"70\">
                                                <option value=\"80\">
                                                <option value=\"90\">
                                                <option value=\"100\">
                                                </datalist>
                                                </div>
                                        </div>
                                        -->
                                        <div class=\"col-sm-12 padding-bottom-15\">
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"balcon\" id=\"balcon\" data-champs=\"balcon\" type=\"checkbox\"> Balcon
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"terasse\" id=\"terasse\" data-champs=\"terasse\" type=\"checkbox\"> Térasse
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"parking\" id=\"parking\" data-champs=\"parking\" type=\"checkbox\"> Parking
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-3\">
                                                <div class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label>
                                                            <input name=\"meuble\" id=\"meuble\" data-champs=\"meuble\" type=\"checkbox\"> Meublé
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <!-- End step 2 -->

                                <div class=\"tab-pane\" id=\"step3\">
                                    <h4 class=\"info-text\">Donnez nous quelqques images et videos ? </h4>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"property-images\">Choisir Images :</label>
                                                <input class=\"form-control\" type=\"file\" id=\"property-images\" multiple>
                                                <p class=\"help-block\">Choisir plusieurs images de votre bien .</p>
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group\">
                                                <label for=\"property-video\">Video du bien :</label>
                                                <input class=\"form-control\" value=\"\" placeholder=\"http://www.youtube.com, http://vimeo.com\" name=\"property_video\" type=\"text\">
                                            </div>

                                            <div class=\"form-group\">
                                                <input class=\"form-control\" value=\"\" placeholder=\"http://www.youtube.com, http://vimeo.com\" name=\"property_video\" type=\"text\">
                                            </div>

                                            <div class=\"form-group\">
                                                <input class=\"form-control\" value=\"\" placeholder=\"http://www.youtube.com, http://vimeo.com\" name=\"property_video\" type=\"text\">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End step 3 -->


                                <div class=\"tab-pane\" id=\"step4\">
                                    <h4 class=\"info-text\"> Finission et soumission </h4>
                                    <div class=\"row\">
                                        <div class=\"col-sm-12\">
                                            <div class=\"\">
                                                <p>
                                                    <label><strong>Termes et Conditions :</strong></label> pour acceder ou utiliser SOULTANA services, such as posting your property advertisement with your personal information on our website you agree to
                                                    the collection, use and disclosure of your personal information in the legal proper manner
                                                </p>
                                                <div class=\"checkbox\">
                                                    <label>
                                                        <input name=\"approuver\" id=\"approuver\" type=\"checkbox\" /> <strong>J' accepte les termes et conditions.</strong>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  End step 4 -->

                            </div>

                            <div class=\"wizard-footer\">
                                <div class=\"pull-right\">
                                    <input type='button' class='btn btn-next btn-primary' name='next' value='Suivant' />
                                    <input type='submit' class='btn btn-finish btn-primary ' name='finish' value='Soumettre' />
                                </div>

                                <div class=\"pull-left\">
                                    <input type='button' class='btn btn-previous btn-default' name='previous' value='Précédent' />
                                </div>
                                <div class=\"clearfix\"></div>
                            </div>
                        </form>
                    </div>
                    <!-- End submit form -->
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "SoultanaBundle:Proprietaire:soumettre.bien.html.twig", "/var/www/html/soultana.sn/src/SNT/SoultanaBundle/Resources/views/Proprietaire/soumettre.bien.html.twig");
    }
}
