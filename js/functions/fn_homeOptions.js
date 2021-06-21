$(document).ready(function (){
    $("#eFlexoes").load("html/components/cp_descriptions/cp_description_eflexoes.html");
    $("#aDesafios").click(function (){
        $("#menuOptions").fadeOut(1000).attr("hidden", true);
        $("#divDesafios").fadeIn(2000).removeAttr("hidden");
    });
    $("#aLoja").click(function (){
        $("#menuOptions").fadeOut(1000).attr("hidden", true);
        $("#divLoja").fadeIn(2000).removeAttr("hidden");
    });
    $("#aPerfilUser").click(function (){
        $("#menuOptions").fadeOut(1000).attr("hidden", true);
        $("#divPerfil").fadeIn(2000).removeAttr("hidden");
    });
    $("#bEasy").click(function (){
        $("#tEasy").removeAttr("hidden");
        $("#tMedium").attr("hidden", true);
        $("#tHard").attr("hidden", true);
    });
    $("#bMedium").click(function (){
        $("#tEasy").attr("hidden", true);
        $("#tMedium").removeAttr("hidden");
        $("#tHard").attr("hidden", true);
    });
    $("#bHard").click(function (){
        $("#tEasy").attr("hidden", true);
        $("#tMedium").attr("hidden", true);
        $("#tHard").removeAttr("hidden");
    });
    $("#bVoltarDesafios").click(function (){
        $("#divDesafios").fadeOut(1000).attr("hidden", true);
        $("#menuOptions").fadeIn(2000).removeAttr("hidden");
    });
    $(".buttonVoltarLoja").click(function (){
       $("#divLoja").fadeOut(1000).attr("hidden", true);
       $("#menuOptions").fadeIn(2000).removeAttr("hidden");
    });
});