<?php


include "../database/conexao.php"; //Conexão

//Dados do usuário
session_start();
$login = $_SESSION['email'];


$id_empreendimento = $_POST['codigo'];

//Exclui amenidades cadastradas anteriormente
$queryDelete = "DELETE FROM tbl_amenidades_Empreendimento WHERE id_empreendimento  = $id_empreendimento";
if(mysqli_query($conexao, $queryDelete)){

    // Registra AMENIDADES
    $checkboxes = isset($_POST['amenidades']) ? $_POST['amenidades'] : array();
    foreach($checkboxes as $value) {
    
        $query2 = "INSERT INTO tbl_amenidades_Empreendimento (id_amenidade, id_empreendimento) VALUES ('$value','$id_empreendimento')";
        mysqli_query($conexao, $query2);
    }

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login atualizou as amenidades do empreendimento id($id_empreendimento).')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";

}else{
    echo "erro";
}




