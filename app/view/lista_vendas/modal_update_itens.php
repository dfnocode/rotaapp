<?php
    if($_GET['openmodal'] == 1){ 
        $up_item = $_GET['iditem'];
        $up_prod = $_GET['idprod'];
        $up_descprod = $_GET['descprod'];
        $up_qtde = $_GET['qtde'];
        $up_desc = $_GET['desconto'];
        $up_pedido = $_GET['numero'];

        $up_valorunit = $_GET['valUnit'];
        $up_unidade = $_GET['prodUnid'];
        
      echo '<script>confirm("'.$up_item.' Id Prod: '.$up_prod.' Produto: '.$up_descprod.' Qtde: '.$up_qtde.' Desconto: '.$up_desc.' Unidade: '.$up_unidade.' Valor Unitario: '.$up_valorunit.'"); die("merda");</script>';
        
?>

<script>
$(function() {
    var pedido2 = "<?php echo $up_pedido; ?>";
    var item2 = "<?php echo $up_item; ?>";
    var idprod2 = "<?php echo $up_prod; ?>";
    var ProdutoDescricao = "<?php echo $up_descprod; ?>";
    var qtde2 = "<?php echo $up_qtde; ?>";
    var desconto2 = "<?php echo $up_desc; ?>";
    var precoprod2 = "<?php echo $up_valorunit; ?>";
    var unidade2 = "<?php echo $up_unidade; ?>";

    $('#id_pedido').val(pedido2);
    $('#num_pedido').val(pedido2);
    $('#id_item_pedido').val(item2);
    $('#id_do_produto').val(idprod2);
    $('.form-field-product-desc').val(ProdutoDescricao);

    $('#id_produto_i').text(id_prod);
    $('#id_produto_i').val(ProdutoDescricao);

    $('#qtde_i').val(qtde2);
    $('#desconto_i').val(desconto2);
    $('#unidade_produto').val(unidade2);
    $('#preco_produto').val(precoprod2);


    $('#edit_itens_pedido').modal('show');
    $("#atualiza_produto").show();
});
</script>

<?php         
    }
?>


<!-- Modal -->
<div class="modal fade" id="edit_itens_pedido" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle">Editar Item do Pedido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="update_itens_pedido" name="update_itens_pedido" method="POST" class="form-horizontal">
                <input type="hidden" name="id_do_produto" id="id_do_produto" class="form-field-product-id">
                <input type="hidden" name="desc_do_produto" id="desc_do_produto" class="form-field-product-desc">
                <input type="hidden" name="id_item_pedido" id="id_item_pedido">
                <input type="hidden" name="id_pedido" id="id_pedido">

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="inputName">Produto</label>
                                <div class="input-group mb-3 input-group-sm">
                                    <div class="input-group-prepend" id="btn-edit-produto">

                                        <button title='Editar' type='button'
                                            class='btn btn-warning copiar atualizarproduto' data-toggle='modal'
                                            data-target='#edit_produto' id="atualiza_produto">
                                            <i class='fas fa-edit'></i></button>
                                    </div>
                                    <select name="id_produto_i" id="id_produto_i" class="form-control select-produtos">
                                        <option value=""></option>
                                        <?php 
                                       
                                       $query = "SELECT id, descricao, preco, unidade FROM tbl_produtos";
                                        $result = mysqli_query($conexao,$query); 
                                        
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
                                        $preco = $row['preco'];
                                        
                                        $val_unitario = 'R$ '.number_format($preco,2,",",".");
                                        
                                        echo '<option data-id="'.$row['id'].'" data-descricao="'.$row['descricao'].'" data-preco="'.$val_unitario.'" data-unidade="'.$row['unidade'].'" value="'.$row['id'].'">'.$row['descricao'].' - ('.$row['unidade'].')  -  Preço: '.$val_unitario; ?>
                                        </option>
                                        <?php endwhile; ?>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="qtde_i">Quantidade</label>
                                <div class="col-sm-12">
                                    <input type="text" name="qtde_i" id="qtde_i" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="desconto_i">Desconto</label>
                                <div class="col-sm-12">
                                    <input type="text" name="desconto_i" id="desconto_i" class="money form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    
                    <!-- <button type="button" class="btn btn-primary" id="btn-atualiza-item">Atualizar</button> -->
                    <button type="button" class="btn btn-danger" data-dismiss="modal"
                        id="btn-cancel-edit-item">Cancelar</button>

                    <button type="submit" class="btn btn-success">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {

    /*     $("#btn-atualiza-item").click(function() {
            //pegaIdProduto();
            $('#atualiza_produto').show();
          
            var idPedido = $("#id_pedido").val();
            var idItem = $("#id_item_pedido").val();
            var idProduto = $("#id_do_produto").val();
            var idDescProd = $.trim($("#descricao_produto").val());
            var idQtde = $("#qtde_i").val();
            var idDesconto = $("#desconto_i").val();

            var idValorProd = $("#preco_produto").val();
            var idUnidProd = $("#unidade_produto").val();
        
            window.location = window.location.href + "&openmodal=1&iditem=" + idItem + "&idprod=" + idProduto + "&descprod=" + idDescProd + "&qtde=" + idQtde + "&desconto=" + idDesconto + "&valUnit=" + idValorProd + "&prodUnid=" + idUnidProd;
          
            $("#edit_itens_pedido").modal({
                            show: true
            });
        }); */

    $("#btn-cancel-edit-item").click(function() {
        //pegaIdProduto();
        var valor7 = '';
        var prodSel2 = $('#prod_select').val();

        if (prodSel2 == '1') {
            location.reload();
        } else {
            $("#prod_select").val(valor7);
        }


    });

    /*
 
    $("#cEditItens").click(function() {
        //pegaIdProduto();
        $("#edit_itens_pedido").modal({ 
            show: true
        });
    }); */


    /* $("#atualiza_produto").click(function() {
    var selectDesconto = $("#desconto_i").val();

    if (selectDesconto == "") {
        selectDesconto = "R$ 0,00";
    } else {
        selectDesconto = $("#desconto_i").val();

    }
    $("#desconto_i").val(selectDesconto);

}); */
});
</script>

<script>
$('.select-produtos').change(function() {
    $('.form-field-product-id').val(this.value == 0 ? '' : this.value);
    $('#id_produto_e').val(this.value == 0 ? '' : this.value);


    var selectIdFatura = $('#id_item_pedido').val();
    /* var selectProdDesc = $(this).children("option:selected").text(); */
    var selectIdProduto = $(this).find(':selected').attr('data-id');
    var selectProdDesc = $(this).find(':selected').attr('data-descricao');
    var selectValUnitario = $(this).find(':selected').attr('data-preco');
    var selectUnidade = $(this).find(':selected').attr('data-unidade');

    var selectQtde = $("#qtde_i").val();
    var selectDesconto = $("#desconto_i").val();

    if (selectDesconto == "") {
        selectDesconto = "R$ 0,00";
    } else {
        selectDesconto = $("#desconto_i").val();
    }
    //var selectQtde = $("qtde_i").val();



    /*  alert("Produto: " + $.trim(selectProdDesc) + "Unidade: " + selectUnidade + "Valor: " + selectValUnitario + "Desconto: " + selectDesconto); */

    $('#item_pedido_e').val(selectIdFatura);
    $('#id_do_produto').val(selectIdProduto);
    $('#preco_produto').val(selectValUnitario);
    $('#val_produto').val(selectValUnitario);
    $('#preco_antigo').val(selectValUnitario);
    $('.form-field-product-desc').val(selectProdDesc);
    $('#descricao_produto').val(selectProdDesc);
    $('#unidade_produto').val(selectUnidade);
    $('#prod_select').val("1");

    //$("#desconto_i").val(selectDesconto);

    $("#desconto_e").val(selectDesconto);
    $("#qtde_e").val(selectQtde);

    //$("#atualiza_produto").show();

});

$(document).ready(function() {
    $("#atualiza_produto").click(function() {
        //pegaIdProduto();
        $("#edit_itens_pedido").modal("hide");

        var desconto4 = $('#desconto_i').val();
        var qtde4 = $('#qtde_i').val();
        var itempedido4 = $('#id_item_pedido').val();

        $("#item_pedido_e").val(itempedido4);
        $("#qtde_e").val(qtde4);
        $("#desconto_e").val(desconto4);
    });


    $(".atualizarproduto").click(function() {
        $("#edit_itens_pedido").css("display", "none");
    });

});
</script>

<script>
$(document).ready(function() {
    $(".money-in").maskMoney({
        prefix: "",
        decimal: ",",
        thousands: "."
    });
    $("input[type='text']").click(function() {
        $(this).select();
    });
    $("input[type='number']").click(function() {
        $(this).select();
    });
});
</script>