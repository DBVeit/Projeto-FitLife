$("document").ready(function (){
   $("#bEntrar").click(function (){
       let data = $("#fLogin").serialize();

       $.ajax({
           type: 'POST',
           url: '../../php/functions/session/fn_login.php',
           data: data,
           dataType: 'json',
           success: function (response){
               if (response.codigo == '1'){
                   window.location.href = "../../home.php";
               }else{
                   $("#resultadoSubmit").html('<strong>'+response.msg);
               }
           }
       })
   })
});