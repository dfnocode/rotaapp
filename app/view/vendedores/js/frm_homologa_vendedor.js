$(document).ready(function() {

    $("#update_vendedor").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "scripts/homologa_vendedor.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                            title: '',
                            text: "Vendedor Homologado com Sucesso",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();

                            }
                        })
                        //$('#edit_vendedor').modal('toggle');
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