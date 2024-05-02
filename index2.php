<?php
$file_location = $_SERVER['DOCUMENT_ROOT'].'/wp-load.php';

include $file_location;

//echo $file_location;

//verifica se está logado
session_start();

if ( is_user_logged_in() ) {
    //echo 'logado';
    header('Location: /app/view/inicio/'); // Redireciona para o Login
    exit;

}
else {
    //echo 'deslogado';
    session_destroy();
    header( "Location: /app/" );
    exit;
} 