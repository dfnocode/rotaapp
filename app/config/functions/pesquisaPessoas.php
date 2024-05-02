<?php

include "../database/conexao.php"; //Conexão

$nome = $_POST['nome2'];
$cpf  = $_POST['cpf2'];
$email = $_POST['email2'];

$query = "SELECT * FROM tbl_pessoas 
            WHERE
                nome = '$nome' or
                cpf  = '$cpf'  OR
                email = '$email'";

$result = mysqli_query($conexao,$query);
$linhas = mysqli_num_rows($result);

if ( $linhas == 0){
    echo "Nenhum Registro Encontrado...";
}else {
    
    $rows = mysqli_fetch_array($result, MYSQLI_ASSOC);
   
                        
}

