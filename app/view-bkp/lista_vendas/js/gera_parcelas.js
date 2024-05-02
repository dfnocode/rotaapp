function countString(str, letter) {
    let count = 0;

    // looping through the items
    for (let i = 0; i < str.length; i++) {

        // check if the character is at that position
        if (str.charAt(i) == letter) {
            count += 1;
        }
    }
    return count;
}

$(document).ready(function() {

    $("#gera-parcelas").click(function() {

        alert("teste");

        var tipoPagamento = $("#tipo_pagamento").val();
        // Descobre em quantas parcelas será o pagamento
        var totalParcelas = countString(tipoPagamento, ',') + 1;
        // Pega a data de entrega
        var dataEntrega = $("#dataEntrega").val();
        // Pega o valor total e formata para numero decimal
        var valorTotal = $("#soma-final").val();
        valorTotal = valorTotal.replace(".", "");
        valorTotal = valorTotal.replace(",", ".");
        var n_valor = parseFloat(valorTotal).toFixed(2);
        // Descobre o valor de cada parcela
        var n = new Number(n_valor / totalParcelas);
        var myObj = {
            style: "currency",
            currency: "BRL"
        }

        // dias da parcela
        var dias = tipoPagamento.split(",");
        var tr_parcelas = '';

        var date = new Date(dataEntrega);

        // CRIA AS LINHAS DAS PARCELAS
        for (let i = 0; i < totalParcelas; i++) {

            var date = new Date(dataEntrega);
            date.setDate(date.getDate() + parseInt(dias[i]));
            var data_parcela = ((date.getDate() + 1)) + "/" + ((date.getMonth() + 1)) + "/" + date.getFullYear();

            tr_parcelas += '<tr><td><span class="numero-parcelas">' + (i + 1) + '</span></td><td>' + dias[i] + '</td><td>' + data_parcela + '</td><td>' + n.toLocaleString("pt-BR", myObj) + '</td></tr>';
        }

        var inicioTabela = '<table id="pag_grparcelas" class="itens-list" style="display: table;"><tbody><tr id="pag_parcelas_header"><th></th><th id="str_frame_pagamento_dias">Dias</th><th id="str_frame_pagamento_data">Data</th><th id="str_frame_pagamento_valor">Valor</th></tr>' + tr_parcelas + '</tbody></table>';

        $("#tabela-parcelas").append(inicioTabela);
    });
});