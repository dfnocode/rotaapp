/* $(document).ready(function() {
    $('#example1').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": "scripts/post-itens.php",
            "type": "POST"
        },
        "columns": [
            { "data": "produto" },
            { "data": "unidade" },
            { "data": "quantidade" },
            { "data": "preco" },
            { "data": "desconto" },
            { "data": "precounit" },
            { "data": "total" }
        ]
    });
}); */

$(document).ready(function() {

    $("#buscar-produtos").submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "../../config/functions/salvar-itens.php",
            method: "post",
            data: $("form").serialize(),
            dataType: "text",
            success: function(strMessage) {
                $("#message").text(strMessage);
                if (strMessage == 'sucesso') {
                    Swal.fire({
                        title: '',
                        text: "Item inserido com sucesso!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();

                        }
                    })
                    $('#buscar-produtos').modal('toggle');
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