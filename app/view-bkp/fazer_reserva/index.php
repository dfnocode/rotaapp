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
      <!--  <section class="content-header">
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

        <div class="row apartment_tab" style="padding-top: 10px;">
          <div class="col-lg-2 col-md-2 col-xs-12 scroll ps" style="padding-bottom: 70px;">
            <div class="collapse" id="past-alert">
              <div class="alert alert-warning">
                <h4>Atenção!</h4>
                Confira a data da sua Reserva!<br> A seleção de datas está em um período que já passou!
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-body">
                <form id="filterform" action="/i/booking/0/prior" class="ajax_form" novalidate="true" role="form">
                  <div class="input-daterange" data-validate="daterange">
                    <div class="form-group has-feedback has-error has-danger">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control date from" placeholder="De" required="" autocomplete="off">
                        <input type="hidden" name="from" value="">
                      </div>
                    </div>
                    <div class="form-group has-feedback">
                      <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control date to" placeholder="Até" required="" autocomplete="off">
                        <input type="hidden" name="to" value="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control apartments bs3 bs3-has-addon" style="width: 138px;"><select class="selectpicker form-control apartments" data-width="auto" data-container="#maincontent" id="ApartID" name="apartment[]" data-apartmentid="" multiple="" tabindex="null">
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" data-id="ApartID" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Não Selecionado</div>
                        </button></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-users"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control persons bs3 bs3-has-addon"><select class="selectpicker form-control persons" name="persons" title="Nº de hóspedes" tabindex="null">
                          <option class="bs-title-option" value=""></option>
                          <option value="1">
                            1 Pessoa
                          </option>
                          <option value="2">
                            2 Pessoas
                          </option>
                          <option value="3">
                            3 Pessoas
                          </option>
                          <option value="4">
                            4 Pessoas
                          </option>
                          <option value="5">
                            5 Pessoas
                          </option>
                          <option value="6">
                            6 Pessoas
                          </option>
                          <option value="7">
                            7 Pessoas
                          </option>
                          <option value="8">
                            8 Pessoas
                          </option>
                          <option value="9">
                            9 Pessoas
                          </option>
                          <option value="10">
                            10 Pessoas
                          </option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Nº de hóspedes">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Nº de hóspedes</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Nº de hóspedes</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 759px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-4" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-4" tabindex="-1" style="max-height: 709px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-4-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    1 Pessoa
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    2 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    3 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    4 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    5 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    6 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    7 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    8 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    9 Pessoas
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-4-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    10 Pessoas
                                  </span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="sa" type="checkbox"> Mostrar apenas produtos da Stays Alliance
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="clean" type="checkbox">
                      Limpo
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="promo" type="checkbox">
                      Promoções
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="incprice" type="checkbox">
                      Preços Incompletos
                    </label>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input name="onlyactive" type="checkbox">
                      Apenas apartamentos ativos
                    </label>
                  </div>
                  <div id="advanced" class="collapse ">
                    <div class="form-group">
                      <label>Grupos</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="form-control selectpicker" name="groups[]" multiple="">
                          <option value="59668a9c95726a000129d34a">Lacqua Di Roma</option>
                          <option value="5980e86f99dda30010533e47">Águas da Serra</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 38px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-5" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-5" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 0px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-5-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Lacqua Di Roma</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-5-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Águas da Serra</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Prédio</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="selectpicker form-control" id="buildID" name="buildingid" data-buildingid="">
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-6" aria-haspopup="listbox" aria-expanded="false" data-id="buildID" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-6" aria-autocomplete="list" aria-activedescendant="bs-select-6-0"></div>
                          <div class="inner open" role="listbox" id="bs-select-6" tabindex="-1" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-6-0" tabindex="0" aria-setsize="18" aria-posinset="1" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-1"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-6-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH03E | Residencial Águas da Serra</span></a></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-6-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">CY02F | Everst Flat Service</span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-2"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-6-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH08E | LACQUA - I</span></a></li>
                              <li class="divider optgroup-2div"></li>
                              <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-6-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QO01E | Hot Springs</span></a></li>
                              <li class="divider optgroup-3div"></li>
                              <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-6-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">RE01E | Vitória das Thermas</span></a></li>
                              <li class="divider optgroup-4div"></li>
                              <li class="dropdown-header optgroup-5"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-6-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">RF01E | LACQUA - V</span></a></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-6-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">RK01E | LACQUA - II</span></a></li>
                              <li class="divider optgroup-5div"></li>
                              <li class="dropdown-header optgroup-6"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                              <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-6-20" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VU01E | Lagoa Quente Flat Service</span></a></li>
                              <li class="divider optgroup-6div"></li>
                              <li class="dropdown-header optgroup-7"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-6-23" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EY02F | Di Roma Internacional Resort</span></a></li>
                              <li class="divider optgroup-7div"></li>
                              <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-6-26" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NK02F | Golden Dolphin Grand Hotel</span></a></li>
                              <li class="divider optgroup-8div"></li>
                              <li class="dropdown-header optgroup-9"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                              <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-6-29" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PE03F | Condomínio Millennium Thermas Residence</span></a></li>
                              <li class="divider optgroup-9div"></li>
                              <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-6-32" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SY01F | DI ROMA FIORE</span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-6-33" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">IN01G | LACQUA - IV</span></a></li>
                              <li class="divider optgroup-10div"></li>
                              <li class="dropdown-header optgroup-11"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-6-36" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT01F | Villas Di Roma</span></a></li>
                              <li class="divider optgroup-11div"></li>
                              <li class="dropdown-header optgroup-12"><span class="text"></span></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-6-39" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA06G | RIVIERA PARK - FLAT SERVICE</span></a></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-6-40" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KL01G | VT 305 B</span></a></li>
                              <li class="divider optgroup-12div"></li>
                              <li class="dropdown-header optgroup-13"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-6-43" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS05G | DIROMA EXCLUSIVE</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="house"> Apenas Imóvel
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Bairro</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="form-control selectpicker" name="regions[]" size="13" multiple="">
                          <option value="Bandeirantes">Bandeirantes</option>
                          <option value="Chácara Roma">Chácara Roma</option>
                          <option value="Do Turista">Do Turista</option>
                          <option value="GO">GO</option>
                          <option value="J Jeriquara">J Jeriquara</option>
                          <option value="Jardim Belvedere">Jardim Belvedere</option>
                          <option value="Jeriquara">Jeriquara</option>
                          <option value="Lagoa Quente">Lagoa Quente</option>
                          <option value="SOLAR DE CALDAS">SOLAR DE CALDAS</option>
                          <option value="Solar de Caldas">Solar de Caldas</option>
                          <option value="TURISTA 1">TURISTA 1</option>
                          <option value="Turista 1">Turista 1</option>
                          <option value="Turista II">Turista II</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-7" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-7" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-7" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-7-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Bandeirantes</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Chácara Roma</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Do Turista</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">GO</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">J Jeriquara</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Jardim Belvedere</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Jeriquara</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Lagoa Quente</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SOLAR DE CALDAS</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Solar de Caldas</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TURISTA 1</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Turista 1</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-7-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Turista II</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Cidade</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="form-control selectpicker" name="cities[]" size="3" multiple="">
                          <option value="CALDAS NOVAS">CALDAS NOVAS</option>
                          <option value="Caldas Novas">Caldas Novas</option>
                          <option value="CLADAS NOVAS">CLADAS NOVAS</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-8" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 38px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-8" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-8" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 0px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-8-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">CALDAS NOVAS</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-8-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Caldas Novas</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-8-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">CLADAS NOVAS</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Quartos</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="form-control selectpicker" name="rooms[]" size="4" multiple="">
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-9" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-9" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-9" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-9-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    Estúdio
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-9-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    1 Quarto
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-9-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    2 Quartos
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-9-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    3 Quartos
                                  </span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Banheiros</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="form-control selectpicker" name="bathrooms[]" size="4" multiple="">
                          <option value="1">
                            1 Banheiro
                          </option>
                          <option value="1.5">
                            1.5 Banheiro
                          </option>
                          <option value="2">
                            2 Banheiros
                          </option>
                          <option value="2.5">
                            2.5 Banheiros
                          </option>
                          <option value="3">
                            3 Banheiros
                          </option>
                          <option value="3.5">
                            3.5 Banheiros
                          </option>
                          <option value="4">
                            4 Banheiros
                          </option>
                          <option value="4.5">
                            4.5 Banheiros
                          </option>
                          <option value="5">
                            5 Banheiros
                          </option>
                          <option value="5.5">
                            5.5 Banheiros
                          </option>
                          <option value="6">
                            6 Banheiros
                          </option>
                          <option value="6.5">
                            6.5 Banheiros
                          </option>
                          <option value="7">
                            7 Banheiros
                          </option>
                          <option value="7.5">
                            7.5 Banheiros
                          </option>
                          <option value="8">
                            8 Banheiros
                          </option>
                          <option value="8.5">
                            8.5 Banheiros
                          </option>
                          <option value="9">
                            9 Banheiros
                          </option>
                          <option value="9.5">
                            9.5 Banheiros
                          </option>
                          <option value="10">
                            10 Banheiros
                          </option>
                          <option value="10.5">
                            10.5 Banheiros
                          </option>
                          <option value="11">
                            11 Banheiros
                          </option>
                          <option value="11.5">
                            11.5 Banheiros
                          </option>
                          <option value="12">
                            12 Banheiros
                          </option>
                          <option value="12.5">
                            12.5 Banheiros
                          </option>
                          <option value="13">
                            13 Banheiros
                          </option>
                          <option value="13.5">
                            13.5 Banheiros
                          </option>
                          <option value="14">
                            14 Banheiros
                          </option>
                          <option value="14.5">
                            14.5 Banheiros
                          </option>
                          <option value="15">
                            15 Banheiros
                          </option>
                          <option value="15.5">
                            15.5 Banheiros
                          </option>
                          <option value="16">
                            16 Banheiros
                          </option>
                          <option value="16.5">
                            16.5 Banheiros
                          </option>
                          <option value="17">
                            17 Banheiros
                          </option>
                          <option value="17.5">
                            17.5 Banheiros
                          </option>
                          <option value="18">
                            18 Banheiros
                          </option>
                          <option value="18.5">
                            18.5 Banheiros
                          </option>
                          <option value="19">
                            19 Banheiros
                          </option>
                          <option value="19.5">
                            19.5 Banheiros
                          </option>
                          <option value="20">
                            20 Banheiros
                          </option>
                          <option value="20.5">
                            20.5 Banheiros
                          </option>
                          <option value="21">
                            21 Banheiros
                          </option>
                          <option value="21.5">
                            21.5 Banheiros
                          </option>
                          <option value="22">
                            22 Banheiros
                          </option>
                          <option value="22.5">
                            22.5 Banheiros
                          </option>
                          <option value="23">
                            23 Banheiros
                          </option>
                          <option value="23.5">
                            23.5 Banheiros
                          </option>
                          <option value="24">
                            24 Banheiros
                          </option>
                          <option value="24.5">
                            24.5 Banheiros
                          </option>
                          <option value="25">
                            25 Banheiros
                          </option>
                          <option value="25.5">
                            25.5 Banheiros
                          </option>
                          <option value="26">
                            26 Banheiros
                          </option>
                          <option value="26.5">
                            26.5 Banheiros
                          </option>
                          <option value="27">
                            27 Banheiros
                          </option>
                          <option value="27.5">
                            27.5 Banheiros
                          </option>
                          <option value="28">
                            28 Banheiros
                          </option>
                          <option value="28.5">
                            28.5 Banheiros
                          </option>
                          <option value="29">
                            29 Banheiros
                          </option>
                          <option value="29.5">
                            29.5 Banheiros
                          </option>
                          <option value="30">
                            30 Banheiros
                          </option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-10" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-10" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-10" tabindex="-1" aria-multiselectable="true" style="max-height: 1014px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-10-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    1 Banheiro
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    1.5 Banheiro
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    2 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    2.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    3 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    3.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    4 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    4.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    5.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    6 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    6.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    7 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-13" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    7.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    8 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    8.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-16" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    9 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-17" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    9.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-18" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    10 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-19" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    10.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-20" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    11 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-21" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    11.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-22" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    12 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-23" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    12.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-24" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    13 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-25" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    13.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-26" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    14 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-27" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    14.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-28" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    15 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-29" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    15.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-30" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    16 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-31" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    16.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-32" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    17 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-33" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    17.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-34" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    18 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-35" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    18.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-36" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    19 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-37" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    19.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-38" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    20 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-39" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    20.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-40" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    21 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-41" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    21.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-42" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    22 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-43" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    22.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-44" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    23 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-45" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    23.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-46" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    24 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-47" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    24.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-48" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    25 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-49" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    25.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-50" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    26 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-51" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    26.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-52" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    27 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-53" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    27.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-54" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    28 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-55" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    28.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-56" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    29 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-57" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    29.5 Banheiros
                                  </span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-10-58" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">
                                    30 Banheiros
                                  </span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Itens de Inventário</label>
                      <div class="dropdown bootstrap-select show-tick form-control bs3"><select class="form-control selectpicker" data-live-search="0" name="inventory[]" size="4" multiple="">
                          <option value="internet">internet</option>
                          <option value="maquina de lavar">maquina de lavar</option>
                          <option value="hidro/banheira">hidro/banheira</option>
                          <option value="vista para o mar">vista para o mar</option>
                          <option value="ar condicionado">ar condicionado</option>
                          <option value="portaria 24h">portaria 24h</option>
                          <option value="localização silenciosa">localização silenciosa</option>
                          <option value="1a quadra da praia">1a quadra da praia</option>
                          <option value="varanda/terraço">varanda/terraço</option>
                          <option value="cobertura">cobertura</option>
                          <option value="vaga de garagem">vaga de garagem</option>
                          <option value="luxo">luxo</option>
                          <option value="econômico">econômico</option>
                          <option value="ar condicionado split">ar condicionado split</option>
                          <option value="Apartamento adaptado para cadeirantes">Apartamento adaptado para cadeirantes</option>
                          <option value="caixa freezer">caixa freezer</option>
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-11" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Não Selecionado</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 1064px; overflow: hidden; min-height: 86px;">
                          <div class="inner open" role="listbox" id="bs-select-11" tabindex="-1" aria-multiselectable="true" style="max-height: 1052px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item" id="bs-select-11-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">internet</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">maquina de lavar</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">hidro/banheira</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-3" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">vista para o mar</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-4" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ar condicionado</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-5" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">portaria 24h</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-6" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">localização silenciosa</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-7" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">1a quadra da praia</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-8" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">varanda/terraço</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-9" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">cobertura</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-10" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">vaga de garagem</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-11" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">luxo</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-12" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">econômico</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-13" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ar condicionado split</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-14" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Apartamento adaptado para cadeirantes</span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-11-15" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">caixa freezer</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label>Faixa de Preço</label>
                      <div class="form-group has-feedback">
                        <div class="input-group">
                          <span class="input-group-addon" style="min-width: 60px;">
                            min
                          </span>
                          <input type="text" value="" class="form-control filterPrice" data-validate="number" data-number="money" data-number-valmin="0,00" data-number-valmax="20.000,00" placeholder="R$&nbsp;0,00">
                        </div>
                      </div>
                      <div class="form-group has-feedback">
                        <div class="input-group">
                          <span class="input-group-addon" style="min-width: 60px;">
                            max
                          </span>
                          <input type="text" value="" class="form-control filterPrice" data-validate="number" data-number="money" data-number-valmin="0,00" data-number-valmax="20.000,00" placeholder="R$&nbsp;20.000,00">
                        </div>
                      </div>
                      <input name="newPrice" type="hidden">
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
                  <br>
                  <a class="btn btn-default btn-block" data-toggle="collapse" href="#advanced">
                    Mais Opções
                  </a>
                  <br>
                  <button type="submit" class="btn btn-block btn-primary disabled">Pesquisar</button>
                </form>
              </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 161px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <div class="col-lg-10 col-md-10 col-xs-12 scroll ps" style="padding-bottom: 220px;">
            <div id="selected_apt">
            </div>
            <div id="found_apt">
              <div class="media">
                <div class="media-left media-top">
                  <div class="media-object" style="width:100px;">
                  </div>
                </div>
                <div class="media-body hidden-xs hidden-sm">
                  <!--Code-->
                  <div class="col-sm-3">
                    <a href="/i/booking_apartment/avatar/0" class="reload color-black"><i class="fa fa-lock"></i> Código</a>
                  </div>
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-md-2 text-center">
                        <a href="/i/booking_apartment/rooms/0" class="reload color-black">Quartos</a>
                      </div>
                      <div class="col-md-2 text-center">
                        <a href="/i/booking_apartment/maxpers/0" class="reload color-black">Max</a>
                      </div>

                      <div class="col-md-2">
                        <a href="/i/booking_apartment/rating/0" class="reload color-black">Avaliação</a>
                      </div>
                      <div class="col-md-2">
                        Status
                      </div>
                      <div class="col-md-2">
                        <a href="/i/booking_apartment/price/0" class="reload color-black">Valor Total</a>
                      </div>
                      <div class="col-md-2">
                        Por Noite
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="hr3">
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <script>
            requirejs(["views/reservation/booking_apartment"], function(booking_apartment) {
              booking_apartment({
                filter: {
                  "minprice": {
                    "BRL": 0
                  },
                  "maxprice": {
                    "BRL": 20000
                  },
                  "bathrooms": [{
                    "val": 1
                  }, {
                    "val": 1.5
                  }, {
                    "val": 2
                  }, {
                    "val": 2.5
                  }, {
                    "val": 3
                  }, {
                    "val": 3.5
                  }, {
                    "val": 4
                  }, {
                    "val": 4.5
                  }, {
                    "val": 5
                  }, {
                    "val": 5.5
                  }, {
                    "val": 6
                  }, {
                    "val": 6.5
                  }, {
                    "val": 7
                  }, {
                    "val": 7.5
                  }, {
                    "val": 8
                  }, {
                    "val": 8.5
                  }, {
                    "val": 9
                  }, {
                    "val": 9.5
                  }, {
                    "val": 10
                  }, {
                    "val": 10.5
                  }, {
                    "val": 11
                  }, {
                    "val": 11.5
                  }, {
                    "val": 12
                  }, {
                    "val": 12.5
                  }, {
                    "val": 13
                  }, {
                    "val": 13.5
                  }, {
                    "val": 14
                  }, {
                    "val": 14.5
                  }, {
                    "val": 15
                  }, {
                    "val": 15.5
                  }, {
                    "val": 16
                  }, {
                    "val": 16.5
                  }, {
                    "val": 17
                  }, {
                    "val": 17.5
                  }, {
                    "val": 18
                  }, {
                    "val": 18.5
                  }, {
                    "val": 19
                  }, {
                    "val": 19.5
                  }, {
                    "val": 20
                  }, {
                    "val": 20.5
                  }, {
                    "val": 21
                  }, {
                    "val": 21.5
                  }, {
                    "val": 22
                  }, {
                    "val": 22.5
                  }, {
                    "val": 23
                  }, {
                    "val": 23.5
                  }, {
                    "val": 24
                  }, {
                    "val": 24.5
                  }, {
                    "val": 25
                  }, {
                    "val": 25.5
                  }, {
                    "val": 26
                  }, {
                    "val": 26.5
                  }, {
                    "val": 27
                  }, {
                    "val": 27.5
                  }, {
                    "val": 28
                  }, {
                    "val": 28.5
                  }, {
                    "val": 29
                  }, {
                    "val": 29.5
                  }, {
                    "val": 30
                  }],
                  "groups": [{
                    "_id": "59668a9c95726a000129d34a",
                    "name": "Lacqua Di Roma",
                    "_mstitle": {
                      "pt_BR": "Lacqua Di Roma"
                    },
                    "selected": false
                  }, {
                    "_id": "5980e86f99dda30010533e47",
                    "name": "Águas da Serra",
                    "_mstitle": {
                      "pt_BR": "Águas da Serra"
                    },
                    "selected": false
                  }],
                  "inventory": [{
                    "_id": "515328def456a12c0c0033b1",
                    "val": "internet",
                    "_msvalues": {
                      "pt_BR": "internet",
                      "en_US": "internet",
                      "de_DE": "Internet",
                      "es_ES": "internet",
                      "ru_RU": "Интернет"
                    }
                  }, {
                    "_id": "515328def456a12c0c0033b2",
                    "val": "maquina de lavar",
                    "_msvalues": {
                      "pt_BR": "maquina de lavar",
                      "en_US": "washing machine",
                      "de_DE": "Waschmaschine",
                      "es_ES": "lavadora",
                      "ru_RU": "Стиральная машина"
                    }
                  }, {
                    "_id": "515328def456a12c0c0033b4",
                    "val": "hidro/banheira",
                    "_msvalues": {
                      "pt_BR": "hidro/banheira",
                      "en_US": "whirlpool/bathtub",
                      "de_DE": "Jacuzzi/Badewanne",
                      "es_ES": "hidromasaje/bañera",
                      "ru_RU": "Джакузи/Ванна"
                    }
                  }, {
                    "_id": "515328def456a12c0c0033b5",
                    "val": "vista para o mar",
                    "_msvalues": {
                      "pt_BR": "vista para o mar",
                      "en_US": "ocean view",
                      "de_DE": "Meerblick",
                      "es_ES": "vistas hacia el mar",
                      "ru_RU": "Вид на океан"
                    }
                  }, {
                    "_id": "515328e0f456a12c0c0033e8",
                    "val": "ar condicionado",
                    "_msvalues": {
                      "pt_BR": "ar condicionado",
                      "en_US": "air conditioner",
                      "de_DE": "Klimaanlage",
                      "es_ES": "aire acondicionado",
                      "ru_RU": "Кондиционер"
                    }
                  }, {
                    "_id": "515328e0f456a12c0c003588",
                    "val": "portaria 24h",
                    "_msvalues": {
                      "pt_BR": "portaria 24h",
                      "en_US": "24h doorman",
                      "de_DE": "24h Portier",
                      "es_ES": "Portero 24h",
                      "ru_RU": "Круглосуточный консьерж"
                    }
                  }, {
                    "_id": "515328e0f456a12c0c00358d",
                    "val": "localização silenciosa",
                    "_msvalues": {
                      "pt_BR": "localização silenciosa",
                      "en_US": "silent location",
                      "de_DE": "ruhige Lage",
                      "es_ES": "localización silenciosa",
                      "ru_RU": "Тихое расположение"
                    }
                  }, {
                    "_id": "515328e0f456a12c0c00359b",
                    "val": "1a quadra da praia",
                    "_msvalues": {
                      "pt_BR": "1a quadra da praia",
                      "en_US": "1st block from the beach",
                      "de_DE": "1. Block vom Strand",
                      "es_ES": "1a linea de playa",
                      "ru_RU": "1-я линия на пляже"
                    }
                  }, {
                    "_id": "515328e0f456a12c0c0035a9",
                    "val": "varanda/terraço",
                    "_msvalues": {
                      "pt_BR": "varanda/terraço",
                      "en_US": "terrace/balcony",
                      "de_DE": "Terrasse/Balkon",
                      "es_ES": "balcón/terraza",
                      "ru_RU": "Балкон/Терраса"
                    }
                  }, {
                    "_id": "515328e0f456a12c0c0035aa",
                    "val": "cobertura",
                    "_msvalues": {
                      "pt_BR": "cobertura",
                      "en_US": "penthouse",
                      "de_DE": "Penthouse",
                      "es_ES": "ático",
                      "ru_RU": "Пентхаус"
                    }
                  }, {
                    "_id": "517dcdbca12db4580c0007f0",
                    "val": "vaga de garagem",
                    "_msvalues": {
                      "pt_BR": "vaga de garagem",
                      "en_US": "garage for 1 car",
                      "de_DE": "Garagenstellplatz",
                      "es_ES": "plaza de garaje",
                      "ru_RU": "гараж для 1 машины"
                    }
                  }, {
                    "_id": "5183e3a6e21d4a22340004b3",
                    "val": "luxo",
                    "_msvalues": {
                      "pt_BR": "luxo",
                      "en_US": "luxury",
                      "de_DE": "Luxus",
                      "es_ES": "lujo",
                      "ru_RU": "Люкс"
                    }
                  }, {
                    "_id": "51df349c9e95a39a6c000029",
                    "val": "econômico",
                    "_msvalues": {
                      "pt_BR": "econômico",
                      "en_US": "low budget",
                      "de_DE": "Low Budget",
                      "es_ES": "económico",
                      "ru_RU": "Эконом"
                    }
                  }, {
                    "_id": "55d32bb8b919e06a0e18a188",
                    "val": "ar condicionado split",
                    "_msvalues": {
                      "pt_BR": "ar condicionado split",
                      "en_US": "split air conditioner",
                      "de_DE": "",
                      "es_ES": "",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "5659c3ee05ebc980024948c6",
                    "val": "Apartamento adaptado para cadeirantes",
                    "_msvalues": {
                      "pt_BR": "Apartamento adaptado para cadeirantes",
                      "en_US": "Apartment adapted for wheelchair users",
                      "de_DE": "",
                      "es_ES": "Apartamento adaptado para sillas de ruedas",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "5677d70da48ed613602d7d2d",
                    "val": "caixa freezer",
                    "_msvalues": {
                      "pt_BR": "caixa freezer",
                      "en_US": "",
                      "de_DE": "",
                      "es_ES": "",
                      "ru_RU": ""
                    }
                  }],
                  "persons": [{
                    "val": 1,
                    "selected": false
                  }, {
                    "val": 2,
                    "selected": false
                  }, {
                    "val": 3,
                    "selected": false
                  }, {
                    "val": 4,
                    "selected": false
                  }, {
                    "val": 5,
                    "selected": false
                  }, {
                    "val": 6,
                    "selected": false
                  }, {
                    "val": 7,
                    "selected": false
                  }, {
                    "val": 8,
                    "selected": false
                  }, {
                    "val": 9,
                    "selected": false
                  }, {
                    "val": 10,
                    "selected": false
                  }],
                  "rooms": [{
                    "val": 0,
                    "selected": false
                  }, {
                    "val": 1,
                    "selected": false
                  }, {
                    "val": 2,
                    "selected": false
                  }, {
                    "val": 3,
                    "selected": false
                  }],
                  "regions": [{
                    "val": "Bandeirantes",
                    "name": "Bandeirantes",
                    "selected": false
                  }, {
                    "val": "Chácara Roma",
                    "name": "Chácara Roma",
                    "selected": false
                  }, {
                    "val": "Do Turista",
                    "name": "Do Turista",
                    "selected": false
                  }, {
                    "val": "GO",
                    "name": "GO",
                    "selected": false
                  }, {
                    "val": "J Jeriquara",
                    "name": "J Jeriquara",
                    "selected": false
                  }, {
                    "val": "Jardim Belvedere",
                    "name": "Jardim Belvedere",
                    "selected": false
                  }, {
                    "val": "Jeriquara",
                    "name": "Jeriquara",
                    "selected": false
                  }, {
                    "val": "Lagoa Quente",
                    "name": "Lagoa Quente",
                    "selected": false
                  }, {
                    "val": "SOLAR DE CALDAS",
                    "name": "SOLAR DE CALDAS",
                    "selected": false
                  }, {
                    "val": "Solar de Caldas",
                    "name": "Solar de Caldas",
                    "selected": false
                  }, {
                    "val": "TURISTA 1",
                    "name": "TURISTA 1",
                    "selected": false
                  }, {
                    "val": "Turista 1",
                    "name": "Turista 1",
                    "selected": false
                  }, {
                    "val": "Turista II",
                    "name": "Turista II",
                    "selected": false
                  }],
                  "cities": [{
                    "val": "CALDAS NOVAS",
                    "name": "CALDAS NOVAS",
                    "selected": false
                  }, {
                    "val": "Caldas Novas",
                    "name": "Caldas Novas",
                    "selected": false
                  }, {
                    "val": "CLADAS NOVAS",
                    "name": "CLADAS NOVAS",
                    "selected": false
                  }],
                  "amenity": [{
                    "_id": "58931b3fe1875b6163592c6f",
                    "_msvalues": {
                      "pt_BR": "Estacionamento",
                      "en_US": "Free parking on premises",
                      "de_DE": "Kostenloses Parken",
                      "es_ES": "Parking",
                      "sv_SE": "Gratis parkering på området",
                      "pt_PT": "Estacionamento",
                      "el_GR": "Δωρεάν χώρος στάθμευσης στις εγκαταστάσεις",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931b8be1875b6163592c75",
                    "_msvalues": {
                      "pt_BR": "Academia (privativa)",
                      "en_US": "Gym (private)",
                      "es_ES": "Gimnasio (privado)",
                      "sv_SE": "Privat Gym",
                      "el_GR": "Γυμναστήριο (ιδιωτικό)",
                      "de_DE": "",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931b65e1875b6163592c71",
                    "_msvalues": {
                      "pt_BR": "Elevador",
                      "en_US": "Elevator in building",
                      "de_DE": "Aufzug im Gebäude",
                      "es_ES": "Elevador",
                      "sv_SE": "Hiss i byggnaden",
                      "el_GR": "Ανελκυστήρας",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931b6de1875b6163592c72",
                    "_msvalues": {
                      "pt_BR": "Porteiro",
                      "en_US": "Doorman",
                      "de_DE": "Portier",
                      "es_ES": "Portero",
                      "sv_SE": "Dörrvakt",
                      "pt_PT": "Porteiro",
                      "el_GR": "Θυρωρός",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931b75e1875b6163592c73",
                    "_msvalues": {
                      "pt_BR": "Piscina Privada",
                      "en_US": "Private Pool",
                      "es_ES": "Piscina Private",
                      "sv_SE": "Privat pool",
                      "pt_PT": "Piscina",
                      "el_GR": "Ιδιωτική πισίνα"
                    }
                  }, {
                    "_id": "58931b86e1875b6163592c74",
                    "_msvalues": {
                      "pt_BR": "Quartos para famílias",
                      "en_US": "Family/kid friendly",
                      "de_DE": "Familienfreundlich",
                      "es_ES": "Habitaciones familiares",
                      "sv_SE": "Familje/barnvänligt",
                      "pt_PT": "Quartos familiares",
                      "el_GR": "Φιλικό για οικογένειες / παιδιά",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931c96e1875b6163592c7a",
                    "_msvalues": {
                      "pt_BR": "Internet",
                      "en_US": "Internet",
                      "de_DE": "Internet",
                      "es_ES": "Internet",
                      "sv_SE": "Internet",
                      "pt_PT": "Internet",
                      "el_GR": "Ίντερνετ"
                    }
                  }, {
                    "_id": "58931ca0e1875b6163592c7b",
                    "_msvalues": {
                      "pt_BR": "Jacuzzi",
                      "en_US": "Hot Tub",
                      "es_ES": "Jacuzzi",
                      "sv_SE": "Jacuzzi",
                      "pt_PT": "Jacuzzi",
                      "el_GR": "Υδρομασάζ"
                    }
                  }, {
                    "_id": "58931cdae1875b6163592c80",
                    "_msvalues": {
                      "pt_BR": "Cozinha/Cozinha Compacta",
                      "en_US": "Kitchen/Kitchenette",
                      "es_ES": "Cocina",
                      "sv_SE": "Kök/öppet kök",
                      "pt_PT": "Cozinha/Kitchenette",
                      "el_GR": "Κουζίνα / Κουζινάκι"
                    }
                  }, {
                    "_id": "58931cd4e1875b6163592c7f",
                    "_msvalues": {
                      "pt_BR": "Wi-fi",
                      "en_US": "Wi-fi",
                      "de_DE": "Wifi Internet",
                      "es_ES": "Wi-fi",
                      "sv_SE": "WIFI",
                      "pt_PT": "Wi-fi"
                    }
                  }, {
                    "_id": "58931cc9e1875b6163592c7e",
                    "_msvalues": {
                      "pt_BR": "Comodidades para hóspedes com mobilidade reduzida",
                      "en_US": "Wheelchair accessible",
                      "es_ES": "Adaptado personas de movilidad reducida ",
                      "sv_SE": "Rullstolsanpassat",
                      "pt_PT": "Comodidades para pessoas com mobilidade condicionada"
                    }
                  }, {
                    "_id": "58931ce4e1875b6163592c81",
                    "_msvalues": {
                      "pt_BR": "Ar Condicionado",
                      "en_US": "Air Conditioning",
                      "de_DE": "Klimaanlage",
                      "es_ES": "Aire Acondicionado",
                      "sv_SE": "Lutkonditionering",
                      "pt_PT": "Ar Condicionado",
                      "el_GR": "Κλιματιστικό"
                    }
                  }, {
                    "_id": "58931d21e1875b6163592c88",
                    "_msvalues": {
                      "pt_BR": "Cabides",
                      "en_US": "Hangers",
                      "es_ES": "Ganchos para Ropa",
                      "sv_SE": "Klädhängare",
                      "pt_PT": "Cabides",
                      "el_GR": "Κρεμάστρες",
                      "de_DE": "",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931d05e1875b6163592c84",
                    "_msvalues": {
                      "pt_BR": "Canais a Cabo",
                      "en_US": "Cable Channels",
                      "de_DE": "Kabel-TV",
                      "es_ES": "Canales vía Cable",
                      "sv_SE": "Kabel tvkanaler",
                      "pt_PT": "Canais por Cabo",
                      "el_GR": "Δορυφορικά κανάλια"
                    }
                  }, {
                    "_id": "58931d48e1875b6163592c8b",
                    "_msvalues": {
                      "pt_BR": "Interfone",
                      "en_US": "Buzzer/wireless intercom",
                      "es_ES": "Timbre/Intercomunicador Inalámbrico ",
                      "sv_SE": "Trådlös porttelefon",
                      "pt_PT": "Interfone",
                      "el_GR": "Θυροτηλέφωνο",
                      "de_DE": "",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931d64e1875b6163592c8e",
                    "_msvalues": {
                      "pt_BR": "Itens Básicos de Banheiro",
                      "en_US": "Bath Essentials",
                      "es_ES": "Elementos Básicos del Baño",
                      "sv_SE": "Badrumsprodukter",
                      "pt_PT": "Itens Básicos de Banheiro",
                      "el_GR": "Είδη μπάνιου"
                    }
                  }, {
                    "_id": "58931d13e1875b6163592c86",
                    "_msvalues": {
                      "pt_BR": "Secador de Cabelo",
                      "en_US": "Hair Dryer",
                      "es_ES": "Secador de Pelo",
                      "sv_SE": "Hårfön",
                      "pt_PT": "Secador de Cabelo",
                      "el_GR": "Πιστολάκι μαλλιών"
                    }
                  }, {
                    "_id": "58931d28e1875b6163592c89",
                    "_msvalues": {
                      "pt_BR": "TV",
                      "en_US": "TV",
                      "es_ES": "Televisión",
                      "sv_SE": "TV",
                      "pt_PT": "Televisão",
                      "el_GR": "Τηλεόραση"
                    }
                  }, {
                    "_id": "58931d3be1875b6163592c8a",
                    "_msvalues": {
                      "pt_BR": "Espaço pronto para uso de notebook",
                      "en_US": "Laptop friendly workspace",
                      "de_DE": "Für Laptop geeigneter Workspace",
                      "es_ES": "Zona para trabajar con notebooks",
                      "sv_SE": "Laptop vänlig arbetsplats",
                      "pt_PT": "Espaço pronto para uso de notebook",
                      "el_GR": "Γραφείο",
                      "ru_RU": ""
                    }
                  }, {
                    "_id": "58931d5be1875b6163592c8d",
                    "_msvalues": {
                      "pt_BR": "Aquecimento Central",
                      "en_US": "Heating",
                      "es_ES": "Calefacción",
                      "sv_SE": "Uppvärning",
                      "pt_PT": "Aquecimento Central",
                      "el_GR": "Θέρμανση"
                    }
                  }, {
                    "_id": "58931d6fe1875b6163592c8f",
                    "_msvalues": {
                      "pt_BR": "Entrada Privativa",
                      "en_US": "Private Entrance",
                      "es_ES": "Entrada Privada",
                      "sv_SE": "Privat entre",
                      "pt_PT": "Entrada Privada",
                      "el_GR": "Ιδιωτική είσοδος"
                    }
                  }, {
                    "_id": "5aded91022261d4730423b2a",
                    "_msvalues": {
                      "pt_BR": "Garagem",
                      "en_US": "Garage",
                      "de_DE": "Garage",
                      "es_ES": "Garaje",
                      "sv_SE": "Garage",
                      "el_GR": "Γκαράζ"
                    }
                  }, {
                    "_id": "5af17a33c62b27316d3b5579",
                    "_msvalues": {
                      "pt_BR": "Área",
                      "en_US": "Area",
                      "es_ES": "Área",
                      "sv_SE": "Storlek",
                      "pt_PT": "Área",
                      "el_GR": "Τετραγωνικά μέτρα"
                    }
                  }, {
                    "_id": "5b566029e930685fbb5c992b",
                    "_msvalues": {
                      "pt_BR": "Bidê",
                      "en_US": "Bidet",
                      "es_ES": "Bidé",
                      "sv_SE": "Bidet",
                      "pt_PT": "Bidê",
                      "el_GR": "Μπιντές"
                    }
                  }, {
                    "_id": "5b5660cbe930685fbb5c994c",
                    "_msvalues": {
                      "pt_BR": "Cozinha Completa",
                      "en_US": "Full Kitchen",
                      "de_DE": "Vollausgestattete Küche",
                      "es_ES": "Cocina Completa",
                      "sv_SE": "Komplett kök",
                      "pt_PT": "Cozinha Completa",
                      "el_GR": "Πλήρως εξοπλισμένη κουζίνα"
                    }
                  }, {
                    "_id": "5b566117e930685fbb5c9960",
                    "_msvalues": {
                      "pt_BR": "Ducha",
                      "en_US": "Shower Only",
                      "es_ES": "Ducha",
                      "sv_SE": "Endast dusch",
                      "pt_PT": "Ducha",
                      "el_GR": "Μόνο Ντους"
                    }
                  }, {
                    "_id": "5b5661eae930685fbb5c9986",
                    "_msvalues": {
                      "pt_BR": "Torradeira",
                      "en_US": "Toaster",
                      "de_DE": "Toaster",
                      "es_ES": "Tostadora",
                      "sv_SE": "Brödrost",
                      "pt_PT": "Torradeira",
                      "el_GR": "Τοστιέρα"
                    }
                  }, {
                    "_id": "5b566298e930685fbb5c99a2",
                    "_msvalues": {
                      "pt_BR": "Banheiro sem Chuveiro",
                      "en_US": "Separate Toilet Area",
                      "es_ES": "Cuarto de Baño Separado",
                      "sv_SE": "Separat toalett",
                      "pt_PT": "Banheiro sem Chuveiro",
                      "el_GR": "Ξεχωριστή τουαλέτα"
                    }
                  }, {
                    "_id": "5b5a0aaa2ea4e54ba6c9849e",
                    "_msvalues": {
                      "pt_BR": "Roupas de Cama",
                      "en_US": "Bed Linens",
                      "de_DE": "Bettwäsche",
                      "es_ES": "Ropas de Cama",
                      "sv_SE": "Sängkläder",
                      "pt_PT": "Roupas de Cama",
                      "el_GR": "Είδη Ιματισμού"
                    }
                  }, {
                    "_id": "5b5a24742ea4e54ba6c98aa0",
                    "_msvalues": {
                      "pt_BR": "Microondas",
                      "en_US": "Microwave",
                      "de_DE": "Mikrowelle",
                      "es_ES": "Microondas",
                      "sv_SE": "Mikrovågsugn",
                      "pt_PT": "Microondas",
                      "el_GR": "Φούρνος μικροκυμάτων"
                    }
                  }, {
                    "_id": "5b5a24c22ea4e54ba6c98aaf",
                    "_msvalues": {
                      "pt_BR": "Geladeira",
                      "en_US": "Refrigerator",
                      "de_DE": "Kühlschrank",
                      "es_ES": "Nevera",
                      "sv_SE": "Kyl",
                      "pt_PT": "Geladeira",
                      "el_GR": "Ψυγείο"
                    }
                  }, {
                    "_id": "5b5a375d2ea4e54ba6c98f35",
                    "_msvalues": {
                      "pt_BR": "Piscina Aquecida Privada",
                      "en_US": "Private Pool Heated",
                      "es_ES": "Pileta Climatizada Privada",
                      "sv_SE": "Privat pool uppvärmd",
                      "pt_PT": "Piscina Aquecida Privada",
                      "el_GR": "Ιδιωτική θερμαινόμενη πισίνα"
                    }
                  }, {
                    "_id": "5b5a37cc2ea4e54ba6c98f6a",
                    "_msvalues": {
                      "pt_BR": "Piscina não-aquecida Privada",
                      "en_US": "Private Pool Unheated",
                      "es_ES": "Pileta no-climatizada Privada",
                      "sv_SE": "Privat pool ouppvärmd",
                      "pt_PT": "Piscina não-aquecida Privada",
                      "el_GR": "Ιδιωτική πισίνα (μη θερμαινώμενη)"
                    }
                  }, {
                    "_id": "5b61be67042b4f5e0fd653ed",
                    "_msvalues": {
                      "pt_BR": "Cofre",
                      "en_US": "Safe",
                      "de_DE": "Safe",
                      "es_ES": "Cofre",
                      "sv_SE": "Kassaskåp",
                      "pt_PT": "Cofre",
                      "el_GR": "Χρηματοκιβώτιο"
                    }
                  }, {
                    "_id": "5bcfbfbe43f48a121c91fa97",
                    "_msvalues": {
                      "pt_BR": "Banheiro Compartilhado",
                      "en_US": "Shared Bathroom",
                      "de_DE": "Gemeinsames Badezimmer",
                      "es_ES": "Baño Compartido",
                      "sv_SE": "Delat Badrum",
                      "pt_PT": "Banheiro Compartilhado",
                      "el_GR": "Κοινόχρηστο Μπάνιο"
                    }
                  }, {
                    "_id": "5c670da10041e93d24aed78c",
                    "_msvalues": {
                      "pt_BR": "Sofá",
                      "en_US": "Sofa",
                      "es_ES": "Sofá",
                      "sv_SE": "Soffa",
                      "pt_PT": "Sofá",
                      "el_GR": "Καναπές"
                    }
                  }, {
                    "_id": "5c670ee90041e93d24aed7de",
                    "_msvalues": {
                      "pt_BR": "Papel Higiênico",
                      "en_US": "Toilet Paper",
                      "de_DE": "Toilettenpapier",
                      "es_ES": "Papel Higienico",
                      "sv_SE": "Toalettpapper",
                      "pt_PT": "Papel Higiênico",
                      "el_GR": "Χαρτί υγείας"
                    }
                  }, {
                    "_id": "5c670f2f0041e93d24aed7f9",
                    "_msvalues": {
                      "pt_BR": "Toalhas",
                      "en_US": "Towels",
                      "es_ES": "Las toallas",
                      "sv_SE": "Handdukar",
                      "pt_PT": "Toalhas",
                      "el_GR": "Πετσέτες"
                    }
                  }, {
                    "_id": "5c670f680041e93d24aed808",
                    "_msvalues": {
                      "pt_BR": "Forno",
                      "en_US": "Oven",
                      "de_DE": "Backofen",
                      "es_ES": "Horno",
                      "sv_SE": "Ugn",
                      "pt_PT": "Forno",
                      "el_GR": "Φούρνος"
                    }
                  }, {
                    "_id": "5c67106c0041e93d24aed846",
                    "_msvalues": {
                      "pt_BR": "Lixeiras",
                      "en_US": "Trash Cans",
                      "de_DE": "Abfalleimer",
                      "es_ES": "Botes de Basura",
                      "sv_SE": "Papperskorgar",
                      "pt_PT": "Lixeiras",
                      "el_GR": "Κάδοι σκουπιδιών"
                    }
                  }, {
                    "_id": "5c798b7cd5cec312f8a62295",
                    "_msvalues": {
                      "pt_BR": "Berço",
                      "en_US": "Baby crib",
                      "es_ES": "Cuna",
                      "sv_SE": "Babysäng",
                      "pt_PT": "Berço",
                      "el_GR": "Παρκοκρέβατο"
                    }
                  }, {
                    "_id": "5dd2952233c44e4a1ac41ac6",
                    "_msvalues": {
                      "pt_BR": "Louças e Talheres",
                      "en_US": "Dishes and Silverware",
                      "de_DE": "Geschirr und Besteck",
                      "sv_SE": "Tallrikar och bestick",
                      "pt_PT": "Louças e Talheres",
                      "el_GR": "Πιάτα και ασημικά"
                    }
                  }, {
                    "_id": "5dd2b0c318f1235ba2e4166b",
                    "_msvalues": {
                      "pt_BR": "Varanda",
                      "en_US": "Balcony",
                      "de_DE": "Balkon",
                      "sv_SE": "Balkong",
                      "pt_PT": "Varanda",
                      "el_GR": "Μπαλκόνι"
                    }
                  }, {
                    "_id": "5dd3f06b18f1235ba2e4562a",
                    "_msvalues": {
                      "pt_BR": "Água Quente",
                      "en_US": "Hot Water",
                      "de_DE": "Warmwasser",
                      "es_ES": "Agua Caliente",
                      "sv_SE": "Varmvatten",
                      "pt_PT": "Água Quente",
                      "el_GR": "Ζεστό νερό"
                    }
                  }, {
                    "_id": "5dd3f96f18f1235ba2e45804",
                    "_msvalues": {
                      "pt_BR": "Limpeza Antes do Check-out",
                      "en_US": "Cleaning Before Check-out",
                      "de_DE": "Reinigung vor Auszug",
                      "es_ES": "Limpieza Antes del Check-out",
                      "sv_SE": "Städning före utcheckning",
                      "pt_PT": "Limpeza Antes do Check-out",
                      "el_GR": "Καθαρισμός πριν το check-out"
                    }
                  }, {
                    "_id": "5dd3fc5333c44e4a1ac472ba",
                    "_msvalues": {
                      "pt_BR": "Berço Portátil",
                      "en_US": "Travel Crib",
                      "sv_SE": "Resesäng Barn",
                      "pt_PT": "Berço Portátil",
                      "el_GR": "Φορητό πάρκοκρεβατο"
                    }
                  }, {
                    "_id": "5dd831f2df0ef970305c034d",
                    "_msvalues": {
                      "pt_BR": "Detector de Fumaça",
                      "en_US": "Smoke Detector",
                      "sv_SE": "Rökvarnare",
                      "pt_PT": "Detector de Fumaça",
                      "el_GR": "Ανιχνευτής Καπνού"
                    }
                  }, {
                    "_id": "5dd8341616ebfe321496c025",
                    "_msvalues": {
                      "pt_BR": "Extintor de Incêndio",
                      "en_US": "Fire Extinguisher",
                      "sv_SE": "Brandsläckare",
                      "pt_PT": "Extintor de Incêndio",
                      "el_GR": "Πυροσβεστήρας"
                    }
                  }, {
                    "_id": "5ef23edc4af79610ab2a60e4",
                    "_msvalues": {
                      "pt_BR": "Sofá-Cama",
                      "en_US": "Sofa Bed",
                      "es_ES": "Sofá Cama",
                      "sv_SE": "Bäddsoffa",
                      "pt_PT": "Sofá-Cama",
                      "el_GR": "Καναπές κρεβάτι"
                    }
                  }, {
                    "_id": "5ef242e34af79610ab2a61bc",
                    "_msvalues": {
                      "pt_BR": "Piscina de Imersão",
                      "en_US": "Plunge Pool",
                      "es_ES": "Pileta Pequeña",
                      "sv_SE": "Avsvalkningspool",
                      "pt_PT": "Piscina de Imersão",
                      "el_GR": "Μικρή πισίνα"
                    }
                  }, {
                    "_id": "5ef244314af79610ab2a61e4",
                    "_msvalues": {
                      "pt_BR": "Piscina com Lado Raso",
                      "en_US": "Shallow End Pool",
                      "es_ES": "Pileta con Zona Poco Profunda",
                      "sv_SE": "Pool med grund del",
                      "pt_PT": "Piscina com Lado Raso",
                      "el_GR": "Ρηχή πισίνα"
                    }
                  }, {
                    "_id": "5ef2472479f27f154439157a",
                    "_msvalues": {
                      "pt_BR": "Guarda-roupa ou Armário",
                      "en_US": "Wardrobe/Closet",
                      "es_ES": "Armario",
                      "sv_SE": "Garderob",
                      "pt_PT": "Guarda-roupa ou Armário",
                      "el_GR": "Ντουλάπα"
                    }
                  }, {
                    "_id": "5ef249cd79f27f1544391630",
                    "_msvalues": {
                      "pt_BR": "Piscina com Vista",
                      "en_US": "Pool with a View",
                      "es_ES": "Pileta con Vista",
                      "sv_SE": "Pool med utsikt",
                      "pt_PT": "Piscina com Vista",
                      "el_GR": "Πισίνα με θέα"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc177",
                    "_msvalues": {
                      "pt_BR": "Recepção 24 horas",
                      "en_US": "24-hour front desk",
                      "es_ES": "Recepción 24 horas",
                      "sv_SE": "Reception 24 tim",
                      "pt_PT": "Recepção disponível 24 horas",
                      "el_GR": "24ώρη ρεσεψιόν"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc178",
                    "_msvalues": {
                      "pt_BR": "Ar condicionado",
                      "en_US": "Air conditioning",
                      "es_ES": "Aire acondicionado",
                      "sv_SE": "Luftkonditionering",
                      "pt_PT": "Ar condicionado",
                      "el_GR": "Κλιματιστικό"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc17f",
                    "_msvalues": {
                      "pt_BR": "Serviço de concierge",
                      "en_US": "Concierge desk",
                      "es_ES": "Servicio de conserjería",
                      "sv_SE": "Bemannad reception",
                      "pt_PT": "Serviço de concierge",
                      "el_GR": "Ρεσεψιόν"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc181",
                    "_msvalues": {
                      "pt_BR": "Elevador",
                      "en_US": "Elevator",
                      "es_ES": "Ascensor",
                      "sv_SE": "Hiss",
                      "pt_PT": "Elevador",
                      "el_GR": "Ανελκυστήρας"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc182",
                    "_msvalues": {
                      "pt_BR": "Academia (área comum)",
                      "en_US": "Fitness Center",
                      "es_ES": "Gimnasio (área común)",
                      "sv_SE": "Fitness center",
                      "pt_PT": "Centro de fitness",
                      "el_GR": "Γυμναστήριο"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc183",
                    "_msvalues": {
                      "pt_BR": "Check-in / Check-out expressos",
                      "en_US": "Express Check-in/Check-out",
                      "es_ES": "Registro de entrada y salida exprés",
                      "sv_SE": "Express In & Utcheckning",
                      "pt_PT": "Check-in / check-out expresso",
                      "el_GR": "Γρήγορο check-in / check-out"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc185",
                    "_msvalues": {
                      "pt_BR": "Salão de jogos",
                      "en_US": "Game room",
                      "es_ES": "Sala de juegos",
                      "sv_SE": "Spelrum",
                      "pt_PT": "Sala de jogos",
                      "el_GR": "Αίθουσα παιχνιδιών"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc187",
                    "_msvalues": {
                      "pt_BR": "Piscina aquecida (Compartilhada)",
                      "en_US": "Heated pool (Shared)",
                      "es_ES": "Pileta climatizada (Compartida)",
                      "sv_SE": "Uppvärmd pool",
                      "pt_PT": "Piscina aquecida (Compartilhada)",
                      "el_GR": "Heated pool"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc188",
                    "_msvalues": {
                      "pt_BR": "Serviço diário de limpeza",
                      "en_US": "Daily Housekeeping",
                      "es_ES": "Servicio diario de limpieza",
                      "sv_SE": "Daglig städning",
                      "pt_PT": "Serviço de limpeza diário",
                      "el_GR": "Καθημερινή καθαριότητα"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc189",
                    "_msvalues": {
                      "pt_BR": "Garagem",
                      "en_US": "Parking garage",
                      "es_ES": "Parking en un garaje",
                      "sv_SE": "Garage",
                      "pt_PT": "Garagem",
                      "el_GR": "Γκαράζ"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc18a",
                    "_msvalues": {
                      "pt_BR": "Piscina interna (Compartilhada)",
                      "en_US": "Indoor pool (Shared)",
                      "es_ES": "Pileta interior (Compartida)",
                      "sv_SE": "Inomhuspool",
                      "pt_PT": "Piscina interior (Compartilhada)",
                      "el_GR": "Εσωτερική πισίνα"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc18b",
                    "_msvalues": {
                      "pt_BR": "Entretenimento à noite",
                      "en_US": "Evening Entertainment",
                      "de_DE": "Abendunterhaltung",
                      "es_ES": "Entretenimiento nocturno",
                      "sv_SE": "Kvällsunderhållning",
                      "pt_PT": "Entretenimento nocturno",
                      "el_GR": "Βραδινή ψυχαγωγία"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc18d",
                    "_msvalues": {
                      "pt_BR": "Casa noturna / DJ",
                      "en_US": "Nightclub/DJ",
                      "es_ES": "Discoteca / DJ",
                      "sv_SE": "Nattklubb/DJ",
                      "pt_PT": "Discoteca / DJ",
                      "el_GR": "Νυχτερινό κέντρο διασκέδασης / DJ"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc18e",
                    "_msvalues": {
                      "pt_BR": "Piscina ao ar livre (Compartilhada)",
                      "en_US": "Outdoor pool (Shared)",
                      "de_DE": "Aussenpool",
                      "es_ES": "Piscina al aire libre (Compartida)",
                      "sv_SE": "Utomhuspool",
                      "pt_PT": "Piscina (Compartilhada)",
                      "el_GR": "Εξωτερική πισίνα"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc18f",
                    "_msvalues": {
                      "pt_BR": "Restaurante",
                      "en_US": "Restaurant",
                      "de_DE": "Restaurant",
                      "es_ES": "Restaurant",
                      "sv_SE": "Restaurang",
                      "pt_PT": "Restaurante",
                      "el_GR": "Εστιατόριο"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc190",
                    "_msvalues": {
                      "pt_BR": "Serviço de quarto",
                      "en_US": "Room service",
                      "es_ES": "Servicio a la habitación",
                      "sv_SE": "Room service",
                      "pt_PT": "Serviço de quartos",
                      "el_GR": "Υπηρεσία δωματίου"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc191",
                    "_msvalues": {
                      "pt_BR": "Cofre",
                      "en_US": "Safe",
                      "es_ES": "Caja fuerte",
                      "sv_SE": "Kassaskåp",
                      "pt_PT": "Cofre",
                      "el_GR": "Χριματοκιβώτιο"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc192",
                    "_msvalues": {
                      "pt_BR": "Sauna",
                      "en_US": "Sauna",
                      "es_ES": "Sauna",
                      "sv_SE": "Bastu",
                      "pt_PT": "Sauna",
                      "el_GR": "Σάουνα"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc195",
                    "_msvalues": {
                      "pt_BR": "Banho turco / Sauna a vapor",
                      "en_US": "Turkish/ Steam Bath",
                      "es_ES": "Baño turco",
                      "sv_SE": "Turkiskt bad/Ångbad",
                      "pt_PT": "Banho turco",
                      "el_GR": "Χαμάμ / ατμόλουτρο"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc196",
                    "_msvalues": {
                      "pt_BR": "Balcão de turismo",
                      "en_US": "Tour Desk",
                      "es_ES": "Información turística",
                      "sv_SE": "Utflyksreception",
                      "pt_PT": "Balcão de turismo",
                      "el_GR": "Οργάνωση εκδρομών"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc198",
                    "_msvalues": {
                      "pt_BR": "Serviço de manobrista",
                      "en_US": "Valet parking",
                      "es_ES": "Valet parking",
                      "sv_SE": "Betjänad parkering",
                      "pt_PT": "Estacionamento personalizado",
                      "el_GR": "Υπηρεσία στάθμευσης οχημάτων"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc199",
                    "_msvalues": {
                      "pt_BR": "Máquina de venda automática (lanches)",
                      "en_US": "Vending Machine (snacks)",
                      "es_ES": "Máquina expendedora (aperitivos)",
                      "sv_SE": "Varuautomat (snacks)",
                      "pt_PT": "Máquina de venda automática (snacks)",
                      "el_GR": "Μηχάνημα αυτόματης πώλησης (σνακ)"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc19a",
                    "_msvalues": {
                      "pt_BR": "Estacionamento acessível",
                      "en_US": "Accessible parking",
                      "es_ES": "Parking adaptado para personas de movilidad reducida",
                      "sv_SE": "Tillgänglig parkering",
                      "pt_PT": "Estacionamento acessível",
                      "el_GR": "Προσβάσιμο parking"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc19b",
                    "_msvalues": {
                      "pt_BR": "Lojas (na propriedade)",
                      "en_US": "Shops (on site)",
                      "es_ES": "Tiendas (en el establecimiento)",
                      "sv_SE": "Affärer (på plats)",
                      "pt_PT": "Lojas (no local)",
                      "el_GR": "Καταστήματα (στις εγκαταστάσεις)"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc19d",
                    "_msvalues": {
                      "pt_BR": "Bar",
                      "en_US": "Bar",
                      "es_ES": "Bar",
                      "sv_SE": "Bar",
                      "pt_PT": "Bar",
                      "el_GR": "Μπαρ"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc19f",
                    "_msvalues": {
                      "pt_BR": "Café da manhã incluso",
                      "en_US": "Breakfast (free)",
                      "es_ES": "Desayuno (incluso)",
                      "sv_SE": "Frukost (gratis)",
                      "pt_PT": "Pequeno-almoço incluso",
                      "el_GR": "Πρωινό"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a0",
                    "_msvalues": {
                      "pt_BR": "Estacionamento de rua (pago)",
                      "en_US": "Street parking (charged)",
                      "es_ES": "Parking en la calle (cobrado)",
                      "sv_SE": "Gatuparkering (betald)",
                      "pt_PT": "Estacionamento de rua (cobrado)",
                      "el_GR": "Χώρος στάθμευσης (με χρέωση)"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a1",
                    "_msvalues": {
                      "pt_BR": "Parquinho infantil",
                      "en_US": "Children's playground",
                      "de_DE": "Kinderspielplatz",
                      "es_ES": "Zona de juegos infantiles",
                      "sv_SE": "Lekplats",
                      "pt_PT": "Parque infantil",
                      "el_GR": "Παιδική χαρά"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a2",
                    "_msvalues": {
                      "pt_BR": "Armários individuais",
                      "en_US": "Lockers",
                      "de_DE": "Spind / Lockers",
                      "es_ES": "Lockers",
                      "sv_SE": "Skåp",
                      "pt_PT": "Cacifos",
                      "el_GR": " Αποθηκευτικός Χώρος Αποσκευών"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a3",
                    "_msvalues": {
                      "pt_BR": "Quartos para não fumantes",
                      "en_US": "Non-smoking rooms",
                      "de_DE": "Nichtraucherräume",
                      "es_ES": "Habitaciones para no fumadores",
                      "sv_SE": "Rökfria rum",
                      "pt_PT": "Quartos para não fumadores",
                      "el_GR": "Δωμάτια μη καπνιζόντων"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a4",
                    "_msvalues": {
                      "pt_BR": "Aluguel de bicicletas",
                      "en_US": "Bicycle rentals",
                      "es_ES": "Alquiler de bicicletas",
                      "sv_SE": "Cykeluthyrning",
                      "pt_PT": "Aluguer de bicicleta",
                      "el_GR": "Ενικοίαση ποδηλάτων"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a5",
                    "_msvalues": {
                      "pt_BR": "Business center",
                      "en_US": "Business center",
                      "es_ES": "Centro de negocios",
                      "sv_SE": "Företagscenter",
                      "pt_PT": "Centro de negócios",
                      "el_GR": "Business center"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a6",
                    "_msvalues": {
                      "pt_BR": "Estacionamento seguro (pago)",
                      "en_US": "Secured parking (charged)",
                      "es_ES": "Parking vigilado (cobrado)",
                      "sv_SE": "Säker parkering (betald)",
                      "pt_PT": "Estacionamento vigiado (pago)",
                      "el_GR": "Ασφαλής χώρος στάθμευσης (με χρέωση)"
                    }
                  }, {
                    "_id": "5ae18b0122261d76530cc1a7",
                    "_msvalues": {
                      "pt_BR": "Quadra de tênis",
                      "en_US": "Tennis court",
                      "es_ES": "Cancha de tenis",
                      "sv_SE": "Tennisbana",
                      "pt_PT": "Campo de Ténis",
                      "el_GR": "Γήπεδο τέννις"
                    }
                  }, {
                    "_id": "5c799628d5cec312f8a623c9",
                    "_msvalues": {
                      "pt_BR": "Capela / Santuário",
                      "en_US": "Chapel/shrine",
                      "es_ES": "Capilla / Santuario",
                      "sv_SE": "Kapell/Kyrka",
                      "pt_PT": "Capela / Santuário",
                      "el_GR": "Εκκλησάκι"
                    }
                  }, {
                    "_id": "5c799724d5cec312f8a623e0",
                    "_msvalues": {
                      "pt_BR": "Salão / área de TV",
                      "en_US": "Shared lounge/TV area",
                      "de_DE": "Gemeinschaftslounge /TV Zimmer",
                      "es_ES": "Sala de estar compartida / TV",
                      "sv_SE": "Tv rum (offentligt/delat)",
                      "pt_PT": "Salão / área de TV",
                      "el_GR": "Κοινόχρηστο σαλόνι / τηλεόραση"
                    }
                  }, {
                    "_id": "5dd29e0333c44e4a1ac41c20",
                    "_msvalues": {
                      "pt_BR": "Estacionamento de rua (gratuito)",
                      "en_US": "Free Street Parking",
                      "de_DE": "Kostenloses Parken (auf der Straße)",
                      "es_ES": "Parking en la calle (gratuito)",
                      "sv_SE": "Gratis gatuparkering",
                      "pt_PT": "Estacionamento de rua (gratuito)",
                      "el_GR": "Δωρεάν χώρος στάθμευσης στο δρόμο"
                    }
                  }, {
                    "_id": "5dd2a5c433c44e4a1ac41de0",
                    "_msvalues": {
                      "pt_BR": "Jacuzzi (uso comum)",
                      "en_US": "Hot tub (social use)",
                      "es_ES": "Jacuzzi (uso común)",
                      "sv_SE": "Jacuzzi (offentlig/delad)",
                      "pt_PT": "Jacuzzi (uso comum)",
                      "el_GR": "Υδρομασάζ (κοινόχρηστο)"
                    }
                  }, {
                    "_id": "5dd2b13f18f1235ba2e4167e",
                    "_msvalues": {
                      "pt_BR": "Jardim",
                      "en_US": "Garden",
                      "de_DE": "Garten",
                      "es_ES": "Jardín",
                      "sv_SE": "Trädgård",
                      "pt_PT": "Jardim",
                      "el_GR": "Κήπος"
                    }
                  }, {
                    "_id": "5dd3f7c333c44e4a1ac4720f",
                    "_msvalues": {
                      "pt_BR": "Permite estadias acima de 28 noites",
                      "en_US": "Long term stays allowed (28 nights or +)",
                      "es_ES": "Permite estadías con más de 28 noches",
                      "sv_SE": "Långtids hyra tillåtet (28 nätter eller +)",
                      "pt_PT": "Permite estadias acima de 28 noites",
                      "el_GR": "Επιτρέπονται διαμονές μεγάλης διάρκειας (28 διανυκτερεύσεις ή +)"
                    }
                  }, {
                    "_id": "5e84c8609076621391fad0b6",
                    "_msvalues": {
                      "pt_BR": "Estacionamento",
                      "en_US": "Parking",
                      "es_ES": "Aparcamiento",
                      "sv_SE": "Parkering",
                      "pt_PT": "Estacionamento",
                      "el_GR": "Χώρος στάθμευσης"
                    }
                  }, {
                    "_id": "5e822d444028a8c5f197b3c2",
                    "_msvalues": {
                      "pt_BR": "Internet Wi-Fi",
                      "en_US": "Wi-Fi Internet",
                      "es_ES": "Internet Wi-Fi",
                      "sv_SE": "WIFI Internet",
                      "pt_PT": "Internet Wi-Fi",
                      "el_GR": "Wi-Fi Internet"
                    }
                  }, {
                    "_id": "5f3807486d5c3b6d2d24c9a4",
                    "_msvalues": {
                      "pt_BR": "Os funcionários seguem todos os protocolos de segurança definidos pelas autoridades locais",
                      "en_US": "Staff follow all safety protocols as directed by local authorities",
                      "es_ES": "El personal cumple con todos los protocolos de seguridad establecidos por las autoridades locales",
                      "sv_SE": "Personalen följer lokala rådande säkerhetsföreskrifter",
                      "pt_PT": "Os funcionários seguem todos os protocolos de segurança definidos pelas autoridades locais"
                    }
                  }],
                  "countries": [{
                    "val": "BR",
                    "_msname": {
                      "pt_BR": "Brasil",
                      "en_US": "Brazil",
                      "de_DE": "Brasilien",
                      "es_ES": "Brasil",
                      "ru_RU": "Бразилия",
                      "sv_SE": "Brasilien",
                      "it_IT": "Brasile",
                      "fr_FR": "Brésil",
                      "pt_PT": "Brasil"
                    },
                    "selected": false
                  }]
                }
              });
            }, appError);
          </script>
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