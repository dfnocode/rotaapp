var table = document.getElementById('fornecedores');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        const newLocal = this.cells[0].innerHTML;
        //rIndex = this.rowIndex;
        document.getElementById("id_delete").value = newLocal;
        document.getElementById("id_fornecedor").value = newLocal;
        document.getElementById("registro_fornecedor").value = this.cells[2].innerHTML;
        document.getElementById("nome_fornecedor").value = this.cells[3].innerHTML;
        document.getElementById("fantasia_fornecedor").value = this.cells[4].innerHTML;
        document.getElementById("email_fornecedor").value = this.cells[5].innerHTML;
        document.getElementById("telefone_fornecedor").value = this.cells[6].innerHTML;

        document.getElementById("cnpjcpf_fornecedor").value = this.cells[7].innerHTML;
        document.getElementById("idrg_fornecedor").value = this.cells[8].innerHTML;
        document.getElementById("endereco_fornecedor").value = this.cells[9].innerHTML;
        document.getElementById("numero_fornecedor").value = this.cells[10].innerHTML;
        document.getElementById("bairro_fornecedor").value = this.cells[11].innerHTML;

        document.getElementById("cidade_fornecedor").value = this.cells[13].innerHTML;
        document.getElementById("uf_fornecedor").value = this.cells[14].innerHTML;
        document.getElementById("complemento_fornecedor").value = this.cells[12].innerHTML;
        document.getElementById("cep_fornecedor").value = this.cells[15].innerHTML;
        document.getElementById("situacao_fornecedor").value = this.cells[16].innerHTML;


        document.getElementById("celular_fornecedor").value = this.cells[18].innerHTML;
        document.getElementById("contatos_fornecedor").value = this.cells[17].innerHTML;
        document.getElementById("fax_fornecedor").value = this.cells[19].innerHTML;
        document.getElementById("website_fornecedor").value = this.cells[20].innerHTML;
        document.getElementById("obs_fornecedor").value = this.cells[21].innerHTML;
        document.getElementById("emailnfe_fornecedor").value = this.cells[22].innerHTML;

    }
};