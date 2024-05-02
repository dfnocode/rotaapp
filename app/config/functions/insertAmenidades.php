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

// Insere Registro
$query = "INSERT INTO tbl_amenidades (nome) VALUES ('$nome')";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou uma a amenidade ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>