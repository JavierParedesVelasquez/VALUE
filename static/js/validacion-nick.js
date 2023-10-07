$(document).ready(function(){
    $('#nick').on('input', function(){
        var nick = $(this).val();
        $('#nickAlerta').hide();

        $.ajax({
            url: 'login/validacion-nick.php',
            type: 'POST',
            data: {nick: nick},
            dataType: 'json',
            success: function(respuesta){
                if (respuesta.existe) {
                    $('#nickAlerta').show().text('El nick ya existe.');
                    $('#nick').val('');
                }
            }
        });
    });
});