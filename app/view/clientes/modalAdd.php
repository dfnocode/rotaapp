<!-- Modal -->
<div class="modal fade" id="add_cliente" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Cadastrar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="cadastro_cliente" name="cadastro_cliente" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Nome</label>
                                <div class="col-sm-12">
                                    <input type="text" name="nome" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Fantasia</label>
                                <div class="col-sm-12">
                                    <input type="text" name="fantasia" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Email</label>
                                <div class="col-sm-12">
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Telefone</label>
                                <div class="col-sm-12">
                                    <input type="text" name="telefone" class="form-control">
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