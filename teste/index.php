<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>teste</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include 'app-sql-conn.php'; ?>


        <?php
        
        
       /*  $servidor = "localhost";
        $bancoDeDados = "webapp";
        $usuario = "root";
        $senha = ""; */
        $servidor = "35.239.195.119";
        $bancoDeDados = "laravelAuth";
        $usuario = "rotadb24";
        $senha = "buceta";
        $conn = App_Conect_DB($servidor,$usuario,$senha,$bancoDeDados);

       /*  $sql = "CREATE TABLE MyGuests (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            
            if ($conn->query($sql) === TRUE) {
              echo "Table MyGuests created successfully";
            } else {
              echo "Error creating table: " . $conn->error;
            }
            
            $conn->close(); */


      /*   $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "jcferias";

        $conn = App_Conect_DB ($servername, $username, $password, $dbname); 


        //tbl_grupousuarios    tbl_pessoas
        SelectTableAll ($conn,"tbl_grupousuarios"); */

     /*    $servername = "162.241.2.118";
        $username = "lemonp41_app99adm";
        $password = "4dNC.T&2U*Tw";
        $dbname = "lemonp41_wbapp"; */

        //App_Conect_DB ($servername, $username, $password, $dbname); 
        
        ?>
        <script src="" async defer></script>
    </body>
</html>
