<?php

$queryLista  = "SELECT
                    usuarios.id_usuario AS codigo,
                    pessoa.nome AS nome,
                    agencia.id AS codigoAgencia,
                    agencia.nome AS nomeAgencia

                FROM tbl_usuarios AS usuarios

                INNER JOIN tbl_pessoas AS pessoa
                    ON (pessoa.id = usuarios.id_pessoa)
                INNER JOIN tbl_grupousuarios AS tipo
                    ON (tipo.id_grupo = usuarios.id_grupo)
                LEFT JOIN tbl_agenciaCorretor AS agenciaCorretor
                    ON (agenciaCorretor.id_corretor = usuarios.id_usuario)
                LEFT JOIN tbl_agencias as agencia
                    ON (agencia.id = agenciaCorretor.id_agencia)

                WHERE usuarios.id_grupo = 2";

$result = mysqli_query($conexao,$queryLista); 

?>