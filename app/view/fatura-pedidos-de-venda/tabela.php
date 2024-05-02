<?php
//pega o numero do pedido
 $numero = $_GET['num'];
 include "../../../../wp-load.php";

 include "../../config/database/conexao.php"; //Conexão

/* // Pega os dados da loja
include "../../config/database/conexao2.php"; //Conexão

$sql = "SELECT * FROM wp_options WHERE option_name = 'wpo_wcpdf_settings_general'";
$res_dados_loja = mysqli_query($conexao,$sql);
while($row = mysqli_fetch_assoc($res_dados_loja)) {
    $dados = unserialize( $row['option_value']);
}
//$dados = unserialize( base64_decode( $dados ) );

print_r( $dados );

echo "<hr>";

echo( $dados['shop_name']['default'] );

echo "<hr>";
$end =  $dados['shop_address']['default'];
$arrEnd = explode('CEP',$end);

echo ( '<div style="width:18%">'.$arrEnd[0].'<br>CEP'.$arrEnd[1].'</div>' );

echo "<hr>";

echo( $dados['footer']['default'] );

echo "<hr>";

echo( $dados['extra_1']['default'] ); */





          // PEGA OS DADOS PARA O FORM DADOS DO CLIENTE
          $query = "SELECT clientes.id as id, clientes.nome as nome, clientes.email as email,
          clientes.fantasia as fantasia, clientes.telefone as telefone, clientes.cnpjcpf as cnpjcpf,
          clientes.idrg as idrg, clientes.endereco as endereco, clientes.numero as numero, clientes.bairro as bairro,
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
          ?>

<div class="card">
    <div class="card-header ui-sortable-handle">
        <h2>Fatura do Pedido de Venda</h2>
        <h4>Número: <span style="color:#37A661;"><?php echo $numero; ?></span></h4>
        <div class="card-tools" style="margin-right: 10px;">
            <ul class="nav nav-pills ml-auto">

                <li class="nav-item">
                    <form action="pdf-gen.php" method="POST">
                        <input type="hidden" name="num" value="<?php echo $numero; ?>">
                        <button title='Imprimir - PDF' name='btn_pdf' type='submit' class='btn btn-primary float-right'><i class='fas fa-print'></i><span class="btn-resp"></span></button>
                    </form>
                </li>
                &nbsp;
                <li class="nav-item">
                <a href="../lista_vendas/" class="btn btn-danger" type="button" title="Voltar para Pedidos de Venda"><i class="fas fa-list"></i>
                <span class="btn-resp"></span></a>
                </li>
                &nbsp;
                <li class="nav-item">
                <a href="../fatura-pedidos-de-venda/itens-class/?n=<?php echo $numero; ?>" class="btn btn-secondary" type="button" title="DOMPDF"><i class="fas fa-eye"></i>
                <span class="btn-resp"></span></a>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="card-body table-responsive">
        <h3>Cliente</h3>
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
    </div>
</div>   

<div class="card">
    <div class="card-header ui-sortable-handle">
        <h2>Itens do Pedido</h2>
        <div class="card-tools" style="margin-right: 10px;">
            <ul class="nav nav-pills ml-auto">

                <li class="nav-item">
                <a href="../lista_vendas/editar_pedido.php?numero=<?php echo $numero; ?>" alt='Editar Pedido' title='Editar Pedido' type='button' class='btn btn-warning float-right'><i class='fas fa-edit'></i></a>                  
                </li>
            </ul>
        </div>
    </div>
    
    <div class="card-body table-responsive">
        <table id="itens_do_pedido" class="display responsive hover compact nowrap">
            <thead>
                <tr>

                    <th></th>
                    <th>Produto</th>
                    <th>Unid.</th>
                    <th>Valor Unit.</th>
                    <th>Qtde</th>
                    <th>Desconto</th>
                    <th>Subtotal</th>



                </tr>
            </thead>
            <tbody>

            <?php                             
                    //SELECT Número, Data, Situação, Cliente, Total FROM `vendas`
                    

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
                
                
                    $result = mysqli_query($conexao,$query);
                    $clinha=0;

                    //VARIAVEIS READONLY
                    // SESSAO TOTAIS
                    $soma_qtdes = 0;
                    $t_desc_itens = 0;
                    $t_valor_itens = 0;
                    $t_subtotal = 0;

                
                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                        $clinha++;
                    ?>

                <tr role="row" class="even dpedido" data-id="<?php echo $row['id']; ?>">
                    <td class="clinha"><span class="badge badge-dark">
                            <?php echo $clinha; ?></span>
                    </td>
                    <td class="dpedidoitem"><?php echo $row['Produto']; ?> </td>
                    <td class="dpedidoitem"><?php echo $row['Unidade']; ?> </td>
                    <td class="dpedidoitem"><?php echo converteDinheiro($row['Preço']); ?> </td>
                    <td class="dpedidoitem">
                        <?php echo $row['Quantidade']; $soma_qtdes+=(float)$row['Quantidade']; ?>
                    </td>
                    <td class="dpedidoitem"><?php echo converteDinheiro($row['Desconto']); ?> </td>
                    <td class="dpedidoitem"><?php echo converteDinheiro($row['Subtotal']); ?> </td>
                    <?php                    
                        $t_desc_itens+=(float)$row['Desconto'];
                        $t_valor_itens+=(float)$row['TotalItens'];
                        $t_subtotal+=(float)$row['Subtotal'];
                    ?>
                </tr>
                <?php endwhile;  ?>
            </tbody>
        </table>
    </div>
</div>
<!-- /.card-body -->