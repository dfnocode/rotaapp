<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$situacao = $_POST['situacao_produto5'];
$categoria = $_POST['categoria_produto5'];
$frete = $_POST['frete_produto5'];
$unidade = $_POST['unidade_produto5'];

$descricao = $_POST['descricao_produto5'];
$preco = $_POST['preco_produto5'];
$preco_custo = $_POST['preco_custo_produto5'];

$tipo = $_POST['tipo_produto5'];
$condicao = $_POST['condicao_produto5'];
$unidade_medida = $_POST['unidade_medida_produto5'];



// Insere Registro
$query = "INSERT INTO tbl_produtos (data_registro, categoria, descricao, unidade, preco, situacao, preco_custo, tipo_produto, condicao, frete, unidade_medida) VALUES ( now(), '".$categoria."', '".$descricao."', '".$unidade."', $preco, '".$situacao."', $preco_custo, '".$tipo."', '".$condicao."', '".$frete."', '".$unidade_medida."')";

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