<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" href="css/filter.css">


<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>

<body class="sidebar-mini sidebar-collapse">
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

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="open-filter" id="open-filter2" onclick="openNavFilter()"
                    style="display:none;border-radius:10px;"><span class="fas fa-filter"></span></div>
                <div class="row scroll-parent" id="parente-scrota">
                    <div class="col-sm-2" id="div-filtros" style="z-index: 1037">
                        <div id="search-left-area" class="hidden-xs hidden-sm open"
                            style="width: 250px; display: block;">
                            <div class="open-filter" id="open-filter"><span class="fas fa-filter"></span></div>
                            <div id="content-filter">
                                <div id="title-filter"><span class="fas fa-filter"></span>
                                    <h1>FILTROS</h1><span class="fas fa-chevron-left" title="Minimizar filtros"
                                        onclick="closeNavFilter()"></span><br class="clr">
                                </div>
                                <form method="POST" name="filtros-painel-comissoes"
                                    id="filtros-painel-comissoes">

                                   <input type="hidden" id="idvendedor" name="idvendedor" value="<?php if(isset($_POST['idvendedor'])) { echo $_POST['idvendedor']; }?>">

                                    <div class="form-group">
                                        <label for="vendedor_cliente">Vendedor</label>
                                        <?php 
                                        if ($_SESSION['funcao'] == 'Gerente') {                   

                                            echo '<select name="vendedor_cliente" id="vendedor_cliente" class="form-control vendedor">';                           
                                            
                                            include "../../config/database/conexao2.php"; //Conexão com wordpress
                                            $sql_vendedores = "SELECT wp_users.id, wp_users.display_name as nome
                                            FROM wp_users INNER JOIN wp_usermeta 
                                            ON wp_users.ID = wp_usermeta.user_id 
                                            WHERE wp_usermeta.meta_key = 'wp_capabilities' 
                                            AND (wp_usermeta.meta_value LIKE '%shop_manager%' 
                                            OR wp_usermeta.meta_value LIKE '%vendedor%') 
                                            ORDER BY wp_users.user_nicename";
                                            $result = mysqli_query($conexao,$sql_vendedores); 
                                            
                                            echo '<option value="">Selecione...</option>';
                                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) :
                                                echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                                            endwhile;
                                            echo '</select>';
                                        }
                                        else {

                                            echo '<input type="text" readonly="readonly" name="vendedor_cliente" id="vendedor_cliente" value="" class="form-control">';

                                        }
                                        ?>
                                    </div>
                                    <div class="form-group" id="div-periodo">


                                        <div class="">
                                            <label>Período</label>
                                            <!--   <input type="month" id="por_meses" name="por_meses" min="2018-03" value="2018-05" class="form-control"> -->

                                            <label>Início</label>
                                            <input type="date" id="data-ini" name="data-ini" class="form-control"
                                                value="<?php if(isset($_POST['data-ini'])) { echo $_POST['data-ini']; }?>">

                                            <label>Fim</label>
                                            <input type="date" class="input-sm form-control" id="data-fim"
                                                name="data-fim"
                                                value="<?php if(isset($_POST['data-fim'])) { echo $_POST['data-fim']; }?>">

                                        </div>
                                    </div>
                                    <div id="container_filtro_situacoes" class="form-group">
                                        <label for="filtro-situacoes">Situação</label>
                                        <select name="p_situacao" id="p_situacao" class="form-control">
                                            <?php 
                                           include "../../config/database/conexao.php";
                                            $query = "SELECT id, tipo FROM tbl_situacao_pedido";
                                            $result = mysqli_query($conexao,$query); 
                                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                                echo '<option value="'.$row['id'].'">'.$row['tipo'].'</option>';
                                            endwhile;
                                        ?>
                                        </select>
                                    </div>
                                    <div id="container_ocultar_sem_movimentacao" class="form-group">
                                        <div class="item-form-toggle">
                                            <label class="label-item-form-toggle"
                                                for="filtro_ocultar_sem_movimentacao">Listar vendedores sem
                                                movimentações</label>                 
                                             

                                            <div class="toogle-checkbox"><label><input type="checkbox"
                                                        id="filtro_ocultar_sem_movimentacao"
                                                        name="filtro_ocultar_sem_movimentacao"
                                                        checked="checked"><span></span></label></div>
                                        </div>
                                    </div>



                                    <div id="filter-button-area"><button
                                            class="btn btn-outline-success">Filtrar</button>
                                    </div>
                                </form>
                                <!-- FIM DO FORM FILTROS COMISSOES -->
                            </div>
                        </div>
                    </div>
                    <!-- CONTENT VIEW -->
                    <div class="col-sm-10" id="filtros-content">
                        <!-- CARD DE INFORMACOES DA BUSCA -->
                        <div class="card bg-light">
                            <h5 class="card-header">Comissões de Venda</h5>
                            <div class="card-body">
                                <h5 class="card-title">Resultado</h5>
                                <p class="card-text">Estatísticas do Período</p>
                                <div id="respHint"></div>
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-outline-success float-right" id="info-busca"
                                    onclick="">Estatísticas</button>
                            </div>
                        </div>

                        <table id="comissoes" class="display comissoes_por_periodo" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Pedido</th>
                                    <th>Data da Venda</th>
                                    <th>Data da Entrega</th>
                                    <th>Vendedor</th>
                                    <th>Cliente</th>
                                    <th>Situação</th>
                                    <th>Valor do Pedido</th>
                                    <th>Comissão</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Pedido</th>
                                    <th>Data da Venda</th>
                                    <th>Data da Entrega</th>
                                    <th>Vendedor</th>
                                    <th>Cliente</th>
                                    <th>Situação</th>
                                    <th>Valor do Pedido</th>
                                    <th>Comissão</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>

                </div>


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

    <!-- Table -->

    <!-- filter -->
    <script src="js/div-filter-coms.js"></script>
    <script src="js/filter-msgs.js"></script>


    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
    

    $('.vendedor').change(function() {
        var opx = $(this).find(':selected').val();
        $('#idvendedor').val(opx);
    });
    </script>

    <script>
    $(document).ready(function() {

        var idvend = $('#idvendedor').val();
        var inicio = $('#data-ini').val();
        var fim = $('#data-fim').val();


        $('#comissoes').DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "./ajax/testecomissao.php?idvendedor=" + idvend + "&inicio=" + inicio + "&fim=" +
                    fim,

            },
            "columns": [{
                    "data": "pedido"
                },
                {
                    "data": "datavenda"
                },
                {
                    "data": "dataentrega"
                },
                {
                    "data": "vendedor"
                },
                {
                    "data": "nomecliente"
                },
                {
                    "data": "situacao"
                },
                {
                    "data": "valorpedido", render: $.fn.dataTable.render.number( '.', ',', 2, 'R$ ' )
                },
                {
                    "data": "comissao", render: $.fn.dataTable.render.number( '.', ',', 2, 'R$ ' )
                }
            ]
        }); 
    });
    </script>

    



    <script>
    function mostra_dados() {

        var idvend = $('#idvendedor').val();
        var dtaini = $('#data-ini').val();
        var dtafim = $('#data-fim').val();
        var urlApi = "ajax/total_comissao_vendedor_periodo.php?idvendedor=" + idvend + "&inicio=" + dtaini + "&fim=" +
            dtafim;

        /* $('#respHint').html(urlApi); */

        $.ajax({
            url: urlApi,
            type: 'get',
            dataType: 'JSON',
            success: function(response) {
                var len = response.length;
                for (var i = 0; i < len; i++) {
                    var Vendedor = response[i].Vendedor;
                    var ValorFaturado = response[i].ValorFaturado;
                    var n = new Number(ValorFaturado);
                    var myObj = {
                        style: "currency",
                        currency: "BRL"
                    }
                    var Faturado = n.toLocaleString("pt-BR", myObj);
                    var SaldoComissao = response[i].SaldoComissao;
                    var n = new Number(SaldoComissao);
                    var myObj = {
                        style: "currency",
                        currency: "BRL"
                    }
                    var TotalComissao = n.toLocaleString("pt-BR", myObj);
                    var DataInicial = response[i].DataInicial;
                    var DataFinal = response[i].DataFinal;

                    var linha =
                        '<table style="width:100%"><tr><th>Vendedor</th><th>ValorFaturado</th><th>SaldoComissao</th><th>DataInicial</th><th>DataFinal</th></tr>';
                    linha += '<tr><td>' + Vendedor + '</td>';
                    linha += '<td>' + Faturado + '</td>';
                    linha += '<td>' + TotalComissao + '</td>';
                    linha += '<td>' + DataInicial + '</td>';
                    linha += '<td>' + DataFinal + '</td>';
                    linha += '</tr></table>';
                    $("#respHint").html(linha);
                }


            }
        });
        /*  return fetch(urlApi).then(response => {
           $('#respHint').text(response.json());
         }); */


    }

    function converteDatas(str) {
        var MyDate = new Date(str);
        var MyDateString;

        MyDate.setDate(MyDate.getDate());

        MyDateString = MyDate.getFullYear() + '-' +
            ('0' + (MyDate.getMonth() + 1)).slice(-2) + '-' +
            ('0' + MyDate.getDate()).slice(-2);
        return MyDateString;
    }

    function pegaPeriodoMesAtual(){

        var date = new Date(), y = date.getFullYear(), m = date.getMonth();
        var firstDay = new Date(y, m, 1, 0);
        var lastDay = new Date(y, m + 1, 0);

        var date = new Date();
        var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);

        var FlastDay = lastDay.getFullYear() + "/" + ((lastDay.getMonth() + 1)) + "/" +  ((lastDay.getDate() ));
        var FfirstDay =  firstDay.getFullYear() + "/" + ((firstDay.getMonth() + 1)) + "/" + ((firstDay.getDate() ));

        //alert(converteDatas(FfirstDay) + ' à ' + FlastDay);
        $('#data-ini').val(converteDatas(FfirstDay));
        $('#data-fim').val(converteDatas(FlastDay));

        }


    function reload_tabela_comissoes() {


        // var periodoPesq = $('#periodoPesq').val();
        // alert(periodoPesq);

        /*  var idvend = $('#idvendedor').val();
         var inicio = $('#data-ini').val();
         var fim = $('#data-fim').val();
        
             var table = $('#comissoes').DataTable();
             table.clear().draw(); */


    }



    $(document).ready(function() {

        mostra_dados();

        pegaPeriodoMesAtual();

        $("#filter-button-area").click(function() {
            reload_tabela_comissoes();
        });

    });
    </script>

    <script>
    $(document).ready(function() {
        var table = $('#comissoes').DataTable();
       
        $('#comissoes tbody').on('click', 'tr', function() {

            var rIndex = table.row( this ).index();
            var num_pedido = table.cell( rIndex, 0 ).data();

            var url = "../lista_vendas/editar_pedido.php?numero=" + num_pedido + "&view=comissoes";
            window.location.replace(url);
        });
    });
    </script>

   

</body>

</html>