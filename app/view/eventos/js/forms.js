$(document).ready(function() {

    $("#add_").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/insert_eventos.php",
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
               
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Erro não foi possível concluir a solicitação.',

                    });
                }


            }
        });

    });
});

$(document).ready(function() {

    $("#add_tarifa").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/insert_tarifa_evento.php",
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
            url: "../../config/functions/delete_eventos.php",
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

$(document).ready(function() {

    $("#delete_tarifa").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/delete_tarifaevento.php",
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

$(document).ready(function() {

    $("#update_").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/update_eventos.php",
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
                    $('#modalDelete').modal('toggle');
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