
$(document).ready(function(){
    ocultar_questions();
    $("#pre").on('click',function(){
        $('#exampleModal').modal('show');
        document.getElementById("exampleModal").style.paddingRight = "0";
    });
    $("#close").on('click',function(){
        $('#exampleModal').modal('hide');
        ocultar_questions();
        $("#body-options").show();
        $("#exampleModalLabel").html("Opciones de crédito");
    });
    $("#btn-multired").on("click",function(){
        $("#body-options").hide();
        $("#body-q1").show("slow");
        $("#exampleModalLabel").html("Prestamo Multired");
    });
    $("#btn-tarjeta").on("click",function(){
        $("#body-options").hide();
        $("#body-q2").show("slow");
        $("#exampleModalLabel").html("Obten una tarjeta de crédito");
    });
    $("#btn-hipotecario").on("click",function(){
        $("#body-options").hide();
        $("#body-q3").show("slow");
        $("#exampleModalLabel").html("Prestamo Hipotecario");
    });
    $(document).on("click",'.btn-reg',function(){
        ocultar_questions();
        $("#body-options").show();
        $("#exampleModalLabel").html("Opciones de crédito");
    });
});

function ocultar_questions(){
    $("#body-q1").hide();
    $("#body-q2").hide();
    $("#body-q3").hide();
}