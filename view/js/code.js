var posicion = 0;
var imagenes = new Array();
$(document).ready(function () {
    //alert(jQuery('.texto').html());
    var numeroImatges = $("#actorscount").val();
    if (numeroImatges <= 3) {
        $('.derecha_flecha').css('display', 'none');
        $('.izquierda_flecha').css('display', 'none');
    }

    $('.izquierda_flecha').on('click', function () {
        if (posicion > 0) {
            posicion = posicion - 1;
        } else {
            posicion = numeroImatges - 1;
        }
        $(".carrusel").animate({"left": -($('#actor_' + posicion).position().left)}, 600);
        return false;
    });

    $('.izquierda_flecha').hover(function () {
        $(this).css('opacity', '0.5');
    }, function () {
        $(this).css('opacity', '1');
    });

    $('.derecha_flecha').hover(function () {
        $(this).css('opacity', '0.5');
    }, function () {
        $(this).css('opacity', '1');
    });

    $('.derecha_flecha').on('click', function () {
        if (numeroImatges > posicion + 1) {
            posicion = posicion + 1;
        } else {
            posicion = 0;
        }
        $(".carrusel").animate({left: -($('#actor_' + posicion).position().left)}, 600);
        return false;
    });

});