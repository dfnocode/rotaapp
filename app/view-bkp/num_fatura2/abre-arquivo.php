<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
    <?php

        function writelog ($str,$arqstr) {
            $open = fopen ($arqstr, "a");
            fwrite ($open, $str."\n");
            fclose ($open);
        }

        function readlog ($pathfile) {
        $open = fopen($pathfile,'r+');        
        $result = fread($open,filesize($pathfile));
        fclose($open);
        return ($result); 
        }

        echo (readlog('config.txt'));

    ?>
    </body>
</html>