<!-- Modal -->
<div class="modal fade" id="config_envio_email_padrao" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Configurações de Envio de Email Padrão</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_config_email_padrao" name="update_config_email_padrao" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_num_fatura4" id="id_num_fatura4" value="<?php echo $id_fatura ?>">              
                  
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">smtp_email_host: </label>                              
                                    <input type="text" name="smtp_email_host" id="smtp_email_host" class="form-control" value="<?php echo $smtp_email_host; ?>">
                                    
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">email_envio_fatura: </label>                              
                                    <input type="email" name="email_envio_fatura" id="email_envio_fatura" class="form-control" value="<?php echo $email_envio_fatura; ?>">
                                    
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">senha_email_envio: </label>                              
                                    <input type="text" name="senha_email_envio" id="senha_email_envio" class="form-control" value="<?php echo $senha_email_envio; ?>">
                                    
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">nome_email_envio: </label>                              
                                    <input type="text" name="nome_email_envio" id="nome_email_envio" class="form-control" value="<?php echo $nome_email_envio; ?>">
                                    
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">assunto_email_envio: </label>                              
                                    <input type="text" name="assunto_email_envio" id="assunto_email_envio" class="form-control" value="<?php echo $assunto_email_envio; ?>">
                                    
                            </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">msg_body_email_envio: </label>                              
                                    <textarea name="msg_body_email_envio" id="msg_body_email_envio" class="form-control"><?php echo $msg_body_email_envio; ?></textarea>                                
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