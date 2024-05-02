<?php


$query = "SELECT  user.id_usuario as codigo, user.login as login, pessoa.nome  as nome 
            from tbl_usuarios as user
            inner join tbl_pessoas as pessoa
            ON (pessoa.id = user.id_pessoa)";

$resultUser = mysqli_query($conexao,$query);