<!DOCTYPE html>
<html>
<!-- DataTables -->
<!-- <link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.css">
<link rel="stylesheet" type="text/css" href="css/generator-base.css">
<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

<script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.js">
</script>
<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/table.tbl_itens_pedido.js"></script>

<script type="text/javascript" charset="utf-8" src="js/dataTables.responsive.min.js"></script>

<script type="text/javascript" charset="utf-8" src="js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/dataTables.dateTime.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/dataTables.select.min.js"></script>


<link rel="stylesheet" href="css/autocomplete.css">
<script src="js/1c-autocomplete.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="css/responsive.dataTables.min.css">
<link rel="stylesheet" href="css/jquery.dataTables.min.css">
<link rel="stylesheet" href="css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="css/buttons.dataTables.min.css">
<link rel="stylesheet" href="css/select.dataTables.min.css">

<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<style>
.id-item {
    display: none;
}

.clinha {
    text-align: center;
}
</style>

<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>

<body class="sidebar-mini sidebar-collapse dataTables">
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
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h2>Pedidos de Venda</h2>
                        <br>
                    </div>
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">Dados do Cliente</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a href="./" class="btn"><i class="fas fa-arrow-left"></i>Voltar para Pedidos</a>
                                </li>
                            </ul>
                        </div>

                        <br><br>
                        <?php
                        // PEGA OS DADOS DO CLIENTE PELO NUMERO DO PEDIDO
                        $numero = $_GET['numero'];
                        
                        $query = "SELECT clientes.id as id, clientes.nome as nome FROM clientes, tbl_pedidos_venda 
                        WHERE clientes.id = tbl_pedidos_venda.id_cliente AND tbl_pedidos_venda.numero_pedido = '$numero'";
                        $result = mysqli_query($conexao,$query); 
                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                          $idcliente = $row['id'];
                          $nome_cliente = $row['nome'];                           
                        endwhile; 
                        
                        ?>

                        <div class="row">

                            <form class="form-inline" style="width:100%" action="">
                                <!-- AUTOCOMPLETE -->
                                <div>
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Cliente</span>
                                        </div>

                                        <input type="text" name="id_cliente" id="id_cliente" class="form-control"
                                            value="<?php echo $nome_cliente; ?>">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group mb-3 input-group-sm">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Vendedor</span>
                                        </div>

                                        <select name="id_vendedor" id="id_vendedor" class="form-control">
                                            <?php 
                                    $query = "SELECT id, nome FROM vendedores";
                                    $result = mysqli_query($conexao,$query); 
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                      echo '<option value="'.$row['id'].'">'.$row['nome']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-1"><button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.card-header -->
                </div>

                <!-- Default box -->
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title"><i class="fas fa-people-arrows mr-1"></i>Detalhes do Pedido</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item" data-toggle="modal" data-target="#add_itens_pedido">
                                    <a class="btn"><i class="fas fa-users"></i>Adicionar Produto</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                </div>
                <!-- /.card -->

                <!--div lista-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Itens do Pedido</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="itens_do_pedido" class="table table-bordered table-striped compact nowrap">
                            <thead>
                                <tr>
                                    <th class="id-item"></th>
                                    <th></th>
                                    <th>Pedido</th>
                                    <th>Produto</th>
                                    <th>Unidade</th>
                                    <th>Valor Unit.</th>
                                    <th>Qtde</th>
                                    <th>Desconto</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php                             
                            //SELECT Número, Data, Situação, Cliente, Total FROM `vendas`
                            

                            $query = "SELECT 
                            I.id,
                            F.numero_pedido as NF,
                            P.descricao as Produto,
                            P.unidade as Unidade,
                            P.preco as Preço,
                            I.quantidade as Quantidade,
                            I.desconto as Desconto,
                            (P.preco * I.quantidade) - I.desconto as Subtotal
                            FROM tbl_pedidos_venda as F
                            INNER JOIN tbl_itens_pedido as I
                            ON F.numero_pedido = I.id_pedido
                            INNER JOIN tbl_produtos as P
                            ON I.id_produto = P.id
                            WHERE I.id_pedido = '$numero'";
                           
                           
                            $result = mysqli_query($conexao,$query);
                            $clinha=1;
                           
                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                            ?>

                                <tr role="row" class="even" data-id="<?php echo $row['id']; ?>">
                                    <td class="id-item"><?php echo $row['id']; ?></td>
                                    <td class="clinha"><span class="badge badge-dark">
                                            <?php echo $clinha; ?>
                                        </span></td>
                                    <td><?php echo $row['NF'] ?> </td>
                                    <td><?php echo $row['Produto']; ?> </td>
                                    <td><?php echo $row['Unidade']; ?> </td>
                                    <td><?php echo converteDinheiro($row['Preço']); ?> </td>
                                    <td><?php echo $row['Quantidade']; ?> </td>
                                    <td><?php echo converteDinheiro($row['Desconto']); ?> </td>
                                    <td><?php echo converteDinheiro($row['Subtotal']); ?> </td>
                                    <td>
                                        <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal'
                                            data-target='#delete'>
                                            <i class='fas fa-trash-alt'></i></button>
                                    </td>

                                </tr>
                                <?php 
                            $clinha++; 
                            endwhile;
                            ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th class="id-item"></th>
                                    <th></th>
                                    <th>Pedido</th>
                                    <th>Produto</th>
                                    <th>Unidade</th>
                                    <th>Valor Unit.</th>
                                    <th>Qtde</th>
                                    <th>Desconto</th>
                                    <th>Subtotal</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
     
            <table cellpadding="0" cellspacing="0" border="0" class="display responsive nowrap" id="tbl_itens_pedido" width="100%">
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Número</th>
                        <th>Produto</th>
                        <th>Qtde</th>
                        <th>Desconto</th>
                    </tr>
                </thead>
            </table>
        

                    </div>
          
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->


        </div>

      


        <?php

        /*     $path = dirname(__FILE__);
            $path .= '/modalAdd.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/modalUpdate.php';
            include_once($path);
            **/

            $path = dirname(__FILE__);
            $path .= '/modal_add_itens.php';
            include_once($path);


            $path = dirname(__FILE__);
            $path .= '/modal_delete_itens.php';
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
    <script src="js/frm_itens_pedido.js"></script>

    <!-- Table -->
    <script src="js/table_itens_pedido.js"></script>
    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function() {
        ac.attach({
            target: "id_cliente",
            data: "search-cliente.php",
            post: {
                type: "name"
            }
        });

    });
    </script>
    <script>
    $(function() {
        $("#itens_do_pedido").DataTable({
            "responsive": true,
            "autoWidth": false //,
            /*   "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": true,
                "searchable": true
            }
        ] */
        });

    });
    </script>
</body>

</html>