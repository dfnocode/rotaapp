<?php

include "../database/conexao.php"; //Conexão

//Sessão usuário
session_start();
$login = $_SESSION['email'];

//Dados do formulário

$texto = $_POST['informacoes'];
$id_empreendimento = $_POST['codigo'];

$query = "UPDATE tbl_empreendimento SET 
                    informacoes = '".$texto."'
         WHERE id = '".$id_empreendimento."'";

if(mysqli_query($conexao,$query)){
    
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login atualizou o texto do empreendimento ($id_empreendimento).')";
    mysqli_query($conexao,$queryLog);
    
    echo "sucesso";

}else {
    echo "erro";
}