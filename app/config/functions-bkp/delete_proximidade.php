<?php



include "../database/conexao.php"; //Conexão


//Sessão usuário
session_start();
$login = $_SESSION['email'];

//Recebe Valor
$id = $_POST['id_proximidade'];


//exclui Registro
$query = "DELETE FROM tbl_proximidades WHERE id = '$id'";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login excluiu a proximidade com o id($id) do sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>