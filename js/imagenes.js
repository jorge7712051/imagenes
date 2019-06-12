$(document).ready(function() {
    $("#subir").on('click', function() {
        var formData = new FormData();
        var files = $('#archivo')[0].files[0];
        formData.append('nombre', $("#nombrearchivo").val());
        formData.append('file',files);
        formData.append('accion','GuardarImagen');
        $.ajax({
            url: 'controllers/imagenes.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(data) {
                $("#frma")[0].reset();
                alert(data.respuesta);
            }
        });
        return false;
    });
});