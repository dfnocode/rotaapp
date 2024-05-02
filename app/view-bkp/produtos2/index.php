<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php
$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>

<body class="sidebar-mini sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
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
                </div>
                <!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="row">
                    <!-- div add Cadastro -->
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-plus-square"></i>
                                    &nbsp; Adicionar novo
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <form action="" name="add" id="add" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Nome</label>
                                                <div class="col-sm-10">
                                                    <input type="text" autocomplete="off" name="nome" class="form-control"
                                                        placeholder="Nome" required>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <?php
                                            $path = dirname(__FILE__);
                                            $path .= '/listaFornecedor.php';
                                            include_once($path);
                                        ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Fornecedor</label>
                                                <div class="col-sm-10">
                                                    <select name="fornecedor" class="form-control" required>
                                                        <option value="" disabled>Informe uma Opção</option>
                                                        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row['nome']; ?>
                                                        </option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Valor de Adesão</label>
                                                <div class="col-sm-10">
                                                    <input type="text" autocomplete="off" name="valor_adesao" class="form-control"
                                                        placeholder="Informe o valor" onKeyPress="return(moeda(this,'.',',',event))" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="inputName">Valor de Venda</label>
                                                <div class="col-sm-10">
                                                    <input type="text" autocomplete="off" name="valor_venda" class="form-control"
                                                        placeholder="Informe o Valor" onKeyPress="return(moeda(this,'.',',',event))" required>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            $path = dirname(__FILE__);
                                            $path .= '/listaGrupo_comissao.php';
                                            include_once($path);
                                        ?>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Grupo de Comissão</label>
                                                <div class="col-sm-10">
                                                    <select name="grupo_comissao" class="form-control" required>
                                                        <option value="" disabled>Informe uma Opção</option>
                                                        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)): ?>
                                                        <option value="<?php echo $row['id']; ?>">
                                                            <?php echo $row['nome']; ?>
                                                        </option>
                                                        <?php endwhile; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info float-right">Salvar</button>
                                </div>
                            </form>
                            <!-- /.card-footer -->
                        </div>
                    </div>
                    <!-- /div add Cadastro -->

                    <?php
                    $path = dirname(__FILE__);
                    $path .= '/lista.php';
                    include_once($path);
                    ?>

                    <div class="col-md-12">
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-gifts"></i>
                                    &nbsp; Produtos Cadastrados
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table id="produtos" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th> Código </th>
                                            <th> Nome </th>
                                            <th> Fornecedor </th>
                                            <th> Valor Adesão </th>
                                            <th> Valor Venda </th>
                                            <th> Comição do Vendedor </th>
                                            <th> Ações </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['nome']; ?></td>
                                            <td><?php echo $row['nome_fornecedor']; ?></td>
                                            <td><?php echo $row['valor_adesao']; ?></td>
                                            <td><?php echo $row['valor_venda']; ?></td>
                                            <td><?php echo round($row['comissao'] * 100) / 100; ?>%</td>
                                            <td>
                                                <button title='Excluir' type='button' class='btn btn-danger'
                                                    data-toggle='modal' data-target='#delete'><i
                                                        class='fas fa-trash-alt'></i></button>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /div lista -->

                    
                </div>
                <!-- /.default box -->

                <?php
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
    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <!-- Inner Html Table -->
    <script src="js/inner.js"></script>
    <!-- Converte Moeda -->
    <script src="js/moeda.js"></script>
    <script>
    $(function() {
        $("#produtos").DataTable({
            "responsive": true,
            "autoWidth": false,
        });

    });
    </script>
</body>

</html>