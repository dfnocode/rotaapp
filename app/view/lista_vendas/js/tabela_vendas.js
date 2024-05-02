var table = document.getElementById('lista_vendas');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        const newLocal = this.cells[1].innerHTML;
        //rIndex = this.rowIndex;
        document.getElementById("id_delete").value = newLocal;
        //document.getElementById("id_venda").value = newLocal;

    }
};