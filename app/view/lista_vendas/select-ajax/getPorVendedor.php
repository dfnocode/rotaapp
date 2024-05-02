
<?php
include_once "../../../../../wp-load.php";
include_once "../scripts/funcoes.php";

session_start();
$q = $_GET['q'];


    $con = mysqli_connect('localhost','root','','rotadb24');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"rotadb24");
    if ($q == '0'){
        $sql="SELECT * FROM vs_vendas order by Data desc";
    }
    else {
        $sql="SELECT * FROM vs_vendas WHERE idVendedor = '$q' order by Data desc";
    }  

    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
        $pedido = $row['Número']; //PEGA A VARIAVEL DO NUMERO DO PEDIDO
    ?>
      <tr role="row" class="even" data-id="<?php echo $row['Número']; ?>" style="cursor:hand">
        <td></td>
        <td class=""><?php echo $row['Número']; ?></td>
        <td class=""><?php echo date( 'd/m/Y', strtotime($row['Data'])); ?></td>
        <td class=""><?php echo $row['Cliente']; ?></td>
        <td class=""><?php echo converteDinheiro($row['Total']); ?></td>
        <td>
        <?php 
                
                echo $row['Situação']; 
                // DESCOBRE SE E A PRIMEIRA VENDA E QUAL É O NUMERO DO PEDIDO DA PRIMEIRA VENDA
                $primeira_venda = conta_pedidos_cliente($con,$row['Cliente']);
                if ($primeira_venda == 1) {
                    echo '&nbsp;&nbsp;<span class="badge badge-secondary">1ª venda</span>';
                } 
                else {
                    //SE ESTE NUMERO DO PEDIDO FOR DE PRIMEIRA VENDA ELE IMPRIME
                    $numero_do_pedido = primeira_venda_cliente($con,$row['Cliente']);
                    if ($row['Número'] == $numero_do_pedido) {
                        echo '&nbsp;&nbsp;<span class="badge badge-secondary">1ª venda</span>'; 
                    }

                }                                        
        ?>
        </td>
        <td>
            <a href="editar_pedido.php?numero=<?php echo $row['Número']; ?>" alt='Ver'
                type='button' class='btn btn-success copiar'>
                <i class='fas fa-search'></i></a>
            <a href="../fatura-pedidos-de-venda/itens-class/?n=<?php echo $row['Número']; ?>"
                alt='Imprimir' type='button' class='btn btn-primary copiar'>
                <i class='fas fa-print'></i></a>
            <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal'
                data-target='#delete'>
                <i class='fas fa-trash-alt'></i></button>
        </td>
    </tr>
    <?php endwhile; ?>
<?php
mysqli_close($con);
?>
<script src="../../../includes/plugins/jquery/jquery.min.js"></script>
<script>
/*     $(document).ready(function() {
      

        var table = $('#lista_vendas').DataTable();
        // VAI PARA TELA EDITAR PEDIDO AO CLICKA NA LINHA NO DATATABLE PEDIDOS DE VENDA
        $('#lista_vendas tbody').on('click', 'tr td.dpedido', function() {

            var data = table.row(this).data();
            //alert('You clicked on ' + data[1] + '\'s row');
            var url = "editar_pedido.php?numero=" + data[1];
            window.location.replace(url);

        });
    }); */
    </script>
