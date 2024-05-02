<?php


include "../../config/database/conexao.php"; //Conexão

$query_tarifas = "SELECT  id, min_diaria, tarifa FROM tbl_tarifasPeriodo WHERE id_periodo = '$id_periodo' ";

$resultTarifas = mysqli_query($conexao,$query_tarifas);

?>