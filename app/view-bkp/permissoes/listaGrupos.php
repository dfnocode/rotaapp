
<?php

include "../../config/database/conexao.php"; //Conexão

$queryBusca = "SELECT id_grupo, nome FROM tbl_grupousuarios";
$result = mysqli_query($conexao,$queryBusca);

?>