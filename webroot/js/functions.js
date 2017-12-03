$(document).ready(function () {

    // Msg de sucesso
    var toast_msg = function (msg, color) {
        $.toast({
            text : msg,
            bgColor : color,              // Background color for toast
            textColor : '#fff',            // text color
            allowToastClose : false,       // Show the close button or not
            textAlign : 'left',            // Alignment of text i.e. left, right, center
            position : 'top-right'       // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values to position the toast on page
        });
    };

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

        var box = $(this).closest('.box-feeding');
        var hora = box.find('.input-hora-retirada').val();
        if(hora == ""){
            toast_msg('Informe um horário para reservar o alimento!', '#f39c12');
            return false;
        }

        $.ajax({
            type: 'POST',
            url: site_path + '/Index/saveHoraRetirada/',
            dataType: 'JSON',
            data: {
                hora: hora,
                doacao_id: box.find('.doacao-id').val()
            },
            success: function (txt) {
                if(txt.erro === 0){
                    box.parent().fadeOut('slow');
                    toast_msg(txt.msg, '#00a65a ');
                }
            },
            error: function () {
                toast_msg('Ops, Ocorreu um problema inesperado, por favor tente mais tarde!', '#dd4b39');
            }
        })


    });

    $('#perfil_usuario').change(function () {
        if ($(this).val() == 'doador') {
            $('.form_usuario').removeClass('hidden');
            $('.form_doador').removeClass('hidden');
            $('.form_voluntario').addClass('hidden');
        }
        if ($(this).val() == 'voluntario') {
            $('.form_usuario').removeClass('hidden');
            $('.form_doador').addClass('hidden');
            $('.form_voluntario').removeClass('hidden');
        }

        if($(this).val() == '') {
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

    $('#entregue_btn').click(function (event) {
        event.preventDefault();
        $doacao_id = $('#doacao_id').val();

        $.ajax({
            type: 'POST',
            url: site_path + '/Doacao/realizarEntrega/' + $doacao_id,
            dataType: 'JSON',
            beforeSend: function () {
                //LoadGif()
            },
            success: function (txt) {
                location.reload();
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
