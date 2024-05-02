$(document).ready(function() {

    $("#cadastroPessoa").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/insertPessoa.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire(
                        'Registro Inserido com Sucesso!',
                        'Clique para retornar',
                        'success'
                    )
                    $('#myModal').modal('toggle');
                } else if (strMessage == 'cpf') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Já existe um usuário com este cpf.',

                    });
                } else if (strMessage == 'email') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Já existe um usuário com este email.',

                    });
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
    /// Quando usuário clicar em salvar será feito todos os passo abaixo
    $('#salvar').click(function() {

        var dados = $('#pesquisaPessoa').serialize();

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: '',
            async: true,
            data: dados,
            success: function(response) {
                location.reload();
            }
        });

        return false;
    });

});


$(document).ready(function() {

    $("#atualizaPessoa").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updatePessoa.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire(
                        'Registro atualizado com Sucesso!',
                        'Clique para retornar',
                        'success'
                    )
                    $('#updateClientes').modal('toggle');
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