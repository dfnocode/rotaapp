var table = document.getElementById('empreendimentos');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        document.getElementById("id_empreendimento").value = this.cells[0].innerHTML;
    }
};


var table2 = document.getElementById('table_proximidades');
for (var i = 1; i < table2.rows.length; i++) {
    table2.rows[i].onclick = function() {
        document.getElementById("id_proximidade").value = this.cells[0].innerHTML;
    }
};