<?php
include "../../config/database/conexao.php"; //Conexão

$query = "SELECT  id, nome, taxa from tbl_formaPagamento";

$resultFtp = mysqli_query($conexao,$query);

?>