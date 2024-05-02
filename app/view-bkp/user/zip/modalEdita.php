<!-- Modal -->
<div class="modal fade" id="update_user" tabindex="-1" role="dialog"
    aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update_" name="update_" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_user" id='id_user'>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Nome</label>
                                <div class="col-sm-12">
                                    <input type="text" name="edit_nome" id="edit_nome" class="form-control"
                                        placeholder="Nome" required>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputEmail3">Email</label>
                                <div class="col-sm-12">
                                    <input type="email" name="edit_email" id="edit_email" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <?php
                                $path = dirname(__FILE__);
                                $path .= '/listaGrupos2.php';
                                include_once($path);
                        ?>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputPass">Senha</label>
                                <div class="col-sm-12">
                                    <input type="password" name="senha" id="senha" class="form-control"
                                        placeholder="***" required>
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