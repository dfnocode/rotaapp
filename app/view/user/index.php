<!DOCTYPE html>
<html>
<?php
$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);


include "../../config/database/conexao.php"; //Conexão


?>

<body class="sidebar-mini sidebar-collapse">
  <script>
    function refresh() {
      setTimeout(function() {
        location.reload();
        alert("LIMPOU");
      }, 100);
    }
  </script>
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
      <!--   <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">

            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><nav class="breadcrumb">
                  <a class="breadcrumb-item" href="#"></a>
                  <a class="breadcrumb-item" href="#"></a>
                  <span class="breadcrumb-item active"></span>
                </nav></a></li>
              </ol>
            </div>
          </div>
        </div>
    
      </section> -->

      <!-- Main content -->
      <section class="content">
        <!--  <button type="button" class="btn btn-secondary" id="cache-button" onclick="refresh()">LIMPAR CACHE</button> -->

        <!-- Default box -->
        <!-- <div class="row">
          <div class="col-md-12" style="text-align: center;">
            <img src="../../includes/dist/img/back.png" width="350" height="350">
          </div>
        </div> -->


        <div class="row scroll-parent">
          <div class="col-lg-3 col-md-3 col-xs-12 scroll padding-top-20 padding-bottom-40 ps">
            <div id="left-menu-block" class="panel-body">
              <p class="lead text-center text-muted">
                <strong>
                  Gerenciamento de Contas
                </strong>
                <br>
                crie e gerencie novos usuários
              </p>
              <hr>
              <form id="quicksearch" action="/i/users/1/0" class="ajax_form" novalidate="true" role="form">
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input class="form-control" type="text" value="" name="search" placeholder="Nome ou E-Mail">
                  </div>
                </div>
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation" class="active">
                    <a href="#" class="admins">
                      <span>Apenas membros da Empresa</span>
                      <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                      <input name="admins" type="hidden" value="1">
                    </a>
                  </li>
                </ul>
                <hr>
                <ul class="nav nav-pills nav-stacked">

                  <li role="presentation">
                    <a href="../hospedes/">
                      <span>Contas de Hóspedes</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>


                  <li role="presentation">
                    <a href="../proprietarios/">
                      <span>Contas de Proprietários</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>

                  <li role="presentation">
                    <a href="../corretores/">
                      <span>Contas de Corretores</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>

                  <li role="presentation" class="active">
                    <a href="#">
                      <span>Contas de Usuários do Sistema</span>
                      <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>
                </ul>
                <hr>
                <ul class="nav nav-pills nav-stacked">
                  <li role="presentation" class="active">
                    <a href="#">
                      <span>Ativo</span>
                      <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="/i/users/0/0?admins=1">
                      <span>Inativo</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>
                </ul>
                <hr>


                <div id="btn-add-new-user" class="btn btn-success btn-create-basic"><i class="fa fa-plus"></i></div>
                <button class="btn btn-info pull-right" type="submit"><i class="fa fa-refresh" aria-hidden="true"></i> Pesquisar</button>
              </form>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <div class="col-lg-9 col-md-9 col-xs-12 scroll well well-sm ps ps--active-x">
            <div id="user-rows">



              <table id="user" class="table table-head-fixed text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
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
                      <td><?php echo $rows['telefone']; ?> </td>  
                      <td><?php echo $rows['login']; ?> </td>
                      
                                    
                      <td>
                        <button title='Editar' type='button' class='btn btn-warning' data-toggle='modal' data-target='#update_user'><i class="fas fa-edit"></i></button>
                        <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete_user'><i class='fas fa-minus-circle'></i></button>
                      </td>
                    </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>



              <!-- CELULA DEFAULT -->
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img class="img-circle img-responsive" style="max-width: 40px; min-width: 40px;" loading="lazy" src="https://www.jctemporada.com.br/image/5cfe9cf3fb1d4600102abf39?width=40&amp;height=40" width="40" height="40" srcset="https://www.jctemporada.com.br/image/5cfe9cf3fb1d4600102abf39?width=40&amp;height=40 1x, https://www.jctemporada.com.br/image/5cfe9cf3fb1d4600102abf39?width=80&amp;height=80 2x">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/59551f2f680f7b0001900bc2">Cleyton Mendonça (64) 99228-4668</a>
                          | <b>cleytoncn@hotmail.com</b>
                          | cleyton@jctemporada.com.br
                          | +55 64 3453 1054
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">Limpeza</small>
                          <small class="label label-danger">Maintenance</small>
                          <small class="label label-danger">director_local</small>
                          <small class="label label-danger">TEMPORADA</small>
                          <small class="label label-danger">ADMINISTRATIVO</small>
                          <small class="label label-danger">marketing</small>
                          <small class="label label-danger">JC TEMPORADA</small>
                          <small class="label label-danger">SupervisorOperacional</small>
                          <small class="label label-danger">agent</small>
                          <small class="label label-danger">director</small>
                          <small class="label label-danger">guest</small>
                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">staff</small>
                          <small class="label label-danger">sysadmin</small>
                          <small class="label label-warning">bookings/reservations</small>
                          <small class="label label-warning">checkin/out</small>
                          <small class="label label-warning">cleaning</small>
                          <small class="label label-warning">maintenance</small>
                          <small class="label label-warning">check_inventory</small>
                          <small class="label label-warning">delete_client</small>
                          <small class="label label-warning">cashing</small>
                          <small class="label label-warning">responsable_apartment_user</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                      </div>
                    </div>
                  </div>

                  <a role="button" class="media-right media-middle text-center media-btn media-sm user-edit" href="/i/account-overview/59551f2f680f7b0001900bc2" "="">
                      <i class=" fa fa-chevron-right text-muted fa-2x"></i>
                  </a>
                </div>
              </div>

            </div>
            <nav class="text-center">
              <ul class="pagination">
                <li class="disabled"><a>35 total</a></li>
              </ul>
              <ul class="pagination">
                <li class="hidden"><a href="#?admins=1">◄</a></li>
                <li class="active"><a href="/i/users/1/0?admins=1">1</a></li>
                <li><a href="/i/users/1/1?admins=1">2</a></li>
                <li><a href="/i/users/1/1?admins=1">►</a></li>
              </ul>
            </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 360px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 333px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 892px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <script>
            requirejs(["views/users"], function(users) {
              users();
            }, appError);
          </script>
        </div>
        <!-- /.card -->

        <?php
        $path = dirname(__FILE__);
        $path .= '/modal_cria_anuncio.php';
        include_once($path);
        ?>

        <?php
        $path = dirname(__FILE__);
        $path .= '/modalEdita.php';
        include_once($path);
        ?>

        <?php
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
</body>

</html>