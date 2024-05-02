

<?php 

//PDF DO PEDIDO
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
    $num_pedido = $_GET['n'];

	$dCtrl  = new ItensController($conn, $num_pedido);
	$itens = $dCtrl->index();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Pedido de Venda: <?php echo $num_pedido; ?></title>
	<!-- Bootstrap 4 CSS  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles-fatura.css">
</head>
<body>
<?php 

include_once "../../../config/database/conexao.php"; //Conexão

include_once "./scripts/funcoes_pedido.php"; //funcoes extras DADOS DA FATURA / PEDIDO


// PEGA TODOS OS DADOS NECESSARIOS PARA FORMAR A FATURA DO PEDIDO
$dadosPedido = dados_do_pedido($conexao, $num_pedido);

// PEGA OS DADOS PARA O FORM DADOS DO CLIENTE
    $query = "SELECT clientes.id as id, clientes.nome as nome, clientes.email as email, clientes.fantasia as fantasia, clientes.telefone as telefone, clientes.cnpjcpf as cnpjcpf, clientes.idrg as idrg, clientes.endereco as endereco, clientes.numero as numero, clientes.bairro as bairro,
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
    <div class="corpo-pedido">
        <div class="row">
            <table>
                <tr>
                    <th class="titulo-fatura"><span class="logo-fatura"><img src="./images/logo.png"></span></th>
                    <th class="empresa-fatura">
                        <?php 
                            $empresa = dados_da_empresa($conexao);
                            echo '<span class="nome-empresa-sistema">'.$empresa['nome'].'</span><br />';   
                            echo '<span class="dados-empresa">'.$empresa['doc'].'<br />';
                            echo nl2br ($empresa['endereco']).'</span>';                         
                        ?>
                        
                    </th>            
                </tr>
            </table>
        </div>
        <div class="row" style="text-align: center;">
        <?php echo "<h5>PEDIDO</h5>"; ?>
        </div>
        <div class="row">
            <?php
            //PEGA O TIPO DE LANÇAMENTO
            $tp = $dadosPedido['tipo_pagamento'];
            $data_entrega = $dadosPedido['data_entrega'];
            $valor_total_fatura = $dadosPedido['valorpedido'];          
            ?>
            <table>
                <tr>
                    <th class="titulo-celula">
                    <span>Cliente</span>
                    </th>
                    <th class="titulo-celula"></th>
                </tr>
                <tr>
                    <td class="cliente-fatura">
                    <?php                 
                        echo '<i style="font-size: 11px;">'.$fantasia_c.'</i><br>';
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
                    </td>
                    <td>
                        <table class="num_pedido">
                            <tr>
                                <th>Nº Pedido:</th> 
                                <td><?php echo $num_pedido; ?></td>
                            </tr> 
                            <tr>
                                <th>Data:</th> 
                                <td><?php echo $dadosPedido['data_venda']; ?></td>
                            </tr> 
                            <tr>
                               <th>Pagamento: </th> 
                                <td>
                                    <?php 
                                     
                                    if ($tp != 'À Vista'){
                                        echo "Parcelado";
                                    }
                                    else {
                                        echo 'À Vista';
                                    }
                                    ?></td>
                            </tr>                            
                        </table>

                    </td>            
                </tr>
            </table>    
        </div>
        
        <div class="row">

        <table class="vendedor-celula">
            <tr>
               <th>VENDEDOR: </th>
               <td><?php echo $dadosPedido['vendedor']; ?></td>
            </tr>
        </table>
        </div>        
            <div class="row">          
                    <table class="display nowrap itens-do-pedido" id="productTable">
                        <thead>
                            <tr>
                            <th class="produto"> Produto </th>
                            <th class="unidade"> Unidade </th>
                            <th class="preco"> Preço </th>
                            <th class="quantidade"> Quantidade </th>
                            <th class="descitem"> Desc/Item </th>
                            <th class="subtotal"> Valor </th>	
                            </tr>				
                        </thead>
                        <tbody>
                        <?php 
                            foreach($itens as $product) : ?>
                                <tr>
                                    <td> <?php echo $product['Produto']; ?> </td>
                                    <td class="unit"> <?php echo $product['Unidade']; ?> </td>
                                    <td> <?php echo converteDinheiro($product['Preco']); ?> </td>
                                    <td> <?php echo $product['Quantidade']; ?> </td>
                                    <td> <?php echo converteDinheiro($product['Desconto']); ?> </td>
                                    <td> <?php echo converteDinheiro($product['Subtotal']); ?> </td>							
                                </tr>
                            <?php endforeach; ?>	
                        </tbody>	
                    </table>             
            </div>
            <div class="row">
                <table class="subtotais_pedido">
                    <tr>
                        <td class="coluna1sub">                    
                        </td>
                        <td class="coluna2sub">    
                            <table class="valores_subtotais display nowrap compact">
                                <tr>
                                    <th class="coluna1sub">
                                        Soma das Quantidades:                    
                                    </th>
                                    <td class="coluna2sub">    
                                    <?php echo $dadosPedido['somaqtdes']; ?>                
                                    </td>
                                </tr>
                                <tr>
                                    <th class="coluna1sub">
                                       SubTotal:                    
                                    </th>
                                    <td class="coluna2sub">    
                                    <?php echo converteDinheiro($dadosPedido['subtotal']); ?>                
                                    </td>
                                </tr>
                                <tr>
                                    <th class="coluna1sub">
                                        Total Descontos por Item:                    
                                    </th>
                                    <td class="coluna2sub">    
                                    <?php echo converteDinheiro($dadosPedido['somadescitem']); ?>                
                                    </td>
                                </tr>
                                <tr>
                                    <th class="coluna1sub">
                                        Desconto:                   
                                    </th>
                                    <td class="coluna2sub">    
                                    <?php echo converteDinheiro($dadosPedido['desconto']); ?>                
                                    </td>
                                </tr>
                                <tr>
                                    <th class="coluna1sub">
                                        Frete:                   
                                    </th>
                                    <td class="coluna2sub">    
                                    <?php echo converteDinheiro($dadosPedido['frete']); ?>                
                                    </td>
                                </tr>
                                <tr>
                                    <th class="coluna1sub">
                                        Taxas Adicionais:                   
                                    </th>
                                    <td class="coluna2sub">    
                                    <?php echo converteDinheiro($dadosPedido['taxas_adicionais']); ?>                
                                    </td>
                                </tr>
                           </table>  
                           <table class="valor_total display nowrap compact">
                                <tr>
                                    <th class="coluna1total">
                                        TOTAL:                    
                                    </th>
                                    <td class="coluna2total">    
                                    <?php echo converteDinheiro($dadosPedido['valorpedido']); ?>                
                                    </td>
                                </tr>
                           </table>           
                        </td>
                    </tr>
                </table>
            </div>
           <!--  <div id="tabela-parcelas">

            </div> -->

            <?php parcelas_pagamento($tp,$data_entrega,$valor_total_fatura); ?>
            <br />
            <b>OBSERVAÇÕES:</b><br />           
               
                <table class="observacoes">
                    <tr>
                        <td>
                        <?php echo nl2br($dadosPedido['observacoes']); ?>
                        </td>
                    </tr>
                </table>
           
    </div>
    <hr>
    <table class="rodape-fatura">
        <tr>
            <td>
            <?php 
            echo '<span class="nome-empresa-sistema">'.$empresa['nome'].'</span><br />';   
            $dadosRodape = rodape_da_fatura($conexao);
            echo $dadosRodape['email'].'<br>';
            echo 'Telefone: '.$dadosRodape['telefone'].'<br>';
            echo $dadosRodape['website'].'<br>';

            ?>
            </td>
        </tr>
    </table>
        

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

        $pdf = $dompdf->output();
        $pdf_name = $namefile;

        $file_location = $_SERVER['DOCUMENT_ROOT']."/sys/app/view/fatura-pedidos-de-venda/pdfReports/".$pdf_name;
        //echo $file_location;

        file_put_contents($file_location,$pdf); 
        $dompdf->stream($namefile, array("Attachment" => false));
?>