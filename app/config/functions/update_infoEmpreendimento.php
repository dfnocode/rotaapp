<?php

include "../database/conexao.php"; //Conexão

//Sessão usuário
session_start();
$login = $_SESSION['email'];

//Dados do formulário
$nome = $_POST['nome'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$id_empreendimento = $_POST['codigo'];

$query = "UPDATE tbl_empreendimento SET 
                    nome = '".$nome."',
                    cep = '".$cep."',
                    logradouro = '".$rua."',
                    bairro = '".$bairro."',
                    cidade = '".$cidade."',
                    uf = '".$uf."',
                    latitude = '".$latitude."',
                    longitude = '".$longitude."'
         WHERE id = '".$id_empreendimento."'";

if(mysqli_query($conexao,$query)){
    echo "sucesso";
}else {
    echo "erro";
}