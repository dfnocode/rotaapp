<!-- Modal -->
<div class="modal fade" id="novo_produto" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Novo Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="frm_add_novo_produto" name="frm_add_novo_produto" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                     
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Situação</label>
                                <select name="situacao_produto5" id="situacao_produto5" class="form-control">
                                    <option value="Ativo">Ativo</option>
                                    <option value="Desativado">Desativado</option>
                                </select>
                                <!-- <input type="text" name="situacao_produto" id="situacao_produto" class="form-control"> -->

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Categoria</label>
                                
                                <input type="text" name="categoria_produto5" id="categoria_produto5" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Frete Grátis</label>
                                <select name="frete_produto5" id="frete_produto5" class="form-control">
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                        </div>                

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Descrição</label>

                                <input type="text" name="descricao_produto5" id="descricao_produto5" class="form-control">

                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Unidade</label>

                                <input type="text" name="unidade_produto5" id="unidade_produto5" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Preço</label>

                                <input type="text" name="preco_produto5" id="preco_produto5" class="form-control">

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="inputName">Preço de Custo</label>
                                <input type="text" name="preco_custo_produto5" id="preco_custo_produto5"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Condição</label>
                                <input type="text" name="condicao_produto5" id="condicao_produto5" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Unidade de Medida</label>
                                <input type="text" name="unidade_medida_produto5" id="unidade_medida_produto5"
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Tipo</label>
                                <input type="text" name="tipo_produto5" id="tipo_produto5" class="form-control">

                            </div>
                        </div>

                     

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"  id="cancela_novo_prod">Cancelar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
    
        $("#adicionar_novo_produto").click(function() {

            $("#add_itens_pedido").css("display", "none"); 

        });

        $("#cancela_novo_prod").click(function() {

           $("#add_itens_pedido").css("display", "block"); 

        });
    
    });
</script>