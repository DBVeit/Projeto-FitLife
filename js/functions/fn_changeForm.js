$(document).ready(function (){
    $("#aCriarConta").click(function (){
       $("#divLogin").fadeOut(1000).attr("hidden", true);
       $("#divCadastro").fadeIn(2000).removeAttr("hidden");
       $("#textLogin").fadeOut(1000).attr("hidden", true);
       $("#textCadastro").fadeIn(2000).removeAttr("hidden");
    });
    $("#aRecuperaSenha").click(function (){
        $("#divLogin").fadeOut(1000).attr("hidden", true);
        $("#divRecuperarSenha").fadeIn(2000).removeAttr("hidden");
        $("#textLogin").fadeOut(1000).attr("hidden", true);
        $("#textRecuperaSenha").fadeIn(2000).removeAttr("hidden");
    });
    $(".aLogin").click(function (){
        $("#divCadastro").fadeOut(1000).attr("hidden", true);
        $("#divRecuperarSenha").fadeOut(1000).attr("hidden", true);
        $("#textCadastro").fadeOut(1000).attr("hidden", true);
        $("#textRecuperaSenha").fadeOut(1000).attr("hidden", true);
        $("#divLogin").fadeIn(2000).removeAttr("hidden");
        $("#textLogin").fadeIn(2000).removeAttr("hidden");
    });
});
