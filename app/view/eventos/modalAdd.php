<!-- Modal -->
<div class="modal fade show" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Cadastrar Período</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="add_" name="add_" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nome"  class="form-control" placeholder="Nome"
                                        required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Data ínicio</label>
                                <div class="col-sm-12">
                                    <input type="date" name="data_inicio" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Data Fim</label>
                                <div class="col-sm-12">
                                    <input type="date" name="data_fim"  class="form-control" required>
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