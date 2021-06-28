$(document).ready(function (){
    $(document).on("click", "#aceitar_eflexoes", function (){
       $.ajax({
          url: "php/functions/desafios/lvl_easy/flexoes.php",
          type: "POST",
          cache: false,
          data:{
              id_desafio: $("#id_desafio").val(),
              usuarioEmail: $("#usuarioEmail").val(),
          },
           success: function(dataResult){
              let dt = JSON.parse(dataResult);
              if (dt.statusCode==200){
                  $("#statusEFlexoes").html("<i class=\'fas fa-check-circle\'></i> Desafio aceito!");
                  $("#aceitar_eflexoes").attr("disabled", true);
              }else if (dt.statusCode==202){
                  $("#statusEFlexoes").html("<i class=\'fas fa-check-circle\'></i> Desafio aceito!");
                  $("#aceitar_eflexoes").attr("disabled", true);
              }
           }
       });
    });
});