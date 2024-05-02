<?php



include "../database/conexao.php"; //Conexão

$nome = $_POST['edit_nome'];
$cpf  = $_POST['edit_cpf'];
$rg = $_POST['edit_rg'];
$email = $_POST['edit_email'];
$telefone = $_POST['edit_telefone'];
$cep = $_POST['edit_cep'];
$rua = $_POST['edit_rua'];
$bairro = $_POST['edit_bairro'];
$cidade = $_POST['edit_cidade'];
$uf = $_POST['edit_uf'];
$complemento = $_POST['edit_complemento'];
$id = $_POST['id_cliente'];

$query = "UPDATE tbl_pessoas 
            SET 
                nome = '$nome', 
                cpf = '$cpf',
                rg = '$rg',
                email = '$email',
                telefone = '$telefone',
                cep = '$cep',
                logradouro = '$rua',
                bairro = '$bairro',
                cidade = '$cidade',
                uf = '$uf',
                complemento = '$complemento'
          WHERE id_pessoa = '$id'";
            
$result = mysqli_query($conexao, $query);
if(!$result){
    echo 'erro';
}else{
    echo 'sucesso';
}

