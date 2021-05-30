$(document).ready(function (){
    $("#aCriarConta").click(function (){
       $("#formLogin").fadeOut(1000).attr("hidden", true);
       $("#formCadastro").fadeIn(2000).removeAttr("hidden");
       $("#textLogin").fadeOut(1000).attr("hidden", true);
       $("#textCadastro").fadeIn(2000).removeAttr("hidden");
    });
    $("#aRecuperaSenha").click(function (){
        $("#formLogin").fadeOut(1000).attr("hidden", true);
        $("#formRecuperarSenha").fadeIn(2000).removeAttr("hidden");
        $("#textLogin").fadeOut(1000).attr("hidden", true);
        $("#textRecuperaSenha").fadeIn(2000).removeAttr("hidden");
    });
    $(".aLogin").click(function (){
        $("#formCadastro").fadeOut(1000).attr("hidden", true);
        $("#formRecuperarSenha").fadeOut(1000).attr("hidden", true);
        $("#textCadastro").fadeOut(1000).attr("hidden", true);
        $("#textRecuperaSenha").fadeOut(1000).attr("hidden", true);
        $("#formLogin").fadeIn(2000).removeAttr("hidden");
        $("#textLogin").fadeIn(2000).removeAttr("hidden");
    });
});
