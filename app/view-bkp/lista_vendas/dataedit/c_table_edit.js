$(document).ready(function() {
    $('#itens_do_pedido').Tabledit({
        deleteButton: true,
        editButton: true,
        columns: {
            identifier: [0, 'id'],
            editable: [
                [1, 'Produto'],
                [2, 'Unid'],
                [3, 'Plista'],
                [4, 'Qtde'],
                [5, 'Desc'],
                [6, 'ValorUnit'],
                [7, '']
            ]
        },
        hideIdentifier: false,
        url: 'live_edit.php'
    });
});