<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

//Sessão usuário
session_start();
$login = $_SESSION['email'];

//Dados do formulário
$imagem = $_POST['nome_imagem'];

//Cosulta dados ftp
$query = "SELECT  host, usuario, senha from tbl_ftp";
$result = mysqli_query($conexao,$query);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
   $host = $row['host'];
   $usuario = $row['usuario'];
   $senha = $row['senha'];
}

//Dados do formulário
$file = "/www/jc/app/includes/dist/img/img_empreendimentos/$imagem";

// Define a conexão básica
$connect = ftp_connect($host);

// login com nome de usuário e senha
$login_result = ftp_login($connect, $usuario, $senha);

if (ftp_login($connect, $usuario, $senha)) {
  // tenta excluir $file
   if (ftp_delete($connect, $file)) {

      $queryDelete = "DELETE FROM tbl_imagens_Empreendimento where imagem = '".$imagem."'";
      mysqli_query($conexao, $queryDelete);
      echo "sucesso";

   } 
} else {
   echo "erro";
}



// fecha a conexão
ftp_close($connect);

?>