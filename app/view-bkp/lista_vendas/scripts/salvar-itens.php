<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../../config/database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];




//Recebe Valor
$id_pedido = '8005'; //$_POST['num'];
$id_produto = $_POST['id_produto'];
$quantidade = $_POST['qtde1'];
$desconto = $_POST['dDescont1'];

//$desconto = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$desconto))));
$desc = (float)$desconto;


// Insere Registro

$query = "INSERT INTO tbl_itens_pedido (id_pedido,id_produto,quantidade,desconto) VALUES ('$id_pedido', '$id_produto', '$quantidade' ,'$desc')";


if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O Vendedor $login Adicionou o Produto $id_produto ao Pedido: $id_pedido', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
    echo "erro";
}


?>