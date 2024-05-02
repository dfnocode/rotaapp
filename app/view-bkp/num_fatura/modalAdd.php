<!-- Modal -->
<div class="modal fade" id="add_num_fatura" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Cadastrar Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="cadastro_num_fatura" name="cadastro_num_fatura" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                      
                      
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Prefixo</label>                             
                                    <input type="text" name="prefixo_fatura" id="prefixo_fatura" class="form-control">                               
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Numeração</label>
                              
                                    <input type="text" name="numeracao_fatura" id="numeracao_fatura" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Sufixo</label>
                                
                                    <input type="text" name="sufixo_fatura" id="sufixo_fatura" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Incluir Data?</label>                          
                               
                                <select name="incluir_data_fatura" id="incluir_data_fatura" class="form-control">
                                    <option value=""></option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                               
                                                        
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