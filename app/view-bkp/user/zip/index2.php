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
<link rel="stylesheet" type="text/css" href="css/style.css">



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

        <!-- 
        NOVA VIEW BY: DIEGO FERNANDES
        MODEL CONTENT PADRAO STAYS
         -->

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-xs-12 scroll padding-top-20 padding-bottom-40 ps">
                            <div class="card" id="divPesquisar">
                                <div class="panel-body">
                                    <p class="lead text-center text-muted">
                                        <strong>
                                            Gerenciamento de Contas
                                        </strong>
                                        <br>
                                        crie e gerencie novos usuários
                                    </p>
                                    <hr>
                                    <form id="pesquisaPessoa" name="pesquisaPessoa" action="" method="POST" class="form-horizontal">
                                        <div class="form-group has-feedback">
                                            <div class="input-group" style="padding:3px">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input class="form-control" type="text" value="" name="search" placeholder="Nome ou E-Mail">
                                            </div>
                                        </div>

                                        <ul class="list-group">

                                            <li class="list-group-item">
                                                <a href="#" class="admins">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        <span>Apenas membros da Empresa</span>
                                                    </label>
                                                </a>
                                                <span style="float:right; padding-right: 7px">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                </span>
                                            </li>

                                            <li class="list-group-item">
                                                <a href="#" class="admins">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        <span>Contas de Clientes</span>
                                                    </label>
                                                </a>
                                                <span style="float:right; padding-right: 7px">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                </span>
                                            </li>

                                            <li class="list-group-item">
                                                <a href="#" class="admins">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        <span>Contas de Proprietários</span>
                                                    </label>
                                                </a>
                                                <span style="float:right; padding-right: 7px">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                </span>
                                            </li>

                                        </ul>


                                        <hr>
                                        <ul class="list-group">
                                            <li class="list-group-item" role="presentation" class="active">
                                                <a href="#" class="admins">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        <span>Ativo</span>
                                                    </label>
                                                </a>
                                                <span style="float:right; padding-right: 7px">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                </span>
                                            </li>
                                            <li class="list-group-item" role="presentation" class="active">
                                                <a href="#" class="admins">
                                                    <label class="form-check-label" for="autoSizingCheck">
                                                        <span>Inativo</span>
                                                    </label>
                                                </a>
                                                <span style="float:right; padding-right: 7px">
                                                    <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                                </span>
                                            </li>


                                        </ul>
                                        <hr>


                                        <div id="btn-add-new-user" class="btn btn-success btn-create-basic" data-toggle="modal" data-target="#divCadastros"><i class="fa fa-plus"></i></div>
                                        <button class="btn btn-info pull-right" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Pesquisar</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <!-- LISTAGEM DOS USUARIOS DOS SISTEMA AO LADO  -->
                        <div class="col-lg-9 col-md-9 col-xs-12 scroll well well-sm ps ps--active-y">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Lista de Usuários</h3>
                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                           
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

                                            while ($rows = mysqli_fetch_array($resultUser, MYSQLI_ASSOC)) :
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
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#"></a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- 
                BARRA DE ATUALIZAR
             -->
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

                <!-- 
                    TELA MODAL DE CADASTRO BASICO DE USUARIOS DO SISTEMA
                 -->
                <div class="modal fade col-lg-12" id="divCadastros" role="dialog">
                    <!-- Cadastro de Usuário -->
                    <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content" style="padding:10px">

                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Selecionar Pessoa</h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <form id="pesquisaPessoa" name="pesquisaPessoa" method="POST" class="form-horizontal">
                                    <ul class="list-group">
                                        <li class="list-group-item">

                                            <label for="inputName"> CPF </label>
                                            <input type="text" name="cpf" id="cpf" onblur="TestaCPF(this)" class="form-control" placeholder="CPF" required>
                                            <br>
                                            <button type="submit" class="btn btn-info">Selecionar</button>
                                        </li>
                                    </ul>

                                </form>




                                <?php
                                $path = dirname(__FILE__);
                                $path .= '/buscaPessoa.php';
                                include_once($path);
                                while ($linha = mysqli_fetch_array($resultBusca, MYSQLI_ASSOC)) :
                                    $email = $linha['email'];
                                    $idPessoa = $linha['id'];
                                    $nome = $linha['nome'];
                                endwhile;
                                ?>
                                <!-- Dados do Usuário -->

                            </div>

                            <div class="card">
                                <div class="card-header">


                                    <form id="cadastroUser" name="cadastroUser" action="" method="POST" class="form-horizontal">
                                        <div class="card-body">

                                            <input type="hidden" value="<?php echo $idPessoa; ?>" name="id_pessoa">

                                            <div class="form-group">
                                                <label for="inputName">Nome</label>

                                                <input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" class="form-control" placeholder="Nome" required>


                                            </div>


                                            <div class="form-group">
                                                <label for="inputEmail3">Email</label>

                                                <input type="email" name="email" class="form-control" id="inputEmail3" value="<?php echo $email; ?>" placeholder="Email" required>

                                            </div>

                                            <div class="form-group">
                                                <label for="inputPass">Senha</label>

                                                <input type="password" name="senha" id="senha" class="form-control" placeholder="***" required>

                                            </div>


                                            <?php
                                            $path = dirname(__FILE__);
                                            $path .= '/listaGrupos.php';
                                            include_once($path);
                                            ?>

                                        </div>
                                        <div class="card-footer">
                                            <button type="button" onclick="OpenCadastro()" class="btn btn-danger">Cancelar</button>
                                            <button type="submit" class="btn btn-info float-right">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->

                                <!-- /.card-footer -->

                            </div>
                        </div>

                    </div>
                </div>



                <!--/div Cadastros -->

                <!-- Lista de Usuários -->



                <!-- /.row -->


                <br /><br />

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