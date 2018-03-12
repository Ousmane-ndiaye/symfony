$(document).ready(function() {
    $(".sous-liens-bien").each(function() {
        $(this).on("click", function() {
            $("#charge_page").load("bien/" + $(this).attr("href").replace("/soultana.sn/web/app_dev.php/soultana/admin/bien/", ""), function() {

                function clickSurSave() {
                    $("a.save-row").each(function() {
                        $(this).on("click", function() {
                            var leInput;
                            if ($(this).data("idtr")) {
                                leInput = $("#" + $(this).data("idtr") + " td form input[type='text']");
                            } else {
                                leInput = $("#for-saving");
                            }
                            if (leInput.val() == "" || !leInput.val().match(/^[a-zA-Z0-9 ]+$/i) || leInput.val().trim() == "") {
                                leInput.addClass("border-red");
                                return false;
                            } else {
                                leInput.removeClass("border-red");
                                /* switch ($("#for-saving").data("champs")) {
                                    case 'nomville':
                                        alert("nomville");
                                        $.ajax({
                                            type: "POST",
                                            url: "requete_ajax",
                                            dataType: "text",
                                            data: param,
                                            success: function(reponse) {
                                                console.log('------------------------------------');
                                                console.log(reponse);
                                                console.log('------------------------------------');
                                            },
                                            error: function() {
                                                console.log('------------------------------------');
                                                console.log("requête non executé !");
                                                console.log('------------------------------------');
                                            }
                                        });
                                        break;
                                    case 'expression':
                                        break;
                                    default:
                                } */
                                $("#for-saving").val("");
                                $("#formAjout").addClass("hidden");
                                $("#button-ajouter").removeClass("disabled");
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
                            $("#form-ici").text("");
                            console.log('------------------------------------');
                            console.log(valueTd);
                            console.log('------------------------------------');
                            $("#" + $(this).data("idtr") + " td.form-edit").append('<form method="post" action="#"> <input style="width: 100%;" type="text" name="for-editing" id="for-editing" data-exval="' + valueTd + '" data-champs="editnomville" value="' + valueTd + '" /></form>');
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