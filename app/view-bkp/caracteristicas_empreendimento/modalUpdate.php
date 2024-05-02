<!-- Modal

 <div class="modal fade col-lg-12" id="divCadastros" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="padding:10px">


<div class="modal fade show" id="update" tabindex="-1" role="dialog"
    aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">


-->
<div class="modal fade show" id="update" tabindex="-1" role="dialog"
    aria-labelledby="ModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update" name="update" action="" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="id_update" id='id_update'>
                    <div class="form-group">
                        <label for="inputName">Nome</label>
                        <input type="text" name="nome_update" id="nome_update" class="form-control" value="" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>