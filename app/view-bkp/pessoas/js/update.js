var table = document.getElementById('clientes');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("id_cliente").value = this.cells[0].innerHTML;
        document.getElementById("edit_nome").value = this.cells[1].innerHTML;
        document.getElementById("edit_cpf").value = this.cells[2].innerHTML;
        document.getElementById("edit_email").value = this.cells[3].innerHTML;
        document.getElementById("edit_rg").value = this.cells[4].innerHTML;
        document.getElementById("edit_telefone").value = this.cells[5].innerHTML;
        document.getElementById("edit_cep").value = this.cells[6].innerHTML;
        document.getElementById("edit_rua").value = this.cells[7].innerHTML;
        document.getElementById("edit_bairro").value = this.cells[8].innerHTML;
        document.getElementById("edit_cidade").value = this.cells[9].innerHTML;
        document.getElementById("edit_uf").value = this.cells[10].innerHTML;
        document.getElementById("edit_complemento").value = this.cells[11].innerHTML;

    }
};