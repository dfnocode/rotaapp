<?php


include "../../config/database/conexao.php"; //Conexão

session_start();
//Dados usuário
$login = $_SESSION['email'];


//Dados do formulário
$nome = $_POST['nome_forma'];
$taxa  = $_POST['taxa_forma'];
$id = $_POST['id_forma'];

//Insere Registro
$query = "UPDATE  tbl_formaPagamento set nome='$nome', taxa='$taxa' WHERE id='$id'";
if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login atualizou a forma de pagamento ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";

}else{
    echo "erro";

}

