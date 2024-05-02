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
          <div class="col-sm-3 scroll ps">
            <div class="panel-body">
              <div class="media" style="overflow: visible;">
                <div class="media-body">
                  <p class="lead text-center text-muted" style="margin: 0;">
                    <strong>Extratos de Contas</strong>
                    <br> Pagamentos &amp; Recebimentos
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
                      <li class="active"><a href="#" style="line-height: 2.5;">Extratos de Contas</a></li>
                      <li>
                        <a href="/i/product/accounting/0
?from=2020-11-26
&amp;to=2020-12-03
" style="line-height: 2.5;">
                          Balanço de Proprietários
                        </a>
                      </li>
                      <li>
                        <a href="/i/bookings
?from=2020-11-26
&amp;to=2020-12-03
&amp;dateof=_dtcheckIn
" style="line-height: 2.5;">
                          Achar Reserva
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr>
              <!--CREATE BUTTONS-->
              <div class="form-group">

                <a class="btn btn-success dropdown-toggle" style="width: 100%;" data-toggle="dropdown" href="#">
                  Nova Transação
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a class="btn-new-accounting" data-type="c" data-resptype="_b_agency" href="#">Recebimento</a></li>
                  <li><a class="btn-new-accounting" data-type="d" data-resptype="_b_agency" href="#">Pagamento</a></li>
                  <hr>
                  <li><a id="btn-new-internal-transfer" data-type="internal-transfer" href="#">Transferência</a></li>
                </ul>
              </div>
              <hr>
              <!--FILTER-->
              <form id="filterform" class="ajax_form" action="/i/finance/accounting" novalidate="true" role="form">
                <div class="input-daterange row" data-validate="daterange">
                  <div class="col-lg-6 form-group has-feedback has-success">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control date from" placeholder="De" autocomplete="off">
                      <input type="hidden" name="from">
                    </div>
                  </div>
                  <div class="col-lg-6 form-group has-feedback has-success">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <input type="text" class="form-control date to" placeholder="Até" autocomplete="off">
                      <input type="hidden" name="to">
                    </div>
                  </div>
                </div>
                <!--Flag from accountings page-->
                <div class="form-group hidden">
                  <label>Tipo</label>
                  <div class="dropdown bootstrap-select show-tick form-control type bs3"><select class="selectpicker form-control type" name="type[]" data-live-search="0" data-container="#maincontent" multiple="" required="">

                      <option value="d" data-content="<span class='label label-danger'>pagamentos</span>" selected="">pagamentos</option>

                      <option value="c" data-content="<span class='label label-success'>recebimentos</span>" selected="">recebimentos</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-21" aria-haspopup="listbox" aria-expanded="false" title="pagamentos recebimentos">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-danger">pagamentos</span> <span class="label label-success">recebimentos</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-21" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group hidden" id="status-block">
                  <label>Status</label>
                  <div class="dropdown bootstrap-select show-tick form-control status bs3"><select class="selectpicker form-control status" name="status[]" data-live-search="0" data-container="#maincontent" multiple="">
                      <option value="paid" data-content="<span class='label label-success'>pago</span>" selected="">pago</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-22" aria-haspopup="listbox" aria-expanded="false" title="pago">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-success">pago</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-22" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label">Busca por texto</label>
                  <input class="form-control" type="text" name="textSearch" value="">
                </div>
                <div class="collapse" id="add-filter-body">
                  <div class="form-group has-feedback">
                    <label class="control-label">Proprietario</label>
                    <div class="dropdown bootstrap-select show-tick form-control landlord bs3"><select class="form-control landlord selectpicker" name="landlord" data-ownerid="" data-container="#maincontent">
                        <option value="">Não Selecionado</option>
                        <option value="59551f2f680f7b0001900bc2">Cleyton Mendonça</option>
                        <option value="5985f61df1ae1b000f38a772">MARTINHO APARECIDO GALLO</option>
                        <option value="5a341159155a0a00103523ef">EBENEZER FARIA ALVES</option>
                        <option value="5b58810abf5c180011feeee3">JOÃO PEGORARO</option>
                        <option value="5bbb92b94f192800124d22d8">LUIZ TAMIYO NAGATA</option>
                        <option value="5bbe89c10e1fee0012d40851">THIAGO NEVES GOMES DAMACENO</option>
                        <option value="5d58121157edd20010aa814d">VERÔNICA VILAUBA NOGUEIRA DUTRA</option>
                        <option value="5d713669a0b15400109ef0f5">MARIA DA CONCEIÇÃO CALDAS</option>
                        <option value="5daa227d733062001088e1f4">Normando Munhoz</option>
                        <option value="5e2f2fa0e8102d0010f65ed5">MARIA SALETE ARAUJO FERREIRA .</option>
                        <option value="5e30471765a81d0010dbb805">PAULO JANDER DE SOUSA</option>
                        <option value="5e35e88cfc5b4a0010734882">José Carlos Miranda Torrejais .</option>
                        <option value="5e37317c60510900102baa8c">Fernando de Carvalho sobrinho .</option>
                        <option value="5e639f4ab8916300107c25ec">MARIA BARBOSA DE MENEZES</option>
                        <option value="5f05e4c06e247460966ece9d">Wilton Silva Neto</option>
                        <option value="5f0cbb11c55ce9d2225d7383">SIDNEI ROBERTO DE CARVALHO SILVA</option>
                        <option value="5f493b9546451ab730925c4d">admin</option>
                        <option value="5f49437e46451a3a26925d96">Jose Nildo Ferreira De Siqueira</option>
                        <option value="5fa59fe0f0ef986eabacae28">SUELEN CARVALHO DA SILVA</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-23" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-23" aria-autocomplete="list" aria-activedescendant="bs-select-23-0"></div>
                        <div class="inner open" role="listbox" id="bs-select-23" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-23-0" tabindex="0" aria-setsize="20" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Cleyton Mendonça</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARTINHO APARECIDO GALLO</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EBENEZER FARIA ALVES</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JOÃO PEGORARO</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">LUIZ TAMIYO NAGATA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">THIAGO NEVES GOMES DAMACENO</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VERÔNICA VILAUBA NOGUEIRA DUTRA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA DA CONCEIÇÃO CALDAS</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Normando Munhoz</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA SALETE ARAUJO FERREIRA .</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PAULO JANDER DE SOUSA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">José Carlos Miranda Torrejais .</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Fernando de Carvalho sobrinho .</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA BARBOSA DE MENEZES</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Wilton Silva Neto</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SIDNEI ROBERTO DE CARVALHO SILVA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">admin</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-18" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Jose Nildo Ferreira De Siqueira</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-23-19" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SUELEN CARVALHO DA SILVA</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="control-label">Prédio</label>
                    <div class="dropdown bootstrap-select show-tick form-control building bs3"><select class="selectpicker form-control building" name="building" data-container="#maincontent" data-buildingid="">
                        <option value="">Não Selecionado</option>
                        <optgroup label="Brasil, Goias, Caldas Novas, Turista 1">
                          <option value="5955309e5ad044000193a2d1" data-subtext="" data-_idowner="" data-_idbuilding="">PH03E | Residencial Águas da Serra</option>
                          <option value="5b2926bed262120010ac25f1" data-subtext="" data-_idowner="" data-_idbuilding="">CY02F | Everst Flat Service</option>
                        </optgroup>
                        <optgroup label="Brasil, Goias, Caldas Novas, Chácara Roma">
                          <option value="595553a9680f7b0001900d9d" data-subtext="" data-_idowner="" data-_idbuilding="">PH08E | LACQUA - I</option>
                        </optgroup>
                        <optgroup label="Brasil, Goias, Caldas Novas, Do Turista">
                          <option value="5980ceab99dda30010533d21" data-subtext="" data-_idowner="" data-_idbuilding="">QO01E | Hot Springs</option>
                        </optgroup>
                        <optgroup label="Brasil, Goiás, Caldas Novas, Jeriquara">
                          <option value="5995a202852113000f1bd3c2" data-subtext="" data-_idowner="" data-_idbuilding="">RE01E | Vitória das Thermas</option>
                        </optgroup>
                        <optgroup label="Brasil, Goiás, Caldas Novas, Chácara Roma">
                          <option value="59973187c11ce4000fe37f96" data-subtext="" data-_idowner="" data-_idbuilding="">RF01E | LACQUA - V</option>
                          <option value="599dcf45e048d6000fcc2ceb" data-subtext="" data-_idowner="" data-_idbuilding="">RK01E | LACQUA - II</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, Caldas Novas, Lagoa Quente">
                          <option value="5a3416f4a01b650010902f53" data-subtext="" data-_idowner="" data-_idbuilding="">VU01E | Lagoa Quente Flat Service</option>
                        </optgroup>
                        <optgroup label="Brasil, Go - Goias, Caldas Novas, Chácara Roma">
                          <option value="5b6e0f06ff666d00111e8828" data-subtext="" data-_idowner="" data-_idbuilding="">EY02F | Di Roma Internacional Resort</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere">
                          <option value="5c8fb683d9d09f00107c2f62" data-subtext="" data-_idowner="" data-_idbuilding="">NK02F | Golden Dolphin Grand Hotel</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1">
                          <option value="5cccb202baaf90001747f837" data-subtext="" data-_idowner="" data-_idbuilding="">PE03F | Condomínio Millennium Thermas Residence</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma">
                          <option value="5d4d8b323894ec0010112b6f" data-subtext="" data-_idowner="" data-_idbuilding="">SY01F | DI ROMA FIORE</option>
                          <option value="5f635ca71c5a2f15713bde10" data-subtext="" data-_idowner="" data-_idbuilding="">IN01G | LACQUA - IV</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS">
                          <option value="5d699160f04d200010e797a8" data-subtext="" data-_idowner="" data-_idbuilding="">TT01F | Villas Di Roma</option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5f97101f7dcaf77840a87f23" data-subtext="" data-_idowner="" data-_idbuilding="">KA06G | RIVIERA PARK - FLAT SERVICE</option>
                          <option value="5fa57fe0f0ef985193aca680" data-subtext="" data-_idowner="" data-_idbuilding="">KL01G | VT 305 B</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, Caldas Novas, Solar de Caldas">
                          <option value="5faedc7a1bc8eb86dccf939e" data-subtext="" data-_idowner="" data-_idbuilding="">KS05G | DIROMA EXCLUSIVE</option>
                        </optgroup>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-24" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-24" aria-autocomplete="list" aria-activedescendant="bs-select-24-0"></div>
                        <div class="inner open" role="listbox" id="bs-select-24" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-24-0" tabindex="0" aria-setsize="18" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-1"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                            <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-24-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH03E | Residencial Águas da Serra</span></a></li>
                            <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-24-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">CY02F | Everst Flat Service</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-2"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-24-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH08E | LACQUA - I</span></a></li>
                            <li class="divider optgroup-2div"></li>
                            <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-24-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QO01E | Hot Springs</span></a></li>
                            <li class="divider optgroup-3div"></li>
                            <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-24-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">RE01E | Vitória das Thermas</span></a></li>
                            <li class="divider optgroup-4div"></li>
                            <li class="dropdown-header optgroup-5"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-24-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">RF01E | LACQUA - V</span></a></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-24-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">RK01E | LACQUA - II</span></a></li>
                            <li class="divider optgroup-5div"></li>
                            <li class="dropdown-header optgroup-6"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-24-20" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VU01E | Lagoa Quente Flat Service</span></a></li>
                            <li class="divider optgroup-6div"></li>
                            <li class="dropdown-header optgroup-7"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-24-23" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EY02F | Di Roma Internacional Resort</span></a></li>
                            <li class="divider optgroup-7div"></li>
                            <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                            <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-24-26" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NK02F | Golden Dolphin Grand Hotel</span></a></li>
                            <li class="divider optgroup-8div"></li>
                            <li class="dropdown-header optgroup-9"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                            <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-24-29" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PE03F | Condomínio Millennium Thermas Residence</span></a></li>
                            <li class="divider optgroup-9div"></li>
                            <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-24-32" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SY01F | DI ROMA FIORE</span></a></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-24-33" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">IN01G | LACQUA - IV</span></a></li>
                            <li class="divider optgroup-10div"></li>
                            <li class="dropdown-header optgroup-11"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-24-36" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT01F | Villas Di Roma</span></a></li>
                            <li class="divider optgroup-11div"></li>
                            <li class="dropdown-header optgroup-12"><span class="text"></span></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-24-39" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA06G | RIVIERA PARK - FLAT SERVICE</span></a></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-24-40" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KL01G | VT 305 B</span></a></li>
                            <li class="divider optgroup-12div"></li>
                            <li class="dropdown-header optgroup-13"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                            <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-24-43" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS05G | DIROMA EXCLUSIVE</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="control-label">Propriedade</label>
                    <div class="dropdown bootstrap-select show-tick form-control apartment bs3"><select class="selectpicker form-control apartment" name="apart" data-container="#maincontent" data-apartmentid="">
                        <option value="">Não Selecionado</option>
                        <optgroup label="Brasil, GOIÁS, Solar de Caldas">
                          <option value="5faecf5e1bc8ebb457cf90a4" data-subtext="" data-_idowner="" data-_idbuilding="">KS04G | DRE-507</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas">
                          <option value="5f96fe367dcaf7b6f2a879ea" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="5f96f9447dcaf71091a87943">KA02G | PIAZZA</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, GO">
                          <option value="5f970a857dcaf763e1a87cb2" data-subtext="" data-_idowner="" data-_idbuilding="">KA04G | RIVIERA PARK</option>
                        </optgroup>
                        <optgroup label="Brasil, Goias, Caldas Novas, Chácara Roma">
                          <option value="5980df9599dda30010533de6" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">PH39E | LACQUA POOL-2</option>
                          <option value="5bbe3bee0e1fee0012d3fe4b" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="595553a9680f7b0001900d9d">HH01F | LACQUA POOL-5</option>
                          <option value="5c9a8481b6ab50001070d8fa" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">NS01F | LACQUA POOL</option>
                          <option value="5cf925a2fcd3f7001086d355" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">QM02F | LACQUA POOL-3</option>
                          <option value="5c8c0975caf8d10010410737" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">NH04F | LACQUA POOL-4</option>
                          <option value="5955703a680f7b0001900ee9" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="595553a9680f7b0001900d9d">PH14E | LD1 201</option>
                          <option value="595651b5680f7b00019011fc" data-subtext="" data-_idowner="5e30471765a81d0010dbb805" data-_idbuilding="595553a9680f7b0001900d9d">PI01E | LD1 57</option>
                          <option value="5e31f003d6c66a0010e3e6a2" data-subtext="" data-_idowner="5e35e88cfc5b4a0010734882" data-_idbuilding="595553a9680f7b0001900d9d">ZP04F | LD1 -222</option>
                          <option value="5f284363a5368d2a37609e06" data-subtext="" data-_idowner="" data-_idbuilding="595553a9680f7b0001900d9d">GU01G | LD1 - 068</option>
                          <option value="5d0a9824560ff900106dd897" data-subtext="" data-_idowner="5d2a2a413ec0860017959a70" data-_idbuilding="595553a9680f7b0001900d9d">QZ01F | LD1 51</option>
                        </optgroup>
                        <optgroup label="Brasil, Goias, Caldas Novas, J Jeriquara">
                          <option value="5b4a25115ee3bb0010d4322f" data-subtext="" data-_idowner="5cb641f2f6496400101483b4" data-_idbuilding="59598da0f771730001852885">DX01F | AF 704 B</option>
                          <option value="595991fbe9dd6f0001d126f2" data-subtext="" data-_idowner="59598cd3e9dd6f0001d126bf" data-_idbuilding="59598da0f771730001852885">PL01E | AF1003C</option>
                        </optgroup>
                        <optgroup label="Brasil, Go - Goias, Caldas Novas, Chácara Roma">
                          <option value="5dfa190c1725da0010cf94a8" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="5b6e0f06ff666d00111e8828">XZ02F | RI 06</option>
                          <option value="5b6e14c2ff666d00111e88fa" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="5b6e0f06ff666d00111e8828">EY03F | RI 313</option>
                        </optgroup>
                        <optgroup label="Brasil, GO, CALDAS NOVAS, Turista II">
                          <option value="5f80646e6e7d788c66611325" data-subtext="" data-_idowner="" data-_idbuilding="">JJ01G | sol das calldas poll</option>
                        </optgroup>
                        <optgroup label="Brasil, Goiás, CALDAS NOVAS, Bandeirantes">
                          <option value="5f0ccb69c55ce972ce5d767b" data-subtext="" data-_idowner="5f0cbb11c55ce9d2225d7383" data-_idbuilding="">FZ02G | ECOL. G-605 SUITE</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere">
                          <option value="5ca4941433089c0010bbb02d" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="5c8fb683d9d09f00107c2f62">OA01F | GD - 416</option>
                          <option value="5c928ce211767a00103532d9" data-subtext="" data-_idowner="5b816c2a8eacb40011087410" data-_idbuilding="5c8fb683d9d09f00107c2f62">NM02F | GD 526</option>
                          <option value="5e5fb4628825220010fdf68d" data-subtext="" data-_idowner="5e639f4ab8916300107c25ec" data-_idbuilding="5c8fb683d9d09f00107c2f62">AY01G | FLAT 953</option>
                        </optgroup>
                        <optgroup label="Brasil, Goias, Caldas Novas, Do Turista">
                          <option value="5985f699f1ae1b000f38a779" data-subtext="" data-_idowner="5985f61df1ae1b000f38a772" data-_idbuilding="5980ceab99dda30010533d21">QS03E | HS 746</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, Caldas Novas, Lagoa Quente">
                          <option value="5a341abb155a0a0010352554" data-subtext="" data-_idowner="5a341159155a0a00103523ef" data-_idbuilding="5a3416f4a01b650010902f53">VU02E | LQ 509 C</option>
                          <option value="5f7da787ba076ecdd0a87412" data-subtext="" data-_idowner="5a341159155a0a00103523ef" data-_idbuilding="5a3416f4a01b650010902f53">JH01G | LQ 402 B</option>
                          <option value="5c8be31cf4dffd00104c7ff4" data-subtext="" data-_idowner="5a341159155a0a00103523ef" data-_idbuilding="5a3416f4a01b650010902f53">NH01F | LQ 406 B</option>
                        </optgroup>
                        <optgroup label="Brasil, Goiás, Caldas Novas, Chácara Roma">
                          <option value="5bbb92f7c476330012a8530c" data-subtext="" data-_idowner="5bbb92b94f192800124d22d8" data-_idbuilding="59973187c11ce4000fe37f96">HF01F | LD5 76</option>
                          <option value="5f0cbce1c55ce937205d73bc" data-subtext="" data-_idowner="5f0cbb11c55ce9d2225d7383" data-_idbuilding="599dcf45e048d6000fcc2ceb">FZ01G | LD2 - 152</option>
                          <option value="5f591bb07237cd6a4e00c35a" data-subtext="" data-_idowner="5f49437e46451a3a26925d96" data-_idbuilding="599dcf45e048d6000fcc2ceb">IF01G | LD2 - 194</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, Caldas Novas, Solar de Caldas">
                          <option value="5faede4d1bc8ebfa83cf93fc" data-subtext="" data-_idowner="" data-_idbuilding="5faedc7a1bc8eb86dccf939e">KS08G | DRE 507</option>
                        </optgroup>
                        <optgroup label="Brasil, Goias, Caldas Novas, Turista 1">
                          <option value="5b5892fcbf5c180011fef0f5" data-subtext="" data-_idowner="5b58810abf5c180011feeee3" data-_idbuilding="5b2926bed262120010ac25f1">EI01F | EV 106</option>
                          <option value="5bc235066cf88a0014b6dab2" data-subtext="" data-_idowner="59551f2f680f7b0001900bc2" data-_idbuilding="5955309e5ad044000193a2d1">HK01F | AS 805 C</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma">
                          <option value="5bbe3e62c2c4100012e1af14" data-subtext="" data-_idowner="5bbb92b94f192800124d22d8" data-_idbuilding="5f635ca71c5a2f15713bde10">HH02F | LD4-209</option>
                          <option value="5fae96701bc8eb568bcf835b" data-subtext="" data-_idowner="" data-_idbuilding="5f635ca71c5a2f15713bde10">KS02G | LD4 - 119</option>
                          <option value="5d6fc17272c0fa00106f8f04" data-subtext="" data-_idowner="5d713669a0b15400109ef0f5" data-_idbuilding="5f635ca71c5a2f15713bde10">TY02F | LD 322/324</option>
                        </optgroup>
                        <optgroup label="Brasil, Goiás, Caldas Novas, Bandeirantes">
                          <option value="5dcb11e97ab9c60010e22305" data-subtext="" data-_idowner="5f0cbb11c55ce9d2225d7383" data-_idbuilding="">WP02F | ECOL. G-605 FLAT</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS">
                          <option value="5d6992acf04d200010e797c4" data-subtext="" data-_idowner="5d713669a0b15400109ef0f5" data-_idbuilding="5d699160f04d200010e797a8">TT02F | VR - 402 A</option>
                          <option value="5d699bc7f04d200010e7990c" data-subtext="" data-_idowner="5d713669a0b15400109ef0f5" data-_idbuilding="5d699160f04d200010e797a8">TT03F | VR - 707 A</option>
                        </optgroup>
                        <optgroup label="Brasil, Goiás, Caldas Novas, Jeriquara">
                          <option value="5e31cb31e20ba5001039b58e" data-subtext="" data-_idowner="5e37317c60510900102baa8c" data-_idbuilding="5995a202852113000f1bd3c2">ZP02F | VT - 101 A</option>
                          <option value="5fa582b7f0ef980068aca76d" data-subtext="" data-_idowner="5fa59fe0f0ef986eabacae28" data-_idbuilding="5995a202852113000f1bd3c2">KL02G | VT 305 B</option>
                        </optgroup>
                        <optgroup label="Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1">
                          <option value="5da71d71053de70010c247ed" data-subtext="" data-_idowner="5daa227d733062001088e1f4" data-_idbuilding="5cccb202baaf90001747f837">VO02F | Millennium Thermas Residence 602 A</option>
                        </optgroup>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-25" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-25" aria-autocomplete="list" aria-activedescendant="bs-select-25-0"></div>
                        <div class="inner open" role="listbox" id="bs-select-25" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-25-0" tabindex="0" aria-setsize="42" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-1"><span class="text">Brasil, GOIÁS, Solar de Caldas</span></li>
                            <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-25-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS04G | DRE-507</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-2"><span class="text">Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas</span></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-25-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA02G | PIAZZA</span></a></li>
                            <li class="divider optgroup-2div"></li>
                            <li class="dropdown-header optgroup-3"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, GO</span></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-25-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA04G | RIVIERA PARK</span></a></li>
                            <li class="divider optgroup-3div"></li>
                            <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH39E | LACQUA POOL-2</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HH01F | LACQUA POOL-5</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NS01F | LACQUA POOL</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QM02F | LACQUA POOL-3</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NH04F | LACQUA POOL-4</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH14E | LD1 201</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-18" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PI01E | LD1 57</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-19" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ZP04F | LD1 -222</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-20" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">GU01G | LD1 - 068</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-25-21" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QZ01F | LD1 51</span></a></li>
                            <li class="divider optgroup-4div"></li>
                            <li class="dropdown-header optgroup-5"><span class="text">Brasil, Goias, Caldas Novas, J Jeriquara</span></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-25-24" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">DX01F | AF 704 B</span></a></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-25-25" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PL01E | AF1003C</span></a></li>
                            <li class="divider optgroup-5div"></li>
                            <li class="dropdown-header optgroup-6"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-25-28" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">XZ02F | RI 06</span></a></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-25-29" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EY03F | RI 313</span></a></li>
                            <li class="divider optgroup-6div"></li>
                            <li class="dropdown-header optgroup-7"><span class="text">Brasil, GO, CALDAS NOVAS, Turista II</span></li>
                            <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-25-32" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JJ01G | sol das calldas poll</span></a></li>
                            <li class="divider optgroup-7div"></li>
                            <li class="dropdown-header optgroup-8"><span class="text">Brasil, Goiás, CALDAS NOVAS, Bandeirantes</span></li>
                            <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-25-35" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">FZ02G | ECOL. G-605 SUITE</span></a></li>
                            <li class="divider optgroup-8div"></li>
                            <li class="dropdown-header optgroup-9"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                            <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-25-38" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">OA01F | GD - 416</span></a></li>
                            <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-25-39" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NM02F | GD 526</span></a></li>
                            <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-25-40" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">AY01G | FLAT 953</span></a></li>
                            <li class="divider optgroup-9div"></li>
                            <li class="dropdown-header optgroup-10"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-25-43" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QS03E | HS 746</span></a></li>
                            <li class="divider optgroup-10div"></li>
                            <li class="dropdown-header optgroup-11"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-25-46" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VU02E | LQ 509 C</span></a></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-25-47" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JH01G | LQ 402 B</span></a></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-25-48" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NH01F | LQ 406 B</span></a></li>
                            <li class="divider optgroup-11div"></li>
                            <li class="dropdown-header optgroup-12"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-25-51" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HF01F | LD5 76</span></a></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-25-52" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">FZ01G | LD2 - 152</span></a></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-25-53" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">IF01G | LD2 - 194</span></a></li>
                            <li class="divider optgroup-12div"></li>
                            <li class="dropdown-header optgroup-13"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                            <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-25-56" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS08G | DRE 507</span></a></li>
                            <li class="divider optgroup-13div"></li>
                            <li class="dropdown-header optgroup-14"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-25-59" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EI01F | EV 106</span></a></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-25-60" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HK01F | AS 805 C</span></a></li>
                            <li class="divider optgroup-14div"></li>
                            <li class="dropdown-header optgroup-15"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                            <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-25-63" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HH02F | LD4-209</span></a></li>
                            <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-25-64" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS02G | LD4 - 119</span></a></li>
                            <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-25-65" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TY02F | LD 322/324</span></a></li>
                            <li class="divider optgroup-15div"></li>
                            <li class="dropdown-header optgroup-16"><span class="text">Brasil, Goiás, Caldas Novas, Bandeirantes</span></li>
                            <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-25-68" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">WP02F | ECOL. G-605 FLAT</span></a></li>
                            <li class="divider optgroup-16div"></li>
                            <li class="dropdown-header optgroup-17"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-25-71" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT02F | VR - 402 A</span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-25-72" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT03F | VR - 707 A</span></a></li>
                            <li class="divider optgroup-17div"></li>
                            <li class="dropdown-header optgroup-18"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-25-75" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ZP02F | VT - 101 A</span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-25-76" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KL02G | VT 305 B</span></a></li>
                            <li class="divider optgroup-18div"></li>
                            <li class="dropdown-header optgroup-19"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-25-79" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VO02F | Millennium Thermas Residence 602 A</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <label class="control-label">Parceiro</label>
                    <div class="partner">
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select id="partner" class="selectpicker form-control" name="partner" data-container="#maincontent" data-partnerid="">
                          <option value="">Não Selecionado</option>
                          <option value="5d03584c3b57e00010438eba">API Decolar</option>
                          <option value="5ae49f3ffbb74a0010a2ae82">API Flipkey</option>
                          <option value="5d0357c73b57e00010438eb6">API HomeAway</option>
                          <option value="5d03581a3b57e00010438eb8">API TemporadaLivre</option>
                          <option value="5d1b5c5ec62b271c78796473">API airbnb</option>
                          <option value="5d1b5cbec62b271c78796479">API booking.com</option>
                          <option value="5d1b5cd3c62b271c7879647b">API expedia</option>
                          <option value="5726512a58d74a0f000f9852">Airbnb</option>
                          <option value="525d9e1849a791963d000252">Aluguetemporada</option>
                          <option value="51e8e6c4c4aa79ddfa181e13">BOOKING</option>
                          <option value="5726514a58d74a0f000f9854">CORRETOR PARCEIRO</option>
                          <option value="54625f2820af010b2863f50d">EXPEDIA</option>
                          <option value="525d9ec949a791963d000256">Facebook</option>
                          <option value="5726515c58d74a0f000f9855">Google</option>
                          <option value="5d03c3713ec8993ca20c4211">Website</option>
                          <option value="5726516c58d74a0f000f9856">Whatsapp</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-26" aria-haspopup="listbox" aria-expanded="false" data-id="partner" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-26" aria-autocomplete="list" aria-activedescendant="bs-select-26-0"></div>
                          <div class="inner open" role="listbox" id="bs-select-26" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-26-0" tabindex="0" aria-setsize="17" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API Decolar</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API Flipkey</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API HomeAway</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API TemporadaLivre</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API airbnb</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API booking.com</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">API expedia</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Airbnb</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Aluguetemporada</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">BOOKING</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">CORRETOR PARCEIRO</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EXPEDIA</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Facebook</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Google</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Website</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Whatsapp</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--KIND-->
                  <div class="form-group has-feedback">
                    <label class="control-label">Posição Contábil</label>
                    <div class="dropdown bootstrap-select show-tick form-control kind bs3"><select class="selectpicker form-control kind" name="kind" data-container="#maincontent" data-transid="">
                        <optgroup>
                          <option value="">Não Selecionado</option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5480b6d6328cc4d7378b17fb" data-subtext="1.01.01.01.001">
                            CAIXA GERAL
                          </option>
                          <option value="545bb3140bff0d0579867c4e" data-subtext="1.01.01.01.002">
                            CAIXA AGENTE 1
                          </option>
                          <option value="5480c638328cc4d7378b1f42" data-subtext="1.01.01.01.003">
                            CAIXA AGENTE 2
                          </option>
                          <option value="5480c668328cc4d7378b1f5c" data-subtext="1.01.01.01.004">
                            CAIXA AGENTE 3
                          </option>
                          <option value="5480c6b8328cc4d7378b1f82" data-subtext="1.01.01.01.005">
                            CAIXA AGENTE 4
                          </option>
                          <option value="5480c6f9328cc4d7378b1fa4" data-subtext="1.01.01.01.006">
                            CAIXA AGENTE 5
                          </option>
                          <option value="5480c755328cc4d7378b1fc2" data-subtext="1.01.01.01.007">
                            CAIXA AGENTE 6
                          </option>
                          <option value="54815d68328cc4d7378b4b5a" data-subtext="1.01.01.01.008">
                            CAIXA CAUÇÃO
                          </option>
                          <option value="55608e6026d43b9365a9d441" data-subtext="1.01.01.01.009">
                            Caixa Diferenca
                          </option>
                          <option value="557ae80b564cb6e64a45f3be" data-subtext="1.01.01.01.010">
                            Cambio
                          </option>
                          <option value="557e19b0c25fcc1450fb0048" data-subtext="1.01.01.01.999">
                            CAIXA IMPLANTAÇÃO DE SALDO
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5480c9d1328cc4d7378b2042" data-subtext="1.01.01.02.001">
                            BANCO ITAÚ
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="548156ad328cc4d7378b495b" data-subtext="1.01.05.01.001">
                            CLIENTES TURISMO
                          </option>
                          <option value="54815750328cc4d7378b4982" data-subtext="1.01.05.01.002">
                            CLIENTES
                          </option>
                          <option value="54815339328cc4d7378b4910" data-subtext="1.01.05.02.001">
                            CLIENTES TEMPORADA
                          </option>
                          <option value="54815501328cc4d7378b492d" data-subtext="1.01.05.02.002">
                            CLIENTES LOCAÇÃO
                          </option>
                          <option value="559e8cb2eb3f41c255682bbc" data-subtext="1.01.05.02.003">
                            Recebimentos referente danos e prejuízos APTOS
                          </option>
                          <option value="55b2475cf5d5198a47f58174" data-subtext="1.01.05.02.005">
                            Venda de imoveis
                          </option>
                          <option value="55ce25a7dc12ab284003edd9" data-subtext="1.01.05.02.006">
                            Recebimentos referente luz + gás APTOS
                          </option>
                          <option value="55d48a3f80dba8a527bc2ff0" data-subtext="1.01.05.02.007">
                            Recebimentos não identificados
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="54815b4c328cc4d7378b4ad5" data-subtext="1.01.03.04.001">
                            ADTO A FORNECEDORES - PF
                          </option>
                          <option value="54815be8328cc4d7378b4b0a" data-subtext="1.01.03.04.002">
                            ADTO A FORNECEDORES - PJ
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489e99e22f73b0771265e8a" data-subtext="1.01.03.02.001">
                            ADTO A EMPREGADOS - SALÁRIO
                          </option>
                          <option value="54815c3b328cc4d7378b4b16" data-subtext="1.01.03.02.002">
                            ADTO A EMPREGADOS - 13 °SALÁRIO
                          </option>
                          <option value="54815c86328cc4d7378b4b1d" data-subtext="1.01.03.02.003">
                            ADTO A EMPREGADOS - EMPRÉSTIMOS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5481610a328cc4d7378b4c9e" data-subtext="2.03.01.01.001">
                            SÓCIO 1
                          </option>
                          <option value="54816149328cc4d7378b4d0c" data-subtext="2.03.01.01.002">
                            SÓCIO 2
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489e87b22f73b0771265df5" data-subtext="1.01.01.03.001">
                            ITAÚ APLIC AUT.
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489eb0822f73b0771265f65" data-subtext="1.01.03.03.001">
                            DIRETOR 1
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489ecee22f73b07712660f0" data-subtext="1.04.01.01.001">
                            EMPRESA / PESSOA 1
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489f55422f73b0771266508" data-subtext="1.07.04.02.001">
                            APARTAMENTOS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489f58c22f73b077126652c" data-subtext="1.07.04.04.001">
                            VEÍCULOS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489f5fa22f73b0771266552" data-subtext="1.07.04.05.001">
                            Móveis, Utensílios e Instalações Comerciais
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489f6ec22f73b07712665be" data-subtext="1.07.04.12.001">
                            (-) DEPRECIAÇÃO DE IMÓVEIS
                          </option>
                          <option value="5489f70322f73b07712665c3" data-subtext="1.07.04.12.002">
                            (-) DEPRECIAÇÃO DE VEÍCULOS
                          </option>
                          <option value="5489f71c22f73b07712665c9" data-subtext="1.07.04.12.003">
                            (-) DEPRECIAÇÃO DE MÓVEIS E UTENSILIOS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489f7b822f73b0771266610" data-subtext="2.01.01.01.001">
                            FORNECEDORES A PAGAR
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5489f7e722f73b077126662c" data-subtext="2.01.01.02.001">
                            EMPRÉSTIMO BANCO ITAÚ
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="548a073622f73b0771266cfa" data-subtext="5.01.01.01.001">
                            SALÁRIOS E ORDENADOS
                          </option>
                          <option value="548a07b822f73b0771266d21" data-subtext="5.01.01.01.002">
                            PRÓ-LABORE
                          </option>
                          <option value="548a07d922f73b0771266d42" data-subtext="5.01.01.01.003">
                            PRÊMIOS E GRATIFICAÇÕES
                          </option>
                          <option value="548a07f722f73b0771266d61" data-subtext="5.01.01.01.004">
                            13º SALÁRIO
                          </option>
                          <option value="548a080c22f73b0771266d77" data-subtext="5.01.01.01.005">
                            FÉRIAS
                          </option>
                          <option value="548a082122f73b0771266d79" data-subtext="5.01.01.01.006">
                            INSS
                          </option>
                          <option value="548a084722f73b0771266d81" data-subtext="5.01.01.01.007">
                            FGTS
                          </option>
                          <option value="548a088622f73b0771266d9b" data-subtext="5.01.01.01.008">
                            INDENIZAÇÕES E AVISO PRÉVIO
                          </option>
                          <option value="548a089622f73b0771266da0" data-subtext="5.01.01.01.009">
                            ASSISTÊNCIA MÉDICA E SOCIAL
                          </option>
                          <option value="548a08a822f73b0771266da3" data-subtext="5.01.01.01.010">
                            VALE TRANSPORTE
                          </option>
                          <option value="548a08bf22f73b0771266daf" data-subtext="5.01.01.01.011">
                            PIS S/ FOLHA
                          </option>
                          <option value="548a08d922f73b0771266dc2" data-subtext="5.01.01.01.012">
                            ADICIONAL DE PERICULOSIDADE
                          </option>
                          <option value="548a08f122f73b0771266dca" data-subtext="5.01.01.01.013">
                            ADICIONAL NOTURNO
                          </option>
                          <option value="548a094e22f73b0771266e03" data-subtext="5.01.01.01.014">
                            AJUDA DE CUSTO
                          </option>
                          <option value="548a096622f73b0771266e1e" data-subtext="5.01.01.01.015">
                            ANUÊNIO
                          </option>
                          <option value="548a098b22f73b0771266e35" data-subtext="5.01.01.01.016">
                            AUXÍLIO MORADIA
                          </option>
                          <option value="548a09b422f73b0771266e53" data-subtext="5.01.01.01.017">
                            BIÊNIO
                          </option>
                          <option value="548a09e722f73b0771266e60" data-subtext="5.01.01.01.019">
                            CESTAS BÁSICAS
                          </option>
                          <option value="548a0a0322f73b0771266e72" data-subtext="5.01.01.01.020">
                            COMISSÕES
                          </option>
                          <option value="548a0a4622f73b0771266e9f" data-subtext="5.01.01.01.021">
                            CURSOS E TREINAMENTO DE FUNCIONÁRIOS
                          </option>
                          <option value="548a0a5922f73b0771266ea6" data-subtext="5.01.01.01.022">
                            DESPESAS COM ALIMENTAÇÃO
                          </option>
                          <option value="548a0a7522f73b0771266ebb" data-subtext="5.01.01.01.023">
                            BOLSA ESTÁGIO
                          </option>
                          <option value="548a0ab122f73b0771266edd" data-subtext="5.01.01.01.025">
                            FGTS RESCISÓRIO
                          </option>
                          <option value="548a0ac322f73b0771266ee5" data-subtext="5.01.01.01.026">
                            HORAS EXTRAS
                          </option>
                          <option value="548a0ae922f73b0771266ef6" data-subtext="5.01.01.01.027">
                            ADICIONAL DE INSALUBRIDADE
                          </option>
                          <option value="548a0b0422f73b0771266f0e" data-subtext="5.01.01.01.028">
                            OUTRAS DESPESAS COM PESSOAL
                          </option>
                          <option value="548a0b1a22f73b0771266f16" data-subtext="5.01.01.01.029">
                            PLANO DE PREVIDÊNCIA PRIVADA
                          </option>
                          <option value="548a0b8822f73b0771266f54" data-subtext="5.01.01.01.030">
                            QUEBRA DE CAIXA
                          </option>
                          <option value="557319af78bcfa9552382487" data-subtext="5.01.01.01.031">
                            VALE REFEIÇÃO
                          </option>
                          <option value="55b250fff5d5198a47f586a3" data-subtext="5.01.01.01.032">
                            Comissões sobre receitas de venda
                          </option>
                          <option value="55bba033686eaeb952d13bb8" data-subtext="5.01.01.01.033">
                            Pagamentos referente danos causados por clientes
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="548a114122f73b077126712b" data-subtext="5.01.01.02.001">
                            ALUGUEL
                          </option>
                          <option value="548a119422f73b0771267138" data-subtext="5.01.01.02.002">
                            ENERGIA ELÉTRICA
                          </option>
                          <option value="548a11e022f73b0771267150" data-subtext="5.01.01.02.003">
                            ÁGUA E ESGOTO
                          </option>
                          <option value="548a121a22f73b0771267176" data-subtext="5.01.01.02.004">
                            TELEFONE
                          </option>
                          <option value="548a122e22f73b077126717b" data-subtext="5.01.01.02.005">
                            DESPESAS POSTAIS E TELEGRÁFICAS
                          </option>
                          <option value="548a124522f73b0771267181" data-subtext="5.01.01.02.006">
                            SEGUROS
                          </option>
                          <option value="548a126522f73b0771267185" data-subtext="5.01.01.02.007">
                            MATERIAL DE ESCRITÓRIO
                          </option>
                          <option value="548a127622f73b077126718c" data-subtext="5.01.01.02.008">
                            MATERIAL DE HIGIENE E LIMPEZA
                          </option>
                          <option value="548a128322f73b0771267192" data-subtext="5.01.01.02.009">
                            ASSISTÊNCIA CONTÁBIL
                          </option>
                          <option value="548a129322f73b077126719c" data-subtext="5.01.01.02.010">
                            DEPRECIAÇÕES E AMORTIZAÇÕES
                          </option>
                          <option value="548a12a622f73b077126719e" data-subtext="5.01.01.02.011">
                            DESPESAS LEGAIS E JUDICIAIS
                          </option>
                          <option value="548a12b922f73b07712671a2" data-subtext="5.01.01.02.012">
                            LIVROS, JORNAIS E REVISTAS
                          </option>
                          <option value="548a12cf22f73b07712671a5" data-subtext="5.01.01.02.013">
                            MULTA DE TRÂNSITO
                          </option>
                          <option value="548a12e022f73b07712671b1" data-subtext="5.01.01.02.014">
                            ANUIDADES
                          </option>
                          <option value="548a12ed22f73b07712671bb" data-subtext="5.01.01.02.015">
                            BENS DURÁVEIS NÃO ATIVADOS
                          </option>
                          <option value="548a12fe22f73b07712671c6" data-subtext="5.01.01.02.016">
                            COMBUSTÍVEL
                          </option>
                          <option value="548a132222f73b07712671d4" data-subtext="5.01.01.02.017">
                            CONDOMÍNIO
                          </option>
                          <option value="548a133022f73b07712671e1" data-subtext="5.01.01.02.018">
                            CONDUÇÃO
                          </option>
                          <option value="548a133f22f73b07712671e8" data-subtext="5.01.01.02.019">
                            CONFRATERNIZAÇÃO
                          </option>
                          <option value="548a134e22f73b07712671eb" data-subtext="5.01.01.02.020">
                            CONSERVAÇÃO E LIMPEZA
                          </option>
                          <option value="548a136322f73b07712671f2" data-subtext="5.01.01.02.022">
                            CÓPIAS, AUTENTICAÇÃO E ENCARDERNAÇÕES
                          </option>
                          <option value="548a137922f73b07712671fe" data-subtext="5.01.01.02.023">
                            DESPESA COM CARTÓRIO
                          </option>
                          <option value="548a138d22f73b0771267202" data-subtext="5.01.01.02.024">
                            DESPESAS COM VEICULOS
                          </option>
                          <option value="548a139c22f73b077126720c" data-subtext="5.01.01.02.025">
                            ESTACIONAMENTO
                          </option>
                          <option value="548a13a822f73b0771267212" data-subtext="5.01.01.02.026">
                            FRETES E CARRETOS
                          </option>
                          <option value="548a13bf22f73b0771267220" data-subtext="5.01.01.02.027">
                            LANCHES E REFEIÇÕES
                          </option>
                          <option value="548a13cc22f73b0771267226" data-subtext="5.01.01.02.028">
                            PAGER, INTERNET E OUTRAS
                          </option>
                          <option value="548a13d822f73b0771267237" data-subtext="5.01.01.02.029">
                            PEDÁGIO
                          </option>
                          <option value="548a13e522f73b0771267248" data-subtext="5.01.01.02.030">
                            GÁS
                          </option>
                          <option value="548a13f222f73b077126724e" data-subtext="5.01.01.02.031">
                            OBRAS E REFORMAS
                          </option>
                          <option value="548a141622f73b0771267264" data-subtext="5.01.01.02.032">
                            INSTALAÇÕES
                          </option>
                          <option value="548a142b22f73b0771267280" data-subtext="5.01.01.02.033">
                            SOFTWARE E SISTEMAS
                          </option>
                          <option value="548a143e22f73b0771267289" data-subtext="5.01.01.02.034">
                            MATERIAL DE INFORMÁTICA
                          </option>
                          <option value="548a144d22f73b0771267293" data-subtext="5.01.01.02.035">
                            MATERIAL DE USO E CONSUMO
                          </option>
                          <option value="548a145d22f73b07712672a2" data-subtext="5.01.01.02.036">
                            MATERIAL PARA COPA E COZINHA
                          </option>
                          <option value="548a146c22f73b07712672a5" data-subtext="5.01.01.02.037">
                            ADVOGADOS
                          </option>
                          <option value="548a147e22f73b07712672a7" data-subtext="5.01.01.02.038">
                            ARQUITETURA E ENGENHARIA
                          </option>
                          <option value="548a148b22f73b07712672ae" data-subtext="5.01.01.02.039">
                            ASSESSORIA
                          </option>
                          <option value="548a149a22f73b07712672b8" data-subtext="5.01.01.02.040">
                            AUDITORIA
                          </option>
                          <option value="548a14aa22f73b07712672d2" data-subtext="5.01.01.02.041">
                            CONSULTORIA
                          </option>
                          <option value="548a14b722f73b07712672d5" data-subtext="5.01.01.02.042">
                            DESPACHANTE
                          </option>
                          <option value="548a14c422f73b0771267301" data-subtext="5.01.01.02.043">
                            SERVIÇOS DE INFORMÁTICA
                          </option>
                          <option value="548a14d122f73b0771267305" data-subtext="5.01.01.02.044">
                            REC DE PESSOAL / SEGURANÇA TRABALHO
                          </option>
                          <option value="548a14de22f73b077126730f" data-subtext="5.01.01.02.045">
                            SERVIÇOS GRÁFICOS / DESIGN
                          </option>
                          <option value="548a14eb22f73b0771267311" data-subtext="5.01.01.02.046">
                            SERVIÇO DE MOTOBOY
                          </option>
                          <option value="548a14f922f73b0771267314" data-subtext="5.01.01.02.047">
                            PROPAGANDA, PUBLICIDADE E MARKETING
                          </option>
                          <option value="548a150822f73b0771267315" data-subtext="5.01.01.02.048">
                            DESPESAS COM VIAGENS
                          </option>
                          <option value="548a151622f73b0771267317" data-subtext="5.01.01.02.049">
                            SERVIÇO DE CHAVEIRO
                          </option>
                          <option value="548a152a22f73b077126731a" data-subtext="5.01.01.02.050">
                            RECRUTAMENTO E SELEÇÃO
                          </option>
                          <option value="54c8e77e6179eb3c0fa76be9" data-subtext="5.01.01.02.051">
                            CRECI
                          </option>
                          <option value="54c8e9f96179eb3c0fa7705e" data-subtext="5.01.01.02.052">
                            IMPRESSORAS
                          </option>
                          <option value="54c8ea1f6179eb3c0fa771bf" data-subtext="5.01.01.02.053">
                            NOTEBOOK
                          </option>
                          <option value="54c8f87b6179eb3c0fa78df6" data-subtext="5.01.01.02.054">
                            CELULAR
                          </option>
                          <option value="54c8fb4f6179eb3c0fa7910b" data-subtext="5.01.01.02.055">
                            APARELHO TELEFONE
                          </option>
                          <option value="54c8fb786179eb3c0fa79116" data-subtext="5.01.01.02.056">
                            TÁXI IN/OUT
                          </option>
                          <option value="54c8fb986179eb3c0fa79118" data-subtext="5.01.01.02.057">
                            TÁXI LIMPEZA
                          </option>
                          <option value="54c8fbba6179eb3c0fa79121" data-subtext="5.01.01.02.058">
                            TÁXI COMPRAS
                          </option>
                          <option value="54c8fbd76179eb3c0fa7912c" data-subtext="5.01.01.02.059">
                            TÁXI MANUTENÇÃO
                          </option>
                          <option value="54c8fc1a6179eb3c0fa7913d" data-subtext="5.01.01.02.060">
                            TÁXI GERÊNCIA
                          </option>
                          <option value="54c8fc3e6179eb3c0fa79149" data-subtext="5.01.01.02.061">
                            ÔNIBUS
                          </option>
                          <option value="54c8fd3f6179eb3c0fa7970c" data-subtext="5.01.01.02.062">
                            ESPELHO
                          </option>
                          <option value="54c8fd576179eb3c0fa7970f" data-subtext="5.01.01.02.063">
                            BLINDEX
                          </option>
                          <option value="54c8fd806179eb3c0fa79714" data-subtext="5.01.01.02.064">
                            MATERIAL DE REPAROS
                          </option>
                          <option value="54c8fdc16179eb3c0fa79726" data-subtext="5.01.01.02.066">
                            PILHAS
                          </option>
                          <option value="54c8ffd16179eb3c0fa797c2" data-subtext="5.01.01.02.067">
                            CHAVEIRO
                          </option>
                          <option value="54c901476179eb3c0fa79945" data-subtext="5.01.01.02.068">
                            CÓPIA DE CHAVES
                          </option>
                          <option value="54c9021c6179eb3c0fa79c15" data-subtext="5.01.01.02.069">
                            SINTUR
                          </option>
                          <option value="54c9029e6179eb3c0fa79d85" data-subtext="5.01.01.02.070">
                            MANUTENÇÃO, CONFIGURAÇÃO E CABEAMENTO INFORMÁTICA
                          </option>
                          <option value="54c902bc6179eb3c0fa79d89" data-subtext="5.01.01.02.071">
                            CARTÃO DE VISITA
                          </option>
                          <option value="54c902dd6179eb3c0fa79ee7" data-subtext="5.01.01.02.072">
                            BANNER
                          </option>
                          <option value="5582da3211296ad11ecd478a" data-subtext="5.01.01.02.073">
                            Channel Manager
                          </option>
                          <option value="5588228383ee02232e516cf4" data-subtext="5.01.01.02.074">
                            COMISSÕES SOBRE ALUGUEIS
                          </option>
                          <option value="558822b783ee02232e516d41" data-subtext="5.01.01.02.075">
                            COMISSÕES SOBRE CAPTURAÇÕES
                          </option>
                          <option value="5589ae2a83ee02232e5232b4" data-subtext="5.01.01.02.076">
                            enxoval (roupas de cama)
                          </option>
                          <option value="558c40d6b008e2fe7417447d" data-subtext="5.01.01.02.077">
                            NET
                          </option>
                          <option value="558c6dd0b008e2fe74175d36" data-subtext="5.01.01.02.078">
                            Manutenção Bicicletas
                          </option>
                          <option value="55917265aca658487bdc0453" data-subtext="5.01.01.02.079">
                            Uniformes para Funcionários
                          </option>
                          <option value="55a40c821f6af0d1258ad0ca" data-subtext="5.01.01.02.080">
                            Serviço de segurança
                          </option>
                          <option value="5612690583a8c67821821858" data-subtext="5.01.01.02.081">
                            TÁXI 24HRS
                          </option>
                          <option value="5666ed600c1a2ec709f4fbeb" data-subtext="5.01.01.02.082">
                            Lavandaria
                          </option>
                          <option value="566b038b08bac0022fbbb5d2" data-subtext="5.01.01.02.083">
                            Despesas Alimentação Diretores
                          </option>
                          <option value="5671b3cb9aafd75a688ca8a4" data-subtext="5.01.01.02.084">
                            Manutenção Lojas
                          </option>
                          <option value="5560920c26d43b9365a9d61c" data-subtext="5.02">
                            Despesas Financeiras
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="548a15b122f73b0771267339" data-subtext="4.01.01.04.001">
                            CONDOMÍNIO
                          </option>
                          <option value="548a15f022f73b0771267344" data-subtext="4.01.01.04.002">
                            ALUGUÉIS
                          </option>
                          <option value="548a160422f73b0771267348" data-subtext="4.01.01.04.003">
                            ENERGIA ELÉTRICA
                          </option>
                          <option value="548a162022f73b077126734d" data-subtext="4.01.01.04.004">
                            GÁS
                          </option>
                          <option value="548a163722f73b077126734f" data-subtext="4.01.01.04.005">
                            NET
                          </option>
                          <option value="54c13de6b5915f9b48dbfb82" data-subtext="4.01.01.04.006">
                            CLARO TV
                          </option>
                          <option value="54c14338b5915f9b48dbfdc3" data-subtext="4.01.01.04.007">
                            MLS
                          </option>
                          <option value="54c142e1b5915f9b48dbfdab" data-subtext="4.01.01.04.008">
                            SKY
                          </option>
                          <option value="54c143e0b5915f9b48dbfe17" data-subtext="4.01.01.04.009">
                            OI / VELOX
                          </option>
                          <option value="54c144b3b5915f9b48dbfe76" data-subtext="4.01.01.04.010">
                            IPTU
                          </option>
                          <option value="54c14517b5915f9b48dbfe99" data-subtext="4.01.01.04.011">
                            IPTU
                          </option>
                          <option value="54c1453cb5915f9b48dbfea5" data-subtext="4.01.01.04.012">
                            DATI
                          </option>
                          <option value="5578534e4b7a243a07c80097" data-subtext="4.01.01.04.013">
                            MANUTENÇÃO - APTOS.
                          </option>
                          <option value="5582d7c011296ad11ecd452f" data-subtext="4.01.01.04.014">
                            eletrodomésticos APTOS
                          </option>
                          <option value="5582d7e611296ad11ecd4544" data-subtext="4.01.01.04.015">
                            compras para APTOS
                          </option>
                          <option value="5588521d83ee02232e518d8f" data-subtext="4.01.01.04.016">
                            OBRAS E REFORMAS APTOS
                          </option>
                          <option value="563cebb2acd3f4a87af51dd0" data-subtext="4.01.01.04.017">
                            Dedetização
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="54c808818313df7e284aded8" data-subtext="1.01.04.01">
                            ESTOQUE DE INSUMOS
                          </option>
                          <option value="54c8e2ee6179eb3c0fa7687a" data-subtext="1.01.04.01.001">
                            AR CONDICIONADO
                          </option>
                          <option value="54c8e3036179eb3c0fa7687c" data-subtext="1.01.04.01.002">
                            VENTILADOR DE TETO
                          </option>
                          <option value="54c8e31d6179eb3c0fa76883" data-subtext="1.01.04.01.003">
                            VENTILADOR
                          </option>
                          <option value="54c8e32e6179eb3c0fa76884" data-subtext="1.01.04.01.004">
                            AQUECEDOR
                          </option>
                          <option value="54c8e3446179eb3c0fa76885" data-subtext="1.01.04.01.005">
                            MICROONDAS
                          </option>
                          <option value="54c8e3596179eb3c0fa7688a" data-subtext="1.01.04.01.006">
                            COLCHÃO INFLAVEL
                          </option>
                          <option value="54c8e3716179eb3c0fa76890" data-subtext="1.01.04.01.007">
                            SOFA-CAMA
                          </option>
                          <option value="54c8e38b6179eb3c0fa76897" data-subtext="1.01.04.01.008">
                            CAMA DE CASAL
                          </option>
                          <option value="54c8e39c6179eb3c0fa7689b" data-subtext="1.01.04.01.009">
                            CAMA DE SOLTEIRO
                          </option>
                          <option value="54c8e3b56179eb3c0fa7689c" data-subtext="1.01.04.01.010">
                            LIQUIDIFICADOR
                          </option>
                          <option value="54c8e3cd6179eb3c0fa7689f" data-subtext="1.01.04.01.011">
                            CAFETEIRA
                          </option>
                          <option value="54c8e3dd6179eb3c0fa768a1" data-subtext="1.01.04.01.012">
                            SANDUICHEIRA
                          </option>
                          <option value="54c8e3fe6179eb3c0fa768a7" data-subtext="1.01.04.01.013">
                            TALHERES
                          </option>
                          <option value="54c8e42f6179eb3c0fa768a9" data-subtext="1.01.04.01.014">
                            COPOS
                          </option>
                          <option value="54c8e4436179eb3c0fa768ad" data-subtext="1.01.04.01.015">
                            PANELAS
                          </option>
                          <option value="54c8e4586179eb3c0fa768af" data-subtext="1.01.04.01.016">
                            PILHAS
                          </option>
                          <option value="54c8e4796179eb3c0fa76a10" data-subtext="1.01.04.01.017">
                            ADAPTADORES
                          </option>
                          <option value="54c8e4966179eb3c0fa76a21" data-subtext="1.01.04.01.018">
                            TV
                          </option>
                          <option value="54c8e4ab6179eb3c0fa76a28" data-subtext="1.01.04.01.019">
                            FERRO DE PASSAR
                          </option>
                          <option value="54c8e4be6179eb3c0fa76a2c" data-subtext="1.01.04.01.020">
                            TABUA DE PASSAR
                          </option>
                          <option value="54c8e4d36179eb3c0fa76a2f" data-subtext="1.01.04.01.021">
                            ESCOVA DE VASO
                          </option>
                          <option value="54c8e4e56179eb3c0fa76a32" data-subtext="1.01.04.01.022">
                            LIXEIRA
                          </option>
                          <option value="54c8e4fa6179eb3c0fa76a36" data-subtext="1.01.04.01.023">
                            ABAJOUR
                          </option>
                          <option value="54c8e51a6179eb3c0fa76a3f" data-subtext="1.01.04.01.024">
                            CONTROLE REMOTO
                          </option>
                          <option value="54c8fd9d6179eb3c0fa7971c" data-subtext="1.01.04.01.025">
                            LÂMPADAS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="556094bc26d43b9365a9d698" data-subtext="5.02.01">
                            Despesas Financeiras
                          </option>
                          <option value="557b12bc564cb6e64a460ba8" data-subtext="5.02.02">
                            taxa bancaria TED
                          </option>
                          <option value="557b146f564cb6e64a460c9f" data-subtext="5.02.03">
                            taxa bancaria RENOVACAO LIS
                          </option>
                          <option value="557c44e4c25fcc1450fa67f4" data-subtext="5.02.04">
                            CONTAS DUPLICADAS
                          </option>
                          <option value="559c48f7ec2b7eb615e89d65" data-subtext="5.02.05">
                            Juros + taxas bancárias + IOF
                          </option>
                          <option value="55d4e15a80dba8a527bcae86" data-subtext="5.02.06">
                            Taxa Western Union
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557363c0c1c4d6071cc08fb2" data-subtext="4.02.01.01.001">
                            Diferenca de caixa - a menos
                          </option>
                          <option value="5645fafa277191363799cded" data-subtext="4.02.01.01.002">
                            Prejuízo funcionarios
                          </option>
                          <option value="566b270808bac0022fbbf769" data-subtext="4.02.01.01.003">
                            Prejuízo causado por clientes
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5573771ac1c4d6071cc093da" data-subtext="6.01">
                            Diferença de caixa - a mais
                          </option>
                          <option value="5575e2e3a06f1af308fd94bf" data-subtext="6.02">
                            Desconto do Fornecedor
                          </option>
                          <option value="58d2beb20d1aa00001ce0f23" data-subtext="6.03">
                            Diferença de caixa - a menos
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557ed916c25fcc1450fb3bc9" data-subtext="2.01.01.03.001">
                            SIMPLES A RECOLHER
                          </option>
                          <option value="557f7abec25fcc1450fb9dd2" data-subtext="2.01.01.03.002">
                            IRRF S/ SALÁRIO - DARF 0561
                          </option>
                          <option value="557f7b15c25fcc1450fb9deb" data-subtext="2.01.01.03.003">
                            IRRF S/ SERVIÇOS - DARF 1708
                          </option>
                          <option value="557f7b6dc25fcc1450fb9e2d" data-subtext="2.01.01.03.004">
                            CSRF RET A REC - DARF 5952
                          </option>
                          <option value="5589b16083ee02232e5234f4" data-subtext="2.01.01.03.005">
                            DAS
                          </option>
                          <option value="55e765edaf3bccba12c51225" data-subtext="2.01.01.03.006">
                            GPS - GUIA DA PREVIDÊNCIA SOCIAL
                          </option>
                          <option value="563a40297f2583735e9aae75" data-subtext="2.01.01.03.007">
                            DARM RIO
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f7daec25fcc1450fb9fbc" data-subtext="2.01.02.01.001">
                            SALÁRIO A PAGAR
                          </option>
                          <option value="557f7dc9c25fcc1450fb9fd7" data-subtext="2.01.02.01.002">
                            PRÓ-LABORE A PAGAR
                          </option>
                          <option value="557f7de5c25fcc1450fb9fe9" data-subtext="2.01.02.01.003">
                            FÉRIAS A PAGAR
                          </option>
                          <option value="557f7e05c25fcc1450fb9ff5" data-subtext="2.01.02.01.004">
                            RESCISÃO DE CONTRATOS
                          </option>
                          <option value="557f7e28c25fcc1450fba011" data-subtext="2.01.02.01.005">
                            13° SALÁRIO A PAGAR
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f7eddc25fcc1450fba057" data-subtext="2.01.02.02.001">
                            INSS A RECOLHER
                          </option>
                          <option value="557f7efac25fcc1450fba05d" data-subtext="2.01.02.02.002">
                            FGTS A RECOLHER
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f7f77c25fcc1450fba0a9" data-subtext="2.01.02.03.001">
                            PROVISÃO - FÉRIAS
                          </option>
                          <option value="557f8299c25fcc1450fba1f5" data-subtext="2.01.02.03.003">
                            INSS SOBRE PROVISÕES PARA FÉRIAS
                          </option>
                          <option value="557f82bdc25fcc1450fba1fd" data-subtext="2.01.02.03.005">
                            FGTS SOBRE PROVISÕES PARA FÉRIAS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f8764c25fcc1450fba33f" data-subtext="2.01.03.02.001">
                            ADIANTAMENTO RESERVAS
                          </option>
                          <option value="557f878cc25fcc1450fba345" data-subtext="2.01.03.02.002">
                            ADIANTAMENTO DE ALUGUÉIS
                          </option>
                          <option value="557f87c0c25fcc1450fba36a" data-subtext="2.01.03.02.003">
                            ADIANTAMENTO - SERVIÇO TUR
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f8849c25fcc1450fba38e" data-subtext="2.01.03.03.001">
                            ALUGUEIS A PAGAR
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f8939c25fcc1450fba3c7" data-subtext="3.01.01.01.001">
                            RECEITA LOCAÇÃO
                          </option>
                          <option value="557f8953c25fcc1450fba3cc" data-subtext="3.01.01.01.002">
                            RECEITA TEMPORADA
                          </option>
                          <option value="557f896ec25fcc1450fba3e6" data-subtext="3.01.01.01.003">
                            RECEITA TURISMO
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f8a5bc25fcc1450fba47c" data-subtext="3.01.01.02.001">
                            (-) Vendas Canceladas, Devoluções e Descontos Incondicionais
                          </option>
                          <option value="557f8b7cc25fcc1450fba533" data-subtext="3.01.01.02.002">
                            (-) SIMPLES
                          </option>
                          <option value="5596eb01abcd4bc618979388" data-subtext="3.01.01.02.003">
                            TAXAS Cartões e cobranças
                          </option>
                          <option value="56561ba55533ee151275efe8" data-subtext="3.01.01.02.004">
                            (-) Vendas Canceladas e devoluções RETROATIVAS
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="557f8b2cc25fcc1450fba529" data-subtext="3.01.01.03.001">
                            Variações Cambiais Ativas
                          </option>
                        </optgroup>
                        <optgroup label="">
                          <option value="5be1b85d1ef6db2a87de8f18" data-subtext="01.01">
                            default debit
                          </option>
                          <option value="5be1b85d1ef6db2a87de8f19" data-subtext="01.02">
                            default credit
                          </option>
                        </optgroup>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-27" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-27" aria-autocomplete="list" aria-activedescendant="bs-select-27-1"></div>
                        <div class="inner open" role="listbox" id="bs-select-27" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li class="dropdown-header optgroup-1"><span class="text"></span></li>
                            <li class="optgroup-1 selected active"><a role="option" class="dropdown-item opt active selected" id="bs-select-27-1" tabindex="0" aria-setsize="239" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-2"><span class="text"></span></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA GERAL
                                  <small class="text-muted">1.01.01.01.001</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA AGENTE 1
                                  <small class="text-muted">1.01.01.01.002</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA AGENTE 2
                                  <small class="text-muted">1.01.01.01.003</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA AGENTE 3
                                  <small class="text-muted">1.01.01.01.004</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA AGENTE 4
                                  <small class="text-muted">1.01.01.01.005</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA AGENTE 5
                                  <small class="text-muted">1.01.01.01.006</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA AGENTE 6
                                  <small class="text-muted">1.01.01.01.007</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA CAUÇÃO
                                  <small class="text-muted">1.01.01.01.008</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Caixa Diferenca
                                  <small class="text-muted">1.01.01.01.009</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Cambio
                                  <small class="text-muted">1.01.01.01.010</small></span></a></li>
                            <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-27-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAIXA IMPLANTAÇÃO DE SALDO
                                  <small class="text-muted">1.01.01.01.999</small></span></a></li>
                            <li class="divider optgroup-2div"></li>
                            <li class="dropdown-header optgroup-3"><span class="text"></span></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-27-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  BANCO ITAÚ
                                  <small class="text-muted">1.01.01.02.001</small></span></a></li>
                            <li class="divider optgroup-3div"></li>
                            <li class="dropdown-header optgroup-4"><span class="text"></span></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-20" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CLIENTES TURISMO
                                  <small class="text-muted">1.01.05.01.001</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-21" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CLIENTES
                                  <small class="text-muted">1.01.05.01.002</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-22" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CLIENTES TEMPORADA
                                  <small class="text-muted">1.01.05.02.001</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-23" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CLIENTES LOCAÇÃO
                                  <small class="text-muted">1.01.05.02.002</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-24" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Recebimentos referente danos e prejuízos APTOS
                                  <small class="text-muted">1.01.05.02.003</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-25" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Venda de imoveis
                                  <small class="text-muted">1.01.05.02.005</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-26" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Recebimentos referente luz + gás APTOS
                                  <small class="text-muted">1.01.05.02.006</small></span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-27-27" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Recebimentos não identificados
                                  <small class="text-muted">1.01.05.02.007</small></span></a></li>
                            <li class="divider optgroup-4div"></li>
                            <li class="dropdown-header optgroup-5"><span class="text"></span></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-27-30" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADTO A FORNECEDORES - PF
                                  <small class="text-muted">1.01.03.04.001</small></span></a></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-27-31" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADTO A FORNECEDORES - PJ
                                  <small class="text-muted">1.01.03.04.002</small></span></a></li>
                            <li class="divider optgroup-5div"></li>
                            <li class="dropdown-header optgroup-6"><span class="text"></span></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-27-34" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADTO A EMPREGADOS - SALÁRIO
                                  <small class="text-muted">1.01.03.02.001</small></span></a></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-27-35" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADTO A EMPREGADOS - 13 °SALÁRIO
                                  <small class="text-muted">1.01.03.02.002</small></span></a></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-27-36" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADTO A EMPREGADOS - EMPRÉSTIMOS
                                  <small class="text-muted">1.01.03.02.003</small></span></a></li>
                            <li class="divider optgroup-6div"></li>
                            <li class="dropdown-header optgroup-7"><span class="text"></span></li>
                            <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-27-39" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SÓCIO 1
                                  <small class="text-muted">2.03.01.01.001</small></span></a></li>
                            <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-27-40" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SÓCIO 2
                                  <small class="text-muted">2.03.01.01.002</small></span></a></li>
                            <li class="divider optgroup-7div"></li>
                            <li class="dropdown-header optgroup-8"><span class="text"></span></li>
                            <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-27-43" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ITAÚ APLIC AUT.
                                  <small class="text-muted">1.01.01.03.001</small></span></a></li>
                            <li class="divider optgroup-8div"></li>
                            <li class="dropdown-header optgroup-9"><span class="text"></span></li>
                            <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-27-46" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DIRETOR 1
                                  <small class="text-muted">1.01.03.03.001</small></span></a></li>
                            <li class="divider optgroup-9div"></li>
                            <li class="dropdown-header optgroup-10"><span class="text"></span></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-27-49" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  EMPRESA / PESSOA 1
                                  <small class="text-muted">1.04.01.01.001</small></span></a></li>
                            <li class="divider optgroup-10div"></li>
                            <li class="dropdown-header optgroup-11"><span class="text"></span></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-27-52" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  APARTAMENTOS
                                  <small class="text-muted">1.07.04.02.001</small></span></a></li>
                            <li class="divider optgroup-11div"></li>
                            <li class="dropdown-header optgroup-12"><span class="text"></span></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-27-55" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  VEÍCULOS
                                  <small class="text-muted">1.07.04.04.001</small></span></a></li>
                            <li class="divider optgroup-12div"></li>
                            <li class="dropdown-header optgroup-13"><span class="text"></span></li>
                            <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-27-58" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Móveis, Utensílios e Instalações Comerciais
                                  <small class="text-muted">1.07.04.05.001</small></span></a></li>
                            <li class="divider optgroup-13div"></li>
                            <li class="dropdown-header optgroup-14"><span class="text"></span></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-27-61" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  (-) DEPRECIAÇÃO DE IMÓVEIS
                                  <small class="text-muted">1.07.04.12.001</small></span></a></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-27-62" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  (-) DEPRECIAÇÃO DE VEÍCULOS
                                  <small class="text-muted">1.07.04.12.002</small></span></a></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-27-63" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  (-) DEPRECIAÇÃO DE MÓVEIS E UTENSILIOS
                                  <small class="text-muted">1.07.04.12.003</small></span></a></li>
                            <li class="divider optgroup-14div"></li>
                            <li class="dropdown-header optgroup-15"><span class="text"></span></li>
                            <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-27-66" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FORNECEDORES A PAGAR
                                  <small class="text-muted">2.01.01.01.001</small></span></a></li>
                            <li class="divider optgroup-15div"></li>
                            <li class="dropdown-header optgroup-16"><span class="text"></span></li>
                            <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-27-69" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  EMPRÉSTIMO BANCO ITAÚ
                                  <small class="text-muted">2.01.01.02.001</small></span></a></li>
                            <li class="divider optgroup-16div"></li>
                            <li class="dropdown-header optgroup-17"><span class="text"></span></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-72" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SALÁRIOS E ORDENADOS
                                  <small class="text-muted">5.01.01.01.001</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-73" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PRÓ-LABORE
                                  <small class="text-muted">5.01.01.01.002</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-74" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PRÊMIOS E GRATIFICAÇÕES
                                  <small class="text-muted">5.01.01.01.003</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-75" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  13º SALÁRIO
                                  <small class="text-muted">5.01.01.01.004</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-76" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FÉRIAS
                                  <small class="text-muted">5.01.01.01.005</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-77" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  INSS
                                  <small class="text-muted">5.01.01.01.006</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-78" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FGTS
                                  <small class="text-muted">5.01.01.01.007</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-79" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  INDENIZAÇÕES E AVISO PRÉVIO
                                  <small class="text-muted">5.01.01.01.008</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-80" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ASSISTÊNCIA MÉDICA E SOCIAL
                                  <small class="text-muted">5.01.01.01.009</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-81" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  VALE TRANSPORTE
                                  <small class="text-muted">5.01.01.01.010</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-82" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PIS S/ FOLHA
                                  <small class="text-muted">5.01.01.01.011</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-83" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADICIONAL DE PERICULOSIDADE
                                  <small class="text-muted">5.01.01.01.012</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-84" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADICIONAL NOTURNO
                                  <small class="text-muted">5.01.01.01.013</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-85" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  AJUDA DE CUSTO
                                  <small class="text-muted">5.01.01.01.014</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-86" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ANUÊNIO
                                  <small class="text-muted">5.01.01.01.015</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-87" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  AUXÍLIO MORADIA
                                  <small class="text-muted">5.01.01.01.016</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-88" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  BIÊNIO
                                  <small class="text-muted">5.01.01.01.017</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-89" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CESTAS BÁSICAS
                                  <small class="text-muted">5.01.01.01.019</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-90" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  COMISSÕES
                                  <small class="text-muted">5.01.01.01.020</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-91" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CURSOS E TREINAMENTO DE FUNCIONÁRIOS
                                  <small class="text-muted">5.01.01.01.021</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-92" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPESAS COM ALIMENTAÇÃO
                                  <small class="text-muted">5.01.01.01.022</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-93" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  BOLSA ESTÁGIO
                                  <small class="text-muted">5.01.01.01.023</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-94" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FGTS RESCISÓRIO
                                  <small class="text-muted">5.01.01.01.025</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-95" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  HORAS EXTRAS
                                  <small class="text-muted">5.01.01.01.026</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-96" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADICIONAL DE INSALUBRIDADE
                                  <small class="text-muted">5.01.01.01.027</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-97" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  OUTRAS DESPESAS COM PESSOAL
                                  <small class="text-muted">5.01.01.01.028</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-98" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PLANO DE PREVIDÊNCIA PRIVADA
                                  <small class="text-muted">5.01.01.01.029</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-99" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  QUEBRA DE CAIXA
                                  <small class="text-muted">5.01.01.01.030</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-100" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  VALE REFEIÇÃO
                                  <small class="text-muted">5.01.01.01.031</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-101" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Comissões sobre receitas de venda
                                  <small class="text-muted">5.01.01.01.032</small></span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-27-102" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Pagamentos referente danos causados por clientes
                                  <small class="text-muted">5.01.01.01.033</small></span></a></li>
                            <li class="divider optgroup-17div"></li>
                            <li class="dropdown-header optgroup-18"><span class="text"></span></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-105" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ALUGUEL
                                  <small class="text-muted">5.01.01.02.001</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-106" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ENERGIA ELÉTRICA
                                  <small class="text-muted">5.01.01.02.002</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-107" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ÁGUA E ESGOTO
                                  <small class="text-muted">5.01.01.02.003</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-108" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TELEFONE
                                  <small class="text-muted">5.01.01.02.004</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-109" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPESAS POSTAIS E TELEGRÁFICAS
                                  <small class="text-muted">5.01.01.02.005</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-110" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SEGUROS
                                  <small class="text-muted">5.01.01.02.006</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-111" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MATERIAL DE ESCRITÓRIO
                                  <small class="text-muted">5.01.01.02.007</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-112" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MATERIAL DE HIGIENE E LIMPEZA
                                  <small class="text-muted">5.01.01.02.008</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-113" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ASSISTÊNCIA CONTÁBIL
                                  <small class="text-muted">5.01.01.02.009</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-114" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DEPRECIAÇÕES E AMORTIZAÇÕES
                                  <small class="text-muted">5.01.01.02.010</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-115" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPESAS LEGAIS E JUDICIAIS
                                  <small class="text-muted">5.01.01.02.011</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-116" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  LIVROS, JORNAIS E REVISTAS
                                  <small class="text-muted">5.01.01.02.012</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-117" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MULTA DE TRÂNSITO
                                  <small class="text-muted">5.01.01.02.013</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-118" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ANUIDADES
                                  <small class="text-muted">5.01.01.02.014</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-119" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  BENS DURÁVEIS NÃO ATIVADOS
                                  <small class="text-muted">5.01.01.02.015</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-120" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  COMBUSTÍVEL
                                  <small class="text-muted">5.01.01.02.016</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-121" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONDOMÍNIO
                                  <small class="text-muted">5.01.01.02.017</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-122" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONDUÇÃO
                                  <small class="text-muted">5.01.01.02.018</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-123" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONFRATERNIZAÇÃO
                                  <small class="text-muted">5.01.01.02.019</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-124" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONSERVAÇÃO E LIMPEZA
                                  <small class="text-muted">5.01.01.02.020</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-125" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CÓPIAS, AUTENTICAÇÃO E ENCARDERNAÇÕES
                                  <small class="text-muted">5.01.01.02.022</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-126" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPESA COM CARTÓRIO
                                  <small class="text-muted">5.01.01.02.023</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-127" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPESAS COM VEICULOS
                                  <small class="text-muted">5.01.01.02.024</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-128" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ESTACIONAMENTO
                                  <small class="text-muted">5.01.01.02.025</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-129" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FRETES E CARRETOS
                                  <small class="text-muted">5.01.01.02.026</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-130" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  LANCHES E REFEIÇÕES
                                  <small class="text-muted">5.01.01.02.027</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-131" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PAGER, INTERNET E OUTRAS
                                  <small class="text-muted">5.01.01.02.028</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-132" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PEDÁGIO
                                  <small class="text-muted">5.01.01.02.029</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-133" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  GÁS
                                  <small class="text-muted">5.01.01.02.030</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-134" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  OBRAS E REFORMAS
                                  <small class="text-muted">5.01.01.02.031</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-135" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  INSTALAÇÕES
                                  <small class="text-muted">5.01.01.02.032</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-136" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SOFTWARE E SISTEMAS
                                  <small class="text-muted">5.01.01.02.033</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-137" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MATERIAL DE INFORMÁTICA
                                  <small class="text-muted">5.01.01.02.034</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-138" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MATERIAL DE USO E CONSUMO
                                  <small class="text-muted">5.01.01.02.035</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-139" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MATERIAL PARA COPA E COZINHA
                                  <small class="text-muted">5.01.01.02.036</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-140" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADVOGADOS
                                  <small class="text-muted">5.01.01.02.037</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-141" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ARQUITETURA E ENGENHARIA
                                  <small class="text-muted">5.01.01.02.038</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-142" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ASSESSORIA
                                  <small class="text-muted">5.01.01.02.039</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-143" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  AUDITORIA
                                  <small class="text-muted">5.01.01.02.040</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-144" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONSULTORIA
                                  <small class="text-muted">5.01.01.02.041</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-145" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPACHANTE
                                  <small class="text-muted">5.01.01.02.042</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-146" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SERVIÇOS DE INFORMÁTICA
                                  <small class="text-muted">5.01.01.02.043</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-147" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  REC DE PESSOAL / SEGURANÇA TRABALHO
                                  <small class="text-muted">5.01.01.02.044</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-148" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SERVIÇOS GRÁFICOS / DESIGN
                                  <small class="text-muted">5.01.01.02.045</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-149" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SERVIÇO DE MOTOBOY
                                  <small class="text-muted">5.01.01.02.046</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-150" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PROPAGANDA, PUBLICIDADE E MARKETING
                                  <small class="text-muted">5.01.01.02.047</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-151" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DESPESAS COM VIAGENS
                                  <small class="text-muted">5.01.01.02.048</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-152" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SERVIÇO DE CHAVEIRO
                                  <small class="text-muted">5.01.01.02.049</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-153" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  RECRUTAMENTO E SELEÇÃO
                                  <small class="text-muted">5.01.01.02.050</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-154" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CRECI
                                  <small class="text-muted">5.01.01.02.051</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-155" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  IMPRESSORAS
                                  <small class="text-muted">5.01.01.02.052</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-156" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  NOTEBOOK
                                  <small class="text-muted">5.01.01.02.053</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-157" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CELULAR
                                  <small class="text-muted">5.01.01.02.054</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-158" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  APARELHO TELEFONE
                                  <small class="text-muted">5.01.01.02.055</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-159" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TÁXI IN/OUT
                                  <small class="text-muted">5.01.01.02.056</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-160" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TÁXI LIMPEZA
                                  <small class="text-muted">5.01.01.02.057</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-161" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TÁXI COMPRAS
                                  <small class="text-muted">5.01.01.02.058</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-162" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TÁXI MANUTENÇÃO
                                  <small class="text-muted">5.01.01.02.059</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-163" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TÁXI GERÊNCIA
                                  <small class="text-muted">5.01.01.02.060</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-164" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ÔNIBUS
                                  <small class="text-muted">5.01.01.02.061</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-165" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ESPELHO
                                  <small class="text-muted">5.01.01.02.062</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-166" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  BLINDEX
                                  <small class="text-muted">5.01.01.02.063</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-167" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MATERIAL DE REPAROS
                                  <small class="text-muted">5.01.01.02.064</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-168" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PILHAS
                                  <small class="text-muted">5.01.01.02.066</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-169" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CHAVEIRO
                                  <small class="text-muted">5.01.01.02.067</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-170" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CÓPIA DE CHAVES
                                  <small class="text-muted">5.01.01.02.068</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-171" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SINTUR
                                  <small class="text-muted">5.01.01.02.069</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-172" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MANUTENÇÃO, CONFIGURAÇÃO E CABEAMENTO INFORMÁTICA
                                  <small class="text-muted">5.01.01.02.070</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-173" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CARTÃO DE VISITA
                                  <small class="text-muted">5.01.01.02.071</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-174" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  BANNER
                                  <small class="text-muted">5.01.01.02.072</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-175" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Channel Manager
                                  <small class="text-muted">5.01.01.02.073</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-176" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  COMISSÕES SOBRE ALUGUEIS
                                  <small class="text-muted">5.01.01.02.074</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-177" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  COMISSÕES SOBRE CAPTURAÇÕES
                                  <small class="text-muted">5.01.01.02.075</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-178" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  enxoval (roupas de cama)
                                  <small class="text-muted">5.01.01.02.076</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-179" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  NET
                                  <small class="text-muted">5.01.01.02.077</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-180" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Manutenção Bicicletas
                                  <small class="text-muted">5.01.01.02.078</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-181" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Uniformes para Funcionários
                                  <small class="text-muted">5.01.01.02.079</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-182" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Serviço de segurança
                                  <small class="text-muted">5.01.01.02.080</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-183" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TÁXI 24HRS
                                  <small class="text-muted">5.01.01.02.081</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-184" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Lavandaria
                                  <small class="text-muted">5.01.01.02.082</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-185" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Despesas Alimentação Diretores
                                  <small class="text-muted">5.01.01.02.083</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-186" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Manutenção Lojas
                                  <small class="text-muted">5.01.01.02.084</small></span></a></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-27-187" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Despesas Financeiras
                                  <small class="text-muted">5.02</small></span></a></li>
                            <li class="divider optgroup-18div"></li>
                            <li class="dropdown-header optgroup-19"><span class="text"></span></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-190" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONDOMÍNIO
                                  <small class="text-muted">4.01.01.04.001</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-191" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ALUGUÉIS
                                  <small class="text-muted">4.01.01.04.002</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-192" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ENERGIA ELÉTRICA
                                  <small class="text-muted">4.01.01.04.003</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-193" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  GÁS
                                  <small class="text-muted">4.01.01.04.004</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-194" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  NET
                                  <small class="text-muted">4.01.01.04.005</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-195" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CLARO TV
                                  <small class="text-muted">4.01.01.04.006</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-196" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MLS
                                  <small class="text-muted">4.01.01.04.007</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-197" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SKY
                                  <small class="text-muted">4.01.01.04.008</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-198" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  OI / VELOX
                                  <small class="text-muted">4.01.01.04.009</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-199" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  IPTU
                                  <small class="text-muted">4.01.01.04.010</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-200" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  IPTU
                                  <small class="text-muted">4.01.01.04.011</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-201" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DATI
                                  <small class="text-muted">4.01.01.04.012</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-202" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MANUTENÇÃO - APTOS.
                                  <small class="text-muted">4.01.01.04.013</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-203" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  eletrodomésticos APTOS
                                  <small class="text-muted">4.01.01.04.014</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-204" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  compras para APTOS
                                  <small class="text-muted">4.01.01.04.015</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-205" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  OBRAS E REFORMAS APTOS
                                  <small class="text-muted">4.01.01.04.016</small></span></a></li>
                            <li class="optgroup-19"><a role="option" class="dropdown-item opt" id="bs-select-27-206" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Dedetização
                                  <small class="text-muted">4.01.01.04.017</small></span></a></li>
                            <li class="divider optgroup-19div"></li>
                            <li class="dropdown-header optgroup-20"><span class="text"></span></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-209" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ESTOQUE DE INSUMOS
                                  <small class="text-muted">1.01.04.01</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-210" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  AR CONDICIONADO
                                  <small class="text-muted">1.01.04.01.001</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-211" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  VENTILADOR DE TETO
                                  <small class="text-muted">1.01.04.01.002</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-212" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  VENTILADOR
                                  <small class="text-muted">1.01.04.01.003</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-213" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  AQUECEDOR
                                  <small class="text-muted">1.01.04.01.004</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-214" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  MICROONDAS
                                  <small class="text-muted">1.01.04.01.005</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-215" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  COLCHÃO INFLAVEL
                                  <small class="text-muted">1.01.04.01.006</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-216" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SOFA-CAMA
                                  <small class="text-muted">1.01.04.01.007</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-217" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAMA DE CASAL
                                  <small class="text-muted">1.01.04.01.008</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-218" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAMA DE SOLTEIRO
                                  <small class="text-muted">1.01.04.01.009</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-219" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  LIQUIDIFICADOR
                                  <small class="text-muted">1.01.04.01.010</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-220" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CAFETEIRA
                                  <small class="text-muted">1.01.04.01.011</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-221" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SANDUICHEIRA
                                  <small class="text-muted">1.01.04.01.012</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-222" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TALHERES
                                  <small class="text-muted">1.01.04.01.013</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-223" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  COPOS
                                  <small class="text-muted">1.01.04.01.014</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-224" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PANELAS
                                  <small class="text-muted">1.01.04.01.015</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-225" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PILHAS
                                  <small class="text-muted">1.01.04.01.016</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-226" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADAPTADORES
                                  <small class="text-muted">1.01.04.01.017</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-227" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TV
                                  <small class="text-muted">1.01.04.01.018</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-228" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FERRO DE PASSAR
                                  <small class="text-muted">1.01.04.01.019</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-229" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TABUA DE PASSAR
                                  <small class="text-muted">1.01.04.01.020</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-230" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ESCOVA DE VASO
                                  <small class="text-muted">1.01.04.01.021</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-231" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  LIXEIRA
                                  <small class="text-muted">1.01.04.01.022</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-232" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ABAJOUR
                                  <small class="text-muted">1.01.04.01.023</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-233" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONTROLE REMOTO
                                  <small class="text-muted">1.01.04.01.024</small></span></a></li>
                            <li class="optgroup-20"><a role="option" class="dropdown-item opt" id="bs-select-27-234" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  LÂMPADAS
                                  <small class="text-muted">1.01.04.01.025</small></span></a></li>
                            <li class="divider optgroup-20div"></li>
                            <li class="dropdown-header optgroup-21"><span class="text"></span></li>
                            <li class="optgroup-21"><a role="option" class="dropdown-item opt" id="bs-select-27-237" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Despesas Financeiras
                                  <small class="text-muted">5.02.01</small></span></a></li>
                            <li class="optgroup-21"><a role="option" class="dropdown-item opt" id="bs-select-27-238" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  taxa bancaria TED
                                  <small class="text-muted">5.02.02</small></span></a></li>
                            <li class="optgroup-21"><a role="option" class="dropdown-item opt" id="bs-select-27-239" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  taxa bancaria RENOVACAO LIS
                                  <small class="text-muted">5.02.03</small></span></a></li>
                            <li class="optgroup-21"><a role="option" class="dropdown-item opt" id="bs-select-27-240" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CONTAS DUPLICADAS
                                  <small class="text-muted">5.02.04</small></span></a></li>
                            <li class="optgroup-21"><a role="option" class="dropdown-item opt" id="bs-select-27-241" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Juros + taxas bancárias + IOF
                                  <small class="text-muted">5.02.05</small></span></a></li>
                            <li class="optgroup-21"><a role="option" class="dropdown-item opt" id="bs-select-27-242" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Taxa Western Union
                                  <small class="text-muted">5.02.06</small></span></a></li>
                            <li class="divider optgroup-21div"></li>
                            <li class="dropdown-header optgroup-22"><span class="text"></span></li>
                            <li class="optgroup-22"><a role="option" class="dropdown-item opt" id="bs-select-27-245" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Diferenca de caixa - a menos
                                  <small class="text-muted">4.02.01.01.001</small></span></a></li>
                            <li class="optgroup-22"><a role="option" class="dropdown-item opt" id="bs-select-27-246" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Prejuízo funcionarios
                                  <small class="text-muted">4.02.01.01.002</small></span></a></li>
                            <li class="optgroup-22"><a role="option" class="dropdown-item opt" id="bs-select-27-247" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Prejuízo causado por clientes
                                  <small class="text-muted">4.02.01.01.003</small></span></a></li>
                            <li class="divider optgroup-22div"></li>
                            <li class="dropdown-header optgroup-23"><span class="text"></span></li>
                            <li class="optgroup-23"><a role="option" class="dropdown-item opt" id="bs-select-27-250" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Diferença de caixa - a mais
                                  <small class="text-muted">6.01</small></span></a></li>
                            <li class="optgroup-23"><a role="option" class="dropdown-item opt" id="bs-select-27-251" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Desconto do Fornecedor
                                  <small class="text-muted">6.02</small></span></a></li>
                            <li class="optgroup-23"><a role="option" class="dropdown-item opt" id="bs-select-27-252" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Diferença de caixa - a menos
                                  <small class="text-muted">6.03</small></span></a></li>
                            <li class="divider optgroup-23div"></li>
                            <li class="dropdown-header optgroup-24"><span class="text"></span></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-255" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SIMPLES A RECOLHER
                                  <small class="text-muted">2.01.01.03.001</small></span></a></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-256" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  IRRF S/ SALÁRIO - DARF 0561
                                  <small class="text-muted">2.01.01.03.002</small></span></a></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-257" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  IRRF S/ SERVIÇOS - DARF 1708
                                  <small class="text-muted">2.01.01.03.003</small></span></a></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-258" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  CSRF RET A REC - DARF 5952
                                  <small class="text-muted">2.01.01.03.004</small></span></a></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-259" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DAS
                                  <small class="text-muted">2.01.01.03.005</small></span></a></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-260" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  GPS - GUIA DA PREVIDÊNCIA SOCIAL
                                  <small class="text-muted">2.01.01.03.006</small></span></a></li>
                            <li class="optgroup-24"><a role="option" class="dropdown-item opt" id="bs-select-27-261" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  DARM RIO
                                  <small class="text-muted">2.01.01.03.007</small></span></a></li>
                            <li class="divider optgroup-24div"></li>
                            <li class="dropdown-header optgroup-25"><span class="text"></span></li>
                            <li class="optgroup-25"><a role="option" class="dropdown-item opt" id="bs-select-27-264" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  SALÁRIO A PAGAR
                                  <small class="text-muted">2.01.02.01.001</small></span></a></li>
                            <li class="optgroup-25"><a role="option" class="dropdown-item opt" id="bs-select-27-265" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PRÓ-LABORE A PAGAR
                                  <small class="text-muted">2.01.02.01.002</small></span></a></li>
                            <li class="optgroup-25"><a role="option" class="dropdown-item opt" id="bs-select-27-266" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FÉRIAS A PAGAR
                                  <small class="text-muted">2.01.02.01.003</small></span></a></li>
                            <li class="optgroup-25"><a role="option" class="dropdown-item opt" id="bs-select-27-267" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  RESCISÃO DE CONTRATOS
                                  <small class="text-muted">2.01.02.01.004</small></span></a></li>
                            <li class="optgroup-25"><a role="option" class="dropdown-item opt" id="bs-select-27-268" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  13° SALÁRIO A PAGAR
                                  <small class="text-muted">2.01.02.01.005</small></span></a></li>
                            <li class="divider optgroup-25div"></li>
                            <li class="dropdown-header optgroup-26"><span class="text"></span></li>
                            <li class="optgroup-26"><a role="option" class="dropdown-item opt" id="bs-select-27-271" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  INSS A RECOLHER
                                  <small class="text-muted">2.01.02.02.001</small></span></a></li>
                            <li class="optgroup-26"><a role="option" class="dropdown-item opt" id="bs-select-27-272" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FGTS A RECOLHER
                                  <small class="text-muted">2.01.02.02.002</small></span></a></li>
                            <li class="divider optgroup-26div"></li>
                            <li class="dropdown-header optgroup-27"><span class="text"></span></li>
                            <li class="optgroup-27"><a role="option" class="dropdown-item opt" id="bs-select-27-275" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  PROVISÃO - FÉRIAS
                                  <small class="text-muted">2.01.02.03.001</small></span></a></li>
                            <li class="optgroup-27"><a role="option" class="dropdown-item opt" id="bs-select-27-276" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  INSS SOBRE PROVISÕES PARA FÉRIAS
                                  <small class="text-muted">2.01.02.03.003</small></span></a></li>
                            <li class="optgroup-27"><a role="option" class="dropdown-item opt" id="bs-select-27-277" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  FGTS SOBRE PROVISÕES PARA FÉRIAS
                                  <small class="text-muted">2.01.02.03.005</small></span></a></li>
                            <li class="divider optgroup-27div"></li>
                            <li class="dropdown-header optgroup-28"><span class="text"></span></li>
                            <li class="optgroup-28"><a role="option" class="dropdown-item opt" id="bs-select-27-280" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADIANTAMENTO RESERVAS
                                  <small class="text-muted">2.01.03.02.001</small></span></a></li>
                            <li class="optgroup-28"><a role="option" class="dropdown-item opt" id="bs-select-27-281" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADIANTAMENTO DE ALUGUÉIS
                                  <small class="text-muted">2.01.03.02.002</small></span></a></li>
                            <li class="optgroup-28"><a role="option" class="dropdown-item opt" id="bs-select-27-282" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ADIANTAMENTO - SERVIÇO TUR
                                  <small class="text-muted">2.01.03.02.003</small></span></a></li>
                            <li class="divider optgroup-28div"></li>
                            <li class="dropdown-header optgroup-29"><span class="text"></span></li>
                            <li class="optgroup-29"><a role="option" class="dropdown-item opt" id="bs-select-27-285" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  ALUGUEIS A PAGAR
                                  <small class="text-muted">2.01.03.03.001</small></span></a></li>
                            <li class="divider optgroup-29div"></li>
                            <li class="dropdown-header optgroup-30"><span class="text"></span></li>
                            <li class="optgroup-30"><a role="option" class="dropdown-item opt" id="bs-select-27-288" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  RECEITA LOCAÇÃO
                                  <small class="text-muted">3.01.01.01.001</small></span></a></li>
                            <li class="optgroup-30"><a role="option" class="dropdown-item opt" id="bs-select-27-289" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  RECEITA TEMPORADA
                                  <small class="text-muted">3.01.01.01.002</small></span></a></li>
                            <li class="optgroup-30"><a role="option" class="dropdown-item opt" id="bs-select-27-290" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  RECEITA TURISMO
                                  <small class="text-muted">3.01.01.01.003</small></span></a></li>
                            <li class="divider optgroup-30div"></li>
                            <li class="dropdown-header optgroup-31"><span class="text"></span></li>
                            <li class="optgroup-31"><a role="option" class="dropdown-item opt" id="bs-select-27-293" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  (-) Vendas Canceladas, Devoluções e Descontos Incondicionais
                                  <small class="text-muted">3.01.01.02.001</small></span></a></li>
                            <li class="optgroup-31"><a role="option" class="dropdown-item opt" id="bs-select-27-294" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  (-) SIMPLES
                                  <small class="text-muted">3.01.01.02.002</small></span></a></li>
                            <li class="optgroup-31"><a role="option" class="dropdown-item opt" id="bs-select-27-295" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  TAXAS Cartões e cobranças
                                  <small class="text-muted">3.01.01.02.003</small></span></a></li>
                            <li class="optgroup-31"><a role="option" class="dropdown-item opt" id="bs-select-27-296" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  (-) Vendas Canceladas e devoluções RETROATIVAS
                                  <small class="text-muted">3.01.01.02.004</small></span></a></li>
                            <li class="divider optgroup-31div"></li>
                            <li class="dropdown-header optgroup-32"><span class="text"></span></li>
                            <li class="optgroup-32"><a role="option" class="dropdown-item opt" id="bs-select-27-299" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  Variações Cambiais Ativas
                                  <small class="text-muted">3.01.01.03.001</small></span></a></li>
                            <li class="divider optgroup-32div"></li>
                            <li class="dropdown-header optgroup-33"><span class="text"></span></li>
                            <li class="optgroup-33"><a role="option" class="dropdown-item opt" id="bs-select-27-302" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  default debit
                                  <small class="text-muted">01.01</small></span></a></li>
                            <li class="optgroup-33"><a role="option" class="dropdown-item opt" id="bs-select-27-303" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                  default credit
                                  <small class="text-muted">01.02</small></span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--BANK-->
                  <div class="form-group has-feedback">
                    <label class="control-label">Banco</label>
                    <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="selectpicker form-control" data-container="#maincontent" name="bank">
                        <option value="" class="text-muted">Escolher banco</option>
                        <option value="nobank">N/A</option>
                        <option value="cash">Cash </option>
                        <option value="5ab40222908ecd0010bc8fe7">CARTÃO DE CREDITO </option>
                        <option value="5e6a7c8efb622a0010b94610">PAGAR.ME BOLETOS </option>
                        <option value="59a868045413a4000f06dd9f">TRANSFERÊNCIA BANCÁRIA </option>
                        <option value="5994a4385d882100104b7f0f">BANCO DO BRASIL CLEYTON AMARO DE MENDONÇA - ME</option>
                        <option value="5cc6ff7667ba1100103350cb">CAIXA ECONÔMICA FEDERAL / CLEYTON AMARO DE MENDONÇA </option>
                        <option value="247669727475616c62616e6b">Virtual bank </option>
                        <option value="242424756e747261636b6564">Untracked bank </option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-28" aria-haspopup="listbox" aria-expanded="false" title="Escolher banco">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Escolher banco</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-28" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-28" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--SECTOR-->
                  <div class="form-group has-feedback">
                    <label class="control-label">Setor</label>
                    <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="selectpicker form-control" data-container="#maincontent" name="relSector">
                        <option value="" class="text-muted">Centro de Custo</option>
                        <option value="557fd8c85f37844b4e773f4c">SAQ</option>
                        <option value="557fd8d85f37844b4e773f52">Compra e Venda</option>
                        <option value="557fd8e35f37844b4e773f57">DP</option>
                        <option value="557fd8ec5f37844b4e773f59">Recepção</option>
                        <option value="557fd8f55f37844b4e773f5c">Marketing</option>
                        <option value="557fd8fe5f37844b4e773f63">Financeiro</option>
                        <option value="557fd9065f37844b4e773f6b">Manutenção</option>
                        <option value="557fd90e5f37844b4e773f6d">Almoxarifado</option>
                        <option value="557fd9165f37844b4e773f70">24h</option>
                        <option value="557fd9225f37844b4e773f73">ADH</option>
                        <option value="557fd92a5f37844b4e773f74">Comercial</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-29" aria-haspopup="listbox" aria-expanded="false" title="Centro de Custo">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Centro de Custo</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-29" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-29" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--PROVIDER-->
                  <div class="form-group">
                    <div class="form-group has-feedback">
                      <label class="control-label">Fornecedor</label>
                      <div class="dropdown bootstrap-select show-tick form-control provider bs3"><select class="selectpicker form-control provider" name="provider" data-container="#maincontent" data-providerid="">
                          <option value="">Não Selecionado</option>
                          <option value="5f7b04e93d8ea10322d4b11b">Airbnb</option>
                          <option value="5f7b04e93d8ea10322d4b120">Airbnb</option>
                          <option value="5f7b04e93d8ea10322d4b118">Aluguetemporada</option>
                          <option value="5f7b04e93d8ea10322d4b11f">Aluguetemporada</option>
                          <option value="5f7b04e93d8ea10322d4b117">BOOKING</option>
                          <option value="5f7b04e93d8ea10322d4b121">Booking.com</option>
                          <option value="5f7b04e93d8ea10322d4b11c">CORRETOR PARCEIRO</option>
                          <option value="5f7b04e93d8ea10322d4b11a">EXPEDIA</option>
                          <option value="5f7b04e93d8ea10322d4b122">Expedia</option>
                          <option value="5f7b04e93d8ea10322d4b119">Facebook</option>
                          <option value="5f7b04e93d8ea10322d4b11d">Google</option>
                          <option value="5f7b04e93d8ea10322d4b11e">Whatsapp</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-30" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-30" aria-autocomplete="list" aria-activedescendant="bs-select-30-0"></div>
                          <div class="inner open" role="listbox" id="bs-select-30" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-30-0" tabindex="0" aria-setsize="13" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Airbnb</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Airbnb</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Aluguetemporada</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Aluguetemporada</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">BOOKING</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Booking.com</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">CORRETOR PARCEIRO</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EXPEDIA</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Expedia</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Facebook</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Google</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-30-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Whatsapp</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--VALUE-->
                  <div class="input-group form-group has-feedback">
                    <span class="input-group-btn curr-group">
                      <div class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="active-curr">BRL</span>
                        <span class="caret"></span></div>
                      <ul role="menu" class="dropdown-menu" name="curr">
                        <li><a role="menuitem" class="js-change-curr" href="#">USD</a></li>
                        <li><a role="menuitem" class="js-change-curr" href="#">EUR</a></li>
                      </ul>
                      <input type="hidden" name="currency" value="BRL">
                    </span>
                    <input class="form-control" type="text" name="curr" value="" data-validate="number" placeholder="Valor">
                  </div>
                </div>
                <div class="form-group">
                  <div data-toggle="collapse" data-target="#add-filter-body" class="btn btn-default pull-left"><i class="fa fa-filter"></i> Adicionar Filtros</div>
                  <button type="submit" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> Atualizar</button>
                </div>
                <input type="hidden" name="filterTexts" value="">
              </form>
              <script>
                requirejs(["views/finance/finance_accounting_filter"], function(finance_accounting_filter) {
                  finance_accounting_filter({
                    filter: {
                      _dtfrom: "2020-11-26T00:00:00.000Z",
                      _dtto: "2020-12-03T23:59:59.999Z",
                      bank: "",
                      resp: "",
                      rel: "all",
                      relSector: ""
                    }
                  });
                }, appError);
              </script>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 187px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 170px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <div class="col-sm-9 scroll well well-sm ps ps--active-y">
            <div class="row">
              <div id="finance-accounting-stats">
                <div class="col-md-4">
                  <div class="panel panel-default panel-default" style="width: 300px;">
                    <div class="panel-heading">
                      <h4 class="pull-left">Débito
                        <small>a ser pago</small>
                      </h4>
                    </div>
                    <div class="panel-body">
                      <table class="table table-hover table-responsive" style="margin: 0;">
                        <tbody>
                          <tr>
                            <td class="text-left">Em Aberto</td>
                            <td class="text-right">R$&nbsp;0,00</td>
                          </tr>
                          <tr>
                            <td class="text-left">Pago</td>
                            <td class="text-right">R$&nbsp;14,28</td>
                          </tr>
                          <tr>
                            <td class="text-left">Total</td>
                            <td class="text-right">R$&nbsp;14,28</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="panel panel-default panel-default accitem-record" style="width: 300px;">
                    <div class="panel-heading">
                      <h4 class="pull-left">Crédito
                        <small>a ser recebido</small>
                      </h4>
                    </div>
                    <div class="panel-body">
                      <table class="table table-hover table-responsive" style="margin: 0;">
                        <tbody>
                          <tr>
                            <td class="text-left">Em Aberto</td>
                            <td class="text-right">R$&nbsp;0,00</td>
                          </tr>
                          <tr>
                            <td class="text-left">Recebido</td>
                            <td class="text-right">R$&nbsp;8.671,40</td>
                          </tr>
                          <tr>
                            <td class="text-left">Total</td>
                            <td class="text-right">R$&nbsp;8.671,40</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default panel-default accitem-record" style="width: 300px;">
                    <div class="panel-heading">
                      <h4 class="pull-left">Total
                        <small>26 nov - 03 dez 2020</small>
                      </h4>
                    </div>
                    <div class="panel-body">
                      <table class="table table-hover table-responsive" style="margin: 0;">
                        <tbody>
                          <tr>
                            <td class="text-left">Em Aberto</td>
                            <td class="text-right">R$&nbsp;0,00</td>
                          </tr>
                          <tr>
                            <td class="text-left">Saldo</td>
                            <td class="text-right">R$&nbsp;8.657,12</td>
                          </tr>
                          <tr>
                            <td class="text-left">Total</td>
                            <td class="text-right">R$&nbsp;8.657,12</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-default accitem-record">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-6">
                    <h4 class="details">
                      Resultados do Filtro <small>26 nov - 03 dez 2020</small>
                    </h4>
                  </div>
                  <div class="col-sm-6 text-right">
                    <form method="post">
                      <a class="btn btn-md btn-default" href="/i/finance/accounting_print" target="_blank">
                        <i class="fa fa-print"></i>
                      </a>
                      <button type="submit" class="btn btn-default">
                        <i class="fa fa-download"></i>
                      </button>
                    </form>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-hover table-responsive accounting-container">
                  <thead class="text-muted">
                    <tr>
                      <th>Data</th>
                      <th>Nome</th>
                      <th>Referência</th>
                      <th>Fornecedor/Hóspede</th>
                      <th>Conta</th>
                      <th class="text-center">Tipo</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Detalhes</th>

                      <th class="text-right">Débito</th>

                      <th class="text-right">Crédito</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fbfa93654ed5a820baee782" data-_idreserve_forward="" data-_idreserve="5fb9e394b54346cd2f23a360">

                      <td>26 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LA10G">LA10G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WELITON AMORIM (64) 99238-8389
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;180,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fbfaf5354ed5a4702aee857" data-_idreserve_forward="" data-_idreserve="5faad8cbc26cc31edb7a784e">

                      <td>26 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/KY04G">KY04G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;225,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fbfc7bc54ed5a22f8aeed86" data-_idreserve_forward="" data-_idreserve="5fb592cc685c0e74a20a578f">

                      <td>26 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/KZ19G">KZ19G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WELITON AMORIM (64) 99238-8389
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;320,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fbf237602d10cecb6dbe458" data-_idreserve_forward="" data-_idreserve="5fbf237002d10ceb9edbe443">

                      <td>26 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LK05G">LK05G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        CARTÃO DE CREDITO
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;352,80</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fbfe5b954ed5a36f6aef260" data-_idreserve_forward="" data-_idreserve="5fbfe4b854ed5a271eaef232">

                      <td>26 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva
                          Res. Downpayment
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LF03G">LF03G</a>
                      </td>
                      <td>
                        chirlene toneli .
                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;300,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fbffd0554ed5a3b97aef5c4" data-_idreserve_forward="" data-_idreserve="5fbfe4b854ed5a271eaef232">

                      <td>26 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva
                          Res. Downpayment
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LF03G">LF03G</a>
                      </td>
                      <td>
                        chirlene toneli .
                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;100,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc14ad7d0b48db19825e2b1" data-_idreserve_forward="" data-_idreserve="5fc1258bd0b48de72225daf9">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG29G">LG29G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;380,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc16dc4d0b48dafe025e900" data-_idreserve_forward="" data-_idreserve="5fb974aeb543463c002391be">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG15G">LG15G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WELITON AMORIM (64) 99238-8389
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;230,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc0ed93d0b48dcd2025d0e5" data-_idreserve_forward="" data-_idreserve="5f286ca7a5368d247e60a3fc">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/GY01G">GY01G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        CARTÃO DE CREDITO
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;182,26</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc1080fd0b48d4c0e25d496" data-_idreserve_forward="" data-_idreserve="5fbd95430bca5e1333a7ba74">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG20G">LG20G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        CARTÃO DE CREDITO
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;454,48</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fb296c28b4e525e9c60fb8d" data-_idreserve_forward="" data-_idreserve="5fb296c28b4e5278b460fb8a">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>
                          res. fee API airbnb
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LB07G">LB07G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        Virtual bank
                      </td>
                      <td class="text-center">
                        <span class="label label-default">Taxa OTA</span>

                      </td>
                      <td class="text-center">

                        <span class="label label-success">Pago</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right">R$&nbsp;14,28</td>

                      <td class="text-right"></td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fb296c28b4e52831d60fb8f" data-_idreserve_forward="" data-_idreserve="5fb296c28b4e5278b460fb8a">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>
                          res. fee API airbnb
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LB07G">LB07G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        Virtual bank
                      </td>
                      <td class="text-center">
                        <span class="label label-default">Taxa OTA</span>

                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;14,28</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fb296c28b4e52f7ea60fb91" data-_idreserve_forward="" data-_idreserve="5fb296c28b4e5278b460fb8a">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LB07G">LB07G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        Virtual bank
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;461,72</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc1486fd0b48d42bf25e253" data-_idreserve_forward="" data-_idreserve="5fc13c1fd0b48d095725dfe3">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva
                          Res. Downpayment
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG30G">LG30G</a>
                      </td>
                      <td>
                        Vanessa Pereira Da Silva ,,
                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;390,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc114a5d0b48d380725d69e" data-_idreserve_forward="" data-_idreserve="5f8f0c9af965230e4f1a66ff">

                      <td>27 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG04G">LG04G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        PAGAR.ME BOLETOS
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;187,50</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc25114d0b48d20452612dc" data-_idreserve_forward="" data-_idreserve="5fbba71ed020a5db624ece56">

                      <td>28 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LH05G">LH05G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;220,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc24109d0b48d2855261061" data-_idreserve_forward="" data-_idreserve="5f7efcc450a55a2d2b80bb8b">

                      <td>28 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva
                          Res. Downpayment
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG03G">LG03G</a>
                      </td>
                      <td>
                        Alice Dos Santos Alves
                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;278,40</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc24fc2d0b48df6ac26129c" data-_idreserve_forward="" data-_idreserve="5fbff7d254ed5a3dc2aef51e">

                      <td>28 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva
                          Res. Downpayment
                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LH07G">LH07G</a>
                      </td>
                      <td>
                        Carlos Henrique Gonçalves ,,
                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;220,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc4fbcc21c3daacb9026d9b" data-_idreserve_forward="" data-_idreserve="5fc13193d0b48d6dac25ddd2">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LI02G">LI02G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;170,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc5433721c3da7b3d027b91" data-_idreserve_forward="" data-_idreserve="5fbd293a0bca5e4785a7a1f7">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LJ03G">LJ03G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;300,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc5435421c3da2328027b96" data-_idreserve_forward="" data-_idreserve="5fbd2ae10bca5ee73aa7a284">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LJ04G">LJ04G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;300,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc5437e21c3da0a35027ba1" data-_idreserve_forward="" data-_idreserve="5fbd2b1c0bca5e3e19a7a2b3">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LJ05G">LJ05G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;300,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc5443921c3da4359027bb9" data-_idreserve_forward="" data-_idreserve="5fb192851bc8ebcd18cffecc">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LJ02G">LJ02G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;304,60</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc62eb221c3da27d002a325" data-_idreserve_forward="" data-_idreserve="5fbfac2f54ed5a0d34aee7ea">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG27G">LG27G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WELITON AMORIM (64) 99238-8389
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;700,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc799094a670f47badc0893" data-_idreserve_forward="" data-_idreserve="5fb9015fb543467f81237cb9">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LA07G">LA07G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        Cleyton Mendonça (64) 99228-4668
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;200,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc4e8ca21c3dae3fa026a05" data-_idreserve_forward="" data-_idreserve="5fa41753e3b492c7976d8ab2">

                      <td>30 nov 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LJ01G">LJ01G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        CARTÃO DE CREDITO
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;461,28</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc62dab21c3da9f0802a302" data-_idreserve_forward="" data-_idreserve="5fb5190b810eac733fccdccf">

                      <td>01 dez 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LG11G">LG11G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WELITON AMORIM (64) 99238-8389
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;240,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc656e2fa5a0a42fed61203" data-_idreserve_forward="" data-_idreserve="5fc656c1fa5a0acf5fd611f5">

                      <td>01 dez 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/KT06G">KT06G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;250,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc65ca2fa5a0a7dc1d6137b" data-_idreserve_forward="" data-_idreserve="5fb526d7685c0e76ce0a47f2">

                      <td>01 dez 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/KZ16G">KZ16G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        WILTON (64) 99242-1617
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;380,00</td>
                    </tr>
                    <tr class="ledger-found-item parentPay accitem-record" data-_id="5fc8d8ef8f1f0b3dfbd17621" data-_idreserve_forward="" data-_idreserve="5fbadc77b543463e3723cd24">

                      <td>03 dez 2020</td>
                      <td style="max-width:150px">


                        <p>

                          pagamento da reserva

                        </p>
                      </td>
                      <td style="max-width:150px">
                        <a href="/i/reservation/LM01G">LM01G</a>
                      </td>
                      <td>

                      </td>
                      <td>
                        CARTÃO DE CREDITO
                      </td>
                      <td class="text-center">


                        <span class="label label-default">Reserva</span>
                      </td>
                      <td class="text-center">

                        <span class="label label-success">Recebido</span>
                      </td>
                      <td class="text-center">
                        <a class="details-info" href="#">
                          detalhes
                        </a>
                      </td>

                      <td class="text-right"></td>

                      <td class="text-right">R$&nbsp;569,08</td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>

                      <th class="text-right"></th>

                      <th class="text-right"></th>
                    </tr>
                  </tfoot>
                </table>
                <div class="text-center">
                  <div class="btn btn-default hidden" id="load-more">
                    Carregar mais 100
                  </div>
                </div>
              </div>
            </div>
            <script>
              requirejs(["views/finance_accounting_content"], function(finance_accounting_content) {
                finance_accounting_content({
                  template: "finance/finance_accounting_item",
                  templateStats: "finance/finance_accounting_totals"
                });
              }, appError);
            </script>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 561px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 401px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px; height: 1035px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 593px;"></div>
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