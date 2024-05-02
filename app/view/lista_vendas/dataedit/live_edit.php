<?php
include_once("db_connect.php");
$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['produto'])) {
		$update_field.= "produto='".$input['produto']."'";
	} else if(isset($input['unidade'])) {
		$update_field.= "unidade='".$input['unidade']."'";
	} else if(isset($input['preço'])) {
		$update_field.= "preço='".$input['preço']."'";
	} else if(isset($input['quantidade'])) {
		$update_field.= "quantidade='".$input['quantidade']."'";
	} else if(isset($input['Desconto'])) {
		$update_field.= "Desconto='".$input['Desconto']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE vs_itens_pedido_venda SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}


