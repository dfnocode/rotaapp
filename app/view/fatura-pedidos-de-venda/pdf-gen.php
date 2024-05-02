<?php
require_once "fpdf183/fpdf.php";
require_once("../../../../wp-load.php");

//include "../../config/database/conexao2.php"; //Conexão
// Pega os dados da loja
/* $sql = "SELECT * FROM wp_options WHERE option_name = 'wpo_wcpdf_settings_general'";
$res_dados_loja = mysqli_query($conexao,$sql);
while($row = mysqli_fetch_assoc($res_dados_loja)) {
    $dados = unserialize( $row['option_value']);
} */
//$dados = unserialize( base64_decode( $dados ) );

/* print_r( $dados );


echo( $dados['shop_name']['default'] );


echo ( $dados['shop_address']['default'] );


echo( $dados['footer']['default'] );


echo( $dados['extra_1']['default'] ); */


include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$numero = $_POST['num'];

$query = "SELECT 
I.id,
F.numero_pedido as NF,
P.id as IdProduto,
P.descricao as Produto,
P.unidade as Unidade,
P.preco as Preço,
I.quantidade as Quantidade,
I.desconto as Desconto,
(P.preco * I.quantidade) - I.desconto as Subtotal,
(P.preco * I.quantidade) as TotalItens
FROM tbl_pedidos_venda as F
INNER JOIN tbl_itens_pedido as I
ON F.numero_pedido = I.id_pedido
INNER JOIN tbl_produtos as P
ON I.id_produto = P.id
WHERE I.id_pedido = '$numero'";

$data = mysqli_query($conexao,$query);


if(isset($_POST['btn_pdf'])){
    //echo $numero;
    
    
    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
            // Logo
            $this->Image('logo.png',10,6,30);
            // Arial bold 15
            $this->SetFont('Arial','B',13);
            // Move to the right
            $this->Cell(80);
            
                       
          
            $this->Cell(90,10,'ROTA COMERCIO E DISTRIBUICAO',0,0,'C');

            $this->SetFont('Arial','',10);
           
            $this->Cell(-90,20,'CNPJ: 26.269.338/0001-37. IE: 10.727.706-9',0,0,'C');
            $this->Cell(90,30,'Avenida Rio Verde, N. SN, QD 29 LT 17',0,0,'C');
            $this->Cell(-90,40,'CEP: 74.843-660. Goiania, GO',0,0,'C');
            
            
            // Line break
            $this->Ln(40);
        }

        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    $pdf = new PDF('p','mm','a4',$nome);
    $pdf->AliasNbPages();
    $pdf->SetFont('arial','b','14');
    $pdf->AddPage();

    $pdf->cell('90','10','Produto','1','0','C');
    $pdf->cell('20','10','Unid.','1','0','C');
    $pdf->cell('40','10','Quantidade','1','0','C');
    $pdf->cell('40','10','Valor','1','1','C');

    $pdf->SetFont('arial','','12');

    while($row = mysqli_fetch_assoc($data)) {
      $pdf->cell('90','10', $row['Produto'] ,'1','0','C');
      $pdf->cell('20','10', $row['Unidade'] ,'1','0','C');    
      $pdf->cell('40','10', $row['Quantidade'] ,'1','0','C');    
      $pdf->cell('40','10', $row['Subtotal'],'1','1','C');
    }

    for($i=1;$i<=10;$i++)
    $pdf->Cell(0,10,'Printing line number '.$i,0,1);

    $pdf->Output();


}