<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor
$id = $_REQUEST['id_delete'];
//$id = $_POST['id_delete'];

//echo '<script>alert("id = '.$id.'");</script>';
//echo $id;
/* $sql_pedido = "SELECT DISTINCT id_pedido FROM tbl_itens_pedido WHERE id = $id";
print_r($sql_pedido);

$result = mysqli_query($conexao,$query); */

$query = "DELETE FROM tbl_itens_pedido WHERE id = $id";

if(mysqli_query($conexao,$query)){

    // Registra Log
        $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Excluiu o Pedido de Venda ($id) do sistema.', '".$login."')";
        mysqli_query($conexao,$queryLog);
        echo "sucesso";       
    } 

else{
    echo 'SQL '.$query;
}