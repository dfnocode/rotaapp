<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">


<style>
.dpedido {
    cursor: pointer;
}
#lista_vendas_length > label > select {
    width: 45px;
}
#lista_vendas_wrapper {
    padding: 8px;
}
</style>
<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

//  FUNCOES PHP EXTRAS
$path = dirname(__FILE__);
$path .= '/scripts/funcoes.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>

<body class="sidebar-mini sidebar-collapse dataTable">
    <!-- Site wrapper -->
    <div class="wrapper" style="display: contents;">
        <!-- Navbar -->
        <?php
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/navbar.php';
    include_once($path);
   ?>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->

        <!-- Sidebar -->
        <?php
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/sidebar.php';
    include_once($path);
   ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <?php
                        
                          // VERIFICA SE EXISTEM PEDIDOS NO SISTEMA 
                          // SENAO EXISTIR RETORNA A ULTIMA NUMERACAO DO PEDIDO
                          // NO CASO COMEÇA COM 8000
                          $sql = "SELECT numero_pedido FROM tbl_pedidos_venda
                           ORDER BY numero_pedido Desc";

                            if ($result = mysqli_query($conexao,$sql)) {      
                        
                                $arrConsulta = mysqli_fetch_all($result); 
                                mysqli_free_result($result);   
                                $numAtual = $arrConsulta[0][0]; 
                                $proxPedido = ((int) $numAtual)+1;

                                // VERIFICA SE O SISTEMA ESTA LIGADO
                                // PEGA O STATUS E A NUMERACAO
                                $sql = "SELECT prefixo, numeracao FROM tbl_config_fatura WHERE prefixo LIKE '%ON%'";
                                        if ($result = mysqli_query($conexao,$sql)) {
                                            $arrConfig = mysqli_fetch_all($result); 
                                            mysqli_free_result($result);   
                                            $status = $arrConfig[0][0];
                                            $numeracao = $arrConfig[0][1]; 


                                    // VERIFICA SE A CONFIGURACAO DA FATURA ESTA LIGADA
                                    // SE ESTIVER DESLIGADA PERGUNTA SE QUER IR CONFIGURA 
                                    //  se sim =  VAI PARA PAGINA num_fatura, configuração fatura/pedido        
                                    if ($status != 'ON') {
                                        echo '<script>                                        
                                            if (confirm("Configuração de Fatura está Desligada! Deseja Ligar Configuração no Sistema") == true) {
                                                window.location.replace("../num_fatura/?config=2");
                                            } 
                                          </script>';
                                    }  
                                    // CONFIGURACAO DA NUMERACAO DE PEDIDO/FATURA 
                                    // NAO EXISTE PORQUE NAO EXISTE PEDIDOS AINDA
                                    if($proxPedido == 1) {                                      
                                            
                                            if ($status != 'ON') {                                                                            
                                                echo '<script>setTimeout(function(){ confirm("Precisa de Configuração Status: '.$status.'"); }, 2000);</script>';
                                                header("location: ../num_fatura/?config=1"); die('Numeração no Pedido sem configução!');
                                            }
                                            else {
                                                echo '<script>confirm("Sistema Enable, Numeração de Pedidos Iniciado! Numeração: '.$numeracao.'");</script>';
                                                $proxPedido = ((int)$numeracao)+1;
                                            }
                                        }   
                                }    
                            }
                        ?>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Lista de Pedidos</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title"><i class="fas fa-calculator mr-1"></i>Pedido de Venda</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item" data-toggle="modal" data-target="#add_pedido_venda"
                                    data-toogle="modal">
                                    <a class="btn"><i class="fas fa-clipboard"></i> Novo Pedido</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                </div>
                <!-- /.card -->

                <!--div lista-->
                <!--     <div id="respHint"><b>Não existem pedidos nessa situação</b></div>  -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" id="titulo-filtro">Pedidos de <?php echo $_SESSION['vendedor']; ?></h3>
                        <?php if ($_SESSION['funcao'] != 'Vendedor') { ?>
                        <button type="button" data-toggle="modal" data-target="#filterVendas" title="Filtros"
                            class="btn btn-success float-right"><i class="fas fa-filter"> </i><span class="btn-resp">
                                Filtros</span></button>
                         <?php } ?>       
                    </div>
                    <!-- /.card-header -->
                 
                        <table id="lista_vendas" class="table table-bordered compact nowrap hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Número</th>
                                    <th>Data</th>
                                    <th>Cliente</th>
                                    <th>Total</th>
                                    <th>Situação</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody id="respHint">

                                <?php                             
                            //SELECT Número, Data, Situação, Cliente, Total FROM `vendas`

                            // Seleciona os pedidos que estao Em Aberto
                            /**
                             *       Regras
                             *          - Em Aberto: Atualizam os Preços por valor atualizados
                             * 
                             * 
                             * **/
                            if ($_SESSION['funcao'] == 'Vendedor') {
                                
                                $query = "SELECT * FROM vs_vendas WHERE  idVendedor = ".$_SESSION['id_usuario']." AND Situação LIKE '%Em Aberto%'"; 
                            }
                            else {
                                
                                $query = "SELECT * FROM vs_vendas WHERE Situação LIKE '%Em Aberto%'";
                            }
                                $result = mysqli_query($conexao,$query); 
                            $arrPedidosEmAberto = mysqli_fetch_all($result); 
                           // print_r($arrPedidosEmAberto);

                           if ($_SESSION['funcao'] == 'Vendedor') {

                                $query = "SELECT * FROM vs_vendas WHERE idVendedor = ".$_SESSION['id_usuario']." order by Data desc";
                           }  
                           else {
                            $query = "SELECT * FROM vs_vendas WHERE idVendedor = ".$_SESSION['id_usuario']." order by Data desc";
                           } 
                                $result = mysqli_query($conexao,$query); 
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                    $pedido = $row['Número']; //PEGA A VARIAVEL DO NUMERO DO PEDIDO
                            ?>
                                <!-- <tr role="row" class="even" data-id="1"> -->
                                <tr role="row" class="even" data-id="<?php echo $row['Número']; ?>" style="cursor:hand">
                                    <td></td>
                                    <td class="dpedido"><?php echo $row['Número']; ?></td>
                                    <td class="dpedido"><?php echo date( 'd/m/Y', strtotime($row['Data'])); ?> </td>
                                    <td class="dpedido"><?php echo $row['Cliente']; ?> </td>
                                    <td class="dpedido"><?php echo converteDinheiro($row['Total']); ?></td>
                                    <td>
                                    <?php                                         
                                         situacao_circle($row['Situação']); 
                                        // DESCOBRE SE E A PRIMEIRA VENDA E QUAL É O NUMERO DO PEDIDO DA PRIMEIRA VENDA
                                         $primeira_venda = conta_pedidos_cliente($conexao,$row['Cliente']);
                                         if ($primeira_venda == 1) {
                                             echo '&nbsp;&nbsp;<span class="badge badge-warning" title="Primeira venda do Cliente" style="cursor: pointer;">1ª venda</span>';
                                         } 
                                         else {
                                             //SE ESTE NUMERO DO PEDIDO FOR DE PRIMEIRA VENDA ELE IMPRIME
                                            $numero_do_pedido = primeira_venda_cliente($conexao,$row['Cliente']);
                                            if ($row['Número'] == $numero_do_pedido) {
                                                echo '&nbsp;&nbsp;<span class="badge badge-warning" title="Primeira venda do Cliente" style="cursor: pointer;">1ª venda</span>'; 
                                            }
                                         } 
                                         
                                         $tem_comissao = existe_comissao_no_pedido($conexao, $row['Número']);
                                         if ($tem_comissao == 1){
                                             echo '&nbsp; <i class="far fa-money-bill-alt" style="color:green; cursor: pointer;" aria-hidden="true" title="Comissão Lançada no Pedido"></i>';
                                         }

                                         $tem_obs_interna = existe_obs_internas_no_pedido($conexao, $row['Número']);
                                         if ($tem_obs_interna != '0') {
                                             echo '&nbsp; <i title="'.$tem_obs_interna.'" class="far fa-comment-alt"></i>';
                                         }
                                         ?>
                                    </td>
                                    <td>
                                        <a href="editar_pedido.php?numero=<?php echo $row['Número']; ?>" title='Ver'
                                            type='button' class='btn btn-success copiar'>
                                            <i class='fas fa-search'></i></a>
                                        <a href="../fatura-pedidos-de-venda/itens-class/?n=<?php echo $row['Número']; ?>"
                                        title='Imprimir' type='button' class='btn btn-primary copiar'>
                                            <i class='fas fa-print'></i></a>
                                        <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal'
                                            data-target='#delete' title="Excluir Pedido">
                                            <i class='fas fa-trash-alt'></i></button>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tfoot>

                                <tr>
                                    <th></th>
                                    <th>Número</th>
                                    <th>Data</th>
                                    <th>Cliente</th>
                                    <th>Total</th>
                                    <th>Situação</th>
                                    <th>Ação</th>
                                </tr>

                            </tfoot>
                        </table>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div>

                    <button title='Abrir' type='button' class='btn btn-primary' data-toggle='modal'
                        data-target='#vendas-por-situacao'>
                        <i class='fas fa-trash-alt'></i> Abrir</button>


                </div>

        </div>

        <?php
            $path = dirname(__FILE__);
            $path .= '/filter_vendas.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/vendasPorSituacao.php';
            include_once($path);



            $path = dirname(__FILE__);
            $path .= '/modalAdd.php';
            include_once($path);
       
            $path = dirname(__FILE__);
            $path .= '/modalUpdate.php';
            include_once($path);
            
            $path = dirname(__FILE__);
            $path .= '/modalDelete.php';
            include_once($path);
        ?>

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
            $path = dirname(__FILE__);
            $path .= '/../../includes/UI/footer.php';
            include_once($path);
        ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../includes/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../includes/dist/js/demo.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Forms -->
    <script src="js/frms_vendas.js"></script>
    <!-- Table -->
    <script src="js/tabela_vendas.js"></script>
    <!-- DataTables -->
  <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> 


    <script>
    $(function() {
        $("#lista_vendas").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
    </script>

       
  

    <script>
    $(document).ready(function() {
        $('#collapseOne').collapse({
            toggle: false
        })

        var table = $('#lista_vendas').DataTable();
        // VAI PARA TELA EDITAR PEDIDO AO CLICKA NA LINHA NO DATATABLE PEDIDOS DE VENDA
        $('#lista_vendas tbody').on('click', 'tr td.dpedido', function() {

            var data = table.row(this).data();
            //alert('You clicked on ' + data[1] + '\'s row');
            var url = "editar_pedido.php?numero=" + data[1];
            window.location.replace(url);

        });
    });
    </script>

</body>

</html>