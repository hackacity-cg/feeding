$(document).ready(function () {

    $('.box-comidas').find('.btnReservar').click(function () {

        $(this).hide();

        $('.hora-retirada').fadeOut(function () {
            $(this).removeAttr('type');
        });

    });



});