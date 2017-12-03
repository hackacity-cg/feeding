$(document).ready(function () {

    var loadDatetimePicker = function () {
        $('.timepicker').each(function () {
            $(this).datetimepicker({
                locale: 'pt-br',
                format: 'LT'
            });
        });
    };

    $(loadDatetimePicker);


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