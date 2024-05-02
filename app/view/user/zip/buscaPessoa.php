<?php

include "../../config/database/conexao.php"; //Conexão

if(empty($_POST['cpf'])){
    $cpf = '0';
}else{
    $cpf = $_POST['cpf'];
}

$queryBusca = "SELECT id, nome, email  from tbl_pessoas WHERE cpf = '$cpf'";
$resultBusca = mysqli_query($conexao,$queryBusca);


?>