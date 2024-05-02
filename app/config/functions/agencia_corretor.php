<?php

include "../../config/database/conexao.php"; //Conexão


$id_corretor = $_POST['id_corretor'];
$id_agencia = $_POST['agencia'];


$consulta = "SELECT * FROM tbl_agenciaCorretor WHERE id_corretor = '$id_corretor'";
$result   = mysqli_query($conexao,$consulta);
$total    = mysqli_num_rows($result);

if($total == 1){
    $query = "UPDATE tbl_agenciaCorretor SET
                id_agencia = '$id_agencia'
                WHERE id_corretor = '$id_corretor'";
    if(mysqli_query($conexao,$query)){
        echo 'update';
    }else {
        echo $query;
    }                
}else{
    $query = "INSERT INTO tbl_agenciaCorretor 
                (id_corretor, id_agencia) VALUES
                ('".$id_corretor."', '".$id_agencia."')";
    
    if(mysqli_query($conexao,$query)){
        echo "sucesso";
    }else{
        echo $query;
    }

}


