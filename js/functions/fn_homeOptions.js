$(document).ready(function (){
    $("#aDesafios").click(function (){
        $("#menuOptions").fadeOut(1000).attr("hidden", true);
        $("#divDesafios").fadeIn(2000).removeAttr("hidden");
    });
    $("#aLoja").click(function (){

    });
    $("#aPerfilUser").click(function (){

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
});