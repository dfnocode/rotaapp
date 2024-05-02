<?php

include "../../config/database/conexao.php"; //Conexão

$idEmpreendimento =  $_POST['id_empreendimento']; 

$query = "SELECT id, nome, cep, informacoes, logradouro, bairro, cidade, uf, latitude, longitude FROM tbl_empreendimento WHERE id = '".$idEmpreendimento."'";
$result = mysqli_query($conexao, $query);
while($row = mysqli_fetch_assoc($result)):
    $id_empreendimento = $row['id'];
    $nome = $row['nome'];
    $cep = $row['cep'];
    $informacoes = $row['informacoes'];
    $logradouro = $row['logradouro'];
    $bairro = $row['bairro'];
    $cidade = $row['cidade'];
    $uf = $row['uf'];
    $latitude = $row['latitude'];
    $longitude = $row['longitude'];

endwhile;
    
?>