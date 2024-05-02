<!-- Modal -->
<div class="modal fade show" id="modalDelete" tabindex="-1" role="dialog"
    aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Excluir Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="delete_" name="delete_" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                  <input type="hidden" name="id_forma" id="id_forma_del" value="">
                  <label> Deseja realmente excluir este Registro?</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </form>
        </div>
    </div>
</div>