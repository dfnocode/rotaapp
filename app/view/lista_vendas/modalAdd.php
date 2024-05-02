<?php include "../../config/database/conexao.php"; //Conexão ?>

<!-- Modal -->
<div class="modal fade" id="add_pedido_venda" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Novo Pedido de Venda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="cadastro_pedido_venda" name="cadastro_pedido_venda" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">                         
                                <label for="inputName">Número Pedido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="num" readonly="readonly" class="form-control" value="<?php echo $proxPedido; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Data da Venda</label>
                                <div class="col-sm-12">
                                <?php 
                                  $date = new DateTime();
                                  $data_registro_venda = $date->format('Y-m-d');
                                ?>
                                    <input type="date" name="data_venda" class="form-control" value="<?php echo $data_registro_venda;?>">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Situação</label>
                                <div class="col-sm-12">
                                <select name="situacao" id="situacao" class="form-control">
                                            <?php 
                                            $query = "SELECT id, tipo FROM tbl_situacao_pedido";
                                            $result = mysqli_query($conexao,$query); 
                                            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                            echo '<option value="'.$row['id'].'">'.$row['tipo'].'</option>';
                                            endwhile; ?>
                                        </select>
                                </div>
                            </div>
                        </div>                     
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Cliente</label>
                                <div class="col-sm-12">
                                 <select name="id_cliente" id="id_cliente" class="form-control">
                                    <?php 
                                    $query = "SELECT id, nome, fantasia FROM clientes";
                                    $result = mysqli_query($conexao,$query); 
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                      echo '<option value="'.$row['id'].'">'.$row['nome'].' - '.$row['fantasia']; ?></option>

                                      <?php endwhile; ?>
                                    </select>
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
        </div>
    </div>
</div>