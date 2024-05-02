$(document).ready(function() {

    $("#cadastro_cliente").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/insertCliente.php",
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
                    $('#add_cliente').modal('toggle');
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

$(document).ready(function() {

    $("#update_cliente").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updateCliente.php",
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
                    $('#add_cliente').modal('toggle');
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


$(document).ready(function() {

    $("#delete_").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/deleteCliente.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Registro Removido com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })
                    $('#delete').modal('toggle');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível remover o registro.',

                    });

                }
            }
        });

    });
});