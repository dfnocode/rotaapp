<!-- Modal -->
<div class="modal fade" id="edit_produto" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Atualizar Produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" id="update_produto" name="update_produto" method="POST" class="form-horizontal">


                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="prod_select" id="prod_select" value="">

                        <input type="hidden" name="item_pedido_e" id="item_pedido_e" value="">
                        <input type="hidden" name="desconto_e" id="desconto_e" value="">
                        <input type="hidden" name="qtde_e" id="qtde_e" value="">
                        <input type="hidden" name="num_pedido" id="num_pedido" value="">

                        <input type="hidden" name="id_produto_e" id="id_produto_e" value="">
                        <input type="hidden" name="val_produto" id="val_produto" value="">
                        <input type="hidden" name="preco_antigo" id="preco_antigo" value="">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Descrição</label>
                                <input type="text" name="descricao_produto" id="descricao_produto" value=""
                                    class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Unidade</label>
                                <input type="text" name="unidade_produto" id="unidade_produto" value=""
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputName">Valor Unitário</label>
                                <input type="text" name="preco_produto" id="preco_produto" value=""
                                    class="money form-control">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <!--   <select class="form-control form-field-username form-field-users">
<option class="form-field-first-option" value="0" selected="selected">Select User...</option>
<option value="1">Peter Fel</option> 
<option value="2">Mark Getty</option>
</select> 
<input name="user_id" id="user_id" class="form-control form-field-user-id" type="number"> -->
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        id="cancela_edit_prod">Cancelar</button>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
function pegaIdProduto(id) {
    alert(id);
}
</script>



<script>
$(document).ready(function() {
    $(".money").maskMoney({
        prefix: "R$ ",
        decimal: ",",
        thousands: "."
    });
    $("input[type='text']").click(function() {
        $(this).select();
    });


    /*   var produto = $("#id_produto_e").text(); */


    $("#cancela_edit_prod").click(function() {
        //pegaIdProduto();
        var Desconto3 = $("#desconto_i").val();
        var precoAntigo = $("#val_produto").val();

        if (Desconto3 == "") {
            Desconto3 = "R$ 0,00";
        } else {
            Desconto3 = $("#desconto_i").val();

        }
        $("#desconto_i").val(Desconto3);
        $("#preco_produto").val(precoAntigo);
        $("#val_produto").val(precoAntigo);
        $("#edit_itens_pedido").css("display", "block");
        $("#edit_itens_pedido").modal({
            show: true
        });




    });

    $('#edit_produto').on('shown.bs.modal', function() {
        $('#preco_produto').trigger('focus');
        
    });

    $(document).ready(function() {
        
                
        $("#preco_produto").focus(function(){
            var valor = $("#preco_produto").val();
            $("#val_produto").val(valor);

        });

        $("#preco_produto").keyup(function() {
            //$("#val_produto").css("background-color", "pink");
            var valor = $("#preco_produto").val();
            $("#val_produto").val(valor);
        });

        $("#preco_produto").keydown(function() {
            //$("#val_produto").css("background-color", "yellow");
            var valor = $("#preco_produto").val();
            $("#val_produto").val(valor);
        });

       /*  $("#preco_produto").focus(function() {

            $("#labvalprod").css("display", "block"); //.fadeOut(2000);
        }); */

        $("#preco_produto").keypress(function() {
            var valor = $("#preco_produto").val();
            $("#val_produto").val(valor);
        });
    });

});
</script>