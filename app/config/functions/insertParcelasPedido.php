<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor
$id_pedido = $_POST['id_pedido'];
$data_parcela = $_POST['data_parcela'];

$valor = $_POST['valor'];
//$desconto = trim(str_replace(',','.',str_replace('.','',str_ireplace('R$','',$desconto))));
//$desc = (float)$desconto;

$descricao = $_POST['descricao'];


// Insere Registro

$query = "INSERT INTO tbl_parcelas_mistas (id_pedido,data_parcela,valor,descricao) VALUES ('".$id_pedido."', '$data_parcela', '$valor' ,'$descricao')";


if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O Vendedor $login Adicionou a Parcela ($data_parcela,$valor) ao Pedido: $id_pedido', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
    echo "erro";
}


?>