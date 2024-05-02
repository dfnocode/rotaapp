<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor


$quantidade = $_POST['qtde_e'];
$desconto = $_POST['desconto_e'];
$id_produto = $_POST['id_produto_e'];

$id_item = $_POST['item_pedido_e']; // id item do pedido

$num_pedido = $_POST['num_pedido'];
$unidade = $_POST['unidade_produto'];
$descricao = $_POST['descricao_produto'];
if (isset($_POST['val_produto'])) {
    $valor_unit = $_POST['preco_produto'];
}
else { 
    $valor_unit = $_POST['val_produto'];
}
$valor_unit = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$valor_unit))));

$preco = (float)$valor_unit;
// Insere Registro
$query = "UPDATE tbl_produtos set unidade='$unidade', descricao='".$descricao."', preco='$preco' WHERE id = '$id_produto'";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $update_item = "";


    $itens_pedido = "SELECT Sum(P.preco * I.quantidade - I.desconto) as subtotal
    FROM tbl_pedidos_venda as F
    INNER JOIN tbl_itens_pedido as I
    ON F.numero_pedido = I.id_pedido
    INNER JOIN tbl_produtos as P
    ON I.id_produto = P.id
    WHERE I.id_pedido = '$id_pedido'";  

    $result = mysqli_query($conexao,$itens_pedido); 
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
    $subtotal = $row['subtotal'];                           
    endwhile;
     
    $updt_vendas = "UPDATE tbl_pedidos_venda SET faturamento='$subtotal'
    WHERE numero_pedido = '$num_pedido'";

if(mysqli_query($conexao, $updt_vendas)){
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou o Produto: $id Unidade: $unidade Preço: $preco', '".$login."')";
    mysqli_query($conexao,$queryLog);

    
    echo "sucesso";
    echo $itens_pedido;
}else{
    echo $query;
    echo "erro";
}
}

?>