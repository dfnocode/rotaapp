<!DOCTYPE html>
<html>
<?php


$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

include "../../config/database/conexao.php"; //Conexão

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
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fas fa-people-arrows mr-1"></i>
                            Usuários
                        </h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item">
                                    <a class="btn" onclick="OpenCadastro()"><i class="fas fa-users"></i> Cadastrar ou
                                        Atualizar</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->

                </div>
                <!-- /.card -->

               <!-- Cadastro de Usuário -->
                <div class="hide" id="divCadastros">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Selecionar Pessoa</h3>
                        </div>
                        <form id="pesquisaPessoa" name="pesquisaPessoa" method="POST" class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputName">CPF</label>
                                            <div class="col-sm-12">
                                                <input type="text" name="cpf" id="cpf" onblur="TestaCPF(this)"
                                                    class="form-control" placeholder="CPF" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <br/>
                                        <button type="submit" class="btn btn-info">Selecionar</button>
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>


                    <?php
                        $path = dirname(__FILE__);
                        $path .= '/buscaPessoa.php';
                        include_once($path);
                        while($linha = mysqli_fetch_array($resultBusca, MYSQLI_ASSOC)):
                            $email = $linha['email'];
                            $idPessoa = $linha['id'];
                            $nome = $linha['nome'];
                        endwhile;
                    ?>
                    <!-- Dados do Usuário -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Cadastrar Usuário</h3>
                        </div>
                        <form id="cadastroUser" name="cadastroUser" action="" method="POST" class="form-horizontal">
                            <div class="card-body">
                                <div class="row">
                                    <input type="hidden" value="<?php echo $idPessoa; ?>" name="id_pessoa">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputName">Nome</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>"
                                                    class="form-control" placeholder="Nome" required>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputEmail3">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="inputEmail3"
                                                    value="<?php echo $email; ?>" placeholder="Email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPass">Senha</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="senha" id="senha" class="form-control"
                                                    placeholder="***" required>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                          $path = dirname(__FILE__);
                                          $path .= '/listaGrupos.php';
                                          include_once($path);
                                    ?>
                                  
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="button" onclick="OpenCadastro()" class="btn btn-danger">Cancelar</button>
                                <button type="submit" class="btn btn-info float-right">Salvar</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
                <!--/div Cadastros -->

                 <!-- Lista de Usuários -->
                 <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Lista de Usuários</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i
                                                    class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table id="user" class="table table-head-fixed text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>Login</th>
                                            <th>Ações</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                          $path = dirname(__FILE__);
                                          $path .= '/listaUsuarios.php';
                                          include_once($path);
                                         
                                          while($rows = mysqli_fetch_array($resultUser, MYSQLI_ASSOC)) : 
                                    ?>
                                        <tr>
                                            <td><?php echo $rows['codigo']; ?></td>
                                            <td><?php echo $rows['nome']; ?> </td>
                                            <td><?php echo $rows['login']; ?> </td>
                                            <td>
                                                <button title='Editar' type='button' class='btn btn-warning' data-toggle='modal' data-target='#update_user'><i class="fas fa-edit"></i></button>
                                                <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#updateClientes'><i class='fas fa-minus-circle'></i></button>
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


                 <br/><br/> 

                 <!-- MODAL -->
                 <?php
                    $path = dirname(__FILE__);
                    $path .= '/modalEdita.php';
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
    <!--Exibe Div -->
    <script src="js/divs.js"></script>
    <!-- Valida CPF -->
    <script src="js/cpf.js"></script>
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <!-- table -->
    <script src="js/table.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>

</html>
