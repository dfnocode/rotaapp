<!-- Modal -->
<div class="modal fade bd-example-modal-xl" id="updateClientes" tabindex="-1" role="dialog"
    aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="atualizaPessoa" name="atualizaPessoa" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_cliente" id='id_cliente'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <div class="col-sm-10">
                                    <input type="text" name="edit_nome" id="edit_nome" class="form-control"
                                        placeholder="Nome" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">CPF</label>
                                <div class="col-sm-10">
                                    <input type="text" name="edit_cpf" id="edit_cpf" onblur="TestaCPF(this)"
                                        class="form-control" placeholder="CPF" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">RG</label>
                                <div class="col-sm-10">
                                    <input type="text" name="edit_rg" id="edit_rg" class="form-control" placeholder="RG"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputEmail3">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="edit_email" id="edit_email" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Telefone</label>
                                <div class="col-sm-10">
                                    <input type="text" name="edit_telefone" id="edit_telefone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">CEP</label>
                                <div class="col-sm-10">
                                    <input name="edit_cep" type="text" class="form-control" autocomplete="off"
                                        placeholder="CEP" id="edit_cep" value="" size="10" maxlength="9" name="cep"
                                        type="text" id="cep" value="" size="10" maxlength="9"
                                        onblur="pesquisacep(this.value);" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Rua</label>
                                <div class="col-sm-10">
                                    <input name="edit_rua" class="form-control" autocomplete="off" placeholder="Rua"
                                        type="text" id="edit_rua" size="60" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Bairro</label>
                                <div class="col-sm-10">
                                    <input name="edit_bairro" type="text" id="edit_bairro" size="40"
                                        class="form-control" autocomplete="off" placeholder="Bairro" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Cidade</label>
                                <div class="col-sm-10">
                                    <input name="edit_cidade" type="text" id="edit_cidade" size="40"
                                        class="form-control" autocomplete="off" placeholder="Cidade" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Estado</label>
                                <div class="col-sm-10">
                                    <input name="edit_uf" type="text" id="edit_uf" size="2" class="form-control"
                                        autocomplete="off" placeholder="UF" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Compl.</label>
                                <div class="col-sm-10">
                                    <input name="edit_complemento" id="edit_complemento" type="text"
                                        class="form-control" autocomplete="off" placeholder="complemento" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>