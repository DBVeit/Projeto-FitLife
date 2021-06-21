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
                  alert("Desafio aceito! Realize a atividade em até 24h");
              }
           }
       });
    });
});