

<?php 
require_once '../dompdf/autoload.inc.php';
//include "../../../../../wp-load.php";
function converteDinheiro($num)
{
  $str = (string)$num;
  //echo $str;

  $ntotal = number_format($str, 2);
  $stotal = (string)$ntotal;
  $arrTotal = explode(".", $stotal);
  $esquerdo = $arrTotal[0];
  $esquerdo = str_replace(",", ".", $esquerdo);
  $direito = $arrTotal[1];
  $final = $esquerdo . ',' . $direito;
  return trim($final);
}


use Dompdf\Dompdf;
use Dompdf\Options;
//if posted data is not empty
$options = new Options();
$options->set('defaultFont', 'Courier');
$options->set('isRemoteEnabled', TRUE);
$options->set('debugKeepTemp', TRUE);
$options->set('isHtml5ParserEnabled', TRUE);
$options->set('isPhpEnabled',TRUE);
$options->set('chroot', '/');
$options->setIsRemoteEnabled(true);
  ob_start(); 


 


	require_once './config/db-config.php'; 
	
	$db = new DBController();
	$conn = $db->connect();
    require_once './controller/itens-controller.php';
    $numero = $num_pedido = $_GET['n'];

	$dCtrl  = new ItensController($conn, $num_pedido);
	$itens = $dCtrl->index();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pedido de Venda: <?php echo $num_pedido; ?></title>
	<!-- Bootstrap 4 CSS  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php 

include "../../../config/database/conexao.php"; //Conexão


// PEGA OS DADOS PARA O FORM DADOS DO CLIENTE
    $query = "SELECT clientes.id as id, clientes.nome as nome, clientes.email as email, clientes.fantasia as fantasia, clientes.telefone as telefone, clientes.cnpjcpf as cnpjcpf, clientes.idrg as idrg, clientes.endereco as endereco
    , clientes.numero as numero, clientes.bairro as bairro,
    clientes.complemento as complemento, clientes.cidade as cidade, clientes.estado as estado, clientes.cep as cep
    FROM clientes, tbl_pedidos_venda 
    WHERE clientes.id = tbl_pedidos_venda.id_cliente AND tbl_pedidos_venda.numero_pedido = '$num_pedido'";
    
    $result = mysqli_query($conexao,$query); 
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
        $idcliente = $row['id'];
        $nome_cliente = $row['nome'];
        $fantasia_c = $row['fantasia'];
        $email_c = $row['email'];
        $telefone_c = $row['telefone'];
        $cnpjcpf_c = $row['cnpjcpf'];
        $idrg_c = $row['idrg'];
        $endereco = $row['endereco'];
        $num_end = $row['numero'];
        $bairro = $row['bairro'];
        $complemento = $row['complemento'];
        $cidade = $row['cidade'];
        $estado = $row['estado'];
        $cep = $row['cep'];
    endwhile; 
    ?>   
    <div class="row">
        <div class="col-lg-6">
            <?php
            echo "<h2>Pedido: $numero</h2><br>";       
            echo '<h3>Cliente</h3><i style="font-size: 11px;">'.$fantasia_c.'</i><br>';
            echo '<b>'.$nome_cliente.'</b><br>';        
            echo '<b>Endereço: </b>'.$endereco.', '.$num_end.' '.$bairro.' '.$complemento.'<br>';
            echo $cidade.' - '.$estado.' CEP: '.$cep.'<br>';
            echo '<b>Tel: </b>'.$telefone_c.' - '.$email_c.'<br>';
            
            if (strlen($cnpjcpf_c)==14){
                echo '<b>CPF: </b>'.$cnpjcpf_c.'<br>';     
            }
            else {
                echo '<b>CPNJ: </b>'.$cnpjcpf_c.'<br>';   
            }
            echo '<b>IE/RG: </b>'.$idrg_c.'<br>';        
        ?> 
        </div>  
        <div class="col-lg-6"><img src="./images/logo.png">
        </div>
    </div>	  
	
		<div class="row">
			<div class="col-lg-12">
				<table class="table table-bordered table-hovered table-striped" id="productTable">
					<thead>
						<tr>
						<th> Produto </th>
						<th> Unidade </th>
						<th> Preço </th>
						<th> Quantidade </th>
						<th> Subtotal </th>	
						</tr>				
					</thead>
					<tbody>
					<?php 
						foreach($itens as $product) : ?>
							<tr>
								<td> <?php echo $product['Produto']; ?> </td>
								<td> <?php echo $product['Unidade']; ?> </td>
								<td> <?php echo converteDinheiro($product['Preco']); ?> </td>
								<td> <?php echo $product['Quantidade']; ?> </td>
								<td> <?php echo converteDinheiro($product['Subtotal']); ?> </td>							
							</tr>
						<?php endforeach; ?>	
					</tbody>	
				</table>
			</div>
		</div>
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        });
    </script>

</body>
</html>
<?php
		$html = ob_get_contents(); 
				ob_end_flush();
        $dompdf = new DOMPDF($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'Portrait');
        $dompdf->render();
        ob_end_clean();
        $namefile = "pedido-$num_pedido.pdf";
        $dompdf->stream($namefile, array("Attachment" => false));
?>