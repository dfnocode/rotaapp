var table = document.getElementById('grupo_comissao');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_grupo").value = this.cells[0].innerHTML;
        document.getElementById("nome_grupo").value = this.cells[1].innerHTML;
        document.getElementById("calculo_grupo").value = this.cells[2].innerHTML;
    }
};