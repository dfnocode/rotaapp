
<?php


// verifica se existe o arquivo PDF 

function verificaExisteFatura ($num_pedido){
  $pdf_name = "pedido-$num_pedido.pdf";
  $file_location = $_SERVER['DOCUMENT_ROOT']."/sys/app/view/fatura-pedidos-de-venda/pdfReports/".$pdf_name;
  if (file_exists ( $file_location )) {
    return $file_location;
  }
  else return 1;
}


function converteDinheiro( $num ) {
    $str = (string)$num;
    //echo $str;
    
    $ntotal = number_format($str, 2);
    $stotal = (string)$ntotal;
    $arrTotal = explode(".",$stotal);
    $esquerdo = $arrTotal[0];
    $esquerdo = str_replace(",",".",$esquerdo);
    $direito = $arrTotal[1];
    $final = $esquerdo.','.$direito;
    echo trim($final);
}


function somaComissoes ($tVenda, $vComs) {
	$numTot = trim(str_replace(',','.',str_replace('.','',$tVenda)));
	$totalComs = ($numTot * number_format($vComs,2,",","."))/100;
    return number_format($totalComs,2,",",".");
}


function somaValorFatura($Tpedido,$TComs) {
    $nfat = explode(",",$Tpedido);
  $f1 = str_replace(".","",$nfat[0]);
  $f2 = $nfat[1];
  $totalFat = $f1 . "." . $f2; 
  return $totalFat-$TComs;
}

function subtrairDoPedido($Tpedido,$vFrete) {
    $nfat = explode(",",$Tpedido);
    $f1 = str_replace(".","",$nfat[0]);
    $f2 = $nfat[1];
    $totalFat = $f1 . "." . $f2;    
    
    $nfrete = explode(",",$vFrete);
    $f1 = str_replace(".","",$nfrete[0]);
    $f2 = $nfrete[1];
    $cFrete = $f1 . "." . $f2; 
    
    return $totalFat-$cFrete; 
  }


  //desc/item +descontos +txadicionais +frete 
function somaDescontos( $ditem, $desc, $tx, $frete) {
	
           
	$itens = explode(",",$ditem);
    $f1 = str_replace(".","",$itens[0]);
    $f2 = $itens[1];
    $dItens = $f1 . "." . $f2;    
    
    $desconto = explode(",",$desc);
    $f1 = str_replace(".","",$desconto[0]);
    $f2 = $desconto[1];
    $Descontos = $f1 . "." . $f2;
    
    $taxa = explode(",",$tx);
    $f1 = str_replace(".","",$taxa[0]);
    $f2 = $taxa[1];
    $Taxas = $f1 . "." . $f2; 
    
  	$fret = explode(",",$frete);
    $f1 = str_replace(".","",$fret[0]);
    $f2 = $fret[1];
    $Frete = $f1 . "." . $f2; 
    
    return $dItens+$Descontos+$Taxas+$Frete; 
}


//desc/item +descontos +txadicionais +frete 
function sumTotalItem($total, $item) {   
    
    $ntot = explode(",",$total);
    $f1 = str_replace(".","",$ntot[0]);
    $f2 = $ntot[1];
    $somaTotal = $f1 . "." . $f2;
    
          
	$itens = explode(",",$item);
    $f1 = str_replace(".","",$itens[0]);
    $f2 = $itens[1];
    $sItem = $f1 . "." . $f2;    
    
   
    return ($somaTotal+$sItem);
}


function conta_pedidos_cliente ($con, $cliente){
  
  $sql = "SELECT Cliente, count(0) as Qtde_Pedidos_Cliente from vs_todos_pedidos where Cliente = '$cliente'";
  $result = mysqli_query($con,$sql); 
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
  $qtde = $row['Qtde_Pedidos_Cliente'];                           
  endwhile;
  
  return $qtde;
}

 

function primeira_venda_cliente ($con, $cliente){

  $sql = "SELECT Pedido from vs_todos_pedidos where Cliente = '$cliente' order by data_da_venda asc limit 1";
  $result = mysqli_query($con,$sql); 
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
  $pedido = $row['Pedido'];                           
  endwhile;
  
  return $pedido;
}

// se existe comissao RETORNA 1, SENAO EXISTE RETORNA 0
function existe_comissao_no_pedido($con, $num_pedido){
  $sql = "SELECT count(*) as TemComissao FROM tbl_pedidos_venda WHERE coms_percent > 0 AND numero_pedido = '$num_pedido'";

   $result = mysqli_query($con,$sql); 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
   $resp = $row['TemComissao'];                           
   endwhile;
   
   return $resp;
}


// se existe OBservacoes Internas no Pedido? RETORNA a OBSERVACAO ANOTADA NO PEDIDO, SENAO EXISTE RETORNA 0
function existe_obs_internas_no_pedido($con, $num_pedido){
  $sql = "SELECT obs_internas, count(*) as TemObsInterna FROM tbl_pedidos_venda WHERE obs_internas <> '' AND numero_pedido = '$num_pedido'";

   $result = mysqli_query($con,$sql); 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
   $resp = $row['TemObsInterna'];
   $obs = $row['obs_internas'];                            
   endwhile;

   if ($resp == 1){
      return $obs;
   }
   else {
     return $resp;
   }
}


function situacao_circle ($sit){
  switch ($sit) {
    case "Editando":
      echo '<span class="fas fa-circle" title="'.$sit.'" style="color: grey;"></span>';
      break;
    case "Em Aberto":
      echo '<span class="fas fa-circle" title="'.$sit.'" style="color: rgb(233, 220, 64);"></span>';
      break;
    case "Atendido":
      echo '<span class="fas fa-circle" title="'.$sit.'" style="color: blue;"></span>';
      break;
    case "Cancelado":
      echo '<span class="fas fa-circle" title="'.$sit.'" style="color: red;"></span>';
      break;
    case "Venda Agenciada":
      echo '<span class="fas fa-circle" title="'.$sit.'" style="color: purple;"></span>';
      break;
    case "Concluido":
      echo '<span class="fas fa-circle" title="'.$sit.'" style="color: green;"></span>';
      break;  
      
    default:
      echo "ui!";
  }
}
