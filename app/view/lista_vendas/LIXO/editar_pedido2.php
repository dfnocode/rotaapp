<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.css">
<link rel="stylesheet" type="text/css" href="css/generator-base.css">
<link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

<script type="text/javascript" charset="utf-8"
    src="https://cdn.datatables.net/v/dt/jqc-1.12.4/moment-2.18.1/dt-1.10.24/b-1.7.0/date-1.0.3/sl-1.3.3/datatables.min.js">
</script>
<script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
<script type="text/javascript" charset="utf-8" src="js/table.tbl_itens_pedido.js"></script>

<link rel="stylesheet" href="css/edit_pedido.css">

<style>
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

.btn-sticky + .content-item-pedido {
    padding-top: 400px;
}
</style>
<link rel="stylesheet" href="css/autocomplete2.css">
<script src="js/1c-autocomplete.js"></script>

<?php

include "../../config/database/conexao.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);


function converteDinheiro( $num ) {
    $str = (string)$num;
    //echo $str;
    
    $ntotal = number_format($str, 2);
    $stotal = (string)$ntotal;
    $arrTotal = explode(".",$stotal);
    $esquerdo = $arrTotal[0];
    $esquerdo = str_replace(",",".",$esquerdo);
    $direito = $arrTotal[1];
    $final = $esquerdo.','.$direito;
    echo trim($final);
}


function somaComissoes ($tVenda, $vComs) {
	$numTot = trim(str_replace(',','.',str_replace('.','',$tVenda)));
	$totalComs = ($numTot * number_format($vComs,2,",","."))/100;
    return number_format($totalComs,2,",",".");
}


function somaValorFatura($Tpedido,$TComs) {
    $nfat = explode(",",$Tpedido);
  $f1 = str_replace(".","",$nfat[0]);
  $f2 = $nfat[1];
  $totalFat = $f1 . "." . $f2; 
  return $totalFat-$TComs;
}

function subtrairDoPedido($Tpedido,$vFrete) {
    $nfat = explode(",",$Tpedido);
    $f1 = str_replace(".","",$nfat[0]);
    $f2 = $nfat[1];
    $totalFat = $f1 . "." . $f2;    
    
    $nfrete = explode(",",$vFrete);
    $f1 = str_replace(".","",$nfrete[0]);
    $f2 = $nfrete[1];
    $cFrete = $f1 . "." . $f2; 
    
    return $totalFat-$cFrete; 
  }
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
                                <li class="breadcrumb-item"><a href="#"></a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <?php
            //OFF CANVAS EDITAR CLIENTE
            $path = dirname(__FILE__);
            $path .= '/offcanvasCliente.php';
            include_once($path);
            ?>



            <?php                               


            // PEGA OS DADOS DO CLIENTE PELO NUMERO DO PEDIDO
            // E SALVA
            $numero = $_GET['numero'];

            if(isset($_GET['dCliente']) or isset($_GET['id_vendedor']) or isset($_GET['data_da_venda']) or isset($_GET['p_situacao']) ) {

                $pedido = $_GET['numero'];
                $cliente = $_GET['dCliente'];
                $vendedor = $_GET['id_vendedor'];
                $datavenda = $_GET['data_da_venda'];
                $situacao = $_GET['p_situacao'];

                //echo '<script>alert("'. $cliente.' '.$vendedor.' '.$datavenda.' '.$situacao. '");</script>';
                
                $query = "UPDATE tbl_pedidos_venda SET data_registro='$datavenda', id_cliente='$cliente', id_vendedor='$vendedor',
                situacao='$situacao' WHERE numero_pedido = '$pedido'";

                if(mysqli_query($conexao, $query)){
                    // Registra Log
                    $queryLog = "INSERT INTO tbl_logs (acao,vendedor) VALUES ('O usuário $login Atualizou Dados do Cliente no Pedido: ($pedido) - Cliente: $cliente Vendedor: $vendedor Data da Venda: $datavenda', '".$login."')";
                    mysqli_query($conexao,$queryLog);
                
                    echo '<script>alert("Dados Atualizados");</script>';
                                            
                    //echo '<script>$("#myToast").toast("show");</script>';                                
                }else{
                    echo '<script>alert("Erro: '.$query.'");</script>';                                
                }
            }   


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

            <!-- Main content -->
            <div id="main">
                <section class="content">

                    <!-- FORM PEDIDO -> DADOS DO CLIENTE -->
                    <form autocomplete="off" class="form-horizontal" id="salvarpedido" name="salvarpedido"
                        style="width:100%" action="" method="GET">

                        <!-- campos ocultos para update -->
                        <input type="hidden" name="numero" id="numero" value="<?php echo $numero; ?>">
                        <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $idcliente; ?>">
                        <input type="hidden" id="dCliente" name="dCliente"
                            value="<?php if(isset($_GET['dCliente'])) { echo $_GET['dCliente']; } ?>" />

                        <div class="card">
                            <div class="card-header ui-sortable-handle" style="cursor: pointer;">
                                <h2>Pedidos de Venda</h2>
                                <br>
                            </div>
                            <div class="card-header ui-sortable-handle" id="btnSalvaPedido">
                                <h3 class="card-title">Dados do Cliente</h3>
                                <div class="card-tools">
                                    <ul class="nav nav-pills ml-auto">

                                        <li class="nav-item">
                                            <button title='Salvar' type='submit' class='btn btn-success float-right'><i
                                                    class='fas fa-save'> </i> Salvar</button>
                                        </li>
                                        &nbsp;

                                        <li class="nav-item">
                                            <a href="./" class="btn btn-danger" type="button"><i
                                                    class="fas fa-arrow-right"> </i> Voltar</a>
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

                                                    <button title='Novo Cliente' type='button' class='btn btn-success'>
                                                        <i class='fas fa-user-plus'></i></button>

                                                </div>

                                            </div>
                                        </div>
                                    </div>



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
                                                <input type="text" id="dFantasia" class="form-control"
                                                    value="<?php echo $fantasia_c; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3 input-group-sm">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Email</span>
                                                </div>
                                                <input type="text" id="dMail" class="form-control"
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
                                                <input type="text" id="dTel" class="form-control"
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
                                                <input type="text" id="dNum"
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
                                                type="button"><i class="fas fa-plus"> &nbsp;</i> Adicionar Item</a>
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
                                        <label for="dNum">Taxas Adicionais <span class="fas fa-info-circle"
                                                title="Impostos, Taxas pré-cadastradas no sistema e no pedido"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tvaloritens">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="tx_add" name="tx_add" class="money-in form-control"
                                                value="<?php if(isset($_GET['tx_add'])) { echo $_GET['tx_add']; } ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="totalDescItens">(&sum;) Descontos/Item</label>
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
                                                class="money-in form-control"
                                                value="<?php if(isset($_GET['descAdicional'])) { echo $_GET['descAdicional']; } ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dTel">(&sum;) Valor dos Itens <span class="fas fa-info-circle"
                                                title="Soma Total dos Itens sem o Valor de Desconto Individual / Por Item"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tvaloritens">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="hidden" id="subTotalnDesc" name="subTotalnDesc" value="<?php converteDinheiro($t_valor_itens); //if (isset($_GET['subTotalnDesc'])) { echo $_GET['subTotalnDesc']; } ?>" />
                                            <input type="text" id="t-valoritens" readonly="readonly"
                                                class="form-control"
                                                value="<?php echo converteDinheiro($t_valor_itens); ?>" />
                                        </div>
                                    </div>
                                </div>

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
                                            class="form-control"
                                            value="<?php if(isset($_GET['prazoEntrega'])) { echo $_GET['prazoEntrega']; } ?>" />
                                    </div>
                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dataSaida">Data de Saída</label>
                                        <input type="date" id="dataSaida" name="dataSaida" class="form-control"
                                            value="<?php if(isset($_GET['dataSaida'])) { echo $_GET['dataSaida']; } ?>" />
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dNum">Data da Prevista</label>
                                        <input type="date" id="dataPrevista" name="dataPrevista" class="form-control"
                                            value="<?php if(isset($_GET['dataPrevista'])) { echo $_GET['dataPrevista']; } ?>" />
                                    </div>


                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="dataEntrega">Data da Entrega <span class="fas fa-info-circle"
                                                title="Data de Chegada do Pedido no Cliente"></span></label>
                                        <input type="date" id="dataEntrega" name="dataEntrega" class="form-control"
                                            value="<?php if(isset($_GET['dataEntrega'])) { echo $_GET['dataEntrega']; } ?>" />
                                    </div>

                                    <div class="form-group col-lg-2 col-md-4">
                                        <label for="valorFrete">Frete <span class="fas fa-info-circle"
                                                title="Valor do Frete"></span></label>
                                        <div class="input-group mb-3 input-group-xs">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tsubtotal">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="valorFrete" name="valorFrete"
                                                class="money-in form-control"
                                                value="<?php if(isset($_GET['valorFrete'])) { echo $_GET['valorFrete']; } ?>" />
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
                                            value="<?php if(isset($_GET['porComss'])) { echo $_GET['porComss']; } ?>">

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
                                                value="<?php if(isset($_GET['vTComs2'])) { echo $_GET['vTComs2']; } ?>">
                                            <input type="text" readonly="readonly" id="totalComissoes"
                                                name="totalComissoes" class="money-in form-control" value="<?php 
                                                if(isset($_GET['vTComs2'])) {
                                                    echo number_format($_GET['vTComs2'],2," ,","."); 
                                                } 
                                                else if(isset($_GET['porComss']) and isset($_GET['soma-final'])) 
                                                { 
                                                    echo somaComissoes($_GET['soma-final'],$_GET['porComss']); 
                                                } 
                                                else 
                                                { 
                                                    echo somaComissoes($_GET['soma-final'],$_GET['porComss']); 
                                                } //echo (converteDinheiro($_GET['soma-final'])*(float)($_GET['porComss'])/100);          } ?>" />
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-2 col-md-3">
                                        <label for="dNum">(&sum;)Total de Descontos <span class="fas fa-info-circle"
                                                title="Soma dos Descontos por Item + Desconto"></span></label>
                                        <div class="input-group mb-3 input-group-mb">
                                            <div class="input-group-prepend">
                                                <span
                                                    class="input-group-text"><?php $moeda = '<span class="tvaloritens">R$ '; echo $moeda; ?></span></span>
                                            </div>
                                            <input type="text" id="" readonly="readonly" class="form-control"
                                                value="<?php //echo $cnpjcpf_c; ?>" />
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
                                                class="form-control"
                                                value="<?php 

                                                $valorTotalVenda = $t_subtotal;
                                                if(isset($_GET['tx_add'])) {
                                                    $valorTotalVenda = subtrairDoPedido($valorTotalVenda,$_GET['tx_add']);
                                                }
                                                
                                                if(isset($_GET['descAdicional'])) {
                                                    $valorTotalVenda = subtrairDoPedido($valorTotalVenda,$_GET['descAdicional']);
                                                }                                                
                                                
                                                if(isset($_GET['valorFrete'])) {
                                                    $valorTotalVenda = subtrairDoPedido($valorTotalVenda,$_GET['valorFrete']);
                                                    //$valorTotalVenda -= (float)$_GET['valorFrete'];
                                                }                                      
                                                               
                                                echo converteDinheiro($valorTotalVenda);
                                                                                             
                                                ?>">
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
                                                class="form-control" value="<?php 
                                            
                                            if(isset($_GET['soma-final']) and isset($_GET['totalComissoes'])) { 
                                                    echo converteDinheiro(somaValorFatura($_GET['soma-final'],$_GET['vTComs2'])); //converteDinheiro($_GET['soma-final']) - $_GET['vTComs2']; 
                                                } 
                                                ?>" />

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

                                                <textarea id="dadosAdicionais" name="dadosAdicionais"
                                                    class="form-control"
                                                    rows="7"><?php if(isset($_GET['dadosAdicionais'])) { echo trim($_GET['dadosAdicionais']); } ?></textarea>

                                            </div>

                                            <div class="form-group col-lg-12 col-md-12">
                                                <label for="soma-final">Observações Internas<span
                                                        class="fas fa-info-circle"
                                                        title="Estas informações são de uso interno, portanto não serão impressas"></span></label>

                                                <textarea id="obsInternas" name="obsInternas" class="form-control"
                                                    rows="3"><?php if(isset($_GET['obsInternas'])) { echo trim($_GET['obsInternas']); } ?></textarea>

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
        if (screen.availWidth < 450) {
            document.getElementById("mySidenav").style.width = "100%";
            document.getElementById("mySidenav").style.border = "0";

        } else if (screen.availWidth < 1200) {
            document.getElementById("mySidenav").style.width = "100%";
            document.getElementById("fechaform_cliente").style.display = "block";
        } else {
            document.getElementById("mySidenav").style.width = "50%";
            document.getElementById("fechaform_cliente").style.display = "block";
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
    }

    /* var modal = document.getElementById('main');
    modal.addEventListener('click', function(e) {
      if (e.target == this) closeNav();
    }); */
    </script>
</body>

</html>