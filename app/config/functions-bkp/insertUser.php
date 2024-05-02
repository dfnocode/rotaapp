<?php

include "../../config/database/conexao.php"; //Conexão


$id_pessoa = $_POST['id_pessoa'];
$login = $_POST['email'];
$password = sha1($_POST['senha']);
$grupo = $_POST['grupo'];

$consulta = "SELECT * FROM tbl_usuarios WHERE login = '$login'";
$result   = mysqli_query($conexao,$consulta);
$total    = mysqli_num_rows($result);

if($total == 1){
    $query = "UPDATE tbl_usuarios SET
                login = '$login',
                id_grupo = '$grupo',
                senha = '$password'
                WHERE id_pessoa = '$id_pessoa'";
    if(mysqli_query($conexao,$query)){
        echo 'update';
    }else {
        echo $query;
    }                
}else{
    $query = "INSERT INTO tbl_usuarios 
                (login, id_grupo, id_pessoa, senha) VALUES
                ('".$login."', '".$grupo."', '".$id_pessoa."', '".$password."')";
    
    if(mysqli_query($conexao,$query)){
        echo "sucesso";
    }else{
        echo $query;
    }

}


