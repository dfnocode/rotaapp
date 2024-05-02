<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_produto'];
$categoria = $_POST['categoria_produto'];
$descricao = $_POST['descricao_produto'];
$unidade = $_POST['unidade_produto'];
$preco = $_POST['preco_produto'];
$situacao = $_POST['situacao_produto'];

$preco_custo = $_POST['preco_custo_produto'];
$tipo = $_POST['tipo_produto'];
$condicao = $_POST['condicao_produto'];
$frete = $_POST['frete_produto'];
$unidade_medida = $_POST['unidade_medida_produto'];



// Insere Registro
$query = "UPDATE tbl_produtos set categoria='$categoria', descricao='$descricao', unidade='$unidade', preco=$preco, situacao='$situacao', preco_custo=$preco_custo, tipo_produto='$tipo', condicao='$condicao', frete='$frete', unidade_medida='$unidade_medida' WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou o Produto ($id) - $descricao', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>