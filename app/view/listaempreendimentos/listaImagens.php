<?php

include "../../config/database/conexao.php"; //Conexão

$idEmpreendimento =  $_POST['id_empreendimento']; 

$queryImanges = "SELECT id_empreendimento, imagem FROM tbl_imagens_Empreendimento WHERE id_empreendimento = '".$idEmpreendimento."'";
$resultImagens = mysqli_query($conexao, $queryImanges);

?>