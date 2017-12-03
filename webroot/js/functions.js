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
            url: site_path + '/Index/saveHoraRetirada/' + box.find('.input-hora-retirada').val(),
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

    $('#perfil_usuario').change(function () {
        if ($(this).val() == 'doador') {
            $('.form_voluntario').hide();
            $('.form_usuario').show();
            $('.form_doador').show();
        } else if ($(this).val() == 'voluntario') {
            $('.form_doador').hide();
            $('.form_usuario').show();
            $('.form_voluntario').show();
        } else {
            $('.form_doador').hide();
            $('.form_voluntario').hide();
            $('.form_usuario').hide();
        }
    });

    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});


});