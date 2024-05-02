<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];
$tipopessoa = 'Fornecedor';
//Recebe Valor
$nome = $_POST['nome'];
$fantasia = $_POST['fantasia'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

// Insere Registro
$query = "INSERT INTO tbl_users (registro, tipopessoa, nome, fantasia, email, telefone) VALUES ( now(), '".$tipopessoa."', '".$nome."', '".$fantasia."', '".$email."', '".$telefone."')";

if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login cadastrou o fornecedor $nome.', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}


?>