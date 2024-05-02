<?php
include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$numero = $_GET['numero'];
$vendedorId = $_SESSION['id_usuario'];
if (isset($_GET['view'])){
    $view = $_GET['view'];
        if($view=='comissoes') {
            $link = 'Comissões';
        }
        echo '<div class="btn-voltar-view"><a href="../'.$view.'/" class="btn btn-outline-success" title="Voltar para '.$link.'" type="button"><i
        class="fas fa-arrow-left"> </i>&nbsp;'.$link.'</a></div>';
    
}

//CONFIRM DE SAVES
$confirm = $_GET['confirm'];
if(isset($confirm)){
    $confirmacao = '<script>$("#confirmSalvaPedido").val("'.$confirm.'");</script>';
}

// DESCOBRIR O DONO OU TITULO DESTE PEDIDO DE VENDA
$query = "SELECT vendedores.id, vendedores.nome FROM vendedores, vs_vendas WHERE vendedores.id = vs_vendas.idVendedor AND vs_vendas.Número = '$numero'";
$result = mysqli_query($conexao, $query);
$arrTitular = mysqli_fetch_all($result);
mysqli_free_result($result); 
$idTitular = $arrTitular[0][0];
$nomeTitular = $arrTitular[0][1];

// VERIFICA SE O VENDEDOR TEM PERMISSAO PARA VER ESTE PEDIDO
if ($_SESSION['funcao'] == 'Vendedor'){
    $query = "SELECT count(*) AS semvendas FROM vs_vendas WHERE Número = '$numero' AND idVendedor = $vendedorId";
    $result = mysqli_query($conexao,$query);
    $arrResult = mysqli_fetch_all($result); 
    mysqli_free_result($result);
    if(trim($arrResult[0][0]) == '0'){
        header('Location: ./index.php');
        exit;
    } 
}

$sqlDonoDaVenda ="SELECT count(*) as donoDaVenda FROM vendedores, vs_vendas WHERE vendedores.id = vs_vendas.idVendedor AND vendedores.id = $vendedorId AND vs_vendas.Número = '$numero'";
$result = mysqli_query($conexao,$sqlDonoDaVenda);
    $arrDonoVenda = mysqli_fetch_all($result); 
    mysqli_free_result($result);
    $msgDonoVenda = '';
    if(trim($arrDonoVenda[0][0]) == '0'){
        $msgDonoVenda = "Cuidado! Você está editando uma venda de outro vendedor.";    
    } 


?>
<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.css">
<link rel="stylesheet" type="text/css" href="css/generator-base.css">


<script type="text/javascript" charset="utf-8"
    src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.js">
</script>

<script type="text/javascript" charset="utf-8" src="js/table.tbl_itens_pedido.js"></script>
<!-- <script src="js/gera_parcelas.js"></script>   -->

<link rel="stylesheet" href="css/editar_pedido.css">

<style>
    .btn-voltar-view {        
       
    opacity: 1;
    position: fixed!important;
    z-index: 1999!important;
    bottom: 9px;
    right: 20%;
    border-radius: 8px;
    transition: right .5s;
    color: red;
    background: #f4faa1;

    }
.content-item-pedido {
    padding: 16px;
}

.btn-sticky {
    display: block;
    position: fixed !important;
    width: 95%;
    z-index: 10;
    bottom: 0px;
    right: 2px;
}

.btn-sticky+.content-item-pedido {
    padding-top: 400px;
}

#itens_do_pedido_length>label>select {
    width: 45px;
}


#overlay-gerando-parcelas {	
  position: fixed;
  top: 0;
  z-index: 100;
  width: 100%;
  height:100%;
  display: none;
  background: rgba(0,0,0,0.6);
}
.cv-spinner {
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;  
}
.spinner {
  width: 40px;
  height: 40px;
  border: 4px #ddd solid;
  border-top: 4px #2e93e6 solid;
  border-radius: 50%;
  animation: sp-anime 0.8s infinite linear;
}
@keyframes sp-anime {
  100% { 
    transform: rotate(360deg); 
  }
}
.is-hide{
  display:none;
}

</style>
<link rel="stylesheet" href="css/autocomplete2.css">
<script src="js/1c-autocomplete.js"></script>

<?php
//  FUNCOES PHP EXTRAS
$path = dirname(__FILE__);
$path .= '/scripts/funcoes.php';
include_once($path);


$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);



?>

<body class="sidebar-mini sidebar-collapse">

    <!-- Site wrapper -->
    <div class="wrapper" style="display: contents;">
        <!-- Navbar -->
        <?php
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/navbar.php';
    include_once($path);
   ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <!-- Sidebar -->
        <?php
    $path = dirname(__FILE__);
    $path .= '/../../includes/UI/sidebar.php';
    include_once($path);
   ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">
                                
                                </a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>




            <?php
             


            //OFF CANVAS EDITAR CLIENTE
            $path = dirname(__FILE__);
            $path .= '/offcanvasEditarCliente.php';
            include_once($path);  

             //OFF CANVAS ADICIONAR NOVO CLIENTE
             $path = dirname(__FILE__);
             $path .= '/modalNovoCliente.php';
             include_once($path);         
            
            
             
           

            // PEGA OS DADOS DO CLIENTE PELO NUMERO DO PEDIDO
            // E SALVA                 


            // PEGA OS DADOS PARA O FORM DADOS DO CLIENTE
            $query = "SELECT clientes.id as id, clientes.nome as nome, clientes.email as email,
            clientes.fantasia as fantasia, clientes.telefone as telefone, clientes.cnpjcpf as cnpjcpf 
            FROM clientes, tbl_pedidos_venda 
            WHERE clientes.id = tbl_pedidos_venda.id_cliente AND tbl_pedidos_venda.numero_pedido = '$numero'";
            $result = mysqli_query($conexao,$query); 
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                $idcliente = $row['id'];
                $nome_cliente = $row['nome'];
                $fantasia_c = $row['fantasia'];
                $email_c = $row['email'];
                $telefone_c = $row['telefone'];
                $cnpjcpf_c = $row['cnpjcpf'];
            endwhile; 
           
           
           
            ?>

<div id="overlay-gerando-parcelas">
  <div class="cv-spinner">
      <h1>Enviando...</h1><br>
    <span class="spinner"></span>
  </div>
</div>
            <!-- Main content -->
            <div id="main">
                <section class="content">

                    <!-- FORM PEDIDO -> DADOS DO CLIENTE -->
                    <form autocomplete="off" class="form-horizontal" id="salvarpedido" name="salvarpedido"
                        style="width:100%" action="" method="post">

                        <input type="hidden" name="confirmSalvaPedido" id="confirmSalvaPedido" value="">
                          <!-- TITULAR DA VENDA -->
                        <input type="hidden" name="nomeTitularVenda" id="nomeTitularVenda" value="<?php echo $nomeTitular; ?>">
                        <input type="hidden" name="idTitularVenda" id="idTitularVenda" value="<?php echo $idTitular; ?>">
                       

                        <!-- campos ocultos para update -->
                        <input type="hidden" name="numero" id="numero" value="<?php echo $numero; ?>">
                        <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $idcliente; ?>">
                        <input type="hidden" id="dCliente" name="dCliente"
                            value="<?php if(isset($_GET['dCliente'])) { echo $_GET['dCliente']; } else { echo $idcliente; } ?>" />

                        <div class="card">
                            <div class="card-header ui-sortable-handle" style="cursor: pointer;">
                                <h2>Pedidos de Venda</h2>
                                <br>
                            </div>
                            <div class="card-header ui-sortable-handle" id="btnSalvaPedido">
                                <h4 class="card-title btn-resp-show">Salvar Pedido</h4>
                                <h3 class="card-title btn-resp">Dados do Cliente</h3>

                                <div class="card-tools" style="margin-right: 10px;">
                                    <ul class="nav nav-pills ml-auto">

                                        <li class="nav-item">
                                            <button title='Salvar' type='submit' class='btn btn-success float-right' onClick="SalvandoPedido('<?php echo $msgDonoVenda; ?>')"><i
                                                    class='fas fa-save' id='salva-totais-pedido'></i><span
                                                    class="btn-resp"> Salvar</span></button>
                                        </li>
                                        &nbsp;                                       
                                        <?php 
                                        
                                        if(verificaExisteFatura($numero) != 1 and $email_c != '') {
                                        $_SESSION['emailCliente'] =  $email_c;
                                        
                                        $_SESSION['arquivo_fatura'] = verificaExisteFatura($numero);
                                        
                                        echo '<li class="nav-item"><a href="../fatura-pedidos-de-venda/itens-class/?n='.$numero.'" title="Imprimir" type="button" class="btn btn-primary copiar"><i class="fas fa-print"></i></a></li>&nbsp;';                                             
                                            //../fatura-pedidos-de-venda/enviaEmailPedido.php
                                        echo '<li class="nav-item"><a href="" title="Enviar Fatura" type="button" class="btn btn-warning copiar" id="btn-enviar-fatura"> <i class="fas fa-paper-plane"></i></a></li>&nbsp;';
                                        }
                                        else {
                                            
                                            echo '<li class="nav-item"><a href="../fatura-pedidos-de-venda/itens-class/gerar-pdf.php?n='.$numero.'" title="Gerar Fatura PDF" type="button" class="btn btn-secondary copiar buttonload-gerar" id="gerar-fatura-pdf"><i class="fa fa-share-square btn-load-gerar" aria-hidden="true"></i></a></li>&nbsp';
                                        }
                                         ?>
                                        <li class="nav-item">
                                            <a href="./" class="btn btn-danger" type="button"><i
                                                    class="fas fa-arrow-right"></i><span class="btn-resp">
                                                    Voltar</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <!-- AUTOCOMPLETE -->

                                    <div class="col-md-12" id="cliente_complete">
                                        <div class="form-group">
                                            <div class="input-group mb-6 input-group-sm">
                                                <div class="input-group-prepend" id="nome-prepend">
                                                    <span class="input-group-text">Nome</span>
                                                </div>
                                                <input type="text" name="id_cliente" id="id_cliente"
                                                    class="form-control" value="<?php echo $nome_cliente; ?>" required>

                                                <div class="input-group-append">

                                                    <button title='Fechar Editar Cliente' type='button'
                                                        class='btn btn-danger copiar closebtn' data-toggle='modal'
                                                        data-target='#edit_cliente' id="fechaform_cliente"
                                                        onclick="closeNav();">
                                                        <i class='fas fa-times'></i></button>
                                                    <button title='Editar Cliente' type='button'
                                                        class='btn btn-warning copiar' data-toggle='modal'
                                                        data-target='#edit_cliente' id="abreform_cliente"
                                                        onclick="openNav();">
                                                        <i class='fas fa-edit'></i></button>

                                                    <button title='Adicionar Novo Cliente' type='button'
                                                        class='btn btn-success copiar' id="abreform_novocliente"
                                                        onclick="openNav2();">
                                                        <i class='fas fa-user-plus'></i></button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <?php 
                                    if ($_SESSION['funcao'] == 'Gerente') {                   
                                ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Vendedor</span>
                                                </div>
                                                <select name="id_vendedor" id="id_vendedor" class="form-control">

                                                    <?php 
                                                         $query = "SELECT id, nome FROM vendedores WHERE id <> ".$idTitular;
                                                        $result = mysqli_query($conexao,$query); 
                                                        echo '<option value="'.$idTitular.'">'.$nomeTitular.'</option>'; 
                                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>'; 
                                                        endwhile;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    else {                                 
                                    ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Vendedor</span>
                                                </div>
                                                <select name="id_vendedor" id="id_vendedor" class="form-control">
                                                    <?php 
                                                         $query = "SELECT id, nome FROM vendedores WHERE id = ".$_SESSION['id_usuario'];
                                                        $result = mysqli_query($conexao,$query); 
                                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>'; 
                                                        endwhile;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>



                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Data</span>
                                                </div>
                                                <?php 

                                                    $query = "SELECT a.data_registro, a.situacao, b.tipo 
                                                    FROM tbl_pedidos_venda as A
                                                    INNER JOIN tbl_situacao_pedido as B 
                                                    ON A.situacao LIKE B.id
                                                    WHERE a.numero_pedido = '$numero'";

                                                    //$query = "SELECT data_registro, situacao FROM tbl_pedidos_venda 
                                                    //WHERE numero_pedido = '$numero'";
                                                    
                                                    $result = mysqli_query($conexao,$query); 
                                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                                    $data_da_venda = $row['data_registro'];
                                                    $id_situacao_pedido = $row['situacao'];
                                                    $tipo_situacao_pedido = $row['tipo'];                                                                 
                                                    endwhile; 
                                                    
                                                    //$venc = $_GET['data-vencimento'];

                                                    $date = new DateTime($data_da_venda);
                                                    $data_da_venda = $date->format('Y-m-d');
                                            ?>
                                                <input type="date" name="data_da_venda" class="form-control"
                                                    value="<?php echo $data_da_venda; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Situação</span>
                                                </div>
                                                <select name="p_situacao" id="p_situacao" class="form-control">
                                                    <option value="<?php echo $id_situacao_pedido; ?>">
                                                        <?php echo $tipo_situacao_pedido; ?>
                                                    </option>
                                                    <?php 
                                                        $query = "SELECT id, tipo FROM tbl_situacao_pedido WHERE id NOT LIKE '%$id_situacao_pedido%'";
                                                        $result = mysqli_query($conexao,$query); 
                                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                                            echo '<option value="'.$row['id'].'">'.$row['tipo'].'</option>';
                                                        endwhile;
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fantasia</span>
                                                </div>
                                                <input type="text" id="dFantasia" readonly="readonly"
                                                    class="form-control" value="<?php echo $fantasia_c; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Email</span>
                                                </div>
                                                <input type="text" id="dMail" readonly="readonly" class="form-control"
                                                    value="<?php echo $email_c; ?>" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Telefone</span>
                                                </div>
                                                <input type="text" id="dTel" readonly="readonly" class="form-control"
                                                    value="<?php echo $telefone_c; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">CNPJ/CPF</span>
                                                </div>
                                                <input type="text" id="dNum" readonly="readonly"
                                                    class="<?php if (strlen($cnpjcpf_c)==14) { echo 'cpf'; } else { echo 'cnpj'; } ?> form-control"
                                                    value="<?php echo $cnpjcpf_c; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.card-FIM - FORM DADOS CLIENTE -->
                        </div>


                        <!--div lista-->
                        <div class="card content-item-pedido">
                            <div class="card-header">
                                <h3 class="card-title">Itens do Pedido</h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">
                                        <li class="nav-item" data-toggle="modal" data-target="#add_itens_pedido">
                                            <a class="btn btn-success" style="color:#fff;font-weight:600;"
                                                type="button"><i class="fas fa-plus">&nbsp;</i><span class="btn-resp">
                                                    Adicionar Item</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body table-responsive">
                                <table id="itens_do_pedido" class="display responsive hover compact nowrap">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Produto</th>
                                            <th>Unid.</th>
                                            <th>Valor Unit.</th>
                                            <th>Qtde</th>
                                            <th>Desconto</th>
                                            <th>Subtotal</th>
                                            <th>Pedido</th>
                                            <th class="col-produto"></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php                             
                                    //SELECT Número, Data, Situação, Cliente, Total FROM `vendas`
                                    

                                    $query = "SELECT 
                                    I.id,
                                    F.numero_pedido as NF,
                                    P.id as IdProduto,
                                    P.descricao as Produto,
                                    P.unidade as Unidade,
                                    P.preco as Preço,
                                    I.quantidade as Quantidade,
                                    I.desconto as Desconto,
                                    (P.preco * I.quantidade) - I.desconto as Subtotal,
                                    (P.preco * I.quantidade) as TotalItens
                                    FROM tbl_pedidos_venda as F
                                    INNER JOIN tbl_itens_pedido as I
                                    ON F.numero_pedido = I.id_pedido
                                    INNER JOIN tbl_produtos as P
                                    ON I.id_produto = P.id
                                    WHERE I.id_pedido = '$numero'";
                                
                                
                                    $result = mysqli_query($conexao,$query);
                                    $clinha=0;

                                    //VARIAVEIS READONLY
                                    // SESSAO TOTAIS
                                    $soma_qtdes = 0;
                                    $t_desc_itens = 0;
                                    $t_valor_itens = 0;
                                    $t_subtotal = 0;

                                
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                        $clinha++;
                                ?>

                                        <tr role="row" class="even dpedido" data-id="<?php echo $row['id']; ?>">
                                            <td class="col-id-pedido"><?php echo $row['id']; ?></td>
                                            <td class="clinha"><span class="badge badge-dark">
                                                    <?php echo $clinha; ?>
                                                </span></td>

                                            <td class="dpedidoitem"><?php echo $row['Produto']; ?> </td>
                                            <td class="dpedidoitem"><?php echo $row['Unidade']; ?> </td>
                                            <td class="dpedidoitem"><?php echo converteDinheiro($row['Preço']); ?> </td>
                                            <td class="dpedidoitem">
                                                <?php echo $row['Quantidade']; $soma_qtdes+=(float)$row['Quantidade']; ?>
                                            </td>
                                            <td class="dpedidoitem"><?php echo converteDinheiro($row['Desconto']); ?> </td>
                                            <td class="dpedidoitem"><?php echo converteDinheiro($row['Subtotal']); ?> </td>

                                            <td class="dpedidoitem"><?php echo $row['NF'] ?> </td>
                                            <td class="col-produto"><?php echo $row['IdProduto']; ?></td>
                                            <?php 
                                            $t_desc_itens+=(float)$row['Desconto'];
                                            $t_valor_itens+=(float)$row['TotalItens'];
                                            $t_subtotal+=(float)$row['Subtotal'];
                                        ?>
                                            <td>
                                                <button title='Excluir' type='button' class='btn btn-danger'
                                                    data-toggle='modal' data-target='#delete'
                                                    style="border-radius: 50px; padding:4px 8px 4px 8px;">
                                                    <i class='fas fa-trash-alt' style="font-weight:500"></i></button>
                                            </td>

                                        </tr>
                                        <?php endwhile;  ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Produto</th>
                                            <th>Unid.</th>
                                            <th>Valor Unit.</th>
                                            <th>Qtde</th>
                                            <th>Desconto</th>
                                            <th>Subtotal</th>
                                            <th>Pedido</th>
                                            <th class="col-produto"></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>


                            </div>
                            <!-- /.card-body -->

                        </div>

                        <div class="card">

                            <div class="card-header">
                                <h2>Totais</h2>

                            </div>

                            <!-- /.card-header -->

                            <?php
                            // SELECIONA OS CAMPOS DESCONTO, TAXAS ADICIONAIS E FRETE DO PEDIDO

                            $sqldescontos = "SELECT F.desconto as Desconto,
                            F.tipo_pagamento as tipo_pagamento,
                            F.observacoes as observacoes,
                            F.obs_internas as obs_internas,
                            F.data_entrega as dtaEntrega,
                            F.data_prevista as dtaPrevista,
                            F.data_saida as dtaSaida,
                            F.prazo_entrega as prazoEntreg,
                            F.taxas_adicionais as Taxas,
                            F.frete as Frete,
                            F.valor_total as TotalVenda,
                            F.comissao as Comissao,
                            F.coms_percent as Pcomissao,
                            F.desconto+F.taxas_adicionais+F.frete as TDesc
                            FROM tbl_pedidos_venda as F
                            WHERE F.numero_pedido = '$numero'";

                            $rdesc = mysqli_query($conexao,$sqldescontos);
                            while($row = mysqli_fetch_array($rdesc, MYSQLI_ASSOC)) :

                                $dtaEntrega2 = $row['dtaEntrega'];
                                $dtaPrevista2 = $row['dtaPrevista'];
                                $dtaSaida2 = $row['dtaSaida'];
                                $prazoEntreg2 = $row['prazoEntreg'];                               

                                $desc2 = $row['Desconto'];
                                $taxas2 = $row['Taxas'];
                                $frete2 = $row['Frete']; 
                                $totalvenda2 = $row['TotalVenda'];
                                $tcomissao2 = $row['Comissao'];
                                $pcoms2 = $row['Pcomissao']; 
                                $TDesc = $row['TDesc'];
                                $tipo_pagamento2 = $row['tipo_pagamento'];
                                $observacoes2 = $row['observacoes'];
                                $obs_internas2 = $row['obs_internas'];

                            endwhile;

                            
                            
                            ?>

                            <div class="card-body table-responsive">
                                <br>

                                <input type="hidden" name="numero" id="numero" value="<?php echo $numero; ?>">
                                <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $idcliente; ?>">

                                <!--       <span class="botaosalvar" style="text-align:right;">
                                    <button title='Salvar' type='submit' class='btn btn-success'><i
                                            class='fas fa-save'></i></button>
                                </span>
 -->
                                <div class="form-row">

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="nitens">Nº de itens</label>
                                        <input type="text" id="nitens" name="nitens" readonly="readonly"
                                            class="form-control tvaloritens" value="<?php echo $clinha; ?>" />
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dMail">Soma das Quantidades</label>
                                        <input type="text" id="" readonly="readonly" class="form-control"
                                            value="<?php echo $soma_qtdes; ?>" />
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dTel">(&sum;) Valor dos Produtos <span class="fas fa-info-circle"
                                                title="Soma Valor dos Produtos"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span>R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="hidden" id="subTotalnDesc" name="subTotalnDesc"
                                                value="<?php echo $t_valor_itens; //if (isset($_GET['subTotalnDesc'])) { echo $_GET['subTotalnDesc']; } ?>" />
                                            <input type="text" id="t-valoritens" readonly="readonly"
                                                class="form-control"
                                                style="background-color: #dcf0eb; font-weight: bold;"
                                                value="<?php converteDinheiro($t_valor_itens); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="totalDescItens">(&sum;) Descontos/Item <span
                                                class="fas fa-info-circle"
                                                title="Soma dos Descontos por Item"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tvaloritens">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" name="totalDescItens" readonly="readonly"
                                                id="totalDescItens" class="money-in form-control"
                                                value="<?php converteDinheiro($t_desc_itens); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="descAdicional">Desconto<span class="fas fa-info-circle"
                                                title="Descontos Adicionais Personalizados"></span></label>
                                        <div class="input-group mb-3 input-group-xs">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tsubtotal">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="descAdicional" name="descAdicional"
                                                class="form-control" value="<?php converteDinheiro($desc2); ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="tx_add">Taxas Adicionais <span class="fas fa-info-circle"
                                                title="Impostos, Taxas Adicionais"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tvaloritens">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="tx_add" name="tx_add" class="form-control"
                                                value="<?php converteDinheiro($taxas2); ?>" />
                                        </div>
                                    </div>

                                </div>

                                <?php 
                                    $date = new DateTime($dtaEntrega2);
                                    $dtaEntrega2 = $date->format('Y-m-d');
                                    
                                    $date = new DateTime($dtaPrevista2);
                                    $dtaPrevista2 = $date->format('Y-m-d');

                                    $date = new DateTime($dtaSaida2);
                                    $dtaSaida2 = $date->format('Y-m-d');

                                ?>
                                <div class="form-row">
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="">Data da Venda <span class="fas fa-info-circle"
                                                title="Data de cadastro da Venda"></span></label>
                                        <input type="date" readonly="readonly" class="form-control"
                                            value="<?php echo $data_da_venda; ?>" />

                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="prazoEntrega">Prazo da Entrega <span class="fas fa-info-circle"
                                                title="Em dias. Ex: 3"></span></label>
                                        <input type="number" id="prazoEntrega" name="prazoEntrega" required
                                            class="form-control" value="<?php echo $prazoEntreg2; ?>" />
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dataSaida">Data de Saída</label>
                                        <input type="date" id="dataSaida" name="dataSaida" class="form-control"
                                            value="<?php echo $dtaSaida2; ?>" />

                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dNum">Data da Prevista</label>
                                        <input type="date" id="dataPrevista" name="dataPrevista" class="form-control"
                                            value="<?php echo $dtaPrevista2; ?>" />
                                    </div>


                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dataEntrega">Data da Entrega <span class="fas fa-info-circle"
                                                title="Data de Chegada do Pedido no Cliente"></span></label>
                                        <input type="date" id="dataEntrega" name="dataEntrega" class="form-control"
                                            value="<?php echo $dtaEntrega2; ?>" />
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="valorFrete">Frete <span class="fas fa-info-circle"
                                                title="Valor do Frete"></span></label>
                                        <div class="input-group mb-3 input-group-xs">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tsubtotal">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="valorFrete" name="valorFrete" class="form-control"
                                                value="<?php converteDinheiro($frete2); ?>" />
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <h4>Detalhes da Venda</h4>

                                <div class="form-row">

                                    <br>
                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="numPedido">Número <span class="fas fa-info-circle"
                                                title="Número do Pedido - Ver Configurações."></span></label>
                                        <input type="text" readonly="readonly" class="form-control "
                                            value="<?php echo $numero; ?>" />

                                    </div>

                                    <div class="form-group col-lg-1 col-md-2">
                                        <label for="ordemCompra">Nº Compra <span class="fas fa-info-circle"
                                                title="Número da Ordem de Compra"></span></label>
                                        <input type="text" id="ordemCompra" name="ordemCompra" class="form-control"
                                            value="<?php //if(isset($_GET['valorFrete'])) { echo $_GET['valorFrete']; } ?>" />
                                    </div>



                                    <div class="form-group col-lg-1 col-md-3">
                                        <label for="porComss">Comissão (%) <span class="fas fa-info-circle"
                                                title="Porcentagem da Comissão"></span></label>

                                        <input type="text" id="porComss" name="porComss" class="form-control"
                                            value="<?php echo $pcoms2; ?>">
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="tComissoes">Total da Comissões<span class="fas fa-info-circle"
                                                title="Soma Total das Comissões"></span></label>
                                        <div class="input-group mb-3 input-group-xs">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tsubtotal">R$ '; echo $moeda; ?></span></span>
                                            </div>

                                            <input type="hidden" id="vTComs2" name="vTComs2"
                                                value="<?php echo $tcomissao2; ?>">
                                            <input type="text" readonly="readonly" id="totalComissoes"
                                                name="totalComissoes" class="form-control"
                                                value="<?php echo number_format($tcomissao2,2," ,","."); ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="dNum">(&sum;)Total Descontos <span class="fas fa-info-circle"
                                                title="Soma (Descontos por Item + Desconto + Taxas Adicionais + Frete"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tvaloritens">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="" readonly="readonly" class="form-control"
                                                value="<?php $TotalDescontos = $t_desc_itens+$TDesc; converteDinheiro($TotalDescontos); ?>">
                                        </div>
                                    </div>



                                    <div class="form-group col-lg-2 col-md-5">
                                        <label for="soma-final">Valor Total da Venda <span class="fas fa-info-circle"
                                                title="Valor Total do Pedido Calculado"></span></label>
                                        <div class="input-group mb-3 input-group-xs">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tsubtotal">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="soma-final" name="soma-final" readonly="readonly"
                                                class="form-control" value="<?php converteDinheiro($totalvenda2); ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="tFatura">Total Fatura<span class="fas fa-info-circle"
                                                title="Valor Total Final do Pedido Subtraindo o Valor Total de Comissões"></span></label>
                                        <div class="input-group mb-3 input-group-xs">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tsubtotal">R$ '; echo $moeda; ?></span></span>
                                            </div>

                                            <input type="text" id="tFatura" name="tFatura" readonly="readonly"
                                                class="form-control"
                                                value="<?php converteDinheiro($totalvenda2-$tcomissao2); ?>" />

                                        </div>
                                    </div>

                                </div>

                                <div class="card">

                                    <div class="card-header">
                                        <h2>Pagamento</h2>

                                    </div>

                                    <!-- /.card-header -->

                                    <div class="card-body table-responsive" style="overflow:hidden;">
                                        <div class="row">
                                            <div class="form-group col-lg-5 col-md-5">
                                                <label for="tipo_pagamento">Tipo de Pagamento<span
                                                        class="fas fa-info-circle"
                                                        title="A configuração do parcelamento -> Ex: 30,60,90. Deixe em branco para pagamento à Vista.">
                                                    </span></label>
                                                <div class="form-group">
                                                    <div class="input-group mb-6 input-group-sm">

                                                        <input type="text" id="tipo_pagamento" name="tipo_pagamento"
                                                            class="form-control"
                                                            value="<?php if ($tipo_pagamento2 != '') { echo $tipo_pagamento2; } else { echo 'À Vista'; } ?>">
                                                        <div class="input-group-append">
                                                            <button title='Parcelas Mistas' type='button'
                                                                class='btn btn-primary float-right'
                                                                id='gera-parcelas-mistas' data-toggle='modal' data-target='#add_parcelas_mistas'>                                                                
                                                                <span class="btn-resp"> Mistas </span>&nbsp;<i class="fa fa-calculator" aria-hidden="true"> </i>
                                                                </button>&nbsp;
                                                                <button title='Gerar Parcelas' type='button'
                                                                class='btn btn-warning float-right buttonload'
                                                                id='gera-parcelas'>
                                                                <i class='fa fa-spinner btn-load' id='btn-parcelas'></i>
                                                                <span class="btn-resp"> Gerar</span></button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group col-lg-7 col-md-7" id="tabela-parcelas"
                                                style="border: 1px dotted #F2FAF8;">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">

                                        <div class="card-header">
                                            <h2>Dados Adicionais</h2>

                                        </div>

                                        <!-- /.card-header -->

                                        <div class="card-body table-responsive">
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-md-12">
                                                    <label for="soma-final">Observações no Pedido<span
                                                            class="fas fa-info-circle"
                                                            title="Estas informações serão impressas no pedido, na fatura e transferida para as observações da nota"></span></label>

                                                    <textarea id="observacoes" name="observacoes" class="form-control"
                                                        rows="7"><?php echo $observacoes2; ?></textarea>

                                                </div>

                                                <div class="form-group col-lg-12 col-md-12">
                                                    <label for="soma-final">Observações Internas<span
                                                            class="fas fa-info-circle"
                                                            title="Estas informações são de uso interno, portanto não serão impressas"></span></label>

                                                    <textarea id="obs_internas" name="obs_internas" class="form-control"
                                                        rows="3"><?php echo $obs_internas2; ?></textarea>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-tools">
                                        <ul class="nav nav-pills ml-auto">
                                            <li class="nav-item" data-toggle="modal" data-target="#">
                                                <a class="btn"><i class="fas fa-users"></i>xxx</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- /.card-header -->

                    </form>
                </section>
            </div>

            <!-- /.card -->


            <?php

        /*     $path = dirname(__FILE__);
            $path .= '/modalAdd.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/modalUpdate.php';
            include_once($path);
            **/

            
            $path = dirname(__FILE__);
            $path .= '/modal_add_itens.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/modal_update_itens.php';
            include_once($path);


            $path = dirname(__FILE__);
            $path .= '/modal_delete_itens.php';
            include_once($path);

            
            $path = dirname(__FILE__);
            $path .= '/modal_edit_produto.php';
            include_once($path);
         
            $path = dirname(__FILE__);
            $path .= '/modal_add_novo_produto.php';
            include_once($path);


            $path = dirname(__FILE__);
            $path .= '/modal_add_parcelas_mistas.php';
            include_once($path);
        ?>


            <!-- /.content -->

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
    </div>
    <!-- jQuery -->
    <script src="../../includes/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../includes/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../includes/dist/js/demo.js"></script>
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Forms -->
    <script src="js/forms_itens_pedido.js"></script>
    <script src="js/frmsssalvapedido.js"></script>
    <script src="js/salvapedidoconfirm.js"></script>
    <script src="js/adicionar_novo_cliente.js"></script>
    <script src="js/adicionar_novo_produto.js"></script>



    <!-- Table -->
    <script src="js/table_itens_pedido.js"></script>
    <script src="js/jquery-maskmoney.js"></script>
    <script src="js/jquery.mask.min.js"></script>

    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("btnSalvaPedido");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("btn-sticky");
            header.style.backgroundColor = "#F2FAF8";

        } else {
            header.classList.remove("btn-sticky");
            header.style.backgroundColor = "white";

        }
    }
    </script>



    <script>
    // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
    window.addEventListener("DOMContentLoaded", function() {
        /*  ac.attach({
             target: "id_cliente",
             data: "search-cliente.php",
             post: {
                 type: "name"
             }
         }); */
        ac.attach({
            target: "id_cliente",
            data: "search-cliente.php",
            post: {
                type: "name"
            },
            // OPTIONAL
            delay: 1000,
            min: 3
        });
    });
    </script>

    <script>
    $(function() {
        $("#itens_do_pedido").DataTable({
            "responsive": true,
            "autoWidth": false,
            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: 5
                },
                {
                    responsivePriority: 3,
                    targets: 7
                },
                {
                    responsivePriority: 4,
                    targets: 4
                }

            ]
        });
    });
    </script>

    <script>
    // FORMATACAO MASCARA DOS CAMPOS EM FORMULARIOS
    $(document).ready(function() {
        $('.cpf').mask('000.000.000-00');
        $('.cnpj').mask('00.000.000/0000-00');
        $('.time').mask('00:00:00');
        $('.date_time').mask('99/99/9999 00:00:00');
        $('.cep').mask('99.999-999');
        $('.phone').mask('+99 (99) 9999-9999');
        $('.phone_with_ddd').mask('(99) 9999-9999');
        $('.all_phones').mask('(99) 09999-9999');
        $('.phone_us').mask('(999) 999-9999');
        $('.mixed').mask('AAA 000-S0S');
        /* $('.comissao-perc').mask('000.00'); */

        $('#cep_cliente').keypress(function() {
            txtBoxFormat(this.form, this.name, '99.999-999', this)
        });
    });
    </script>

    <script>
    $(document).ready(function() {
        var table = $('#itens_do_pedido').DataTable();
        $('#itens_do_pedido tbody').on('click', 'tr td.dpedidoitem', function() {
            $('#prod_select').val("0");

            var data = table.row(this).data();
            $('#edit_itens_pedido').modal({
                show: true
            });

            var valprod4 = $('#id_produto_i').find(':first').attr('data-preco');
            $("#val_produto").val(valprod4);

            //alert('ID do Item ' + data[0] + '\'s row');
            //var url = "editar_pedido.php?numero=" + data[1];
            //window.location.replace(url);
        });

        $(document).ready(function() {

            $("#porComss").focus(function() {
                var tComs = parseFloat($("#soma-final").val());
                var pComs = parseFloat($("#porComss").val() * 10);
                var uptdComs = pComs * tComs;
                $("#totalComissoes").val(uptdComs);
                $("#vTComs2").val(uptdComs);
            });

            $("#porComss").keyup(function() {
                //$("#val_produto").css("background-color", "pink");
                var tComs = parseFloat($("#soma-final").val());
                var pComs = parseFloat($("#porComss").val() * 10);
                var uptdComs = pComs * tComs;
                $("#totalComissoes").val(uptdComs);
                $("#vTComs2").val(uptdComs);
            });

            $("#porComss").keydown(function() {
                //$("#val_produto").css("background-color", "yellow");
                var tComs = parseFloat($("#soma-final").val());
                var pComs = parseFloat($("#porComss").val() * 10);
                var uptdComs = pComs * tComs;
                $("#totalComissoes").val(uptdComs);
                $("#vTComs2").val(uptdComs);
            });

            $("#porComss").keypress(function() {
                var tComs = parseFloat($("#soma-final").val());
                var pComs = parseFloat($("#porComss").val() * 10);
                var uptdComs = pComs * tComs;
                $("#totalComissoes").val(uptdComs);
                $("#vTComs2").val(uptdComs);
            });
        });
    });
    </script>

    <script>
    // FUNCOES QUE ABREM E FECHAM OFF-CANVAS EDITAR CLIENTE    
    function openNav() {
        if (screen.availWidth <= 768) {
            document.getElementById("mySidenav").style.width = "100%";
            document.getElementById("mySidenav").style.border = "0";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

        } else if (screen.availWidth < 1200) {
            var sidebar = document.getElementById("menu-lateral-app").offsetWidth;
            document.getElementById("mySidenav").style.width = screen.availWidth - sidebar + "px";
            document.getElementById("fechaform_cliente").style.display = "block";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        } else {
            document.getElementById("mySidenav").style.width = "50%";
            document.getElementById("fechaform_cliente").style.display = "block";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

            document.getElementById("overlay_forms").style.width = "100%";
            //document.getElementById("overlay_forms").style.padding = "23%";
            document.getElementById("overlay_forms").style.display = "block";
            document.getElementById("overlay_forms").style.opacity = "0.85";

        }
        document.getElementById("main").style.marginRight = "0px";
        document.getElementById("abreform_cliente").style.display = "none";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginRight = "0";
        document.body.style.backgroundColor = "white";
        document.getElementById("abreform_cliente").style.display = "block";
        document.getElementById("fechaform_cliente").style.display = "none";
        if (screen.availWidth > 1200) {
            document.getElementById("overlay_forms").style.display = "none";
        }
    }

    /* var modal = document.getElementById('main');
    modal.addEventListener('click', function(e) {
      if (e.target == this) closeNav();
    }); */
    </script>

    <script>
    function countString(str, letter) {
        let count = 0;

        // looping through the items
        for (let i = 0; i < str.length; i++) {

            // check if the character is at that position
            if (str.charAt(i) == letter) {
                count += 1;
            }
        }
        return count;
    }
/* 
    function dynamicAjaxSwal() {
        const ipAPI = '//api.ipify.org?format=json'

        Swal.queue([{
            title: 'Your public IP',
            confirmButtonText: 'Show my public IP',
            text: 'Your public IP will be received ' +
                'via AJAX request',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return fetch(ipAPI)
                    .then(response => response.json())
                    .then(data => Swal.insertQueueStep(data.ip))
                    .catch(() => {
                        Swal.insertQueueStep({
                            icon: 'error',
                            title: 'Unable to get your public IP'
                        })
                    })
            }
        }])
    } */

    function addOption(selectOpt, id, nome) {
        oldText = $('select[name='+selectOpt+'] option').filter(':selected').text();
        oldValue = $('select[name='+selectOpt+'] option').filter(':selected').val();
        optText = nome;
        optValue = id;
        
        //$('#'+selectOpt).prepend(new Option(optText, optValue));
        $('select[name='+selectOpt+'] option').filter(':selected').val(id);
        $('select[name='+selectOpt+'] option').filter(':selected').text(nome);
        $('#'+selectOpt).append(new Option(oldText, oldValue));

        // Remove os ids e nomes de vendedores duplicados
        var optionValues =[];
        $('#'+selectOpt+' option').each(function(){
        if($.inArray(this.value, optionValues) >-1){
            $(this).remove()
        }else{
            optionValues.push(this.value);
        }
        });
      }

      function SalvandoPedido(optSalvar){
          
       
        if (optSalvar != '') 
        {
            var saveTitular = $('#idTitularVenda').val();
            var saveAtual = $('#id_vendedor').val();
            
            if (saveTitular == saveAtual) {
                var url = "editar_pedido.php?numero=" + <?php echo $numero; ?> + "&confirm=same";
                    window.location.replace(url);

            }
            else {

                    var rs = confirm(optSalvar);
                    if (rs == true)
                    {
                        $("#confirmSalvaPedido").val('ok');
                        $("#id_vendedor").css("color","green");
                        $('#salvarpedido').submit();                        
                    
                    }
                    
                    else { 
                    
                    /* DonoDaVenda('<?php //echo $numero; ?>'); */
                        
                    var idVend = $('#idTitularVenda').val();
                    var nomeVend = $('#nomeTitularVenda').val();
                    $("#id_vendedor").val(idVend);
                    $("#id_vendedor").text(nomeVend);
                    //$('select[name=id_vendedor] option').filter(':selected').val(id);
                    // $('select[name=id_vendedor] option').filter(':selected').text(nomeVend);
                    
                    $("#confirmSalvaPedido").val('nada');
                    $("#id_vendedor").css("color","red");                     
                    
                    var url = "editar_pedido.php?numero=" + <?php echo $numero; ?> + "&confirm=nao";
                    window.location.replace(url);
                    
                    $("#id_vendedor").val(idVend);
                    $("#salvarpedido").submit(function(e) {
                            e.preventDefault();
                            var savefrm = $.ajax({
                                url: "https://rotaapp.local/sys/app/config/functions/SalvarPedidoDeVenda.php",
                                method: "post",
                                data: $("form").serialize(),
                                dataType: "text",
                                success: function(strMessage) {
                                    $("#message").text(strMessage);
                                    if (strMessage == 'sucesso') 
                                    {
                                        Swal.fire({
                                            title: '',
                                            text: "Pedido atualizado com sucesso!",
                                            icon: 'success',
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'OK',                                   
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                //location.reload();
                                                var url = "editar_pedido.php?numero=" + <?php echo $numero; ?> + "&confirm=ok";
                                                window.location.replace(url);
                                            }
                                        })

                                    } 
                                    else 
                                    {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: strMessage,

                                        });

                                    }
                                }
                            })

                        })
                    }
                } 
            }
        }


    // FUNCAO QUE MUDA O SELECT DO editar_pedido.php de acordo com o 
    // TITULAR DA VENDA.. SE CONFIRMAR O AVISO INICIAL
    function DonoDaVenda(pedido) {
        const ipAPI = 'select-ajax/getDonoVenda.php?num='+pedido
        
        Swal.queue([{
            title: 'Dono da Venda',
            icon: 'success',
            timer: 10000,
            confirmButtonText: 'Sim',
            text: 'Editar sem mudar Titular deste Pedido de Venda?',
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return fetch(ipAPI)
                    .then(response => response.json())
                    .then(
                        data => {
                            Swal.insertQueueStep(('Editando como Titular  Vendedor: '+data.nome)),                       
                        addOption('id_vendedor', data.id , data.nome)
                        /* $('#id_vendedor').options[0].val('teste') */
                        })
                    .catch(() => {
                        Swal.insertQueueStep({
                            icon: 'error',
                            title: 'Impossível Saber o Dono da Venda'
                        })
                    })
            }
        }])
    }

    // 'Parcelamento não configurado!'
    // 'Pagamento á Vista! Para parcelamento configure corretamente as parcelas!',
    // 'error'
    function alertSistema(titulo, msg, tipo, btnlabel, btncolor, acao = null) {
        Swal.fire({
            title: titulo,
            text: msg,
            timer: 2500,
            icon: tipo,
            confirmButtonColor: btncolor,
            cancelButtonColor: '#99cc00',
            confirmButtonText: btnlabel
        }).then((result) => {
            if (result.isConfirmed) {
                setTimeout(function() {
                    if (acao == 'parcelas') {
                        $("#tipo_pagamento").focus();
                    }
                    else {
                        DonoDaVenda(<?php echo $numero; ?>);
                    }
                    //alert(acao);
                }, 300);

            }
        })
    }

    function geraParcelas() {
        var tipoPagamento = $("#tipo_pagamento").val();
        if (tipoPagamento == '') {
            $("#tipo_pagamento").val("À Vista");
            return 0;
        }
        // Descobre em quantas parcelas será o pagamento
        var totalParcelas = countString(tipoPagamento, ',') + 1;
        // Pega a data de entrega
        var dataEntrega = $("#dataEntrega").val();
        // Pega o valor total e formata para numero decimal
        var valorTotal = $("#soma-final").val();
        valorTotal = valorTotal.replace(".", "");
        valorTotal = valorTotal.replace(",", ".");
        var n_valor = parseFloat(valorTotal).toFixed(2);
        // Descobre o valor de cada parcela
        var n = new Number(n_valor / totalParcelas);
        var myObj = {
            style: "currency",
            currency: "BRL"
        }

        // dias da parcela
        var dias = tipoPagamento.split(",");
        var tr_parcelas = '';

        var date = new Date(dataEntrega);

        // CRIA AS LINHAS DAS PARCELAS
        for (let i = 0; i < totalParcelas; i++) {

            var date = new Date(dataEntrega);
            date.setDate(date.getDate() + parseInt(dias[i]));
            var data_parcela = ((date.getDate() + 1)) + "/" + ((date.getMonth() + 1)) + "/" + date.getFullYear();

            tr_parcelas +=
                '<tr><td style="width: 6%; padding:2px;"><span class="badge badge-secondary" style="padding: 5px 8px 5px 8px; background-color: #b4b7ba; color: #fff;">' +
                (i + 1) + ' </span></td><td style="width: 6%;">' + dias[i] + '</td><td style="width: 16%">' +
                data_parcela + '</td><td>' + n.toLocaleString("pt-BR", myObj) + '</td></tr>';
        }

        var inicioTabela =
            '<div class="parcelamento" style="border-left: 1px dotted grey;padding-left: 6px;"><p><b>Parcelas: </b></p><table id="pag_grparcelas" class="itens-list" style="display: table; width: 100%; position: relative; margin-left: 5%;"><tbody><tr id="pag_parcelas_header"><th></th><th id="str_frame_pagamento_dias">Dias</th><th id="str_frame_pagamento_data">Data</th><th id="str_frame_pagamento_valor">Valor</th></tr>' +
            tr_parcelas + '</tbody></table></div>';

        $("#tabela-parcelas").append(inicioTabela);
    }

    

    $(document).ready(function() {      

      

        $(".buttonload-gerar").click(function() {
            $(".buttonload-gerar").removeClass("btn-secondary");
            $(".buttonload-gerar").addClass("btn-primary");
            $(".btn-load-gerar").removeClass("fa-share-square");
            $(".btn-load-gerar").addClass("fa-spinner");
            $(".btn-load-gerar").addClass("fa-spin");
            setTimeout(function() {
                $(".btn-load-gerar").removeClass("fa-spin");
            }, 11000);
        });

        $(".buttonload").click(function() {
            $(".btn-load").addClass("fa-spin");
            setTimeout(function() {
                $(".btn-load").removeClass("fa-spin");
            }, 900);
        });

        var tpagamento = $("#tipo_pagamento").val();

        if (tpagamento != 'À Vista') {
            //alert(tpagamento);
            geraParcelas();
        }

        $("#gera-parcelas").click(function() {
            $(".parcelamento").empty();

            var tipoPagamento = $("#tipo_pagamento").val();
            if (tipoPagamento == '') {
                $("#tipo_pagamento").val("À Vista");
                $("#tipo_pagamento").focus();
                return 0;
            }
            if (tipoPagamento == 'À Vista') {
                alertSistema('Parcelamento não configurado!', 'Configure corretamente as parcelas!',
                    'error', 'Configurar', '#d33', 'parcelas');
                //alert("Pagamento á Vista! Para parcelamento configure corretamente as parcelas!");

                return 0;
            }
            // Descobre em quantas parcelas será o pagamento
            var totalParcelas = countString(tipoPagamento, ',') + 1;
            // Pega a data de entrega
            var dataEntrega = $("#dataEntrega").val();
            // Pega o valor total e formata para numero decimal
            var valorTotal = $("#soma-final").val();
            valorTotal = valorTotal.replace(".", "");
            valorTotal = valorTotal.replace(",", ".");
            var n_valor = parseFloat(valorTotal).toFixed(2);
            // Descobre o valor de cada parcela
            var n = new Number(n_valor / totalParcelas);
            var myObj = {
                style: "currency",
                currency: "BRL"
            }

            // dias da parcela
            var dias = tipoPagamento.split(",");
            var tr_parcelas = '';

            var date = new Date(dataEntrega);

            // CRIA AS LINHAS DAS PARCELAS
            for (let i = 0; i < totalParcelas; i++) {

                var date = new Date(dataEntrega);
                date.setDate(date.getDate() + parseInt(dias[i]));
                var data_parcela = ((date.getDate() + 1)) + "/" + ((date.getMonth() + 1)) + "/" + date
                    .getFullYear();

                tr_parcelas +=
                    '<tr><td style="width: 6%; padding:2px;"><span class="badge badge-secondary" style="padding: 5px 8px 5px 8px; background-color: #b4b7ba; color: #fff;">' +
                    (i + 1) + ' </span></td><td style="width: 6%;">' + dias[i] +
                    '</td><td style="width: 16%">' + data_parcela + '</td><td>' + n.toLocaleString(
                        "pt-BR", myObj) + '</td></tr>';
            }

            var inicioTabela =
                '<div class="parcelamento" style="border-left: 1px dotted grey;padding-left: 6px;"><p><b>Parcelas: </b></p><table id="pag_grparcelas" class="itens-list" style="display: table; width: 100%; position: relative; margin-left: 5%;"><tbody><tr id="pag_parcelas_header"><th></th><th id="str_frame_pagamento_dias">Dias</th><th id="str_frame_pagamento_data">Data</th><th id="str_frame_pagamento_valor">Valor</th></tr>' +
                tr_parcelas + '</tbody></table></div>';

            $("#tabela-parcelas").append(inicioTabela);
        });
    });
    </script>
  
    <?php
        print $confirmacao;


        if ($msgDonoVenda != '') {
            echo "<script>alertSistema('Atenção', 'Pedido de outro Vendedor!', 'warning', 'Ver Vendedor', '', '')</script>";
            //echo "<script>dynamicAjaxSwal()</script>";
            }    
    ?>
<script>
$(document).ready(function() {    
    var cfm = $('#confirmSalvaPedido').val();
    if (cfm == 'nao') {
         DonoDaVenda('<?php echo $numero; ?>');
    }
});
</script>


<script>
  //btn-enviar-fatura ../fatura-pedidos-de-venda/enviaEmailPedido.php 
/*  $(document).ready(function() {
  $("#btn-enviar-fatura").click(function() {
            //alert('Enviando a fatura');
            $("#overlay-gerando-parcelas").fadeIn(1000);
            $("#overlay-gerando-parcelas").load("../fatura-pedidos-de-venda/enviaEmailPedido.php", function(responseTxt, statusTxt, xhr){
                if(statusTxt == "success") {
                //alert("Fatura enviada com sucesso");
                alert("Error: " + xhr.status + ": " + xhr.statusText);
                Swal.fire({
                        title: 'Fatura Enviada com Sucesso',
                        timer: 2500,
                        icon: 'success',
                        showConfirmButton: false,                       
                    })
                }
                if(statusTxt == "error")
                alert("Error: " + xhr.status + ": " + xhr.statusText);
            });
     
        });


    }); */    
    
    
</script>

<script>
$(document).ready(function() {   
    $("#btn-enviar-fatura").click(function() { 
        $("#overlay-gerando-parcelas").fadeIn(1000);
        $.get("../fatura-pedidos-de-venda/enviaEmailPedido.php", function(data, status){
            if(data == "sucesso") {
                //alert("Fatura enviada com sucesso");
                //alert("Error: " + xhr.status + ": " + xhr.statusText);
                Swal.fire({
                        title: 'Fatura Enviada com Sucesso',
                        timer: 2500,
                        icon: 'success',
                        showConfirmButton: false,                       
                    })
                }
                else {
                alert("Erro!  Status: " + status + "  Msg: " + data);
               /*  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Status: ' + status + ' Msg: ' + data,
                    footer: '<a href>Why do I have this issue?</a>',
                    showConfirmButton: true,
                    timer: 4000
                   
                }) */
            }
        //alert("Data: " + data + "\nStatus: " + status);
        });
    });
});
</script>

</body>

</html>