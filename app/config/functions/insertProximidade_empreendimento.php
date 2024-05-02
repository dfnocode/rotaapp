<?php


include "../../config/database/conexao.php"; //Conexão

session_start();
//Dados usuário
$login = $_SESSION['email'];


//Dados do formulário
$id_empreendimento = $_POST['codigo'];
$proximidade  = $_POST['proximidade'];

//Insere Registro
$query = "INSERT INTO tbl_proximidades (proximidade, id_empreendimento) VALUES ('".$proximidade."', '".$id_empreendimento."')";
if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login inseriu proximidades no empreendimento com o código ($id_empreendimento) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";

}else{
    echo "erro";

}

