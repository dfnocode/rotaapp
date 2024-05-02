<?php

include_once "../config/database/conexao.php";

include_once "funcoes.php";
?>
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
        <link rel="stylesheet" href="styles.css">

        
        <link href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/toasty.css" rel="stylesheet" />
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        
        
    </head>
    <body onload="loadtoast()">
   
   <?php     
        $hora_atual = new DateTime();
        $UTC_Time   = $hora_atual->format('Y-m-d H:i:s');

        $hora_local = TimeConvertionLocalHour($UTC_Time);
        echo "<br> Hora Local ".$hora_local.'<br>';

        $evento = verifica_evento_agenda($conexao,$hora_local);
        if($evento == '0'){
            echo 'Não existe evento<br>';
            $date = new DateTime();
            $data_atual = $date->format('d/m/Y H:i:s');
            //$file = 'logs/sem-evento-'.$date->format('d-m-Y-H.i.s').'.txt';
            $file = 'logs/sem-evento.txt';
            $msg = "Sem evento: $data_atual \n";


            file_put_contents( $file, $msg, FILE_APPEND );
        }
        else {
            echo 'Existe evento<br>';
            echo '<script>toast.success("This toast notification with sound");</script>';
            print_r($evento[0]);   
            
            $date = new DateTime();
            //echo date_format($date, 'g:ia \o\n l jS F Y');
            for($i=0; $i<count($evento); $i++) {
                $hora_verificacao_cron = $date->format('d/m/Y H:i:s');

                //$file = 'logs/evento-'.$date->format('d-m-Y-H.i.s').'.txt';
                $file = 'logs/evento-'.$evento[$i]['id'].'.txt';
                $msg = "CronJob: $hora_verificacao_cron \n";
                $msg .= 'Title: '.$evento[$i]['title']."\n";
                $msg .= 'Description: '.$evento[$i]['description']."\n";
                $msg .= 'Início: '.$evento[$i]['start']."\n";
                $msg .= 'Fim: '.$evento[$i]['end']."\n";
            
            }
            file_put_contents( $file, $msg );

        }
    ?>

 <div></div>   
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center"> <button type="button" id="successtoast" class="btn btn-success btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification success</button> <button type="button" id="infotoast" class="btn btn-info btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification info</button> <button type="button" id="warningtoast" class="btn btn-warning btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification warning</button> <button type="button" id="errortoast" class="btn btn-primary btn-icon-text"> <i class="fa fa-check btn-icon-prepend"></i>Toast Notification error</button> </div>
    </div>
</div>


        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/toasty.js"></script>

<script>
$(document).ready(function() {

//success toast



var options = {
autoClose: true,
progressBar: true,
enableSounds: true,
sounds: {

info: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233294/info.mp3",
// path to sound for successfull message:
success: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233524/success.mp3",
// path to sound for warn message:
warning: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233563/warning.mp3",
// path to sound for error message:
error: "https://res.cloudinary.com/dxfq3iotg/video/upload/v1557233574/error.mp3",
},
};

var toast = new Toasty(options);
toast.configure(options);


function loadtoast(){
  
    toast.error("This toast notification with sound");
}


$('#successtoast').click(function() {

toast.success("This toast notification with sound");

});

$('#infotoast').click(function() {

toast.info("This toast notification with sound");

});

$('#warningtoast').click(function() {

toast.warning("This toast notification with sound");

});

$('#errortoast').click(function() {

toast.error("This toast notification with sound");

});

});
</script>




    
    </body>
</html>