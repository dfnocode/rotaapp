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
$dt_inicio = $_POST['data_inicio'];
$dt_fim = $_POST['data_fim'];

// Insere Registro
$query = "INSERT INTO tbl_periodos (nome, data_inicio, data_fim) VALUES ('".$nome."','".$dt_inicio."','".$dt_fim."')";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou o período ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
}