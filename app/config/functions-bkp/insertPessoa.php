<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

$nome = $_POST['nome'];
$cpf  = $_POST['cpf'];
$nascimento = $_POST['nascimento'];
$rg = $_POST['rg'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$complemento = $_POST['complemento'];

///CONSULTA CPF
$consultaCPF = "SELECT * FROM tbl_pessoas WHERE cpf = '$cpf'";
$result1 = mysqli_query($conexao,$consultaCPF);
$totalCPF = mysqli_num_rows($result1);

///CONSULTA EMAIL
$consultaEmail = "SELECT * FROM tbl_pessoas WHERE email = '$email'";
$result2 = mysqli_query($conexao,$consultaEmail);
$totalEmail = mysqli_num_rows($result2);

if ($totalCPF == 1)
{
    echo "cpf";
}elseif ($totalEmail == 1){
    echo "email";
}else{
    
    $query = "INSERT INTO tbl_pessoas (nome, cpf, rg, nascimento, email, telefone, cep, logradouro, bairro, cidade, uf, complemento) 
    VALUES ('".$nome."', '".$cpf."', '".$rg."', '".$nascimento."', '".$email."', '".$telefone."', '".$cep."', '".$rua."', '".$bairro."', '".$cidade."', '".$uf."', '".$complemento."')";
    if(mysqli_query($conexao, $query))
    {
        echo 'sucesso';
    }else{
        echo $query;
    }
}
