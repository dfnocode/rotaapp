<!-- Modal -->
<div class="modal fade" id="add_agencia" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Cadastrar Agência</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="cadastro_agencia" name="cadastro_agencia" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nome" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Limite de Vendas</label>
                                <div class="col-sm-10">
                                    <input type="text" name="limite"  onKeyPress="return(moeda(this,'.',',',event))"  class="form-control" required>
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