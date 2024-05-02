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
              <form id="quicksearch" action="/i/users/landlords/1/0" class="ajax_form" novalidate="true" role="form">
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input class="form-control" type="text" value="" name="search" placeholder="Nome ou E-Mail">
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <div class="dropdown bootstrap-select show-tick input-group-btn resp-user form-control bs3 bs3-has-addon"><select class="selectpicker resp-user form-control" name="respId" id="respID" data-onlyactive="1" data-job="responsable_apartment_user" data-staffid="" title="Gestor do Proprietário">
                        <option class="bs-title-option" value=""></option>
                        <option class="bs-title-option" value=""></option>
                        <option value="">Gestor do Proprietário</option>
                        <option value="59551f895ad044000193a21a">Cleyton Mendonça (64) 99228-4668</option>
                        <option value="5f493b9546451a2708925c4f">admin</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="respID" title="Gestor do Proprietário">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Gestor do Proprietário</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                        <div class="filter-expand">Gestor do Proprietário</div>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 359px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 309px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li><a role="option" class="dropdown-item bs-title-option" id="bs-select-1-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Gestor do Proprietário</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Cleyton Mendonça (64) 99228-4668</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">admin</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <ul class="nav nav-pills nav-stacked">

                <li role="presentation">
                    <a href="../hospedes/">
                      <span>Contas de Hóspedes</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>


                  <li role="presentation" class="active">
                    <a href="#">
                      <span>Contas de Proprietários</span>
                      <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>

                  <li role="presentation">
                    <a href="../corretores/">
                      <span>Contas de Corretores</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>

                  <li role="presentation">
                    <a href="../user/">
                      <span>Contas de Usuários do Sistema</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
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
                    <a href="/i/users/landlords/0/0">
                      <span>Inativo</span>
                      <i class="fa fa-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>
                </ul>
                <hr>


                <a id="btn-add-new-landlord" class="btn btn-success" href="/i/landlord/new"><i class="fa fa-plus"></i></a>
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
          <div class="col-lg-9 col-md-9 col-xs-12 scroll well well-sm ps">
            <div id="user-rows">
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
                          <a href="/i/account-overview/59551f2f680f7b0001900bc2">Cleyton Mendonça</a>
                          | cleytoncn@hotmail.com
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
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/KA02G" style="margin: 0 3px 6px 0; width: 45px;">KA02G</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/PH39E" style="margin: 0 3px 6px 0; width: 45px;">PH39E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/NS01F" style="margin: 0 3px 6px 0; width: 45px;">NS01F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/QM02F" style="margin: 0 3px 6px 0; width: 45px;">QM02F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/NH04F" style="margin: 0 3px 6px 0; width: 45px;">NH04F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/PH06E" style="margin: 0 3px 6px 0; width: 45px;">PH06E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/PH11E" style="margin: 0 3px 6px 0; width: 45px;">PH11E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/PH15E" style="margin: 0 3px 6px 0; width: 45px;">PH15E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/TN01E" style="margin: 0 3px 6px 0; width: 45px;">TN01E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/GV01F" style="margin: 0 3px 6px 0; width: 45px;">GV01F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/UB02E" style="margin: 0 3px 6px 0; width: 45px;">UB02E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/PH02E" style="margin: 0 3px 6px 0; width: 45px;">PH02E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/PH14E" style="margin: 0 3px 6px 0; width: 45px;">PH14E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/HK01F" style="margin: 0 3px 6px 0; width: 45px;">HK01F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/EY03F" style="margin: 0 3px 6px 0; width: 45px;">EY03F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5a341159155a0a00103523ef">EBENEZER FARIA ALVES</a>
                          | efal2000@hotmail.com
                          | +55 71 98796 8790<a target="_blank" href="https://wa.me/5571987968790"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;<span class="label label-info">pt</span>&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                          <small class="label label-danger">landlord</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/VU02E" style="margin: 0 3px 6px 0; width: 45px;">VU02E</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/JH01G" style="margin: 0 3px 6px 0; width: 45px;">JH01G</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/NH01F" style="margin: 0 3px 6px 0; width: 45px;">NH01F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5e37317c60510900102baa8c">Fernando de Carvalho sobrinho .</a>
                          | fernando.csobrinho@gmail.com
                          | +55 6185927017
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/ZP02F" style="margin: 0 3px 6px 0; width: 45px;">ZP02F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5b58810abf5c180011feeee3">JOÃO PEGORARO</a>
                          | joao.pegoraro@gmail.com
                          | +55 61 98485 2006<a target="_blank" href="https://wa.me/5561984852006"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;<span class="label label-info">pt</span>&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/EI01F" style="margin: 0 3px 6px 0; width: 45px;">EI01F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5f49437e46451a3a26925d96">Jose Nildo Ferreira De Siqueira</a>
                          | joselialacqua@gmail.com
                          | +55 64 99290 6392<a target="_blank" href="https://wa.me/5564992906392"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/IF01G" style="margin: 0 3px 6px 0; width: 45px;">IF01G</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5e35e88cfc5b4a0010734882">José Carlos Miranda Torrejais .</a>
                          | torrejais@yahoo.com.br
                          | +55 11 97015 9220<a target="_blank" href="https://wa.me/5511970159220"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/ZP04F" style="margin: 0 3px 6px 0; width: 45px;">ZP04F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5bbb92b94f192800124d22d8">LUIZ TAMIYO NAGATA</a>
                          | luiz-nagata@uol.com.br
                          | +55 11 99996 2568<a target="_blank" href="https://wa.me/5511999962568"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/HF01F" style="margin: 0 3px 6px 0; width: 45px;">HF01F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/HH02F" style="margin: 0 3px 6px 0; width: 45px;">HH02F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_f.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5e639f4ab8916300107c25ec">MARIA BARBOSA DE MENEZES</a>
                          | apcaldasgolden@gmail.com
                          | +55 61 3585 3672
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/AY01G" style="margin: 0 3px 6px 0; width: 45px;">AY01G</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_f.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5d713669a0b15400109ef0f5">MARIA DA CONCEIÇÃO CALDAS</a>
                          | victorcaldasluna@gmail.com
                          | +55 6281183078
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/TU03F" style="margin: 0 3px 6px 0; width: 45px;">TU03F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/TT02F" style="margin: 0 3px 6px 0; width: 45px;">TT02F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/TT03F" style="margin: 0 3px 6px 0; width: 45px;">TT03F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/TY02F" style="margin: 0 3px 6px 0; width: 45px;">TY02F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5e2f2fa0e8102d0010f65ed5">MARIA SALETE ARAUJO FERREIRA .</a>
                          | mariasalete.araujo@hotmail.com
                          | +55 64 99232 0360<a target="_blank" href="https://wa.me/5564992320360"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/ZN02F" style="margin: 0 3px 6px 0; width: 45px;">ZN02F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5985f61df1ae1b000f38a772">MARTINHO APARECIDO GALLO</a>

                          | +55 6199842602
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                          <small class="label label-danger">landlord</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/QS03E" style="margin: 0 3px 6px 0; width: 45px;">QS03E</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5daa227d733062001088e1f4">Normando Munhoz</a>
                          | normandomunhoz@hotmail.com
                          | +55 62 98143 1116<a target="_blank" href="https://wa.me/5562981431116"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;<span class="label label-info">es</span>&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/VO02F" style="margin: 0 3px 6px 0; width: 45px;">VO02F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5e30471765a81d0010dbb805">PAULO JANDER DE SOUSA</a>
                          | jeanemoreira.jm@gmail.com
                          | +55 34 99167 8000<a target="_blank" href="https://wa.me/5534991678000"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/PI01E" style="margin: 0 3px 6px 0; width: 45px;">PI01E</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5f0cbb11c55ce9d2225d7383">SIDNEI ROBERTO DE CARVALHO SILVA</a>
                          | sidneiroberto.carvalho@gmail.com
                          | +55 6299750575
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/FZ02G" style="margin: 0 3px 6px 0; width: 45px;">FZ02G</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/WP02F" style="margin: 0 3px 6px 0; width: 45px;">WP02F</a>
                          <a class="btn btn-default btn-sm" href="/i/apartment/FZ01G" style="margin: 0 3px 6px 0; width: 45px;">FZ01G</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_f.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5fa59fe0f0ef986eabacae28">SUELEN CARVALHO DA SILVA</a>
                          | suellin@hotmail.com
                          | +55 61 99877 7382<a target="_blank" href="https://wa.me/5561998777382"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/KL02G" style="margin: 0 3px 6px 0; width: 45px;">KL02G</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5bbe89c10e1fee0012d40851">THIAGO NEVES GOMES DAMACENO</a>
                          | tneves2986@gmail.com
                          | +55 62 98267 6057<a target="_blank" href="https://wa.me/5562982676057"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;<span class="label label-info">pt</span>&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/HG01F" style="margin: 0 3px 6px 0; width: 45px;">HG01F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_f.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5d58121157edd20010aa814d">VERÔNICA VILAUBA NOGUEIRA DUTRA</a>
                          | veronicavnd@gmail.com
                          | +55 61 99810 8359<a target="_blank" href="https://wa.me/5561998108359"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">landlord</small>
                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/apartment/VG01E" style="margin: 0 3px 6px 0; width: 45px;">VG01E</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5f05e4c06e247460966ece9d">Wilton Silva Neto</a>
                          | wilton@jctemporada.com.br
                          | +55 64 99213 3329<a target="_blank" href="https://wa.me/5564992133329"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">agente_local</small>
                          <small class="label label-danger">agent</small>
                          <small class="label label-danger">landlord</small>
                          <small class="label label-warning">bookings/reservations</small>
                          <small class="label label-warning">checkin/out</small>
                          <small class="label label-warning">cashing</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default user-item" style="margin-bottom:5px">
                <div class="media">
                  <div class="media-left media-top panel-body">
                    <div class="media-object">
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_m.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5f493b9546451ab730925c4d">admin</a>
                          | jctemporadaadmin@jctemporada.com.br
                          | +55 64 3453 2115
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">Limpeza</small>
                          <small class="label label-danger">Maintenance</small>
                          <small class="label label-danger">agente_local</small>
                          <small class="label label-danger">director_local</small>
                          <small class="label label-danger">TEMPORADA</small>
                          <small class="label label-danger">ADMINISTRATIVO</small>
                          <small class="label label-danger">marketing</small>
                          <small class="label label-danger">JC TEMPORADA</small>
                          <small class="label label-danger">SupervisorOperacional</small>
                          <small class="label label-danger">agent</small>
                          <small class="label label-danger">director</small>
                          <small class="label label-danger">staff</small>
                          <small class="label label-danger">sysadmin</small>
                          <small class="label label-danger">landlord</small>
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
                        <div class="pull-right btn-group">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
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