var table = document.getElementById('amenidades');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {

        document.getElementById("id_update").value = this.cells[0].innerHTML;
        document.getElementById("id_delete").value = this.cells[0].innerHTML;
        document.getElementById("nome_update").value = this.cells[1].innerHTML;
    }
};