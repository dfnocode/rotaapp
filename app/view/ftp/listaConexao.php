<?php
include "../../config/database/conexao.php"; //Conexão

$query = "SELECT  host, usuario from tbl_ftp";

$resultFtp = mysqli_query($conexao,$query);

?>