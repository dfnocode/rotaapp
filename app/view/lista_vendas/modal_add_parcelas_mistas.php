<?php include "../../config/database/conexao.php"; //Conexão ?>

<!-- Modal -->
<div class="modal fade" id="add_parcelas_mistas" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Parcelamento Misto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="add_parcelamento" name="add_parcelamento" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                             <div class="form-group">                         
                                <label for="inputName">Número Pedido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="id_pedido" readonly="readonly" class="form-control" value="<?php echo $numero; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">                         
                                <label for="inputName">Data da Parcela</label>
                                <div class="col-sm-12">
                                    <input type="date" name="data_parcela" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                             <div class="form-group">                         
                                <label for="inputName">Valor</label>
                                <div class="col-sm-12">
                                    <input type="text" name="valor" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">                         
                                <label for="inputName">Descrição</label>
                                <div class="col-sm-12">
                                    <input type="text" name="descricao" class="form-control" value="">
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>

            <div class="card-body table-responsive">
                        <table id="parcelamento_misto" class="table table-bordered table-striped compact nowrap">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Pedido</th>
                                    <th>Data</th>                                 
                                    <th>Valor</th>                                     
                                    <th>Descrição</th>
                                    <th>#</th>                  
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                
                                $query = "SELECT * FROM tbl_parcelas_mistas WHERE id_pedido = '$numero'";
                                
                                $result = mysqli_query($conexao,$query); 
                                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                            ?>
                               <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['id_pedido']; ?> </td>                                  
                                    <td><?php echo $row['data_parcela']; ?> </td>                                    
                                    <td><?php echo $row['valor']; ?> </td>
                                    <td><?php echo $row['descricao']; ?> </td>
                                    <td><button>Excluir</button></td>                                                              
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Pedido</th>
                                    <th>Data</th>                                 
                                    <th>Valor</th>                                     
                                    <th>Descrição</th>
                                    <th>#</th>
                                </tr>
                            </tfoot>    
                        </table>                    
                </div>
        </div>
    </div>
</div>

<script>
    $(function() {
        $("#parcelamento_misto").DataTable({
            "responsive": true,
            "autoWidth": false
        });
    });
    </script>