<?php
 require_once 'dompdf/autoload.inc.php';



 

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
 

        
?>
<html>

<body>

    <?php
     include "../../../../wp-load.php";
     include "../../config/database/conexao.php"; //Conexão
    
     $numero=$_GET['n'];

         // PEGA OS DADOS PARA O FORM DADOS DO CLIENTE
    $query = "SELECT clientes.id as id, clientes.nome as nome, clientes.email as email, clientes.fantasia as fantasia, clientes.telefone as telefone, clientes.cnpjcpf as cnpjcpf, clientes.idrg as idrg, clientes.endereco as endereco
    , clientes.numero as numero, clientes.bairro as bairro,
    clientes.complemento as complemento, clientes.cidade as cidade, clientes.estado as estado, clientes.cep as cep
    FROM clientes, tbl_pedidos_venda 
    WHERE clientes.id = tbl_pedidos_venda.id_cliente AND tbl_pedidos_venda.numero_pedido = '$numero'";
    
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
        
 // reference the Dompdf namespace
    echo '<div style="border: 1px dotted grey; padding:15px;">';
        echo '<div style="width:50%">';
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
        echo '<b>IE/RG: </b>'.$idrg_c.'<br></div>';   
        echo '<div style="width:50%; position:relative; float:right; top:15px;">';        
        echo '<img src="./logo.png"></div>';
        echo '<div style="border: 1px dotted grey; padding:15px;">';
        echo '<table><tr><th>Produto</th><th>Unid.</th><th>Valor Unit.</th><th>Qtde</th>
<th>Subtotal</th></tr>';

        $query = "SELECT * FROM vs_pdf_itens_pedido WHERE NF = '$numero'";
    
        /* $query = "SELECT * FROM tbl_itens_pedido WHERE id_pedido = '$numero'"; */
        $result2 = mysqli_query($conexao,$query);      


        while($row2 = mysqli_fetch_array($result2)) { 
         
           echo '<tr>';
           echo '<td>'.$row2['Produto'].'</td>';  
           echo '<td>'.$row2['Unidade'].'</td>';
           echo '<td>'.$row2['Preco'].'</td>';
           echo '<td>'.$row2['Quantidade'].'</td>';
           echo '<td>'.$row2['Subtotal'].'</td>'; 
           echo '</tr>';       
        }

            echo '</table></div>';


 
    ?>
       
   
   
</body>

</html>
<form method=post action=#><input type=submit name=submit id=submit value="Create PDF"></form>
<?php
        if((isset($_POST['submit'])))
        {
            $html = ob_get_contents(); 
                ob_end_flush();
            $dompdf = new DOMPDF($options);
            $dompdf->loadHtml($html);
            $dompdf->render();
            $dompdf->stream("now.pdf");
        }
    ?>