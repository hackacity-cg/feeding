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
            toast_msg('Informe um horário para retirar o alimento!', '#f39c12');
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



});