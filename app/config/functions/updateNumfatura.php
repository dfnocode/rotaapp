<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_num_fatura'];
$prefixo = $_POST['prefixo'];
$numeracao = $_POST['numeracao'];
$sufixo = $_POST['sufixo'];
$incluir_data = $_POST['incluir_data'];


// Insere Registro
$query = "UPDATE tbl_config_fatura set prefixo='$prefixo', numeracao='$numeracao', sufixo='$sufixo', incluir_data='$incluir_data' WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou a Configuração do número da fatura ($id)', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>