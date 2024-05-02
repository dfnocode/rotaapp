<?php
     //$servidor = "mysql.jcferias.com.br";

     //SERVIDOR GOOGLE CLOUD TESTES
/*      $servidor = "35.239.195.119";
     $bancoDeDados = "laraveldb";
     $usuario = "rotadb24";
     $senha = "buceta";
 */

$servidor = "localhost";
$bancoDeDados = "rotadb24";
$usuario = "root";
$senha = "";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDeDados);
    mysqli_set_charset($conexao,"utf8");
    
?>