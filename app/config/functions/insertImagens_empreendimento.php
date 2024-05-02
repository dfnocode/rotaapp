<?php
include "../database/conexao.php"; //Conexão

//Sessão usuário
session_start();
$login = $_SESSION['email'];



//Dados do formulário
$id_empreendimento = $_POST['codigo'];


//diretório para salvar as imagens
$path = dirname(__FILE__);
$path .= "/../../includes/dist/img/img_empreendimentos"; 


//Verificar a existência do diretório para salvar os arquivos e informa se o caminho é um diretório
if(!is_dir($path)){ 
    echo "Pasta $path nao existe";
}else{    
    $arquivo = isset($_FILES['arquivos']) ? $_FILES['arquivos'] : FALSE;
    //loop para ler os arquivos
    for ($controle = 0; $controle < count($arquivo['name']); $controle++){        
        $destino = $path."/".$arquivo['name'][$controle];
        $filename = $_FILES['arquivos']['name'][$controle];
        //realizar o upload da imagem em php
        //move_uploaded_file — Move um arquivo enviado para uma nova localização
        if(move_uploaded_file($arquivo['tmp_name'][$controle], $destino)){
            
            ####Registra Arquivo
            $query3 = "INSERT INTO tbl_imagens_Empreendimento (id_empreendimento, imagem) VALUES ('".$id_empreendimento."','".$filename."')";
            mysqli_query($conexao, $query3) or die (mysqli_error($conexao));
            
        }
    }
     
}

//Registra Log
// Registra Log
$queryLog = "INSERT INTO tbl_logs (acao) VALUES ('O usuário $login atualizou o empreendimento ($nome).')";
mysqli_query($conexao,$queryLog);

header("Location: ../../view/listaempreendimentos");