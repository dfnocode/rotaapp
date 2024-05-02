var table = document.getElementById('agencias');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_agencia").value = this.cells[0].innerHTML;
        document.getElementById("nome_agencia").value = this.cells[1].innerHTML;
        document.getElementById("limite_vendas").value = this.cells[2].innerHTML;
    }
};