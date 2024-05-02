
<?php

include "../../config/database/conexao.php"; //Conexão

$idEmpreendimento =  $_POST['id_empreendimento']; 

$queryProximidade = "SELECT id, proximidade, id_empreendimento FROM tbl_proximidades WHERE id_empreendimento = '".$idEmpreendimento."'";
$resultProximidade = mysqli_query($conexao,$queryProximidade);

?>