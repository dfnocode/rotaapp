<!-- Modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_" name="update_" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_corretor" id="id_corretor" value="">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Agência</label>
                                <div class="col-sm-10">
                                    <?php
                                        $path = dirname(__FILE__);
                                        $path .= '/lista_agencias.php';
                                        include_once($path);
                                    ?>
                                    <select name="agencia" class="form-control" required>
                                        <option value="" disabled>Informe uma Opção</option>
                                        <?php while($row = mysqli_fetch_array($result_agencias, MYSQLI_ASSOC)): ?>
                                        <option value="<?php echo $row['id']; ?>">
                                            <?php echo $row['nome']; ?>
                                        </option>
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