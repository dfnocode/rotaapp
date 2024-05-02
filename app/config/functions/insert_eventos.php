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
$tarifa = $_POST['tarifa'];
$dt_inicio = $_POST['data_inicio'];
$dt_fim = $_POST['data_fim'];
$diaria = $_POST['min_diaria'];

// Insere Registro
$query = "INSERT INTO tbl_eventos (nome, tarifa, data_inicio, data_fim, min_diaria) VALUES ('".$nome."','".$tarifa."','".$dt_inicio."','".$dt_fim."', '".$diaria."')";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou o evento ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
}