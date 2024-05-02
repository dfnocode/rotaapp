<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
session_start();
$q = $_GET['q'];


$con = mysqli_connect('localhost','root','','rotadb24');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");

if ($_SESSION['funcao'] == 'Vendedor'){
  $sql="SELECT * FROM vs_vendas WHERE idVendedor = ".$_SESSION['id_usuario']." AND Situação = '$q' order by Data desc";
} else {
  $sql="SELECT * FROM vs_vendas WHERE Situação = '$q' order by Data desc";
}

$result = mysqli_query($con,$sql);

echo "<table id='pedidosituacao'>
<tr>
<th>Número</th>
<th>Data</th>
<th>Situação</th>
<th>Cliente</th>
<th>Total</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Número'] . "</td>";
  echo "<td>" . date( 'd/m/Y', strtotime($row['Data'])) . "</td>";
  echo "<td>" . $row['Situação'] . "</td>";
  echo "<td>" . $row['Cliente'] . "</td>";
  echo "<td>" . $row['Total'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>