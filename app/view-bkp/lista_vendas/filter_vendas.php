<!-- Modal FILTER_VENDAS -->

<script>


function showPorVendedor(str) {
  if (str == "") {
    document.getElementById("respHint").innerHTML = "";
    document.getElementById("titulo-filtro").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("respHint").innerHTML = this.responseText;
        var opt = document.getElementById("vendedor_cliente");
        document.getElementById("titulo-filtro").innerHTML = "Vendedor: " + opt.options[opt.selectedIndex].text;
      }
    };
    xmlhttp.open("GET","select-ajax/getPorVendedor.php?q="+str,true);
    xmlhttp.send();
  }
}

</script>

<div class="modal fade" id="filterVendas" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="filterVendasModal">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalCenterTitle"><i class="fas fa-filter"> </i> Vendas por:</h5>
            </div>   
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12 situacao-label">
                            <div class="form-group">
                                <label for="vendedor_cliente">Vendedor</label>                 
                                <?php 
                                    if ($_SESSION['funcao'] == 'Gerente') {                   

                                        echo '<select name="vendedor_cliente" id="vendedor_cliente" class="form-control" onchange="showPorVendedor(this.value)">';                           
                                
                                        include "../../config/database/conexao2.php"; //Conexão com wordpress
                                        $sql_vendedores = "SELECT wp_users.ID as id, wp_users.display_name as nome
                                        FROM wp_users INNER JOIN wp_usermeta 
                                        ON wp_users.ID = wp_usermeta.user_id 
                                        WHERE wp_usermeta.meta_key = 'wp_capabilities' 
                                        AND (wp_usermeta.meta_value LIKE '%shop_manager%' 
                                        OR wp_usermeta.meta_value LIKE '%vendedor%') 
                                        ORDER BY wp_users.user_nicename";
                                        $result = mysqli_query($conexao,$sql_vendedores); 
                                        //todos vendedores (qualquer vendedor)
                                        echo '<option value="0">Qualquer Vendedor</option>';                               
                                        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) :
                                            echo '<option value="'.$row['id'].'">'.$row['nome'].'</option>';
                                        endwhile;
                                        echo '</select>';
                                    }
                                    else {
                                        echo '<input type="text" readonly="readonly" name="vendedor_cliente" id="vendedor_cliente" value="'.$_SESSION['vendedor'].'" class="form-control">';
                                    }
                                    ?> 
                                                                                     
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>           
        </div>       
    </div>
</div>

<script>

$(document).ready(function() {
        
    $('#filterVendas').on('shown.bs.modal', function() {
        
        var opcao = $('#vendedor_cliente').val();
        showPorVendedor(opcao);
            
        });
    });


</script> 