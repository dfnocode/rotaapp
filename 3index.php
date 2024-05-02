<?php
header('Location: http://localhost/rotaapp/public/', true, 301);

header('Location: app/login/auth/login.php'); // Redireciona para o Login

$REQUEST_URI = filter_input(INPUT_SERVER, 'REQUEST_URI');
$INITE = strpos($REQUEST_URI, '?');


echo 'REQUEST_URI '.$REQUEST_URI;
echo '<br>INITE '.$INITE;


if ($INITE):
    $REQUEST_URI = substr($REQUEST_URI, 0, $INITE);
endif;


$REQUEST_URI_PASTA = substr($REQUEST_URI, 1);
$URL = explode('/', $REQUEST_URI_PASTA);
$URL[0] = ($URL[0] != '' ? $URL[0] : 'app');

 
if (file_exists('app' . $URL[0] . '.php')):
    require('app/' . $URL[0] . '.php');
    header('Location: /public/app/login/'); // Redireciona para o Login
elseif (is_dir('app/' . $URL[0])):
    if (isset($URL[1]) &&  file_exists('app/' . $URL[0] . '/' . $URL[0] . '/' . $URL[1] . '.php')):
        require('app/' . $URL[0] . '/'  . $URL[0] . '/' . $URL[1] . '.php');
    else:
        require('app/error/404.php');
    endif;
else:
    require('app/error/404.php');
endif;