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


        <div class="row">

          <!-- PRIMEIRA COLUNA FORMULARIO COM FILTROS -->

          <div class="col-lg-3 col-md-2 scroll padding-top-10">

            <!-- form-filters classe NOVA PARA FIXAR O FORMULARIO -->
            <div class="panel-body">
              <div class="media">
                <div class="media-body">
                  <p class="lead text-center text-muted" style="margin: 0;">
                    <strong> Entradas e Saídas</strong>
                    <br> dashboard
                    <br>
                  </p>
                </div>
              </div>
              <hr>
              <form id="filterform" class="ajax_form" novalidate="true" role="form">
                <div class="row input-daterange" data-validate="daterange">
                  <div class="form-group col-lg-6 has-feedback has-success">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control date from" placeholder="De" type="text" autocomplete="off">
                      <input name="from" type="hidden">
                    </div>
                  </div>
                  <div class="form-group col-lg-6 has-feedback has-success">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <input class="form-control date to" placeholder="To" type="texto" autocomplete="off">
                      <input name="to" type="hidden">
                    </div>
                  </div>
                </div>
                <!--Agent-->
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-user-circle"></i>
                    </span>
                    <div class="dropdown bootstrap-select show-tick input-group-btn form-control agent bs3 bs3-has-addon"><select class="selectpicker form-control agent" name="agent" data-agentid="" data-container="#maincontent" title="Agentes">
                        <option class="bs-title-option" value=""></option>
                        <option class="bs-title-option" value=""></option>
                        <option value="">Não Selecionado</option>
                        <option value="noagent">NoAgent</option>
                        <option value="59551f895ad044000193a21a">Cleyton Mendonça (64) 99228-4668</option>
                        <option value="5c8c040ba138950010406c09">WELITON AMORIM (64) 99238-8389</option>
                        <option value="5dbae48241b8e700115fed36">VICTOR HUGO REZENDE DE MENDONÇA</option>
                        <option value="5f05e4c06e24745af66ece9f">WILTON (64) 99242-1617</option>
                        <option value="5f493b9546451a2708925c4f">admin</option>
                        <option value="5f917d9fea5d089d52cd5ecd">Lucas Costa</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Agentes">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Agentes</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                        <div class="filter-expand">Agentes</div>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 314px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 264px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li><a role="option" class="dropdown-item bs-title-option" id="bs-select-1-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NoAgent</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Cleyton Mendonça (64) 99228-4668</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">WELITON AMORIM (64) 99238-8389</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VICTOR HUGO REZENDE DE MENDONÇA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">WILTON (64) 99242-1617</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">admin</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-1-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Lucas Costa</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right">
                    <i class="fa fa-refresh"></i> Atualizar
                  </button>
                </div>
              </form>
            </div>
          </div>
          <!-- 
              
            
            TELA DE RESULTADOS
            
            -->
          <div class="col-lg-9 col-md-10 well well-sm scroll padding-top-10 ps ps--active-y">
            <div class="panel panel-default panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-4">
                    <h4>
                      Resultados do Filtro
                      <small>03 dez 2020</small>
                      <br>
                      <small>
                        <span class="label label-default countlabel">Valor Total 4</span>
                        <span class="label label-info resolvelabel">Resolvido 0</span>
                        <span class="label label-warning unresolvelabel">Pendente 4</span>
                      </small>
                    </h4>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <input class="form-control" type="text" id="quickinput" placeholder="Filtro Rápido">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <form id="form-view">
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="selectpicker form-control" name="optionView" data-live-search="0">
                          <option value="all">Mostrar Todas</option>
                          <option value="in">Apenas Entradas</option>
                          <option value="out">Apenas Saídas</option>
                          <option value="in/out">INs e OUTs no mesmo dia</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Mostrar Todas">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Mostrar Todas</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open">
                          <div class="inner open" role="listbox" id="bs-select-2" tabindex="-1">
                            <ul class="dropdown-menu inner " role="presentation"></ul>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-sm-2 text-right">
                    <a class="btn btn-default" href="/i/reception/print?from=2020-12-03&amp;to=2020-12-03" target="_blank">
                      <i class="fa fa-print"></i> Imprimir
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="reception clearfix flex-row" data-avatar="LD1 201">
              <div class="col-sm-2">
                <div class="row" style="word-break: break-all;">
                  <div class="col-xs-12">
                    <a class="lead" href="/i/apartment/PH14E"><strong>LD1 201</strong></a>
                  </div>
                </div>
                <div class="row text-muted">
                  <div class="col-xs-12">
                    <small>Chácara Roma</small>
                    <br>
                    <small>Circular Francisca Lima de Bezerra, S/N, Apartamento 201</small>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <span class="label label-danger">sujo</span>
                    <p><small class="text-muted">Ùltima Limpeza:</small><br><label class="label label-default">04 ago 2018 11:40</label></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 fleaxible">

                <div class="panel panel-default" data-_id="5f9ddff00c050779a541eebb" data-direction="out">
                  <div class="panel-body">
                    <div class="media">
                      <div class="media-left">
                        <a href="/i/account-overview/5f9ddfe40c0507766341eeb2">
                          <img loading="lazy" class="media-object img-circle" src="/common/img/no_photo_m.png" alt="a" width="40px">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a class="client-name" href="/i/account-overview/5f9ddfe40c0507766341eeb2">Claudivan Januário da Silva .</a>
                        </h4>
                        <p>



                          <span class="label label-success">contrato</span>



                          <span class="label label-default"><i class="fa fa-calendar"></i> | 31 out 2020</span>
                          <span class="label label-default"><i class="fa fa-user"></i> | WELITON AMORIM (64) 99238-8389</span>
                          <span class="label label-default">3&nbsp;noites</span>
                          <span class="label label-default">1&nbsp;hóspede (s)</span>
                          <a class="label label-warning" role="button" aria-expanded="false" data-toggle="collapse" href="#emailsInfo-5f9ddff00c050779a541eebb"><i class="fa fa-envelope-o"></i> | sended</a>
                        </p>
                        <div class="clearfix collapse" id="emailsInfo-5f9ddff00c050779a541eebb">
                          <hr>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | RES/M</span>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | RES/B</span>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | REM/M</span></div>
                        <div class="clearfix">
                          <h4>Saída <small>30 nov - 03 dez 2020</small></h4>
                          <p>
                            <span class="label label-default">10:00</span>

                            <span class="label label-default">regular</span>
                            <span class="label label-warning btn-assign-worker" data-_idtask="5fc30ed8d0b48d09ea2630ad">Delegar tarefa <i class="fa fa-pencil fa-margin-xs-left" style="cursor: pointer;"></i></span>
                          </p>
                        </div>
                        <h4>Pagamento <small>R$&nbsp;300,00</small></h4>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="progress" style="position: relative;">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <div class="progress" style="position:relative;">
                              <div class="progress-bar progress-bar-success" style="width: 100%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <span class="label label-success hidden">chegou</span>
                    <div class="pull-right">
                      <a href="/i/reservation/LK04G/deposit-refund" class="btn btn-default btn-sm" target="_black">Devolução de Caução</a>
                      <a href="/i/reservation/LK04G" class="btn btn-info btn-sm" target="_black">LK04G <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 fleaxible">
                <div class="panel empty"></div>
              </div>
              <hr>
            </div>
            <div class="reception clearfix flex-row" data-avatar="LD2 - 194">
              <div class="col-sm-2">
                <div class="row" style="word-break: break-all;">
                  <div class="col-xs-12">
                    <a class="lead" href="/i/apartment/IF01G"><strong>LD2 - 194</strong></a>
                  </div>
                </div>
                <div class="row text-muted">
                  <div class="col-xs-12">
                    <small>Chácara Roma</small>
                    <br>
                    <small>Circular Francisa Lima de Bezerra, S/N, - Apartamento 194</small>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <span class="label label-danger">sujo</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 fleaxible">

                <div class="panel panel-default" data-_id="5fc64ef0fa5a0a8ccbd61060" data-direction="out">
                  <div class="panel-body">
                    <div class="media">
                      <div class="media-left">
                        <a href="/i/account-overview/5f8de7232374f2b311867b8f">
                          <img loading="lazy" class="media-object img-circle" src="/common/img/no_photo_m.png" alt="a" width="40px">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a class="client-name" href="/i/account-overview/5f8de7232374f2b311867b8f">LEANDRO ROBERTO SANTOS ANDRADE ..</a>
                        </h4>
                        <p>

                          <span class="label label-warning">pré reserva</span>





                          <span class="label label-default"><i class="fa fa-calendar"></i> | 01 dez 2020</span>
                          <span class="label label-default"><i class="fa fa-user"></i> | WILTON (64) 99242-1617</span>
                          <span class="label label-default">2&nbsp;noites</span>
                          <span class="label label-default">1&nbsp;hóspede (s)</span>
                          <a class="label label-default" role="button" aria-expanded="false" data-toggle="collapse" href="#emailsInfo-5fc64ef0fa5a0a8ccbd61060"><i class="fa fa-envelope-o"></i> | not sended</a>
                        </p>
                        <div class="clearfix collapse" id="emailsInfo-5fc64ef0fa5a0a8ccbd61060">
                          <hr>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | RES/M</span>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | RES/B</span>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | REM/M</span></div>
                        <div class="clearfix">
                          <h4>Saída <small>01 - 03 dez 2020</small></h4>
                          <p>
                            <span class="label label-default">10:00</span>

                            <span class="label label-default">regular</span>
                            <span class="label label-warning btn-assign-worker" data-_idtask="5fc64ef1fa5a0ab4f2d61070">Delegar tarefa <i class="fa fa-pencil fa-margin-xs-left" style="cursor: pointer;"></i></span>
                          </p>
                        </div>
                        <h4>Pagamento <small>R$&nbsp;200,00</small></h4>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="progress" style="position: relative;">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <div class="progress" style="position:relative;">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <span class="label label-success hidden">chegou</span>
                    <div class="pull-right">
                      <a href="/i/reservation/LK07G/deposit-refund" class="btn btn-default btn-sm" target="_black">Devolução de Caução</a>
                      <a href="/i/reservation/LK07G" class="btn btn-info btn-sm" target="_black">LK07G <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 fleaxible">
                <div class="panel empty"></div>
              </div>
              <hr>
            </div>
            <div class="reception clearfix flex-row" data-avatar="EV 106">
              <div class="col-sm-2">
                <div class="row" style="word-break: break-all;">
                  <div class="col-xs-12">
                    <a class="lead" href="/i/apartment/EI01F"><strong>EV 106</strong></a>
                  </div>
                </div>
                <div class="row text-muted">
                  <div class="col-xs-12">
                    <small>Turista 1</small>
                    <br>
                    <small>Rua Presidente Castelo Branco Qd 30 Lt 08/10, 450, Apartamento 106</small>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <span class="label label-danger">sujo</span>
                    <p><small class="text-muted">Ùltima Limpeza:</small><br><label class="label label-default">02 jan 2020 09:22</label></p>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 fleaxible">
                <div class="panel empty"></div>
              </div>
              <div class="col-sm-5 fleaxible">

                <div class="panel panel-default" data-_id="5f286ca7a5368d247e60a3fc" data-direction="in">
                  <div class="panel-body">
                    <div class="media">
                      <div class="media-left">
                        <a href="/i/account-overview/5f286ca6a5368dd3fb60a3f9">
                          <img loading="lazy" class="media-object img-circle" src="/common/img/no_photo_m.png" alt="a" width="40px">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a class="client-name" href="/i/account-overview/5f286ca6a5368dd3fb60a3f9">Priscila Oliveira</a>
                        </h4>
                        <p>


                          <span class="label label-info">reserva</span>




                          <span class="label label-default"><i class="fa fa-calendar"></i> | 03 ago 2020</span>
                          <span class="label label-default"><i class="fa fa-user"></i> | WELITON AMORIM (64) 99238-8389</span>
                          <span class="label label-default">API expedia</span>
                          <span class="label label-default">2&nbsp;noites</span>
                          <span class="label label-default">2&nbsp;hóspede (s)</span>
                          <a class="label label-success" role="button" aria-expanded="false" data-toggle="collapse" href="#emailsInfo-5f286ca7a5368d247e60a3fc"><i class="fa fa-envelope-o"></i> | received</a>
                        </p>
                        <div class="clearfix collapse" id="emailsInfo-5f286ca7a5368d247e60a3fc">
                          <hr>
                          <span class="label
label-success
"><i class="fa
fa-envelope
"></i> | RES/M</span>
                          <span class="label
label-success
"><i class="fa
fa-envelope
"></i> | RES/B</span>
                          <span class="label

label-warning

"><i class="fa

fa-envelope

"></i> | REM/M</span></div>
                        <div class="clearfix">
                          <h4>Chegada <small>03 - 05 dez 2020</small></h4>
                          <p>
                            <span class="label label-default">14:00</span>

                            <span class="label label-default">regular</span>
                            <span class="label label-warning btn-assign-worker" data-_idtask="5fc15458d0b48dd3e425e484">Delegar tarefa <i class="fa fa-pencil fa-margin-xs-left" style="cursor: pointer;"></i></span>
                          </p>
                        </div>
                        <h4>Pagamento <small>R$&nbsp;260,00</small></h4>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="progress" style="position: relative;">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <div class="progress" style="position:relative;">
                              <div class="progress-bar progress-bar-success" style="width: 70%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <span class="label label-success hidden">chegou</span>
                    <div class="pull-right">
                      <div class="btn btn-success btn-sm clientArrived">Cliente Chegou!</div>
                      <a href="/i/reservation/GY01G" class="btn btn-info btn-sm" target="_black">GY01G <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            <div class="reception clearfix flex-row" data-avatar="LD1 51">
              <div class="col-sm-2">
                <div class="row" style="word-break: break-all;">
                  <div class="col-xs-12">
                    <a class="lead" href="/i/apartment/QZ01F"><strong>LD1 51</strong></a>
                  </div>
                </div>
                <div class="row text-muted">
                  <div class="col-xs-12">
                    <small>Chácara Roma</small>
                    <br>
                    <small>Circular Francisca Lima de Bezerra, S/N, - Apartamento 51</small>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <span class="label label-danger">sujo</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-5 fleaxible">
                <div class="panel empty"></div>
              </div>
              <div class="col-sm-5 fleaxible">

                <div class="panel panel-default" data-_id="5fbadc77b543463e3723cd24" data-direction="in">
                  <div class="panel-body">
                    <div class="media">
                      <div class="media-left">
                        <a href="/i/account-overview/5fbadc76b543460f2423cd21">
                          <img loading="lazy" class="media-object img-circle" src="/common/img/no_photo_m.png" alt="a" width="40px">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a class="client-name" href="/i/account-overview/5fbadc76b543460f2423cd21">renato antonio de almeida souza</a>
                        </h4>
                        <p>


                          <span class="label label-info">reserva</span>




                          <span class="label label-default"><i class="fa fa-calendar"></i> | 22 nov 2020</span>
                          <span class="label label-default">API expedia</span>
                          <span class="label label-default">3&nbsp;noites</span>
                          <span class="label label-default">5&nbsp;hóspede (s)</span>
                          <a class="label label-default" role="button" aria-expanded="false" data-toggle="collapse" href="#emailsInfo-5fbadc77b543463e3723cd24"><i class="fa fa-envelope-o"></i> | not sended</a>
                        </p>
                        <div class="clearfix collapse" id="emailsInfo-5fbadc77b543463e3723cd24">
                          <hr>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | RES/M</span>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | RES/B</span>
                          <span class="label


label-default
"><i class="fa


fa-envelope-o
"></i> | REM/M</span></div>
                        <div class="clearfix">
                          <h4>Chegada <small>03 - 06 dez 2020</small></h4>
                          <p>
                            <span class="label label-default">14:00</span>

                            <span class="label label-default">regular</span>
                            <span class="label label-warning btn-assign-worker" data-_idtask="5fc838494a670f0858dc281f">Delegar tarefa <i class="fa fa-pencil fa-margin-xs-left" style="cursor: pointer;"></i></span>
                          </p>
                        </div>
                        <h4>Pagamento <small>R$&nbsp;569,08</small></h4>
                        <div class="row">
                          <div class="col-xs-3">
                            <div class="progress" style="position: relative;">
                            </div>
                          </div>
                          <div class="col-xs-9">
                            <div class="progress" style="position:relative;">
                              <div class="progress-bar progress-bar-success" style="width: 100%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <span class="label label-success hidden">chegou</span>
                    <div class="pull-right">
                      <div class="btn btn-success btn-sm clientArrived">Cliente Chegou!</div>
                      <a href="/i/reservation/LM01G" class="btn btn-info btn-sm" target="_black">LM01G <i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1035px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 764px;"></div>
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
</body>

</html>