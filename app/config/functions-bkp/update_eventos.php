<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

//Recebe Valor
$nome = $_POST['nome_periodo'];
$tarifa = $_POST['tarifa_periodo'];
$dt_inicio = $_POST['dataInicio_periodo'];
$dt_fim = $_POST['dataFim_periodo'];
$id = $_POST['id_periodo'];
$diaria = $_POST['min_diaria_up'];

// Insere Registro
$query = "UPDATE tbl_eventos 
            SET
                 nome='$nome',
                 tarifa='$tarifa',
                 data_inicio='$dt_inicio',
                 data_fim='$dt_fim',
                 min_diaria='$diaria'

        WHERE id ='$id'";

if(mysqli_query($conexao, $query)){

    // Registra Log
    $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login Atualizou o evento ($nome) no sistema.')";
    mysqli_query($conexao,$queryLog);

    echo "sucesso";
}else{
    echo $query;
}