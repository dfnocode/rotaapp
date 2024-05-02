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
        <!-- Default box -->
        <div class="row scroll-parent">
          <div class="col-sm-3 scroll well well-sm ps ps--active-y">
            <div class="panel-group">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="media" style="overflow: visible;">
                    <div class="media-body">
                      <p class="lead text-center text-muted" style="margin: 0;">
                        <strong>Dashboard Financeiro</strong>
                        <br> painel com todas as contas
                        <br>
                      </p>
                    </div>
                    <div class="media-right media-top">
                      <div class="dropdown">
                        <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-default dropdown-toggle"><i class="fa fa-chevron-down text-muted"></i></div>
                        <ul class="dropdown-menu" style="right: 0;left: auto;">
                          <li class="active"><a href="#" style="line-height: 2.5;">Dashboard Financeiro</a></li>
                          <li><a href="/i/finance/accountingloss?type=d" style="line-height: 2.5;">Contas a Pagar</a></li>
                          <li><a href="/i/finance/accountingwin?type=c" style="line-height: 2.5;">Contas a Receber</a></li>
                          <li><a href="/i/finance/accounting" style="line-height: 2.5;">Extratos de Contas</a></li>
                          <li>
                            <a href="/i/product/accounting/0
?from=2020-12-01
&amp;to=2020-12-31" style="line-height: 2.5;">
                              Balanço de Proprietários
                            </a>
                          </li>
                          <li>
                            <a href="/i/bookings
?from=2020-12-01
&amp;to=2020-12-31
&amp;dateof=_dtcheckIn" style="line-height: 2.5;">
                              Achar Reserva
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-8">
                      <p class="h4 text-info">
                        <b>Balanço Total:</b>
                      </p>
                    </div>
                    <div class="col-xs-4 h4 text-right">
                      <b>R$&nbsp;425.801,98</b>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5ab40222908ecd0010bc8fe7">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa

fa-cc





"></i>
                          <b>CARTÃO DE CREDITO</b>
                        </p>
                        <!--
<p class="text-muted">
<i class="fa fa-link"></i>
missing links 473

</p>
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;298.008,81
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5e6a7c8efb622a0010b94610">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa



fa-cc



"></i>
                          <b>PAGAR.ME BOLETOS</b>
                        </p>
                        <!--
<p class="text-muted">
<i class="fa fa-link"></i>
missing links 6

</p>
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;0,00
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/59a868045413a4000f06dd9f">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa





fa-bank

"></i>
                          <b>TRANSFERÊNCIA BANCÁRIA</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 30 set 2020
                        </p>
                        <!--
<p class="text-muted">
<i class="fa fa-link"></i>
missing links 2

</p>
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        -R$&nbsp;35.671,89
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5994a4385d882100104b7f0f">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa





fa-bank

"></i>
                          <b>BANCO DO BRASIL</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 30 set 2020
                        </p>
                        <!--
<p class="text-muted">
<i class="fa fa-link"></i>
missing links 6

</p>
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;4.495,42
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5cc6ff7667ba1100103350cb">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa





fa-bank

"></i>
                          <b>CAIXA ECONÔMICA FEDERAL / CLEYTON AMARO DE MENDONÇA</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 04 fev 2020
                        </p>
                        <!--
<p class="text-muted">
<i class="fa fa-link"></i>

update via API
</p>
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;17.948,26
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/242424756e747261636b6564">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa





fa-bank

"></i>
                          <b>Untracked bank</b>
                        </p>
                        <!--
<p class="text-muted">
<i class="fa fa-link"></i>

update via API
</p>
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;254,60
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512eb">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>GIULLIANO HENRIQUE DOBRZANKI MENDONÇA</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 26 mar 2019
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;7.375,00
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512ec">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>WELITON AMORIM (64) 99238-8389</b>
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;48.794,69
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512ed">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>Cleyton Mendonça (64) 99228-4668</b>
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;34.248,43
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512ee">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>ALEXANDRE FRANCISCO DOS SANTOS</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 18 mai 2019
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;905,00
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512ef">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>JESSIKA MENDONÇA (64) 99284-9791</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 04 jun 2019
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;10.483,04
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512f0">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>JOSI (64) 99347-9098</b>
                        </p>
                        <p class="text-muted">
                          <i class="fa fa-clock-o"></i>
                          atualizado em 03 fev 2020
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;1.462,00
                      </div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-body">
                  <a href="/i/finance/overview_account/5f7b04e702fdf802ffd512f1">
                    <div class="row">
                      <div class="col-xs-8">
                        <p class="h4 text-info">
                          <i class="fa






fa-money
"></i>
                          <b>WILTON (64) 99242-1617</b>
                        </p>
                        <!--
-->
                      </div>
                      <div class="col-xs-4 h4 text-right">
                        R$&nbsp;29.298,75
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 187px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1035px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 836px;"></div>
            </div>
          </div>
          <div class="col-sm-9 scroll well well-sm ps ps--active-y">
            <div class="row">
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>
                      Contas a Receber hoje
                      <span class="pull-right"><strong>R$&nbsp;520,00</strong></span>
                    </h4>
                  </div>
                  <div class="panel-body">
                    <table class="table table-hover table-responsive" style="margin: 0;">
                      <tbody>
                        <tr>
                          <td class="text-left">Contas a Receber neste mês</td>
                          <td class="text-right">R$&nbsp;57.609,05</td>
                        </tr>
                        <tr>
                          <td class="text-left">Contas a Receber em atraso</td>
                          <td class="text-right">R$&nbsp;4.360,00</td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <a class="btn btn-success" href="/i/finance/accountingwin?from=2020-12-01&amp;to=2020-12-31&amp;type=c">
                      Ir para Contas a Receber
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4>
                      Contas a Pagar hoje
                      <span class="pull-right"><strong>R$&nbsp;133,49</strong></span>
                    </h4>
                  </div>
                  <div class="panel-body">
                    <table class="table table-hover table-responsive" style="margin: 0;">
                      <tbody>
                        <tr>
                          <td class="text-left">Contas a Pagar neste mês</td>
                          <td class="text-right">R$&nbsp;4.864,90</td>
                        </tr>
                        <tr>
                          <td class="text-left">Contas a Pagar em atraso</td>
                          <td class="text-right">R$&nbsp;4.864,90</td>
                        </tr>
                      </tbody>
                    </table>
                    <br>
                    <a class="btn btn-danger" href="/i/finance/accountingloss?from=2020-12-01&amp;to=2020-12-31&amp;type=d">
                      Ir para Contas a Pagar
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-5">
                    <h4 class="details">
                      Fluxo de Caixa Mensal <small>de transações no stays.net</small>
                    </h4>
                  </div>
                  <div class="col-sm-7 text-right">
                    <form id="filterform" class="ajax_form form-inline" novalidate="true" role="form">
                      <div class="input-daterange col-lg-10">
                        <div class="form-group has-feedback has-success">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control date from" placeholder="De" autocomplete="off">
                            <input type="hidden" name="from">
                          </div>
                        </div>
                      </div>
                      <input type="hidden" name="id">
                      <div class="col-lg-2 form-group pull-right">
                        <button type="submit" class="btn btn-info"><i class="fa fa-refresh"></i> Atualizar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <div id="finance-overview-graph" data-highcharts-chart="0" style="overflow: hidden;">
                  <div id="highcharts-7zslrnx-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 1355px; height: 557px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none;"><svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="1355" height="557" viewBox="0 0 1355 557">
                      <desc>Created with Highcharts 8.2.2</desc>
                      <defs>
                        <clipPath id="highcharts-7zslrnx-1-">
                          <rect x="0" y="0" width="1184" height="469" fill="none"></rect>
                        </clipPath>
                      </defs>
                      <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="1355" height="557" rx="0" ry="0"></rect>
                      <rect fill="none" class="highcharts-plot-background" x="84" y="10" width="1184" height="469"></rect>
                      <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1">
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 150.5 10 L 150.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 225.5 10 L 225.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 300.5 10 L 300.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 375.5 10 L 375.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 450.5 10 L 450.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 525.5 10 L 525.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 600.5 10 L 600.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 675.5 10 L 675.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 750.5 10 L 750.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 825.5 10 L 825.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 900.5 10 L 900.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 975.5 10 L 975.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1050.5 10 L 1050.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1125.5 10 L 1125.5 479" opacity="1"></path>
                        <path fill="none" data-z-index="1" class="highcharts-grid-line" d="M 1200.5 10 L 1200.5 479" opacity="1"></path>
                      </g>
                      <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 479.5 L 1268 479.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 396.5 L 1268 396.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 314.5 L 1268 314.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 231.5 L 1268 231.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 148.5 L 1268 148.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 66.5 L 1268 66.5" opacity="1" style="stroke-width: 0;"></path>
                      </g>
                      <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1">
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 345.5 L 1268 345.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 278.5 L 1268 278.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 211.5 L 1268 211.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 144.5 L 1268 144.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 77.5 L 1268 77.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 479.5 L 1268 479.5" opacity="1" style="stroke-width: 0;"></path>
                        <path fill="none" stroke="#e6e6e6" stroke-width="1" data-z-index="1" class="highcharts-grid-line" d="M 84 412.5 L 1268 412.5" opacity="1" style="stroke-width: 0;"></path>
                      </g>
                      <rect fill="none" class="highcharts-plot-border" data-z-index="1" x="84" y="10" width="1184" height="469"></rect>
                      <g class="highcharts-axis highcharts-xaxis" data-z-index="2">
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 150.5 479 L 150.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 225.5 479 L 225.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 300.5 479 L 300.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 375.5 479 L 375.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 450.5 479 L 450.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 525.5 479 L 525.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 600.5 479 L 600.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 675.5 479 L 675.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 750.5 479 L 750.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 825.5 479 L 825.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 900.5 479 L 900.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 975.5 479 L 975.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1050.5 479 L 1050.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1125.5 479 L 1125.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-tick" stroke="#ccd6eb" stroke-width="1" d="M 1200.5 479 L 1200.5 489" opacity="1"></path>
                        <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1" data-z-index="7" d="M 84 479.5 L 1268 479.5"></path>
                      </g>
                      <g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="25.640625" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(270 25.640625 244.5)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="244.5">
                          <tspan>A receber/pagar</tspan>
                        </text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 84 10 L 84 479"></path>
                      </g>
                      <g class="highcharts-axis highcharts-yaxis" data-z-index="2"><text x="1329.234375" data-z-index="7" text-anchor="middle" transform="translate(0,0) rotate(90 1329.234375 244.5)" class="highcharts-axis-title" style="color:#666666;fill:#666666;" y="244.5">
                          <tspan>Saldo</tspan>
                        </text>
                        <path fill="none" class="highcharts-axis-line" data-z-index="7" d="M 1268 10 L 1268 479"></path>
                      </g>
                      <path fill="none" class="highcharts-crosshair highcharts-crosshair-thin undefined" data-z-index="2" stroke="#cccccc" stroke-width="1" style="pointer-events:none;" visibility="hidden" d="M 413.5 10 L 413.5 479"></path>
                      <g class="highcharts-series-group" data-z-index="3">
                        <g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(84,10) scale(1 1)" clip-path="url(#highcharts-7zslrnx-1-)">
                          <rect x="19.5" y="303.5" width="9" height="83" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="56.5" y="376.5" width="9" height="10" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="94.5" y="370.5" width="9" height="16" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="131.5" y="270.5" width="9" height="116" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="169.5" y="370.5" width="9" height="16" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="206.5" y="381.5" width="9" height="5" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="244.5" y="339.5" width="9" height="47" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="281.5" y="382.5" width="9" height="4" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="319.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="356.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="394.5" y="203.5" width="9" height="183" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="431.5" y="358.5" width="9" height="28" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="468.5" y="319.5" width="9" height="67" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="506.5" y="363.5" width="9" height="23" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="543.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="581.5" y="325.5" width="9" height="61" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="618.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="656.5" y="313.5" width="9" height="73" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="693.5" y="368.5" width="9" height="18" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="731.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="768.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="806.5" y="312.5" width="9" height="74" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="843.5" y="323.5" width="9" height="63" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="881.5" y="268.5" width="9" height="118" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="918.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="956.5" y="386.5" width="9" height="0" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="993.5" y="288.5" width="9" height="98" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1031.5" y="380.5" width="9" height="6" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1068.5" y="149.5" width="9" height="237" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1105.5" y="337.5" width="9" height="49" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1143.5" y="21.5" width="9" height="365" fill="#80ad15" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                        </g>
                        <g class="highcharts-markers highcharts-series-0 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(84,10) scale(1 1)" clip-path="none"></g>
                        <g class="highcharts-series highcharts-series-1 highcharts-column-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(84,10) scale(1 1)" clip-path="url(#highcharts-7zslrnx-1-)">
                          <rect x="30.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="68.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="105.5" y="386.5" width="9" height="4" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="143.5" y="386.5" width="9" height="5" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="180.5" y="386.5" width="9" height="3" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="217.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="255.5" y="386.5" width="9" height="3" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="292.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="330.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="367.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="405.5" y="386.5" width="9" height="13" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="442.5" y="386.5" width="9" height="4" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="480.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="517.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="555.5" y="386.5" width="9" height="18" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="592.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="630.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="667.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="705.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="742.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="779.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="817.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="854.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="892.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="929.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="967.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1004.5" y="386.5" width="9" height="13" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="1042.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1079.5" y="386.5" width="9" height="41" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                          <rect x="1117.5" y="386.5" width="9" height="0" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point"></rect>
                          <rect x="1154.5" y="386.5" width="9" height="48" fill="#f1623f" stroke="#ffffff" stroke-width="1" opacity="1" class="highcharts-point highcharts-negative"></rect>
                        </g>
                        <g class="highcharts-markers highcharts-series-1 highcharts-column-series" data-z-index="0.1" opacity="1" transform="translate(84,10) scale(1 1)" clip-path="none"></g>
                        <g class="highcharts-series highcharts-series-2 highcharts-spline-series" data-z-index="0.1" opacity="1" transform="translate(84,10) scale(1 1)" clip-path="url(#highcharts-7zslrnx-1-)">
                          <path fill="none" d="M 29.974683544304 20.313035595651343 C 29.974683544304 20.313035595651343 52.455696202531996 20.23885582291374 67.443037974684 20.18107779567697 C 82.4303797468344 20.1232997684402 89.9240506329096 20.18107779567697 104.91139240506 20.02414545946749 C 119.898734177212 19.86721312325801 127.392405063288 18.72866498411929 142.37974683544 18.553794507593295 C 157.367088607592 18.3789240310673 164.860759493668 18.4293270383695 179.84810126582 18.3789240310673 C 194.83544303797197 18.3285210237651 202.329113924048 18.3789240310673 217.3164556962 18.301779471082284 C 232.30379746835197 18.22463491109727 239.79746835442802 17.76323329782707 254.78481012658 17.702329697838877 C 269.772151898732 17.641426097850683 277.265822784808 17.641426097850683 292.25316455696 17.641426097850683 C 307.240506329112 17.641426097850683 314.73417721518797 17.641426097850683 329.72151898734 17.641426097850683 C 344.70886075949204 17.641426097850683 352.202531645568 17.641426097850683 367.18987341772 17.641426097850683 C 382.177215189872 17.641426097850683 389.670886075948 15.719154193104544 404.6582278481 15.388561331888695 C 419.645569620252 15.057968470672847 427.13924050632806 15.301113506881597 442.12658227848 15.057968470672847 C 457.11392405063197 14.814823434464097 464.6075949367079 14.411578262798526 479.59493670886 14.172836150844944 C 494.58227848101194 13.934094038891365 502.0759493670881 13.86425791090494 517.06329113924 13.86425791090494 C 532.0506329113921 13.86425791090494 539.544303797468 14.095139398220056 554.53164556962 14.095139398220056 C 569.5189873417719 14.095139398220056 577.012658227848 13.283822241577809 592 13.283822241577809 C 606.987341772152 13.283822241577809 614.4810126582281 13.283822241577809 629.46835443038 13.283822241577809 C 644.455696202532 13.283822241577809 651.9493670886079 12.556227233719223 666.93670886076 12.313424881766423 C 681.9240506329119 12.070622529813626 689.4177215189881 12.069810481813818 704.40506329114 12.069810481813818 C 719.392405063292 12.069810481813818 726.886075949368 12.069810481813818 741.87341772152 12.069810481813818 C 756.860759493672 12.069810481813818 764.354430379748 12.069810481813818 779.3417721519 12.069810481813818 C 794.3291139240521 12.069810481813818 801.822784810128 11.448674966734574 816.81012658228 11.082766138005695 C 831.797468354432 10.716857309276815 839.291139240508 10.720795742076017 854.27848101266 10.24026633816942 C 869.265822784812 9.759736934262822 876.759493670888 8.680119118472703 891.74683544304 8.680119118472703 C 906.734177215192 8.680119118472703 914.2278481012679 8.680119118472703 929.21518987342 8.680119118472703 C 944.202531645572 8.680119118472703 951.6962025316479 8.680119118472703 966.6835443038 8.680119118472703 C 981.67088607596 8.680119118472703 989.1645569620399 7.633356764756286 1004.1518987342 7.552151964772065 C 1019.13924050636 7.4709471647878445 1026.6329113924398 7.552151964772065 1041.6202531646 7.4709471647878445 C 1056.60759493672 7.389742364803624 1064.1012658227799 5.508917389969099 1079.0886075949 4.85927899009539 C 1094.0759493670598 4.209640590221682 1101.5696202531399 4.85927899009539 1116.5569620253 4.209640590221682 C 1131.54430379746 3.560002190347973 1154.0253164557 0 1154.0253164557 0" class="highcharts-graph" data-z-index="1" stroke="#0c6b90" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
                          <path fill="none" d="M 29.974683544304 20.313035595651343 C 29.974683544304 20.313035595651343 52.455696202531996 20.23885582291374 67.443037974684 20.18107779567697 C 82.4303797468344 20.1232997684402 89.9240506329096 20.18107779567697 104.91139240506 20.02414545946749 C 119.898734177212 19.86721312325801 127.392405063288 18.72866498411929 142.37974683544 18.553794507593295 C 157.367088607592 18.3789240310673 164.860759493668 18.4293270383695 179.84810126582 18.3789240310673 C 194.83544303797197 18.3285210237651 202.329113924048 18.3789240310673 217.3164556962 18.301779471082284 C 232.30379746835197 18.22463491109727 239.79746835442802 17.76323329782707 254.78481012658 17.702329697838877 C 269.772151898732 17.641426097850683 277.265822784808 17.641426097850683 292.25316455696 17.641426097850683 C 307.240506329112 17.641426097850683 314.73417721518797 17.641426097850683 329.72151898734 17.641426097850683 C 344.70886075949204 17.641426097850683 352.202531645568 17.641426097850683 367.18987341772 17.641426097850683 C 382.177215189872 17.641426097850683 389.670886075948 15.719154193104544 404.6582278481 15.388561331888695 C 419.645569620252 15.057968470672847 427.13924050632806 15.301113506881597 442.12658227848 15.057968470672847 C 457.11392405063197 14.814823434464097 464.6075949367079 14.411578262798526 479.59493670886 14.172836150844944 C 494.58227848101194 13.934094038891365 502.0759493670881 13.86425791090494 517.06329113924 13.86425791090494 C 532.0506329113921 13.86425791090494 539.544303797468 14.095139398220056 554.53164556962 14.095139398220056 C 569.5189873417719 14.095139398220056 577.012658227848 13.283822241577809 592 13.283822241577809 C 606.987341772152 13.283822241577809 614.4810126582281 13.283822241577809 629.46835443038 13.283822241577809 C 644.455696202532 13.283822241577809 651.9493670886079 12.556227233719223 666.93670886076 12.313424881766423 C 681.9240506329119 12.070622529813626 689.4177215189881 12.069810481813818 704.40506329114 12.069810481813818 C 719.392405063292 12.069810481813818 726.886075949368 12.069810481813818 741.87341772152 12.069810481813818 C 756.860759493672 12.069810481813818 764.354430379748 12.069810481813818 779.3417721519 12.069810481813818 C 794.3291139240521 12.069810481813818 801.822784810128 11.448674966734574 816.81012658228 11.082766138005695 C 831.797468354432 10.716857309276815 839.291139240508 10.720795742076017 854.27848101266 10.24026633816942 C 869.265822784812 9.759736934262822 876.759493670888 8.680119118472703 891.74683544304 8.680119118472703 C 906.734177215192 8.680119118472703 914.2278481012679 8.680119118472703 929.21518987342 8.680119118472703 C 944.202531645572 8.680119118472703 951.6962025316479 8.680119118472703 966.6835443038 8.680119118472703 C 981.67088607596 8.680119118472703 989.1645569620399 7.633356764756286 1004.1518987342 7.552151964772065 C 1019.13924050636 7.4709471647878445 1026.6329113924398 7.552151964772065 1041.6202531646 7.4709471647878445 C 1056.60759493672 7.389742364803624 1064.1012658227799 5.508917389969099 1079.0886075949 4.85927899009539 C 1094.0759493670598 4.209640590221682 1101.5696202531399 4.85927899009539 1116.5569620253 4.209640590221682 C 1131.54430379746 3.560002190347973 1154.0253164557 0 1154.0253164557 0" visibility="visible" data-z-index="2" class="highcharts-tracker-line" stroke-linecap="round" stroke-linejoin="round" stroke="rgba(192,192,192,0.0001)" stroke-width="22"></path>
                        </g>
                        <g class="highcharts-markers highcharts-series-2 highcharts-spline-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(84,10) scale(1 1)">
                          <path fill="#0c6b90" d="M 29 24 A 4 4 0 1 1 29.003999999333335 23.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 67 24 A 4 4 0 1 1 67.00399999933333 23.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 104 24 A 4 4 0 1 1 104.00399999933333 23.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 142 23 A 4 4 0 1 1 142.00399999933333 22.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 179 22 A 4 4 0 1 1 179.00399999933333 21.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 217 22 A 4 4 0 1 1 217.00399999933333 21.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 254 22 A 4 4 0 1 1 254.00399999933333 21.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 292 22 A 4 4 0 1 1 292.00399999933336 21.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 329 22 A 4 4 0 1 1 329.00399999933336 21.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 367 22 A 4 4 0 1 1 367.00399999933336 21.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 404 19 A 4 4 0 1 1 404.00399999933336 18.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 442 19 A 4 4 0 1 1 442.00399999933336 18.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 479 18 A 4 4 0 1 1 479.00399999933336 17.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 517 18 A 4 4 0 1 1 517.0039999993334 17.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 554 18 A 4 4 0 1 1 554.0039999993334 17.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 592 17 A 4 4 0 1 1 592.0039999993334 16.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 629 17 A 4 4 0 1 1 629.0039999993334 16.99999800000017 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 666 16 A 4 4 0 1 1 666.0039999993334 15.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 704 16 A 4 4 0 1 1 704.0039999993334 15.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 741 16 A 4 4 0 1 1 741.0039999993334 15.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 779 16 A 4 4 0 1 1 779.0039999993334 15.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 816 15 A 4 4 0 1 1 816.0039999993334 14.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 854 14 A 4 4 0 1 1 854.0039999993334 13.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 891 13 A 4 4 0 1 1 891.0039999993334 12.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 929 13 A 4 4 0 1 1 929.0039999993334 12.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 966 13 A 4 4 0 1 1 966.0039999993334 12.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 1004 12 A 4 4 0 1 1 1004.0039999993334 11.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 1041 11 A 4 4 0 1 1 1041.0039999993332 10.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 1079 9 A 4 4 0 1 1 1079.0039999993332 8.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 1116 8 A 4 4 0 1 1 1116.0039999993332 7.999998000000167 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 1154 4 A 4 4 0 1 1 1154.0039999993332 3.9999980000001667 Z" opacity="1" class="highcharts-point"></path>
                          <path fill="#0c6b90" d="M 329 17.641426097850683 A 0 0 0 1 1 329 17.641426097850683 Z" class="highcharts-halo highcharts-color-undefined" data-z-index="-1" fill-opacity="0.25" visibility="hidden"></path>
                        </g>
                      </g><text x="678" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:18px;fill:#333333;" y="24"></text><text x="678" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="554"></text>
                      <g class="highcharts-legend" data-z-index="7" transform="translate(547,513)">
                        <rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="261" height="29" visibility="visible"></rect>
                        <g data-z-index="1">
                          <g>
                            <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-0" data-z-index="1" transform="translate(8,3)"><text x="21" style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;" text-anchor="start" data-z-index="2" y="15">
                                <tspan>A receber</tspan>
                              </text>
                              <rect x="2" y="4" width="12" height="12" fill="#80ad15" rx="6" ry="6" class="highcharts-point" data-z-index="3"></rect>
                            </g>
                            <g class="highcharts-legend-item highcharts-column-series highcharts-color-undefined highcharts-series-1" data-z-index="1" transform="translate(108.4375,3)"><text x="21" y="15" style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;" text-anchor="start" data-z-index="2">
                                <tspan>A pagar</tspan>
                              </text>
                              <rect x="2" y="4" width="12" height="12" fill="#f1623f" rx="6" ry="6" class="highcharts-point" data-z-index="3"></rect>
                            </g>
                            <g class="highcharts-legend-item highcharts-spline-series highcharts-color-undefined highcharts-series-2" data-z-index="1" transform="translate(198.015625,3)">
                              <path fill="none" d="M 0 11 L 16 11" class="highcharts-graph" stroke="#0c6b90" stroke-width="2"></path>
                              <path fill="#0c6b90" d="M 8 15 A 4 4 0 1 1 8.003999999333336 14.999998000000167 Z" class="highcharts-point" opacity="1"></path><text x="21" y="15" style="color:#333333;cursor:pointer;font-size:12px;font-weight:bold;fill:#333333;" text-anchor="start" data-z-index="2">
                                <tspan>Saldo</tspan>
                              </text>
                            </g>
                          </g>
                        </g>
                      </g>
                      <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"><text x="151.44303797468" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>2. Dec</tspan>
                        </text><text x="226.37974683544" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>4. Dec</tspan>
                        </text><text x="301.3164556962" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>6. Dec</tspan>
                        </text><text x="376.25316455696" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>8. Dec</tspan>
                        </text><text x="451.18987341772" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>10. Dec</tspan>
                        </text><text x="526.12658227848" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>12. Dec</tspan>
                        </text><text x="601.06329113924" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>14. Dec</tspan>
                        </text><text x="676" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>16. Dec</tspan>
                        </text><text x="750.93670886076" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>18. Dec</tspan>
                        </text><text x="825.87341772152" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>20. Dec</tspan>
                        </text><text x="900.81012658228" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>22. Dec</tspan>
                        </text><text x="975.74683544304" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>24. Dec</tspan>
                        </text><text x="1050.6835443038" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>26. Dec</tspan>
                        </text><text x="1125.6202531646" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>28. Dec</tspan>
                        </text><text x="1200.5569620253" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="middle" transform="translate(0,0)" y="498" opacity="1">
                          <tspan>30. Dec</tspan>
                        </text></g>
                      <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="69" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="483" opacity="1">-2.7k</text><text x="69" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="400" opacity="1">0</text><text x="69" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="318" opacity="1">2.7k</text><text x="69" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="235" opacity="1">5.4k</text><text x="69" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="152" opacity="1">8.1k</text><text x="69" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="end" transform="translate(0,0)" y="70" opacity="1">10.8k</text></g>
                      <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="349" opacity="1">0</text><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="282" opacity="1">165k</text><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="215" opacity="1">330k</text><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="148" opacity="1">495k</text><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="81" opacity="1">660k</text><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="483" opacity="1">-330k</text><text x="1283" style="color:#666666;cursor:default;font-size:11px;fill:#666666;" text-anchor="start" transform="translate(0,0)" y="416" opacity="1">-165k</text></g><text x="1345" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="552">Highcharts.com</text>
                      <g class="highcharts-label highcharts-tooltip highcharts-color-undefined" style="white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(334,-9999)" opacity="0" visibility="hidden">
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 73.5 0.5 L 79.5 -5.5 L 85.5 0.5 L 157 0.5 C 160.5 0.5 160.5 0.5 160.5 3.5 L 160.5 46.5 C 160.5 49.5 160.5 49.5 157.5 49.5 L 3.5 49.5 C 0.5 49.5 0.5 49.5 0.5 46.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 73.5 0.5 L 79.5 -5.5 L 85.5 0.5 L 157 0.5 C 160.5 0.5 160.5 0.5 160.5 3.5 L 160.5 46.5 C 160.5 49.5 160.5 49.5 157.5 49.5 L 3.5 49.5 C 0.5 49.5 0.5 49.5 0.5 46.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path>
                        <path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 73.5 0.5 L 79.5 -5.5 L 85.5 0.5 L 157 0.5 C 160.5 0.5 160.5 0.5 160.5 3.5 L 160.5 46.5 C 160.5 49.5 160.5 49.5 157.5 49.5 L 3.5 49.5 C 0.5 49.5 0.5 49.5 0.5 46.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path>
                        <path fill="rgba(0,3,9,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 73.5 0.5 L 79.5 -5.5 L 85.5 0.5 L 157 0.5 C 160.5 0.5 160.5 0.5 160.5 3.5 L 160.5 46.5 C 160.5 49.5 160.5 49.5 157.5 49.5 L 3.5 49.5 C 0.5 49.5 0.5 49.5 0.5 46.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#0c6b90" stroke-width="1"></path><text x="8" data-z-index="1" y="20" style="color:#333333;cursor:default;font-size:12px;fill:#333333;">
                          <tspan>9 de dezembro de 2020</tspan>
                          <tspan style="fill:#0c6b90" x="8" dy="15">●</tspan>
                          <tspan dx="0"> Saldo : R$&nbsp;781.625,16</tspan>
                        </text>
                      </g>
                    </svg></div>
                </div>
              </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 0px; height: 1035px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 1030px;"></div>
            </div>
          </div>
          <script>
            requirejs(["views/finance_overview"], function(finance_overview) {
              finance_overview({
                stats: {
                  "_mcdebitDailyTotal": {
                    "BRL": 133.49
                  },
                  "_mcdebitMonthlyTotal": {
                    "BRL": 4864.9
                  },
                  "_mcdebitMonthlyNotPaid": {
                    "BRL": 4864.9
                  },
                  "_mccreditDailyTotal": {
                    "BRL": 520
                  },
                  "_mccreditMonthlyTotal": {
                    "BRL": 57609.05000000001
                  },
                  "_mccreditMonthlyNotPaid": {
                    "BRL": 4360
                  },
                  "_mcbalanceTotal": {
                    "BRL": 425801.98
                  },
                  "channelsTotal": {
                    "59a868045413a4000f06dd9f": {
                      "debit": {
                        "BRL": 46392.600000000006
                      },
                      "credit": {
                        "BRL": 10720.71
                      }
                    },
                    "5994a4385d882100104b7f0f": {
                      "debit": {
                        "BRL": 10082.68
                      },
                      "credit": {
                        "BRL": 14578.1
                      }
                    },
                    "5c8c040ba138950010406c09": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 25782.690000000002
                      }
                    },
                    "5c8cf8f5caf8d10010411c34": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 7375
                      }
                    },
                    "59551f895ad044000193a21a": {
                      "debit": {
                        "BRL": 5387.219999999999
                      },
                      "credit": {
                        "BRL": 34660.78999999999
                      }
                    },
                    "5ab40222908ecd0010bc8fe7": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 298008.80999999994
                      }
                    },
                    "5c8bdd1bf4dffd00104c7f47": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 905
                      }
                    },
                    "5c8d34bfa138950010408a1f": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 10387.6
                      }
                    },
                    "5cc6ff7667ba1100103350cb": {
                      "debit": {
                        "BRL": 1782.74
                      },
                      "credit": {
                        "BRL": 19731
                      }
                    },
                    "242424756e747261636b6564": {
                      "debit": {
                        "BRL": 618.08
                      },
                      "credit": {
                        "BRL": 872.6800000000001
                      }
                    },
                    "247669727475616c62616e6b": {
                      "debit": {
                        "BRL": 8745.53
                      },
                      "credit": {
                        "BRL": 16945.4
                      }
                    },
                    "5e18f25404312a001030f67d": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 1462
                      }
                    },
                    "5f05e4c06e24745af66ece9f": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 200
                      }
                    },
                    "5f7b04e702fdf802ffd512ed": {
                      "debit": {
                        "BRL": 100
                      },
                      "credit": {
                        "BRL": 5074.860000000001
                      }
                    },
                    "5f7b04e702fdf802ffd512f1": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 29098.75
                      }
                    },
                    "5f7b04e702fdf802ffd512ec": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 23012
                      }
                    },
                    "5f7b04e702fdf802ffd512ef": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 95.44
                      }
                    },
                    "5e6a7c8efb622a0010b94610": {
                      "debit": {
                        "BRL": 0
                      },
                      "credit": {
                        "BRL": 0
                      }
                    }
                  }
                },
                filter: {
                  "from": "2020-12-01T00:00:00.000Z",
                  "to": "2020-12-31T23:59:59.999Z"
                },
                firstLoading: 1
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