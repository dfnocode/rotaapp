<?php

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

// Insere Registro
$query = "DELETE FROM tbl_ftp";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login excluíu a conexão cadastrada para o servidor ftp.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}
