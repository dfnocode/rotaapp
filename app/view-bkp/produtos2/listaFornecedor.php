<?php

include "../../config/database/conexao.php"; //Conexão

$query = "SELECT id, nome FROM tbl_fornecedores";

$result = mysqli_query($conexao,$query);

?>