<!DOCTYPE html>
<html>
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
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <!-- Div Cadastros -->
                <div class="card card-warning divs" id="divCadastros">
                    <div class="card-header">
                        <h3 class="card-title">Formas de Pagamento</h3>
                    </div>
                     <!-- form start -->
                     <form id="cadastroFormaPG" name="cadastroForma" action="" method="POST" class="form-horizontal">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputName">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputName">Taxa</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="taxa" class="form-control" placeholder="Ex(10.2)"
                                                required>
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
                </div>
                <!-- /.card -->

                 <!-- Lista de Usuários -->
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Formas de pagamento cadastradas</h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table id="formas_pg" class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome</th>
                                            <th>Taxa</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $path = dirname(__FILE__);
                                          $path .= '/listaFormasPg.php';
                                          include_once($path);
                                         
                                          while($rows = mysqli_fetch_array($resultFtp, MYSQLI_ASSOC)) : 
                                    ?>
                                        <tr>
                                            <td><?php echo $rows['id']; ?></td>
                                            <td><?php echo $rows['nome']; ?></td>
                                            <td><?php echo $rows['taxa']; ?> </td>
                                            <td>
                                                <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalDelete'><i class='fas fa-trash'></i></button>
                                                <button title='Editar' type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalUpdate'><i class='fas fa-edit'></i></button>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->

            </section>
            <!-- /.content -->
            <?php
                $path = dirname(__FILE__);
                $path .= '/modalDelete.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalUpdate.php';
                include_once($path);
            ?>
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
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <!-- Tabs -->
    <script src="js/tab.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>

</html>