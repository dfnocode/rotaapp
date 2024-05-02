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
              <form id="quicksearch" action="/i/users/clients/1/0" class="ajax_form" novalidate="true" role="form">
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input class="form-control" type="text" value="" name="search" placeholder="Nome ou E-Mail">
                  </div>
                </div>
                <hr>
                <ul class="nav nav-pills nav-stacked">

                  <li role="presentation" class="active">
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

                  <li role="presentation">
                    <a href="../user/">
                      <span>Contas de Usuários do Sistema</span>
                      <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                    </a>
                  </li>
                </ul>
                <hr>




                <a id="btn-add-new-client" class="btn btn-success" href="/i/client/new"><i class="fa fa-plus"></i></a>
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
          <div class="col-lg-9 col-md-9 col-xs-12 scroll well well-sm ps ps--active-y">
            <div id="user-rows">
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
                          <a href="/i/account-overview/568fa7272740e30100312389">Nome não cadastrado</a>


                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                          <small class="label label-danger">director</small>
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
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/56ab671613a55301004f1a34">Nome não cadastrado</a>
                          | system@stays.net

                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">sysadmin</small>
                          <small class="label label-danger">director</small>
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
                          <a href="/i/account-overview/5b9989a745f3c000126a556a">'Adriano soares lemos</a>
                          | adriano.festas@hotmail.com
                          | +55 61 99249 6489<a target="_blank" href="https://wa.me/5561992496489"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/HJ09F" style="margin: 0 3px 6px 0; width: 45px;">HJ09F</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/SM12F" style="margin: 0 3px 6px 0; width: 45px;">SM12F</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/SM13F" style="margin: 0 3px 6px 0; width: 45px;">SM13F</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/BC02G" style="margin: 0 3px 6px 0; width: 45px;">BC02G</a>
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
                          <a href="/i/account-overview/5aef2f556f63ea0010f4c43b">ADEILDO MARTINS DE LUCENA FILHO</a>
                          | afilho.294707@guest.booking.com
                          | +55 659960290
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/CK01F" style="margin: 0 3px 6px 0; width: 45px;">CK01F</a>
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
                          <a href="/i/account-overview/5e1487bea276b300110ca734">ADELAIDE OLIVEIRA COSTA</a>
                          | delaocnobre@yahoo.com.br
                          | +1 061985404926
                          | &nbsp;&nbsp;&nbsp;<span class="label label-info">en</span>&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/AN07G" style="margin: 0 3px 6px 0; width: 45px;">AN07G</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/AN36G" style="margin: 0 3px 6px 0; width: 45px;">AN36G</a>
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
                          <a href="/i/account-overview/5bb26d943b19c70012e4beee">ADELSON ROBERTO ARANTES</a>
                          | adelson_roberto@jctemporada.com
                          | +55 64 99242 1617<a target="_blank" href="https://wa.me/5564992421617"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/GC09F" style="margin: 0 3px 6px 0; width: 45px;">GC09F</a>
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
                          <a href="/i/account-overview/5b6df6f4ff666d00111e8512">ADEMAR LINO FERREIRA</a>
                          | ademar_lf@jctemporada.com
                          | +55 64 99217 4383<a target="_blank" href="https://wa.me/5564992174383"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/FT08F" style="margin: 0 3px 6px 0; width: 45px;">FT08F</a>
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
                          <a href="/i/account-overview/5d3f4c68454e800010e4ef23">ADENILSON MARQUES LEÃO</a>
                          | adenilsonmleao@hotmail.com
                          | +55 62 98598 3093<a target="_blank" href="https://wa.me/5562985983093"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/SP05F" style="margin: 0 3px 6px 0; width: 45px;">SP05F</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/YH23F" style="margin: 0 3px 6px 0; width: 45px;">YH23F</a>
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
                          <a href="/i/account-overview/59b16ec9d2d5e3001080a78f">ADILSON NOGUEIRA</a>
                          | ailtonfsc@bol.com.br
                          | +55 62 3954 1072
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/RZ19E" style="margin: 0 3px 6px 0; width: 45px;">RZ19E</a>
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
                          <a href="/i/account-overview/5d97316b1c41f90010749049">ADRIANA ALVES MARTINS DE SOUZA</a>
                          | realizarteventos@hotmail.com
                          | +55 6291350019
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/VD05F" style="margin: 0 3px 6px 0; width: 45px;">VD05F</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/WZ27F" style="margin: 0 3px 6px 0; width: 45px;">WZ27F</a>
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
                          <a href="/i/account-overview/59c0226381cc75000fa7a258">ADRIANA DELLA MONICA FACCINI</a>
                          | adrianafaccini@gmail.com
                          | +55 61 99112 7687<a target="_blank" href="https://wa.me/5561991127687"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;<span class="label label-info">en</span>&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/TC01E" style="margin: 0 3px 6px 0; width: 45px;">TC01E</a>
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
                          <a href="/i/account-overview/5ce6d6cc1ca3c900101a23d9">ADRIANA FRANCISCA DE OLIVEIRA</a>
                          | virginia@altaestacaoviagens.com.br
                          | +55 34 98844 6176<a target="_blank" href="https://wa.me/5534988446176"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | &nbsp;&nbsp;&nbsp;<span class="label label-info">en</span>&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/RA14F" style="margin: 0 3px 6px 0; width: 45px;">RA14F</a>
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
                          <a href="/i/account-overview/5d644aea96f82b0010baee88">ADRIANA GOMES DE OLIVEIRA ,</a>
                          | frangodapaioca@gmail.com
                          | +55 3491628782
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/TT30F" style="margin: 0 3px 6px 0; width: 45px;">TT30F</a>
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
                          <a href="/i/account-overview/5bc8f5d93f4c460012ad838a">ADRIANA MARIA GOMES</a>
                          | adrianamariagomes@jctemporada.com.br
                          | +55 62 98418 6079<a target="_blank" href="https://wa.me/5562984186079"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/HQ28F" style="margin: 0 3px 6px 0; width: 45px;">HQ28F</a>
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
                          <a href="/i/account-overview/5d4b285f3b3c730010e1300d">ADRIANA MOTOYAMA .</a>
                          | fvanilsonsss@gmail.com
                          | +55 11 97748 2848<a target="_blank" href="https://wa.me/5511977482848"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/SW04F" style="margin: 0 3px 6px 0; width: 45px;">SW04F</a>
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
                          <a href="/i/account-overview/5b3d223e79466500106756c4">ADRIANA PEREIRA DA CUNHA</a>
                          | adrianaleaodacunha@gmail.com
                          | +55 61 98204 7636<a target="_blank" href="https://wa.me/5561982047636"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/DV04F" style="margin: 0 3px 6px 0; width: 45px;">DV04F</a>
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
                          <a href="/i/account-overview/59cbf4dfbc45090010f6b44f">ADRIANA SENA</a>

                          | +44 92981159429
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/TA01E" style="margin: 0 3px 6px 0; width: 45px;">TA01E</a>
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
                          <a href="/i/account-overview/5e17423f182c9e001079c2da">ADRIANE ALVES BORGES DOS SANTOS</a>
                          | adrianeabstos@gmail.com
                          | +55 6299517523
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/YZ13F" style="margin: 0 3px 6px 0; width: 45px;">YZ13F</a>
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
                          <a href="/i/account-overview/5cf2864cad062a0010481ac5">ADRIANE BARBOSA DO COUTO</a>
                          | adrianecouto_1@hotmail.com
                          | +55 62 98139 8297<a target="_blank" href="https://wa.me/5562981398297"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
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
                      <img loading="lazy" class="img-circle" src="/common/img/no_photo_f.png" style="max-width: 40px; min-width: 40px;">
                    </div>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-xs-8">
                        <h5 class="media-heading">
                          <a href="/i/account-overview/5baa4da49d62b80012088be8">ADRIANI GONÇALVES DIAS</a>
                          | adriani_sgo@hotmail.com
                          | +55 67 99927 5757<a target="_blank" href="https://wa.me/5567999275757"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/HI07F" style="margin: 0 3px 6px 0; width: 45px;">HI07F</a>
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
                          <a href="/i/account-overview/59d67f9d839c96000fadb54a">ADRIANNE DA SILVA VAZ</a>
                          | adriannejesus@hotmail.com
                          | +55 62 99193 7759<a target="_blank" href="https://wa.me/5562991937759"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | &nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/TI05E" style="margin: 0 3px 6px 0; width: 45px;">TI05E</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/VG07E" style="margin: 0 3px 6px 0; width: 45px;">VG07E</a>
                          <a class="btn btn-default btn-sm" href="/i/reservation/WP09E" style="margin: 0 3px 6px 0; width: 45px;">WP09E</a>
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
                          <a href="/i/account-overview/5b6df5cf4cb6200011e3bf3c">ADRIANO FERREIRA BORGES</a>
                          | adriano_fb@jctemporada.com
                          | +55 64 99217 4383<a target="_blank" href="https://wa.me/5564992174383"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/FT07F" style="margin: 0 3px 6px 0; width: 45px;">FT07F</a>
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
                          <a href="/i/account-overview/5cfe9da5fb1d4600102abf47">ADRIANO INÁCIO DE SOUSA</a>
                          | adrianojc@jctemporada.com.br
                          | +55 62 99135 2791<a target="_blank" href="https://wa.me/5562991352791"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/QP10F" style="margin: 0 3px 6px 0; width: 45px;">QP10F</a>
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
                          <a href="/i/account-overview/5b06b8a271291a001012c35e">ADRIANO LOPES DE JESUS</a>
                          | adriano_ljesus@gmail.com
                          | +55 64 99220 2926<a target="_blank" href="https://wa.me/5564992202926"><img loading="lazy" src="/common/img/whatsapp.png"></a>
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/BY02F" style="margin: 0 3px 6px 0; width: 45px;">BY02F</a>
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
                          <a href="/i/account-overview/5d7b9e34756fd80010d06e1c">AEDER CARDOSO pinheiro</a>
                          | fvanidddddlson@gmail.com
                          | +55 6493362178
                          | <span class="label label-info">br</span>&nbsp;&nbsp;&nbsp;&nbsp;
                        </h5>
                        <p>

                          <small class="label label-danger">client</small>
                        </p>
                      </div>
                      <div class="col-xs-4">
                        <div class="pull-right btn-group">
                          <a class="btn btn-default btn-sm" href="/i/reservation/UG12F" style="margin: 0 3px 6px 0; width: 45px;">UG12F</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <nav class="text-center">
              <ul class="pagination">
                <li class="disabled"><a>4.294 total</a></li>
              </ul>
              <ul class="pagination">
                <li class="hidden"><a href="#">◄</a></li>
                <li class="active"><a href="/i/users/clients/1/0">1</a></li>
                <li><a href="/i/users/clients/1/1">2</a></li>
                <li><a href="/i/users/clients/1/2">3</a></li>
                <li><a href="/i/users/clients/1/3">4</a></li>
                <li><a href="/i/users/clients/1/4">5</a></li>
                <li class="hidden-xs"><a href="/i/users/clients/1/5">6</a></li>
                <li><a href="/i/users/clients/1/170">...</a></li>
                <li><a href="/i/users/clients/1/171">172</a></li>
                <li><a href="/i/users/clients/1/1">►</a></li>
              </ul>
            </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1035px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 451px;"></div>
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