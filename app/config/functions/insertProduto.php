<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$unidade = $_POST['unidade'];
$preco = $_POST['valor'];
$situacao = 'Ativo';


// Insere Registro
$query = "INSERT INTO tbl_produtos (data_registro, categoria, descricao, unidade, preco, situacao) VALUES ( now(), '".$categoria."', '".$descricao."', '".$unidade."', $preco, '".$situacao."')";

if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login cadastrou o produto - $descricao.', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
    echo $query;
}


?>