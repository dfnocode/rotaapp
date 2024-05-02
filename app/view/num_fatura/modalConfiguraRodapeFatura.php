<!-- Modal -->
<div class="modal fade" id="config_rodape_fatura" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Rodapé da Fatura</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_rodape_fatura" name="update_rodape_fatura" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_num_fatura3" id="id_num_fatura3" value="<?php echo $id_fatura ?>">                     
                    
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Email da Empresa: </label>                              
                                    <textarea name="email_empresa" id="email_empresa" class="form-control"><?php echo $email_empresa; ?> </textarea>                            
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Telefone da Empresa: </label>                              
                                    <textarea name="telefone_empresa" id="telefone_empresa" class="form-control"><?php echo $telefone_empresa; ?></textarea>                                
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Website da Empresa: </label>                              
                                    <input type="text" name="website_empresa" id="website_empresa" class="form-control" value="<?php echo $website_empresa; ?>">
                                    
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