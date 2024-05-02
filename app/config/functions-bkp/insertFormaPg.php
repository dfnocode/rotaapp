<?php


include "../../config/database/conexao.php"; //Conexão

session_start();
//Dados usuário
$login = $_SESSION['email'];


//Dados do formulário
$nome = $_POST['nome'];
$taxa  = $_POST['taxa'];

//Insere Registro
$query = "INSERT INTO tbl_formaPagamento (nome, taxa) VALUES ('".$nome."', '".$taxa."')";
if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login inseriu a forma de pagamento ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";

}else{
    echo "erro";

}

