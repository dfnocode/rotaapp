<?php
session_start();
$num = $_GET['num'];

  $con = mysqli_connect('localhost','root','','rotadb24');
  if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
  }
$sql = "SELECT vendedores.id, vendedores.nome FROM vendedores, vs_vendas WHERE vendedores.id = vs_vendas.idVendedor AND vs_vendas.Número = $num";
$sth = mysqli_query($con, $sql);
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows[0]);


?>