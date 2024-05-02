<?





// se existe comissao RETORNA 1, SENAO EXISTE RETORNA 0
function vendedor_registrado_no_sistema($con, $id_vendedor_wordpress){
    $sql = "SELECT count(*) as vendedor_homologado FROM tbl_users WHERE id = '$id_vendedor_wordpress'";
  
     $result = mysqli_query($con,$sql); 
     while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
     $resp = $row['vendedor_homologado'];                           
     endwhile;
     
     return $resp;
  }
?>