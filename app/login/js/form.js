$(document).ready(function() {

    $("#loginForm").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../config/functions/acesso.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    window.location.href = '../view/inicio/';
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível autenticar o usuário!',

                    });

                }
            }
        });

    });
});




$(document).ready(function() {

    $("#password_").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../config/functions/solicita_senha.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Recebemos a solicitação, verifique sua conta de e-mail!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })
                    $('#modalPassword').modal('toggle');
                } else if (strMessage == 'nExiste') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi encontrado nenhum usuário com este e-mail.',

                    });
                    $('#modalPassword').modal('toggle');
                } else if (strMessage == 'nEnviado') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'E-mail inválido, tente novamente.',

                    });
                    $('#modalPassword').modal('toggle');

                }
            }
        });

    });
});