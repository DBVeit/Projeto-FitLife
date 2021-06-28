$(document).ready(function (){
   $('#bCadastrar').click(function (){
      let dadosForm = $('#formCadastro').serialize();

      $.ajax({
         type: 'POST',
         dataType: 'json',
         url: 'php/functions/users/fn_create_user.php',
         async: true,
         data: dadosForm,
         success: function (response){
             location.reload();
         }
      });
      return false;
   });
});