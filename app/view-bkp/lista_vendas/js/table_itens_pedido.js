var table = document.getElementById('itens_do_pedido');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        const newLocal = this.cells[0].innerText;
        //rIndex = this.rowIndex;
        document.getElementById("id_delete").value = newLocal;
        document.getElementById("id_item_pedido").value = newLocal;

        document.getElementById("id_pedido").value = this.cells[8].innerHTML;

        document.getElementById("num_pedido").value = this.cells[8].innerHTML;

        document.getElementById("id_do_produto").value = this.cells[9].innerHTML;

        document.getElementById("id_produto_i").options[0].text = this.cells[2].innerHTML;
        document.getElementById("id_produto_i").options[0].value = this.cells[9].innerHTML;

        document.getElementById("qtde_i").value = $.trim(this.cells[5].innerHTML);
        document.getElementById("desconto_i").value = this.cells[6].innerText;
        document.getElementById("id_produto_e").value = document.getElementById("id_produto_i").value;
        document.getElementById("descricao_produto").value = this.cells[2].innerHTML;
        document.getElementById("unidade_produto").value = this.cells[3].innerHTML;
        document.getElementById("preco_produto").value = this.cells[4].innerText;

    }
};

$('#edit_itens_pedido').on('shown.bs.modal', function() {
    $('#desconto_i').trigger('focus');

    var valor5 = $('#desconto_i').trigger('focus');

});