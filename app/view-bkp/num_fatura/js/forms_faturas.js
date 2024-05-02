$(document).ready(function() {

    $("#update_num_fatura").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updateNumfatura.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                            title: '',
                            text: "Registro atualizado com sucesso!",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();

                            }
                        })
                        //$('#add_num_fatura').modal('toggle');
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