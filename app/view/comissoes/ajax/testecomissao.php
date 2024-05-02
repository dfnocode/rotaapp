<?php
 if(isset($_GET['idvendedor'])) {
$vendedor = $_GET['idvendedor'];
 }
if(isset($_GET['inicio'])) { 
$inicio = $_GET['inicio'];
}
if(isset($_GET['fim'])){ 
    $fim = $_GET['fim'];
 }


/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Easy set variables
 */
 
// DB table to use
$table = 'vs_todos_pedidos_filter';
 
// Table's primary key
$primaryKey = 'pedido';
 
// Array of database columns which should be read and sent back to DataTables.
// The `db` parameter represents the column name in the database, while the `dt`
// parameter represents the DataTables column identifier. In this case object
// parameter names
$columns = array(
    array( 'db' => 'pedido', 'dt' => 'pedido' ),
    array(
        'db'        => 'datavenda',
        'dt'        => 'datavenda',
        'formatter' => function( $d, $row ) {
            return date( 'd/m/Y', strtotime($d));
        }
    ),
    array(
        'db'        => 'dataentrega',
        'dt'        => 'dataentrega',
        'formatter' => function( $d, $row ) {
            return date( 'd/m/Y', strtotime($d));
        }
    ),
    array( 'db' => 'vendedor',  'dt' => 'vendedor' ),
    array( 'db' => 'nomecliente',   'dt' => 'nomecliente' ),
    array( 'db' => 'situacao',     'dt' => 'situacao' ),
    array( 'db' => 'valorpedido',   'dt' => 'valorpedido' ),
    array( 'db' => 'comissao',     'dt' => 'comissao' )
   
);
 
// SQL server connection information
$sql_details = array(
    'user' => 'root',
    'pass' => 'root',
    'db'   => 'rotadb24',
    'host' => 'localhost:10040'
);
 
 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * If you just want to use the basic configuration for DataTables with PHP
 * server-side, there is no need to edit below this line.
 */
 
require( 'ssp.class.php' );

if (isset($_GET['idvendedor']) and trim($vendedor) != ''){
    if((isset($_GET['inicio']) and trim($inicio) != '') and (isset($_GET['fim']) and trim($fim) != '')){
        echo json_encode(SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, "idvendedor=$vendedor AND datavenda >= '$inicio' AND datavenda <= '$fim'" ));
    }
    else {
        echo json_encode(SSP::complex( $_GET, $sql_details, $table, $primaryKey, $columns, null, "idvendedor=$vendedor" ));
    }
}
   
else {
    
    echo json_encode(SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )); 
}

