
<?php

include "../../config/database/conexao.php"; //Conexão

$queryBusca = "SELECT id, nome FROM tbl_empreendimento";
$result = mysqli_query($conexao,$queryBusca);

?>