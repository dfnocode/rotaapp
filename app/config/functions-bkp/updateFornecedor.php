<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão


session_start();
//login autenticado
$login = $_SESSION['vendedor'];

//Recebe Valor

$id = $_POST['id_fornecedor'];
$registro = $_POST['registro_fornecedor'];
$nome = $_POST['nome_fornecedor'];
$fantasia = $_POST['fantasia_fornecedor'];
$email = $_POST['email_fornecedor'];
$telefone = $_POST['telefone_fornecedor'];

$cnpjcpf = $_POST['cnpjcpf_fornecedor'];
$idrg = $_POST['idrg_fornecedor'];
$endereco = $_POST['endereco_fornecedor'];
$numero = $_POST['numero_fornecedor'];
$bairro = $_POST['bairro_fornecedor'];
$cidade = $_POST['cidade_fornecedor'];

$uf = $_POST['uf_fornecedor'];
$complemento = $_POST['complemento_fornecedor'];
$cep = $_POST['cep_fornecedor'];
$situacao = $_POST['situacao_fornecedor'];
$celular = $_POST['celular_fornecedor'];
$contatos = $_POST['contatos_fornecedor'];

$fax = $_POST['fax_fornecedor'];
$website = $_POST['website_fornecedor'];
$obs = $_POST['obs_fornecedor'];
$emailnfe = $_POST['emailnfe_fornecedor'];



// Insere Registro
$query = "UPDATE tbl_users set registro='$registro', nome='$nome', fantasia='$fantasia', email='$email', telefone='$telefone', cnpjcpf='$cnpjcpf', idrg='$idrg', endereco='$endereco', numero='$numero', bairro='$bairro', cidade='$cidade', estado='$uf', complemento='$complemento', cep='$cep', situacao='$situacao', celular='$celular', contatos='$contatos', fax='$fax', website='$website', obs='$obs', emailnfe='$emailnfe' WHERE id = '$id'";

if(mysqli_query($conexao, $query)){
    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou o fornecedor ($id) - $nome', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
    echo $query;
}

?>