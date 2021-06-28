<?php
include_once ("php/functions/session/fn_logged.php");
include_once ("php/functions/database/conexao.php");
include_once ("php/functions/session/fn_user_logged.php");
include_once ("php/functions/desafios/fn_verificar_desafios.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Fit.Life</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
        <link rel="stylesheet" href="css/main_css.css"/>
        <!--<link rel="stylesheet" href="css/style.css"/>-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
    </head>
    <body class="homeBody" onload="relogio()">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1 navSpan" id="fitLife"></span><!--Texto Logo Navbar-->
        </nav>
        <br>
        <div class="container" style="margin-top: 30px;">
            <div style="float: right; color: white">
                <a title="Configurações"><i class="fas fa-cog"></i></a>
                <a style="color: white; margin-left: 10px;" href="php/functions/session/fn_logout.php">Sair</a>
            </div>
            <p id="welcomeText" style="color: white">Bem vindo, <?php echo $nome;?></p>
            <input type="hidden" value="<?php echo $emailLogado;?>" id="usuarioEmail"/>
            <div id="menu"></div>
            <div id="desafios"></div>
            <div id="menuLoja"></div>
            <div id="perfilUsuario"></div>
        </div>
    </body>
    <script type="text/javascript" src="jquery/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/components/cp_home.js"></script>
    <script type="text/javascript" src="js/components/cp_load_menu.js"></script>
    <script type="text/javascript" src="js/functions/fn_temporizador.js"></script>
    <script type="text/javascript" src="js/ajax/ajax_desafios.js"></script>
    <script type="text/javascript" src="js/ajax/ajax_profile.js"></script>
</html>