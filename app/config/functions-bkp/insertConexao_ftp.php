<?php 

include "../../config/database/conexao.php"; //Conexão

session_start();
//login autenticado
$login = $_SESSION['email'];

//Dados do formulário
$host = $_POST['host'];
$login = $_POST['user'];
$password = $_POST['pass'];

//Consulta se já existe uma conexão
$queryConsulta = "SELECT * FROM tbl_ftp";
$resultado = mysqli_query($conexao,$queryConsulta);
$totalres = mysqli_num_rows($resultado);


if ($totalres == 1){
    echo "existe";
}else{
    // Insere registro
    $query = "INSERT INTO tbl_ftp (host,usuario,senha) VALUES ('$host', '$login', '$password')";
    if(mysqli_query($conexao, $query)){

        // Registra Log
        $queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login cadastrou uma nova conexão do servidor ftp.')";
        mysqli_query($conexao,$queryLog);
        
        echo "sucesso";

    }else{
        echo "erro";
    }
}
