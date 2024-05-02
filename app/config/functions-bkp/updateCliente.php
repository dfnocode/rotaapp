<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_cliente'];
$registro = $_POST['registro_cliente'];
$nome = $_POST['nome_cliente'];
$fantasia = $_POST['fantasia_cliente'];
$email = $_POST['email_cliente'];
$telefone = $_POST['telefone_cliente'];

$cnpjcpf = $_POST['cnpjcpf_cliente'];
$idrg = $_POST['idrg_cliente'];
$endereco = $_POST['endereco_cliente'];
$numero = $_POST['numero_cliente'];
$bairro = $_POST['bairro_cliente'];
$cidade = $_POST['cidade_cliente'];

$uf = $_POST['uf_cliente'];
$complemento = $_POST['complemento_cliente'];
$cep = $_POST['cep_cliente'];
$situacao = $_POST['situacao_cliente'];
$celular = $_POST['celular_cliente'];
$contatos = $_POST['contatos_cliente'];

$fax = $_POST['fax_cliente'];
$website = $_POST['website_cliente'];
$obs = $_POST['obs_cliente'];
$emailnfe = $_POST['emailnfe_cliente'];



// Insere Registro
$query = "UPDATE tbl_users set registro='$registro', nome='$nome', fantasia='$fantasia', email='$email', telefone='$telefone', cnpjcpf='$cnpjcpf', idrg='$idrg', endereco='$endereco', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$uf', complemento='$complemento', cep='$cep', situacao='$situacao', celular='$celular', contatos='$contatos', fax='$fax', website='$website', obs='$obs', emailnfe='$emailnfe' WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou o cliente ($id) - $nome', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
}

?>