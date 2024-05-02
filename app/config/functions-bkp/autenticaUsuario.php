<?php

session_start();

if(!isset($_SESSION['id_usuario'])){
    // Usuário não autenticado
    session_destroy();
    $url =  "{$_SERVER['REQUEST_URI']}";
    if($url != '/app/login/auth/'){
        header('Location: http://localhost/rota/app/login/auth/');
    }      
}else{
    $url =  "{$_SERVER['REQUEST_URI']}";
    if($url == '/app/login/auth/'){
        header('Location: http://localhost/rota/app/view/inicio/');
    }
    
    
}

?>