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
                    <strong>Balanço de Proprietários</strong>
                    <br> Reservas &amp; Despesas
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
&amp;apart=5f970a857dcaf763e1a87cb2
&amp;rel=apt
" style="line-height: 2.5;">
                          Extratos de Contas
                        </a>
                      </li>
                      <li class="active">
                        <a href="#" style="line-height: 2.5;">Balanço de Proprietários</a>
                      </li>
                      <li>
                        <a href="/i/bookings
?from=
&amp;to=
&amp;dateof=_dtcheckIn
&amp;apartment[]=5f970a857dcaf763e1a87cb2
" style="line-height: 2.5;">
                          Achar Reserva
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr>
              <!--SEARCH FORM-->
              <form id="filterform" class="ajax_form" novalidate="true" role="form">
                <div class="form-group">

                  <a class="btn btn-success dropdown-toggle" style="width: 100%;" data-toggle="dropdown" href="#">
                    Nova Transação
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="btn-new-accounting" data-type="c" data-resptype="_b_agency" data-products_accounting="1" href="#">Recebimento</a></li>
                    <li><a class="btn-new-accounting" data-type="d" data-resptype="_b_agency" data-products_accounting="1" href="#">Pagamento</a></li>
                    <hr>
                    <li><a id="btn-new-internal-transfer" data-type="internal-transfer" data-products_accounting="1" href="#">Transferência</a></li>
                    <hr>
                    <li><a id="btn-new-owner-transaction" data-type="d" data-products_accounting="1" href="#">Owner Transaction</a></li>
                  </ul>
                </div>
                <hr>
                <div class="input-daterange row" data-validate="daterange">
                  <div class="col-lg-6 form-group has-feedback">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control date from" placeholder="De" autocomplete="off">
                      <input type="hidden" name="from">
                    </div>
                  </div>
                  <div class="col-lg-6 form-group has-feedback">
                    <div class="input-group">
                      <span class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </span>
                      <input type="text" class="form-control date to" placeholder="Até" autocomplete="off">
                      <input type="hidden" name="to">
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-user"></i>
                    </span>
                    <div class="dropdown bootstrap-select show-tick input-group-btn form-control landlord bs3 bs3-has-addon"><select class="form-control landlord selectpicker" name="landlord" data-ownerid="" title="Proprietário">
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
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-34" aria-haspopup="listbox" aria-expanded="false" title="Proprietário">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">Proprietário</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                        <div class="filter-expand">Proprietário</div>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 769px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-34" aria-autocomplete="list"></div>
                        <div class="inner open" role="listbox" id="bs-select-34" tabindex="-1" style="max-height: 719px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li><a role="option" class="dropdown-item bs-title-option" id="bs-select-34-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-2" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Cleyton Mendonça</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-3" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARTINHO APARECIDO GALLO</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EBENEZER FARIA ALVES</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-5" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JOÃO PEGORARO</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-6" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">LUIZ TAMIYO NAGATA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-7" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">THIAGO NEVES GOMES DAMACENO</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-8" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VERÔNICA VILAUBA NOGUEIRA DUTRA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-9" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA DA CONCEIÇÃO CALDAS</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Normando Munhoz</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA SALETE ARAUJO FERREIRA .</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PAULO JANDER DE SOUSA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">José Carlos Miranda Torrejais .</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Fernando de Carvalho sobrinho .</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">MARIA BARBOSA DE MENEZES</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Wilton Silva Neto</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SIDNEI ROBERTO DE CARVALHO SILVA</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-18" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">admin</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-19" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Jose Nildo Ferreira De Siqueira</span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-34-20" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">SUELEN CARVALHO DA SILVA</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group has-feedback">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="fa fa-home"></i>
                    </span>
                    <div class="dropdown bootstrap-select show-tick input-group-btn form-control apartment bs3 bs3-has-addon"><select class="form-control apartment selectpicker" name="apartment" data-apartmentid="5f970a857dcaf763e1a87cb2" title="Propriedade" required="">
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
                      </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-35" aria-haspopup="listbox" aria-expanded="false" title="KA04G | RIVIERA PARK">
                        <div class="filter-option">
                          <div class="filter-option-inner">
                            <div class="filter-option-inner-inner">KA04G | RIVIERA PARK</div>
                          </div>
                        </div><span class="bs-caret"><span class="caret"></span></span>
                        <div class="filter-expand">KA04G | RIVIERA PARK</div>
                      </button>
                      <div class="dropdown-menu open" style="max-height: 724px; overflow: hidden; min-height: 124px;">
                        <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-35" aria-autocomplete="list" aria-activedescendant="bs-select-35-7"></div>
                        <div class="inner open" role="listbox" id="bs-select-35" tabindex="-1" style="max-height: 674px; overflow-y: auto; min-height: 74px;">
                          <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                            <li><a role="option" class="dropdown-item bs-title-option" id="bs-select-35-0" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"></span></a></li>
                            <li><a role="option" class="dropdown-item" id="bs-select-35-1" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">Não Selecionado</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-1"><span class="text">Brasil, GOIÁS, CLADAS NOVAS, Solar de Caldas</span></li>
                            <li class="optgroup-1"><a role="option" class="dropdown-item opt" id="bs-select-35-4" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA02G | PIAZZA</span></a></li>
                            <li class="divider optgroup-1div"></li>
                            <li class="dropdown-header optgroup-2"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, GO</span></li>
                            <li class="optgroup-2 selected active"><a role="option" class="dropdown-item opt active selected" id="bs-select-35-7" tabindex="0" aria-setsize="42" aria-posinset="4" aria-selected="true"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KA04G | RIVIERA PARK</span></a></li>
                            <li class="divider optgroup-2div"></li>
                            <li class="dropdown-header optgroup-3"><span class="text">Brasil, Goias, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-10" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH39E | LACQUA POOL-2</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-11" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HH01F | LACQUA POOL-5</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-12" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NS01F | LACQUA POOL</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-13" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QM02F | LACQUA POOL-3</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-14" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NH04F | LACQUA POOL-4</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-15" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PH14E | LD1 201</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-16" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PI01E | LD1 57</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-17" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ZP04F | LD1 -222</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-18" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">GU01G | LD1 - 068</span></a></li>
                            <li class="optgroup-3"><a role="option" class="dropdown-item opt" id="bs-select-35-19" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QZ01F | LD1 51</span></a></li>
                            <li class="divider optgroup-3div"></li>
                            <li class="dropdown-header optgroup-4"><span class="text">Brasil, Goias, Caldas Novas, J Jeriquara</span></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-35-22" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">DX01F | AF 704 B</span></a></li>
                            <li class="optgroup-4"><a role="option" class="dropdown-item opt" id="bs-select-35-23" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">PL01E | AF1003C</span></a></li>
                            <li class="divider optgroup-4div"></li>
                            <li class="dropdown-header optgroup-5"><span class="text">Brasil, Go - Goias, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-35-26" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">XZ02F | RI 06</span></a></li>
                            <li class="optgroup-5"><a role="option" class="dropdown-item opt" id="bs-select-35-27" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EY03F | RI 313</span></a></li>
                            <li class="divider optgroup-5div"></li>
                            <li class="dropdown-header optgroup-6"><span class="text">Brasil, GO, CALDAS NOVAS, Turista II</span></li>
                            <li class="optgroup-6"><a role="option" class="dropdown-item opt" id="bs-select-35-30" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JJ01G | sol das calldas poll</span></a></li>
                            <li class="divider optgroup-6div"></li>
                            <li class="dropdown-header optgroup-7"><span class="text">Brasil, Goiás, CALDAS NOVAS, Bandeirantes</span></li>
                            <li class="optgroup-7"><a role="option" class="dropdown-item opt" id="bs-select-35-33" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">FZ02G | ECOL. G-605 SUITE</span></a></li>
                            <li class="divider optgroup-7div"></li>
                            <li class="dropdown-header optgroup-8"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Jardim Belvedere</span></li>
                            <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-35-36" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">OA01F | GD - 416</span></a></li>
                            <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-35-37" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NM02F | GD 526</span></a></li>
                            <li class="optgroup-8"><a role="option" class="dropdown-item opt" id="bs-select-35-38" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">AY01G | FLAT 953</span></a></li>
                            <li class="divider optgroup-8div"></li>
                            <li class="dropdown-header optgroup-9"><span class="text">Brasil, Goias, Caldas Novas, Do Turista</span></li>
                            <li class="optgroup-9"><a role="option" class="dropdown-item opt" id="bs-select-35-41" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">QS03E | HS 746</span></a></li>
                            <li class="divider optgroup-9div"></li>
                            <li class="dropdown-header optgroup-10"><span class="text">Brasil, GOIÁS, Caldas Novas, Lagoa Quente</span></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-35-44" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VU02E | LQ 509 C</span></a></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-35-45" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">JH01G | LQ 402 B</span></a></li>
                            <li class="optgroup-10"><a role="option" class="dropdown-item opt" id="bs-select-35-46" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">NH01F | LQ 406 B</span></a></li>
                            <li class="divider optgroup-10div"></li>
                            <li class="dropdown-header optgroup-11"><span class="text">Brasil, Goiás, Caldas Novas, Chácara Roma</span></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-35-49" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HF01F | LD5 76</span></a></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-35-50" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">FZ01G | LD2 - 152</span></a></li>
                            <li class="optgroup-11"><a role="option" class="dropdown-item opt" id="bs-select-35-51" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">IF01G | LD2 - 194</span></a></li>
                            <li class="divider optgroup-11div"></li>
                            <li class="dropdown-header optgroup-12"><span class="text">Brasil, GOIÁS, Caldas Novas, Solar de Caldas</span></li>
                            <li class="optgroup-12"><a role="option" class="dropdown-item opt" id="bs-select-35-54" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS08G | DRE 507</span></a></li>
                            <li class="divider optgroup-12div"></li>
                            <li class="dropdown-header optgroup-13"><span class="text">Brasil, Goias, Caldas Novas, Turista 1</span></li>
                            <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-35-57" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">EI01F | EV 106</span></a></li>
                            <li class="optgroup-13"><a role="option" class="dropdown-item opt" id="bs-select-35-58" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HK01F | AS 805 C</span></a></li>
                            <li class="divider optgroup-13div"></li>
                            <li class="dropdown-header optgroup-14"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, Chácara Roma</span></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-35-61" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">HH02F | LD4-209</span></a></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-35-62" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KS02G | LD4 - 119</span></a></li>
                            <li class="optgroup-14"><a role="option" class="dropdown-item opt" id="bs-select-35-63" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TY02F | LD 322/324</span></a></li>
                            <li class="divider optgroup-14div"></li>
                            <li class="dropdown-header optgroup-15"><span class="text">Brasil, Goiás, Caldas Novas, Bandeirantes</span></li>
                            <li class="optgroup-15"><a role="option" class="dropdown-item opt" id="bs-select-35-66" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">WP02F | ECOL. G-605 FLAT</span></a></li>
                            <li class="divider optgroup-15div"></li>
                            <li class="dropdown-header optgroup-16"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, SOLAR DE CALDAS</span></li>
                            <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-35-69" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT02F | VR - 402 A</span></a></li>
                            <li class="optgroup-16"><a role="option" class="dropdown-item opt" id="bs-select-35-70" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">TT03F | VR - 707 A</span></a></li>
                            <li class="divider optgroup-16div"></li>
                            <li class="dropdown-header optgroup-17"><span class="text">Brasil, Goiás, Caldas Novas, Jeriquara</span></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-35-73" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">ZP02F | VT - 101 A</span></a></li>
                            <li class="optgroup-17"><a role="option" class="dropdown-item opt" id="bs-select-35-74" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">KL02G | VT 305 B</span></a></li>
                            <li class="divider optgroup-17div"></li>
                            <li class="dropdown-header optgroup-18"><span class="text">Brasil, GOIÁS, CALDAS NOVAS, TURISTA 1</span></li>
                            <li class="optgroup-18"><a role="option" class="dropdown-item opt" id="bs-select-35-77" tabindex="0"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text">VO02F | Millennium Thermas Residence 602 A</span></a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <div class="dropdown bootstrap-select show-tick form-control type bs3"><select class="selectpicker form-control type" name="type[]" data-live-search="0" title="Tipo" multiple="">
                      <option value="d" data-content="<span class='label label-danger'>Débito</span>" selected="">Débito</option>
                      <option value="c" data-content="<span class='label label-success'>Crédito</span>" selected="">Crédito</option>
                      <option value="b" data-content="<span class='label label-info'>Saldo</span>" selected="">Saldo</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-36" aria-haspopup="listbox" aria-expanded="false" title="Débito Crédito Saldo">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-danger">Débito</span> <span class="label label-success">Crédito</span> <span class="label label-info">Saldo</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-36" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <button type="submit" class="btn btn-info pull-right disabled"><i class="fa fa-refresh"></i>&nbsp;Atualizar</button>
                </div>
              </form>
              <script>
                requirejs(["views/finance/left-menu-form"], function(left_menu_form) {
                  left_menu_form({
                    filter: {
                      "apartment": "5f970a857dcaf763e1a87cb2",
                      "type": {
                        "d": "d",
                        "c": "c",
                        "b": "b"
                      },
                      "_dtto": null,
                      "_dtfrom": null
                    }
                  });
                }, appError);
              </script>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 203px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <div class="col-sm-9 scroll well well-sm ps" id="accs-body">

            <div class="row">
              <div class="col-md-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>Total Acumulado de Débitos</h4>
                  </div>
                  <div class="panel-body">
                    <h4 class="media-heading text-info">
                      <small class="text-muted text-uppercase">Valor Total</small><br>R$&nbsp;0,00</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>Total Acumulado de Créditos</h4>
                  </div>
                  <div class="panel-body">
                    <h4 class="media-heading text-info"><small class="text-muted text-uppercase">Valor Total</small>
                      <br>R$&nbsp;0,00</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-info">
                  <div class="panel-heading">
                    <h4>Saldo Acumulado</h4>
                  </div>
                  <div class="panel-body">
                    <h4 class="media-heading text-info"><small class="text-muted text-uppercase">Valor Total</small>
                      <br>R$&nbsp;0,00</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="panel panel-default panel-default  accitem-record">
                  <div class="panel-heading">
                    <h4>Débito
                      <small>a ser pago</small>
                    </h4>
                  </div>
                  <div class="panel-body">
                    <h4 class="media-heading">
                      <small class="text-muted text-uppercase">Valor Total</small><br>R$&nbsp;0,00</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-default panel-default accitem-record">
                  <div class="panel-heading">
                    <h4>Crédito
                      <small>a ser recebido</small>
                    </h4>
                  </div>
                  <div class="panel-body">
                    <h4 class="media-heading">
                      <small class="text-muted text-uppercase">Valor Total</small><br>R$&nbsp;0,00</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-default panel-default accitem-record">
                  <div class="panel-heading">
                    <h4>Saldo</h4>
                  </div>
                  <div class="panel-body">
                    <h4 class="media-heading">
                      <small class="text-muted text-uppercase">Valor Total</small><br>R$&nbsp;0,00</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-default accitem-record">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12 col-lg-6">
                    <h4>Detalhes <small></small></h4>
                  </div>
                  <div class="col-xs-12 col-lg-6 text-right">
                    <form method="post" action="/i/payment-bills-export/KA04G?from=&amp;to=&amp;type={&quot;d&quot;:&quot;d&quot;,&quot;c&quot;:&quot;c&quot;,&quot;b&quot;:&quot;b&quot;}">
                      <div class="btn-group">
                        <a href="#" target="_blank" class="btn btn-md btn-default print">
                          <i class="fa fa-print"></i>
                        </a>
                        <a class="btn btn-default sendEmailWithAttachment" href="#">
                          <i class="fa fa-envelope-o"></i>
                        </a>
                        <button type="submit" class="btn btn-default">
                          <i class="fa fa-download"></i>
                        </button>
                        <div class="btn btn-info btn-create-landlord-balance hidden">
                          <i class="fa fa-chevron-right"></i>
                        </div>
                        <div class="btn btn-info btn-go-to-accounting hidden">
                          <i class="fa fa-chevron-right"></i>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-hover table-responsive">
                  <thead class="text-muted">
                    <tr>
                      <th></th>
                      <th>Data</th>
                      <th>Anúncio</th>
                      <th>Descrição</th>
                      <th>Reserva</th>
                      <th>Status</th>
                      <th>Info</th>
                      <th class="text-right">Débito</th>
                      <th class="text-right">Crédito</th>
                    </tr>
                  </thead>
                  <tbody>
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
                      <th class="text-right">R$&nbsp;0,00 </th>
                      <th class="text-right">R$&nbsp;0,00 </th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <script>
              requirejs(["admin/forward"], function(forward) {
                forward();
              }, window.appError);
            </script>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
          </div>
          <script>
            requirejs(["views/finance_accounting_content"], function(finance_accounting_content) {
              finance_accounting_content();
            }, appError);
          </script>

          <script>
            requirejs(["views/finance/bills_landlord"], function(bills_landlord) {
              bills_landlord({
                _idapartment: "5f970a857dcaf763e1a87cb2" || "5f970a857dcaf763e1a87cb2"
              });
            }, appError);
          </script>
          <script>
            requirejs(["views/finance/product_accounting"], function(product_accounting) {
              product_accounting({
                accounting: []
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