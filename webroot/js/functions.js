$(document).ready(function () {

    moment.locale('pt-BR');
    $('.timepicker').each(function () {
        $(this).datetimepicker({
            locale: 'pt-br',
            format: 'LT'
        });
    });
    $('.datetimepicker').each(function () {
        $(this).datetimepicker({
            locale: 'pt-br',
            sideBySide: true,
            extraFormats: ['YYYY-MM-DD HH:mm:ss', 'YYYY-MM-DD'],
            showTodayButton: true,
            useStrict: true,
            showClear: true,
            allowInputToggle: true,
            widgetPositioning: {
                horizontal: 'auto',
                vertical: 'bottom'
            }
        });
    });


    $('.btnReservar').click(function () {

        var box = $(this).closest('.box-title');

        console.log(box)

        $.ajax({
            type: 'POST',
            url: site_path + '/Index/saveHoraRetirada/'+ box.find('.input-hora-retirada').val(),
            dataType: 'JSON',
            beforeSend: function () {
                //LoadGif()
            },
            success: function (txt) {
                console.log(txt)
            },
            complete: function () {
                //CloseGif();
            },
            error: function () {
                //toastr.error(msgErrorAjax);
            }
        })


    });



});