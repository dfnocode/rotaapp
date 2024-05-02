<?php

include "../database/conexao.php"; //Conexão

$password1 = $_POST['pass1'];
$password2 = $_POST['pass2'];
$token = $_POST['token'];

if($password1 != $password2){
    echo "nConfere";
}else {
    $query = "UPDATE tbl_usuarios SET senha = sha1('$password1') WHERE token ='$token'";
    if(mysqli_query($conexao,$query)){
        
        $varRush = date("Y-m-d H:i:s");
        $newToken = md5($varRush);

        $queryToken = "UPDATE tbl_usuarios SET token = '$newToken' WHERE token ='$token'";
        mysqli_query($conexao, $queryToken);
        
        echo "sucesso";
    }
}
