<?php

include "../../config/database/conexao.php"; //Conexão

$id_grupo =  $_POST['id_grupo'];

$queryMenus = "SELECT 
    permissao.id,
    permissao.nome_permissao,
    permissao_grupo.id_grupo
FROM tbl_permissao as permissao
LEFT JOIN tbl_permissao_grupo as permissao_grupo
ON (if(permissao_grupo.id_grupo = null,0, permissao_grupo.id_grupo) = if(permissao.id = null,0,permissao.id)
    AND permissao_grupo.id_grupo = '".$id_grupo."'
    )";

$resultPermissoes = mysqli_query($conexao, $queryMenus);