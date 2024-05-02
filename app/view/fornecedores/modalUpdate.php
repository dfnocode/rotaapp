<!-- Modal -->
<div class="modal fade" id="edit_fornecedor" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_fornecedor" name="update_fornecedor" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_fornecedor" id="id_fornecedor" value="">
                      
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Registro</label>                             
                                    <input type="date" name="registro_fornecedor" id="registro_fornecedor" class="form-control">                               
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Nome</label>
                              
                                    <input type="text" name="nome_fornecedor" id="nome_fornecedor" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Email</label>
                                
                                    <input type="text" name="email_fornecedor" id="email_fornecedor" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Telefone</label>
                           
                                    <input type="text" name="telefone_fornecedor" id="telefone_fornecedor" class="form-control">
                                
                            </div>
                        </div>
                      
                        <div class="col-md-5">
                             <div class="form-group">
                                <label for="inputName">Fantasia</label>
                             
                                    <input type="text" name="fantasia_fornecedor" id="fantasia_fornecedor" class="form-control">
                              
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">CNPJ/CPF</label>                             
                                    <input type="text" name="cnpjcpf_fornecedor" id="cnpjcpf_fornecedor" class="form-control">
                               
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">ID/RG</label>                           
                                    <input type="text" name="idrg_fornecedor" id="idrg_fornecedor" class="form-control">                               
                            </div>
                        </div>

                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Endereço</label>
                               
                                    <input type="text" name="endereco_fornecedor" id="endereco_fornecedor" class="form-control">
                               
                            </div>
                        </div>
                        <div class="col-md-1">
                             <div class="form-group">
                                <label for="inputName">N°</label>
                               
                                    <input type="text" name="numero_fornecedor" id="numero_fornecedor" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Bairro</label>                               
                                    <input type="text" name="bairro_fornecedor" id="bairro_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Cidade</label>                               
                                    <input type="text" name="cidade_fornecedor" id="cidade_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-1">
                             <div class="form-group">
                                <label for="inputName">UF</label>                               
                                    <input type="text" name="uf_fornecedor" id="uf_fornecedor" class="form-control">                             
                            </div>
                        </div>

                        
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Complemento</label>                               
                                    <input type="text" name="complemento_fornecedor" id="complemento_fornecedor" class="form-control">                               
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">CEP</label>                               
                                    <input type="text" name="cep_fornecedor" id="cep_fornecedor" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Situação</label>                               
                                    <input type="text" name="situacao_fornecedor" id="situacao_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Celular</label>                               
                                    <input type="text" name="celular_fornecedor" id="celular_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Contatos</label>                               
                                    <input type="text" name="contatos_fornecedor" id="contatos_fornecedor" class="form-control">                             
                            </div>
                        </div>

                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Website</label>                               
                                    <input type="text" name="website_fornecedor" id="website_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Fax</label>                               
                                    <input type="text" name="fax_fornecedor" id="fax_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Email/Nfe</label>                               
                                    <input type="text" name="emailnfe_fornecedor" id="emailnfe_fornecedor" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Obs</label>                               
                                    <input type="text" name="obs_fornecedor" id="obs_fornecedor" class="form-control">                             
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