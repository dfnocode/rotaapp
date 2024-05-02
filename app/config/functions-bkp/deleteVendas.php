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

// Insere Registro



$query = "DELETE FROM tbl_pedidos_venda WHERE numero_pedido = '$id'";


if(mysqli_query($conexao,$query)){

    // Deleta todos os itens do pedido
    $query2 = "DELETE FROM tbl_itens_pedido WHERE id_pedido = '$id'";
    
        if(mysqli_query($conexao,$query2)){
        // Registra Log
        $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Excluiu o Pedido de Venda ($id) do sistema.', '".$login."')";
        mysqli_query($conexao,$queryLog);
        echo "sucesso";
    } 
}
else{
    echo 'SQL '.$query;
}