<!DOCTYPE html>
<html>

<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);
?>
<?php
$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);

?>
<link rel="stylesheet" href="../../includes/plugins/ekko-lightbox2/ekko-lightbox.css">

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
             
            <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox">
                <img src="https://unsplash.it/600.jpg?image=251" class="img-fluid">
            </a>
            <p><a href="https://www.youtube.com/watch?v=e-ORhEE9VVg" data-toggle="lightbox">Taylor Swift - Blank Space (standard)</a></p>
<p><a href="https://www.youtube.com/watch?v=e-ORhEE9VVg" data-toggle="lightbox" data-width="640">Taylor Swift - Blank Space (640 x 360)</a></p>
<p><a href="https://www.youtube.com/watch?v=e-ORhEE9VVg" data-toggle="lightbox" data-width="1280">Taylor Swift - Blank Space (1280 x 780)</a></p>

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
        <!-- Latest compiled and minified CSS -->
        
   


        <!-- AdminLTE App -->
        <script src="../../includes/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../includes/dist/js/demo.js"></script>
        <!--Swit Alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 

<!-- <script src="../../includes/plugins/ekko-lightbox2/ekko-lightbox.js"></script> -->
<script src="../../includes/plugins/ekko-lightbox2/ekko-lightbox.min.js"></script>

<script>

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>



 

</body>

</html>