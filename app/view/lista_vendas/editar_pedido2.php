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
<!-- <script type="text/javascript" charset="utf-8" src="js/table.tbl_itens_pedido.js"></script> -->

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/datetime/1.0.3/css/dataTables.dateTime.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchbuilder/1.0.1/css/searchBuilder.dataTables.min.css">

<link rel="stylesheet" href="css/editar_pedido.css">

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

.btn-sticky+.content-item-pedido {
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



            <script>
            function msgSalvou() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                )
            }
            </script>
            <?php
            $numero = $_GET['numero']; 


            //OFF CANVAS EDITAR CLIENTE
         /*    $path = dirname(__FILE__);
            $path .= '/offcanvasEditarCliente.php';
            include_once($path);  
 */
             //OFF CANVAS ADICIONAR NOVO CLIENTE
        /*      $path = dirname(__FILE__);
             $path .= '/modalNovoCliente.php';
             include_once($path);     */     
            
            
             
           

            // PEGA OS DADOS DO CLIENTE PELO NUMERO DO PEDIDO
            // E SALVA                 


            // PEGA OS DADOS PARA O FORM DADOS DO CLIENTE
      /*       $query = "SELECT clientes.id as id, clientes.nome as nome, clientes.email as email,
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
            endwhile;  */

            $_SESSION['size'] = $_GET['size'];
            echo $_SESSION['size'];

            ?>

            <!-- Main content -->

            <style>
            @media only screen and (min-width: 1200px) {
                .acWrap {
                    width: 80%;
                }
            }

            @media only screen and (max-width: 1200px) {
                .acWrap {
                    width: 69%;
                }
            }
            </style>
            <section class="content">
                <div id="main">
                    <!-- <h1>Single Field Autocomplete</h1>
                Nome: <input type="text" id="demoA" /><br><br> -->

                    <form name="buscar-produtos" id="buscar-produtos" method="post" action="./">
                    <div>
                    <button type="submit" class="btn btn-warning"><i class="fa fas-save"> </i> Salvar</button>
                    </div>
                        <div class="container">
                            <h1>Novo Pedido de Venda </h1>

                            <input type="hidden" id="linha-item" name="linha-item" value="">
                            <input type="hidden" id="id_produto" name="id_produto" value="">

                            <div class="row">
                                <div class="col-md-7" id="div-produtos">
                                    <div class="form-group">
                                        <div class="input-group mb-6 input-group-sm">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Produto</span>
                                            </div>
                                            <input type="text" name="descricao_produto" id="descricao_produto"
                                                class="form-control" value="">
                                            <div class="input-group-append">

                                                <button title='Editar Cliente' type='button'
                                                    class='btn btn-warning copiar' data-toggle='modal' data-target='#'
                                                    id="" onclick="">
                                                    <i class='fas fa-edit'></i></button>

                                                <button type="button" title='Adicionar Produto ao Pedido?'
                                                    class="btn btn-success" id="addProduto" onclick="addItem();"
                                                    disabled><i class="fa fa-plus"></i></button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2" id="">
                                    <div class="form-group">
                                        <div class="input-group mb-6 input-group-sm">
                                            <div class="input-group-prepend" id="nome-prepend">
                                                <span class="input-group-text">Unid.</span>
                                            </div>
                                            <input type="text" id="dUnidade" class="form-control" value="" />

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-3" id="">
                                    <div class="form-group">
                                        <div class="input-group mb-6 input-group-sm">
                                            <div class="input-group-prepend" id="nome-prepend">
                                                <span class="input-group-text">Preço</span>
                                            </div>
                                            <input type="text" id="dPreco" class="form-control" value="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>



                    <!-- <button id="deleteall">Delete All selected row</button> -->


                    <hr><br>
                    
                    <div id="demo"></div>
                    <div class="row menu-sticky" id="btnSalvaPedido" style="">
                        <button id="delRow" type="button" class="btn btn-danger" title="Remover Item Selecionado?"><i
                                class="fas fa-times"> </i> </button>
                        <button id="verqtde" type="button" class="btn btn-warning" title="Ver Detalhes do Item"><i
                                class="fas fa-eye"> </i> </button>
                        <button id="addRow" type="button" class="btn btn-primary" title="Adicionar Item?"><i
                                class="fas fa-plus"> </i> </button>
                   

                    <br><button id="salvar-itens" type="submit" class="btn btn-success float-right" title="Salvar Itens no Pedido?"><i
                                class="fas fa-edit"> </i> </button>  </div>
                    <table id="example1" class="display hover compact" style="width:100%">

                        <thead>
                            <tr>
                                <th></th>
                                <th>Produto</th>
                                <th>Unidade</th>
                                <th>Quantidade</th>
                                <th>Preço lista</th>
                                <th>Desc. %</th>
                                <th>Preço un.</th>
                                <th>Preço Total</th>
                            </tr>
                        </thead>

                        <tfoot>
                            <tr>
                                <th></th>
                                <th>Produto</th>
                                <th>Unidade</th>
                                <th>Quantidade</th>
                                <th>Preço lista</th>
                                <th>Desc. %</th>
                                <th>Preço un.</th>
                                <th>Preço Total</th>
                            </tr>
                        </tfoot>
                    </table>


                   

            </section>



        </div>


        <script>
        // (C) ATTACH AUTOCOMPLETE TO INPUT FIELDS
        window.addEventListener("DOMContentLoaded", function() {
            /*  ac.attach({
                 target: "demoA",
                 data: "search-produto.php",
                 post: {
                     type: "name"
                 }
             }); */

            ac.attach({
                target: "descricao_produto",
                data: "search-produto.php",
                post: {
                    type: "email"
                },
                // OPTIONAL
                delay: 1000,
                min: 3
            });
        });
        </script>



        <!-- /.card -->


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
    <!--     <script src="js/forms_itens_pedido.js"></script>
    <script src="js/frmsalvapedido.js"></script>
    <script src="js/salvapedidoconfirm.js"></script>
    <script src="js/adicionar_novo_cliente.js"></script> -->
    <script src="js/salva-itens-pedido-venda.js"></script>





    <!-- Table -->
    <!--     <script src="js/table_itens_pedido.js"></script> -->
    <script src="js/jquery-maskmoney.js"></script>
    <script src="js/jquery.mask.min.js"></script>

    <!-- DataTables -->
<!--     <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> -->


    <script src="    https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    
    <script src="https://cdn.datatables.net/searchbuilder/1.0.1/js/dataTables.searchBuilder.min.js"></script>
    
    <script src="https://cdn.datatables.net/datetime/1.0.3/js/dataTables.dateTime.min.js"></script>



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


    <!-- 
        <script>
                                            function calculaInput() {
                                                //alert(screen.availWidth);
                                                var frmprod = document.getElementById("div-produtos").offsetWidth;
                                                //alert(frmprod);
                                                frmprod.style.width = "300px";
                                                //document.getElementById("mySidenav").style.width = screen.availWidth -
                                                   // sidebar + "px";
                                                //document.getElementById("fechaform_cliente").style.display = "block";
                                                //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
                                            }
                                            </script> -->




    <script>
    
    $(document).ready(function() {
        $('#addRow').click();

        var t = $('#example1').DataTable({
            autoFill: true,
            "columnDefs": [{
                "width": "38%",
                "targets": 1
            }],
            createdRow: function (row, data, dataIndex) {
            $(row).attr('data-id', data.Id);
            $(row).attr('data-pedido', data.OwnerId);
        }
        });      
       
        var counter = 1;     

        $('#addRow').on('click', function() {
            var i = t.row.add([
                '<span class="badge badge-dark">' + counter + '</span>',
                '<input type="text" id="descricao_produto' + counter + '" name="descricao_produto' + counter + '" value="" class="form-control">',
                '<input type="text" id="dUnidade' + counter + '" name="dUnidade' + counter + '" class="form-control" value="">',
                '<input type="text" id="qtde' + counter + '" name="qtde' + counter +'" class="form-control" value="">',
                '<input type="text" id="dPreco' + counter + '" name="dPreco' + counter + '" class="form-control" value="">',
                '<input type="text" id="dDescont' + counter + '" name="dDescont' + counter + '" class="form-control" value="">',
                '<input type="text" id="preco-unit' + counter + '" name="preco-unit' + counter + '" class="form-control" value="">',
                '<input readonly="readonly" type="text" id="subtotal' + counter + '" name="subtotal' + counter + '" class="form-control" value="">'


            ]).draw(false);
            t.rows(i).nodes().to$().attr("data-id", counter);
            counter++;

       

            /* Add a click handler for the delete row */
            $('#deleteall').click(function() {
                var anSelected = fnGetSelected(oTable);
                $(anSelected).remove();
            });
        });

        $('#delRow').click(function() {
            t.row('.selected').remove().draw(false);
        });


        $('#example1 tbody').on('click', 'tr', function() {
            $(this).toggleClass('selected');
        });

        $('#verqtde').click(function() {
            alert(t.rows('.selected').data().length + ' row(s) selected');


        });

         $('#salvar-itens').click(function() {
            var data = t.$('input, select').serialize();
            alert(
                "The following data would have been submitted to the server: \n\n" +
                data.substr(0, 120) + '...'
            );
            return false;
        });


        /* Get the rows which are currently selected */
        function fnGetSelected(oTableLocal) {
            return oTableLocal.$('tr.selected');
        }



        var oTable;


        /* Init the table */
        var oTable = $('#example1').dataTable();

        /* Add a click handler to the rows - this could be used as a callback */
        $("#example1 tbody tr").click(function(e) {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                oTable.$('tr.selected') //.removeClass('row_selected');
                $(this).addClass('selected');
            }
        });


    });

    $(document).on({
    mouseenter: function () {
      var id = $(this).find('[data-id]').attr('data-id');
      // -------------^^^^^^^^^^^^^^^^^^
      console.log('id: '+id);
    }
}, ".wrap-main table tbody tr td");
    </script>



    <script>
    function addItem() {
        var descricao = $("#descricao_produto").val();
        var unidade = $("#dUnidade").val();
        var preco = $("#dPreco").val();
        var num = $("#linha-item").val();

        $("#descricao_produto" + num).val(descricao);
        $("#dUnidade" + num).val(unidade);
        $("#dPreco" + num).val(preco);
        $("#addProduto").hide().fadeOut(1000);
        $("#addProduto").show().fadeIn(2500);
        $("#addProduto").attr("disabled", "true");



    }

    function editarLinha(num) {
        $("#linha-item").val(num);
        $("#addProduto").hide().fadeOut(1000);
        $("#addProduto").show().fadeIn(4000);
        $("#addProduto").removeAttr("disabled");
    }
    </script>


    <script>
    $(document).ready(function() {

        var table = $('#example1').DataTable();
        // VAI PARA TELA EDITAR PEDIDO AO CLICKA NA LINHA NO DATATABLE PEDIDOS DE VENDA
        $('#example1 tbody').on('click', 'tr', function() {

            //var data = table.row(this).data();    
            //linha-item        
            editarLinha($(this).attr("data-id"));

            //alert('data-id ' + data[0]);
            //var url = "editar_pedido.php?numero="+data[1];
            //window.location.replace(url);

        });
        $('#main').css('display', 'block');
        table.columns.adjust().draw();
    });
    </script>



    <script>

$(document).ready( function () {<font></font>
    var table = $('#example1').dataTable();<font></font>
    var tableTools = new $.fn.dataTable.TableTools( table, {<font></font>
        "buttons": [<font></font>
            "copy",<font></font>
            "csv",<font></font>
            "xls",<font></font>
            "pdf",<font></font>
            { "type": "print", "buttonText": "Print me!" }<font></font>
        ]<font></font>
    } );<font></font>
     <font></font>
    $( tableTools.fnContainer() ).insertAfter('div.info');<font></font>
} );<font></font>
    /*
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
    }); */
    </script>


    <script>
    /*  var =
        if (screen.availWidth < 1200) {
            var sidebar = document.getElementById("menu-lateral-app").offsetWidth;
            document.getElementById("mySidenav").style.width = screen.availWidth - sidebar + "px";
            document.getElementById("fechaform_cliente").style.display = "block";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4) */
    ";


    /*   $(document).ready(function() {
       calculaInput();
      }); */
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



</body>

</html>