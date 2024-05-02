$(document).ready(function() {

    $("#form_dados").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/update_infoEmpreendimento.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Registro Atualizado com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível atualizar o registro.',

                    });

                }
            }
        });

    });
});

$(document).ready(function() {

    $("#form_informacoes").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/update_textoEmpreendimento.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Registro Atualizado com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível atualizar o registro.',

                    });

                }
            }
        });

    });
});

$(document).ready(function() {

    $("#del_imagem").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/delete_imagemEmpreendimento.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Registro removido com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })

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

    $("#update_amenidades").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/updateAmenidades_empreendimento.php",
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

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Não foi possível atualizar os registros.',

                    });

                }
            }
        });

    });
});


$(document).ready(function() {

    $("#insert_proximidade").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/insertProximidade_empreendimento.php",
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

    $("#del_proximidade").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/delete_proximidade.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Registro removido com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })

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