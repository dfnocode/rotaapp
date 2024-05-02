
<?php

/* function converteDinheiro( $num ) {
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
} */

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

