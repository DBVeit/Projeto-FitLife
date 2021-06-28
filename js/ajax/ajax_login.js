$(document).ready(function (){
   $("#bEntrar").click(function (){
       let dados = $("#formLogin").serialize();

       $.ajax({
           type: 'POST',
           url: 'php/functions/session/fn_login.php',
           data: dados,
           dataType: 'json',
           success: function (response){
               if (response.codigo == "1"){
                   window.location.href = "home.php";
               }
           }
       });
   });
});