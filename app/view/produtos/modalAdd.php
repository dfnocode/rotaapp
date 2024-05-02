<!-- Modal -->
<div class="modal fade" id="add_produto" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle1">Cadastrar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="cadastro_produto" name="cadastro_produto" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Categoria</label>
                                <div class="col-sm-12">
                                    <!-- <select name="categoria" id="categoria" class="form-control"> -->
                                    <input type="text" list="categoria" name="categoria" class="form-control" />
                                    <datalist id="categoria">
                                
                                    <?php
                                        $query = "SELECT DISTINCT categoria FROM tbl_produtos";
                                        $result = mysqli_query($conexao,$query); 
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) :                                            
                                    ?>
                                            <option value="<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></option>                                   
                                    <?php endwhile; ?>
                                    </datalist>
                                    <!-- </select> -->
                                   <!--  <input type="text" name="categoria" class="form-control" required> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Descrição</label>
                                <div class="col-sm-12">
                                    <input type="text" name="descricao" class="form-control" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Unidade</label>
                                <div class="col-sm-12">
                                    <input type="text" name="unidade" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Valor</label>
                                <div class="col-sm-12">
                                    <input type="text" name="valor" class="form-control" required>
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