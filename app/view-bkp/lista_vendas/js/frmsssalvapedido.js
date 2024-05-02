$(document).ready(function() {
    var confirmaSave = $('#confirmSalvaPedido').val();
    if (confirmaSave == 'same') {
        var num = $('#numero').val();
        var url = "editar_pedido.php?numero=" + num + "&confirm=ok";
        window.location.replace(url);
    }
    if (confirmaSave != '' || confirmaSave != 'nao') {
        $("#salvarpedido").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: "../../config/functions/SalvarPedidoDeVenda.php",
                method: "post",
                data: $("form").serialize(),
                dataType: "text",
                success: function(strMessage) {
                    $("#message").text(strMessage);
                    if (strMessage == 'sucesso') {
                        Swal.fire({
                            title: '',
                            text: "Pedido atualizado com sucesso!",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                var num = $('#numero').val();

                                var url = "editar_pedido.php?numero=" + num + "&confirm=ok";
                                window.location.replace(url);

                                //location.reload();
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
    }
});