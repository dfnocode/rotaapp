<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<?php

include "../../config/database/conexao2.php"; //Conexão



include "scripts/funcoes.php"; //Conexão

$path = dirname(__FILE__);
$path .= '/../../config/functions/autenticaUsuario.php';
include_once($path);

$path = dirname(__FILE__);
$path .= '/../../includes/UI/header.php';
include_once($path);
?>

<?php 
if ($_SESSION['funcao'] != 'Gerente') {  
    header("Location: ../inicio/");
    exit;
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

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title"><i class="fas fa-people-arrows mr-1"></i>Vendedores</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item" data-toggle="modal" data-target="#add_vendedores">
                                    <a class="btn" href="/../../wp-admin/user-new.php"><i class="fas fa-users"></i> Cadastrar Novo</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                </div>
                <!-- /.card -->

                <!--div lista-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Vendedores Cadastrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="vendedores" class="table table-bordered table-striped compact nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>                                  
                                    <th>Login</th>
                                    <th>Nome</th>                            
                                    <th>Email</th>
                                    <th>Funções</th> 
                                    <th>Status</th>                                
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                //$query = "SELECT id, registro, nome, cnpjcpf, idrg, fantasia, endereco, numero, complemento, bairro, cep, cidade, estado, contatos, email, telefone, fax, celular, website, situacao, obs, emailnfe FROM tbl_users WHERE tipopessoa = 'Fornecedor'";
                                $query = "SELECT wp_users.ID as id, wp_users.user_nicename as usuario, wp_users.display_name as nome, wp_users.user_email as email, wp_usermeta.meta_value as funcao
                                FROM wp_users INNER JOIN wp_usermeta 
                                ON wp_users.ID = wp_usermeta.user_id 
                                WHERE wp_usermeta.meta_key = 'wp_capabilities' 
                                AND (wp_usermeta.meta_value LIKE '%shop_manager%' 
                                OR wp_usermeta.meta_value LIKE '%vendedor%') 
                                ORDER BY wp_users.user_nicename";
                                
                                $result = mysqli_query($conexao,$query); 
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                            ?>
                               <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['usuario']; ?> </td>                                  
                                    <td><?php echo $row['nome']; ?> </td>                                    
                                    <td><?php echo $row['email']; ?> </td>
                                    <td><?php echo $row['funcao']; ?> </td>
                                    <td>
                                    <?php
                                         $conn = mysqli_connect("localhost:10040", "root", "root", "rotadb24");
                                         $registrou = vendedor_registrado_no_sistema($conn,$row['id']);
                                         //echo $registrou;
                                         if ($registrou != '0'){
                                            echo '&nbsp;&nbsp;<i class="fa fa-check-circle" aria-hidden="true" style="color:green; cursor: pointer;" title="Cadastro Homologado"></i>';
                                        }
                                        else {
                                            echo '&nbsp;&nbsp;<i class="fa fa-ban" aria-hidden="true" title="Vendedor não homologado no sistema" style="cursor: pointer; color: red;"></i>';
                                        } 
                                    ?>
                                    </td>
                                                              
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Login</th>
                                    <th>Nome</th>                                 
                                    <th>Email</th>
                                    <th>Funções</th>  
                                    <th>Status</th>
                                </tr>
                            </tfoot>    
                        </table>
                       
                       
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
        <?php
           /*  $path = dirname(__FILE__);
            $path .= '/modalAdd.php';
            include_once($path);  */

            $path = dirname(__FILE__);
            $path .= '/modalUpdate.php';
            include_once($path);

            /* 
            $path = dirname(__FILE__);
            $path .= '/modalDelete.php';
            include_once($path); */
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
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Forms -->
    <script src="js/frm_homologa_vendedor.js"></script>
    <!-- Table -->
    <script src="js/tbl_vendedor.js"></script>
    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script>
    $(function() {
        $("#vendedores").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
       
    });
    </script>

    
<script>

function verifica_vendedor (id){
    
    //alert(id);

    var urlApi = "scripts/verifica_vendedor.php?id=" + id;
 
    $.ajax({
    type: 'GET',
    url: urlApi,
    dataType: 'text',
    success: function(response) {
        //alert(response);
        $('#status_vendedor').val(response);       
       } 
    });
}

function modal_homologa_vendedor(){
   
    var status = $('#status_vendedor').val();
    //alert(status);
    if (status == '0'){
            $('#status').val('Não Homologado no Sistema!');
            $('#edit_vendedor').modal({
                show: true
             });
        }
    else {
        $('#status').val('Vendedor Homologado'); 
        
    }    
}



    $(document).ready(function() {
        var table = $('#vendedores').DataTable();
       
        $('#vendedores tbody').on('click', 'tr', function() {
            var rIndex = table.row( this ).index();
            var vendedor_id = table.cell( rIndex, 0 ).data();
            var dados = table.row(this).data();
            verifica_vendedor(vendedor_id);
            modal_homologa_vendedor();                       
            //alert(dados);            
            //var url = "../lista_vendas/editar_pedido.php?numero=" + num_pedido + "&view=comissoes";
            //window.location.replace(url);
        });

        $("#edit_vendedor").on('hide.bs.modal', function(){
            $('#status_vendedor').val('');  
            $('#status').val('');
        });
    });
    </script>


</body>

</html>