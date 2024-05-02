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
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- 
    
    MODIFICAÇÃO BY: Diego Fernandes
     Nova folha de estilos
     modelo Stays

 -->
<link rel="stylesheet" type="text/css" href="css/new-style.css">


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
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fas fa-people-arrows mr-1"></i>
                            Clientes
                        </h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="btn" onclick="OpenCadastro()"><i class="fas fa-users"></i> Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn" onclick="OpenPesquisa()"><i class="fas fa-search-plus"></i>
                                        Pesquisar</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->

                </div>
                <!-- /.card -->

                <!-- Div Cadastros -->
                <div class="card card-info divs" id="divCadastros">
                    <div class="card-header">
                        <h3 class="card-title">Cadastro de Pessoas</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="cadastroPessoa" name="cadastroPessoa" action="" method="POST" class="form-horizontal">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome"
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">CPF</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cpf" id="cpf" onblur="TestaCPF(this)"
                                                class="form-control" placeholder="CPF" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">RG</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="rg" class="form-control" placeholder="RG" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Nascimento</label>
                                        <div class="col-sm-10">
                                            <input type="date" name="nascimento" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail3">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="inputEmail3"
                                                placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Telefone</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="telefone" class="form-control" required>
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
                                        <label for="inputName">Complemento</label>
                                        <div class="col-sm-10">
                                            <input name="complemento" type="text" class="form-control"
                                                autocomplete="off" placeholder="complemento" required>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button onclick="OpenCadastro()" class="btn btn-danger">Cancelar</button>
                            <button type="submit" class="btn btn-info float-right">Salvar</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!--/div Cadastros -->

                <!-- Div Pesquisa -->
                <div class="card card-warning" id="divPesquisar">
                    <div class="card-header">
                        <h3 class="card-title">Pesquisar Registros</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form id="pesquisaPessoa" name="pesquisaPessoa" action="" method="POST" class="form-horizontal">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">Nome</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="nome2" class="form-control" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputName">CPF</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="cpf2" id="cpf2" onblur="TestaCPF(this)"
                                                class="form-control" placeholder="CPF">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail3">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email2" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning float-right">Pesquisar</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
                <!--/div pesquisa -->
                <div id="result" name="result">
                    <?php
                $path = dirname(__FILE__);
                $path .= '/pesquisa.php';
                include_once($path);
                ?>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de Registros</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="clientes" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>E-mail(s)</th>
                                        <th class="hide">RG</th>
                                        <th class="hide">Telefone</th>
                                        <th class="hide">Cep</th>
                                        <th class="hide">Logradouro</th>
                                        <th class="hide">Bairro</th>
                                        <th class="hide">Cidade</th>
                                        <th class="hide">UF</th>
                                        <th class="hide">Complemento</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                    $date = $row['nascimento'];?>
                                 <tr>
                                    
                                    <td><?php echo $row['id_pessoa']; ?></td>
                                    <td><?php echo $row['nome']; ?> </td>
                                    <td><?php echo $row['cpf']; ?> </td>
                                    <td><?php echo $row['email']; ?> </td>
                                    <td class="hide"><?php echo $row['rg']; ?> </td>
                                    <td class="hide"><?php echo $row['telefone']; ?> </td>
                                    <td class="hide"><?php echo $row['cep']; ?> </td>
                                    <td class="hide"><?php echo $row['logradouro']; ?> </td>
                                    <td class="hide"><?php echo $row['bairro']; ?> </td>
                                    <td class="hide"><?php echo $row['cidade']; ?> </td>
                                    <td class="hide"><?php echo $row['uf']; ?> </td>
                                    <td class="hide"><?php echo $row['complemento']; ?> </td>
                                    <td>
                                        <button title='Editar' type='button' class='btn btn-warning copiar' data-toggle='modal' data-target='#updateClientes'><i class='fas fa-edit'></i></button>
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
        <?php
            $path = dirname(__FILE__);
            $path .= '/modal.php';
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
    <!--Exibe Div -->
    <script src="js/divs.js"></script>
    <!-- Valida CPF -->
    <script src="js/cpf.js"></script>
    <!-- Alertas -->
    <script src="js/alerts.js"></script>
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <script src="js/update.js"></script>
    <!--Via Cep -->
    <script src="../../includes/js/viacep.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
    $(function() {
        $("#clientes").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
       
    });
    </script>



</body>

</html>
