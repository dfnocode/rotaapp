<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];


//Recebe Valor
$nome = $_POST['nome_grupo'];
$calculo = $_POST['calculo_grupo'];
$id = $_POST['id_grupo'];

// Insere Registro
$query = "UPDATE tbl_grupoComissao  set nome='$nome', calculo_base='$calculo' WHERE id = '$id' ";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou um novo grupo de comissão com o nome de $nome.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}