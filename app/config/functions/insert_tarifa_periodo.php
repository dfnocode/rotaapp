<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

//Recebe Valor
$id_periodo = $_POST['periodo'];
$diarias = $_POST['diarias'];
$procentagem = $_POST['tarifa'];

// Insere Registro
$query = "INSERT INTO tbl_tarifasPeriodo (id_periodo, tarifa, min_diaria) VALUES ('".$id_periodo."','".$procentagem."','".$diarias."')";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou uma tarifa para o período ($id_periodo) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
}