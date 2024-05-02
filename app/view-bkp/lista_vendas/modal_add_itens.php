<!-- Modal -->
<div class="modal fade" id="add_itens_pedido" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Adicionar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="cadastro_itens_pedido" name="cadastro_itens_pedido" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
    <!--  insert into tbl_pedidos_venda (numero_pedido,data_registro,situacao,id_cliente,faturamento)
    VALUES ('8004',now(),'Em aberto',1421,0); -->                           
                                <label for="inputName">Número Pedido</label>
                                <div class="col-sm-12">
                                    <input type="text" name="num" readonly="readonly" class="form-control" placeholder="<?php echo $_GET['numero']; ?>" value="<?php echo $_GET['numero']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Produto</label>
                                <div class="col-sm-12">
                                 <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend" id="btn-edit-produto">
                                                                               
                                        <button title='Adicionar Novo Produto' type='button' class='btn btn-success copiar' data-toggle='modal' data-target='#novo_produto' id="adicionar_novo_produto">
                                                <i class='fas fa-list'></i></button>
                                    </div>
                                
                                <select name="id_produto" id="id_produto" class="form-control">
                                    <?php 
                                    $query = "SELECT id, descricao, preco FROM tbl_produtos";
                                    $result = mysqli_query($conexao,$query); 
                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                      echo '<option value="'.$row['id'].'">'.$row['descricao'].' - Preço: '.converteDinheiro($row['preco']); ?></option>

                                      <?php endwhile; ?>
                                    </select>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Quantidade</label>
                                <div class="col-sm-12">
                                    <input type="text" name="qtde" class="form-control" value="0" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Desconto</label>
                                <div class="col-sm-12">                              
                                    <input type="text" name="desconto" class="money form-control" value="0" required>                             
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