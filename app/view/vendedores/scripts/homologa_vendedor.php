<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../../../config/database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];
$tipopessoa = 'Vendedor';
$id = $_POST['id_vendedor'];
$nome = $_POST['nome_vendedor'];
$email = $_POST['email_vendedor'];


// Insere Registro
$query = "INSERT INTO tbl_users (id, registro, tipopessoa, nome, email) VALUES ( $id, now(), '".$tipopessoa."', '".$nome."', '".$email."')";

if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login cadastrou o fornecedor $nome.', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}


?>