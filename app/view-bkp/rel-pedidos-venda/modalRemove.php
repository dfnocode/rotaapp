<!-- Modal -->
<div class="modal fade" id="delete_imagem" tabindex="-1" role="dialog"
    aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Remover Imagem</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="del_imagem" name="del_imagem" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                    <label> Deseja realmente excluir a imagem ?<label>
                        <input type="hidden" name="nome_imagem" id='nome_imagem' value="">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>