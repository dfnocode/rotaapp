var table = document.getElementById('formas_pg');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_forma").value = this.cells[0].innerHTML;
        document.getElementById("id_forma_del").value = this.cells[0].innerHTML;
        document.getElementById("nome_forma").value = this.cells[1].innerHTML;
        document.getElementById("taxa_forma").value = this.cells[2].innerHTML;

    }
};