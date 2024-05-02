<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_num_fatura2'];
$nome = $_POST['nome_empresa'];
$documentacao = $_POST['documentacao_empresa'];
$endereco = $_POST['endereco_empresa'];


// Insere Registro
$query = "UPDATE tbl_config_fatura set nome_empresa='$nome', documentacao_empresa='$documentacao', endereco_empresa='$endereco' WHERE id = $id";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou a Configuração do Endereço da Empresa na fatura ($id)', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>