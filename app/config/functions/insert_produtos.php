<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

//Recebe Valor
$nome = $_POST['nome'];
$fornecedor = $_POST['fornecedor'];
$valorCompra = str_replace(',','.', str_replace('.','', $_POST['valor_adesao']));
$valorVenda = str_replace(',','.', str_replace('.','', $_POST['valor_venda']));
$grupoComissao = $_POST['grupo_comissao'];

// Insere Registro
$query = "INSERT INTO tbl_produtos (nome, valor_adesao, valor_venda, id_fornecedor, id_grupoComissao) 
          VALUES ('".$nome."','".$valorCompra."','".$valorVenda."','".$fornecedor."','".$grupoComissao."')";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou o produto ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $valorCompora;
}