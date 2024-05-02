var table = document.getElementById('num_faturas');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        const newLocal = this.cells[0].innerHTML;
        //rIndex = this.rowIndex;        
        document.getElementById("id_num_fatura").value = newLocal;
        //document.getElementById("prefixo").options[0].text = this.cells[2].innerHTML;
        document.getElementById("numeracao").value = this.cells[3].innerHTML;
        document.getElementById("sufixo").value = this.cells[4].innerHTML;
        document.getElementById("incluir_data").options[0].text = this.cells[5].innerHTML;

    }
};