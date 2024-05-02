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
      <?php
            $path = dirname(__FILE__);
            $path .= '/form.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/tabs.php';
            include_once($path);
        ?>
      
      <!-- /.card -->

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
</body>
</html>
