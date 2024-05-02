var table = document.getElementById('grupos');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        document.getElementById("id_grupo").value = this.cells[0].innerHTML;
    }
};


