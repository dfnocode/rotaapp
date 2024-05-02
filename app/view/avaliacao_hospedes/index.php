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
          <div class="col-lg-2 col-md-2 col-xs-12 scroll padding-top-10 ps">
            <div id="left-menu-block">
              <div class="panel-body">
                <div class="media">
                  <div class="media-body">
                    <p class="lead text-center text-muted" style="margin: 0;">
                      <strong>Reviews</strong>
                      <br> Gerencie as avaliações dos seus anúncios
                      <br>
                    </p>
                  </div>
                </div>
                <hr>
                <form action="/i/reviews/0" id="filterform" class="ajax_form">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-home"></i>
                      </span>
                      <div class="dropdown bootstrap-select show-tick input-group-btn form-control apartment bs3 bs3-has-addon"><select class="form-control apartment selectpicker" name="apartment" data-apartmentid="" title="Propriedade">
                          <option class="bs-title-option" value=""></option>
                          <option class="bs-title-option" value=""></option>
                          <option value="">Não Selecionado</option>
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
                        </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Propriedade">
                          <div class="filter-option">
                            <div class="filter-option-inner">
                              <div class="filter-option-inner-inner">Propriedade</div>
                            </div>
                          </div><span class="bs-caret"><span class="caret"></span></span>
                          <div class="filter-expand">Propriedade</div>
                        </button>
                        <div class="dropdown-menu open" style="max-height: 843px; overflow: hidden; min-height: 124px;">
                          <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-1" aria-autocomplete="list"></div>
                          <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1" style="max-height: 793px; overflow-y: auto; min-height: 74px;">
                            <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                              <li><a role="option" class="dropdown-item bs-title-option" id="bs-select-1-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"></span></a></li>
                              <li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-1"><span class="text">Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas</span></li>
                              <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-1-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA02G | PIAZZA</span></a></li>
                              <li class="divider optgroup-1div"></li>
                              <li class="dropdown-header optgroup-2"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, GO</span></li>
                              <li class="optgroup-2"><a role="option" class="dropdown-item opt" id="bs-select-1-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA04G | RIVIERA PARK</span></a></li>
                              <li class="divider optgroup-2div"></li>
                              <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH39E | LACQUA POOL-2</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HH01F | LACQUA POOL-5</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NS01F | LACQUA POOL</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QM02F | LACQUA POOL-3</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NH04F | LACQUA POOL-4</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH14E | LD1 201</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PI01E | LD1 57</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ZP04F | LD1 -222</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-18" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">GU01G | LD1 - 068</span></a></li>
                              <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-1-19" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QZ01F | LD1 51</span></a></li>
                              <li class="divider optgroup-3div"></li>
                              <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goias, Caldas Novas, J Jeriquara</span></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-1-22" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">DX01F | AF 704 B</span></a></li>
                              <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-1-23" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PL01E | AF1003C</span></a></li>
                              <li class="divider optgroup-4div"></li>
                              <li class="dropdown-header optgroup-5"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-1-26" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">XZ02F | RI 06</span></a></li>
                              <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-1-27" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EY03F | RI 313</span></a></li>
                              <li class="divider optgroup-5div"></li>
                              <li class="dropdown-header optgroup-6"><span class="text">Brasil, GO, CALDAS NOVAS, Turista II</span></li>
                              <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-1-30" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JJ01G | sol das calldas poll</span></a></li>
                              <li class="divider optgroup-6div"></li>
                              <li class="dropdown-header optgroup-7"><span class="text">Brasil, Goiás, CALDAS NOVAS, Bandeirantes</span></li>
                              <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-1-33" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">FZ02G | ECOL. G-605 SUITE</span></a></li>
                              <li class="divider optgroup-7div"></li>
                              <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-1-36" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">OA01F | GD - 416</span></a></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-1-37" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NM02F | GD 526</span></a></li>
                              <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-1-38" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">AY01G | FLAT 953</span></a></li>
                              <li class="divider optgroup-8div"></li>
                              <li class="dropdown-header optgroup-9"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                              <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-1-41" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QS03E | HS 746</span></a></li>
                              <li class="divider optgroup-9div"></li>
                              <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-1-44" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VU02E | LQ 509 C</span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-1-45" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JH01G | LQ 402 B</span></a></li>
                              <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-1-46" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NH01F | LQ 406 B</span></a></li>
                              <li class="divider optgroup-10div"></li>
                              <li class="dropdown-header optgroup-11"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-1-49" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HF01F | LD5 76</span></a></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-1-50" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">FZ01G | LD2 - 152</span></a></li>
                              <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-1-51" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">IF01G | LD2 - 194</span></a></li>
                              <li class="divider optgroup-11div"></li>
                              <li class="dropdown-header optgroup-12"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                              <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-1-54" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS08G | DRE 507</span></a></li>
                              <li class="divider optgroup-12div"></li>
                              <li class="dropdown-header optgroup-13"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-1-57" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EI01F | EV 106</span></a></li>
                              <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-1-58" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HK01F | AS 805 C</span></a></li>
                              <li class="divider optgroup-13div"></li>
                              <li class="dropdown-header optgroup-14"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-1-61" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HH02F | LD4-209</span></a></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-1-62" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS02G | LD4 - 119</span></a></li>
                              <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-1-63" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TY02F | LD 322/324</span></a></li>
                              <li class="divider optgroup-14div"></li>
                              <li class="dropdown-header optgroup-15"><span class="text">Brasil, Goiás, Caldas Novas, Bandeirantes</span></li>
                              <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-1-66" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">WP02F | ECOL. G-605 FLAT</span></a></li>
                              <li class="divider optgroup-15div"></li>
                              <li class="dropdown-header optgroup-16"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                              <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-1-69" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT02F | VR - 402 A</span></a></li>
                              <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-1-70" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT03F | VR - 707 A</span></a></li>
                              <li class="divider optgroup-16div"></li>
                              <li class="dropdown-header optgroup-17"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                              <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-1-73" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ZP02F | VT - 101 A</span></a></li>
                              <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-1-74" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KL02G | VT 305 B</span></a></li>
                              <li class="divider optgroup-17div"></li>
                              <li class="dropdown-header optgroup-18"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                              <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-1-77" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VO02F | Millennium Thermas Residence 602 A</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input class="form-control" type="text" id="client" placeholder="Hóspede" data-clientid="" autocomplete="off" data-validateattr="clientid">
                    <input type="hidden" name="client" value="">
                  </div>
                  <hr>
                  <div class="form-group">
                    <label>Classificação Geral da experiência</label>
                    <div class="dyn-rating big" style="background-position: -90px 0px;"></div>
                    <input type="hidden" name="rating" value="0">
                  </div>
                  <hr>
                  <div class="form-group">
                    <a class="btn btn-default" href="/i/reviews/0">
                      Reajustar
                    </a>
                    <button type="submit" class="btn btn-info pull-right">
                      <i class="fa fa-refresh"></i> Atualizar
                    </button>
                  </div>
                </form>
                <hr>

                <div class="btn btn-success" id="review_add_button">
                  <i class="indicator fa fa-plus"></i>
                </div>
              </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <div class="col-lg-10 col-md-10 col-xs-12 scroll padding-top-10 ps ps--active-y">

            <legend>Avaliações de hóspedes</legend>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5dbb173241b8e700115ff206" target="_blank">LUCAS SOARES FERREIRA</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/VU02E/reviews" target="_blank">
                                <span class="label label-info">VU02E (LQ 509 C)</span>
                              </a>
                              <span class="label label-info">30 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fc5311821c3da2ff4027984">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f57949605c5004b2d5b96f5" target="_blank">Brunna Deborah Oliveira Barbosa Deborah</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/FZ01G/reviews" target="_blank">
                                <span class="label label-info">FZ01G (LD2 - 152)</span>
                              </a>
                              <span class="label label-info">26 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fc0103f54ed5aba56aef88a">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f6252a2c987f5725eaa9497" target="_blank">ISRAEL TURISMO</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/HF01F/reviews" target="_blank">
                                <span class="label label-info">HF01F (LD5 76)</span>
                              </a>
                              <span class="label label-info">26 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fbfe5ac54ed5a4a08aef25e">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5e2628f2b235420011f06a88" target="_blank">Matheus Perreira dos santos</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/PH14E/reviews" target="_blank">
                                <span class="label label-info">PH14E (LD1 201)</span>
                              </a>
                              <span class="label label-info">24 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fbdc86e0bca5e614da7c05f">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5faa9fe7c26cc32c6c7a6e5c" target="_blank">DÉBORA GONÇALVES DOS SANTOS RECIFE ..</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/NM02F/reviews" target="_blank">
                                <span class="label label-info">NM02F (GD 526)</span>
                              </a>
                              <span class="label label-info">19 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fb6bc00bb2908d73f7c777e">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5d8d0d00acefda0010506980" target="_blank">Bruna Paula Corrêa Rodrigues Aragão .</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/AY01G/reviews" target="_blank">
                                <span class="label label-info">AY01G (FLAT 953)</span>
                              </a>
                              <span class="label label-info">18 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fb52fa6685c0e33f20a48e7">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f6252a2c987f5725eaa9497" target="_blank">ISRAEL TURISMO</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/PI01E/reviews" target="_blank">
                                <span class="label label-info">PI01E (LD1 57)</span>
                              </a>
                              <span class="label label-info">16 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fb2ad918b4e52328260ffdf">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5e204e9487768a0010659dab" target="_blank">anna claudia vieira da silva</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/TY02F/reviews" target="_blank">
                                <span class="label label-info">TY02F (LD 322/324)</span>
                              </a>
                              <span class="label label-info">12 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fad66d804f38a8f2c816493">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5fa0c3d66478d4794e698ec8" target="_blank">Helio Peres de Alcantara</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/QS03E/reviews" target="_blank">
                                <span class="label label-info">QS03E (HS 746)</span>
                              </a>
                              <span class="label label-info">09 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa9653df0ef98cfd2ad4f83">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f9984782923d340256c82a2" target="_blank">Marcos Fernando de Sousa ..</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/HH02F/reviews" target="_blank">
                                <span class="label label-info">HH02F (LD4-209)</span>
                              </a>
                              <span class="label label-info">07 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa6d861f0ef9804d8ace482">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5fa18e48eba330a523e422d9" target="_blank">CELIA FERNANDES DA SILVa</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/QS03E/reviews" target="_blank">
                                <span class="label label-info">QS03E (HS 746)</span>
                              </a>
                              <span class="label label-info">07 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa6cd08f0ef9831a0ace2e3">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f724de083cf07106781b09e" target="_blank">Denise Santos Silveira Miranda .</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/HF01F/reviews" target="_blank">
                                <span class="label label-info">HF01F (LD5 76)</span>
                              </a>
                              <span class="label label-info">06 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa5de2cf0ef98d514acb9be">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f83be266e7d787b6461a0cc" target="_blank">Tania Cristina de Oliveira Soares</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/PH14E/reviews" target="_blank">
                                <span class="label label-info">PH14E (LD1 201)</span>
                              </a>
                              <span class="label label-info">06 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa51c55e3b492060e6dbaea">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f99b6852923d387a76c8ca3" target="_blank">UELTON NUMES PEREIRA .</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/NM02F/reviews" target="_blank">
                                <span class="label label-info">NM02F (GD 526)</span>
                              </a>
                              <span class="label label-info">03 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa1b31aeba3303399e42779">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default" style="margin-bottom:5px">
              <div class="panel-body">
                <div class="media">
                  <div class="media-left">

                    <span class="label label-blue">Novo</span>
                  </div>
                  <div class="media-body">
                    <div class="row">
                      <div class="col-xs-9">
                        <div class="row">
                          <div class="col-sm-3">
                            <p>
                              <a href="/i/account-overview/5f9ac3714178ce8762a4d14c" target="_blank">Luciano Santana de Souza .</a>
                            </p>
                          </div>
                          <div class="col-sm-4">
                            <p>
                              <a href="/i/apartment/EY03F/reviews" target="_blank">
                                <span class="label label-info">EY03F (RI 313)</span>
                              </a>
                              <span class="label label-info">02 nov 2020</span>
                              <span class="label label-info"></span>
                            </p>
                          </div>
                          <div class="col-sm-3">
                            <p>


                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                              <span class="text-warning"><i class="fa fa-star-o"></i></span>
                            </p>
                          </div>
                          <div class="col-sm-2">
                            <p>
                              <a href="" target="_blank"></a>
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-3">
                        <div class="btn-group pull-right" data-reviewid="5fa037656478d4878c697c19">

                          <div class="btn btn-sm btn-default showReviewText"><i class="fa fa-id-card-o"></i> Mostrar</div>

                          <div class="btn btn-sm btn-default chReview"><i class="fa fa-pencil"></i> Alterar</div>

                          <div class="btn btn-sm btn-default chReviewStatus"><i class="fa fa-info-circle"></i> Status</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <script>
              requirejs(["views/reviews"], function(reviews) {
                reviews({});
              });
            </script>
            <nav class="text-center">
              <ul class="pagination">
                <li class="disabled"><a>279 total</a></li>
              </ul>
              <ul class="pagination">
                <li class="hidden">
                  <a href="#">◄</a>
                </li>
                <li class="active"><a href="/i/reviews/0">1</a></li>
                <li><a href="/i/reviews/1">2</a></li>
                <li><a href="/i/reviews/2">3</a></li>
                <li><a href="/i/reviews/3">4</a></li>
                <li><a href="/i/reviews/4">5</a></li>
                <li class="hidden-xs"><a href="/i/reviews/5">6</a></li>
                <li><a href="/i/reviews/17">...</a></li>
                <li><a href="/i/reviews/18">19</a></li>
                <li>
                  <a href="/i/reviews/1">►</a>
                </li>
              </ul>
            </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1035px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 910px;"></div>
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