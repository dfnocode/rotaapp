<!-- Modal -->
<div class="modal fade show" id="modalAdd_tarifa" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Cadastrar Tarifa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add_tarifa" name="add_tarifa" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="periodo" value="<?php echo $id_periodo; ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Mínimo de diárias</label>
                                <div class="col-sm-12">
                                    <input type="text" name="diarias"  class="form-control" placeholder="Nome"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Porcentagem de Ajuste</label>
                                <div class="col-sm-12">
                                    <input type="text" name="tarifa"  class="form-control" placeholder="Nome"
                                        required>
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