var table = document.getElementById('produtos');
for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        const newLocal = this.cells[0].innerHTML;
        //rIndex = this.rowIndex;
        document.getElementById("id_delete").value = newLocal;
        document.getElementById("id_produto").value = newLocal;
        document.getElementById("categoria_produto").value = this.cells[2].innerHTML;
        document.getElementById("descricao_produto").value = this.cells[3].innerHTML;
        document.getElementById("unidade_produto").value = this.cells[4].innerHTML;
        document.getElementById("preco_produto").value = this.cells[5].innerHTML;

        document.getElementById("situacao_produto").options[0].text = this.cells[6].innerHTML;
        //document.getElementById("situacao_produto").value = this.cells[6].innerHTML;

        document.getElementById("preco_custo_produto").value = this.cells[7].innerHTML;
        document.getElementById("tipo_produto").value = this.cells[8].innerHTML;
        document.getElementById("condicao_produto").value = this.cells[9].innerHTML;
        document.getElementById("frete_produto").value = this.cells[10].innerHTML;
        document.getElementById("unidade_medida_produto").value = this.cells[11].innerHTML;

        //document.getElementById("data_registro_produto").value = this.cells[12].innerHTML;


    }
};