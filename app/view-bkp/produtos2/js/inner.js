var table = document.getElementById('produtos');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {

       document.getElementById("id_delete").value = this.cells[0].innerHTML;
        
    }
};