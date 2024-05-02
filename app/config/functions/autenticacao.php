<?php

session_start();

if(!isset($_SESSION['id_user'])){
    // Usuário não autenticado
    session_destroy();
    $url =  "{$_SERVER['REQUEST_URI']}";
    if($url != '/app/login/'){
        header('Location: https://rotaapp.local/sys/app/login/');
    }      
}else{
    $url =  "{$_SERVER['REQUEST_URI']}";
    if($url == '/app/login/'){
        header('Location: https://rotaapp.local/sys/app/view/inicio/');
    }
    
    
}

?>