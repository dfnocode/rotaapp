<!-- Modal -->
<div class="modal fade" id="edit_num_fatura" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Configuração da Fatura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_num_fatura" name="update_num_fatura" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_num_fatura" id="id_num_fatura" value="">
                      
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Ligar?</label>                             
                                <select name="prefixo" id="prefixo" class="form-control">
                                    
                                    <option value="ON">Enable</option>
                                    <option value="OFF">Disable</option>
                                   
                                </select>                            
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Numeração</label>
                              
                                    <input type="text" name="numeracao" id="numeracao" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Sufixo</label>
                                
                                    <input type="text" name="sufixo" id="sufixo" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Incluir Data?</label>                          
                               
                                <select name="incluir_data" id="incluir_data" class="form-control">
                                    
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                    <option value="Sim">Sim</option>
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