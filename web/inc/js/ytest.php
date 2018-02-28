<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
        <img id="target" src="2.jpg">
        <br /><br /><br /><br /><br /><br /><br />
        <form>
            Laissez aller votre imagination : saisissez quelques mots<br />
            <textarea id="saisie"></textarea>
        </form><br />
        Caractère saisi : <span id="unelettre"></span>
        <br /><br /><br /><br /><br /><br /><br />
        <form>
            Cliquez sur les zones de texte<p>
            <input type="text" class="f" id="Zone-de-texte-1"><p>
            <input type="text" class="f" id="Zone-de-texte-2"><br />
        </form><br />
        Focus : <span id="resultat"></span><br />
        Perte de focus : <span id="resultat2"></span>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script>
            $(function() {
                // Dimensions de la fenêtre
                var largeur = ($(window).width()) - 50;
                var hauteur = ($(window).height()) - 50;
                // Affichage de la première image en (100, 100)
                var p = $('#target').offset();
                p.top=100;
                p.left=100;
                $('#target').offset(p);
                // Gestion du clic et déplacement de l'image
                $("#target").click(function() {
                    x = Math.floor(Math.random()*largeur);
                    y = Math.floor(Math.random()*hauteur);
                    var p = $('#target').offset();
                    p.top = y;
                    p.left = x;
                    $('#target').offset(p);
                });

                $('#saisie').keydown(function(e) {
                    //$('#unelettre').text(e.which); //keyCode
                    var c = String.fromCharCode(e.which);
                    $('#unelettre').text(c);
                    if(c == "A")
                    {
                        alert("Ahhhhhh !");
                        e.which = "";
                    }
                });

                $('.f').focus(function() {
                    $('#resultat').text($(this).attr('id'));
                });
                $('.f').blur(function() {
                    $('#resultat2').text($(this).attr('id'));
                });
            });
        </script>
    </body>
</html>