<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_item_pedido'];
$id_produto = $_POST['id_produto_i'];
$quantidade = $_POST['qtde_i'];
$desconto = $_POST['desconto_i'];





$desconto = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$desconto))));
$desc = $desconto;

if ($desc == '') {
    $desc = 0;
}

/*
CONFERE SE HÁ ESPAÇOS NUMA STRING

if ( preg_match('/\s/',$desc) ) {
 echo 'True';
}  */


// Insere Registro
$query = "UPDATE tbl_itens_pedido set id_produto='$id_produto', quantidade='$quantidade', desconto='$desc' WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou o Item de Pedido ($id) - Prod: $id_produto Qtde: $quantidade Desc: $desc', '".$login."')";
    mysqli_query($conexao,$queryLog);
   
    echo "sucesso";
}else{
    
    echo $query;
    echo "erro";
}

?>