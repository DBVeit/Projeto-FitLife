$(document).ready(function (){
    $("#aCriarConta").click(function (){
       $("#formLogin").fadeOut();
       $("#formCadastro").fadeIn(3000).removeAttr("hidden");
    });
});
