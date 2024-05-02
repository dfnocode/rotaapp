<?php
include "../../config/database/conexao.php"; //Conexão

$query = "SELECT  id, nome, data_inicio, data_fim from tbl_eventos";

$resultEventos = mysqli_query($conexao,$query);

?>