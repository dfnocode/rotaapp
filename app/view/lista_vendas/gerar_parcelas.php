<!DOCTYPE html>
<html>

<head>
    <title>Gerar Parcelas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
    table {
        border: 1px solid silver;
        padding: 0;
    }
    th {
        font-weight: bold;
        border: 1px solid;
        background-color: silver;
        color: whitesmoke;
    }
    tr {
        border: solid 1px greenyellow;
    }
    </style>


    <script>
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

            var tipoPagamento = $("#tipo_pagamento").val();
            // Descobre em quantas parcelas será o pagamento
            var totalParcelas = countString(tipoPagamento, ',') + 1;    
            // Pega a data de entrega
            var dataEntrega = $("#dataEntrega").val();
            // Pega o valor total e formata para numero decimal
            var valorTotal = $("#valor_pagamento").val();
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
            var parcelas = '';           
            var date = new Date(dataEntrega);            
        
            // CRIA AS LINHAS DAS PARCELAS
            for (let i = 0; i < totalParcelas; i++) {

                var date = new Date(dataEntrega);
                date.setDate(date.getDate() + parseInt(dias[i]));
                var data_parcela = ((date.getDate()+1)) + "/" + ((date.getMonth()+1)) + "/" + date.getFullYear();
                
                tr_parcelas += '<tr><td><span class="numero-parcelas">'+(i+1)+'</span></td><td>'+dias[i]+'</td><td>'+data_parcela+'</td><td>'+n.toLocaleString("pt-BR", myObj)+'</td></tr>';
            }       

            var inicioTabela = '<table id="pag_grparcelas" class="itens-list" style="display: table;"><tbody><tr id="pag_parcelas_header"><th></th><th id="str_frame_pagamento_dias">Dias</th><th id="str_frame_pagamento_data">Data</th><th id="str_frame_pagamento_valor">Valor</th></tr>'+tr_parcelas+'</tbody></table>';

            $("#tabela-parcelas").append(inicioTabela);
        });
    });
    </script>
</head>



<body>

    <div class="card">

        <div class="card-header">
            <h2>Pagamento</h2>

        </div>

        <!-- /.card-header -->

        <div class="card-body table-responsive" id="tabela-parcelas">
            <div class="row">
                <div class="form-group col-lg-8 col-md-8">

                    <label for="dataEntrega">Data da Entrega <span class="fas fa-info-circle"
                            title="Data de Chegada do Pedido no Cliente"></span></label>
                    <input type="date" id="dataEntrega" name="dataEntrega" class="form-control" value="" required />
                    <br>
                    <br>


                    <label for="tipo_pagamento">Tipo do Pagamento </label>
                    <input type="text" id="tipo_pagamento" name="tipo_pagamento" class="form-control"
                        placeholder="tipo do pagamento" value="30, 60, 90">
                    <br>
                    <br>

                    <label for="valor_pagamento">Valor de Pagamento </label>
                    <input type="text" id="valor_pagamento" name="valor_pagamento" class="form-control"
                        placeholder="valor" value="50.000,00">
                    <br>
                    <br>

                </div>
                <div class="form-group col-lg-2 col-md-2">
                    <label></label>
                    <button title='Gerar Parcelas' id='gera-parcelas' type='button'
                        class='btn btn-primary float-right'><i class='fas fa-spin'></i><span class="btn-resp">Gerar
                            Parcelas</span></button>
                </div>
            </div>
        </div>
    </div>


</body>

</html>