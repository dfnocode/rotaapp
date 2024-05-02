<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

//Recebe Valor
$nome = $_POST['nome_update'];
$id = $_POST['id_update'];


// Insere Registro
$query = "UPDATE tbl_caracteristicas set nome='$nome' WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    echo "sucesso";
}else{
    echo "erro";
}

?>