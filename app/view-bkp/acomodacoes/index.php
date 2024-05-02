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

          <div class="col-sm-3 padding-top-20 form-fixed">

            <!-- form-filters classe NOVA PARA FIXAR O FORMULARIO -->
            <div class="panel-body form-filters">
              <!--TITLE-->
              <p class="lead text-center text-muted">
                <i class="fa fa-home"></i>
                <i class="fa fa-building"></i>
                <i class="fa fa-bed"></i>
                <br> Gerencie seus anúncios
                <br>
              </p>
              <hr>
              <ul class="nav nav-pills nav-justified">

                <li role="presentation" class="active"><a href="#"><i class="fa fa-list"></i> Todos</a></li>

                <li role="presentation"><a href="" id="to_buildings"><i class="fa fa-map-marker"></i> Por endereço</a></li>
              </ul>
              <hr>

              <form id="filterform" action="/i/apartments/0">

                <div class="form-group">

                  <label>Status</label>
                  <div class="dropdown bootstrap-select show-tick form-control statuses bs3"><select class="selectpicker form-control statuses" name="statuses[]" data-live-search="0" multiple="">
                      <option value="yes" data-content="<span class='label label-default' style='background-color: rgba(128,173,21,0.7);'>ativo</span>" selected="">Ativo 29</option>
                      <option value="hidden" data-content="<span class='label label-default' style='background-color: rgba(12, 107, 144, 0.55);'>ativo, porém oculto</span>" selected="">Ativo, porém oculto</option>
                      <option value="draft" data-content="<span class='label label-default' style='background-color: #aaa;'>rascunho</span>" selected="">Rascunho</option>
                      <option value="no" data-content="<span class='label label-default' style='background-color: rgba(250, 78, 38, 0.56);'>inativo</span>">inativo</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="ativo ativo, porém oculto rascunho">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-default" style="background-color: rgba(128,173,21,0.7);">ativo</span> <span class="label label-default" style="background-color: rgba(12, 107, 144, 0.55);">ativo, porém oculto</span> <span class="label label-default" style="background-color: #aaa;">rascunho</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-1" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Grupo</label>
                  <div class="dropdown bootstrap-select show-tick form-control groups bs3"><select class="selectpicker form-control groups" name="groups[]" data-groupid="" multiple="">
                      <option value="59668a9c95726a000129d34a" data-content="<span class='label label-default'>Lacqua Di Roma</span>">Lacqua Di Roma</option>
                      <option value="5980e86f99dda30010533e47" data-content="<span class='label label-default'>Águas da Serra</span>">Águas da Serra</option>
                      <option value="5e3d67a877bfc800106de483" data-content="<span class='label label-default'>LACQUA DI ROMA DUPLO</span>">LACQUA DI ROMA DUPLO</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner">Não Selecionado</div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open" style="max-height: 694px; overflow: hidden; min-height: 38px;">
                      <div class="bs-searchbox"><input type="search" class="form-control" autocomplete="off" role="combobox" aria-label="Search" aria-controls="bs-select-2" aria-autocomplete="list"></div>
                      <div class="inner open" role="listbox" id="bs-select-2" tabindex="-1" aria-multiselectable="true" style="max-height: 644px; overflow-y: auto; min-height: 0px;">
                        <ul class="dropdown-menu inner " role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
                          <li><a role="option" class="dropdown-item" id="bs-select-2-0" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Lacqua Di Roma</span></span></a></li>
                          <li><a role="option" class="dropdown-item" id="bs-select-2-1" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">Águas da Serra</span></span></a></li>
                          <li><a role="option" class="dropdown-item" id="bs-select-2-2" tabindex="0" aria-selected="false"><span class="glyphicon glyphicon-ok check-mark"></span><span class="text"><span class="label label-default">LACQUA DI ROMA DUPLO</span></span></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Tipo</label>
                  <div class="dropdown bootstrap-select show-tick form-control types bs3"><select class="selectpicker form-control types" name="types[]" data-live-search="0" multiple="">

                      <option value="main" data-content="<span class='label label-default'>temporada</span>" selected="">Aluguel por Temporada</option>

                      <option value="rental" data-content="<span class='label label-default'>locação residencial</span>" selected="">Locação Residencial</option>

                      <option value="sale" data-content="<span class='label label-default'>compra &amp; venda</span>" selected="">Compra e Venda</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="temporada locação residencial compra &amp; venda">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner"><span class="label label-default">temporada</span> <span class="label label-default">locação residencial</span> <span class="label label-default">compra &amp; venda</span></div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-3" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Tamanho</label>
                  <div class="dropdown bootstrap-select show-tick form-control rooms bs3"><select class="selectpicker form-control rooms" name="rooms[]" data-live-search="0" multiple="">
                      <option value="0" data-content="<span class='label label-default'>Estúdio</span>">Estúdio</option>
                      <option value="1" data-content="<span class='label label-default'>1 Quarto</span>">1 Quarto</option>
                      <option value="2" data-content="<span class='label label-default'>2 Quartos</span>">2 Quartos</option>
                      <option value="3" data-content="<span class='label label-default'>3 Quartos</span>">3 Quartos</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-4" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner">Não Selecionado</div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-4" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Endereço</label>
                  <input class="form-control" name="address" type="text" placeholder="Endereço" value="">
                </div>
                <div class="form-group">
                  <label>Filtros Adicionais</label>
                  <div class="dropdown bootstrap-select show-tick form-control rooms bs3"><select class="selectpicker form-control rooms" name="extendFilter" data-live-search="0" multiple="">
                      <option value="instant" data-content="<span class='label label-default'>Reserva instantânea</span>">Reserva instantânea</option>
                      <option value="noninstant" data-content="<span class='label label-default'>Reserva não instantânea</span>">Reserva não instantânea</option>
                      <option value="incprice" data-content="<span class='label label-default'>Preço incompleto</span>">Preço incompleto</option>
                      <option value="loopkey" data-content="<span class='label label-default'>Connected to Loopkey</span>">Connected to Loopkey</option>
                    </select><button type="button" tabindex="-1" class="form-control dropdown-toggle bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-5" aria-haspopup="listbox" aria-expanded="false" title="Não Selecionado">
                      <div class="filter-option">
                        <div class="filter-option-inner">
                          <div class="filter-option-inner-inner">Não Selecionado</div>
                        </div>
                      </div><span class="bs-caret"><span class="caret"></span></span>
                    </button>
                    <div class="dropdown-menu open">
                      <div class="inner open" role="listbox" id="bs-select-5" tabindex="-1" aria-multiselectable="true">
                        <ul class="dropdown-menu inner " role="presentation"></ul>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="clearfix">

                  <div id="btn-new-apartment-simple" class="btn btn-success btn-new-apartment-simple" data-toggle="modal" data-target="#cria_anuncio">
                    <i class="fa fa-plus"></i>
                  </div>
                  <button type="submit" class="btn btn-info pull-right"><i class="fa fa-refresh"></i> Atualizar</button>
                </div>
                <hr>
                <script>
                  requirejs(["views/apartment/apartment_filter"], function(apartment_filter) {
                    apartment_filter();
                  }, appError);
                </script>
              </form>
            </div>
          </div>
          <!-- 
              
            
            TELA DE RESULTADOS
            
            -->
          <div class="col-sm-9 scroll panel-resultado">

            <div class="panel panel-default panel-default accitem-record">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-sm-6">
                    <h4>
                      <span class="selected-count">41 Anúncios Encontrados</span>
                      <br>
                      <small>
                        <span class="label label-default" style="background-color: rgba(128,173,21,0.7);">ativo 29</span>
                        <span class="label label-default" style="background-color: rgba(12, 107, 144, 0.55);">ativo, porém oculto 11</span>
                        <span class="label label-default" style="background-color: #aaa;">rascunho 1</span>
                        <span class="label label-default" style="background-color: rgba(250, 78, 38, 0.56);">inativo 0</span>
                      </small>
                    </h4>
                  </div>
                  <form class="col-sm-6 text-right" method="POST">
                    <button type="submit" class="btn btn-default">
                      <i class="fa fa-cloud-download"></i> Exportar


                    </button></form>
                </div>
              </div>
            </div>

            <div class="panel panel-default apt_item" data-_idapartment="5faecf5e1bc8ebb457cf90a4">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5faed83f1bc8eb0b73cf92b2?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/KS04G">
                      DRE-507 - diRoma Exclusive Residence. JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label label-block label-default dropdown" role="button" id="apt-status-5faecf5e1bc8ebb457cf90a4">
                    <div class="dropdown-toggle" data-toggle="dropdown">


                      Rascunho &nbsp;

                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5faecf5e1bc8ebb457cf90a4"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 83%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Santa Catarina, s/n, , 75696-036 Solar de Caldas, GOIÁS, Brasil
                </div>





                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5faecf5e1bc8ebb457cf90a4" data-id="KS04G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                  <!-- href="https://www.jctemporada.com.br/i/apartment/KS04G" -->
                <a role="button" href="KS04G/" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt">
                
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5b4a25115ee3bb0010d4322f">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5b7ee8dcf3d6800011b74a5a?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/DX01F">
                      AF 704 B - Águas Das Fontes - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5b4a25115ee3bb0010d4322f">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5b4a25115ee3bb0010d4322f"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 92%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Coronel Luís Gonzaga de Menezes, 10, ÁGUAS DA FONTE 704 B, 75690-000 J Jeriquara, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/59598da0f771730001852885/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/DX01F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/DX01F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5b4a25115ee3bb0010d4322f" data-id="DX01F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/DX01F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="595991fbe9dd6f0001d126f2">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5aeb1e6b83ef170010d82883?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/PL01E">
                      AF1003C - ÁGUAS DAS FONTES
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-595991fbe9dd6f0001d126f2">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "595991fbe9dd6f0001d126f2"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 67%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>
                  <span class="label label-default">A Venda</span>
                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Coronel Luís Gonzaga de Menezes, 10, CONDOMÍNIO ÁGUAS DAS FONTES APT. 1003 C, 75690-000 J Jeriquara, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/59598da0f771730001852885/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/PL01E/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/PL01E/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/PL01E/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="595991fbe9dd6f0001d126f2" data-id="PL01E">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/PL01E">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5c9a8481b6ab50001070d8fa">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5c9a9c6db6ab50001070dc19?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/NS01F">
                      LACQUA POOL - LACQUA DI ROMA JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5c9a8481b6ab50001070d8fa">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5c9a8481b6ab50001070d8fa"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 83%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, lV - Apartamento 209, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/NS01F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/NS01F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5c9a8481b6ab50001070d8fa" data-id="NS01F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/NS01F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5980df9599dda30010533de6">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5b7f29f49cd6a40011f5be29?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/PH39E">
                      LACQUA POOL-2 - Lacqua Di Roma
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5980df9599dda30010533de6">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5980df9599dda30010533de6"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, l - Apartamento 57, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/PH39E/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/PH39E/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5980df9599dda30010533de6" data-id="PH39E">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/PH39E">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5cf925a2fcd3f7001086d355">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5cf92b4075bdbe00102c78f5?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/QM02F">
                      LACQUA POOL-3 - LACQUA DI ROMA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5cf925a2fcd3f7001086d355">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5cf925a2fcd3f7001086d355"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, lV - Apartamento 209, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/QM02F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/QM02F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5cf925a2fcd3f7001086d355" data-id="QM02F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/QM02F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5c8c0975caf8d10010410737">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/599731e3c11ce4000fe37f9b?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/NH04F">
                      LACQUA POOL-4 - LACQUA DI ROMA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5c8c0975caf8d10010410737">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5c8c0975caf8d10010410737"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 67%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>
                  <span class="label label-default">A Venda</span>
                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, lV - Apartamento 322 / 324, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/NH04F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/NH04F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5c8c0975caf8d10010410737" data-id="NH04F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/NH04F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5bbe3bee0e1fee0012d3fe4b">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/599dd09fe048d6000fcc2cf1?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/HH01F">
                      LACQUA POOL-5 - LACQUA DI ROMA IV - APT 197
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5bbe3bee0e1fee0012d3fe4b">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5bbe3bee0e1fee0012d3fe4b"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, Aparatamento 197, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/HH01F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/HH01F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5bbe3bee0e1fee0012d3fe4b" data-id="HH01F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/HH01F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5f96fe367dcaf7b6f2a879ea">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5f984d1b85c4d0f747ec807f?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/KA02G">
                      PIAZZA -
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5f96fe367dcaf7b6f2a879ea">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5f96fe367dcaf7b6f2a879ea"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 58%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;R. Santa Catarina Esq. São Bartolomeu Qd. 10 Lt. 01, , , 7590-000 Solar de Caldas, CLADAS NOVAS GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5f96f9447dcaf71091a87943/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/KA02G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/KA02G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/KA02G/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5f96fe367dcaf7b6f2a879ea" data-id="KA02G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/KA02G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5dfa190c1725da0010cf94a8">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5dfa1da2c872f300102357e1?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/XZ02F">
                      RI 06 -
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5dfa190c1725da0010cf94a8">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5dfa190c1725da0010cf94a8"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 58%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Av. Santo Amaro, 1800, APT 122, 75690-000 Chácara Roma, Caldas Novas Go - Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5b6e0f06ff666d00111e8828/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/XZ02F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/XZ02F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/XZ02F/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5dfa190c1725da0010cf94a8" data-id="XZ02F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/XZ02F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5f970a857dcaf763e1a87cb2">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5f970d737dcaf7184ea87d30?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/KA04G">
                      RIVIERA PARK - RIVIERA PARK - FLAT SERVICE JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5f970a857dcaf763e1a87cb2">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5f970a857dcaf763e1a87cb2"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 58%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;RIVIERA PARK - FLAT SERVICE, , REVIERA, 75690000 GO, CALDAS NOVAS GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/KA04G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/KA04G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/KA04G/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5f970a857dcaf763e1a87cb2" data-id="KA04G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/KA04G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5f80646e6e7d788c66611325">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5f806af36e7d78060d611483?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/JJ01G">
                      sol das calldas poll -
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block

label-info


dropdown" role="button" id="apt-status-5f80646e6e7d788c66611325">
                    <div class="dropdown-toggle" data-toggle="dropdown">

                      Ativo, porém oculto &nbsp;


                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-active-status" href="https://www.jctemporada.com.br/i/apartments/0#yes">Ativo</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5f80646e6e7d788c66611325"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 58%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua 20, Quadra 71, Lotes 4-10, , , 75690-000 Turista II, CALDAS NOVAS GO, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/JJ01G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/JJ01G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/JJ01G/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5f80646e6e7d788c66611325" data-id="JJ01G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/JJ01G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5bc235066cf88a0014b6dab2">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5bc2411231da220012e6f03d?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/HK01F">
                      AS 805 C - Águas Da Serra - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5bc235066cf88a0014b6dab2">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5bc235066cf88a0014b6dab2"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 92%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Presidente Castelo Branco, 500, Apartamento 805 C, 75696-010 Turista 1, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5955309e5ad044000193a2d1/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/HK01F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/HK01F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/HK01F/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5bc235066cf88a0014b6dab2" data-id="HK01F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/HK01F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5faede4d1bc8ebfa83cf93fc">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5faee0221bc8eb309dcf9464?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/KS08G">
                      DRE 507 - diRoma Exclusive Residence. JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5faede4d1bc8ebfa83cf93fc">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5faede4d1bc8ebfa83cf93fc"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 67%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Santa Catarina, S/N, APT 507, 75696-036 Solar de Caldas, Caldas Novas GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5faedc7a1bc8eb86dccf939e/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/KS08G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/KS08G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/KS08G/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5faede4d1bc8ebfa83cf93fc" data-id="KS08G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/KS08G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5dcb11e97ab9c60010e22305">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5dcb13a67ab9c60010e2233d?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/WP02F">
                      ECOL. G-605 FLAT - ECOLOGIC PARK JC TEMPORDA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5dcb11e97ab9c60010e22305">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5dcb11e97ab9c60010e22305"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 67%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;R. Juscelino Kubitscheck, G 605, FLAT G 605, 75690-000 Bandeirantes, Caldas Novas Goiás, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/WP02F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/WP02F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/WP02F/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5dcb11e97ab9c60010e22305" data-id="WP02F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/WP02F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5f0ccb69c55ce972ce5d767b">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5f9442b0cec18f006f30b90f?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/FZ02G">
                      ECOL. G-605 SUITE - ECOLOGIC PARK JC TEMPORDA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5f0ccb69c55ce972ce5d767b">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5f0ccb69c55ce972ce5d767b"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 50%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;R. Juscelino Kubitscheck ELCOLICO PARK, , SUITE G 605, 756900 Bandeirantes, CALDAS NOVAS Goiás, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/FZ02G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/FZ02G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/FZ02G/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5f0ccb69c55ce972ce5d767b" data-id="FZ02G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/FZ02G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5b5892fcbf5c180011fef0f5">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5b7f27bc81fd5c0011051199?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/EI01F">
                      EV 106 - Everest Flat Service - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5b5892fcbf5c180011fef0f5">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5b5892fcbf5c180011fef0f5"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Presidente Castelo Branco Qd 30 Lt 08/10, 450, Apartamento 106, 75696-010 Turista 1, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5b2926bed262120010ac25f1/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/EI01F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/EI01F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/EI01F/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5b5892fcbf5c180011fef0f5" data-id="EI01F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/EI01F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5e5fb4628825220010fdf68d">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5d27a7aa9f1f6a001004695a?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/AY01G">
                      FLAT 953 - GOLDEN DOLPHIN - FLAT -JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5e5fb4628825220010fdf68d">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5e5fb4628825220010fdf68d"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>
                  <span class="label label-default">A Venda</span>
                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Avenida Elias Bufaiçal, Gleba 01, s/n, FLAT 953, 75696-320 Jardim Belvedere, CALDAS NOVAS GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5c8fb683d9d09f00107c2f62/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/AY01G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/AY01G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/AY01G/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5e5fb4628825220010fdf68d" data-id="AY01G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/AY01G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5ca4941433089c0010bbb02d">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5ca4a4db5abfa7001079c907?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/OA01F">
                      GD - 416 - GOLDEN DOLPHIN - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5ca4941433089c0010bbb02d">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5ca4941433089c0010bbb02d"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Avenida Elias Bufaiçal, Gleba 01, s/n, Suite 416, 75696-320 Jardim Belvedere, CALDAS NOVAS GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5c8fb683d9d09f00107c2f62/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/OA01F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/OA01F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5ca4941433089c0010bbb02d" data-id="OA01F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/OA01F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5c928ce211767a00103532d9">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5c929a9011767a0010353756?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/NM02F">
                      GD 526 - GOLDEN DOLPHIN - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5c928ce211767a00103532d9">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5c928ce211767a00103532d9"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 83%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>
                  <span class="label label-default">A Venda</span>
                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Avenida Elias Bufaiçal, Gleba 01, s/n, Suite 526, 75696-320 Jardim Belvedere, CALDAS NOVAS GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5c8fb683d9d09f00107c2f62/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/NM02F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/NM02F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/NM02F/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5c928ce211767a00103532d9" data-id="NM02F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/NM02F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5985f699f1ae1b000f38a779">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5985f91cf1ae1b000f38a808?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/QS03E">
                      HS 746 - Hot Springs - Suíte 746 - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5985f699f1ae1b000f38a779">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5985f699f1ae1b000f38a779"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Suíte
                    | 83%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;4
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;2
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Rua Dona Francisca Alla Cunha,, 152, Apartamento - 746, 75696-004 Do Turista, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5980ceab99dda30010533d21/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/QS03E/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/QS03E/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/QS03E/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5985f699f1ae1b000f38a779" data-id="QS03E">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/QS03E">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5d6fc17272c0fa00106f8f04">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5d6fc5ab7cbe09001010bdff?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/TY02F">
                      LD 322/324 - LACQUA DI ROMA DUPLO - JC TEMPORADA
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5d6fc17272c0fa00106f8f04">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5d6fc17272c0fa00106f8f04"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 75%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;10
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;6
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, - Apartamento 322 / 324, 75694-030 Chácara Roma, CALDAS NOVAS GOIÁS, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/5f635ca71c5a2f15713bde10/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/TY02F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/TY02F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/TY02F/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5d6fc17272c0fa00106f8f04" data-id="TY02F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/TY02F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5f284363a5368d2a37609e06">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/595554125ad044000193a45d?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/GU01G">
                      LD1 - 068 - L´aqua Di Roma
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5f284363a5368d2a37609e06">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5f284363a5368d2a37609e06"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 50%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, - Apartamento 068, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/GU01G/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/GU01G/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5f284363a5368d2a37609e06" data-id="GU01G">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/GU01G">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5e31f003d6c66a0010e3e6a2">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/5e32d8db75859e0010ed83c9?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/ZP04F">
                      LD1 -222 - L´aqua Di Roma
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5e31f003d6c66a0010e3e6a2">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5e31f003d6c66a0010e3e6a2"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 83%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, - Apartamento 222, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/ZP04F/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/ZP04F/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5e31f003d6c66a0010e3e6a2" data-id="ZP04F">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/ZP04F">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <div class="panel panel-default apt_item" data-_idapartment="5955703a680f7b0001900ee9">
              <div class="media">
                <!--IMAGE-->
                <div class="media-left media-middle background-light thumbnail apartment-image background-cover" style="background-image:url(/image/595572e95ad044000193a596?width=128&amp;height=96), url(/image/595fe400dd495600015f43dd);">
                </div>
                <div class="media-body panel-body">
                  <!--NAME-->
                  <h4 class="media-heading">
                    <a target="_blank" href="https://www.jctemporada.com.br/i/apartment/PH14E">
                      LD1 201 - L´acqua Di Roma
                    </a>
                  </h4>
                  <!--LABELS-->
                  <p></p>


                  <div class="label
label-block
label-success



dropdown" role="button" id="apt-status-5955703a680f7b0001900ee9">
                    <div class="dropdown-toggle" data-toggle="dropdown">
                      Ativo &nbsp;



                      <b class="caret"></b>
                    </div>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="btn-hidden-status" href="https://www.jctemporada.com.br/i/apartments/0#hidden">Ativo, porém oculto</a>
                      </li>
                      <li>
                        <a class="btn-draft-status" href="https://www.jctemporada.com.br/i/apartments/0#draft">Rascunho</a>
                      </li>
                      <li>
                        <a class="btn-inactive-status" href="https://www.jctemporada.com.br/i/apartments/0#no">Inativo</a>
                      </li>
                    </ul>
                  </div>
                  <script>
                    requirejs(["views/apartment/apartment_active_status_editable"], function(apartment_active_status_editable) {
                      apartment_active_status_editable({
                        _id: "5955703a680f7b0001900ee9"
                      });
                    }, appError);
                  </script><span class="label label-block label-default">
                    Apartamento
                    | 83%
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-square"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-user"></i>&nbsp;|&nbsp;5
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bed"></i>&nbsp;|&nbsp;3
                  </span>
                  <span class="label label-block label-info apartment-label">
                    <i class="fa fa-bath"></i>&nbsp;|&nbsp;1
                  </span>
                  <span class="label label-default">Temporada</span>

                  <p></p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;|&nbsp;Circular Francisca Lima de Bezerra, S/N, Apartamento 201, 75694-030 Chácara Roma, Caldas Novas Goias, Brasil
                </div>




                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/building/595553a9680f7b0001900d9d/inventory" target="_blank">
                  <i class="fa fa-building text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Prédio</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm" href="https://www.jctemporada.com.br/i/apartment/PH14E/partnership">
                  <i class="fa fa-sitemap text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Channel Manager</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm calendarApt" href="https://www.jctemporada.com.br/i/apartment/PH14E/calendar">
                  <i class="fa fa-calendar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Calendário</small>
                </a>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm " href="https://www.jctemporada.com.br/i/apartment/PH14E/sellprice/timeline">
                  <i class="fa fa-dollar text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Preço</small>
                </a>

                <div role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm aptActivity" data-_id="5955703a680f7b0001900ee9" data-id="PH14E">
                  <i class="fa fa-history text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Atividade</small>
                </div>
                <a role="button" class="hidden-xs hidden-md media-right media-middle text-center media-btn media-sm editApt" href="https://www.jctemporada.com.br/i/apartment/PH14E">
                  <i class="fa fa-chevron-right text-muted fa-2x"></i>
                  <br>
                  <small class="text-muted">Detalhes</small>
                </a>
              </div>
            </div>
            <script>
              requirejs(["views/apartment/apartment_activity"], function(apartment_activity) {
                apartment_activity();
              }, appError);
            </script>
            <nav class="text-center">
              <ul class="pagination">
                <li class="disabled"><a>41 total</a></li>
              </ul>
              <ul class="pagination">
                <li class="hidden"><a href="https://www.jctemporada.com.br/i/apartments/0#">◄</a></li>
                <li class="active"><a href="https://www.jctemporada.com.br/i/apartments/0">1</a></li>
                <li><a href="https://www.jctemporada.com.br/i/apartments/1">2</a></li>
                <li><a href="https://www.jctemporada.com.br/i/apartments/1">►</a></li>
              </ul>
            </nav>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px; width: 609px;">
              <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 574px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 1035px; right: 0px;">
              <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 350px;"></div>
            </div>
          </div>



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