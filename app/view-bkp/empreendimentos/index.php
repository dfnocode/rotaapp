<!DOCTYPE html>
<html>
<?php
header ('Content-type: text/html; charset=UTF-8');

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>
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
                <div class="card card-info" id="divCadastros">
                    <div class="card-header">
                        <h3 class="card-title">Cadastro de Empreendimentos</h3>
                    </div>
                    <!-- /.card-header -->
                    <form id="" name="empreendimento" action="../../config/functions/insertEmpreendimento.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">CEP</label>
                                        <div class="col-sm-10">
                                            <input name="cep" type="text" class="form-control" autocomplete="off"
                                                placeholder="CEP" id="cep" value="" size="10" maxlength="9" name="cep"
                                                type="text" id="cep" value="" size="10" maxlength="9"
                                                onblur="pesquisacep(this.value);" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Rua</label>
                                        <div class="col-sm-10">
                                            <input name="rua" class="form-control" autocomplete="off" placeholder="Rua"
                                                type="text" id="rua" size="60" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Bairro</label>
                                        <div class="col-sm-10">
                                            <input name="bairro" type="text" id="bairro" size="40" class="form-control"
                                                autocomplete="off" placeholder="Bairro" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Cidade</label>
                                        <div class="col-sm-10">
                                            <input name="cidade" type="text" id="cidade" size="40" class="form-control"
                                                autocomplete="off" placeholder="Cidade" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Estado</label>
                                        <div class="col-sm-10">
                                            <input name="uf" type="text" id="uf" size="2" class="form-control"
                                                autocomplete="off" placeholder="UF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Lat.</label>
                                        <div class="col-sm-10">
                                            <input name="latitude" title="Latitude" type="text" id="latitude" size="2" class="form-control"
                                                autocomplete="off" title="Latitude" placeholder="Latitude" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName" title="Longitude">Long.</label>
                                        <div class="col-sm-10">
                                            <input name="longitude" title="Longitude" type="text" id="longitude" size="2" class="form-control"
                                                autocomplete="off" placeholder="Longitude" required>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <br/>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputName">Imagens</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="arquivos[]" id="Arquivo" multiple="multiple">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 pad">
                                    <div class="form-group">
                                        <label for="inputName">Informações</label>
                                       <p>
                                          <div class="col-sm-12">
                                            <textarea class="textarea" name="informacoes" placeholder="Place some text here"
                                                style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                        </div>
                                      </p>
                                    </div>
                                </div>
                                <div class="col-sm-12" style="text-align:center">
                                    <h2>Amenidades</h2>
                                    <br/>
                                </div>
                                <div class="col-sm-12">
                                    <div class="row">
                                       
                                <?php 
                                        $path = dirname(__FILE__);
                                        $path .= '/listaAmenidades.php';
                                        include_once($path);
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                ?>
                                            <div class="col-md-2">
                                                <div class="from-group row">
                                                    <div class="form-check">
                                                        <input name="amenidades[]" value="<?php echo $row['id']; ?>" class="form-check-input" type="checkbox">
                                                        <label style="font-size:12px;" class="form-check-label"><?php echo $row['nome']; ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button onclick="location.href=''" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-info float-right">Salvar</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                
                <br/>

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
    <!--Via Cep -->
    <script src="../../includes/js/viacep.js"></script>
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <!-- Summernote -->
    <script src="../../includes/plugins/summernote/summernote-bs4.min.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
</body>

</html>