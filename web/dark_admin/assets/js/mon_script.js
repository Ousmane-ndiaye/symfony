$(document).ready(function() {
    function clickSurSave() {
        $("a.save-row").each(function() {
            $(this).on("click", function() {
                let leInput;
                let l_Id;
                if ($(this).data("idtr")) {
                    leInput = $("#" + $(this).data("idtr") + " td form input[type='text']");
                    l_Id = $(this).data("idtr").replace("tr_numero_", "");
                } else {
                    leInput = $("#for-saving");
                    l_Id = null;
                }
                if (leInput.val() == "" || !leInput.val().match(/^[a-zA-Z0-9 áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ._\s-]+$/i) || leInput.val().trim() == "") {
                    leInput.addClass("border-red");
                    return false;
                } else {
                    gererLesInputs(leInput, l_Id);
                    return false;
                }
            });
        });
    }

    function clickSurCancel() {
        $("a.cancel-row").each(function() {
            $(this).on("click", function() {
                if ($(this).data("idtr")) {
                    var exVal = $("#" + $(this).data("idtr") + " td form input[type='text']").data("exval");
                    $("#" + $(this).data("idtr") + " td.form-edit").text(exVal);
                    $("#" + $(this).data("idtr") + " td a.on-editing").each(function() {
                        $(this).addClass("hidden");
                    });
                    $("#" + $(this).data("idtr") + " td a.on-default").each(function() {
                        $(this).removeClass("hidden");
                    });
                    return false;
                } else {
                    $("#for-saving").val("");
                    $("#for-saving").removeClass("border-red");
                    $("#formAjout").addClass("hidden");
                    $("#button-ajouter").removeClass("disabled");
                    return false;
                }
                return false;
            });
        });
    }

    function clickSurEdit() {
        $("a.edit-row").each(function() {
            $(this).on("click", function() {
                $("#" + $(this).data("idtr") + " td.form-edit").attr('id', 'form-ici');
                let valueTd = $("#form-ici").text();
                let l_Id = $("#form-ici").data("id");
                $("#form-ici").text("");
                $("#" + $(this).data("idtr") + " td.form-edit").append('<form method="post" action="#"> <input style="width: 100%;" type="text" name="for-editing" id="for-editing" data-exval="' + valueTd + '" data-champs="nomville" value="' + valueTd + '" /></form>');
                $("#" + $(this).data("idtr") + " td.form-edit").removeAttr('id');
                $("#" + $(this).data("idtr") + " td a.on-editing").each(function() {
                    $(this).removeClass("hidden");
                });
                $("#" + $(this).data("idtr") + " td a.on-default").each(function() {
                    $(this).addClass("hidden");
                });
                return false;
            });
        });
    }

    function clickSurRemove() {
        $("a.remove-row").each(function() {
            $(this).on("click", function() {
                $("#" + $(this).data("idtr")).remove();
                return false;
            });
        });
    }


    function gererLesInputs(leInput, l_Id) {
        let chemin = "";
        let param = "";
        switch (leInput.data("champs")) {
            case "nomville":
                chemin = "ville";
                param = "nomVille=" + leInput.val();
                if (l_Id == null) {
                    param += "&action=add_ville";
                } else {
                    param += "&idVille=" + l_Id + "&action=edit_ville";
                }
                break;
        }

        $.ajax({
            type: "GET",
            url: "requete_ajax",
            dataType: "text",
            data: param,
            success: function(reponse) {
                if (reponse == "success") {
                    $("#charge_page").load("bien/" + chemin, function() {
                        $(".sous-liens-bien").each(function() {
                            $(this).on("click", function() {
                                $("#charge_page").load("bien/" + $(this).attr("href").replace("/soultana.sn/web/app_dev.php/soultana/admin/bien/", ""), function() {

                                    $("#button-ajouter").on("click", function() {
                                        $("#formAjout").removeClass("hidden");
                                        $(this).addClass("disabled");
                                        clickSurSave();
                                        clickSurCancel();
                                    });

                                    clickSurEdit();
                                    clickSurRemove();
                                    clickSurSave();
                                    clickSurCancel();
                                });
                                return false;
                            })
                        });
                    });
                } else if (reponse == "exist") {
                    leInput.addClass("border-red");
                }
            },
            error: function() {
                console.log('------------------------------------');
                console.log("requête non executé !");
                console.log('------------------------------------');
            }
        });
    }

    function gererBien() {
        $(".sous-liens-bien").each(function() {
            $(this).on("click", function() {

                $("#charge_page").load("bien/" + $(this).attr("href").replace("/soultana.sn/web/app_dev.php/soultana/admin/bien/", ""), function() {
                    $("#button-ajouter").on("click", function() {
                        $("#formAjout").removeClass("hidden");
                        $(this).addClass("disabled");
                        clickSurSave();
                        clickSurCancel();
                    });

                    clickSurEdit();
                    clickSurRemove();
                    clickSurSave();
                    clickSurCancel();
                });
                return false;
            })
        });
    }

    gererBien();
});