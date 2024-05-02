<!-- Modal -->
<div class="modal fade show" id="delete" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Excluir Item no Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delete_" name="delete_" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    
                   <input type="hidden" name="id_delete" id="id_delete" value=""> 
                       <label> Deseja realmente excluir este Item do Pedido?</label>                       
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>