

$(document).ready(function() {

    $("#update_").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/agencia_corretor.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Registro inserido com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })
                    $('#modal_update').modal('toggle');
                } else if (strMessage == 'update') {
                    Swal.fire({
                        title: '',
                        text: "Registro atualizado com sucesso.",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })
                    $('#modal_update').modal('toggle');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível concluir a solicitação.',

                    });
                }


            }
        });

    });
});