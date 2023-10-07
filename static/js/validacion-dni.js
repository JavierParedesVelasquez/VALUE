$(document).ready(function(){
    $('#dni').on('input', function(){
        var dni = $(this).val();
        $('#dniAlerta').hide();

        $.ajax({
            url: 'login/validacion-dni.php',
            type: 'POST',
            data: {dni: dni},
            dataType: 'json',
            success: function(respuesta){
                if (respuesta.existe) {
                    $('#dniAlerta').show().text('El dni ya está registrado. Por favor, utiliza otro.');
                    $('#dni').val('');
                }
            }
        });
    });
});