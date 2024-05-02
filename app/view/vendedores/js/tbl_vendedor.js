var table = document.getElementById('vendedores');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        const newLocal = this.cells[0].innerHTML;
        //rIndex = this.rowIndex;
        //document.getElementById("id_delete").value = newLocal;
        document.getElementById("id_vend").value = newLocal;
        document.getElementById("id_vendedor").value = newLocal;


        document.getElementById("nome_vendedor").value = this.cells[2].innerHTML;

        document.getElementById("email_vendedor").value = this.cells[3].innerHTML;


    }
};