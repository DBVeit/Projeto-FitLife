$(document).ready(function (){
    $("#aPerfilUser").click(function (){
        $.ajax({
            type: "GET",
            url: "php/functions/users/fn_dadosUsuario.php",
            dataType: "html",
            success: function (response){
                $("#dadosUsuario").html(response);
            }
        });
    });
});