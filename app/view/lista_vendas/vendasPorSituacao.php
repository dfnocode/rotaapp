<!-- Modal -->
<div class="modal fade" id="vendas-por-situacao" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="janelaModal">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Pedidos de Venda Por Situação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <button type="button" class="btn btn-outline-secondary" onclick="aumentaModal()" > <i class="fas fa-eye"></i></button>
            </div>
            
                <iframe src="./select-ajax/user/index.php" width="100%" height="100%" id="modalSituacao" style="border:none;">
                </iframe>
        </div>
    </div>
</div>



<script>

function aumentaModal() {
   $("#janelaModal").height(650);       
      
    }

</script>

<script>

$(document).ready(function() {
        
    $('#vendas-por-situacao').on('shown.bs.modal', function() {
        
            $("#janelaModal").height(768);
            
        });
    });


</script>