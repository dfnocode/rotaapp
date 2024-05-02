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


$(document).ready(function() {

    $("#update_fatura_empresa").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updateEmpresaFatura.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                            title: '',
                            text: "Nome da Empresa atualizado com sucesso!",
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



$(document).ready(function() {

    $("#update_rodape_fatura").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updateRodapeFatura.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                            title: '',
                            text: "Rodapé da Fatura atualizada com sucesso!",
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





$(document).ready(function() {

    $("#update_config_email_padrao").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updateConfigEmailPadrao.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                            title: '',
                            text: "Configurações SMTP Padrão atualizadas com sucesso!",
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