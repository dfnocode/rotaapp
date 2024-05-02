<?php


include "../../config/database/conexao.php"; //Conexão

$query_tarifas = "SELECT  id, min_diaria, tarifa FROM tbl_tarifasEventos WHERE id_evento = '$id_evento' ";

$resultTarifas = mysqli_query($conexao,$query_tarifas);

?>