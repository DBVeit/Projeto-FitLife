$(document).ready(function() {
    $("#tNewEmail").keyup(function (){
       let tNewEmail = $(this).val();
       if (tNewEmail == ""){
           $("#resultadoSubmit").hide();
           $("#bCadastrar").prop("disabled", true);
       }else {
           $("#resultadoSubmit").show();
           $.ajax({
               url: "php/functions/users/fn_verify_user.php",
               method: "POST",
               data: {email: tNewEmail},
               success: function (verificaUsuario) {
                   if (verificaUsuario != '0') {
                       $("#divSucesso").hide();
                       $("#divErro").show().html("<p><i class='fas fa-exclamation-circle'></i> Usuário já cadastrado!</p>");
                       $("#bCadastrar").prop("disabled", true);
                   } else {
                       $("#divErro").hide();
                       $("#divSucesso").show().html("<p><i class='fas fa-check-circle'></i> Usuário disponível!</p>");
                       $("#bCadastrar").prop("disabled", false);
                   }
               }
           })
       }
    });
    $("#tNewSenha").keyup(function (){
       if ($("#tNewSenha").val() == "" || $("#tConfSenha").val() == ""){
           $("#bCadastrar").prop("disabled", true);
       }else if ($("#tNewSenha").val().length < 6){
           $("#divSucesso").hide();
           $("#divErro").show().html("<p><i class='fas fa-exclamation-circle'></i> Senha deve conter no mínimo 6 caracteres!</p>")
           $("#bCadastrar").prop("disabled", true);
       }else if ($("#tNewSenha").val() == $("#tConfSenha").val()){
           $("#divErro").hide();
           $("#divSucesso").hide();
           $("#bCadastrar").prop("disabled", false);
       }else{
           $("#divSucesso").hide();
           $("#divErro").show().html("<p><i class='fas fa-exclamation-circle'></i> Senhas não conferem!</p>");
           $("#bCadastrar").prop("disabled", true);
       }
    });
    $("#tConfSenha").keyup(function (){
        if ($("#tNewSenha").val() == "" || $("#tConfSenha").val() == ""){
            $("#bCadastrar").prop("disabled", true);
        }else if ($("#tConfSenha").val().length < 6){
            $("#divSucesso").hide();
            $("#divErro").show().html("<p><i class='fas fa-exclamation-circle'></i> Senha deve conter no mínimo 6 caracteres!</p>")
            $("#bCadastrar").prop("disabled", true);
        }else if ($("#tNewSenha").val() == $("#tConfSenha").val()){
            $("#divErro").hide();
            $("#divSucesso").hide();
            $("#bCadastrar").prop("disabled", false);
        }else{
            $("#divSucesso").hide();
            $("#divErro").show().html("<p><i class='fas fa-exclamation-circle'></i> Senhas não conferem!</p>");
            $("#bCadastrar").prop("disabled", true);
        }
    });
});