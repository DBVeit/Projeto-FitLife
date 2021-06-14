$(document).ready(function (){

    let tNome = $("#tNome").val();
    let tNewEmail = $("#tNewEmail").val();
    let tNewSenha = $("#tNewSenha").val();
    let tConfSenha = $("#tConfSenha").val();

    $("#bCadastrar").click(function (){
        if (tNome.length===0 || tNewEmail.length===0 || tNewSenha.length===0 || tConfSenha.length===0){
            $("#resultadoSubmit").html("<p style='color: red; padding: 1px;'>Todos os campos devem ser preenchidos!</p>").fadeOut(5000);
        }else if (tNewSenha.length<6){
            $("#resultadoSubmit").html("<p style='color: red; padding: 1px;'>A senha deve conter 6 ou mais caracteres!</p>");
        }else if (tNewSenha !== tConfSenha){
            $("#resultadoSubmit").html("<p style='color: red; padding: 1px;'>As senhas não coicidem!</p>");
        }else {
            $.post('../../php/functions/users/fn_create_user.php',
                {tNome:tNome,tNewEmail:tNewEmail,tNewSenha:tNewSenha,tConfSenha:tConfSenha},function(data){
                    if (data==="emailExiste"){
                        $("resultadoSubmit").html("<p style='color: red; padding: 1px;'>O email preenchido já está sendo utilizado!</p>");
                    }
                    if (data==="emailCadastrado"){
                        $("resultadoSubmit").html("<p style='color: forestgreen; padding: 1px;'>Usuário cadastrado! Verificar o email para confirmar o cadastro</p>");
                    }
                }
            )
        }
    });
});