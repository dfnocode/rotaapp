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
<!-- Ekko Lightbox -->
<link rel="stylesheet" href="../../includes/plugins/ekko-lightbox/ekko-lightbox.css">
<!-- summernote -->
<link rel="stylesheet" href="../../includes/plugins/summernote/summernote-bs4.css">

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



        <!-- Sidebar -->
        <?php
        $path = dirname(__FILE__);
        $path .= '/../../includes/UI/sidebar.php';
        include_once($path);
    ?>
        <!-- /.sidebar -->


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
                <div class="row">

                <!-- Lista de Grupos -->
                    <div class="col-lg-3 col-md-3 col-xs-12 scroll padding-top-20 padding-bottom-40 ps">
                        <div class="card" id="divPesquisar">
                            <div class="panel-body">
                                <p class="lead text-center text-muted">
                                    <strong>
                                        Grupos de Usuários
                                    </strong>
                                    <br>
                                    <span>crie e gerencie novos grupos</span>
                                </p>
                                <form id="lista" action="." method="POST">
                                    <table id="grupos" class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th></th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <input type="hidden" id="id_grupo" name="id_grupo" value="">
                                            <?php
                                                    $path = dirname(__FILE__);
                                                    $path .= '/listaGrupos.php';
                                                    include_once($path);
                                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):
                                                    
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id_grupo']; ?></td>
                                                <td><?php echo $row['nome']; ?></td>
                                                <td align="right"><button title="Adicionar Grupo" type="submit"
                                                        class="btn btn-success copiar">
                                                        <i class="far fa-eye"></i></button></td>

                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- /Lista de Grupos -->

                <!-- Lista Pemissões -->
                <div class="col-lg-9 col-md-9 col-xs-9 scroll padding-top-20 padding-bottom-40 ps">
                    <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Permissões do Grupo</h3>
                            </div>
                            <form name="update_menus" id="update_menus" action="" method="POST">
                                <div class="card-body">
                                    <div class="row">
                                        <input type="hidden" name="codigo" value="<?php echo $id_grupo; ?>">
                                            <?php 
                                                $path = dirname(__FILE__);
                                                $path .= '/listaMenus.php';
                                                include_once($path);
                                                while($rowMenu = mysqli_fetch_array($resultPermissoes, MYSQLI_ASSOC)):
                                                    $id_permissao = $rowMenu['id']; 
                                                   
                                                
                                            ?>
                                            <div class="col-md-3">
                                                <div class="from-group row">
                                                    <div class="form-check">
                                                        <?php if(!empty($rowMenu['id_grupo'])){
                                                                    echo "<input name='amenidades[]' value='$id_permissao' class='form-check-input' type='checkbox' checked>";
                                                                }else{
                                                                    echo "<input name='amenidades[]' value='$id_permissao' class='form-check-input' type='checkbox'>";
                                                                }
                                                            ?>

                                                        <label style="font-size:12px;"
                                                            class="form-check-label"><?php echo $rowMenu['nome_permissao']; ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-warning float-right">Atualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
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
    <!-- Summernote -->
    <script src="../../includes/plugins/summernote/summernote-bs4.min.js"></script>
    <!--table-->
    <script src="js/idtable.js"></script>
    <!-- Ekko Lightbox -->
    <script src="../../includes/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <script>
    $(function() {
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                wrapping: false
            });
        });
    })
    </script>


    <script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
</body>

</html>