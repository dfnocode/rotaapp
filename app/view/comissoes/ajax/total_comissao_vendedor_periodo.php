<?php
session_start();
if(isset($_GET['inicio']) and isset($_GET['fim']) and isset($_GET['idvendedor'])) {
    $dataini = $_GET['inicio'];
    $datafim = $_GET['fim'];
    $vendedor = $_GET['idvendedor'];
    
    //inicio 2021-03-01
    //fim 2021-04-01
    $sql = "SELECT vendedor as Vendedor, sum(valorpedido) as ValorFaturado,
    sum(comissao) as SaldoComissao
    FROM vs_todos_pedidos_filter
    WHERE datavenda between '$dataini' and '$datafim'
    AND idvendedor = $vendedor"; 
    
    $date = new DateTime($dataini);
    $dataini = $date->format('d/m/Y');
    $date = new DateTime($datafim);
    $datafim = $date->format('d/m/Y');
}
else {
    $sql = "SELECT * FROM vs_todos_pedidos_filter"; 
}

  $con = mysqli_connect('localhost','root','','rotadb24');
  if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
  }

 


$sth = mysqli_query($con, $sql);

$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
if(isset($dataini)) $rows[0]['DataInicial'] = $dataini;
if(isset($datafim)) $rows[0]['DataFinal'] = $datafim;

print json_encode($rows);

?>