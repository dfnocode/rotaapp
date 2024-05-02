<?php

include "../../config/database/conexao.php"; //Conexão

$query = "SELECT 
            produtos.id,
            produtos.nome,
            produtos.valor_adesao,
            produtos.valor_venda,
            produtos.id_fornecedor,
            fornecedor.nome as nome_fornecedor,
            grupoComissao.calculo_base as comissao
        FROM tbl_produtos as produtos
        INNER JOIN tbl_fornecedores as fornecedor
            ON (produtos.id_fornecedor = fornecedor.id)
        INNER JOIN tbl_grupoComissao as grupoComissao
            ON (produtos.id_grupoComissao = grupoComissao.id)";

$result = mysqli_query($conexao,$query);

?>