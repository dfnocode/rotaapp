$(document).ready(function() {

    $("#empreendimento").submit(function(e) {
        var dados = new FormData(this);
        $.ajax({
            url: "../../config/functions/insertEmpreendimento.php",
            method: "post",
            data: dados,
            mimeType: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire(
                        'Registro atualizado com Sucesso!',
                        'Clique para retornar',
                        'success'
                    )
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: strMessage,

                    });

                }
            }
        });

    });
});