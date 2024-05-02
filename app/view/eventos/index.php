<!DOCTYPE html>
<html>
<?php
    $path = dirname(__FILE__);
    $path .= '/../../config/functions/autenticaUsuario.php';
    include_once($path);

    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/header.php';
    include_once($path);

    
    $id_evento = $_POST['id_evento_lista'];
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
                <div class="row">
                
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Eventos Cadastrados</h3>
                                        <div class="card-tools">
                                            <button title='Add Período' type='button' class='btn btn-success' data-toggle='modal' data-target='#modalAdd'><i class="fas fa-calendar-plus"></i></button>
                                        </div>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                    <form id="lista" action="." method="POST">
                                        <table id="tbl_eventos" class="table table-head-fixed text-nowrap">
                                       
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Nome</th>
                                                    <th>Ínicio</th>
                                                    <th>Fim</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <input type="hidden" name="id_evento_lista" id="id_evento_lista" value="">
                                            <?php
                                                $path = dirname(__FILE__);
                                                $path .= '/listaEventos.php';
                                                include_once($path);
                                                
                                                while($rows = mysqli_fetch_array($resulteventos, MYSQLI_ASSOC)) : 
                                            ?>
                                                <tr>
                                                    <td><?php echo $rows['id']; ?></td>
                                                    <td><?php echo $rows['nome']; ?></td>
                                                    <td><?php echo date( 'd-m-Y', strtotime($rows['data_inicio'])) ; ?> </td>
                                                    <td><?php echo date( 'd-m-Y', strtotime($rows['data_fim'])) ?> </td>
                                                    
                                                    <td>
                                                        <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalDelete'><i class='fas fa-trash'></i></button>
                                                        <button title='Editar' type='button' class='btn btn-warning' data-toggle='modal' data-target='#modalUpdate'><i class='fas fa-edit'></i></button>
                                                        <button title='Visualizar' type='submit' class='btn btn-info' data-toggle='modal' data-target='#'><i class="fas fa-eye"></i></button>
                                                    </td>
                                                </tr>
                                                <?php endwhile; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    <!-- /.row -->
                    </div>
                    <!--/Div Períodos-->

                    <!--Div Tarifas -->
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Tarifas do evento </h3>
                                        <div class="card-tools">
                                            <button title='Add Período' type='button' class='btn btn-success' data-toggle='modal' data-target='#modalAdd_tarifa'><i class="fas fa-funnel-dollar"></i></button>
                                        </div>

                                    </div>
                                    <div class="card-body table-responsive p-0">
                                    <table id="tbl_tarifas" class="table table-head-fixed text-nowrap">
                                       
                                       <thead>
                                           <tr>
                                               <th>Id</th>
                                               <th>Min. Diárias</th>
                                               <th>Tarifa</th>
                                               <th>Ações</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                       <?php
                                           $path = dirname(__FILE__);
                                           $path .= '/listaTarifas.php';
                                           include_once($path);
                                           
                                           while($rows = mysqli_fetch_array($resultTarifas, MYSQLI_ASSOC)) : 
                                       ?>
                                           <tr>
                                               <td><?php echo $rows['id']; ?></td>
                                               <td><?php echo $rows['min_diaria']; ?> </td>
                                               <td><?php echo $rows['tarifa']; ?> </td>
                                               
                                               <td>
                                                   <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalDelete_tarifa'><i class='fas fa-trash'></i></button>
                                                </td>
                                           </tr>
                                           <?php endwhile; ?>
                                       </tbody>
                                   </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
            <!--/Div Row-->
            </div>
                                                


            </section>
            <!-- /.content -->
            <?php
                $path = dirname(__FILE__);
                $path .= '/modalDelete.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modal_deleteTarifa.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalUpdate.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalAdd.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalAdd_tarifa.php';
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