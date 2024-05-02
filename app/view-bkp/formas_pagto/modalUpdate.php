<!-- Modal -->
<div class="modal fade show" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update_" name="update_" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="id_forma" id="id_forma" value="">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputName">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome_forma" id="nome_forma" class="form-control" placeholder="Nome" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="inputName">Taxa</label>
                            <div class="col-sm-10">
                                <input type="text" name="taxa_forma" id="taxa_forma" class="form-control" placeholder="Ex(10.2)" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>