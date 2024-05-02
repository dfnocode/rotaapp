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
          <div class="col-md-3 scroll ps">
            <div class="panel-body">
              <div class="media" style="overflow: visible;">
                <div class="media-body">
                  <p class="lead text-center text-muted" style="margin: 0;">
                    <strong> Reservas</strong>
                    <br> Filtro e Relatório
                    <br>
                  </p>
                </div>
                <div class="media-right media-top">
                  <div class="dropdown">
                    <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default dropdown-toggle"><i class="fa fa-chevron-down text-muted"></i></div>
                    <ul class="dropdown-menu" style="right: 0;left: auto;">
                      <li><a href="/i/finance/overview" style="line-height: 2.5;">Dashboard Financeiro</a></li>
                      <li><a href="/i/finance/accountingloss?type=d" style="line-height: 2.5;">Contas a Pagar</a></li>
                      <li><a href="/i/finance/accountingwin?type=c" style="line-height: 2.5;">Contas a Receber</a></li>
                      <li>
                        <a href="/i/finance/accounting
?from=
&amp;to=
" style="line-height: 2.5;">
                          Extratos de Contas
                        </a>
                      </li>
                      <li>
                        <a href="/i/product/accounting/0
?from=2020-12-03
&amp;to=2020-12-10
" style="line-height: 2.5;">
                          Balanço de Proprietários
                        </a>
                      </li>
                      <li class="active">
                        <a href="#" style="line-height: 2.5;">Achar Reserva</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr>
              <form id="filterform" class="ajax_form" action="/i/bookings/0" novalidate="true" role="form">
                <div class="form-group">
                  <ul class="nav nav-pills nav-justified">
                    <li id="ongoing" class="active">
                      <a href="#">
                        Em Vigor
                      </a>
                    </li>
                    <li id="deleted">
                      <a href="/i/bookings/0?dtype=1">
                        Delet.
                      </a>
                    </li>
                    <input name="dtype" value="" type="hidden">
                  </ul>
                </div>
                <hr>
                <div class="input-daterange row" data-validate="daterange">
                  <div class="col-lg-6 form-group has-feedback has-success">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="form-control date from" placeholder="De" autocomplete="off" type="text">
                      <input name="from" type="hidden">
                    </div>
                  </div>
                  <div class="col-lg-6 form-group has-feedback has-success">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <input class="form-control date to" placeholder="Até" autocomplete="off" type="text">
                      <input name="to" type="hidden">
                    </div>
                  </div>
                </div>


                <div class="form-group">
                  <div class="dropdown bootstrap-select show-tick form-control dateof bs3"><select class="form-control selectpicker dateof" data-live-search="0" name="dateof">
                      <option value="_dtcheckIn" selected="">Chegada</option>
                      <option value="_dtcheckOut">Saída</option>
                      <option value="_dtcreate">Criação</option>
                      <option value="_dtinclude">Inclui</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-12" aria-haspopup="listbox" aria-expanded="false" title="Chegada">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner">Chegada</div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-12" tabindex="-1">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="dtdesconsider" class="checkbox hide">
                  <label>
                    <input type="checkbox" name="dtdesconsider" value="1"> Desconsiderar alteração do status da reserva
                  </label>
                </div>
                <!--additional filter by dates if Check-In/Check-Out is selected -->
                <div id="dtextra" class="checkbox">
                  <label>
                    <input type="checkbox" name="dtextra" value="1"> Filtro extra por data de criação
                  </label>
                </div>
                <div class="dtextra-block hidden">
                  <div class="input-daterange row" data-validate="daterange">
                    <div class="col-lg-6 form-group has-feedback">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input class="form-control date fromex" placeholder="De" autocomplete="off" type="text">
                        <input name="fromex" type="hidden">
                      </div>
                    </div>
                    <div class="col-lg-6 form-group has-feedback">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </span>
                        <input class="form-control date toex" placeholder="Até" autocomplete="off" type="text">
                        <input name="toex" type="hidden">
                      </div>
                    </div>
                  </div>
                </div>
                <input type="hidden" name="sortOrder">
                <div class="form-group">
                  <label>Tipos</label>
                  <div class="dropdown bootstrap-select show-tick form-control type bs3"><select class="selectpicker form-control type" name="type[]" data-live-search="0" multiple="">
                      <option value="reserved" data-content="<span class='label label-default' style='background-color: rgba(250,250,38,0.56); color: black;'>pré reserva</span>" selected="">Pré Reserva</option>
                      <option value="booked" data-content="<span class='label label-default' style='background-color: rgba(12, 107, 144, 0.55);'>reserva</span>" selected="">Reserva</option>
                      <option value="contract" data-content="<span class='label label-default' style='background-color: rgba(12, 107, 144, 0.55);'>contrato</span>" selected="">Contrato</option>
                      <option value="blocked" data-content="<span class='label label-default' style='background-color: rgba(250, 78, 38, 0.56);'>bloqueado</span>">Bloqueado</option>
                      <option value="maintenance" data-content="<span class='label label-default' style='background-color: rgba(128,173,21,0.7);'>Manutenção</span>">Manutenção</option>
                      <option value="canceled" data-content="<span class='label label-default' style='background-color: #aaa;'>cancelada</span>">Cancelada</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-13" aria-haspopup="listbox" aria-expanded="false" title="pré reserva reserva contrato">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-default" style="background-color: rgba(250,250,38,0.56); color: black;">pré reserva</span> <span class="label label-default" style="background-color: rgba(12, 107, 144, 0.55);">reserva</span> <span class="label label-default" style="background-color: rgba(12, 107, 144, 0.55);">contrato</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-13" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Status de Repasse</label>
                  <div class="dropdown bootstrap-select show-tick form-control forward_status bs3"><select name="forward_status" class="selectpicker form-control forward_status" data-live-search="0">
                      <option value="">Todos</option>
                      <option value="forwarded">
                        Repassadas
                      </option>
                      <option value="not-forwarded">
                        Não repassadas
                      </option>
                      <option value="pending">
                        Pagamentos pendentes
                      </option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-14" aria-haspopup="listbox" aria-expanded="false" title="Todos">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner">Todos</div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-14" tabindex="-1">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <div data-toggle="collapse" data-target="#advanced" class="btn btn-default pull-left" aria-expanded="false">
                    <i class="fa fa-filter"></i> Adicionar Filtros</div>
                  <button type="submit" class="btn btn-info pull-right">
                    <i class="fa fa-refresh"></i> Atualizar
                  </button>
                </div>
                <hr>
                <div id="advanced" class="collapse ">
                  <!--Building-->
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-building"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control building bs3 bs3-has-addon"><select class="form-control building selectpicker" name="building[]" data-buildingid="" title="Prédio" multiple="">
                          <optgroup label="Brasil, Goias, Caldas Novas, Turista 1">
                            <option value="5955309e5ad044000193a2d1" data-content="<span class='label label-default'>PH03E | Residencial Águas da Serra</span>" data-subtext="" data-_idowner="" data-_idbuilding="">PH03E | Residencial Águas da Serra</option>
                            <option value="5b2926bed262120010ac25f1" data-content="<span class='label label-default'>CY02F | Everst Flat Service</span>" data-subtext="" data-_idowner="" data-_idbuilding="">CY02F | Everst Flat Service</option>
                          </optgroup>
                          <optgroup label="Brasil, Goias, Caldas Novas, Chácara Roma">
                            <option value="595553a9680f7b0001900d9d" data-content="<span class='label label-default'>PH08E | LACQUA - I</span>" data-subtext="" data-_idowner="" data-_idbuilding="">PH08E | LACQUA - I</option>
                          </optgroup>
                          <optgroup label="Brasil, Goias, Caldas Novas, Do Turista">
                            <option value="5980ceab99dda30010533d21" data-content="<span class='label label-default'>QO01E | Hot Springs</span>" data-subtext="" data-_idowner="" data-_idbuilding="">QO01E | Hot Springs</option>
                          </optgroup>
                          <optgroup label="Brasil, Goiás, Caldas Novas, Jeriquara">
                            <option value="5995a202852113000f1bd3c2" data-content="<span class='label label-default'>RE01E | Vitória das Thermas</span>" data-subtext="" data-_idowner="" data-_idbuilding="">RE01E | Vitória das Thermas</option>
                          </optgroup>
                          <optgroup label="Brasil, Goiás, Caldas Novas, Chácara Roma">
                            <option value="59973187c11ce4000fe37f96" data-content="<span class='label label-default'>RF01E | LACQUA - V</span>" data-subtext="" data-_idowner="" data-_idbuilding="">RF01E | LACQUA - V</option>
                            <option value="599dcf45e048d6000fcc2ceb" data-content="<span class='label label-default'>RK01E | LACQUA - II</span>" data-subtext="" data-_idowner="" data-_idbuilding="">RK01E | LACQUA - II</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, Caldas Novas, Lagoa Quente">
                            <option value="5a3416f4a01b650010902f53" data-content="<span class='label label-default'>VU01E | Lagoa Quente Flat Service</span>" data-subtext="" data-_idowner="" data-_idbuilding="">VU01E | Lagoa Quente Flat Service</option>
                          </optgroup>
                          <optgroup label="Brasil, Go - Goias, Caldas Novas, Chácara Roma">
                            <option value="5b6e0f06ff666d00111e8828" data-content="<span class='label label-default'>EY02F | Di Roma Internacional Resort</span>" data-subtext="" data-_idowner="" data-_idbuilding="">EY02F | Di Roma Internacional Resort</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere">
                            <option value="5c8fb683d9d09f00107c2f62" data-content="<span class='label label-default'>NK02F | Golden Dolphin Grand Hotel</span>" data-subtext="" data-_idowner="" data-_idbuilding="">NK02F | Golden Dolphin Grand Hotel</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1">
                            <option value="5cccb202baaf90001747f837" data-content="<span class='label label-default'>PE03F | Condomínio Millennium Thermas  Residence</span>" data-subtext="" data-_idowner="" data-_idbuilding="">PE03F | Condomínio Millennium Thermas Residence</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma">
                            <option value="5d4d8b323894ec0010112b6f" data-content="<span class='label label-default'>SY01F | DI ROMA FIORE</span>" data-subtext="" data-_idowner="" data-_idbuilding="">SY01F | DI ROMA FIORE</option>
                            <option value="5f635ca71c5a2f15713bde10" data-content="<span class='label label-default'>IN01G | LACQUA - IV</span>" data-subtext="" data-_idowner="" data-_idbuilding="">IN01G | LACQUA - IV</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS">
                            <option value="5d699160f04d200010e797a8" data-content="<span class='label label-default'>TT01F | Villas Di Roma</span>" data-subtext="" data-_idowner="" data-_idbuilding="">TT01F | Villas Di Roma</option>
                          </optgroup>
                          <optgroup label="">
                            <option value="5f97101f7dcaf77840a87f23" data-content="<span class='label label-default'>KA06G | RIVIERA PARK - FLAT SERVICE</span>" data-subtext="" data-_idowner="" data-_idbuilding="">KA06G | RIVIERA PARK - FLAT SERVICE</option>
                            <option value="5fa57fe0f0ef985193aca680" data-content="<span class='label label-default'>KL01G | VT 305 B</span>" data-subtext="" data-_idowner="" data-_idbuilding="">KL01G | VT 305 B</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, Caldas Novas, Solar de Caldas">
                            <option value="5faedc7a1bc8eb86dccf939e" data-content="<span class='label label-default'>KS05G | DIROMA EXCLUSIVE</span>" data-subtext="" data-_idowner="" data-_idbuilding="">KS05G | DIROMA EXCLUSIVE</option>
                          </optgroup>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-15" aria-haspopup="listbox" aria-expanded="false" title="Prédio">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Prédio</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Prédio</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-15" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-15" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="dropdown-header optgroup-1"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-15-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH03E | Residencial Águas da Serra</span></span></a></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-15-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">CY02F | Everst Flat Service</span></span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-2"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-15-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH08E | LACQUA - I</span></span></a></li>
                              <li class="divider optgroup-2div"></li>
                              <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-15-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QO01E | Hot Springs</span></span></a></li>
                              <li class="divider optgroup-3div"></li>
                              <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-15-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">RE01E | Vitória das Thermas</span></span></a></li>
                              <li class="divider optgroup-4div"></li>
                              <li class="dropdown-header optgroup-5"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-15-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">RF01E | LACQUA - V</span></span></a></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-15-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">RK01E | LACQUA - II</span></span></a></li>
                              <li class="divider optgroup-5div"></li>
                              <li class="dropdown-header optgroup-6"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                              <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-15-18" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VU01E | Lagoa Quente Flat Service</span></span></a></li>
                              <li class="divider optgroup-6div"></li>
                              <li class="dropdown-header optgroup-7"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-15-21" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EY02F | Di Roma Internacional Resort</span></span></a></li>
                              <li class="divider optgroup-7div"></li>
                              <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-15-24" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NK02F | Golden Dolphin Grand Hotel</span></span></a></li>
                              <li class="divider optgroup-8div"></li>
                              <li class="dropdown-header optgroup-9"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                              <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-15-27" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PE03F | Condomínio Millennium Thermas Residence</span></span></a></li>
                              <li class="divider optgroup-9div"></li>
                              <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-15-30" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">SY01F | DI ROMA FIORE</span></span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-15-31" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">IN01G | LACQUA - IV</span></span></a></li>
                              <li class="divider optgroup-10div"></li>
                              <li class="dropdown-header optgroup-11"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-15-34" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TT01F | Villas Di Roma</span></span></a></li>
                              <li class="divider optgroup-11div"></li>
                              <li class="dropdown-header optgroup-12"><span class="text"></span></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-15-37" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KA06G | RIVIERA PARK - FLAT SERVICE</span></span></a></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-15-38" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KL01G | VT 305 B</span></span></a></li>
                              <li class="divider optgroup-12div"></li>
                              <li class="dropdown-header optgroup-13"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-15-41" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KS05G | DIROMA EXCLUSIVE</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Apartment-->
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control apartment bs3 bs3-has-addon"><select class="form-control apartment selectpicker" name="apartment[]" data-apartmentid="" title="Propriedade" multiple="">
                          <optgroup label="Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas">
                            <option value="5f96fe367dcaf7b6f2a879ea" data-content="<span class='label label-default'>KA02G | PIAZZA</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="5f96f9447dcaf71091a87943">KA02G | PIAZZA</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, GO">
                            <option value="5f970a857dcaf763e1a87cb2" data-content="<span class='label label-default'>KA04G | RIVIERA PARK</span>" data-subtext="" data-_idowner="" data-_idbuilding="">KA04G | RIVIERA PARK</option>
                          </optgroup>
                          <optgroup label="Brasil, Goias, Caldas Novas, Chácara Roma">
                            <option value="5980df9599dda30010533de6" data-content="<span class='label label-default'>PH39E | LACQUA POOL-2</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">PH39E | LACQUA POOL-2</option>
                            <option value="5bbe3bee0e1fee0012d3fe4b" data-content="<span class='label label-default'>HH01F | LACQUA POOL-5</span>" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="595553a9680f7b0001900d9d">HH01F | LACQUA POOL-5</option>
                            <option value="5c9a8481b6ab50001070d8fa" data-content="<span class='label label-default'>NS01F | LACQUA POOL</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">NS01F | LACQUA POOL</option>
                            <option value="5cf925a2fcd3f7001086d355" data-content="<span class='label label-default'>QM02F | LACQUA POOL-3</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">QM02F | LACQUA POOL-3</option>
                            <option value="5c8c0975caf8d10010410737" data-content="<span class='label label-default'>NH04F | LACQUA POOL-4</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">NH04F | LACQUA POOL-4</option>
                            <option value="5955703a680f7b0001900ee9" data-content="<span class='label label-default'>PH14E | LD1 201</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">PH14E | LD1 201</option>
                            <option value="595651b5680f7b00019011fc" data-content="<span class='label label-default'>PI01E | LD1 57</span>" data-subtext="" data-_idowner="5e30471765a81d0010dbb805" data-_idbuilding="595553a9680f7b0001900d9d">PI01E | LD1 57</option>
                            <option value="5e31f003d6c66a0010e3e6a2" data-content="<span class='label label-default'>ZP04F | LD1 -222</span>" data-subtext="" data-_idowner="5e35e88cfc5b4a0010734882" data-_idbuilding="595553a9680f7b0001900d9d">ZP04F | LD1 -222</option>
                            <option value="5f284363a5368d2a37609e06" data-content="<span class='label label-default'>GU01G | LD1 - 068</span>" data-subtext="" data-_idowner="" data-_idbuilding="595553a9680f7b0001900d9d">GU01G | LD1 - 068</option>
                            <option value="5d0a9824560ff900106dd897" data-content="<span class='label label-default'>QZ01F | LD1 51</span>" data-subtext="" data-_idowner="5d2a2a413ec0860017959a70" data-_idbuilding="595553a9680f7b0001900d9d">QZ01F | LD1 51</option>
                          </optgroup>
                          <optgroup label="Brasil, Goias, Caldas Novas, J Jeriquara">
                            <option value="5b4a25115ee3bb0010d4322f" data-content="<span class='label label-default'>DX01F | AF 704 B</span>" data-subtext="" data-_idowner="5cb641f2f6496400101483b4" data-_idbuilding="59598da0f771730001852885">DX01F | AF 704 B</option>
                            <option value="595991fbe9dd6f0001d126f2" data-content="<span class='label label-default'>PL01E | AF1003C</span>" data-subtext="" data-_idowner="59598cd3e9dd6f0001d126bf" data-_idbuilding="59598da0f771730001852885">PL01E | AF1003C</option>
                          </optgroup>
                          <optgroup label="Brasil, Go - Goias, Caldas Novas, Chácara Roma">
                            <option value="5dfa190c1725da0010cf94a8" data-content="<span class='label label-default'>XZ02F | RI 06</span>" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="5b6e0f06ff666d00111e8828">XZ02F | RI 06</option>
                            <option value="5b6e14c2ff666d00111e88fa" data-content="<span class='label label-default'>EY03F | RI 313</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="5b6e0f06ff666d00111e8828">EY03F | RI 313</option>
                          </optgroup>
                          <optgroup label="Brasil, GO, CALDAS NOVAS, Turista II">
                            <option value="5f80646e6e7d788c66611325" data-content="<span class='label label-default'>JJ01G | sol das calldas poll</span>" data-subtext="" data-_idowner="" data-_idbuilding="">JJ01G | sol das calldas poll</option>
                          </optgroup>
                          <optgroup label="Brasil, Goiás, CALDAS NOVAS, Bandeirantes">
                            <option value="5f0ccb69c55ce972ce5d767b" data-content="<span class='label label-default'>FZ02G | ECOL. G-605 SUITE</span>" data-subtext="" data-_idowner="5f0cbb11c55ce9d2225d7383" data-_idbuilding="">FZ02G | ECOL. G-605 SUITE</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere">
                            <option value="5ca4941433089c0010bbb02d" data-content="<span class='label label-default'>OA01F | GD - 416</span>" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="5c8fb683d9d09f00107c2f62">OA01F | GD - 416</option>
                            <option value="5c928ce211767a00103532d9" data-content="<span class='label label-default'>NM02F | GD 526</span>" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="5c8fb683d9d09f00107c2f62">NM02F | GD 526</option>
                            <option value="5e5fb4628825220010fdf68d" data-content="<span class='label label-default'>AY01G | FLAT 953</span>" data-subtext="" data-_idowner="5e639f4ab8916300107c25ec" data-_idbuilding="5c8fb683d9d09f00107c2f62">AY01G | FLAT 953</option>
                          </optgroup>
                          <optgroup label="Brasil, Goias, Caldas Novas, Do Turista">
                            <option value="5985f699f1ae1b000f38a779" data-content="<span class='label label-default'>QS03E | HS 746</span>" data-subtext="" data-_idowner="5985f61df1ae1b000f38a772" data-_idbuilding="5980ceab99dda30010533d21">QS03E | HS 746</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, Caldas Novas, Lagoa Quente">
                            <option value="5a341abb155a0a0010352554" data-content="<span class='label label-default'>VU02E | LQ 509 C</span>" data-subtext="" data-_idowner="5a341159155a0a00103523ef" data-_idbuilding="5a3416f4a01b650010902f53">VU02E | LQ 509 C</option>
                            <option value="5f7da787ba076ecdd0a87412" data-content="<span class='label label-default'>JH01G | LQ 402 B</span>" data-subtext="" data-_idowner="5a341159155a0a00103523ef" data-_idbuilding="5a3416f4a01b650010902f53">JH01G | LQ 402 B</option>
                            <option value="5c8be31cf4dffd00104c7ff4" data-content="<span class='label label-default'>NH01F | LQ 406 B</span>" data-subtext="" data-_idowner="5a341159155a0a00103523ef" data-_idbuilding="5a3416f4a01b650010902f53">NH01F | LQ 406 B</option>
                          </optgroup>
                          <optgroup label="Brasil, Goiás, Caldas Novas, Chácara Roma">
                            <option value="5bbb92f7c476330012a8530c" data-content="<span class='label label-default'>HF01F | LD5 76</span>" data-subtext="" data-_idowner="5bbb92b94f192800124d22d8" data-_idbuilding="59973187c11ce4000fe37f96">HF01F | LD5 76</option>
                            <option value="5f0cbce1c55ce937205d73bc" data-content="<span class='label label-default'>FZ01G | LD2 - 152</span>" data-subtext="" data-_idowner="5f0cbb11c55ce9d2225d7383" data-_idbuilding="599dcf45e048d6000fcc2ceb">FZ01G | LD2 - 152</option>
                            <option value="5f591bb07237cd6a4e00c35a" data-content="<span class='label label-default'>IF01G | LD2 - 194</span>" data-subtext="" data-_idowner="5f49437e46451a3a26925d96" data-_idbuilding="599dcf45e048d6000fcc2ceb">IF01G | LD2 - 194</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, Caldas Novas, Solar de Caldas">
                            <option value="5faede4d1bc8ebfa83cf93fc" data-content="<span class='label label-default'>KS08G | DRE 507</span>" data-subtext="" data-_idowner="" data-_idbuilding="5faedc7a1bc8eb86dccf939e">KS08G | DRE 507</option>
                          </optgroup>
                          <optgroup label="Brasil, Goias, Caldas Novas, Turista 1">
                            <option value="5b5892fcbf5c180011fef0f5" data-content="<span class='label label-default'>EI01F | EV 106</span>" data-subtext="" data-_idowner="5b58810abf5c180011feeee3" data-_idbuilding="5b2926bed262120010ac25f1">EI01F | EV 106</option>
                            <option value="5bc235066cf88a0014b6dab2" data-content="<span class='label label-default'>HK01F | AS 805 C</span>" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="5955309e5ad044000193a2d1">HK01F | AS 805 C</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma">
                            <option value="5bbe3e62c2c4100012e1af14" data-content="<span class='label label-default'>HH02F | LD4-209</span>" data-subtext="" data-_idowner="5bbb92b94f192800124d22d8" data-_idbuilding="5f635ca71c5a2f15713bde10">HH02F | LD4-209</option>
                            <option value="5fae96701bc8eb568bcf835b" data-content="<span class='label label-default'>KS02G | LD4 - 119</span>" data-subtext="" data-_idowner="" data-_idbuilding="5f635ca71c5a2f15713bde10">KS02G | LD4 - 119</option>
                            <option value="5d6fc17272c0fa00106f8f04" data-content="<span class='label label-default'>TY02F | LD 322/324</span>" data-subtext="" data-_idowner="5d713669a0b15400109ef0f5" data-_idbuilding="5f635ca71c5a2f15713bde10">TY02F | LD 322/324</option>
                          </optgroup>
                          <optgroup label="Brasil, Goiás, Caldas Novas, Bandeirantes">
                            <option value="5dcb11e97ab9c60010e22305" data-content="<span class='label label-default'>WP02F | ECOL. G-605 FLAT</span>" data-subtext="" data-_idowner="5f0cbb11c55ce9d2225d7383" data-_idbuilding="">WP02F | ECOL. G-605 FLAT</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS">
                            <option value="5d6992acf04d200010e797c4" data-content="<span class='label label-default'>TT02F | VR - 402 A</span>" data-subtext="" data-_idowner="5d713669a0b15400109ef0f5" data-_idbuilding="5d699160f04d200010e797a8">TT02F | VR - 402 A</option>
                            <option value="5d699bc7f04d200010e7990c" data-content="<span class='label label-default'>TT03F | VR - 707 A</span>" data-subtext="" data-_idowner="5d713669a0b15400109ef0f5" data-_idbuilding="5d699160f04d200010e797a8">TT03F | VR - 707 A</option>
                          </optgroup>
                          <optgroup label="Brasil, Goiás, Caldas Novas, Jeriquara">
                            <option value="5e31cb31e20ba5001039b58e" data-content="<span class='label label-default'>ZP02F | VT - 101 A</span>" data-subtext="" data-_idowner="5e37317c60510900102baa8c" data-_idbuilding="5995a202852113000f1bd3c2">ZP02F | VT - 101 A</option>
                            <option value="5fa582b7f0ef980068aca76d" data-content="<span class='label label-default'>KL02G | VT 305 B</span>" data-subtext="" data-_idowner="5fa59fe0f0ef986eabacae28" data-_idbuilding="5995a202852113000f1bd3c2">KL02G | VT 305 B</option>
                          </optgroup>
                          <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1">
                            <option value="5da71d71053de70010c247ed" data-content="<span class='label label-default'>VO02F | Millennium Thermas Residence 602 A</span>" data-subtext="" data-_idowner="5daa227d733062001088e1f4" data-_idbuilding="5cccb202baaf90001747f837">VO02F | Millennium Thermas Residence 602 A</option>
                          </optgroup>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-16" aria-haspopup="listbox" aria-expanded="false" title="Propriedade">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Propriedade</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Propriedade</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-16" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-16" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="dropdown-header optgroup-1"><span class="text">Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas</span></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-16-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KA02G | PIAZZA</span></span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-2"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, GO</span></li>
                              <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-16-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KA04G | RIVIERA PARK</span></span></a></li>
                              <li class="divider optgroup-2div"></li>
                              <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH39E | LACQUA POOL-2</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HH01F | LACQUA POOL-5</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NS01F | LACQUA POOL</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QM02F | LACQUA POOL-3</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NH04F | LACQUA POOL-4</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH14E | LD1 201</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-13" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PI01E | LD1 57</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ZP04F | LD1 -222</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">GU01G | LD1 - 068</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-16-16" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QZ01F | LD1 51</span></span></a></li>
                              <li class="divider optgroup-3div"></li>
                              <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goias, Caldas Novas, J Jeriquara</span></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-16-19" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">DX01F | AF 704 B</span></span></a></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-16-20" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PL01E | AF1003C</span></span></a></li>
                              <li class="divider optgroup-4div"></li>
                              <li class="dropdown-header optgroup-5"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-16-23" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">XZ02F | RI 06</span></span></a></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-16-24" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EY03F | RI 313</span></span></a></li>
                              <li class="divider optgroup-5div"></li>
                              <li class="dropdown-header optgroup-6"><span class="text">Brasil, GO, CALDAS NOVAS, Turista II</span></li>
                              <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-16-27" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">JJ01G | sol das calldas poll</span></span></a></li>
                              <li class="divider optgroup-6div"></li>
                              <li class="dropdown-header optgroup-7"><span class="text">Brasil, Goiás, CALDAS NOVAS, Bandeirantes</span></li>
                              <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-16-30" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">FZ02G | ECOL. G-605 SUITE</span></span></a></li>
                              <li class="divider optgroup-7div"></li>
                              <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-16-33" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">OA01F | GD - 416</span></span></a></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-16-34" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NM02F | GD 526</span></span></a></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-16-35" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">AY01G | FLAT 953</span></span></a></li>
                              <li class="divider optgroup-8div"></li>
                              <li class="dropdown-header optgroup-9"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                              <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-16-38" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QS03E | HS 746</span></span></a></li>
                              <li class="divider optgroup-9div"></li>
                              <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-16-41" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VU02E | LQ 509 C</span></span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-16-42" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">JH01G | LQ 402 B</span></span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-16-43" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NH01F | LQ 406 B</span></span></a></li>
                              <li class="divider optgroup-10div"></li>
                              <li class="dropdown-header optgroup-11"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-16-46" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HF01F | LD5 76</span></span></a></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-16-47" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">FZ01G | LD2 - 152</span></span></a></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-16-48" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">IF01G | LD2 - 194</span></span></a></li>
                              <li class="divider optgroup-11div"></li>
                              <li class="dropdown-header optgroup-12"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-16-51" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KS08G | DRE 507</span></span></a></li>
                              <li class="divider optgroup-12div"></li>
                              <li class="dropdown-header optgroup-13"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-16-54" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EI01F | EV 106</span></span></a></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-16-55" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HK01F | AS 805 C</span></span></a></li>
                              <li class="divider optgroup-13div"></li>
                              <li class="dropdown-header optgroup-14"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-16-58" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HH02F | LD4-209</span></span></a></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-16-59" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KS02G | LD4 - 119</span></span></a></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-16-60" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TY02F | LD 322/324</span></span></a></li>
                              <li class="divider optgroup-14div"></li>
                              <li class="dropdown-header optgroup-15"><span class="text">Brasil, Goiás, Caldas Novas, Bandeirantes</span></li>
                              <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-16-63" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">WP02F | ECOL. G-605 FLAT</span></span></a></li>
                              <li class="divider optgroup-15div"></li>
                              <li class="dropdown-header optgroup-16"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                              <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-16-66" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TT02F | VR - 402 A</span></span></a></li>
                              <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-16-67" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TT03F | VR - 707 A</span></span></a></li>
                              <li class="divider optgroup-16div"></li>
                              <li class="dropdown-header optgroup-17"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                              <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-16-70" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ZP02F | VT - 101 A</span></span></a></li>
                              <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-16-71" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KL02G | VT 305 B</span></span></a></li>
                              <li class="divider optgroup-17div"></li>
                              <li class="dropdown-header optgroup-18"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                              <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-16-74" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VO02F | Millennium Thermas Residence 602 A</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--Reserve-->
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar-o"></i>
                      </span>
                      <input class="form-control" type="text" id="reserve" data-reserveid="" placeholder="Reserva" autocomplete="off" data-validateattr="reserveid">
                      <input type="hidden" name="reserve">
                    </div>
                  </div>
                  <!--Client-->
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </span>
                      <input class="form-control" type="text" id="client" data-clientid="" placeholder="Hóspede" autocomplete="off" data-validateattr="clientid">
                      <input name="client" type="hidden">
                    </div>
                  </div>
                  <!--Agent-->
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user-circle"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control agent bs3 bs3-has-addon"><select class="selectpicker form-control agent" name="agents[]" data-agentid="" title="Agentes" multiple="">
                          <option value="noagent" data-content="<span class='label label-default'>NoAgent</span>">NoAgent</option>
                          <option value="59551f895ad044000193a21a" data-content="<span class='label label-default'>Cleyton Mendonça (64) 99228-4668</span>">Cleyton Mendonça (64) 99228-4668</option>
                          <option value="5c8c040ba138950010406c09" data-content="<span class='label label-default'>WELITON AMORIM (64) 99238-8389</span>">WELITON AMORIM (64) 99238-8389</option>
                          <option value="5dbae48241b8e700115fed36" data-content="<span class='label label-default'>VICTOR HUGO REZENDE DE MENDONÇA</span>">VICTOR HUGO REZENDE DE MENDONÇA</option>
                          <option value="5f05e4c06e24745af66ece9f" data-content="<span class='label label-default'>WILTON (64) 99242-1617</span>">WILTON (64) 99242-1617</option>
                          <option value="5f493b9546451a2708925c4f" data-content="<span class='label label-default'>admin</span>">admin</option>
                          <option value="5f917d9fea5d089d52cd5ecd" data-content="<span class='label label-default'>Lucas Costa</span>">Lucas Costa</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-17" aria-haspopup="listbox" aria-expanded="false" title="Agentes">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Agentes</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Agentes</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-17" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-17" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-17-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NoAgent</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-17-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Cleyton Mendonça (64) 99228-4668</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-17-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">WELITON AMORIM (64) 99238-8389</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-17-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VICTOR HUGO REZENDE DE MENDONÇA</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-17-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">WILTON (64) 99242-1617</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-17-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">admin</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-17-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Lucas Costa</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-handshake-o"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control bank bs3 bs3-has-addon"><select class="selectpicker form-control bank" name="partners[]" data-partnerid="" title="Central de Parcerias" multiple="">
                          <option value="5d03584c3b57e00010438eba" data-content="<span class='label label-default'>API Decolar</span>">API Decolar</option>
                          <option value="5ae49f3ffbb74a0010a2ae82" data-content="<span class='label label-default'>API Flipkey</span>">API Flipkey</option>
                          <option value="5d0357c73b57e00010438eb6" data-content="<span class='label label-default'>API HomeAway</span>">API HomeAway</option>
                          <option value="5d03581a3b57e00010438eb8" data-content="<span class='label label-default'>API TemporadaLivre</span>">API TemporadaLivre</option>
                          <option value="5d1b5c5ec62b271c78796473" data-content="<span class='label label-default'>API airbnb</span>">API airbnb</option>
                          <option value="5d1b5cbec62b271c78796479" data-content="<span class='label label-default'>API booking.com</span>">API booking.com</option>
                          <option value="5d1b5cd3c62b271c7879647b" data-content="<span class='label label-default'>API expedia</span>">API expedia</option>
                          <option value="5726512a58d74a0f000f9852" data-content="<span class='label label-default'>Airbnb</span>">Airbnb</option>
                          <option value="525d9e1849a791963d000252" data-content="<span class='label label-default'>Aluguetemporada</span>">Aluguetemporada</option>
                          <option value="51e8e6c4c4aa79ddfa181e13" data-content="<span class='label label-default'>BOOKING</span>">BOOKING</option>
                          <option value="5726514a58d74a0f000f9854" data-content="<span class='label label-default'>CORRETOR PARCEIRO</span>">CORRETOR PARCEIRO</option>
                          <option value="54625f2820af010b2863f50d" data-content="<span class='label label-default'>EXPEDIA</span>">EXPEDIA</option>
                          <option value="525d9ec949a791963d000256" data-content="<span class='label label-default'>Facebook</span>">Facebook</option>
                          <option value="5726515c58d74a0f000f9855" data-content="<span class='label label-default'>Google</span>">Google</option>
                          <option value="5d03c3713ec8993ca20c4211" data-content="<span class='label label-default'>Website</span>">Website</option>
                          <option value="5726516c58d74a0f000f9856" data-content="<span class='label label-default'>Whatsapp</span>">Whatsapp</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-18" aria-haspopup="listbox" aria-expanded="false" title="Central de Parcerias">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Central de Parcerias</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Central de Parcerias</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-18" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-18" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-18-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API Decolar</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API Flipkey</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API HomeAway</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API TemporadaLivre</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API airbnb</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API booking.com</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">API expedia</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Airbnb</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Aluguetemporada</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">BOOKING</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">CORRETOR PARCEIRO</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EXPEDIA</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Facebook</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-13" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Google</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Website</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-18-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Whatsapp</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-circle-thin"></i>&nbsp;<i class="fa fa-circle-thin" style="margin-left:-6px;"></i></div>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control staysChannels bs3 bs3-has-addon"><select class="selectpicker form-control staysChannels" name="staysChannels[]" title="Selecione o parceiro Alliance" multiple="">
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-19" aria-haspopup="listbox" aria-expanded="false" title="Selecione o parceiro Alliance">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Selecione o parceiro Alliance</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Selecione o parceiro Alliance</div>
                        </button>
                        <div class="dropdown-menu open">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-19" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-19" tabindex="-1" aria-multiselectable="true">
                            <ul class="dropdown-menu inner " role="presentation"></ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Quartos</label>
                    <div class="dropdown bootstrap-select show-tick form-control rooms bs3"><select name="rooms" class="selectpicker form-control rooms" data-live-search="0">
                        <option value="" class="text-muted">Não Selecionado</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-20" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="inner open" role="listbox" id="bs-select-20" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>



                  <hr>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox active readonly" data-name="daily" data-value="">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="daily" value="" checked="">
                          exibir todos
                          <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox readonly" data-name="daily" data-value="yes">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="daily" value="yes">
                          Sublocação
                          <i class="fa pull-right fa-circle-o" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox readonly" data-name="daily" data-value="no">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="daily" value="no">
                          Intermediação
                          <i class="fa pull-right fa-circle-o" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                  <hr>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox active readonly" data-name="exclusive" data-value="">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="exclusive" value="" checked="">
                          exibir todos
                          <i class="fa fa-check-circle-o pull-right" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox readonly" data-name="exclusive" data-value="yes">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="exclusive" value="yes">
                          Exclusivos
                          <i class="fa pull-right fa-circle-o" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox readonly" data-name="exclusive" data-value="no">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="exclusive" value="no">
                          em Parceria
                          <i class="fa pull-right fa-circle-o" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                  <hr>
                  <div class="form-group">
                    <label>Código Promocional</label>
                    <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="selectpicker form-control" data-live-search="0" name="promo_code" data-promocodeid="">
                        <option value="">Não Selecionado</option>
                        <option value="5cc0506a81ada90010d3e49d">claudia</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-21" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 0px;">
                        <div class="inner open" role="listbox" id="bs-select-21" tabindex="-1" aria-activedescendant="bs-select-21-0" style="max-height: 1052px; overflow-y: auto; min-height: 0px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-21-0" tabindex="0" aria-setsize="2" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-21-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">claudia</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="control-label">Grupos</label>
                    <div class="dropdown bootstrap-select show-tick form-control groups bs3"><select class="selectpicker form-control groups" name="groups[]" data-groupid="" multiple="">
                        <option value="59668a9c95726a000129d34a" data-content="<span class='label label-default'>Lacqua Di Roma</span>">Lacqua Di Roma</option>
                        <option value="5980e86f99dda30010533e47" data-content="<span class='label label-default'>Águas da Serra</span>">Águas da Serra</option>
                        <option value="5e3d67a877bfc800106de483" data-content="<span class='label label-default'>LACQUA DI ROMA DUPLO</span>">LACQUA DI ROMA DUPLO</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-22" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 38px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-22" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-22" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 0px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li><a role="option" class="dropdown-item" id="bs-select-22-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Lacqua Di Roma</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-22-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Águas da Serra</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-22-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">LACQUA DI ROMA DUPLO</span></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="control-label">Bancos</label>
                    <div class="dropdown bootstrap-select show-tick form-control bank bs3"><select class="selectpicker form-control bank" name="bank[]" data-bankid="" multiple="">
                        <option value="cash" data-content="<span class='label label-default'>Cash</span>">Cash</option>
                        <option value="5ab40222908ecd0010bc8fe7" data-content="<span class='label label-default'>CARTÃO DE CREDITO</span>">CARTÃO DE CREDITO</option>
                        <option value="5e6a7c8efb622a0010b94610" data-content="<span class='label label-default'>PAGAR.ME BOLETOS</span>">PAGAR.ME BOLETOS</option>
                        <option value="59a868045413a4000f06dd9f" data-content="<span class='label label-default'>TRANSFERÊNCIA BANCÁRIA</span>">TRANSFERÊNCIA BANCÁRIA</option>
                        <option value="5994a4385d882100104b7f0f" data-content="<span class='label label-default'>BANCO DO BRASIL</span>">BANCO DO BRASIL</option>
                        <option value="5cc6ff7667ba1100103350cb" data-content="<span class='label label-default'>CAIXA ECONÔMICA FEDERAL / CLEYTON AMARO DE MENDONÇA</span>">CAIXA ECONÔMICA FEDERAL / CLEYTON AMARO DE MENDONÇA</option>
                        <option value="247669727475616c62616e6b" data-content="<span class='label label-default'>Virtual bank</span>">Virtual bank</option>
                        <option value="242424756e747261636b6564" data-content="<span class='label label-default'>Untracked bank</span>">Untracked bank</option>
                        <option value="5f7b04e702fdf802ffd512eb" data-content="<span class='label label-default'>GIULLIANO HENRIQUE DOBRZANKI MENDONÇA</span>">GIULLIANO HENRIQUE DOBRZANKI MENDONÇA</option>
                        <option value="5f7b04e702fdf802ffd512ec" data-content="<span class='label label-default'>WELITON AMORIM (64) 99238-8389</span>">WELITON AMORIM (64) 99238-8389</option>
                        <option value="5f7b04e702fdf802ffd512ed" data-content="<span class='label label-default'>Cleyton Mendonça (64) 99228-4668</span>">Cleyton Mendonça (64) 99228-4668</option>
                        <option value="5f7b04e702fdf802ffd512ee" data-content="<span class='label label-default'>ALEXANDRE FRANCISCO DOS SANTOS</span>">ALEXANDRE FRANCISCO DOS SANTOS</option>
                        <option value="5f7b04e702fdf802ffd512ef" data-content="<span class='label label-default'>JESSIKA MENDONÇA (64) 99284-9791</span>">JESSIKA MENDONÇA (64) 99284-9791</option>
                        <option value="5f7b04e702fdf802ffd512f0" data-content="<span class='label label-default'>JOSI (64) 99347-9098</span>">JOSI (64) 99347-9098</option>
                        <option value="5f7b04e702fdf802ffd512f1" data-content="<span class='label label-default'>WILTON (64) 99242-1617</span>">WILTON (64) 99242-1617</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-23" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 127px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-23" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-23" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 77px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li><a role="option" class="dropdown-item" id="bs-select-23-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Cash</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">CARTÃO DE CREDITO</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PAGAR.ME BOLETOS</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TRANSFERÊNCIA BANCÁRIA</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">BANCO DO BRASIL</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">CAIXA ECONÔMICA FEDERAL / CLEYTON AMARO DE MENDONÇA</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Virtual bank</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Untracked bank</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">GIULLIANO HENRIQUE DOBRZANKI MENDONÇA</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">WELITON AMORIM (64) 99238-8389</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Cleyton Mendonça (64) 99228-4668</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ALEXANDRE FRANCISCO DOS SANTOS</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">JESSIKA MENDONÇA (64) 99284-9791</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-13" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">JOSI (64) 99347-9098</span></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">WILTON (64) 99242-1617</span></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Reservas de Channel Managers via sincronização manual</label>

                    <div class="dropdown bootstrap-select show-tick form-control exclusive bs3"><select class="selectpicker form-control exclusive" data-live-search="0" name="sync">
                        <option value="">Não Selecionado</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-24" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="inner open" role="listbox" id="bs-select-24" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="deposit" type="checkbox" value="1">Caução devolvido ao hóspede
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="nopays" type="checkbox" value="1">Sem pagamentos inseridos
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="nopartner" type="checkbox" value="1">Sem parceiro definido
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="noagent" type="checkbox" value="1">Sem Agente de Reservas responsável
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="yespays" type="checkbox" value="1">Com pagamentos inseridos
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="notfullpays" type="checkbox" value="1">Reservas onde o valor total ainda não foi pago
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="pending" type="checkbox" value="1">Reservas em que o pagamento via Banco não foi vinculado com o Extrato da Conta
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="alternates" type="checkbox" value="1">Reservas que tiveram alteração de datas
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="front" type="checkbox" value="1">Reservas fechadas através do site
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="switchedap" type="checkbox" value="1">Reservas com troca de acomodações
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="frontopen" type="checkbox" value="1">Cliente não acessou a sua pagina de reserva
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="emconffrontopen" type="checkbox" value="1">Hóspede não abriu o e-mail de confirmação gerado via site (ex: pagamentos online)
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="emconfbackopen" type="checkbox" value="1">Hóspede não abriu o e-mail de confirmação gerado manualmente pelo Agente (ex: Pagamentos via depósito)
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="emremopen" type="checkbox" value="1">Hóspede não abriu o e-mail de lembrete sobre a Reserva
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="ical" type="checkbox" value="1">Importada via iCal
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="invalidCC" type="checkbox" value="1">Reservas com cartão de crédito inválido
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="tokenization" type="checkbox" value="1">Hóspede possui cartões tokenizados
                    </label>
                  </div>
                </div>
                <br>
              </form>
              <script>
                requirejs(["views/reservation/bookings_filter"], function(bookings_filter) {
                  bookings_filter({
                    filter: {
                      "dateof": "_dtcheckIn",
                      "_dtfrom": "2020-12-03T12:26:44.291Z",
                      "_dtto": "2020-12-10T12:26:44.291Z",
                      "dtextra": 0,
                      "_dtfromex": null,
                      "_dttoex": null,
                      "id": "",
                      "alternates": 0,
                      "deposit": 0,
                      "nopays": 0,
                      "nopartner": 0,
                      "noagent": 0,
                      "yespays": 0,
                      "notfullpays": 0,
                      "pending": 0,
                      "front": 0,
                      "bookingcom": 0,
                      "decolar": 0,
                      "expedia": 0,
                      "airbnb": 0,
                      "homeaway": 0,
                      "flipkey": 0,
                      "switchedap": 0,
                      "frontopen": 0,
                      "emconffrontopen": 0,
                      "emconfbackopen": 0,
                      "emremopen": 0,
                      "ccdata": 0,
                      "ccdatam": 0,
                      "maycancel": 0,
                      "sync": -1,
                      "ical": 0,
                      "tokenization": 0,
                      "invalidCC": 0,
                      "staysChannels": [],
                      "temporadalivre": 0,
                      "types": {
                        "reserved": 1,
                        "booked": 1,
                        "contract": 1
                      },
                      "_hogdateof": {
                        "_dtcheckIn": true,
                        "_pokor": false
                      },
                      "_hogsync": {
                        "-1": true
                      }
                    }
                  });
                }, appError);
              </script>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <div class="col-md-9 scroll well well-sm ps ps--active-y">
            <div class="panel panel-default panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-6">
                    <h4>
                      <b>22</b> Resultados do Filtro <small>03 - 10 dez 2020</small>
                    </h4>
                  </div>
                  <div class="col-sm-2">

                    <div class="dropdown bootstrap-select show-tick form-control sort-by bs3"><select class="form-control sort-by selectpicker" data-live-search="0" name="sortOrder">
                        <option value="-1" selected="">Mais Novas Primeiro</option>
                        <option value="1">Mais Novas por Último</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-25" aria-haspopup="listbox" aria-expanded="false" title="Mais Novas Primeiro">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Mais Novas Primeiro</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="inner open" role="listbox" id="bs-select-25" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 text-right">
                    <div class="btn btn-default btn-token-payment hidden">
                      <i class="fa fa-credit-card"></i> Batch
                    </div>
                    <a class="btn btn-default" id="bookings-export" href="/i/bookings-export" target="_blank">
                      <i class="fa fa-cloud-download"></i> Exportar
                    </a>
                    <a class="btn btn-default" id="bookings-print" href="/i/bookings-print" target="_blank">
                      <i class="fa fa-print"></i> Imprimir
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel-group">
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc14fd7d0b48d1b1525e38b" data-_id="5fc14fd7d0b48d1b1525e38b">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LS02G"><small>LS02G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc14fd1d0b48de4c725e388">ROGÉRIO DA SILVA CAMARGO .</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/ZP02F/setup"><i class="fa fa-home"></i>VT - 101 A</a>
                          <span class="label label-default">27 nov 2020 16:13</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>09 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            11 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc14fd7d0b48d1b1525e38b"),
                                _idreserve = "5fc14fd7d0b48d1b1525e38b",
                                $collapseContainer = $("#card-5fc14fd7d0b48d1b1525e38b");
                              $(".show-ccdata-link[href='#card-5fc14fd7d0b48d1b1525e38b']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-09T14:00:00.000Z" data-_dtcheckout="2020-12-11T10:00:00.000Z" data-_id="5fc14fd7d0b48d1b1525e38b">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc14fd7d0b48d1b1525e38b" href="/i/reservation/LS02G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fb2dca38b4e52bc00610ee0" data-_id="5fb2dca38b4e52bc00610ee0">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LR01G"><small>LR01G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fb2dc9e8b4e525e3e610edd">moisés nascimento .681</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/ZP04F/setup"><i class="fa fa-home"></i>LD1 -222</a>
                          <span class="label label-default">16 nov 2020 17:10</span>


                          <span class="label label-info">reserva</span>




                        </p>
                        <p>
                          <span>08 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            10 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;300,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;150,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;150,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                                <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;150,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;150,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;300,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                                <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fb2dca38b4e52bc00610ee0"),
                                _idreserve = "5fb2dca38b4e52bc00610ee0",
                                $collapseContainer = $("#card-5fb2dca38b4e52bc00610ee0");
                              $(".show-ccdata-link[href='#card-5fb2dca38b4e52bc00610ee0']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-08T14:00:00.000Z" data-_dtcheckout="2020-12-10T10:00:00.000Z" data-_id="5fb2dca38b4e52bc00610ee0">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fb2dca38b4e52bc00610ee0" href="/i/reservation/LR01G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fb42c62810eac1ea1ccb4ac" data-_id="5fb42c62810eac1ea1ccb4ac">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LQ06G"><small>LQ06G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5cd32296793fc40010a0466f">Paulo Sérgio Tavares</a>
                          <small>| <a target="_blank" href="https://wa.me/5519981512722"><img loading="lazy" src="/common/img/whatsapp.png"></a></small>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/QZ01F/setup"><i class="fa fa-home"></i>LD1 51</a>
                          <span class="label label-default">17 nov 2020 17:02</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>07 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            12 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;750,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;750,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;750,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;750,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fb42c62810eac1ea1ccb4ac"),
                                _idreserve = "5fb42c62810eac1ea1ccb4ac",
                                $collapseContainer = $("#card-5fb42c62810eac1ea1ccb4ac");
                              $(".show-ccdata-link[href='#card-5fb42c62810eac1ea1ccb4ac']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-07T14:00:00.000Z" data-_dtcheckout="2020-12-12T10:00:00.000Z" data-_id="5fb42c62810eac1ea1ccb4ac">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fb42c62810eac1ea1ccb4ac" href="/i/reservation/LQ06G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5f909816ea5d082169cd360c" data-_id="5f909816ea5d082169cd360c">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LQ03G"><small>LQ03G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5f909776ea5d087023cd35f8">Moacyr Franco de Matos Sido .</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/XZ02F/setup"><i class="fa fa-home"></i>RI 06</a>
                          <span class="label label-default">21 out 2020 17:20</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>07 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            11 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;456,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;456,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;456,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;456,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5f909816ea5d082169cd360c"),
                                _idreserve = "5f909816ea5d082169cd360c",
                                $collapseContainer = $("#card-5f909816ea5d082169cd360c");
                              $(".show-ccdata-link[href='#card-5f909816ea5d082169cd360c']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-07T14:00:00.000Z" data-_dtcheckout="2020-12-11T10:00:00.000Z" data-_id="5f909816ea5d082169cd360c">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5f909816ea5d082169cd360c" href="/i/reservation/LQ03G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5f6deb20e50d8ec2ed992160" data-_id="5f6deb20e50d8ec2ed992160">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                    <br>
                    <small class="text-uppercase">
                      API expedi
                    </small>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LQ01G"><small>LQ01G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5f6deb1fe50d8e068499215d">Harley Alves de Alcantara</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/QS03E/setup"><i class="fa fa-home"></i>HS 746</a>
                          <span class="label label-default" style="margin-right: 3px;">
                            1702175290
                            API expedia
                          </span>
                          <span class="label label-default">25 set 2020 10:05</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>07 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            10 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;353,25
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;353,25
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;353,25
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;353,25
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5f6deb20e50d8ec2ed992160"),
                                _idreserve = "5f6deb20e50d8ec2ed992160",
                                $collapseContainer = $("#card-5f6deb20e50d8ec2ed992160");
                              $(".show-ccdata-link[href='#card-5f6deb20e50d8ec2ed992160']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-07T14:00:00.000Z" data-_dtcheckout="2020-12-10T10:00:00.000Z" data-_id="5f6deb20e50d8ec2ed992160">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5f6deb20e50d8ec2ed992160" href="/i/reservation/LQ01G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fbfd67c54ed5a4816aef04e" data-_id="5fbfd67c54ed5a4816aef04e">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LP02G"><small>LP02G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fbfd67554ed5a3093aef04b">Wanderson de Araújo Leal ,,</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/ZP04F/setup"><i class="fa fa-home"></i>LD1 -222</a>
                          <span class="label label-default">26 nov 2020 13:23</span>


                          <span class="label label-info">reserva</span>




                        </p>
                        <p>
                          <span>06 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            08 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;380,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;190,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;190,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                                <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;190,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;190,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;380,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                                <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fbfd67c54ed5a4816aef04e"),
                                _idreserve = "5fbfd67c54ed5a4816aef04e",
                                $collapseContainer = $("#card-5fbfd67c54ed5a4816aef04e");
                              $(".show-ccdata-link[href='#card-5fbfd67c54ed5a4816aef04e']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-06T14:00:00.000Z" data-_dtcheckout="2020-12-08T10:00:00.000Z" data-_id="5fbfd67c54ed5a4816aef04e">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fbfd67c54ed5a4816aef04e" href="/i/reservation/LP02G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc3ddc8d0b48d2ede2656b0" data-_id="5fc3ddc8d0b48d2ede2656b0">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                    <br>
                    <small class="text-uppercase">
                      API expedi
                    </small>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LO01G"><small>LO01G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc3ddc6d0b48dec112656ad">Leticia Nogueira Ramos</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/PH39E/setup"><i class="fa fa-home"></i>LACQUA POOL-2</a>
                          <span class="label label-default" style="margin-right: 3px;">
                            1719506040
                            API expedia
                          </span>
                          <span class="label label-default">29 nov 2020 14:43</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>05 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            07 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;454,48
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;454,48
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;454,48
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;454,48
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc3ddc8d0b48d2ede2656b0"),
                                _idreserve = "5fc3ddc8d0b48d2ede2656b0",
                                $collapseContainer = $("#card-5fc3ddc8d0b48d2ede2656b0");
                              $(".show-ccdata-link[href='#card-5fc3ddc8d0b48d2ede2656b0']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div role="button" class="hidden-xs media-right media-middle text-center media-btn media-sm btn-add-payment">
                    <i class="fa fa-credit-card text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Token</small>
                  </div>
                  <script>
                    requirejs(["views/reservation/booking_payments_add"], function(booking_payments_add) {
                      booking_payments_add({
                        onlyCCPayment: 1,
                        _idform: "booking-item-5fc3ddc8d0b48d2ede2656b0",
                        _idreserve: "5fc3ddc8d0b48d2ede2656b0",
                        type: "reserved",
                        id: "LO01G",
                        client: {
                          "_id": "5fc3ddc6d0b48dec112656ad",
                          "documents": {},
                          "emails": [{
                            "type": "main",
                            "adr": "jefsonrodrigues@hotmail.com"
                          }],
                          "phones": [{
                            "type": "FIXED_LINE",
                            "hint": "Expedia",
                            "_b_mobile": 0,
                            "iso": "+541151733980",
                            "num": "+54 11 5173 3980",
                            "_i_code": 54,
                            "country": "AR"
                          }],
                          "fName": "Leticia",
                          "lName": "Nogueira Ramos",
                          "name": "Leticia Nogueira Ramos",
                          "cc": [{
                            "token": "e5b6e88c-0532-4577-b07a-5768146efb60",
                            "number": "************8568",
                            "lastDigits": "8568",
                            "name": "Expedia VirtualCard",
                            "type": "cielo",
                            "hash": "c605eee1eefe4903af8f7c5d04510a2ef97cdc8c",
                            "brand": "MC",
                            "expMonth": "11",
                            "expYear": "23",
                            "cvc": "457",
                            "chid": "5ab40222908ecd0010bc8fe7"
                          }]
                        },
                        apartment: {
                          _idresuser: "",
                          id: "PH39E",
                          avatar: "LACQUA POOL-2"
                        }
                      });
                    }, appError);
                  </script>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-05T14:00:00.000Z" data-_dtcheckout="2020-12-07T10:00:00.000Z" data-_id="5fc3ddc8d0b48d2ede2656b0">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc3ddc8d0b48d2ede2656b0" href="/i/reservation/LO01G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc8fb3b8f1f0b0b75d17bb5" data-_id="5fc8fb3b8f1f0b0b75d17bb5">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                    <br>
                    <small class="text-uppercase">
                      API expedi
                    </small>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LN19G"><small>LN19G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc8fb3a8f1f0b927ed17bb1">Marcio Brandao</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/NH04F/setup"><i class="fa fa-home"></i>LACQUA POOL-4</a>
                          <span class="label label-default" style="margin-right: 3px;">
                            1720460048
                            API expedia
                          </span>
                          <span class="label label-default">03 dez 2020 11:50</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>04 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            07 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;668,04
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;668,04
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;668,04
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;668,04
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc8fb3b8f1f0b0b75d17bb5"),
                                _idreserve = "5fc8fb3b8f1f0b0b75d17bb5",
                                $collapseContainer = $("#card-5fc8fb3b8f1f0b0b75d17bb5");
                              $(".show-ccdata-link[href='#card-5fc8fb3b8f1f0b0b75d17bb5']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div role="button" class="hidden-xs media-right media-middle text-center media-btn media-sm btn-add-payment">
                    <i class="fa fa-credit-card text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Token</small>
                  </div>
                  <script>
                    requirejs(["views/reservation/booking_payments_add"], function(booking_payments_add) {
                      booking_payments_add({
                        onlyCCPayment: 1,
                        _idform: "booking-item-5fc8fb3b8f1f0b0b75d17bb5",
                        _idreserve: "5fc8fb3b8f1f0b0b75d17bb5",
                        type: "reserved",
                        id: "LN19G",
                        client: {
                          "_id": "5fc8fb3a8f1f0b927ed17bb1",
                          "documents": {},
                          "emails": [{
                            "type": "main",
                            "adr": "marciobrandao2013@bol.com.br"
                          }],
                          "phones": [{
                            "hint": "Expedia",
                            "_b_mobile": 0,
                            "iso": "+38998051550",
                            "num": "+389 98051550",
                            "_i_code": 389,
                            "country": "MK"
                          }],
                          "fName": "Marcio",
                          "lName": "Brandao",
                          "name": "Marcio Brandao",
                          "cc": [{
                            "token": "252e9b32-4367-4508-8f76-e260462d5ba1",
                            "number": "************8696",
                            "lastDigits": "8696",
                            "name": "Expedia VirtualCard",
                            "type": "cielo",
                            "hash": "1ee624d9306f248983c2b530bd98244a07d31d92",
                            "brand": "MC",
                            "expMonth": "11",
                            "expYear": "23",
                            "cvc": "751",
                            "chid": "5ab40222908ecd0010bc8fe7"
                          }]
                        },
                        apartment: {
                          _idresuser: "",
                          id: "NH04F",
                          avatar: "LACQUA POOL-4"
                        }
                      });
                    }, appError);
                  </script>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-04T14:00:00.000Z" data-_dtcheckout="2020-12-07T10:00:00.000Z" data-_id="5fc8fb3b8f1f0b0b75d17bb5">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc8fb3b8f1f0b0b75d17bb5" href="/i/reservation/LN19G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc803394a670f934ddc1eba" data-_id="5fc803394a670f934ddc1eba">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LN18G"><small>LN18G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc803264a670fdaf6dc1eb5">Dhebora Machado Martins .</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/PH14E/setup"><i class="fa fa-home"></i>LD1 201</a>
                          <span class="label label-default">02 dez 2020 18:12</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>04 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            06 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;480,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;480,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;480,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;480,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc803394a670f934ddc1eba"),
                                _idreserve = "5fc803394a670f934ddc1eba",
                                $collapseContainer = $("#card-5fc803394a670f934ddc1eba");
                              $(".show-ccdata-link[href='#card-5fc803394a670f934ddc1eba']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-04T14:00:00.000Z" data-_dtcheckout="2020-12-06T10:00:00.000Z" data-_id="5fc803394a670f934ddc1eba">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc803394a670f934ddc1eba" href="/i/reservation/LN18G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc79cbf4a670fc936dc09ad" data-_id="5fc79cbf4a670fc936dc09ad">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LN17G"><small>LN17G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc79add4a670f7397dc0939">Caroline Oliveira dos Santos .</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/KS02G/setup"><i class="fa fa-home"></i>LD4 - 119</a>
                          <span class="label label-default">02 dez 2020 10:55</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>04 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            06 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;440,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;440,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;440,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;440,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc79cbf4a670fc936dc09ad"),
                                _idreserve = "5fc79cbf4a670fc936dc09ad",
                                $collapseContainer = $("#card-5fc79cbf4a670fc936dc09ad");
                              $(".show-ccdata-link[href='#card-5fc79cbf4a670fc936dc09ad']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-04T14:00:00.000Z" data-_dtcheckout="2020-12-06T10:00:00.000Z" data-_id="5fc79cbf4a670fc936dc09ad">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc79cbf4a670fc936dc09ad" href="/i/reservation/LN17G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc79b1a4a670f9d24dc096e" data-_id="5fc79b1a4a670f9d24dc096e">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LN16G"><small>LN16G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc79add4a670f7397dc0939">Caroline Oliveira dos Santos .</a>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/HF01F/setup"><i class="fa fa-home"></i>LD5 76</a>
                          <span class="label label-default">02 dez 2020 10:48</span>

                          <span class="label label-warning">pré reserva</span>





                        </p>
                        <p>
                          <span>04 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            06 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;440,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;440,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;440,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;440,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc79b1a4a670f9d24dc096e"),
                                _idreserve = "5fc79b1a4a670f9d24dc096e",
                                $collapseContainer = $("#card-5fc79b1a4a670f9d24dc096e");
                              $(".show-ccdata-link[href='#card-5fc79b1a4a670f9d24dc096e']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-04T14:00:00.000Z" data-_dtcheckout="2020-12-06T10:00:00.000Z" data-_id="5fc79b1a4a670f9d24dc096e">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc79b1a4a670f9d24dc096e" href="/i/reservation/LN16G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
              <div class="panel panel-lg panel-default panel-space-sm">


                <div class="media booking-item" id="booking-item-5fc25f2ad0b48d824d2614b1" data-_id="5fc25f2ad0b48d824d2614b1">
                  <div class="btn media-left media-middle media-sm text-center media-lg text-muted hidden-xs">
                    <i class="media-object fa fa-calendar fa-2x"></i>
                  </div>
                  <div class="media-body panel-body">
                    <div class="row">
                      <div class="col-sm-5">
                        <h4 class="media-heading">
                          <a href="/i/reservation/LN14G"><small>LN14G</small></a>
                          <small>|</small>
                          <a target="_blank" href="/i/account-overview/5fc25f22d0b48d5ec62614ac">Jessica galvao de sousa .</a>
                          <small>| <a target="_blank" href="https://wa.me/5562993549009"><img loading="lazy" src="/common/img/whatsapp.png"></a></small>
                        </h4>
                        <p>
                          <!--LABELS-->
                          <a class="label label-info" target="_blank" href="/i/apartment/KL02G/setup"><i class="fa fa-home"></i>VT 305 B</a>
                          <span class="label label-default">28 nov 2020 11:31</span>


                          <span class="label label-info">reserva</span>




                        </p>
                        <p>
                          <span>04 dez 2020</span>
                          <span>
                            <i aria-hidden="true" class="fa fa-arrow-right"></i>
                            06 dez 2020
                          </span>
                        </p>
                      </div>
                      <div class="col-sm-7 hidden-xs">
                        <div class="row">
                          <div class="col-xs-3 col-sm-6 col-md-3">
                            <h4>
                              <small>Caução:</small><br>

                            </h4>
                          </div>
                          <div class="col-xs-9 col-sm-6 col-md-9">
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Total:</small><br>
                                R$&nbsp;420,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Pendente:</small><br>
                                R$&nbsp;210,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Confirmado:</small><br>
                                R$&nbsp;0,00
                              </h4>
                            </div>
                            <div class="col-xs-3 col-sm-6 col-md-3">
                              <h4>
                                <small>Em Aberto:</small><br>
                                R$&nbsp;210,00
                              </h4>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-3">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                            <div class="col-xs-9">
                              <div class="progress" style="margin-bottom: 0">
                                <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-7 visible-xs">
                        <div class="row">
                          <div class="row">
                            <div class="col-xs-12">
                              <h4>
                                <small>Caução:</small><br>

                              </h4>
                            </div>
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0;">
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Pendente:</small><br>
                              R$&nbsp;210,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Confirmado:</small><br>
                              R$&nbsp;0,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Em Aberto:</small><br>
                              R$&nbsp;210,00
                            </h4>
                          </div>
                          <div class="col-xs-6 col-sm-6 col-md-3">
                            <h4>
                              <small>Total:</small><br>
                              R$&nbsp;420,00
                            </h4>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <div class="progress" style="margin-bottom: 0">
                                <div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">

                        <script>
                          requirejs(["jquery", "safe", "bootstrap-dialog"], function($, safe, b3Dialog) {
                            $(function() {
                              var $container = $("#booking-item-5fc25f2ad0b48d824d2614b1"),
                                _idreserve = "5fc25f2ad0b48d824d2614b1",
                                $collapseContainer = $("#card-5fc25f2ad0b48d824d2614b1");
                              $(".show-ccdata-link[href='#card-5fc25f2ad0b48d824d2614b1']").on("click", function() {
                                if ($collapseContainer.find(".ccdata-list-item").length) {
                                  return $collapseContainer.collapse('toggle');
                                }
                                $container.block();
                                safe.run(function(cb) {
                                  requirejs(["api", "clitpl"], function(api, tf) {
                                    api.call("reserve.getCCDATA", _idreserve, {}, safe.sure(cb, function(ccdata) {
                                      tf.render("ccdata-list-item", {
                                        ccdata: ccdata
                                      }, safe.sure_result(cb, function(text) {
                                        $collapseContainer.find(".ccdata-privacy-container").append(text);
                                        $collapseContainer.collapse('toggle');
                                      }));
                                    }));
                                  }, cb);
                                }, function(err) {
                                  $container.unblock();
                                  appError(err);
                                });
                                return false;
                              });
                            });
                          }, appError);
                        </script>
                      </div>
                    </div>
                  </div>
                  <div class="hidden-xs media-right" style="min-width: 60px; background-color: #FFFFFF;">
                  </div>

                  <div role="button" class="hidden-xs hidden-md media-right media-middle text-center  media-btn media-sm confirm " data-_dtcheckin="2020-12-04T14:00:00.000Z" data-_dtcheckout="2020-12-06T10:00:00.000Z" data-_id="5fc25f2ad0b48d824d2614b1">
                    <i class="fa fa-forward text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Repassar</small>
                  </div>
                  <a role="button" class="media-right media-middle text-center media-btn media-sm edit " data-_id="5fc25f2ad0b48d824d2614b1" href="/i/reservation/LN14G">
                    <i class="fa fa-chevron-right text-muted fa-2x"></i>
                    <br>
                    <small class="text-muted">Detalhes</small>
                  </a>
                </div>
              </div>
            </div>
            <nav class="text-center">
              <ul class="pagination">
                <li class="disabled"><a>22 total</a></li>
              </ul>
              <ul class="pagination">
                <li class="hidden">
                  <a href="#">◄</a>
                </li>
                <li class="active">
                  <a href="/i/bookings/0">1</a>
                </li>
                <li>
                  <a href="/i/bookings/1">2</a>
                </li>
                <li>
                  <a href="/i/bookings/1">►</a>
                </li>
              </ul>
            </nav>
            <script>
              requirejs(["admin/forward"], function(forward) {
                forward();
              }, window.appError);
            </script>
            <div class="panel panel-default">
              <div class="panel-heading" data-toggle="collapse" href="#statistic" aria-expanded="false">
                <h4>
                  <i class="fa fa-bar-chart"></i> Resumo Estatístico <i class="caret"></i>
                </h4>
              </div>
              <div id="statistic" class="panel-body collapse" aria-expanded="false" style="height: 30px;"></div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1035px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 634px;"></div>
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