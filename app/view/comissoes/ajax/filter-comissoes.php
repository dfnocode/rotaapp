<?php
session_start();
if(isset($_GET['inicio']) and isset($_GET['fim']) and isset($_GET['idvendedor'])) {
    $dataini = $_GET['inicio'];
    $datafim = $_GET['fim'];
    $vendedor = $_GET['idvendedor'];
    //inicio 2021-03-01
    //fim 2021-04-01
    $sql = "SELECT * FROM vs_todos_pedidos_filter
    WHERE datavenda between '$dataini' and '$datafim'
    AND idvendedor = $vendedor"; 
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
print_r(json_encode($rows));

?>