<?php

include "../../config/database/conexao.php"; //Conexão

$idEmpreendimento =  $_POST['id_empreendimento'];

$queryAmenidades = "SELECT 
                            amenidades.id,
                            amenidades.nome,
                            am_Empreendimento.id_empreendimento

                    FROM tbl_amenidades as amenidades 
                    LEFT JOIN  tbl_amenidades_Empreendimento as am_Empreendimento  

                            ON (	
                                if(am_Empreendimento.id_amenidade = null, 0, am_Empreendimento.id_amenidade) = if(amenidades.id = null, 0, amenidades.id)
                                AND am_Empreendimento.id_empreendimento = '".$idEmpreendimento."'
                            )";
$resultAmenidades = mysqli_query($conexao, $queryAmenidades);
