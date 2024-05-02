<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_num_fatura4'];

$smtp_email_host = $_POST['smtp_email_host'];
$email_envio_fatura = $_POST['email_envio_fatura'];
$senha_email_envio = $_POST['senha_email_envio'];

$nome_email_envio = $_POST['nome_email_envio'];
$assunto_email_envio = $_POST['assunto_email_envio'];
$msg_body_email_envio = $_POST['msg_body_email_envio'];


// Insere Registro
$query = "UPDATE tbl_config_fatura set smtp_email_host='$smtp_email_host', email_envio_fatura='$email_envio_fatura', senha_email_envio='$senha_email_envio', nome_email_envio='$nome_email_envio', assunto_email_envio='$assunto_email_envio', msg_body_email_envio='$msg_body_email_envio' WHERE id = $id";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou a Configuração do Endereço da Empresa na fatura ($id)', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>