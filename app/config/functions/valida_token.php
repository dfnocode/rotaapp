<?php

$path = dirname(__FILE__);
$path .= '/../database/conexao.php';
include_once($path);

if(isset($_GET['tk'])){

    $token = $_GET['tk'];
    
    ///Verifica Token
    $queryToken = "SELECT * FROM tbl_usuarios WHERE token = '$token'";
    $result = mysqli_query($conexao,$queryToken);
    $numRows = mysqli_num_rows($result);

    if($numRows == 0){
        
        $resultado =  0;
        
    }else{
        $resultado = 1;
       
    }

}else{
    $resultado = 2;
}