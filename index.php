<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Fit-Life</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
        <link rel="stylesheet" href="css/main_css.css"/>
    </head>
    <body style="background-image: url('img/wpp.jpg');">
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1" style="float: none; margin-left: 50%;">Fit <a style="vertical-align: middle;">.</a> Life</span>
    </nav>
    <br>
    <div class="container">
        <div class="mainDiv">
            <div class="textoDiv">
                Descubra um novo meio de vida saudável,<br>
                direto de sua casa
            </div><!--Texto-->

            <div class="divisoriaDiv"></div><!--Divisao-->

            <div class="divFormulario" id="divFormulario"><!--Formulario-->
                <?php
                include_once ("html/components/cp_login.html");
                include_once ("html/components/cp_cadastro.html");
                ?>

            </div>
        </div>
    </div>
    </body>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/functions/fn_changeForm.js"></script>
</html>