<!DOCTYPE html>
<html>
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.css">
<link rel="stylesheet" type="text/css" href="css/generator-base.css">


<script type="text/javascript" charset="utf-8"
    src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.js">
</script>

<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>
      <script src='../../includes/plugins/pdfmake/pdfmake.min.js'></script>
  <script src='../../includes/plugins/pdfmake/vfs_fonts.js'></script>
<body class="sidebar-mini sidebar-collapse dataTables bootstrap4">

    <!-- Site wrapper -->
    <div class="wrapper" style="display: contents;">
        <!-- Navbar -->
        <?php
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/navbar.php';
    include_once($path);
   
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

            <!-- CORPO DA PAGINA -->
            <section class="content">
            <?php
                $path = dirname(__FILE__);
                $path .= '/tabela.php';
                include_once($path);
            ?>
            </section>

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
</div>

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

         <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

</body>

</html>