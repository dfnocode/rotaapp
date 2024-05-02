<!DOCTYPE html>
<html>
<!-- DataTables -->
<link rel="stylesheet" href="../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title"><i class="fas fa-people-arrows mr-1"></i>Clientes</h3>
                        <div class="card-tools">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item" data-toggle="modal" data-target="#add_cliente">
                                    <a class="btn"><i class="fas fa-users"></i> Cadastrar Novo</a>
                                </li>
                            </ul>
                        </div>
                    </div><!-- /.card-header -->
                </div>
                <!-- /.card -->

                <!--div lista-->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Clientes Cadastrados</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="clientes" class="table table-bordered table-striped compact nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Ação</th>
                                    
                                    <th>Registro</th>
                                    <th>Nome</th>
                                    <th>Fantasia</th>
                                    <th>Email</th>
                                    <th>Telefone</th>

                                    <th>CNPJ/CPF</th>
                                    <th>ID/RG</th>
                                    <th>Endereço</th>
                                    <th>N°</th>
                                    <th>Bairro</th>

                                    <th>Compl.</th>
                                    <th>Cidade</th>
                                    <th>UF</th>
                                    <th>CEP</th>
                                    <th>Situação</th>                                  

                                    <th>Contatos</th>
                                    <th>Celular</th>
                                    <th>Fax</th>
                                    <th>Website</th>
                                    <th>Obs</th>
                                    <th>Email/Nfe</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query = "SELECT id, registro, nome, cnpjcpf, idrg, fantasia, endereco, numero, complemento, bairro, cep, cidade, estado, contatos, email, telefone, fax, celular, website, situacao, obs, emailnfe FROM tbl_users WHERE tipopessoa = 'Cliente'";
                                $result = mysqli_query($conexao,$query); 
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                            ?>
                               <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td>
                                        <button title='Editar' type='button' class='btn btn-warning copiar' data-toggle='modal' data-target='#edit_cliente'>
                                            <i class='fas fa-edit'></i></button>
                                        <button title='Excluir' type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete'>
                                        <i class='fas fa-trash-alt'></i></button>                                        
                                    </td>        

                                    
                                    <td><?php echo date( 'd/m/Y', strtotime($row['registro'])); ?> </td>
                                    <td><?php echo $row['nome']; ?> </td>
                                    <td><?php echo $row['fantasia']; ?> </td>
                                    <td><?php echo $row['email']; ?> </td>
                                    <td><?php echo $row['telefone']; ?> </td>

                                    <td><?php echo $row['cnpjcpf']; ?> </td>
                                    <td><?php echo $row['idrg']; ?> </td>
                                    <td><?php echo $row['endereco']; ?> </td>
                                    <td><?php echo $row['numero']; ?> </td>
                                    <td><?php echo $row['bairro']; ?> </td>

                                    <td><?php echo $row['complemento']; ?> </td>
                                    <td><?php echo $row['cidade']; ?> </td>
                                    <td><?php echo $row['estado']; ?> </td>
                                    <td><?php echo $row['cep']; ?> </td>


                                    <td><?php echo $row['situacao']; ?> </td>

                                    <td><?php echo $row['contatos']; ?> </td>
                                    <td><?php echo $row['celular']; ?> </td>
                                    <td><?php echo $row['fax']; ?> </td>
                                    <td><?php echo $row['website']; ?> </td>
                                    <td><?php echo $row['obs']; ?> </td>

                                    <td><?php echo $row['emailnfe']; ?> </td>                                  

                                                              
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Registro</th>
                                    <th>Nome</th>
                                    <th>Fantasia</th>
                                    <th>Email</th>
                                    <th>Telefone</th>

                                    <th>CNPJ/CPF</th>
                                    <th>ID/RG</th>
                                    <th>Endereço</th>
                                    <th>N°</th>
                                    <th>Bairro</th>

                                    <th>Compl.</th>
                                    <th>Cidade</th>
                                    <th>UF</th>
                                    <th>CEP</th>
                                    <th>Situação</th>

                                    <th>Ação</th>
                                   

                                    <th>Contatos</th>
                                    <th>Celular</th>
                                    <th>Fax</th>
                                    <th>Website</th>
                                    <th>Obs</th>
                                    <th>Email/Nfe</th>                                 
                                   
                                </tr>
                            </tfoot>    
                        </table>
                       
                       
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
        <?php
            $path = dirname(__FILE__);
            $path .= '/modalAdd.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/modalUpdate.php';
            include_once($path);

            $path = dirname(__FILE__);
            $path .= '/modalDelete.php';
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
    <!--Swit Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Forms -->
    <script src="js/forms.js"></script>
    <!-- Table -->
    <script src="js/table.js"></script>
    <!-- DataTables -->
    <script src="../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
    $(function() {
        $("#clientes").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
       
    });
    </script>
</body>

</html>