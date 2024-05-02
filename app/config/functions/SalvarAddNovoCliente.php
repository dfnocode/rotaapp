<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['vendedor'];
$tipopessoa = 'Cliente';
//Recebe Valor
$nome = $_POST['nome_novo_cliente'];
$fantasia = $_POST['fantasia_novo_cliente'];
$email = $_POST['email_novo_cliente2'];
$telefone = $_POST['telefone_novo_cliente'];


$registro = $_POST['registro_novo_cliente'];


$cnpj_cliente = $_POST['cnpj_novo_cliente'];
$cpf_cliente = $_POST['cpf_novo_cliente'];
if($cnpj_cliente != '') {
    $cnpjcpf = $cnpj_cliente;
}
if($cpf_cliente != '') {
    $cnpjcpf = $cpf_cliente;
}

$idrg = $_POST['idrg_novo_cliente'];
$endereco = $_POST['endereco_novo_cliente'];
$numero = $_POST['numero_novo_cliente'];
$bairro = $_POST['bairro_novo_cliente'];
$cidade = $_POST['cidade_novo_cliente'];

$uf = $_POST['uf_novo_cliente'];
$complemento = $_POST['complemento_novo_cliente'];
$cep = $_POST['cep_novo_cliente'];
$situacao = $_POST['optradio_novo_cliente'];

$celular = $_POST['celular_novo_cliente'];
$contatos = $_POST['contatos_novo_cliente'];

$fax = $_POST['fax_novo_cliente'];
$website = $_POST['website_novo_cliente'];
$obs = $_POST['obs_novo_cliente'];
$emailnfe = $_POST['emailnfe_novo_cliente'];



// Insere Registro
$query = "INSERT INTO tbl_users (registro, tipopessoa, nome, fantasia, email, telefone, cnpjcpf, idrg, endereco, numero, bairro, estado, complemento, cep, contatos, fax, website, obs, emailnfe, situacao, vendedor) VALUES ('".$registro."', '".$tipopessoa."', '".$nome."', '".$fantasia."', '".$email."', '".$telefone."', '".$cnpjcpf."', '".$idrg."', '".$endereco."', '".$numero."', '".$bairro."', '".$uf."','".$complemento."', '".$cep."', '".$contatos."', '".$fax."', '".$website."', '".$obs."', '".$emailnfe."', '".$situacao."','".$login."')";

if(mysqli_query($conexao, $query)){
    // Registra Log
 
    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login cadastrou o cliente $nome.', '".$login."')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo "erro";
    echo $query;
}


?>