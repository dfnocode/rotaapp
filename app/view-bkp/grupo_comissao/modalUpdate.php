<!-- Modal -->
<div class="modal fade" id="edit_grupo" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_grupo" name="update_grupo" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_grupo" id="id_grupo" value="">
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nome_grupo" id="nome_grupo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Base de Cálculo</label>
                                <div class="col-sm-10">
                                    <input type="text" name="calculo_grupo" id="calculo_grupo" class="form-control">
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