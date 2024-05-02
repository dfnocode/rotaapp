<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

//Recebe Valor
$id = $_POST['id_delete'];


// Insere Registro
$query = "DELETE FROM tbl_caracteristicas WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    echo "sucesso";
}else{
    echo "erro";
}

?>