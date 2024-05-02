<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

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

                <!-- Default box -->
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title"><i class="fas fa-people-arrows mr-1"></i>Configurações</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item" data-toggle="modal" data-target="#add_num_fatura">
                                    <a class="btn"><i class="fas fa-users"></i> Número da Fatura</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                </div>
                <!-- /.card -->

                <!--div lista-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Atualizar Configuração da Fatura/Pedido</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">

                      
                        <?php
                             function writelog ($str,$arqstr) {
                                $open = fopen ($arqstr, "a");
                                fwrite ($open, $str);
                                fclose ($open);
                            }

                            function readlog ($pathfile) {
                                $open = fopen($pathfile,'r+');        
                                $result = fread($open,filesize($pathfile));
                                fclose($open);
                                return ($result); 
                                }


                            if (isset($_REQUEST['acao'])){
                                if($_REQUEST['acao']=='salvar') {
                                    echo 'BUCETA';
                                    $config_num_fatura =  $_POST['prefixo'] . ';' . $_POST['numero_pedido'] . ';' . $_POST['sufixo'] . ';' . $_POST['incluir_data'];
                                    writelog($config_num_fatura, 'config.txt');    
                                }
                            }
                           
                                
                                $config_fatura = explode(";", readlog('config.txt'));
                                print_r($config_fatura);

                                echo (readlog('config.txt'));
                        ?>

                        <form action="" id="config_fatura" name="config_fatura" method="POST"
                            class="form-horizontal">
                            <div class="col-md-6">
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="inputName">Prefixo</label>
                                           
                                                <input type="text" name="prefixo" class="form-control" value="<?php echo $config_fatura[0]; ?>">
                                            
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="inputName">Numeração Pedido</label>
                                      
                                                <input type="text" name="numero_pedido" class="form-control" value="<?php echo $config_fatura[1]; ?>">
                                          
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="inputName">Sufixo</label>
                                            
                                                <input type="text" name="sufixo" class="form-control" value="<?php echo $config_fatura[2]; ?>">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3">                                    
                                        <div class="form-group">
                                        <label for="inputName" class="checkbox">Incluir Data                                                                       
                                            <input type="checkbox" name="incluir_data" id="incluir_data" class="form-control" value="Sim"></label>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a href="./?acao=salvar&prefixo=<?php echo $config_fatura[0]; ?>&numero_pedido=<?php echo $config_fatura[1]; ?>&sufixo=<?php echo $config_fatura[2]; ?>&incluir_data=<?php echo $config_fatura[3]; ?>" type="submit" class="btn btn-success">Salvar</a>
                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
        </div>
        <?php
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
    <script src="js/formsnum_faturas.js"></script>
    <!-- Table -->
    <script src="js/tablenum_faturas.js"></script>
    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>

</html>