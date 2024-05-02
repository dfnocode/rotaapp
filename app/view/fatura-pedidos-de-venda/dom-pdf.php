<?php
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
/* $html = '<ul class="list-inline">
<li class="list-inline-item">a</li>
<li class="list-inline-item">b</li>
<li class="list-inline-item">c</li>
</ul>'; */


$html = file_get_contents('exemplo.html');

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>

