<?php
include_once("db_connect.php");
// initilize all variables
$params = $columns = $totalRecords = $data = array();
$params = $_REQUEST;
//define index of columns
$columns = array( 
	0 =>'id',
	1 =>'registro', 
	3 => 'nome',
	4 => 'fantasia'

);
$where = $sqlTot = $sqlRec = "";
// getting total number records from table without any search
$sql = "SELECT * FROM `tbl_users` ";
$sqlTot .= $sql;
$sqlRec .= $sql;
$sqlRec .=  " ORDER BY id";
$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));
$totalRecords = mysqli_num_rows($queryTot);
$queryRecords = mysqli_query($conn, $sqlRec) or die("error to fetch employees data");
// iterate on results row and create new index array of data
while( $row = mysqli_fetch_row($queryRecords) ) { 
	$data[] = $row;
}	
$json_data = array(
		"draw"            => 1,   
		"recordsTotal"    => intval( $totalRecords ),  
		"recordsFiltered" => intval($totalRecords),
		"data"            => $data
		);
// send data as json format
echo json_encode($json_data);  
?>

