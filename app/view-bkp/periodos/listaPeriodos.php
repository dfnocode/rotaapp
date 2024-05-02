<?php
include "../../config/database/conexao.php"; //Conexão

$query = "SELECT  id, nome, data_inicio, data_fim from tbl_periodos";

$resultPeriodos = mysqli_query($conexao,$query);

?>