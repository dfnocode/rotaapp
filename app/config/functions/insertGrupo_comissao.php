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
$calculo = $_POST['calculo'];

// Insere Registro
$query = "INSERT INTO tbl_grupoComissao (nome,calculo_base) VALUES ('".$nome."','".$calculo."')";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou um novo grupo de comissão com o nome de $nome.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}