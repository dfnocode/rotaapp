<!DOCTYPE html>
<html>
<?php
$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
//include_once($path);

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

          <div class="col-sm-3 padding-top-20 form-fixed">

            <!-- form-filters classe NOVA PARA FIXAR O FORMULARIO -->
            <div class="panel-body">
              <p class="lead text-center text-muted">
                <strong>
                  Calendários das Acomodações
                </strong>
                <br>
                visualização geral das disponibilidades
                <br>
              </p>
              <hr>
              <form id="filterform" class="ajax_form" novalidate="true" role="form">

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-map"></i>
                    </span>
                    <div class="dropdown bootstrap-select show-tick input-group-btn form-control bs3 bs3-has-addon"><select class="selectpicker form-control" name="_idregion" data-live-search="0" title="Região tarifária">
                        <option class="bs-title-option" value=""></option>
                        <option value="all" selected="">Todas as Regiões</option>
                        <option value="">Global</option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-19" aria-haspopup="listbox" aria-expanded="false" title="Todas as Regiões">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Todas as Regiões</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                        <div class="filter-expand">Todas as Regiões</div>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="inner open" role="listbox" id="bs-select-19" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="input-daterange row" data-validate="daterange">
                  <div class="col-lg-6 form-group has-feedback has-success">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input class="from form-control date" type="text" placeholder="De" autocomplete="off">
                      <input type="hidden" name="from">
                    </div>
                  </div>
                  <div class="col-lg-6 form-group has-feedback has-success">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <input class="to form-control date" type="text" placeholder="Até" autocomplete="off">
                      <input type="hidden" name="to">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tipos</label>
                  <div class="dropdown bootstrap-select show-tick form-control type bs3"><select class="selectpicker form-control type" name="type[]" data-live-search="0" multiple="">
                      <option value="reserved" data-content="<span class='label label-default' style='background-color: rgba(250,250,38,0.56); color: black;'>pré reserva</span>" selected="">Pré Reserva</option>
                      <option value="booked" data-content="<span class='label label-default' style='background-color: rgba(12, 107, 144, 0.55);'>reserva</span>" selected="">Reserva</option>
                      <option value="contract" data-content="<span class='label label-default' style='background-color: rgba(12, 107, 144, 0.55);'>contrato</span>" selected="">Contrato</option>
                      <option value="blocked" data-content="<span class='label label-default' style='background-color: rgba(250, 78, 38, 0.56);'>bloqueado</span>" selected="">Bloqueado</option>
                      <option value="maintenance" data-content="<span class='label label-default' style='background-color: rgba(128,173,21,0.7);'>Manutenção</span>" selected="">Manutenção</option>
                      <option value="canceled" data-content="<span class='label label-default' style='background-color: #aaa;'>cancelada</span>">Cancelada</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-20" aria-haspopup="listbox" aria-expanded="false" title="pré reserva reserva contrato bloqueado Manutenção">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-default" style="background-color: rgba(250,250,38,0.56); color: black;">pré reserva</span> <span class="label label-default" style="background-color: rgba(12, 107, 144, 0.55);">reserva</span> <span class="label label-default" style="background-color: rgba(12, 107, 144, 0.55);">contrato</span> <span class="label label-default" style="background-color: rgba(250, 78, 38, 0.56);">bloqueado</span> <span class="label label-default" style="background-color: rgba(128,173,21,0.7);">Manutenção</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-20" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <label class="control-label">Preços por Canal de Venda</label>
                  <div class="dropdown bootstrap-select show-tick form-control channel bs3"><select class="form-control selectpicker channel" name="channel">
                      <option value="">Não Selecionado</option>
                      <option value="website">Site</option>
                      <option value="Bookingcom">Bookingcom</option>
                      <option value="Expedia">Expedia</option>
                      <option value="AirBnB">AirBnB</option>
                      <option value="HomeAway">HomeAway</option>
                      <option value="Decolar">Decolar</option>
                      <option value="Temporadalivre">Temporadalivre</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-21" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner">Não Selecionado</div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-21" aria-autocomplete="list"></div>
                      <div class="inner open" role="listbox" id="bs-select-21" tabindex="-1">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <div data-toggle="collapse" data-target="#add-filter-body" class="btn btn-default pull-left"><i class="fa fa-filter"></i> Adicionar Filtros</div>
                  <button type="submit" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> Atualizar</button>
                </div>

                <div class="collapse " id="add-filter-body">
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control bs3 bs3-has-addon"><select class="selectpicker form-control" name="_idapartment[]" data-apartmentid="[]" title="Propriedade" multiple="">
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-22" aria-haspopup="listbox" aria-expanded="false" title="Propriedade">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Propriedade</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Propriedade</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 888px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-22" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-22" tabindex="-1" aria-multiselectable="true" style="max-height: 838px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="dropdown-header optgroup-1"><span class="text">Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas</span></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-22-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KA02G | PIAZZA</span></span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-2"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, GO</span></li>
                              <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-22-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KA04G | RIVIERA PARK</span></span></a></li>
                              <li class="divider optgroup-2div"></li>
                              <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH39E | LACQUA POOL-2</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HH01F | LACQUA POOL-5</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NS01F | LACQUA POOL</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QM02F | LACQUA POOL-3</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NH04F | LACQUA POOL-4</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH14E | LD1 201</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-13" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PI01E | LD1 57</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ZP04F | LD1 -222</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">GU01G | LD1 - 068</span></span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-22-16" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QZ01F | LD1 51</span></span></a></li>
                              <li class="divider optgroup-3div"></li>
                              <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goias, Caldas Novas, J Jeriquara</span></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-22-19" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">DX01F | AF 704 B</span></span></a></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-22-20" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PL01E | AF1003C</span></span></a></li>
                              <li class="divider optgroup-4div"></li>
                              <li class="dropdown-header optgroup-5"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-22-23" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">XZ02F | RI 06</span></span></a></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-22-24" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EY03F | RI 313</span></span></a></li>
                              <li class="divider optgroup-5div"></li>
                              <li class="dropdown-header optgroup-6"><span class="text">Brasil, GO, CALDAS NOVAS, Turista II</span></li>
                              <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-22-27" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">JJ01G | sol das calldas poll</span></span></a></li>
                              <li class="divider optgroup-6div"></li>
                              <li class="dropdown-header optgroup-7"><span class="text">Brasil, Goiás, CALDAS NOVAS, Bandeirantes</span></li>
                              <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-22-30" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">FZ02G | ECOL. G-605 SUITE</span></span></a></li>
                              <li class="divider optgroup-7div"></li>
                              <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-22-33" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">OA01F | GD - 416</span></span></a></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-22-34" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NM02F | GD 526</span></span></a></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-22-35" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">AY01G | FLAT 953</span></span></a></li>
                              <li class="divider optgroup-8div"></li>
                              <li class="dropdown-header optgroup-9"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                              <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-22-38" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QS03E | HS 746</span></span></a></li>
                              <li class="divider optgroup-9div"></li>
                              <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-22-41" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VU02E | LQ 509 C</span></span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-22-42" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">JH01G | LQ 402 B</span></span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-22-43" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NH01F | LQ 406 B</span></span></a></li>
                              <li class="divider optgroup-10div"></li>
                              <li class="dropdown-header optgroup-11"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-22-46" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HF01F | LD5 76</span></span></a></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-22-47" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">FZ01G | LD2 - 152</span></span></a></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-22-48" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">IF01G | LD2 - 194</span></span></a></li>
                              <li class="divider optgroup-11div"></li>
                              <li class="dropdown-header optgroup-12"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-22-51" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KS08G | DRE 507</span></span></a></li>
                              <li class="divider optgroup-12div"></li>
                              <li class="dropdown-header optgroup-13"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-22-54" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EI01F | EV 106</span></span></a></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-22-55" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HK01F | AS 805 C</span></span></a></li>
                              <li class="divider optgroup-13div"></li>
                              <li class="dropdown-header optgroup-14"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-22-58" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">HH02F | LD4-209</span></span></a></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-22-59" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KS02G | LD4 - 119</span></span></a></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-22-60" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TY02F | LD 322/324</span></span></a></li>
                              <li class="divider optgroup-14div"></li>
                              <li class="dropdown-header optgroup-15"><span class="text">Brasil, Goiás, Caldas Novas, Bandeirantes</span></li>
                              <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-22-63" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">WP02F | ECOL. G-605 FLAT</span></span></a></li>
                              <li class="divider optgroup-15div"></li>
                              <li class="dropdown-header optgroup-16"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                              <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-22-66" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TT02F | VR - 402 A</span></span></a></li>
                              <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-22-67" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TT03F | VR - 707 A</span></span></a></li>
                              <li class="divider optgroup-16div"></li>
                              <li class="dropdown-header optgroup-17"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                              <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-22-70" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ZP02F | VT - 101 A</span></span></a></li>
                              <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-22-71" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KL02G | VT 305 B</span></span></a></li>
                              <li class="divider optgroup-17div"></li>
                              <li class="dropdown-header optgroup-18"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                              <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-22-74" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VO02F | Millennium Thermas Residence 602 A</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-user"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control landlord bs3 bs3-has-addon"><select class="form-control landlord selectpicker" name="landlord" title="Proprietário">
                          <option class="bs-title-option" value=""></option>
                          <option class="bs-title-option" value=""></option>
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-23" aria-haspopup="listbox" aria-expanded="false" title="Proprietário">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Proprietário</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Proprietário</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 888px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-23" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-23" tabindex="-1" style="max-height: 838px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item bs-title-option" id="bs-select-23-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Cleyton Mendonça</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARTINHO APARECIDO GALLO</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EBENEZER FARIA ALVES</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JOÃO PEGORARO</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">LUIZ TAMIYO NAGATA</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">THIAGO NEVES GOMES DAMACENO</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VERÔNICA VILAUBA NOGUEIRA DUTRA</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA DA CONCEIÇÃO CALDAS</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Normando Munhoz</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA SALETE ARAUJO FERREIRA .</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PAULO JANDER DE SOUSA</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">José Carlos Miranda Torrejais .</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Fernando de Carvalho sobrinho .</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA BARBOSA DE MENEZES</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Wilton Silva Neto</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SIDNEI ROBERTO DE CARVALHO SILVA</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-18" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">admin</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-19" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Jose Nildo Ferreira De Siqueira</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-23-20" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SUELEN CARVALHO DA SILVA</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-building"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control bs3 bs3-has-addon"><select class="selectpicker form-control" name="buildings[]" title="Prédios" data-buildingid="[]" multiple="">
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-24" aria-haspopup="listbox" aria-expanded="false" title="Prédios">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Prédios</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Prédios</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 888px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-24" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-24" tabindex="-1" aria-multiselectable="true" style="max-height: 838px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="dropdown-header optgroup-1"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-24-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH03E | Residencial Águas da Serra</span></span></a></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-24-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">CY02F | Everst Flat Service</span></span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-2"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-24-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PH08E | LACQUA - I</span></span></a></li>
                              <li class="divider optgroup-2div"></li>
                              <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-24-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">QO01E | Hot Springs</span></span></a></li>
                              <li class="divider optgroup-3div"></li>
                              <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-24-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">RE01E | Vitória das Thermas</span></span></a></li>
                              <li class="divider optgroup-4div"></li>
                              <li class="dropdown-header optgroup-5"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-24-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">RF01E | LACQUA - V</span></span></a></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-24-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">RK01E | LACQUA - II</span></span></a></li>
                              <li class="divider optgroup-5div"></li>
                              <li class="dropdown-header optgroup-6"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                              <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-24-18" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VU01E | Lagoa Quente Flat Service</span></span></a></li>
                              <li class="divider optgroup-6div"></li>
                              <li class="dropdown-header optgroup-7"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-24-21" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">EY02F | Di Roma Internacional Resort</span></span></a></li>
                              <li class="divider optgroup-7div"></li>
                              <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-24-24" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">NK02F | Golden Dolphin Grand Hotel</span></span></a></li>
                              <li class="divider optgroup-8div"></li>
                              <li class="dropdown-header optgroup-9"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                              <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-24-27" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">PE03F | Condomínio Millennium Thermas Residence</span></span></a></li>
                              <li class="divider optgroup-9div"></li>
                              <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-24-30" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">SY01F | DI ROMA FIORE</span></span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-24-31" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">IN01G | LACQUA - IV</span></span></a></li>
                              <li class="divider optgroup-10div"></li>
                              <li class="dropdown-header optgroup-11"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-24-34" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">TT01F | Villas Di Roma</span></span></a></li>
                              <li class="divider optgroup-11div"></li>
                              <li class="dropdown-header optgroup-12"><span class="text"></span></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-24-37" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KA06G | RIVIERA PARK - FLAT SERVICE</span></span></a></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-24-38" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KL01G | VT 305 B</span></span></a></li>
                              <li class="divider optgroup-12div"></li>
                              <li class="dropdown-header optgroup-13"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-24-41" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">KS05G | DIROMA EXCLUSIVE</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-group"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control bs3 bs3-has-addon"><select class="selectpicker form-control" name="priceGroups[]" data-pricegroupid="[]" title="Grupos Tarifários Verticais" multiple="">
                          <option value="595991fbe9dd6f0001d126f2" data-_idbuilding="59598da0f771730001852885" data-content="<span class='label label-default'>ÁGUAS DAS FONTES</span>" data-subtext="AF1003C">ÁGUAS DAS FONTES</option>
                          <option value="595545ac5ad044000193a3d4" data-_idbuilding="5955309e5ad044000193a2d1" data-content="<span class='label label-default'>ÁGUAS DA SERRA</span>" data-subtext="AS - P P">ÁGUAS DA SERRA</option>
                          <option value="5a341abb155a0a0010352554" data-_idbuilding="5a3416f4a01b650010902f53" data-content="<span class='label label-default'>LAGOA QUENTE FLAT SERVICE</span>" data-subtext="LQ 509 C">LAGOA QUENTE FLAT SERVICE</option>
                          <option value="5955703a680f7b0001900ee9" data-_idbuilding="595553a9680f7b0001900d9d" data-content="<span class='label label-default'>LACQUA DI ROMA</span>" data-subtext="LD1 201">LACQUA DI ROMA</option>
                          <option value="5d6992acf04d200010e797c4" data-_idbuilding="5d699160f04d200010e797a8" data-content="<span class='label label-default'>VILLAS DI ROMA</span>" data-subtext="VR - 402 A">VILLAS DI ROMA</option>
                          <option value="5e31cb31e20ba5001039b58e" data-_idbuilding="5995a202852113000f1bd3c2" data-content="<span class='label label-default'>VITORIA DAS THERMAS</span>" data-subtext="VT - 101 A">VITORIA DAS THERMAS</option>
                          <option value="5c928ce211767a00103532d9" data-_idbuilding="5c8fb683d9d09f00107c2f62" data-content="<span class='label label-default'>GOLDEN</span>" data-subtext="GD 526">GOLDEN</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-25" aria-haspopup="listbox" aria-expanded="false" title="Grupos Tarifários Verticais">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Grupos Tarifários Verticais</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Grupos Tarifários Verticais</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 888px; overflow: hidden; min-height: 127px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-25" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-25" tabindex="-1" aria-multiselectable="true" style="max-height: 838px; overflow-y: auto; min-height: 77px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-25-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ÁGUAS DAS FONTES</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-25-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">ÁGUAS DA SERRA</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-25-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">LAGOA QUENTE FLAT SERVICE</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-25-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">LACQUA DI ROMA</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-25-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VILLAS DI ROMA</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-25-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">VITORIA DAS THERMAS</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-25-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">GOLDEN</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-object-group"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control bs3 bs3-has-addon"><select class="selectpicker form-control" name="groups[]" title="Grupos" data-groupid="[]" multiple="">
                          <option value="59668a9c95726a000129d34a" data-content="<span class='label label-default'>Lacqua Di Roma</span>">Lacqua Di Roma</option>
                          <option value="5980e86f99dda30010533e47" data-content="<span class='label label-default'>Águas da Serra</span>">Águas da Serra</option>
                          <option value="5e3d67a877bfc800106de483" data-content="<span class='label label-default'>LACQUA DI ROMA DUPLO</span>">LACQUA DI ROMA DUPLO</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-26" aria-haspopup="listbox" aria-expanded="false" title="Grupos">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Grupos</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Grupos</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 888px; overflow: hidden; min-height: 38px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-26" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-26" tabindex="-1" aria-multiselectable="true" style="max-height: 838px; overflow-y: auto; min-height: 0px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-26-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Lacqua Di Roma</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Águas da Serra</span></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-26-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">LACQUA DI ROMA DUPLO</span></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Quartos</label>
                    <div class="dropdown bootstrap-select show-tick form-control rooms bs3"><select name="rooms" class="selectpicker form-control rooms" data-live-search="0">
                        <option value="" class="text-muted">Não Selecionado</option>
                        <option value="0">
                          Estúdio
                        </option>
                        <option value="1">
                          1 Quarto
                        </option>
                        <option value="2">
                          2 Quartos
                        </option>
                        <option value="3">
                          3 Quartos
                        </option>
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-27" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Não Selecionado</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                      </button>
                      <div class="dropdown-menu open">
                        <div class="inner open" role="listbox" id="bs-select-27" tabindex="-1">
                          <ul class="dropdown-menu inner " role="presentation"></ul>
                        </div>
                      </div>
                    </div>
                  </div>



                  <hr>
                  <ul class="nav nav-pills nav-stacked">
                    <li class="customCheckbox active" data-name="daily" data-value="">
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
                    <li class="customCheckbox" data-name="daily" data-value="yes">
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
                    <li class="customCheckbox" data-name="daily" data-value="no">
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
                    <li class="customCheckbox active" data-name="exclusive" data-value="">
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
                    <li class="customCheckbox" data-name="exclusive" data-value="yes">
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
                    <li class="customCheckbox" data-name="exclusive" data-value="no">
                      <a>
                        <label role="button" style="width: 100%">
                          <input type="radio" name="exclusive" value="no">
                          em Parceria
                          <i class="fa pull-right fa-circle-o" style="font-size: 1.5em;"></i>
                        </label>
                      </a>
                    </li>
                  </ul>
                </div>
              </form>
            </div>
          </div>
          <!-- 
              
            
            TELA DE RESULTADOS
            
            -->
          <div class="col-md-9 native-scroll well well-sm" style="padding-bottom: 0px;">
            <div class="panel multicalendar-container">
              <div class="panel-body">


                <div class="calendar fc fc-ltr fc-unthemed" style="margin-top: 10px; position: static; zoom: 1;">
                  <div class="fc-toolbar fc-header-toolbar">
                    <div class="fc-left"></div>
                    <div class="fc-center"></div>
                    <div class="fc-right"></div>
                  </div>
                  <div class="fc-view-container">
                    <div class="fc-view fc-resourceTimelineMonth-view fc-timeline">
                      <table class="">
                        <thead class="fc-head">
                          <tr>
                            <td class="fc-resource-area fc-widget-header" style="width: 170px;">
                              <div class="fc-scroller-clip">
                                <div class="fc-scroller" style="overflow: scroll hidden; margin: 0px 0px -6px;">
                                  <div class="fc-scroller-canvas">
                                    <div class="fc-content">
                                      <table class="" style="height: 69px;">
                                        <colgroup>
                                          <col class="fc-main-col">
                                        </colgroup>
                                        <tbody>
                                          <tr>
                                            <th class="fc-widget-header">
                                              <div>
                                                <div class="btn-group">
                                                  <div class="btn btn-default visible-xs"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                                                  <div class="btn btn-default"><i class="fa fa-arrows visible-xs-inline" aria-hidden="true"></i><span class="hidden-xs">tela cheia</span></div>
                                                </div>
                                              </div>
                                            </th>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bg"></div>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="fc-divider fc-col-resizer fc-widget-header"></td>
                            <td class="fc-time-area fc-widget-header">
                              <div class="fc-scroller-clip">
                                <div class="fc-scroller" style="overflow: scroll hidden; margin: 0px 0px -6px;">
                                  <div class="fc-scroller-canvas fc-gutter-right" style="width: 0px; min-width: 1195px; padding-right: 6px;">
                                    <div class="fc-content">
                                      <table class="" style="height: 69px;">
                                        <colgroup>
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col style="width: 62px;">
                                          <col>
                                        </colgroup>
                                        <tbody>
                                          <tr>
                                            <th class="fc-widget-header fc-wed fc-past" data-date="2020-12-02" colspan="19">
                                              <div class="fc-cell-content" style="text-align: left;"><span class="fc-cell-text fc-sticky" data-sticky-center="" style="position: sticky; left: 543.141px; right: 0px; top: 0px;">dezembro de 2020</span></div>
                                            </th>
                                          </tr>
                                          <tr>
                                            <th class="fc-widget-header fc-wed fc-past" data-date="2020-12-02">
                                              <div class="fc-cell-content"><span class="fc-cell-text">02</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-thu fc-today" data-date="2020-12-03">
                                              <div class="fc-cell-content"><span class="fc-cell-text">03</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-fri fc-future" data-date="2020-12-04">
                                              <div class="fc-cell-content"><span class="fc-cell-text">04</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-sat fc-future" data-date="2020-12-05">
                                              <div class="fc-cell-content"><span class="fc-cell-text">05</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-sun fc-future" data-date="2020-12-06">
                                              <div class="fc-cell-content"><span class="fc-cell-text">06</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-mon fc-future" data-date="2020-12-07">
                                              <div class="fc-cell-content"><span class="fc-cell-text">07</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-tue fc-future" data-date="2020-12-08">
                                              <div class="fc-cell-content"><span class="fc-cell-text">08</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-wed fc-future" data-date="2020-12-09">
                                              <div class="fc-cell-content"><span class="fc-cell-text">09</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-thu fc-future" data-date="2020-12-10">
                                              <div class="fc-cell-content"><span class="fc-cell-text">10</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-fri fc-future" data-date="2020-12-11">
                                              <div class="fc-cell-content"><span class="fc-cell-text">11</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-sat fc-future" data-date="2020-12-12">
                                              <div class="fc-cell-content"><span class="fc-cell-text">12</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-sun fc-future" data-date="2020-12-13">
                                              <div class="fc-cell-content"><span class="fc-cell-text">13</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-mon fc-future" data-date="2020-12-14">
                                              <div class="fc-cell-content"><span class="fc-cell-text">14</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-tue fc-future" data-date="2020-12-15">
                                              <div class="fc-cell-content"><span class="fc-cell-text">15</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-wed fc-future" data-date="2020-12-16">
                                              <div class="fc-cell-content"><span class="fc-cell-text">16</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-thu fc-future" data-date="2020-12-17">
                                              <div class="fc-cell-content"><span class="fc-cell-text">17</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-fri fc-future" data-date="2020-12-18">
                                              <div class="fc-cell-content"><span class="fc-cell-text">18</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-sat fc-future" data-date="2020-12-19">
                                              <div class="fc-cell-content"><span class="fc-cell-text">19</span></div>
                                            </th>
                                            <th class="fc-widget-header fc-sun fc-future" data-date="2020-12-20">
                                              <div class="fc-cell-content"><span class="fc-cell-text">20</span></div>
                                            </th>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="fc-bg" style="right: 6px;"></div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </thead>
                        <tbody class="fc-body">
                          <tr>
                            <td class="fc-resource-area fc-widget-content">
                              <div class="fc-scroller-clip">
                                <div class="fc-scroller" style="overflow: auto scroll; height: 749px; margin: 0px -6px 0px 0px;">
                                  <div class="fc-scroller-canvas">
                                    <div class="fc-content">
                                      <div class="fc-rows">
                                        <table>
                                          <colgroup>
                                            <col class="fc-main-col">
                                          </colgroup>
                                          <tbody>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Águas das Fontes</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="595991fbe9dd6f0001d126f2">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/PL01E/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5aeb1e6b83ef170010d82883" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">AF1003C (ÁGUAS DAS FONTES)</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5b4a25115ee3bb0010d4322f">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/DX01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5b7ee8dcf3d6800011b74a5a" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">AF 704 B</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Residencial Águas da Serra</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bc235066cf88a0014b6dab2">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/HK01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5bc2411231da220012e6f03d" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">AS 805 C</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">DIROMA EXCLUSIVE</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5faede4d1bc8ebfa83cf93fc">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/KS08G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5faee0221bc8eb309dcf9464" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">DRE 507</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Everst Flat Service</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5b5892fcbf5c180011fef0f5">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/EI01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5b7f27bc81fd5c0011051199" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">EV 106</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Golden Dolphin Grand Hotel</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5e5fb4628825220010fdf68d">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/AY01G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5d27a7aa9f1f6a001004695a" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">FLAT 953</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c928ce211767a00103532d9">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/NM02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5c929a9011767a0010353756" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">GD 526 (GOLDEN)</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5ca4941433089c0010bbb02d">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/OA01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5ca4a4db5abfa7001079c907" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">GD - 416</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Hot Springs</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5985f699f1ae1b000f38a779">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/QS03E/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5985f91cf1ae1b000f38a808" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">HS 746</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">LACQUA - I</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5955703a680f7b0001900ee9">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/PH14E/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/595572e95ad044000193a596" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD1 201 (LACQUA DI ROMA)</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c9a8481b6ab50001070d8fa">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/NS01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5c9a9c6db6ab50001070dc19" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LACQUA POOL</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5980df9599dda30010533de6">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/PH39E/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5b7f29f49cd6a40011f5be29" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LACQUA POOL-2</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5cf925a2fcd3f7001086d355">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/QM02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5cf92b4075bdbe00102c78f5" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LACQUA POOL-3</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c8c0975caf8d10010410737">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/NH04F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/599731e3c11ce4000fe37f9b" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LACQUA POOL-4</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bbe3bee0e1fee0012d3fe4b">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/HH01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/599dd09fe048d6000fcc2cf1" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LACQUA POOL-5</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f284363a5368d2a37609e06">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/GU01G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/595554125ad044000193a45d" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LD1 - 068</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5e31f003d6c66a0010e3e6a2">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/ZP04F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5e32d8db75859e0010ed83c9" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LD1 -222</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d0a9824560ff900106dd897">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/QZ01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5d0a9be4560ff900106dd9a8" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LD1 51</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="595651b5680f7b00019011fc">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/PI01E/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5955540f680f7b0001900da1" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LD1 57</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">LACQUA - IV</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d6fc17272c0fa00106f8f04">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/TY02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5d6fc5ab7cbe09001010bdff" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD 322/324</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5fae96701bc8eb568bcf835b">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/KS02G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5fae995b1bc8eb1948cf84b4" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD4 - 119</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bbe3e62c2c4100012e1af14">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/HH02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/599dd09fe048d6000fcc2cf3" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD4-209</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">LACQUA - II</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f0cbce1c55ce937205d73bc">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/FZ01G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f0cc5a7c55ce9385f5d7571" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD2 - 152</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f591bb07237cd6a4e00c35a">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/IF01G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f5941cf7237cd17aa00cd35" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD2 - 194</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">LACQUA - V</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bbb92f7c476330012a8530c">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/HF01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/599731e3c11ce4000fe37f9a" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LD5 76</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Lagoa Quente Flat Service</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f7da787ba076ecdd0a87412">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/JH01G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f7daacfba076e69ada874bf" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LQ 402 B</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5a341abb155a0a0010352554">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/VU02E/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5b7f1d3a9cd6a40011f5bbd9" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">LQ 509 C (LAGOA QUENTE FLAT SERVICE)</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c8be31cf4dffd00104c7ff4">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/NH01F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5a3419d9a01b650010902fd7" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">LQ 406 B</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Condomínio Millennium Thermas Residence</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5da71d71053de70010c247ed">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/VO02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5da71ff8b162d0001019b211" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">Millennium Thermas Residence 602 A</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">PIZZA DI ROMA</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f96fe367dcaf7b6f2a879ea">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/KA02G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f984d1b85c4d0f747ec807f" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">PIAZZA</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Di Roma Internacional Resort</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5dfa190c1725da0010cf94a8">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/XZ02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5dfa1da2c872f300102357e1" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">RI 06</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5b6e14c2ff666d00111e88fa">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/EY03F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5b81d81b8bbf540011ff819b" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">RI 313</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Villas Di Roma</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d6992acf04d200010e797c4">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/TT02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5d6996bbf04d200010e79852" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">VR - 402 A (VILLAS DI ROMA)</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d699bc7f04d200010e7990c">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/TT03F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5d6a6a99f04d200010e7a9a0" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">VR - 707 A</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Vitória das Thermas</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5e31cb31e20ba5001039b58e">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/ZP02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5e31ce94d6c66a0010e3e2c7" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">VT - 101 A (VITORIA DAS THERMAS)</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5fa582b7f0ef980068aca76d">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/KL02G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5b7f455581fd5c0011051780" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space"><span class="fc-icon"></span></span><span class="fc-cell-text">VT 305 B</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider" colspan="1">
                                                <div style="height: 37px;">
                                                  <div class="fc-cell-content"><span class="fc-expander"><span class="fc-icon fc-icon-minus-square"></span></span><span class="fc-cell-text">Unidades individuais</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5dcb11e97ab9c60010e22305">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 39px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/WP02F/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5dcb13a67ab9c60010e2233d" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">ECOL. G-605 FLAT</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f0ccb69c55ce972ce5d767b">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/FZ02G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f9442b0cec18f006f30b90f" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">ECOL. G-605 SUITE</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f970a857dcaf763e1a87cb2">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/KA04G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f970d737dcaf7184ea87d30" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">RIVIERA PARK</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f80646e6e7d788c66611325">
                                              <td class="fc-widget-content" rowspan="1">
                                                <div style="height: 38px;">
                                                  <div class="fc-cell-content"><a target="_blank" class="hidden-xs" href="https://www.jctemporada.com.br/i/apartment/JJ01G/calendar"><img loading="lazy" width="51" height="34" src="./Calendários_files/5f806af36e7d78060d611483" style="margin: -6px 0px -6px -4px; height: 34px;"></a><span class="fc-icon"></span><span class="fc-expander-space fc-expander"><span class="fc-icon fc-icon-plus-square"></span></span><span class="fc-cell-text">sol das calldas poll</span></div>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="fc-bg"></div>
                                  </div>
                                </div>
                              </div>
                            </td>
                            <td class="fc-divider fc-col-resizer fc-widget-header"></td>
                            <td class="fc-time-area fc-widget-content">
                              <div class="fc-scroller-clip">
                                <div class="fc-scroller" style="overflow: auto; height: 749px; margin: 0px;">
                                  <div class="fc-scroller-canvas" style="width: 0px; min-width: 1189px;">
                                    <div class="fc-content">
                                      <div class="fc-rows">
                                        <table>
                                          <tbody>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="595991fbe9dd6f0001d126f2">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5b4a25115ee3bb0010d4322f">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bc235066cf88a0014b6dab2">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN12G - rayssa gabrielle de castro roque . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN12G - rayssa gabrielle de castro roque . (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 620px; right: -744px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LV01G - Michelle Pricila de Souza . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LV01G - Michelle Pricila de Souza . (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5faede4d1bc8ebfa83cf93fc">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5b5892fcbf5c180011fef0f5">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 62px; right: -186px; top: 0px; margin-left: 32px; margin-right: -30px;" title="GY01G - Priscila Oliveira (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">GY01G - Priscila Oliveira (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-blocked btn-pointer" style="background-color: rgba(250, 78, 38, 0.56); left: 310px; right: -558px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LQ07G - bloqueado"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LQ07G - bloqueado</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-not-end event-blocked btn-pointer" style="background-color: rgba(250, 78, 38, 0.56); left: 992px; right: -1188px; top: 0px; margin-left: 32px;" title="MB01G - bloqueado"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB01G - bloqueado</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5e5fb4628825220010fdf68d">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c928ce211767a00103532d9">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5ca4941433089c0010bbb02d">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5985f699f1ae1b000f38a779">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -124px; top: 0px; margin-right: -30px;" title="LJ01G - Tito de Oliveira Braz (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LJ01G - Tito de Oliveira Braz (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 310px; right: -496px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LQ01G - Harley Alves de Alcantara (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LQ01G - Harley Alves de Alcantara (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 620px; right: -806px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LV03G - Erilane Pereira das Chagas Teixeira (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LV03G - Erilane Pereira das Chagas Teixeira (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5955703a680f7b0001900ee9">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-contract btn-pointer" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -62px; top: 0px; margin-right: -30px;" title="LK04G - Claudivan Januário da Silva . (contrato)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LK04G - Claudivan Januário da Silva . (contrato)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN18G - Dhebora Machado Martins . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN18G - Dhebora Machado Martins . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU02G - Almir teodoro lima .. (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU02G - Almir teodoro lima .. (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 682px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LW01G - Solange Munarim Rodrigues da Silva (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LW01G - Solange Munarim Rodrigues da Silva (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c9a8481b6ab50001070d8fa">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5980df9599dda30010533de6">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 186px; right: -310px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LO01G - Leticia Nogueira Ramos (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LO01G - Leticia Nogueira Ramos (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5cf925a2fcd3f7001086d355">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c8c0975caf8d10010410737">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bbe3bee0e1fee0012d3fe4b">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-not-end event-blocked btn-pointer" style="background-color: rgba(250, 78, 38, 0.56); left: 0px; right: -1188px; top: 0px;" title="KU01G - bloqueado"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">KU01G - bloqueado</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f284363a5368d2a37609e06">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-contract btn-pointer" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -124px; top: 0px; margin-right: -30px;" title="LJ04G - Carlos Henrique Silva Marques . (contrato)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LJ04G - Carlos Henrique Silva Marques . (contrato)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN10G - Thiago Luiz Martins ,, (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN10G - Thiago Luiz Martins ,, (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU09G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU09G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 682px; right: -930px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LW05G - alanhenriqueh914@gmail.com . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LW05G - alanhenriqueh914@gmail.com . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-not-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 1054px; right: -1188px; top: 0px; margin-left: 32px;" title="MC01G - Wilton Silva Neto (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MC01G - Wilton Silva Neto (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5e31f003d6c66a0010e3e6a2">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-contract btn-pointer" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -124px; top: 0px; margin-right: -30px;" title="LJ03G - Carlos Henrique Silva Marques . (contrato)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LJ03G - Carlos Henrique Silva Marques . (contrato)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN11G - Maria Eduarda Monteiro Da silva De Lemos . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN11G - Maria Eduarda Monteiro Da silva De Lemos . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 248px; right: -372px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LP02G - Wanderson de Araújo Leal ,, (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LP02G - Wanderson de Araújo Leal ,, (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 372px; right: -496px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LR01G - moisés nascimento .681 (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LR01G - moisés nascimento .681 (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU08G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU08G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 682px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LW02G - Solange Munarim Rodrigues da Silva (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LW02G - Solange Munarim Rodrigues da Silva (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d0a9824560ff900106dd897">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 62px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LM01G - renato antonio de almeida souza (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LM01G - renato antonio de almeida souza (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 310px; right: -620px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LQ06G - Paulo Sérgio Tavares (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LQ06G - Paulo Sérgio Tavares (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 744px; right: -868px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LX01G - Fernando Gonzaga Silva . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LX01G - Fernando Gonzaga Silva . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 868px; right: -992px; top: 0px; margin-left: 32px; margin-right: -30px;" title="KW01G - Tcharles de Oliveira .. (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">KW01G - Tcharles de Oliveira .. (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB03G - Dayane cruz mota . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB03G - Dayane cruz mota . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="595651b5680f7b00019011fc">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -124px; top: 0px; margin-right: -30px;" title="LJ05G - Carlos Henrique Silva Marques . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LJ05G - Carlos Henrique Silva Marques . (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN04G - Vivia Ferreira Martins (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN04G - Vivia Ferreira Martins (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB02G - Mariana Magalhães de Oliveira França . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB02G - Mariana Magalhães de Oliveira França . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d6fc17272c0fa00106f8f04">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN09G - Wallisson Moreira Valentim (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN09G - Wallisson Moreira Valentim (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU03G - Aline Moura De sousa (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU03G - Aline Moura De sousa (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5fae96701bc8eb568bcf835b">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN17G - Caroline Oliveira dos Santos . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN17G - Caroline Oliveira dos Santos . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU10G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU10G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 744px; right: -992px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LX02G - Diego Ademar Nicodemos ,,, (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LX02G - Diego Ademar Nicodemos ,,, (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB04G - Dayane cruz mota . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB04G - Dayane cruz mota . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bbe3e62c2c4100012e1af14">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN07G - Keila Benicio de Aguilar Teixeira (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN07G - Keila Benicio de Aguilar Teixeira (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU07G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU07G - Júlia yohara Alves Barbosa Carvalho . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB05G - Dayane cruz mota . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB05G - Dayane cruz mota . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f0cbce1c55ce937205d73bc">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -310px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN08G - Raphael Souza de Araujo (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN08G - Raphael Souza de Araujo (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -868px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU05G - Railton sousa (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU05G - Railton sousa (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB06G - Dayane cruz mota . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB06G - Dayane cruz mota . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f591bb07237cd6a4e00c35a">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 0px; right: -62px; top: 0px; margin-right: -30px;" title="LK07G - LEANDRO ROBERTO SANTOS ANDRADE .. (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LK07G - LEANDRO ROBERTO SANTOS ANDRADE .. (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -868px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU04G - Railton sousa (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU04G - Railton sousa (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB07G - Dayane cruz mota . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB07G - Dayane cruz mota . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5bbb92f7c476330012a8530c">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN16G - Caroline Oliveira dos Santos . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN16G - Caroline Oliveira dos Santos . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU13G - Ezio Teodoro lima ,, (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU13G - Ezio Teodoro lima ,, (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f7da787ba076ecdd0a87412">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN15G - Edmo Oliveira Pinto Júnior ,, (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN15G - Edmo Oliveira Pinto Júnior ,, (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5a341abb155a0a0010352554">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU15G - Férias Fácil Turismo (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU15G - Férias Fácil Turismo (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5c8be31cf4dffd00104c7ff4">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5da71d71053de70010c247ed">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f96fe367dcaf7b6f2a879ea">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5dfa190c1725da0010cf94a8">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 310px; right: -558px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LQ03G - Moacyr Franco de Matos Sido . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LQ03G - Moacyr Franco de Matos Sido . (pré reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU11G - Rebeca de Oliveira e Silva . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU11G - Rebeca de Oliveira e Silva . (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5b6e14c2ff666d00111e88fa">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-contract btn-pointer" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -124px; top: 0px; margin-right: -30px;" title="LJ02G - Stephany Kathrein (contrato)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LJ02G - Stephany Kathrein (contrato)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN06G - wilton silva neto . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN06G - wilton silva neto . (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU17G - Corretora Camila Michelle Silva . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU17G - Corretora Camila Michelle Silva . (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 682px; right: -868px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LW04G - Carlos Antonio Santos (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LW04G - Carlos Antonio Santos (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 868px; right: -1188px; top: 0px; margin-left: 32px;" title="LZ01G - weliton amorim (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LZ01G - weliton amorim (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d6992acf04d200010e797c4">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-blocked btn-pointer" style="background-color: rgba(250, 78, 38, 0.56); left: 558px; right: -682px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LU12G - bloqueado"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LU12G - bloqueado</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5d699bc7f04d200010e7990c">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-not-end event-blocked contract_ended" style="background-color: rgba(250, 78, 38, 0.56); left: 0px; right: -1188px; top: 0px;" title="Bloqueio devido ao término de contrato"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">Bloqueio devido ao término de contrato</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5e31cb31e20ba5001039b58e">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-not-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 0px; right: -124px; top: 0px; margin-right: -30px;" title="LK05G - RICARDO AUGUSTO GOMES DE LIMA (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LK05G - RICARDO AUGUSTO GOMES DE LIMA (reserva)</span></span></a><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 434px; right: -558px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LS02G - ROGÉRIO DA SILVA CAMARGO . (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LS02G - ROGÉRIO DA SILVA CAMARGO . (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5fa582b7f0ef980068aca76d">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-booked btn-pointer fc-draggable" style="background-color: rgba(12, 107, 144, 0.55); left: 124px; right: -248px; top: 0px; margin-left: 32px; margin-right: -30px;" title="LN14G - Jessica galvao de sousa . (reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">LN14G - Jessica galvao de sousa . (reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr>
                                              <td class="fc-divider">
                                                <div style="height: 37px;"></div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5dcb11e97ab9c60010e22305">
                                              <td class="fc-widget-content">
                                                <div style="height: 39px;">
                                                  <div class="fc-event-container" style="height: 31px;"><a class="fc-timeline-event fc-h-event fc-event fc-start fc-end event-reserved btn-pointer fc-draggable" style="background-color: rgba(250, 250, 38, 0.56); color: black; left: 992px; right: -1116px; top: 0px; margin-left: 32px; margin-right: -30px;" title="MB08G - Luciana Aparecida Silva ,, (pré reserva)"><span class="fc-title-wrap"><span class="fc-title fc-sticky" style="position: sticky; left: 0px; right: 0px; top: 0px;">MB08G - Luciana Aparecida Silva ,, (pré reserva)</span></span></a></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f0ccb69c55ce972ce5d767b">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f970a857dcaf763e1a87cb2">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                            <tr data-resource-id="5f80646e6e7d788c66611325">
                                              <td class="fc-widget-content">
                                                <div style="height: 38px;">
                                                  <div class="fc-event-container" style="height: 0px;"></div>
                                                  <div class="fc-bgevent-container">
                                                    <div class="fc-bgevent" style="background-color: rgb(238, 238, 238); left: 0px; right: -992px;" title="BAIXA TEMPORADA AGOSTO A DEZEMBRO"></div>
                                                    <div class="fc-bgevent" style="background-color: rgb(204, 204, 204); left: 992px; right: -1188px;" title="ALTA TEMPORADA DEZEMBRO / JANEIRO"></div>
                                                  </div>
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="fc-bg">
                                      <div class="fc-slats">
                                        <table class="">
                                          <colgroup>
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col style="width: 62px;">
                                            <col>
                                          </colgroup>
                                          <tbody>
                                            <tr>
                                              <td class="fc-widget-content fc-wed fc-past fc-day" data-date="2020-12-02">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-thu fc-today  fc-day" data-date="2020-12-03">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-fri fc-future fc-day" data-date="2020-12-04">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-sat fc-future fc-day" data-date="2020-12-05">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-sun fc-future fc-day" data-date="2020-12-06">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-mon fc-future fc-day" data-date="2020-12-07">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-tue fc-future fc-day" data-date="2020-12-08">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-wed fc-future fc-day" data-date="2020-12-09">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-thu fc-future fc-day" data-date="2020-12-10">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-fri fc-future fc-day" data-date="2020-12-11">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-sat fc-future fc-day" data-date="2020-12-12">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-sun fc-future fc-day" data-date="2020-12-13">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-mon fc-future fc-day" data-date="2020-12-14">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-tue fc-future fc-day" data-date="2020-12-15">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-wed fc-future fc-day" data-date="2020-12-16">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-thu fc-future fc-day" data-date="2020-12-17">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-fri fc-future fc-day" data-date="2020-12-18">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-sat fc-future fc-day" data-date="2020-12-19">
                                                <div></div>
                                              </td>
                                              <td class="fc-widget-content fc-sun fc-future fc-day" data-date="2020-12-20">
                                                <div></div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <style>
                    .fc-timeline .fc-head tbody tr:last-child .fc-sun::before {
                      content: "DOM";
                    }

                    .fc-timeline .fc-head tbody tr:last-child .fc-mon::before {
                      content: "SEG";
                    }

                    .fc-timeline .fc-head tbody tr:last-child .fc-tue::before {
                      content: "TER";
                    }

                    .fc-timeline .fc-head tbody tr:last-child .fc-wed::before {
                      content: "QUA";
                    }

                    .fc-timeline .fc-head tbody tr:last-child .fc-thu::before {
                      content: "QUI";
                    }

                    .fc-timeline .fc-head tbody tr:last-child .fc-fri::before {
                      content: "SEX";
                    }

                    .fc-timeline .fc-head tbody tr:last-child .fc-sat::before {
                      content: "SÁB";
                    }
                  </style>
                </div>


              </div>
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