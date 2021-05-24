$(document).ready(function (){
    $("#aCriarConta").click(function (){
       $("#formLogin").attr("hidden", "hidden");
       $("#formCadastro").removeAttr("hidden");
    });
});