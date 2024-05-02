<?php

include "../../config/database/conexao.php"; //Conexão

$query = "SELECT id, nome FROM tbl_amenidades";

$result = mysqli_query($conexao,$query);

?>