$(document).ready(function() {

    $("#cadastroFTP").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/insertConexao_ftp.php",
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
                } else if (strMessage == 'existe') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Já existe uma conexão cadastrada!',

                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível inserir o registro.',

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
            url: "../../config/functions/delete_conexaoFTP.php",
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
                    $('#modalDelete').modal('toggle');
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível excluir o registro',

                    });

                }
            }
        });

    });
});