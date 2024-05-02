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


<style>
img-empreendimento {
    display: block;
    width: 50%;
    margin: 10px auto;
}

.buttons-img {
    position: absolute;
    top: 0;
    right: 8px;
}
</style>


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
                <div class="row">

                    <!-- Default box -->
                    <div class="col-md-4">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Empreendimentos Cadastrados</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <form id="lista" action="." method="POST">
                                    <table id="empreendimentos" class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nome</th>
                                                <th>Visualizar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <input type="hidden" id="id_empreendimento" name="id_empreendimento"
                                                value="">
                                            <?php
                                    $path = dirname(__FILE__);
                                    $path .= '/listaEmpreendimentos.php';
                                    include_once($path);
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):
                                       
                                ?>
                                            <tr>
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['nome']; ?></td>
                                                <td><button title="Adicionar Grupo" type="submit"
                                                        class="btn btn-success copiar">
                                                        <i class="far fa-eye"></i></button></td>

                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.card -->

                    <?php
                        $path = dirname(__FILE__);
                        $path .= '/dadosEmpreendimento.php';
                        include_once($path);
                    ?>


                    <!-- Box Empreendimento -->
                    <div class="col-sm-8">
                        <!-- general form elements -->

                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Detalhes do Empreendimento</h3>
                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                            <!--/card header -->
                            <div class="card-body">
                                <form name="form_dados" id="form_dados" action="" method="POST" class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName">Nome</label>
                                        <div class="col-sm-12">
                                            <input type="hidden" name="codigo"
                                                value="<?php echo $id_empreendimento; ?>">
                                            <input type="text" name="nome" value="<?php echo $nome; ?>"
                                                class="form-control" placeholder="Nome" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputName">CEP</label>
                                        <div class="col-sm-12">
                                            <input name="cep" type="text" class="form-control" autocomplete="off"
                                                placeholder="CEP" id="cep" size="10" maxlength="9" name="cep"
                                                type="text" id="cep" value="<?php echo $cep; ?>" size="10" maxlength="9"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Rua</label>
                                        <div class="col-sm-12">
                                            <input name="rua" class="form-control" autocomplete="off" placeholder="Rua"
                                                type="text" id="rua" size="60" value="<?php echo $logradouro; ?>"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Bairro</label>
                                        <div class="col-sm-12">
                                            <input name="bairro" type="text" id="bairro" size="40" class="form-control"
                                                autocomplete="off" placeholder="Bairro" value="<?php echo $bairro; ?>"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputName">Cidade</label>
                                        <div class="col-sm-12">
                                            <input name="cidade" type="text" id="cidade" size="40" class="form-control"
                                                autocomplete="off" placeholder="Cidade" value="<?php echo $cidade; ?>"
                                                required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="inputName">Estado</label>
                                        <div class="col-sm-12">
                                            <input name="uf" type="text" id="uf" size="2" class="form-control"
                                                autocomplete="off" placeholder="UF" value="<?php echo $uf; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="inputName">Lat.</label>
                                        <div class="col-sm-12">
                                            <input name="latitude" title="Latitude" type="text" id="latitude" size="2"
                                                class="form-control" autocomplete="off" title="Latitude"
                                                placeholder="Latitude" value="<?php echo $latitude; ?>" required>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="inputName" title="Longitude">Long.</label>
                                        <div class="col-sm-12">
                                            <input name="longitude" title="Longitude" type="text" id="longitude"
                                                size="2" class="form-control" autocomplete="off" placeholder="Longitude"
                                                value="<?php echo $longitude; ?>" required>
                                        </div>
                                    </div>
                                    <br />
                                    <button type="submit" class="btn btn-warning float-right">Atualizar</button>
                                </form>
                            </div>
                            <!-- /card boddy -->
                        </div>

                        <!-- Div Informações -->
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Informações do Empreendimento</h3>
                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="card-body">
                                <form name="form_informacoes" id="form_informacoes" action="" method="POST"
                                    class="form-horizontal">
                                    <input type="hidden" name="codigo" value="<?php echo $id_empreendimento; ?>">
                                    <div class="col-md-12 pad">
                                        <div class="form-group">
                                            <label for="inputName">Informações</label>

                                            <div class="col-sm-12">
                                                <textarea class="textarea" autocomplete="off" name="informacoes"
                                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                <?php echo $informacoes; ?>
                                                </textarea>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                    <br />
                                    <button type="submit" class="btn btn-warning float-right">Atualizar</button>
                                </form>
                            </div>
                        </div>

                        <!-- Div Imagem -->
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Imagens do Empreendimento</h3>
                                &nbsp;&nbsp;
                                <button title='Adicionar' type='button' class='btn btn-success btn-xs'
                                    data-toggle='modal' data-target='#add_imagem'><i class='fas fa-plus'></i></button>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <?php
                                                $path = dirname(__FILE__);
                                                $path .= '/listaImagens.php';
                                                include_once($path);
                                                while($rows = mysqli_fetch_array($resultImagens, MYSQLI_ASSOC)):
                                                    
                                        ?>
                                    <div class="col-sm-2">

                                        <a href="../../includes/dist/img/img_empreendimentos/<?php echo $rows['imagem']; ?>"
                                            data-toggle="lightbox" data-max-width="600" data-gallery="gallery">
                                            <img src="../../includes/dist/img/img_empreendimentos/<?php echo $rows['imagem']; ?>"
                                                class="img-fluid img-empreendimento" />
                                        </a>
                                        <div class="pull-right buttons-img">
                                            <i class='fas fa-trash-alt' id="imagem"
                                                title="<?php echo $rows['imagem']; ?>" data-toggle='modal'
                                                data-target='#delete_imagem'></i>
                                        </div>

                                    </div>


                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Div Imagens -->
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Localização do Empreendimento</h3>
                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="card-body">
                                <iframe
                                    src="https://maps.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>&z=15&output=embed"
                                    width="100%" height="270" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>

                        <!-- Div Amenidades -->
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Amenidades do Empreendimento</h3>
                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="card-body">
                                <form name="update_amenidades" id="update_amenidades" action="" method="POST">
                                    <div class="row">
                                        <input type="hidden" name="codigo" value="<?php echo $id_empreendimento; ?>">
                                        <?php 
                                            $path = dirname(__FILE__);
                                            $path .= '/listaAmenidades.php';
                                            include_once($path);
                                            while($rowAmenidade = mysqli_fetch_array($resultAmenidades, MYSQLI_ASSOC)):
                                                $id_amenidade = $rowAmenidade['id']; 
                                               
                                        ?>
                                        <div class="col-md-3">
                                            <div class="from-group row">
                                                <div class="form-check">
                                                    <?php if(!empty($rowAmenidade['id_empreendimento'])){
                                                                echo "<input name='amenidades[]' value='$id_amenidade' class='form-check-input' type='checkbox' checked>";
                                                            }else{
                                                                echo "<input name='amenidades[]' value='$id_amenidade' class='form-check-input' type='checkbox'>";
                                                            }
                                                        ?>

                                                    <label style="font-size:12px;"
                                                        class="form-check-label"><?php echo $rowAmenidade['nome']; ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                        <br />
                                        <button type="submit" class="btn btn-warning float-right">Atualizar</button>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Div Amenidades -->
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">Proximidades do Empreendimento</h3>
                                &nbsp;&nbsp;
                                <button title='Adicionar' type='button' class='btn btn-success btn-xs'
                                    data-toggle='modal' data-target='#add_proximidade'><i class='fas fa-plus'></i></button>
                                <div class="card-tools">

                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                             <!-- /.card-header -->
                             <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table id="table_proximidades" class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Nome</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $path = dirname(__FILE__);
                                          $path .= '/listaProximidades.php';
                                          include_once($path);
                                         
                                          while($rowProximidade = mysqli_fetch_array($resultProximidade, MYSQLI_ASSOC)) : 
                                    ?>
                                        <tr>
                                            <td><?php echo $rowProximidade['id']; ?></td>
                                            <td><?php echo $rowProximidade['proximidade']; ?> </td>
                                            <td>
                                                <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete_proximidade'><i class='fas fa-trash'></i></button>
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>
            </section>
            <!-- /.content -->
            <?php 
                $path = dirname(__FILE__);
                $path .= '/modalRemove.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalRemove_proximidade.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalAdd.php';
                include_once($path);

                $path = dirname(__FILE__);
                $path .= '/modalAdd_proximidade.php';
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

    <!-- jQuery UI -->
    <script src="../../includes/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../includes/dist/js/adminlte.min.js"></script>

    <!-- Summernote -->
    <script src="../../includes/plugins/summernote/summernote-bs4.min.js"></script>
    <!--table-->
    <script src="js/idtable.js"></script>
    <!-- Ekko Lightbox -->
    <script src="../../includes/plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <!-- Forms -->
    <script src="js/removeImagem.js"></script>
    <!-- Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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