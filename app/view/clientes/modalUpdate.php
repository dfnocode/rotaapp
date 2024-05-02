<!-- Modal -->
<div class="modal fade" id="edit_cliente" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_cliente" name="update_cliente" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_cliente" id="id_cliente" value="">
                      
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Registro</label>                             
                                    <input type="date" name="registro_cliente" id="registro_cliente" class="form-control">                               
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Nome</label>
                              
                                    <input type="text" name="nome_cliente" id="nome_cliente" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Email</label>
                                
                                    <input type="text" name="email_cliente" id="email_cliente" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Telefone</label>
                           
                                    <input type="text" name="telefone_cliente" id="telefone_cliente" class="form-control">
                                
                            </div>
                        </div>
                      
                        <div class="col-md-5">
                             <div class="form-group">
                                <label for="inputName">Fantasia</label>
                             
                                    <input type="text" name="fantasia_cliente" id="fantasia_cliente" class="form-control">
                              
                            </div>
                        </div>
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">CNPJ/CPF</label>                             
                                    <input type="text" name="cnpjcpf_cliente" id="cnpjcpf_cliente" class="form-control">
                               
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">ID/RG</label>                           
                                    <input type="text" name="idrg_cliente" id="idrg_cliente" class="form-control">                               
                            </div>
                        </div>

                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Endereço</label>
                               
                                    <input type="text" name="endereco_cliente" id="endereco_cliente" class="form-control">
                               
                            </div>
                        </div>
                        <div class="col-md-1">
                             <div class="form-group">
                                <label for="inputName">N°</label>
                               
                                    <input type="text" name="numero_cliente" id="numero_cliente" class="form-control">
                                
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Bairro</label>                               
                                    <input type="text" name="bairro_cliente" id="bairro_cliente" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Cidade</label>                               
                                    <input type="text" name="cidade_cliente" id="cidade_cliente" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-1">
                             <div class="form-group">
                                <label for="inputName">UF</label>                               
                                    <input type="text" name="uf_cliente" id="uf_cliente" class="form-control">                             
                            </div>
                        </div>

                        
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Complemento</label>                               
                                    <input type="text" name="complemento_cliente" id="complemento_cliente" class="form-control">                               
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">CEP</label>                               
                                    <input type="text" name="cep_cliente" id="cep_cliente" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Situação</label>                               
                                                              
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">Celular</label>                               
                                    <input type="text" name="celular_cliente" id="celular_cliente" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Contatos</label>                               
                                    <input type="text" name="contatos_cliente" id="contatos_cliente" class="form-control">                             
                            </div>
                        </div>

                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Website</label>                               
                                    <input type="text" name="website_cliente" id="website_cliente" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Fax</label>                               
                                    <input type="text" name="fax_cliente" id="fax_cliente" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Email/Nfe</label>                               
                                    <input type="text" name="emailnfe_cliente" id="emailnfe_cliente" class="form-control">                             
                            </div>
                        </div>
                        <div class="col-md-3">
                             <div class="form-group">
                                <label for="inputName">Obs</label>                               
                                    <input type="text" name="obs_cliente" id="obs_cliente" class="form-control">                             
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