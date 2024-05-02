<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão



session_start();

function ValorDecimal( $valor ) {
  
    $vsoma = explode(",",$valor);
    $float = ((int)($valor * 1000))+((int)$vsoma[1]*0.01);
    return $float;
}

//login autenticado
$login = $_SESSION['vendedor'];



//if(isset($_GET['dCliente']) or isset($_GET['id_vendedor']) or isset($_GET['data_da_venda']) or isset($_GET['p_situacao']) ) {

$pedido = $_POST['numero'];

if (isset($_POST['dCliente'])) { 
    $cliente = $_POST['dCliente'];
}
else {
    $cliente = $_POST['idcliente'];
}

$vendedor = $_POST['id_vendedor'];

$datavenda = $_POST['data_da_venda'];
$data_entrega = $_POST['dataEntrega'];
$data_saida = $_POST['dataSaida'];
$data_prevista = $_POST['dataPrevista'];
$prazo_entrega = $_POST['prazoEntrega'];
$tipo_pagamento = $_POST['tipo_pagamento'];
$observacoes = $_POST['observacoes'];
$obs_internas = $_POST['obs_internas'];

$situacao = $_POST['p_situacao'];
$totalvenda = $_POST['soma-final'];

$d1 = $_POST['descAdicional'];
$d2 = $_POST['tx_add'];
$d3 = $_POST['valorFrete'];
$d4 = $_POST['totalDescItens'];

$desconto =  trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$d1))));
$tx_add = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$d2))));
$valorFrete =  trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$d3))));
$totalDescItens = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$d4))));
 if (isset($_POST['totalComissoes'])) {
    $totalComissoes = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$_POST['totalComissoes']))));
}
else {
    $totalComissoes = 0; 
}

$pcoms = $_POST['porComss'];

$somafinal = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$totalvenda))));
$somafinal -= ($desconto);
$somafinal -= ($tx_add);
$somafinal -= ($valorFrete);

$totalComissoes = $_POST['vTComs2'];

$query = "UPDATE tbl_pedidos_venda SET data_registro='$datavenda', data_saida='$data_saida', data_prevista='$data_prevista', data_entrega='$data_entrega', prazo_entrega='$prazo_entrega', id_cliente='$cliente', id_vendedor='$vendedor',
situacao='$situacao', desconto='$desconto', frete='$valorFrete', taxas_adicionais='$tx_add', comissao='$totalComissoes', coms_percent='$pcoms', valor_total='$somafinal', tipo_pagamento='$tipo_pagamento', observacoes='$observacoes', obs_internas='$obs_internas' WHERE numero_pedido = '$pedido'";

if(mysqli_query($conexao, $query)){
    
    $query2 = "SELECT F.faturamento as Subtotal,
    F.desconto+F.taxas_adicionais+F.frete as TDesc
    FROM tbl_pedidos_venda as F
    WHERE F.numero_pedido = '$pedido'";

    $rdesc = mysqli_query($conexao,$query2);
    while($row = mysqli_fetch_array($rdesc, MYSQLI_ASSOC)) :
        $TDesc = $row['TDesc'];
        $TSubtotal = $row['Subtotal'];
    endwhile;

    $total_pedido = $TSubtotal - $TDesc;
    $query3 = "UPDATE tbl_pedidos_venda SET valor_total='$total_pedido' WHERE numero_pedido = '$pedido'";
    if(mysqli_query($conexao, $query3)){

            // Registra Log
            $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou Dados do Cliente no Pedido: ($pedido) - Cliente: $cliente Vendedor: $vendedor Data da Venda: $datavenda', '".$login."')";
            
            mysqli_query($conexao,$queryLog);           

            //echo '<script>alert("Dados Atualizados");</script>';
            echo 'sucesso';
            //echo $query;            
            //echo '<script>$("#myToast").toast("show");</script>';        
    }
    else { 
        echo 'erro';
        echo $query3;
    }
}
else
{
    echo 'erro';
    echo $query;                                
}
   

?>