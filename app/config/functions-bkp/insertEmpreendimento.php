<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include "../database/conexao.php"; //Conexão

//Registra emprendimentos
$nome = $_POST['nome'];
$informacoes = $_POST['informacoes'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


$query = "INSERT INTO tbl_empreendimento (nome, informacoes, cep, logradouro, bairro, cidade, uf, latitude, longitude)
            VALUES ('$nome', '$informacoes', '$cep', '$rua', '$bairro', '$cidade', '$uf', '$latitude', '$longitude')";

//Registra empreendimento
if (mysqli_query($conexao, $query)){

    $id_empreendimento = mysqli_insert_id($conexao);
   
    // Registra AMENIDADES
    $checkboxes = isset($_POST['amenidades']) ? $_POST['amenidades'] : array();
    foreach($checkboxes as $value) {
      
        $query2 = "INSERT INTO tbl_amenidades_Empreendimento (id_amenidade, id_empreendimento) VALUES ('$value','$id_empreendimento')";
        mysqli_query($conexao, $query2);
    }

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
    header("location: ../../view/listaeemprendimentos");

         
}

