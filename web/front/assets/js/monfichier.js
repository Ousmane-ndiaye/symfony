$(document).ready(function() {
    function champObl(champs) {
        if (champs.val() == "" || champs.val().length <= 2 || champs.val().trim().length <= 2) {
            return "Veuillez remplir le champ " + champs.data('champ');
        } else if (champs.data('champ') == "nom d'utilisateur" && !champs.val().match(/^[a-zA-Z0-9]+$/i)) {
            return "Veillez rentrer un nom d'utilisateur valide";
        } else {
            return "";
        }
    }

    $(".cacher").each(function() {
        $(this).hide();
    });

    console.log('------------------------------------');
    console.log($("#min-baths"));
    console.log('------------------------------------');

    $("#min-baths").on('click', function() {
        console.log('------------------------------------');
        console.log($(this).val());
        console.log('------------------------------------');
    })

    console.log('------------------------------------');
    console.log($("#tablebien"));
    console.log('------------------------------------');

    $('#tablebien').on("click", function(event) {
        event.preventDefault();
        return false;
    })

    $("form").each(function() {
        var formType = $(this).data("form");
        var idAlert = formType;
        $(this).on("submit", function() {
            $('#' + idAlert + ' ul').children("li").remove();
            valid = true;
            var donnees = $(this).serialize();
            c = 0;
            $(this).children("div").each(function() {
                $(this).children("input[type='text'], input[type='password'], input[type='number']").each(function() {
                    if (champObl($(this)) == "") {
                        c++;
                        $('#' + idAlert).hide();
                    } else {
                        li = "<li>" + champObl($(this)) + "</li>";
                        $('#' + idAlert).show();
                        $('#' + idAlert + ' ul').append(li);
                    }
                })
            });
            if (c == 7 && formType == "form_inscription") {
                valid = true;
            } else if (c == 2 && formType == "form_connexion") {
                valid = false;
                console.log('------------------------------------');
                console.log(donnees);
                console.log('------------------------------------');
                $.ajax({
                    type: "POST",
                    url: "{{ path('test_ajax') }}",
                    dataType: "json",
                    data: donnees,
                    success: function(reponse) {
                        console.log('------------------------------------');
                        console.log(reponse);
                        console.log('------------------------------------');
                    },
                    error: function() {
                        console.log("requête non executé !");
                    }
                })
            } else if (c == 2 && formType == "form_recuperation") {
                valid = true;
            } else if (c < 4 && formType == "form_recherche") {
                valid = true;
            } else {
                valid = false;
            }
            return valid;
        });
    })
});