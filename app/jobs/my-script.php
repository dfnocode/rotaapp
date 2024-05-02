<?php



echo 'hello <br>';

$date = new DateTime();

echo date_format($date, 'g:ia \o\n l jS F Y');

$data_atual = $date->format('d/m/Y H:i:s');
$file = 'logs/hello-'.$date->format('d-m-Y-H.i.s').'.txt';
$msg = "Hello: $data_atual";

file_put_contents( $file, $msg );