$(function() {
    var tabUser = [];
    $("#connecter").click(function() {
        //$("#afficher").load('accueil.php');
        var nom = "ousmane";
        $.ajax({
            type: 'POST', // Le type de la requête HTTP, ici devenu POST
            url: 'test.php', // Le nom du script a changé, c'est send_mail.php maintenant !
            data: 'monNom=' + nom
        });
        $("#afficher").load('test.php');
        return false;
    });

    $('#verif').hide();
    /*$('#connecter').click(function() {
        valid = true;
        if (($('#psdoC').val() == "") && ($('#pswdC').val() == "")) {
            $('#verif strong').text('Veuillez remplir votre login et votre mot de passe');
            $('#verif').show();
            valid = false;
        } else if (($('#psdoC').val() != "") && ($('#pswdC').val() == "")) {
            $('#verif strong').text('Veuillez remplir votre mot de passe');
            $('#verif').show();
            valid = false;
        } else if (($('#psdoC').val() == "") && ($('#pswdC').val() != "")) {
            $('#verif strong').text('Veuillez remplir votre login');
            $('#verif').show();
            valid = false;
        } else {
            $('#verif').hide();
            valid = true;
        }
        return valid;
    })*/
    $('#recup, #inscrip').hide();
    $('.nouveau').on('click', function() {
        $('#inscrip').show();
        $('#recup, #connect').hide();
    });
    $('.oublie').on('click', function() {
        $('#recup').show();
        $('#inscrip, #connect').hide();
    });
    $('.revenu').on('click', function() {
        $('#connect').show();
        $('#inscrip, #recup').hide();
    });

    function champObl(champs) {
        if (champs.val() == "" || champs.val().length < 5) {
            return "Veuillez remplir le champ " + champs.attr('data-champ');
        } else if (champs.attr('data-champ') == "login" && !champs.val().match(/^[a-zA-Z0-9]+$/i)) {
            return "Veillez rentrer un login valide";
        } else {
            return "";
        }
    }
    /*
        function Inscription(nom, prenom, login, pwd) {

            var membre = {

                init: function(nom, prenom, login, pass) {

                    this.nom = nom;

                    this.prenom = prenom;

                    this.login = login;

                    this.pass = pass;

                },

            };
            var user = Object.create(membre);

            user.init(nom, prenom, login, pwd)

            tabuser.push(user)
            console.log(tabuser)
        }
    */

    function inscription(nm, prn, lg, psd) {
        var client = {
            nom: nm,
            prenom: prn,
            login: lg,
            password: psd
        };
        tabUser.push(client);
    }

    /*$("form").each(function() {

        var idAlert = $(this).children("div.Verifact0").attr("id");

        var idform = $(this).attr("id");

        $(this).children("input[type='submit']").each(function() {

            $(this).click(function() {

                $('#' + idAlert + ' ul').children("li").remove();

                valid = true;
                verif = false;
                c = 0;
                var nom = "",
                    prenom = "",
                    login = "",
                    password = "";

                $(this).prevAll().each(function() {

                    if ($(this).attr("type") == "text" || $(this).attr("type") == "password") {

                        if (champObl($(this)) == "") {
                            valid = true;
                            if ($(this).attr("data-champ") == "nom") {
                                nom = $(this).val();
                            } else if ($(this).attr("data-champ") == "prenom") {
                                prenom = $(this).val();
                            } else if ($(this).attr("data-champ") == "login") {
                                login = $(this).val();
                            } else if ($(this).attr("data-champ") == "password") {
                                password = $(this).val();
                            }
                            c++;
                        } else {
                            li = "<li>" + champObl($(this)) + "</li>";
                            $('#' + idAlert + ' ul').append(li);
                            valid = false;
                        }

                        if (c == 4) {
                            inscription(nom, prenom, login, password);
                            console.log(tabUser);
                        } else if (c == 2 && idform == "formConnect") {
                            console.log("connectééééé");
                            verif = true;
                        }
                    }
                });

                if (verif) {
                    $("#afficher").load("accueil.php");
                }

                return false;

            });
        });
    });*/

    /*$("form").each(function() {

        var idAlert = $(this).children("div.Verifact0").attr("id");

        $(this).children("input[type='submit']").each(function() {

            $(this).click(function() {

                valid = true;

                $(this).prevAll().each(function() {

                    if ($(this).attr("type") == "text" || $(this).attr("type") == "password") {

                        if (champObl($(this)) == "") {
                            valid = true;
                        } else {
                            li = "<li>" + champObl($(this)) + "</li>";
                            $('#' + idAlert + ' ul').append(li);
                            valid = false;
                        }

                    }
                });

                return valid;

            });
        });
    });*/


});