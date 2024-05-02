<?php
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

$num = $_GET['num'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://rotaapp.local/sys/app/view/fatura-pedidos-de-venda/exemplo.html');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$my_html = curl_exec($ch);
curl_close($ch);



$dompdf = new DOMPDF();
$dompdf->loadHtml($my_html);
/* $dompdf->loadHtml(file_get_contents("https://rotaapp.local/sys/app/view/fatura-pedidos-de-venda/tabela.php?num=8005")); */
$dompdf->render();
$dompdf->stream("sample.pdf", array('Attachment'=>'0'));


?>