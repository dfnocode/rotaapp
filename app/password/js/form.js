
$(document).ready(function() {

    $("#password_").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../config/functions/update_password.php",
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
                            location.href = "../login"

                        }
                    })
                    
                }else if (strMessage == 'nConfere') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'As senhas digitadas não conferem.',

                    });
                } 
            }
        });

    });
});