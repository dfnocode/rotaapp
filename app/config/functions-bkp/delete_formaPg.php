<?php


include "../../config/database/conexao.php"; //Conexão

session_start();
//Dados usuário
$login = $_SESSION['email'];


//Dados do formulário

$id = $_POST['id_forma'];

//Insere Registro
$query = "DELETE FROM tbl_formaPagamento WHERE id='$id'";
if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login Excluiu a forma de pagamento ($id) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";

}else{
    echo "erro";

}

