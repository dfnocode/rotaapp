<?php

include "../../config/database/conexao.php"; //Conexão

$nome = $_POST['nome2'];
$cpf  = $_POST['cpf2'];
$email = $_POST['email2'];

if (empty($nome)){
    $query = "SELECT * FROM tbl_pessoas 
            WHERE
                cpf  = '$cpf'  OR
                email = '$email'";
} else {
    $query = "SELECT * FROM tbl_pessoas 
            WHERE
                nome LIKE '%$nome%' OR
                cpf   = '$cpf'  OR
                email = '$email'";
}

$result = mysqli_query($conexao,$query);

?>