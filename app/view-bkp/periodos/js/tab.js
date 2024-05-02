var table = document.getElementById('tbl_periodos');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_periodo").value = this.cells[0].innerHTML;
        document.getElementById("id_periodo_lista").value = this.cells[0].innerHTML;
        document.getElementById("id_periodo_del").value = this.cells[0].innerHTML;
        document.getElementById("nome_periodo").value = this.cells[1].innerHTML;
        var date_inicio = this.cells[2].innerHTML;
        document.getElementById("dataInicio_periodo").value = date_inicio.substr(6,4)+"-"+date_inicio.substr(3,2)+"-"+date_inicio.substr(0,2);
        var date_fim =this.cells[3].innerHTML;
        document.getElementById("dataFim_periodo").value = date_fim.substr(6,4)+"-"+date_fim.substr(3,2)+"-"+date_fim.substr(0,2);
    }
};

var table = document.getElementById('tbl_tarifas');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_tarifa_del").value = this.cells[0].innerHTML;
    }
};


  


  