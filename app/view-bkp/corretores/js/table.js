var table = document.getElementById('corretores');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_corretor").value = this.cells[0].innerHTML;
    }
};