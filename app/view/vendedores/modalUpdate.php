<!-- Modal -->
<div class="modal fade" id="edit_vendedor" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar vendedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_vendedor" name="update_vendedor" method="POST" class="form-horizontal" >
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="id_vendedor" id="id_vendedor" value="">
                        <div class="col-md-4">
                             <div class="form-group">
                                <label for="inputName">Id</label>                             
                                    <input type="text" name="id_vend" id="id_vend" class="form-control" readonly="readonly">
                               
                            </div>
                        </div>
                        <div class="col-md-2">
                             <div class="form-group">
                                <label for="inputName">#</label>                             
                                    <input type="text" name="status_vendedor" id="status_vendedor" class="form-control" value="">
                               
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="inputName">Status</label>                             
                                    <input type="text" name="status" id="status" class="form-control">
                               
                            </div>
                        </div>
                       
                     
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Nome</label>
                              
                                    <input type="text" name="nome_vendedor" id="nome_vendedor" class="form-control">                                
                            </div>
                        </div>
                        <div class="col-md-12">
                             <div class="form-group">
                                <label for="inputName">Email</label>
                                
                                    <input type="email" name="email_vendedor" id="email_vendedor" class="form-control">
                                
                            </div>
                        </div>
                      
                       
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn-cancelar" onclick="reseta_status()">Cancelar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

function reseta_status (){
    $('#status_vendedor').val('');  
    $('#status').val('');
}
</script>
