<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];

$id_vendedor = $_SESSION['id_usuario'];

//Recebe Valor
$numero_pedido = $_POST['num'];
$data_registro = $_POST['data_venda'];
$situacao = $_POST['situacao'];
$id_cliente = $_POST['id_cliente'];



// Insere Registro

$query = "INSERT INTO tbl_pedidos_venda (numero_pedido,data_registro,id_vendedor,situacao,id_cliente,faturamento) VALUES ('".$numero_pedido."', '".$data_registro."', '$id_vendedor' , '".$situacao."' ,'$id_cliente',0)";

// $query = "INSERT INTO tbl_users (registro, tipopessoa, nome, fantasia, email, telefone) 
// VALUES ( now(), '".$tipopessoa."', '".$nome."', '".$fantasia."', '".$email."', '".$telefone."')";

if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Pedido $numero_pedido. id_cliente $id_cliente. Data: $data_registro', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
    echo "erro";
}


?>