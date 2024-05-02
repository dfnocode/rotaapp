<?php 
include_once("db_connect.php");
include("header.php"); 
?>

<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<?php include('container.php');?>

<div class="container">	
	<form name="buscar-produtos" id="buscar-produtos" method="post" action="./">
                
                    <button type="submit" class="btn btn-warning"><i class="fa fas-save"> </i> Salvar</button>
                 
                            <h3>Novo Pedido de Venda</h3>

                            <input type="hidden" id="linha-item" name="linha-item" value="">
                            <input type="hidden" id="id_produto" name="id_produto" value="">

                          
                                <div class="col" id="div-produtos">
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

                                <div class="col" id="">
                                    <div class="form-group">
                                        <div class="input-group mb-6 input-group-sm">
                                            <div class="input-group-prepend" id="nome-prepend">
                                                <span class="input-group-text">Unid.</span>
                                            </div>
                                            <input type="text" id="dUnidade" class="form-control" value="" />

                                        </div>
                                    </div>
                                </div>


                                <div class="col" id="">
                                    <div class="form-group">
                                        <div class="input-group mb-6 input-group-sm">
                                            <div class="input-group-prepend" id="nome-prepend">
                                                <span class="input-group-text">Preço</span>
                                            </div>
                                            <input type="text" id="dPreco" class="form-control" value="" />

                                        </div>
                                    </div>
                                </div>
                      


                    </form>
					</div>
<?php
	$pedido = $_GET['pedido'];
?>

	 <table id="itens_do_pedido" class="table table-striped" style="width:100%">

                        <thead>
                            <tr>
                                <th>Pedido</th>
                                <th>Produto</th>
                                <th>Unidade</th>                    
                                <th>Preço lista</th>
								<th>Quantidade</th>
                                <th>Desc. %</th>
                                <th>Preço un.</th>
                                <th>Preço Total</th>
                            </tr>
                        </thead>
						<tbody>
								<?php 
								$sql_query = "SELECT * FROM vs_itens_pedido_venda WHERE NF = '$pedido'";
								$resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
								while( $row = mysqli_fetch_assoc($resultset) ) {
								?>
								<tr data-id="<?php echo $row ['id']; ?>">
								<td><?php echo $row ['NF']; ?></td>
								<td data-produto='<?php echo $row['id_produto']; ?>'><?php echo $row ['Produto']; ?></td>
								<td><?php echo $row ['Unidade']; ?></td>
								<td><?php echo $row ['Preço']; ?></td>   
								<td><?php echo $row ['Quantidade']; ?></td>
								<td><?php echo $row ['Desconto']; ?></td>
								<td></td>								
								<td><?php echo $row ['Subtotal']; ?></td>
								   
								</tr>
								<?php } ?>
						</tbody>
                   
                    </table>



	<!-- <table id="data_table" class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>	
				<th>Designation</th>
				<th>Address</th>
			</tr>
		</thead> -->

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
                data: "search-itens.php",
                post: {
                    type: "email"
                },
                // OPTIONAL
                delay: 1000,
                min: 3
            });
        });
        </script>
<script type="text/javascript" src="c_table_edit.js"></script>
<?php include('footer.php');?>
 



                                                                                                       