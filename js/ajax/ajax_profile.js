$(document).ready(function (){
    $("#aPerfilUser").click(function (){
       $.ajax({
          type: "GET",
          url: "php/functions/users/fn_profile.php",
          dataType: "html",
          success: function (response){
              $("#infosPerfil").html(response);
          }
       });
    });
});