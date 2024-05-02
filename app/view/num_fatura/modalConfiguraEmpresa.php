<!-- Modal -->
<div class="modal fade" id="config_fatura_empresa" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Dados da Empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_fatura_empresa" name="update_fatura_empresa" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_num_fatura2" id="id_num_fatura2" value="<?php echo $id_fatura ?>">                     
                    
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Nome da Empresa: </label>                              
                                    <input type="text" name="nome_empresa" id="nome_empresa" class="form-control" value="<?php echo $nome_empresa; ?>">                                
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Documentação: </label>                              
                                    <input type="text" name="documentacao_empresa" id="documentacao_empresa" class="form-control" value="<?php echo $doc_empresa; ?>">                                
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Endereço Completo: </label>                              
                                    <textarea name="endereco_empresa" id="endereco_empresa" class="form-control"><?php echo $endereco_empresa; ?>
                                    </textarea>
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