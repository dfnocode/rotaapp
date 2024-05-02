<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

//Recebe Valor
$nome = $_POST['nome_agencia'];
$limite = str_replace(',','.', str_replace('.','',$_POST['limite_vendas']));
$id_agencia = $_POST['id_agencia'];


// Insere Registro
$query = "UPDATE tbl_agencias SET 
            nome='$nome',
            limite='$limite'
         WHERE id = '$id_agencia'";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login atualizou a agência ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo 'erro';
}