<!-- Modal -->
<div class="modal fade" id="edit_produto" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_produto" name="update_produto" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_produto" id="id_produto" value="">

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputName">Situação</label>
                                <select name="situacao_produto" id="situacao_produto" class="form-control">
                                    <option value="Ativo">Ativo</option>
                                    <option value="Desativado">Desativado</option>
                                </select>
                                <!-- <input type="text" name="situacao_produto" id="situacao_produto" class="form-control"> -->

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputName">Categoria</label>
                                
                                <input type="text" name="categoria_produto" id="categoria_produto" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputName">Frete</label>
                                <input type="text" name="frete_produto" id="frete_produto" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Tipo</label>
                                <input type="text" name="tipo_produto" id="tipo_produto" class="form-control">

                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="inputName">Descrição</label>

                                <input type="text" name="descricao_produto" id="descricao_produto" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="inputName">Unidade</label>

                                <input type="text" name="unidade_produto" id="unidade_produto" class="form-control">

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputName">Preço</label>

                                <input type="text" name="preco_produto" id="preco_produto" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="inputName">Preço de Custo</label>
                                <input type="text" name="preco_custo_produto" id="preco_custo_produto"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Condição</label>
                                <input type="text" name="condicao_produto" id="condicao_produto" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Unidade de Medida</label>
                                <input type="text" name="unidade_medida_produto" id="unidade_medida_produto"
                                    class="form-control">
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