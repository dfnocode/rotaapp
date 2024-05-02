<?php
     $servidor = "localhost";
     $bancoDeDados = "rotadb24";
     $usuario = "root";
     $senha = "";


    $conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDeDados);
    mysqli_set_charset($conexao,"utf8");
    
?>
