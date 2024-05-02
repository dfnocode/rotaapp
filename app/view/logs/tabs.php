<?php

include "../../config/database/conexao.php"; //Conexão

?>

<!-- general form elements -->
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Logs</h3>
    </div>
    <div class="card-body table-responsive p-0" style="height: 300px;">
        <?php $lista = "SELECT id_log, acao,  dt_criacao FROM tbl_logs WHERE dt_criacao BETWEEN '".$_POST['dataInicial']."' AND '".$_POST['dataFinal']."'";
        if($result = mysqli_query($conexao,$lista)){
           
                echo "<table class='table table-head-fixed text-nowrap'>";
                echo "<thead>";
                echo "<tr>";
                echo "<th>Data</th>";
                echo "<th>Informação</th>";
                echo "</tr>";
                echo "</thead>";
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>" . date( 'd-m-Y H:i:s', strtotime($row['dt_criacao'])) ."</td>";
                    echo "<td>" . $row['acao'] ."</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";
            
            } else {
                echo "Não foi possível consultar o banco de dados ...";
                echo "<p>ERROR: Could not able to execute $lista. " . mysqli_error($mysqli) . "</p>";
            } ?>
    </div>
</div>