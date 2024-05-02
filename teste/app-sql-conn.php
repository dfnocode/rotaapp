

<?php

     /*
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "local";
    

   
    $servername = "localhost";
    $username = "lemonp41_app99adm";
    $password = "4dNC.T&2U*Tw";
    $dbname = "lemonp41_wbapp";
    */

function App_Conect_DB ($servername, $username, $password, $dbname) {
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else { 
        echo "BANCO DE DADOS CONECTADO!<br>";
        return $conn; }
}

function App_Desconect_DB ($conn) {
    $conn->close();
}



function SelectTableAll ($conn, $tabela) {
    //tbl_pessoas
    $sql = "SELECT * FROM {$tabela}";

    if ($result = mysqli_query($conn,$sql)) {      
        
        $arrConsulta = mysqli_fetch_all($result);
        
        //echo echoDivClass('Imprimindo Resultados ...','db-readmsg');       
    }
    mysqli_free_result($result);  
    mysqli_close($conn);
    echo "<div><pre>".print_r($arrConsulta)."</pre></div>";
    return $arrConsulta;
}



//App_Conect_DB ($servername, $username, $password, $dbname); 



?>

