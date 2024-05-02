<?php
session_start();



if(isset($_GET['id'])) {

    $vendedor = $_GET['id'];
    
    $sql = "SELECT count(*) as vendedor_homologado FROM tbl_users WHERE id = '$vendedor'";
    
    $con = mysqli_connect('localhost','root','','rotadb24');
  
    $result = mysqli_query($con,$sql); 
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) : 
    $resp = $row['vendedor_homologado'];                           
    endwhile;

    echo $resp;
    
  
}



 


?>