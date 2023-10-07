$(document).ready(function(){
    $('#correo').on('input', function(){
        var correo = $(this).val();
        $('#correoAlerta').hide();

        $.ajax({
            url: 'login/validacion-correo.php',
            type: 'POST',
            data: {correo: correo},
            dataType: 'json',
            success: function(respuesta){
                if (respuesta.existe) {
                    $('#correoAlerta').show().text('El correo electrónico ya está registrado. Por favor, utiliza otro.');
                    $('#correo').val('');
                }
            }
        });
    });
});